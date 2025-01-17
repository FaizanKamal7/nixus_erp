<?php

namespace Modules\BusinessService\Http\Controllers\Onboarding;

use App\Enum\BusinessStatusEnum;
use App\Enum\ModulesTitleEnum;
use App\Enum\RoleNamesEnum;
use App\Http\Helper\Helper;
use App\Interfaces\AreaInterface;
use App\Interfaces\CityInterface;
use App\Interfaces\CountryInterface;
use App\Interfaces\RoleInterface;
use App\Interfaces\StateInterface;
use App\Interfaces\UserInterface;
use App\Interfaces\UserRoleInterface;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\BusinessService\Interfaces\BranchCoverageInterface;
use Modules\BusinessService\Interfaces\BranchInterface;
use Modules\BusinessService\Interfaces\BusinessCategoryInterface;
use Modules\BusinessService\Interfaces\BusinessInterface;
use Modules\BusinessService\Interfaces\BusinessUserInterface;
use Modules\BusinessService\Interfaces\OnboardingInterface;
use Modules\BusinessService\Interfaces\BranchCoverageDeliverySlotsInterface;
use Illuminate\Support\Facades\Session;
use Modules\BusinessService\Http\Requests\BusinessRequest;
use Modules\FinanceService\Interfaces\BusinessWalletInterface;

class BusinessOnboardingController extends Controller
{

    private OnboardingInterface $onboardingRepository;
    private BranchInterface $branchRepository;
    private BusinessCategoryInterface $businessCategoryRepository;
    private UserInterface $userRepository;
    private BusinessInterface $businessRepository;
    private BusinessUserInterface $businessUserRepository;
    private BranchCoverageInterface $branchCoverageRepository;
    private UserRoleInterface $userRoleRepository;
    private CountryInterface $countryRepository;
    private StateInterface $stateRepository;
    private CityInterface $cityRepository;
    private AreaInterface $areaRepository;
    private BranchCoverageDeliverySlotsInterface $branchCoverageDeliverySlotRepository;
    private BusinessWalletInterface $businessWalletRepository;
    private RoleInterface $roleRepository;
    private Helper $helper;




    public function __construct(
        OnboardingInterface $onboardingRepository,
        BranchInterface $branchRepository,
        BusinessCategoryInterface $businessCategoryRepository,
        UserInterface $userRepository,
        BusinessInterface $businessRepository,
        BusinessUserInterface $businessUserRepository,
        BranchCoverageInterface $branchCoverageRepository,
        UserRoleInterface $userRoleRepository,
        CountryInterface $countryRepository,
        StateInterface $stateRepository,
        CityInterface $cityRepository,
        AreaInterface $areaRepository,
        BranchCoverageDeliverySlotsInterface $branchCoverageDeliverySlotRepository,
        BusinessWalletInterface $businessWalletRepository,
        RoleInterface $roleRepository,
        Helper $helper


    ) {
        $this->onboardingRepository = $onboardingRepository;
        $this->branchRepository = $branchRepository;
        $this->businessCategoryRepository = $businessCategoryRepository;
        $this->userRepository = $userRepository;
        $this->businessRepository = $businessRepository;
        $this->businessUserRepository = $businessUserRepository;
        $this->branchCoverageRepository = $branchCoverageRepository;
        $this->userRoleRepository = $userRoleRepository;
        $this->countryRepository = $countryRepository;
        $this->stateRepository = $stateRepository;
        $this->cityRepository = $cityRepository;
        $this->areaRepository = $areaRepository;
        $this->branchCoverageDeliverySlotRepository = $branchCoverageDeliverySlotRepository;
        $this->businessWalletRepository = $businessWalletRepository;
        $this->roleRepository = $roleRepository;
        $this->helper = $helper;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $countries = $this->countryRepository->getAllActiveCountries();
        $business_categories = $this->businessCategoryRepository->getBusinessCategory();

        return view('businessservice::onboarding.onboarding', ['countries' => $countries, 'business_categories' => $business_categories]);
    }

    public function businessOnboarding(BusinessRequest $request)
    {
        // abort_if(Gate::denies('add_designation'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $request->validated();
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $password = $request->password;
        $buisness_name = $request->buisness_name;
        $logo = $request->logo;
        $card_name = $request->card_name;
        $card_number = $request->card_number;
        $card_expiry_month = $request->card_expiry_month;
        $card_expiry_year = $request->card_expiry_year;
        $card_cvv = $request->card_cvv;
        $business_category_id = $request->category;
        $phone = $request->phone;
        $business_phone = $request->business_phone;
        $address = $request->map_address ?? $request->address;
        $address_country = $request->address_country;
        $address_state = $request->address_state;
        $address_city = $request->address_city;
        $address_area = $request->address_area;
        $latitude = $request->latitude;
        $longitude = $request->longitude;
        $area_coverage_list = $request->area_coverage_list;
        $state_legal_id = $request->state_legal_id;
        $trn_file = $request->trn_file;
        $trn_number = $request->trn_number;
        $trade_licence_file = $request->trade_licence_file;
        $cities = $this->helper->extractCitiesFromCoveragesSelection($area_coverage_list);



        // echo "<pre>" . $latitude . "-" . $longitude . "</pre>";

        // --  Selected address from google map locations
        if ($request->latitude != 0) {
            $map_location_names = $this->helper->getLocationFromCoordinates($latitude, $longitude);
            $db_map_location_ids = $this->helper->findDBLocationsWithNames($map_location_names['country'], $map_location_names['state'], $map_location_names['city'], $map_location_names['area']);

            $address_country = $db_map_location_ids['country_id'] != '' ? $db_map_location_ids['country_id'] : null;
            $address_state = $db_map_location_ids['state_id'] != '' ? $db_map_location_ids['state_id'] : null;
            $address_city = $db_map_location_ids['city_id'] != '' ? $db_map_location_ids['city_id'] : null;
            $address_area = $db_map_location_ids['area_id'] != '' ?  $db_map_location_ids['area_id'] : null;
        }

        // echo "<pre> address_country: " . print_r($address_country, true) . "</pre>";
        // echo "<pre> address_state: " . print_r($address_state, true) . "</pre>";
        // echo "<pre> address_city: " . print_r($address_city, true) . "</pre>";
        // echo "<pre> address_area: " . print_r($address_area, true) . "</pre>";
        // echo "<pre>cities" . json_encode($cities) . "-" . $longitude . "</pre>";
        // dd($area_coverage_list);

        try {
            DB::beginTransaction();
            // --- Adding data in users table
            // abort_if(Gate::denies('add_user'), Response::HTTP_FORBIDDEN, '403 Forbidden');
            $user = $this->userRepository->createUser([
                'name' => $first_name . " " . $last_name,
                'email' =>  $email,
                'phone' =>  $phone,
                'password' => Hash::make($password),
                'isActive' => true
            ], true);
            // TODO
            $role = $this->roleRepository->getRoleByName(RoleNamesEnum::BUSINESS_ADMIN->value);
            $this->userRoleRepository->createUserRole(userId: $user->id, roleId: $role->id);



            // --- Adding data in business table
            // abort_if(Gate::denies('add_user'), Response::HTTP_FORBIDDEN, '403 Forbidden');
            $trade_licence_file_path = $trade_licence_file ?  $this->helper->storeFile($trade_licence_file, ModulesTitleEnum::BUSINESS_SERVICE->value, "Businesses") : null;
            $trn_file_path =   $trn_file ? $this->helper->storeFile($trn_file, ModulesTitleEnum::BUSINESS_SERVICE->value, "Businesses") : null;


            $business = $this->businessRepository->createBusiness(
                name: $buisness_name,
                logo: $logo,
                business_category_id: $business_category_id,
                admin: $user->id,
                status: BusinessStatusEnum::NEW_REQUEST->value,
                state_legal_id: $state_legal_id,
                trn_number: $trn_number,
                trn_file: $trn_file_path,
                trade_licence_file: $trade_licence_file_path,


            );

            // // Adding ternary relation
            $this->businessUserRepository->createBusinessUser(
                business_id: $business->id,
                user_id: $user->id,
            );

            $this->businessWalletRepository->createWallet($business->id);
            $branch = $this->branchRepository->createBranch(
                name: "Main Branch",
                phone: $phone,
                address: $address,
                country_id: $address_country,
                state_id: $address_state,
                city_id: $address_city,
                area_id: $address_area,
                active_status: true,
                is_main_branch: 1,
                business_id: $business->id,
                latitude: $latitude,
                longitude: $longitude
            );
            // echo "<pre>  ================================= </pre>";

            if ($area_coverage_list) {
                foreach ($area_coverage_list as $coverage_list_item) {
                    $cities = $coverage_list_item["city"];
                    $state_id = $coverage_list_item["state_id"];
                    $country_id = $coverage_list_item["country_id"];

                    // $cities = json_decode($cities);
                    foreach ($cities as $city_id) {
                        $areas = $this->areaRepository->getAreasOfCity($city_id);
                        $areas = $areas->toArray();
                        foreach ($areas as $area) {
                            $this->branchCoverageRepository->createBranchCoverage(
                                active_status: 1,
                                area_id: $area['id'],
                                city_id: $city_id,
                                state: $state_id,
                                country: $country_id,
                                branch_id: $branch->id,
                            );

                            // foreach ($coverage_list_item['delivery_slots'] as $delivery_slot_id) {
                            //     $this->branchCoverageDeliverySlotRepository->createBranchCoverageDeliverySlot($branch_coverage->id, $delivery_slot_id);
                            // }
                        }
                    }
                }
            }
            //  Sign in the newly onboarded customer
            $this->signInBusinessAdminUponRegistration($request->get("email"), $request->get("password"), $user->id);
            DB::commit();
            return redirect()->route("business_home")->with("success", "Business added successfully");
        } catch (Exception $exception) {
            Log::error($exception);
            DB::rollback();
            return redirect()->route("business_home")->with("error", "Something went wrong! Contact support");
        }
    }

    public function signInBusinessAdminUponRegistration($email,  $password, $user_id)
    {
        $credentials = ['email' => $email, 'password' => $password];
        $bzn_admin_id = '9959f101-265e-47cd-8d70-2920aa972838';
        if (Auth::attempt($credentials)) {
            $this->userRoleRepository->createUserRole(userId: $user_id, roleId: $bzn_admin_id);
        }
        Session::flash("message", "Invalid email address or password!");
        Session::flash('alert-class', 'alert-danger');
    }

    public function home()
    {
        return view('businessservice::index');
    }

    public function getStates()
    {
        $states = $this->onboardingRepository->getStatesOfCountry($_GET['country_id']);
        return response()->json($states->toArray());
    }

    public function getCities()
    {
        $states = $this->onboardingRepository->getCitiesOfState($_GET['country_id']);
        return response()->json($states->toArray());
    }



    // function getDependentCountryStateCity()
    // {
    //     if (!empty($_POST['id'])) {
    //         // Fetch state data based on the specific country
    //         $country_id = $_POST['id'];

    //         // Fetch state data based on the specific country
    //         $states = $this->onboardingRepository->getStatesOfCountry($country_id);

    //         // Generate HTML of state options list
    //         if ($states->num_rows > 0) {
    //             echo '<option value="">Select State</option>';
    //             while ($row = $states->fetch_assoc()) {
    //                 echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
    //             }
    //         } else {
    //             echo '<option value="">State not available</option>';
    //         }
    //     } elseif (!empty($_POST['state_iso2'])) {

    //         $getStateiso2 = $_POST['state_iso2'];
    //         $sel_country_Val = $_POST['sel_country_id'];

    //         // Fetch state id data based on the specific state iso2 and country code value
    //         $Singlequery = "SELECT * FROM states WHERE iso2 = '" . $getStateiso2 . "' AND country_code = '" . $sel_country_Val . "' AND flag = 1";
    //         $GetIdResult = $link->query($Singlequery);
    //         $singlerow = $GetIdResult->fetch_assoc();

    //         $GetStateID = $singlerow['id'];

    //         // Fetch city data based on the specific state id
    //         $query = "SELECT * FROM cities WHERE state_id = " . $GetStateID . " AND flag = 1 ORDER BY name ASC";
    //         $result = $link->query($query);

    //         // Generate HTML of city options list
    //         if ($result->num_rows > 0) {
    //             echo '<option value="">Select city</option>';
    //             while ($row = $result->fetch_assoc()) {
    //                 echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
    //             }
    //         } else {
    //             echo '<option value="">City not available</option>';
    //         }
    //     }
    // }

    // public function edit($id)
    // {
    //     return view('businessservice::edit');
    // }

    public function pricingCalculator(Request $request)
    {
        return view("businessservice::onboarding.pricing");
    }
}

@extends('layouts.others_master')
@section('title', 'Onboarding')

@section('main_content')


<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Authentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column"
        id="kt_create_account_stepper">
        <!--begin::Aside-->
        <div class="d-flex flex-column flex-lg-row-auto w-xl-400px bg-lighten shadow-sm">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-400px scroll-y">
                <!--begin::Header-->
                <div class="d-flex flex-row-fluid flex-column flex-center p-10 pt-lg-20">
                    <!--begin::Logo-->
                    <a href="#" class="mb-10 mb-lg-20">
                        <img alt="Logo" src="{{ asset('static/media\logos\logo_dark_horizontal.png')}}"
                            class="h-75px logo" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Nav-->
                    <div class="stepper-nav">
                        <!--begin::Step 1-->
                        <div class="stepper-item current" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">1</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Business Account Info</h3>
                                <div class="stepper-desc fw-bold">Setup Your Account Details</div>
                            </div>
                            <!--end::Label-->

                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">2</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Business Info</h3>
                                <div class="stepper-desc fw-bold">Setup Your Account Settings</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 2-->

                        <!--begin::Step 3-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">3</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Extra Detail</h3>
                                <div class="stepper-desc fw-bold">Your Business Related Info</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        {{-- <div class="stepper-item" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">4</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Billing Details</h3>
                                <div class="stepper-desc fw-bold">Set Your Payment Methods</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 4--> --}}
                        <!--begin::Step 5-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <!--begin::Line-->
                            <div class="stepper-line w-40px"></div>
                            <!--end::Line-->
                            <!--begin::Icon-->
                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">5</span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Label-->
                            <div class="stepper-label">
                                <h3 class="stepper-title">Completed</h3>
                                <div class="stepper-desc fw-bold">Woah, we are here</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Step 5-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Header-->

            </div>
            <!--end::Wrapper-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid ">

            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid">
                <!--begin::Wrapper-->
                <div class="w-lg-800px p-10 mx-auto">
                    <!--begin::Form-->
                    <form class="my-auto pb-5" method="post" id="kt_create_account_form"
                        action="{{ route('business_onboarding_add') }}">

                        @csrf
                        <!--begin::Step 1-->
                        <div class="flex-column current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-lg-700px  mx-auto">
                                <!--begin::Heading-->
                                <div class="mb-10 text-center">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-3">Create a business account</h1>
                                    <!--end::Title-->
                                    <!--begin::Link-->
                                    <div class="text-gray-400 fw-bold fs-4">Already have an account?
                                        <a href="/accounts/login/" class="link-primary fw-bolder">Sign in here</a>
                                    </div>
                                    <!--end::Link-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Separator-->
                                <div class="d-flex align-items-center mb-10">
                                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                    <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                </div>
                                <!--end::Separator-->

                                <!--begin::Input group-->
                                <div class="row fv-row mb-7">
                                    <!--begin::Col-->
                                    <div class="col-xl-6 fv-row">
                                        <label class="form-label fw-bolder text-dark fs-6 required">First Name</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="first_name" autocomplete="off" />
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-6 fv-row">
                                        <label class="form-label fw-bolder text-dark fs-6 required">Last Name</label>
                                        <input class="form-control form-control-lg form-control-solid" type="text"
                                            placeholder="" name="last_name" autocomplete="off" />
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <label class="form-label fw-bolder text-dark fs-6 required">Business Name</label>
                                    <input class="form-control form-control-lg form-control-solid" placeholder=""
                                        name="buisness_name" autocomplete="off" />
                                    @error('buisness_name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <label class="form-label fw-bolder text-dark fs-6 required">Email Address</label>
                                    <input class="form-control form-control-lg form-control-solid" placeholder=""
                                        name="email" autocomplete="off" />
                                    @error('email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row" data-kt-password-meter="true">
                                    <!--begin::Wrapper-->
                                    <div class="mb-1">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bolder text-dark fs-6 required">Password</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative mb-3">
                                            <input class="form-control form-control-lg form-control-solid"
                                                type="password" placeholder="" name="password" autocomplete="off" />
                                            <span
                                                class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                data-kt-password-meter-control="visibility">
                                                <i class="bi bi-eye-slash fs-2"></i>
                                                <i class="bi bi-eye fs-2 d-none"></i>
                                            </span>
                                        </div>
                                        <!--end::Input wrapper-->
                                        <!--begin::Meter-->
                                        <div class="d-flex align-items-center mb-3"
                                            data-kt-password-meter-control="highlight">
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                            </div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                            </div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                            </div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                            </div>
                                        </div>
                                        <!--end::Meter-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Hint-->
                                    <div class="text-muted">Use 8 or more characters with a mix of letters,
                                        numbers &amp; symbols.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group=-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-5">
                                    <label class="form-label fw-bolder text-dark fs-6 required">Confirm Password</label>
                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="" name="confirm_password" autocomplete="off" />
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--------------------------------------------------------------------------------->
                        <!--begin::Step 2-->
                        <div class="flex-column" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Buisness Info</h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-muted fw-bold fs-6">If you need more info, please check out
                                        <a href="#" class="link-primary fw-bolder">Help Page</a>.
                                    </div>
                                    <!--end::Notice-->
                                </div>

                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Category</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="category" class="form-select form-select-lg form-select-solid"
                                        data-control="select2" data-placeholder="Select..." data-allow-clear="true"
                                        data-hide-search="true">

                                        @if ($business_categories->count())
                                        @foreach ($business_categories as $business_category)
                                        <option value={{$business_category['id']}}>{{$business_category['name']}}
                                        </option>
                                        @endforeach
                                        @else
                                        <option value="">Category not available</option>
                                        @endif

                                    </select>
                                    <!--end::Input-->
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label required">Phone Number</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input name="phone" class="form-control form-control-lg form-control-solid"
                                        type="numbers" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->


                                <div class="fv-row mb-10">
                                    <label class="form-label required">Address (Business Main Branch Address)</label>
                                    <br>
                                    <div class="form-group row" id="google_map_address_selection">
                                        <input class="form-control form-control-lg form-control-solid"
                                            id="search-location" type="text" placeholder="Enter you address here">
                                        <br><br>
                                        <!--begin::Alert-->
                                        <div class="alert alert-primary d-flex align-items-center p-5">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-shield-tick fs-2hx text-success me-4"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                            <!--end::Icon-->

                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column">
                                                <!--begin::Title-->
                                                <h4 class="mb-1 text-dark">Hints</h4>
                                                <!--end::Title-->

                                                <!--begin::Content-->
                                                <li class="d-flex align-items-center py-2">
                                                    <span class="bullet bullet-dot bg-primary me-5"></span><i> &nbsp You
                                                        can your exact location don't
                                                        show
                                                        up in the search suggestions, search nearest location and drap
                                                        and drop
                                                        pic
                                                        to your exact location.</i>

                                                </li>
                                                <li class="d-flex align-items-center py-2">
                                                    <span class="bullet bullet-dot bg-primary me-5"></span> </span><i>
                                                        &nbsp Use
                                                        <code>CTRL + scroll</code>
                                                        to zoom the map </i>
                                                </li>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Alert -->
                                        <div id="address_map" style="height: 400px; width: 100%;"></div>
                                        <input id="latitude" type="hidden" name="latitude">
                                        <input id="longitude" type="hidden" name="longitude">

                                    </div>
                                    <br>
                                    <div class="form-group row" id="dropdown_address_selection" style="display: none;">
                                        <!--begin::Col-->
                                        <div class="col-xl-4">
                                            <label class="form-label">Country</label>

                                            <!--begin::Input group-->
                                            <select id="address_country" class="form-select form-select-solid"
                                                name="address_country" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true"
                                                onchange="fetchAddressStates()">

                                                <option value="">Select country</option>
                                                @if ($countries->count())
                                                @foreach ($countries as $country)
                                                <option value={{$country['id']}}>{{$country['name']}}
                                                </option>
                                                @endforeach
                                                @else
                                                <option value="">Countries not available</option>
                                                @endif
                                            </select>
                                            <!--end::Input group-->

                                        </div>
                                        <!--end::Col-->
                                        <div class="col-xl-4">
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label">State</label>
                                                <!--end::Label-->
                                                <select id="address_state" name="address_state"
                                                    class="form-select form-select-solid" data-control="select2"
                                                    data-placeholder="Choose" data-allow-clear="true"
                                                    onchange="fetchAddressCities()">
                                                    <option value="">Select State</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--begin::Col-->
                                        <div class="col-xl-4">
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label">City</label>
                                                <!--end::Label-->
                                                <select id="address_city" class="form-select form-select-solid"
                                                    data-control="select2" data-placeholder="Choose city"
                                                    name="address_city" data-allow-clear="true"
                                                    onchange="fetchAddressAreas()">
                                                    <option value="">Select City</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-xl-5">
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label">Areas</label>
                                                <!--end::Label-->
                                                <select id="address_area"
                                                    class="form-select form-select-lg form-select-solid"
                                                    data-control="select2" data-placeholder="Choose Areas"
                                                    name="address_area" data-allow-clear="true">
                                                </select>

                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-7">
                                            <div class="fv-row mb-10">
                                                <label class="form-label">Street Address</label>
                                                <input name="address"
                                                    class="form-control form-control-lg form-control-solid" />
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <p>You can also enter address manually<b>(Not recommended)</b>. If you want to enter
                                        location manually <a onclick="toggleLocationDiv()"><code>Click here</code></a>
                                    </p>

                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--------------------------------------------------------------------------------->
                        <!--begin::Step 3-->
                        <div class="flex-column" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h2 class="fw-bolder text-dark">Business coverage</h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-muted fw-bold fs-6">Please add information for your main business
                                        branch. Select branch coverage areas
                                        <a href="#" class="link-primary fw-bolder">Help Page</a>.
                                    </div>
                                    <!--end::Notice-->
                                </div>



                                <div class="row fv-row mb-7">
                                    <!--begin::Repeater-->
                                    <div id="location_delivery_slots_repeater">
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <div data-repeater-list="area_coverage_list">
                                                <div data-repeater-item>
                                                    <div class="form-group row">
                                                        <!--begin::Col-->
                                                        <div class="col-xl-4">
                                                            <label class="form-label required">Country</label>

                                                            <!--begin::Input group-->
                                                            <select id="country" class="form-select form-select-solid"
                                                                name="country" data-control="select2"
                                                                data-placeholder="Select an option"
                                                                data-allow-clear="true" onchange="fetchStates()">

                                                                <option value="">Select country</option>
                                                                @if ($countries->count())
                                                                @foreach ($countries as $country)
                                                                <option value={{$country['id']}}>{{$country['name']}}
                                                                </option>
                                                                @endforeach
                                                                @else
                                                                <option value="">Countries not available</option>
                                                                @endif
                                                            </select>
                                                            <!--end::Input group-->

                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-xl-4">
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label required">State</label>
                                                                <!--end::Label-->
                                                                <select id="state" name="state"
                                                                    class="form-select form-select-solid"
                                                                    data-control="select2" data-placeholder="Choose"
                                                                    data-allow-clear="true"
                                                                    onchange="fetchCitiesWithMultiSelectOption()">
                                                                    <option value="">Select State</option>


                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-xl-4">
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label required">City</label>
                                                                <!--end::Label-->

                                                                <select id="city"
                                                                    class="form-select form-select-lg form-select-solid"
                                                                    data-control="select2"
                                                                    data-placeholder="Choose City" name="city"
                                                                    data-allow-clear="true" multiple="multiple">
                                                                </select>
                                                                <!--hidden text field-->
                                                                <input type="hidden" id="cities" name="cities" />
                                                            </div>
                                                        </div>
                                                        <!--end::Col-->

                                                        <!--begin::Col-->
                                                        {{-- <div class="col-xl-8">
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label required">Areas</label>
                                                                <!--end::Label-->

                                                                <select id="area"
                                                                    class="form-select form-select-lg form-select-solid"
                                                                    data-control="select2"
                                                                    data-placeholder="Choose Areas" name="area"
                                                                    data-allow-clear="true" multiple="multiple">
                                                                </select>
                                                                <!--hidden text field-->
                                                                <input type="hidden" id="areas" name="areas" />
                                                            </div>
                                                        </div> --}}
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        {{-- <div class="col-xl-8">
                                                            <div class="fv-row mb-10">
                                                                <!--begin::Label-->
                                                                <label class="form-label required">Delivery
                                                                    Slots</label>
                                                                <!--end::Label-->

                                                                <select id="delivery_slots"
                                                                    class="form-select form-select-lg form-select-solid"
                                                                    data-control="select2"
                                                                    data-placeholder="Choose Delivery slots"
                                                                    name="delivery_slots" data-allow-clear="true"
                                                                    multiple="multiple">
                                                                </select>
                                                                <!--hidden text field-->
                                                                <input type="hidden" id="selected_delivery_slots"
                                                                    name="selected_delivery_slots" />
                                                            </div>
                                                        </div> --}}
                                                        <!--end::Col-->

                                                        <div class="col-xl-2">
                                                            <div class="fv-row mb-10">
                                                                <a href="javascript:;" data-repeater-delete
                                                                    class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                                                                    Delete
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="separator mb-6"></div>

                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->



                                        <!--begin::Form group-->
                                        <div class="form-group mt-5">
                                            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                                                <i class="ki-duotone ki-plus fs-3"></i>
                                                Add another coverage area
                                            </a>
                                        </div>
                                        <!--end::Form group-->
                                    </div>
                                </div>
                                <!--end::Repeater-->



                                <div
                                    class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                    <!--begin::Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                    <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                fill="currentColor" />
                                            <rect x="11" y="14" width="7" height="2" rx="1"
                                                transform="rotate(-90 11 14)" fill="currentColor" />
                                            <rect x="11" y="17" width="2" height="2" rx="1"
                                                transform="rotate(-90 11 17)" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1">
                                        <!--begin::Content-->
                                        <div class="fw-bold">
                                            <h4 class="text-gray-900 fw-bolder">You will get notified about all the
                                                pricing details </h4>
                                            <div class="fs-6 text-gray-700">Your branch area coverage and timeslots will
                                                determine pricing for each service. For more details
                                                <a href="#" class="fw-bolder">click here</a>
                                            </div>

                                        </div>
                                        <!--end::Conte  nt-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 3-->
                        <!--------------------------------------------------------------------------------->

                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-15">
                            <div class="mr-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3"
                                    data-kt-stepper-action="previous">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
                                                fill="currentColor" />
                                            <path
                                                d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Previous
                                </button>
                            </div>
                            <div>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">Submit
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-4 ms-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                    transform="rotate(-180 18 13)" fill="currentColor" />
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-lg btn-primary"
                                    data-kt-stepper-action="next">Continue
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-4 ms-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                transform="rotate(-180 18 13)" fill="currentColor" />
                                            <path
                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </button>
                            </div>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                <!--begin::Links-->
                <div class="d-flex flex-center fw-bold fs-6">
                    <a href="#" class="text-muted text-hover-primary px-2" target="_blank">About</a>
                    <a href="#" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
                    <a href="#" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
<!--end::Root-->
@endsection

@section('extra_scripts')
<script src="{{ asset('static/js/custom/authentication/sign-up/onboarding.js')}}"></script>
<script src="{{ asset('static/plugins/custom/utilities/multiselect-dropdown.js')}}"></script>
<script src="{{ asset('static/js/custom/core/locations.js')}}"></script>


<script>
    $(document).ready(function() {
        $('#kt_docs_repeater_basic').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function () {
                $(this).slideDown();
            },

            hide: function (deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    });
</script>
@endsection
<?php

namespace Modules\BusinessService\Repositories;

use Modules\BusinessService\Entities\Business;
use Modules\BusinessService\Interfaces\BusinessInterface;

class BusinessRepository implements BusinessInterface
{
    /**
     * @param $departmentName
     * @param $status
     * @return mixed
     */

    public function createBusiness(
        $name,
        $logo,
        $card_name,
        $card_number,
        $card_expiry_month,
        $card_expiry_year,
        $card_cvv,
        $business_category_id,
        $admin,
    ) {
        $business = Business::create([
            "name" => $name,
            "logo" => $logo,
            "card_name" => $card_name,
            "card_number" => $card_number,
            "card_expiry_month" => $card_expiry_month,
            "card_expiry_year" => $card_expiry_year,
            "card_cvv" => $card_cvv,
            "business_category_id" => $business_category_id,
            "admin_id" => $admin,
        ]);
        // $business->save();
        return $business;
    }

    public function getNewBusinesses()
    {
        return Business::where(["status" => "NEW_REQUEST"])->get();
    }
}
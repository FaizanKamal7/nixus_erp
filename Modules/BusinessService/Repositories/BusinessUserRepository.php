<?php

namespace Modules\BusinessService\Repositories;

use Modules\BusinessService\Entities\BusinessUser;
use Modules\BusinessService\Interfaces\BusinessUserInterface;

class BusinessUserRepository implements BusinessUserInterface
{
    /**
     * @param $departmentName
     * @param $status
     * @return mixed
     */

    public function createBusinessUser($user_id, $business_id)
    {
        $business_user = new BusinessUser([
            "user_id" => $user_id,
            "business_id" => $business_id,
        ]);
        $business_user->save();
        return $business_user;
    }

    public function getBusinessUser()
    {
        return BusinessUser::all();
    }
}
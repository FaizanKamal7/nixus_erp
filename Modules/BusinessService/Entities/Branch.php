<?php

namespace Modules\BusinessService\Entities;

use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'active_status',
        'is_main_branch',
        'business_id',
        'area_id',
        'city_id',
        'state_id',
        'country_id',
        'is_deleted',
    ];


    public function business()
    {
        return $this->belongsTo(Business::class);
    }


    public function branch_coverages()
    {
        return $this->hasMany(BranchCoverage::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }


    // Customize JSON Serialization to make sure below relationships are included whenever Customer is converted to an array or JSON
    // public function toArray()
    // {
    //     $array = parent::toArray();
    //     $array['business'] = $this->business->toArray();
    //     // $array['area'] = $this->area->toArray() ?? null;
    //     $array['city'] = $this->city->toArray();
    //     $array['state'] = $this->state->toArray();

    //     return $array;
    // }



    protected static function newFactory()
    {
        return \Modules\BusinessService\Database\factories\BranchFactory::new();
    }
}

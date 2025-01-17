<?php

namespace Modules\HRManagement\Entities;

use App\Http\Helper\Helper;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Request;

class LeaveApplications extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        "duration",
        "start_date",
        "end_date",
        "description",
        "status",
        "attachment",
        "consumed",
        "impact_on_pay",

        "leave_policy_record_id",
        "employee_id"
    ];

    public function employee(){
        return $this->belongsTo(Employees::class);
    }

    public function leavePolicyRecord(){
        return $this->belongsTo(LeavePolicyRecords::class);
    }

    protected static function newFactory()
    {
        return \Modules\HRManagement\Database\factories\LeaveApplicationsFactory::new();
    }

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::created(function ($model) {
            $helper = new Helper();
            $user_id = auth()->id();
            $module_name = "HRM";
            $action = "Created";
            $subject = "New Record Created";
            $url = Request::fullUrl();
            $description = "A New Record has been created";
            $ip_address = Request::ip();
            $user_agent = Request::header('user-agent');
            $old_values = null;
            $new_values = json_encode(json_encode($model->getAttributes()));
            $record_id = $model->id;
            $record_type = get_class($model);
            $method = Request::method();

            $helper->logActivity(userId:$user_id, moduleName: $module_name, action: $action, subject: $subject,
                url: $url, description: $description, ipAddress: $ip_address, userAgent: $user_agent,
                oldValues: $old_values, newValues: $new_values, recordId: $record_id, recordType: $record_type,
                method: $method);
        });

        static::updating(function ($model) {
            $changes = $model->getDirty();

            if ($changes) {
                $helper = new Helper();
                $user_id = auth()->id();
                $module_name = "HRM";
                $action = "Updated";
                $subject = "Record Updated";
                $url = Request::fullUrl();
                $description = "Record has been updated";
                $ip_address = Request::ip();
                $user_agent = Request::header('user-agent');
                $old_values = json_encode( json_encode($model->getOriginal()));
                $new_values = json_encode($model->getAttributes());
                $record_id = $model->id;
                $record_type = get_class($model);
                $method = Request::method();

                $helper->logActivity(userId:$user_id, moduleName: $module_name, action: $action, subject: $subject,
                    url: $url, description: $description, ipAddress: $ip_address, userAgent: $user_agent,
                    oldValues: $old_values, newValues: $new_values, recordId: $record_id, recordType: $record_type,
                    method: $method);
            }
        });

        static::deleting(function ($model) {
            $helper = new Helper();
            $user_id = auth()->id();
            $module_name = "HRM";
            $action = "Deleted";
            $subject = "Record Deleted";
            $url = Request::fullUrl();
            $description = "Record has been Deleted";
            $ip_address = Request::ip();
            $user_agent = Request::header('user-agent');
            $old_values =  json_encode($model->getOriginal());
            $new_values = null;
            $record_id = $model->id;
            $record_type = get_class($model);
            $method = Request::method();
            $helper->logActivity(userId:$user_id, moduleName: $module_name, action: $action, subject: $subject,
                url: $url, description: $description, ipAddress: $ip_address, userAgent: $user_agent,
                oldValues: $old_values, newValues: $new_values, recordId: $record_id, recordType: $record_type,
                method: $method);

        });

//        static::retrieved(function ($model) {
//            $helper = new Helper();
//            $user_id = auth()->id();
//            $module_name = "HRM";
//            $action = "Retrieved";
//            $subject = "Record Retrieved";
//            $url = Request::fullUrl();
//            $description = "Record has been retrieved";
//            $ip_address = Request::ip();
//            $user_agent = Request::header('user-agent');
//            $old_values =  json_encode($model->getOriginal());
//            $new_values = json_encode($model->getAttributes());
//            $record_id = $model->id;
//            $record_type = get_class($model);
//            $method = Request::method();
//
//            $helper->logActivity(userId:$user_id, moduleName: $module_name, action: $action, subject: $subject,
//                url: $url, description: $description, ipAddress: $ip_address, userAgent: $user_agent,
//                oldValues: $old_values, newValues: $new_values, recordId: $record_id, recordType: $record_type,
//                method: $method);
//        });
    }
}

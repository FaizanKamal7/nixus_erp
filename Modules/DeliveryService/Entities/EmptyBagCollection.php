<?php

namespace Modules\DeliveryService\Entities;

use App\Models\DeliverySlot;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\BusinessService\Entities\Branch;
use Modules\BusinessService\Entities\Customer;
use Modules\BusinessService\Entities\CustomerAddress;
use Illuminate\Support\Facades\Request;
use App\Http\Helper\Helper;

class EmptyBagCollection extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        "customer_id",
        "bag_id",
        "delivery_id",
        "empty_bag_collection_batch_id",
        "empty_bag_collection_delivery_id",
        
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function bag()
    {
        return $this->belongsTo(Bag::class, 'bag_id');
    }

    public function delivery()
    {
        return $this->belongsTo(Delivery::class, 'delivery_id');
    }
    public function collectionDelivery()
    {
        return $this->belongsTo(Delivery::class, 'empty_bag_collection_delivery_id');
    }

    public function collectionBatch()
    {
        return $this->belongsTo(EmptyBagCollectionBatch::class, 'empty_bag_collection_delivery_id');
    }
    protected static function newFactory()
    {
        return \Modules\DeliveryService\Database\factories\DeliveryFactory::new();
    }

    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub

        static::created(function ($model) {
            $attributes = $model->getAttributes();
            $helper = new Helper();
            $action_by = auth()->id();
            $bag_id = $attributes['bag_id'];
            $delivery_id = $attributes['delivery_id']? $attributes['delivery_id']: null;
            $status = $attributes['empty_bag_collection_delivery_id']? 'Collected from customer' : 'Unassigned for collection ';
            $vehicle_id = null;
            $description = "New bag collection added";


            $helper->bagTimeline($bag_id, $delivery_id, $status, $action_by, $vehicle_id, $description);



            $user_id = auth()->id();
            $module_name = "DeliveryService";
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

            

            $helper->logActivity(
                userId: $user_id, moduleName: $module_name, action: $action, subject: $subject,
                url: $url, description: $description, ipAddress: $ip_address, userAgent: $user_agent,
                oldValues: $old_values, newValues: $new_values, recordId: $record_id, recordType: $record_type,
                method: $method
            );
        });

        static::updating(function ($model) {
            $changes = $model->getDirty();

            if ($changes) {
                $attributes = $model->getAttributes();
                $helper = new Helper();
                $action_by = auth()->id();
                $bag_id = $attributes['id'];
                $delivery_id = $attributes['delivery_id']? $attributes['delivery_id']: null;
                $status = $attributes['empty_bag_collection_delivery_id']? 'Collected from customer' :'Unassigned for collection ';
                $vehicle_id = $model->getOriginal('vehicle_id');
                $description = "status updated";
                // TODO STATUS THING
                $helper->bagTimeline($bag_id, $delivery_id, $status, $action_by, $vehicle_id, $description);
                
            }
        });

        static::deleting(function ($model) {
            $helper = new Helper();
            $user_id = auth()->id();
            $module_name = "DeliveryService";
            $action = "Deleted";
            $subject = "Record Deleted";
            $url = Request::fullUrl();
            $description = "Record has been Deleted";
            $ip_address = Request::ip();
            $user_agent = Request::header('user-agent');
            $old_values = json_encode($model->getOriginal());
            $new_values = null;
            $record_id = $model->id;
            $record_type = get_class($model);
            $method = Request::method();
            $helper->logActivity(
                userId: $user_id, moduleName: $module_name, action: $action, subject: $subject,
                url: $url, description: $description, ipAddress: $ip_address, userAgent: $user_agent,
                oldValues: $old_values, newValues: $new_values, recordId: $record_id, recordType: $record_type,
                method: $method
            );

        });

    }
}
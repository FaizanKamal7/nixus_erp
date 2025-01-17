<?php

use Illuminate\Http\Request;
use Modules\DeliveryService\Http\Controllers\APIControllers\V1\BagCollection\BagCollectionController;
use Modules\DeliveryService\Http\Controllers\APIControllers\V1\Bags\BagsController;
use Modules\DeliveryService\Http\Controllers\APIControllers\V1\Deliveries\DeliveryController;
use Modules\DeliveryService\Http\Controllers\APIControllers\V1\DeliveryBatch\DeliveryBatchController;
use Modules\DeliveryService\Http\Controllers\APIControllers\V1\EmptyBagCollection\EmptyBagCollectionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api', 'prefix' => 'deliveryservice/'], function () {

    // ------------------------------------- D R I V E R - A P I - R O U T E S -----------------------

    Route::prefix('driver/')->group(function () {
        // ------------------------------------- D E L I V E R I E S - R O U T E S -----------------------
        Route::prefix('deliveries/')->group(function () {
            Route::GET('get', [DeliveryController::class, "getDriverDeliveries"]);
            Route::POST('complete-delivery', [DeliveryController::class, "completeDelivery"]);
        });

        // ------------------------------------- D E L I V E R Y- B A T C H - R O U T E S -----------------------
        Route::prefix('deliverybatch/')->group(function () {
            Route::POST('update-delivery-batch-progress', [DeliveryBatchController::class, "updateDeliveryBatchpProgress"]);
        });

        // ------------------------------------- B A G - R O U T E S -----------------------

        Route::group(['prefix' => 'bag/'], function () {
            // ------------------------------------- B A G - C O L L E C T I O N - R O U T E S -----------------------

            Route::group(['prefix' => 'collection/'], function () {
                Route::POST('create', [EmptyBagCollectionController::class, "createBagCollectionAtDelivery"]);
                Route::POST('create-delivery-bag-collection', [EmptyBagCollectionController::class, "createBagCollectionAtDelivery"]);
                Route::POST('update-bag-collection-batch-progress', [EmptyBagCollectionController::class, "updateBagCollectionBatchpProgress"]);
            });
            // ------------------------------------- B A G - P I C K U P - R O U T E S -----------------------

            Route::group(['prefix' => 'pickup/'], function () {
                Route::GET('driver-assigned-pickup', [DeliveryController::class, "driverAssignedPickup"]);
                Route::GET('driver-pending-pickups', [DeliveryController::class, "driverPendingPickups"]);
                Route::GET('driver-completed-pickups', [DeliveryController::class, "driverCompletedPickups"]);
                Route::POST('link-bag-with-delivery', [DeliveryController::class, "linkBagWithDelivery"]);
                Route::POST('update-pickup-batch-progress', [DeliveryController::class, "updatePickupBatchpProgress"]);
            });
        });
    });



    Route::prefix('deliveries/')->group(function () {
        Route::GET('download-deliveries_excel-sample', [DeliveryController::class, "generateAndDownloadDeliveryTemplate"]);

        Route::POST('upload/excel', [DeliveryController::class, "uploadDeliveriesByExcel"]);
        Route::POST('upload/single-delivery', [DeliveryController::class, "uploadSingleDelivery"]);

        Route::POST('complete-delivery', [DeliveryController::class, "completeDelivery"]);
        Route::POST('end-batch', [DeliveryBatchController::class, "endDeliveryBatch"]);

        Route::DELETE('delete-delivery', [DeliveryBatchController::class, "deleteDelivery"]);
        Route::GET('get-business-customers', [DeliveryController::class, "getBusinessCustomer"]);
        Route::GET('get-city-delivery-slots/{city_id}', [DeliveryController::class, "getCityDeliverySlots"]);
        Route::GET('get-all-delivery-slots', [DeliveryController::class, "getAllDeliverySlots"]);
    });

    // Route::group(['prefix' => 'Collection/'], function () {
    //     Route::POST('create', [BagCollectionController::class, "createBagCollection"]);
    // });

    // Route::group(['prefix' => 'Pickup/'], function () {
    //     Route::GET('driver-bags-pickup', [BagsController::class, "driverBagsPickup"]);
    // });

});

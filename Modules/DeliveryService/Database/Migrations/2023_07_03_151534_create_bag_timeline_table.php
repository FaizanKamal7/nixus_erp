<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('bag_timelines', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("bag_id");

            $table->uuid("delivery_id")->nullable();
            $table->uuid("status_id")->nullable();
            $table->uuid("action_by")->nullable();
            $table->uuid("vehicle_id")->nullable();

            // $table->string("previous_status")->nullable();
            // $table->string("current_status");
            $table->text("description")->nullable();


            $table->foreign("status_id")->references("id")->on("bag_statuses")->onDelete("set null");
            $table->foreign("bag_id")->references("id")->on("bags")->onDelete("cascade");
            $table->foreign("action_by")->references("id")->on("users")->onDelete("set null");
            $table->foreign("vehicle_id")->references("id")->on("vehicles")->onDelete("set null");
            // $table->foreign("delivery_id")->references("id")->on("orders")->onDelete("set null");



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bag_timelines');
    }
};
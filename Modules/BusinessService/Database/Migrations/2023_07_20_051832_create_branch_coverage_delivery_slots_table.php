<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_coverage_delivery_slots', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid('branch_coverage_id');
            $table->uuid('delivery_slot_id');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('branch_coverage_id')->references('id')->on('branch_coverages')->onDelete('cascade');
            $table->foreign('delivery_slot_id')->references('id')->on('delivery_slots')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch_coverage_delivery_slots');
    }
};

<?php

namespace Modules\DeliveryService\Interfaces;

interface BagsInterface
{
    public function addNewBag($business_id, $qrCode, $bagNumber, $bagSize, $bagType, $weight, $dimensions, $status = null);
    public function updateBag($id, $business_id, $qrCode, $bagNumber, $bagSize, $bagType, $status, $weight, $dimensions);
    public function updateStatus($id, $status);
    public function getBag($id);
    public function deleteBag($id);
    public function getBags();
    public function filterBags($status);
}

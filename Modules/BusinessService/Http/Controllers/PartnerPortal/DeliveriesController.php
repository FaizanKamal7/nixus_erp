<?php

namespace Modules\BusinessService\Http\Controllers\PartnerPortal;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DeliveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function viewAllDeliveries()
    {
        return view('businessservice::partner_portal.deliveries.deliveries');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function uploadDeliveriesByForm()
    {
        return view('businessservice::partner_portal.deliveries.upload_delivery');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('businessservice::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('businessservice::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
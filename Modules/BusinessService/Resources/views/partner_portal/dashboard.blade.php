@extends('businessservice::layouts.master')
@section('title', 'Partner Dashboard')

@section('extra_style')
{{--
<link href="{{ asset('static/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css/">
--}}
@endsection
@section('main_content')
<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <div class="alert alert-primary">
            <div class="row gy-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-1 mb-xl-10">
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-2hx svg-icon-primary me-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </svg>
                    </span>
                    <!--end::Icon-->

                </div>
                <div class="col-xl-10 d-flex flex-column">
                    <!--begin::Title-->
                    <h4 class="mb-1 text-dark">You account is under process. </h4>
                    <!--end::Title-->
                    <!--begin::Content-->
                    <span>You will get notified once LOGX team send you contract file. It usually takes 2 working days.
                        In the mean time you can add branches if your operating somewhere else as well </span>
                    <!--end::Content-->
                </div>

            </div>
        </div>
        <div class="row gy-5 g-xl-8">
            <div class="col-xl-7">
                <div class="card card-xl-stretch mb-xl-8 mb-10 delivery-card">
                    <!--begin::Beader-->
                    <div class="card-header border-1 pb-5 delivery-header">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1 header-font">Today’s
                                Deliveries Progress</span>
                        </h3>
                        <h4 class="card-label fw-bolder fs-3 mb-1 view">
                            View All</h4>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="  card-body d-flex flex-column delivery-body">
                        <div class="row">
                            <div class="col-3 h-50">
                                <div class="d-flex flex-column flex-grow-1 align-items-center">
                                    <div class="mixed-widget-4-chart" data-kt-chart-color="primary"
                                        style="height: 150px">
                                    </div>
                                    <div class="time-div">
                                        <span class="fw-bold  text-dark-300 time ">(2 AM - 6 AM)</span>
                                    </div>

                                </div>
                            </div>
                            <div class="d-flex flex-column col-3 flex-nowrap text-nowrap">
                                <!--begin::Number-->
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash text-gray">-</span>
                                    <span class="complete span-adjust"> Completed </span> <span class="number"> 1100
                                    </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash">-</span> <span
                                        class="pending span-adjust"> Pending </span> <span class="number"> 42
                                    </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash" style="color: rgba(241, 65, 108, 1);
                                        ">-</span>
                                    <span class="cancel span-adjust"> Cancelled </span> <span class="number" style="color: rgba(241, 65, 108, 1);
                                            ">
                                        3 </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash">-</span> <span
                                        class="complete span-adjust"> Total </span> <span class="number"> 1146
                                    </span></span>
                                <!--end::Number-->
                                <!--begin::Follower-->

                                <!--end::Follower-->
                            </div>

                            <div class="col-3 h-50">
                                <div class="d-flex flex-column flex-grow-1 align-items-center">
                                    <div class="mixed-widget-4-chart" data-kt-chart-color="primary"
                                        style="height: 150px">
                                    </div>
                                    <div class="time-div">
                                        <span class="fw-bold  text-dark-300 time ">(2 AM - 7 AM)</span>
                                    </div>

                                </div>
                            </div>
                            <div class="d-flex flex-column col-3 flex-nowrap text-nowrap">
                                <!--begin::Number-->
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash text-gray">-</span>
                                    <span class="complete span-adjust"> Completed </span> <span class="number"> 1100
                                    </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash">-</span> <span
                                        class="pending span-adjust"> Pending </span> <span class="number"> 42
                                    </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash" style="color: rgba(241, 65, 108, 1);
                                        ">-</span>
                                    <span class="cancel span-adjust"> Cancelled </span> <span class="number" style="color: rgba(241, 65, 108, 1);
                                            ">
                                        3 </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash">-</span> <span
                                        class="complete span-adjust"> Total </span> <span class="number"> 1146
                                    </span></span>
                                <!--end::Number-->
                                <!--begin::Follower-->

                                <!--end::Follower-->
                            </div>
                        </div>
                        <div class="separator"></div>

                        <div class="row">
                            <div class="col-3 h-50">
                                <div class="d-flex flex-column flex-grow-1 align-items-center">
                                    <div class="mixed-widget-4-chart" data-kt-chart-color="primary"
                                        style="height: 150px">
                                    </div>
                                    <div class="time-div">
                                        <span class="fw-bold  text-dark-300 time ">(2 AM - 6 AM)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column col-3 flex-nowrap text-nowrap">
                                <!--begin::Number-->
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash text-gray">-</span>
                                    <span class="complete span-adjust"> Completed </span> <span class="number"> 1100
                                    </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash">-</span> <span
                                        class="pending span-adjust"> Pending </span> <span class="number"> 42
                                    </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash" style="color: rgba(241, 65, 108, 1);
                                        ">-</span>
                                    <span class="cancel span-adjust"> Cancelled </span> <span class="number" style="color: rgba(241, 65, 108, 1);
                                            ">
                                        3 </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash">-</span> <span
                                        class="complete span-adjust"> Total </span> <span class="number"> 1146
                                    </span></span>
                                <!--end::Number-->
                                <!--begin::Follower-->

                                <!--end::Follower-->
                            </div>
                            <div class="col-3 h-50">
                                <div class="d-flex flex-column flex-grow-1 align-items-center">
                                    <div class="mixed-widget-4-chart" data-kt-chart-color="primary"
                                        style="height: 150px">
                                    </div>
                                    <div class="time-div">
                                        <span class="fw-bold  text-dark-300 time ">(2 AM - 7 AM)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column col-3 flex-nowrap text-nowrap">
                                <!--begin::Number-->
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash text-gray">-</span>
                                    <span class="complete span-adjust"> Completed </span> <span class="number"> 1100
                                    </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash">-</span> <span
                                        class="pending span-adjust"> Pending </span> <span class="number"> 42
                                    </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash" style="color: rgba(241, 65, 108, 1);
                                        ">-</span>
                                    <span class="cancel span-adjust"> Cancelled </span> <span class="number" style="color: rgba(241, 65, 108, 1);
                                            ">
                                        3 </span></span>
                                <span class="fw-bold   text-gray-500 pb-1 pt-2"><span class="dash">-</span> <span
                                        class="complete span-adjust"> Total </span> <span class="number"> 1146
                                    </span></span>
                                <!--end::Number-->
                                <!--begin::Follower-->

                                <!--end::Follower-->
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <div class="col-xl-5">
                <div class="card outer-card">
                    <h2> Hello there, Hope You Have
                        Great Day! </h2>
                    <div class="card mb-5 weather-card ">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between  flex-column ">

                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <span class="svg-icon svg-icon-5hx svg-icon-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256"
                                            height="256" viewBox="0 0 256 256" xml:space="preserve">

                                            <defs>
                                            </defs>
                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                                transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                                <circle cx="34.717" cy="35.307" r="19.817"
                                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(232,224,119); fill-rule: nonzero; opacity: 1;"
                                                    transform="  matrix(1 0 0 1 0 0) " />
                                                <path
                                                    d="M 42.869 37.202 c 0.799 -6.532 6.455 -11.579 13.087 -11.579 c 4.749 0 9.038 2.489 11.398 6.553 c 1.78 -1.822 4.203 -2.851 6.775 -2.851 c 4.815 0 8.875 3.661 9.416 8.406 C 87.423 39.216 90 42.937 90 47.112 c 0 5.543 -4.51 10.054 -10.054 10.054 H 44.536 c -5.543 0 -10.054 -4.51 -10.054 -10.054 C 34.482 42.18 38.054 38.004 42.869 37.202 z"
                                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(183,189,244); fill-rule: nonzero; opacity: 1;"
                                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                <path
                                                    d="M 62.119 48.202 C 61.066 39.593 53.612 32.94 44.87 32.94 c -6.259 0 -11.912 3.28 -15.022 8.637 c -2.346 -2.402 -5.539 -3.758 -8.929 -3.758 c -6.347 0 -11.698 4.825 -12.411 11.079 C 3.397 50.857 0 55.76 0 61.263 c 0 7.306 5.944 13.251 13.251 13.251 h 46.672 c 7.306 0 13.251 -5.945 13.251 -13.251 C 73.173 54.763 68.466 49.259 62.119 48.202 z"
                                                    style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(131,141,229); fill-rule: nonzero; opacity: 1;"
                                                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    {{-- <span class="fw-bold fs-2x text-white lh-1 ls-n2 mt-3">Cloudy</span> --}}
                                </div>

                                <div class="d-flex my-7 col-7" style="
                                    border-left: 1px solid gray;
                                    border-width: 3px;
                                    padding: 0 15px;
                                ">
                                    <!--begin::Number-->
                                    <div class="flex-column ">

                                        <span class="fw-bold fs-3x lh-1 ls-n2 mt-3">25 °C</span>
                                        <div class="ms-5">
                                            <span class="fw-bold fs-6" style="color: gray">Mostly Cloudy
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-0 dubai">
                                        <span class="fw-bold fs-6">Dubai
                                        </span>
                                    </div>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--begin::Badge-->
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
                <br>
                <!--begin::Engage widget 3-->
                <div class="card"
                    style="background:linear-gradient(135deg, rgba(0, 66, 110, 1) 0%, rgba(0, 83, 138, 0.65) 100%),linear-gradient(120.29deg, #B3E1FF 0%, #A1D3F3 54.03%, #8FC5E8 98.79%)">
                    <!--begin::Body-->
                    <div class="px-4 d-flex flex-column py-5">
                        <!--begin::Heading-->
                        <div class="m-0">
                            <!--begin::Title-->
                            <h1 class="fw-bold text-white text-center lh-lg">Your Balance: 150 AED
                                <br />
                            </h1>
                            <!--end::Title-->

                        </div>
                        <div class="detail-text">
                            <h5 class="fw-bold text-white text-center lh-lg mb-4 opacity-75">Looking good. You can do 50 more deliveries with current balance
                            </h5>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Links-->
                        <div class="text-center">
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-white btn-color-gray-800 me-2"
                                data-bs-target="#kt_modal_invite_friends" data-bs-toggle="modal">Transactions
                                History</a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm bg-white btn-color-white bg-opacity-20" href="#">Wallet</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 3-->

            </div>

        </div>


        <!--begin::Row-->
        <div class="row gy-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-xl-4 mb-xl-10">
                <!--begin::Engage widget 3-->
                <div class="card bg-primary h-md-100">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column pt-13 pb-14">
                        <!--begin::Heading-->
                        <div class="m-0">
                            <!--begin::Title-->
                            <h1 class="fw-bold text-white text-center lh-lg mb-9">Delivery is easy
                                <br />
                                <span class="fw-boldest">Start Your Delivery</span>
                            </h1>
                            <!--end::Title-->
                            <!--begin::Illustration-->
                            <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 mb-lg-12"
                                style="background-image:url('{{ asset('static/media/svg/illustrations/easy/5.svg') }}')">
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Links-->
                        <div class="text-center">
                            <!--begin::Link-->
                            <a class="btn btn-sm btn-white btn-color-gray-800 me-2"
                                data-bs-target="#kt_modal_invite_friends" data-bs-toggle="modal">New Delivery</a>
                            <!--end::Link-->
                            <!--begin::Link-->
                            <a class="btn btn-sm bg-white btn-color-white bg-opacity-20" href="#">All
                                Deliveries</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 3-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-8 mb-5 mb-xl-10">
                <!--begin::Chart widget 11-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">Delivery Stats</span>
                            <span class="text-gray-400 mt-1 fw-bold fs-6">Completed deliveries</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <ul class="nav" id="kt_chart_widget_11_tabs">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bolder px-4 me-1"
                                        data-bs-toggle="tab" id="kt_chart_widget_11_tab_1"
                                        href="#kt_chart_widget_11_tab_content_1">2020</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bolder px-4 me-1"
                                        data-bs-toggle="tab" id="kt_chart_widget_11_tab_2"
                                        href="#kt_chart_widget_11_tab_content_2">2021</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bolder px-4 me-1 active"
                                        data-bs-toggle="tab" id="kt_chart_widget_11_tab_3"
                                        href="#kt_chart_widget_11_tab_content_3">Month</a>
                                </li>
                            </ul>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pb-0 pt-4">
                        <!--begin::Tab content-->
                        <div class="tab-content">
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_chart_widget_11_tab_content_1" role="tabpanel">
                                <!--begin::Statistics-->
                                <div class="mb-2">
                                    <!--begin::Statistics-->
                                    <span
                                        class="fs-2hx fw-bolder d-block text-gray-800 me-2 mb-2 lh-1 ls-n2">1,349</span>
                                    <!--end::Statistics-->
                                    <!--begin::Description-->
                                    <span class="fs-6 fw-bold text-gray-400">Avarage cost per iteraction</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Chart-->
                                <div id="kt_chart_widget_11_chart_1" class="ms-n5 me-n3 min-h-auto w-100"
                                    style="height: 300px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade" id="kt_chart_widget_11_tab_content_2" role="tabpanel">
                                <!--begin::Statistics-->
                                <div class="mb-2">
                                    <!--begin::Statistics-->
                                    <span
                                        class="fs-2hx fw-bolder d-block text-gray-800 me-2 mb-2 lh-1 ls-n2">3,492</span>
                                    <!--end::Statistics-->
                                    <!--begin::Description-->
                                    <span class="fs-6 fw-bold text-gray-400">Avarage cost per iteraction</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Chart-->
                                <div id="kt_chart_widget_11_chart_2" class="ms-n5 me-n3 min-h-auto"
                                    style="height: 300px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Tab pane-->
                            <!--begin::Tab pane-->
                            <div class="tab-pane fade active show" id="kt_chart_widget_11_tab_content_3"
                                role="tabpanel">
                                <!--begin::Statistics-->
                                <div class="mb-2">
                                    <!--begin::Statistics-->
                                    <span
                                        class="fs-2hx fw-bolder d-block text-gray-800 me-2 mb-2 lh-1 ls-n2">4,796</span>
                                    <!--end::Statistics-->
                                    <!--begin::Description-->
                                    <span class="fs-6 fw-bold text-gray-400">Deliveries in 30 Days</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Statistics-->
                                <!--begin::Chart-->
                                <div id="kt_chart_widget_11_chart_3" class="ms-n5 me-n3 min-h-auto"
                                    style="height: 300px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Tab pane-->
                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Chart widget 11-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row gy-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-xl-4 mb-xl-10">
                <!--begin::List widget 16-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-gray-800">Delivery Tracking</span>
                            <span class="text-gray-400 mt-1 fw-bold fs-6">56 deliveries in progress</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click'
                                data-bs-custom-class="tooltip-dark" title="Click to view in progress deliveries">View
                                All</a>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-4 px-0">
                        <!--begin::Nav-->
                        <ul class="nav nav-pills nav-pills-custom item position-relative mx-9 mb-9">
                            <!--begin::Item-->
                            <li class="nav-item col-4 mx-0 p-0">
                                <!--begin::Link-->
                                <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
                                    data-bs-toggle="pill" href="#kt_list_widget_16_tab_1">
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">New</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span
                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item col-4 mx-0 px-0">
                                <!--begin::Link-->
                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                    data-bs-toggle="pill" href="#kt_list_widget_16_tab_2">
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Preparing</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span
                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item col-4 mx-0 px-0">
                                <!--begin::Link-->
                                <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                    data-bs-toggle="pill" href="#kt_list_widget_16_tab_3">
                                    <!--begin::Subtitle-->
                                    <span class="nav-text text-gray-800 fw-bolder fs-6 mb-3">Picked</span>
                                    <!--end::Subtitle-->
                                    <!--begin::Bullet-->
                                    <span
                                        class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                    <!--end::Bullet-->
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Bullet-->
                            <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                            <!--end::Bullet-->
                        </ul>
                        <!--end::Nav-->
                        <!--begin::Tab Content-->
                        <div class="tab-content px-9 hover-scroll-overlay-y pe-7 me-3 mb-2" style="height: 454px">
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade show active" id="kt_list_widget_16_tab_1">
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Logx
                                                    warehouse</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">6391 Elgin St. Celina, Delaware
                                                    10299</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Ralph
                                                    Edwards</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">2464 Royal Ln. Mesa, New Jersey
                                                    45463</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Cameron
                                                    Williamson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">3891 Ranchview Dr. Richardson,
                                                    California 62639</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Kristin
                                                    Watson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">8502 Preston Rd. Inglewood, Maine
                                                    98380</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Albert
                                                    Flores</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">3517 W. Gray St. Utica,
                                                    Pennsylvania
                                                    57867</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Jessie
                                                    Clarcson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">Total 2,356 Items in the
                                                    Stock</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Cameron
                                                    Williamson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">3891 Ranchview Dr. Richardson,
                                                    California 62639</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Kristin
                                                    Watson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">8502 Preston Rd. Inglewood, Maine
                                                    98380</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Brooklyn
                                                    Simmons</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">6391 Elgin St. Celina, Delaware
                                                    10299</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Ralph
                                                    Edwards</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">2464 Royal Ln. Mesa, New Jersey
                                                    45463</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_list_widget_16_tab_2">
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Cameron
                                                    Williamson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">3891 Ranchview Dr. Richardson,
                                                    California 62639</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Kristin
                                                    Watson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">8502 Preston Rd. Inglewood, Maine
                                                    98380</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Brooklyn
                                                    Simmons</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">6391 Elgin St. Celina, Delaware
                                                    10299</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Ralph
                                                    Edwards</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">2464 Royal Ln. Mesa, New Jersey
                                                    45463</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Cameron
                                                    Williamson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">3891 Ranchview Dr. Richardson,
                                                    California 62639</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Kristin
                                                    Watson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">8502 Preston Rd. Inglewood, Maine
                                                    98380</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Albert
                                                    Flores</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">3517 W. Gray St. Utica,
                                                    Pennsylvania
                                                    57867</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Jessie
                                                    Clarcson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">Total 2,356 Items in the
                                                    Stock</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Albert
                                                    Flores</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">3517 W. Gray St. Utica,
                                                    Pennsylvania
                                                    57867</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Jessie
                                                    Clarcson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">Total 2,356 Items in the
                                                    Stock</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Tap pane-->
                            <!--begin::Tap pane-->
                            <div class="tab-pane fade" id="kt_list_widget_16_tab_3">
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Albert
                                                    Flores</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">3517 W. Gray St. Utica,
                                                    Pennsylvania
                                                    57867</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Jessie
                                                    Clarcson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">Total 2,356 Items in the
                                                    Stock</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Brooklyn
                                                    Simmons</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">6391 Elgin St. Celina, Delaware
                                                    10299</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Ralph
                                                    Edwards</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">2464 Royal Ln. Mesa, New Jersey
                                                    45463</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Brooklyn
                                                    Simmons</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">6391 Elgin St. Celina, Delaware
                                                    10299</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Ralph
                                                    Edwards</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">2464 Royal Ln. Mesa, New Jersey
                                                    45463</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Cameron
                                                    Williamson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">3891 Ranchview Dr. Richardson,
                                                    California 62639</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Kristin
                                                    Watson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">8502 Preston Rd. Inglewood, Maine
                                                    98380</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mt-5 mb-4"></div>
                                <!--end::Separator-->
                                <!--begin::Item-->
                                <div class="m-0">
                                    <!--begin::Timeline-->
                                    <div class="timeline ms-n1">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center mb-4">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px mt-9 mb-n14"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span
                                                    class="fs-8 fw-boldest text-success text-uppercase">Location</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Cameron
                                                    Williamson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">3891 Ranchview Dr. Richardson,
                                                    California 62639</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item align-items-center">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-20px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                <span class="svg-icon svg-icon-2 svg-icon-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content m-0">
                                                <!--begin::Label-->
                                                <span class="fs-8 fw-boldest text-info text-uppercase">Receiver</span>
                                                <!--begin::Label-->
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-6 text-gray-800 fw-bolder d-block text-hover-primary">Kristin
                                                    Watson</a>
                                                <!--end::Title-->
                                                <!--begin::Title-->
                                                <span class="fw-bold text-gray-400">8502 Preston Rd. Inglewood, Maine
                                                    98380</span>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Tap pane-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::List widget 16-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-8 mb-5 mb-xl-10">
                <!--begin::Chart widget 32-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header pt-7 mb-3">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-gray-800">Customers with most deliveries</span>
                            <span class="text-gray-400 mt-1 fw-bold fs-6">Total 424,567 deliveries</span>
                        </h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                class="btn btn-sm btn-light d-flex align-items-center px-4">
                                <!--begin::Display range-->
                                <div class="text-gray-600 fw-bolder">Loading date range...</div>
                                <!--end::Display range-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-1 ms-2 me-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                            fill="currentColor" />
                                        <path
                                            d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                            fill="currentColor" />
                                        <path
                                            d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Daterangepicker-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->

                    <div class="card-body">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fs-7 fw-bolder text-gray-500 border-bottom-0">
                                        <th class="p-0 w-200px w-xxl-450px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-190px"></th>
                                        <th class="p-0 w-50px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">
                                                    <img src="{{ asset('static/media/avatars/300-1.jpg') }}" class=""
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brooklyn
                                                        Simmons</a>
                                                    <span class="text-muted fw-bold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-bolder d-block mb-1 fs-6">1,240</span>
                                            <span class="fw-bold text-gray-400 d-block">Deliveries</span>
                                        </td>


                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">
                                                    <img src="{{ asset('static/media/avatars/300-2.jpg') }}" class=""
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Annette
                                                        Black</a>
                                                    <span class="text-muted fw-bold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-bolder d-block mb-1 fs-6">6,074</span>
                                            <span class="fw-bold text-gray-400 d-block">Deliveries</span>
                                        </td>

                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">
                                                    <img src="{{ asset('static/media/avatars/300-12.jpg') }}" class=""
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Esther
                                                        Howard</a>
                                                    <span class="text-muted fw-bold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-bolder d-block mb-1 fs-6">357</span>
                                            <span class="fw-bold text-gray-400 d-block">Deliveries</span>
                                        </td>

                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">
                                                    <img src="{{ asset('static/media/avatars/300-11.jpg') }}" class=""
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Guy
                                                        Hawkins</a>
                                                    <span class="text-muted fw-bold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-bolder d-block mb-1 fs-6">2,954</span>
                                            <span class="fw-bold text-gray-400 d-block">Deliveries</span>
                                        </td>

                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">
                                                    <img src="{{ asset('static/media/avatars/300-13.jpg') }}" class=""
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Marvin
                                                        McKinney</a>
                                                    <span class="text-muted fw-bold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-bolder d-block mb-1 fs-6">822</span>
                                            <span class="fw-bold text-gray-400 d-block">Deliveries</span>
                                        </td>


                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">
                                                    <img src="{{ asset('static/media/avatars/300-13.jpg') }}" class=""
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Marvin
                                                        McKinney</a>
                                                    <span class="text-muted fw-bold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-bolder d-block mb-1 fs-6">822</span>
                                            <span class="fw-bold text-gray-400 d-block">Deliveries</span>
                                        </td>


                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-40px me-3">
                                                    <img src="{{ asset('static/media/avatars/300-13.jpg') }}" class=""
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Marvin
                                                        McKinney</a>
                                                    <span class="text-muted fw-bold d-block fs-7">Zuid Area</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-gray-800 fw-bolder d-block mb-1 fs-6">822</span>
                                            <span class="fw-bold text-gray-400 d-block">Deliveries</span>
                                        </td>


                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Chart widget 32-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

    </div>
    <!--end::Container-->
</div>
<!--end::Post-->


@endsection

@section('extra_scripts')
{{-- <script src="{{ asset('static/plugins/custom/documentation/general/datatables/datatables.bundle.js') }}"></script> --}}
{{-- <script src="{{ asset('static/js/custom/documentation/general/datatables/subtable.js')}}"></script> --}}
<script>
    $("#kt_datatable_responsive_2").DataTable({
            responsive: {
                details: {
                    type: "column",
                    target: -1
                }
            },
            columnDefs: [{
                    className: "dtr-control dtr-control-last",
                    orderable: false,
                    targets: -1
                },
                {
                    // The `data` parameter refers to the data for the cell (defined by the
                    // `data` option, which defaults to the column being worked with, in
                    // this case `data: 0`.
                    "render": function(data, type, row) {
                        var index = KTUtil.getRandomInt(1, 7);

                        return data + "<span class=\"ms-2 badge badge-light-" + status[index]["state"] +
                            " fw-bold\">" + status[index]["title"] + "</span>";
                    },
                    "targets": 1
                }
            ]
        });
</script>
@endsection
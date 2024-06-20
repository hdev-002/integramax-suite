@extends('metronic.layouts.app-launcher')
@section('title', 'Your Page Title')

@section('styles')
    <!-- Your CSS styles goes here -->
@endsection


@section('content')
    <div class="p-20 mt-20">
        <div class="row mb-10">
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
            </div>
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
            </div>
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
            </div>
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
                <a href="{{ route('user-management.index') }}">
                <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                    <div class="overlay-wrapper text-gray-600">
                        <i class="bi bi-person-badge fs-2x"></i>
                    </div>
                    <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                    </div>
                </div>

                <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                            User Management                        </span>
                </a>
            </div>
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
                <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                    <div class="overlay-wrapper text-gray-600">
                        <i class="ki-duotone ki-microsoft fs-2x">
                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                            </div>
                    <div class="overlay-layer overlay bg-gray-500 bg-opacity-25 rounded d-flex">
                    </div>
                </div>

                <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                            Purchases                        </span>
            </div>
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
                <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                    <div class="overlay-wrapper text-gray-600">
                        <i class="ki-duotone ki-android fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>
                                   </div>

                </div>

                <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                            Stock In                        </span>
            </div>
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
                <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                    <div class="overlay-wrapper text-gray-600">
                        <i class="ki-duotone ki-vue fs-2x"><span class="path1"></span><span class="path2"></span></i>

                    </div>

                </div>

                <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                            Stock Out                        </span>
            </div>
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
                <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                    <div class="overlay-wrapper text-gray-600">
                        <i class="ki-duotone ki-js fs-2x"><span class="path1"></span><span class="path2"></span></i>

                    </div>

                </div>

                <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                            Adjustment                        </span>
            </div>
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
                <div class="d-flex flex-center bg-light rounded p-4 h-80px mb-1 overlay">
                    <div class="overlay-wrapper text-gray-600">
                        <i class="ki-duotone ki-spring-framework fs-2x"></i>
                                                    </div>
                </div>

                <span class="fs-7 fw-semibold" data-kt-icon-name="true">
                            Transfer                       </span>
            </div>
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
            </div>
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
            </div>
            <div class="col-md-3 col-lg-1 text-center mb-6" data-kt-icon-preview="true">
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <!-- Your Scripts goes here -->
@endsection


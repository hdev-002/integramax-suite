@extends('metronic.layouts.app')
@section('title', 'User Management')

@section('styles')
    <link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('metronic/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
@endsection
@section('toolbar-header', 'User Management')
@section('toolbar-breadcrumb')
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="index.html" class="text-muted text-hover-primary">Apps</a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-500 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">User Management</li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-500 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">Create</li>
    <!--end::Item-->
@endsection
@section('toolbar-actions')
    <div>
{{--        <a href="#" class="btn btn-sm btn-flex btn-transparent btn-hover-outline" data-bs-toggle="modal"--}}
{{--           data-bs-target="#kt_modal_create_campaign">Save</a>--}}
{{--        <a href="" class="btn btn-sm btn-flex btn-outline btn-active-primary bg-body" data-bs-toggle="modal"--}}
{{--           data-bs-target="#kt_modal_view_users">--}}
{{--            <i class="ki-outline ki-eye fs-4"></i>Preview</a>--}}
{{--        <a href="" class="btn btn-sm btn-flex btn-primary" data-bs-toggle="modal"--}}
{{--           data-bs-target="#kt_modal_create_campaign">--}}
{{--            <i class="ki-outline ki-exit-up fs-4"></i>Push</a>--}}
    </div>
@endsection
@section('content')
    <livewire:metronic.form.form1 ></livewire:metronic.form.form1>
@endsection

@section('scripts')
    <script src="{{ asset('metronic/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('metronic/assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('metronic/assets/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="assets/js/custom/utilities/modals/new-card.js"></script>
    <script src="assets/js/custom/utilities/modals/bidding.js"></script>
    <script src="assets/js/custom/utilities/modals/top-up-wallet.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/share-earn.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
@endsection

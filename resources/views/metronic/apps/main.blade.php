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
            <x-Applications></x-Applications>

        </div>
    </div>
@endsection

@section('scripts')
    <!-- Your Scripts goes here -->
@endsection


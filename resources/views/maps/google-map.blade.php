<!-- resources/views/maps/google-map.blade.php -->
@extends('layouts.app')
@section('title', 'Icons Google Maps')

@section('bc-title', 'Google Maps')
@section('bc-first', 'Icons')
@section('bc-mid', 'Charts')
@section('bc-last', 'Google Maps')

@section('content')
<div class="animated fadeIn">

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Basic Map</h4>
                </div>
                <div class="gmap_unix card-body">
                    <div class="map" id="basic-map"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Fusion Tables layers</h4>
                </div>
                <div class="card-body">
                    <div id="map-2" class="map"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->


        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Geometry overlays</h4>
                </div>
                <div class="card-body">
                    <div class="map" id="map-3"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Elevation locations</h4>
                </div>
                <div class="card-body">
                    <div id="map-4" class="map"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Geolocation</h4>
                </div>
                <div class="card-body">
                    <div class="map" id="map-5"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>KML layers</h4>
                </div>
                <div class="card-body">
                    <div id="map-6" class="map"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->


        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Layers</h4>
                </div>
                <div class="card-body">
                    <div class="map" id="map-7"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Map events</h4>
                </div>
                <div class="card-body">
                    <div class="map" id="map-8"></div>
                </div>
            </div>
            <!-- /# card -->
        </div>
        <!-- /# column -->
    </div>
    <!-- /# row -->
</div><!-- .animated -->
@endsection
@push('scripts')
<!-- Gmaps -->
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2jlT6C_to6X1mMvR9yRWeRvpIgTXgddM"></script>

<script src="{{asset('js/lib/gmap/gmaps.js')}}"></script>
<script src="{{asset('js/init/gmap-init.js')}}"></script>

@endpush

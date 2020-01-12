<!-- resources/views/maps/vector-map.blade.php -->
@extends('layouts.app')
@section('title', 'Icons Vector Maps')

@section('bc-title', 'Vector Maps')
@section('bc-first', 'Icons')
@section('bc-mid', 'Charts')
@section('bc-last', 'Vector Maps')

@section('content')
<div class="animated fadeIn">

 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>World</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Algeria</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap2" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Argentina</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap3" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Brazil</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap4" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="Vector-map-js">
                <div id="vmap5" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Germany</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap6" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Greece</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap7" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Russia</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap10" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Tunasia</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap11" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Europe</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap12" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>USA</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap13" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Turkey</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap14" class="vmap"></div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Inactive Regions</h4>
            </div>
            <div class="Vector-map-js">
                <div id="vmap15" class="vmap"></div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js"></script>
<script src="{{asset('js/vmap.sampledata.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.world.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.algeria.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.argentina.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.brazil.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.france.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.germany.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.greece.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.iran.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.iraq.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.russia.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.tunisia.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.europe.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.usa.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.turkey.js"></script>
<script src="{{asset('js/init/vector-init.js')}}"></script>

@endpush

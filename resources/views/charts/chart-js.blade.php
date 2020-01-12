<!-- resources/views/charts/chart-js.blade.php -->
@extends('layouts.app')
@section('title', 'Icons Chart Js')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
@endpush

@section('bc-title', 'Chart Js')
@section('bc-first', 'Icons')
@section('bc-mid', 'Charts')
@section('bc-last', 'Chart Js')

@section('content')
<div class="animated fadeIn">
    <div class="row">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Yearly Sales </h4>
                    <canvas id="sales-chart"></canvas>
                </div>
            </div>
        </div><!-- /# column -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Team Commits </h4>
                    <canvas id="team-chart"></canvas>
                </div>
            </div>
        </div><!-- /# column -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Bar chart </h4>
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div><!-- /# column -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Rader chart </h4>
                    <canvas id="radarChart"></canvas>
                </div>
            </div>
        </div><!-- /# column -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Line Chart </h4>
                    <canvas id="lineChart"></canvas>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Doughut Chart </h4>
                        <canvas id="doughutChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

        </div><!-- /# column -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Pie Chart </h4>
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div><!-- /# column -->


        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Polar Chart </h4>
                    <canvas id="polarChart"></canvas>
                </div>
            </div>
        </div><!-- /# column -->

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Single Bar Chart </h4>
                    <canvas id="singelBarChart"></canvas>
                </div>
            </div>
        </div><!-- /# column -->
    </div>
</div><!-- .animated -->
@endsection

@push('scripts')
<!--  Chart js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>
<script src="{{asset('js/init/chartjs-init.js') }}"></script>
<!--Flot Chart-->
<script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>
@endpush

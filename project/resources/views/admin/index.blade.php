@extends('layouts.admin')

@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">
            <div class="page-header">
                <h1 class="page-title">Dashboard</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4" id="recentorders">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Total Testimonial</h6>
                                            <h2 class="mb-0 number-font">{{count($ads)}}</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="saleschart" class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                        <span class="text-muted fs-12"><span class="text-secondary"><i class="fe fe-arrow-up-circle  text-secondary"></i></span> Last days</span>
                                 </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Total Expert</h6>
                                            <h2 class="mb-0 number-font">{{count($sliders)}}</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="leadschart" class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-muted fs-12"><span class="text-pink"><i class="fe fe-arrow-up-circle text-pink"></i></span> Last days</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="mt-2">
                                            <h6 class="">Total Image</h6>
                                            <h2 class="mb-0 number-font">{{count($galleries)}}</h2>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="chart-wrapper mt-1">
                                                <canvas id="profitchart" class="h-8 w-9 chart-dropshadow"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="text-muted fs-12"><span class="text-green"><i class="fe fe-arrow-up-circle text-green"></i></span>Last days</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Analytics</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex mx-auto text-center justify-content-center mb-4">
                                <div class="d-flex text-center justify-content-center me-3"></div>
                            </div>
                            <div class="chartjs-wrapper-demo">
                                <canvas id="transactions" class="chart-dropshadow"></canvas>
                            </div>
                        </div>
                                    
                    </div>
                </div>
                 <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                    <div class="card overflow-hidden">
                        <div id="flotback-chart" class="flot-background"></div>
                            <div class="card-body">
                                <div class="browser-stats">
                                    <div class="row mb-4">
                                        <div class="row-header">
                                            <h4 class="row-title text-success">Top Refeeral</h4>
                                        </div>
                                    <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                    @foreach($referrals as $browser)
                                        <div class="d-flex align-items-end justify-content-between mb-1">
                                            <h6 class="mb-1">{{$browser->referral}}</h6>
                                            <h6 class="fw-semibold mb-1">{{$browser->total_count}}%
                                            <span class="text-success fs-11"></span></h6>
                                        </div>
                                        <div class="progress h-2 mb-3">
                                            <div class="progress-bar bg-success" style="width: {{$browser->total_count}}%;" role="progressbar"></div>
                                        </div>
                                    @endforeach
                                    </div>
                                    </div>
                                </div>
                                    <div class="browser-stats">
                                        <div class="row mb-4">
                                            <div class="row-header">
                                                <h4 class="row-title text-danger">Os Used</h4>
                                            </div>
                                            <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                            @foreach($browsers as $browser)
                                                <div class="d-flex align-items-end justify-content-between mb-1">
                                                    <h6 class="mb-1">{{$browser->referral}}</h6>
                                                    <h6 class="fw-semibold mb-1">{{$browser->total_count}}
                                                    <span class="text-success fs-11"></span></h6>
                                                </div>
                                                <div class="progress h-2 mb-3">
                                                    <div class="progress-bar bg-warning" style="width: {{$browser->total_count}}%;" role="progressbar"></div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                       

@endsection

@section('scripts')


<script type="text/javascript">
    {
    'use strict'

    // TRANSACTIONS
    var myCanvas = document.getElementById("transactions");
    myCanvas.height = "330";

    var myCanvasContext = myCanvas.getContext("2d");
    var gradientStroke1 = myCanvasContext.createLinearGradient(0, 80, 0, 280);
    gradientStroke1.addColorStop(0, hexToRgba(myVarVal, 0.8) || 'rgba(108, 95, 252, 0.8)');
    gradientStroke1.addColorStop(1, hexToRgba(myVarVal, 0.2) || 'rgba(108, 95, 252, 0.2) ');

    var gradientStroke2 = myCanvasContext.createLinearGradient(0, 80, 0, 280);
    gradientStroke2.addColorStop(0, hexToRgba(myVarVal1, 0.8) || 'rgba(5, 195, 251, 0.8)');
    gradientStroke2.addColorStop(1, hexToRgba(myVarVal1, 0.8) || 'rgba(5, 195, 251, 0.2) ');
    document.getElementById('transactions').innerHTML = ''; 
    var myChart;
    myChart = new Chart(myCanvas, {

        type: 'line',
        data: {
            labels: [ @foreach($browsers as $browser)"{{$browser->referral}}", @endforeach],
            type: 'line',
            datasets: [{
                label: 'Total Sales',
                data: [ @foreach($browsers as $browser)"{{$browser->total_count}}", @endforeach],
                backgroundColor: gradientStroke1,
                borderColor: myVarVal,
                pointBackgroundColor: '#fff',
                pointHoverBackgroundColor: gradientStroke1,
                pointBorderColor: myVarVal,
                pointHoverBorderColor: gradientStroke1,
                pointBorderWidth: 0,
                pointRadius: 0,
                pointHoverRadius: 0,
                borderWidth: 3,
                fill: 'origin'
            }, {
                label: 'Total Orders',
                data: [ @foreach($referrals as $browser)"{{$browser->total_count}}", @endforeach],
                backgroundColor: 'transparent',
                borderColor: '#05c3fb',
                pointBackgroundColor: '#fff',
                pointHoverBackgroundColor: gradientStroke2,
                pointBorderColor: '#05c3fb',
                pointHoverBorderColor: gradientStroke2,
                pointBorderWidth: 0,
                pointRadius: 0,
                pointHoverRadius: 0,
                borderWidth: 3,
                fill: 'origin',

            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            tooltips: {
                enabled: false,
            },
            legend: {
                display: false,
                labels: {
                    usePointStyle: false,
                },
            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false,
                        color: 'rgba(119, 119, 142, 0.08)'
                    },
                    ticks: {
                        fontColor: '#b0bac9',
                        autoSkip: true,
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Month',
                        fontColor: 'transparent'
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 100,
                        stepSize: 10,
                        fontColor: "#b0bac9",
                    },
                    display: true,
                    gridLines: {
                        display: true,
                        drawBorder: false,
                        zeroLineColor: 'rgba(142, 156, 173,0.1)',
                        color: "rgba(142, 156, 173,0.1)",
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'sales',
                        fontColor: 'transparent'
                    }
                }]
            },
            title: {
                display: false,
                text: 'Normal Legend'
            }
        }
    });
}
           
</script>
@endsection
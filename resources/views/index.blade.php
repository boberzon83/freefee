@extends('layouts.master')

@section('title') @lang('translation.Dashboards') @endsection

@section('content')

@component('components.breadcrumb')
@slot('li_1') Dashboards @endslot
@slot('title') Dashboard @endslot
@endcomponent

<div class="row">
    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Distribuidores activos</p>
                                <h4 class="mb-0">{{ $distributors }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div>
                                    <i class="bx bx-package text-info font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Clientes activos</p>
                                <h4 class="mb-0">{{ $customers }}</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div>
                                    <i class="bx bxs-city text-success font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Compras confirmadas</p>
                                <h4 class="mb-0">{{ number_format($buys, 2) }}€</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div>
                                    <i class="bx bxs-bank text-warning font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex flex-wrap">
                    <h4 class="card-title mb-4">Venta acumulada por productos en {{ now()->format('Y') }}</h4>
                    <div class="ms-auto d-none">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Year</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="bar_chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex flex-wrap">
                    <h4 class="card-title mb-4">Top 5 Distribuidores con más ventas en {{ now()->format('Y') }}</h4>
                </div>
                <div id="donut_chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex flex-wrap">
                    <h4 class="card-title mb-4">Top 5 Productos con más ventas en {{ now()->format('Y') }}</h4>
                </div>
                <div id="radial_chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-5">Actividad</h4>
                @if($logs->count() > 0)
                @php
                     $item_log = 1;   
                @endphp
                <ul class="verti-timeline list-unstyled">
                    @foreach($logs as $log)
                    @if($item_log == 1)
                    <li class="event-list active">
                        <div class="event-timeline-dot">
                            <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">{{ $log->created_at->format('d-m-Y H:i:s') }}</h5>
                                <div>
                                    {{ $log->action }}
                                </div>
                            </div>
                        </div>
                    </li>
                    @php
                        $item_log = 2;
                    @endphp
                    @else
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                                <h5 class="font-size-14">{{ $log->created_at->format('d-m-Y H:i:s') }}</h5>
                                <div>
                                    {{ $log->action }}
                                </div>
                            </div>
                        </div>
                    </li>
                    @endif
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>

    
</div>
<!-- end row -->

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script>
    !function(){
        setTimeout((function(){}),2e3);
        var e={
                chart:{
                    height:350,
                    type:"bar",
                    toolbar:{
                        show:!1
                    }
                },
                plotOptions:{
                    bar:{
                        horizontal:!0
                    }
                },
                dataLabels:{
                    enabled:!1
                },
                series:[
                    {
                        name: "Unidades vendidas",
                        data:{!! App\Models\SaleItem::getTotalSalesTop10() !!}
                    }
                ],
                colors:["#34c38f"],
                grid:{
                    borderColor:"#f1f1f1"
                },
                xaxis:{
                    categories:{!! App\Models\SaleItem::getNameSalesTop10() !!}
                }
            },
            a=new ApexCharts(document.querySelector("#bar_chart"),e);
            a.render(),
            e={
                chart:{
                    height:320,
                    type:"donut"
                },
                series:{!! App\Models\SaleItem::getDistributorsSalesTotal5() !!},
                labels:{!! App\Models\SaleItem::getDistributorsSalesName5() !!},
                colors:[
                    "#34c38f",
                    "#556ee6",
                    "#f46a6a",
                    "#50a5f1",
                    "#f1b44c"
                ],
                legend:{
                    show:!0,
                    position:"bottom",
                    horizontalAlign:"center",
                    verticalAlign:"middle",
                    floating:!1,
                    fontSize:"14px",
                    offsetX:0
                },
                responsive:[
                    {
                        breakpoint:600,
                        options:{
                            chart:{
                                height:400
                            },
                            legend:{
                                show:!1
                            }
                        }
                    }
                ]
            },
            t=new ApexCharts(document.querySelector("#donut_chart"),e);
            t.render(),
            e={
                chart:{
                    height:310,
                    type:"radialBar"
                },
                plotOptions:{
                    radialBar:{
                        dataLabels:{
                            name:{
                                fontSize:"22px"
                            },
                            value:{
                                fontSize:"16px"
                            },
                            total:{
                                show:!0,
                                label:"Total",
                                formatter:function(e){
                                    return 405
                                }
                            }
                        }
                    }
                },
                series:{!! App\Models\SaleItem::getTotalSalesTop5() !!},
                labels:{!! App\Models\SaleItem::getNameSalesTop5() !!},
                colors:[
                    "#556ee6",
                    "#34c38f",
                    "#f46a6a",
                    "#f1b44c",
                    "#50a5f1"
                ]
            },
            p=new ApexCharts(document.querySelector("#radial_chart"),e);
            p.render()
    }();
</script>
@endsection
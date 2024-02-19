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
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Catálogos activos</p>
                                <h4 class="mb-0">5</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div>
                                    <i class="bx bx-book text-success font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Impresiones</p>
                                <h4 class="mb-0">1.051.600</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div>
                                    <i class="bx bx-search-alt-2 text-info font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">Usuarios Únicos</p>
                                <h4 class="mb-0">7.613</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center">
                                <div>
                                    <i class="bx bx-user text-warning font-size-24"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-muted fw-medium">CTR</p>
                                <h4 class="mb-0">0,99%</h4>
                            </div>

                            <div class="flex-shrink-0 align-self-center ">
                                <div>
                                    <i class="bx bxs-offer text-danger font-size-24"></i>
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
                    <h4 class="card-title mb-4">Impresiones por Catálogo en {{ now()->format('Y') }}</h4>
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
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex flex-wrap">
                    <h4 class="card-title mb-4">Catálogo Descanso <small>(DISTRIBUCIÓN DE IMPRESIONES Y CTR POR MES)</small></h4>
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

                <div id="bar_chart2" class="apex-charts" dir="ltr"></div>
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
                    <h4 class="card-title mb-4">Top 3 catálogos con mejor CTR en {{ now()->format('Y') }}</h4>
                </div>
                <div id="donut_chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex flex-wrap">
                    <h4 class="card-title mb-4">Top 5 Productos con más clics en {{ now()->format('Y') }}</h4>
                </div>
                <div id="radial_chart" class="apex-charts" dir="ltr"></div>
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
                stacked:0,
                toolbar:{show:!1},
                zoom:{enabled:!0}
            },
            plotOptions:{
                bar:{
                    horizontal:!1,
                    columnWidth:"35%",
                    endingShape:"rounded"
                }
            },
            dataLabels:{enabled:!1},
            stroke: {
            show: true,
            width: 4,
            colors: ['transparent']
            },
            series:[
                            {
                    name:"Especial Sofás",
                    data:[40000,30000,20000]
                },
                            {
                    name:"Catálogo Descanso",
                    data:[32000,26000,21000]
                },
                            {
                    name:"aye Sofas Muebles",
                    data:[15000,17000,12000]
                }
                        ],
            xaxis:{
                //categories:['[&quot;Ene&quot;,&quot;Feb&quot;,]']
                categories:["Ene","Feb","Mar"]
            },
            colors:["#556ee6","#f1b44c","#34c38f","#ff0000","#000000"],
            legend:{position:"bottom"},
            fill:{opacity:1}};

            a=new ApexCharts(document.querySelector("#bar_chart"),e);
            a.render(),
            e={
                chart:{
                    height:350,
                    type:"line",
                    stacked:!1,
                    toolbar:{
                        show:!1
                    }
                },
                stroke:{
                    width:[0,2,4],
                    curve:"smooth"
                },
                plotOptions:{
                    bar:{
                        columnWidth:"50%"
                    }
                },
                colors:["#34c38f","#f46a6a"],
                series:[
                    {
                        name:"Impresiones",
                        type:"column",
                        data:[23000,11000,22000,27000,13000,22000,37000,21000,44000,22000,30000]
                    },
                    {
                        name:"CTR",
                        type:"line",
                        data:[21000,15000,19000,30000,25000,15000,26000,35000,52000,20000,39000]
                    }
                ],
                fill:{
                    opacity:[.85,.25,1],
                    gradient:{
                        inverseColors:!1,
                        shade:"light",
                        type:"vertical",
                        opacityFrom:.85,
                        opacityTo:.55,
                        stops:[0,100,100,100]
                    }
                },
                markers:{
                    size:0
                },
                xaxis:{
                    //categories:['[&quot;Ene&quot;,&quot;Feb&quot;,]']
                    categories:["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dec"]
                },
                yaxis:{
                    title:{
                        text:""
                    }
                },
                tooltip:{
                    shared:!0,
                    intersect:!1,
                    y:{
                        formatter:function(e){
                            return void 0!==e?e.toFixed(0)+"":e
                        }
                    }
                },
                grid:{
                    borderColor:"#f1f1f1"
                }
            },

            a=new ApexCharts(document.querySelector("#bar_chart2"),e);
            a.render(),
            e={
                chart:{
                    height:320,
                    type:"donut"
                },
                series:[34,20,40],
                labels:['Especial Sofás','Catálogo Descanso','freefee Sofás Muebles'],
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
                series:[30,25,20,15,10],
                labels:['RINCONERA MODELO ENZO','SILLÓN MODELO BEA','SOFÁ CAMA DE 190X94X85 CM','CAMA DE 150X190 COLOR SHAMAL','MESITA DE NOCHE 1C DE 43X48'],
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
@extends('layouts.main')
@section('title', 'Movimentações')
@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Mixed Widget 13-->
                <div class="card card-xl-stretch mb-xl-8" style="background-color: #F7D9E3">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-grow-1">
                            <!--begin::Title-->
                            <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Saídas</a>
                            <!--end::Title-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-13-chart" style="height: 100px; min-height: 100px;"><div id="apexchartsmm648o89" class="apexcharts-canvas apexchartsmm648o89 apexcharts-theme-light" style="width: 242px; height: 100px;"><svg id="SvgjsSvg2326" width="242" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2328" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2327"><clipPath id="gridRectMaskmm648o89"><rect id="SvgjsRect2331" width="249" height="103" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskmm648o89"></clipPath><clipPath id="nonForecastMaskmm648o89"></clipPath><clipPath id="gridRectMarkerMaskmm648o89"><rect id="SvgjsRect2332" width="246" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2337" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2338" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.2"></stop><stop id="SvgjsStop2339" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop2340" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop2341" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1.2"></stop></linearGradient></defs><g id="SvgjsG2344" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2345" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2353" class="apexcharts-grid"><g id="SvgjsG2354" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2356" x1="0" y1="0" x2="242" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2357" x1="0" y1="10" x2="242" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2358" x1="0" y1="20" x2="242" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2359" x1="0" y1="30" x2="242" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2360" x1="0" y1="40" x2="242" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2361" x1="0" y1="50" x2="242" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2362" x1="0" y1="60" x2="242" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2363" x1="0" y1="70" x2="242" y2="70" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2364" x1="0" y1="80" x2="242" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2365" x1="0" y1="90" x2="242" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2366" x1="0" y1="100" x2="242" y2="100" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2355" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2368" x1="0" y1="100" x2="242" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2367" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2333" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2334" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2342" d="M0 100L0 75C16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C65.34 58.33333333333333 79.86 75 96.8 75C113.74 75 128.26 33.33333333333333 145.2 33.33333333333333C162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657C242 16.666666666666657 242 16.666666666666657 242 100M242 16.666666666666657C242 16.666666666666657 242 16.666666666666657 242 16.666666666666657 " fill="url(#SvgjsLinearGradient2337)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmm648o89)" pathTo="M 0 100L 0 75C 16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C 65.34 58.33333333333333 79.86 75 96.8 75C 113.74 75 128.26 33.33333333333333 145.2 33.33333333333333C 162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C 210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657C 242 16.666666666666657 242 16.666666666666657 242 100M 242 16.666666666666657z" pathFrom="M -1 100L -1 100L 48.4 100L 96.8 100L 145.2 100L 193.6 100L 242 100"></path><path id="SvgjsPath2343" d="M0 75C16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C65.34 58.33333333333333 79.86 75 96.8 75C113.74000000000001 75 128.26 33.33333333333333 145.2 33.33333333333333C162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657C242 16.666666666666657 242 16.666666666666657 242 16.666666666666657 " fill="none" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmm648o89)" pathTo="M 0 75C 16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C 65.34 58.33333333333333 79.86 75 96.8 75C 113.74 75 128.26 33.33333333333333 145.2 33.33333333333333C 162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C 210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657" pathFrom="M -1 100L -1 100L 48.4 100L 96.8 100L 145.2 100L 193.6 100L 242 100"></path><g id="SvgjsG2335" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2374" r="0" cx="48.4" cy="58.33333333333333" class="apexcharts-marker wczk23djb no-pointer-events" stroke="#e4e6ef" fill="#3f4254" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2336" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2369" x1="0" y1="0" x2="242" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2370" x1="0" y1="0" x2="242" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2371" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2372" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2373" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2352" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2329" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 50px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 44.625px; top: 61.3333px;"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;">Mar</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Net Profit: </span><span class="apexcharts-tooltip-text-y-value">$25 thousands</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 26.4391px; top: 102px;"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px; min-width: 24.8438px;">Mar</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Stats-->
                        <div class="pt-5">
                            <!--begin::Number-->
                            <span class="text-dark fw-bolder fs-3x me-2 lh-0">{{  'R$ '.number_format($outputTotal, 2, ',', '.') }}</span>
                            <!--end::Number-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 13-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Mixed Widget 13-->
                <div class="card card-xl-stretch mb-xl-8" style="background-color: #CBF0F4">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-grow-1">
                            <!--begin::Title-->
                            <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Entrada</a>
                            <!--end::Title-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-13-chart" style="height: 100px; min-height: 100px;"><div id="apexchartswtl5nv0xj" class="apexcharts-canvas apexchartswtl5nv0xj apexcharts-theme-light" style="width: 242px; height: 100px;"><svg id="SvgjsSvg2375" width="242" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2377" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2376"><clipPath id="gridRectMaskwtl5nv0xj"><rect id="SvgjsRect2380" width="249" height="103" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskwtl5nv0xj"></clipPath><clipPath id="nonForecastMaskwtl5nv0xj"></clipPath><clipPath id="gridRectMarkerMaskwtl5nv0xj"><rect id="SvgjsRect2381" width="246" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2386" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2387" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.2"></stop><stop id="SvgjsStop2388" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop2389" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop2390" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1.2"></stop></linearGradient></defs><g id="SvgjsG2393" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2394" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2402" class="apexcharts-grid"><g id="SvgjsG2403" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2405" x1="0" y1="0" x2="242" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2406" x1="0" y1="10" x2="242" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2407" x1="0" y1="20" x2="242" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2408" x1="0" y1="30" x2="242" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2409" x1="0" y1="40" x2="242" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2410" x1="0" y1="50" x2="242" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2411" x1="0" y1="60" x2="242" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2412" x1="0" y1="70" x2="242" y2="70" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2413" x1="0" y1="80" x2="242" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2414" x1="0" y1="90" x2="242" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2415" x1="0" y1="100" x2="242" y2="100" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2404" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2417" x1="0" y1="100" x2="242" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2416" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2382" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2383" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2391" d="M0 100L0 75C16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C65.34 58.33333333333333 79.86 75 96.8 75C113.74 75 128.26 33.33333333333333 145.2 33.33333333333333C162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657C242 16.666666666666657 242 16.666666666666657 242 100M242 16.666666666666657C242 16.666666666666657 242 16.666666666666657 242 16.666666666666657 " fill="url(#SvgjsLinearGradient2386)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskwtl5nv0xj)" pathTo="M 0 100L 0 75C 16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C 65.34 58.33333333333333 79.86 75 96.8 75C 113.74 75 128.26 33.33333333333333 145.2 33.33333333333333C 162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C 210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657C 242 16.666666666666657 242 16.666666666666657 242 100M 242 16.666666666666657z" pathFrom="M -1 100L -1 100L 48.4 100L 96.8 100L 145.2 100L 193.6 100L 242 100"></path><path id="SvgjsPath2392" d="M0 75C16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C65.34 58.33333333333333 79.86 75 96.8 75C113.74000000000001 75 128.26 33.33333333333333 145.2 33.33333333333333C162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657C242 16.666666666666657 242 16.666666666666657 242 16.666666666666657 " fill="none" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskwtl5nv0xj)" pathTo="M 0 75C 16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C 65.34 58.33333333333333 79.86 75 96.8 75C 113.74 75 128.26 33.33333333333333 145.2 33.33333333333333C 162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C 210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657" pathFrom="M -1 100L -1 100L 48.4 100L 96.8 100L 145.2 100L 193.6 100L 242 100"></path><g id="SvgjsG2384" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2423" r="0" cx="0" cy="0" class="apexcharts-marker w65xt4joil no-pointer-events" stroke="#e4e6ef" fill="#3f4254" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2385" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2418" x1="0" y1="0" x2="242" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2419" x1="0" y1="0" x2="242" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2420" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2421" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2422" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2401" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2378" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 50px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Stats-->
                        <div class="pt-5">
                            <!--begin::Number-->
                            <span class="text-dark fw-bolder fs-3x me-2 lh-0">{{  'R$ '.number_format($inputTotal, 2, ',', '.') }}</span>
                            <!--end::Number-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 13-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Mixed Widget 13-->
                <div class="card card-xl-stretch mb-xl-8" style="background-color: #CBD4F4">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-grow-1">
                            <!--begin::Title-->
                            <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">À Receber</a>
                            <!--end::Title-->
                            <!--begin::Chart-->
                            <div class="mixed-widget-13-chart" style="height: 100px; min-height: 100px;"><div id="apexchartsx5ffk9gd" class="apexcharts-canvas apexchartsx5ffk9gd apexcharts-theme-light" style="width: 242px; height: 100px;"><svg id="SvgjsSvg2424" width="242" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2426" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2425"><clipPath id="gridRectMaskx5ffk9gd"><rect id="SvgjsRect2429" width="249" height="103" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskx5ffk9gd"></clipPath><clipPath id="nonForecastMaskx5ffk9gd"></clipPath><clipPath id="gridRectMarkerMaskx5ffk9gd"><rect id="SvgjsRect2430" width="246" height="104" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2435" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2436" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.2"></stop><stop id="SvgjsStop2437" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop2438" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1.2"></stop><stop id="SvgjsStop2439" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1.2"></stop></linearGradient></defs><g id="SvgjsG2442" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2443" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2451" class="apexcharts-grid"><g id="SvgjsG2452" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2454" x1="0" y1="0" x2="242" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2455" x1="0" y1="10" x2="242" y2="10" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2456" x1="0" y1="20" x2="242" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2457" x1="0" y1="30" x2="242" y2="30" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2458" x1="0" y1="40" x2="242" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2459" x1="0" y1="50" x2="242" y2="50" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2460" x1="0" y1="60" x2="242" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2461" x1="0" y1="70" x2="242" y2="70" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2462" x1="0" y1="80" x2="242" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2463" x1="0" y1="90" x2="242" y2="90" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2464" x1="0" y1="100" x2="242" y2="100" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2453" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2466" x1="0" y1="100" x2="242" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2465" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2431" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2432" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2440" d="M0 100L0 75C16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C65.34 58.33333333333333 79.86 75 96.8 75C113.74 75 128.26 33.33333333333333 145.2 33.33333333333333C162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657C242 16.666666666666657 242 16.666666666666657 242 100M242 16.666666666666657C242 16.666666666666657 242 16.666666666666657 242 16.666666666666657 " fill="url(#SvgjsLinearGradient2435)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskx5ffk9gd)" pathTo="M 0 100L 0 75C 16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C 65.34 58.33333333333333 79.86 75 96.8 75C 113.74 75 128.26 33.33333333333333 145.2 33.33333333333333C 162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C 210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657C 242 16.666666666666657 242 16.666666666666657 242 100M 242 16.666666666666657z" pathFrom="M -1 100L -1 100L 48.4 100L 96.8 100L 145.2 100L 193.6 100L 242 100"></path><path id="SvgjsPath2441" d="M0 75C16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C65.34 58.33333333333333 79.86 75 96.8 75C113.74000000000001 75 128.26 33.33333333333333 145.2 33.33333333333333C162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657C242 16.666666666666657 242 16.666666666666657 242 16.666666666666657 " fill="none" fill-opacity="1" stroke="#ffffff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskx5ffk9gd)" pathTo="M 0 75C 16.939999999999998 75 31.46 58.33333333333333 48.4 58.33333333333333C 65.34 58.33333333333333 79.86 75 96.8 75C 113.74 75 128.26 33.33333333333333 145.2 33.33333333333333C 162.14 33.33333333333333 176.66 66.66666666666666 193.6 66.66666666666666C 210.54 66.66666666666666 225.06 16.666666666666657 242 16.666666666666657" pathFrom="M -1 100L -1 100L 48.4 100L 96.8 100L 145.2 100L 193.6 100L 242 100"></path><g id="SvgjsG2433" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2472" r="0" cx="0" cy="0" class="apexcharts-marker wiufdkn2k no-pointer-events" stroke="#e4e6ef" fill="#3f4254" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2434" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2467" x1="0" y1="0" x2="242" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2468" x1="0" y1="0" x2="242" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2469" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2470" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2471" class="apexcharts-point-annotations"></g></g><g id="SvgjsG2450" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG2427" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 50px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: inherit; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: inherit; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: inherit; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Stats-->
                        <div class="pt-5">
                            <!--begin::Number-->
                            <span class="text-dark fw-bolder fs-3x me-2 lh-0">{{  'R$ '.number_format($toReceive, 2, ',', '.') }}</span>
                            <!--end::Number-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 13-->
            </div>
            <!--end::Col-->
        </div>
        <!--begin::Row-->
        <div class="row g-5 g-xl-8">
            <!--begin::Col-->
            <div class="col-xl-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1"> @yield('title') </span>
                            <span class="text-muted mt-1 fw-bold fs-7">{{ count($movements) }} Movimentações</span>
                        </h3>
                        <div class="d-flex align-items-center py-1">
                            <!--begin::Wrapper-->
                            <div class="me-3">
                                <!--begin::Menu-->
                                <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Filter</a>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61ba8e05c294b">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61ba8e05c294b" data-allow-clear="true" data-select2-id="select2-data-7-rn54" tabindex="-1" aria-hidden="true">
                                                    <option data-select2-id="select2-data-9-hld4"></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-6xau" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-3qks-container" aria-controls="select2-3qks-container"><span class="select2-selection__rendered" id="select2-3qks-container" role="textbox" aria-readonly="true" title="Select option"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1">
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Wrapper-->
                            <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="" data-bs-original-title="Click to add a user">
                                <button onclick="AddMovement()" href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black"></rect>
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->Criar Lançamento
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted">
                                        <th class="min-w-80px">Data</th>
                                        <th class="min-w-150px">Descrição</th>
                                        <th class="min-w-150px">Tipo</th>
                                        <th class="min-w-120px">Valor</th>
                                        <th class="min-w-120px">Status</th>
                                        <th class="min-w-100px text-end">Ações</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($movements as $movement)
                                        <tr>
                                            <td>{{ date('d/m/Y', strtotime($movement->created_at)); }}</td>
                                            <td>
                                                <a href="{{ url('/movements', $movement->id)}}" class="text-dark fw-bolder text-hover-primary fs-6">{{ $movement->description }}</a>
                                            </td>
                                            <td>
                                                @if ($movement->type >= 1) 
                                                    <span class="badge badge-light-danger">Saída</span>
                                                @else 
                                                    <span class="badge badge-light-primary">Entrada</span>
                                                @endif
                                            </td>
                                            <td class="text-dark fw-bolder fs-6">
                                                {{  'R$ '.number_format($movement->value, 2, ',', '.') }}
                                                <span class="text-muted fw-bold text-muted d-block fs-7">
                                                    @switch($movement->payment)
                                                        @case(0)
                                                            Débito
                                                            @break
                                                        @case(1)
                                                            Crédito
                                                            @break
                                                        @case(2)
                                                            Dinheiro
                                                            @break
                                                        @case(3)
                                                            PIX
                                                            @break
                                                        @case(4)
                                                            Fiado
                                                            @break
                                                        @default
                                                            Default case...
                                                    @endswitch
                                                </span>
                                            </td>
                                            <td>
                                                @if ($movement->status >= 1) 
                                                    <span class="badge badge-light-info">À Receber</span>
                                                @else 
                                                    <span class="badge badge-light-success">Pago</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <a href="{{ url('/movements', $movement->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <form class="form-delete" action="{{ url('/movements', $movement->id)}}" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <button type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                                <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                                <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                </div>
            </div>
        </div>
    </div>
</div>
@include('modals.add-match')
<script>
    let modal = document.querySelector("#modal_add_match");

    function AddMovement(){
        console.log('cliquei');
        modal.classList.add("show-modal");
        modal.classList.add("show");
        modal.style.display = 'block';
    }

    function closeModal() {
        console.log('cliquei');
        modal.classList.remove("show-modal");
        modal.classList.remove("show");
        modal.style.display = 'none';
    }
</script>
@endsection


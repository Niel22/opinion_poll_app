<div>
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h2 class="">{{ $pageTitle }}</h2>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <a href="{{ route('home') }}" class="btn btn-sm btn-dark">Back to Polls</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- End Breadcrumbbar -->
        <div class="col-md-12 col-lg-12 col-xl-8 m-auto">
            <div class="card m-b-30">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="card-title mb-0"><small class="text-sm">SUBJECT:</small> Best Facility at Federal
                                Polytechnic Ilaro </h5>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <p><i class="feather icon-disc text-primary mr-2"></i>40% - Library</p>
                            <p><i class="feather icon-disc text-warning mr-2"></i>30% - ICT Centre</p>
                            <p><i class="feather icon-disc text-light mr-2"></i>15% - Sports Complex</p>
                            <p><i class="feather icon-disc text-danger mr-2"></i>15% - Engineering Workshops</p>
                        </div>
                        <div class="col-md-5">
                            <div class="chartjs-size-monitor"
                                style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                <div class="chartjs-size-monitor-expand"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink"
                                    style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                    <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                </div>
                            </div>
                            <canvas height="142" id="chartjs-pie-chart" width="142"
                                style="display: block; width: 142px; height: 142px;"
                                class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')
        <script>
            var pieChartID = document.getElementById("chartjs-pie-chart").getContext('2d');
            var pieChart = new Chart(pieChartID, {
                type: 'pie',
                data: {
                    datasets: [{
                        data: [15, 30, 20, 35],
                        borderColor: 'transparent',
                        backgroundColor: ["#6e81dc", "#fcc100", "#dcdde1", 'red'],
                        label: 'Dataset 1'
                    }],
                    labels: ['Library', 'ICT Centre', 'Sports Complex', 'Engineering Workshops']
                },
                options: {
                    responsive: true
                }
            });
        </script>
    @endpush

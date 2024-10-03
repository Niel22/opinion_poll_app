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
                        <div class="col-12">
                            <h5 class="card-title mb-0"><small class="text-sm">SUBJECT:</small> {{ $poll->title }} </h5>
                        </div>
                        <div class="col-12">
                            <p class=" mb-0"><small class="text-sm">Description:</small> {{ $poll->description }} </p>
                        </div>
                        <div class="col-12">
                            <p class=" mb-0"><small class="text-sm">Author:</small> {{ $poll->user->name }} </p>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            @foreach ($poll->options as $option)
                                @php
                                    $percentage = $poll->votes > 0 ? ($option->votes / $poll->votes) * 100 : 0;
                                @endphp
                                <p><i class="feather icon-disc" style="color: {{ $option->color }};"></i>
                                    {{ number_format($percentage) }}% - {{ $option->option }}</p>
                            @endforeach
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
                @if($poll->user_id == Auth::id())
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <button wire:click="delete('{{ $poll->id }}')" class="btn btn-danger btn-sm">Delete Poll</button>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    @push('script')
    @push('script')
    <script>
        var pollData = @json($poll->options->map(function($option) {
            return [
                'label' => $option->option,
                'votes' => $option->votes,
                'color' => $option->color
            ];
        }));

        var labels = pollData.map(option => option.label);
        var votes = pollData.map(option => option.votes);
        var colors = pollData.map(option => option.color);

        var pieChartID = document.getElementById("chartjs-pie-chart").getContext('2d');
        var pieChart = new Chart(pieChartID, {
            type: 'pie',
            data: {
                datasets: [{
                    data: votes,
                    borderColor: 'transparent',
                    backgroundColor: colors,
                    label: 'Poll Results'
                }],
                labels: labels
            },
            options: {
                responsive: true
            }
        });
    </script>
@endpush

    @endpush

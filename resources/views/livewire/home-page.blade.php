<div>
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h2 class="">{{ $pageTitle }}</h2>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="widgetbar">
                    <a href="{{ route('poll.create') }}" class="btn btn-sm btn-dark">Create Poll</a>
                </div>
            </div>
        </div>
    </div>

    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <div class="row" wire:poll.10s>
            <!-- Start col -->
            @forelse ($polls as $poll)
                @php
                    $totalVotes = $poll->totalVotes();
                @endphp

                <div class="col-lg-4 col-xl-4 col-sm-12">
                    <div class="card m-b-30">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Creator: {{ $poll->user->name }}</h5>
                            @if(\Carbon\Carbon::parse($poll->expiry_date)->isPast())
                            <h5 class="card-title">
                                Poll has ended</h5>
                                @else
                            <h5 class="card-title">Expires in:
                                {{  \Carbon\Carbon::parse($poll->expiry_date)->diffForHumans() }}</h5>
                                @endif
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h3 class="col-sm-12">{{ $poll->title }}</h3>
                            </div>
                            @if(\Carbon\Carbon::parse($poll->expiry_date)->isPast())
                            <div class="progressbar-list">
                                <div>
                                    @foreach ($poll->options as $option)
                                        @php
                                            $percentage =
                                                $totalVotes > 0 ? ($option->votes / $totalVotes) * 100 : 0; // Avoid division by zero
                                        @endphp
                                        <h5>{{ $option->option }}:</h5>
                                        <div class="progress mb-2 d-flex justify-content-between align-content-center"
                                            style="height: 25px;">
                                            <div class="progress-bar text-white text-center"
                                                style="background-color: {{ $option->color }}; width: {{ $percentage }}%;"
                                                role="progressbar" aria-valuenow="{{ $percentage }}"
                                                aria-valuemin="0" aria-valuemax="100">
                                                @if ($percentage >= 10)
                                                    <div class="d-flex align-items-center pr-1 justify-content-end">
                                                        <span class="text-white"
                                                            style="font-weight: bold; font-size: 13px">{{ number_format($percentage) }}%
                                                            <i
                                                                class="mdi mdi-check-circle-outline text-success me-2"></i>
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                            @if ($percentage < 10)
                                                <div class="d-flex align-items-center pr-1">
                                                    <span class="text-dark"
                                                        style="font-weight: bold; font-size: 13px">{{ number_format($percentage) }}%
                                                        <i
                                                            class="mdi mdi-check-circle-outline text-success me-2"></i>
                                                    </span>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="{{ route('poll.view', Crypt::encryptString($poll->id)) }}"
                                    class="btn btn-sm btn-secondary">View
                                    Details</a>
                            </div>
                            @else
                            @if ($poll->hasUserVoted(Auth::id()))
                                <div class="progressbar-list">
                                    <div>
                                        @foreach ($poll->options as $option)
                                            @php
                                                $percentage =
                                                    $totalVotes > 0 ? ($option->votes / $totalVotes) * 100 : 0; // Avoid division by zero
                                            @endphp
                                            <h5>{{ $option->option }}:</h5>
                                            <div class="progress mb-2 d-flex justify-content-between align-content-center"
                                                style="height: 25px;">
                                                <div class="progress-bar text-white text-center"
                                                    style="background-color: {{ $option->color }}; width: {{ $percentage }}%;"
                                                    role="progressbar" aria-valuenow="{{ $percentage }}"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                    @if ($percentage >= 10)
                                                        <div class="d-flex align-items-center pr-1 justify-content-end">
                                                            <span class="text-white"
                                                                style="font-weight: bold; font-size: 13px">{{ number_format($percentage) }}%
                                                                <i
                                                                    class="mdi mdi-check-circle-outline text-success me-2"></i>
                                                            </span>
                                                        </div>
                                                    @endif
                                                </div>
                                                @if ($percentage < 10)
                                                    <div class="d-flex align-items-center pr-1">
                                                        <span class="text-dark"
                                                            style="font-weight: bold; font-size: 13px">{{ number_format($percentage) }}%
                                                            <i
                                                                class="mdi mdi-check-circle-outline text-success me-2"></i>
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('poll.view', Crypt::encryptString($poll->id)) }}"
                                        class="btn btn-sm btn-secondary">View
                                        Details</a>
                                </div>
                            @else
                                <div class="row">
                                    <label class="col-12">Choose from the available options</label>
                                    @foreach ($poll->options as $option)
                                        <div class="col-12 mb-2" wire:loading.remove wire:target="vote('{{ $option->id }}', '{{ $poll->id }}')">
                                            <button wire:click="vote('{{ $option->id }}', '{{ $poll->id }}')"
                                                class="btn btn-sm w-100 text-white"
                                                style="background-color: {{ $option->color }}">{{ $option->option }}</button>
                                        </div>
                                    @endforeach
                                        <div wire:target="vote('{{ $option->id }}', '{{ $poll->id }}')" wire:loading wire:loading.class="col-12 text-center" style="padding: 50px">
                                            <div class="spinner-border m-auto " role="status" aria-hidden="true"></div>
                                        </div>
                                </div>
                            @endif
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12 col-xl-12 col-sm-12 alert alert-secondary alert-sm text-center">
                    No Polls available for you
                </div>
            @endforelse

            <!-- End col -->
        </div>
    </div>
</div>

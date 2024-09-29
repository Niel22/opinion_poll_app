<div>
    <!-- Start Breadcrumbbar -->
    <div class="breadcrumbbar card mb-3">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-12">
                <h2 class="text-capitalize">{{ $pageTitle }}</h2>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbbar -->
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-8 m-auto">
            <div class="card m-b-30">

                <div class="card-body">
                    <h6 class="card-subtitle">Fill in the details below to create a new poll.</h6>

                    <!-- Poll Question Section -->
                    <div class="form-group mb-4">
                        <label for="pollQuestion" class="h5">Poll Question</label>
                        <input wire:model="pollQuestion" type="text" class="form-control" id="pollQuestion"
                               placeholder="Enter poll question" required>
                    </div>

                    <!-- Options Section -->
                    <div class="card shadow mb-4 p-3"> <!-- Card to highlight options -->
                        <h6 class="card-title">Poll Options</h6>
                        @foreach ($options as $index => $option)
                            <label for="option{{ $index }}" class="me-2">Option {{ $index + 1 }}</label>
                            <div class="form-group d-flex align-items-center mb-3"> <!-- Flexbox for alignment -->
                                <input type="text" class="form-control me-2"
                                       wire:model="options.{{ $index }}" placeholder="Enter option" required>
                                @if ($index > 1)
                                    <button type="button" class="btn btn-danger ml-1"
                                            wire:click="removeOption({{ $index }})" title="Remove Option">
                                        <i class="mdi mdi-delete"></i> <!-- Trash icon -->
                                    </button>
                                @endif
                            </div>
                        @endforeach

                        @if (count($options) < 10)
                            <button type="button" class="btn btn-secondary mb-2 d-flex justify-content-end" wire:click="addOption">Add
                                More Options</button>
                        @endif
                    </div>

                    <!-- Poll Expiry Section -->
                    <div class="form-group">
                        <label for="pollExpiry">Poll Expiry Date</label>
                        <input wire:model="expiry" type="datetime-local" class="form-control" id="pollExpiry" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Poll</button>
                </div>

            </div>

        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>

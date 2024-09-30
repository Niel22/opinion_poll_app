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
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-8 m-auto">
            <div class="card m-b-30">

                <div class="card-body">

                    <!-- Poll Question Section -->
                    <div class="form-group mb-4">
                        <label for="pollQuestion" class="h5">Title</label>
                        <input wire:model="pollQuestion" type="text" class="form-control" id="pollQuestion"
                               placeholder="Enter poll question" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="pollQuestion" class="h5">Description</label>
                        <textarea wire:model="pollDescription" class="form-control" id="pollQuestion"
                               placeholder="Enter poll description" required></textarea>
                    </div>

                    <!-- Options Section -->
                    <div class="card shadow mb-4 p-3"> <!-- Card to highlight options -->
                        <h6 class="card-title">Options</h6>
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
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary mb-2" wire:click="addOption">Add
                                More Options
                            </button>
                        </div>
                        @endif
                    </div>

                    <!-- Poll Expiry Section -->
                    <div class="form-group">
                        <label for="pollExpiry">Poll Expiry Date</label>
                        <input wire:model="expiry" type="datetime-local" class="form-control" id="pollExpiry" required>
                    </div>

                    <div class="form-group">
                        <label for="pollExpiry">Audience <small class="muted">(Select who you want to participate in this poll.)</small></label>
                        <select class="form-control" wire:model="audience">
                            <option value="">Select audience</option>
                            <option value="everybody">Everybody</option>
                            <option value="staffs">Staffs</option>
                            <option value="students">Students</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pollExpiry">Faculty <small class="muted">(Select the faculty that this poll is for.)</small></label>
                        <select class="form-control" wire:model="faculty">
                            <option value="">Select Faculty</option>
                            <option value="all faculty">All Faculty</option>
                            <option value="school of pure and applied science">School of Pure and Applied Science</option>
                            <option value="school of agric">School of Agric</option>
                            <option value="school of engineering">School of Engineering</option>
                            <option value="school of environmental studies">School of Environmental Studies</option>
                            <option value="school of management studies">School of Management Studies</option>
                            <option value="school of communication and information">School of Communication and Information</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pollExpiry">Department <small class="muted">(Select the department that this poll is for.)</small></label>
                        <select class="form-control" wire:model="faculty">
                            <option value="">Select Department</option>
                            <option value="all department">All Department under this faculty</option>
                            <option value="computer science">Computer Science</option>
                            <option value="food technology">Food Technology</option>
                            <option value="nutrition and diatetics">Nutrition and Diatetics</option>
                            <option value="mathematics and statistic">Mathematics and Statistic</option>
                            <option value="hospitality management">Hospitality Management</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Create Poll</button>
                </div>

            </div>

        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>

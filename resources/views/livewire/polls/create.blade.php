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
        <!-- Start row -->
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-8 m-auto">
                <div class="card m-b-30">

                    <form wire:submit="create" class="card-body">

                        <!-- Poll Question Section -->
                        <div class="form-group mb-4">
                            <label for="pollQuestion" class="h5">Title</label>
                            <input wire:model="title" type="text" class="form-control" id="pollQuestion"
                                placeholder="Enter poll question">
                            @error('title')
                                <span class="text-sm text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="pollDescription">Description<small class="muted">(Describe what the poll is
                                    about.)</small></label>
                            <textarea wire:model="description" class="form-control" id="pollQuestion" placeholder="Enter poll description"></textarea>
                            @error('description')
                                <span class="text-sm text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Options Section -->
                        <div class="card shadow mb-4 p-3"> <!-- Card to highlight options -->
                            <h6 class="card-title">Options (Min of 2 and Max of 10)</h6>
                            @foreach ($options as $index => $option)
                                <label for="option{{ $index }}" class="me-2">Option {{ $index + 1 }}</label>
                                <div class="form-group d-flex align-items-center mb-3"> <!-- Flexbox for alignment -->
                                    <input type="text" class="form-control me-2"
                                        wire:model="options.{{ $index }}" placeholder="Enter option">
                                    @error('options')
                                        <span class="text-sm text-danger">{{ $message }}</span>
                                    @enderror
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
                            <input wire:model="expiry_date" type="datetime-local" class="form-control" id="pollExpiry">
                            @error('expiry_date')
                                <span class="text-sm text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pollExpiry">Audience <small class="muted">(Select who you want to participate
                                    in this poll.)</small></label>
                            <select class="form-control" wire:model="audience">
                                <option value="">Select audience</option>
                                <option value="everybody">Everybody</option>
                                <option value="staffs">Staffs</option>
                                <option value="students">Students</option>
                            </select>
                            @error('audience')
                                <span class="text-sm text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="faculty">Faculty <small class="muted">(Select the faculty that this poll is
                                    for.)</small></label>
                            <select class="form-control" wire:model.live="faculty_id">
                                <option value="">Select Faculty</option>
                                <option value="all faculty">All Faculty</option>
                                @foreach ($faculties as $faculty)
                                    <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                                @endforeach
                            </select>
                            @error('faculty_id')
                                <span class="text-sm text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if (!empty($departments))
                            <div class="form-group">
                                <label for="department">Department <small class="muted">(Select the department that
                                        this poll is for.)</small></label>
                                <select class="form-control" wire:model="department_id">
                                    <option value="">Select Department</option>
                                    <option value="all department">All Department under this faculty</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                                @error('department_id')
                                    <span class="text-sm text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        @endif
                        <div wire:loading wire:loading.class="d-block">
                            <div class="d-flex align-items-center">
                                <strong>Loading...</strong>
                                <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div>
                            </div>
                        </div>
                        <button wire:loading.attr="disabled" type="submit" class="btn btn-primary">Create Poll</button>
                    </form>

                </div>

            </div>
            <!-- End col -->
        </div> <!-- End row -->
    </div>

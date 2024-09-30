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
        <div class="row">
            <!-- Start col -->
            <div class="col-lg-4 col-xl-4 col-sm-12">
                <div class="card m-b-30">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title">Creator: James Daniel</h5>
                        <h5 class="card-title">Expires in: 2 days</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <h3 class="col-sm-12">Best Facility at Federal Polytechnic Ilaro</h3>
                        </div>
                        <div class="row">
                            <label class="col-12">Choose from the available options</label>
                            <div class="col-12 mb-2">
                                <button class="btn btn-sm btn-warning w-100">Library</button>
                            </div>
                            <div class="col-12 mb-2">
                                <button class="btn btn-sm btn-info w-100">ICT Centre</button>
                            </div>
                            <div class="col-12 mb-2">
                                <button class="btn btn-sm btn-secondary w-100">Sports Complex</button>
                            </div>
                            <div class="col-12 mb-2">
                                <button class="btn btn-sm btn-success w-100">Engineering Workshops</button>
                            </div>
                        </div>
                        <div class="progressbar-list">
                            <div>
                                <!-- Option 1 -->
                                <h5>Library:</h5>
                                <div class="progress mb-2 d-flex justify-content-between align-content-center"
                                    style="height: 25px;">
                                    <div class="progress-bar bg-warning text-white text-center" role="progressbar"
                                        style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="d-flex align-items-center pr-1">
                                        <span class="text-dark" style="font-weight: bold; font-size: 20px">45% <i
                                                class="mdi mdi-check-circle-outline text-success me-2"></i></span>
                                    </div>
                                </div>

                                <!-- Option 2 -->
                                <h5>ICT Centre:</h5>
                                <div class="progress mb-2 d-flex justify-content-between align-content-center"
                                    style="height: 25px;">
                                    <div class="progress-bar bg-info text-white text-center" role="progressbar"
                                        style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="d-flex align-items-center pr-1">
                                        <span class="text-dark" style="font-weight: bold; font-size: 20px">35% <i
                                                class="mdi mdi-check-circle-outline text-success me-2"></i></span>
                                    </div>
                                </div>

                                <!-- Option 3 -->
                                <h5>Sports Complex:</h5>
                                <div class="progress mb-2 d-flex justify-content-between align-content-center"
                                    style="height: 25px;">
                                    <div class="progress-bar bg-secondary text-white text-center" role="progressbar"
                                        style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="d-flex align-items-center pr-1">
                                        <span class="text-dark" style="font-weight: bold; font-size: 20px">15% <i
                                                class="mdi mdi-check-circle-outline text-success me-2"></i></span>
                                    </div>
                                </div>

                                <!-- Option 4 -->
                                <h5>Engineering Workshops:</h5>
                                <div class="progress mb-2 d-flex justify-content-between align-content-center"
                                    style="height: 25px;">
                                    <div class="progress-bar bg-success text-white text-center" role="progressbar"
                                        style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="d-flex align-items-center pr-1">
                                        <span class="text-dark" style="font-weight: bold; font-size: 20px">5% <i
                                                class="mdi mdi-check-circle-outline text-danger me-2"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('poll.view') }}" class="btn btn-sm btn-secondary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End col -->
        </div>
    </div>
</div>

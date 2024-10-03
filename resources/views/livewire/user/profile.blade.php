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
        <div class="col-xl-8 col-md-12 m-auto">
            <div class="card custom-card">
                <div class="card-body text-center">
                    <div class="main-profile-overview widget-user-image text-center">
                        <div class="main-img-user"><img alt="avatar" src="{{ asset('assets/images/users/profile.svg') }}"
                                style="filter: invert(0);"></div>
                    </div>
                    <div class="item-user pro-user">
                        <h4 class="pro-user-username text-dark mt-2 mb-0">{{ Auth::user()->name }}</h4>
                        <p class="pro-user-desc text-muted mb-1">{{ Auth::user()->role }}</p>

                    </div>
                </div>
                <div class="card-footer p-0">
                    <div class="row text-center">
                        <div class="col-sm-6 border-right">
                            <div class="description-block">
                                <h5 class="description-header mb-1">689k</h5> <span class="text-muted">Total Polls</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="description-block">
                                <h5 class="description-header mb-1">3,765</h5> <span class="text-muted">Totak Poll Participation</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card custom-card">
                <div class="card-header custom-card-header rounded-bottom-0">
                    <div>
                        <h6 class="card-title mb-0">Contact Information</h6>
                    </div>
                </div>
                <div class="card-body">
                    <div class="main-profile-contact-list main-profile-work-list">
                        <div class="media">
                            <div class="media-logo bg-light text-dark"> <i class="fe fe-phone tx-15"></i> </div>
                            <div class="media-body"> <span>Email:</span>
                                <div style="font-weight: bold"> niel2264@gmail.com </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-profile-contact-list main-profile-work-list">
                        <div class="media">
                            <div class="media-logo bg-light text-dark"> <i class="fe fe-phone tx-15"></i> </div>
                            <div class="media-body"> <span>Faculty:</span>
                                <div style="font-weight: bold"> {{ Auth::user()->faculty->name }} </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-profile-contact-list main-profile-work-list">
                        <div class="media">
                            <div class="media-logo bg-light text-dark"> <i class="fe fe-phone tx-15"></i> </div>
                            <div class="media-body"> <span>Department:</span>
                                <div style="font-weight: bold"> {{ Auth::user()->department->name }} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

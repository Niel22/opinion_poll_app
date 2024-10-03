<div id="infobar-notifications-sidebar" class="infobar-notifications-sidebar" wire:poll.15s>
    <div class="infobar-notifications-sidebar-head d-flex w-100 justify-content-between">
        <h4>Notifications</h4><a href="javascript:void(0)" id="infobar-notifications-close" class="infobar-notifications-close"><img src="{{ asset('assets/images/svg-icon/close.svg') }}" class="img-fluid menu-hamburger-close" alt="close"></a>
    </div>
    <div class="infobar-notifications-sidebar-body">
        <div class="tab-content" id="infobar-pills-tabContent">
            <div class="tab-pane fade show active" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                <ul class="list-unstyled">
                    @forelse($notifications as $notification)
                    <li class="media"><div class="media-body">
                            <h5>Hey {{ Auth::user()->name }}<span class="timing">{{ $notification->created_at->diffForHumans() }}</span></h5>
                            <p>{{ $notification->notification }}</p>
                        </div>
                    </li>
                    @empty
                    <li class="media"><div class="media-body">
                        <span class="alert alert-info alert-sm text-center">No notifications for you yet</span>
                    </div>
                </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
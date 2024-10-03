<div>
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h2 class="">{{ $pageTitle }}</h2>
            </div>
        </div>
    </div>

    <!-- End Breadcrumbbar -->
    <!-- Start Contentbar -->
    <div class="contentbar">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="table-responsive m-b-30">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Creator</th>
                                    <th scope="col">Total Votes</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Expires</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($polls as $index => $poll)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $poll->title }}</td>
                                    <td>{{ $poll->user->name }}</td>
                                    <td>{{ $poll->votes }}</td>
                                    <td>{{ $poll->created_at->format('d D, M Y') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($poll->expiry_date)->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('poll.view', Crypt::encryptString($poll->id)) }}" class="btn btn-sm btn-secondary">View</a>
                                        <button wire:click="delete('{{ $poll->id }}')" class="btn btn-sm btn-danger">Delete</button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="alert alert-secondary alert-sm text-center" colspan="6">No Polls Created yet</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

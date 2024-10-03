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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Total Poll Created</th>
                                    <th scope="col">Date Joined</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $index => $user)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->polls->count() }}</td>
                                    <td>{{ $user->created_at->format('d D, M Y') }}</td>
                                    <td>
                                        <button wire:click="delete('{{ $user->id }}')" class="btn btn-sm btn-danger">Delete</button>
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

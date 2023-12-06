@extends('layouts.user_type.auth')

@section('title', 'Taripar Hub')

@section('content')

    <div>
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">Semua Pengguna</h5>
                            </div>
                            <a href="user-management/add" class="btn bg-gradient-primary btn-sm mb-0" type="button" style="text-transform: none;">+&nbsp; Tambah Pengguna</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="text-transform: none;">
                                            Nama
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="text-transform: none;">
                                            No. Telepon
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="text-transform: none;">
                                            Tanggal Dibuat
                                        </th>
                                    </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="text-transform: none;">
                                            Opsi
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($users as $user)
                                    @if($user->id > 100)
                                    <tr>
                                        <td class="text-center">{{ $user->name }}</td>
                                        <td class="text-center">{{ $user->phone }}</td>
                                        <td class="text-center">{{ $user->created_at->format('d/m/Y') }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-primary btn-sm reveal-password" style="text-transform: none;">Reset Password</button>
                                            <!-- <button class="btn btn-primary btn-sm reveal-password">Reset Password</button> -->
                                            <!-- <a href="user-management/{{ $user->id }}/edit" class="btn btn-success btn-sm">Edit</a> -->
                                            <form action="/user-management/{{ $user->id }}/remove" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" 
                                                    onclick="return confirm('Are you sure you want to remove user {{ $user->name }}?')" style="text-transform: none;">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
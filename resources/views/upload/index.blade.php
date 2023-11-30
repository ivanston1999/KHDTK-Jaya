@extends('layouts.user_type.auth')

@section('title', 'Taripar Hub')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-12 col-md-8">
            <h1>Upload Gambar Lahan</h1>
        </div>
        <div class="col-12 col-md-4 text-md-right">
            <a href="{{ route('uploads.create') }}" class="btn btn-primary" style="font-size: 14px; text-transform: lowercase;">+ Tambahkan</a>
        </div>
    </div>
    <hr>

    <div class="row">
        <div class="col-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="table-responsive">
                        <table class="table table-bordered text-sm">
                            <thead>
                                <tr>
                                    <th>Nama Lahan</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Gambar Lahan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($uploads as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->updated_at }}</td>
                                        <td>
                                            <img class="img-fluid w-48 h-48" src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}">
                                        </td>
                                        <td>
                                            <a href="{{ route('uploads.show', $post->id) }}" class="btn btn-info mr-2">Tampilkan</a>
                                            <a href="{{ route('uploads.edit', $post->id) }}" class="btn btn-warning mr-2">Edit</a>
                                            <form method="post" action="{{ route('uploads.destroy', $post->id) }}" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
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

<style>
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .table-responsive {
        overflow-x: auto;
    }
</style>

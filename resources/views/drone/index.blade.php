@extends('layouts.user_type.auth')

@section('title', 'Taripar Hub')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-12 col-md-8">
            <h1>Upload Gambar Lahan</h1>
        </div>
        <div class="col-12 col-md-4 text-md-right">
            <a href="{{ route('drones.create') }}" class="btn btn-primary" style="font-size: 12px; text-transform: none;">+ Tambahkan</a>
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
                                @foreach ($drones as $post)
                                    <tr>
                                        <td>{{ $post->nama }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>{{ $post->updated_at }}</td>
                                        <td>
                                            <img class="img-fluid w-48 h-48" src="{{ Storage::url($post->gambar) }}" alt="{{ $post->nama }}">
                                        </td>
                                        <td>
                                            <a href="{{ route('drones.show', $post->id) }}" class="btn" style="text-transform: none;" title="Lihat">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('drones.edit', $post->id) }}" class="btn" style="text-transform: none;" title="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form method="POST" action="{{ route('drones.destroy', $post->id) }}" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn" style="text-transform: none;" title="Hapus">
                                                    <i class="fa fa-trash"></i>
                                                </button>
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
    .table-responsive {
        overflow-x: auto;
    }

    .text-sm {
        text-align: center;
    }

    .img-fluid {
        width: 100px;
        weight: 100px;
        height: auto; 
        display: block;
        margin: auto;
    }

    .table td, .table th {
        vertical-align: middle;
        text-align: center;
    }
</style>

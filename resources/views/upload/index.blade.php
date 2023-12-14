@extends('layouts.user_type.auth')

@section('title', 'Taripar Hub')

@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-12 col-md-8">
            <h1>Upload Gambar Tanaman</h1>
        </div>
        <div class="col-12 col-md-4 text-md-right">
            <a href="{{ route('uploads.create') }}" class="btn btn-primary" style="font-size: 12px; text-transform: none;">+&nbsp; Tambahkan</a>
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
                                    <th>Nama Tanaman</th>
                                    <th>Tanggal Unggah</th>
                                    <th>Tanggal Perbaharui</th>
                                    <th>Gambar Tanaman</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($uploads as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->created_at->timezone('Asia/Jakarta')->format('d/m/Y H:i:s') }}</td>
                                        <td>{{ $post->updated_at->timezone('Asia/Jakarta')->format('d/m/Y H:i:s') }}</td>
                                        <td>
                                            <img class="img-fluid w-48 h-48" src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}">
                                        </td>
                                        <td>
                                            <a href="{{ route('uploads.show', $post->id) }}" class="btn" style="text-transform: none;" title="Lihat">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('uploads.edit', $post->id) }}" class="btn" style="text-transform: none;" title="Edit">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form method="post" action="{{ route('uploads.destroy', $post->id) }}" class="d-inline">
                                                @csrf
                                                @method('delete')
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

    .text-md-right {
        text-align: right;
    }

</style>

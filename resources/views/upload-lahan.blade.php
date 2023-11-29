@extends('layouts.user_type.auth')

@section('title', 'Taripar Hub')

@section('content')
<div class="container">
    <h1>Upload Foto Lahan</h1>
    <hr>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
        @csrf
        <div class="form-group">
            <label for="name">Nama Lahan</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        
        <div class="form-group">
            <label for="location">Lokasi Lahan</label>
            <input type="text" class="form-control" name="location" id="location" required>
        </div>

        <div class="form-group">
            <label for="photo">Upload Foto</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="photo" name="photo" accept=".jpg,.jpeg,.png" required>
                </div>
            </div>
        </div>        

        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
</div>

<script>
    function validateForm() {
        let isValid = true;
        let fields = ['name', 'location', 'photo'];
        let fieldNames = ['Nama Lahan', 'Lokasi Lahan', 'Foto Lahan'];
    
        for (let i = 0; i < fields.length; i++) {
            let field = document.getElementById(fields[i]);
            if (!field.value) {
                alert(fieldNames[i] + " harus diisi.");
                field.focus();
                isValid = false;
                break; 
            }
        }
    
        return isValid; 
    }
</script>

<style>
    h1 {
        font-size: 28px;
    }

    label {
        font-size: 14px;
        font-weight: bold;
    }

    .custom-file-input {
        border-radius: 5px;
        border: 1px solid #ced4da;
    }

    .custom-file-label {
        border-radius: 5px;
        background-color: white;
        border: 1px solid #ced4da;
    }

    .input-group {
        margin-bottom: 1rem;
    }
</style>
@endsection
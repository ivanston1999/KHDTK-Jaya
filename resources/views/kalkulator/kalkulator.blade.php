@extends('layouts.user_type.auth')

@section('title', 'Kalkulator')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh; margin-top: -40px; ">
    <div class="wrapper">
        <div class="form">

            <h2 class="title">Kalkulator Pertanian</h2>
            <form action="{{ route('kalkulators.store') }}" method="POST" class="myform">
                @csrf

                <div class="control-from">
                    <label for="komoditas">Komoditas</label>
                    <select id="komoditas" name="komoditas" required>
                        <option value="">Pilih Komoditas</option>
                            <option value="jagung">Jagung</option>
                            <option value="kubis">Kubis</option>
                            <option value="cabai">Cabai</option>
                            <option value="bawang merah">Bawang Merah</option>
                            <option value="kentang">Kentang</option>
                    </select>
                </div>


                <div class="control-from">
                    <label for="varietas">Varietas</label>
                    <input type="text" id="varietas" name="varietas" value="" required>
                </div>

                <div class="control-from">
                    <label for="jarak">Jarak Tanam</label>
                    <select id="jarak" name="jarak" required>
                        <option value="">Pilih Jarak Tanam</option>
                        <option value="70 x 20">70 x 20 cm</option>
                        <option value="70 x 25">70 x 25 cm</option>
                    </select>
                </div>

                <div class="control-from">
                    <label for="luas">Luas Lahan</label>
                    <input type="text" name="luas" id="luas" value="" required>
                </div>

                <div class="full-width">
                    <label for="date">Tanggal Tanam</label>
                    <input type="date" id="date" name="date" value="" required>
                </div>

                <div class="button">
                    <button type="submit" id="register" class="btn">Hitung</button>
                    <a href="{{ route('kalkulators') }}" class="btn">Lihat Hasil</a>
                </div>
            </form>
        </div>
    </div>
</div>


<style>
    body {
        margin: 0;
        padding: 0;
    }

    .wrapper {
        width: 700px;
        border-radius: 30px;
        box-shadow: 0 25px 70px rgba(0, 0, 0, 0.3);
        overflow: hidden;


    }

    h2.title {
        padding: 20px 0;
        margin-left: 25px;
        font-weight: normal;
        color: black;
        text-align: center;
    }

    .form {
        width: 700px;


    }

    .myform {
        background: #F4F5F7;
        padding: 60px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 25px
    }

    .myform label {
        display: block;
        color: black;
        font-weight: bold;
        font-size: .8rem;
        margin-bottom: 10px;
        border-radius: 20px;
    }


    .control-from select {
        width: 100%;
        /* Full width */
        padding: 8px 12px;
        /* Padding inside the dropdown */
        border: 1px solid #ccc;
        /* Border color */
        border-radius: 20px;
        /* Rounded corners */
        background-color: #fff;
        /* Background color */
        font-size: 0.9rem;
        /* Text size */
        color: #333;
        /* Text color */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Optional: adds a slight shadow for depth */
        appearance: none;
        height: 50px;
    }

    .myform input {
        border: 1px solid #ccc;
        outline: 0;
        height: 50px;
        background: #FFF;
        width: 100%;
        border-radius: 20px;
        color: #333;
        font-weight: 700;
        font-size: .9rem;
        text-indent: 15px;
        transition: border 250ms;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .full-width {
        grid-column: -1 / 1
    }

    .button {
        grid-column: -1 / 1;
        display: flex;
        justify-content: center;
    }

    .button button {
        border: 0;
        outline: 0;
        width: 120px;
        height: 40px;
        border-radius: 50px;
        color: #FFF;
        font-weight: bold;
        font-size: .9rem;
        cursor: pointer;
        background: black;
    }

    .button a {
        border: 0;
        outline: 0;
        width: 120px;
        height: 40px;
        border-radius: 50px;
        color: #FFF;
        font-weight: bold;
        font-size: .8rem;
        cursor: pointer;
        background: black
    }

    .button button:hover {
        background: #0056b3;
    }

    .btn {
    padding: 10px 20px; /* Atur padding untuk konsistensi */
    font-size: 16px; /* Atur ukuran font */
    font-weight: bold; /* Atur ketebalan teks */
    color: white; /* Warna teks */
    background-color: #000000; /* Warna latar */
    border: none; /* Hapus border */
    border-radius: 20px; /* Atur radius border untuk efek bulat */
    cursor: pointer; /* Tampilkan cursor pointer */
    text-transform: uppercase; /* Kapitalisasi teks */
    text-decoration: none; /* Hapus underline pada teks */
    display: inline-flex; /* Gunakan inline-flex untuk centering teks */
    align-items: center; /* Centering vertikal */
    justify-content: center; /* Centering horizontal */
    transition: background-color 0.3s; /* Efek transisi untuk hover */
    margin-right: 10px; /* Tambahkan margin kanan */
    }

    .btn:hover {
        background-color: #0056b3;
    }

    @media (max-width: 768px) {
    .wrapper {
        width: 100%;
        padding: 20px;
    }

    .form {
        width: 100%;
    }

    .myform {
        grid-template-columns: 1fr;
        padding: 20px;
    }

    .full-width {
        grid-column: auto;
    }

    .button {
        flex-direction: column; /* Stack buttons vertically */
    }

    .button button,
    .button a {
        margin-bottom: 10px; /* Add space between stacked buttons */
        width: auto; /* Make buttons take the full width */
    }

    .control-from select,
    .myform input {
        height: auto; /* Adjust height for touch targets */
    }
}
</style>
@endsection

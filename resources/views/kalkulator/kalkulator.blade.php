@extends('layouts.user_type.auth')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="wrapper">
        <div class="form">
<div style="text-align: end;">
      <a href="{{ route('kalkulators') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button" >Lihat Hasil </a>

</div>
<h1 class="title">Kalkulator Pertanian</h1>



            <form  action="{{ route('kalkulators.store') }}" method="POST" class="myform">
                @csrf

                <div class="control-from">
                    <label for="komoditas">Komoditas</label>
                    <select id="komoditas" name="komoditas" required>
                        <option value="">Pilih Komoditas</option>
                        <option value="jagung">Jagung</option>
                        <option value="kubis">Kubis</option>
                        <option value="cabai">Cabai</option>
                        <option value="bawang_merah">Bawang Merah</option>
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
                    <label for="luas" >Luas Lahan</label>
                    <input type="text" name="luas" id="luas"  value="" required>
                </div>

                <div class="full-width">
                    <label for="date">Tanggal Tanam</label>
                    <input type="date" id="date" name="date" value="" required>
                </div>

                <div class="button">
                    <button type="submit" id="register">Hitung</button>
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
        border-radius: 10px;
        box-shadow: 0 25px 70px rgba(0, 0, 0, .05);
        overflow: hidden;


    }

    h1.title {
        padding: 15px 0;
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
        font-size: 1rem;
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
        height: 50px;
        border-radius: 50px;
        color: #FFF;
        font-weight: bold;
        font-size: .9rem;
        cursor: pointer;
        background: linear-gradient(356deg, rgba(57, 50, 173, 1) 0%, rgba(87, 50, 173, 1) 100%);
    }

    .button button:hover {
        background: rgba(57, 50, 173, 1);
    }
</style>
@endsection

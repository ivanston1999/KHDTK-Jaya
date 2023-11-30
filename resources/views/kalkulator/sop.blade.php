@extends('layouts.user_type.auth')

@section('content')

<!--
ini untuk set tanggal -->
<?php
$date1 = $kalkulator->date;
$ubahDate1 = date('d-m-Y', strtotime($date1 . ' + 1 days'))
?>

<body class="bg-gray-300">
    <div class="container mx-auto  p-8 bg-white shadow-lg rounded-lg" style="border-radius: 40px; margin-top: -25px;">
        <h2 class="text-2xl font-bold text-center mb-6" style="margin-top: -40px;">SOP Pertanian Bawang Merah</h2>
        <div class="overflow-x-auto relative" >
            <table>



            </table>
        </div>
    </div>

</body>
@endsection

@extends('layouts.user_type.auth')

@section('', 'Kalkulator')

@section('content')
@foreach($kalkulators as $kalkulator)
<?php
$date1 = $kalkulator->date;
$ubahDate1 = date('d-m-Y', strtotime($date1 . ' + 1 days'));
?>
@endforeach

<div>
    <div class="row" style="margin-top: -30px;">
        <div class="col-12">
            <div class="card mb-4 mx-2">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between" style="margin-bottom: 30px;">
                        <div>
                            <h5 class="mb-0">Hasil Perhitungan</h5>
                        </div>
                        <a href="{{ route('cabai.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Hitung</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-bold text-xl-start font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th class="text-center text-uppercase text-bold text-xl-start font-weight-bolder opacity-7">
                                        Date
                                    </th>
                                    <th class="text-center text-uppercase text-bold text-xl-start font-weight-bolder opacity-7">
                                        Aktivitas
                                    </th>
                                    <th class="text-center text-uppercase text-bold text-xl-start font-weight-bolder opacity-7">
                                        Item
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cabai as $row => $cabai)

                                <tr>
                                    <td class="ps-4">
                                        {{ $row + 1 }}
                                    </td>
                                    @foreach($kalkulators as $kalkulator)
                                     <td class="text-center">
                                        {{ $ubahDate1  }}
                                    </td>
                                      @endforeach
                                    <td class="text-center">
                                        {{ $cabai->aktivitas }}
                                    </td>
                                    <td class="text-center">
                                        {{ $cabai->item }}
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data.</td>
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
<style>
    .card {
        margin: 1rem;
        padding: 1rem;
        border-radius: 30px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.45);
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #eaecef;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);

    }

    body {
        font-family: 'Arial', sans-serif;
        font-size: 14px;
    }

    h5 {
        color: #333;
        margin-bottom: 0.5rem;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    thead th {
        background-color: #e9ecef;
        color: #495057;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tbody tr:hover {
        background-color: #ddd;
    }

    .btn {
        background-color: #007bff;
        color: white;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .fas {
        color: #6c757d;
        margin-right: 5px;
    }

    .text-xl-start {
        font-size: 14px;
    }

    .horizontal-icons {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-link {
        margin: 0 5px;
    }
</style>
@endsection

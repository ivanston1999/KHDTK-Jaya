@extends('layouts.user_type.auth')

@section('', 'Kalkulator')

@section('content')

<div>
    <div class="row" style="margin-top: -30px;">
        <div class="col-12">
            <div class="card mb-4 mx-2">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between" style="margin-bottom: 30px;">
                        <div>
                            <h5 class="mb-0">Hasil Perhitungan</h5>
                        </div>
                        <a href="{{ route('status.create') }}" class="btn bg-black btn-sm mb-0" type="button">+&nbsp; Hitung</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-chamelcase text-bold text-xl-start font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($statuses as $status)
                                <tr>
                                    <td class="ps-4">
                                        {{ $status->status }}
                                    </td>
                                    <!-- Other table data -->
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

@extends('layouts.user_type.auth')

@section('content')

<div>


    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Users</h5>
                        </div>
                        <a href="{{ route('kalkulators.create') }}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Hitung</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Komoditas
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Varietas
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Jarak Tanam
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Luas Lahan
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Tanggal Tanam
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($Kalkulators as $row => $kalkulator)
                                <tr>
                                    <td class="ps-4">
                                        {{ $row + 1 }}
                                    </td>
                                    <td class="text-center">
                                        {{ $kalkulator->komoditas }}
                                    </td>
                                    <td class="text-center">
                                        {{ $kalkulator->varietas }}
                                    </td>
                                    <td class="text-center">
                                        {{ $kalkulator->jarak }} cm
                                    </td>
                                    <td class="text-center">
                                        {{ $kalkulator->luas }} Ha
                                    </td>
                                    <td class="text-center">
                                        {{ $kalkulator->date }}
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ url('detail/' . $kalkulator->id . '?komoditas=' . $kalkulator->komoditas) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="View Detail">
                                            <i class="fas fa-user-edit text-secondary"></i>
                                        </a>
                                        <span>
                                            <a hhref="{{ url('sop/' . $kalkulator->id . '?komoditas=' . $kalkulator->komoditas) }}" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="View SOP">
                                                <i class="fas fa-user-edit text-secondary"></i>
                                            </a>
                                        </span>

                                            <form action="{{ route('kalkulators.destroy', $kalkulator->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="cursor-pointer fas fa-trash text-secondary">
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

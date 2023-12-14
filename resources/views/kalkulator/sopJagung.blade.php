@extends('layouts.user_type.auth')

@section('title', 'Kalkulator')

@section('content')
<!--
ini untuk set tanggal -->
<?php
$date1 = $kalkulator->date;
$ubahDate1 = date('d-m-Y', strtotime($date1 . ' + 1 days'))
?>

<div class="table-container">
    <div class="card-title">
        <h1 class="table-title">SOP Pertanian Jagung</h1>
    </div>
    <table class="w-full text-sm text-left text-gray-800">
        <thead class="text-1x1 text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="py-3 px-6 tanggal-pelaksanaan">Tanggal Pelaksanaan</th>

                <th scope="col" class="py-3 px-6">Aktivitas</th>
                <th scope="col" class="py-3 px-6">Item</th>
                <th scope="col" class="py-3 px-5 status-column">Status</th>

            </tr>
        </thead>

  <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"> <?php echo $ubahDate1; ?>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pengolahan Lahan </td>
                        <td class="py-4 px-6">Traktor (Bajak)</td>
                       <td><x-checkbox-form :checkboxId="'checkbox1'" /></td>
                    </tr>

                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                            'd-m-Y',
                            strtotime($ubahDate1 . ' + 3 days')
                        ); ?>
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Traktor (Rotary)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox2'" /></td>
                    </tr>
                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                            'd-m-Y',
                            strtotime($ubahDate1 . ' + 6 days')
                        ); ?></td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pembuatan Bendengan</td>
                        <td class="py-4 px-6">HOK Pembuatan Bendengan</td>
                      <td><x-checkbox-form :checkboxId="'checkbox3'" /></td>
                    </tr>
                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                            'd-m-Y',
                            strtotime($ubahDate1 . ' + 13 days')
                        ); ?></td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penaburan Kompos</td>
                        <td class="py-4 px-6">Kompos Ayam</td>
                      <td><x-checkbox-form :checkboxId="'checkbox4'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">EM4</td>
                        <td><x-checkbox-form :checkboxId="'checkbox5'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">HOK Penaburan Kompos</td>
                        <td><x-checkbox-form :checkboxId="'checkbox6'" /></td>
                    </tr>
                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                            'd-m-Y',
                            strtotime($ubahDate1 . ' + 17 days')
                        ); ?></td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pengapuran</td>
                        <td class="py-4 px-6">Dolomit</td>
                       <td><x-checkbox-form :checkboxId="'checkbox7'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">HOK</td>
                       <td><x-checkbox-form :checkboxId="'checkbox8'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date(
                                'd-m-Y',
                                strtotime($ubahDate1 . ' + 22 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penanaman</td>
                        <td class="py-4 px-6">Benih</td>
                       <td><x-checkbox-form :checkboxId="'checkbox9'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">HOK</td>
                        <td><x-checkbox-form :checkboxId="'checkbox10'" /></td>
                    </tr>
                </tbody>


                 <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date(
                                'd-m-Y',
                                strtotime($ubahDate1 . ' + 22 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Perlakukan Benih</td>
                        <td class="py-4 px-6">Fortenza</td>
                       <td><x-checkbox-form :checkboxId="'checkbox11'" /></td>
                    </tr>
                </tbody>

                  <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date(
                                'd-m-Y',
                                strtotime($ubahDate1 . ' + 32 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 1</td>
                        <td class="py-4 px-6">Tronton 50 EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox12'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Perekat</td>
                        <td><x-checkbox-form :checkboxId="'checkbox13'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">HOK Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox14'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date(
                                'd-m-Y',
                                strtotime($ubahDate1 . ' + 36 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Susulan 1</td>
                        <td class="py-4 px-6">NPK</td>
                       <td><x-checkbox-form :checkboxId="'checkbox15'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Urea</td>
                        <td><x-checkbox-form :checkboxId="'checkbox16'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">SP36</td>
                        <td><x-checkbox-form :checkboxId="'checkbox17'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">KCL</td>
                        <td><x-checkbox-form :checkboxId="'checkbox18'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">HOK Pemupukan 1</td>
                        <td><x-checkbox-form :checkboxId="'checkbox19'" /></td>
                    </tr>
                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date(
                                'd-m-Y',
                                strtotime($ubahDate1 . ' + 42 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 2</td>
                        <td class="py-4 px-6">Tronton 50  EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox20'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Perekat</td>
                        <td><x-checkbox-form :checkboxId="'checkbox21'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">HOK Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox22'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date(
                                'd-m-Y',
                                strtotime($ubahDate1 . ' + 52 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 3</td>
                        <td class="py-4 px-6">Tronton 50 EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox23'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Perekat</td>
                        <td><x-checkbox-form :checkboxId="'checkbox24'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">HOK Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox25'" /></td>
                    </tr>
                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date(
                                'd-m-Y',
                                strtotime($ubahDate1 . ' + 62 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Susulan 2 dan Bumbun</td>
                        <td class="py-4 px-6">Urea</td>
                       <td><x-checkbox-form :checkboxId="'checkbox26'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">KCL</td>
                        <td><x-checkbox-form :checkboxId="'checkbox27'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">HOK Pemupukan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox28'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date(
                                'd-m-Y',
                                strtotime($ubahDate1 . ' + 72 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 4</td>
                        <td class="py-4 px-6">Tronton 50 EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox29'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Perekat</td>
                        <td><x-checkbox-form :checkboxId="'checkbox30'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">HOK Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox31'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date(
                                'd-m-Y',
                                strtotime($ubahDate1 . ' + 77 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 5</td>
                        <td class="py-4 px-6">Tronton 50 EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox32'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Perekat</td>
                        <td><x-checkbox-form :checkboxId="'checkbox33'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">HOK Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox34'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date(
                                'd-m-Y',
                                strtotime($ubahDate1 . ' + 172 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen</td>
                        <td class="py-4 px-6">HOK Panen</td>
                       <td><x-checkbox-form :checkboxId="'checkbox35'" /></td>
                    </tr>
                </tbody>

                            </table>
        </div>
    </div>

</body>

<style>
    .table-container {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
        color: #333;
    }

    thead {
        background-color: #EEE;
    }

    th,
    td {
        padding: 10px;
        border: 1px solid #CCC;
    }

    tbody tr:nth-child(odd) {
        background-color: #FFF;
    }

    tbody tr:nth-child(even) {
        background-color: #F9F9F9;
    }

    th {
        font-weight: bold;
    }

    input[type="checkbox"] {
        /* Style as needed */
    }

    .card-title {
        background-color: #333;
        /* Dark grey background */
        border-radius: 8px;
        /* Rounded corners */
        padding: 15px;
        /* Spacing inside the card */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        /* Slightly darker shadow for depth */
        margin-bottom: 20px;
        /* Space below the card */
        text-align: center;
        /* Center the title */
    }

    .table-title {
        margin: 0;
        /* Remove default margin */
        font-size: 24px;
        /* Large font size for the title */
        color: #fff;
        /* Light text color for contrast */
    }

    th.tanggal-pelaksanaan {
        width: 30%;
        /* Atau nilai spesifik lain sesuai kebutuhan */
    }
</style>
@endsection

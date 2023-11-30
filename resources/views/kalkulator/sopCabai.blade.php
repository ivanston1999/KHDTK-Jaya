@extends('layouts.user_type.auth')

@section('content')

<!--
ini untuk set tanggal -->
<?php
$date1 = $kalkulator->date;
$ubahDate1 = date('d-m-Y', strtotime($date1 . ' + 1 days'));
?>

<div class="table-container">
    <div class="card-title">
        <h1 class="table-title">SOP Pertanian Cabai</h1>
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
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"> <?php echo $ubahDate1; ?> - <?php echo date(
                                                                                                                                                        'd-m-Y',
                                                                                                                                                        strtotime($ubahDate1 . ' + 2 days')
                                                                                                                                                    ); ?></td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Persiapan Lahan </td>
                <td class="py-4 px-6">Traktor (Bajak)</td>

                <td><x-checkbox-form :checkboxId="'checkbox451'" /></td>


            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 3 days')
                                                                                                                    ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Traktor (Raker)</td>

                <td><x-checkbox-form :checkboxId="'checkbox452'" /></td>

            </tr>

            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 4 days')
                                                                                                                    ); ?> - <?php echo date(
                                                                                                                                        'd-m-Y',
                                                                                                                                        strtotime($ubahDate1 . ' + 5 days')
                                                                                                                                    ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Traktor (Rotary)</td>
                <td><x-checkbox-form :checkboxId="'checkbox453'" /></td>
            </tr>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"> <?php echo date(
                                                                                                                            'd-m-Y',
                                                                                                                            strtotime($ubahDate1 . ' + 6 days')
                                                                                                                        ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Traktor (Bedding)</td>
                <td><x-checkbox-form :checkboxId="'checkbox454'" /></td>
            </tr>
        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 7 days')
                                                                                                                    ); ?></td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penanaman </td>
                <td class="py-4 px-6">Benih (Cabai Merah)</td>
                <td><x-checkbox-form :checkboxId="'checkbox455'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 7 days')
                                                                                                                    ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemotongan Benih</td>
                <td><x-checkbox-form :checkboxId="'checkbox456'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 11 days')
                                                                                                                    ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Beejamruth (untuk benih)</td>
                <td><x-checkbox-form :checkboxId="'checkbox457'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga kerja untuk Beejamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox458'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Penanaman</td>
                <td><x-checkbox-form :checkboxId="'checkbox459'" /></td>
            </tr>

        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo $ubahDate1; ?></td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Dasar </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Ghana Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox460'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Ghana Jeevamruth (Padat)</td>
                <td><x-checkbox-form :checkboxId="'checkbox461'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox462'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox463'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox464'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox465'" /></td>
            </tr>
        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox466'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox467'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox468'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox469'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox470'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox471'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox472'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox473'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox474'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox475'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox476'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox477'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox478'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox479'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox480'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan (Ghana)</td>
                <td><x-checkbox-form :checkboxId="'checkbox481'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pengolahan Lahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pengolahan Lahan</td>
                <td><x-checkbox-form :checkboxId="'checkbox482'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox483'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox488'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox484'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox485'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox486'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox487'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox488'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox489'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox490'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox491'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox492'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox493'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox494'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox495'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox496'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox497'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox498'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox499'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox500'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox501'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox502'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox503'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox504'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox505'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox506'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox507'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox508'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox509'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox510'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox511'" /></td>
            </tr>
        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox512'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox513'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox514'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox515'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox516'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox517'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan (Ghana)</td>
                <td><x-checkbox-form :checkboxId="'checkbox518'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox519'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox520'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox521'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox522'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox523'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox524'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox525'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox526'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox527'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox528'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox529'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox530'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox531'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox532'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox533'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox534'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox535'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox536'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox537'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox538'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox539'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox540'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox541'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox542'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox543'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox544'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox545'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox546'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox547'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox548'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox549'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox550'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox551'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox552'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox553'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox554'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox555'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox556'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox557'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox558'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox559'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox560'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox561'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox562'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox563'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox564'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox565'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox566'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox567'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox568'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox569'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox570'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox571'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox572'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox573'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox574'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox575'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox576'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox577'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox578'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox579'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox580'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox581'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox582'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox583'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox584'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox585'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox586'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox587'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox588'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox589'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox590'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Angistram</td>
                <td><x-checkbox-form :checkboxId="'checkbox591'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Angiastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox592'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox593'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan (Ghana)</td>
                <td><x-checkbox-form :checkboxId="'checkbox594'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox595'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox596'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox597'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox598'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox599'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox600'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox601'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox602'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox603'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox604'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox605'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox606'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox607'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox608'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox609'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox610'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox611'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox612'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox613'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox614'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox615'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox616'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox617'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox618'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox619'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox620'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox621'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox622'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox623'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox624'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox625'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox626'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox627'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox628'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox629'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox630'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox631'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox632'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Angiastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox633'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Angiastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox634'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox635'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan (Ghana)</td>
                <td><x-checkbox-form :checkboxId="'checkbox636'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox637'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox638'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox639'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox640'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox641'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox642'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox643'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox644'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox645'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox646'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox647'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox648'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox649'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox650'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox651'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox652'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox653'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox654'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox655'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox656'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox657'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox658'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox659'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox660'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox661'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox662'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox663'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox664'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox665'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox666'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox667'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox668'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox669'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox670'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox671'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox672'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox673'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox674'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Angiastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox675'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Angiastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox676'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox677'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan (Ghana)</td>
                <td><x-checkbox-form :checkboxId="'checkbox678'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox679'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox680'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox681'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox682'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox683'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox684'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox685'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox686'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox687'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox688'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox689'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox690'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox691'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox692'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox693'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox694'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox695'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox696'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox697'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox698'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox699'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox700'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox701'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox702'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox703'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox704'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox705'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox706'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox707'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox708'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox709'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox710'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox711'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox712'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox713'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox714'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox715'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox716'" /></td>
            </tr>

        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Angiastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox717'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Angiastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox718'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox719'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan (Ghana)</td>
                <td><x-checkbox-form :checkboxId="'checkbox720'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox721'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox722'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox723'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox724'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox725'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox726'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox727'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox728'" /></td>
            </tr>

        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox729'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox730'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox731'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox732'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox733'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox734'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox735'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox736'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox746'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox747'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox748'" /></td>
            </tr>

        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox749'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox750'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox751'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox752'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox753'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox754'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox755'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox756'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox757'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox758'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox759'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox760'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox761'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox762'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox763'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox764'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox765'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox766'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox767'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Angiastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox768'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Angiastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox769'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox770'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan (Ghana)</td>
                <td><x-checkbox-form :checkboxId="'checkbox771'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox772'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox773'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox774'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox775'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox776'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox777'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox778'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox779'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox780'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox781'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox782'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox783'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox784'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox785'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox786'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox787'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox788'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox789'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox790'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox791'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox792'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox793'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox794'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox795'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox796'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox797'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox798'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox799'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox800'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox801'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox802'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox803'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox804'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox805'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox806'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox807'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox808'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox809'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Angiastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox810'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Angiastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox811'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox812'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan (Ghana)</td>
                <td><x-checkbox-form :checkboxId="'checkbox813'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox814'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox815'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox816'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox817'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox818'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox819'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox820'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox821'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox822'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox823'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox824'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox825'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox826'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox827'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox828'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox829'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox830'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox831'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox832'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox833'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox834'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox835'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox836'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox837'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox837'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox838'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox839'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox840'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox841'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox842'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox843'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox844'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox845'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox846'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tas/Karung</td>
                <td><x-checkbox-form :checkboxId="'checkbox847'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox848'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox849'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox850'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 2 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox851'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox852'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox853'" /></td>
            </tr>
        </tbody>

    </table>
</div>
</div>
</div>

</body>


</div>

</body>

</html>


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

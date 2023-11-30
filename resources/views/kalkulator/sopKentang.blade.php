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
        <h1 class="table-title">SOP Pertanian Kentang</h1>
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

                <td><x-checkbox-form :checkboxId="'checkbox301'" /></td>


            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 3 days')
                                                                                                                    ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Traktor (Raker)</td>

                <td><x-checkbox-form :checkboxId="'checkbox302'" /></td>

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
                <td><x-checkbox-form :checkboxId="'checkbox303'" /></td>
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
                <td><x-checkbox-form :checkboxId="'checkbox304'" /></td>
            </tr>
        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 7 days')
                                                                                                                    ); ?></td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penanaman </td>
                <td class="py-4 px-6">Benih (Kentang)</td>
                <td><x-checkbox-form :checkboxId="'checkbox306'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"></td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemotongan Benih</td>
                <td><x-checkbox-form :checkboxId="'checkbox307'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 11 days')
                                                                                                                    ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Beejamruth (untuk benih)</td>
                <td><x-checkbox-form :checkboxId="'checkbox308'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga kerja untuk Beejamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox309'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Penanaman</td>
                <td><x-checkbox-form :checkboxId="'checkbox310'" /></td>
            </tr>

        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo $ubahDate1; ?></td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Dasar </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Ghana Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox311'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Ghana Jeevamruth (Padat)</td>
                <td><x-checkbox-form :checkboxId="'checkbox312'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox313'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 18 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox314'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox315'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox316'" /></td>
            </tr>
        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 20 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox317'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox318'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox319'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 22 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox320'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox321'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox322'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 25 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox323'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox324'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox325'" /></td>
            </tr>
        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 27 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Drave Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox326'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox327'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga KerjaUntuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox328'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 29 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox329'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox330'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox331'" /></td>
            </tr>
        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 30 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan(Ghana)</td>
                <td><x-checkbox-form :checkboxId="'checkbox332'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 30 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pengolahan Tanah</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pengolahan Lahan</td>
                <td><x-checkbox-form :checkboxId="'checkbox333'" /></td>
            </tr>

            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 31 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox334'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox335'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox336'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 33 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox337'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox338'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox339'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 35 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox340'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox341'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox342'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 38 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox343'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox344'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox345'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 40 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox346'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox347'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox348'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 42 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox349'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox350'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox351'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 45 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox352'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox353'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox354'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 47 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox355'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox356'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox357'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 49 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox358'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox359'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox360'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 52 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox361'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox362'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox363'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 54 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox364'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox365'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox366'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 56 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox367'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox368'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox369'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 59 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan (Ghana) </td>
                <td><x-checkbox-form :checkboxId="'checkbox370'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 60 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox371'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox372'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox373'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 62 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox374'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox375'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox376'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 64 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox377'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox378'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox379'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 67 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox380'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox381'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox382'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 69 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox383'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox384'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox385'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 71 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox386'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox387'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox388'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 74 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox389'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox390'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox391'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 76 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox392'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox393'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox394'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 78 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox395'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox396'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox397'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 81 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox398'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox399'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox400'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 83 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox401'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox402'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox403'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 85 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox404'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox405'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox406'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 88 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox407'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox408'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox409'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 90 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox410'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox411'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox412'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 92 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox413'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox414'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox415'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 95 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox416'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox417'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox418'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 97 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox419'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox420'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox421'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 99 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox422'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox423'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox424'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 101 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox425'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox426'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox427'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 103 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox428'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox429'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox430'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 105 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox431'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox432'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox433'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'Y-m-d',
                        strtotime($ubahDate1 . ' + 111 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox434'" /></td>
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

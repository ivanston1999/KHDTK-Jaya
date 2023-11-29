@extends('layouts.user_type.auth')

@section('content')


<!--
ini untuk set tanggal -->

<?php
$date1 = $kalkulator->date;
$ubahDate1 = date('d-m-Y', strtotime($date1 . ' + 1 days'));
?>

<body class="bg-gray-300">
    <div class="container mx-auto  p-8 bg-white shadow-lg rounded-lg" style="border-radius: 40px; margin-top: -25px;">
        <h2 class="text-2xl font-bold text-center mb-6" style="margin-top: -40px;">SOP Pertanian Kentang </h2>
        <div class="overflow-x-auto relative" >
            <table class="w-full text-sm text-left text-gray-800" style="margin-left: -50px;">
                <thead class="text-1x1 text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">Tanggan Pelaksanaal</th>
                        <th scope="col" class="py-3 px-6">Aktivitas</th>
                        <th scope="col" class="py-3 px-6">Item</th>
                        <th scope="col" class="py-3 px-6">Status</th>

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
                        <td class="py-4 px-6">Benih (Bawang Merah)</td>
                      <td><x-checkbox-form :checkboxId="'checkbox306'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                            'd-m-Y',
                            strtotime($ubahDate1 . ' + 7 days')
                        ); ?>
                        </td>
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin  </td>
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan(Ghana)</td>
                       <td><x-checkbox-form :checkboxId="'checkbox332'" /></td>
                    </tr>

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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
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
                                strtotime($ubahDate1 . ' + 2 days')
                            ); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                       <td><x-checkbox-form :checkboxId="'checkbox434'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Neemastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox434'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Neemastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox435'" /></td>
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
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen</td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                       <td><x-checkbox-form :checkboxId="'checkbox436'" /></td>
                    </tr>
                </tbody>


            </table>
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
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th,
    td {
        padding: 8px;
        border: 1px solid #ddd;
        text-align: left;
    }

    thead {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #eaeaea;
    }

    body {
        font-family: Arial, sans-serif;
    }

    .container {
        width: 95%;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    @media screen and (max-width: 600px) {
        table {
            width: 100%;
            display: block;
            overflow-x: auto;
        }
    }
</style>

@endsection

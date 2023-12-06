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
        <h1 class="table-title">SOP Pertanian Kubis</h1>
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
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"> <?php echo $ubahDate1; ?> </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Persiapan Lahan </td>
                        <td class="py-4 px-6">Kohe Ayam (non fermentasi)</td>

                       <td><x-checkbox-form :checkboxId="'checkbox01'" /></td>


                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo $ubahDate1; ?></td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Fermentasi</td>

                       <td><x-checkbox-form :checkboxId="'checkbox02'" /></td>

                    </tr>

                    <tr class="border-b">
                    <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo $ubahDate1; ?></td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">EM4</td>

                       <td><x-checkbox-form :checkboxId="'checkbox03'" /></td>

                    </tr>
                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                    <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo $ubahDate1; ?></td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemaian </td>
                        <td class="py-4 px-6">Benih Kubis</td>
                      <td><x-checkbox-form :checkboxId="'checkbox04'" /></td>
                    </tr>

                    <tr class="border-b">
                    <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo $ubahDate1; ?></td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Pot Tray</td>
                        <td><x-checkbox-form :checkboxId="'checkbox05'" /></td>
                    </tr>
                    <tr class="border-b">
                    <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo $ubahDate1; ?></td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Kompos Ayam</td>
                        <td><x-checkbox-form :checkboxId="'checkbox06'" /></td>
                    </tr>
                    <tr class="border-b">
                    <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo $ubahDate1; ?></td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Urea</td>
                        <td><x-checkbox-form :checkboxId="'checkbox07'" /></td>
                    </tr>
                    <tr class="border-b">
                    <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo $ubahDate1; ?></td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemaian</td>
                       <td><x-checkbox-form :checkboxId="'checkbox08'" /></td>
                    </tr>
                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                    <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 4 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pengendalian Cendawan </td>
                        <td class="py-4 px-6">Previcur 722 SL</td>
                       <td><x-checkbox-form :checkboxId="'checkbox09'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pengendalian</td>
                       <td><x-checkbox-form :checkboxId="'checkbox010'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 6 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pengolahan Lahan </td>
                        <td class="py-4 px-6">Traktor bajak </td>
                       <td><x-checkbox-form :checkboxId="'checkbox011'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Traktor rotari</td>
                        <td><x-checkbox-form :checkboxId="'checkbox012'" /></td>
                    </tr>
                </tbody>


                 <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 9 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pengapuran  </td>
                        <td class="py-4 px-6">Dolomit</td>
                       <td><x-checkbox-form :checkboxId="'checkbox013'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Tabur Dolomit</td>
                        <td><x-checkbox-form :checkboxId="'checkbox014'" /></td>
                    </tr>
                </tbody>

                  <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 14 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Kompos </td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Tabur Kompos</td>
                       <td><x-checkbox-form :checkboxId="'checkbox015'" /></td>
                    </tr>
                </tbody>

                    <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 14 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penutupan Tanah </td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penutupan Tanah</td>
                       <td><x-checkbox-form :checkboxId="'checkbox016'" /></td>
                    </tr>
                </tbody>


                   <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 21 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penanaman</td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penanaman</td>
                       <td><x-checkbox-form :checkboxId="'checkbox017'" /></td>
                    </tr>
                </tbody>

          <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 23 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan 1</td>
                        <td class="py-4 px-6">Urea</td>
                       <td><x-checkbox-form :checkboxId="'checkbox018'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">ZA</td>
                        <td><x-checkbox-form :checkboxId="'checkbox019'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">KCL</td>
                        <td><x-checkbox-form :checkboxId="'checkbox020'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">SP36</td>
                        <td><x-checkbox-form :checkboxId="'checkbox021'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox022'" /></td>
                    </tr>
                </tbody>


          <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 31 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 1</td>
                        <td class="py-4 px-6">Curacron 500 EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox023'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox024'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox025'" /></td>
                    </tr>


                </tbody>

  <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 33 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 2</td>
                        <td class="py-4 px-6">Previcur 722 SL</td>
                       <td><x-checkbox-form :checkboxId="'checkbox026'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox027'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox028'" /></td>
                    </tr>
                </tbody>

  <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 38 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 3</td>
                        <td class="py-4 px-6">Curacron 500 EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox029'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox031'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox032'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 41 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 4</td>
                        <td class="py-4 px-6">Antracol 70 WP</td>
                       <td><x-checkbox-form :checkboxId="'checkbox033'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox034'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox035'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 44 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 5</td>
                        <td class="py-4 px-6">Curacron 500 EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox036'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox037'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox038'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 48 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 6</td>
                        <td class="py-4 px-6">Sidazeb</td>
                       <td><x-checkbox-form :checkboxId="'checkbox039'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox040'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox041'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 49 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan 2</td>
                        <td class="py-4 px-6">Urea</td>
                       <td><x-checkbox-form :checkboxId="'checkbox042'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">ZA</td>
                        <td><x-checkbox-form :checkboxId="'checkbox043'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox044'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 51 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 7</td>
                        <td class="py-4 px-6">Curacron 500 EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox045'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox046'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox047'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 55 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 8</td>
                        <td class="py-4 px-6">Antracol 70 WP</td>
                       <td><x-checkbox-form :checkboxId="'checkbox048'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox049'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox050'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 59 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 9</td>
                        <td class="py-4 px-6">Curacron 500 EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox051'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox052'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox053'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 62 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 10</td>
                        <td class="py-4 px-6">Previcur 722 SL</td>
                       <td><x-checkbox-form :checkboxId="'checkbox054'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox055'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox056'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 66 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 11</td>
                        <td class="py-4 px-6">Curacron 500 EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox057'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox058'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox059'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 69 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 12</td>
                        <td class="py-4 px-6">Sidazeb</td>
                       <td><x-checkbox-form :checkboxId="'checkbox060'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox061'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox062'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 73 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penyemprotan 13</td>
                        <td class="py-4 px-6">Curacron 500 EC</td>
                       <td><x-checkbox-form :checkboxId="'checkbox063'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Polywet (Perekat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox064'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penyemprotan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox065'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 101 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen</td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                       <td><x-checkbox-form :checkboxId="'checkbox066'" /></td>
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

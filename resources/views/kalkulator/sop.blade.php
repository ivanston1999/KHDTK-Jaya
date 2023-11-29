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
            <table class="w-full text-sm text-left text-gray-800" style="margin-left: -50px;">
                <thead class="text-1x1 text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">Tanggan Pelaksanaal</th>
                        <th scope="col" class="py-3 px-6">Aktivitas</th>
                        <th scope="col" class="py-3 px-6">Item</th>
                        <th scope="col" class="py-3 px-6 status-column">Status</th>

                    </tr>
                </thead>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"> <?php echo $ubahDate1; ?> - <?php echo date('d-m-Y', strtotime($ubahDate1 . ' + 2 days')); ?></td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Persiapan Lahan </td>
                        <td class="py-4 px-6">Traktor (Bajak)</td>

                        <td>
                            <x-checkbox-form :checkboxId="'checkbox1'" />
                        </td>


                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date('d-m-Y', strtotime($ubahDate1 . ' + 3 days')); ?>
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Traktor (Raker)</td>

                       <td>
                            <x-checkbox-form :checkboxId="'checkbox2'" />
                        </td>


                    </tr>

                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date('d-m-Y', strtotime($ubahDate1 . ' + 4 days')); ?> - <?php echo date('d-m-Y', strtotime($ubahDate1 . ' + 5 days')); ?>
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Traktor (Rotary)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox3'" /></td>
                    </tr>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"> <?php echo date('d-m-Y', strtotime($ubahDate1 . ' + 6 days')); ?>
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Traktor (Bedding)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox4'" /></td>
                    </tr>
                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date('d-m-Y', strtotime($ubahDate1 . ' + 7 days')); ?></td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penanaman </td>
                        <td class="py-4 px-6">Benih (Shallot)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox5'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date('d-m-Y', strtotime($ubahDate1 . ' + 7 days')); ?>
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pemotongan Benih</td>
                        <td><x-checkbox-form :checkboxId="'checkbox6'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date('d-m-Y', strtotime($ubahDate1 . ' + 11 days')); ?>
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Beejamruth (untuk benih)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox7'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga kerja untuk Beejamruth</td>
                        <td><x-checkbox-form :checkboxId="'checkbox8'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Penanaman</td>
                        <td><x-checkbox-form :checkboxId="'checkbox9'" /></td>
                    </tr>

                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo $ubahDate1; ?></td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Dasar </td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Membuat Ghana Jeevamruth</td>
                        <td><x-checkbox-form :checkboxId="'checkbox10'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Ghana Jeevamruth (Padat)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox11'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox12'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 2 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox13'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Neemastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox14'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                        <td><x-checkbox-form :checkboxId="'checkbox16'" /></td>
                    </tr>
                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 2 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                        <td><x-checkbox-form :checkboxId="'checkbox17'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Drava Jeevamruth</td>
                        <td><x-checkbox-form :checkboxId="'checkbox18'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox19'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 2 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox20'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Brahmastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox21'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                        <td><x-checkbox-form :checkboxId="'checkbox22'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 2 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox23'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Neemastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox24'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                        <td><x-checkbox-form :checkboxId="'checkbox25'" /></td>
                    </tr>
                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 2 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                        <td><x-checkbox-form :checkboxId="'checkbox26'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Drava Jeevamruth</td>
                        <td><x-checkbox-form :checkboxId="'checkbox27'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox28'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 2 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox29'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Brahmastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox30'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                        <td><x-checkbox-form :checkboxId="'checkbox31'" /></td>
                    </tr>
                </tbody>


                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 2 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan(Ghana)</td>
                        <td><x-checkbox-form :checkboxId="'checkbox32'" /></td>
                    </tr>

                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 2 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox33'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Neemastram</td>
                        <td><x-checkbox-form :checkboxId="'checkbox34'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                        <td><x-checkbox-form :checkboxId="'checkbox35'" /></td>
                    </tr>
                </tbody>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            <?php echo date('Y-m-d', strtotime($ubahDate1 . ' + 2 days')); ?>
                        </td>
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                        <td><x-checkbox-form :checkboxId="'checkbox36'" /></td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Drava Jeevamruth</td>
                        <td><x-checkbox-form :checkboxId="'checkbox37'" /></td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                        </td>
                        <td class="py-4 px-6"></td>
                        <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                        <td><x-checkbox-form :checkboxId="'checkbox38'" /></td>
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

@extends('layouts.user_type.auth')

@section('title', 'Kalkulator')

@section('content')

<body class="bg-gray-300">

    <div class="container">

        <h2 class="text-3xl font-bold text-center mb-5" style="margin-top: -40px;">Detail Kalkulator Pertanian Kubis  </h2>
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-1x1 text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">Nama</th>
                        <th scope="col" class="py-3 px-6">Unit</th>
                        <th scope="col" class="py-3 px-6">Harga</th>

                    </tr>
                </thead>

                <tbody class="bg-white">

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px; ">
                            Persiapan Lahan :
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px; ">
                            &nbsp; &nbsp; &nbsp; - Traktor Bajak

                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 2 }} Paket </td>
                        <td class="py-4 px-6">Rp{{ number_format($kalkulator->luas * 2 * 1000000, 0, ',', '.') }} </td>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px; ">
                            &nbsp; &nbsp; &nbsp; - Traktor Rotari

                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 1 }} Paket </td>
                        <td class="py-4 px-6">Rp{{ number_format($kalkulator->luas * 1 * 1000000, 0, ',', '.') }} </td>
                        </td>
                    </tr>



                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                            Pembenihan :
                        </td>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - Benih Kubis
                        </td>

                        <td class="py-4 px-6">{{ $kalkulator->luas * 20 }} Bungkus </td>
                        <td class="py-4 px-6">Rp{{ number_format($kalkulator->luas * 20 * 106000, 0, ',','.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                            Pemupukan :
                        </td>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - Urea 1
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 4 }} Karung </td>
                        <td class="py-4 px-6">Rp{{ number_format($kalkulator->luas * 4 * 55000, 0, ',','.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - Urea 2
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 1 }} Karung </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 1 * 520000, 0, ',', '.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - Kohe Ayam
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 350 }} Karung </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 350 * 25000, 0, ',', '.') }} </td>
                    </tr>


                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - EM4
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 4 }} Botol </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 4 * 25000, 0, ',', '.') }} </td>
                    </tr>


                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - Dolomit
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 2500 }} Kg </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 2500 * 600, 0, ',', '.') }} </td>
                    </tr>


                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - ZA
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 6 }} Karung </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 6 * 520000, 0, ',', '.') }} </td>
                    </tr>


                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - KCL
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 4 }} Karung </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 3 * 350000, 0, ',', '.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - SP 36
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 6 }} Karung </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 6 * 790000, 0, ',', '.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                            Pestisida :
                        </td>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - Previcur 722 SL
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 12 }} Botol </td>
                        <td class="py-4 px-6">Rp{{number_format( $kalkulator->luas * 12 * 165000, 0,',','.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - Curacron 500 EC
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 21 }} Botol </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 21 * 142000, 0,',','.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - Antracol 70 WP
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 18 }} Botol </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 18 * 45000, 0,',','.') }} </td>
                    </tr>


                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - Sidazeb
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 4 }} Botol </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 4 * 120000, 0,',','.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                            &nbsp; &nbsp; &nbsp; - Perekat
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 13 }} Botol </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 13 * 75000, 0,',','.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 14px;">
                            Tenaga Kerja
                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas *151 }} orang </td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas *151 * 85000, 0,',','.') }} </td>
                    </tr>


                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px; ">
                            Lainnya :
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px; ">
                            &nbsp; &nbsp; &nbsp; - Pot Tray

                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 700 }} Buah </td>
                        <td class="py-4 px-6">Rp{{ number_format($kalkulator->luas * 700 * 2500, 0, ',', '.') }} </td>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px; ">
                            &nbsp; &nbsp; &nbsp; - Karung

                        </td>
                        <td class="py-4 px-6">{{ $kalkulator->luas * 500 }} Paket </td>
                        <td class="py-4 px-6">Rp{{ number_format($kalkulator->luas * 500 * 2000, 0, ',', '.') }} </td>
                        </td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>

</body>

<body class="bg-gray-300">
    <div class="container mx-auto my-3 p-8 bg-white rounded-lg" >
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-1x1 text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6 ">Nama</th>
                        <th scope="col" class="py-3 px-6 ">Unit</th>
                        <th scope="col" class="py-3 px-6 ">Harga</th>

                    </tr>
                </thead>

                <tbody class="bg-white">
                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 14px;">
                            SubTotal
                        </td>
                        <td class="py-4 px-6">-</td>
                        <td class="py-4 px-6">Rp{{number_format ($kalkulator->luas * 2 *1000000 + $kalkulator->luas * 1 * 1000000 +  $kalkulator->luas * 20 * 106000 + $kalkulator->luas * 4 * 55000 + $kalkulator->luas * 1 * 520000 + $kalkulator->luas * 350 * 25000 + $kalkulator->luas * 4 * 25000 + $kalkulator->luas * 2500 * 600 + $kalkulator->luas * 6 * 520000 +  $kalkulator->luas * 4 * 350000 +  $kalkulator->luas * 6 * 790000 +  $kalkulator->luas * 12 * 165000 +  $kalkulator->luas * 21 * 142000 +  $kalkulator->luas * 18 * 45000 +  $kalkulator->luas * 4 * 120000 +  $kalkulator->luas * 13 * 75000 +  $kalkulator->luas * 700 * 2500 +  $kalkulator->luas * 500 * 2000, 0,',', '.') }} </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 14px;">
                            Biaya Takterduga
                        </td>
                        <td class="py-4 px-6">- </td>
                        <td class="py-4 px-6">
                            Rp{{number_format (($kalkulator->luas * 2 *1000000 + $kalkulator->luas * 1 * 1000000 +  $kalkulator->luas * 20 * 106000 + $kalkulator->luas * 4 * 55000 + $kalkulator->luas * 1 * 520000 + $kalkulator->luas * 350 * 25000 + $kalkulator->luas * 4 * 25000 + $kalkulator->luas * 2500 * 600 + $kalkulator->luas * 6 * 520000 +  $kalkulator->luas * 4 * 350000 +  $kalkulator->luas * 6 * 790000 +  $kalkulator->luas * 12 * 165000 +  $kalkulator->luas * 21 * 142000 +  $kalkulator->luas * 18 * 45000 +  $kalkulator->luas * 4 * 120000 +  $kalkulator->luas * 13 * 75000 +  $kalkulator->luas * 700 * 2500 +  $kalkulator->luas * 500 * 2000) /10, 0, ',', '.')  }}
                        </td>
                    </tr>

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 14px;">
                            Total
                        </td>
                        <td class="py-4 px-6">- </td>
                        <td class="py-4 px-6"> Rp{{ number_format (($kalkulator->luas * 2 *1000000 + $kalkulator->luas * 1 * 1000000 +  $kalkulator->luas * 20 * 106000 + $kalkulator->luas * 4 * 55000 + $kalkulator->luas * 1 * 520000 + $kalkulator->luas * 350 * 25000 + $kalkulator->luas * 4 * 25000 + $kalkulator->luas * 2500 * 600 + $kalkulator->luas * 6 * 520000 +  $kalkulator->luas * 4 * 350000 +  $kalkulator->luas * 6 * 790000 +  $kalkulator->luas * 12 * 165000 +  $kalkulator->luas * 21 * 142000 +  $kalkulator->luas * 18 * 45000 +  $kalkulator->luas * 4 * 120000 +  $kalkulator->luas * 13 * 75000 +  $kalkulator->luas * 700 * 2500 +  $kalkulator->luas * 500 * 2000) /10 + ($kalkulator->luas * 2 *1000000 + $kalkulator->luas * 1 * 1000000 +  $kalkulator->luas * 20 * 106000 + $kalkulator->luas * 4 * 55000 + $kalkulator->luas * 1 * 520000 + $kalkulator->luas * 350 * 25000 + $kalkulator->luas * 4 * 25000 + $kalkulator->luas * 2500 * 600 + $kalkulator->luas * 6 * 520000 +  $kalkulator->luas * 4 * 350000 +  $kalkulator->luas * 6 * 790000 +  $kalkulator->luas * 12 * 165000 +  $kalkulator->luas * 21 * 142000 +  $kalkulator->luas * 18 * 45000 +  $kalkulator->luas * 4 * 120000 +  $kalkulator->luas * 13 * 75000 +  $kalkulator->luas * 700 * 2500 +  $kalkulator->luas * 500 * 2000), 0, ',', '.')  }}</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

</body>

</html>

<body class="bg-gray-300">
    <div class="container mx-auto my-3 p-8  rounded-lg" >
        <h2 class="text-2xl font-bold text-center mb-6" style="margin-top: -50px;">Estimasi Populasi</h2>
        <div class="overflow-x-auto relative">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-1x1 text-gray-700 uppercase bg-gray-50">
                </thead>

                <tbody class="bg-white">

                    <tr class="border-b">
                        <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 14px; ">
                            Estimasi Populasi
                        </td>
                        <td class="py-4 px-6 font-bold">{{ $kalkulator->jarak }} Tumbuhan </td>

                    </tr>
                </tbody>


            </table>
        </div>
    </div>

</body>
<style>
    body {
        background-color: #f4f4f4;
        font-family: 'Arial', sans-serif;
    }

    .container {
        margin-top: -20px;
        /* Adjust this value as needed */
        margin-left: auto;
        margin-right: auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
        border-radius: 30px;
        max-width: 1000px;
        padding: 80px ;


    }


    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    thead th {
        background-color: #e0e0e0;
        color: #333;
        font-weight: bold;
        padding: 10px;
        border: 1px solid #ddd;
    }

    tbody td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .text-gray-700 {
        color: #333;
    }

    .button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .back-button-container {
    margin-top: 10px;
    margin-left: 10px;
}

.back-button {
    display: inline-block;
    padding: 5px 10px;
    background-color: #007bff;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
}

.back-button:hover {
    background-color: #0056b3;
}

</style>


@endsection

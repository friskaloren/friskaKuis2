<?php
use App\Models\informasiPerusahaan;
use App\Models\informasiPelanggan;
use App\Models\produk;
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        th {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
        td {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
    </style>

    <div class= "container">
        <p style= "font-size: 40px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Informasi Perusahaan</p>     
        <table style= "margin-right:auto;margin-left:auto">
            <tr>
                <th>ID</th>
                <th>Nama Perusahaan</th>
                <th>Alamat Perusahaan</th>
            </tr>

            <tr>
            <?php
               $informasi_perusahaans = informasiPerusahaan::all();
            ?>
                @foreach ($informasi_perusahaans as $informasiPerusahaan)
                    <tr>
                        <td>{{$informasiPerusahaan->id}}</td>
                        <td>{{$informasiPerusahaan->namaPerusahaan}}</td>
                        <td>{{$informasiPerusahaan->alamatPerusahaan}}</td>
                    </tr>
                @endforeach
        </table>
    </div>

<div class= "container">
    <p style= "font-size: 40px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Pelanggan</p>     
    <table style= "margin-right:auto;margin-left:auto">
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Alamat Pelanggan</th>
        </tr>

        <tr>
        <?php
           $informasi_pelanggans = informasiPelanggan::all();
        ?>
            @foreach ($informasi_pelanggans as $informasiPelanggan)
                <tr>
                    <td>{{$informasiPelanggan->id}}</td>
                    <td>{{$informasiPelanggan->namaPelanggan}}</td>
                    <td>{{$informasiPelanggan->alamatPelanggan}}</td>
                </tr>
            @endforeach
    </table>
</div>

<div class= "container">
    <p style= "font-size: 40px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Produk</p>     
    <table style= "margin-right:auto;margin-left:auto">
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Taxes</th>
            <th>Amount</th>
        </tr>

        <tr>
        <?php
           $produks = produk::all();
        ?>
            @foreach ($produks as $produk)
                <tr>
                    <td>{{$produk->id}}</td>
                    <td>{{$produk->namaProduk}}</td>
                    <td>{{$produk->quantity}}</td>
                    <td>{{$produk->unitPrice}}</td>
                    <td>{{$produk->taxes}}</td>
                    <td>{{$produk->amount}}</td>
                </tr>
            @endforeach
    </table>
</div>

<div class="text-center">
    <center>
    <h3><a href="{{url('profil')}}">Cetak Invoice</a></h3>   
    </center>
</div>
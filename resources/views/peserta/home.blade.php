@extends('layouts.style')

@section('content')
    <div class="col-sm-10 col-sm-offset-1">
        <div class="panel-heading"><h1>Data Peserta</h1></div>
        <div class="panel-body">
            <table class="table table-hovered">
                <tr>
                    <td>Nomor Peserta</td>
                    <td>:</td>
                    <td>{{ Auth::user()->id }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ Auth::user()->alamat }}</td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td>:</td>
                    <td>{{ Auth::user()->telp }}</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>{{ Auth::user()->jurusan }}</td>
                </tr>
                <tr>
                    <td>Instansi</td>
                    <td>:</td>
                    <td>{{ Auth::user()->instansi }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ Auth::user()->jkelamin }}</td>
                </tr>
            </table>
            <?php
                if(Auth::user()->IsValidated==1){
                    echo "<a class='btn btn-default' href=''>Cetak Kartu Peserta</a>";
                } else {
                    echo "<div class='alert alert-danger' role='alert'><strong>Belum Dikonfirmasi!</strong> Silahkan Lakukan Pembayaran.</div>";
                }
            ?>
        </div>
    </div>
@endsection
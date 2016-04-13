@extends('layouts.style')

@section('content')
    <div class="col-sm-10 col-sm-offset-1">
        <div class="panel-heading"><h1>Data Peserta</h1></div>
        <div class="panel-body">
            <table class="table table-hovered">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{$peserta->name}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{$peserta->alamat}}</td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td>:</td>
                    <td>{{$peserta->telp}}</td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>{{$peserta->jurusan}}</td>
                </tr>
                <tr>
                    <td>Instansi</td>
                    <td>:</td>
                    <td>{{$peserta->instansi}}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{$peserta->jkelamin}}</td>
                </tr>
            </table>
            <a class="btn btn-default" href="/validasi/{{$peserta->id}}">Accept</a>
            <a class="btn btn-default" href="/decline/{{$peserta->id}}">Decline</a>
        </div>
    </div>
@endsection
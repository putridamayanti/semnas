@extends('layouts.app')

@section('content')
    <div class="col-sm-10 col-sm-offset-1">
        <div class="panel-heading">Data Peserta</div>
        <div class="panel-body">
            <table class="table table-hovered">
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
                    <td>{{ Auth::user()->jurusan }}</td>
                </tr>
            </table>
            {{--<a class="btn btn-default" href="/validasi/{{$peserta->id}}">Accept</a>--}}
            {{--<a class="btn btn-default" href="/decline/{{$peserta->id}}">Decline</a>--}}
        </div>
    </div>
@endsection
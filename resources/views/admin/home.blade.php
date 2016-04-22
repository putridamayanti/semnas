@extends('layouts.style')

@section('content')
    <div class="container">
        <table class="table">
            <tr style="background: #ffffff; color: #000;">
                <th>#</th>
                <th>Name</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th>Jurusan</th>
                <th>Instansi</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
            </tr>
            @foreach($peserta as $peserta)
                <tr>
                    <td>{{$peserta->id}}</td>
                    <td><a href="/semnas/peserta/{{$peserta->id}}">{{$peserta->name}}</a></td>
                    <td>{{$peserta->alamat}}</td>
                    <td>{{$peserta->telp}}</td>
                    <td>{{$peserta->jurusan}}</td>
                    <td>{{$peserta->instansi}}</td>
                    <td>{{$peserta->jkelamin}}</td>
                    <td>
                        <?php if($peserta->IsValidated==1){
                            echo "<i class='fa fa-check'></i>Tervalidasi";
                        } elseif($peserta->IsValidated==0) {
                            echo "<i class='fa fa-close'></i>Belum Tervalidasi";
                        } else{
                            echo "<i class='fa fa-close'></i>Ditolak";
                        }
                        ?>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
@extends('layouts.style')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1 style="text-align: center">Pendaftaran Peserta</h1>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}

                {{--<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">--}}
                {{--<label class="col-md-4 control-label">Username</label>--}}

                {{--<div class="col-md-6">--}}
                {{--<input type="text" class="form-control" name="username" value="{{ old('username') }}">--}}

                {{--@if ($errors->has('username'))--}}
                {{--<span class="help-block">--}}
                {{--<strong>{{ $errors->first('username') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
                {{--</div>--}}
                {{--</div>--}}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Nama Lengkap</label>

                    <div class="col-md-9">
                        <input type="text" class="form col-sm-7" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block col-sm-5">
                                        <strong>field is required</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">E - Mail</label>

                    <div class="col-md-9">
                        <input type="email" class="form col-sm-7" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block col-sm-5">
                                        <strong>field is required</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Password</label>

                    <div class="col-md-9">
                        <input type="password" class="form col-sm-7" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block col-sm-5">
                                        <strong>field is required</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Konfirmasi Password</label>

                    <div class="col-md-9">
                        <input type="password" class="form col-sm-7" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block col-sm-5">
                                        <strong>field is required</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">No. Telp</label>

                    <div class="col-md-9">
                        <input type="text" class="form col-sm-7" name="telp" value="{{ old('telp') }}">

                        @if ($errors->has('telp'))
                            <span class="help-block col-sm-5">
                                        <strong>field is required</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Alamat</label>

                    <div class="col-md-9">
                        <input type="text" class="form col-sm-7" name="alamat" value="{{ old('alamat') }}">

                        @if ($errors->has('alamat'))
                            <span class="help-block col-sm-5">
                                        <strong>field is required</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('jurusan') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Jurusan</label>

                    <div class="col-md-9">
                        <input type="text" class="form col-sm-7" name="jurusan" value="{{ old('jurusan') }}">

                        @if ($errors->has('jurusan'))
                            <span class="help-block col-sm-5">
                                        <strong>field is required</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('instansi') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Instansi</label>

                    <div class="col-md-9">
                        <input type="text" class="form col-sm-7" name="instansi" value="{{ old('instansi') }}">

                        @if ($errors->has('instansi'))
                            <span class="help-block col-sm-5">
                                        <strong>field is required</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('jkelamin') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Jenis Kelamin</label>

                    <div class="col-md-9">
                        <div class="col-sm-3">
                            <label><input type="radio" name="jkelamin" value="L">&nbsp&nbsp Laki-Laki</label>
                        </div>
                        <div class="col-sm-3">
                            <label><input type="radio" name="jkelamin" value="P">&nbsp&nbsp Perempuan</label>
                        </div>

                        @if ($errors->has('jkelamin'))
                            <span class="help-block col-sm-5">
                                        <strong>field is required</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-user"></i>Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

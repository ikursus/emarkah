@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah User') }}</div>

                <div class="card-body">

                  @include('layouts.alerts')

<form method="POST" enctype="multipart/form-data">

  @csrf

  {{ csrf_field() }}

  <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label>NAMA</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
        {!! $errors->first('nama', '<span style="color:red">:message</span>') !!}
    </div>

    <div class="form-group">
        <label>EMAIL</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label>PASSWORD</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
        <label>PASSWORD CONFIRMATION</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>

    <div class="form-group">
        <label>PHONE</label>
        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
        {!! $errors->first('phone', '<span style="color:red">:message</span>') !!}
    </div>

    <div class="form-group">
        <label>TARIKH LAHIR</label>
        <input type="date" name="tarikh_lahir" class="form-control" value="{{ old('tarikh_lahir') }}">
        {!! $errors->first('tarikh_lahir', '<span style="color:red">:message</span>') !!}
    </div>

    <div class="form-group">
        <label>ALAMAT</label>
        <textarea name="alamat" class="form-control">{{ old('alamat') }}</textarea>
        {!! $errors->first('alamat', '<span style="color:red">:message</span>') !!}
    </div>

    <div class="form-group">
        <label>ROLE</label>
        <select name="role" class="form-control">
            <option value="admin">ADMIN</option>
            <option value="staff">STAFF</option>
            <option value="student">STUDENT</option>
        </select>
    </div>

    <div class="form-group">
        <label>GAMBAR</label>
        <input type="file" name="gambar">
        {!! $errors->first('gambar', '<span style="color:red">:message</span>') !!}
    </div>

    <div>
        <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
</form>

</tbody>
</table>

</div>
</div>
</div>
</div>
</div>
@endsection

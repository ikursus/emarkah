@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Kemaskini User') }}</div>

                <div class="card-body">

                  @if ( !is_null($user->gambar) && !empty($user->gambar))
                  <img src="/uploads/{{ $user->gambar }}">
                  @endif

                  @include('layouts.alerts')

<form method="POST" enctype="multipart/form-data">

  @csrf

  @method('patch')

  <div class="form-group">
      <label>NAMA</label>
      <input type="text" name="nama" class="form-control" value="{{ $user->nama }}">
      {!! $errors->first('nama', '<span style="color:red">:message</span>') !!}
  </div>

  <div class="form-group">
      <label>EMAIL</label>
      <input type="email" name="email" class="form-control" value="{{ $user->email }}">
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
      <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
      {!! $errors->first('phone', '<span style="color:red">:message</span>') !!}
  </div>

  <div class="form-group">
      <label>TARIKH LAHIR</label>
      <input type="date" name="tarikh_lahir" class="form-control" value="{{ $user->tarikh_lahir }}">
      {!! $errors->first('tarikh_lahir', '<span style="color:red">:message</span>') !!}
  </div>

  <div class="form-group">
      <label>ALAMAT</label>
      <textarea name="alamat" class="form-control">{{ $user->alamat }}</textarea>
      {!! $errors->first('alamat', '<span style="color:red">:message</span>') !!}
  </div>

  <div class="form-group">
      <label>ROLE</label>
      <select name="role" class="form-control">
          <option value="admin"{{ $user->role == 'admin' ? 'selected="selected"' : '' }}>ADMIN</option>
          <option value="staff"{{ $user->role == 'staff' ? 'selected="selected"' : '' }}>STAFF</option>
          <option value="student"{{ $user->role == 'student' ? 'selected="selected"' : '' }}>STUDENT</option>
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

@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Kemaskini Markah') }}</div>

                <div class="card-body">

                  @include('layouts.alerts')

<form method="POST" action="{{ route('markah.update', [$markah]) }}">

  @csrf

  @method('patch')

  <div class="form-group">
      <label>STUDENT</label>
      <input type="text" name="user_id" class="form-control" value="{{ $markah->user->nama }}" disabled="disabled">
      {!! $errors->first('nama', '<span style="color:red">:message</span>') !!}
  </div>

  <div class="form-group">
      <label>KURSUS</label>
      <input type="text" name="user_id" class="form-control" value="{{ $markah->kursus->nama }}" disabled="disabled">
      {!! $errors->first('status', '<span style="color:red">:message</span>') !!}
  </div>

  <div class="form-group">
      <label>Markah</label>
      <input type="text" name="markah" class="form-control" value="{{ $markah->markah }}">
      {!! $errors->first('markah', '<span style="color:red">:message</span>') !!}
  </div>

  <div class="form-group">
      <label>GRED</label>
      <input type="text" name="gred" class="form-control" value="{{ $markah->gred }}">
      {!! $errors->first('gred', '<span style="color:red">:message</span>') !!}
  </div>

  <div class="form-group">
      <label>MATA NILAI</label>
      <input type="text" name="mata_nilai" class="form-control" value="{{ $markah->mata_nilai }}">
      {!! $errors->first('mata_nilai', '<span style="color:red">:message</span>') !!}
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

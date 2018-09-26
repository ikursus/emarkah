@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Kemaskini Kursus') }}</div>

                <div class="card-body">

                  @include('layouts.alerts')

<form method="POST">

  @csrf

  @method('patch')

  <div class="form-group">
      <label>NAMA</label>
      <input type="text" name="nama" class="form-control" value="{{ $kursus->nama }}">
      {!! $errors->first('nama', '<span style="color:red">:message</span>') !!}
  </div>

  <div class="form-group">
      <label>STATUS</label>
      <select name="status" class="form-control">
        <option value="BUKA"{{ $kursus->status == 'BUKA' ? ' selected="selected"' : ''}}>BUKA</option>
        <option value="PENUH"{{ $kursus->status == 'PENUH' ? ' selected="selected"' : ''}}>PENUH</option>
      </select>
      {!! $errors->first('status', '<span style="color:red">:message</span>') !!}
  </div>

  <div class="form-group">
      <label>CREDIT</label>
      <input type="text" name="credit" class="form-control" value="{{ $kursus->credit }}">
      {!! $errors->first('credit', '<span style="color:red">:message</span>') !!}
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

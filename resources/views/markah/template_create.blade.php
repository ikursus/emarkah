@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Markah') }}</div>

                <div class="card-body">

                  @include('layouts.alerts')

<form method="POST" action="{{ route('markah.store') }}">

  @csrf

    <div class="form-group">
        <label>STUDENT</label>
        <select name="user_id" class="form-control">
          @foreach( $senarai_student as $item )
          <option value="{{ $item->id }}">{{ $item->nama }}</option>
          @endforeach
        </select>
        {!! $errors->first('nama', '<span style="color:red">:message</span>') !!}
    </div>

    <div class="form-group">
        <label>KURSUS</label>
        <select name="kursus_id" class="form-control">
          @foreach( $senarai_kursus as $item )
          <option value="{{ $item->id }}">{{ $item->nama }}</option>
          @endforeach
        </select>
        {!! $errors->first('status', '<span style="color:red">:message</span>') !!}
    </div>

    <div class="form-group">
        <label>MARKAH</label>
        <input type="text" name="markah" class="form-control">
        {!! $errors->first('markah', '<span style="color:red">:message</span>') !!}
    </div>

    <div class="form-group">
        <label>GRED</label>
        <input type="text" name="gred" class="form-control">
        {!! $errors->first('gred', '<span style="color:red">:message</span>') !!}
    </div>

    <div class="form-group">
        <label>MATA NILAI</label>
        <input type="text" name="mata_nilai" class="form-control">
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

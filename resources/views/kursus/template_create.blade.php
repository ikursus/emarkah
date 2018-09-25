@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah Kursus') }}</div>

                <div class="card-body">

                  @include('layouts.alerts')

<form method="POST">

  @csrf

    <div class="form-group">
        <label>NAMA</label>
        <input type="text" name="nama" class="form-control">
        {!! $errors->first('nama', '<span style="color:red">:message</span>') !!}
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

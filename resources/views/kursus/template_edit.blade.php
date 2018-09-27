@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Kemaskini Kursus') }}</div>

                <div class="card-body">

                  @include('layouts.alerts')

  {!! Form::model($kursus, ['route' => ['kursus.update', $kursus->id] ]) !!}

  @method('patch')

  @include('kursus/template_form')

{!! Form::close() !!}
</tbody>
</table>

</div>
</div>
</div>
</div>
</div>
@endsection

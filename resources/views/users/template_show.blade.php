@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Detail User') }}</div>

                <div class="card-body">

                  @include('layouts.alerts')

                  Berikut adalah senarai kursus dan markah yang diperolehi:

                  <table class="table  table-bordered">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>NAMA STUDENT</th>
                        <th>KURSUS</th>
                        <th>MARKAH</th>
                        <th>GRED</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach( $rekod as $item )
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->nama_kursus }}</td>
                        <td>{{ $item->markah }}</td>
                        <td>{{ $item->gred_student }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

</div>
</div>
</div>
</div>
</div>
@endsection

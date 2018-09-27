@extends('layouts/app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">SENARAI markah</div>

                <div class="card-body">

                  @include('layouts.alerts')

<p>
	<a href="{{ route('markah.create') }}" class="btn btn-primary">Tambah markah</a>
</p>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
        <th>ID</th>
        <th>STUDENT</th>
        <th>KURSUS</th>
        <th>markah</th>
        <th>GRED</th>
        <th>MATA NILAI</th>
        <th>TINDAKAN</th>
        </tr>
    </thead>
<tbody>
        @foreach($query as $item)
        <tr>
        <td>{{ $item['id'] }}</td>
        <td>{{ $item->user->nama }}</td>
        <td>{{ $item->kursus->nama }}</td>
        <td>{{ $item['markah'] }}</td>
        <td>{{ $item['gred'] }}</td>
        <td>{{ $item['mata_nilai'] }}</td>
        <td>
          <a href="{{ route('markah.edit', $item['id']) }}" class="btn btn-sm btn-info">Edit</a>

          <!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $item['id'] }}">
  Delete
</button>

<form method="POST" action="{{ route('markah.destroy', $item['id']) }}">
  @csrf
  @method('DELETE')

<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $item['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengesahan Hapus Rekod</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Adakah anda bersetuju untuk menghapuskan rekod ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Teruskan</button>
      </div>
    </div>
  </div>
</div>
</form>

        </td>
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

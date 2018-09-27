@extends('layouts/app')

@section('styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">SENARAI KURSUS</div>

                <div class="card-body">

                  @include('layouts.alerts')

<p>
	<a href="{{ route('kursus.create') }}" class="btn btn-primary">Tambah Kursus</a>
</p>

<table class="table table-bordered table-striped" id="kursus-table">
    <thead class="thead-dark">
        <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>STATUS</th>
        <th>KREDIT</th>
        <th>TINDAKAN</th>
        </tr>
    </thead>

</table>

</div>
</div>
</div>
</div>
</div>
@endsection


@section('scripts')
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script>
$(function() {
    $('#kursus-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('kursus.datatables') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nama', name: 'nama' },
            { data: 'status', name: 'status' },
            { data: 'credit', name: 'credit' },
            { data: 'tindakan', name: 'tindakan', searchable: false, orderable: false }
        ]
    });
});
</script>

@endsection

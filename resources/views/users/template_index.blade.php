@extends('layouts/app')


@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">


<a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>TINDAKAN</th>
        </tr>
    </thead>
<tbody>
        @foreach($data_users as $user)
        <tr>
        <th>{{ $user['id'] }}</th>
        <th>{{ $user['nama'] }}</th>
        <th>{{ $user['email'] }}</th>
        <th><a href="{{ route('users.edit', $user['id']) }}" class="btn btn-sm btn-info">Edit</a></th>
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

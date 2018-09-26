@extends('layouts/app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">SENARAI USERS</div>

                <div class="card-body">

<p>
	<a href="{{ route('users.create') }}" class="btn btn-primary">Tambah User</a>
</p>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>ROLE</th>
        <th>TINDAKAN</th>
        </tr>
    </thead>
<tbody>
        @foreach($data_users as $user)
        <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->nama }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role }}</td>
        <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-info">Edit</a></td>
        </tr>
        @endforeach
</tbody>
</table>

{{ $data_users->links() }}
{{ $data_users->render() }}

</div>
</div>
</div>
</div>
</div>
@endsection

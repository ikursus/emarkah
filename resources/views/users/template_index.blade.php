<h1>Senarai Users</h1>
<a href="{{ route('users.create') }}">Tambah User</a>

<table style="height: 5px;" width="473">
    <thead>
        <tr>
        <th style="width: 111px;">ID</th>
        <th style="width: 111px;">NAMA</th>
        <th style="width: 111px;">EMAIL</th>
        <th style="width: 112px;">TINDAKAN</th>
        </tr>
    </thead>
<tbody>
        @foreach($data_users as $user)
        <tr>
        <th>{{ $user['id'] }}</th>
        <th>{{ $user['nama'] }}</th>
        <th>{{ $user['email'] }}</th>
        <th><a href="{{ route('users.edit', $user['id']) }}">Edit</a></th>
        </tr>
        @endforeach
</tbody>
</table>

@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Tambah User') }}</div>

                <div class="card-body">

<form method="POST">
    <div class="form-group">
        <label>NAMA</label>
        <input type="text" name="nama" class="form-control">
    </div>

    <div class="form-group">
        <label>EMAIL</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
        <label>PASSWORD</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
        <label>ROLE</label>
        <select name="role" class="form-control">
            <option value="admin">ADMIN</option>
            <option value="staff">STAFF</option>
            <option value="student">STUDENT</option>
        </select>
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

<h1>Tambah User</h1>
<p>&nbsp;</p>
<form method="POST">
    <div>
        <label>NAMA</label>
        <input type="text" name="nama">
    </div>

    <div>
        <label>EMAIL</label>
        <input type="email" name="email">
    </div>

    <div>
        <label>PASSWORD</label>
        <input type="password" name="password">
    </div>

    <div>
        <label>ROLE</label>
        <select name="role">
            <option value="admin">ADMIN</option>
            <option value="staff">STAFF</option>
            <option value="student">STUDENT</option>
        </select>
    </div>

    <div>
        <button type="submit">SAVE</button>
    </div>
</form>

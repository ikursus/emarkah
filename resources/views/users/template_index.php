<h1>Senarai Users</h1>
<a href="<?php echo route('users.create'); ?>">Tambah User</a>

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
    <?php foreach($data_users as $user): ?>
        <tr>
        <th><?php echo $user['id']; ?></th>
        <th><?php echo $user['nama']; ?></th>
        <th><?php echo $user['email']; ?></th>
        <th><a href="<?php echo route('users.edit', $user['id']); ?>">Edit</a></th>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>

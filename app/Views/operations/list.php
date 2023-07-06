<?php

$this->extend('layouts/home');
$this->section('body');
$activePage = basename($_SERVER['PHP_SELF'], '.php');
?>

<?php if(session()->getFlashdata('success')) :?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('success')?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<h1 style="font-weight: bold; color: #27374D">Employee List</h1>
<table class="table" style="font-weight: bold; color: #27374D">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Employee ID</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Address</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Gender</th>
            <th scope="col">Nationality</th>
            <th scope="col">Contact</th>
            <th scope="col">Email</th>
            <th scope="col">Profile</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
        <?php foreach($operations as $emp): ?>
            <tr>
            <th scope="row"><?= $emp['id']; ?></th>
            <td><?= $emp['emp_id']; ?></td>
            <td><?= $emp['emp_name']; ?></td>
            <td><?= $emp['emp_age']; ?></td>
            <td><?= $emp['emp_add']; ?></td>
            <td><?= $emp['emp_dob']; ?></td>
            <td><?= $emp['emp_gen']; ?></td>
            <td><?= $emp['emp_natl']; ?></td>
            <td><?= $emp['emp_ctc']; ?></td>
            <td><?= $emp['emp_email']; ?></td>
            <td><img src="/uploads/<?= $emp['emp_pf']; ?>" alt="" width="100"></td>
            </tr>
            <?php endforeach; ?>
    </tbody>
    </tbody>
</table>
<?php $this->endSection(); ?>
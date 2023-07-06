<?php
$this->extend('layouts/home');
$this->section('body');
$activePage = basename($_SERVER['PHP_SELF'], '.php');
?>
<?php if (session()->getFlashdata('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<h1 style="font-weight: bold; color: #27374D">Delete List</h1>
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
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    <tbody>
        <?php foreach ($remove as $emp) : ?>
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
                <td>
                    <!-- Modal confirmation before delete. -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $emp['id']; ?>">Remove</button>
                    <div class="modal fade" id="exampleModal<?= $emp['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModal">Delete validation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Do you want to delete this data?
                                </div>
                                <div class="modal-footer">
                                    <a href="/operations/remove/<?= $emp['id']; ?>" class="btn btn-danger">Yes</a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </tbody>
</table>
<?php $this->endSection(); ?>
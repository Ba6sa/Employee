<?php

$this->extend('layouts/home');
$this->section('body');

?>

<h1 style="font-weight: bold; color: #27374D">Update Employee</h1>
<form action="/operations/updated/<?= $emp['id']; ?>" method="POST" enctype="multipart/form-data">
    <div class="form-outline mb-4">
        <input type="text" name="EmpId" class="form-control" value="<?= $emp['emp_id']; ?>" required/>
        <label class="form-label" for="EmpId">Employee ID</label>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" name="EmpName" class="form-control" value="<?= $emp['emp_name']; ?>" placeholder="First Name Last Name" required/>
                <label class="form-label" for="EmpName">Full name</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <input type="number" name="EmpAge" class="form-control" pattern="[0-9]{1,}" value="<?= $emp['emp_age']; ?>" required/>
                <label class="form-label" for="EmpAge">Age</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="date" name="EmpDob" class="form-control" value="<?= $emp['emp_dob']; ?>" required/>
                <label class="form-label" for="EmpDob">Date of Birth</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" name="EmpGen" class="form-control" value="<?= $emp['emp_gen']; ?>" placeholder="Male or Female" pattern="Male||Female||male||female" required/>
                <label class="form-label" for="EmpGen">Gender</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="EmpNatl" name="EmpNatl" class="form-control" value="<?= $emp['emp_natl']; ?>" required/>
                <label class="form-label" for="EmpNatl">Nationality</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
            <input type="tel" id="EmpCtc" name="EmpCtc" class="form-control" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="e.g 9123456789" value="<?= $emp['emp_ctc']; ?>" required/>
            <label class="form-label" for="EmpCtc">Contact</label>
            </div>
        </div>
    </div>
    <div class="form-outline mb-4">
        <input type="text" name="EmpAdd" class="form-control" value="<?= $emp['emp_add']; ?>" required/>
        <label class="form-label" for="EmpAdd">Address</label>
    </div>
    <div class="form-outline mb-4">
        <input type="text" name="EmpEmail" class="form-control" value="<?= $emp['emp_email']; ?>" required/>
        <label class="form-label" for="EmpEmail">Email</label>
    </div>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="EmpPf" name="EmpPf" value="<?= $emp['emp_pf']; ?>"/>
        <label class="input-group-text" for="EmpPf">Upload</label>
    </div>
    <!-- Modal confirmation before update. -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update validation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Do you want to submit changes to this validation?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php $this->endSection(); ?>
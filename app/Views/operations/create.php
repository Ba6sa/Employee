<?php

$this->extend('layouts/home');
$this->section('body');
$activePage = basename($_SERVER['PHP_SELF'], '.php');
?>

<h1 style="font-weight: bold; color: #27374D">Create Employee</h1>
<form action="/operations/store" id="form" method="post" onsubmit="submitForm(event)" enctype="multipart/form-data">
    <div class="form-outline mb-4">
        <input type="text" id="EmpId" name="EmpId" class="form-control" placeholder="ID" required/>
        <label class="form-label" for="EmpId">Employee ID</label>
    </div>
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="EmpName" name="EmpName" class="form-control" placeholder="First Name Last Name" required/>
                <label class="form-label" for="EmpName">Full name</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <input type="number" id="EmpAge" name="EmpAge" class="form-control" pattern="[0-9]{1,}" required/>
                <label class="form-label" for="EmpAge">Age</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="date" id="EmpDob" name="EmpDob" class="form-control" required/>
                <label class="form-label" for="EmpDob">Date of Birth</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
                <input type="text" id="EmpGen" name="EmpGen" class="form-control" placeholder="Male or Female" pattern="Male||Female||male||female" required/>
                <label class="form-label" for="EmpGen">Sex</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="EmpNatl" name="EmpNatl" class="form-control" required />
                <label class="form-label" for="EmpNatl">Nationality</label>
            </div>
        </div>
        <div class="col">
            <div class="form-outline">
            <input type="tel" id="EmpCtc" name="EmpCtc" class="form-control" required pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="e.g 9123456789"/>
            <label class="form-label" for="EmpCtc">Contact</label>
            </div>
        </div>
    </div>
    <div class="form-outline mb-4">
        <input type="text" id="EmpAdd" name="EmpAdd" class="form-control" required/>
        <label class="form-label" for="EmpAdd">Address</label>
    </div>
    <div class="form-outline mb-4">
        <input type="text" id="EmpEmail" name="EmpEmail" class="form-control" required/>
        <label class="form-label" for="EmpEmail">Email</label>
    </div>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="EmpPf" name="EmpPf" required>
        <label class="input-group-text" for="EmpPf">Upload</label>
    </div>
    <!-- Modal confirmation before submitted. -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Create</button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add data to the list</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to submit?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Messagebox that provides a reminder that needs to put an input -->
<script>
    function submitForm(event) {
        event.preventDefault();

        const form = document.getElementById('form');
        var field1 = document.getElementById("EmpId").value;
        var field2 = document.getElementById("EmpName").value;
        var field3 = document.getElementById("EmpAge").value;
        var field4 = document.getElementById("EmpDob").value;
        var field5 = document.getElementById("EmpGen").value;
        var field6 = document.getElementById("EmpAdd").value;
        var field7 = document.getElementById("EmpNatl").value;
        var field8 = document.getElementById("EmpCtc").value;
        var field9 = document.getElementById("EmpEmail").value;
        var field10 = document.getElementById("EmpPf").value;

        if (field1 === "" || field2 === "" || field3 === "" || field4 === "" || field5 === "" ||
            field6 === "" || field7 === "" || field8 === "" || field9 === "" || field10 === "") {
            alert("You must fill out all the fields!");
        } else {
            form.submit();
        }
    }
</script>

<?php $this->endSection(); ?>
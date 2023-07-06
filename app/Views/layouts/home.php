<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="briefcase.png" type="image/png">
    <base href="/">
    <title>Employee</title>
</head>

<body>

    <input type="checkbox" name="" id="check" class="check">
    <div class="box" id="sidebar">
        <label for="check">
            <span class="fas fa-times" id="times"></span>
            <span class="fas fa-bars" id="bars"></span>
        </label>
        <div class="header">EMPLOYEE TABLE</div>
        <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
        <ol>
            <li>
                <a class="<?= ($activePage == 'operations') ? 'active' : ''; ?>" href="/operations" id="navOpen">All Employee List</a>
            </li>

            <li>
                <a class="<?= ($activePage == 'create') ? 'active' : ''; ?>" href="/operations/create"  id="navOpen">Add Employee</a>
            </li>

            <li>
                <a class="<?= ($activePage == 'updatedlist') ? 'active' : ''; ?>" href="/operations/updatedlist"  id="navOpen">Update Employee</a>

            </li>

            <li>
                <a class="<?= ($activePage == 'removelist') ? 'active' : ''; ?>" href="/operations/removelist"  id="navOpen">Delete Employee</a>
            </li>
        </ol>
    </div>

    <div class="container">
        <?= $this->renderSection('body') ?>
    </div>
</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Work Sans', sans-serif;
    }

    .box {
        height: 100%;
        position: absolute;
        background: #27374D;
        z-index: 1;
        transition: .5s ease;
        transform: translateX(-315px);
    }

    .box .header {
        color: #DDE6ED;
        font-size: 30px;
        font-weight: 700;
        padding: 10px;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 2px;
        cursor: default;
    }

    ol {
        width: 100%;
        list-style: none;
        padding: 0;
    }

    ol li {
        display: block;
        width: 100%;
    }

    ol li a {
        color: #DDE6ED;
        padding: 15px 10px;
        text-decoration: none;
        display: block;
        font-size: 18px;
        letter-spacing: 1px;
        position: relative;
        transition: .3s;
        overflow: hidden;
        text-transform: capitalize;
    }

    ol li a i {
        width: 70px;
        font-size: 18px;
        text-align: center;
        padding-left: 10px;
    }

    li a.active {
        background-color: #526D82;
        color: #DDE6ED;
        font-weight: bold;
    }

    li a:hover:not(.active) {
        background-color: #9DB2BF;
        color: #DDE6ED;
        font-weight: 600;
        letter-spacing: 2px;
    } 

    .check {
        visibility: hidden;
        display: none;
    }

    span {
        position: absolute;
        right: -40px;
        top: 1rem;
        font-size: 25px;
        border-radius: 3px;
        color: #DDE6ED;
        padding: 3px 7px;
        cursor: pointer;
        background: #000;
    }

    #bars {
        background: #27374D;
    }

    #times {
        background: #27374D;
    }

    #check:checked~.box {
        transform: translateX(0);

    }

    #check:checked~.box #bars {
        display: none;
    }

    label {
        font-weight: 600;
    }

    table {
        border: 3px solid #27374D;
    }
    tr,
    td,
    th {
        text-align: center;
    }
    .modal-body {
        color: #27374D;
        font-weight: 500;
    }
    .modal-title {
        font-weight: 800;
        color: #27374D;
    }
    .btn {
        border: none;
    }
    .btn:hover {
        transition: all .1 ease-in-out;
        background-color: #BBBBBB;
    }
    div.container {
        padding: 5px;
        max-width: 80%;
    }

    @media screen and (max-width: 700px) {
        div.container {
            margin-left: 100%;
        }
    }
    #EmpCtc{
        outline: 0;
    }

    #EmpCtc:focus:valid{
        border-color: green; 
        box-shadow: 0 0 7px #059100;  
    }

    #EmpCtc:focus:invalid{
        border-color: red;    
        box-shadow: 0 0 7px #911300;  
    }
</style>

</html>
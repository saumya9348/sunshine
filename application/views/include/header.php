<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?= base_url().'Assets/header.css' ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    </head>
    <body>
        <header>
            <div class="navBar">
                <h1><a href="">My PhotoBook</a></h1>
                <h1><a href="">Loged IN USer</a></h1>
                <p>
                    <a href="<?= base_url("createPost") ?>"> <button type="" class="submitbtn">Add New Post </button> </a>
                    <a href=""><i class="fa-solid fa-right-from-bracket"></i></a>

                </p>
            </div>
        </header>
        <section class="boody">
            <div class="content container">
                <div class="row">
                    <div class="col-3 element"></div>
                    <div class="col-3 element"></div>
                    <div class="col-3 element"></div>
                </div>


<?php
require 'functions.php';


if (isset($_POST["register"])) {
    
    if(registrasi($_POST) > 0) {
        echo "<script>
            alert('User baru berhasil di tambahkan!');
        </script>";
    }else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Registrasi</title>
        <style>
            label {
                display : block;
            }
        </style>
    </head>
    <body>
         <!-- navbar -->
         <div class="navbar-fixed">
            <nav class="blue darken-2">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="#slider" class="brand-logo">Fraternity</a>
                        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#client">Our Sponsor</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#portofolio">Portofolio</a></li>
                                <li><a href="#login">Login</a></li>
                            </ul>
                </div>
                    </div>
            </nav>
        </div>
            <h1>Halaman Registrasi</h1>
        
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <label for="pasword2">Konfirmasi Password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <button type="submit" name="register">Register</button>
                </li>
            </ul>
        </form>
    </body>
</html>
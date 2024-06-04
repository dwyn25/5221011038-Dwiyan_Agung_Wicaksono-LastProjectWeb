<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"crossorigin="anonymous"/>
        <title>Portal Berita</title>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <nav class="navbar navbar-expand-lg" style="background: rgb(63, 60, 214)">
                    <div class="container">
                        <a class="navbar-brand" href="/beranda">
                            <img src="<?php echo e(asset('assets/img/logo.jpg')); ?>" width="50px"
                            height="50px">
                        </a>
                        <button class="navbar-toggler" type="button" data-bstoggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll"aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarScroll">
                            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="/beranda" style="color: white">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/profil" style="color:white">Profil Sekolah</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" ariaexpanded="false" style="color: white">Informasi</a>
                                    <ul class="dropdown-menu" arialabelledby="navbarScrollingDropdown">
                                        <li><a class="dropdown-item" href="/olahberita">Berita</a></li>
                                        <li><a class="dropdown-item" href="#">Guru & Karyawan</a></li>
                                        <li><a class="dropdown-item" href="#">Fasilitas</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/berita" style="color: white">Olah Berita</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                
                                <button class="btn btn-sm btn-primary"type="button">Login</button>
                                <button class="btn btn-sm btn-outline-warning" type="button" style="margin-left: 10px">Register</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="container mt-4" id="body">
                <?php echo $__env->yieldContent('container'); ?>
            </div>
            <div id="footer">
                <footer class="text-center text-white mt-4" style="background-color:#f1f1f1; buttm: 0;">
                    <!-- Grid container -->
                    <div class="container pt-4">
                        <!-- Section: Social media -->
                        <section class="mb-4">
                            <!-- Facebook -->
                            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
                            <!-- Twitter -->
                            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>
                            <!-- Google -->
                            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>
                            <!-- Instagram -->
                            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.instagram.com/smkmuhpakem/" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
                            <!-- Linkedin -->
                            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                            <!-- Github -->
                            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
                        </section>
                    <!-- Section: Social media -->
                    </div>
                    <!-- Grid container -->
                    <!-- Copyright -->
                    <div class="text-center text-dark p-3" style="background-color:rgba(0, 0, 0, 0.2);"> © 2024 Copyright:
                        <a class="text-dark" href="https://smkmuhpakem.sch.id/">SMK Muhammadiyah Pakem X HIMTEK UTY</a>
                    </div>
                    <!-- Copyright -->
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>

<?php /**PATH C:\Users\dwyn\Latihan\resources\views/layout/main.blade.php ENDPATH**/ ?>
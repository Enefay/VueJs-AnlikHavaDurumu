<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Güvenli Tarım - Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0">+012 345 6789</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.php" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Güvenli</span>Tarım</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Güvenli</span>Tarım</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="index.php" class="nav-item nav-link">ANASAYFA</a>
                <a href="blog.php" class="nav-item nav-link active">BLOG</a>
                <a href="weather.php" class="nav-item nav-link">HAVA DURUMU</a>
                <a href="about.php" class="nav-item nav-link">HAKKIMIZDA</a>
                <a href="contact.php" class="nav-item nav-link">İLETİŞİM</a>
                <?php
                    session_start();
                    ob_start();
                    include 'db_con.php';
                    if(isset($_SESSION["uyeID"])==1)
                    {
                        echo'
                            <a href="logout.php" class="nav-item nav-link">Çıkış Yap</a>
                        ';
                    }
                    else{
                        echo'
                            <a href="login.php" class="nav-item nav-link">GİRİŞ YAP</a>
                        ';
                    }
                ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->





    <!-- DENEME -->

    <?php
    if(isset($_SESSION["uyeID"])==1)
    {
        echo'
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 bg-hero mb-5">
            <div class="container py-5">
                <div class="row justify-content-start">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="display-1 text-white mb-md-4">Blog</h1>
                        <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Anasayfa</a>
                        <a href="blog.php" class="btn btn-secondary py-md-3 px-md-5">Blog</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Blog Start -->
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-md-6">
                            <div class="blog-item position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                                <a class="blog-overlay" href="detail.php">
                                    <h4 class="text-white">Marmara Bölgesi</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                                <a class="blog-overlay" href="detail.php"">
                                    <h4 class="text-white">Akdeniz Bölgesi</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-3.jpg" alt="">
                                <a class="blog-overlay" href="detail.php"">
                                    <h4 class="text-white">Ege Bölgesi</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                                <a class="blog-overlay" href="detail.php"">
                                    <h4 class="text-white">Güneydoğu Anadolu Bölgesi</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                                <a class="blog-overlay" href="detail.php"">
                                    <h4 class="text-white">Karadeniz Bölgesi</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-3.jpg" alt="">
                                <a class="blog-overlay" href="detail.php"">
                                    <h4 class="text-white">Güneydoğu Anadolu Bölgesi</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                                <a class="blog-overlay" href="detail.php"">
                                    <h4 class="text-white">İç Anadolu Bölgesi</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                                <a class="blog-overlay" href="detail.php"">
                                    <h4 class="text-white">Gübreleme</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-3.jpg" alt="">
                                <a class="blog-overlay" href="detail.php"">
                                    <h4 class="text-white">Ekin Kar Oranları</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-item position-relative overflow-hidden">
                                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                                <a class="blog-overlay" href="detail.php"">
                                    <h4 class="text-white">Püf noktalar</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <nav aria-label="Page navigation">
                              <ul class="pagination pagination-lg justify-content-center m-0">
                                <li class="page-item disabled">
                                  <a class="page-link rounded-0" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                  </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link rounded-0" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Blog list End -->
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5">
                        <div class="input-group">
                        </div>
                    </div>
                    <!-- Search Form End -->
    
                    <!-- Category Start -->
                    <div class="mb-5">
                        <h2 class="mb-4">Kategoriler</h2>
                        <div class="d-flex flex-column justify-content-start bg-primary p-4">
                            <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Bölgeler</a>
                            <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Gübreleme</a>
                            <a class="fs-5 fw-bold text-white mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Püf Noktalar</a>
                        </div>
                    </div>
                    <!-- Category End -->
    
    
                    <!-- Plain Text Start -->
                    <div>
                        <h2 class="mb-4">Oku ve Bilinçlen</h2>
                        <div class="bg-primary text-center text-white" style="padding: 30px;">
                            <p>Bölgeniz ile ilgili bloglarımızı okuyarak yetiştirme üzerine yeni fikirler edinebilirsiniz. </p>
                        </div>
                    </div>
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
        <!-- Blog End -->
        ';
    }

    else{

        echo'
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 bg-hero mb-5">
            <div class="container py-5">
                <div class="row justify-content-start">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="display-1 text-white mb-md-4">Blogları görebilmek için giriş yapmalısınız...</h1>
                        <a href="login.php" class="btn btn-primary py-md-3 px-md-5 me-3">Giriş Yap</a>
                        <a href="register.php" class="btn btn-secondary py-md-3 px-md-5">Kayıt Ol</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        ';

    }
        ?>
        
    

        
    <!-- Footer Start -->
    <div class="container-fluid bg-footer bg-primary text-white mt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4">Detaylı İletişim İçin...</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0">Kayali, Kırklareli, TÜRKİYE</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0">bilgi@gunvenlitarim.net</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                                <!-- bosluk -->
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Hızlı Linkler</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="index.php"><i class="bi bi-arrow-right text-white me-2"></i>Anasayfa</a>
                                <a class="text-white mb-2" href="about.php"><i class="bi bi-arrow-right text-white me-2"></i>Hakkımızda</a>
                                <a class="text-white" href="contact.php"><i class="bi bi-arrow-right text-white me-2"></i>İletişim</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
                        <h4 class="text-white">Abonelik</h4>
                        <p>Anlık blog bildirimleri için abone olun.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="E-Posta">
                                <button class="btn btn-primary">Abone Ol</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="#">Güvenli Tarım</a> Tüm hakları Saklıdır. <a class="text-secondary fw-bold" href="#">Batuhan Berk Karadere</a> Tarafından dizayn edilmiştir. </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
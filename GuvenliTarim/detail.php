<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Güvenli Tarım - Blog Detay</title>
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


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 bg-hero mb-5">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-white mb-md-4">Blog Detay</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Anasayfa</a>
                    <a href="detail.php" class="btn btn-secondary py-md-3 px-md-5">Blog Detay</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <div class="row g-5 mb-5">
                        <div class="col-md-6">
                            <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                        </div>
                    </div>
                    <h1 class="mb-4">Marmara Bölgesinde Yetişen Tarım Ürünleri ve Teknolojileri</h1>
                    <p>İklimi ve bitki örtüsünün yanı sıra, modern tarıma elverişli olan verimli toprak yapısı sayesinde Marmara Bölgesi, tarım üretiminde büyük paya sahiptir. Marmara’da yetiştirilen tarım ürünleri şu şekilde sıralanmaktadır:</p>
                    <p> <b>Buğday:</b> Kurak yerlerde halkın geçim kaynağı olan buğday, Trakya bölümünde yetiştirilmektedir.<br />
                    <b>Arpa:</b> Tıpkı buğday gibi kurak bir iklim seven arpa, Trakya’nın iç kesimlerinde yetiştirilmektedir.<br />
                    <b>Mısır:</b> Mısır tarımı, Güney Marmara bölümünde daha sık yapılmaktadır. Türkiye'nin mısır üretiminde önemli bir yer tutan bu bölge, Karadeniz ile birlikte toplam üretimin %75’ini karşılamaktadır.<br />
                    <b>Yulaf:</b> Kocaeli, İstanbul, Çanakkale, Balıkesir, Tekirdağ ve Kırklareli gibi iller, Türkiye yulaf üretiminin ortalama %60’ını gerçekleştirmektedir.<br />
                    <b>Patates:</b> Başta Balıkesir, Kocaeli, Bursa ve Sakarya olmak üzere Marmara’daki çoğu ilde patates yetiştirilmektedir.<br />
                    <b>Soğan ve Sarımsak:</b>  Yıllık kuru soğan üretiminin büyük bir bölümü Güney Marmara’dan karşılanmaktadır. Sarımsak ise bölgedeki bütün illerde üretilmektedir.<br />
                    <b>Domates:</b> Balkan ülkelerinden sonra ülkemizde ilk kez Güney Marmara’da yetiştirilen domates, dış ticaret yapılan tarımsal ürünlerin başında gelmektedir.<br />
                    <b>Fındık:</b> Fındık üretiminde Doğu ve Orta Karadeniz başta gelse de Güney Marmara’da da fındık üretilmektedir.<br />
                    <b>Zeytin:</b> Marmara Bölgesi, zeytin ağacı fazlalığı açısından Ege Bölgesi sonrasında ikinci sırada gelmektedir. Güney Marmara, Doğu Marmara ve Trakya kesimlerinde zeytin üretimi yapılmaktadır.<br />
                    <b>Turunçgiller:</b> Türkiye’deki turunçgil ağaçlarının %1.5 kadarı Güney Marmara’da yer almaktadır.<br />
                    <b>Şeftali:</b> Türkiye’nin pazar değeri yüksek ve en kaliteli şeftali meyvesi, Bursa’da yetiştirilmektedir.<br />
                    <b>Armut:</b> Üretimi gün geçtikçe artan armut meyvesi, Güney Marmara’da daha fazla yetiştirilmektedir.<br />
                    <b>Üzüm:</b> Kuraklığa ve soğuğa dayanıklı olan üzüm, Türkiye’deki her bölgede üretilmektedir. Güney Marmara’da bunlardan biridir.<br />
                    <b>Baklagiller:</b> Nohut, mercimek ve fasulye gibi mahsuller, yetişme zamanında yağış, olgunlaşma zamanında sıcaklık istediği için, Marmara Bölgesi kapsamında baklagil tarımı yapılmaktadır.<br />
                    <b>Ayçiçeği:</b> Ayçiçek üretiminin %70 kadarını Marmara Bölgesi karşılamaktadır.
                    </p>
                    <h3>Marmara Bölgesi Modern Tarım Teknolojileri</h3>
                    <p>Çiftçilikte çığır açan modern tarım teknolojileri, Marmara Bölgesi üretiminde de kullanılmaktadır. Sürdürülebilirlik ve gıda güvenliğini hedefleyen modern tarım yöntemleri, teknoloji sayesinde daha kolay bir şekilde uygulanmaktadır. Tarım yöntemindeki modernizasyon, üretim kalitesinin artmasını da sağlamaktadır. Genel olarak modern tarımla birlikte öne çıkan yöntemler, şu şekilde sıralanmaktadır:</p>
                    <p>
                    <b>Sulama Teknolojisi:</b> Su kaynakları bakımından zengin olan Marmara'da, sulama konusunda modern yöntemler tercih edilmektedir. Su temini, bitkilerin hayatta kalmasını sağlayan en önemli unsurlardan biri olarak sayılmaktadır. Az miktarda yağış, tarım için yetersiz olmaktadır. Bu nedenle, sulama teknolojisi ile iyi stratejiler gerçekleştirilmektedir. Barajların inşası, nehir suyu ve dağıtım kanalı kullanımı, mahsul üretimini artırmak için sondajlardan faydalanılması da bu yöntemler arasında bulunmaktadır.<br />
                    <b>Toprağın İşlenmesi:</b> Topraktaki havanın dolaşımını artırmak için uygun koşullarda toprak havalandırması yapılmaktadır. Bu nedenle, çiftlik ürünlerinin daha iyi büyümesi amacıyla toprağın yoğun olarak işlenmesi gerekmektedir. Marmara'nın zengin toprak yapısı, derin ve eksiksiz biçimde işlenebildiğinden dolayı, bu bölgede tarımsal faaliyetlerde hedeflenen sonuçlar elde edilmektedir. Toprağın verimli olacak şekilde işlenmesinde, teknolojik tarım makinelerinin etkisi büyüktür.<br />
                    <b>Kaliteli Gübre Kullanımı:</b> Tarım yapılacak toprağın verimliliğini artırmak için gübre kullanımı da gereklidir. Marmara’nın alüvyal toprak yapısının bozulmaması ve ürünlerden yüksek verim elde etmek amacıyla, kaliteli gübre kullanımı yapılmaktadır. Böylece, bitkilerin beslenmesi de sağlanmaktadır.<br />
                    <b>Zararlıların Kimyasal Kontrolü:</b> Modern teknolojiler kullanılarak, zararlılar ile mücadele edilmektedir. Sağlıklı ve verimli tarımsal ürünlerin yetişmesi desteklenmektedir.      
                    </p>
                </div>
                <!-- Blog Detail End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-footer bg-primary text-white mt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0">123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0">info@example.com</p>
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
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Popular Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
                        <h4 class="text-white">Newsletter</h4>
                        <h6 class="text-white">Subscribe Our Newsletter</h6>
                        <p>Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by <a class="text-secondary fw-bold" href="https://htmlcodex.com">HTML Codex</a></p>
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
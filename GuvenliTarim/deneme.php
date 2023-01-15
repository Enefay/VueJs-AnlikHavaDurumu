<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Güvenli Tarım - Kayıt Ol</title>
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
                <a href="blog.php" class="nav-item nav-link">BLOG</a>
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
                            <a href="login.php" class="nav-item nav-link active">GİRİŞ YAP</a>
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
                    <h1 class="display-1 text-white mb-md-4">Kayıt Ol</h1>
                    <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Anasayfa</a>
                    <a href="login.php" class="btn btn-primary py-md-3 px-md-5 me-3">Giriş Yap</a>
                    <a href="register.php" class="btn btn-secondary py-md-3 px-md-5">Kayıt Ol</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Kayıt Ol</h6>
            </div>
            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="bg-primary h-100 p-5">
                        <form method="POST">
                            <div class="row g-3">
                                <div class="col-6">
                                    <input type="text" class="form-control bg-light border-0 px-4" placeholder="Adınız" style="height: 55px;" name="uyeAd" required>
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control bg-light border-0 px-4" placeholder="Soyadınız" style="height: 55px;" name="uyeSoyad" required>
                                </div>
                                <div class="col-12">
                                    <select id="1" class="form-control bg-light border-0 px-4"style="height: 55px; " name="uyeBolge" required>
                                        <option selected = "selected" >Bölge Seçin</option>
                                        <option value="Marmara Bölgesi"> Marmara Bölgesi  </option>
                                        <option value="İç Anadolu Bölgesi"> İç Anadolu Bölgesi </option>
                                        <option value="Ege Bölgesi"> Ege Bölgesi </option>
                                        <option value="Akdeniz Bölgesi"> Akdeniz Bölgesi </option>
                                        <option value="Güneydoğu Anadolu"> Güneydoğu Anadolu</option>
                                        <option value="Karadeniz Bölgesi"> Karadeniz Bölgesi </option>
                                        <option value="Doğu Anadolu Bölgesi"> Doğu Anadolu Bölgesi </option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select id="2" class="form-control bg-light border-0 px-4"style="height: 55px;" name="uyeSehir" placeholder="Şehir Seçin"  required>
                                    <option selected = "selected" ></option></select>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0 px-4" placeholder="Epostanız" style="height: 55px;" name="uyeMail" required>
                                </div>
                                <div class="col-12">
                                    <input type="password" class="form-control bg-light border-0 px-4" placeholder="Şifreniz" style="height: 55px;" name="uyeSifre" required>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit" name="buton">Kayıt Ol</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-secondary h-100 p-5">
                        <h2 class="text-white mb-4">Üye Misin ?</h2>
                        <div class="d-flex mb-4">

                        </div>
                        <div class="d-flex mb-4">
                            <a class="btn btn-primary w-100 py-3"" href="login.php" role="button">Giriş Yap</a>
                        </div>
                        <div class="d-flex">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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

    <!-- Dropdown Citys -->
    <script>
        var marmara = ["İstanbul","Edirne","Kırklareli","Tekirdağ","Çanakkale","Kocaeli","Yalova","Sakarya","Bilecik","Bursa","Balıkesir"];
        var icanadolu = ["Aksaray","Ankara","Çankırı","Eskişehir","Karaman","Kayseri","Kırıkkale","Kırşehir","Konya","Nevşehir","Niğde","Sivas","Yozgat"];
        var ege = ["Afyon","Aydın","Denizli","İzmir", "Kütahya","Manisa","Muğla","Uşak"];
        var akdeniz = ["Adana","Antalya","Burdur","Hatay","Isparta","Kahramanmaraş","Mersin","Osmaniye"];
        var guneydogu = ["Adıyaman","Batman","Diyarbakır","Gaziantep","Kilis","Mardin", "Şanlıurfa","Siirt","Şırnak"];
        var karadeniz = ["Amasya","Artvin","Bolu","Giresun","Gümüşhane","Kastamonu","Ordu","Rize","Samsun","Sinop","Tokat","Trabzon","Zonguldak"];
        var doguanadolu = ["Ağrı","Ardahan","Bingöl","Bitlis","Elazığ","Erzincan","Erzurum","Hakkari","Iğdır","Kars","Malatya","Muş","Tunceli","Van"];
        document.getElementById("1").addEventListener("change", function(e){
                var select2 = document.getElementById("2");
                select2.innerHTML = "";
                var aItems = [];
            if(this.value == "İç Anadolu Bölgesi"){
                aItems = icanadolu;
            } else if (this.value == "Ege Bölgesi") {
                aItems = ege;
            } else if(this.value == "Marmara Bölgesi") {
                aItems = marmara;
            }else if(this.value == "Akdeniz Bölgesi") {
                aItems = akdeniz;
            }else if(this.value == "Güneydoğu Anadolu") {
                aItems = guneydogu;
            }else if(this.value == "Karadeniz Bölgesi") {
                aItems = karadeniz;
            }else if(this.value == "Doğu Anadolu Bölgesi") {
                aItems = doguanadolu;
            }
            for(var i=0,len=aItems.length; i<len;i++) {
                var option = document.createElement("option");
                option.value= (i+1);
                var textNode = document.createTextNode(aItems[i]);
                option.appendChild(textNode);
                select2.appendChild(option);
            }
            
        }, false);
    </script>

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

    <?php
        include 'db_con.php';
        @$kontrol= $_POST['buton'];
        if(isset($kontrol)){
            $ad = $_POST['uyeAd'];
            $soyad = $_POST['uyeSoyad'];
            $email = $_POST['uyeMail'];
            $sifre = $_POST['uyeSifre'];
            $bolge = $_POST['uyeBolge'];
            $sehir = $_POST['uyeSehir'];
            $kayit = mysqli_query($conn,"INSERT INTO uye(uyeAd,uyeSoyad,uyeMail,uyeSifre,uyeBolge,uyeSehir) VALUES ('$ad','$soyad','$email','$sifre','$bolge','$sehir')");
        }
    ?>     
</body>

</html>




<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>Güvenli Tarım - Hava Durumu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

     <!-- Weather Stylesheet -->
     <link href="css/weather.css" rel="stylesheet">

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
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
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
                <a href="weather.php" class="nav-item nav-link active">HAVA DURUMU</a>
                <a href="about.php" class="nav-item nav-link">HAKKIMIZDA</a>
                <a href="contact.php" class="nav-item nav-link">İLETİŞİM</a>
                <?php
                session_start();
                ob_start();
                include 'db_con.php';
                if (isset($_SESSION["uyeID"]) == 1) {
                    echo '
                            <a href="logout.php" class="nav-item nav-link">Çıkış Yap</a>
                        ';
                } else {
                    echo '
                            <a href="login.php" class="nav-item nav-link">GİRİŞ YAP</a>
                        ';
                }
                ?>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <?php
    if (isset($_SESSION["uyeID"]) == 1) {
        //HAVA DURUMU OLAYLARI
    
        echo '
        <div class="container-fluid p-5">
            <div class="mb-5 text-center">
                <h5 class="text-primary text-uppercase">Bölgene Göre</h5>
                <h1 class="display-3 text-uppercase mb-0">HAVA DURUMU</h1>
                <div id="element"></div>
              </div>
            </div>
        </div>
        ';


        //HAVA DURUMU OLAYLARI
        // echo $_SESSION["uyeSehir"];
        //...
        // meet atıcam sana bir saniye
        // https://meet.google.com/avj-jsjf-nrg gelir misin buraya
    

    } else {
        echo '
        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 bg-hero mb-5">
            <div class="container py-5">
                <div class="row justify-content-start">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="display-1 text-white mb-md-4">Hava durumunu görebilmek için giriş yapmalısınız...</h1>
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
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <!-- bosluk -->
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Hızlı Linkler</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="index.php"><i
                                        class="bi bi-arrow-right text-white me-2"></i>Anasayfa</a>
                                <a class="text-white mb-2" href="about.php"><i
                                        class="bi bi-arrow-right text-white me-2"></i>Hakkımızda</a>
                                <a class="text-white" href="contact.php"><i
                                        class="bi bi-arrow-right text-white me-2"></i>İletişim</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-n5">
                    <div
                        class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
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
            <p class="mb-0">&copy; <a class="text-secondary fw-bold" href="#">Güvenli Tarım</a> Tüm hakları Saklıdır. <a
                    class="text-secondary fw-bold" href="#">Batuhan Berk Karadere</a> Tarafından dizayn edilmiştir. </p>
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

    <!-- Vue Import -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>


    <!-- Axios Import -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


    <script>
        const weatherApi =
            'https://api.open-meteo.com/v1/forecast?';

        const Weather = {
            template: `
            <div class="counter">
                <?php
                $userLocation = $_SESSION["uyeSehir"];
                ?>
                <hr/>
                    <br/>
                    <ul class='widget' v-for="item in oneWeekWeather" style='list-style:none; margin:40px;'>
                        <li style='margin-right: 31px;     
                            font-weight: 300;
                            position: absolute;
                            bottom: 36px;
                            color: #b8b8b8;'> 
                            <div>
                                <div class='degree'>{{ item.temp }}°C</div>
                                <div class='country'>{{ userCity }} </div>
                            </div>
                        </li>
                        <li>
                            {{ item.day }}
                        </li>
                        <li>

                        <div v-if="item.durums === 0">
                        <p style="color:#cbcbcb; height:0px;">Güneşli</p>
                        <img src="https://openweathermap.org/img/wn/01d@2x.png"> 
                        </div>

                        <div v-else-if="item.durums === 1 || item.durums ===  2 || item.durums ===  3">
                        <div>
                        <p style="color:#cbcbcb; height:0px;"> Parçalı Bulutlu</p>
                        </div>
                        <img src="https://openweathermap.org/img/wn/02d@2x.png"> 
                        </div>

                        <div v-else-if="item.durums === 45 || item.durums ===  48">
                        <p style="color:#cbcbcb; height:0px;"> Sisli</p>
                        <img src="https://openweathermap.org/img/wn/50d@2x.png"> 
                        </div>

                        <div v-else-if="item.durums === 51 || item.durums ===  53 || item.durums ===  55 || item.durums ===  56 || item.durums ===  57">
                        <p style="color:#cbcbcb; height:0px;"> Yağmurlu</p>
                        <img src="https://openweathermap.org/img/wn/09d@2x.png"> 
                        </div>

                        <div v-else-if="item.durums === 61 || item.durums ===  63 || item.durums ===  65 || item.durums ===  66 || item.durums ===  67">
                        <p style="color:#cbcbcb; height:0px;"> Hafif Yağmurlu</p>
                        <img src="https://openweathermap.org/img/wn/10d@2x.png"> 
                        </div>

                        <div v-else-if="item.durums === 71 || item.durums ===  73 || item.durums ===  75 || item.durums ===  77 || item.durums ===  85 || item.durums ===  86">
                        <p style="color:#cbcbcb; height:0px;"> Karlı</p>
                        <img src="https://openweathermap.org/img/wn/13d@2x.png"> 
                        </div>
                        
                        <div v-else-if="item.durums === 95">
                        <p style="color:#cbcbcb; height:0px;"> Fırtınalı </p>
                        <img src="https://openweathermap.org/img/wn/50d@2x.png"> 
                        </div>

                        <div v-else-if="item.durums === 96 || item.durums ===  99 ">
                        <p style="color:#cbcbcb; height:0px;"> Dolu</p>
                        <img src="https://openweathermap.org/img/wn/09d@2x.png"> 
                        </div>

                        <div v-else>
                        <p style="color:#cbcbcb; height:0px;"> Sağanak Yağış</p>
                        <img src="https://openweathermap.org/img/wn/11d@2x.png"> 
                        </div>
                        </li>
                    </ul>
                </div>
            </div> `
            ,
            data() {
                return {
                    todayWeather: '',
                    oneWeekWeather: [],
                    userCity: "<?php echo $userLocation ?>",
                }
            },
            methods: {
                getOneWeekLater(lat, long) {
                    const today = new Date().toISOString().slice(0, 10);
                    const output = [];
                    let td = new Date();
                    td.setDate(td.getDate() + 6)
                    const oneWeekLater = td.toISOString().slice(0, 10);

                    axios.get(`${weatherApi}latitude=${lat}&longitude=${long}&hourly=temperature_2m,weathercode&daily=weathercode&current_weather=true&daily=temperature_2m_max&timezone=Europe%2FLondon&start_date=${today}&end_date=${oneWeekLater}`).then((res) => {
                        this.todayWeather = res.data.current_weather.temperature;
                        const oneWeekTime = res.data.daily.time;
                        const oneWeekTemp = res.data.daily.temperature_2m_max;
                        const oneWeekWeatherForecast =  res.data.daily.weathercode;
                        console.log(res.data.daily.weathercode); 
                        this.oneWeekWeather = this.convertTempDay(oneWeekTemp, oneWeekTime,oneWeekWeatherForecast);
                    }).catch((err) => {
                        console.log('err', err)
                    })
                },
                convertTempDay(temperature, day, durum) {
                    const result = [];
                    for (let i = 0; i < day.length; i++) {
                        const weather = {
                            temp: temperature[i],
                            day: day[i],
                            durums: durum[i] ,
                        }
                        result.push(weather)
                    }
                    return result;
                },
                //bn
                getCityLatLong() {
                    axios.get(`https://geocoding-api.open-meteo.com/v1/search?name=${this.userCity}`).then((res) => {
                        const lat = res?.data?.results[0]?.latitude;
                        const long = res?.data?.results[0]?.longitude;
                        this.getOneWeekLater(lat, long);
                    }).catch((err) => {
                        console.log('err', err)
                    })
                }
            },
            created() {
                this.getCityLatLong();
            }
        };

        const App = {
            components: { Weather },
            template: `
             <div class="app">
                <Weather />
             </div> `
        };

        new Vue({
            el: '#element',
            template: '<App />',
            components: { App }
        });
    </script>


</body>

</html>
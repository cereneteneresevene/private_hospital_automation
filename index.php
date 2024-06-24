<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Peran Vakıf Hastanesine Hoşgeldiniz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/logoh.png" rel="icon">
  <link href="assets/img/logoh.png" rel="apple-touch-icon">

  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="align-items-center d-none d-md-flex">
            <i class="bi bi-clock"></i> Pazartesi - Cumartesi, 08:00 - 22:00
        </div>
        <div class="d-flex align-items-center">
            <i class="bi bi-phone"></i> Bizi Arayın 0850 460 6334
        </div>
    </div>
</div>


<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a class="logo me-auto"><img src="assets/img/logoh.png" alt=""></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto " href="#hero">Anasayfa</a></li>
                <li><a class="nav-link scrollto" href="#about">Hakkımızda</a></li>
                <li><a class="nav-link scrollto" href="#services">Servislerimiz</a></li>
                <li><a class="nav-link scrollto" href="#departments">Departmanlarımız</a></li>
                <li><a class="nav-link scrollto" href="#doctors">Doktorlarımız</a></li>
                <li><a class="nav-link scrollto" href="#contact">İletişim</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Randevu</span> Alın</a>

    </div>
</header>

    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                    <div class="container">
                        <h2>Peran Vakıf Hastanesine <span>Hoşgeldiniz</span></h2>
                        <p> Peran Vakıf Hastanesi olarak, hastalarımızın ve toplumun sağlıkla ilgili her ihtiyacına duyarlı bir şekilde yaklaşıyoruz ve her zaman en iyisini sunmak için çalışıyoruz. Sizleri sağlıklı bir yaşama adım atmaya davet ediyoruz. </p>
                        <a href="#about" class="btn-get-started scrollto"> Hakkımızda Daha Fazla Bilgi İçin </a>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="container">
                        <h2> Misyonumuz </h2>
                        <p> Misyonumuz, hastalarımızın ve toplumun sağlık ve yaşam kalitesini artırmak için en güncel tıbbi teknolojileri kullanarak, etik değerlere bağlı kalarak, profesyonel bir ekiple hizmet sunmaktır. Hastalarımızın sağlık ihtiyaçlarını karşılamak ve onlara en iyi tedavi ve bakımı sağlamak için sürekli çaba gösteriyoruz. </p>
                        <a href="#about" class="btn-get-started scrollto"> Hakkımızda Daha Fazla Bilgi İçin </a>
                    </div>
                </div>

                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="container">
                        <h2> Vizyonumuz </h2>
                        <p> Vizyonumuz, bölgesel ve ulusal düzeyde tanınan, tercih edilen ve güvenilir bir sağlık kurumu olmaktır. Sağlık sektöründe liderlik yaparak, kaliteli hizmet anlayışımızı sürdürülebilir bir şekilde geliştirerek, hastalarımızın memnuniyetini ve sağlık sonuçlarını en üst düzeye çıkarmayı hedefliyoruz. </p>
                        <a href="#about" class="btn-get-started scrollto"> Hakkımızda Daha Fazla Bilgi İçin </a>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section>

    <main id="main">
      <section id="featured-services" class="featured-services">
          <div class="container" data-aos="fade-up">

              <div class="row">
                  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                      <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                          <div class="icon"><i class="fas fa-heartbeat"></i></div>
                          <h4 class="title"> Kardiyoloji ve Kalp Sağlığı Merkezi </h4>
                      </div>
                  </div>

                  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                      <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                          <div class="icon"><i class="fas fa-pills"></i></div>
                          <h4 class="title"> İlaç Danışmanlığı ve Hizmeti </h4>
                      </div>
                  </div>

                  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                      <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                          <div class="icon"><i class="fas fa-thermometer"></i></div>
                          <h4 class="title"> Ateş Ölçümü ve Sağlık Kontrolü </h4>
                      </div>
                  </div>

                  <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                      <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                          <div class="icon"><i class="fas fa-dna"></i></div>
                          <h4 class="title"> Genetik Danışmanlık ve DNA Testleri </h4>
                      </div>
                  </div>

              </div>

          </div>
      </section>

    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>Yardıma ihtiyacınız mı var?</h3>
                <p> Acil bir durumda mısınız veya sağlıkla ilgili bir sorun mu yaşıyorsunuz? Size hızlı ve etkili bir şekilde yardımcı olabilmemiz için buradayız. Acil durumlarınızda veya sağlık sorunlarınızda profesyonel bir şekilde yönlendirilmek ve tedavi almak için lütfen bize ulaşın. Sağlık ekibimiz size en iyi hizmeti sunmak için hazır bekliyor.</p>
                <a class="cta-btn scrollto" href="#appointment">Randevu Almak İçin</a>
            </div>

        </div>
    </section>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Hakkımızda</h2>
                <p>Peran Vakıf Hastanesi, sağlık sektöründeki köklü geçmişiyle, insan odaklı hizmet anlayışını benimsemiş bir kurumdur. Kuruluşumuz 1980 yılına dayanmaktadır ve o günden bu yana sağlık alanındaki teknolojik gelişmeleri yakından takip ederek, topluma kaliteli ve yenilikçi sağlık hizmetleri sunmayı ilke edinmiştir.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/img/peranhastane.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Peran Vakıf Hastanesi, toplumun sağlık bilincini artırmayı, en güncel teknolojileri kullanarak kaliteli sağlık hizmetleri sunmayı ve etik değerlere bağlı kalarak hasta memnuniyetini sağlamayı amaç edinmiştir.</h3>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> Toplumun sağlık bilincini artırmak ve sağlıklı yaşam alışkanlıklarını teşvik etmek. </li>
                        <li><i class="bi bi-check-circle"></i> Güncel tıbbi teknolojileri kullanarak hastalara etkin ve kaliteli sağlık hizmetleri sunmak. </li>
                        <li><i class="bi bi-check-circle"></i> Hasta memnuniyetini en üst düzeye çıkarmak ve hastaların tedavi sürecinde güvenliği sağlamak. </li>
                        <li><i class="bi bi-check-circle"></i> Etik değerlere bağlı kalarak hasta haklarına saygı göstermek ve dürüst iletişim ilkelerini benimsemek. </li>
                        <li><i class="bi bi-check-circle"></i> Sağlık alanında araştırma ve geliştirme faaliyetlerini destekleyerek bilimsel ilerlemeye katkı sağlamak. </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fas fa-user-md"></i>
                        <span data-purecounter-start="0" data-purecounter-end="55" data-purecounter-duration="1" class="purecounter"></span>

                        <p><strong>Doktorlarımız</strong> </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="far fa-hospital"></i>
                        <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Departmanlarımız</strong> </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fas fa-flask"></i>
                        <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Araştırma Laboratuvarlarımız</strong> </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fas fa-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Ödüllerimiz</strong> </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                    <div class="icon-box mt-5 mt-lg-0">
                        <i class="bx bx-receipt"></i>
                        <h4> Fatura ve Raporlama </h4>
                        <p> Araştırma laboratuvarlarındaki veri toplama ve analiz süreçlerini temsil eder. </p>
                    </div>
                    <div class="icon-box mt-5">
                        <i class="bx bx-cube-alt"></i>
                        <h4> Materyal Analizi ve Modelleme </h4>
                        <p> Laboratuvar çalışmaları sırasında yapılan materyal analizleri ve modelleme işlemlerini ifade eder. </p>
                    </div>
                    <div class="icon-box mt-5">
                        <i class="bx bx-images"></i>
                        <h4> Görüntüleme ve Analiz </h4>
                        <p> Laboratuvar görüntüleme teknikleriyle yapılan analiz ve değerlendirmeleri temsil eder. </p>
                    </div>
                    <div class="icon-box mt-5">
                        <i class="bx bx-shield"></i>
                        <h4> Güvenlik ve Koruma </h4>
                        <p> Araştırma laboratuvarlarında uygulanan güvenlik önlemlerini ve koruma protokollerini ifade eder. </p>
                    </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/features.jpg");' data-aos="zoom-in"></div>
            </div>

        </div>
    </section>

    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Servislerimiz</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                    <h4 class="title"> Kardiyoloji ve Kalp Sağlığı Merkezi </h4>
                    <p class="description"> Hizmetimiz, kalp ve damar sağlığıyla ilgili hastalıkların teşhisi, tedavisi ve takibi konusunda uzmanlaşmış bir birimdir. Kalp sağlığı merkezimizde hastaların kardiyovasküler sağlık ihtiyaçlarına uygun hizmetler sunulur ve kalp sağlığının korunması için çalışılır. </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-pills"></i></div>
                    <h4 class="title">İlaç Danışmanlığı ve Tedavi Hizmetleri </h4>
                    <p class="description"> Hizmetimiz, hastaların ilaçlarını doğru şekilde kullanmalarına ve tedavi süreçlerini etkin bir şekilde yönetmelerine yardımcı olur. Uzmanlarımız, hastaların ilaçlarıyla ilgili sorularına yanıt verir ve ilaç kullanımı konusunda rehberlik sağlar. </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-hospital-user"></i></div>
                    <h4 class="title"> Hasta Destek Hizmetleri </h4>
                    <p class="description"> Hizmetimiz, hastaların sağlık sorunlarıyla ilgili olarak randevu planlama, rehberlik ve danışmanlık hizmetleri sunar. Hasta destek birimimiz, hastaların sağlık süreçlerini yönlendirmek ve onlara yardımcı olmak için buradadır. </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-dna"></i></div>
                    <h4 class="title"> Genetik Danışmanlık ve DNA Testleri </h4>
                    <p class="description"> Hastaların genetik özelliklerini analiz ederek genetik hastalıkların teşhisi ve risklerin değerlendirilmesine yardımcı olur. Genetik danışmanlık ile bireylerin sağlık durumlarına uygun tedavi ve önleyici önlemler alınabilir. </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-wheelchair"></i></div>
                    <h4 class="title"> Engelli Hizmeti </h4>
                    <p class="description"> Engelli hizmetlerimiz, engelli bireylerin sağlık hizmetlerine kolayca erişimini sağlar ve özel ihtiyaçlarına uygun tedavi ve bakım hizmetleri sunar. </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-notes-medical"></i></div>
                    <h4 class="title"> Sağlık Bilgi Sistemi </h4>
                    <p class="description"> Sağlık hizmetimiz, hastaların tıbbi kayıtlarını güvenli bir şekilde saklayarak ve sağlık bilgi sistemleriyle entegre olarak tedavi süreçlerini yönetmelerine yardımcı olur. </p>
                </div>
            </div>

        </div>
    </section>
        <section id="appointment" class="appointment section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Randevu Alın</h2>
                    <p>Sağlık ve güven arayışında olan herkes için kolaylık sağlıyoruz! Randevu almak artık daha hızlı ve pratik. Sadece birkaç adımda uzman doktorlarımızla tanışabilir ve sağlık ihtiyaçlarınızı karşılamak için adım atabilirsiniz. Çevrimiçi randevu sistemimiz veya telefonla randevu alma seçeneklerimizle size uygun olan zaman dilimini seçin ve uzmanlıkla hizmet veren ekibimizle buluşmak için adım atın. Sağlıkta güvenin ve hızın adresi olan hastanemiz, size en iyi hizmeti sunmak için hazır!</p>
                </div>

                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hospital";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Bağlantı hatası: " . $conn->connect_error);
                }

                $sql_departments = "SELECT * FROM departments";
                $result_departments = $conn->query($sql_departments);


                ?>

                <?php
                if (isset($_SESSION['notification'])) {
                    echo '<div class="alert alert-' . htmlspecialchars($_SESSION['notification_type']) . ' mt-3">' . htmlspecialchars($_SESSION['notification']) . '</div>';
                    unset($_SESSION['notification']);
                    unset($_SESSION['notification_type']);
                }
                ?>

                <form action="home.php" method="post">
                    <div class="form-group">
                        <label for="name">Adınız:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Adınız Soyadınız" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-posta Adresiniz:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-posta Adresiniz" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Telefon Numaranız:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefon Numaranız" required>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <label for="date">Randevu Tarihi:</label> <input type="datetime-local" name="date" class="form-control" id="date" required>
                        </div>

                        <script>
                            var dateInput = document.getElementById('date');
                            var today = new Date();
                            var minDate = today.toISOString().slice(0,16);
                            dateInput.min = minDate;
                        </script>


                        <div class="col-md-4 form-group mt-3">
                            <select name="department" id="department" class="form-select" required>
                                <option value="">Bölüm Seçiniz</option>
                                <?php
                                if ($result_departments->num_rows > 0) {
                                    while ($row_department = $result_departments->fetch_assoc()) {
                                        echo '<option value="' . $row_department["id"] . '">' . $row_department["department_name"] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-md-4 form-group mt-3">
                            <select name="doctor" id="doctor" class="form-select" required>
                                <option value="">Doktor Seçiniz</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Mesajınız:</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Randevu Al</button>
                </form>
                <?php
                if (isset($_SESSION['status'])) {
                    $status = $_SESSION['status'];
                    $message = $_SESSION['message'];
                    echo "<div class='alert alert-$status'>$message</div>";
                    unset($_SESSION['status']);
                    unset($_SESSION['message']);
                }
                ?>

                <?php
                $conn->close();
                ?>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    include('home.php');
                    showNotification();
                }
                ?>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#department').change(function() {
                            var department_id = $(this).val();
                            if(department_id) {
                                $.ajax({
                                    type: 'POST',
                                    url: 'fetch_doctors.php',
                                    data: 'department_id=' + department_id,
                                    success: function(html) {
                                        $('#doctor').html(html);
                                    }
                                });
                            } else {
                                $('#doctor').html('<option value="">Önce bölüm seçin</option>');
                            }
                        });
                    });
                </script>
            </div>

        </section>

    <section id="departments" class="departments">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Departmanlarımız</h2>
                <p>
                    Sağlık hizmetlerimizin geniş yelpazesini keşfedin! Departmanlarımız, uzmanlık alanlarında lider doktorlarımız ve modern tıbbi teknolojiyle donatılmış birimlerimizle sağlık ihtiyaçlarınızı karşılamak için buradayız. Cerrahi, Dahiliye, Pediatri, Kadın Hastalıkları ve Doğum gibi çeşitli departmanlarımızda sunduğumuz hizmetlerle size özel çözümler sunuyoruz. Her departmanımızın uzman doktorları, tedavi yöntemleri ve modern ekipmanlarımızla en etkili ve güvenilir sağlık hizmetini sunmak için buradayız. Sağlıkta uzman ellerle buluşmak için bizimle iletişime geçin ve randevunuzu hemen alın!</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                <h4>Acil Servis</h4>
                                <p>Acil tıbbi müdahalelerin yapıldığı, acil durumlar için hazır olan bir bölüm.</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                <h4>Cerrahi Bölümü</h4>
                                <p>Genel cerrahi, ortopedi, kardiyovasküler cerrahi gibi farklı cerrahi alanlarda hizmet veren birimler.</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                <h4>Dahiliye (İç Hastalıkları): </h4>
                                <p>Genel sağlık sorunları, enfeksiyonlar, metabolik bozukluklar gibi iç hastalıklarıyla ilgilenen bölüm.</p>
                            </a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                <h4>Kadın Doğum ve Çocuk Hastalıkları:</h4>
                                <p>Gebelik takibi, doğum, jinekolojik hizmetler ve çocuk sağlığıyla ilgili birimler.</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <h3>Acil Servis</h3>
                            <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                            <p>Peran Vakıf Hastanesi acil servisi, beklenmedik sağlık sorunları ve acil durumlar için 7/24 hizmet sunar. Acil servisimizde deneyimli doktor ve hemşireler, hızlı ve etkili müdahalelerle hastaların ihtiyaçlarını karşılar. Modern tıbbi ekipmanlarla donatılmış olan acil servisimiz, hastaların acil sağlık sorunlarının değerlendirilmesi, tedavi edilmesi ve gerektiğinde yönlendirilmesi için önemli bir merkezdir.</p>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <h3>Cerrahi Bölümü</h3>
                            <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                            <p>Cerrahi bölümümüzde uzman cerrahlarımız, modern ameliyathanelerimizde çeşitli cerrahi müdahaleleri gerçekleştirir. Ameliyat öncesi ve sonrası dönemde hasta takibi ve destek hizmetleri de cerrahi bölümümüzün önemli bir parçasıdır. Hastalarımıza kaliteli ve güvenilir cerrahi tedavi imkanı sunarak sağlık sorunlarıyla etkin bir şekilde mücadele etmeyi hedefleriz.</p>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <h3>Dahiliye (İç Hastalıkları): </h3>
                            <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                            <p>Dahiliye bölümümüzde genel iç hastalıklarıyla ilgili teşhis, tedavi ve takip hizmetleri sunulur. Uzman dahiliye doktorlarımız, hastaların sağlık durumlarını değerlendirir ve çeşitli iç hastalıklarının tanı ve tedavisi konusunda uzmanlaşmıştır. Dahiliye bölümümüzde hastalarımıza sağlık kontrolü, kronik hastalık yönetimi, tedavi planlaması gibi hizmetler sunulur.</p>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <h3>Kadın Doğum ve Çocuk Hastalıkları:</h3>
                            <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                            <p>Kadın doğum ve çocuk hastalıkları bölümümüzde kadınların gebelik süreci takibi, doğum hizmetleri, doğum sonrası bakım ve çocuk sağlığıyla ilgili geniş kapsamlı hizmetler sunulur. Kadın doğum uzmanlarımız ve pediatri alanında uzmanlaşmış doktorlarımız, anne ve çocuk sağlığını korumaya ve geliştirmeye odaklanır. Bu bölümümüzde gebelik takibi, doğum, aşılar, çocuk hastalıkları tedavisi gibi alanlarda özel bakım ve danışmanlık hizmetleri sunulur.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="doctors" class="doctors section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Doktorlarımız</h2>
                <p>"Doktorlarımız" bölümünde, hastanemizin deneyimli ve uzman doktorlarıyla tanışabilirsiniz. Her bir doktorun adı,hangi departmanda çalıştığına, instagram adresleri gibi bilgilere bu bölümde yer alır.Size en uygun doktoru seçmek ve sağlık ihtiyaçlarınızı karşılamak için doktorlarımıza göz atabilirsiniz.</p>
            </div>

            <div class="row">
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "hospital";

          $conn = new mysqli($servername, $username, $password, $database);

          if ($conn->connect_error) {
              die("Bağlantı hatası: " . $conn->connect_error);
          }

          $sql = "SELECT doctors.*, departments.department_name AS department_name 
                    FROM doctors 
                    LEFT JOIN departments ON doctors.department_id = departments.id";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  echo '<div class="col-lg-3 col-md-6 d-flex align-items-stretch">';
                  echo '<div class="member" data-aos="fade-up" data-aos-delay="100">';
                  echo '<div class="member-img">';
                  echo '<img src="assets/img/doctors/' . $row["image"] . '" class="img-fluid" alt="' . $row["name"] . '">';
                  echo '</div>';
                  echo '<div class="member-info">';
                  echo '<h4>' . $row["name"] . $row["surname"] .'</h4>';
                  echo '<span>' . $row["department_name"] . '</span>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
              }
          } else {
              echo "Kayıt bulunamadı";
          }
          $conn->close();
          ?>
          </div>
      </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Galerimiz</h2>
                <p>Bizimle olan deneyiminizi görsel bir yolculuğa çevirin. Özel hastanemizin galeri bölümünde, modern tıp teknolojisinin ve şefkat dolu hizmetlerimizin birleştiği noktaları keşfedin. Hastalarımızın sağlık yolculuğunda yanlarında olduğumuzu gösteren anları ve tesisimizin iç ve dış mekanlarını keşfetmek için galerimizi gezin.</p>
            </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Bizimle İletişime Geç</h2>
            </div>

        </div>

        <div>
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32985.47114581143!2d28.60023893013082!3d41.01193630828299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b55f0a4ad9473b%3A0xbf7a6e5db0269867!2sMedicana%20International%20%C4%B0stanbul%20Hastanesi!5e0!3m2!1str!2str!4v1715620877842!5m2!1str!2str" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container">

            <div class="row mt-5">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Adresimiz</h3>
                                <p>Büyükşehir, Beylikdüzü Cad. No:3 Beylikdüzü 34520, İstanbul</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Emailimiz</h3>
                                <p>peranvakifhastanesi@info.com<br>peranvakifhastanesi@contact.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Bizi Arayın</h3>
                                <p>0850 460 6334</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
</main>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Peran Vakıf Hastanesi</h3>
                            <p>
                                Büyükşehir, Beylikdüzü Cad. No:3 <br>
                                Beylikdüzü 34520, İstanbul<br><br>
                                <strong>Phone:</strong> 0850 460 6334 <br>
                                <strong>Email:</strong> peranvakifhastanesi@info.com<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Peran Vakıf Hastanesi</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by cereneteneresevene
            </div>
        </div>
    </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>
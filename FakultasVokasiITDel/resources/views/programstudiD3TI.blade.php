<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>VOKASI Institut Teknologi Del</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/asset about/assets/images/Institut Teknologi Del.png') }}" rel="icon">

    <!-- =========== 1 ============================================================================================================================================================ -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">


    <!-- Vendor CSS File -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- ============== 2 ========================================================================================================================================================= -->

    <!--/google-fonts-->
    <link href="//fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <!--//google-fonts-->
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/asset about/assets/css/style-starter.css') }}">
    <link href="{{ asset('assets/asset about/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/asset about/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);
    </script>


    <!-- ============== 3 ========================================================================================================================================================= -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/assets - prestasi/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/assets - prestasi/css/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/assets - prestasi/css/style.css') }}" rel="stylesheet">




    <style>
        /* Gaya CSS Anda */
        .header-title {
            margin-bottom: 5px;
            margin-top: 20px;
        }

        .entry-title a {
            color: #000;
            text-decoration: none;
        }

        .entry-title a:hover {
            color: #00f;
        }

        .kurikulum-table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 100%;
        }

        .kurikulum-table th,
        .kurikulum-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .kurikulum-table th {
            background-color: #f2f2f2;
        }
    </style>




</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a href="info@example.com">info@del.ac.id</a>
                <i class="bi bi-phone"></i> +62 632 331234
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="https://twitter.com/institut_del" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/Institut.Teknologi.Del/?ref=embed_page" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/it.del/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/school/institut-teknologi-del/" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>
    <!-- ======= Akhir Top Bar ======= -->

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!-- Tambahkan logo disini -->
            <h1 class="logo me-auto">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/Institut Teknologi Del.png') }}">
                    Fakultas Vokasi
                </a>
            </h1>

            <!-- navbar -->
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="/tentang">Tentang</a></li>
                    <li class="dropdown">
                        <a class="nav-link scrollto active" href="#">Program Studi <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/programstudiD4TRPL">D-IV Teknologi Rekayasa Perangkat Lunak</a></li>
                            <li><a href="/programstudiD3TK">D-III Teknologi Komputer</a></li>
                            <li><a href="/programstudiD3TI">D-III Teknologi Informasi</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="/prestasi">Prestasi</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- Akhir navbar -->

        </div>
    </header>
    <!-- ======= Akhir Header ======= -->

    <main id="main">

        <!-- ======= Breadcrumbs  ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="breadcrumbs-title">Program Studi</h2>
                    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/">
                                <span itemprop="name">Beranda</span>
                            </a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/programstudiD3TI">
                                <span itemprop="name" style="color: black">Program Studi</span>
                            </a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <span itemprop="name" style="color: #1977cc">D-III Teknologi Informasi</span>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Akhir Breadcrumbs Section -->



        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">
                            <div class="header-title mb-md-5 mt-4">
                                <span class="sub-title">Tentang, Visi-Misi, Profil Lulusan, Tujuan, Struktur
                                    Kurikulum</span>
                                <h3 class="hny-title text-left">Diploma Tiga Program Studi <b>Teknologi Informasi</b>
                                </h3>
                            </div>
                            <div class="entry-img">
                                <img src="{{ asset('assets/img/trpl/trpl1.png') }}" alt=""
                                    class="img-fluid">
                            </div>

                            <div class="header-title mb-md-5 mt-4">
                                <h2 class="entry-title" style="font-size: 230%">
                                    <a class="sub-title" style="font-size:89%">Tentang Diploma III Teknologi
                                        Informasi</a>
                                </h2>
                            </div>

                            <div class="entry-content">
                                <p>
                                    Program Studi Teknologi Informasi Diploma Tiga adalah salah satu dari 3 (tiga)
                                    program studi yang dikelola oleh Institut Teknologi Del (IT Del) yang berdiri pada
                                    tahun 2001 sesuai SK No. 222/D/O/2001 tertanggal 28 September 2001 dengan nama
                                    Program Studi Teknologi Informasi. Program studi ini berlokasi di Jl.
                                    Sisingamangaraja, Desa Sitoluama, Kecamatan Laguboti, Toba Samosir, Propinsi
                                    Sumatera Utara berjarak kurang lebih 200 km (lima jam perjalanan mobil) dari Medan
                                    sebagai Ibukota Propinsi Sumatera Utara. Desa Sitoluama adalah suatu desa kecil yang
                                    berada di tepi Danau Toba dan dilalui oleh jalan raya lintas propinsi dan berjarak
                                    sekitar 10 KM dari Balige sebagai ibukota Kabupaten Tobasa.
                                </p>


                                <p>
                                    Program Studi Teknologi Informasi Diploma Tiga mempunyai sasaran untuk
                                    menyelenggarakan proses pembelajaran yang dapat menumbuhkan-kembangkan daya nalar,
                                    daya cipta, daya kreasi dan keterampilan yang tinggi, yang dapat dikomunikasikan dan
                                    diaplikasikan pada bidang kehidupan. Prodi ini memperoleh perpanjangan ijin
                                    penyelenggaraan Program Studi Teknologi Informasi Diploma Tiga (10802) sesuai dengan
                                    SK Direktur Jenderal Pendidikan Tinggi Nomor 3649/D/T/2004 tertanggal 9 September
                                    2004. Kemudian pada tanggal 11 Oktober 2007 memperoleh SK perpanjangan ulang No.
                                    3169/D/T/2007 dengan sebutan nama program studi adalah Program Studi Teknologi
                                    Informasi Diploma Tiga. Kemudian pada tanggal 3 Mei 2010 memperoleh SK perpanjangan
                                    ulang No. 1854/D/T/K-I/2010 dengan sebutan nama program studi kembali menjadi
                                    Program Studi Teknologi Informasi Diploma Tiga .
                                </p>
                                <blockquote>
                                    <p>
                                        Kompetensi lulusan Program Studi Teknologi Informasi Diploma Tiga yaitu:
                                        Mampu membangun, mengembangkan dan memelihara perangkat lunak dengan mengikuti
                                        dan menerapkan metode rekayasa perangkat lunak yang baik dan benar, yang
                                        mencakup perangkat lunak pada platform desktop, web, dan mobile.
                                        Selain mampu dalam bidangnya, juga mempunyai landasan yang cukup terhadap semua
                                        bidang dasar informatika: jaringan komputer, sistem informasi, dan teknologi
                                        informasi.
                                        Mampu untuk bekerja dalam tim.
                                        Mempunyai softskill yang sesuai yaitu disiplin dan sikap kerja yang profesional
                                    </p>
                                </blockquote>
                                <p>
                                    Etika lulusan Program Studi Teknologi Informasi Diploma Tiga yang diharapkan adalah
                                    sebagai berikut:
                                    Menjadi pekerja profesional di bidang Teknik Informatika yang beriman dan bertaqwa
                                    kepada Tuhan Yang Maha Esa serta menghormati orang lain untuk menjalankan ibadah
                                    agamanya masing-masing.
                                    Memiliki etos kerja yang tinggi, disiplin, jujur, kreatif, mandiri dan
                                    bertanggungjawab.
                                    Dapat berkolaborasi dan bersinergi dengan orang lain dalam melaksanakan pekerjaan
                                    secara bersama (tim work).
                                    Menjunjung tinggi nama almamater dan profesi serta aktif mengembangkan diri sesuai
                                    dengan tuntutan profesinya. </p>

                                <div class="header-title mb-md-5 mt-4">
                                    <h2 class="entry-title" style="font-size: 230%">
                                        <a class="sub-title" style="font-size:89%" href="">Visi dan Misi
                                            Program Studi</a>
                                    </h2>

                                    <h3>Visi</h3>
                                    <p>
                                        Menjadi program studi unggulan pada program pendidikan dan penelitian terapan di
                                        bidang pengembangan teknologi informasi yang bertaraf nasional dan internasional
                                        pada tahun 2024.
                                    </p>
                                    <!-- Sertakan library Font Awesome -->
                                    <link rel="stylesheet"
                                        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

                                    <h3>Misi</h3>
                                    <ul class="mission-list">
                                        <li><i class="fas fa-check-circle"></i> Menyelenggarakan pendidikan vokasi yang
                                            unggul untuk menghasilkan sumber daya manusia yang profesional di bidang
                                            teknologi informasi dan komunikasi;</li>
                                        <li><i class="fas fa-check-circle"></i> Membuat terobosan dalam dunia
                                            pendidikan dengan menciptakan lingkungan pendidikan yang sehat, kondusif
                                            dengan dukungan tenaga pengajar yang ahli dan profesional.</li>
                                        <li><i class="fas fa-check-circle"></i> Meningkatkan program penelitian terapan
                                            yang inovatif dan bertaraf nasional maupun internasional di bidang teknologi
                                            informasi dan komunikasi;</li>
                                        <li><i class="fas fa-check-circle"></i> Meningkatkan program pengabdian
                                            masyarakat melalui kerjasama dengan berbagai institusi pemerintahan dan
                                            industri di tingkat regional maupun nasional.</li>
                                    </ul>
                                </div>


                                <!-- Sertakan library Font Awesome -->
                                <link rel="stylesheet"
                                    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

                                <div class="header-title mb-md-5 mt-4">
                                    <h2 class="entry-title" style="font-size: 230%">
                                        <a class="sub-title" style="font-size:89%" href="">Tujuan Pendidikan
                                            Program Studi</a>
                                    </h2>
                                    <p>Tujuan Pendidikan Program Studi Teknologi Informasi Diploma Tiga : </p>
                                    <ul class="tujuan-list">
                                        <li><i class="fas fa-chevron-right fa-sm"></i> Meningkatkan peringkat
                                            akreditasi
                                            program studi menjadi unggul.</li>
                                        <li><i class="fas fa-chevron-right fa-sm"></i> Mewujudkan tata kelola program
                                            studi
                                            yang berkualitas.</li>
                                        <li><i class="fas fa-chevron-right fa-sm"></i> Menghasilkan alumni yang
                                            memiliki
                                            pengetahuan dan keterampilan dalam bidang informatika yang gayut terhadap
                                            kebutuhan industri, berjiwa kepemimpinan, serta berkarakter mar-Tuhan,
                                            marroha,
                                            dan marbisuk.</li>
                                        <li><i class="fas fa-chevron-right fa-sm"></i> Meningkatkan kualitas sumber
                                            daya
                                            manusia serta sarana dan prasarana akademik.</li>
                                        <li><i class="fas fa-chevron-right fa-sm"></i> Menyediakan organisasi serta
                                            sarana
                                            dan prasarana penelitian yang berkualitas demi terwujudnya rencana dan peta
                                            jalan penelitian yang bertaraf nasional dalam bidang informatika.</li>
                                        <li><i class="fas fa-chevron-right fa-sm"></i> Menghasilkan karya penelitian
                                            yang
                                            berkualitas dan berdampak dalam bidang-bidang kajian yang menjadi unggulan
                                            program studi.</li>
                                        <li><i class="fas fa-chevron-right fa-sm"></i> Menghasilkan program–program
                                            pengabdian masyarakat untuk penerapan teknologi dalam bidang informatika
                                            dalam
                                            rangka berkontribusi terhadap penyelesaian masalah–masalah nyata yang
                                            dihadapi
                                            masyarakat.</li>
                                        <li><i class="fas fa-chevron-right fa-sm"></i> Meningkatkan kuantitas dan
                                            kualitas
                                            kerjasama dengan institusi pemerintahan maupun industri untuk pengembangan
                                            maupun penerapan ilmu pengetahuan dan teknologi dalam bidang informatika.
                                        </li>
                                    </ul>
                                </div>


                                <div class="header-title mb-md-5 mt-4">
                                    <h2 class="entry-title" style="font-size: 230%">
                                        <a class="sub-title" style="font-size:89%" href="">Profil Lulusan</a>
                                    </h2>
                                    <ul>
                                        <li>
                                            <h3>Software Engineer</h3>
                                        </li>
                                        <li>
                                            <h3>Analyst Programmer</h3>
                                        </li>
                                        <li>
                                            <h3>Web Application Developer</h3>
                                        </li>
                                        <li>
                                            <h3>IT Support Personnel</h3>
                                        </li>
                                        <li>
                                            <h3>Mobile Application Developer</h3>
                                        </li>
                                    </ul>
                                </div>


                                <div class="header-title mb-md-5 mt-4">
                                    <h2 class="entry-title"><a href="" style="font-size: 150%;">Struktur
                                            Kurikulum</a></h2>
                                    <p>Program studi Sarjana Terapan TRPL menggunakan irisan Body Of Knowledge (BOK)
                                        dari bidang studi Computer Science (CS) dan Software Engineering (SE) dengan
                                        area pengetahuan yang didetilkan pada dokumen Software Engineering Body Of
                                        Knowledge (SWEBOK). Cakupan ilmu yang diajarkan pada program studi Sarjana
                                        Terapan TRPL untuk mempersiapkan mahasiswa untuk menghasilkan perangkat lunak
                                        secara khusus yang berbasis web dan mobile dengan kompleksitas baik yang untuk
                                        skala kecil maupun yang kompleks. Struktur Matakuliah ditampilkan pada tabel di
                                        bawah ini.</p>
                                </div>
                                <!-- Judul Semester -->
                                <!-- Semester I -->
                                <div>Semester I</div>
                                <table class="kurikulum-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th>Teori</th>
                                            <th>Praktikum</th>
                                            <th>Kredit Lain</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KU31101</td>
                                            <td>Bahasa Inggris I</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>KU31102</td>
                                            <td>Pembentukan Karakter Del</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>2</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>TI31101</td>
                                            <td>Inovasi Digital</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>1031101</td>
                                            <td>Dasar Pemrograman</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>1031102</td>
                                            <td>Matematika Diskrit</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>1031103</td>
                                            <td>Arsitektur dan Organisasi Komputer</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>1131104</td>
                                            <td>Pengembangan Situs Web I</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>1131105</td>
                                            <td>Rekayasa Perangkat Lunak</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Total</td>
                                            <td>20</td>
                                            <td>11</td>
                                            <td>9</td>
                                            <td>11</td>
                                            <td>19</td>
                                        </tr>
                                    </tbody>
                                </table>


                                <!-- Semester II -->
                                <div style="margin-top: 5%">Semester II</div>
                                <table class="kurikulum-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th>Kredit</th>
                                            <th>Jam Teori</th>
                                            <th>Jam Praktikum</th>
                                            <th>Total Jam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KU31201</td>
                                            <td>Bahasa Inggris II</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>1031201</td>
                                            <td>Algoritma dan Struktur Data</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1031202</td>
                                            <td>Sistem Operasi</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>1131203</td>
                                            <td>Perancangan Perangkat Lunak</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>1131204</td>
                                            <td>Pengembangan Situs Web II</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>1131205</td>
                                            <td>Pengenalan Basis Data</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>1131290</td>
                                            <td>Proyek Akhir Tahun I</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Total</td>
                                            <td>20</td>
                                            <td>8</td>
                                            <td>12</td>
                                            <td>8</td>
                                            <td>24</td>
                                        </tr>
                                    </tbody>
                                </table>


                                <!-- Semester III -->
                                <div style="margin-top: 5%">Semester III</div>
                                <table class="kurikulum-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th>Kredit</th>
                                            <th>Jam Teori</th>
                                            <th>Jam Praktikum</th>
                                            <th>Total Jam</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KU32101</td>
                                            <td>Bahasa Inggris III</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>MA32101</td>
                                            <td>Probabilistik dan Statistik</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1032101</td>
                                            <td>Jaringan Komputer</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>1132102</td>
                                            <td>Pemrograman Berorientasi Objek</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>1132103</td>
                                            <td>Pengembangan Aplikasi Mobile</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>1132104</td>
                                            <td>Perancangan Antarmuka Pengguna</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>1132205</td>
                                            <td>Sistem Basis Data</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Total</td>
                                            <td>20</td>
                                            <td>9</td>
                                            <td>11</td>
                                            <td>9</td>
                                            <td>22</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Semester IV -->
                                <div style="margin-top: 5%">Semester IV</div>
                                <table class="kurikulum-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th>Teori</th>
                                            <th>Praktikum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KU42201</td>
                                            <td>Bahasa Inggris IV</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>MA42201</td>
                                            <td>Probabilitas dan Statistik</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1142201</td>
                                            <td>Pemrograman Berorientasi Objek</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>1142202</td>
                                            <td>Pengembangan Aplikasi Terdistribusi</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>1142203</td>
                                            <td>Pengembangan Aplikasi Mobile</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>1142290</td>
                                            <td>Proyek Akhir Tahun II</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>3</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3">Total</td>
                                            <td>18</td>
                                            <td>7</td>
                                            <td>11</td>
                                        </tr>
                                    </tfoot>
                                </table>

                                <!-- Semester V -->
                                <div style="margin-top: 5%">Semester V</div>
                                <table class="kurikulum-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th>Teori</th>
                                            <th>Praktikum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KU43101</td>
                                            <td>Bahasa Inggris V</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>1143101</td>
                                            <td>Pengujian Perangkat Lunak</td>
                                            <td>3</td>
                                            <td>3</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1143102</td>
                                            <td>Algoritma Lanjut</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>1143103</td>
                                            <td>Kreativitas dan Inovasi</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>1143104</td>
                                            <td>Keamanan Perangkat Lunak</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>1143105</td>
                                            <td>Automata</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>1143106</td>
                                            <td>Metodologi Penelitian</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3">Total</td>
                                            <td>19</td>
                                            <td>10</td>
                                            <td>9</td>
                                        </tr>
                                    </tfoot>
                                </table>


                                <!-- Semester VI -->
                                <div style="margin-top: 5%">Semester VI</div>
                                <table class="kurikulum-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th>Teori</th>
                                            <th>Praktikum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>KU43201</td>
                                            <td>Bahasa Inggris VI</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>KU43202</td>
                                            <td>Agama dan Etika</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>KU43203</td>
                                            <td>Pancasila dan Kewarganegaraan</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>1143201</td>
                                            <td>Etika Profesi</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>1143202</td>
                                            <td>Design Thinking</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>1143203</td>
                                            <td>Mata Kuliah Pilihan 1</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>1143204</td>
                                            <td>Komputer dan Masyarakat</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>1143290</td>
                                            <td>Proyek Akhir Tahun III</td>
                                            <td>4</td>
                                            <td>1</td>
                                            <td>3</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3">Total</td>
                                            <td>19</td>
                                            <td>12</td>
                                            <td>7</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!-- Semester VII -->
                                <div style="margin-top: 5%">Semester VII</div>
                                <table class="kurikulum-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th>Teori</th>
                                            <th>Praktikum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>TI44101</td>
                                            <td>Keteknowiraan</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>1144101</td>
                                            <td>Arsitektur dan Perancangan Perangkat Lunak</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1144102</td>
                                            <td>Manajemen Proyek</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>1144103</td>
                                            <td>Kualitas Perangkat Lunak</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>1144104</td>
                                            <td>Reenginering Perangkat Lunak</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>1144105</td>
                                            <td>Mata Kuliah Pilihan 2</td>
                                            <td>3</td>
                                            <td>2</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>1144190</td>
                                            <td>Tugas Akhir I</td>
                                            <td>3</td>
                                            <td>1</td>
                                            <td>2</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3">Total</td>
                                            <td>19</td>
                                            <td>9</td>
                                            <td>10</td>
                                        </tr>
                                    </tfoot>
                                </table>

                                <!-- Semester VIII -->
                                <div style="margin-top: 5%">Semester VIII</div>
                                <table class="kurikulum-table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th>Teori</th>
                                            <th>Praktikum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1144201</td>
                                            <td>Studi Mandiri / Sertifikasi Profesional</td>
                                            <td>3</td>
                                            <td>0</td>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>1144290</td>
                                            <td>Tugas Akhir II</td>
                                            <td>4</td>
                                            <td>0</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>1144291</td>
                                            <td>Kerja Praktek Industri</td>
                                            <td>6</td>
                                            <td>0</td>
                                            <td>6</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3">Total</td>
                                            <td>13</td>
                                            <td>0</td>
                                            <td>13</td>
                                        </tr>
                                    </tfoot>
                                </table>


                            </div>

                        </article><!-- End blog entry -->




                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Pencarian</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Program Studi</h3>
                            <div class="sidebar-item categories">
                                <ul>
                                    <li><a href="/programstudiD4TRPL">D-IV Teknologi Rekayasa Perangkat Lunak </a></li>
                                    <li><a href="/programstudiD3TK">D-III Teknologi Komputer </a></li>
                                    <li><a href="/programstudiD3TI">D-III Teknologi Informasi</a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <h3 class="sidebar-title">Kilas Vokasi</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="{{ asset('assets/img/berita1.jpeg') }}" alt="">
                                    <h4><a href="https://www.del.ac.id/?p=15337">IT Del Peringkat 1 Nasional untuk
                                            Computing Track dan Innovation Track pada Huawei ICT Competition 2023</a>
                                    </h4>
                                    {{-- <time datetime="2020-01-01">February 06 2024</time> --}}
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('assets/img/berita2.jpeg') }}" alt="">
                                    <h4><a href="https://www.del.ac.id/?p=15386">Kegiatan Pemberangkatan dan Onboarding
                                            Mahasiswa MBKM Peserta PMM 4 dan MSIB 6 IT Delt</a></h4>
                                    {{-- <time datetime="2020-01-01">January 24 2024</time> --}}
                                </div>

                                <div class="post-item clearfix">
                                    <img src="{{ asset('assets/img/berita3.jpeg') }}" alt="">
                                    <h4><a href="https://www.del.ac.id/?p=15439">IT Del dan PT Privy Identitas Digital
                                            Jalin Kerjasama terkait Training and Oportunities Program (TOP)</a>
                                    </h4>
                                    {{-- <time datetime="2020-01-01">February 12 2024</time> --}}
                                </div>
                            </div><!-- End sidebar recent posts-->

                            <h3 class="sidebar-title"><i class="fas fa-link"></i> Link</h3>
                            <div class="sidebar-item tags">
                                <ul>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/e153b6e1b2b5eb074bc747f953615932">Pedoman
                                            Akademik 2021/2022</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/b7ba4f13314e641b92f3a08e6ffa6bea">Kalender
                                            Akademik T.A. 2023/2024</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/f4526f134dc70f9568d2ecbfe0471098">Kalender
                                            Kegiatan Kemahasiswaan 2022/2023</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/bb8a366791a6e01f81af015816a72caf">Pedoman
                                            PKM Institut Teknologi Del</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="http://puskom.del.ac.id/">Peraturan Penggunaan Fasilitas Laboratorium
                                            Komputasi</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/7ac27730a659c0a85d9c56bfa25b1e0e">Surat
                                            Edaran Penerima Beasiswa Prestasi dan Penghargaan 2021</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/7beab51e372ab8a676af1c3d9c10360a">Addendum
                                            SK Rektor Tentang Biaya Pendaftaran, Biaya Pendidikan Dan Biaya Wisuda TA
                                            2020/2021</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://cis.del.ac.id/dashboard/link/view">Referensi Perpustakaan:
                                            Jurnal / Paper / Book</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/561e23644092e75531d32b3ca59d6fc3">SOP
                                            Pemakaian Entrance Hall oleh Mahasiswa IT Del</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/f4cf524c658b13d1dd39a2ace59baa24">Surat
                                            Edaran WR 1 Manajemen Komplain Mahasiswa</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/1c93e1a9ea7542238cb2534d8cc1d91e">Surat
                                            Edaran WR1 tentang Pengelolaan Waktu dengan Baik dan Ijin Keluar Kampus</a>
                                    </li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/2a994858fe11012c42f62dfc8ef090eb">Pedoman
                                            Penetapan Sanksi Pelanggaran Mahasiswa</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://cis.del.ac.id/artk/artikel-post/view?q=B1EV3ReTYkvmNUFg-CD7X1Vr_BcgH-O4nYTUaH3J1Yo">Dokumen
                                            User Manual Aplikasi IT Del</a></li>
                                    <li><i class="fas fa-caret-right"></i> <a
                                            href="https://apipuro.del.ac.id/v1/file/1dfb80eb87b3122dd4607bec6f4437be">Panduan
                                            Sistem Kredit Kegiatan Mahasiswa (SKKM)</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->


                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->




        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <footer class="footer_area section_padding_130_0">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="single-footer-widget section_padding_0_130">
                            <img src="{{ asset('assets/img/footer/footer.png') }}" alt="Footer Logo"
                                class="footer-logo mb-3" style="max-width: 130px;">

                            <div class="copywrite-text mb-5">
                                <p class="mb-0"><i class="lni-heart mr-1"></i><a class="ml-1"
                                        href="#">Fakultas Vokasi</a>
                                </p>
                                <p class="mb-0"><i class="lni-heart mr-1"></i><a class="ml-1"
                                        href="#">Institut Teknologi
                                        Del</a></p>
                                <br>
                                <p class="mb-0" style="text-align: justify;"><i class="lni-heart mr-1"></i><a
                                        class="ml-1" href="#">Jl. Sisingamangaraja, Sitoluama Laguboti, Toba
                                        Samosir Sumatera Utara,
                                        Indonesia</a></p>

                            </div>


                        </div>
                    </div>



                    <div class="col-12 col-sm-6 col-lg">
                        <div class="single-footer-widget section_padding_0_130">

                            <h5 class="widget-title">Pranala Penting</h5>

                            <div class="footer_menu">
                                <ul>
                                    <li><a href="https://www.del.ac.id/?page_id=1006">Tentang Del</a></li>
                                    <li><a href="https://spmb.del.ac.id/">Pendaftaran Mahasiswa Baru</a></li>
                                    <li><a href="https://www.del.ac.id/?page_id=14564">Informasi Beasiswa</a></li>
                                    {{-- <li><a href="#">Unduhan</a></li> --}}
                                    <li><a href="https://www.del.ac.id/?page_id=7511">Karir</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 col-sm-6 col-lg">
                        <div class="single-footer-widget section_padding_0_130">

                            <h5 class="widget-title">Hubungi Kami</h5>

                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Kode Pos: 22381</a></li>
                                    <li><a href="#">Telp : +62 632 331234</a></li>
                                    <li><a href="#">Email : info@del.ac.id</a></li>
                                    <li><a href="#">Karir : karir@del.ac.id</a></li>
                                </ul>
                                <br>
                                <style>
                                    .footer_social_area .fa-instagram {
                                        color: purple;
                                    }
                                </style>

                                <div class="footer_social_area">
                                    <a href="https://www.facebook.com/profile.php?id=403538753086034&fref=ts"
                                        data-toggle="tooltip" data-placement="top" title
                                        data-original-title="Facebook"><i class="fa fa-facebook text-primary"></i></a>
                                    <a href="https://twitter.com/intent/follow?original_referer=https%3A%2F%2Fwww.del.ac.id%2F&ref_src=twsrc%5Etfw%7Ctwcamp%5Ebuttonembed%7Ctwterm%5Efollow%7Ctwgr%5Einstitut_del&region=follow_link&screen_name=institut_del"
                                        data-toggle="tooltip" data-placement="top" title
                                        data-original-title="Twitter"><i class="fa fa-twitter text-info"></i></a>
                                    <a href="https://www.youtube.com/@institutteknologidel1337"
                                        data-toggle="tooltip" data-placement="top" title
                                        data-original-title="YouTube"><i class="fa fa-youtube text-danger"></i></a>
                                    <a href="https://www.instagram.com/vokasi.itdel?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                        data-toggle="tooltip" data-placement="top" title
                                        data-original-title="Instagram"><i
                                            class="fa fa-instagram text-purple"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript"></script>
    </main><!-- End #main -->



    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/assets - prestasi/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/assets - prestasi/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets - prestasi/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/assets - prestasi/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/assets - prestasi/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/assets - prestasi/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/assets - prestasi/js/main.js') }}"></script>
</body>

</html>

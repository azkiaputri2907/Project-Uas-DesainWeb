<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>PROJECT UAS</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/themify-icons/css/themify-icons.css') }}">
    <!-- Bootstrap + JohnDoe main styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/johndoe.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            <div class="header-content">
    <h4 class="header-subtitle">Selamat Datang</h4>
    <h1 class="header-title">Sistem Informasi</h1>
    <h6 class="header-mono">Layanan Masyarakat Pada Kelurahan</h6>
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-primary btn-rounded"><i class="ti-out pr-2"></i>Log Out</button>
    </form>
</div>
        </div>
    </header>
    
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="{{ asset('assets/imgs/man.jpeg') }}" alt="" class="brand-img">
                    <li class="brand-txt">
                    <h5 class="brand-title font-weight-bold">Sistem informasi layanan pengaduan masyarakat</h5>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div id="about" class="row about-section flex-column">
<div class="container-fluid">
        <!-- Section: Sistem Informasi Layanan Masyarakat Pada Kelurahan -->
        <div class="col-12 about-card mb-5"> <!-- Ganti col-lg-4 menjadi col-12 dan tambahkan margin bawah -->
            <h3 class="font-weight-bold">Selamat Datang di Sistem Informasi Layanan Masyarakat Kelurahan</h3>
            <span class="line mb-4"></span>
            <h5 class="mb-3">Sistem Informasi Layanan Masyarakat pada kelurahan bertujuan untuk mempermudah pengelolaan layanan publik di tingkat kelurahan, meningkatkan efisiensi, transparansi, dan responsivitas dalam memberikan pelayanan kepada masyarakat. Kami menghadirkan solusi modern untuk memenuhi kebutuhan layanan masyarakat di tingkat kelurahan. Dengan sistem ini, semua layanan publik kini berada dalam genggaman Anda. Tidak perlu lagi repot mengurus dokumen atau menyampaikan pengaduan secara manual. Cukup melalui platform kami, Anda bisa mengakses berbagai fitur yang dirancang khusus untuk memberikan pengalaman yang cepat, transparan, dan efisien.</h5>
            
            <div class="row">
                <div class="col-12">
                    <p style="font-weight: bold; font-size: 24px;">Apa yang Bisa Anda Lakukan di Sini?</p>
                    <ul style="font-size: 18px;">
                        <li>
                            <strong>Pengaduan Masyarakat:</strong> 
                            Ingin melaporkan masalah kebersihan, keamanan, atau fasilitas umum? Kami menyediakan layanan pengaduan yang memudahkan Anda menyampaikan keluhan langsung kepada pihak kelurahan. Setiap pengaduan akan diproses dengan transparan, dan Anda bisa memantau statusnya secara langsung.
                        </li>
                        <li>
                            <strong>Pengajuan Surat Resmi:</strong> 
                            Tidak perlu datang langsung ke kantor kelurahan untuk mengurus surat-surat penting. Ajukan permohonan surat keterangan domisili, surat izin usaha, atau dokumen resmi lainnya secara online, dan kami akan memprosesnya dengan cepat.
                        </li>
                        <li>
                            <strong>Layanan Administrasi Kependudukan:</strong> 
                            Pengelolaan data kependudukan dan administrasi keluarga menjadi lebih mudah dan terstruktur. Mulai dari perubahan data keluarga hingga layanan administrasi lainnya, semuanya tersedia dalam satu sistem yang terintegrasi.
                        </li>
                    </ul>

                    <p style="font-weight: bold; font-size: 24px;">Mengapa Memilih Sistem Kami?</p>
                    <p style="font-size: 20px;">Sistem Informasi Layanan Masyarakat Kelurahan dirancang untuk menghadirkan layanan yang lebih baik dan berorientasi pada kebutuhan masyarakat. Dengan memanfaatkan teknologi terkini, kami berkomitmen memberikan pelayanan yang:</p>
                    <ul style="font-size: 18px;">
                            <li><strong>Cepat:</strong> Kurangi waktu tunggu dengan proses yang lebih singkat.</li>
                            <li><strong>Transparan:</strong> Setiap langkah dapat Anda pantau, memberikan kepercayaan lebih kepada masyarakat.</li>
                            <li><strong>Efisien:</strong> Hemat waktu dan tenaga dengan proses digital yang mudah digunakan.</li>
                        </ul>


                </div>
            </div>
        </div>
        <hr style="border: 0; height: 2px; background-color: #e74c3c; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);">
        <!-- Section: Pengaduan Card -->
        <div class="col-12"> <!-- Ganti col-md-6 col-lg-4 menjadi col-12 -->
            <div class="card">
                <div class="card-header text-center" style="padding-top: 20px;"> <!-- Menambahkan padding-top -->
                <h3 class="font-weight-bold" style="font-size: 40px;">Pengaduan</h3>
                </div>
                <div class="card-body text-center">
                    <h6 class="title text-danger" style="font-size: 25px;">Pengaduan Masyarakat</h6>
                    <div class="container text-center mt-5">
                        <p class="subtitle" style="font-size: 20px;">
                            Fasilitas ini memungkinkan warga untuk melaporkan berbagai keluhan atau permasalahan di lingkungan kelurahan, seperti infrastruktur, keamanan, atau kebersihan. Proses pengaduan dilakukan secara terstruktur dengan notifikasi status untuk memastikan transparansi dan memberikan solusi yang cepat bagi masyarakat.
                        </p>
                        <!-- Tombol Buat Pengaduan -->
                        <div class="row justify-content-center">
                            <div class="col-auto">
                            <a href="{{ route('pengaduan.create') }}" class="btn btn-outline-danger mt-3" style="font-size: 18px;">
                                <i class="icon-down-circled2" style="font-size: 20px;"></i> Buat Pengaduan
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Portfolio Section -->
    <section class="section bg-custom-gray" id="portfolio">
        <div class="container">
            <h1 class="mb-5"><span class="text-danger">My</span> Portfolio</h1>
            <div class="portfolio">
                <div class="portfolio-container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 web new">
                        <div class="portfolio-item">
                            <img src="{{ asset('assets/imgs/Pengaduan Sampah Oleh Masyarakat.jpeg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free bootstrap 4 templates">
                            <div class="content-holder">
                                <a class="img-popup" href="{{ asset('assets/imgs/Pengaduan Sampah Oleh Masyarakat.jpeg') }}"></a>
                                <div class="text-holder">
                                    <h6 class="title">Pengaduan</h6>
                                    <p class="subtitle">Masyarakat dapat dengan mudah melaporkan masalah sampah di lingkungan mereka melalui sistem pengaduan yang tersedia, seperti tumpukan sampah yang tidak terkelola atau pencemaran sampah di area umum. Pengaduan ini memudahkan kelurahan untuk segera menindaklanjuti dengan pengangkutan atau pembersihan yang lebih cepat. Dengan demikian, sistem ini turut membantu menciptakan lingkungan yang lebih bersih, sehat, dan tertib.</p>
                                </div>
                            </div>   
                        </div>             
                    </div>

        <div class="col-md-6 col-lg-4 web new">
            <div class="portfolio-item">
                <img src="{{ asset('assets/imgs/Pengajuan Surat.jpeg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free bootstrap 4 templates">
                <div class="content-holder">
                    <a class="img-popup" href="{{ asset('assets/imgs/Pengajuan Surat.jpeg') }}"></a>
                    <div class="text-holder">
                        <h6 class="title">Pengajuan Surat</h6>
                        <p class="subtitle">Masyarakat dapat mengajukan permohonan surat resmi, seperti surat keterangan domisili atau surat izin, melalui sistem yang mudah diakses. Proses pengajuan dilakukan secara online, memudahkan warga untuk mendapatkan dokumen yang diperlukan tanpa harus datang ke kantor kelurahan. Sistem ini mempercepat administrasi dan meningkatkan kenyamanan bagi masyarakat.</p>
                    </div>
                </div> 
            </div>                         
        </div>

        <div class="col-md-6 col-lg-4 advertising new">
            <div class="portfolio-item">
                <img src="{{ asset('assets/imgs/Layanan Administrasi.jpeg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free bootstrap 4 templates">                         
                <div class="content-holder">
                    <a class="img-popup" href="{{ asset('assets/imgs/Layanan Administrasi.jpeg') }}"></a>
                    <div class="text-holder">
                        <h6 class="title">Layanan Administrasi</h6>
                        <p class="subtitle">Layanan administrasi menyediakan kemudahan bagi masyarakat dalam mengelola data kependudukan dan administrasi keluarga secara terstruktur. Proses pengajuan perubahan data atau permohonan administrasi lainnya dapat dilakukan secara online, meminimalisir antrean panjang. Sistem ini memastikan pengelolaan data yang lebih efisien dan cepat diakses.</p>
                    </div>
                </div>    
            </div>               
        </div>

        <div class="col-md-6 col-lg-4 web">
            <div class="portfolio-item">
                <img src="{{ asset('assets/imgs/Penanganan yang cepat.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free bootstrap 4 templates">
                <div class="content-holder">
                    <a class="img-popup" href="{{ asset('assets/imgs/Penanganan yang cepat.jpg') }}"></a>
                    <div class="text-holder">
                        <h6 class="title">Penanganan yang cepat</h6>
                        <p class="subtitle">Sistem ini memastikan penanganan pengaduan dan permohonan berlangsung cepat dan efisien. Masyarakat dapat melacak status setiap proses secara real-time, sementara kelurahan dapat merespons dengan lebih cepat berkat otomatisasi yang ada. Hal ini meningkatkan kepuasan warga dan memastikan layanan berjalan tanpa hambatan.</p>
                    </div>
                </div>
            </div>                                                     
        </div>

        <div class="col-md-6 col-lg-4 web">
            <div class="portfolio-item">
                <img src="{{ asset('assets/imgs/Efesiensi waktu.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free bootstrap 4 templates">
                <div class="content-holder">
                    <a class="img-popup" href="{{ asset('assets/imgs/Efesiensi waktu.jpg') }}"></a>
                    <div class="text-holder">
                        <h6 class="title">Efesiensi waktu</h6>
                        <p class="subtitle">Sistem ini meningkatkan efisiensi waktu dengan memungkinkan masyarakat mengajukan pengaduan, permohonan surat, dan layanan administrasi secara online. Proses yang lebih cepat dan terorganisir mengurangi kebutuhan untuk antrean panjang, sehingga warga dapat menyelesaikan urusan mereka dengan lebih praktis dan waktu yang lebih singkat.</p>
                    </div>
                </div>
            </div>                                                     
        </div>

        <div class="col-md-6 col-lg-4 web">
            <div class="portfolio-item">
                <img src="{{ asset('assets/imgs/Mengurangi Beban Kerja Administrasi.jpg') }}" class="img-fluid" alt="Download free bootstrap 4 admin dashboard, free bootstrap 4 templates">
                <div class="content-holder">
                    <a class="img-popup" href="{{ asset('assets/imgs/Mengurangi Beban Kerja Administrasi.jpg') }}"></a>
                    <div class="text-holder">
                        <h6 class="title">Mengurangi Beban Kerja Administrasi</h6>
                        <p class="subtitle">Sistem ini mengurangi beban kerja administrasi dengan otomatisasi proses pengaduan dan permohonan, sehingga staf kelurahan tidak perlu menangani tugas manual. Hal ini memungkinkan mereka untuk fokus pada pekerjaan lainnya, meningkatkan produktivitas, dan mempercepat penyelesaian layanan bagi masyarakat.</p>
                    </div>
                </div>
            </div>                                                     
        </div>
    </div>
</div>
<!-- End of portfolio section -->
 
    <section class="section" id="blog">
        <div class="container">
            <h2 class="mb-5">Latest <span class="text-danger">News</span></h2>
            <div class="row">
                <div class="blog-card">
                    <div class="img-holder">
                        <img src="{{ asset('assets/imgs/pengaduanmasyarakatsampahsembarangan.jpeg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates">
                    </div>
                    <div class="content-holder">
                        <h6 class="title">Pengaduan Masyarakat Sampah Tidak Pada Tempatnya</h6>

                        <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 90</a>
                            <a href="#"><i class="ti-comment"></i> 34</a>
                        </p>
                        
                        <p>Pada hari ini, kami menerima pengaduan dari masyarakat terkait masalah sampah yang dibuang tidak pada tempatnya di kawasan RW 03, Kelurahan Sukamaju. Masyarakat melaporkan adanya tumpukan sampah yang tidak terkelola dengan baik di pinggir jalan, yang menyebabkan pencemaran lingkungan dan bau tidak sedap. Pengaduan ini disampaikan melalui sistem pengaduan online yang memudahkan warga untuk melaporkan masalah kebersihan di lingkungan mereka.</p>

                        <p><b>Kami mengkonfirmasi bahwa masalah ini segera akan ditindaklanjuti oleh pihak kelurahan dengan mengirimkan petugas kebersihan untuk membersihkan area tersebut. Kami juga akan meningkatkan pengawasan di kawasan tersebut agar kejadian serupa tidak terulang di masa depan.</b></p>
                        <p>Diharapkan masyarakat dapat lebih sadar untuk membuang sampah pada tempatnya, demi menjaga kebersihan dan kenyamanan lingkungan bersama. Kami mengimbau agar semua warga turut berpartisipasi aktif dalam menjaga kebersihan lingkungan sekitar.</p>
                    </div>
                </div><!-- end of blog wrapper -->

                <!-- blog-card -->
                <div class="blog-card">
                    <div class="img-holder">
                        <img src="{{ asset('assets/imgs/pengajuansurat.jpeg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates">
                    </div>
                    <div class="content-holder">
                        <h6 class="title">Pengajuan Surat Pindah Domisili</h6>

                        <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 26</a>
                            <a href="#"><i class="ti-comment"></i> 5</a>
                        </p>
                        
                        <p>Kami menerima pengajuan surat pindah domisili dari warga atas nama Budi Pambudi yang akan pindah ke kawasan RW 05, Kelurahan Sukamaju. Pengajuan ini dilakukan melalui sistem online yang memudahkan warga untuk mengajukan permohonan surat resmi tanpa harus datang ke kantor kelurahan.<br>
                        Setelah verifikasi data kependudukan, permohonan surat pindah domisili tersebut telah diproses dan disetujui. Surat tersebut akan segera diterbitkan dan dapat diambil di kantor kelurahan pada hari kerja berikutnya.<br>Kami mengimbau masyarakat untuk memanfaatkan sistem pengajuan online ini, yang akan mempercepat proses administrasi dan mempermudah pengurusan surat resmi, seperti surat pindah domisili.</p>
                    </div>
                </div><!-- end of blog wrapper -->

                <!-- blog-card -->
                <div class="blog-card">
                    <div class="img-holder">
                        <img src="{{ asset('assets/imgs/layananadministrasi2.jpeg') }}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates">
                    </div>
                    <div class="content-holder">
                        <h4 class="title">Layanan Administrasi yang Cepat Dalam Pelayanan</h4>

                        <p class="post-details">
                            <a href="#">By: Admin</a>
                            <a href="#"><i class="ti-heart text-danger"></i> 145</a>
                            <a href="#"><i class="ti-comment"></i> 78</a>
                        </p>
                        
                        <p>Pada hari ini, kami menerima laporan positif terkait layanan administrasi yang cepat dan efisien di Kelurahan Sukamaju. Masyarakat mengapresiasi proses pengelolaan data kependudukan yang semakin cepat dan terstruktur melalui sistem administrasi online. Proses pengajuan perubahan data keluarga dan permohonan administrasi lainnya kini dapat diselesaikan dalam waktu singkat, tanpa harus mengantre di kantor kelurahan.<br>
                        Dengan adanya sistem ini, pelayanan menjadi lebih cepat dan terorganisir, mengurangi beban kerja staf kelurahan dan meningkatkan kepuasan warga. Kami berkomitmen untuk terus meningkatkan kualitas pelayanan administrasi bagi masyarakat, sehingga semua kebutuhan administratif dapat dipenuhi dengan lebih efisien dan tanpa kendala.<br>
                        <strong>Kami mengajak masyarakat untuk memanfaatkan layanan ini, yang dirancang untuk mempermudah dan mempercepat segala urusan administrasi di kelurahan.</strong></p>
                    </div>
                </div><!-- end of blog wrapper -->

            </div>
        </div>
    </section>

    <div class="section contact" id="contact">
    <div id="map" class="map"></div>
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-8 mb-4">
                <div class="contact-form-card">
                    <h4 class="contact-title">Send a message</h4>
                    <form id="contact-form">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Name *" id="input-name" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email *" id="input-email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message *" id="input-message" rows="7" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4 mb-4">
                <div class="contact-info-card">
                    <h4 class="contact-title">Get in touch</h4>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-mobile icon-md"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="d-inline">Phone : <br> <span class="text-muted">+ (62) 89000000000</span></h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-map-alt icon-md"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="d-inline">Address :<br> <span class="text-muted">Lab Axioo Politeknik.</span></h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-envelope icon-md"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="d-inline">Email :<br> <span class="text-muted">info@websitelayananmasyarakat.com</span></h6>
                        </div>
                    </div>
                    <ul class="social-icons pt-4">
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Personal Info Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="font-weight-light">Personal Info</h3>
                        <span class="line mb-5"></span>
                    </div>
                    <div class="card-body">
                        <ul class="info list-unstyled">
                            <li><span>Nama</span>: Jamilatul Azkia Putri</li>
                            <li><span>NIM</span>: C030323091</li>
                            <li><span>Program Studi</span>: Teknik Informatika</li>
                            <li><span>Mata Kuliah</span>: Desain Web</li>
                            <li><span>Jenis Tugas</span>: Ujian Akhir Semester</li>
                        </ul>
                        <span class="line mb-5"></span>
                        <ul class="info list-unstyled">
                            <li><span>Nama</span>: M.Rizky</li>
                            <li><span>NIM</span>: C030323094</li>
                            <li><span>Program Studi</span>: Teknik Informatika</li>
                            <li><span>Mata Kuliah</span>: Desain Web</li>
                            <li><span>Jenis Tugas</span>: Ujian Akhir Semester</li>
                        </ul>
                        <ul class="social-icons pt-3">
                            <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Penilaian Section -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mt-2">Penilaian</h4>
                        <span class="line"></span>
                    </div>
                    <div class="card-body pb-2">
                        <h6>★★★★★</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 97%"></div>
                        </div>
                        <h6>★★★★</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%"></div>
                        </div>
                        <h6>★★★</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 76%"></div>
                        </div>
                        <h6>★★</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%"></div>
                        </div>
                        <h6>★</h6>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 10%"></div>
                        </div>
                        <p>3.786.980 Penilaian</p>
                    </div>
                </div>
            </div>

            <!-- Ulasan Section -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mt-2">Ulasan</h4>
                        <span class="line"></span>
                    </div>
                    <div class="card-body pb-2" id="ulasan-section">
                        <h6>Tulis Ulasan Anda</h6>
                        <h6><span style="font-size:400%;color:black;">☆☆☆☆☆</span></h6>
                        <p>Ketuk untuk Menilai</p>
                        <hr>
                        <h6><span style="font-size:200%;color:yellow;">★★★★★</span></h6>
                        <p>Sangat membantu untuk menyampaikan keluhan masyarakat!!!</p>
                        <hr>
                        <h6><span style="font-size:200%;color:yellow;">★★★★</span></h6>
                        <p>Bagus deh ga repot lagi pergi ke kelurahan hahaha</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">AzkiaRizky</span></a> 
            </p>
        </div>
    </footer>

    <!-- core  -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.4.1.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.bundle.js') }}"></script>

    <!-- bootstrap 3 affix -->
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.affix.js') }}"></script>

    <!-- Isotope  -->
    <script src="{{ asset('assets/vendors/isotope/isotope.pkgd.js') }}"></script>
    
    <!-- Google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="{{ asset('assets/js/johndoe.js') }}"></script>

    <script>
    // Menambahkan event listener untuk form submit
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah reload halaman

        // Ambil data input dari form
        const name = document.getElementById('input-name').value;
        const message = document.getElementById('input-message').value;

        // Validasi input agar tidak kosong
        if (name && message) {
            // Buat ulasan baru
            const newReview = `
                <hr>
                <h6><span style="font-size:200%;color:yellow;">★★★★★</span></h6>
                <p><strong>${name}:</strong> ${message}</p>
            `;

            // Tambahkan ulasan baru ke Ulasan Section
            document.getElementById('ulasan-section').insertAdjacentHTML('beforeend', newReview);

            // Reset form setelah submit
            document.getElementById('contact-form').reset();
        } else {
            alert('Harap isi semua kolom sebelum mengirim ulasan!');
        }
    });
</script>

</body>
</html>

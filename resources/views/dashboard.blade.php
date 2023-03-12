@extends('template')
@section('title','Content')
@section('content')
<section id="intro">
    <div class="intro-content">
        <h2>Kursus <span>Mengemudi</span></h2>
        <p>
            Kami siap membantu calon pengemudi untuk belajar berkendara dengan
            mudah dan aman, serta siap menghadapi ujian praktik berkendara dengan
            percaya diri.
        </p>
        <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </div>
    <div id="intro-carousel" class="owl-carousel">
        <div class="item" style="background-image: url('img/intro-carousel/1.jpg')"></div>
        <div class="item" style="background-image: url('img/intro-carousel/2.jpg')"></div>
        <div class="item" style="background-image: url('img/intro-carousel/3.jpg')"></div>
        <div class="item" style="background-image: url('img/intro-carousel/4.jpg')"></div>
        <div class="item" style="background-image: url('img/intro-carousel/5.jpg')"></div>
    </div>
</section>
<main id="main">
    <section id="about" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="{{ asset('assets/img/hero.png') }}" alt="" />
                </div>
                <div class="col-lg-6 content">
                    <h2>Tentang Kami</h2>
                    <h3>Kurus mengemudi Lancar Mengemudi</h3>
                    <ul>
                        <li>
                            Sebuah perusahaan kursus mengemudi yang terpercaya dan
                            berpengalaman dalam memberikan pelatihan berkendara untuk
                            calon pengemudi. Dengan mengutamakan kualitas dan keamanan,
                            kami menawarkan program pelatihan berkendara yang terdiri dari
                            teori dan praktek yang lengkap dan komprehensif.
                        </li>
                        <li>
                            Seluruh instruktur kami adalah tenaga ahli yang terlatih dan
                            berpengalaman dalam memberikan pelatihan berkendara yang baik
                            dan benar. Kami juga menyediakan mobil yang selalu terjaga
                            kualitasnya dan dilengkapi dengan teknologi terkini untuk
                            memastikan keamanan dan kenyamanan dalam setiap sesi
                            pelatihan.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2>Paket Kursus</h2>
                <p>
                    Kami menyediakan berbagai paket kursus mengemudi baik menggunakan
                    mobil matic maupun manual.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-hand-o-right"></i></div>
                        <h4 class="title"><a href="">Paket Bronze</a></h4>
                        <p class="description">
                            Matic atau Manual
                            <br />
                            10 Jam (setiap pertemuan 2 jam)
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-hand-o-right"></i></div>
                        <h4 class="title"><a href="">Paket Silver</a></h4>
                        <p class="description">
                            Matic atau Manual
                            <br />
                            12 Jam (setiap pertemuan 2 jam)
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-hand-o-right"></i></div>
                        <h4 class="title"><a href="">Paket Gold</a></h4>
                        <p class="description">
                            Matic atau Manual
                            <br />
                            18 Jam (setiap pertemuan 2 jam)
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box wow fadeInRight" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-hand-o-right"></i></div>
                        <h4 class="title"><a href="">Paket Diamond</a></h4>
                        <p class="description">
                            Matic atau Manual
                            <br />
                            20 Jam (setiap pertemuan 2 jam)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="section-header">
                <h2>Jadwal Kursus</h2>
                <p>
                    Kami melayani kursus mengemudi setiap hari Senin - Sabtu mulai
                    pukul 09.00 hingga pukul 15.00
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-clock-o"></i></div>
                        <h4 class="title"><a href="">Senin - Sabtu</a></h4>
                        <p class="description">09.00 - 11.00</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box wow fadeInRight">
                        <div class="icon"><i class="fa fa-clock-o"></i></div>
                        <h4 class="title"><a href="">Senin - Sabtu</a></h4>
                        <p class="description">11.00 - 13.00</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa fa-clock-o"></i></div>
                        <h4 class="title"><a href="">Senin - Sabtu</a></h4>
                        <p class="description">13.00 - 15.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Mobil</h2>
                <p>
                    Kami menyediakan berbagai jenis mobil baik matic dan manual yang
                    bisa Anda pilih berdasarkan keinginan Anda.
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="{{ asset('assets/img/mobil-1.png') }}" class="portfolio-popup">
                            <img src="{{ asset('assets/img/mobil-1.png') }}" alt="" />
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Avanza</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="{{ asset('assets/img/mobil-2.png') }}" class="portfolio-popup">
                            <img src="{{ asset('assets/img/mobil-2.png') }}" alt="" />
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Raize</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="{{ asset('assets/img/mobil-3.png') }}" class="portfolio-popup">
                            <img src="{{ asset('assets/img/mobil-3.png') }}" alt="" />
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Brio</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="{{ asset('assets/img/mobil-4.png') }}" class="portfolio-popup">
                            <img src="{{ asset('assets/img/mobil-4.png') }}" alt="" />
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">City Hatchback</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="{{ asset('assets/img/mobil-5.png') }}" class="portfolio-popup">
                            <img src="{{ asset('assets/img/mobil-5.png') }}" alt="" />
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Almaz</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="{{ asset('assets/img/mobil-6.png') }}" class="portfolio-popup">
                            <img src="{{ asset('assets/img/mobil-6.png') }}" alt="" />
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Ertiga</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="{{ asset('assets/img/mobil-7.png') }}" class="portfolio-popup">
                            <img src="{{ asset('assets/img/mobil-7.png') }}" alt="" />
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Mobilio</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">
                        <a href="{{ asset('assets/img/mobil-8.png') }}" class="portfolio-popup">
                            <img src="{{ asset('assets/img/mobil-8.png') }}" alt="" />
                            <div class="portfolio-overlay">
                                <div class="portfolio-info">
                                    <h2 class="wow fadeInUp">Jimny</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Testimoni</h2>
                <p>
                    Berikut merupakan testimoni dari mereka-mereka yang telah mencoba
                    kurus di Lancar Mengemudi dan berhasil mendapatkan SIM mereka dan
                    juga terdapat manfaat lain dari kursus yang mereka dapat.
                </p>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <p>
                        <img src="{{ asset('assets/img/quote-sign-left.png') }}" class="quote-sign-left" alt="" />
                        Instruktur yang sangat berpengalaman dan terampil membantu saya
                        merasa percaya diri di jalan raya dan akhirnya berhasil
                        mendapatkan SIM saya dalam waktu singkat.
                        <img src="{{ asset('assets/img/quote-sign-right.png') }}" class="quote-sign-right" alt="" />
                    </p>
                    <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="testimonial-img" alt="" />
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                </div>
                <div class="testimonial-item">
                    <p>
                        <img src="{{ asset('assets/img/quote-sign-left.png') }}" class="quote-sign-left" alt="" />
                        Setelah mengikuti kursus ini, saya merasa lebih percaya diri dan
                        mampu mengemudi dengan lebih nyaman dan aman. Instruktur sangat
                        sabar dan membantu saya melewati setiap tahap dengan baik.
                        <img src="{{ asset('assets/img/quote-sign-right.png') }}" class="quote-sign-right" alt="" />
                    </p>
                    <img src="{{ asset('assets/img/testimonial-2.jpg') }}" class="testimonial-img" alt="" />
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                </div>
                <div class="testimonial-item">
                    <p>
                        <img src="{{ asset('assets/img/quote-sign-left.png') }}" class="quote-sign-left" alt="" />
                        Instruktur yang profesional dan terampil serta sangat sabar dan
                        memahami kebutuhan dan keterbatasan setiap siswa. Saya berhasil
                        mendapatkan SIM saya dan merasa puas dengan hasilnya.
                        <img src="{{ asset('assets/img/quote-sign-right.png') }}" class="quote-sign-right" alt="" />
                    </p>
                    <img src="{{ asset('assets/img/testimonial-3.jpg') }}" class="testimonial-img" alt="" />
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                </div>
                <div class="testimonial-item">
                    <p>
                        <img src="{{ asset('assets/img/quote-sign-left.png') }}" class="quote-sign-left" alt="" />
                        Instruktur yang sangat profesional dan terampil membuat setiap
                        sesi belajar sangat produktif dan efektif. Saya juga merasa
                        nyaman dan aman selama proses pembelajaran.
                        <img src="{{ asset('assets/img/quote-sign-right.png') }}" class="quote-sign-right" alt="" />
                    </p>
                    <img src="{{ asset('assets/img/testimonial-4.jpg') }}" class="testimonial-img" alt="" />
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                </div>
                <div class="testimonial-item">
                    <p>
                        <img src="{{ asset('assets/img/quote-sign-left.png') }}" class="quote-sign-left" alt="" />
                        Instruktur sangat berpengalaman dan memiliki cara yang sangat
                        baik dalam memberikan pelajaran kepada siswa. Saya
                        merekomendasikan kursus ini kepada siapa saja.
                        <img src="{{ asset('assets/img/quote-sign-right.png') }}" class="quote-sign-right" alt="" />
                    </p>
                    <img src="{{ asset('assets/img/testimonial-5.jpg') }}" class="testimonial-img" alt="" />
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Trainer Kami</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('assets/img/team-1.jpg') }}" alt="" /></div>
                        <div class="details">
                            <h4>Ridwan Hanif</h4>
                            <span>Trainer</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('assets/img/team-5.jpg') }}" alt="" /></div>
                        <div class="details">
                            <h4>Motomobi</h4>
                            <span>Trainer</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('assets/img/team-3.jpg') }}" alt="" /></div>
                        <div class="details">
                            <h4>Fitra Eri</h4>
                            <span>Trainer</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('assets/img/team-4.jpg') }}" alt="" /></div>
                        <div class="details">
                            <h4>Diandra Gautama</h4>
                            <span>Trainer</span>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Hubungi Kami</h2>
                <p>
                    Kami siap membantu calon pengemudi untuk belajar berkendara dengan
                    mudah dan aman, serta siap menghadapi ujian praktik berkendara
                    dengan percaya diri.
                </p>
            </div>
            <div class="row contact-info">
                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Alamat</h3>
                        <address>Jl. Ahmad Yani No. 10, Jakarta</address>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Telepon</h3>
                        <p><a href="#">+62 823 0144 2113</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="#">info@kursusmengemudi.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
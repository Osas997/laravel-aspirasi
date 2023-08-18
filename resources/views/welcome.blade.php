<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="img/LOGO HMJTI2.png" type="image/x-icon">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Website Aspirasi Mahasiswa</title>
</head>

<body>
    <!-- navbar -->
    <nav class="fixed-top">
        <div class="container">
            <div class="logo">
                <div class="logo-img">
                    <img class="img-poli" src="img/LOGO HMJTI2.png" alt="">
                </div>
                <h3 class="fs-3 poli fs-sm-1 fw-bolder mt-2 text-light">INFORMATIKA</h3>
            </div>
            <div class="link">
                <ul>
                    <li onclick="return location.href = '#about'"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                            fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                        </svg><a href="#about">About</a></li>
                    <li onclick="return location.href = '/login'"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                            <path fill-rule="evenodd"
                                d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                        </svg><a href="/login">Login</a></li>
                </ul>
            </div>
            <li class="hamburg" id="hamburger-menu">
                <a><i data-feather="menu"></i></a>
            </li>
        </div>
    </nav>
    <!-- end navbar -->

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <div class="wrapper">
                    <div class="bgr-black">
                        <div class="container">
                            <div class="hero">
                                <div class="teks text-light">
                                    <h1>WEB PELAPORAN</h1>
                                    <h1>PENGADUAN MAHASISWA</h1>
                                    <div class="kata">
                                        <h3 class="text-hero text-center text-md-start">Selamat Datang Di Web Pengaduan
                                            Mahasiswa Politeknik Negeri Banyuwangi</h3>
                                        <h3 class="text-hero text-center text-md-start">Silahkan Registrasi Atau Login
                                            dengan Akun Anda</h3>
                                    </div>
                                    <div class="btnn">
                                        <button class="btn-tod" onclick="location.href = 'halaman_mhs.php'">Ayo
                                            Lapor!!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <div class="wrapper-2">
                    <div class="bgr-black">
                        <div class="container">
                            <div class="hero">
                                <div class="teks text-light">
                                    <h1>WEB PELAPORAN</h1>
                                    <h1>PENGADUAN MAHASISWA</h1>
                                    <div class="kata">
                                        <h3 class="text-hero text-center text-md-start">Selamat Datang Di Web Pengaduan
                                            Mahasiswa Politeknik Negeri Banyuwangi</h3>
                                        <h3 class="text-hero text-center text-md-start">Silahkan Registrasi Atau Login
                                            dengan Akun Anda</h3>
                                    </div>
                                    <div class="btnn">
                                        <button class="btn-tod" onclick="location.href = 'halaman_mhs.php'">Ayo
                                            Lapor!!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about" style="background-color: #d1d5db;">
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="text-center text-content fw-bolder fs-1 pt-5 pb-3">About Us</h2>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="text-md-start text-center pt-3">
                            <p class="text-content">
                                Website Aspirasi Mahasiswa adalah website yang
                                berada dibawah organisasi HMJTI dan bertujuan untuk
                                menampung segala aspirasi mahasiswa politeknik
                                negeri Banyuwangi khususnya mahasiswa Jurusan
                                Teknik Informatika
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 offset-lg-1 col-12">
                        <div class="text-md-end text-center py-lg-3">
                            <p class="text-content">
                                Website ini dibuat pada tanggal 23 Mei 2023 oleh
                                Kelompok 1 kelas 1E TRPL untuk menyelesaikan tugas
                                PBL di semester 2
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-4">
                    Apabila Anda ingin menyampaikan aspirasi pada web
                    ini silahkan ikuti cara berikut:
                    Daftar akun menggunakan NIM mahasiwa dan nomor telepon.
                    Login akun yang telah di daftarkan.
                    Isi kolom aspirasi yang ingin di sampaikan dan tekan tombol kirim.
                    Aspirasi yang disampaikan harus nyata dan tidak boleh berupa hoax.
                    Admin akan menanggapi aspirasi anda dan menyampaikan kepada pihak jurusan Teknik Informatika.
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffcb0b" fill-opacity="1"
                d="M0,64L48,96C96,128,192,192,288,192C384,192,480,128,576,133.3C672,139,768,213,864,229.3C960,245,1056,203,1152,160C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    <footer id="footer" style="background-color: #ffcb0b;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="text-center text-content fw-bolder fs-5 pb-4 text-light">
                        ©2023 Kelompok 1
                        <a class="text-light" href="https://poliwangi.ac.id">Poliwangi.ac.id</a>
                    </h2>
                </div>
            </div>
    </footer>


    <script src="{{ asset('/js/script.js') }}"></script>
    <script>
        feather.replace()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
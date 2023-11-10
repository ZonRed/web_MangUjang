<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Mang Ujang</title>


    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    {{-- <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-reboot.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-utilities.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-utilities.rtl.min.css')}}"> --> --}}
 

    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    
   <style>
        .card {
            height: 100%;
            bottom: 20%;
        }

        .card-img-top {
            width: 100%;
            height: 80mm;
            object-fit: cover;
        }   
    </style>
</head>

<body>
    <!-- Navigasi -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">Berita Mang Ujang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#berita-terkini">Berita Terkini</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>


    <!-- Beranda (Berada) -->
    <section id="beranda" class="py-5" style="margin-top: 80px;">
        <div class="container text-center">
        <div class="col text-center">
            <h1>Beranda</h1>
            <p>Selamat datang di portal berita Mang Ujang terkini.</p>
            <p>Kami adalah portal berita Mang Ujang (fanbase Manchaster united indonesia) yang berkomitmen untuk memberikan berita terkini dan terpercaya kepada Anda.</p>
            <p>Kami akan selalu update pemain,statistik,jadwal pertandingan dan hasil pertandingan setiap musim.</p>
            <p>(jika sudah berganti musim pemain lama yang keluar akan di hapus dan statistik kembali ke awal alias kosong)</p>
        </div>
    </div>
    </section>

    <!-- Berita Terkini -->
<section id="berita-terkini" class="bg-light py-5">
    <div class="container">
        <div class="col text-center">
            <h1>Berita Terkini</h1>
        </div>
        <!-- Berita Sepakbola -->
        <div class="row">
            <!-- Berita 1 -->
             <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/p1/544/2023/10/08/Manchester-United-menang-secara-dramatis-atas-Brentford-lewat-2-gol-Scoot-McTominay-3272816874.jpg" class="card-img-top" alt="Berita 4" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Statistik Pemain</h5>
                        <p class="card-text">Berita tentang statistik pemain MU.</p>
                        <a href="statistik" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/rasmus-hojlund-ke-manchester-united-here-we-go.jpg" class="card-img-top" alt="Berita 2" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Transfer Pemain Terbaru</h5>
                        <p class="card-text">Berita tentang transfer pemain terbaru MU.</p>
                        <a href="transfer" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- Berita 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://static.teamviewer.com/resources/2023/09/hero-highlight-manchester-united-e1694092934480.jpeg" class="card-img-top" alt="Berita 1" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Pertandingan Besok</h5>
                        <p class="card-text">Deskripsi singkat tentang pertandingan MU besok.</p>
                        <a href="next" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Berita 4 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://media.cnn.com/api/v1/images/stellar/prod/230731070643-manchester-united-adidas.jpg?c=16x9&q=h_720,w_1280,c_fill" class="card-img-top" alt="Berita 3" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Hasil Pertandingan</h5>
                        <p class="card-text">Hasil pertandingan terbaru dan skor MU.</p>
                        <a href="hasil" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer class="bg-danger text-light text-center py-3">
        <p>&copy; 2023 Portal Berita Mang Ujang</p>
    </footer>

    <!-- Tambahkan tautan ke file JavaScript Bootstrap -->
    <!-- <link rel="stylesheet" href="{{asset('js/bootstrap.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.bundle.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.bundle.min.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.esm.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.esm.min.js')}}"> -->

   <!-- Tambahkan tautan ke file JavaScript Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

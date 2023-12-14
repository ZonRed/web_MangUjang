<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita Mang Ujang</title>

    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
       .card {
        max-height: 100%; /* Mengatur tinggi maksimum card */
        overflow: hidden; /* Menyembunyikan konten yang melebihi tinggi maksimum */
        
    }

    .card-img-top {
        width: 100%;
        height: 200px; /* Mengatur tinggi gambar card sesuai kebutuhan Anda */
        object-fit: cover;
    }
        #map {
            height: 400px;
            width: 100%;
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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#berita-terkini">Berita Terkini</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lokasi-map">Lokasi Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hubungi-kami">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Beranda (Berada) -->
    <section id="beranda" class="py-5" style="margin-top: 80px;">
        <div class="container text-center">
            <div class="col text-center">
                <h1>Beranda</h1>
                <p>Selamat datang di portal berita Mang Ujang terkini.</p>
                <p>Kami adalah portal berita Mang Ujang (fanbase Manchaster united indonesia) yang berkomitmen untuk memberikan berita terkini dan terpercaya kepada Anda.</p>
                <p>Kami akan selalu update pemain, statistik, jadwal pertandingan, dan hasil pertandingan setiap musim.</p>
                <p>(jika sudah berganti musim pemain lama yang keluar akan dihapus dan statistik kembali ke awal alias kosong)</p>
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
                            <p class="card-text">Berita tentang pertandingan MU besok.</p>
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

    <!-- Lokasi Map -->
    <section id="lokasi-map" class="py-5">
        <div class="container">
            <div class="col text-center">
                <h1>Lokasi Map</h1>
                <p>Tempat menampilkan peta lokasi menggunakan Google Maps.</p>
            </div>
            <!-- Add a container for the map -->
            <div id="map"></div>
        </div>
    </section>

    <!-- Hubungi Kami -->
    <section id="hubungi-kami" class="py-5">
        <div class="container">
            <div class="col text-center">
                <h1>Hubungi Kami</h1>
                <p>Jika Anda memiliki pertanyaan atau masukan, jangan ragu untuk menghubungi kami melalui formulir di bawah ini.</p>
            </div>
            <!-- Tambahkan formulir kontak di sini jika diperlukan -->
            <form action="{{ url('SaveLaporan') }}" method="POST">
                @csrf
                <!-- Input untuk Nama -->
                <div class="mb-3">
                    <label for="assists" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" required>
                </div>

                <!-- Input untuk Email -->
                <div class="mb-3">
                    <label for="kartu_kuning" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" required>
                </div>

                <!-- Input untuk Kritikan -->
                <div class="mb-3">
                    <label for="kartu_merah" class="form-label">Pesan</label>
                    <input type="text" class="form-control" name="pesan" required>
                </div>
                <!-- kirim pesan -->
                <input type="submit" value="Kirim" class="btn btn-primary">
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-danger text-light text-center py-3">
        <p>&copy; 2023 Portal Berita Mang Ujang</p>
    </footer>

    <!-- Tambahkan tautan ke file JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

   <!-- Replace the Google Maps API script with HERE Maps API script -->
   <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>


    <!-- Add the following script for HERE Maps -->
<script>
    const platform = new H.service.Platform({ apikey: "ensbOT2QMaGsGq8JnAS8Sbu45WkyV8rVtyapP1N-l9M" });
    const defaultLayers = platform.createDefaultLayers();
    const map = new H.Map(
        document.getElementById("map"),
        defaultLayers.vector.normal.map,
        {
            center: { lat: -7.295538160587548, lng: 112.75289185215573 },
            zoom: 13,
            pixelRatio: window.devicePixelRatio || 1,
        }
    );
    window.addEventListener("resize", () => map.getViewPort().resize());
    const behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
    const ui = H.ui.UI.createDefault(map, defaultLayers);

    // Create a zoom control
    const zoomControl = new H.ui.ZoomControl({ zoom: 3 });
    ui.addControl("zoom", zoomControl);

    // Create a custom location control
    const locationControl = new H.ui.Control(
        'default', {
        'component': {
            onStateChange: function (evt) {
                if (evt.state === 'PENDING') {
                    map.setCenter({ lat: -7.295538160587548, lng: 112.75289185215573 });
                    map.setZoom(13);
                }
            }
        }
    });
    ui.addControl("location", locationControl);

    // Begin geocoding
    const searchText = "fanbase location";
    const geocoder = platform.getGeocodingService();

    // Use geocode endpoint to get coordinates for the specified location
    geocoder.geocode({ searchText }, (result) => {
        const location = result.Response.View[0].Result[0].Location.DisplayPosition;
        const { Latitude: lat, Longitude: lng } = location;

        // Create a marker at the specified coordinates
        const marker = new H.map.Marker({ lat, lng });
        map.addObject(marker);

        // Optionally, you can add an info bubble to the marker
        const bubble = new H.ui.InfoBubble({ lng, lat: lat - 0.02 }, {
            content: '<p>Fanbase Location</p>'
        });
        ui.addBubble(bubble);
    });
</script>



</body>
</html>

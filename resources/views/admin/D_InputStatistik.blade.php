<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Input Statistik Pemain</title>

    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
            background-color: #dc3545; /* Warna merah yang sesuai dengan tema */
        }

        .nav-link {
            color: #fff; /* Warna teks putih untuk kontras */
        }

        .nav-link:hover {
            color: #fff; /* Warna teks putih untuk kontras */
        }

        .content-area {
            margin-left: 200px;
            padding: 20px;
        }

        body {
            background-color: #f8f9fa; /* Warna latar belakang yang sesuai dengan tema */
        }
        .card {
            max-width: 1000px; /* Set your desired maximum width for the card */
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="Dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="D_Jadwal">Jadwal Pertandingan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="D_Hasil">Hasil Pertandingan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="D_Statistik">Statistik Pemain</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="D_InputHasil">Input Hasil Pertandingan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="D_InputJadwal">Input Jadwal Pertandingan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="D_InputStatistik">Input Statistik Pemain</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Transfer Pemain</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index">Home Web</a>
            </li>
        </ul>
    </div> 
    <!-- Content area for Input Statistik Pemain -->
    <section id="input-statistik-pemain" class="py-5">
        <div class="container-fluid content-area">
            <h2>Admin Dashboard - Input Statistik Pemain</h2>
    
        <!-- user admin tampilan -->
        <div style="position: fixed; top: 10px; right: 10px; z-index: 100;">
            <!-- Ganti 'Nama User' dengan nama pengguna yang sedang masuk -->
            <span style="color: #000; font-weight: bold;">{{Auth::user()->nama ?? ''}}</span>
            <!-- Tambahkan tautan logout di sini -->
            <a href="/logout" style="color: #dc3545; margin-left: 10px; text-decoration: none;">Logout</a>
        </div>

            <!-- Card untuk input statistik pemain -->
            <div class="card">
                <div class="card-body">
                    <form>
                        <!-- Input untuk No Punggung -->
                        <div class="mb-3">
                            <label for="no_punggung" class="form-label">No Punggung</label>
                            <input type="text" class="form-control" id="no_punggung" name="no_punggung" required>
                        </div>

                        <!-- Input untuk Posisi -->
                        <div class="mb-3">
                            <label for="posisi" class="form-label">Posisi</label>
                            <input type="text" class="form-control" id="posisi" name="posisi" required>
                        </div>

                        <!-- Input untuk Nama Pemain -->
                        <div class="mb-3">
                            <label for="nama_pemain" class="form-label">Nama Pemain</label>
                            <input type="text" class="form-control" id="nama_pemain" name="nama_pemain" required>
                        </div>

                        <!-- Input untuk Penampilan -->
                        <div class="mb-3">
                            <label for="penampilan" class="form-label">Penampilan</label>
                            <input type="text" class="form-control" id="penampilan" name="penampilan" required>
                        </div>

                        <!-- Input untuk Gol -->
                        <div class="mb-3">
                            <label for="gol" class="form-label">Gol</label>
                            <input type="text" class="form-control" id="gol" name="gol" required>
                        </div>

                        <!-- Input untuk Assists -->
                        <div class="mb-3">
                            <label for="assists" class="form-label">Assists</label>
                            <input type="text" class="form-control" id="assists" name="assists" required>
                        </div>

                        <!-- Input untuk Kartu Kuning -->
                        <div class="mb-3">
                            <label for="kartu_kuning" class="form-label">Kartu Kuning</label>
                            <input type="text" class="form-control" id="kartu_kuning" name="kartu_kuning" required>
                        </div>

                        <!-- Input untuk Kartu Merah -->
                        <div class="mb-3">
                            <label for="kartu_merah" class="form-label">Kartu Merah</label>
                            <input type="text" class="form-control" id="kartu_merah" name="kartu_merah" required>
                        </div>

                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                         <!-- Back button -->
                         <a href="D_Statistik" class="btn btn-outline-primary">View Data</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

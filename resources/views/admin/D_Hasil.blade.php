<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Hasil Pertandingan</title>

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

    <!-- Content area for Hasil Pertandingan -->
    <section id="hasil-pertandingan" class="py-5" style="margin-top: 80px;">
        <div class="container-fluid content-area">
            <h2>Admin Dashboard - Hasil Pertandingan</h2>
            <p>INI "HASIL PERTANDINGAN" admin dashboard.</p>
        </div>
       <!-- user admin tampilan -->
            <div style="position: fixed; top: 10px; right: 10px; z-index: 100;">
                <!-- Ganti 'Nama User' dengan nama pengguna yang sedang masuk -->
                <span style="color: #000; font-weight: bold;">{{Auth::user()->nama ?? ''}}</span>
                <!-- Tambahkan tautan logout di sini -->
                <a href="/logout" style="color: #dc3545; margin-left: 10px; text-decoration: none;">Logout</a>
            </div>
    </section>

    <!-- Table untuk CRUD hasil pertandingan -->
    <table class="table table-bordered" style="margin-left: 220px; padding: 20px;">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Lawan</th>
                <th>Skor</th>
                <th>Hasil</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>10 Oktober 2023</td>
                <td>Bentford</td>
                <td>3-1</td>
                <td>Menang</td>
                <td>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>15 Oktober 2023</td>
                <td>Sheff United</td>
                <td>3-2</td>
                <td>Menang</td>
                <td>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>20 Oktober 2023</td>
                <td>Copenhagen</td>
                <td>3-2</td>
                <td>Menang</td>
                <td>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>25 Desember 2024</td>
                <td>Manchaster City</td>
                <td>2-2</td>
                <td>Seri</td>
                <td>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>30 November 2025</td>
                <td>Newcastle United</td>
                <td>2-1</td>
                <td>Menang</td>
                <td>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <!-- Tambahkan baris untuk pertandingan lainnya di sini -->
        </tbody>
    </table>



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

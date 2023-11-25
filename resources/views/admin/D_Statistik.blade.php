<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Statistik Pemain</title>

    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Tambahkan tautan ke file JQUERY ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
                <a class="nav-link" href="D_Laporan">View Pesan</a>
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
                <a class="nav-link" href="D_InputJadwal">Input Jadwal Pertandingan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="D_EditHasil">Edit Jadwal Pertandingan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="D_InputHasil">Input Hasil Pertandingan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="D_EditHasil">Edit Hasil Pertandingan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="D_InputStatistik">Input Statistik Pemain</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index">Home Web</a>
            </li>
        </ul>
    </div> 

    <!-- Content area for Statistik Pemain -->
    <section id="statistik-pemain" class="py-5" style="margin-top: 80px;">
        <div class="container-fluid content-area">
            <h2>Admin Dashboard - Statistik Pemain</h2>
            <p>INI "STATISTIK PEMAIN" admin dashboard.</p>
        </div>
        <!-- user admin tampilan -->
        <div style="position: fixed; top: 10px; right: 10px; z-index: 100;">
            <!-- Ganti 'Nama User' dengan nama pengguna yang sedang masuk -->
            <span style="color: #000; font-weight: bold;">{{Auth::user()->nama ?? ''}}</span>
            <!-- Tambahkan tautan logout di sini -->
            <a href="/logout" style="color: #dc3545; margin-left: 10px; text-decoration: none;">Logout</a>
        </div>
    </section>

    <!-- Table untuk Statistik Pemain -->
    <table class="table table-bordered" style="margin-left: 220px; padding: 20px;">
        <div class="container-fluid content-area">
            <div class="row mb-3">
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari pemain..." id="searchInput">
                        <button class="btn btn-outline-secondary" type="button" id="searchButton">Cari</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Back button -->
                    <a href="D_InputStatistik" class="btn btn-outline-primary">Input</a>
                </div>
            </div>
        </div>
        <thead>
            <tr>
                <th>No Punggung</th>
                <th>Posisi</th>
                <th>Nama Pemain</th>
                <th>Penampilan</th>
                <th>Gol</th>
                <th>Assists</th>
                <th>Kartu Kuning</th>
                <th>Kartu Merah</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="myTable">
            @foreach ($Statistik as $s)
            <tr>
                <td>{{$s->punggung}}</td>
                    <td>{{$s->posisi}}</td>
                    <td>{{$s->nama_pemain}}</td>
                    <td>{{$s->penampilan}}</td>
                    <td>{{$s->gol}}</td>
                    <td>{{$s->assists}}</td>
                    <td>{{$s->kartu_kuning}}</td>
                    <td>{{$s->kartu_merah}}</td>
                <td>
                    <a href="{{ url('/edit_statistik/' . $s->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ url('/delete_statistik/' . $s->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
  <!-- Pagination Links -->
<div class="d-flex justify-content-center mt-3">
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-sm">

            {{-- Previous Page Link --}}
            @if ($Statistik->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $Statistik->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($Statistik->getUrlRange(1, $Statistik->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $Statistik->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach

            {{-- Next Page Link --}}
            @if ($Statistik->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $Statistik->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif

        </ul>
    </nav>
</div>
    
    

<!-- SCRIPT PENCARIAN -->
<script>
    $(document).ready(function () {
        var searchValue = ""; // Variable to store search input

        // Function to filter table rows based on stored input value
        function filterTable() {
            $("#myTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
            });
        }

        // Capture input value on keyup
        $("#searchInput").on("keyup", function () {
            searchValue = $(this).val().toLowerCase();

            // Check if the input is empty
            if (searchValue === "") {
                // If empty, reset the table to its initial state
                $("#myTable tr").show();
            }
        });

        // Trigger the filterTable function on button click event
        $("#searchButton").on("click", function () {
            filterTable();
        });
    });
</script>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

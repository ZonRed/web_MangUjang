<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Tambahkan tautan ke file CSS Bootstrap -->
        {{-- <!-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" --> --}}

    <!-- Tambahkan tautan ke file JQUERY ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Tambahkan tautan ke file CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
    <!-- Kode CSS untuk membuat navbar di tengah  -->
    <style>
        .navbar {
            justify-content: center;
        }
        .navbar-brand {
            text-align: center;
        }
    </style>
    
    <title>Pertandingan Selanjutnya Manchester United</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">Berita Mang Ujang</a>

               <!-- Tombol Kembali -->
            <div class=" d-flex gap-2">
                <a class="btn btn-light mx-2" href="index">
                    <i class="fas fa-arrow-left"></i> Kembali ke Web
                </a>
        
                <!-- Tombol Kembali ke Aplikasi -->
                <a class="btn btn-light m-8" href="yourcustomscheme://">
                    <i class="fas fa-arrow-left"></i> Kembali ke Aplikasi
                </a>
            </div>
        </div>
    </nav>

    <div class="container mt-5 text-center">
        <!-- Konten Halaman Pertandingan Selanjutnya Manchester United -->
        <div class="row justify-content-center" style="margin-top: 80px;">
            <div class="col-md-8">
                <div class="card">
                    <img src="https://static.teamviewer.com/resources/2023/09/hero-highlight-manchester-united-e1694092934480.jpeg" class="card-img-top" alt="Pertandingan Selanjutnya Manchester United">
                   <div class="container mt-5">
                    <h2>Pertandingan Selanjutnya Manchester United</h2>
                    <div class="card">
                        <!-- fitur pencarian -->
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." id="searchInput">
                        </div>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Lawan</th>
                                        <th>Tempat</th>
                                        <th>Waktu</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                    <tr>
                                        <td>10 Oktober 2023</td>
                                        <td>Bentford</td>
                                        <td>Old Ttrafford</td>
                                        <td>21.00 WIB</td>
                                    </tr>
                                    <tr>
                                        <td>15 Oktober 2023</td>
                                        <td>Sheff United</td>
                                        <td>Bramall Lane</td>
                                        <td>02.00 WIB</td>
                                    </tr>
                                    <tr>
                                        <td>20 Oktober 2023</td>
                                        <td>Copenhagen</td>
                                        <td>Stadion Parken</td>
                                        <td>02:30 WIB</td>
                                    </tr>
                                    <tr>
                                        <td>25 Oktober 2023</td>
                                        <td>Manchaster City</td>
                                        <td>Stadium Etihad</td>
                                        <td>22.30 WIB</td>
                                    </tr>
                                      <tr>
                                        <td>25 Oktober 2024</td>
                                        <td>Manchaster City</td>
                                        <td>Stadium Etihad</td>
                                        <td>22.30 WIB</td>
                                    </tr>
                                    <tr>
                                        <td>30 Oktober 2025</td>
                                        <td>Newcastle United</td>
                                        <td>St James' Park</td>
                                        <td>03.15 WIB</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                   

                        <!-- Tombol Kembali ke Halaman Utama -->
                        <div class="mt-4">
                            <a href="index" class="btn btn-primary">Kembali ke Halaman Utama</a>
                            <a href="" class="btn btn-primary">Kembali ke Halaman Mobile</a>
                        </div>
                    </div>




    {{-- <!-- Tambahkan script pencarian -->
    <script>
    // Fungsi untuk melakukan pencarian
    function searchTable() {
        // Mendapatkan nilai input pencarian
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementsByTagName("table")[0];
        tr = table.getElementsByTagName("tr");

        // Melakukan filter pada baris tabel
        for (i = 1; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0]; // Kolom dengan tanggal pertandingan
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    // Mendengarkan perubahan pada input pencarian
    document.getElementById("searchInput").addEventListener("keyup", searchTable);
</script> --}}

{{-- SCRIPT PENCARIAN --}}
<script>
    $(document).ready(function(){
      $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>

        <!-- Tambahkan tautan ke file JavaScript Bootstrap -->
        {{-- <!-- <link rel="stylesheet" href="{{asset('js/bootstrap.js')}}">
        <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}"> --> --}}
    
        <!-- Tambahkan tautan ke file JavaScript Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

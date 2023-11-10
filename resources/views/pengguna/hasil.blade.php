<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Tambahkan tautan ke file CSS Bootstrap -->
        {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}

    <!-- Tambahkan tautan ke file JQUERY ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        

    <!-- Tambahkan tautan ke file CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Hasil Pertandingan Manchester United</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">Berita Mang Ujang</a>
            <a class="btn btn-light ml-auto" href="index">
            <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </nav>

    <div class="container mt-5 text-center">
        <!-- Konten Halaman Hasil Pertandingan Manchester United -->
        <div class="row justify-content-center" style="margin-top: 80px;">
            <div class="col-md-8">
                <div class="card">
                    <img src="https://media.cnn.com/api/v1/images/stellar/prod/230731070643-manchester-united-adidas.jpg?c=16x9&q=h_720,w_1280,c_fill" class="card-img-top" alt="Hasil Pertandingan Manchester United">
                    <div class="card-body">
                        <!-- Tabel Hasil Pertandingan -->
                         <div class="container mt-5">
                            <div class="card-body">
                                <h2>Hasil Pertandingan Manchester United</h2>
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
                                                <th>Skor</th>
                                                <th>Hasil</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <tr>
                                                <td>10 Oktober 2023</td>
                                                <td>Bentford</td>
                                                <td>3-1</td>
                                                <td>Menang</td>
                                            </tr>
                                            <tr>
                                                <td>15 Oktober 2023</td>
                                                <td>Sheff United</td>
                                                <td>3-2</td>
                                                <td>Menang</td>
                                            </tr>
                                            <tr>
                                                <td>20 Oktober 2023</td>
                                                <td>Copenhagen</td>
                                                <td>3-2</td>
                                                <td>Menang</td>
                                            </tr>
                                            <tr>
                                                <td>25 Desember 2024</td>
                                                <td>Manchaster City</td>
                                                <td>2-2</td>
                                                <td>Seri</td>
                                            </tr>
                                            <tr>
                                                <td>30 November 2025</td>
                                                <td>Newcastle United</td>
                                                <td>2-1</td>
                                                <td>Menang</td>
                                            </tr>
                                            <!-- Tambahkan baris untuk pertandingan lainnya di sini -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Kembali ke Halaman Utama -->
                        <div class="mt-4">
                            <a href="index" class="btn btn-primary">Kembali ke Halaman Utama</a>
                        </div>
                    </div>
                </div>
            </div>
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

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
   
    <!-- Kode CSS untuk membuat navbar di tengah -->
    <style>
        .navbar {
            justify-content: center;
        }
        .navbar-brand {
            text-align: center;
        }
    </style>
    
    <title>Statistik Pemain Manchester United</title>
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
                <a class="btn btn-light m-8" href="mangujangapp://page">
                    <i class="fas fa-arrow-left"></i> Kembali ke Aplikasi
                </a>
            </div>
          
        </div>
    </nav>
    
    

    <div class="container mt-5 text-center">
        <!-- Konten Halaman Statistik Pemain Manchester United -->
        <div class="row justify-content-center" style="margin-top: 80px;">
            <div class="col-md-8">
                <div class="card">
                    <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/p1/544/2023/10/08/Manchester-United-menang-secara-dramatis-atas-Brentford-lewat-2-gol-Scoot-McTominay-3272816874.jpg" class="card-img-top" alt="Statistik Pemain Manchester United">
                   <div class="container mt-5">
                    <h2>Statistik Pemain Manchester United</h2>
                    <div class="card">
                        <!-- fitur pencarian -->
                        <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search.." id="searchInput">
                            </div>
                            
                            <table class="table table-bordered">
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
                                    </tr>
                                     @endforeach
                                    </tbody>
                            </table>
                        </div>
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

                           <!-- Tombol Kembali ke Halaman Utama -->
                        <div class="container mt-3">
                        <div class="d-flex gap-10 justify-content-center">
                                <a href="index" class="btn btn-primary mx-5">
                                <i class="fas fa-arrow-left"></i>Kembali ke Halaman Utama
                            </a>
                                <a href="mangujangapp://page" class="btn btn-primary mx-5 ">
                                <i class="fas fa-arrow-left"></i>Kembali ke Halaman Mobile
                            </a>
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
            td = tr[i].getElementsByTagName("td")[2]; // Kolom dengan nama pemain
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
    {{-- <link rel="stylesheet" href="{{asset('js/bootstrap.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}"> --}}
    
    <!-- Tambahkan tautan ke file JavaScript Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

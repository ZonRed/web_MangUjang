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
                <a class="btn btn-light m-8" href="mangujang://page">
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
                                    <tr>
                                        <td>5</td>
                                        <td>DF</td>
                                        <td>H. Maguire</td>
                                        <td>9</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>GK</td>
                                        <td>R. Vítek</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>DF</td>
                                        <td>R. Varane</td>
                                        <td>8</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>DF</td>
                                        <td>Diogo Dalot</td>
                                        <td>11</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>CF</td>
                                        <td>A. Martial</td>
                                        <td>11</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>MF</td>
                                        <td>Bruno Fernandes</td>
                                        <td>11</td>
                                        <td>3</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>CF</td>
                                        <td>Anthony Martial</td>
                                        <td>11</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>CF</td>
                                        <td>Marcus Rashford</td>
                                        <td>10</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>MF</td>
                                        <td>Donny van de Beek</td>
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>MF</td>
                                        <td>Casemiro</td>
                                        <td>8</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>MF</td>
                                        <td>F. Pellistri</td>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>DF</td>
                                        <td>J. Evans</td>
                                        <td>8</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>DF</td>
                                        <td>L. Shaw</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>GK</td>
                                        <td>T. Heaton</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>GK</td>
                                        <td>A. Onana</td>
                                        <td>11</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>3</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>MF</td>
                                        <td>M. Mount</td>
                                        <td>7</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>MF</td>
                                        <td>S. McTominay</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>DF</td>
                                        <td>V. Lindelöf</td>
                                        <td>10</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>46</td>
                                        <td>MF</td>
                                        <td>H. Mejbri</td>
                                        <td>8</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>MF</td>
                                        <td>C. Eriksen</td>
                                        <td>11</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>47</td>
                                        <td>CF</td>
                                        <td>S. Shoretire</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>DF</td>
                                        <td>Lisandro Martínez</td>
                                        <td>5</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>DF</td>
                                        <td>Sergio Reguilón</td>
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>DF</td>
                                        <td>T. Malacia</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>MF</td>
                                        <td>K. Mainoo</td>
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>CF</td>
                                        <td>J. Sancho</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>44</td>
                                        <td>MF</td>
                                        <td>D. Gore</td>
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>CF</td>
                                        <td>R. Højlund</td>
                                        <td>8</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>CF</td>
                                        <td>A. Diallo</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>DF</td>
                                        <td>A. Wan-Bissaka</td>
                                        <td>6</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>CF</td>
                                        <td>A. Garnacho</td>
                                        <td>11</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>1</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>MF</td>
                                        <td>O. Forson</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>CF</td>
                                        <td>Antony</td>
                                        <td>8</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>2</td>
                                        <td>0</td>
                                    </tr>
                                    </tbody>
                            </table>
                        </div>

                        <!-- Tombol Kembali ke Halaman Utama -->
                        <div class="mt-4">
                            <a href="index" class="btn btn-primary">Kembali ke Halaman Utama</a>
                            <a href="mangujang://page" class="btn btn-primary">Kembali ke Halaman Mobile</a>
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
    <!-- <link rel="stylesheet" href="{{asset('js/bootstrap.js')}}">
    <link rel="stylesheet" href="{{asset('js/bootstrap.min.js')}}"> -->
    
    <!-- Tambahkan tautan ke file JavaScript Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Portal Berita Mang Ujang</title>
    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Tambahkan tautan ke file JQUERY ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
</head>

<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <!-- Brand tengah -->
            <a class="navbar-brand mx-auto" href="#">Berita Mang Ujang</a>
        </div>
    </nav>
    <!-- Konten Halaman Register -->
    <section id="register" class="py-4">
        <div class="container" style="height: 100%" style="align-content: center">
            <div class="row justify-content-center d-flex">
                <div class="col-md-6">
                    <div class="card" style="width: 100%" style="max-width: 400px" style="margin: auto">
                        <div class="card-header text-center">
                            <h2>Register - Portal Berita Mang Ujang</h2>
                        </div>
                        <div class="card-body">
                            <!-- Formulir Register -->
                            <form action="/simpanuser" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama"
                                    class="form-control" autofocus required autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" 
                                    class="form-control" required autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password"
                                    class="form-control" required autocomplete="off">
                                </div>
                                <div class="text-center">
                                    <input  name="" id="" class="btn btn-primary" type="submit" value="Register">
                                </div>
                            </form>
                            <!-- Bagian pesan kesalahan -->
                            <div id="password-error" style="color: red; text-align: center; margin-top: 5px;"></div>
                            <!-- Elemen untuk menampilkan pesan sukses -->
                            <div id="success-message" style="color: green; text-align: center; margin-top: 5px;"></div>
                            <!-- Bagian pertanyaan sudah punya akun? -->
                            <small class="text-center mt-3">Sudah punya akun? <a href="login">Login</a> sekarang</small>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Footer -->
    <footer class="bg-danger fixed-bottom text-light text-center py-3">
        <p>&copy; 2023 Portal Berita Mang Ujang</p>
    </footer>


   <!-- Tambahkan AJAX filter maksimal input password -->
<script>
    $(document).ready(function () {
        $('form').submit(function (e) {
            e.preventDefault();
            var password = $('input[name="password"]').val();

            // Membersihkan pesan sebelum mengirimkan AJAX
            $('#password-error').text('');
            $('#success-message').text('');

            if (password.length > 5) {
                // Menampilkan pesan kesalahan
                $('#password-error').text('Password maximum length is 5 characters');
            } else if (password.length < 3) {
                // Menampilkan pesan kesalahan jika panjang kurang dari 3 karakter
                $('#password-error').text('Password minimum length is 3 characters');
            } else {
                // Melakukan proses penyimpanan atau pengiriman data menggunakan AJAX
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function (response) {
                        // Tindakan setelah berhasil
                        $('#success-message').text('Registrasi berhasil!');
                        console.log(response);

                        // Membersihkan pesan setelah selesai
                        $('#password-error').text('');
                    },
                    error: function (error) {
                        // Tangani kesalahan
                        console.log(error);

                        // Membersihkan pesan setelah selesai
                        $('#success-message').text('');
                    }
                });
            }
        });
    });
</script>



    <!-- Tambahkan tautan ke file JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

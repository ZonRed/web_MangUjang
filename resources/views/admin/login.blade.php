<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Berita Mang Ujang</title>
    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <!-- Navigasi -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <!-- Brand tengah -->
            <a class="navbar-brand mx-auto" href="#">Berita Mang Ujang</a>
        </div>
    </nav>
    <!-- Konten Halaman Login -->
    <section id="login" class="py-5" style="margin-top: 50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>Login - Portal Berita Mang Ujang</h2>
                        </div>
                        <div class="card-body">
                            <!-- Formulir Login -->
                            <form action="/checklogin" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" 
                                    class="form-control" autofocus required autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password"
                                    class="form-control" required autocomplete="off">
                                </div>
                                <div class="text-center">
                                    <input  name="" id="" class="btn btn-primary" type="submit" value="Login">
                                </div>
                            </form>
                            <small class="text-center mt-3">Belum punya akun? <a href="/register">Register</a> sekarang</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-danger fixed-bottom text-light text-center py-3">
        <p>&copy; 2023 Portal Berita Mang Ujang</p>
    </footer>


    <!-- Tambahkan tautan ke file JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

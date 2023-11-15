<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portal Berita Mang Ujang</title>
    <!-- Tambahkan tautan ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
                        <form id="loginForm" action="/checklogin" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" autofocus required autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required autocomplete="off">
                            </div>
                            <div class="text-center">
                                <input id="loginButton" class="btn btn-primary" type="button" value="Login">
                            </div>
                        </form>
                        <div id="errorMessage" class="text-center text-danger mt-3"></div>
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

    <!-- Tambahkan AJAX filter wrong input pass/email -->
    <script>
        document.getElementById('loginButton').addEventListener('click', function () {
            var form = document.getElementById('loginForm');
            var formData = new FormData(form);
    
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/checklogin', true);
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
    
                        if (response.success) {
                            // Login successful, redirect to the Dashboard
                            window.location.href = '/Dashboard';
                        }
                    } else if (xhr.status === 401) {
                        // Invalid email or password, display error message
                        document.getElementById('errorMessage').innerText = JSON.parse(xhr.responseText).error;
                    }
                }
            };
            xhr.send(formData);
        });
    </script>
    


    <!-- Tambahkan tautan ke file JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

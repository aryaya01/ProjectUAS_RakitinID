<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{!! asset('asset/main.css') !!}">
    <title>Rakitin.id | Login</title>
    <link rel="icon" href="{!! asset('asset/logo/logotitle.png') !!}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <input type="checkbox" style="display: none;">
        <div class="cover">
            <div class="front">
                <img src="{!! asset('asset/img/bgcontact.jpg') !!}" alt="">
                <div class="text">
                    <span class="text-1">Let's Build<br>And Play Together</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form action="/postLogin" method="POST">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="bi bi-envelope-fill"></i>
                                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <i class="bi bi-shield-lock-fill"></i>
                                <input type="password" name="password" id="password" placeholder="Enter your password"
                                    required>
                            </div>
                            <div class="button input-box">
                                <input type="submit" value="Login">
                            </div>
                            <div class="text sign-up-text">Don't have an account? <label><a href="/signup">Signup
                                        now</a></label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</body>

</html>

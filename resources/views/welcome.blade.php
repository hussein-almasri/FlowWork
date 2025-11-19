<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة Wilcom</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #B0D6EEff;
            font-family: "Tajawal", sans-serif;
        }
        .card {
            border-radius: 25px;
            padding: 35px;
            width: 420px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.08);
        }
        .logo img {
            width: 110px;
            margin-bottom: 15px;
        }
        .btn-custom {
            padding: 12px;
            font-size: 16px;
            border-radius: 12px;
            font-weight: bold;
        }
        .btn-login {
            background: #1e63e9;
            color: white;
        }
        .btn-login:hover {
            background: #1555c7;
        }
        .btn-register {
            background: #1fa561;
            color: white;
        }
        .btn-register:hover {
            background: #17844e;
        }
    </style>
</head>

<body>

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card text-center bg-white">

        <!-- شعار -->
        <div class="logo">
            <img src="images/logo.png" alt="Logo">
        </div>

        <!-- عنوان -->
        <h4 class="fw-bold mb-4">مرحباً بك</h4>

        <!-- أزرار -->
        <a href="/login" class="btn btn-custom btn-login w-100 mb-3">تسجيل دخول</a>
        <a href="/register" class="btn btn-custom btn-register w-100">إنشاء حساب</a>

    </div>
</div>

</body>
</html>

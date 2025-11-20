<!doctype html>
<html lang="ar">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <style>
    body{
      margin:0;
      font-family:Arial, sans-serif;
      background:#eef2f4;
      display:flex;
      justify-content:center;
      align-items:center;
      height:100vh;
    }
    .form-box{
      background:white;
      padding:30px;
      width:300px;
      border-radius:10px;
      box-shadow:0 4px 15px rgba(0,0,0,0.1);
      text-align:center;
    }
    h3 {
      margin-top:0;
      color:#1e40af;
      margin-bottom:15px;
    }
    input{
      width:100%;
      padding:10px;
      margin:8px 0;
      border-radius:6px;
      border:1px solid #ccc;
    }
    button{
      width:100%;
      padding:10px;
      background:#16a34a;
      color:#fff;
      border:none;
      border-radius:6px;
      font-weight:bold;
      cursor:pointer;
      margin-top:10px;
    }
    button:hover {
      background:#15803d;
    }
  </style>
</head>
<body>

  <div class="form-box">
    <h3>إنشاء حساب</h3>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <input type="text" name="name" placeholder="الاسم الكامل" required>

      <input type="email" name="email" placeholder="البريد الإلكتروني" required>

      <input type="password" name="password" placeholder="كلمة المرور" required>

      <input type="password" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>

      <button type="submit">Register</button>
    </form>
  </div>

</body>
</html>
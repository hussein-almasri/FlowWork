@if ($errors->any())
    <div style="background:#ffdddd;padding:10px;border-radius:6px;margin-bottom:10px;color:#900;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login / Signup</title>

  <link rel="stylesheet" href="/css/auth.css">
</head>

<body>

  <div class="wrapper">

    <div class="title-text">
      <div class="title login">Login Form</div>
      <div class="title signup">Signup Form</div>
    </div>

    <div class="form-container">

      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">

        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Signup</label>

        <div class="slider-tab"></div>
      </div>

      <div class="form-inner">

        {{-- LOGIN FORM --}}
        <form action="{{ route('login.post') }}" method="POST" class="login">
          @csrf

          <div class="field">
            <input type="email" name="email" placeholder="Email Address" required>
          </div>

          <div class="field">
            <input type="password" name="password" placeholder="Password" required>
          </div>

          <div class="pass-link"><a href="#">Forgot password?</a></div>

          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login">
          </div>

          <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
        </form>

        {{-- SIGNUP FORM --}}
        <form action="{{ route('register.post') }}" method="POST" class="signup">
            @csrf

            <div class="field">
                <input type="text" name="name" placeholder="Full Name" required>
            </div>

            <div class="field">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>

            <div class="field">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="field">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <div class="field btn">
                <div class="btn-layer"></div>
                <input type="submit" value="Signup">
            </div>
        </form>
      </div> {{-- form-inner --}}
    </div> {{-- form-container --}}
  </div> {{-- wrapper --}}

  <script src="/js/auth.js"></script>

</body>
</html>
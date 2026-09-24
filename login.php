<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nova — Welcome Back</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Inter, Arial, sans-serif;
      background: #0b0d12;
      color: #fff;
      min-height: 100vh;
    }

    .page {
      min-height: 100vh;
      display: flex;
    }

    /* LEFT SIDE */
    .hero {
      width: 55%;
      min-height: 100vh;
      padding: 50px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background:
        radial-gradient(circle at 70% 30%, rgba(124, 92, 255, .35), transparent 35%),
        radial-gradient(circle at 20% 80%, rgba(0, 212, 255, .18), transparent 30%),
        #11141c;
      position: relative;
      overflow: hidden;
    }

    .hero::before {
      content: "";
      position: absolute;
      width: 450px;
      height: 450px;
      border: 1px solid rgba(255,255,255,.08);
      border-radius: 50%;
      right: -150px;
      top: 15%;
    }

    .hero::after {
      content: "";
      position: absolute;
      width: 650px;
      height: 650px;
      border: 1px solid rgba(255,255,255,.05);
      border-radius: 50%;
      right: -250px;
      top: 5%;
    }

    .logo {
      font-size: 24px;
      font-weight: 800;
      letter-spacing: -1px;
      z-index: 2;
    }

    .logo span {
      color: #8b6cff;
    }

    .hero-content {
      max-width: 620px;
      z-index: 2;
    }

    .badge {
      display: inline-block;
      padding: 8px 14px;
      margin-bottom: 25px;
      border: 1px solid rgba(255,255,255,.12);
      background: rgba(255,255,255,.05);
      border-radius: 50px;
      font-size: 13px;
      color: #c7c9d1;
    }

    .hero h1 {
      font-size: clamp(45px, 5vw, 78px);
      line-height: 1;
      letter-spacing: -4px;
      margin-bottom: 25px;
    }

    .hero h1 span {
      background: linear-gradient(90deg, #9c7cff, #48d7ff);
      color: transparent;
    }

    .hero p {
      max-width: 500px;
      color: #a8abb6;
      font-size: 18px;
      line-height: 1.7;
    }

    .footer-text {
      color: #686c78;
      font-size: 13px;
      z-index: 2;
    }

    /* LOGIN SIDE */
    .login-section {
      width: 45%;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px;
      background: #0b0d12;
    }

    .login-card {
      width: 100%;
      max-width: 430px;
    }

    .login-card h2 {
      font-size: 34px;
      margin-bottom: 10px;
      letter-spacing: -1px;
    }

    .subtitle {
      color: #858894;
      margin-bottom: 35px;
      line-height: 1.5;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-size: 14px;
      color: #c9cbd2;
      margin-bottom: 8px;
    }

    input {
      width: 100%;
      padding: 15px 16px;
      border-radius: 10px;
      border: 1px solid #292d38;
      background: #151820;
      color: white;
      outline: none;
      font-size: 15px;
      transition: .2s;
    }

    input:focus {
      border-color: #8065ff;
      box-shadow: 0 0 0 3px rgba(128,101,255,.12);
    }

    .password-wrapper {
      position: relative;
    }

    .password-wrapper input {
      padding-right: 60px;
    }

    .show-password {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      border: none;
      background: none;
      color: #858894;
      cursor: pointer;
      font-size: 13px;
    }

    .options {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 5px 0 25px;
      font-size: 13px;
    }

    .remember {
      display: flex;
      align-items: center;
      gap: 8px;
      color: #858894;
    }

    .remember input {
      width: auto;
      accent-color: #8065ff;
    }

    .options a,
    .signup a {
      color: #9b82ff;
      text-decoration: none;
    }

    .login-btn {
      width: 100%;
      padding: 15px;
      border: none;
      border-radius: 10px;
      background: linear-gradient(135deg, #8065ff, #6245e8);
      color: white;
      font-size: 15px;
      font-weight: 700;
      cursor: pointer;
      transition: .2s;
    }

    .login-btn:hover {
      transform: translateY(-1px);
      box-shadow: 0 8px 25px rgba(111, 80, 255, .25);
    }

    .divider {
      display: flex;
      align-items: center;
      gap: 15px;
      margin: 25px 0;
      color: #5e626d;
      font-size: 12px;
    }

    .divider::before,
    .divider::after {
      content: "";
      flex: 1;
      height: 1px;
      background: #252933;
    }

    .social-login {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }

    .social-btn {
      padding: 13px;
      background: #151820;
      border: 1px solid #292d38;
      color: #ddd;
      border-radius: 10px;
      cursor: pointer;
      font-size: 14px;
      transition: .2s;
    }

    .social-btn:hover {
      background: #1b1e27;
      border-color: #3a3e4b;
    }

    .signup {
      text-align: center;
      color: #777b86;
      margin-top: 28px;
      font-size: 14px;
    }

    .message {
      margin-top: 15px;
      padding: 12px;
      border-radius: 8px;
      display: none;
      font-size: 13px;
      text-align: center;
      background: rgba(70, 200, 130, .1);
      color: #6ee7a5;
      border: 1px solid rgba(70, 200, 130, .2);
    }

    /* RESPONSIVE */
    @media (max-width: 850px) {
      .page {
        flex-direction: column;
      }

      .hero,
      .login-section {
        width: 100%;
      }

      .hero {
        min-height: 480px;
        padding: 35px;
      }

      .login-section {
        min-height: auto;
        padding: 50px 25px;
      }

      .hero h1 {
        font-size: 48px;
      }
    }

    @media (max-width: 450px) {
      .hero {
        min-height: 420px;
        padding: 25px;
      }

      .hero h1 {
        font-size: 40px;
        letter-spacing: -2px;
      }

      .hero p {
        font-size: 16px;
      }

      .social-login {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>

  <main class="page">

    <!-- LANDING / HERO -->
    <section class="hero">

      <div class="logo">
        No<span>va</span>
      </div>

      <div class="hero-content">
        <div class="badge">
          ✦ The future starts here
        </div>

        <h1>
          Build something<br>
          <span>extraordinary.</span>
        </h1>

        <p>
          A modern workspace designed to help you turn your ideas
          into reality. Create, collaborate, and move faster.
        </p>
      </div>

      <div class="footer-text">
        © 2026 Nova. All rights reserved.
      </div>

    </section>


    <!-- LOGIN -->
    <section class="login-section">

      <div class="login-card">

        <h2>Welcome back</h2>

        <p class="subtitle">
          Enter your details to access your account.
        </p>

        <form id="loginForm">

          <div class="form-group">
            <label for="email">Email address</label>
            <input
              type="email"
              id="email"
              placeholder="you@example.com"
              required
            />
          </div>

          <div class="form-group">
            <label for="password">Password</label>

            <div class="password-wrapper">
              <input
                type="password"
                id="password"
                placeholder="Enter your password"
                required
              />

              <button
                type="button"
                class="show-password"
                id="togglePassword"
              >
                Show
              </button>
            </div>
          </div>

          <div class="options">

            <label class="remember">
              <input type="checkbox" />
              Remember me
            </label>

            <a href="#">Forgot password?</a>

          </div>

          <button type="submit" class="login-btn">
            Sign in
          </button>

          <div class="message" id="message">
            Login submitted successfully!
          </div>

        </form>

        <div class="divider">
          OR CONTINUE WITH
        </div>

        <div class="social-login">
          <button class="social-btn">
            Google
          </button>

          <button class="social-btn">
            GitHub
          </button>
        </div>

        <div class="signup">
          Don't have an account?
          <a href="#">Create account</a>
        </div>

      </div>

    </section>

  </main>


  <script>
    // Show / hide password
    const password = document.getElementById("password");
    const togglePassword = document.getElementById("togglePassword");

    togglePassword.addEventListener("click", () => {
      const isPassword = password.type === "password";

      password.type = isPassword ? "text" : "password";
      togglePassword.textContent = isPassword ? "Hide" : "Show";
    });


    // Demo login handler
    const loginForm = document.getElementById("loginForm");
    const message = document.getElementById("message");

    loginForm.addEventListener("submit", (event) => {
      event.preventDefault();

      message.style.display = "block";

      setTimeout(() => {
        message.style.display = "none";
      }, 3000);
    });
  </script>

</body>
</html>

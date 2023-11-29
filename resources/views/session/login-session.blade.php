<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<style>
  /* Base styles */
  body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
  }

  /* Flex container for centering the login card */
  .flex-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 20px;
    box-sizing: border-box;
  }

  /* Card styling */
  .card {
    background: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 4px 4px 4px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 400px;
  }

  /* Input field styling */
  input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
  }

  /* Button styling */
  .login-button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
  }

  /* Responsive styles */
  @media (max-width: 767px) {
    .card {
      margin: 20px;
    }
  }
</style>
</head>
<body>

<div class="flex-container">
  <div class="card">
    <h2 style="text-align: center;">Taripar Hub</h2>
    <form method="POST" action="/session">
      @csrf
      <!-- Token for CSRF protection should be included within form -->
      <input type="email" name="email" id="email" placeholder="Email" required>
      @error('email')
      <p class="text-danger text-xs mt-2"> {{$message}}</p>
      @enderror
      <input type="password" name="password" id="password" placeholder="Password" required>
      @error('password')
      <p class="text-danger text-xs mt-2"> {{$password}}</p>
      @enderror
      <div style="margin: 10px 0;">
        <input type="checkbox" id="rememberMe" checked>
        <label for="rememberMe">Remember me</label>
      </div>
      <button type="submit" class="login-button">Login</button>
    </form>
    <p style="text-align: center;">
      Don't have an account?
      <a href="register" style="color: #4CAF50; font-weight: bold;">Sign up</a>
    </p>
  </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký / Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: blanchedalmond;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .form-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }
        .form-header button {
            width: 50%;
            padding: 10px;
            cursor: pointer;
            border: none;
            background-color: transparent;
        }
        .form-header button.active {
            border-bottom: 2px solid orange;
            color: orange;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        #title {
            display: block;
        }
    </style>
</head>
<body>
<div class="form-container">
    <div class="form-header">
        <button id="signup-btn" onclick="toggleForm('signup')">Sign Up</button>
        <button id="login-btn" class="active" onclick="toggleForm('login')">Log In</button>
    </div>

    <form id="login-form">
        <div class="form-group mb-3">
            <label for="login-email">Email address</label>
            <input type="email" class="form-control" id="login-email" placeholder="Enter email">
        </div>
        <div class="form-group mb-3">
            <label for="login-password">Password</label>
            <input type="password" class="form-control" id="login-password" placeholder="Enter password">
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="login-remember">
            <label class="form-check-label" for="login-remember">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">Log In</button>
    </form>

    <form id="signup-form" style="display: none;">
        <div class="form-group mb-3">
            <label for="signup-name">Full Name</label>
            <input type="text" class="form-control" id="signup-name" placeholder="Enter full name">
        </div>
        <div class="form-group mb-3">
            <label for="signup-email">Email address</label>
            <input type="email" class="form-control" id="signup-email" placeholder="Enter email">
        </div>
        <div class="form-group mb-3">
            <label for="signup-password">Password</label>
            <input type="password" class="form-control" id="signup-password" placeholder="Enter password">
        </div>
        <div class="form-group mb-3">
            <label for="signup-confirm-password">Confirm Password</label>
            <input type="password" class="form-control" id="signup-confirm-password" placeholder="Confirm password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function toggleForm(form) {
        const loginForm = document.getElementById('login-form');
        const signupForm = document.getElementById('signup-form');
        const loginBtn = document.getElementById('login-btn');
        const signupBtn = document.getElementById('signup-btn');

        if (form === 'login') {
            loginForm.style.display = 'block';
            signupForm.style.display = 'none';
            loginBtn.classList.add('active');
            signupBtn.classList.remove('active');
        } else {
            loginForm.style.display = 'none';
            signupForm.style.display = 'block';
            loginBtn.classList.remove('active');
            signupBtn.classList.add('active');
        }
    }
</script>
</body>
</html>

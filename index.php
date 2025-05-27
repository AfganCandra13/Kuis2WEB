
<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #2c3e50;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-weight: bold;
            font-size: 16px;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #f39c12;
        }

        .container {
            text-align: center;
            margin-top: 60px;
        }

        h2 {
            color: #2c3e50;
        }

        p {
            color: #555;
        }
    </style>
</head>
<body>

<nav>
    <a href="auth/login.php">Login User</a>
    <a href="admin/admin_login.php">Login Admin</a>
    <a href="auth/register.php">Register</a>
</nav>

<div class="container">
    <h2>Selamat Datang di Sistem User/Admin</h2>
    <p>Silakan login atau register untuk melanjutkan.</p>
</div>

</body>
</html>
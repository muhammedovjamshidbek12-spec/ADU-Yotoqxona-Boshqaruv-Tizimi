<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirish | ADU Yotoqxona Boshqaruv Tizimi</title>
    <style>
        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            background: white;
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 420px;
            text-align: center;
        }

        .login-container h1 {
            color: #1e3c72;
            margin-bottom: 5px;
            font-size: 24px;
        }

        .login-container .subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: #2a5298;
        }

        button {
            background: #2a5298;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 15px;
            transition: 0.3s;
        }

        button:hover {
            background: #1e3c72;
        }

        .student-link {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .student-link a {
            color: #2a5298;
            text-decoration: none;
            font-weight: 600;
        }

        .student-link a:hover {
            text-decoration: underline;
        }

        .uni-name {
            font-size: 13px;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Admin kirish</h1>
        <div class="subtitle">Andijon Davlat Universiteti<br>Yotoqxona Boshqaruv Tizimi</div>

        <form action="login process.php" method="POST">
            <input type="text" name="username" placeholder="Login" required />
            <input type="password" name="password" placeholder="Parol" required />
            <button type="submit" name="login">Kirish</button>
        </form>

        <div class="student-link">
            <p>Talaba sifatida</p>
            <a href="Student/signup.html">Ro'yxatdan o'tish</a>
        </div>

        <div class="uni-name">
            Andijon Davlat Universiteti © 2025
        </div>
    </div>
</body>

</html>

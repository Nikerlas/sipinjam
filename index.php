<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIPINJAM - Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        .container {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }
        .login-box {
            display: flex;
            width: 80%; /* Adjusted to fit laptop screens */
            max-width: 1200px; /* Limit max width for larger screens */
            height: 500px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .left {
            flex: 1;
            background-color: #0a72d7;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            color: white;
            padding: 30px;
            position: relative;
        }
        .left img {
            width: 100px;
            position: absolute;
            top: 30px;
        }
        .left h1 {
            font-size: 24px;
            margin-top: 120px;
        }
        .left p {
            font-size: 16px;
            margin-top: 10px;
        }
        .left .building {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .right {
            flex: 1;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .right h2 {
            margin-bottom: 20px;
            font-size: 22px;
            color: #333;
        }
        .right input[type="text"],
        .right input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .right button {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #ffc107;
            color: white;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
        }
        .right button:hover {
            background-color: #e0a800;
        }

        /* Media Query for Laptop Screens */
        @media only screen and (max-width: 1366px) {
            .login-box {
                width: 90%;
                height: 450px;
            }
            .left h1 {
                font-size: 20px;
            }
            .right h2 {
                font-size: 20px;
            }
            .left img {
                width: 90px;
            }
        }

        /* Media Query for Smaller Screens */
        @media only screen and (max-width: 768px) {
            .login-box {
                flex-direction: column;
                height: auto;
            }
            .left, .right {
                flex: none;
                width: 100%;
                height: auto;
                border-radius: 0;
            }
            .left img {
                width: 80px;
            }
            .left h1 {
                font-size: 18px;
                margin-top: 80px;
            }
            .right h2 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-box">
        <div class="left">
            <img src="path-to-your-logo.png" alt="Logo">
            <h1>SIPINJAM</h1>
            <p>Sistem Peminjaman Tempat<br>Politeknik Negeri Semarang</p>
            <img src="path-to-your-building.png" alt="Gedung" class="building">
        </div>
        <div class="right">
            <h2>WELCOME!</h2>
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="PENGGUNA SIPIT" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">SIGN IN</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

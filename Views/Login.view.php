<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-POSYANDU - LOGIN</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color:rgb(159, 159, 159);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .login-container {
            background-color: white;
            border-radius: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 600px;
            padding: 30px;
            text-align: center;
        }
        
        .login-header {
            margin-bottom: 25px;
        }
        
        .login-header h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 10px;
        }
        
        .login-form .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        
        .login-form label {
            display: block;
            margin-bottom: 8px;
            color: #2c3e50;
            font-weight: 500;
        }
        
        .login-form input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            transition: border-color 0.3s;
        }
        
        .login-form input:focus {
            outline: none;
            border-color:rgb(41, 219, 255);
        }
        
        .login-button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-left: px;
            background-color:rgb(41, 219, 255);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        
        .login-button:hover {
            transition: 0.5s;
            background-color:rgb(0, 123, 148);
        }
        .register {
            text-decoration-line: none;
            margin-left: px;
            color: rgb(41, 219, 255);
            transition: 0.5s;
        }

        .register:hover {
            transition: 0.5s;
            color: rgb(0, 123, 148);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>E-POSYANDU</h1>
            <p>LOGIN</p>
        </div>
        
        <form class="login-form" action="" method="post">
            <div class="input-group">
                <input type="text" id="username" placeholder="Masukkan username" name="username">
            </div>
            
            <div class="input-group">
                <input type="password" id="password" placeholder="Masukkan password" name="password">
            </div>

            <a href="Register.view.php" class="register"></a>
            
            <button type="submit" class="login-button">MASUK</button>
        </form>
    </div>
</body>
</html>
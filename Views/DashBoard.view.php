<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Posyandu Dashboard</title>
    <script src="script.js"> </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        aside {
            width: 250px;
            background: #333;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .profile {
            padding: 20px;
            border-bottom: 1px solid #555;
            text-align: center;
            background-color: #555;
        }

        .profile img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #555;
            display: block;
            margin: 0 auto 10px;
        }

        .profile span {
            display: block;
            margin-top: 5px;
            background: orange;
            padding: 9px;
            border-radius: 7px;
            font-size: 20px;
            font-weight: 800;
        }

        nav {
            padding: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-bottom: 15px;
        }

        nav ul li a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #fff;
            text-decoration: none;
            padding: 8px 10px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        nav ul li a i {
            font-style: normal;
            width: 24px;
            text-align: center;
            font-size: 18px;
        }


        .content {
            display: none;
            padding: 20px;
        }

        .content.active {
            display: block;
            gap: 20px;
        }
        .MainContent {
            display: none;
            padding: 20px;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .MainContent.active {
            display: flex;
        }
                .bottom-menu {
            padding: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .bottom-menu ul {
            list-style: none;
        }

        .bottom-menu li {
            margin-bottom: 10px;
        }

        .bottom-menu li a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            text-decoration: none;
            padding: 8px 10px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .bottom-menu li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .bottom-menu li a i {
            font-style: normal;
            width: 24px;
            text-align: center;
            font-size: 18px;
        }





        .back-button {
            background: #6c757d;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            align-self: flex-start;
            transition: background 0.3s;

        }
        
        .back-button:hover {
            background: #5a6268;
        }

        main {
            flex: 1;
            background: #fff;
        }

        .topbar {
            background-color: DeepSkyBlue;
            color: white;
            padding: 1px 20px;
            height: 93px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 20px;
            font-weight: 800;
        }



        .card {
            flex: 1;
            color: white;
            padding: 20px;
            border-radius: 5px;
            position: relative;
            text-decoration: none;
            transition: 0.5s;
            cursor: pointer;
        }

        .card:hover {
            transition: 0.5s;
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card.blue { background: #007bff; }
        .card.orange { background: #fd7e14; }
        .card.green { background: #28a745; }
        .card.red { background: #dc3545; }

        .card .text {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card .more {
            background: rgba(255,255,255,0.3);
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            display: inline-block;
        }

        .book-table-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        
        .table-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            align-items: center;
        }
        
        .add-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        
        .table-controls {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            align-items: center;
        }
        
        .entries-info {
            font-size: 14px;
            color: #666;
        }
        
        .search-box input {
            padding: 5px 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        
        tr:hover {
            background-color: #f9f9f9;
        }
        
        .action-icon {
            color: #333;
            text-decoration: none;
            font-size: 16px;
        }
        
        .table-footer {
            font-size: 14px;
            color: #666;
            text-align: right;
        }

        .add-book-container {
            max-width: 100%;
            margin: 0 auto;
            background-color:rgb(255, 255, 255);
            border-radius: 8px;
            box-shadow: 0 2px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .page-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .page-title {
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .form-section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 18px;
            color: #2c3e50;
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 1px solid #eee;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-input:focus {
            border-color: #3498db;
            outline: none;
        }

        .form-readonly {
            background-color: #f9f9f9;
            color: #777;
        }

        .section-divider {
            height: 1px;
            background-color: #eee;
            margin: 30px 0;
            border: none;
        }

        /* Button Styles */
        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 30px;
        }

        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button-primary {
            background-color: #3498db;
            color: white;
        }

        .button-primary:hover {
            background-color: #2980b9;
        }

        .button-secondary {
            background-color: #e74c3c;
            color: white;
        }

        .button-secondary:hover {
            background-color: #c0392b;
        }

        .welcome {
            text-align: center;
            margin-top: 20px;
        }

        .welcome1 {
            text-align: center;
            margin-top: 30px;
        }


    </style>
</head>
<body>
    <aside>
        <div>
            <div class="profile">
                <span>ADMINISTRATOR</span>
            </div>
            <nav>
                <ul>
                    <li><a href="DashBoard.view.php"><i>🏠</i> Dashboard</a></li>
                    <li><a href="Kader.php"><i>📁</i> Kader </a></li>
                    <li><a href="Pendaftaran-Balita.php"><i>📚</i> Pendaftaran Balita</a></li>
                    <li><a href="Pemeriksaan-Balita.php"><i>📝</i> Pemeriksaan Balita</a></li>
                    <li><a href="laporan.php"><i>📄</i> Laporan</a></li>
                </ul>
            </nav>
        </div>
        <ul class="bottom-menu">
            <li class="pengguna"><a href="#"> <i>👤</i> Akun</a></li>
            <li class="LogOut"><a href="Login.php" > <i>🔓</i>  Log Out</a> </li>
        </ul>
    </aside>
    <main>
        <div class="topbar">
            <div><strong>E-POSYANDU</strong></div>
        </div>

        <body>
    <form action="" method="post">
        <div class="welcome">
            <h1><strong>SELAMAT DATANG!</strong> </h1>
            </div>
            <div class="welcome1">
                <h1><strong>LAYANAN E-POSYANDU TERPADU</strong></h1>
            </div>
        </div>
</body>

    <div id="BukuPapan" class="book-table-container content ">

    </main>
</body>
</html>

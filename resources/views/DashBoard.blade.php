<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: rgb(0, 173, 253);
            color: #fff;
            position: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }

        .sidebar h2 {
            margin-bottom: 30px;
        }

        .sidebar ul {
            list-style: none;
            width: 100%;
        }

        .sidebar ul li {
            width: 100%;
        }

        .sidebar ul li a {
            display: block;
            padding: 15px;
            color: #fff;
            text-decoration: none;
            text-align: left;
            width: 100%;
            transition: background 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #181717;
        }

        .sidebar ul li a i {
            margin-right: 10px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
            overflow: auto;
        }

        header {
            margin-bottom: 20px;
        }

        header h1 {
            margin-bottom: 10px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;

        }

        .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            flex: 1;
            height: 45vh;
        }

        .card a,
        button {
            margin-top: 70px;
            display: flex;
            justify-content: center;
            text-decoration: none;
        }

        a input:hover {
            cursor: pointer;
        }

        .card h3 {
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
            margin-top: 20px;
        }

        .card p {
            text-align: justify;
            margin-left: 65px;
        }


        input[type="button"] {
            border-radius: 30px;
            width: auto;
            padding: 10px 20px 10px 20px;
            border: solid 1px rgba(52, 188, 252, 0.521);
            background-color: rgb(0, 173, 253);
            color: #fff;
        }

        input[type="button"]:hover {
            background-color: rgb(0, 102, 255);
        }

        .btn-primary3 {
            margin-top: 40px;
        }

        .btn-primary4 {
            margin-top: 20px;
        }

        .btn-primary5 {
            margin-top: 20px;
        }

        .btn-primary1 {
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="service.html">Liste des Services</a></li>
            <li><a href="liste-des-citoyen.html"> Liste des citoyens</a></li>
            <li><a href="statistic.html"> Statistic</a></li>
            <li><a href="historic.html"> Historique</a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
            <h1>LISTE DES SERVICES</h1>
            <p>Bienvenue dans Admin</p>
        </header>
        <section class="cards">
            <div class="card">
                <h3>Service d'aministration Publique</h3>
                <p>Voici la description du service <br><br> -Procedure a suivre <br> -Etape a suivre </p>
                <a href="#">
                    <input type="button" value="Voir plus" class="btn btn-primary">
                </a>
            </div>
            <div class="card">
                <h3>Service fiscaux</h3>
                <p>Voici la description du service <br><br> -Procedure a suivre <br> -Etape a suivre </p>
                <a href="#">
                    <input type="button" value="Voir plus" class="btn btn-primary1">
                </a>
            </div>
            <div class="card">
                <h3>Energie et Eau</h3>
                <p>Voici la description du service <br> -Procedure a suivre <br> -Etape a suivre </p>
                <a href="#">
                    <input type="button" value="Voir plus" class="btn btn-primary3">
                </a>
            </div>
            <div class="card">
                <h3>Service de Deffense Nationale</h3>
                <p>Voici la description du service <br><br> -Procedure a suivre <br> -Etape a suivre </p>
                <a href="#">
                    <input type="button" value="Voir plus" class="btn btn-primary">
                </a>
            </div>
            <div class="card">
                <h3>Securite et Justice</h3>
                <p>Voici la description du service <br>-Procedure a suivre <br> -Etape a suivre </p>
                <a href="#">
                    <input type="button" value="Voir plus" class="btn btn-primary4">
                </a>
            </div>
            <div class="card">
                <h3>Poste et telecommunication</h3>
                <p>Voici la description du service <br>-Procedure a suivre <br> -Etape a suivre </p>
                <a href="#">
                    <input type="button" value="Voir plus" class="btn btn-primary5">
                </a>
            </div>
        </section>
    </div>
</body>
</html>

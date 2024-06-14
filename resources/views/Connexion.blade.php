<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Connexion</title>
    <style>
        body {
            background-color: skyblue;
            background-repeat: no-repeat;
            background-size: cover;
        }

        form {
            background-color: white;
            background-repeat: no-repeat;
            background-size: cover;
            width: auto;
            border-radius: 10px;
            justify-content: center;
            display: inline;
            align-items: center;
            height: 300px;
            width: 450px;
            padding: 30px;
        }

        div {
            justify-content: center;
            display: flex;
            align-items: center;
            margin-top: 100px;
        }

        input[type="text"],
        [type="password"] {
            width: 400px;
            height: auto;
            border-radius: 20px;
            box-shadow: 5px 10px 8px #888888;
            text-align: center;
        }

        input[type="submit"] {
            border-radius: 20px;
            box-shadow: 5px 10px 8px #888888;
            width: 130px;
        }

    </style>
</head>
<body>
    <div>
        <form action="" method="post">
            <h1>Se connecter</h1>
            <label for="">Votre nom</label><br>
            <input type="text" name="nom"><br>
            <label for="">Mot de passe</label><br>
            <input type="password" name="pdw">
            <br><br>
            <input type="submit" value="Se connecter" name="ajouter" class="btn btn-primary">
        </form>
    </div>
</body>
</html>

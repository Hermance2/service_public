<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>CitizenConnect-Connexion-Administrateur</title>
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
            height: 350px;
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
            height: 50px;
            border-radius: 5px;
            box-shadow: 5px 5px 8px #888888;
            
        }

        input[type="submit"],
        [type="button"] {
            border-radius: 5px;
            box-shadow: 5px 5px 8px #888888;
            width: auto;
        }

    </style>
</head>
<body>
    <a href="/SAP"><input type="button" value="Retour" class="btn btn-primary"></a>
    <div>
        <form action="{{url('/citoyen/ajout')}}" method="post">
        @csrf
            <h1>Se connecter</h1>
            <label for="">Votre nom</label><br>
            <input type="text" name="nom" required><br>
            <label for="">Mot de passe</label><br>
            <input type="password" name="pdw" >
            <br><br>
            <input type="submit" value="Se connecter" name="ajouter" class="btn btn-success">
            <a href="{{url('/citoyen/ajout')}}"><input type="button" value="Creer un compte" name="nouveau" class="btn btn-primary"></a>
        </form>
    </div>
</body>
</html>

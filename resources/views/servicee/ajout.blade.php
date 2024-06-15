<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CitizenConnect-Ajout-Nouvelle-Service</title>
    <style>
        body {
            background-image: linear-gradient(skyblue, blue);
            background-size: cover;
            background-repeat: no-repeat; 
        }
        form {
            background-color: white;
            background-repeat: no-repeat;
            background-size: cover;
            box-shadow: 5px 5px 8px #888888;
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

        input[type="text"] {
            width: 400px;
            height: auto;
            border-radius: 10px;
            box-shadow: 5px 5px 8px #888888;
        }

        input[type="submit"] {
            border-radius: 10px;
            box-shadow: 5px 5px 8px #888888;
            width: 130px;
        }

    </style>
</head>
<body>
    <div>
        <form action="/ajout/traitement" method="post">
            @csrf
            <h1>Ajouter une nouvelle service</h1>
            <label for="">Nom du service</label><br>
            <input type="text" name="nom_service">
            @error('nom_service')
                {{$message}}
            @enderror
            <br>
            <label for="">Lieu</label><br>
            <input type="text" name="lieu">
            @error('nom_service')
                {{$message}}
            @enderror
            <br><br>
            <input type="submit" value="Enregistrer" name="enregistrer" class="btn btn-primary">
        </form>
    </div>
</body>
</html>

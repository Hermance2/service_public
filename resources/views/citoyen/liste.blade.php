<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CitizenConnect-Liste-Des-Clients</title>
    <style>
        #overflow {
            height: 460px;
            width: 1300px;
            overflow-y: scroll;
        }

    </style>
</head>
<body>
    <div>
        <table class="table table-hover" Id="overflow">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>CIN</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($citoyens as $citoyen)
                <tr>
                    <td>{{$citoyen->nomCitoyen}}</td>
                    <td>{{$citoyen->prenomCitoyen}}</td>
                    <td>{{$citoyen->email}}</td>
                    <td>{{$citoyen->numCIN}}</td>
                    <td>{{$citoyen->telephone}}</td>
                    <td>{{$citoyen->adresse}}</td>
                    <td>
                        <input type="button" value="Modifier" class="btn btn-primary">
                        <input type="button" value="Supprimer" class="btn btn-danger">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

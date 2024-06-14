<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CitizenConnect-Accueille</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        header {
            background-color: linear-gradient(Blue, skyblue);
            background-image: linear-gradient(Blue, skyblue);
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
            height: 100px;
        }

        article {
            float: left;
            padding: 20px;
            width: 70%;
            background-color: rgb(250, 250, 250);
            height: 520px;
        }

        section::after {
            content: "";
            display: table;
            clear: both;
        }

        footer {
            background-color: rgb(10, 10, 10);
            padding: 10px;
            text-align: center;
            color: white;
            height: 60px;
        }

        div {
            justify-content: left;
            align-items: center;
            padding: 30px;
            margin: auto;
            background-image: rgb(245, 245, 230);
            background-color: rgb(245, 245, 230);
            width: 250px;
            height: 350px;
            border-radius: 20px;
            display: flex;
            align-items: flex-end;
        }

        input[type="button"] {
            border-radius: 20px;
            width: auto;
            display: inline-block;
        }

        select {
            border-radius: 20px;
            width: 200px;
            display: inline-block;
        }

        #retour {
            position: left;
            margin-left: 1200px;
            margin-bottom: 10px;
            margin-top: -9px;
        }

        #overflow {
            height: 460px;
            width: 1300px;
            overflow-y: scroll;
        }

        @media (max-width: 600px) {

            nav,
            article {
                width: 100%;
                height: auto;
            }
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            flex: 1;
            height: auto;
        }

        .card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            flex: 1;
            height: 45vh;
        }

        .card:hover {
            box-shadow: 0 0 20px rgb(0, 0, 0);
            border-radius: 15px;
            flex: 1;
            height: 46vh;
        }

    </style>
</head>
<body>
    <header>
        <h3>CitizenConnect</h3>
    </header>

    <section>
        <article>
            <a href="/"><input type="button" class="btn btn-primary" value="Retour" id="retour"></a>
            <section id="overflow" class="cards">

                <h3>Service d'Adminisration Publique</h3>

                <div class="card">
                    <h4>Service des collectivites Territoriales</h4>
                    <p>Mairie</p>
                    {{-- <select name="Mairie" id="choix">
                        <option value="/ActeDeNaissance">Acte de naissance</option>
                        <option value="valeur2">Acte de dece</option>
                        <option value="valeur3">Acte de mariage et livret de famille</option>
                    </select> --}}
                    <ul id="liens">
                        <li><a href="/ActeDeNaissance">Acte de Naissance</a></li>
                        <li><a href="/ActeDeNaissance">Acte de dece</a></li>
                        <li><a href="/ActeDeNaissance">Acte de mariage et livret de famille</a></li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Service de Securite et Deffense</h3>
                    <p>Police et gendarmerie Nationale</p>
                    <select name="Policemunicipal">
                        <a href="#">
                            <option value="valeur1">000000000</option>
                        </a>
                        <a href="#">
                            <option value="valeur2">000000000</option>
                        </a>
                        <a href="#">
                            <option value="valeur3">000000000</option>
                        </a>
                    </select>
                    <ul id="liens"></ul>
                </div>
                <div class="card">
                    <h3>Service Publique Hospitalliere</h3>
                    <p>Hopitaux Publics</p>
                    <select name="Police municipal" id="choix">
                        <option value="valeur1">000000000</option>
                        <option value="valeur2">000000000</option>
                        <option value="valeur3">000000000</option>
                    </select>
                    <ul id="liens"></ul>
                </div>
            </section>
        </article>
    </section>
    <footer>
        {{-- <p>Copyright 2024</p> --}}
    </footer>
</body>
</html>

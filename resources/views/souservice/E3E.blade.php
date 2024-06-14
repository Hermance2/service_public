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
                    Mairie
                    <select name="Mairie" id="">
                        <a href="#"><option value="valeur1">Acte de naissance</option></a>
                        <a href="#"><option value="valeur2">Acte de dece</option></a>
                        <a href="#"><option value="valeur3">Acte de mariage et livret de famille</option></a>
                    </select>
                    Prefecture
                    <select name="Prefecture" id="">
                        <a href="#"><option value="valeur1"></option></a>
                        <a href="#"><option value="valeur2">Demande d'acte de dece</option></a>
                        <a href="#"><option value="valeur3">Demande d'acte de mariage et livret de famille</option></a>
                    </select>
                    Police municipal
                    <select name="Police municipal" id="">
                        <a href="#"><option value="valeur1"></option></a>
                        <a href="#"><option value="valeur2">Demande d'acte de dece</option></a>
                        <a href="#"><option value="valeur3">Demande d'acte de mariage et livret de famille</option></a>
                    </select>
                </div>
                <div class="card">
                    <h3>Fonction publique Territorial</h3>
                    <p>Voici la description du service <br>-Procedure a suivre <br> -Etape a suivre </p>
                </div>
                <div class="card">
                    <h3>Hospitalliere</h3>
                    <p>Voici la description du service <br>-Procedure a suivre <br> -Etape a suivre </p>
                </div>
            </section>

        </article>
    </section>
    <footer>
        {{-- <p>Copyright 2024</p> --}}
    </footer>
</body>
</html>

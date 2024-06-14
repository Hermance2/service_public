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
        {{-- <nav>
                <input type="button" value="Accueille"><br>
                <input type="button" value="Service"><br>
                <input type="button" value="Service"><br>
                <input type="button" value="Service"><br>
            </nav> --}}
        <article>
            <section id="overflow" class="cards">
                <div class="card">
                    <h4>Service d'aministration Publique</h4>
                    <p>Voici la description du service <br>-Procedure a suivre <br> -Etape a suivre </p>
                    <a href="#">
                        <input type="button" value="Voir plus" class="btn btn-primary">
                    </a>
                </div>
                <div class="card">
                    <h3>Service fiscaux</h3>
                    <p>Voici la description du service <br>-Procedure a suivre <br> -Etape a suivre </p>
                    <a href="#">
                        <input type="button" value="Voir plus" class="btn btn-primary">
                    </a>
                </div>
                <div class="card">
                    <h3>Energie et Eau</h3>
                    <p>Voici la description du service <br>-Procedure a suivre <br> -Etape a suivre </p>
                    <a href="#">
                        <input type="button" value="Voir plus" class="btn btn-primary">
                    </a>
                </div>
                <div class="card">
                    <h3>Service de Deffense Nationale</h3>
                    <p>Voici la description du service <br>-Procedure a suivre <br> -Etape a suivre </p>
                    <a href="#">
                        <input type="button" value="Voir plus" class="btn btn-primary">
                    </a>
                </div>
                <div class="card">
                    <h3>Securite et Justice</h3>
                    <p>Voici la description du service <br>-Procedure a suivre <br> -Etape a suivre </p>
                    <a href="#">
                        <input type="button" value="Voir plus" class="btn btn-primary">
                    </a>
                </div>
                <div class="card">
                    <h3>Poste et telecommunication</h3>
                    <p>Voici la description du service <br>-Procedure a suivre <br> -Etape a suivre </p>
                    <a href="#">
                        <input type="button" value="Voir plus" class="btn btn-primary">
                    </a>
                </div>
            </section>
        </article>
    </section>
    <footer>
        {{-- <p>Copyright 2024</p> --}}
    </footer>
</body>
</html>

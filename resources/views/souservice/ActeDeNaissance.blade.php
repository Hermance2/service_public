{{-- <!DOCTYPE html>
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

        nav {
            float: left;
            width: 30%;
            height: 300px;
            background: #ccc;
            padding: 20px;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
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
            width: 900px;
            overflow-y: scroll;
        }

        #overflow1 {
            height: 460px;
            width: 400px;
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

    </header>

    <section>
        <article>
            <a href="/"><input type="button" class="btn btn-primary" value="Retour" id="retour"></a>
            <nav id="overflow1">
                Acte de naissance<br>
                Acte de naissance est un
                document juridique attestant de la naissance d'une personne.<br>
                Un acte de naissance est un document juridique authentique attestant de la naissance d'une personnalité juridique.<br>

                L'acte de naissance est également lié aux bulletins de naissance et certificats de naissance ainsi qu'aux copies intégrales ou partielles (extraits) de l'acte authentique.<br>

                Toute naissance doit être déclarée à l'officier d'état civil de la commune où elle a eu lieu dans les trente (30) jours qui suivent la naissance.<br>

                <b>les pièces requises pour avoir un acte de naissance</b><br>
                Les pièces requises figurent dans la liste suivante :

                Un Certificat d’accouchement
                Livret de famille Photocopie CIN de la mère
                Photocopie CIN du déclarant(e)
                Fiche statistique de naissance INSTAT
                Un montant s’élevant à 1000 Ar
                L’acte sera par la suite délivré instantanément<br>
            </nav>
            <section id="overflow" class="cards">

            </section>

        </article>
    </section>
    <footer>
        {{-- <p>Copyright 2024</p> --}}
</footer>
</body>
</html>


<!DOCTYPE html>
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
        height: auto;
        width: 450px;
        padding: 30px;
    }

    div {
        justify-content: center;
        display: flex;
        align-items: center;
        margin-top: 100px;
    }

    input[type="text"] ,[type="email"] {
        width: 400px;
        height: auto;
        border-radius: 10px;
        box-shadow: 5px 5px 8px #888888;
        text-align: center;
    }

    input[type="submit"] {
        border-radius: 10px;
        box-shadow: 5px 5px 8px #888888;
        width: 130px;
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

    /* Create two columns/boxes that floats next to each other */
    nav {
        float: left;
        width: 30%;
        height: 520px;
        background: #ccc;
        padding: 20px;
        overflow-y: scroll;
    }

    /* Style the list inside the menu */
    nav ul {
        list-style-type: none;
        padding: 0;
    }

    article {
        float: left;
        padding: 20px;
        width: 70%;
        background-color: #f1f1f1;
        height: 520px;
        overflow-y: scroll;
    }

    /* Clear floats after the columns */
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


    @media (max-width: 600px) {

        nav,
        article {
            width: 100%;
            height: auto;
        }
    }

</style>
</head>
<body>
    <header>
        <h3>CitizenConnect</h3>
    </header>

    <section>
        <nav>
            Acte de naissance<br>
            Acte de naissance est un
            document juridique attestant de la naissance d'une personne.<br>
            Un acte de naissance est un document juridique authentique attestant de la naissance d'une personnalité juridique.<br>

            L'acte de naissance est également lié aux bulletins de naissance et certificats de naissance ainsi qu'aux copies intégrales ou partielles (extraits) de l'acte authentique.<br>

            Toute naissance doit être déclarée à l'officier d'état civil de la commune où elle a eu lieu dans les trente (30) jours qui suivent la naissance.<br>

            <b>les pièces requises pour avoir un acte de naissance</b><br>
            Les pièces requises figurent dans la liste suivante :

            Un Certificat d’accouchement
            Livret de famille Photocopie CIN de la mère
            Photocopie CIN du déclarant(e)
            Fiche statistique de naissance INSTAT
            Un montant s’élevant à 1000 Ar
            L’acte sera par la suite délivré instantanément<br>
        </nav>

        <article>
            <div>
                <form action="ajout/traitement" method="post">
                    @csrf
                    <h1>Veuillez entrer votre informations</h1>
                    <label for="">Nom</label><br>
                    <input type="text" name="nomCitoyen"><br>
                    <label for="">Premon </label><br>
                    <input type="text" name="prenomCitoyen"><br>
                    <label for="">Adresse precise</label><br>
                    <input type="text" name="adresse"><br>
                    <label for="">Numero du Carte d'Identite National</label><br>
                    <input type="text" name="numCIN"><br>
                    <label for="">Email</label><br>
                    <input type="email" name="email"><br>
                    <label for="">Contact</label><br>
                    <input type="text" name="telephone">
                    <br><br>
                    <input type="submit" value="Enregistrer" name="enregistrer" class="btn btn-primary">
                </form>
            </div>
        </article>
    </section>
    <footer>
        {{-- <p>Copyright 2024</p> --}}
    </footer>
</body>
</html>

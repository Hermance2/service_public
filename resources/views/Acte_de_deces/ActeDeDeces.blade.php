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
        box-shadow: 5px 1px 5px #888888;
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

    input[type="text"],
    [type="email"],
    [type="date"] textarea { 
        width: 400px;
        height: auto;
        border-radius: 5px;
        box-shadow: 5px 1px 5px #888888;
        text-align: center;
    }
     input [type="date"] { 
        width: 400px;
        height: auto;
        border-radius: 5px;
        box-shadow: 5px 1px 5px #888888;
        text-align: center;
    }

    input[type="submit"] {
        border-radius: 10px;
        box-shadow: 5px 1px 5px #888888;
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

    nav {
        float: left;
        width: 30%;
        height: 520px;
        background: #ccc;
        padding: 20px;
        overflow-y: scroll;
    }
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
    <a href="/SAP"><input type="button" value="Retour" class="btn btn-primary"></a>
    <section>
        <nav>
            <h2>Acte de décès</h2><br>
            un acte de décès est un document officiel délivré par les autorités compétentes qui atteste de la mort d'une personne.<br> Ce document est nécessaire pour diverses démarches administratives et juridiques, comme la liquidation de la succession, la résiliation de contrats ou l'obtention de prestations de décès.<br>

            Selon la loi, ils sont tenus de déclarer le décès dans les 24 heures au bureau de l'état civil du lieu du décès.<br> Cela permet au déclarant d'obtenir un acte de décès.<br> Ce dernier est utile et même indispensable pour certaines démarches administratives.<br>

            <b><h4>Les pièces requises lors d'une demande d'acte de décès</h4></b>
            <ul>
            <li>Fiche de constatation de décès délivré par la BMH (Bureau municipal d’hygiène)</li>
            <li>CIN du défunt(e)</li>
            <li>Photocopie CIN du déclarant(e)</li>
            <li>Fiche statistique de décès INSTAT</li>
            <li>À titre subsidiaire : Livret de famille</li>
            <li>Une somme de 1000 Ar</li>
            </ul><br>
            <b>Ce document est délivré instantanément.</b>
            <ul>

                <li>-Un Certificat d’accouchement</li>
                <li>-Livret de famille Photocopie CIN de la mère</li>
                <li>-Photocopie CIN du déclarant(e)</li>
                <li>-Fiche statistique de naissance INSTAT
                <li>-Un montant s’élevant à 1000 Ar</li>
                <li>-L’acte sera par la suite délivré instantanément</li>
            </ul>
        </nav>

        <article>
            <div>
                <form action="/actenaissance/ajout/traitement" method="post">
                    @csrf
                    <h1>Veuillez entrer les informations</h1>
                    <label for="">Le demandeur</label><br>
                    <input type="text" name="citoyens_id"><br>
                    <label for="">Le service </label><br>
                    <input type="text" name="services_id"><br>
                    <label for="">Nom du personne decede(e)</label><br>
                    <input type="text" name="nomdemandeur"><br>
                    <label for="">Prenom du personne decede(e)</label><br>
                    <input type="text" name="prenomdemandeur"><br>
                    <label for="">Date de dece </label><br>
                    <input type="date" name="datedeces"><br>
                    <label for="">Date de naissance </label><br>
                    <input type="date" name="datenaissance"><br>
                    <label for="">Lieu de naissance</label><br>
                    <input type="text" name="lieunaissance"><br>
                    <label for="">Proffesion</label><br>
                    <input type="text" name="mere"><br>
                    <label for="">Nom du pere</label><br>
                    <input type="text" name="pere"><br>
                    <label for="">Nom du mere</label><br>
                    <input type="text" name="mere"><br>
                    <label for="">Nom du conjoint(e)</label><br>
                    <input type="text" name="conjoint"><br>
                    <br><br>
                    <input type="submit" value="Valider" name="valider" class="btn btn-primary">
                </form>
            </div>
        </article>
    </section>
    <footer>
        {{-- <p>Copyright 2024</p> --}}
    </footer>
</body>
</html>

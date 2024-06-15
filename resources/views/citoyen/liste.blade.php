<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
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
        padding-top: 20px;
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
        grid-template-columns: repeat(3, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 20px;

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

    table {
        width: 80%;
        margin: 20px auto;
        margin-top: 10%;
        border-collapse: collapse;
    }

    table,
    thead,
    th {
        border-bottom: none;
        padding: 5rem;
        text-align: center;

    }

    table,
    tr,
    th,
    td {
        border-bottom: none;
        padding: 30px 0 0 0;


    }

    td {

        border: none;
        border-bottom: 1px solid rgba(131, 131, 131, 0.87);
        background-color: rgba(247, 235, 169, 0.151);

    }

    th {
        background-color: #f0f0f0;
        padding: 25px 25px;

    }

    .th-nom {
        border-radius: 50px 0 0 0;
    }

    .th-sous-service {
        border-radius: 0 50px 0 0;
    }

    button {
        padding: 5px 10px;
        margin: 2px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-add {
        background-color: #a8a296;
        color: white;
    }

    .btn-add:hover {
        background-color: #6e6e6ed2;
        color: white;
    }

    .btn-edit {
        background-color: #424242;
        color: white;
    }

    .btn-edit:hover {
        background-color: #000000;
        color: white;
        background-color: #000000;
    }

    .btn-delete {
        background-color: rgba(0, 140, 255, 0.712);
        color: white;
    }

    .btn-delete:hover {
        background-color: rgb(0, 140, 255);
        color: white;

    }

    .btn {
        display: flex;
        justify-content: center;
    }

    .btn2 {
        display: flex;
        justify-content: center;
    }

    .btn3 {
        display: flex;
        justify-content: center;
    }

    .btn4 {
        display: flex;
        justify-content: center;
    }

    .search-container {
        margin-right: 20px;
        display: flex;
        margin-bottom: auto;
    }

    .search-input {
        padding: 8px 12px;
        border: 1px solid #ced4da;
        border-radius: 5px 0 0 5px;
        outline: none;
        font-size: 16px;
        width: 200px;
    }

    .search-button {
        padding: 8px 12px;
        border: 1px solid #ced4da;
        border-left: none;
        border-radius: 0 5px 5px 0;
        background-color: #07c5ff;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        outline: none;
        transition: background-color 0.1s;
    }

    .search-button:hover {
        background-color: #0074e0;
    }

    span {
        color: rgb(0, 173, 253);
    }

    .head {
        padding-top: 30px;
        background-color: rgba(0, 153, 255, 0.089);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-left: 40px;
    }

    .section1 {
        margin-top: -50px;
    }

</style>

<body>
    <div class="sidebar">
        <h2><i class="fa-solid fa-table-columns"></i>Tableau de bord</h2>
        <ul>
            <li><a href="service`"><i class="fa-solid fa-bell-concierge"></i>Liste des Services</a></li>
            <li><a href="ListeCitoyens"><i class="fa-solid fa-people-group"></i> Liste des citoyens</a></li>
            <li><a href="Historique"><i class="fa-solid fa-landmark"></i> Historiques</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="head">
            <header>
                <h1>LISTE DES <span>CYTOYENS</span> </h1>
            </header>
            <div class="search-container">
                <input type="text" placeholder="Rechercher..." class="search-input">
                <button type="submit" class="search-button">Recherche</button>
            </div>
        </div>
        <section class="section1">
            <div>
                <table class="table table-hover" id="overflow">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>E-mail</th>
                            <th>CIN</th>
                            <th>Téléphone</th>
                            <th>Adresse</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citoyens as $citoyen)
                        <tr>
                            <td>{{ $citoyen->nomCitoyen }}</td>
                            <td>{{ $citoyen->prenomCitoyen }}</td>
                            <td>{{ $citoyen->email }}</td>
                            <td>{{ $citoyen->numCIN }}</td>
                            <td>{{ $citoyen->telephone }}</td>
                            <td>{{ $citoyen->adresse }}</td>
                            <td>
<<<<<<< HEAD
                                <a href="/citoyen/update/{{$citoyen->id}}"><input type="button" class="btn btn-primary" value="Modifier"></a>
                                <input type="button" value="Supprimer" class="btn btn-danger">
=======
                                <a href="{{ url('/citoyen/update/' . $citoyen->id) }}" class="btn btn-primary">Modifier</a>
                                
                                <form action="{{ url('/citoyen/delete/' . $citoyen->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
>>>>>>> 3dde308ba0de12ec29ab6f83c7c9da4b846c9b81
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </section>
    </div>
</body>

</html>

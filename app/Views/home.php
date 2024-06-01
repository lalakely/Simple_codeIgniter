<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        form select, form input {
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        form button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #0056b3;
        }
        .links a {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin: 0 10px 20px 0;
            display: inline-block;
        }
        .links a:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        td a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            background-color: #007BFF;
            border-radius: 4px;
            margin-right: 5px;
        }
        td a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Voici la liste des personnes</h1>
    <form action="/Search">
        <select name="filter">
            <option value="nom">Nom</option>
            <option value="prenom">Prénom</option>
            <option value="age">Age</option>
        </select>
        <input type="text" name="search" placeholder="Recherchez ici ...">
        <button type="submit">Rechercher</button>
    </form>
    <div class="links">
        <a href="<?= base_url('/')?>">Tous</a>
        <a href="<?= base_url('/Ajout')?>">Ajout</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($personnes as $personne):?>
                <tr>
                    <td><?= $personne['nom']?></td>
                    <td><?= $personne['prenom']?></td>
                    <td><?= $personne['age']?></td>
                    <td>
                        <a href="<?= base_url("/Suppression?id=".$personne['id'])?>">Supprimer</a>
                        <a href="<?= base_url('/Modification?nom='.$personne['nom'].'&prenom='.$personne['prenom'].'&age='.$personne['age'].'&id='.$personne['id'])?>">Modifier</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>

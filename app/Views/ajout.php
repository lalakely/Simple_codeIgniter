<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        form input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        form button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        form button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <form action="/ApresAjout">
        <input type="text" placeholder="Nom" name="nom" required>
        <input type="text" placeholder="Prenom" name="prenom" required>
        <input type="number" placeholder="Age" name="age" required>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>

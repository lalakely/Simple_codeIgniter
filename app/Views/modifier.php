<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
            gap: 20px;
        }
        .left, .right {
            flex: 1;
        }
        .left p {
            margin: 10px 0;
            font-size: 16px;
        }
        form {
            display: flex;
            flex-direction: column;
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
    <div class="container">
        <div class="left">
            <p>Nom : <?php echo $personne['nom']?></p>
            <p>Prenom : <?php echo $personne['prenom']?></p>
            <p>Age : <?php echo $personne['age']?></p>
        </div>
        <div class="right">
            <form action="/Modifier">
                <input type="text" value="<?php echo $personne['id'] ?>" name="id" hidden readonly>
                <input type="text" name="nom" placeholder="Nom" required>
                <input type="text" name="prenom" placeholder="Prenom" required>
                <input type="number" name="age" placeholder="Age" required>
                <button type="submit">Modifier</button>
            </form>
        </div>
    </div>
</body>
</html>

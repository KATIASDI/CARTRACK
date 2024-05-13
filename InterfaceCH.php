<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil du Chauffeur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil du Chauffeur</h1>
        <img src="chemin/vers/photo_de_profil.jpg" alt="Photo du chauffeur">
        <h2>Nom du Chauffeur</h2>
        <p>Informations sur le chauffeur...</p>
        <button onclick="signalerProbleme()">Signaler un problème</button>
        <button onclick="voirMissions()">Voir missions</button>
    </div>

    <script>
        function signalerProbleme() {
            // Code pour signaler un problème
            alert("Problème signalé !");
        }

        function voirMissions() {
            // Code pour voir les missions
            alert("Affichage des missions...");
        }
    </script>
</body>
</html>
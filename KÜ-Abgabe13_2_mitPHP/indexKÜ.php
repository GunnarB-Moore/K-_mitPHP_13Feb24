<?php
$servername = "localhost"; //  Hostname  Datenbank 
$username = "brunkgun"; //  Datenbank-Benutzername
$password = ""; // Passwort leer für direkten Zugang
$dbname = "to-do-liste"; //  Name  Datenbank

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob  Verbindung erfolgreich hergestellt 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!-- HTML Doc. -->
<!DOCTYPE html>
<html lang="de">
<head>
    <!-- Meine Meta-Daten zum Code und Verlinkung des CSS-Styles im Header-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name= "author" content="Brunkhorst">
    <meta name="keywords" content="HFH, Lernplanung, organisiertes Lernen"/>
    <title>To-Do List Tool || Listify </title>
    <link rel="stylesheet" type="text/css" href="style_thistool.css"/>
    <!-- siehe Quellenverzeichnis: Quelle YT https://www.youtube.com/watch?v=G0jO8kUrg-I"> -->
</head>
<body>
    <!--Container, der in CSS gestylt wird-->
<div class="main-background">
    <div class="todo-app">
        <h2>To-Do Liste <img src="images/icon.png"></h2>
        <div class="row">
            <input type="text" id="input-box" placeholder="What to do">
            <input type="date" id="date-input">
            <button onclick="addTask()">Speichern</button>
    </div>
    <!--To-Do-Liste als unsorted list-->
    <ul id="list-container">
    <!--Auskommentiert, weil bessere Lösung
        <li class="checked">Task 1</li>
    <li>Task 2</li>
    <li>Task 3</li> -->
</ul>
</div>
<!--Einbindung JavaScript in HTML-->
<script src="script.js"></script>
</body>
</html>
<?php
include 'db_connection.php'; // Verbindung zur Datenbank herzustellen

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Überprüfen POST-Variablen gesetzt ?
    if (isset($_POST["tasks"])) {
        $tasks = json_decode($_POST["tasks"]);

        // Vorbereiten und Ausführen der SQL-Abfrage, um die Aufgaben in die Datenbank einzufügen
        $sql = "INSERT INTO tasks (task_description) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $task_description);

        foreach ($tasks as $task) {
            $task_description = $task;
            $stmt->execute();
        }

        echo "Tasks wurden erfolgreich gespeichert.";
    } else {
        echo "Keine Aufgaben erhalten.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>

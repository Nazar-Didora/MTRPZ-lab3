<?php
require 'database.php';

function getRandomQuote($mysqli) {
    $result = $mysqli->query("SELECT * FROM quotes ORDER BY RAND() LIMIT 1");
    return $result->fetch_assoc();
}

function getAllQuotes($mysqli) {
    $result = $mysqli->query("SELECT * FROM quotes");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function addQuote($mysqli, $quote, $author) {
    $stmt = $mysqli->prepare("INSERT INTO quotes (quote, author) VALUES (?, ?)");
    $stmt->bind_param('ss', $quote, $author);
    $stmt->execute();
    $stmt->close();
}

function deleteQuote($mysqli, $id) {
    $stmt = $mysqli->prepare("DELETE FROM quotes WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->close();
}
?>

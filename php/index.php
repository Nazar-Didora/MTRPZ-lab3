<?php
require 'quote_model.php';

$quote = getRandomQuote($mysqli);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quote for inspiration</title>
</head>
<body>
    <h1>Quote:</h1>
    <blockquote>
        <p>"<?= htmlspecialchars($quote['quote']) ?>"</p>
        <footer>- <?= htmlspecialchars($quote['author']) ?></footer>
    </blockquote>

    <form  method="post">
        <input type="submit" name="New quote" value="Get quote" />
    </form>

</body>
</html>

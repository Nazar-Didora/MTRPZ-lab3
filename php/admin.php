<?php
require 'quote_model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['quote']) && isset($_POST['author'])) {
        addQuote($mysqli, $_POST['quote'], $_POST['author']);
    } elseif (isset($_POST['delete_id'])) {
        deleteQuote($mysqli, $_POST['delete_id']);
    }
}

$quotes = getAllQuotes($mysqli);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administration panel</title>
</head>
<body>
    <h1>Administration panel</h1>
    <form method="post">
        <textarea name="quote" placeholder="Quote"></textarea>
        <input type="text" name="author" placeholder="Author">
        <button type="submit">Add quote</button>
    </form>
    <h2>All quote</h2>
    <ul>
        <?php foreach ($quotes as $quote): ?>
            <li>
                "<?= htmlspecialchars($quote['quote']) ?>" - <?= htmlspecialchars($quote['author']) ?>
                <form method="post" style="display:inline;">
                    <input type="hidden" name="delete_id" value="<?= $quote['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

<?php
include('inc/functions.php');

// Get language from URL or default to 'en'
$lang_code = isset($_GET['lang']) ? $_GET['lang'] : 'en';
$translations = load_language($lang_code);
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang_code) ?>">
<head>
    <meta charset="UTF-8">
    <title><?= $translations['title'] ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav>
        <a href="?lang=en">English</a> | 
        <a href="?lang=fr">Français</a>
    </nav>

    <h1><?= $translations['title'] ?></h1>
    <p><?= $translations['description'] ?></p>

    <footer>
        <p><?= $translations['contact'] ?></p>
    </footer>
</body>
</html>

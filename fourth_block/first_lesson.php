<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=global;charset=utf8", "trach", "neto1340");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

$sql = "SELECT * FROM books ORDER BY name";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Библиотека</title>
    <meta charset="UTF-8">
    <style>
        table {
            border-spacing: 0;
            border-collapse: collapse;
        }

        table td, table th {
            border: 1px solid #ccc;
            padding: 5px;
        }

        table th {
            background: #eee;
        }
    </style>
</head>
<body>
<h1>Список книг</h1>
<table>
    <tr>
        <th>Название</th>
        <th>Автор</th>
        <th>Жанр</th>
        <th>Год выпуска</th>
        <th>ISBN</th>
    </tr>
    <tr>
        <?php foreach ($pdo->query($sql) as $row) : ?>
        <td><?= $name = $row['name']; ?></td>
        <td><?= $author = $row['author']; ?></td>
        <td><?= $genre = $row['genre']; ?></td>
        <td><?= $year = $row['year']; ?></td>
        <td><?= $isbn = $row['isbn']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

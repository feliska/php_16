<?php
$jsonString = file_get_contents(__DIR__.'/phone_book.json');
$data = json_decode($jsonString, true);
?>

<html>
<head>
    <title>Телефонная книга</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Tahoma, Arial, serif;
        }
        th, td {
            padding: 5px 10px;
            text-align: left;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>ФИО</th>
        <th>Адрес</th>
        <th>Телефон</th>
    </tr>
    <?php foreach ($data as $datum) { ?>

        <tr>
            <td><?php echo $datum['lastName'] . " " .$datum['firstName']  ?></td>
            <td><?php echo $datum['address']['postalCode'] . ", " .
                    $datum['address']['city'] . ", " .
                    $datum['address']['street'] ?></td>
            <td><?php foreach ($datum['phoneNumbers'] as $phone) { ?>
                <?php echo $phone ?> <br>
            <?php } ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
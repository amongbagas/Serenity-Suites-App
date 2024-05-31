<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <h1>Ini Tugas Pemweb CUY</h1>
    <ul>
        <?php
        for ($i = 0; $i < count($data); $i++) {
        ?>
            <li>Ada <?= $data[$i]; ?></li>
        <?php } ?>
    </ul>
</body>

</html>
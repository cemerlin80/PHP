<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i=0; $i<10; $i++) {
            echo "i = " . $i . "<br>";
        }
    ?>

    <?php for ($i=0; $i<10; $i++) { ?>
            i = <?= $i ?><br>
    <?php } ?>

    <?php for ($i=0; $i<10; $i++): ?>
            i = <?= $i ?><br>
    <?php endfor; ?>
</body>
</html>
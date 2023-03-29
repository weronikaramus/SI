<?php

require __DIR__;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <tr>
        <td><?php echo $person['first_name']; ?></td>
        <td><?php echo $person['surname']; ?></td>
        <td><?php echo $person['age']; ?></td>
    </tr>
    <tr>
        <?php foreach ($person as $key => $value): ?>
        <td><?php echo $key === 'first_name' ? strtoupper($person[$key]) : $person[$key];?></td>
    </tr>
</body>
</html>


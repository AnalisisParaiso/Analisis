<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1><?php echo e($title) ?></h1>
        <ul>
            <?php foreach ($users as $user): ?>
                <!-- La función "e" lo que hace el tomar lo ingresado y tranformarlo
                en html, por ejemplo si se ingreso algún código JS, se le llama
                "escapar"-->
                <li><?php echo  e($user) ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>

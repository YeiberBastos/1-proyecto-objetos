<?php 
    require_once('model/persona.php');
    $alumno = new persona ('Jose Miguel', 17)
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
    <header>
        <?php include('includes/header.php')?>
    </header>
    <h1>Programacion orientada a objetos</h1>
    <nav>
        <?php include('includes/enlaces.php')?>
    </nav>
    <main>
        <pre class="resultado">
            <?php echo $alumno->getNombre();?>
            <?php echo $alumno->getEdad();?>
        </pre>
    </main>
</body>
</html>

<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navstyle.css">
    <script src="https://kit.fontawesome.com/8ab62866cb.js" crossorigin="anonymous"></script>
    <title>nav</title>
</head>
<body>
    <header class="head">
    <p>
        <a href="logout.php">Sair</a>
    </p>
        <form action="#" method="post">
            <input name="search" class="search" placeholder="Pesquise festas" type="text" required>
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </header>

</body>
</html>
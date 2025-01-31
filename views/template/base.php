<?php
require 'dados.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">Book Wise</div>

            <ul class="flex space-x-4 font-bold">
                <li class="text-teal-400"><a href="<?= $url ?>">Explorar</a></li>
                <li><a href="<?= $url ?>meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a href="<?= $url ?>login.php" class="hover:underline">Fazer Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">

            <?php require "views/{$view}.view.php" ?>

    </main>
</body>

</html>
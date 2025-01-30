<?php
$url = '/bookwise/';

require 'dados.php';
// var_dump($livros);
$id =  $_REQUEST['id'];

$livro_filtrado = array_filter($livros, function ($props) use ($id) {
    return $props['id'] == $id;
});

$livro = reset($livro_filtrado);

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

        <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">

            <div class="flex">

                <img class="w-1/3" src="" alt="">

                <div class="space-y-3">
                    <a href="<?= $url ?>livro.php?id=<?= $livro['id'] ?>" class="font-semibold hover:underline"><?= $livro['titulo'] ?></a>
                    <div class="text-xs italic"><?= $livro['autor'] ?></div>
                    <div class="text-xs italic">
                        <div>
                            <i class="bi bi-star-fill text-yellow-500"></i>
                            <i class="bi bi-star-fill text-yellow-500"></i>
                            <i class="bi bi-star-fill text-yellow-500"></i>
                            <i class="bi bi-star-fill text-yellow-500"></i>
                            <i class="bi bi-star-fill text-yellow-500"></i>
                            (3 Avaliações)
                        </div>

                    </div>
                </div>

            </div>

            <div class="text-sm mt-2">
                <?= $livro['descricao'] ?>
            </div>

        </div>
    </main>
</body>

</html>
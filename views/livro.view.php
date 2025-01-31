<?= $livro['titulo'] ?>

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
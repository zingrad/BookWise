<form class="w-full flex space-x-2 items-center mt-6">
    <input type="text" class="border-stone-800 bg-stone-900 border-2 rounded-xl text-sm focus:outline-none px-2 py-2 w-full " placeholder="Pesquisar..." name="Pesquisar">
    <button type="submit"><i class="bi bi-search"></i></button>
</form>


<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

    <?php foreach ($livros as $livro): ?>

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

    <?php endforeach; ?>

</section>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Komentáre</h1>
            <p>Táto stránka slúži na zanechanie odkazu autorovi stránky.</p>
            <a href="?c=blog&a=add" class="btn btn-primary" >+ Pridaj komentár</a>
            <?php /** @var \App\Models\Koment[] $data */

            foreach ($data as $article) {
                ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $article->getTitle() ?> </h5>
                        <p class="card-text"><?= $article->getText() ?></p>
                        <a href="?c=blog&a=edit&id=<?= $article->getId() ?>" class="btn btn-primary btn-sm">✎ Upraviť</a>
                        <a href="?c=blog&a=delete&id=<?= $article->getId() ?>" class="btn btn-danger">🗑 Zmazať</a>
                    </div>
                </div>
                <?php
                    }
                ?>
        </div>
    </div>
</div>




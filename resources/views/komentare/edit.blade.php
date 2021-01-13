<?php /** @var \App\Models\Koment $data */ ?>

<div class="container">
    <h1>Úprava komentáru: <b><?= $data['model']->getTitle(); ?></b></h1>
</div>

<div class="container">
    <form method="post">
        <?php if (!empty($data['model']->getId())) { ?>
            <input type="hidden" value="<?= $data['model']->getId()?>" name="id">
        <?php } ?>
        <div>
            <input type="text" name="title" class="form-control" value="<?= ( !empty($data['model']) ? $data['model']->getTitle() : "") ?>">

            <?php if (isset($data['err']['title'])) {
                foreach ($data['err']['title'] as $err) {
                    ?>
                    <div><?= $err?></div>
                <?php }} ?>
        </div>
        <div>
            <textarea class="form-control" name="text"><?=  ( !empty($data['model']) ? $data['model']->getText() : "")?></textarea>
            <?php if (isset($data['err']['text'])) {
                foreach ($data['err']['text'] as $err) {
                    ?>
                    <div><?= $err?></div>
                <?php }} ?>
            <input type="submit" value="Uložiť" class="btn btn-primary">
        </div>
    </form>
</div>

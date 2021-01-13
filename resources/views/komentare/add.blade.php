<div class="container">
    <h1>Pridanie nového komentáru</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <form method="post">
                <div class="form-group">
                    <label>Titulok</label>
                    <input name="title" type="text" class="form-control">
                    <?php if (isset($data['err']['title'])) {
                        foreach ($data['err']['title'] as $err) {
                            ?>
                            <div><?= $err?></div>
                        <?php }} ?>
                </div>
                <div class="form-group">
                    <label>Text</label>
                    <textarea class="form-control" name="text"></textarea>
                    <?php if (isset($data['err']['text'])) {
                        foreach ($data['err']['text'] as $err) {
                            ?>
                            <div><?= $err?></div>
                        <?php }} ?>
                </div>
                <button type="submit" class="btn btn-primary">Odošli</button>
            </form>
        </div>
    </div>
</div>
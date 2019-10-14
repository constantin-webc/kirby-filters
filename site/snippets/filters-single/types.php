<div>
<span class="filterTitle">Filtrer par Type</span>
    <?php foreach($types as $ty): ?>
    <?php if($ty == urldecode(param('type'))): ?>
    <a title="Supprimer le filtre" class="filterSingleReset <?= Str::slug($ty) ?>" href="<?= $page->url() ?>">
        <span>X</span><?= html($ty) ?></a>
    <?php else : ?>
    <a title="Toutes les disques du type: <?= html($ty) ?>" class="btnFilter <?= Str::slug($ty) ?>"
        href="<?= url($page->url(), ['params' => ['type' => urldecode($ty), ]]) ?>"><?= html($ty) ?></a>
    <?php endif;?>
    <?php endforeach ?>
</div>
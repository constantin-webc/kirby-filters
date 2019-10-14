<div>
<span class="filterTitle">Filtrer par région du monde</span>
    <?php foreach($worldregions as $con): ?>
    <?php if($con == urldecode(param('worldregion'))): ?>
    <a title="supprimr le filtre" class="filterSingleReset <?= Str::slug($con) ?>" href="<?= $page->url() ?>">
        <span>X</span><?= html($con) ?></a>
    <?php else : ?>
    <a title="Tous les disques: <?= html($con) ?>" class="btnFilter <?= Str::slug($con) ?>"
        href="<?= url($page->url(), ['params' => ['worldregion' => urldecode($con)]]) ?>"><?= html($con) ?></a>
    <?php endif;?>
    <?php endforeach ?>
</div>
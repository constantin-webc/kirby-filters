<div>
<span class="filterTitle">Filtrer par type de support</span>
    <?php foreach($supports as $su): ?>
    <?php if($su == urldecode(param('support'))): ?>
    <a title="Supprimer le filtre" class="filterSingleReset <?= Str::slug($su) ?>" href="<?= $page->url() ?>">
        <span>X</span><?= html($su) ?></a>
    <?php else : ?>
    <a title="Toutes les album en: <?= html($su) ?>" class="btnFilter <?= Str::slug($su) ?>"
        href="<?= url($page->url(), ['params' => ['support' => urldecode($su)]]) ?>"><?= html($su) ?></a>
    <?php endif;?>
    <?php endforeach ?>
</div>
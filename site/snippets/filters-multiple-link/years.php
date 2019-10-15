<div>
<span class="filterTitle">Filtrer par année</span>
    <?php foreach($years as $ye): ?>
    <?php if($ye == urldecode(param('year'))): ?>
    <a title="Supprimer le filtre" class="filterSingleReset <?= Str::slug($ye) ?>" href="<?= url($page->url(), ['params' => ['type' => urldecode($type), 'support' => urldecode($support), 'label' => urldecode($label), 'country' => urldecode($country), 'worldregion' => urldecode($worldregion)]]) ?>">
        <span>X</span><?= html($ye) ?></a>
    <?php else : ?>
    <a title="Toutes les disques de l'année: <?= html($ye) ?>" class="btnFilter <?= Str::slug($ye) ?>"
        href="<?= url($page->url(), ['params' => ['year' => urldecode($ye), 'type' => urldecode($type), 'support' => urldecode($support), 'label' => urldecode($label), 'country' => urldecode($country), 'worldregion' => urldecode($worldregion)]]) ?>"><?= html($ye) ?></a>
    <?php endif;?>
    <?php endforeach ?>
</div>
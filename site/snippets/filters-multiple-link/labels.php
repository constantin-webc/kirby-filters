<div>
<span class="filterTitle">Filtrer par Label</span>
    <?php foreach($labels as $la): ?>
    <?php if($la == urldecode(param('label'))): ?>
    <a title="Supprimer le filtre" class="filterSingleReset <?= Str::slug($la) ?>" href="<?= url($page->url(), ['params' => ['year' => urldecode($year), 'type' => urldecode($type), 'support' => urldecode($support), 'country' => urldecode($country), 'worldregion' => urldecode($worldregion)]]) ?>">
        <span>X</span><?= html($la) ?></a>
    <?php else : ?>
    <a title="Toutes les disques du label: <?= html($la) ?>" class="btnFilter <?= Str::slug($la) ?>"
        href="<?= url($page->url(), ['params' => ['year' => urldecode($year), 'type' => urldecode($type), 'support' => urldecode($support), 'label' => urldecode($la), 'country' => urldecode($country), 'worldregion' => urldecode($worldregion)]]) ?>"><?= html($la) ?></a>
    <?php endif;?>
    <?php endforeach ?>
</div>


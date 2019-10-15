<div>
<span class="filterTitle">Filtrer par région du monde</span>
    <?php foreach($worldregions as $con): ?>
    <?php if($con == urldecode(param('worldregion'))): ?>
    <a title="supprimr le filtre" class="filterSingleReset <?= Str::slug($con) ?>" href="<?= url($page->url(), ['params' => ['year' => urldecode($year), 'type' => urldecode($type), 'support' => urldecode($support), 'label' => urldecode($label), 'country' => urldecode($country)]]) ?>">
        <span>X</span><?= html($con) ?></a>
    <?php else : ?>
    <a title="Tous les disques: <?= html($con) ?>" class="btnFilter <?= Str::slug($con) ?>"
        href="<?= url($page->url(), ['params' => ['year' => urldecode($year), 'type' => urldecode($type), 'support' => urldecode($support), 'label' => urldecode($label), 'country' => urldecode($country), 'worldregion' => urldecode($con)]]) ?>"><?= html($con) ?></a>
    <?php endif;?>
    <?php endforeach ?>
</div>

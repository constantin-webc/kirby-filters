<div>
<span class="filterTitle">Filtrer par type de support</span>
    <?php foreach($supports as $su): ?>
    <?php if($su == urldecode(param('support'))): ?>
    <a title="Supprimer le filtre" class="filterSingleReset <?= Str::slug($su) ?>" href="<?= url($page->url(), ['params' => ['year' => urldecode($year), 'type' => urldecode($type), 'label' => urldecode($label), 'country' => urldecode($country), 'worldregion' => urldecode($worldregion)]]) ?>">
        <span>X</span><?= html($su) ?></a>
    <?php else : ?>
    <a title="Toutes les album en: <?= html($su) ?>" class="btnFilter <?= Str::slug($su) ?>"
        href="<?= url($page->url(), ['params' => ['year' => urldecode($year), 'type' => urldecode($type), 'support' => urldecode($su), 'label' => urldecode($label), 'country' => urldecode($country), 'worldregion' => urldecode($worldregion)]]) ?>"> 
        <?= html($su) ?>
         </a>
    <?php endif;?>
    <?php endforeach ?>
</div>


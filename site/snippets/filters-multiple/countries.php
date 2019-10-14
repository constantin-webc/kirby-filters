<div>
    <div class="filterTitleWrapper">
        <span class="filterTitle <?php e(isset($data['cou']) && $data['cou'], 'filterTitleHidden') ?>">Filtrer par
            Pays</span>
        <?php if(isset($data['cou']) && $data['cou']) : ?>
        <input id="cou" type="radio" name="cou" onChange="this.form.submit()" value="0">
        <label class="filterTitleReset" for="cou">Reset <span><?= $data['cou'] ?></span></label>
        <?php endif;?>
    </div>
    <?php foreach($countries as $item): ?>
    <?php if($item == "") continue ?>
    <input id="<?php echo $item->slug()?>" type="radio" onChange="this.form.submit()"
        <?php e(isset($data['cou']) && $data['cou'] == $item, ' checked') ?> name="cou" value="<?php echo $item?>">
    <label class="btnFilter <?php e(isset($data['cou']) && $data['cou'] == $item, ' filterActive') ?>"
        for="<?php echo $item->slug()?>"><?php echo $item?></label>
    <?php endforeach ?>
</div>
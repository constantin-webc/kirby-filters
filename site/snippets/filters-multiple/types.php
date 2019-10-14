<div>
    <div class="filterTitleWrapper">
        <span class="filterTitle <?php e(isset($data['typ']) && $data['typ'], 'filterTitleHidden') ?>">Filtrer par
            Type</span>
        <?php if(isset($data['typ']) && $data['typ']) : ?>
        <input id="typ" type="radio" name="typ" onChange="this.form.submit()" value="0">
        <label class="filterTitleReset" for="typ">Reset <span><?= $data['typ'] ?></span></label>
        <?php endif;?>
    </div>
    <?php foreach($types as $item): ?>
    <?php if($item == "") continue ?>
    <input id="<?php echo $item->slug()?>" type="radio" onChange="this.form.submit()"
        <?php e(isset($data['typ']) && $data['typ'] == $item, ' checked') ?> name="typ" value="<?php echo $item?>">
    <label class="btnFilter <?php e(isset($data['typ']) && $data['typ'] == $item, ' filterActive') ?>"
        for="<?php echo $item->slug()?>"><?php echo $item?></label>
    <?php endforeach ?>
</div>
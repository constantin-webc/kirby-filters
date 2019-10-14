<div>
    <div class="filterTitleWrapper">
        <span class="filterTitle <?php e(isset($data['lab']) && $data['lab'], 'filterTitleHidden') ?>">Filtrer par
            Label</span>
        <?php if(isset($data['lab']) && $data['lab']) : ?>
        <input id="lab" type="radio" name="lab" onChange="this.form.submit()" value="0">
        <label class="filterTitleReset" for="lab">Reset <span><?= $data['lab'] ?></span></label>
        <?php endif;?>
    </div>
    <?php foreach($labels as $item): ?>
    <?php if($item == "") continue ?>
    <input id="<?php echo $item->slug()?>" type="radio" onChange="this.form.submit()"
        <?php e(isset($data['lab']) && $data['lab'] == $item, ' checked') ?> name="lab" value="<?php echo $item?>">
    <label class="btnFilter <?php e(isset($data['lab']) && $data['lab'] == $item, ' filterActive') ?>"
        for="<?php echo $item->slug()?>"><?php echo $item?></label>
    <?php endforeach ?>
</div>
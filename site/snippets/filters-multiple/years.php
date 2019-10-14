<div>
    <div class="filterTitleWrapper">
        <span class="filterTitle <?php e(isset($data['yea']) && $data['yea'], 'filterTitleHidden') ?>">Filtrer par
            Année</span>
        <?php if(isset($data['yea']) && $data['yea']) : ?>
        <input id="yea" type="radio" name="yea" onChange="this.form.submit()" value="0">
        <label class="filterTitleReset" for="yea">Reset <span><?= $data['yea'] ?></span></label>
        <?php endif;?>
    </div>
    <?php foreach($years as $item): ?>
    <?php if($item == "") continue ?>
    <input id="<?php echo $item->slug()?>" type="radio" onChange="this.form.submit()"
        <?php e(isset($data['yea']) && $data['yea'] == $item, ' checked') ?> name="yea" value="<?php echo $item?>">
    <label class="btnFilter <?php e(isset($data['yea']) && $data['yea'] == $item, ' filterActive') ?>"
        for="<?php echo $item->slug()?>"><?php echo $item?></label>
    <?php endforeach ?>
</div>
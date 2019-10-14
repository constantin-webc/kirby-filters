<div>
    <div class="filterTitleWrapper">
        <span class="filterTitle <?php e(isset($data['sup']) && $data['sup'], 'filterTitleHidden') ?>">Filtrer par
            Support</span>
        <?php if(isset($data['sup']) && $data['sup']) : ?>
        <input id="sup" type="radio" name="sup" onChange="this.form.submit()" value="0">
        <label class="filterTitleReset" for="sup">Reset <span><?= $data['sup'] ?></span></label>
        <?php endif;?>
    </div>
    <?php foreach($supports as $item): ?>
    <?php if($item == "") continue ?>
    <input id="<?php echo $item->slug()?>" type="radio" onChange="this.form.submit()"
        <?php e(isset($data['sup']) && $data['sup'] == $item, ' checked') ?> name="sup" value="<?php echo $item?>">
    <label class="btnFilter <?php e(isset($data['sup']) && $data['sup'] == $item, ' filterActive') ?>"
        for="<?php echo $item->slug()?>"><?php echo $item?></label>
    <?php endforeach ?>
</div>
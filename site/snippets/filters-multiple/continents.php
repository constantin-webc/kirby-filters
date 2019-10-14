<div>
    <div class="filterTitleWrapper">
        <span class="filterTitle <?php e(isset($data['wr']) && $data['wr'], 'filterTitleHidden') ?>">Filtrer par
            Région du monde</span>
        <?php if(isset($data['wr']) && $data['wr']) : ?>
        <input id="wr" type="radio" name="wr" onChange="this.form.submit()" value="0">
        <label class="filterTitleReset" for="wr">Reset <span><?= $data['wr'] ?></span></label>
        <?php endif;?>
    </div>
    <?php foreach($worldregions as $item): ?>
    <?php if($item == "") continue ?>
    <input id="<?php echo $item->slug()?>" type="radio" onChange="this.form.submit()"
        <?php e(isset($data['wr']) && $data['wr'] == $item, ' checked') ?> name="wr" value="<?php echo $item?>">
    <label class="btnFilter <?php e(isset($data['wr']) && $data['wr'] == $item, ' filterActive') ?>"
        for="<?php echo $item->slug()?>"><?php echo $item?></label>
    <?php endforeach ?>
</div>
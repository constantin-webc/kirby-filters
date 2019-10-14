<?php snippet('header') ?>
<style>
main{
    background:white;
    box-shadow:none;
    max-width:1100px;
    margin:0 auto;
}
.small{
    font-size:14px;
    background:#f5f5f5;
    padding:1em;
    font-style:italic;
}
</style>
<main>
    <h1><?= $page->title() ?></h1>
    <div class="small">
    <?= $page->withajax()->kt()?>
    </div>
<?= $page->intro()->kt()?>
    </main>
    <?php snippet('footer') ?>
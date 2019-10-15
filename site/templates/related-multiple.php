<?php snippet('header') ?>

<h2><?= $page->title() ?></h2>

<div class="squelette">
    <aside>
        <?php snippet('filters-multiple-link/types') ?>
        <?php snippet('filters-multiple-link/supports') ?>
        <?php snippet('filters-multiple-link/years') ?>
        <?php snippet('filters-multiple-link/labels') ?>
        <?php snippet('filters-multiple-link/countries') ?>
        <?php snippet('filters-multiple-link/continents') ?>
    </aside>

    <main>
        
        <?php if($items->count()): ?>
        <?php foreach ($items as $sub):?>
        <article>
            <h3><?= $sub->title()->html()?></h3>
            <p><?= $sub->explication()->excerpt(80) ?></p>
            <button class="testLoad" id="ajaxButton1" type="button" data-box="<?= $sub->url()?>.json">Quick
                read</button>
            <a class="readAll" href="<?= $sub->url()?>">Read all</a>
        </article>
        <?php endforeach ?>
        <?php else: ?>
        <p>Il n' aucun résultat :( </p>
        <?php endif ?>
    </main>

    <div id="testo">
        <button id="close" type="button"> Close </button>
        <div id="tempClose" class="visible">
            <h2>Intro/About</h2>
            <img src="<?= url('assets/disc.jpg')?>" alt="">
            <br><br>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias, dolorem earum. Sapiente fuga cumque
                debitis natus corrupti perspiciatis necessitatibus excepturi. Distinctio, hic id porro eveniet vitae,
                dolor quos fuga officia nostrum accusantium placeat eaque facere deleniti dolorum explicabo pariatur
                perferendis repudiandae esse optio sunt minima eum unde nihil! Officia, repellendus?</p>
        </div>
        <div id="contenu"></div>
    </div>
</div>

<?php snippet('footer') ?>
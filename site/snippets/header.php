<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Some kirby filters content options</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <?= css('assets/css.css')?>
</head>

<body>
    <?php

// main menu items
$items = $pages->listed();

// only show the menu if items are available
if($items->isNotEmpty()):?>
    <nav class="topnav">
        <a href="<?= url() ?>">Home</a>
        <?php foreach($items as $item): ?>
        <a <?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
        <?php endforeach ?>
    </nav>
    <?php endif ?>
<?php

$data = "<article>         
          <h3>".$page->title()->value()."</h3>
         ".$page->withajax()->kirbytext()->value()."
         <a class=" ."ajaxedArticleLink". " href=" .$page->url(). ">Read all about ".$page->title()->value()."</a>
        </article>";

echo json_encode($data);








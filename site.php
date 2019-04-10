<?php

function follow_links($url) {

  $doc = new DOMDocument();
  $doc->loadHTML(file_get_contents($url));

  $linklist = $doc->getElementsByTagName("a");

  foreach ($linklist as $link) {
    echo $link->getAttribute("href")."\n";
  }

  
  }


$start = "test.html";
follow_links($start);

  
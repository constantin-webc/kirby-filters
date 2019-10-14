<?php

return function ($kirby, $pages, $page) {

//  Empty URL with POST instead of get (controller + template)

//Multiseach
  $types = page('artists')->children()->pluck('typ', null, true); 
  $supports = page('artists')->children()->pluck('sup', null, true);
  $years = page('artists')->children()->pluck('yea', null, true);
  $labels = page('artists')->children()->pluck('lab', null, true);
  $countries = page('artists')->children()->pluck('cou', null, true);
  $worldregions = page('artists')->children()->pluck('wr', null, true);
  $keys = array('typ', 'sup', 'yea', 'lab', 'cou', 'wr');

  $projects = page('artists')->children()->listed();
  if(r::is('GET') && $data = get()) {
    $projects = page('artists')->children()->listed()->filter(function($child) use($keys, $data) {

      // loop through the post request
      foreach($data as $key => $value) {

        // only act if the value is not empty and the key is valid
        if($value && in_array($key, $keys)) {

          // return false if the child page's category and value don't match
          if(!$match = $child->$key() == $value) {
            return false;
          }
        }
      }

      // otherwise return the child page
      return $child;

    });
  }

return compact('types',
'supports',
'years',
'labels',
'countries',
'worldregions',
'projects',
'data');



};
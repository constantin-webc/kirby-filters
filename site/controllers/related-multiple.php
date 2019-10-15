<?php

return function ($kirby, $pages, $page) {

  $allitems = page('artists')->children()->listed();
  
  $items = page('artists')->children()->listed()->sortBy('order', 'asc');
 
  // add the Type filter
  if($type = param('type')) {
    //Used for multiple words categories
    $type = urldecode(param('type'));    
    $items = $items->filterBy('typ', $type, ',');
  }
  // add the Support filter
  if($support = param('support')) {
    //Used for multiple words categories
    $support = urldecode(param('support'));    
    $items = $items->filterBy('sup', $support, ',');
  }
    // add the Year filter
  if($year = param('year')) {
    //Used for multiple words categories
    $year = urldecode(param('year'));    
    $items = $items->filterBy('yea', $year, ',');
  }
    // add the Label filter
  if($label = param('label')) {
    //Used for multiple words categories
    $label = urldecode(param('label'));    
    $items = $items->filterBy('lab', $label, ',');
  }
    // add the Country filter
  if($country = param('country')) {
    //Used for multiple words categories
    $country = urldecode(param('country'));    
    $items = $items->filterBy('cou', $country, ',');
  }
    // add the world region filter
  if($worldregion = param('worldregion')) {
    //Used for multiple words categories
    $worldregion = urldecode(param('worldregion'));    
    $items = $items->filterBy('wr', $worldregion, ',');
  }
  
  
 
  //If $items is used, groups all results filters
  // fetch all types
  $types = $items->pluck('typ', ',', true); 
  // fetch all Supports
  $supports = $items->pluck('sup', ',', true);
  // fetch all Years
  $years = $items->pluck('yea', ',', true); 
  // fetch all Labels
  $labels = $items->pluck('lab', ',', true);
  // fetch all countries
  $countries = $items->pluck('cou', ',', true); 
  // fetch all region filter
  $worldregions = $items->pluck('wr', ',', true); 


  // $items      = $items->paginate(20);
  // $pagination = $items->pagination();  

return compact('type', 'types', 'support', 'supports', 'year', 'years', 'label', 'labels', 'country', 'countries', 'worldregion', 'worldregions', 'items', 'allitems');


};
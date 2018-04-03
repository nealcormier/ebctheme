<?php

/**
* EBC Template.php 
**/

function encoreballrm_menu_local_task($link, $active = FALSE) {
  return '<li '. ($active ? 'class="active" ' : '') .'><span><span>'. $link ."</span></span></li>\n";
}

function encoreballrm_l($text, $path, $options = array()) {
  $options += array(
      'attributes' => array(),
      'html' => TRUE,
    );

      if ($path == $_GET['q'] || ($path == '<front>' && drupal_is_front_page())) {
        if (isset($options['attributes']['class'])) {
          $options['attributes']['class'] .= ' active';
        }
        else {
          $options['attributes']['class'] = 'active';
        }
      }
  if (isset($options['attributes']['title']) && strpos($options['attributes']['title'], '<') !== FALSE) {
    $options['attributes']['title'] = strip_tags($options['attributes']['title']);
  }

  return '<a href="'. check_url(url($path, $options)) .'"'. drupal_attributes($options['attributes']) .'>'. ($options['html'] ? $text : check_plain($text)) .'</a>';
}


function encoreballrm_links($links, $attributes = array('class' => 'links')) {
 $output = '';
  if (count($links) > 0) {
    $output = '<ul'. drupal_attributes($attributes) .'>';
    $num_links = count($links);
    $i = 1;
    foreach ($links as $key => $link) {
      $class = '';
      // Automatically add a class to each link and also to each LI
      if (isset($link['attributes']) && isset($link['attributes']['class'])) {
        $link['attributes']['class'] .= ' ' . $key;
        $class = $key;
      }
      else {
        $link['attributes']['class'] = $key;
        $class = $key;
      }
      // Add first and last classes to the list of links to help out themers.
          $extra_class = '';
          if ($i == 1) {
            $extra_class .= 'first ';
          }
          if ($i == $num_links) {
            $extra_class .= 'last ';
          }
      // Add class active to active li
      $current = '';
      if (strstr($class, 'active')) {
        $current = ' active';
      }
      $output .= '<li class="'. $extra_class . $class . $current .'">';
       $html = isset($link['html']) && $link['html'];
       $link['query'] = isset($link['query']) ? $link['query'] : NULL;
      $link['fragment'] = isset($link['fragment']) ? $link['fragment'] : NULL;
      if (isset($link['href'])) {
        $spanned_title = "<span ". drupal_attributes($link['attributes']) ."><span>".$link['title']."</span></span>";
		
       $output .= encoreballrm_l($spanned_title, $link['href'], $link['attributes'], $link['query'], $link['fragment']);
      } else if ($link['title']) {
   
        if (!$html) {
          $link['title'] = check_plain($link['title']);
        }
        $output .= '<span'. drupal_attributes($link['attributes']) .'>'. $link['title'] .'</span>';
      }
      $i++;
      $output .= "</li>\n";
    }
    $output .= '</ul>';
  }
  return $output;
}





?>
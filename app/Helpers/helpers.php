<?php
function msgLinksClickable($text) {
  $text = preg_replace_callback('/_url\[(.*?)\] _product\[(.*?)\]/', function($matches) {
      $url = $matches[1];
      $product = $matches[2];
      return '<a href="' . $url . '" target="_blank">' . $product . '</a>';
  }, $text);

  return $text;
}
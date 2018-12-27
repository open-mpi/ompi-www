<?php

class Nav {
  var $name, $link, $children;

  # Many places call "Nav()" with the 2-argument version
  function __construct($name, $link = "", $children = "") {
    $this->name = $name;
    $this->link = $link;
    if ($children != "") {
      $this->children = $children;
    }
  }
}

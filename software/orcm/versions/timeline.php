<?php
  $topdir = "../../..";
  $title = "Open RCM: Version Timeline";
  include_once("$topdir/software/orcm/versions/nav.inc");
  include_once("$topdir/includes/header.inc");

function g($v) {
    print("<p><div align=center><img src=\"../$v/timeline-graph.php\"></div></p>\n");
}

g("v0.5");

  include_once("$topdir/includes/footer.inc");

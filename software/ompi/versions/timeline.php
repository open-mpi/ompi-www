<?php
  $topdir = "../../..";
  $title = "Open MPI: Version Timeline";
  include_once("$topdir/software/ompi/versions/nav.inc");
  include_once("$topdir/includes/header.inc");

function g($v) {
    print("<p><div align=center><img src=\"../$v/timeline-graph.php\"></div></p>\n");
}

g("v2.0");
g("v1.10");
g("v1.8");
g("v1.7");
g("v1.6");
g("v1.5");
g("v1.4");
g("v1.3");
g("v1.2");
g("v1.1");
g("v1.0");

  include_once("$topdir/includes/footer.inc");

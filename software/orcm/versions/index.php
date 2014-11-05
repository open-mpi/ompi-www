<?php
  $topdir = "../../..";
  $title = "Open RCM: Version Number Methodology";
  include_once("$topdir/software/orcm/versions/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/curl_get.inc");
?>

The following text is taken directly from the <?php
print("<a href=\"https://github.com/open-mpi/orcm/blob/master/README\">"); ?>
Open RCM README file</a> in the development branch.

<?php
$str = do_curl_get("https://raw.githubusercontent.com/open-mpi/orcm/master/README");

# Extract just the sections we want from the README.

$str = preg_replace("/.+(\nOpen RCM Version Numbers.+)/si", "$1", $str);
$str = preg_replace("/(.+)Checking Your Open RCM Installation.+/si", "$1", $str);
$str = preg_replace("/={5,}/", "", $str);
$str = preg_replace("/\n\n\n/s", "\n\n", $str);
print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

  include_once("$topdir/includes/footer.inc");

<?php
  $topdir = "../../..";
  $title = "Open MPI: Version Number Methodology";
  include_once("$topdir/software/ompi/versions/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/curl_get.inc");
?>

The following text is taken directly from the <?php
print("<a href=\"https://github.com/open-mpi/ompi/blob/master/README\">"); ?>
Open MPI README file</a> in the development branch.

<?php
$str = do_curl_get("https://raw.githubusercontent.com/open-mpi/ompi/master/README");

# Extract just the sections we want from the README.

$str = preg_replace("/.+(\nOpen MPI Version Numbers.+)/si", "$1", $str);
$str = preg_replace("/(.+)Checking Your Open MPI Installation.+/si", "$1", $str);
$str = preg_replace("/={5,}/", "", $str);
$str = preg_replace("/\n\n\n/s", "\n\n", $str);
print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

  include_once("$topdir/includes/footer.inc");

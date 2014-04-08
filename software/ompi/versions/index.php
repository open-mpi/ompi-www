<?php
  $topdir = "../../..";
  $title = "Open MPI: Version Number Methodology";
  include_once("$topdir/software/ompi/versions/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/curl_get.inc");
?>

The following text is taken directly from the <?php
print("<a href=\"http://svn.open-mpi.org/svn/ompi/trunk/README\">"); ?>
Open MPI README file</a> on the Subversion development trunk.

<?php 
$str = do_curl_get("http://svn.open-mpi.org/svn/ompi/trunk/README");

# Extract just the sections we want from the README.

$str = preg_replace("/.+(\nOpen MPI Version Numbers.+)/si", "$1", $str);
$str = preg_replace("/(.+)Checking Your Open MPI Installation.+/si", "$1", $str);
$str = preg_replace("/={5,}/", "", $str);
$str = preg_replace("/\n\n\n/s", "\n\n", $str);
print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

  include_once("$topdir/includes/footer.inc");

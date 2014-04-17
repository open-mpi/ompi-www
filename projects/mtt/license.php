<?php
$topdir = "../..";
$title = "MPI Testing Tool (MTT) License";
$logo = "images/mtt-logo.png";
$project = "MPI Testing Tool";
include_once("nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/curl_get.inc");
?>

<p><strong>The MPI Testing Tool (MTT) software is
distributed under the <?php
print("<a href=\"http://www.opensource.org/licenses/bsd-license.php\">");
?>New BSD license</a>, listed below.</strong>

<?php
$str = do_curl_get("https://raw.github.com/open-mpi/mtt/master/LICENSE");
print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

include_once("$topdir/includes/footer.inc"); 

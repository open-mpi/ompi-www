<?php
$topdir = "../..";
$title = "Open Tool for Parameter Optimization (otpo)";
include_once("$topdir/software/otpo/current/version.inc");
include_once("$topdir/projects/otpo/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/curl_get.inc");
?>

<p><strong>The Open Tool for Parameter Optimization (OTPO) software is
distributed under the <?php
print("<a href=\"http://www.opensource.org/licenses/bsd-license.php\">");
?>New BSD license</a>, listed below.</strong>

<?php
$str = do_curl_get("https://raw.githubusercontent.com/open-mpi/otpo/master/LICENSE");
print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

include_once("$topdir/includes/footer.inc");

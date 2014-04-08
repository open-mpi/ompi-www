<?php
$topdir = "../..";
$title = "Portable Linux Processor Affinity (PLPA) License";
include_once("nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/curl_get.inc");
include_once("$topdir/projects/plpa/deprecated.inc");
?>

<p><strong>The Portable Linux Processor Affinity (PLPA) software is
distributed under the <?php
print("<a href=\"http://www.opensource.org/licenses/bsd-license.php\">");
?>New BSD license</a>, listed below.</strong>

<?php
$str = do_curl_get("http://svn.open-mpi.org/svn/plpa/trunk/LICENSE");
print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

include_once("$topdir/includes/footer.inc"); 

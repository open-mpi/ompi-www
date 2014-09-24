<?php
$topdir = "../..";
$title = "Open Resilient Cluster Manager (ORCM)";
include_once("$topdir/projects/orcm/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/curl_get.inc");
?>

<p><strong>The Open Resilient Cluster Manager (ORCM) is distributed under the <?php
print("<a href=\"http://opensource.org/licenses/BSD-3-Clause\">");
?>New BSD license</a>, listed below.</strong>

<?php
$str = do_curl_get("https://raw.github.com/open-mpi/orcm/master/LICENSE");
print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

include_once("$topdir/includes/footer.inc"); 

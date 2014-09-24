<?php
$topdir = "../..";
$title = "Project Management Interface for Exascale Operations";
include_once("$topdir/projects/pmix/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/curl_get.inc");
?>

<p><strong>The Project Management Interface for Exascale Operations (PMIx) software is distributed under the <?php
print("<a href=\"http://www.opensource.org/licenses/BSD-3-Clause\">");
?>New BSD license</a>, listed below.</strong>

<?php
$str = do_curl_get("https://raw.github.com/open-mpi/pmix/master/LICENSE");
print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

include_once("$topdir/includes/footer.inc"); 

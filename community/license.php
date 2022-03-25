<?php
$topdir = "..";
$title = "Open MPI License";

include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/curl_get.inc");
?>

<p><strong>Open MPI is distributed under the <?php
print("<a href=\"https://opensource.org/licenses/BSD-3-Clause\">");
?>3-clause BSD license</a>, listed below.</strong>

<?php
$str = do_curl_get("https://raw.githubusercontent.com/open-mpi/ompi/main/LICENSE");
print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

include_once("$topdir/includes/footer.inc");

<?php
$topdir = "../..";
$title = "Portable Network Locality (netloc)";
include_once("$topdir/software/netloc/current/version.inc");
include_once("$topdir/projects/netloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/curl_get.inc");
?>

<p style="font-size: 16px; color: red;">
 <b>v0.5 is the only standalone netloc release series.</b>
 Next netloc releases will be included in hwloc (starting with hwloc 2.0),
 <a href="../hwloc/license.php">whose license is the same</a>.
</p>

<p><strong>The Portable Network Locality (netloc) software is
distributed under the <?php
print("<a href=\"http://www.opensource.org/licenses/bsd-license.php\">");
?>New BSD license</a>.</strong>

<?php
# Doesn't work, disabled since deprecated anyway
#$str = do_curl_get("https://raw.github.com/open-mpi/netloc/master/COPYING");
#print("<p><hr>\n<pre>\n$str\n</pre><p><hr>\n\n");

include_once("$topdir/includes/footer.inc"); 

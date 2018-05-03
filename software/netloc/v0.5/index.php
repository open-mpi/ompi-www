<?php
$topdir = "../../..";

include_once("version.inc");
$title = "Portable Network Locality (netloc): Version $release_series";

include_once("$topdir/projects/netloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$project = "netloc";
$list_name = "netloc-announce";
$prev_describe = "the v$release_series download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<p style="font-size: 16px; color: #ff0000;">
 <b>v0.5 is the only standalone netloc release series.</b>
 Next netloc releases will be included in hwloc (starting with hwloc 2.0).
</p>

<p>netloc is distributed under the <a href="<?php print $topdir ?>/projects/netloc/license.php">BSD license</a>.
</p>

<P><?php print("<a href=\"https://raw.github.com/open-mpi/netloc/$release_series/NEWS\">"); ?>This
file</a> contains a list of changes between the releases in the netloc
releases in the <?php print($release_series); ?> series</p>

<?php
print_release_section("netloc", "open-mpi-release", $s3_prefix, $download_prefix,
                      $releases, $prereleases, FALSE);
?>
</div>
</p>

<?php 
  include_once("$topdir/includes/footer.inc");

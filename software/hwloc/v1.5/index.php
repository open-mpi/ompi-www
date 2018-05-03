<?php
$topdir = "../../..";

include_once("version.inc");
$title = "Portable Hardware Locality (hwloc): Version $release_series";

include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$project = "hwloc";
$list_name = "hwloc-announce";
$prev_describe = "the v$release_series download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<p>hwloc is distributed under the <a href="<?php print $topdir ?>/projects/hwloc/license.php">BSD license</a>.
</p>

<P><?php print("<a href=\"https://raw.github.com/open-mpi/hwloc/$release_branch/NEWS\">"); ?>This
file</a> contains a list of changes between the releases in the hwloc
releases in the <?php print($release_series); ?> series</p>

<?php
print_release_section("hwloc", "open-mpi-release", $s3_prefix, $download_prefix,
                      $releases, $prereleases, FALSE);
?>
</div>
</p>

<?php
  include_once("$topdir/includes/footer.inc");

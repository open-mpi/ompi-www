<?php
$topdir = "../../..";

include_once("version.inc");
$title = "Open MPI: Version $release_series";

include_once("$topdir/software/ompi/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$project = "Open MPI";
$list_name = "announce";
$prev_describe = "the v$release_series download page";

include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<P><?php $dir = "https://github.com/open-mpi/ompi/raw/$release_branch/NEWS";
      print("<a href=\"$dir\">"); ?>This
file</a> contains a list of changes between the releases in the Open
MPI in the v<?php print("$release_series"); ?> series.</p>

<p>See the <a href="<?php print($topdir);
?>/software/ompi/versions/timeline.php">version timeline</a> for
information on the chronology of Open MPI releases.</p>

<p>
<div align="center">

<?php
print_release_section("openmpi", "open-mpi-release", $s3_prefix, $download_prefix,
                       $releases, $prereleases, $cygwin_note);
?>
</div>
</p>

<?php
  include_once("$topdir/includes/footer.inc");

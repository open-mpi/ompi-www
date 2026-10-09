<?php
$topdir = "../../..";

include_once("version.inc");
$title = "Open MPI: Version $release_series";

include_once("$topdir/software/ompi/nav.inc");
include_once("$topdir/includes/downloads.inc");
$head_feed_links = release_feed_head_links("Open MPI", $release_series);
include_once("$topdir/includes/header.inc");

$project = "Open MPI";
$list_name = "announce";
$prev_describe = "the v$release_series download page";

$news_url = "https://docs.open-mpi.org/en/v6.0.x-pre-release/release-notes/";

include_once("$topdir/includes/subscribe-announce.inc");
print_release_info_note("Open MPI", $release_series, $releases,
                        "https://docs.open-mpi.org/en/main/installing-open-mpi/downloading.html#detecting-new-releases-programmatically");
?>

<p><hr>

<h2>Changes in this release:</h2>

<ul> <li><?php print("<a href=\"$news_url\">"); ?>See the release
notes</a> for a list of changes between each release and sub-release
of the Open MPI v<?php print($release_series); ?> series.</li> </ul>

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
?>

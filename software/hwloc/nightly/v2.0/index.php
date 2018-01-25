<?php
  $topdir = "../../../..";

  $title = "Hardware Locality (hwloc): v2.0 series nightly snapshot tarballs";
  include_once("$topdir/projects/hwloc/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/downloads.inc");
  include_once("$topdir/includes/mailto.inc");
  $dir = "$topdir/software/hwloc/nightly/v2.0";
?>

<h2>These are not stable releases of software packages!</h2>

<p>Users looking for latest stable releases should <a href="<?php
print($topdir); ?>/software/hwloc/current/">look here</a>.</p>

<p>Note that snapshots are only generated when there has been a commit to
the corresponding branch in the Git repository.  This may be less than
once a day!</p>

<p>Tarballs are made from the Git v2.0 branch nightly at approximately
9pm US Indiana time.</p>

<?php
$latest = get_latest_snapshot("open-mpi-nightly", "nightly/hwloc/v2.0/");
if ($latest == "") {
    echo("<p><b>No nightly tarballs available.</b></p>\n");
} else {
    echo("<p>Latest snapshot version: <strong>" . $latest . "</strong></p>\n");
    echo("<div align=center>\n");

    print_nightly_table("open-mpi-nightly", "nightly/hwloc/v2.0/",
                        "https://download.open-mpi.org/nightly/hwloc/v2.0/");

    print("</div>\n\n");
}

include_once("$topdir/includes/footer.inc");

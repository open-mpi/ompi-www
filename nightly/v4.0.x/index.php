<?php
  $topdir = "../..";

  $title = "Open MPI: v4.0.x nightly snapshot tarballs";
  include_once("$topdir/software/ompi/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/downloads.inc");
  $dir = "$topdir/nightly/v4.0.x";
?>

<h2>These are not stable releases of software packages!</h2>

<p>Users looking for stable releases should <a href="<?php
print($topdir); ?>/software/ompi/current/">look here</a>.</p>

<p>Note that snapshots are only generated when there has been a commit to
the v4.0.x branch in the Git ompi repository.  This may be less than once a day!</p>

<p>Tarballs are made from the Git v4.0.x branch nightly at approximately
9pm US Eastern time.</p>

<?php
$latest = get_latest_snapshot("open-mpi-nightly", "nightly/open-mpi/v4.0.x/");
if ($latest == "") {
    echo("<p><b>No nightly tarballs available.</b></p>\n");
} else {
    echo("<p>Latest snapshot version: <strong>" . $latest . "</strong></p>\n");
    echo("<div align=center>\n");

    print_nightly_table("open-mpi-nightly", "nightly/open-mpi/v4.0.x/",
                        "https://download.open-mpi.org/nightly/open-mpi/v4.0.x/");

    print("</div>\n\n");
}

include_once("$topdir/includes/footer.inc");

<?php
  $topdir = "../..";

  $title = "Open MPI: 1.0 series nightly snapshot tarballs";
  include_once("$topdir/software/ompi/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/downloads.inc");
  $dir = "$topdir/nightly/v1.0";
?>

<h2>These are not stable releases of software packages!</h2>

<p>These are snapshots of the 1.0 branch of the Open MPI source code.
Note that snapshots are only generated when there has been a commit to
the corresponding branch in the Git ompi repository.  This may be less than
once a day!</p>

<p>Tarballs are made from the Git <code>v1.0</code> branch
nightly at approximately 9pm US Eastern time.</p>

<?php
$latest = get_latest_snapshot("open-mpi-nightly", "nightly/open-mpi/v1.0/");
if ($latest == "") {
    echo("<p><b>No nightly tarballs available.</b></p>\n");
} else {
    echo("<p>Latest snapshot version: <strong>" . $latest . "</strong></p>\n");
    echo("<div align=center>\n");

    print_nightly_table("open-mpi-nightly", "nightly/open-mpi/v1.0/",
                        "https://download.open-mpi.org/nightly/open-mpi/v1.0/");

    print("</div>\n\n");
}

include_once("$topdir/includes/footer.inc");

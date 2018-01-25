<?php
  $topdir = "../../../..";

  $title = "Network Locality (netloc): Master nightly snapshot tarballs";
  include_once("$topdir/projects/netloc/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/downloads.inc");
  include_once("$topdir/includes/mailto.inc");
  $dir = "$topdir/software/netloc/nightly/master";
?>

<br/>
<p style="font-size: 18px">
 <b>netloc development moved to the hwloc git tree.
 The netloc repository is not updated anymore, no useful nightly snapshot is available here.</b>
</p>
<br/>
<br/>

<h2>These are not stable releases of software packages!</h2>

<p>Users looking for latest stable releases should <a href="<?php
print($topdir); ?>/software/netloc/current/">look here</a>.</p>

<p>Note that snapshots are only generated when there has been a commit to
the corresponding branch in the Git repository.  This may be less than
once a day!</p>

<p>Tarballs are made from the Git master branch nightly at approximately
9pm US Indiana time.</p>

<?php
$latest = get_latest_snapshot("open-mpi-nightly", "nightly/netloc/master/");
if ($latest == "") {
    echo("<p><b>No nightly tarballs available.</b></p>\n");
} else {
    echo("<p>Latest snapshot version: <strong>" . $latest . "</strong></p>\n");
    echo("<div align=center>\n");

    print_nightly_table("open-mpi-nightly", "nightly/netloc/master/",
                        "https://download.open-mpi.org/nightly/netloc/master/");

    print("</div>\n\n");
}

include_once("$topdir/includes/footer.inc");

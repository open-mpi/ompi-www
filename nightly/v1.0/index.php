<?php
  $topdir = "../..";
  include_once("$topdir/includes/force-server.inc");
  force_server("www.open-mpi.org");

  $title = "Open MPI: 1.0 series nightly snapshot tarballs";
  include_once("$topdir/software/ompi/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/downloads.inc");
  $dir = "$topdir/nightly/v1.0";
?>

<h2>These are not stable releases of software packages!</h2>

<p>These are snapshots of the 1.0 branch of the Open MPI source code.
Note that snapshots are only generated when there has been a commit to
the corresponding branch in the SVN repository.  This may be less than
once a day!</p>

<p>Tarballs are made from the Subversion <code>/branches/v1.0</code> tree
nightly at approximately 9pm US Eastern time.</p>

<?php
$f = fopen("latest_snapshot.txt", "r");
if (!$f) {
    print("<p>No nightly tarballs available.</p>\n");
} else {
    $latest = trim(fgets($f, 4096));
    fclose($f);
?>

<p>Latest snapshot version: <strong><?php print($latest); ?></strong></p>

<div align=center>
<?php
    $md5 = read_checksums("md5sums.txt");
    $sha1 = read_checksums("sha1sums.txt");
    $t = new downloadTable($dir, ".");

    uksort($md5, callback);
    uksort($sha1, callback);
    foreach ($md5 as $file => $md5sum) {
        if ($file) {
            $t->addFile("Source code", $file, $md5sum, $sha1[$file]);
        }
    }

    $t->printMe();
    print("</div>\n\n");
}

# Do a reverse comparison so that we get the highest numbered tarball first
function callback($a, $b) {
    if ($a < $b) {
        return 1;
    } else if ($a > $b) {
        return -1;
    } else {
        return 0;
    }
}

include_once("$topdir/includes/footer.inc");

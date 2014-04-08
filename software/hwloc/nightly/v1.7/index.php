<?php
  $topdir = "../../../..";
  include_once("$topdir/includes/force-server.inc");
  force_server("www.open-mpi.org");

  $title = "Hardware Locality (hwloc): v1.7 series nightly snapshot tarballs";
  include_once("$topdir/projects/hwloc/nav.inc");
  include_once("$topdir/includes/header.inc");
  include_once("$topdir/includes/downloads.inc");
  $dir = "$topdir/software/hwloc/nightly/v1.7";
?>

<h2>These are not stable releases of software packages!</h2>

<p>Users looking for latest stable releases should <a href="<?php
print($topdir); ?>/software/hwloc/current/">look here</a>.</p>

<p>Note that snapshots are only generated when there has been a commit to
the corresponding branch in the Git repository.  This may be less than
once a day!</p>

<p>Tarballs are made from the Git v1.7 branch nightly at approximately
9pm US Indiana time.</p>

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
            $t->addFile("Nightly snapshot", $file, $md5sum, $sha1[$file]);
        }
    }

    $t->printMe();
    print("</div>\n\n");
}

# Do a reverse comparison so that we get the highest numbered tarball
# first.  Parse out the git sequence number and sort numerically (not
# lexigraphically).
function callback($a, $b) {
    $a_parts = explode("-", $a);
    $b_parts = explode("-", $b);

    if ($a_parts[2] < $b_parts[2]) {
        return 1;
    } else if ($a_parts[2] > $b_parts[2]) {
        return -1;
    } else {
        return 0;
    }
}

include_once("$topdir/includes/footer.inc");

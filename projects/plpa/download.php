<?php
$topdir = "../..";
$title = "Portable Linux Processor Affinity (PLPA) Downloads";
include_once("version.inc");
include_once("nav.inc");
include_once("$topdir/includes/downloads.inc");

$md5 = read_checksums("downloads/md5sums.txt");
$sha1 = read_checksums("downloads/sha1sums.txt");

include_once("$topdir/includes/header.inc");

$t_stable = new downloadTable("./downloads", "./downloads",
			      dirname($_SERVER["PHP_SELF"]));

if ($ver_stable) {
    $src = "v$ver_stable (stable) source code";

    $t_stable->addFile($src, "plpa-$ver_stable.tar.bz2",
		       $md5["plpa-$ver_stable.tar.bz2"],
		       $sha1["plpa-$ver_stable.tar.bz2"]);
    $t_stable->addFile($src, "plpa-$ver_stable.tar.gz",
		       $md5["plpa-$ver_stable.tar.gz"],
		       $sha1["plpa-$ver_stable.tar.gz"]);
}

if ($ver_devel) {
    $src = "v$ver_devel (development) source code";

    $t_stable->addFile($src, "plpa-$ver_devel.tar.bz2",
		       $md5["plpa-$ver_devel.tar.bz2"],
		       $sha1["plpa-$ver_devel.tar.bz2"]);
    $t_stable->addFile($src, "plpa-$ver_devel.tar.gz",
		       $md5["plpa-$ver_devel.tar.gz"],
		       $sha1["plpa-$ver_devel.tar.gz"]);
}

#############################################################################

$t_prerelease = new downloadTable("./downloads", "./downloads",
				  dirname($_SERVER["PHP_SELF"]));

if (isset($t_prerelease)) {
    $s = "v1.1 pre-release<br />";
    $fp = fopen("downloads/latest_snapshot.txt", "r");
    $v = fgets($fp);
    fclose($fp);
    $v = substr($v, 0, strlen($v) - 1);

    $name = "plpa-$v.tar";
    $t_prerelease->addFile($s, "$name.bz2", $md5["$name.bz2"],
			   $sha1["$name.bz2"]);
    $t_prerelease->addFile($s, "$name.gz", $md5["$name.gz"],
			   $sha1["$name.gz"]);
}

#############################################################################
?>

<p>The following releases are now available:</p>

<p>
<div align="center">
<?php
$t_stable->printMe();

if (isset($t_prerelease)) {
    print("</div>\n\n<p>Prerelease:</p>\n\n<p>\n<div align=center>\n\n");
    $t_prerelease->printMe();
}
?>
</div>
</p>

<?php 
  include_once("$topdir/includes/footer.inc");

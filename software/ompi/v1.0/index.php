<?php
$topdir = "../../..";

include_once("$topdir/software/ompi/v1.0/version.inc");
$title = "Open MPI: Version $ver_v1_0";

include_once("$topdir/software/ompi/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$md5 = read_checksums("downloads/md5sums.txt");
$sha1 = read_checksums("downloads/sha1sums.txt");

#############################################################################

$t = new downloadTable("./downloads", "./downloads",
		       dirname($_SERVER["PHP_SELF"]));

$src = "v$ver_v1_0 (stable) source code (<a href=\"srpm.php\">SRPM notes</a>)";
$name = "openmpi-$ver_v1_0.tar";
$t->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
$t->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
$name = "openmpi-$ver_v1_0-1.src.rpm";
$t->addFile($src, $name, $md5[$name], $sha1[$name]);

# No release candidates at the moment
#$s = "v1.0.2 (pending) alpha";
#$fp = fopen("downloads/latest_snapshot.txt", "r");
#$v = fgets($fp);
#fclose($fp);
#$v = substr($v, 0, strlen($v) - 1);
#
#$t->addFile($s, "openmpi-$v.tar.bz2",
#            $md5["openmpi-$v.tar.bz2"],
#            $sha1["openmpi-$v.tar.bz2"]);
#$t->addFile($s, "openmpi-$v.tar.gz",
#            $md5["openmpi-$v.tar.gz"],
#            $sha1["openmpi-$v.tar.gz"]);

$src = "v1.0.1 (older release) source code";
$name = "openmpi-1.0.1.tar";
$t->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
$t->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);

$src = "v1.0 (older release) source code";
$name = "openmpi-1.0.tar";
$t->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
$t->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);

#############################################################################
#
# Main display part of the page
#
#############################################################################

$prev_describe = "the v$ver_v1_2 download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<p><strong><font color=red>PLEASE NOTE:</font></strong> The 1.0 series
of Open MPI is effectively dead.  There was work beyond the last
stable release (v<? print($ver_v1_0); ?>) in the Subversion repository
that was never released as a stable package (but is available from the
<code>/branches/v1.0</code> tree in the SVN repository and the <a
href="<? print($topdir); ?>/nightly/v1.0/">v1.0 snapshot
tarballs</a>), but very little additional work has occurred on the
v1.0 branch since then.  As such, there are known bugs and problems
with the v1.0 series that have been addressed in later versions of
Open MPI.  <strong>The OMPI Team strongly recommends that users move
to a more recent version of Open MPI, if possible.</strong></p>

<p><dv align=center><hr width=50%></div></p>

<P><? $dir = "https://github.com/open-mpi/ompi-release/blob/v1.0/NEWS";
      print("<a href=\"$dir\">"); ?>This
file</a> contains a list of changes between the releases in the Open
MPI v1.0.x series.</p>

<p>See the 
<a href="<?php print($topdir); ?>/software/ompi/versions/timeline.php">version
timeline</a> for information on the chronology of Open MPI releases.</p>

<p>The following releases are now available:</p>

<p>
<div align="center">
<?php $t->printMe(); ?>
</div>
</p>

<?php 
  include_once("$topdir/includes/footer.inc");

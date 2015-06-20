<?php
$topdir = "..";
$title = "Open MPI Documentation";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/software/ompi/v1.1/version.inc");
include_once("$topdir/software/ompi/v1.2/version.inc");
include_once("$topdir/software/ompi/v1.3/version.inc");
include_once("$topdir/software/ompi/v1.4/version.inc");
include_once("$topdir/software/ompi/v1.5/version.inc");
include_once("$topdir/software/ompi/v1.6/version.inc");
include_once("$topdir/software/ompi/v1.7/version.inc");
include_once("$topdir/software/ompi/v1.8/version.inc");
include_once("$topdir/includes/header.inc");
?>

Documentation for the following versions is available:

<p>
<ul>

<p> <strong>Current release series</strong>

<li><a href="v1.8/"><strong>Open MPI v<?php print($ver_v1_8); ?>
</strong></a> (stable release series).  This documentation reflects
the latest progression in the 1.8.x series (it used to be the v1.7.x
feature series, but morphed into the "super stable" series).  The
emphasis of this tree is on bug fixes and stability.  <strong><font
color=red>This is the recomended series for users who need a stable,
mature code base.</font></strong></li>

<p> <strong>Upcoming release series</strong>

<li> The v1.10 series does not yet have any releases.</li>
<li> The v2.x series does not yet have any releases.</li>

<p> <strong>Older series (retired, deprecated, or otherwise no longer in
development)</strong>

<li><a href="v1.7/"><strong>v1.7 series</strong></a> (previous feature
series): This documentation is the latest progression in the feature 1.7.x
series; it was morphed into the v1.8 stable series in March of
2014.  This documentation is unlikely to be updated any more.</li>

<li><a href="v1.6/"><strong>v1.6 series</strong></a> (previous super
stable series): This documentation is the last in the progression of
the super stable 1.6.x series.  This documentation is unlikely to be
updated any more.</li>

<li><a href="v1.5/"><strong>v1.5 series</strong></a> (previous feature
series): This documentation is the latest progression in the feature 1.5.x
series; it was morphed into the v1.6 stable series in May of
2012.  This documentation is unlikely to be updated any more.</li>

<li><a href="v1.4/"><strong>v1.4 series</strong></a> (previous super
stable series): This documentation is the last in the progression of
the super stable 1.4.x series.  This documentation is unlikely to be
updated any more.</li>

<li><a href="v1.3/"><strong>v1.3 series</strong></a> (previous feature
series): This documentation is the latest progression in the feature 1.3.x
series; it was morphed into the v1.4 stable series in December of
2009.  This documentation is unlikely to be updated any more.</li>

<li><a href="v1.2/"><strong>v1.2 series</strong></a> (previous
stable): This documentation reflects the latest progression in the
stable 1.2.x series.  This documentation is unlikely to be updated any
more.</li>

<li><a href="v1.1/"><strong>v1.1 series</strong></a> (older stable):
This documentation reflects the latest progression in the stable 1.1.x
series.  It has not been updated in a long, long time.</li>

</ul>
</p>

<?php
include_once("$topdir/includes/footer.inc"); 

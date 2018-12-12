<?php
  $topdir = "..";
  $title = "Open MPI: Nightly snapshot tarballs";
  include_once("$topdir/software/ompi/nav.inc");
  include_once("$topdir/includes/header.inc");
?>

<p>Before deciding which series to download, be sure to read <a 
href="<?php print($topdir); ?>/software/ompi/versions/">Open MPI's
philosophy on version numbers</a>.  The short version is that odd
numbered release series are "feature" series that eventually morph
into even numbered "super stable" series.</p>

<p>There are multiple versions of nightly snapshot tarballs:</p>

<p>
<ul>

<p> <strong>Current release series</strong>

<li><a href="v4.0.x/"><strong>v4.0.x series</strong></a>: These are images from
the stable v4.0.x series.  <strong><font color="red">This is the recommended series
for all users to download and use.</font></strong></li>

<li><a href="v3.1.x/"><strong>v3.1.x series</strong></a>: These are images from
the stable v3.1.x series.  <strong><font color="red">This is the recommended series
for all users to download and use.</font></strong></li>

<p> <strong>Prior stable release series</strong>

<li><a href="v3.0.x/"><strong>v3.0.x series</strong></a>: These are images from
the stable v3.0.x series.  <strong><font color="red">This code base is still supported, but is in "bug fix only" mode.</font></strong></li>

<li><a href="v2.x/"><strong>v2.1.x series</strong></a>: These are images from
the stable v2.1.x series.  <strong><font color="red">This
code base is still supported, but is in "bug fix only"
mode.</font></strong></li> 

<li><a href="v2.0.x/"><strong>v2.0.x series</strong></a>: These are
images from the stable v2.0.x series.  <strong><font color="red">This
code base is still supported, but is in "bug fix only"
mode.</font></strong></li>

<p> <strong>Current development</strong>

<li><a href="master/"><strong>Master</strong></a> (development head):
These snapshots are from the Git master and reflect the current
head of development.  The usual disclaimers about the state of
development code apply.</li>

<li><a href="v4.0.x/"><strong>v4.0.x series</strong></a>: These are images from
the upcoming v4.0.x series.

<p> <strong>Older series (retired, deprecated, or otherwise no longer in
development)</strong>

<li><a href="v1.10/"><strong>v1.10 series</strong></a> (previous stable
series): These are
images from the stable v1.10 series.   This tree is unlikely to be
updated any more.</li>

<li><a href="v1.8/"><strong>v1.8 series</strong></a> (previous stable
series): These snapshots are from the 1.8 branch.  This tree is
unlikely to be updated any more.</li>

<li><a href="v1.7/"><strong>v1.7 series</strong></a> (previous feature
series): These snapshots are from the 1.7 branch and reflect the
latest progression in the feature 1.7.x series; it was morphed into the
v1.8 stable series at the end of March 2014.  This tree is unlikely to be
updated any more.</li>

<li><a href="v1.6/"><strong>v1.6 series</strong></a> (older stable
series): These snapshots
are from the 1.6 branch, which is the prior super stable release
series (i.e., these are snapshots from the renamed v1.5 branch that
reached the end of its feature development).
This tree is unlikely to be updated any more.</li>

<li><a href="v1.5/"><strong>v1.5 series</strong></a> (older
feature series): These snapshots are from the 1.5 branch and reflect the
latest progression in the feature 1.5.x series; it was morphed into the
v1.6 stable series in April of 2012.  This tree is unlikely
to be updated any more.</li>

<li><a href="v1.4/"><strong>v1.4 series</strong></a> (older stable release
series): These snapshots are from the 1.4 branch and reflect the
latest progression in the 1.4.x series (it used to be the v1.3.x
feature series, but morphed into the "super stable" series).  This
tree is unlikely to be updated any more.</li>

<li><a href="v1.3/"><strong>v1.3 series</strong></a> (older
feature series): These snapshots are from the 1.3 branch and reflect the
latest progression in the feature 1.3.x series; it was morphed into the
v1.4 stable series in December of 2009.  This tree is unlikely
to be updated any more.</li>

<li><a href="v1.2/"><strong>v1.2 series</strong></a> (older
stable): These snapshots are from the 1.2 branch and reflect the
latest progression in the stable 1.2.x series.  This tree is unlikely
to be updated any more.</li>

<li><a href="v1.1/"><strong>v1.1 series</strong></a> (older stable):
These snapshots are from the 1.1 branch and reflect the latest
progression in the stable 1.1.x series.  It has not been updated in a
long, long time.</li>

<li><a href="v1.0/"><strong>v1.0 series</strong></a> (older stable): These
snapshots are from the 1.0 branch and reflect the latest progression
in the older-but-still-stable 1.0.x series.  It has not been updated
in a long, long time.</li>

</ul>
</p>

<?php
  include_once("$topdir/includes/footer.inc");

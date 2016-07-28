<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (dev-47-g04b2055) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 26 21:02:07 2014" -->
<!-- isoreceived="20140127020207" -->
<!-- sent="Sun, 26 Jan 2014 21:02:07 -0500" -->
<!-- isosent="20140127020207" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (dev-47-g04b2055) ===" -->
<!-- id="20140127020207.366D525F0C6_at_jaguar.crest.iu.edu" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [hwloc-devel] === CREATE FAILURE (dev-47-g04b2055) ===<br>
<strong>From:</strong> MPI Team (<em>mpiteam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-26 21:02:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4040.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-48-gf0add98)"</a>
<li><strong>Previous message:</strong> <a href="4038.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (dev-47-g04b2055) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (dev-47-g04b2055):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Sun Jan 26 21:01:01 EST 2014
<br>
End time:   Sun Jan 26 21:02:07 EST 2014
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/tests/ports'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/tests/ports'
<br>
&nbsp;(cd xml &amp;&amp; make  top_distdir=../../hwloc-dev-47-g04b2055 distdir=../../hwloc-dev-47-g04b2055/tests/xml \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/tests/xml'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/tests/xml'
<br>
&nbsp;(cd linux &amp;&amp; make  top_distdir=../../hwloc-dev-47-g04b2055 distdir=../../hwloc-dev-47-g04b2055/tests/linux \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/tests/linux'
<br>
&nbsp;(cd gather &amp;&amp; make  top_distdir=../../../hwloc-dev-47-g04b2055 distdir=../../../hwloc-dev-47-g04b2055/tests/linux/gather \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[4]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/tests/linux/gather'
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/tests/linux/gather'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/tests/linux'
<br>
&nbsp;(cd rename &amp;&amp; make  top_distdir=../../hwloc-dev-47-g04b2055 distdir=../../hwloc-dev-47-g04b2055/tests/rename \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[3]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/tests/rename'
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/tests/rename'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/tests'
<br>
&nbsp;(cd doc &amp;&amp; make  top_distdir=../hwloc-dev-47-g04b2055 distdir=../hwloc-dev-47-g04b2055/doc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/doc'
<br>
cp -f ./hwloc-hello.c hwloc-hello-cpp.cpp
<br>
/bin/mkdir -p images
<br>
/usr/bin/fig2dev -L png images/diagram.fig images/diagram.png
<br>
/bin/mkdir -p images
<br>
/usr/bin/fig2dev -L eps images/diagram.fig images/diagram.eps
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc/doc'
<br>
make  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;top_distdir=&quot;hwloc-dev-47-g04b2055&quot; distdir=&quot;hwloc-dev-47-g04b2055&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dist-hook
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc'
<br>
csh &quot;./config/distscript.csh&quot; &quot;.&quot; &quot;hwloc-dev-47-g04b2055&quot; &quot;dev-47-g04b2055&quot;
<br>
&nbsp;
<br>
Creating hwloc distribution
<br>
In directory: /home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc
<br>
Srcdir: /home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc
<br>
Builddir: /home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc
<br>
Version: dev-47-g04b2055
<br>
Started: Sun Jan 26 21:02:07 EST 2014
<br>
&nbsp;
<br>
*** The srcdir does not already have a doxygen-doc tree built.
<br>
*** hwloc's config/distscript.csh requires the docs to be built
<br>
*** in the srcdir before executing 'make dist'.
<br>
make[2]: *** [dist-hook] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc'
<br>
make[1]: *** [distdir] Error 2
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/master/hwloc-2014-01-26-210101/hwloc'
<br>
make: *** [dist] Error 2
<br>
=======================================================================
<br>
<p>Your friendly daemon,
<br>
Cyrador
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4040.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-48-gf0add98)"</a>
<li><strong>Previous message:</strong> <a href="4038.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (dev-47-g04b2055) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>

<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 21:01:54 2011" -->
<!-- isoreceived="20110224020154" -->
<!-- sent="Wed, 23 Feb 2011 21:01:53 -0500" -->
<!-- isosent="20110224020153" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201102240201.p1O21r6A019502_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> MPI Team (<em>mpiteam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 21:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1998.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3209)"</a>
<li><strong>Previous message:</strong> <a href="1996.php">Samuel Thibault: "Re: [hwloc-devel] 1.1.2 and 1.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Wed Feb 23 21:01:02 EST 2011
<br>
End time:   Wed Feb 23 21:01:52 EST 2011
<br>
<p>=======================================================================
<br>
{ test ! -d &quot;hwloc-1.2a1r3208&quot; || { find &quot;hwloc-1.2a1r3208&quot; -type d ! -perm -200 -exec chmod u+w {} ';' &amp;&amp; rm -fr &quot;hwloc-1.2a1r3208&quot;; }; }
<br>
test -d &quot;hwloc-1.2a1r3208&quot; || mkdir &quot;hwloc-1.2a1r3208&quot;
<br>
&nbsp;(cd src &amp;&amp; make  top_distdir=../hwloc-1.2a1r3208 distdir=../hwloc-1.2a1r3208/src \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/src'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/src'
<br>
&nbsp;(cd include &amp;&amp; make  top_distdir=../hwloc-1.2a1r3208 distdir=../hwloc-1.2a1r3208/include \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/include'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/include'
<br>
&nbsp;(cd utils &amp;&amp; make  top_distdir=../hwloc-1.2a1r3208 distdir=../hwloc-1.2a1r3208/utils \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/utils'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/utils'
<br>
&nbsp;(cd tests &amp;&amp; make  top_distdir=../hwloc-1.2a1r3208 distdir=../hwloc-1.2a1r3208/tests \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/tests'
<br>
&nbsp;(cd ports &amp;&amp; make  top_distdir=../../hwloc-1.2a1r3208 distdir=../../hwloc-1.2a1r3208/tests/ports \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/tests/ports'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/tests/ports'
<br>
&nbsp;(cd xml &amp;&amp; make  top_distdir=../../hwloc-1.2a1r3208 distdir=../../hwloc-1.2a1r3208/tests/xml \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/tests/xml'
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/tests/xml'
<br>
&nbsp;(cd linux &amp;&amp; make  top_distdir=../../hwloc-1.2a1r3208 distdir=../../hwloc-1.2a1r3208/tests/linux \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/tests/linux'
<br>
make[2]: *** No rule to make target `32ppc-4n4c2c.source', needed by `distdir'.  Stop.
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/tests/linux'
<br>
make[1]: *** [distdir] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r3208/hwloc/tests'
<br>
make: *** [distdir] Error 1
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
<li><strong>Next message:</strong> <a href="1998.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3209)"</a>
<li><strong>Previous message:</strong> <a href="1996.php">Samuel Thibault: "Re: [hwloc-devel] 1.1.2 and 1.2"</a>
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

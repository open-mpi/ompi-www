<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  2 21:01:38 2009" -->
<!-- isoreceived="20091203020138" -->
<!-- sent="Wed, 2 Dec 2009 21:01:37 -0500" -->
<!-- isosent="20091203020137" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="200912030201.nB321brH006809_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2009-12-02 21:01:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0456.php">Jeff Squyres: "[hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0454.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
<p>Start time: Wed Dec  2 21:01:01 EST 2009
<br>
End time:   Wed Dec  2 21:01:37 EST 2009
<br>
<p>=======================================================================
<br>
{ test ! -d &quot;hwloc-1.0a1r1418&quot; || { find &quot;hwloc-1.0a1r1418&quot; -type d ! -perm -200 -exec chmod u+w {} ';' &amp;&amp; rm -fr &quot;hwloc-1.0a1r1418&quot;; }; }
<br>
test -d &quot;hwloc-1.0a1r1418&quot; || mkdir &quot;hwloc-1.0a1r1418&quot;
<br>
&nbsp;(cd src &amp;&amp; make  top_distdir=../hwloc-1.0a1r1418 distdir=../hwloc-1.0a1r1418/src \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1418/hwloc/src'
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1418/hwloc/src'
<br>
&nbsp;(cd utils &amp;&amp; make  top_distdir=../hwloc-1.0a1r1418 distdir=../hwloc-1.0a1r1418/utils \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1418/hwloc/utils'
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1418/hwloc/utils'
<br>
&nbsp;(cd tests &amp;&amp; make  top_distdir=../hwloc-1.0a1r1418 distdir=../hwloc-1.0a1r1418/tests \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1418/hwloc/tests'
<br>
&nbsp;(cd linux &amp;&amp; make  top_distdir=../../hwloc-1.0a1r1418 distdir=../../hwloc-1.0a1r1418/tests/linux \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[2]: Entering directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1418/hwloc/tests/linux'
<br>
make[2]: *** No rule to make target `16amd64-8n2c-cpusets_noadmin.tar.gz.output', needed by `distdir'.  Stop.
<br>
make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1418/hwloc/tests/linux'
<br>
make[1]: *** [distdir] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-hwloc-tarball-build-root/trunk/create-r1418/hwloc/tests'
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
<li><strong>Next message:</strong> <a href="0456.php">Jeff Squyres: "[hwloc-devel] hwloc-bind syntax"</a>
<li><strong>Previous message:</strong> <a href="0454.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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

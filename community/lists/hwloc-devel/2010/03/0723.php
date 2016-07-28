<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  8 21:01:49 2010" -->
<!-- isoreceived="20100309020149" -->
<!-- sent="Mon, 8 Mar 2010 21:01:47 -0500" -->
<!-- isosent="20100309020147" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201003090201.o2921lXV017400_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2010-03-08 21:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0724.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1816)"</a>
<li><strong>Previous message:</strong> <a href="0722.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1809"</a>
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
<p>Start time: Mon Mar  8 21:01:05 EST 2010
<br>
End time:   Mon Mar  8 21:01:47 EST 2010
<br>
<p>=======================================================================
<br>
{ test ! -d &quot;hwloc-1.0a1r1815&quot; || { find &quot;hwloc-1.0a1r1815&quot; -type d ! -perm -200 -exec chmod u+w {} ';' &amp;&amp; rm -fr &quot;hwloc-1.0a1r1815&quot;; }; }
<br>
test -d &quot;hwloc-1.0a1r1815&quot; || mkdir &quot;hwloc-1.0a1r1815&quot;
<br>
&nbsp;(cd src &amp;&amp; make  top_distdir=../hwloc-1.0a1r1815 distdir=../hwloc-1.0a1r1815/src \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1815/hwloc/src'
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1815/hwloc/src'
<br>
&nbsp;(cd utils &amp;&amp; make  top_distdir=../hwloc-1.0a1r1815 distdir=../hwloc-1.0a1r1815/utils \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am__remove_distdir=: am__skip_length_check=: am__skip_mode_fix=: distdir)
<br>
make[1]: Entering directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1815/hwloc/utils'
<br>
make[1]: *** No rule to make target `hwloc-calc.c', needed by `distdir'.  Stop.
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1815/hwloc/utils'
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
<li><strong>Next message:</strong> <a href="0724.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1816)"</a>
<li><strong>Previous message:</strong> <a href="0722.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1809"</a>
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

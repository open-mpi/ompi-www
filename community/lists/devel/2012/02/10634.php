<?
$subject_val = "[OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 15:44:57 2012" -->
<!-- isoreceived="20120228204457" -->
<!-- sent="Tue, 28 Feb 2012 15:44:52 -0500" -->
<!-- isosent="20120228204452" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3" -->
<!-- id="FA7E77D2-2137-41A5-B1C6-1D50423513DD_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 15:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10635.php">Paul H. Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Previous message:</strong> <a href="10633.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10635.php">Paul H. Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Reply:</strong> <a href="10635.php">Paul H. Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Reply:</strong> <a href="10637.php">Christopher Samuel: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a serious chilled water issue at IU right now; all non-essential servers (including Open MPI's nightly build server) have been turned off.  So we have no new &quot;official&quot; 1.5.5 RC, and no new nightlies will be produced until further notice.
<br>
<p>However, to keep the 1.5.5 release train going, I've made an &quot;unofficial&quot; 1.5.5rc3 and posted it in the usual location:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
<br>
<p>Note that since there are no nightly tarballs, this rc will be farther along than the latest 1.5 nightly until the nightlies are resumed.
<br>
<p>Changes since 1.5.5rc2:
<br>
<p>- Removed the ofud BTL
<br>
- Updates to README and some copyright notices
<br>
- Fix the lt_dladvise search that caused VPATH weirdness
<br>
- Removed the pcie mpool
<br>
- Bring in some upstream hwloc v1.3 fixes
<br>
- VT updates:
<br>
&nbsp;&nbsp;- non-GNU compiler _FORTIFY_SOURCE fixes
<br>
&nbsp;&nbsp;- VT-specific CXXFLAGS
<br>
&nbsp;&nbsp;- BlueGene fixes
<br>
- Fix processor affinity for some old/weird platforms
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10635.php">Paul H. Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Previous message:</strong> <a href="10633.php">Jeffrey Squyres: "Re: [OMPI devel] Compiling OpenMPI 1.5.4 on Debian 6 qemu arm6l"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10635.php">Paul H. Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Reply:</strong> <a href="10635.php">Paul H. Hargrove: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Reply:</strong> <a href="10637.php">Christopher Samuel: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
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

<?
$subject_val = "[OMPI devel] VERSION numbers for v1.8.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 08:57:31 2015" -->
<!-- isoreceived="20150417125731" -->
<!-- sent="Fri, 17 Apr 2015 12:57:29 +0000" -->
<!-- isosent="20150417125729" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] VERSION numbers for v1.8.5" -->
<!-- id="FA57C221-78BF-48BA-AD0B-432F36337B01_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] VERSION numbers for v1.8.5<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 08:57:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17241.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I reviewed the v1.8 logs and I think that this is what the shared library version numbers should be.  Essentially: most have minor code changes, meaning that they should get an revision bump (the &quot;r&quot; in c:r:a).  And the rest should get also get a revision bump because mutex.h changed.  This latter part might be a little overkill, but I think it's harmless (and I don't feel like checking closely to see if mutex.h directly affects each shared library that didn't have other code changes).
<br>
<p>Can someone please double check these?
<br>
<p>-----
<br>
# JMS Multiple changes in OMPI code: was 7:0:6
<br>
libmpi_so_version=7:1:6
<br>
libmpi_cxx_so_version=2:3:1
<br>
# JMS Fortran code changed: was 7:0:5
<br>
libmpi_mpifh_so_version=7:1:5
<br>
# JMS Fortran code changed: was 5:0:4
<br>
libmpi_usempi_tkr_so_version=5:1:4
<br>
# JMS Fortran code changed: was 1:0:1
<br>
libmpi_usempi_ignore_tkr_so_version=1:1:1
<br>
# JMS Fortran code changed: was 6:0:6
<br>
libmpi_usempif08_so_version=6:1:6
<br>
# JMS ORTE code changed: was 7:5:0
<br>
libopen_rte_so_version=7:6:0
<br>
# JMS Multiple changes in OPAL code: was 8:1:2
<br>
libopen_pal_so_version=8:2:2
<br>
libmpi_java_so_version=3:0:2
<br>
# JMS Oshmem code changed: was 3:1:0
<br>
liboshmem_so_version=3:2:0
<br>
<p># OMPI layer
<br>
# JMS cuda code changed: was 1:7:0
<br>
libmca_common_cuda_so_version=1:8:0
<br>
# JMS Changed opal/thread/mutex.h: was 2:5:0
<br>
libmca_common_mx_so_version=2:6:0
<br>
# JMS Changed opal/thread/mutex.h: was 4:4:0
<br>
libmca_common_sm_so_version=4:5:0
<br>
# JMS Changed opal/thread/mutex.h: was 2:1:2
<br>
libmca_common_ugni_so_version=2:2:2
<br>
# JMS Changed opal/thread/mutex.h: was 2:3:2
<br>
libmca_common_verbs_so_version=2:4:2
<br>
<p># OPAL layer
<br>
# JMS Changed opal/thread/mutex.h: was 2:3:1
<br>
libmca_opal_common_pmi_so_version=2:4:1
<br>
-----
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
<li><strong>Next message:</strong> <a href="17241.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] running Open MPI with different install paths"</a>
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

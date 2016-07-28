<?
$subject_val = "[OMPI devel] sanity check on 1.6.4 .so versions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 12:29:42 2013" -->
<!-- isoreceived="20130117172942" -->
<!-- sent="Thu, 17 Jan 2013 17:29:37 +0000" -->
<!-- isosent="20130117172937" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] sanity check on 1.6.4 .so versions" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3E07D5E8_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] sanity check on 1.6.4 .so versions<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 12:29:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11934.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="11932.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Given that we've screwed this up before, could someone please sanity check the .so versions I'm planning on using for the 1.6.4 release.  Only 2 libraries changed: libmpi and libopen-pal (most other changes were in VT and various components).  No interfaces changed.
<br>
<p>Is this right?
<br>
<p>###### libmpi changed
<br>
# was: libmpi_so_version=1:6:0
<br>
libmpi_so_version=1:7:0
<br>
libmpi_cxx_so_version=1:1:0
<br>
libmpi_f77_so_version=1:6:0
<br>
libmpi_f90_so_version=4:0:3
<br>
libopen_rte_so_version=4:3:0
<br>
######  opal changed
<br>
# was: libopen_pal_so_version=4:3:0
<br>
libopen_pal_so_version=4:4:0
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
<li><strong>Next message:</strong> <a href="11934.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="11932.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
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

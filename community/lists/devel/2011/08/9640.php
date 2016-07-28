<?
$subject_val = "[OMPI devel] v1.5.4 .so version numbers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 20:23:02 2011" -->
<!-- isoreceived="20110810002302" -->
<!-- sent="Tue, 9 Aug 2011 20:22:57 -0400" -->
<!-- isosent="20110810002257" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.5.4 .so version numbers" -->
<!-- id="09043838-BEDA-46EB-90C6-DB519E025AE6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] v1.5.4 .so version numbers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-09 20:22:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9641.php">Jeff Squyres: "[OMPI devel] 1.5.4rc2 is now posted"</a>
<li><strong>Previous message:</strong> <a href="9639.php">Jeff Squyres: "[OMPI devel] 1.5.4 NEWS bullets"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's what the version numbers were for v1.5.3:
<br>
<p>libmpi_so_version=1:1:0
<br>
libmpi_cxx_so_version=1:1:0
<br>
libmpi_f77_so_version=1:1:0
<br>
libmpi_f90_so_version=1:1:0
<br>
libopen_rte_so_version=2:0:0
<br>
libopen_pal_so_version=2:0:0
<br>
<p>Here's what I think they should be for v1.5.4 -- can someone sanity check me?
<br>
<p>libmpi_so_version=1:2:0
<br>
&nbsp;&nbsp;--&gt; None of the C MPI API calls have changed (which is what we defined as the only interfaces that matter here), but some internal code did change.
<br>
<p>libmpi_cxx_so_version=1:1:0
<br>
&nbsp;&nbsp;--&gt; No interface or code changes (same number as v1.5.3)
<br>
<p>libmpi_f77_so_version=1:2:0
<br>
&nbsp;&nbsp;--&gt; Minor fixes to some logic, but no interfaces changed
<br>
<p>libmpi_f90_so_version=2:0:1
<br>
&nbsp;&nbsp;--&gt; New (correct) interfaces for MPI_SCATTERV were added.  The old (incorrect) interfaces were kept for ABI reasons.
<br>
<p>libopen_rte_so_version=3:0:0
<br>
&nbsp;&nbsp;--&gt; The app_idx change breaks compatibility with older versions
<br>
<p>libopen_pal_so_version=3:0:0
<br>
&nbsp;&nbsp;--&gt; The DDT changes break compatibility with older versions
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9641.php">Jeff Squyres: "[OMPI devel] 1.5.4rc2 is now posted"</a>
<li><strong>Previous message:</strong> <a href="9639.php">Jeff Squyres: "[OMPI devel] 1.5.4 NEWS bullets"</a>
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

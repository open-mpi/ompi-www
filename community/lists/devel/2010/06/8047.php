<?
$subject_val = "[OMPI devel] v1.5 .so version numbers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  3 15:34:22 2010" -->
<!-- isoreceived="20100603193422" -->
<!-- sent="Thu, 3 Jun 2010 15:34:16 -0400" -->
<!-- isosent="20100603193416" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.5 .so version numbers" -->
<!-- id="F9678120-9D8A-4EFF-A3E7-9AA19EF47996_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] v1.5 .so version numbers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-03 15:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8048.php">’≈æß: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Previous message:</strong> <a href="8046.php">Jeff Squyres: "[OMPI devel] 1.5rc1 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8055.php">Ralf Wildenhues: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>Reply:</strong> <a href="8055.php">Ralf Wildenhues: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SHORT VERSION: We broke ABI from the 1.4 series to the v1.5 series.  I propose changing all the libtool .so version numbers as shown below to enforce that break.  Can someone sanity check this?
<br>
<p>Index: VERSION
<br>
===================================================================
<br>
--- VERSION	(revision 23242)
<br>
+++ VERSION	(working copy)
<br>
@@ -79,12 +79,12 @@
<br>
&nbsp;# Version numbers are described in the Libtool current:revision:age
<br>
&nbsp;# format.
<br>
&nbsp;
<br>
-libmpi_so_version=0:2:0
<br>
-libmpi_cxx_so_version=0:0:0
<br>
-libmpi_f77_so_version=0:0:0
<br>
-libmpi_f90_so_version=0:0:0
<br>
-libopen_rte_so_version=0:0:0
<br>
-libopen_pal_so_version=0:0:0
<br>
+libmpi_so_version=1:0:0
<br>
+libmpi_cxx_so_version=1:0:0
<br>
+libmpi_f77_so_version=1:0:0
<br>
+libmpi_f90_so_version=1:0:0
<br>
+libopen_rte_so_version=1:0:0
<br>
+libopen_pal_so_version=1:0:0
<br>
&nbsp;
<br>
&nbsp;# &quot;Common&quot; components install standalone libraries that are run-time
<br>
&nbsp;# linked by one or more components.  So they need to be versioned as
<br>
@@ -92,5 +92,5 @@
<br>
&nbsp;# components-don't-affect-the-build-system abstraction.
<br>
&nbsp;
<br>
-libmca_common_sm_so_version=1:0:0
<br>
-libmca_common_mx_so_version=0:0:0
<br>
-libmca_common_portals_so_version=0:0:0
<br>
+libmca_common_sm_so_version=2:0:0
<br>
+libmca_common_mx_so_version=1:0:0
<br>
+libmca_common_portals_so_version=1:0:0
<br>
<p>MORE DETAILS:
<br>
<p>libopen_rte.so now wholly includes libopen_pal.so, and libmpi.so wholly includes libopen_rte.so (and therefore also libopen_pa.so).  This was done for complex reasons -- the quick explanation is that is sucks because it makes us break ABI right now, but it puts us in a better position for ABI compatibility in the future.  I wish that we had figured this out back at v1.3.2 when we introduced ABI compatibility, but we didn't -- so here we are.  Cope.
<br>
<p>To enforce this ABI break, I propose setting the libtool version numbers of all of our shared libraries to 1:0:0.  This means that apps linked against v1.5 libmpi.so will *NOT* be able to use libmpi.so from the v1.3 or v1.4 series.  They will have to relink (at a minimum).
<br>
<p>Resetting *all* the library numbers to 1:0:0 is probably overkill (e.g., there's probably little gained by resetting the common libraries to 1:0:0), but it seems like an &quot;ok&quot; thing to do -- reset all the numbers across the board for minimum confusion.
<br>
<p>Can someone sanity check my rationale here?  I'm not tied to this scheme; it just seems simple and, while probably being a bit overly broad, makes the change easy to describe and consistent.
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
<li><strong>Next message:</strong> <a href="8048.php">’≈æß: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<li><strong>Previous message:</strong> <a href="8046.php">Jeff Squyres: "[OMPI devel] 1.5rc1 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8055.php">Ralf Wildenhues: "Re: [OMPI devel] v1.5 .so version numbers"</a>
<li><strong>Reply:</strong> <a href="8055.php">Ralf Wildenhues: "Re: [OMPI devel] v1.5 .so version numbers"</a>
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

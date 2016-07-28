<?
$subject_val = "[OMPI devel] patch for building gm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 23:45:25 2007" -->
<!-- isoreceived="20080101044525" -->
<!-- sent="Mon, 31 Dec 2007 20:42:36 -0800" -->
<!-- isosent="20080101044236" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] patch for building gm btl" -->
<!-- id="4779C4BC.5010102_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] patch for building gm btl<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-31 23:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2916.php">Paul H. Hargrove: "[OMPI devel] Trac nit-pick"</a>
<li><strong>Previous message:</strong> <a href="2914.php">Paul H. Hargrove: "[OMPI devel] Minor patch for !IPV6_V6ONLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2923.php">Jeff Squyres: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2923.php">Jeff Squyres: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2931.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried today to build the OMPI trunk on a system w/ GM libs installed 
<br>
(I tried both GM-2.0.16 and GM-1.6.4) and found that the GM BTL won't 
<br>
even compile, due to unbalanced parens.  The patch below reintroduces 
<br>
the parens that were apparently lost in r16633:
<br>
<p>------------------------------------------------------------------------
<br>
r16633 | rlgraham | 2007-11-01 15:38:50 -0800 (Thu, 01 Nov 2007) | 3 lines
<br>
<p>change all instances of ompi_free_list_init to ompi_free_list_init_new.  Header
<br>
and payload data are specified separately at this stage.
<br>
------------------------------------------------------------------------
<br>
<p><p>The fact that this has gone unfixed for 2 months suggests to me that 
<br>
nobody is building the GM BTL.  So, how would I go about checking ...
<br>
a) ...if there exists any periodic build of the GM BTL via MTT?
<br>
b) ...if such builds, if any, experience the same error(s) as I
<br>
c) ...which GM library versions such builds, if any, compile against
<br>
d) ...if anybody wants to help setup an MTT for GM on my system (NOTE: 
<br>
Jeff Squyres, Brian Barrett and George Bosilca all have existing 
<br>
accounts on my cluster, though possibly expired/disabled).
<br>
<p>-Paul
<br>
<p>--- ompi/mca/btl/gm/btl_gm_component.c  (revision 17027)
<br>
+++ ompi/mca/btl/gm/btl_gm_component.c  (working copy)
<br>
@@ -285,7 +285,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof (mca_btl_gm_frag_eager_t),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CACHE_LINE_SIZE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CLASS (mca_btl_gm_frag_eager_t),
<br>
-            1 &lt;&lt; mca_btl_gm_component.gm_eager_frag_size) + sizeof 
<br>
(uintptr_t),
<br>
+            (1 &lt;&lt; mca_btl_gm_component.gm_eager_frag_size) + sizeof 
<br>
(uintptr_t),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CACHE_LINE_SIZE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl-&gt;gm_max_send_tokens,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_gm_component.gm_free_list_max,
<br>
@@ -296,7 +296,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sizeof (mca_btl_gm_frag_max_t),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CACHE_LINE_SIZE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CLASS (mca_btl_gm_frag_max_t),
<br>
-            1 &lt;&lt; mca_btl_gm_component.gm_max_frag_size) + sizeof 
<br>
(uintptr_t),
<br>
+            (1 &lt;&lt; mca_btl_gm_component.gm_max_frag_size) + sizeof 
<br>
(uintptr_t),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CACHE_LINE_SIZE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl-&gt;gm_max_recv_tokens,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_gm_component.gm_free_list_max,
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2916.php">Paul H. Hargrove: "[OMPI devel] Trac nit-pick"</a>
<li><strong>Previous message:</strong> <a href="2914.php">Paul H. Hargrove: "[OMPI devel] Minor patch for !IPV6_V6ONLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2923.php">Jeff Squyres: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2923.php">Jeff Squyres: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/01/2931.php">Patrick Geoffray: "Re: [OMPI devel] patch for building gm btl"</a>
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

<?
$subject_val = "Re: [OMPI devel] two questions about 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 09:26:42 2013" -->
<!-- isoreceived="20130619132642" -->
<!-- sent="Wed, 19 Jun 2013 13:26:36 +0000" -->
<!-- isosent="20130619132636" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] two questions about 1.7.1" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F690545_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51C19B8D.7060402_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] two questions about 1.7.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 09:26:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="12471.php">Jeff Squyres (jsquyres): "[OMPI devel] End of life: original hg mirror on www.open-mpi.org"</a>
<li><strong>In reply to:</strong> <a href="12470.php">Paul Kapinos: "[OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="12473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 19, 2013, at 7:52 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.
</span><br>
<span class="quotelev1">&gt; Using the new Open MPI 1.7.1 we see some messages on the console:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; example mpiext init
</span><br>
<span class="quotelev2">&gt; &gt; example mpiext fini
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ... on each call to MPI_INIT, MPI_FINALIZE at least in Fortran programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems somebody forgot to disable some 'printf'-debug-output? =)
</span><br>
<p>This is actually from the mpiext example plugin, not from the Fortran code in OMPI.  It's example code, so it has printf's in it.  I'm a little surprised to see that output, though -- I wonder if it's somehow getting enabled when it shouldn't be...?
<br>
<p>How did you configure/compile Open MPI?
<br>
<p><span class="quotelev1">&gt; II.
</span><br>
<span class="quotelev1">&gt; In the 1.7.x series, the 'carto' framework has been deleted:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/announce/2013/04/0053.php">http://www.open-mpi.org/community/lists/announce/2013/04/0053.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; - Removed maffinity, paffinity, and carto frameworks (and associated
</span><br>
<span class="quotelev2">&gt; &gt;   MCA params).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there some replacement for this? Or, would Open MPI detect the NUMA structure of nodes automatically?
</span><br>
<p>Yes.  OMPI uses hwloc internally now to figure this stuff out.
<br>
<p><span class="quotelev1">&gt; Background: Currently we're using the 'carto' framework on our kinda special 'Bull BCS' nodes. Each such node consist of 4 boards with own IB card but build a shared memory system. Clearly, communicating should go over the nearest IB interface - for this we use 'carto' now.
</span><br>
<p>It should do this automatically in the 1.7 series.
<br>
<p>Hmm; I see there isn't any verbose output about which devices it picks, though. :-(  Try this patch, and run with --mca btl_base_verbose 100 and see if you see appropriate devices being mapped to appropriate processes:
<br>
<p>Index: mca/btl/openib/btl_openib_component.c
<br>
===================================================================
<br>
--- mca/btl/openib/btl_openib_component.c	(revision 28652)
<br>
+++ mca/btl/openib/btl_openib_component.c	(working copy)
<br>
@@ -2712,6 +2712,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.ib_num_btls &lt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.ib_max_btls); i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (distance != dev_sorted[i].distance) {
<br>
+            BTL_VERBOSE((&quot;openib: skipping device %s; it's too far away&quot;, 
<br>
+                         ibv_get_device_name(dev_sorted[i].ib_dev)));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="12471.php">Jeff Squyres (jsquyres): "[OMPI devel] End of life: original hg mirror on www.open-mpi.org"</a>
<li><strong>In reply to:</strong> <a href="12470.php">Paul Kapinos: "[OMPI devel] two questions about 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="12473.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13304.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
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

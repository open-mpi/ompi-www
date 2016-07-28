<?
$subject_val = "Re: [OMPI devel] Still seeing hangs in OMPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 15:16:07 2008" -->
<!-- isoreceived="20080822191607" -->
<!-- sent="Fri, 22 Aug 2008 15:15:56 -0400" -->
<!-- isosent="20080822191556" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still seeing hangs in OMPI 1.3" -->
<!-- id="48AF106C.7070403_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48AEF830.9080205_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Still seeing hangs in OMPI 1.3<br>
<strong>From:</strong> Rolf vandeVaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-22 15:15:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4606.php">George Bosilca: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="4604.php">Graham, Richard L.: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="4603.php">Rolf vandeVaart: "[OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4606.php">George Bosilca: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="4606.php">George Bosilca: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George:
<br>
<p>I did some more experimenting.  Just copying over the btl_sm_fifo.h file 
<br>
was not enough.  I also had to make this change (which I found in the 
<br>
trunk) to the btl_sm_component.c file. After that, my hangs went away.
<br>
<p>&nbsp;burpen-csx10-0 164 =&gt;svn diff btl_sm_component.c
<br>
Index: btl_sm_component.c
<br>
===================================================================
<br>
--- btl_sm_component.c  (revision 19393)
<br>
+++ btl_sm_component.c  (working copy)
<br>
@@ -389,9 +389,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_atomic_lock(fifo-&gt;tail_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-        hdr = (mca_btl_sm_hdr_t*)ompi_cb_fifo_read_from_tail(&amp;fifo-&gt;tail-&gt;cb_fifo,
<br>
-                                                             fifo-&gt;tail-&gt;cb_overflow,
<br>
-                                                             &amp;useless );
<br>
+        hdr = (mca_btl_sm_hdr_t*)ompi_fifo_read_from_tail(fifo);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* release thread lock */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(opal_using_threads()) {
<br>
&nbsp;burpen-csx10-0 165 =&gt;
<br>
<p><p><p>Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; George:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are still seeing hangs in OMPI 1.3 which I assume are due to the 
</span><br>
<span class="quotelev1">&gt; PML issue.  However, we do not see it in the trunk.  My investigation 
</span><br>
<span class="quotelev1">&gt; is early, but I am wondering if the merge of the changes into v1.3 may 
</span><br>
<span class="quotelev1">&gt; be missing a file.  From the original fix in the trunk, I see the 
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changeset 19309 (trunk)
</span><br>
<span class="quotelev1">&gt; btl_sm.c  (modified)  (2 diffs)
</span><br>
<span class="quotelev1">&gt; btl_sm_component.c (modified) (7 diffs)
</span><br>
<span class="quotelev1">&gt; btl_sm_fifo.h (modified) (1 diff)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the ompi v1.3 I see this:
</span><br>
<span class="quotelev1">&gt; Changeset 19378 (v1.3)
</span><br>
<span class="quotelev1">&gt; btl/sm/btl_sm.c (modified) (1 diff)
</span><br>
<span class="quotelev1">&gt; btl/sm/btl_sm_component.c (modified) (2 diffs)
</span><br>
<span class="quotelev1">&gt; coll/sm/coll_sm_module.c (modified) (1 diff)
</span><br>
<span class="quotelev1">&gt; pml/ob1/pml_ob1_sendreq.c (modified) (1 diff)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 1.3 changeset has those two extra files, but they were just 
</span><br>
<span class="quotelev1">&gt; formatting fixes.  So, my concern is the missing btl_sm_fifo.h change 
</span><br>
<span class="quotelev1">&gt; in 1.3.  I have not tried it out yet, but wanted to see if anyone else 
</span><br>
<span class="quotelev1">&gt; is still seeing 1.3 hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4606.php">George Bosilca: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="4604.php">Graham, Richard L.: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="4603.php">Rolf vandeVaart: "[OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4606.php">George Bosilca: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="4606.php">George Bosilca: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
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

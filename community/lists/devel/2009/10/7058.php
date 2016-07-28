<?
$subject_val = "Re: [OMPI devel] btl_sm_component_progress return code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 16:03:34 2009" -->
<!-- isoreceived="20091030200334" -->
<!-- sent="Fri, 30 Oct 2009 16:03:24 -0400" -->
<!-- isosent="20091030200324" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_sm_component_progress return code" -->
<!-- id="CB81D181-F4B8-45AA-AB08-7CFA7E1BF90D_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AEB3CEF.1040504_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl_sm_component_progress return code<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 16:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7059.php">Eugene Loh: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>Previous message:</strong> <a href="7057.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>In reply to:</strong> <a href="7056.php">Eugene Loh: "[OMPI devel] btl_sm_component_progress return code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7059.php">Eugene Loh: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>Reply:</strong> <a href="7059.php">Eugene Loh: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The progress functions do not need to return an error code. If there  
<br>
is an error they should propagate it back through the descriptors. The  
<br>
only meaning of the return code of the progress functions is to know  
<br>
if any event had happened during this round of progress. The  
<br>
opal_output use it to trigger the yield (if one if necessary).
<br>
<p>Anyway, this is a good catch. We're doing a big mixup there. Attached  
<br>
you will find a patch that clean this problem. As expected, there is  
<br>
no performance impact ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>Here is the patch:
<br>
<p>Index: btl_sm_component.c
<br>
===================================================================
<br>
--- btl_sm_component.c	(revision 22176)
<br>
+++ btl_sm_component.c	(working copy)
<br>
@@ -361,7 +361,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_fifo_t *fifo = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_hdr_t *hdr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int my_smp_rank = mca_btl_sm_component.my_smp_rank;
<br>
-    int peer_smp_rank, j, rc = 0;
<br>
+    int peer_smp_rank, j, rc = 0, events = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* first, deal with any pending sends */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* This check should be fast since we only need to check one  
<br>
variable. */
<br>
@@ -399,7 +399,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-        rc++;
<br>
+        events++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* dispatch fragment by type */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch(((uintptr_t)hdr) &amp; MCA_BTL_SM_FRAG_TYPE_MASK) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case MCA_BTL_SM_FRAG_SEND:
<br>
@@ -480,5 +480,5 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    return rc;
<br>
+    return events;
<br>
&nbsp;&nbsp;}
<br>
<p><p>On Oct 30, 2009, at 15:22 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; What is the significance of the btl_sm_component_progress() return  
</span><br>
<span class="quotelev1">&gt; code rc?  It appears to be incremented each time something is read  
</span><br>
<span class="quotelev1">&gt; off the FIFO, but also it's the return code from writing to a FIFO.   
</span><br>
<span class="quotelev1">&gt; This seems kind of dual purpose.
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
<li><strong>Next message:</strong> <a href="7059.php">Eugene Loh: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>Previous message:</strong> <a href="7057.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>In reply to:</strong> <a href="7056.php">Eugene Loh: "[OMPI devel] btl_sm_component_progress return code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7059.php">Eugene Loh: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
<li><strong>Reply:</strong> <a href="7059.php">Eugene Loh: "Re: [OMPI devel] btl_sm_component_progress return code"</a>
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

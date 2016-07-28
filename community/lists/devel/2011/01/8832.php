<?
$subject_val = "Re: [OMPI devel] mca_bml_r2_del_proc_btl()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 09:45:32 2011" -->
<!-- isoreceived="20110104144532" -->
<!-- sent="Tue, 4 Jan 2011 09:45:27 -0500" -->
<!-- isosent="20110104144527" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_bml_r2_del_proc_btl()" -->
<!-- id="061F4AD3-3AA6-4CDA-BAE5-18009B91E055_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D224AFC.6050609_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_bml_r2_del_proc_btl()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 09:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8833.php">Jeff Squyres: "[OMPI devel] Opening the CMR doors for 1.5.2 next Tuesday"</a>
<li><strong>Previous message:</strong> <a href="8831.php">Jeff Squyres: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>In reply to:</strong> <a href="8829.php">Eugene Loh: "[OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8834.php">Eugene Loh: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>Reply:</strong> <a href="8834.php">Eugene Loh: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As the endpoint's btl_max_send_size has been initialized to the min of the max_size of all BTLs in the send (respectively rdma) array, the loop you pinpointed will have no effect (as it is impossible to find a smaller value than the minimum already computed). Pre-setting to (size_t)-1 should fix the issue.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Jan 3, 2011, at 17:17 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I can't tell if this is a problem, though I suspect it's a small one even if it's a problem at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In mca_bml_r2_del_proc_btl(), a BTL is removed from the send list and from the RDMA list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the BTL is removed from the send list, the end-point's max send size is recomputed to be the minimum of the max send sizes of the remaining BTLs.  The code looks like this, where I've removed some code to focus on the parts that matter:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   /* remove btl from send list */
</span><br>
<span class="quotelev1">&gt;   if(mca_bml_base_btl_array_remove(&amp;ep-&gt;btl_send, btl)) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       /* reset max_send_size to the min of all btl's */
</span><br>
<span class="quotelev1">&gt;       for(b=0; b&lt; mca_bml_base_btl_array_get_size(&amp;ep-&gt;btl_send); b++) {
</span><br>
<span class="quotelev1">&gt;           bml_btl = mca_bml_base_btl_array_get_index(&amp;ep-&gt;btl_send, b);
</span><br>
<span class="quotelev1">&gt;           ep_btl = bml_btl-&gt;btl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           if (ep_btl-&gt;btl_max_send_size &lt; ep-&gt;btl_max_send_size) {
</span><br>
<span class="quotelev1">&gt;               ep-&gt;btl_max_send_size = ep_btl-&gt;btl_max_send_size;
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't that inner loop be preceded by initialization of ep-&gt;btl_max_send_size to some very large value (ironically enough, perhaps &quot;-1&quot;)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something similar happens in the same function when the BTL is removed from the RDMA list and  ep-&gt;btl_pipeline_send_length and ep-&gt;btl_send_limit are recomputed.
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
<li><strong>Next message:</strong> <a href="8833.php">Jeff Squyres: "[OMPI devel] Opening the CMR doors for 1.5.2 next Tuesday"</a>
<li><strong>Previous message:</strong> <a href="8831.php">Jeff Squyres: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>In reply to:</strong> <a href="8829.php">Eugene Loh: "[OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8834.php">Eugene Loh: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
<li><strong>Reply:</strong> <a href="8834.php">Eugene Loh: "Re: [OMPI devel] mca_bml_r2_del_proc_btl()"</a>
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

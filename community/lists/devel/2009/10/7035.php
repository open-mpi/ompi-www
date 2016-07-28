<?
$subject_val = "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 17:51:02 2009" -->
<!-- isoreceived="20091026215102" -->
<!-- sent="Mon, 26 Oct 2009 17:50:58 -0400" -->
<!-- isosent="20091026215058" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed" -->
<!-- id="920FA707-A700-4283-86E4-C73BCC333845_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1256307003.10740.58.camel_at_frecb000730" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 17:50:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7036.php">Paul H. Hargrove: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>Previous message:</strong> <a href="7034.php">Chris Samuel: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>In reply to:</strong> <a href="7019.php">Nadia Derbey: "[OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQ when	ibv_resize_cq() has failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7036.php">Paul H. Hargrove: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>Reply:</strong> <a href="7036.php">Paul H. Hargrove: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the analysis!
<br>
<p>We've argued about btl_r2_add_btls() before -- IIRC, the consensus is  
<br>
that we want it to be able to continue even if a BTL fails.  So I  
<br>
*think* that your #1 answer is better.
<br>
<p>However, we might want to try a little harder if EINVAL is returned --  
<br>
perhaps try decreasing number of CQ entries and try again until either  
<br>
we have too few CQ entries to be useful (e.g., 0 or some higher number  
<br>
that is still &quot;too small&quot;), or fail the BTL alltogether...?
<br>
<p>On Oct 23, 2009, at 10:10 AM, Nadia Derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yesterdays I had to analyze a SIGSEV occuring after the following
</span><br>
<span class="quotelev1">&gt; message had been output:
</span><br>
<span class="quotelev1">&gt; [.... adjust_cq] cannot resize completion queue, error: 22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I found is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When ibv_resize_cq() fails to resize a CQ (in my case it returned
</span><br>
<span class="quotelev1">&gt; EINVAL), adjust_cq() returns an error and create_srq() is not called  
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_size_queues().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: One of our infiniband specialists told me that EINVAL was  
</span><br>
<span class="quotelev1">&gt; returned
</span><br>
<span class="quotelev1">&gt; in that case because we were asking for more CQ entries than the max
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_bml_r2_add_btls() goes on executing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then qp_create_all() is called (connect/btl_openib_connect_oob.c).
</span><br>
<span class="quotelev1">&gt; ibv_create_qp() succeeds even though init_attr.srq is a NULL pointer
</span><br>
<span class="quotelev1">&gt; (remember that create_srq() has not been previously called).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since all the QPs have been successfully created, qp_create_all() then
</span><br>
<span class="quotelev1">&gt; calls:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_endpoint_post_recvs()
</span><br>
<span class="quotelev1">&gt;   --&gt; mca_btl_openib_post_srr()
</span><br>
<span class="quotelev1">&gt;       --&gt; ibv_post_srq_recv() on a NULL SRQ
</span><br>
<span class="quotelev1">&gt; ==&gt; SIGSEGV
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I'm not wrong in the analysis above, we have the choice between 2
</span><br>
<span class="quotelev1">&gt; solutions to fix this problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. if EINVAL is returned by ibv_resize_cq() in adjust_cq(), treat this
</span><br>
<span class="quotelev1">&gt; as the ENOSYS case: do not return an error, since the CQ has
</span><br>
<span class="quotelev1">&gt; successfully been created may be with less entries than needed, but it
</span><br>
<span class="quotelev1">&gt; is there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doing this we assume that EINVAL will always be the symptom of a &quot;too
</span><br>
<span class="quotelev1">&gt; many entries asked for&quot; error from the IB stack. I don't have the
</span><br>
<span class="quotelev1">&gt; answer...
</span><br>
<span class="quotelev1">&gt; + I don't know if this won't imply a degraded mode in terms of
</span><br>
<span class="quotelev1">&gt; performances.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Fix mca_bml_r2_add_btls() to cleanly exit if an error occurs during
</span><br>
<span class="quotelev1">&gt; btl_add_procs().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI I tested solution #1 and it worked...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestion or comment would be welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7036.php">Paul H. Hargrove: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>Previous message:</strong> <a href="7034.php">Chris Samuel: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>In reply to:</strong> <a href="7019.php">Nadia Derbey: "[OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQ when	ibv_resize_cq() has failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7036.php">Paul H. Hargrove: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>Reply:</strong> <a href="7036.php">Paul H. Hargrove: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
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

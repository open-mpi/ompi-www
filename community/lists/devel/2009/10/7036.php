<?
$subject_val = "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 18:06:26 2009" -->
<!-- isoreceived="20091026220626" -->
<!-- sent="Mon, 26 Oct 2009 15:06:06 -0700" -->
<!-- isosent="20091026220606" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed" -->
<!-- id="4AE61D4E.8070105_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="920FA707-A700-4283-86E4-C73BCC333845_at_cisco.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 18:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7037.php">George Bosilca: "[OMPI devel] Pending tickets for the 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="7035.php">Jeff Squyres: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>In reply to:</strong> <a href="7035.php">Jeff Squyres: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7149.php">Nadia Derbey: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated	SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7149.php">Nadia Derbey: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated	SRQwhen	ibv_resize_cq() has failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Retrying w/ fewer CQ entires as Jeff describes is a good idea to help 
<br>
ensure that EINVAL actually does signify that the count exceeds the max 
<br>
instead of just assuming this is so).  If it actually was signifying 
<br>
some other error case, then one would probably not want to continue.
<br>
<p>-Paul
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Thanks for the analysis!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've argued about btl_r2_add_btls() before -- IIRC, the consensus is 
</span><br>
<span class="quotelev1">&gt; that we want it to be able to continue even if a BTL fails.  So I 
</span><br>
<span class="quotelev1">&gt; *think* that your #1 answer is better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, we might want to try a little harder if EINVAL is returned -- 
</span><br>
<span class="quotelev1">&gt; perhaps try decreasing number of CQ entries and try again until either 
</span><br>
<span class="quotelev1">&gt; we have too few CQ entries to be useful (e.g., 0 or some higher number 
</span><br>
<span class="quotelev1">&gt; that is still &quot;too small&quot;), or fail the BTL alltogether...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 23, 2009, at 10:10 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yesterdays I had to analyze a SIGSEV occuring after the following
</span><br>
<span class="quotelev2">&gt;&gt; message had been output:
</span><br>
<span class="quotelev2">&gt;&gt; [.... adjust_cq] cannot resize completion queue, error: 22
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I found is the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When ibv_resize_cq() fails to resize a CQ (in my case it returned
</span><br>
<span class="quotelev2">&gt;&gt; EINVAL), adjust_cq() returns an error and create_srq() is not called by
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_size_queues().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note: One of our infiniband specialists told me that EINVAL was returned
</span><br>
<span class="quotelev2">&gt;&gt; in that case because we were asking for more CQ entries than the max
</span><br>
<span class="quotelev2">&gt;&gt; available.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca_bml_r2_add_btls() goes on executing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then qp_create_all() is called (connect/btl_openib_connect_oob.c).
</span><br>
<span class="quotelev2">&gt;&gt; ibv_create_qp() succeeds even though init_attr.srq is a NULL pointer
</span><br>
<span class="quotelev2">&gt;&gt; (remember that create_srq() has not been previously called).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since all the QPs have been successfully created, qp_create_all() then
</span><br>
<span class="quotelev2">&gt;&gt; calls:
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_endpoint_post_recvs()
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; mca_btl_openib_post_srr()
</span><br>
<span class="quotelev2">&gt;&gt;       --&gt; ibv_post_srq_recv() on a NULL SRQ
</span><br>
<span class="quotelev2">&gt;&gt; ==&gt; SIGSEGV
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I'm not wrong in the analysis above, we have the choice between 2
</span><br>
<span class="quotelev2">&gt;&gt; solutions to fix this problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. if EINVAL is returned by ibv_resize_cq() in adjust_cq(), treat this
</span><br>
<span class="quotelev2">&gt;&gt; as the ENOSYS case: do not return an error, since the CQ has
</span><br>
<span class="quotelev2">&gt;&gt; successfully been created may be with less entries than needed, but it
</span><br>
<span class="quotelev2">&gt;&gt; is there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doing this we assume that EINVAL will always be the symptom of a &quot;too
</span><br>
<span class="quotelev2">&gt;&gt; many entries asked for&quot; error from the IB stack. I don't have the
</span><br>
<span class="quotelev2">&gt;&gt; answer...
</span><br>
<span class="quotelev2">&gt;&gt; + I don't know if this won't imply a degraded mode in terms of
</span><br>
<span class="quotelev2">&gt;&gt; performances.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Fix mca_bml_r2_add_btls() to cleanly exit if an error occurs during
</span><br>
<span class="quotelev2">&gt;&gt; btl_add_procs().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FYI I tested solution #1 and it worked...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestion or comment would be welcome.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nadia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7037.php">George Bosilca: "[OMPI devel] Pending tickets for the 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="7035.php">Jeff Squyres: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>In reply to:</strong> <a href="7035.php">Jeff Squyres: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7149.php">Nadia Derbey: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated	SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7149.php">Nadia Derbey: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated	SRQwhen	ibv_resize_cq() has failed"</a>
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

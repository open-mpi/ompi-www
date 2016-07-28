<?
$subject_val = "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 17:57:43 2010" -->
<!-- isoreceived="20100622215743" -->
<!-- sent="Tue, 22 Jun 2010 17:57:38 -0400" -->
<!-- isosent="20100622215738" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs" -->
<!-- id="093C094F-2B7C-4FBF-84B9-1B9D95131270_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1276873849.1825.253.camel_at_B014522" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 17:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8117.php">Shamis, Pavel: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in the	SRQs"</a>
<li><strong>Previous message:</strong> <a href="8115.php">Jeff Squyres: "[OMPI devel] removing other paffinity components: delayed"</a>
<li><strong>In reply to:</strong> <a href="8110.php">nadia.derbey: "[OMPI devel] v1.5: sigsegv in case of extremely low settings in the SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8118.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Reply:</strong> <a href="8118.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think your fix looks right.
<br>
<p>But I'm getting my head warped trying to understand why you'd want numbers so low (4, 2, 1) and exactly what our algorithm will re-post for numbers that low, etc.  Why do you want them so low?
<br>
<p><p>On Jun 18, 2010, at 11:10 AM, nadia.derbey wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reference is the v1.5 branch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If an SRQ has the following settings: S,&lt;size&gt;,4,2,1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) setup_qps() sets the following:
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_num=4
</span><br>
<span class="quotelev1">&gt; mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init=rd_num/4=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) create_srq() sets the following:
</span><br>
<span class="quotelev1">&gt; openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = 1 (rd_init value)
</span><br>
<span class="quotelev1">&gt; openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = rd_curr_num - (rd_curr_num
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2) = rd_curr_num = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) if mca_btl_openib_post_srr() is called with rd_posted=1:
</span><br>
<span class="quotelev1">&gt; rd_posted &gt; rd_low_local is false
</span><br>
<span class="quotelev1">&gt; num_post=rd_curr_num-rd_posted=0
</span><br>
<span class="quotelev1">&gt; the loop is not executed
</span><br>
<span class="quotelev1">&gt; wr is never initialized (remains NULL)
</span><br>
<span class="quotelev1">&gt; wr-&gt;next: address not mapped
</span><br>
<span class="quotelev1">&gt;          ==&gt; SIGSEGV
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch solves the problem by ensuring that we'll actually
</span><br>
<span class="quotelev1">&gt; enter the loop and leave otherwise.
</span><br>
<span class="quotelev1">&gt; Can someone have a look please: the patch solves the problem with my
</span><br>
<span class="quotelev1">&gt; reproducer, but I'm not sure the fix covers all the situations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;001_openib_low_rd_num.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8117.php">Shamis, Pavel: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in the	SRQs"</a>
<li><strong>Previous message:</strong> <a href="8115.php">Jeff Squyres: "[OMPI devel] removing other paffinity components: delayed"</a>
<li><strong>In reply to:</strong> <a href="8110.php">nadia.derbey: "[OMPI devel] v1.5: sigsegv in case of extremely low settings in the SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8118.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Reply:</strong> <a href="8118.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
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

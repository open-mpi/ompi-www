<?
$subject_val = "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 10:47:26 2010" -->
<!-- isoreceived="20100623144726" -->
<!-- sent="Wed, 23 Jun 2010 16:46:06 +0200 (CEST)" -->
<!-- isosent="20100623144606" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs" -->
<!-- id="alpine.DEB.2.00.1006231637460.19337_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="093C094F-2B7C-4FBF-84B9-1B9D95131270_at_cisco.com" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 10:46:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8119.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Previous message:</strong> <a href="8117.php">Shamis, Pavel: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in the	SRQs"</a>
<li><strong>In reply to:</strong> <a href="8116.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8119.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Reply:</strong> <a href="8119.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Why do we want to set this value so low ? Well, just to see if it crashes 
<br>
:-)
<br>
<p>More seriously, we're working on lowering the memory usage of the openib 
<br>
BTL, which is achieved at most by having only 1 send queue element (at 
<br>
very large scale, send queues prevail).
<br>
<p>This &quot;extreme&quot; configuration used to work with the 1.3/1.4 branches but 
<br>
failed on 1.5.
<br>
<p>Note that recent IB cards having very high issue rates, I don't know if we 
<br>
are often waiting for the send queue to be empty. More importantly, it 
<br>
often prevents remote receive queue to be filled to quickly (which 
<br>
prevents RNR nacks, threads refilling the SRQ, ...). We didn't notice 
<br>
major performance drops with this configuration.
<br>
<p>Sylvain
<br>
<p>On Tue, 22 Jun 2010, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think your fix looks right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I'm getting my head warped trying to understand why you'd want 
</span><br>
<span class="quotelev1">&gt; numbers so low (4, 2, 1) and exactly what our algorithm will re-post for 
</span><br>
<span class="quotelev1">&gt; numbers that low, etc.  Why do you want them so low?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2010, at 11:10 AM, nadia.derbey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reference is the v1.5 branch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If an SRQ has the following settings: S,&lt;size&gt;,4,2,1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) setup_qps() sets the following:
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_num=4
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init=rd_num/4=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) create_srq() sets the following:
</span><br>
<span class="quotelev2">&gt;&gt; openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = 1 (rd_init value)
</span><br>
<span class="quotelev2">&gt;&gt; openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = rd_curr_num - (rd_curr_num
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) = rd_curr_num = 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) if mca_btl_openib_post_srr() is called with rd_posted=1:
</span><br>
<span class="quotelev2">&gt;&gt; rd_posted &gt; rd_low_local is false
</span><br>
<span class="quotelev2">&gt;&gt; num_post=rd_curr_num-rd_posted=0
</span><br>
<span class="quotelev2">&gt;&gt; the loop is not executed
</span><br>
<span class="quotelev2">&gt;&gt; wr is never initialized (remains NULL)
</span><br>
<span class="quotelev2">&gt;&gt; wr-&gt;next: address not mapped
</span><br>
<span class="quotelev2">&gt;&gt;          ==&gt; SIGSEGV
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The attached patch solves the problem by ensuring that we'll actually
</span><br>
<span class="quotelev2">&gt;&gt; enter the loop and leave otherwise.
</span><br>
<span class="quotelev2">&gt;&gt; Can someone have a look please: the patch solves the problem with my
</span><br>
<span class="quotelev2">&gt;&gt; reproducer, but I'm not sure the fix covers all the situations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nadia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;001_openib_low_rd_num.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8119.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Previous message:</strong> <a href="8117.php">Shamis, Pavel: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in the	SRQs"</a>
<li><strong>In reply to:</strong> <a href="8116.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8119.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Reply:</strong> <a href="8119.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
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

<?
$subject_val = "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 03:06:04 2009" -->
<!-- isoreceived="20091003070604" -->
<!-- sent="Sat, 3 Oct 2009 10:05:58 +0300" -->
<!-- isosent="20091003070558" -->
<!-- name="Roman Cheplyaka" -->
<!-- email="roman.cheplyaka_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic" -->
<!-- id="6eda6fa0910030005x312d48cbre8d04637ff004c1e_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E197EA85-CA04-42F0-A68E-68557FECA3B3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic<br>
<strong>From:</strong> Roman Cheplyaka (<em>roman.cheplyaka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-03 03:05:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6930.php">Vasily Filipov: "[OMPI devel] Fwd: [Fwd: Re: [PATCH] Improving heterogeneous IB clusters support.]"</a>
<li><strong>Previous message:</strong> <a href="6928.php">Jeff Squyres: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>In reply to:</strong> <a href="6928.php">Jeff Squyres: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6931.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="6931.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
yes, I'll try openmpi-1.3.3 on Monday. However, I had look at the svn
<br>
code before, and haven't noticed any substantial changes in the code
<br>
under the question.
<br>
The reason I'm writing to devel@ (and not just reporting a bug) is
<br>
that I'm interested in how it is _supposed_ to work. Are there people
<br>
who wrote the code (or understand it) on the list?
<br>
<p>On 03/10/2009, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Sep 29, 2009, at 1:36 PM, Roman Cheplyaka wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your explanation, George. However:
</span><br>
<span class="quotelev2">&gt;&gt; suppose we have leave_pinned = FALSE. Then we go to
</span><br>
<span class="quotelev2">&gt;&gt; mca_mpool_rdma_find. There we try to find suitable registration in the
</span><br>
<span class="quotelev2">&gt;&gt; cache. Suppose we cannot (cache's empty). Then NULL registration is
</span><br>
<span class="quotelev2">&gt;&gt; returned, BTL is skipped and 0 is returned from mca_pml_ob1_rdma_btls.
</span><br>
<span class="quotelev2">&gt;&gt; This way RDMA never happends.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (To make it clear: this is not some theoretical situation, this is
</span><br>
<span class="quotelev2">&gt;&gt; what I'm actually observing. OpenMPI 1.2.9) Can somebody explain
</span><br>
<span class="quotelev2">&gt;&gt; please?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in replying.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We actually haven't looked at the 1.2.x code in quite a while -- is it
</span><br>
<span class="quotelev1">&gt; possible for you to upgrade to the 1.3 series?  There have been *many*
</span><br>
<span class="quotelev1">&gt; improvements in the overall code base since the 1.2 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
Roman I. Cheplyaka
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6930.php">Vasily Filipov: "[OMPI devel] Fwd: [Fwd: Re: [PATCH] Improving heterogeneous IB clusters support.]"</a>
<li><strong>Previous message:</strong> <a href="6928.php">Jeff Squyres: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>In reply to:</strong> <a href="6928.php">Jeff Squyres: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6931.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="6931.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
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

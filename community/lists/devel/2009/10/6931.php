<?
$subject_val = "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 05:26:33 2009" -->
<!-- isoreceived="20091005092633" -->
<!-- sent="Mon, 5 Oct 2009 12:26:28 +0300" -->
<!-- isosent="20091005092628" -->
<!-- name="Roman Cheplyaka" -->
<!-- email="roman.cheplyaka_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic" -->
<!-- id="6eda6fa0910050226o43c69b63m2910942a151209d8_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6eda6fa0910030005x312d48cbre8d04637ff004c1e_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-10-05 05:26:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6932.php">Don Kerr: "[OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Previous message:</strong> <a href="6930.php">Vasily Filipov: "[OMPI devel] Fwd: [Fwd: Re: [PATCH] Improving heterogeneous IB clusters support.]"</a>
<li><strong>In reply to:</strong> <a href="6929.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I tried Open MPI 1.3.3 and nothing has changed -- OpenIB RDMA
<br>
isn't used if mpi_leave_pinned is 0.
<br>
<p>2009/10/3 Roman Cheplyaka &lt;roman.cheplyaka_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; yes, I'll try openmpi-1.3.3 on Monday. However, I had look at the svn
</span><br>
<span class="quotelev1">&gt; code before, and haven't noticed any substantial changes in the code
</span><br>
<span class="quotelev1">&gt; under the question.
</span><br>
<span class="quotelev1">&gt; The reason I'm writing to devel@ (and not just reporting a bug) is
</span><br>
<span class="quotelev1">&gt; that I'm interested in how it is _supposed_ to work. Are there people
</span><br>
<span class="quotelev1">&gt; who wrote the code (or understand it) on the list?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/10/2009, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2009, at 1:36 PM, Roman Cheplyaka wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your explanation, George. However:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suppose we have leave_pinned = FALSE. Then we go to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_mpool_rdma_find. There we try to find suitable registration in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache. Suppose we cannot (cache's empty). Then NULL registration is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; returned, BTL is skipped and 0 is returned from mca_pml_ob1_rdma_btls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This way RDMA never happends.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (To make it clear: this is not some theoretical situation, this is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what I'm actually observing. OpenMPI 1.2.9) Can somebody explain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the delay in replying.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We actually haven't looked at the 1.2.x code in quite a while -- is it
</span><br>
<span class="quotelev2">&gt;&gt; possible for you to upgrade to the 1.3 series? &#194;&#160;There have been *many*
</span><br>
<span class="quotelev2">&gt;&gt; improvements in the overall code base since the 1.2 series.
</span><br>
<p><p><p><pre>
-- 
Roman I. Cheplyaka
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6932.php">Don Kerr: "[OMPI devel] trac #2034 : single rail openib btl shows better bandwidth than dual rail (12k&lt; x &lt; 128k)"</a>
<li><strong>Previous message:</strong> <a href="6930.php">Vasily Filipov: "[OMPI devel] Fwd: [Fwd: Re: [PATCH] Improving heterogeneous IB clusters support.]"</a>
<li><strong>In reply to:</strong> <a href="6929.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
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

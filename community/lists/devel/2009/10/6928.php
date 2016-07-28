<?
$subject_val = "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 17:23:19 2009" -->
<!-- isoreceived="20091002212319" -->
<!-- sent="Fri, 2 Oct 2009 17:23:14 -0400" -->
<!-- isosent="20091002212314" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic" -->
<!-- id="E197EA85-CA04-42F0-A68E-68557FECA3B3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6eda6fa0909291036q3593ce8m38e4355ba4815dc4_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-02 17:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6929.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Previous message:</strong> <a href="6927.php">Jeff Squyres: "Re: [OMPI devel] trac 1.3.1 1.3.2 etc."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6929.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="6929.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 29, 2009, at 1:36 PM, Roman Cheplyaka wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your explanation, George. However:
</span><br>
<span class="quotelev1">&gt; suppose we have leave_pinned = FALSE. Then we go to
</span><br>
<span class="quotelev1">&gt; mca_mpool_rdma_find. There we try to find suitable registration in the
</span><br>
<span class="quotelev1">&gt; cache. Suppose we cannot (cache's empty). Then NULL registration is
</span><br>
<span class="quotelev1">&gt; returned, BTL is skipped and 0 is returned from mca_pml_ob1_rdma_btls.
</span><br>
<span class="quotelev1">&gt; This way RDMA never happends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (To make it clear: this is not some theoretical situation, this is
</span><br>
<span class="quotelev1">&gt; what I'm actually observing. OpenMPI 1.2.9) Can somebody explain
</span><br>
<span class="quotelev1">&gt; please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry for the delay in replying.
<br>
<p>We actually haven't looked at the 1.2.x code in quite a while -- is it  
<br>
possible for you to upgrade to the 1.3 series?  There have been *many*  
<br>
improvements in the overall code base since the 1.2 series.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6929.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Previous message:</strong> <a href="6927.php">Jeff Squyres: "Re: [OMPI devel] trac 1.3.1 1.3.2 etc."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/09/6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6929.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="6929.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
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

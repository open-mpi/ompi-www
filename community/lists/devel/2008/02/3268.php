<?
$subject_val = "Re: [OMPI devel] RDMA pipeline";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 15:03:51 2008" -->
<!-- isoreceived="20080219200351" -->
<!-- sent="Tue, 19 Feb 2008 22:03:40 +0200" -->
<!-- isosent="20080219200340" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RDMA pipeline" -->
<!-- id="20080219200340.GA18720_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B479EA4F-EC2C-419B-9012-70EF227E4012_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RDMA pipeline<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 15:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3269.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Previous message:</strong> <a href="3267.php">George Bosilca: "[OMPI devel] RDMA pipeline"</a>
<li><strong>In reply to:</strong> <a href="3267.php">George Bosilca: "[OMPI devel] RDMA pipeline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3269.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Reply:</strong> <a href="3269.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 19, 2008 at 02:13:30PM -0500, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Few days ago during some testing I realize that the RDMA pipeline was  
</span><br>
<span class="quotelev1">&gt; disabled for MX and Elan (I didn't check for the others). A quick look  
</span><br>
<span class="quotelev1">&gt; into the source code, pinpointed the problem into the pml_ob1_rdma.c  
</span><br>
<span class="quotelev1">&gt; file, and it seems that the problem was introduced by commit 15247. The 
</span><br>
<span class="quotelev1">&gt; problem comes from the usage of the dummy registration, which is set for 
</span><br>
<span class="quotelev1">&gt; all non mpool friendly BTL. Later on this is checked against NULL (and of 
</span><br>
<span class="quotelev1">&gt; course it fails), which basically disable the RDMA pipeline.
</span><br>
Do you mean that mca_pml_ob1_send_request_start_rdma() is used for
<br>
rendezvous sends? I will be very surprised if ompi 1.2 works
<br>
differently. It assumes that if btl has no mpool then entire message buffer
<br>
is registered and no pipeline is needed. Trunk does the same but
<br>
differently. OpenIB also choose this route if buffer memory is allocated
<br>
by MPI_alloc_mem().
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll enable the RDMA pipeline back in 2 days if I don't hear anything  
</span><br>
<span class="quotelev1">&gt; back. Attached is the patch that fix this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I am not sure why you need pipeline for BTLs that don't require
<br>
registration, but by applying this patch you'll change how ompi behaves
<br>
from v1.0. (unless I miss something, then please provide more
<br>
explanations).
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3269.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Previous message:</strong> <a href="3267.php">George Bosilca: "[OMPI devel] RDMA pipeline"</a>
<li><strong>In reply to:</strong> <a href="3267.php">George Bosilca: "[OMPI devel] RDMA pipeline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3269.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Reply:</strong> <a href="3269.php">George Bosilca: "Re: [OMPI devel] RDMA pipeline"</a>
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

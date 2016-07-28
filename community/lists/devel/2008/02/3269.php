<?
$subject_val = "Re: [OMPI devel] RDMA pipeline";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 22:41:02 2008" -->
<!-- isoreceived="20080220034102" -->
<!-- sent="Tue, 19 Feb 2008 22:40:46 -0500" -->
<!-- isosent="20080220034046" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RDMA pipeline" -->
<!-- id="28104828-3E22-4704-BACC-25576C93D042_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080219200340.GA18720_at_minantech.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 22:40:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3270.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Previous message:</strong> <a href="3268.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>In reply to:</strong> <a href="3268.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3270.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Reply:</strong> <a href="3270.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, it restores the original behavior. The RDMA operations were  
<br>
pipelined before the r15247 commit, independent of the fact that they  
<br>
had mpool or not. We were actively using this behavior in the message  
<br>
logging framework to hide the cost of the local storage of the  
<br>
payload, and we were quite surprised when we realized that it  
<br>
disappeared.
<br>
<p>If a BTL don't want to use pipeline for RDMA operations, it can set  
<br>
the RDMA fragment size to the max value, and this will automatically  
<br>
disable the pipeline. However, if the BTL support pipeline with the  
<br>
trunk version today it is not possible to activate it. Moreover, in  
<br>
the current version the parameters that define the BTL behavior are  
<br>
blatantly ignored, as the PML make high level assumption about what  
<br>
they want to do.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Feb 19, 2008, at 3:03 PM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Feb 19, 2008 at 02:13:30PM -0500, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Few days ago during some testing I realize that the RDMA pipeline was
</span><br>
<span class="quotelev2">&gt;&gt; disabled for MX and Elan (I didn't check for the others). A quick  
</span><br>
<span class="quotelev2">&gt;&gt; look
</span><br>
<span class="quotelev2">&gt;&gt; into the source code, pinpointed the problem into the pml_ob1_rdma.c
</span><br>
<span class="quotelev2">&gt;&gt; file, and it seems that the problem was introduced by commit 15247.  
</span><br>
<span class="quotelev2">&gt;&gt; The
</span><br>
<span class="quotelev2">&gt;&gt; problem comes from the usage of the dummy registration, which is  
</span><br>
<span class="quotelev2">&gt;&gt; set for
</span><br>
<span class="quotelev2">&gt;&gt; all non mpool friendly BTL. Later on this is checked against NULL  
</span><br>
<span class="quotelev2">&gt;&gt; (and of
</span><br>
<span class="quotelev2">&gt;&gt; course it fails), which basically disable the RDMA pipeline.
</span><br>
<span class="quotelev1">&gt; Do you mean that mca_pml_ob1_send_request_start_rdma() is used for
</span><br>
<span class="quotelev1">&gt; rendezvous sends? I will be very surprised if ompi 1.2 works
</span><br>
<span class="quotelev1">&gt; differently. It assumes that if btl has no mpool then entire message  
</span><br>
<span class="quotelev1">&gt; buffer
</span><br>
<span class="quotelev1">&gt; is registered and no pipeline is needed. Trunk does the same but
</span><br>
<span class="quotelev1">&gt; differently. OpenIB also choose this route if buffer memory is  
</span><br>
<span class="quotelev1">&gt; allocated
</span><br>
<span class="quotelev1">&gt; by MPI_alloc_mem().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll enable the RDMA pipeline back in 2 days if I don't hear anything
</span><br>
<span class="quotelev2">&gt;&gt; back. Attached is the patch that fix this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure why you need pipeline for BTLs that don't require
</span><br>
<span class="quotelev1">&gt; registration, but by applying this patch you'll change how ompi  
</span><br>
<span class="quotelev1">&gt; behaves
</span><br>
<span class="quotelev1">&gt; from v1.0. (unless I miss something, then please provide more
</span><br>
<span class="quotelev1">&gt; explanations).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3269/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3270.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Previous message:</strong> <a href="3268.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>In reply to:</strong> <a href="3268.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3270.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
<li><strong>Reply:</strong> <a href="3270.php">Gleb Natapov: "Re: [OMPI devel] RDMA pipeline"</a>
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

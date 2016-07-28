<?
$subject_val = "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 20:58:58 2009" -->
<!-- isoreceived="20090929005858" -->
<!-- sent="Mon, 28 Sep 2009 20:58:46 -0400" -->
<!-- isosent="20090929005846" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic" -->
<!-- id="AF6226AB-ABD3-42D5-A311-2CCB1063548E_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6eda6fa0909281044m73dd75e1tdc60f19ebae9c4b0_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 20:58:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6912.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3.4 ETA ? (TLAs FTW)"</a>
<li><strong>Previous message:</strong> <a href="6910.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6905.php">Roman Cheplyaka: "[OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Roman,
<br>
<p>Before going into explaining the logic, let me state that the memory  
<br>
is registered (if required/supported) by the BTLs. However, this is  
<br>
done only at the moment when the memory segment is involved in any  
<br>
kind of communication.
<br>
<p>We do not want to replicate this at the PML level, in order to make  
<br>
sure that the amount of memory registered at any moment is minimal. In  
<br>
other words, the PML leave the decision on when to register and when  
<br>
to unregister to the BTLs. However, in order to speedup the code a  
<br>
little bit (and to keep things tidy), the PML will help the BTLs to  
<br>
work around the memory registration issue. And the code you pointed  
<br>
out is exactly the place where we do it.
<br>
<p>We need to register the memory if leave_pinned is TRUE, as registering  
<br>
will leave a trace. If leave_pinned is FALSE then we only check if  
<br>
somehow this memory is not already registered (by some BTL). In this  
<br>
case, there is no need to create a registration in the PML (if  
<br>
required the BTL will do it when needed).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 28, 2009, at 13:44 , Roman Cheplyaka wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm trying to dig into OpenMPI sources but have some problems. Can
</span><br>
<span class="quotelev1">&gt; anyone explain the logic of the following code from
</span><br>
<span class="quotelev1">&gt; mca/pml/ob1/pml_ob1_rdma.c please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            if(!mca_pml_ob1.leave_pinned) {
</span><br>
<span class="quotelev1">&gt;                /* look through existing registrations */
</span><br>
<span class="quotelev1">&gt;                btl_mpool-&gt;mpool_find(btl_mpool, base, size, &amp;reg);
</span><br>
<span class="quotelev1">&gt;            } else {
</span><br>
<span class="quotelev1">&gt;                /* register the memory */
</span><br>
<span class="quotelev1">&gt;                btl_mpool-&gt;mpool_register(btl_mpool, base, size, 0,  
</span><br>
<span class="quotelev1">&gt; &amp;reg);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to me that we should register new memory if leave_pinned is
</span><br>
<span class="quotelev1">&gt; FALSE (i.e. no existing registrations avaliable) and search through
</span><br>
<span class="quotelev1">&gt; existing registrations otherwise, but the logic is inversed here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Roman I. Cheplyaka
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
<li><strong>Next message:</strong> <a href="6912.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.3.4 ETA ? (TLAs FTW)"</a>
<li><strong>Previous message:</strong> <a href="6910.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r22014"</a>
<li><strong>In reply to:</strong> <a href="6905.php">Roman Cheplyaka: "[OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Reply:</strong> <a href="6914.php">Roman Cheplyaka: "Re: [OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
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

<?
$subject_val = "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 11:30:02 2010" -->
<!-- isoreceived="20100423153002" -->
<!-- sent="Fri, 23 Apr 2010 11:29:53 -0400" -->
<!-- isosent="20100423152953" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory" -->
<!-- id="B885F245-4EEF-436A-A320-730A1AC5E4FD_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD04610.3020407_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 11:29:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7801.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Previous message:</strong> <a href="7799.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="7786.php">Pascal Deveze: "[OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7852.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you use any kind of high performance network that require memory registration for communications, then this high cost for the MPI_Alloc_mem will be hidden by the communications. However, the MPI_Alloc_mem function seems horribly complicated to me, as we do the whole &quot;find-the-right-allocator&quot; step every time instead of caching it. While this might be improved, I'm pretty sure the major part of the overhead comes from the registration itself. 
<br>
<p>The MPI_Alloc_mem function allocate the memory and then it register it with the high speed interconnect (Infiniband as an example). If you don't have IB, then this should not happens. You can try to force the mpool to nothing, or disable the pinning (mpi_leave_pinned=0,mpi_leave_pinned_pipeline=0) to see if this affect the performances.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Apr 22, 2010, at 08:50 , Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The sendrecv_replace in Open MPI seems to allocate/free memory with MPI_Alloc_mem()/MPI_Free_mem()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I measured the time to allocate/free a buffer of 1MB.
</span><br>
<span class="quotelev1">&gt; MPI_Alloc_mem/MPI_Free_mem take 350us while malloc/free only take 8us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; malloc/free in ompi/mpi/c/sendrecv_replace.c was replaced by MPI_Alloc_mem/MPI_Free_mem with this commit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; user:        twoodall
</span><br>
<span class="quotelev1">&gt; date:        Thu Sep 22 16:43:17 2005 +0000
</span><br>
<span class="quotelev1">&gt; summary:     use MPI_Alloc_mem/MPI_Free_mem for internally allocated buffers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a real reason to use these functions or can we move back to malloc/free ?
</span><br>
<span class="quotelev1">&gt; Is there a problem on my configuration explaining such slow performance with MPI_Alloc_mem ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal
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
<li><strong>Next message:</strong> <a href="7801.php">George Bosilca: "Re: [OMPI devel] RFC: Change PML error handler signature"</a>
<li><strong>Previous message:</strong> <a href="7799.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>In reply to:</strong> <a href="7786.php">Pascal Deveze: "[OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7852.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
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

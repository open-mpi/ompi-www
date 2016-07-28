<?
$subject_val = "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 09:20:54 2010" -->
<!-- isoreceived="20100430132054" -->
<!-- sent="Fri, 30 Apr 2010 15:20:48 +0200" -->
<!-- isosent="20100430132048" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory" -->
<!-- id="4BDAD930.2010404_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] sendrecv_replace: long time to allocate/free memory" -->
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
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 09:20:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7854.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (11)"</a>
<li><strong>Previous message:</strong> <a href="7852.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Maybe in reply to:</strong> <a href="7786.php">Pascal Deveze: "[OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 23 Apr 2010 at 11:29:53, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; If you use any kind of high performance network that require memory 
</span><br>
<span class="quotelev1">&gt; registration for communications, then this high cost for the 
</span><br>
<span class="quotelev1">&gt; MPI_Alloc_mem will be hidden by the communications. However, the 
</span><br>
<span class="quotelev1">&gt; MPI_Alloc_mem function seems horribly complicated to me, as we do the 
</span><br>
<span class="quotelev1">&gt; whole &quot;find-the-right-allocator&quot; step every time instead of caching 
</span><br>
<span class="quotelev1">&gt; it. While this might be improved, I'm pretty sure the major part of 
</span><br>
<span class="quotelev1">&gt; the overhead comes from the registration itself.
</span><br>
<span class="quotelev1">&gt; The MPI_Alloc_mem function allocate the memory and then it register it 
</span><br>
<span class="quotelev1">&gt; with the high speed interconnect (Infiniband as an example). If you 
</span><br>
<span class="quotelev1">&gt; don't have IB, then this should not happens. You can try to force the 
</span><br>
<span class="quotelev1">&gt; mpool to nothing, or disable the pinning 
</span><br>
<span class="quotelev1">&gt; (mpi_leave_pinned=0,mpi_leave_pinned_pipeline=0) to see if this affect 
</span><br>
<span class="quotelev1">&gt; the performances.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I have an IB cluster with 32 cores nodes. A big part of my 
<br>
communications is done through sm, so registering systematically buffers 
<br>
with IB is killing performance for nothing.
<br>
Following your tip, I disabled the pinning (using &quot;mpirun -mca 
<br>
mpi_leave_pinned 0 -mca mpi_leave_pinned_pipeline 0)&quot;.
<br>
The cycle (MPI_Alloc_mem/MPI_Free_mem) takes now 120 us, while 
<br>
(malloc/free) takes 1 us.
<br>
<p>In all cases, a program calling MPI_Sendrecv_replace() is hardly 
<br>
penalized by these calls to MPI_Alloc_mem/MPI_Free_mem.
<br>
That's why I proposed to come back to the malloc/free scheme in this 
<br>
routine.
<br>
<p>Pascal
<br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2010, at 08:50 , Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The sendrecv_replace in Open MPI seems to allocate/free memory with 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Alloc_mem()/MPI_Free_mem()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I measured the time to allocate/free a buffer of 1MB.
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Alloc_mem/MPI_Free_mem take 350us while malloc/free only take 8us.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; malloc/free in ompi/mpi/c/sendrecv_replace.c was replaced by 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Alloc_mem/MPI_Free_mem with this commit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; user:        twoodall
</span><br>
<span class="quotelev2">&gt;&gt; date:        Thu Sep 22 16:43:17 2005 0000
</span><br>
<span class="quotelev2">&gt;&gt; summary:     use MPI_Alloc_mem/MPI_Free_mem for internally allocated 
</span><br>
<span class="quotelev2">&gt;&gt; buffers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a real reason to use these functions or can we move back to 
</span><br>
<span class="quotelev2">&gt;&gt; malloc/free ?
</span><br>
<span class="quotelev2">&gt;&gt; Is there a problem on my configuration explaining such slow 
</span><br>
<span class="quotelev2">&gt;&gt; performance with MPI_Alloc_mem ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pascal
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7854.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (11)"</a>
<li><strong>Previous message:</strong> <a href="7852.php">Pascal Deveze: "Re: [OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
<li><strong>Maybe in reply to:</strong> <a href="7786.php">Pascal Deveze: "[OMPI devel] sendrecv_replace: long time to allocate/free memory"</a>
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

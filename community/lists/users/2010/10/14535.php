<?
$subject_val = "Re: [OMPI users] Question about MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 10:58:34 2010" -->
<!-- isoreceived="20101021145834" -->
<!-- sent="Thu, 21 Oct 2010 07:58:19 -0700" -->
<!-- isosent="20101021145819" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about MPI_Barrier" -->
<!-- id="4CC0550B.6050409_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16411702-D1C7-452A-98ED-20D138C0ABC7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about MPI_Barrier<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-21 10:58:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14536.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14534.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>In reply to:</strong> <a href="14531.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14537.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14537.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;Ah.  The original code snipit you sent was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev1">&gt;if(rank == master) t1 = clock();
</span><br>
<span class="quotelev1">&gt;&quot;code A&quot;;
</span><br>
<span class="quotelev1">&gt;MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev1">&gt;if(rank == master) t2 = clock();
</span><br>
<span class="quotelev1">&gt;&quot;code B&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Remember that the time that individual processes exit barrier is not guaranteed to be uniform (indeed, it most likely *won't* be the same).  MPI only guarantees that a process will not exit until after all processes have entered.  So taking t2 after the barrier might be a bit misleading, and may cause unexpected skew.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
The barrier exit times are not guaranteed to be uniform, but in practice 
<br>
this style of timing is often the best (or only practical) tool one has 
<br>
for measuring the collective performance of a group of processes.
<br>
<p><span class="quotelev1">&gt;Code B *probably* has no effect on time spent between t1 and t2.  But extraneous effects might cause it to do so -- e.g., are you running in an oversubscribed scenario?  And so on.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Right.  The bottom line here is that from a causal point of view it 
<br>
would seem that B should not impact the timings.  Presumably, some other 
<br>
variable is actually responsible here.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14536.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14534.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>In reply to:</strong> <a href="14531.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14537.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14537.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 12:21:53 2005" -->
<!-- isoreceived="20051031172153" -->
<!-- sent="Mon, 31 Oct 2005 09:12:10 -0700" -->
<!-- isosent="20051031161210" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Infiniband performance problems (mvapi)" -->
<!-- id="4366425A.4060309_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43663D33.3060207_at_graphics.stanford.edu" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 11:12:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0255.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0253.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>In reply to:</strong> <a href="0248.php">Mike Houston: "[O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0255.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Reply:</strong> <a href="0255.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Reply:</strong> <a href="0256.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Mike,
<br>
<p>Mike Houston wrote:
<br>
<span class="quotelev1">&gt; When only sending a few messages, we get reasonably good IB performance, 
</span><br>
<span class="quotelev1">&gt; ~500MB/s (MVAPICH is 850MB/s).  However, if I crank the number of 
</span><br>
<span class="quotelev1">&gt; messages up, we drop to 3MB/s(!!!).  This is with the OSU NBCL 
</span><br>
<span class="quotelev1">&gt; mpi_bandwidth test.  We are running Mellanox IB Gold 1.8 with 3.3.3 
</span><br>
<span class="quotelev1">&gt; firmware on PCI-X (Couger) boards.  Everything works with MVAPICH, but 
</span><br>
<span class="quotelev1">&gt; we really need the thread support in OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ideas?  I noticed there are a plethora of runtime options configurable 
</span><br>
<span class="quotelev1">&gt; for mvapi.  Do I need to tweak these to get performacne up?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You might try running w/ the:
<br>
<p>mpirun -mca mpi_leave_pinned 1
<br>
<p>Which will cause mvapi port to maintain an mru cache of registrations,
<br>
rather than dynamically pinning/unpinning memory.
<br>
<p>If this does not resolve the BW problems, try increasing the
<br>
resources allocated to each connection:
<br>
<p>-mca btl_mvapi_rd_min 128
<br>
-mca btl_mvapi_rd_max 256
<br>
<p>Also can you forward me a copy of the test code or a reference to it?
<br>
<p>Thanks,
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0255.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0253.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>In reply to:</strong> <a href="0248.php">Mike Houston: "[O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0255.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Reply:</strong> <a href="0255.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Reply:</strong> <a href="0256.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
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

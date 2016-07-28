<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 11:20:54 2005" -->
<!-- isoreceived="20051031162054" -->
<!-- sent="Mon, 31 Oct 2005 09:20:49 -0700" -->
<!-- isosent="20051031162049" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Infiniband performance problems (mvapi)" -->
<!-- id="04FD39DE-0001-48DA-AD1C-169A572D84F7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-31 11:20:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0253.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0251.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>In reply to:</strong> <a href="0248.php">Mike Houston: "[O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0253.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2005, at 8:50 AM, Mike Houston wrote:
<br>
<p><span class="quotelev1">&gt; When only sending a few messages, we get reasonably good IB  
</span><br>
<span class="quotelev1">&gt; performance,
</span><br>
<span class="quotelev1">&gt; ~500MB/s (MVAPICH is 850MB/s).
</span><br>
What is your message size? Are you using the leave pinned option? If  
<br>
not, specify -mca mpi_leave_pinned 1 option to mpirun. This tells  
<br>
Open MPI to cache message buffers (this is what MVAPICH does),  
<br>
otherwise we don't have a fair comparison.
<br>
<p><span class="quotelev1">&gt; However, if I crank the number of
</span><br>
<span class="quotelev1">&gt; messages up, we drop to 3MB/s(!!!).  This is with the OSU NBCL
</span><br>
<span class="quotelev1">&gt; mpi_bandwidth test.
</span><br>
<p>When you say crank the number of messages up, do you mean the number  
<br>
of messages of the same size? If so, what message size?
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><span class="quotelev1">&gt; We are running Mellanox IB Gold 1.8 with 3.3.3
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
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Mike
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0253.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0251.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>In reply to:</strong> <a href="0248.php">Mike Houston: "[O-MPI users] Infiniband performance problems (mvapi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0253.php">Mike Houston: "Re: [O-MPI users] Infiniband performance problems (mvapi)"</a>
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

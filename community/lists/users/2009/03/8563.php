<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 06:10:48 2009" -->
<!-- isoreceived="20090324101048" -->
<!-- sent="Tue, 24 Mar 2009 10:10:57 +0000" -->
<!-- isosent="20090324101057" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="e87d0c4e5fa80c01caee21e7b32cfdad_at_pittman.co.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C81D09.5090703_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Collective operations and synchronization<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-24 06:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8564.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8562.php">Manuel Prinz: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>In reply to:</strong> <a href="8560.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8564.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8564.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 23 Mar 2009, at 23:36, Shaun Jackman wrote:
<br>
<span class="quotelev1">&gt; loop {
</span><br>
<span class="quotelev1">&gt; MPI_Ibsend (for every edge of every leaf node)
</span><br>
<span class="quotelev1">&gt; MPI_barrier
</span><br>
<span class="quotelev1">&gt; MPI_Iprobe/MPI_Recv (until no messages pending)
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce (number of nodes removed)
</span><br>
<span class="quotelev1">&gt; } until (no nodes removed by any node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Previously, I attempted to use a single MPI_Allreduce without the 
</span><br>
<span class="quotelev1">&gt; MPI_Barrier:
</span><br>
<p>You need both the MPI_Barrier and the synchronisation semantics of the 
<br>
MPI_Allreduce in this example, it's important that each send matches a 
<br>
recv for the same iteration so you need to ensure all sends have been 
<br>
sent before you call probe and a Barrier is one way of doing this.  You 
<br>
also need the syncronisation semantics of the Allreduce to ensure the 
<br>
iProbe doesn't match a send from the next iteration of the loop.
<br>
<p>Perhaps there is a better way of accomplishing the same thing however, 
<br>
MPI_Barrier syncronises all processes so is potentially a lot more 
<br>
heavyweight than it needs to be, in this example you only need to 
<br>
syncronise with your neighbours so it might be quicker to use a 
<br>
send/receive for each of your neighbours containing a true/false value 
<br>
rather than to rely on the existence of a message or not.  i.e. the 
<br>
barrier is needed because you don't know how many messages there are, 
<br>
it may well be quicker to have a fixed number of point to point 
<br>
messages rather than a extra global synchronisation.  The added 
<br>
advantage of doing it this way would be you could remove the Probe as 
<br>
well.
<br>
<p>Potentially it would be possible to remove the Allreduce as well and 
<br>
use the tag to identify the iteration count, assuming of course you 
<br>
don't need to know the global number of branches at any iteration.  One 
<br>
problem with this approach can be that one process can get very slow 
<br>
and swamped with unexpected messages however assuming your neighbour 
<br>
count is small this shouldn't be a problem.  I'd expect their to not 
<br>
only be a net gain changing to this way but for the application to 
<br>
scale better as well.
<br>
<p>Finally I've always favoured iRecv/Send over Ibsend/Recv as in the 
<br>
majority of cases this tends to be faster, you'd have to benchmark your 
<br>
specific setup however.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8564.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8562.php">Manuel Prinz: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>In reply to:</strong> <a href="8560.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8564.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8564.php">Eugene Loh: "Re: [OMPI users] Collective operations and synchronization"</a>
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

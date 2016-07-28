<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 11:04:09 2009" -->
<!-- isoreceived="20090324150409" -->
<!-- sent="Tue, 24 Mar 2009 07:03:44 -0800" -->
<!-- isosent="20090324150344" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="49C8F650.2020707_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e87d0c4e5fa80c01caee21e7b32cfdad_at_pittman.co.uk" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-24 11:03:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8565.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Previous message:</strong> <a href="8563.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8563.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8573.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8573.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; On 23 Mar 2009, at 23:36, Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; loop {
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Ibsend (for every edge of every leaf node)
</span><br>
<span class="quotelev2">&gt;&gt; MPI_barrier
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Iprobe/MPI_Recv (until no messages pending)
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allreduce (number of nodes removed)
</span><br>
<span class="quotelev2">&gt;&gt; } until (no nodes removed by any node)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Previously, I attempted to use a single MPI_Allreduce without the 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Barrier:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need both the MPI_Barrier and the synchronisation semantics of the 
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce in this example,
</span><br>
<p>Yes, since the sync and the Allreduce are in different places.
<br>
<p><span class="quotelev1">&gt; it's important that each send matches a recv for the same iteration so 
</span><br>
<span class="quotelev1">&gt; you need to ensure all sends have been sent before you call probe and 
</span><br>
<span class="quotelev1">&gt; a Barrier is one way of doing this.  You also need the syncronisation 
</span><br>
<span class="quotelev1">&gt; semantics of the Allreduce to ensure the iProbe doesn't match a send 
</span><br>
<span class="quotelev1">&gt; from the next iteration of the loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps there is a better way of accomplishing the same thing however, 
</span><br>
<span class="quotelev1">&gt; MPI_Barrier syncronises all processes so is potentially a lot more 
</span><br>
<span class="quotelev1">&gt; heavyweight than it needs to be, in this example you only need to 
</span><br>
<span class="quotelev1">&gt; syncronise with your neighbours so it might be quicker to use a 
</span><br>
<span class="quotelev1">&gt; send/receive for each of your neighbours containing a true/false value 
</span><br>
<span class="quotelev1">&gt; rather than to rely on the existence of a message or not.  i.e. the 
</span><br>
<span class="quotelev1">&gt; barrier is needed because you don't know how many messages there are, 
</span><br>
<span class="quotelev1">&gt; it may well be quicker to have a fixed number of point to point 
</span><br>
<span class="quotelev1">&gt; messages rather than a extra global synchronisation.  The added 
</span><br>
<span class="quotelev1">&gt; advantage of doing it this way would be you could remove the Probe as 
</span><br>
<span class="quotelev1">&gt; well.
</span><br>
<p>I'm not sure I understand this suggestion, so I'll say it the way I 
<br>
understand it.  Would it be possible for each process to send an &quot;all 
<br>
done&quot; message to each of its neighbors?  Conversely, each process would 
<br>
poll its neighbors for messages, either processing graph operations or 
<br>
collecting &quot;all done&quot; messages depending on whether the message 
<br>
indicates a graph operation or signals &quot;all done&quot;.
<br>
<p><span class="quotelev1">&gt; Potentially it would be possible to remove the Allreduce as well and 
</span><br>
<span class="quotelev1">&gt; use the tag to identify the iteration count, assuming of course you 
</span><br>
<span class="quotelev1">&gt; don't need to know the global number of branches at any iteration.  
</span><br>
<span class="quotelev1">&gt; One problem with this approach can be that one process can get very 
</span><br>
<span class="quotelev1">&gt; slow and swamped with unexpected messages however assuming your 
</span><br>
<span class="quotelev1">&gt; neighbour count is small this shouldn't be a problem.  I'd expect 
</span><br>
<span class="quotelev1">&gt; their to not only be a net gain changing to this way but for the 
</span><br>
<span class="quotelev1">&gt; application to scale better as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally I've always favoured iRecv/Send over Ibsend/Recv as in the 
</span><br>
<span class="quotelev1">&gt; majority of cases this tends to be faster, you'd have to benchmark 
</span><br>
<span class="quotelev1">&gt; your specific setup however. 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8565.php">Jerome BENOIT: "Re: [OMPI users] Configure OpenMPI and SLURM on Debian (Lenny)"</a>
<li><strong>Previous message:</strong> <a href="8563.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8563.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8573.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8573.php">Ashley Pittman: "Re: [OMPI users] Collective operations and synchronization"</a>
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

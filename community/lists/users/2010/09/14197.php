<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 07:24:31 2010" -->
<!-- isoreceived="20100909112431" -->
<!-- sent="Thu, 9 Sep 2010 05:24:22 -0600" -->
<!-- isosent="20100909112422" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="65CFDBA6-3984-4B19-9E75-DA9CCF54DD3A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D2A473C6-C3EA-457F-AD68-9899AB1C946E_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 07:24:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14198.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14196.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="14195.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14198.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 9, 2010, at 1:46 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9 Sep 2010, at 08:31, Terry Frankcombe wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 2010-09-09 at 01:24 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As people have said, these time values are to be expected. All they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reflect is the time difference spent in reduce waiting for the slowest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process to catch up to everyone else. The barrier removes that factor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by forcing all processes to start from the same place.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No mystery here - just a reflection of the fact that your processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arrive at the MPI_Reduce calls at different times.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, however, it seems Gabriele is saying the total execution time
</span><br>
<span class="quotelev2">&gt;&gt; *drops* by ~500 s when the barrier is put *in*.  (Is that the right way
</span><br>
<span class="quotelev2">&gt;&gt; around, Gabriele?)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's harder to explain as a sync issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really, you need some way of keeping processes in sync or else the slow ones get slower and the fast ones stay fast.  If you have an un-balanced algorithm then you can end up swamping certain ranks and when they get behind they get even slower and performance goes off a cliff edge.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding sporadic barriers keeps everything in sync and running nicely, if things are performing well then the barrier only slows things down but if there is a problem it'll bring all process back together and destroy the positive feedback cycle.  This is why you often only need a synchronisation point every so often,
</span><br>
<p>Precisely. And that is why we added the &quot;sync&quot; collective which inserts a barrier every so often since we don't have async barriers at this time. Also helps clean up memory growth due to unanticipated messages arriving during unbalanced algorithms.
<br>
<p>See ompi_info --param coll all to see how to enable it.
<br>
<p><span class="quotelev1">&gt; I'm also a huge fan of asyncronous barriers as a full sync is a blunt and slow operation, using asyncronous barriers you can allow small differences in timing but prevent them from getting too large with very little overhead in the common case where processes are synced already.  I'm thinking specifically of starting a sync-barrier on iteration N, waiting for it on N+25 and immediately starting another one, again waiting for it 25 steps later.
</span><br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14198.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14196.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="14195.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14198.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
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

<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 03:47:13 2010" -->
<!-- isoreceived="20100909074713" -->
<!-- sent="Thu, 9 Sep 2010 08:46:16 +0100" -->
<!-- isosent="20100909074616" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="D2A473C6-C3EA-457F-AD68-9899AB1C946E_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1284017477.6667.84.camel_at_rscpc28.anu.edu.au" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 03:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14196.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="14194.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14192.php">Terry Frankcombe: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14197.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14197.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14198.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9 Sep 2010, at 08:31, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2010-09-09 at 01:24 -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; As people have said, these time values are to be expected. All they
</span><br>
<span class="quotelev2">&gt;&gt; reflect is the time difference spent in reduce waiting for the slowest
</span><br>
<span class="quotelev2">&gt;&gt; process to catch up to everyone else. The barrier removes that factor
</span><br>
<span class="quotelev2">&gt;&gt; by forcing all processes to start from the same place.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No mystery here - just a reflection of the fact that your processes
</span><br>
<span class="quotelev2">&gt;&gt; arrive at the MPI_Reduce calls at different times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, however, it seems Gabriele is saying the total execution time
</span><br>
<span class="quotelev1">&gt; *drops* by ~500 s when the barrier is put *in*.  (Is that the right way
</span><br>
<span class="quotelev1">&gt; around, Gabriele?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's harder to explain as a sync issue.
</span><br>
<p>Not really, you need some way of keeping processes in sync or else the slow ones get slower and the fast ones stay fast.  If you have an un-balanced algorithm then you can end up swamping certain ranks and when they get behind they get even slower and performance goes off a cliff edge.
<br>
<p>Adding sporadic barriers keeps everything in sync and running nicely, if things are performing well then the barrier only slows things down but if there is a problem it'll bring all process back together and destroy the positive feedback cycle.  This is why you often only need a synchronisation point every so often, I'm also a huge fan of asyncronous barriers as a full sync is a blunt and slow operation, using asyncronous barriers you can allow small differences in timing but prevent them from getting too large with very little overhead in the common case where processes are synced already.  I'm thinking specifically of starting a sync-barrier on iteration N, waiting for it on N+25 and immediately starting another one, again waiting for it 25 steps later.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14196.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1674, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="14194.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14192.php">Terry Frankcombe: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14197.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14197.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14198.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
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

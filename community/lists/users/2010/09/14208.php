<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 17:34:53 2010" -->
<!-- isoreceived="20100909213453" -->
<!-- sent="Thu, 9 Sep 2010 22:34:15 +0100" -->
<!-- isosent="20100909213415" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="CCA4B987-EEB1-428B-BC5B-95341BEF0973_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFE248AA67.166CDF92-ON85257799.00703A6C-85257799.00719297_at_us.ibm.com" -->
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
<strong>Date:</strong> 2010-09-09 17:34:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14209.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14207.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14207.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14210.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14210.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9 Sep 2010, at 21:40, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you provide an example of a situation in which these semantically redundant barriers help? 
</span><br>
<p>I'm not making the case for semantically redundant barriers, I'm making a case for implicit synchronisation in every iteration of a application.  Many applications have this already by nature of the data-flow required, anything that calls mpi_allgather or mpi_allreduce are the easiest to verify but there are many other ways of achieving the same thing.  My point is about the subset of programs which don't have this attribute and are therefore susceptible to synchronisation problems.  It's my experience that for low iteration counts these codes can run fine but once they hit a problem they go over a cliff edge performance wise and there is no way back from there until the end of the job.  The email from Gabriele would appear to be a case that demonstrates this problem but I've seen it many times before.
<br>
<p>Using your previous email as an example I would describe adding barriers to a problem as a way artificially reducing the &quot;elasticity&quot; of the program to ensure balanced use of resources.
<br>
<p><span class="quotelev1">&gt; I may be missing something but my statement for the text book would be 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;If adding a barrier to your MPI program makes it run faster, there is almost certainly a flaw in it that is better solved another way.&quot; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only exception I can think of is some sort of one direction data dependancy with messages small enough to go eagerly.  A program that calls MPI_Reduce with a small message and the same root every iteration and  calls no other collective would be an example. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In that case, fast tasks at leaf positions would run free and a slow task near the root could pile up early arrivals and end up with some additional slowing. Unless it was driven into paging I cannot imagine the slowdown would be significant though. 
</span><br>
<p>I've diagnosed problems where the cause was a receive queue of tens of thousands of messages, in this case each and every receive performs slowly unless the descriptor is near the front of the queue so the concern is not purely about memory usage at individual processes although that can also be a factor.
<br>
<p>Ashley,
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
<li><strong>Next message:</strong> <a href="14209.php">Alex A. Granovsky: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14207.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14207.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14210.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14210.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
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

<?
$subject_val = "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 13:18:29 2010" -->
<!-- isoreceived="20100923171829" -->
<!-- sent="Thu, 23 Sep 2010 13:18:23 -0400" -->
<!-- isosent="20100923171823" -->
<!-- name="Bowen Zhou" -->
<!-- email="bwzhou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;self scheduled&amp;quot; work &amp;amp; mpi receive???" -->
<!-- id="BLU0-SMTP119B740BE8F79C14AF9225ED2610_at_phx.gbl" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3D807689CC0B144B8A15A477B60C25D404A10F2E_at_0015-its-exmb10.us.saic.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???<br>
<strong>From:</strong> Bowen Zhou (<em>bwzhou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 13:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14299.php">Ken Mighell: "[OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?"</a>
<li><strong>Previous message:</strong> <a href="14297.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14290.php">Lewis, Ambrose J.: "[OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14303.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Reply:</strong> <a href="14303.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hi All:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;ve written an openmpi program that &#147;self schedules&#148; the work.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The master task is in a loop chunking up an input stream and handing off 
</span><br>
<span class="quotelev1">&gt; jobs to worker tasks.  At first the master gives the next job to the 
</span><br>
<span class="quotelev1">&gt; next highest rank.  After all ranks have their first job, the master 
</span><br>
<span class="quotelev1">&gt; waits via an MPI receive call for the next free worker.  The master 
</span><br>
<span class="quotelev1">&gt; parses out the rank from the MPI receive and sends the next job to this 
</span><br>
<span class="quotelev1">&gt; node.  The jobs aren&#146;t all identical, so they run for slightly different 
</span><br>
<span class="quotelev1">&gt; durations based on the input data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I plot a histogram of the number of jobs each worker performed, the 
</span><br>
<span class="quotelev1">&gt; lower mpi ranks are doing much more work than the higher ranks.  For 
</span><br>
<span class="quotelev1">&gt; example, in a 120 process run, rank 1 did 32 jobs while rank 119 only 
</span><br>
<span class="quotelev1">&gt; did 2.  My guess is that openmpi returns the lowest rank from the MPI 
</span><br>
<span class="quotelev1">&gt; Recv when I&#146;ve got MPI_ANY_SOURCE set and multiple sends have happened 
</span><br>
<span class="quotelev1">&gt; since the last call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a different Recv call to make that will spread out the data better?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
How about using MPI_Irecv? Let the master issue an MPI_Irecv for each 
<br>
worker and call MPI_Test to get the list of idle workers, then choose 
<br>
one from the idle list by some randomization?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; THANXS!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; amb
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="14299.php">Ken Mighell: "[OMPI users] Porting Open MPI to ARM: How essential is the opal_sys_timer_get_cycles() function?"</a>
<li><strong>Previous message:</strong> <a href="14297.php">Gabriele Fatigati: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>In reply to:</strong> <a href="14290.php">Lewis, Ambrose J.: "[OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14303.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Reply:</strong> <a href="14303.php">Lewis, Ambrose J.: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
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

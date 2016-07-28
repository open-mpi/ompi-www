<?
$subject_val = "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 15:17:56 2010" -->
<!-- isoreceived="20100923191756" -->
<!-- sent="Thu, 23 Sep 2010 15:17:26 -0400" -->
<!-- isosent="20100923191726" -->
<!-- name="Lewis, Ambrose J." -->
<!-- email="AMBROSE.J.LEWIS_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;self scheduled&amp;quot; work &amp;amp; mpi receive???" -->
<!-- id="3D807689CC0B144B8A15A477B60C25D40446DA9D_at_0015-its-exmb10.us.saic.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU0-SMTP119B740BE8F79C14AF9225ED2610_at_phx.gbl" -->
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
<strong>From:</strong> Lewis, Ambrose J. (<em>AMBROSE.J.LEWIS_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 15:17:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14304.php">Mikael Lavoie: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14302.php">Matheus Bersot Siqueira Barros: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>In reply to:</strong> <a href="14298.php">Bowen Zhou: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14304.php">Mikael Lavoie: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's a great suggestion...Thanks!
<br>
amb
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] on behalf of Bowen Zhou
<br>
Sent: Thu 9/23/2010 1:18 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???
<br>
&nbsp;
<br>
<p><p><p><p><span class="quotelev1">&gt; Hi All:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've written an openmpi program that &quot;self schedules&quot; the work.  
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
<span class="quotelev1">&gt; node.  The jobs aren't all identical, so they run for slightly different 
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
<span class="quotelev1">&gt; Recv when I've got MPI_ANY_SOURCE set and multiple sends have happened 
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14303/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14304.php">Mikael Lavoie: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14302.php">Matheus Bersot Siqueira Barros: "Re: [OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<li><strong>In reply to:</strong> <a href="14298.php">Bowen Zhou: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14304.php">Mikael Lavoie: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
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

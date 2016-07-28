<?
$subject_val = "[OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 09:38:24 2010" -->
<!-- isoreceived="20100923133824" -->
<!-- sent="Thu, 23 Sep 2010 09:38:13 -0400" -->
<!-- isosent="20100923133813" -->
<!-- name="Lewis, Ambrose J." -->
<!-- email="AMBROSE.J.LEWIS_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;self scheduled&amp;quot; work &amp;amp; mpi receive???" -->
<!-- id="3D807689CC0B144B8A15A477B60C25D404A10F2E_at_0015-its-exmb10.us.saic.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???<br>
<strong>From:</strong> Lewis, Ambrose J. (<em>AMBROSE.J.LEWIS_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 09:38:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14291.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14289.php">Andrei Fokau: "[OMPI users] Running on crashing nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14296.php">pooja varshneya: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Reply:</strong> <a href="14296.php">pooja varshneya: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Reply:</strong> <a href="14298.php">Bowen Zhou: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Reply:</strong> <a href="14304.php">Mikael Lavoie: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All:
<br>
<p>I've written an openmpi program that &quot;self schedules&quot; the work.  
<br>
<p>The master task is in a loop chunking up an input stream and handing off
<br>
jobs to worker tasks.  At first the master gives the next job to the
<br>
next highest rank.  After all ranks have their first job, the master
<br>
waits via an MPI receive call for the next free worker.  The master
<br>
parses out the rank from the MPI receive and sends the next job to this
<br>
node.  The jobs aren't all identical, so they run for slightly different
<br>
durations based on the input data.
<br>
<p>&nbsp;
<br>
<p>When I plot a histogram of the number of jobs each worker performed, the
<br>
lower mpi ranks are doing much more work than the higher ranks.  For
<br>
example, in a 120 process run, rank 1 did 32 jobs while rank 119 only
<br>
did 2.  My guess is that openmpi returns the lowest rank from the MPI
<br>
Recv when I've got MPI_ANY_SOURCE set and multiple sends have happened
<br>
since the last call.
<br>
<p>&nbsp;
<br>
<p>Is there a different Recv call to make that will spread out the data
<br>
better?
<br>
<p>&nbsp;
<br>
<p>THANXS!
<br>
<p>amb
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14290/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14291.php">Jeff Squyres: "Re: [OMPI users] Question about Asynchronous collectives"</a>
<li><strong>Previous message:</strong> <a href="14289.php">Andrei Fokau: "[OMPI users] Running on crashing nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14296.php">pooja varshneya: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Reply:</strong> <a href="14296.php">pooja varshneya: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Reply:</strong> <a href="14298.php">Bowen Zhou: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Reply:</strong> <a href="14304.php">Mikael Lavoie: "Re: [OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
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

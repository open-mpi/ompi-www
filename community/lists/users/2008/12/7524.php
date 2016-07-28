<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 15:50:26 2008" -->
<!-- isoreceived="20081212205026" -->
<!-- sent="Fri, 12 Dec 2008 16:46:36 -0400" -->
<!-- isosent="20081212204636" -->
<!-- name="douglas.guptill_at_[hidden]" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="20081212204636.GB26074_at_DOME" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="96485920-C856-454D-8AE9-A63751635C88_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1<br>
<strong>From:</strong> <a href="mailto:douglas.guptill_at_[hidden]?Subject=Re:%20[OMPI%20users]%20trouble%20using%20--mca%20mpi_yield_when_idle%201"><em>douglas.guptill_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-12-12 15:46:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7525.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7523.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7527.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7527.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff:
<br>
<p>On Fri, Dec 12, 2008 at 08:37:14AM -0500, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, Open MPI does have on its long-term roadmap to have &quot;blocking&quot;  
</span><br>
<span class="quotelev1">&gt; progress -- meaning that it'll (probably) spin aggressively for a  
</span><br>
<span class="quotelev1">&gt; while and if nothing &quot;interesting&quot; is happening, it'll go into a  
</span><br>
<span class="quotelev1">&gt; blocking mode and let the process block in some kind of OS call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although we have some interesting ideas on how to do this, it's not  
</span><br>
<span class="quotelev1">&gt; entirely clear when we'll get this done.  There's been a few requests  
</span><br>
<span class="quotelev1">&gt; for this kind of feature before, but not a huge demand.
</span><br>
<p>Please count me as wanting that feature.  And it would be nice - for
<br>
our application - to block immediately.
<br>
<p><span class="quotelev1">&gt; This is probably because most users running MPI jobs tend to devote
</span><br>
<span class="quotelev1">&gt; the entire core/CPU/server to the MPI job and don't try to run other
</span><br>
<span class="quotelev1">&gt; jobs concurrently on the same resources.
</span><br>
<p>Our situation is different.  While our number-cruncher application is
<br>
running, we would like to be able to do some editing, compiling,
<br>
post-processing.
<br>
<p>I once ran three jobs, hence 6 processes, on our 4-cpu system, and was
<br>
unable to ssh into the machine.  Or maybe I did not wait long
<br>
enough...
<br>
<p>The number-cruncher has two processes, and each needs intermediate
<br>
results from the other, inside a
<br>
&nbsp;&nbsp;do i=1,30000
<br>
&nbsp;&nbsp;enddo 
<br>
<p>As I mentioned earlier, most of the time, only one process is
<br>
executing, and the other is waiting for results.  My guess is that,
<br>
with the blocking feature you describe, I could double the number of
<br>
number-cruncher jobs running at one time, thus doubling throughput.
<br>
<p>Regards,
<br>
Douglas.
<br>
<pre>
-- 
  Douglas Guptill                       
  Research Assistant, LSC 4640          email: douglas.guptill_at_[hidden]
  Oceanography Department               fax:   902-494-3877
  Dalhousie University
  Halifax, NS, B3H 4J1, Canada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7525.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7523.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7527.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7527.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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

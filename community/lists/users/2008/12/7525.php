<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 16:39:36 2008" -->
<!-- isoreceived="20081212213936" -->
<!-- sent="Fri, 12 Dec 2008 16:39:31 -0500" -->
<!-- isosent="20081212213931" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="4247AB7F-1319-432D-9969-CD1645D7AF83_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4942955C.9070405_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 16:39:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7526.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7524.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7521.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7528.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7528.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2008, at 11:46 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, I've run into the need for this a few times due to HPCC tests  
</span><br>
<span class="quotelev1">&gt; on large (&gt;100 MPI procs) nodes or multicore systems.  HPCC (among  
</span><br>
<span class="quotelev1">&gt; other things) looks at the performance of a single process while all  
</span><br>
<span class="quotelev1">&gt; other np-1 processes spinwait -- or of a single pingpong pair while  
</span><br>
<span class="quotelev1">&gt; all other np-2 processes wait.  I'm not 100% sure what's going on,  
</span><br>
<span class="quotelev1">&gt; but I'm guessing that the hard spinning of waiting processes hits  
</span><br>
<span class="quotelev1">&gt; the memory system or some other resource, degrading the performance  
</span><br>
<span class="quotelev1">&gt; of working processes.  This is on nodes that are not oversubscribed.
</span><br>
<p>I guess I could &lt;waving hands&gt; see how shmem kinds of communication  
<br>
could lead to this kind of bottleneck, and that increasing core counts  
<br>
would magnify the effect.  It would be good to understand if shmem  
<br>
activity is the cause of the slowdown to know if this is a good  
<br>
rationale datapoint for whether we should do blocking progress (or,  
<br>
more specifically, whether we need to increase the priority of  
<br>
implementing blocking progress).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7526.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7524.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7521.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7528.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7528.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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

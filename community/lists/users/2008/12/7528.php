<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 17:13:59 2008" -->
<!-- isoreceived="20081212221359" -->
<!-- sent="Fri, 12 Dec 2008 14:17:25 -0800" -->
<!-- isosent="20081212221725" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="4942E2F5.8020808_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4247AB7F-1319-432D-9969-CD1645D7AF83_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 17:17:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7529.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="7527.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7525.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7524.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 12, 2008, at 11:46 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I've run into the need for this a few times due to HPCC tests  
</span><br>
<span class="quotelev2">&gt;&gt; on large (&gt;100 MPI procs) nodes or multicore systems.  HPCC (among  
</span><br>
<span class="quotelev2">&gt;&gt; other things) looks at the performance of a single process while all  
</span><br>
<span class="quotelev2">&gt;&gt; other np-1 processes spinwait -- or of a single pingpong pair while  
</span><br>
<span class="quotelev2">&gt;&gt; all other np-2 processes wait.  I'm not 100% sure what's going on,  
</span><br>
<span class="quotelev2">&gt;&gt; but I'm guessing that the hard spinning of waiting processes hits  
</span><br>
<span class="quotelev2">&gt;&gt; the memory system or some other resource, degrading the performance  
</span><br>
<span class="quotelev2">&gt;&gt; of working processes.  This is on nodes that are not oversubscribed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess I could &lt;waving hands&gt; see how shmem kinds of communication  
</span><br>
<span class="quotelev1">&gt; could lead to this kind of bottleneck, and that increasing core 
</span><br>
<span class="quotelev1">&gt; counts  would magnify the effect.  It would be good to understand if 
</span><br>
<span class="quotelev1">&gt; shmem  activity is the cause of the slowdown to know if this is a 
</span><br>
<span class="quotelev1">&gt; good  rationale datapoint for whether we should do blocking progress 
</span><br>
<span class="quotelev1">&gt; (or,  more specifically, whether we need to increase the priority of  
</span><br>
<span class="quotelev1">&gt; implementing blocking progress).
</span><br>
<p>I don't understand all of what's going on here, but I/we've seen this 
<br>
sort of &quot;catastrophic degradation&quot; on two large (&gt;100 processes) nodes 
<br>
of rather different architectures.  Prototypes seem to indicate that 
<br>
blocking *or* directed polling seems to address the problem, but those 
<br>
are preliminary findings that are not backed up by sound understanding 
<br>
of what's going on under the hood.  Yes, still handwaving.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7529.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="7527.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7525.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7524.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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

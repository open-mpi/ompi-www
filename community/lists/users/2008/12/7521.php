<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 11:43:00 2008" -->
<!-- isoreceived="20081212164300" -->
<!-- sent="Fri, 12 Dec 2008 08:46:20 -0800" -->
<!-- isosent="20081212164620" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="4942955C.9070405_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 11:46:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7522.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Previous message:</strong> <a href="7520.php">Harald Anlauf: "[OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>In reply to:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7525.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7525.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
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
<span class="quotelev1">&gt; for this kind of feature before, but not a huge demand.  This is  
</span><br>
<span class="quotelev1">&gt; probably because most users running MPI jobs tend to devote the 
</span><br>
<span class="quotelev1">&gt; entire  core/CPU/server to the MPI job and don't try to run other 
</span><br>
<span class="quotelev1">&gt; jobs  concurrently on the same resources.
</span><br>
<p>FWIW, I've run into the need for this a few times due to HPCC tests on 
<br>
large (&gt;100 MPI procs) nodes or multicore systems.  HPCC (among other 
<br>
things) looks at the performance of a single process while all other 
<br>
np-1 processes spinwait -- or of a single pingpong pair while all other 
<br>
np-2 processes wait.  I'm not 100% sure what's going on, but I'm 
<br>
guessing that the hard spinning of waiting processes hits the memory 
<br>
system or some other resource, degrading the performance of working 
<br>
processes.  This is on nodes that are not oversubscribed.
<br>
<p>So, I wonder if one might become more interested in less aggressive 
<br>
waits when the node sizes increase.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7522.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Previous message:</strong> <a href="7520.php">Harald Anlauf: "[OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>In reply to:</strong> <a href="7517.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7525.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Reply:</strong> <a href="7525.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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

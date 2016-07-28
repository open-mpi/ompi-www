<?
$subject_val = "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 16:49:53 2008" -->
<!-- isoreceived="20081212214953" -->
<!-- sent="Fri, 12 Dec 2008 16:49:46 -0500" -->
<!-- isosent="20081212214946" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1" -->
<!-- id="04A3F7AC-8482-4387-8220-48ED14BA1E1A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081212204636.GB26074_at_DOME" -->
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
<strong>Date:</strong> 2008-12-12 16:49:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7528.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7526.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7524.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7523.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2008, at 3:46 PM, douglas.guptill_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt;&gt; This is probably because most users running MPI jobs tend to devote
</span><br>
<span class="quotelev2">&gt;&gt; the entire core/CPU/server to the MPI job and don't try to run other
</span><br>
<span class="quotelev2">&gt;&gt; jobs concurrently on the same resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our situation is different.  While our number-cruncher application is
</span><br>
<span class="quotelev1">&gt; running, we would like to be able to do some editing, compiling,
</span><br>
<span class="quotelev1">&gt; post-processing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I once ran three jobs, hence 6 processes, on our 4-cpu system, and was
</span><br>
<span class="quotelev1">&gt; unable to ssh into the machine.  Or maybe I did not wait long
</span><br>
<span class="quotelev1">&gt; enough...
</span><br>
<p>I can believe it.  OMPI is very aggressive about using CPU cycles when  
<br>
not yielding; very tight loops spinning for progress, sometimes not  
<br>
even invoking system calls, so there's few &quot;natural&quot; opportunities for  
<br>
the OS to swap out the process to a different one.  If you used the  
<br>
yield_when_idle, you should have been able to ssh into the machine.
<br>
<p><span class="quotelev1">&gt; The number-cruncher has two processes, and each needs intermediate
</span><br>
<span class="quotelev1">&gt; results from the other, inside a
</span><br>
<span class="quotelev1">&gt;  do i=1,30000
</span><br>
<span class="quotelev1">&gt;  enddo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I mentioned earlier, most of the time, only one process is
</span><br>
<span class="quotelev1">&gt; executing, and the other is waiting for results.  My guess is that,
</span><br>
<span class="quotelev1">&gt; with the blocking feature you describe, I could double the number of
</span><br>
<span class="quotelev1">&gt; number-cruncher jobs running at one time, thus doubling throughput.
</span><br>
<p><p>Possibly.  MPI is not the only issue at play here, as Eugene noted.   
<br>
You do only have so many CPU cores and only so much memory bandwidth.   
<br>
You might want to do a few back-of-the-envelope calculations and/or  
<br>
non-MPI experiments to figure out what your actual speedup will be.
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
<li><strong>Next message:</strong> <a href="7528.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7526.php">Jeff Squyres: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7524.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7523.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
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

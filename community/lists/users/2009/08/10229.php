<?
$subject_val = "Re: [OMPI users] 2 to 1 oversubscription";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 18:36:21 2009" -->
<!-- isoreceived="20090806223621" -->
<!-- sent="Thu, 6 Aug 2009 15:36:00 -0700" -->
<!-- isosent="20090806223600" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 to 1 oversubscription" -->
<!-- id="20090806223600.GA18603_at_tosh2egg.ca.sanfran.comcast.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A5B6DE6.2010903_at_3db-labs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 2 to 1 oversubscription<br>
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 18:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10230.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Previous message:</strong> <a href="10228.php">Craig Tierney: "[OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9940.php">Mark Borgerding: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9945.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jul 13, 2009 at 01:24:54PM -0400, Mark Borgerding wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's my advice: Don't trust anyones advice.  Benchmark it yourself and  
</span><br>
<span class="quotelev1">&gt; see.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problems vary so wildly that only you can tell if your problem will  
</span><br>
<span class="quotelev1">&gt; benefit from over-subscription. It really depends on too many factors to  
</span><br>
<span class="quotelev1">&gt; accurately predict: schedulers, memory usage, network/interconnect  
</span><br>
<span class="quotelev1">&gt; hardware, disk seek times, and probably a hundred other things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've even seen mixed results from oversubscribing within a single  
</span><br>
<span class="quotelev1">&gt; algorithm.  (Granted this is mostly with the older generation  
</span><br>
<span class="quotelev1">&gt; hyperthreading, so I'm not sure how things fare with nehalem).  The most  
</span><br>
<span class="quotelev1">&gt; notable effect I've observed is related to cache use. If the problem  
</span><br>
<span class="quotelev1">&gt; fits in cache it is much faster.  With cores sharing cache it can even  
</span><br>
<span class="quotelev1">&gt; be advantageous to *undersubscribe* the problem.  i.e. schedule 2  
</span><br>
<span class="quotelev1">&gt; processes on a quad core so each can have the full cache.
</span><br>
<p>Mark's advice - stellar- &quot;Benchmark it yourself and see&quot;.
<br>
<p>I suspect that a number of interesting things are hidden under
<br>
hyperthreading.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- application chunk sizing.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- application chunk symmetry.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- cache interactions.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- cache line conflicts
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MPI primitives
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MPI message rate interactions
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MPI bandwidth interactions
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- MPI latency interactions
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- barrier code used in MPI primitives
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- mutex code 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Communication hardware interactions
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Compiler optimizations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Compiler pipelineing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Compiler flags
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Compiler loop unrolling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Compiler SIMD instruction use.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Compiler intrinsic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Library selection and implementation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- System API choice.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- hardware pipeline use while hyperthreading is active.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- etc.
<br>
<p>A naive view of Intel Hyperthreading transistor counts 
<br>
makes it economical to share some pipelines between
<br>
two execution streams.  In old code and common application
<br>
mixes fully replicated hardware would be idle a lot 
<br>
of the time.
<br>
<p>At Pathscale MPI benchmarks between the in-house compiler and
<br>
other modern optimizing compilers were not done with hyperthreading
<br>
enabled because it was routinely slower on interesting benchmarks 
<br>
(and it required a BIOS change).   YMMV, What is interesting to 
<br>
you might be different so try it.
<br>
<p>AND at a system level hyperthreading is very interesting 
<br>
because of stuff like IO, X and numerous kernel tasks 
<br>
do not need or touch the big blocks of shared transistors that
<br>
are the floating point hardware.
<br>
<p><p><p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10230.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>Previous message:</strong> <a href="10228.php">Craig Tierney: "[OMPI users] Performance question about OpenMPI and MVAPICH2 on IB"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9940.php">Mark Borgerding: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9945.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 13 16:42:02 2006" -->
<!-- isoreceived="20060313214202" -->
<!-- sent="Mon, 13 Mar 2006 16:41:54 -0500" -->
<!-- isosent="20060313214154" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11" -->
<!-- id="C730026A-2960-45AC-B923-6405190F2980_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4415E5EF.9030107_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-13 16:41:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0848.php">Pierre Valiron: "[OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>Previous message:</strong> <a href="0846.php">Pierre Valiron: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0846.php">Pierre Valiron: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0848.php">Pierre Valiron: "[OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>Reply:</strong> <a href="0848.php">Pierre Valiron: "[OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 13, 2006, at 4:36 PM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; I have successfully build openmpi-1.1a1r9260 (from the subversion  
</span><br>
<span class="quotelev1">&gt; trunk)
</span><br>
<span class="quotelev1">&gt; in 64-bit mode on Solaris Opteron.
</span><br>
<span class="quotelev1">&gt; This r9260 tarball incorporates the last patches for Solaris from  
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; Barrett.
</span><br>
<p>Just a quick note - these changes were recently moved into the v1.0  
<br>
release branch and will be part of Open MPI 1.0.2.
<br>
<p><span class="quotelev1">&gt; - The build is fine
</span><br>
<span class="quotelev1">&gt; - The standard output in mpirun is now fixed and behaves as expected
</span><br>
<span class="quotelev1">&gt; - Processor binding is functional (mpirun --mca mpi_paffinity_alone 1)
</span><br>
<span class="quotelev1">&gt; and performances are improved with this option (tested on SMP
</span><br>
<span class="quotelev1">&gt; quadriprocessors v40z)
</span><br>
<span class="quotelev1">&gt; - The latency is very low. Rotating buffers (each task pass a  
</span><br>
<span class="quotelev1">&gt; buffer to
</span><br>
<span class="quotelev1">&gt; its neighbour on a ring) produces the following performance on a
</span><br>
<span class="quotelev1">&gt; quadripro v40z:
</span><br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt; Open-mpi offers a much better latency than lam/mpi (3 us instead of 7
</span><br>
<span class="quotelev1">&gt; us) and also features a higher throughput. This is very promising !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Finally I could run successfully my production ab-initio quantum
</span><br>
<span class="quotelev1">&gt; chemistry code DIRCCR12 using open-mpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Congratulations to the open-mpi folks!
</span><br>
<p>Glad to hear we could get everything working for you, and thank you :).
<br>
<p><span class="quotelev1">&gt; PS. The open-mpi performances over gigabit ethernet don't seem as good
</span><br>
<span class="quotelev1">&gt; with respect to lam/mpi. I'll make more testing after browsing the
</span><br>
<span class="quotelev1">&gt; ethernet-related messages on the list. I'll also check if  
</span><br>
<span class="quotelev1">&gt; parallelizing
</span><br>
<span class="quotelev1">&gt; over two ethernet NICS helps.
</span><br>
<p>Yes, this is a known issue with our current TCP transport.  We  
<br>
haven't spent enough time optimizing performance (our latency could  
<br>
use some work as well).  We hope to be able to spend some developer  
<br>
cycles on this problem in the not too distant future, but we can't  
<br>
promise any timetables.  It's hard competing against yourself,  
<br>
especially when the previous project has a 10 year head start ;).
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0848.php">Pierre Valiron: "[OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>Previous message:</strong> <a href="0846.php">Pierre Valiron: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0846.php">Pierre Valiron: "Re: [OMPI users] Success on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0848.php">Pierre Valiron: "[OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
<li><strong>Reply:</strong> <a href="0848.php">Pierre Valiron: "[OMPI users] Ethernet tuning on Solaris Opteron ?"</a>
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

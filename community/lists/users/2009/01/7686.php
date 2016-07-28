<?
$subject_val = "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 16:40:14 2009" -->
<!-- isoreceived="20090112214014" -->
<!-- sent="Mon, 12 Jan 2009 16:40:08 -0500" -->
<!-- isosent="20090112214008" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes." -->
<!-- id="5D36A66E-2A7E-4454-9963-DE423E13C91E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0901121131510.20684_at_kmuriki.lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-12 16:40:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7687.php">Salmon, Rene: "[OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Previous message:</strong> <a href="7685.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7684.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 12, 2009, at 2:50 PM, kmuriki_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Is there is any requirement on the size of the data buffers
</span><br>
<span class="quotelev1">&gt; I should use in these warmup broadcasts ? If I use small
</span><br>
<span class="quotelev1">&gt; buffers like 1000 real values during warmup, the following
</span><br>
<span class="quotelev1">&gt; actual and timed MPI_BCAST over IB is taking a lot of time
</span><br>
<span class="quotelev1">&gt; (more than that on GiGE). If I use a bigger buffer of 10000 real
</span><br>
<span class="quotelev1">&gt; values during warmup the following timed MPI_BCAST is quick.
</span><br>
<p>I can't quite grok that -- &quot;actual and timed MPI_BCAST&quot;; are you  
<br>
talking about 2 different bcasts?
<br>
<p>With IB, there's also the issue of registered memory.  Open MPI v1.2.x  
<br>
defaults to copy in/copy out semantics (with pre-registered memory)  
<br>
until the message reaches a certain size, and then it uses a pipelined  
<br>
register/RDMA protocol.  However, even with copy in/out semantics of  
<br>
small messages, the resulting broadcast should still be much faster  
<br>
than over gige.
<br>
<p>Are you using the same buffer for the warmup bcast as the actual  
<br>
bcast?  You might try using &quot;--mca mpi_leave_pinned 1&quot; to see if that  
<br>
helps as well (will likely only help with large messages).
<br>
<p><span class="quotelev1">&gt; Surprisingly just doing two consecutive 80K byte MPI_BCASTs
</span><br>
<span class="quotelev1">&gt; performs very quick (forget about warmup and actual broadcast).
</span><br>
<span class="quotelev1">&gt; wheres as a single 80K broadcast is slow. Not sure if I'm missing
</span><br>
<span class="quotelev1">&gt; anything!.
</span><br>
<p>There's also the startup time and synchronization issues.  Remember  
<br>
that although MPI_BCAST does not provide any synchronization  
<br>
guarantees, it could well be that the 1st bcast effectively  
<br>
synchronizes the processes and the 2nd one therefore runs much faster  
<br>
(because individual processes won't need to spend much time blocking  
<br>
waiting for messages because they're effectively operating in lock  
<br>
step after the first bcast).
<br>
<p>Benchmarking is a very tricky business; it can be extremely difficult  
<br>
to precisely measure exactly what you want to measure.
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
<li><strong>Next message:</strong> <a href="7687.php">Salmon, Rene: "[OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Previous message:</strong> <a href="7685.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7684.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<!-- nextthread="start" -->
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

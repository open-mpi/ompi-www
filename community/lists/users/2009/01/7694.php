<?
$subject_val = "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 15:32:50 2009" -->
<!-- isoreceived="20090113203250" -->
<!-- sent="Tue, 13 Jan 2009 12:32:44 -0800 (PST)" -->
<!-- isosent="20090113203244" -->
<!-- name="kmuriki_at_[hidden]" -->
<!-- email="kmuriki_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)" -->
<!-- id="Pine.LNX.4.64.0901131230080.30016_at_kmuriki.lbl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)" -->
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
<strong>Subject:</strong> Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)<br>
<strong>From:</strong> <a href="mailto:kmuriki_at_[hidden]?Subject=Re:%20[OMPI%20users]%20slow%20MPI_BCast%20for%20messages%20size%20from%2024K%20bytes%20to%20800K%20bytes.%20(fwd)"><em>kmuriki_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-01-13 15:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7695.php">Rene Salmon: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Previous message:</strong> <a href="7693.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7697.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<li><strong>Reply:</strong> <a href="7697.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
Please read below:
<br>
<p><span class="quotelev1">&gt; On Jan 12, 2009, at 2:50 PM, kmuriki_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there is any requirement on the size of the data buffers
</span><br>
<span class="quotelev2">&gt;&gt; I should use in these warmup broadcasts ? If I use small
</span><br>
<span class="quotelev2">&gt;&gt; buffers like 1000 real values during warmup, the following
</span><br>
<span class="quotelev2">&gt;&gt; actual and timed MPI_BCAST over IB is taking a lot of time
</span><br>
<span class="quotelev2">&gt;&gt; (more than that on GiGE). If I use a bigger buffer of 10000 real
</span><br>
<span class="quotelev2">&gt;&gt; values during warmup the following timed MPI_BCAST is quick.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't quite grok that -- &quot;actual and timed MPI_BCAST&quot;; are you talking 
</span><br>
<span class="quotelev1">&gt; about 2 different bcasts?
</span><br>
<p>No I meant the same bcast when I said actual and timed.
<br>
This is the main bcast in the program which I have timed and
<br>
before this bcast as you suggested I did one warmup
<br>
bcast and in each attempt I picked the size of warmup bcast
<br>
from 1000 real to 10000 real values.
<br>
<p><span class="quotelev1">&gt; With IB, there's also the issue of registered memory.  Open MPI v1.2.x 
</span><br>
<span class="quotelev1">&gt; defaults to copy in/copy out semantics (with pre-registered memory) until the 
</span><br>
<span class="quotelev1">&gt; message reaches a certain size, and then it uses a pipelined register/RDMA 
</span><br>
<span class="quotelev1">&gt; protocol.  However, even with copy in/out semantics of small messages, the 
</span><br>
<span class="quotelev1">&gt; resulting broadcast should still be much faster than over gige.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you using the same buffer for the warmup bcast as the actual bcast?  You 
</span><br>
<span class="quotelev1">&gt; might try using &quot;--mca mpi_leave_pinned 1&quot; to see if that helps as well (will 
</span><br>
<span class="quotelev1">&gt; likely only help with large messages).
</span><br>
<p>I'm using different buffers for warmup and actual bcast. I tried the 
<br>
mpi_leave_pinned 1, but did not see any difference in behaviour.
<br>
<p>May be when ever the openmpi defaults to copy in/copy out semantics on my
<br>
cluster its performing very slow (than gige) but not when it uses RDMA.
<br>
Any tips on how to debug this !.
<br>
<p><span class="quotelev2">&gt;&gt; Surprisingly just doing two consecutive 80K byte MPI_BCASTs
</span><br>
<span class="quotelev2">&gt;&gt; performs very quick (forget about warmup and actual broadcast).
</span><br>
<span class="quotelev2">&gt;&gt; wheres as a single 80K broadcast is slow. Not sure if I'm missing
</span><br>
<span class="quotelev2">&gt;&gt; anything!.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's also the startup time and synchronization issues.  Remember that 
</span><br>
<span class="quotelev1">&gt; although MPI_BCAST does not provide any synchronization guarantees, it could 
</span><br>
<span class="quotelev1">&gt; well be that the 1st bcast effectively synchronizes the processes and the 2nd 
</span><br>
<span class="quotelev1">&gt; one therefore runs much faster (because individual processes won't need to 
</span><br>
<span class="quotelev1">&gt; spend much time blocking waiting for messages because they're effectively 
</span><br>
<span class="quotelev1">&gt; operating in lock step after the first bcast).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Benchmarking is a very tricky business; it can be extremely difficult to 
</span><br>
<span class="quotelev1">&gt; precisely measure exactly what you want to measure.
</span><br>
<p>My main effort here is not to benchmark my cluster but to resolve a
<br>
user problem, where in he complained that his bcasts are running very slow. I 
<br>
tried to recreate the situation with a simple fortran program
<br>
which just performs a bcast of size similar in his code. It also performed
<br>
very slow (than gige) then I started increasing and decreasing the sizes
<br>
of bcast to observe that it performs slow only in the range 8K bytes
<br>
to 100K bytes.
<br>
<p>thanks,
<br>
Krishna.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7695.php">Rene Salmon: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>Previous message:</strong> <a href="7693.php">Bill Buros: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7697.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<li><strong>Reply:</strong> <a href="7697.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
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

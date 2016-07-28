<?
$subject_val = "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 08:47:40 2009" -->
<!-- isoreceived="20090114134740" -->
<!-- sent="Wed, 14 Jan 2009 08:47:34 -0500" -->
<!-- isosent="20090114134734" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)" -->
<!-- id="572711CD-CBC2-4F8C-A189-B992BE7AF4F2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0901131230080.30016_at_kmuriki.lbl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 08:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7698.php">Gregory D Abram: "[OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>Previous message:</strong> <a href="7696.php">Jeff Squyres: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>In reply to:</strong> <a href="7694.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7705.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<li><strong>Reply:</strong> <a href="7705.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 13, 2009, at 3:32 PM, kmuriki_at_[hidden] wrote:
<br>
<p><span class="quotelev2">&gt;&gt; With IB, there's also the issue of registered memory.  Open MPI  
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.x defaults to copy in/copy out semantics (with pre-registered  
</span><br>
<span class="quotelev2">&gt;&gt; memory) until the message reaches a certain size, and then it uses  
</span><br>
<span class="quotelev2">&gt;&gt; a pipelined register/RDMA protocol.  However, even with copy in/out  
</span><br>
<span class="quotelev2">&gt;&gt; semantics of small messages, the resulting broadcast should still  
</span><br>
<span class="quotelev2">&gt;&gt; be much faster than over gige.
</span><br>
<span class="quotelev2">&gt;&gt; Are you using the same buffer for the warmup bcast as the actual  
</span><br>
<span class="quotelev2">&gt;&gt; bcast?  You might try using &quot;--mca mpi_leave_pinned 1&quot; to see if  
</span><br>
<span class="quotelev2">&gt;&gt; that helps as well (will likely only help with large messages).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using different buffers for warmup and actual bcast. I tried the  
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned 1, but did not see any difference in behaviour.
</span><br>
<p>In this case, you likely won't see much of a difference --  
<br>
mpi_leave_pinned will generally only be a boost for long messages that  
<br>
use the same buffers repeatedly.
<br>
<p><span class="quotelev1">&gt; May be when ever the openmpi defaults to copy in/copy out semantics  
</span><br>
<span class="quotelev1">&gt; on my
</span><br>
<span class="quotelev1">&gt; cluster its performing very slow (than gige) but not when it uses  
</span><br>
<span class="quotelev1">&gt; RDMA.
</span><br>
<p>That would be quite surprising.  I still think there's some kind of  
<br>
startup overhead going on here.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Surprisingly just doing two consecutive 80K byte MPI_BCASTs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performs very quick (forget about warmup and actual broadcast).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wheres as a single 80K broadcast is slow. Not sure if I'm missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything!.
</span><br>
<span class="quotelev2">&gt;&gt; There's also the startup time and synchronization issues.  Remember  
</span><br>
<span class="quotelev2">&gt;&gt; that although MPI_BCAST does not provide any synchronization  
</span><br>
<span class="quotelev2">&gt;&gt; guarantees, it could well be that the 1st bcast effectively  
</span><br>
<span class="quotelev2">&gt;&gt; synchronizes the processes and the 2nd one therefore runs much  
</span><br>
<span class="quotelev2">&gt;&gt; faster (because individual processes won't need to spend much time  
</span><br>
<span class="quotelev2">&gt;&gt; blocking waiting for messages because they're effectively operating  
</span><br>
<span class="quotelev2">&gt;&gt; in lock step after the first bcast).
</span><br>
<span class="quotelev2">&gt;&gt; Benchmarking is a very tricky business; it can be extremely  
</span><br>
<span class="quotelev2">&gt;&gt; difficult to precisely measure exactly what you want to measure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My main effort here is not to benchmark my cluster but to resolve a
</span><br>
<span class="quotelev1">&gt; user problem, where in he complained that his bcasts are running  
</span><br>
<span class="quotelev1">&gt; very slow. I tried to recreate the situation with a simple fortran  
</span><br>
<span class="quotelev1">&gt; program
</span><br>
<span class="quotelev1">&gt; which just performs a bcast of size similar in his code. It also  
</span><br>
<span class="quotelev1">&gt; performed
</span><br>
<span class="quotelev1">&gt; very slow (than gige) then I started increasing and decreasing the  
</span><br>
<span class="quotelev1">&gt; sizes
</span><br>
<span class="quotelev1">&gt; of bcast to observe that it performs slow only in the range 8K bytes
</span><br>
<span class="quotelev1">&gt; to 100K bytes.
</span><br>
<p><p>Can you send your modified test program (with a warmup send)?
<br>
<p>What happens if you run a benchmark like the broadcast section of IMB  
<br>
on TCP and IB?
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
<li><strong>Next message:</strong> <a href="7698.php">Gregory D Abram: "[OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>Previous message:</strong> <a href="7696.php">Jeff Squyres: "Re: [OMPI users] Compile problems with xlf and xlc on power"</a>
<li><strong>In reply to:</strong> <a href="7694.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7705.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<li><strong>Reply:</strong> <a href="7705.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
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

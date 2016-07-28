<?
$subject_val = "Re: [OMPI users] Shared Memory Performance Problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 15:25:47 2011" -->
<!-- isoreceived="20110330192547" -->
<!-- sent="Wed, 30 Mar 2011 12:25:35 -0700" -->
<!-- isosent="20110330192535" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory Performance Problem." -->
<!-- id="4D9383AF.1060200_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D936378.2070702_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory Performance Problem.<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-30 15:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16059.php">Nehemiah Dacres: "[OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16057.php">Eugene Loh: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>In reply to:</strong> <a href="16057.php">Eugene Loh: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/30/2011 10:08 AM, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Michele Marena wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I've launched my app with mpiP both when two processes are on
</span><br>
<span class="quotelev2">&gt;&gt; different node and when two processes are on the same node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The process 0 is the manager (gathers the results only), processes 1
</span><br>
<span class="quotelev2">&gt;&gt; and 2 are workers (compute).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the case processes 1 and 2 are on different nodes (runs in 162s).
</span><br>
<span class="quotelev2">&gt;&gt; @--- MPI Time (seconds)
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Task AppTime MPITime MPI%
</span><br>
<span class="quotelev2">&gt;&gt; 0 162 162 99.99
</span><br>
<span class="quotelev2">&gt;&gt; 1 162 30.2 18.66
</span><br>
<span class="quotelev2">&gt;&gt; 2 162 14.7 9.04
</span><br>
<span class="quotelev2">&gt;&gt; * 486 207 42.56
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The case when processes 1 and 2 are on the same node (runs in 260s).
</span><br>
<span class="quotelev2">&gt;&gt; @--- MPI Time (seconds)
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Task AppTime MPITime MPI%
</span><br>
<span class="quotelev2">&gt;&gt; 0 260 260 99.99
</span><br>
<span class="quotelev2">&gt;&gt; 1 260 39.7 15.29
</span><br>
<span class="quotelev2">&gt;&gt; 2 260 26.4 10.17
</span><br>
<span class="quotelev2">&gt;&gt; * 779 326 41.82
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think there's a contention problem on the memory bus.
</span><br>
<span class="quotelev1">&gt; Right. Process 0 spends all its time in MPI, presumably waiting on
</span><br>
<span class="quotelev1">&gt; workers. The workers spend about the same amount of time on MPI
</span><br>
<span class="quotelev1">&gt; regardless of whether they're placed together or not. The big difference
</span><br>
<span class="quotelev1">&gt; is that the workers are much slower in non-MPI tasks when they're
</span><br>
<span class="quotelev1">&gt; located on the same node. The issue has little to do with MPI. The
</span><br>
<span class="quotelev1">&gt; workers are hogging local resources and work faster when placed on
</span><br>
<span class="quotelev1">&gt; different nodes.
</span><br>
<span class="quotelev2">&gt;&gt; However, the message size is 4096 * sizeof(double). Maybe I are wrong
</span><br>
<span class="quotelev2">&gt;&gt; in this point. Is the message size too huge for shared memory?
</span><br>
<span class="quotelev1">&gt; No. That's not very large at all.
</span><br>
<p>Not even large enough to expect the non-temporal storage issue about 
<br>
cache eviction to arise.
<br>
<p><p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16059.php">Nehemiah Dacres: "[OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16057.php">Eugene Loh: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>In reply to:</strong> <a href="16057.php">Eugene Loh: "Re: [OMPI users] Shared Memory Performance Problem."</a>
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

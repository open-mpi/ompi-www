<?
$subject_val = "Re: [OMPI users] How to set paffinity on a multi-cpu node?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  1 09:14:40 2006" -->
<!-- isoreceived="20061201141440" -->
<!-- sent="Fri, 1 Dec 2006 16:14:31 +0200" -->
<!-- isosent="20061201141431" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="20061201141431.GB30081_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200612011151.29314.cap_at_nsc.liu.se" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-01 09:14:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2262.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2260.php">Peter Kjellstrom: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2260.php">Peter Kjellstrom: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2262.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2262.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 01, 2006 at 11:51:24AM +0100, Peter Kjellstrom wrote:
<br>
<span class="quotelev1">&gt; On Saturday 25 November 2006 15:31, shaposh_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; i cant figure out, is there a way with open-mpi to bind all
</span><br>
<span class="quotelev2">&gt; &gt; threads on a given node to a specified subset of CPUs.
</span><br>
<span class="quotelev2">&gt; &gt; For example, on a multi-socket multi-core machine, i want to use
</span><br>
<span class="quotelev2">&gt; &gt; only a single core on each CPU.
</span><br>
<span class="quotelev2">&gt; &gt; Thank You.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This might be a bit naive but, if you spawn two procs on a dual core dual 
</span><br>
<span class="quotelev1">&gt; socket system then the linux kernel should automagically schedule them this 
</span><br>
<span class="quotelev1">&gt; way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I actually think this applies to most of the situations discussed in this 
</span><br>
<span class="quotelev1">&gt; thread. Explicitly assigning processes to cores may actually get it wrong 
</span><br>
<span class="quotelev1">&gt; more often than the normal linux scheduler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
If you run two single threaded ranks on the dual core dual socket node
<br>
you better be placing them on the same core. Shared memory communication
<br>
will be much faster (especially if two cores shares cache).
<br>
<p><span class="quotelev1">&gt; /Peter (who may be putting a bit too much faith in the linux scheduler...)
</span><br>
Linux scheduler does its best assuming the processes are unrelated. This is
<br>
not the case with MPI ranks.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2262.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2260.php">Peter Kjellstrom: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2260.php">Peter Kjellstrom: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2262.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2262.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  1 09:23:53 2006" -->
<!-- isoreceived="20061201142353" -->
<!-- sent="Fri, 1 Dec 2006 16:23:42 +0200" -->
<!-- isosent="20061201142342" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="20061201142342.GD30081_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20061201141431.GB30081_at_minantech.com" -->
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
<strong>Date:</strong> 2006-12-01 09:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2266.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2264.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2264.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2266.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2266.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 01, 2006 at 04:14:31PM +0200, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Fri, Dec 01, 2006 at 11:51:24AM +0100, Peter Kjellstrom wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Saturday 25 November 2006 15:31, shaposh_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; i cant figure out, is there a way with open-mpi to bind all
</span><br>
<span class="quotelev3">&gt; &gt; &gt; threads on a given node to a specified subset of CPUs.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For example, on a multi-socket multi-core machine, i want to use
</span><br>
<span class="quotelev3">&gt; &gt; &gt; only a single core on each CPU.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank You.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This might be a bit naive but, if you spawn two procs on a dual core dual 
</span><br>
<span class="quotelev2">&gt; &gt; socket system then the linux kernel should automagically schedule them this 
</span><br>
<span class="quotelev2">&gt; &gt; way.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I actually think this applies to most of the situations discussed in this 
</span><br>
<span class="quotelev2">&gt; &gt; thread. Explicitly assigning processes to cores may actually get it wrong 
</span><br>
<span class="quotelev2">&gt; &gt; more often than the normal linux scheduler.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; If you run two single threaded ranks on the dual core dual socket node
</span><br>
<span class="quotelev1">&gt; you better be placing them on the same core. Shared memory communication
</span><br>
I mean &quot;same socket&quot; here and not &quot;same core&quot; of cause.
<br>
<p><span class="quotelev1">&gt; will be much faster (especially if two cores shares cache).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /Peter (who may be putting a bit too much faith in the linux scheduler...)
</span><br>
<span class="quotelev1">&gt; Linux scheduler does its best assuming the processes are unrelated. This is
</span><br>
<span class="quotelev1">&gt; not the case with MPI ranks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2266.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2264.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2264.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2266.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2266.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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

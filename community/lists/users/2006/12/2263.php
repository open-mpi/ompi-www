<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  1 05:51:16 2006" -->
<!-- isoreceived="20061201105116" -->
<!-- sent="Fri, 1 Dec 2006 11:51:24 +0100" -->
<!-- isosent="20061201105124" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="200612011151.29314.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200611252031.17407.shaposh_at_isp.nsc.ru" -->
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
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-01 05:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2264.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2262.php">Marcus G. Daniels: "Re: [OMPI users] For Open MPI + BPROC users"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2225.php">shaposh_at_[hidden]: "[OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2264.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2264.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2273.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Saturday 25 November 2006 15:31, shaposh_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; i cant figure out, is there a way with open-mpi to bind all
</span><br>
<span class="quotelev1">&gt; threads on a given node to a specified subset of CPUs.
</span><br>
<span class="quotelev1">&gt; For example, on a multi-socket multi-core machine, i want to use
</span><br>
<span class="quotelev1">&gt; only a single core on each CPU.
</span><br>
<span class="quotelev1">&gt; Thank You.
</span><br>
<p>This might be a bit naive but, if you spawn two procs on a dual core dual 
<br>
socket system then the linux kernel should automagically schedule them this 
<br>
way.
<br>
<p>I actually think this applies to most of the situations discussed in this 
<br>
thread. Explicitly assigning processes to cores may actually get it wrong 
<br>
more often than the normal linux scheduler.
<br>
<p>/Peter (who may be putting a bit too much faith in the linux scheduler...)
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2263/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2264.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2262.php">Marcus G. Daniels: "Re: [OMPI users] For Open MPI + BPROC users"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/11/2225.php">shaposh_at_[hidden]: "[OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2264.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2264.php">Gleb Natapov: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2273.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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

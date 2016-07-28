<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  1 14:13:25 2006" -->
<!-- isoreceived="20061201191325" -->
<!-- sent="Fri, 1 Dec 2006 11:13:13 -0800" -->
<!-- isosent="20061201191313" -->
<!-- name="Greg Lindahl" -->
<!-- email="greg.lindahl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="20061201191313.GH2329_at_greglaptop.internal.keyresearch.com" -->
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
<strong>From:</strong> Greg Lindahl (<em>greg.lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-01 14:13:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2274.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2272.php">Cupp, Matthew R: "[OMPI users] MPI_Barrier Error?"</a>
<li><strong>In reply to:</strong> <a href="2263.php">Peter Kjellstrom: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Dec 01, 2006 at 11:51:24AM +0100, Peter Kjellstrom wrote:
<br>
<p><span class="quotelev1">&gt; This might be a bit naive but, if you spawn two procs on a dual core dual 
</span><br>
<span class="quotelev1">&gt; socket system then the linux kernel should automagically schedule them this 
</span><br>
<span class="quotelev1">&gt; way.
</span><br>
<p>No, we checked this for OpenMP and MPI, and in both cases wiring the
<br>
processes to cores was significantly better. The Linux scheduler
<br>
(still) tends to migrate processes to the wrong core when OS threads
<br>
and processes wake up and go back to sleep.
<br>
<p>Just like the OpenMPI guys, we don't have a clever solution for the
<br>
&quot;what if the user wants to have 2 OpenMP or MPI jobs share the same
<br>
node?&quot; Well, I have a plan, but it's annoying to implement.
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2274.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2272.php">Cupp, Matthew R: "[OMPI users] MPI_Barrier Error?"</a>
<li><strong>In reply to:</strong> <a href="2263.php">Peter Kjellstrom: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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

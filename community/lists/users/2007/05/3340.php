<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 14:39:24 2007" -->
<!-- isoreceived="20070529183924" -->
<!-- sent="Tue, 29 May 2007 12:39:18 -0600" -->
<!-- isosent="20070529183918" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on shared memory." -->
<!-- id="A80C0E75-7213-46D1-8080-8FF89BABE04D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1180463143.465c7027397ba_at_webmail.ksu.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-29 14:39:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3341.php">Bill Saphir: "[OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Previous message:</strong> <a href="3339.php">smairal_at_[hidden]: "[OMPI users] OpenMPI on shared memory."</a>
<li><strong>In reply to:</strong> <a href="3339.php">smairal_at_[hidden]: "[OMPI users] OpenMPI on shared memory."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 29, 2007, at 12:25 PM, smairal_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;      I am doing a research on parallel computing on shared memory with
</span><br>
<span class="quotelev1">&gt; NUMA architecture. The system is a 4 node AMD opteron with each node
</span><br>
<span class="quotelev1">&gt; being a dual-core. I am testing an OpenMPI program with MPI-nodes &lt;=
</span><br>
<span class="quotelev1">&gt; MAX cores available on system (in my case 4*2=8). Can someone tell me
</span><br>
<span class="quotelev1">&gt; whether:
</span><br>
<span class="quotelev1">&gt; a) In such cases (where MPI-nodes&lt;=MAX cores on shared-memory),  
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev1">&gt; implements MPI-nodes as processes or threads? If yes, then how can it
</span><br>
<span class="quotelev1">&gt; be determined at run-time? I am wondering because processes have more
</span><br>
<span class="quotelev1">&gt; overhead than light-weight threads.
</span><br>
<p>In Open MPI, different MPI ranks are always different processes.   
<br>
This is what users expect, and I'd be hesitant to change that for the  
<br>
over-subscription case.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3341.php">Bill Saphir: "[OMPI users] forcing MPI to bind all sockets to 127.0.0.1"</a>
<li><strong>Previous message:</strong> <a href="3339.php">smairal_at_[hidden]: "[OMPI users] OpenMPI on shared memory."</a>
<li><strong>In reply to:</strong> <a href="3339.php">smairal_at_[hidden]: "[OMPI users] OpenMPI on shared memory."</a>
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

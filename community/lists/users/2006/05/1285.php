<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 19:45:36 2006" -->
<!-- isoreceived="20060524234536" -->
<!-- sent="Wed, 24 May 2006 16:45:54 -0700" -->
<!-- isosent="20060524234554" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pallas assistance ?" -->
<!-- id="4474F032.8050206_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d2403b0605241622g48c81048wcf71d55b61d02138_at_mail.gmail.com" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 19:45:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1286.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1284.php">Tom Rosmond: "[OMPI users] Wont run with 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="1283.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1286.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Reply:</strong> <a href="1286.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul wrote:
<br>
<span class="quotelev1">&gt; Somebody call orkin. ;-P
</span><br>
<span class="quotelev1">&gt; Well I tried running it with things set as noted in the bug report. 
</span><br>
<span class="quotelev1">&gt; However it doesnt change anything on my end. I am willing to do any 
</span><br>
<span class="quotelev1">&gt; verification you guys need (time permitting and all). Anything special 
</span><br>
<span class="quotelev1">&gt; needed to get mpi_latency to compile ? I can run that to verify that 
</span><br>
<span class="quotelev1">&gt; things are actually working on my end.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_something ompi]# /opt/ompi/bin/mpirun --mca 
</span><br>
<span class="quotelev1">&gt; btl_openmpi_use_eager_rdma 0 -np 2 -hostfile machine.list ./IMB-MPI1
</span><br>
<p>Shouldn't the parameter be '--mca btl_openib_use_eager_rdma'?
<br>
<p><span class="quotelev1">&gt; [root_at_something ompi]# /opt/ompi/bin/mpirun --mca btl_openmpi_use_srq 1 
</span><br>
<span class="quotelev1">&gt; -np 2 -hostfile machine.list ./IMB-MPI1
</span><br>
<p>Same here - '--mca btl_openib_use_srq'
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1286.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1284.php">Tom Rosmond: "[OMPI users] Wont run with 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="1283.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1286.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Reply:</strong> <a href="1286.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
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

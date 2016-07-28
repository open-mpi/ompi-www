<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 21 18:05:19 2011" -->
<!-- isoreceived="20110221230519" -->
<!-- sent="Mon, 21 Feb 2011 16:05:09 -0700" -->
<!-- isosent="20110221230509" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn_multiple" -->
<!-- id="7ED86A5D-5922-4A74-A357-10889D971CDC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A632B3F93D861843A3C966F3962C3F840108272B05A7_at_EMAIL05.pnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn_multiple<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-21 18:05:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15673.php">Ahsan Ali: "[OMPI users] WRF Problem running in Parallel"</a>
<li><strong>Previous message:</strong> <a href="15671.php">Skouson, Gary B: "[OMPI users] MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="15671.php">Skouson, Gary B: "[OMPI users] MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I very much doubt that either of those mappers has ever been tested against comm_spawn. Just glancing thru them, I don't see an immediate reason why loadbalance wouldn't work, but the error indicates that the system wound up mapping one or more processes to an unknown node.
<br>
<p>We are revising the mappers at this time, so I doubt we'll try to fix it for 1.5.2. You might try the 1.4 series to see if it behaves differently, though I suspect those mappers weren't tested against comm_spawn there either.
<br>
<p><p>On Feb 21, 2011, at 12:59 PM, Skouson, Gary B wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to use MPI_Comm_spawn_multiple and it doesn't seem to always work like I'd expect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The simple test code I have starts a couple of master processes and then tries to spawn a couple of worker threads on each of the nodes running the master processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was using 1.5.1, but gave 1.5.2rc2 a try too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I do:
</span><br>
<span class="quotelev1">&gt; [skouson_at_cu2n29 mpi2_example]$ mpirun -hostfile hostfile -n 2 -bynode ./mpi2_manager
</span><br>
<span class="quotelev1">&gt; MPI Initialized=0, Finalized=0
</span><br>
<span class="quotelev1">&gt; MPI Initialized=0, Finalized=0
</span><br>
<span class="quotelev1">&gt; I'm manager 0 of 2 on cu2n29 running MPI 2.1
</span><br>
<span class="quotelev1">&gt; setting up host cu2n29 - ./mpi2_worker
</span><br>
<span class="quotelev1">&gt; setting up host cu2n30 - ./mpi2_worker
</span><br>
<span class="quotelev1">&gt; Spawning 2 worker processes running ./mpi2_worker
</span><br>
<span class="quotelev1">&gt; Sleeping for a bit...
</span><br>
<span class="quotelev1">&gt; I'm manager 1 of 2 on cu2n30 running MPI 2.1
</span><br>
<span class="quotelev1">&gt; **** I'm worker 0 of 2 on cu2n29 running MPI 2.1
</span><br>
<span class="quotelev1">&gt; **** Worker 0: number of parents = 2
</span><br>
<span class="quotelev1">&gt; **** Worker 0: Success!
</span><br>
<span class="quotelev1">&gt; **** I'm worker 1 of 2 on cu2n30 running MPI 2.1
</span><br>
<span class="quotelev1">&gt; **** Worker 1: number of parents = 2
</span><br>
<span class="quotelev1">&gt; **** Worker 1: Success!
</span><br>
<span class="quotelev1">&gt; **** Worker 0: Value recd = 25
</span><br>
<span class="quotelev1">&gt; 1: MPI Initialized=1, Finalized=1
</span><br>
<span class="quotelev1">&gt; 0: MPI Initialized=1, Finalized=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to work as expected, however, if I use -loadbalance or -npernode 1 rather than the -bynode flag I get an obscure error and things hang until a ctrl-c out of it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [skouson_at_cu2n29 mpi2_example]$ mpirun -hostfile hostfile -n 2 -loadbalance ./mpi2_manager
</span><br>
<span class="quotelev1">&gt; MPI Initialized=0, Finalized=0
</span><br>
<span class="quotelev1">&gt; MPI Initialized=0, Finalized=0
</span><br>
<span class="quotelev1">&gt; I'm manager 1 of 2 on cu2n30 running MPI 2.1
</span><br>
<span class="quotelev1">&gt; I'm manager 0 of 2 on cu2n29 running MPI 2.1
</span><br>
<span class="quotelev1">&gt; setting up host cu2n29 - ./mpi2_worker
</span><br>
<span class="quotelev1">&gt; setting up host cu2n30 - ./mpi2_worker
</span><br>
<span class="quotelev1">&gt; Spawning 2 worker processes running ./mpi2_worker
</span><br>
<span class="quotelev1">&gt; Sleeping for a bit...
</span><br>
<span class="quotelev1">&gt; [cu2n29:03088] [[62875,0],0] ORTE_ERROR_LOG: Not found in file base/odls_base_default_fns.c at line 906
</span><br>
<span class="quotelev1">&gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My environment has:
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_openib_ib_retry_count=7
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_keep_peer_hostnames=1
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_openib_ib_timeout=31
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've included the sample code, along with config.log etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anyone has any can point out what I'm missing to be able to run with the -loadbalance flag, I'd appreciate it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Gary Skouson
</span><br>
<span class="quotelev1">&gt; &lt;mpi2_example.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15673.php">Ahsan Ali: "[OMPI users] WRF Problem running in Parallel"</a>
<li><strong>Previous message:</strong> <a href="15671.php">Skouson, Gary B: "[OMPI users] MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="15671.php">Skouson, Gary B: "[OMPI users] MPI_Comm_spawn_multiple"</a>
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

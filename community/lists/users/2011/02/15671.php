<?
$subject_val = "[OMPI users] MPI_Comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 21 14:59:53 2011" -->
<!-- isoreceived="20110221195953" -->
<!-- sent="Mon, 21 Feb 2011 11:59:44 -0800" -->
<!-- isosent="20110221195944" -->
<!-- name="Skouson, Gary B" -->
<!-- email="Gary.Skouson_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_spawn_multiple" -->
<!-- id="A632B3F93D861843A3C966F3962C3F840108272B05A7_at_EMAIL05.pnl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_spawn_multiple<br>
<strong>From:</strong> Skouson, Gary B (<em>Gary.Skouson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-21 14:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="15670.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to use MPI_Comm_spawn_multiple and it doesn't seem to always work like I'd expect.
<br>
<p>The simple test code I have starts a couple of master processes and then tries to spawn a couple of worker threads on each of the nodes running the master processes.
<br>
<p>I was using 1.5.1, but gave 1.5.2rc2 a try too.
<br>
&nbsp;
<br>
If I do:
<br>
[skouson_at_cu2n29 mpi2_example]$ mpirun -hostfile hostfile -n 2 -bynode ./mpi2_manager
<br>
MPI Initialized=0, Finalized=0
<br>
MPI Initialized=0, Finalized=0
<br>
I'm manager 0 of 2 on cu2n29 running MPI 2.1
<br>
setting up host cu2n29 - ./mpi2_worker
<br>
setting up host cu2n30 - ./mpi2_worker
<br>
Spawning 2 worker processes running ./mpi2_worker
<br>
Sleeping for a bit...
<br>
I'm manager 1 of 2 on cu2n30 running MPI 2.1
<br>
**** I'm worker 0 of 2 on cu2n29 running MPI 2.1
<br>
**** Worker 0: number of parents = 2
<br>
**** Worker 0: Success!
<br>
**** I'm worker 1 of 2 on cu2n30 running MPI 2.1
<br>
**** Worker 1: number of parents = 2
<br>
**** Worker 1: Success!
<br>
**** Worker 0: Value recd = 25
<br>
1: MPI Initialized=1, Finalized=1
<br>
0: MPI Initialized=1, Finalized=1
<br>
<p>It seems to work as expected, however, if I use -loadbalance or -npernode 1 rather than the -bynode flag I get an obscure error and things hang until a ctrl-c out of it.
<br>
<p>[skouson_at_cu2n29 mpi2_example]$ mpirun -hostfile hostfile -n 2 -loadbalance ./mpi2_manager
<br>
MPI Initialized=0, Finalized=0
<br>
MPI Initialized=0, Finalized=0
<br>
I'm manager 1 of 2 on cu2n30 running MPI 2.1
<br>
I'm manager 0 of 2 on cu2n29 running MPI 2.1
<br>
setting up host cu2n29 - ./mpi2_worker
<br>
setting up host cu2n30 - ./mpi2_worker
<br>
Spawning 2 worker processes running ./mpi2_worker
<br>
Sleeping for a bit...
<br>
[cu2n29:03088] [[62875,0],0] ORTE_ERROR_LOG: Not found in file base/odls_base_default_fns.c at line 906
<br>
mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate
<br>
<p>My environment has:
<br>
OMPI_MCA_btl_openib_ib_retry_count=7
<br>
OMPI_MCA_mpi_keep_peer_hostnames=1
<br>
OMPI_MCA_btl_openib_ib_timeout=31
<br>
<p>I've included the sample code, along with config.log etc.
<br>
<p>If anyone has any can point out what I'm missing to be able to run with the -loadbalance flag, I'd appreciate it.
<br>
<p>-----
<br>
Gary Skouson
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15671/mpi2_example.tar.bz2">mpi2_example.tar.bz2</a>
</ul>
<!-- attachment="mpi2_example.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="15670.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple"</a>
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

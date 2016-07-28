<?
$subject_val = "[OMPI users] running osu mpi benchmark tests on Infiniband setup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 14:48:36 2011" -->
<!-- isoreceived="20111019184836" -->
<!-- sent="Wed, 19 Oct 2011 18:48:12 +0000 (UTC)" -->
<!-- isosent="20111019184812" -->
<!-- name="ramu" -->
<!-- email="ramu.kavati_at_[hidden]" -->
<!-- subject="[OMPI users] running osu mpi benchmark tests on Infiniband setup" -->
<!-- id="loom.20111019T204543-810_at_post.gmane.org" -->
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
<strong>Subject:</strong> [OMPI users] running osu mpi benchmark tests on Infiniband setup<br>
<strong>From:</strong> ramu (<em>ramu.kavati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 14:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<li><strong>Previous message:</strong> <a href="17576.php">Reuti: "Re: [OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<li><strong>Reply:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
I am trying to run osu mpi benchmark tests on Infiniband setup (connected
<br>
back-to-back via Mellanox hw).  I am using the below command
<br>
&quot;mpirun --prefix /usr/local/ -np 2 --mca btl openib,self -H 192.168.4.91 -H
<br>
192.168.4.92 --mca orte_base_help_aggregate 0 --mca btl_openib_cpc_include oob
<br>
/root/osu_benchmarks-3.1.1/osu_latency
<br>
&quot;
<br>
But I am getting the error as
<br>
&quot;[Isengard:05030] *** An error occurred in MPI_Barrier
<br>
[Isengard:05030] *** on communicator MPI_COMM_WORLD
<br>
[Isengard:05030] *** MPI_ERR_IN_STATUS: error code in status
<br>
[Isengard:05030] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[Rohan:05010] *** An error occurred in MPI_Barrier
<br>
[Rohan:05010] *** on communicator MPI_COMM_WORLD
<br>
[Rohan:05010] *** MPI_ERR_IN_STATUS: error code in status
<br>
[Rohan:05010] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
&quot;
<br>
<p>Am I missing anything in the above command ? Please suggest me.
<br>
<p>Regards,
<br>
Ramu
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<li><strong>Previous message:</strong> <a href="17576.php">Reuti: "Re: [OMPI users] Application in a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
<li><strong>Reply:</strong> <a href="17578.php">Ralph Castain: "Re: [OMPI users] running osu mpi benchmark tests on Infiniband setup"</a>
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

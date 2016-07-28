<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 17:14:36 2007" -->
<!-- isoreceived="20070827211436" -->
<!-- sent="Mon, 27 Aug 2007 17:14:29 -0400" -->
<!-- isosent="20070827211429" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="[OMPI users] running jobs on a remote XGrid cluster via mpirun" -->
<!-- id="20070827211429.GE2785_at_avicenna.cc.columbia.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 17:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3925.php">Prasun Ratn: "[OMPI users] MPI_Type_* calls in ompi_coll_tuned_alltoall_intra_bruck"</a>
<li><strong>Previous message:</strong> <a href="3923.php">Bernd Schubert: "[OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3928.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Reply:</strong> <a href="3928.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have OpenMPI 1.2.3 installed on an XGrid cluster and a separate Mac
<br>
client that I am using to submit jobs to the head (controller) node of
<br>
the cluster. The cluster's compute nodes are all connected to the head
<br>
node via a private network and are not running any firewalls. When I
<br>
try running jobs with mpirun directly on the cluster's head node, they
<br>
execute successfully; if I attempt to submit the jobs from the client
<br>
(which can run jobs on the cluster using the xgrid command line tool)
<br>
with mpirun, however, they appear to hang indefinitely (i.e., a job ID
<br>
is created, but the mpirun itself never returns or terminates). Is it
<br>
nececessary to configure the firewall on the submission client to
<br>
grant access to the cluster head node in order to remotely submit jobs
<br>
to the cluster's head node?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L.G.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3925.php">Prasun Ratn: "[OMPI users] MPI_Type_* calls in ompi_coll_tuned_alltoall_intra_bruck"</a>
<li><strong>Previous message:</strong> <a href="3923.php">Bernd Schubert: "[OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3928.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Reply:</strong> <a href="3928.php">Brian Barrett: "Re: [OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
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

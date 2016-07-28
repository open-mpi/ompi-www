<?
$subject_val = "[OMPI users] openib MTL not working via slurm after update";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 14:13:28 2016" -->
<!-- isoreceived="20160418181328" -->
<!-- sent="Mon, 18 Apr 2016 18:13:24 +0000" -->
<!-- isosent="20160418181324" -->
<!-- name="Nathan Smith" -->
<!-- email="sminatha_at_[hidden]" -->
<!-- subject="[OMPI users] openib MTL not working via slurm after update" -->
<!-- id="571523C4.8010609_at_ohsu.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openib MTL not working via slurm after update<br>
<strong>From:</strong> Nathan Smith (<em>sminatha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-18 14:13:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28957.php">dpchoudh .: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28955.php">Farid Parpia: "[OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29175.php">Nathan Smith: "Re: [OMPI users] openib MTL not working via slurm after update"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29175.php">Nathan Smith: "Re: [OMPI users] openib MTL not working via slurm after update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We recently updated and rebooted Infiniband-attached nodes, and now when 
<br>
trying to schedule MPI jobs with slurm, we are seeing the following:
<br>

<br>
--------------------------------------------------------------------------
<br>
No OpenFabrics connection schemes reported that they were able to be
<br>
used on a specific port.  As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>

<br>
&nbsp;&nbsp;&nbsp;Local host:           node-x
<br>
&nbsp;&nbsp;&nbsp;Local device:         mlx5_0
<br>
&nbsp;&nbsp;&nbsp;Local port:           1
<br>
&nbsp;&nbsp;&nbsp;CPCs attempted:       udcm
<br>
--------------------------------------------------------------------------
<br>

<br>
This worked before reboots. The infiniband network itself is fine. 
<br>
However, if we invoke the same job directly using mpirun on the same 
<br>
nodes, we do not receive the message (meaning the openib BTL works). 
<br>
Some IB-related packages were updated (e.g. the rdma metapackage for 
<br>
Centos6.7).
<br>

<br>
What I'm hoping for is some guidance on what components are involved 
<br>
here and the possible causes of slurm not being able to use the openib 
<br>
BTL (a post to the slurm list did not get anywhere). There is very 
<br>
little documentation I could locate on what CPCs are, or what udcm is, 
<br>
and how to troubleshoot it.
<br>

<br>
Using openmpi 1.10.2 with slurm and PMI support configured in.
<br>

<br>
-- 
<br>
Nathan Smith
<br>
Research Systems Engineer
<br>
Advanced Computing Center
<br>
Oregon Health &amp; Science University<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28957.php">dpchoudh .: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28955.php">Farid Parpia: "[OMPI users] LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29175.php">Nathan Smith: "Re: [OMPI users] openib MTL not working via slurm after update"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/05/29175.php">Nathan Smith: "Re: [OMPI users] openib MTL not working via slurm after update"</a>
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

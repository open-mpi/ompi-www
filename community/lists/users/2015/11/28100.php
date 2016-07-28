<?
$subject_val = "[OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 02:05:43 2015" -->
<!-- isoreceived="20151124070543" -->
<!-- sent="Tue, 24 Nov 2015 16:05:06 +0900" -->
<!-- isosent="20151124070506" -->
<!-- name="KIM GEON HONG" -->
<!-- email="geonhong.kim_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu" -->
<!-- id="2854D2F87CDF6541B1DAB26B3E1EA12B1E953C8148_at_HHIW3MXMBXVS3.HHI.co.kr" -->
<!-- charset="ks_c_5601-1987" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu<br>
<strong>From:</strong> KIM GEON HONG (<em>geonhong.kim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-24 02:05:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28101.php">Ralph Castain: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28099.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28101.php">Ralph Castain: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28101.php">Ralph Castain: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28107.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>

<br>
I tried to run a parallel computation (OpenFOAM) using Open MPI on a HPC connected with infiniband.
<br>
When I ran a job using mpirun over a couple of nodes (20 cpus per node), the computation was not accelerated as I expected.
<br>

<br>
For example, I ran the job over 40 cpus on 2 nodes, and I checked cpu usages and processes via top command.
<br>
I expected 20 processes would be running on each node but I found that only 19 processes were running and a cpu was in idle while others were used.
<br>
Following is a capture of top result.
<br>

<br>
As you can see, Cpu1 is in idle and there are only 19 simpleFoam processes!
<br>

<br>
[cid:image002.png_at_01D126AB.FA0798C0]
<br>

<br>
I have no idea why this is happened.
<br>

<br>
Sometimes, a cpu is in idle while 20 processes are running but, in that case two processes running with 50% of cpu usage.
<br>
That is, those two different processes are assigned to the same cpu.
<br>

<br>
Please refer to the attached file for required information of the cluster and its environment.
<br>
The output of &#161;&#176;ulimit -l&#161;&#176; command on both nodes is &#161;&#176;unlimited&#161;&#177;.
<br>

<br>
Additional information for OpenFabrics-based network is as following:
<br>

<br>
1.     OpenFabrics version : MLNX_OFED_LINUX-2.4.1.0.0
<br>

<br>
2.     Linux/kernel info: RHEL6.5 2.6.32-431.el6.x86_64
<br>
- Linux distro/version : Red hat Enterprise Linux Server release 6.5 (Santiago)
<br>
- Kernel version : 2.6.32-431.el6.x86_64
<br>

<br>
3.     Subnet manager : infiniband B class
<br>

<br>
Thank you.
<br>

<br>
Best regards,
<br>
Geon-Hong Kim.
<br>

<br>
-----------------------------------
<br>
[cid:image001.png_at_01D126AA.AC080E80]
<br>
Geon-Hong Kim
<br>
Engineer, Ph.D.
<br>

<br>
Performance Evaluation Research Department
<br>
Hyundai Maritime Research Institute
<br>
Hyundai Heavy Industries Co., Ltd.
<br>

<br>
Office +82-52-203-8053
<br>
Fax +82-52-250-9675
<br>
Mobile +82-10-3084-1357
<br>
-----------------------------------
<br>

<br>
<p>
<p>

<br><p>
<p>
<br><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28100/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28100/image001.png" alt="image001.png
">
<!-- attachment="image001.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28100/image002.png" alt="image002.png
">
<!-- attachment="image002.png" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28100/system_info.tar.bz2">system_info.tar.bz2</a>
</ul>
<!-- attachment="system_info.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28101.php">Ralph Castain: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Previous message:</strong> <a href="28099.php">Ralph Castain: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28101.php">Ralph Castain: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28101.php">Ralph Castain: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
<li><strong>Reply:</strong> <a href="28107.php">Dave Love: "Re: [OMPI users] OpenMPI with infiniband, child processes of mpirun are missing or overlapped on the same cpu"</a>
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

<?
$subject_val = "[OMPI users] Open MPI error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 14:52:11 2009" -->
<!-- isoreceived="20090202195211" -->
<!-- sent="Mon, 2 Feb 2009 13:52:07 -0600" -->
<!-- isosent="20090202195207" -->
<!-- name="c.j.kao_at_[hidden]" -->
<!-- email="c.j.kao_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI error" -->
<!-- id="OF85070995.2D64E458-ON86257551.006C707F-86257551.006D2496_at_exxonmobil.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI error<br>
<strong>From:</strong> <a href="mailto:c.j.kao_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Open%20MPI%20error"><em>c.j.kao_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-02-02 14:52:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7940.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7938.php">Rolf Vandevaart: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<li><strong>Reply:</strong> <a href="7945.php">Jeff Squyres: "Re: [OMPI users] Open MPI error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using openmpi to run a job on 4 nodes, 2 processors per node. Seems
<br>
like 5 out of the 8 processors executed the app successfully and 3 of them
<br>
did not. Here is the error message I got. The last thing I did in the code
<br>
is an MPI_Barrier  call and it never returns (probably because 3 of the
<br>
processes never gets executed properly?)
<br>
<p>[0,1,7][btl_openib_component.c:1332:btl_openib_component_progress] from
<br>
hplcnla160 to: hplcnla162 error polling HP CQ with status LOCAL LENGTH
<br>
ERROR status number 1 for wr_id 6158264 opcode 0
<br>
<p>and here is the script I used:
<br>
<p>#!/bin/bash -debug
<br>
#PBS -N mytest
<br>
#PBS -l nodes=4:ppn=2,walltime=00:05:00,tpn=2
<br>
#PBS -j oe
<br>
<p>NP=$(wc -l $PBS_NODEFILE | awk '{print $1}')
<br>
/opt/openmpi-1.2.4/gnu/bin/mpirun -np $NP My_Executable
<br>
<p>Has anybody seen this kind of error before? Thanks.
<br>
<p>CJ
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7940.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7938.php">Rolf Vandevaart: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<li><strong>Reply:</strong> <a href="7945.php">Jeff Squyres: "Re: [OMPI users] Open MPI error"</a>
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

<?
$subject_val = "[OMPI users] Gamess with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 04:57:06 2009" -->
<!-- isoreceived="20090224095706" -->
<!-- sent="Tue, 24 Feb 2009 10:57:01 +0100" -->
<!-- isosent="20090224095701" -->
<!-- name="Thomas Exner" -->
<!-- email="texner_at_[hidden]" -->
<!-- subject="[OMPI users] Gamess with openmpi" -->
<!-- id="49A3C46D.7050002_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Gamess with openmpi<br>
<strong>From:</strong> Thomas Exner (<em>texner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 04:57:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8176.php">Jovana Knezevic: "[OMPI users] mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="8174.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8298.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8298.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all:
<br>
<p>Because I am new to this list, I would like to introduce myself as
<br>
Thomas Exner and please excuse silly questions, because I am only a chemist.
<br>
<p>And now my problem, with which I am fiddling around for almost a week: I
<br>
try to use gamess with openmpi on infiniband. There is a good
<br>
description on how to  compile it with mpi and it can be done, even if
<br>
it is not easy. But then on run time everything gets weird. The
<br>
specialty of gamess is that it runs twice as much mpi jobs than used for
<br>
the computation. The second half is used as data server, requiring data
<br>
but with very little cpu load. Each one of these data servers is
<br>
connected to a specific compute job. Therefore, these two corresponding
<br>
jobs have to be run on the same node. On one node everything is fine
<br>
(2x4core machines in my case), because all the jobs are guarantied to
<br>
run on this node. If I try two nodes, at the beginning also everything
<br>
is fine. 8 compute jobs and 8 data server are running on each machine.
<br>
But after a short while, the entire set of processes (16) on the first
<br>
node start to accumulate CPU time, with nothing useful happening.  The
<br>
second node's processes go entirely to sleep. Is it possible that all
<br>
the compute jobs are for some reason been transfered to the first node?
<br>
This would explain the load of 16 on the first and 0 on the second node,
<br>
because 16 compute jobs (100 % cpu load) and 16 data servers (almost 0%
<br>
load) are running, respectively. Strange thing is also that the same
<br>
version runs on gigabit and myrinet fine.
<br>
<p>It would be great if somebody could help me on that. If you need more
<br>
information, I will be happy to share them with you.
<br>
<p>Thanks very much.
<br>
Thomas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8176.php">Jovana Knezevic: "[OMPI users] mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="8174.php">Olaf Lenz: "Re: [OMPI users] OpenMPI 1.3:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8298.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8298.php">Jeff Squyres: "Re: [OMPI users] Gamess with openmpi"</a>
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

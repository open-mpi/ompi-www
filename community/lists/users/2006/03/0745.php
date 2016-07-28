<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 17:26:16 2006" -->
<!-- isoreceived="20060301222616" -->
<!-- sent="Wed, 01 Mar 2006 15:26:11 -0700" -->
<!-- isosent="20060301222611" -->
<!-- name="Xiaoning (David) Yang" -->
<!-- email="xyang_at_[hidden]" -->
<!-- subject="[OMPI users] tcsh: orted: Not Found" -->
<!-- id="C02B6D93.8E94%xyang_at_lanl.gov" -->
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
<strong>From:</strong> Xiaoning (David) Yang (<em>xyang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-01 17:26:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0746.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0744.php">Greg Lindahl: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Reply:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I installed Open MPI 1.0.1 on two Mac G5s (one with two cpus and the other
<br>
with 4 cpus.). I set up ssh on both machines according to the FAQ. My mpi
<br>
jobs work fine if I run the jobs on only one computer. But when I ran a job
<br>
across the two Macs from the first Mac mac1, I got:
<br>
<p>mac1: mpirun -np 6 --hostfiles /Users/me/my_hosts hello_world
<br>
tcsh: orted: Command not found.
<br>
[mac1:01019] ERROR: A daemon on node mac2 failed to start as expected.
<br>
[mac1:01019] ERROR: There may be more information available from
<br>
[mac1:01019] ERROR: the remote shell (see above).
<br>
[mac1:01019] ERROR: The daemon exited unexpectedly with status 1.
<br>
2 processes killed (possibly by Open MPI)
<br>
<p>File my_hosts looks like
<br>
<p>mac1 slots=2
<br>
mac2 slots=4
<br>
<p>The orted is definitely on my path on both machines. Any idea? Help is
<br>
greatly appreciated!
<br>
<p>David
<br>
<p>***** Correspondence *****
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0746.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0744.php">Greg Lindahl: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI users] tcsh: orted: Not Found"</a>
<li><strong>Reply:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI users] tcsh: orted: Not Found"</a>
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

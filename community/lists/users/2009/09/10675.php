<?
$subject_val = "[OMPI users] running open mpi on ubuntu 9.04";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 22:51:44 2009" -->
<!-- isoreceived="20090918025144" -->
<!-- sent="Thu, 17 Sep 2009 21:51:39 -0500" -->
<!-- isosent="20090918025139" -->
<!-- name="Hodgess, Erin" -->
<!-- email="HodgessE_at_[hidden]" -->
<!-- subject="[OMPI users] running open mpi on ubuntu 9.04" -->
<!-- id="70A5AC06FDB5E54482D19E1C04CDFCF307C375B6_at_BALI.uhd.campus" -->
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
<strong>Subject:</strong> [OMPI users] running open mpi on ubuntu 9.04<br>
<strong>From:</strong> Hodgess, Erin (<em>HodgessE_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 22:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10676.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10674.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10677.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Reply:</strong> <a href="10677.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI people:
<br>
<p>I'm trying to run a simple &quot;hello world&quot; program on Ubuntu 9.04
<br>
<p>It's on a dual core laptop; no other machines.
<br>
<p>Here is the output:
<br>
erin_at_erin-laptop:~$ mpirun -np 2 a.out
<br>
ssh: connect to host erin-laptop port 22: Connection refused
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 11854) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p>erin_at_erin-laptop:~$ 
<br>
<p>Any help would be much appreciated.
<br>
<p>Sincerely,
<br>
Erin
<br>
<p><p>Erin M. Hodgess, PhD
<br>
Associate Professor
<br>
Department of Computer and Mathematical Sciences
<br>
University of Houston - Downtown
<br>
mailto: hodgesse_at_[hidden]
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10675/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10676.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10674.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10677.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Reply:</strong> <a href="10677.php">Ralph Castain: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
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

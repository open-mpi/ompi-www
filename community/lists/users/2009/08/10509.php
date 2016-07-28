<?
$subject_val = "[OMPI users] OpenMPI 1.3.3 with Boost.MPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 06:31:48 2009" -->
<!-- isoreceived="20090828103148" -->
<!-- sent="Fri, 28 Aug 2009 19:31:38 +0900" -->
<!-- isosent="20090828103138" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.3.3 with Boost.MPI ?" -->
<!-- id="4A97B20A.1030501_at_biggjapan.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-28 06:31:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10510.php">Federico Golfrè Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Previous message:</strong> <a href="10508.php">Jean Potsam: "[OMPI users] checkpointing 2 or more processes running in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10510.php">Federico Golfrè Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Reply:</strong> <a href="10510.php">Federico Golfrè Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Reply:</strong> <a href="10522.php">Federico Golfrè Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings all,
<br>
<p>I wanted to send come complex user defined types between MPI processes 
<br>
and found out that Boost.MPI is  quite easy to use for my requirement.So 
<br>
far it worked well and I received my object model in every process 
<br>
without problems.
<br>
Now I am going to spawn processes (using MPI_Comm_spawn, because 
<br>
Boot.MPI doesn't have such a function) and then use Boost.MPI to send 
<br>
the objects across newly created child processes.
<br>
Is there any issues with this procedure?
<br>
And Boost.MPI says it only support OpenMPI 1.0.x 
<br>
(<a href="http://www.boost.org/doc/libs/1_40_0/doc/html/mpi/getting_started.html#mpi.mpi_impl">http://www.boost.org/doc/libs/1_40_0/doc/html/mpi/getting_started.html#mpi.mpi_impl</a>)
<br>
Will there be any version incompatibilities ?
<br>
<p>thanks in advance,
<br>
umanga
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10510.php">Federico Golfrè Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Previous message:</strong> <a href="10508.php">Jean Potsam: "[OMPI users] checkpointing 2 or more processes running in parallel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10510.php">Federico Golfrè Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Reply:</strong> <a href="10510.php">Federico Golfrè Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>Reply:</strong> <a href="10522.php">Federico Golfrè Andreasi: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
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

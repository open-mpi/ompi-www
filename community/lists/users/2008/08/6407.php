<?
$subject_val = "[OMPI users] problem when mpi_paffinity_alone is set to 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 07:27:34 2008" -->
<!-- isoreceived="20080822112734" -->
<!-- sent="Fri, 22 Aug 2008 13:23:52 +0200" -->
<!-- isosent="20080822112352" -->
<!-- name="Camille Coti" -->
<!-- email="coti_at_[hidden]" -->
<!-- subject="[OMPI users] problem when mpi_paffinity_alone is set to 1" -->
<!-- id="48AEA1C8.7040908_at_lri.fr" -->
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
<strong>Subject:</strong> [OMPI users] problem when mpi_paffinity_alone is set to 1<br>
<strong>From:</strong> Camille Coti (<em>coti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-22 07:23:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6408.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6406.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6408.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6408.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Maybe reply:</strong> <a href="6413.php">STUART PURVES: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to run applications on a shared-memory machine. For the 
<br>
moment I am just trying to run tests on point-to-point communications (a 
<br>
&nbsp;&nbsp;trivial token ring) and collective operations (from the SkaMPI tests 
<br>
suite).
<br>
<p>It runs smoothly if mpi_paffinity_alone is set to 0. For a number of 
<br>
processes which is larger than about 10, global communications just 
<br>
don't seem possible. Point-to-point communications seem to be OK.
<br>
<p>But when I specify  --mca mpi_paffinity_alone 1 in my command line, I 
<br>
get the following error:
<br>
<p>mbind: Invalid argument
<br>
<p>I looked into the code of maffinity/libnuma, and found out the error 
<br>
comes from
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numa_setlocal_memory(segments[i].mbs_start_addr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;segments[i].mbs_len);
<br>
<p>in maffinity_libnuma_module.c.
<br>
<p>The machine I am using is a Linux box running a 2.6.5-7 kernel.
<br>
<p>Has anyone experienced a similar problem?
<br>
<p>Camille
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6408.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6406.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6408.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Reply:</strong> <a href="6408.php">Ralph Castain: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Maybe reply:</strong> <a href="6413.php">STUART PURVES: "Re: [OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
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

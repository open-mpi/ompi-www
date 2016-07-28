<?
$subject_val = "[OMPI users] Performance slowdown for large cases";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  7 12:00:42 2011" -->
<!-- isoreceived="20111007160042" -->
<!-- sent="Fri, 07 Oct 2011 10:00:22 -0600" -->
<!-- isosent="20111007160022" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Performance slowdown for large cases" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB276186A826_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Performance slowdown for large cases<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-07 12:00:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17523.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17521.php">Thatyene Louise Alves de Souza Ramos: "[OMPI users] MPI_Comm_accept - Busy wait"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I'm using OpenMPI 1.4.3 and have been running a particular case on 120, 240, 480 and 960 processes.  My time-per-work metric reports 60, 30, 15, 15.  If I do the same run with MVAPICH 1.2, I get 60, 30, 15, 8. There is something running very slowly with OpenMPI 1.4.3 as the process count goes from 480 up to 960.
<br>
<p>Also this case has been really troublesome at 960, reliability-wise. Initially, the OpenMPI cases would reach a certain point in the application with some weird communication patterns, and they would die with the following messages:
<br>
c4n01][[14679,1],5][connect/btl_openib_connect_oob.c:464:qp_create_one] error creating qp errno says Cannot allocate memory
<br>
<p>I then added this parameter:
<br>
'--mca btl_openib_receive_queues X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32'
<br>
<p>and it runs...  but as I said above, it runs 2x slower than MVAPICH.  All of it is very repeatable.
<br>
<p>How can I determine the source of the problem here?
<br>
<p>Thanks for any advice,
<br>
<p>Ed
<br>
<p>&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17523.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17521.php">Thatyene Louise Alves de Souza Ramos: "[OMPI users] MPI_Comm_accept - Busy wait"</a>
<!-- nextthread="start" -->
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

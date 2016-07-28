<?
$subject_val = "[OMPI devel] mpi_comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  3 06:30:20 2010" -->
<!-- isoreceived="20100603103020" -->
<!-- sent="Thu, 03 Jun 2010 12:18:35 +0200" -->
<!-- isosent="20100603101835" -->
<!-- name="KHALDI Dounia" -->
<!-- email="dounia.kh_at_[hidden]" -->
<!-- subject="[OMPI devel] mpi_comm_spawn" -->
<!-- id="4C07817B.1050409_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] mpi_comm_spawn<br>
<strong>From:</strong> KHALDI Dounia (<em>dounia.kh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-03 06:18:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8045.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8043.php">Rolf vandeVaart: "[OMPI devel] RFC: openib BTL failover"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I want to create a process y from a process x( the master for example). 
<br>
then, i want to communicate between y and another processes in the group 
<br>
of x (between child and his uncles :) )
<br>
i have tried to use mpi_comm_connect and mpi_connect_accept, but that 
<br>
concemt requiere taht there is no relationship child/parent
<br>
<p>The problem is others processes don t know the inter communicator (out 
<br>
of mpi_comm_spawn)
<br>
<p>I want to communicate child process and all other processes , not only 
<br>
its parent :)
<br>
<p>thanks in advance
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8045.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8043.php">Rolf vandeVaart: "[OMPI devel] RFC: openib BTL failover"</a>
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

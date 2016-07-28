<?
$subject_val = "[OMPI users] Problem with MPI_Barrier (Inter-communicator)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 19 21:12:05 2012" -->
<!-- isoreceived="20120320011205" -->
<!-- sent="Mon, 19 Mar 2012 22:12:00 -0300" -->
<!-- isosent="20120320011200" -->
<!-- name="Rodrigo Oliveira" -->
<!-- email="rsilva.oliveira_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_Barrier (Inter-communicator)" -->
<!-- id="CABm3_qqR1XyEa0CbHDiYWjqKNU6V5MLwNY3FOkmufT4eVq4YJQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_Barrier (Inter-communicator)<br>
<strong>From:</strong> Rodrigo Oliveira (<em>rsilva.oliveira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-19 21:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18804.php">Barnet Wagman: "[OMPI users] ppe-ompi 1.1 (OMPI on EC2)"</a>
<li><strong>Previous message:</strong> <a href="18802.php">Jeffrey Squyres: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18809.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18809.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there.
<br>
<p>I am facing a very strange problem when using MPI_Barrier over an
<br>
inter-communicator after some operations I describe bellow:
<br>
<p>1) I start a server calling mpirun.
<br>
2) The server spawns 2 copies of a client using MPI_Comm_spawn, creating an
<br>
inter-communicator between the two groups. The server group with 1 process
<br>
(lets name it as A) and the client group with 2 processes (group B).
<br>
3) After that, I need to detach one of the processes (rank 0) in group B
<br>
from the inter-communicator AB. To do that I do the following steps:
<br>
<p>Server side:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp_inter_comm = client_comm.Create ( client_comm.Get_group ( ) );
<br>
client_comm.Free ( );
<br>
client_comm = tmp_inter_comm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;client_comm.Barrier();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.....
<br>
<p>Client side:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp_inter_comm = server_comm.Create ( server_comm.Get_group (
<br>
).Excl ( 1, &amp;rank ) );
<br>
server_comm.Free ( );
<br>
server_comm = tmp_inter_comm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (server_comm != MPI::COMM_NULL)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;server_comm.Barrier();
<br>
<p><p>The problem: everything works fine until the call to Barrier. In that
<br>
point, the server exits the barrier, but the client at the group B does
<br>
not. Observe that we have only one process inside B, because I used Excl to
<br>
remove one process from the original group.
<br>
<p>p.s.: This occurs in the version 1.5.4 and the C++ API.
<br>
<p>I am very concerned about this problem because this solution plays a very
<br>
important role in my master thesis.
<br>
<p>Is this an ompi problem or am I doing something wrong?
<br>
<p>Thanks in advance
<br>
<p>Rodrigo Oliveira
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18804.php">Barnet Wagman: "[OMPI users] ppe-ompi 1.1 (OMPI on EC2)"</a>
<li><strong>Previous message:</strong> <a href="18802.php">Jeffrey Squyres: "Re: [OMPI users] CUDA RDMA not selected by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18809.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Reply:</strong> <a href="18809.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
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

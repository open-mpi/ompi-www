<?
$subject_val = "[OMPI users] bug in MPI_Comm_accept?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 10:06:42 2015" -->
<!-- isoreceived="20150916140642" -->
<!-- sent="Wed, 16 Sep 2015 16:06:39 +0200" -->
<!-- isosent="20150916140639" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="[OMPI users] bug in MPI_Comm_accept?" -->
<!-- id="55F9776F.9050606_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] bug in MPI_Comm_accept?<br>
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 10:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27586.php">Jalel Chergui: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Previous message:</strong> <a href="27584.php">marcin.krotkiewski: "Re: [OMPI users] runtime MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27586.php">Jalel Chergui: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Reply:</strong> <a href="27586.php">Jalel Chergui: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have run into a freeze / potential bug when using MPI_Comm_accept in a 
<br>
simple client / server implementation. I have attached two simplest 
<br>
programs I could produce:
<br>
<p>&nbsp;&nbsp;1. mpi-receiver.c opens a port using MPI_Open_port, saves the port 
<br>
name to a file
<br>
<p>&nbsp;&nbsp;2. mpi-receiver enters infinite loop and waits for connections using 
<br>
MPI_Comm_accept
<br>
<p>&nbsp;&nbsp;3. mpi-sender.c connects to that port using MPI_Comm_connect, sends 
<br>
one MPI_UNSIGNED_LONG, calls barrier and disconnects using 
<br>
MPI_Comm_disconnect
<br>
<p>&nbsp;&nbsp;4. mpi-receiver reads the MPI_UNSIGNED_LONG, prints it, calls barrier 
<br>
and disconnects using MPI_Comm_disconnect and goes to point 2 - infinite 
<br>
loop
<br>
<p>All works fine, but only exactly 5 times. After that the receiver hangs 
<br>
in MPI_Recv, after exit from MPI_Comm_accept. That is 100% repeatable. I 
<br>
have tried with Intel MPI - no such problem.
<br>
<p>I execute the programs using OpenMPI 1.10 as follows
<br>
<p>mpirun -np 1 --mca mpi_leave_pinned 0 ./mpi-receiver
<br>
<p><p>Do you have any clues what could be the reason? Am I doing sth wrong, or 
<br>
is it some problem with internal state of OpenMPI?
<br>
<p>Thanks a lot!
<br>
<p>Marcin
<br>
<p><p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27585/mpi-receiver.c">mpi-receiver.c</a>
</ul>
<!-- attachment="mpi-receiver.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27585/mpi-sender.c">mpi-sender.c</a>
</ul>
<!-- attachment="mpi-sender.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27586.php">Jalel Chergui: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Previous message:</strong> <a href="27584.php">marcin.krotkiewski: "Re: [OMPI users] runtime MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27586.php">Jalel Chergui: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Reply:</strong> <a href="27586.php">Jalel Chergui: "Re: [OMPI users] bug in MPI_Comm_accept?"</a>
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

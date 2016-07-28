<?
$subject_val = "[OMPI users] MPI send recv confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 11:07:14 2013" -->
<!-- isoreceived="20130218160714" -->
<!-- sent="Tue, 19 Feb 2013 01:06:40 +0900" -->
<!-- isosent="20130218160640" -->
<!-- name="Pradeep Jha" -->
<!-- email="pradeep_at_[hidden]" -->
<!-- subject="[OMPI users] MPI send recv confusion" -->
<!-- id="CAL_eiiSU0imCLrimtwwUoLk4YXj2zFy9_rAbtAaJHgY420bdnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI send recv confusion<br>
<strong>From:</strong> Pradeep Jha (<em>pradeep_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-18 11:06:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21422.php">jody: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21420.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler	10.1	error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21422.php">jody: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Reply:</strong> <a href="21422.php">jody: "Re: [OMPI users] MPI send recv confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have attached a sample of the MPI program I am trying to write. When I
<br>
run this program using &quot;mpirun -np 4 a.out&quot;, my output is:
<br>
<p>&nbsp;Sender:            1
<br>
&nbsp;Data received from            1
<br>
&nbsp;Sender:            2
<br>
&nbsp;Data received from            1
<br>
&nbsp;Sender:            2
<br>
<p>And the run hangs there. I dont understand why does the &quot;sender&quot; variable
<br>
change its value after MPI_recv? Any ideas?
<br>
<p>Thank you,
<br>
<p>Pradeep
<br>
<p><p>&nbsp;program mpi_test
<br>
<p>&nbsp;&nbsp;include  'mpif.h'
<br>
<p>!----------------( Initialize variables )--------------------
<br>
&nbsp;&nbsp;integer, dimension(3) :: recv, send
<br>
<p>&nbsp;&nbsp;integer :: sender, np, rank, ierror
<br>
<p>&nbsp;&nbsp;call  mpi_init( ierror )
<br>
&nbsp;&nbsp;call  mpi_comm_rank( mpi_comm_world, rank, ierror )
<br>
&nbsp;&nbsp;call  mpi_comm_size( mpi_comm_world, np, ierror )
<br>
<p>!----------------( Main program )--------------------
<br>
<p>!     receive the data from the other processors
<br>
&nbsp;&nbsp;if (rank.eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do sender = 1, np-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, &quot;Sender: &quot;, sender
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_recv(recv, 3, mpi_int, sender, 1,
<br>
&nbsp;&amp;       mpi_comm_world, status, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, &quot;Data received from &quot;,sender
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;end if
<br>
<p>!   send the data to the main processor
<br>
&nbsp;&nbsp;if (rank.ne.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send(1) = 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send(2) = 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send(3) = 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_send(send, 3, mpi_int, 0, 1, mpi_comm_world, ierr)
<br>
&nbsp;&nbsp;end if
<br>
<p><p>!----------------( clean up )--------------------
<br>
&nbsp;&nbsp;call mpi_finalize(ierror)
<br>
<p>&nbsp;&nbsp;return
<br>
&nbsp;&nbsp;end program mpi_test`
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21421/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21422.php">jody: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21420.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler	10.1	error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21422.php">jody: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Reply:</strong> <a href="21422.php">jody: "Re: [OMPI users] MPI send recv confusion"</a>
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

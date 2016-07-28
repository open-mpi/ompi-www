<?
$subject_val = "[OMPI users] Calling MPI_send MPI_recv from a fortran subroutine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 09:59:27 2013" -->
<!-- isoreceived="20130228145927" -->
<!-- sent="Thu, 28 Feb 2013 23:59:02 +0900" -->
<!-- isosent="20130228145902" -->
<!-- name="Pradeep Jha" -->
<!-- email="pradeep_at_[hidden]" -->
<!-- subject="[OMPI users] Calling MPI_send MPI_recv from a fortran subroutine" -->
<!-- id="CAL_eiiR8L6cf3cNqfq11HvY=RY1oYCPSPqRRJHmkcAO5LOw9ig_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine<br>
<strong>From:</strong> Pradeep Jha (<em>pradeep_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 09:59:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21478.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Previous message:</strong> <a href="21476.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21480.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Reply:</strong> <a href="21480.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21493.php">Stefan Mauerberger: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it possible to call the MPI_send and MPI_recv commands inside a
<br>
subroutine and not the main program? I have written a minimal program for
<br>
what I am trying to do. It is compiling fine but it is not working. The
<br>
program just hangs in the &quot;sendrecv&quot; subroutine. Any ideas how can I do it?
<br>
<p>main.f
<br>
<p>&nbsp;&nbsp;program   main
<br>
<p>&nbsp;&nbsp;include  'mpif.h'
<br>
<p>&nbsp;&nbsp;integer me, np, ierror
<br>
<p>&nbsp;&nbsp;call  MPI_init( ierror )
<br>
&nbsp;&nbsp;call  MPI_comm_rank( mpi_comm_world, me, ierror )
<br>
&nbsp;&nbsp;call  MPI_comm_size( mpi_comm_world, np, ierror )
<br>
<p>&nbsp;&nbsp;call sendrecv(me, np)
<br>
<p>&nbsp;&nbsp;call mpi_finalize( ierror )
<br>
<p>&nbsp;&nbsp;stop
<br>
&nbsp;&nbsp;end
<br>
<p>sendrecv.f
<br>
<p>&nbsp;&nbsp;subroutine sendrecv(me, np)
<br>
<p>&nbsp;&nbsp;include 'mpif.h'
<br>
<p>&nbsp;&nbsp;integer np, me, sender
<br>
&nbsp;&nbsp;integer, dimension(mpi_status_size) :: status
<br>
<p>&nbsp;&nbsp;integer, dimension(1) :: recv, send
<br>
<p>&nbsp;&nbsp;if (me.eq.0) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do sender = 1, np-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_recv(recv, 1, mpi_int, sender, tag,
<br>
&nbsp;&amp;           mpi_comm_world, status, ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;if ((me.ge.1).and.(me.lt.np)) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_length(1) = me*12
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_send(send, 1, mpi_int, 0, tag,
<br>
&nbsp;&amp;        mpi_comm_world, ierror)
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;return
<br>
&nbsp;&nbsp;end
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21477/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21478.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Previous message:</strong> <a href="21476.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21480.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Reply:</strong> <a href="21480.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/03/21493.php">Stefan Mauerberger: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
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

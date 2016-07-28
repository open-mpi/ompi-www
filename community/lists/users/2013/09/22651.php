<?
$subject_val = "[OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 18:26:28 2013" -->
<!-- isoreceived="20130913222628" -->
<!-- sent="Fri, 13 Sep 2013 23:25:46 +0100" -->
<!-- isosent="20130913222546" -->
<!-- name="Huangwei" -->
<!-- email="hz283_at_[hidden]" -->
<!-- subject="[OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?" -->
<!-- id="CAOQ90zFZD3poriJ3mdt6cz5_CZEy2N_L1N=qHU+VUpnx5L8L+g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?<br>
<strong>From:</strong> Huangwei (<em>hz283_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-13 18:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22652.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Previous message:</strong> <a href="22650.php">amirreza Hashemi: "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22652.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Reply:</strong> <a href="22652.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I have a question about using MPI_send and MPI_recv.
<br>
<p>*The object  is as follows:*
<br>
I would like to send an array Q from rank=1, N-1 to rank=0, and then rank 0
<br>
receives the Q from all other processors. Q will be put into a new array Y
<br>
in rank 0. (of couse this is not realized by MPI). and then MPI_bcast is
<br>
used (from rank 0) to broadcast the Y to all the processors.
<br>
<p>*Fortran Code is like:*
<br>
if(myrank .eq. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;itag = myrank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_send(Q.............., 0, itag, .................)
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i=1, N-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;itag = i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_recv(QRECS......., i, itag, .................)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>endif
<br>
<p>call mpi_bcast(YVAR............., 0, ..............)
<br>
<p>*Problem I met is:*
<br>
In my simulation, time marching is performed, These mpi_send and recv are
<br>
fine for the first three time steps. However, for the fourth time step, the
<br>
looping is only finished from i=1 to i=13, (totally 48 processors). That
<br>
mean after 14th processors, the mpi_recv did not receive the date from
<br>
them. Thus the code hangs there forever. Does deadlock occur for this
<br>
situation? How can I figure out this problem?
<br>
<p>Thank you so much if anyone can give me some suggestions.
<br>
<p>best regards,
<br>
Huangwei
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22651/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22652.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Previous message:</strong> <a href="22650.php">amirreza Hashemi: "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22652.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Reply:</strong> <a href="22652.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
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

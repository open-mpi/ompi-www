<?
$subject_val = "[OMPI users] MPI_AllReduce vs MPI_IAllReduce";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 27 11:57:48 2015" -->
<!-- isoreceived="20151127165748" -->
<!-- sent="Fri, 27 Nov 2015 14:57:45 -0200" -->
<!-- isosent="20151127165745" -->
<!-- name="Felipe ." -->
<!-- email="philip.fm_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_AllReduce vs MPI_IAllReduce" -->
<!-- id="CACvpwa-Nq9ZExJD3A8+ZD4K3FRZaga4VrTHcETMXk2AFWYcO2A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_AllReduce vs MPI_IAllReduce<br>
<strong>From:</strong> Felipe . (<em>philip.fm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-27 11:57:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28118.php">Nick Papior: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Previous message:</strong> <a href="28116.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28118.php">Nick Papior: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Reply:</strong> <a href="28118.php">Nick Papior: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Reply:</strong> <a href="28119.php">Felipe .: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I have a program that basically is (first implementation):
<br>
for i in N:
<br>
&nbsp;&nbsp;local_computation(i)
<br>
&nbsp;&nbsp;mpi_allreduce(in_place, i)
<br>
<p>In order to try to mitigate the implicit barrier of the mpi_allreduce, I
<br>
tried to start an mpi_Iallreduce. Like this(second implementation):
<br>
for i in N:
<br>
&nbsp;&nbsp;local_computation(i)
<br>
&nbsp;&nbsp;j = i
<br>
&nbsp;&nbsp;if i is not first:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_wait(request)
<br>
&nbsp;&nbsp;mpi_Iallreduce(in_place, j, request)
<br>
<p>The result was that the second was a lot worse. The processes spent 3 times
<br>
more time on the mpi_wait than on the mpi_allreduce from the first
<br>
implementation. I know it could be worst, but not that much.
<br>
<p>So, I made a microbenchmark to stress this, in Fortran. Here is the
<br>
implementation:
<br>
Blocking:
<br>
do i = 1, total_iter ! [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t_0 = mpi_wtime()
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call mpi_allreduce(MPI_IN_PLACE, val, nx*ny*nz, MPI_REAL, MPI_SUM,
<br>
MPI_COMM_WORLD, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (ierror .ne. 0) then ! [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;Error in line &quot;, __LINE__, &quot; rank = &quot;, rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end if ! ]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t_reduce = t_reduce + (mpi_wtime() - t_0)
<br>
end do ! ]
<br>
<p>Non-Blocking:
<br>
do i = 1, total_iter ! [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t_0 = mpi_wtime()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_iallreduce(MPI_IN_PLACE, val, nx*ny*nz, MPI_REAL, MPI_SUM,
<br>
MPI_COMM_WORLD, request, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (ierror .ne. 0) then ! [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;Error in line &quot;, __LINE__, &quot; rank = &quot;, rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end if ! ]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t_reduce = t_reduce + (mpi_wtime() - t_0)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;t_0 = mpi_wtime()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_wait(request, status, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (ierror .ne. 0) then ! [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;Error in line &quot;, __LINE__, &quot; rank = &quot;, rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_abort(MPI_COMM_WORLD, ierror, ierror2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end if ! ]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t_reduce = t_reduce + (mpi_wtime() - t_0)
<br>
<p>end do ! ]
<br>
<p>The non-blocking was about five times slower. I tried Intel's MPI and it
<br>
was of 3 times, instead of 5.
<br>
<p>Question 1: Do you think that all this overhead makes sense?
<br>
<p>Question 2: Why is there so much overhead for non-blocking collective calls?
<br>
<p>Question 3: Can I change the algorithm for the non-blocking allReduce to
<br>
improve this?
<br>
<p><p>Best regards,
<br>
<pre>
--
Felipe
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28118.php">Nick Papior: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Previous message:</strong> <a href="28116.php">Ralph Castain: "Re: [OMPI users] oob-tcp error (warning?) message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28118.php">Nick Papior: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Reply:</strong> <a href="28118.php">Nick Papior: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
<li><strong>Reply:</strong> <a href="28119.php">Felipe .: "Re: [OMPI users] MPI_AllReduce vs MPI_IAllReduce"</a>
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

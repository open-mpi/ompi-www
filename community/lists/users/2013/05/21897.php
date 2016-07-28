<?
$subject_val = "[OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 14 11:39:12 2013" -->
<!-- isoreceived="20130514153912" -->
<!-- sent="Wed, 15 May 2013 00:39:06 +0900" -->
<!-- isosent="20130514153906" -->
<!-- name="Hayato KUNIIE" -->
<!-- email="kuni255_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype" -->
<!-- id="51925A9A.50401_at_oita.email.ne.jp" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype<br>
<strong>From:</strong> Hayato KUNIIE (<em>kuni255_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-14 11:39:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21898.php">Andrea Negri: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="21896.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Reply:</strong> <a href="21905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello I'm kuni255
<br>
<p>I build bewulf type PC Cluster (Cent OS release 6.4). And I studing
<br>
about MPI.(Open MPI Ver.1.6.4) I tried following sample which using
<br>
MPI_REDUCE.
<br>
<p>Then, Error occured.
<br>
<p>This cluster system consist of one head node and 2 slave nodes.
<br>
And sharing home directory in head node by NFS. so Open MPI is installed
<br>
each nodes.
<br>
<p>When I test this program on only head node, program is run correctly.
<br>
and output result.
<br>
But When I test this program on only slave node, same error occured.
<br>
<p>Please tell me, good idea : )
<br>
<p>Error message
<br>
[bwslv01:30793] *** An error occurred in MPI_Reduce: the reduction
<br>
operation MPI_SUM is not defined on the MPI_INTEGER datatype
<br>
[bwslv01:30793] *** on communicator MPI_COMM_WORLD
<br>
[bwslv01:30793] *** MPI_ERR_OP: invalid reduce operation
<br>
[bwslv01:30793] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 30793 on
<br>
node bwslv01 exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[bwhead.clnet:02147] 1 more process has sent help message
<br>
help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[bwhead.clnet:02147] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
<br>
to see all help / error messages
<br>
<p><p><p><p>Fortran90 source code
<br>
include 'mpif.h'
<br>
parameter(nmax=12)
<br>
integer n(nmax)
<br>
<p>call mpi_init(ierr)
<br>
call mpi_comm_size(MPI_COMM_WORLD, isize, ierr)
<br>
call mpi_comm_rank(MPI_COMM_WORLD, irank, ierr)
<br>
ista=irank*(nmax/isize) + 1
<br>
iend=ista+(nmax/isize-1)
<br>
isum=0
<br>
do i=1,nmax
<br>
n(i) = i
<br>
isum = isum + n(i)
<br>
end do
<br>
call mpi_reduce(isum, itmp, 1, MPI_INTEGER, MPI_SUM,
<br>
&amp; 0, MPI_COMM_WORLD, ierr)
<br>
<p>if (irank == 0) then
<br>
isum=itmp
<br>
WRITE(*,*) isum
<br>
endif
<br>
call mpi_finalize(ierr)
<br>
end
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21898.php">Andrea Negri: "Re: [OMPI users] users Digest, Vol 2574, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="21896.php">Ralph Castain: "Re: [OMPI users] How to Read the Rank from the MPI_TASK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Reply:</strong> <a href="21905.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
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

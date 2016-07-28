<?
$subject_val = "[OMPI users] freezing in mpi_allreduce operation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 16:17:58 2011" -->
<!-- isoreceived="20110908201758" -->
<!-- sent="Thu, 8 Sep 2011 16:17:53 -0400" -->
<!-- isosent="20110908201753" -->
<!-- name="Greg Fischer" -->
<!-- email="greg.a.fischer_at_[hidden]" -->
<!-- subject="[OMPI users] freezing in mpi_allreduce operation" -->
<!-- id="CAMb6nm1bReY8nMy3=e62GPwH1QvjXQRv+taacgF9ed+T4Vc=Pw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] freezing in mpi_allreduce operation<br>
<strong>From:</strong> Greg Fischer (<em>greg.a.fischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 16:17:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17206.php">Greg Fischer: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>Previous message:</strong> <a href="17204.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17206.php">Greg Fischer: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>Reply:</strong> <a href="17206.php">Greg Fischer: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing mpi_allreduce operations freeze execution of my code on some
<br>
moderately-sized problems.  The freeze does not manifest itself in every
<br>
problem.  In addition, it is in a portion of the code that is repeated many
<br>
times.  In the problem discussed below, the problem appears in the 60th
<br>
iteration.
<br>
<p>The current test case that I'm looking at is a 64-processor job.  This
<br>
particular mpi_allreduce call applies to all 64 processors, with each
<br>
communicator in the call containing a total of 4 processors.  When I add
<br>
print statements before and after the offending line, I see that all 64
<br>
processors successfully make it to the mpi_allreduce call, but only 32
<br>
successfully exit.  Stack traces on the other 32 yield something along the
<br>
lines of the trace listed at the bottom of this message.  The call, itself,
<br>
looks like:
<br>
<p>&nbsp;call mpi_allreduce(MPI_IN_PLACE,
<br>
phim(0:(phim_size-1),1:im,1:jm,1:kmloc(coords(2)+1),grp), &amp;
<br>
<p>phim_size*im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,ang_com,ierr)
<br>
<p>These messages are sized to remain under the 32-bit integer size limitation
<br>
for the &quot;count&quot; parameter.  The intent is to perform the allreduce operation
<br>
on a contiguous block of the array.  Previously, I had been passing an
<br>
assumed-shape array (i.e. phim(:,:,:,:,grp), but found some documentation
<br>
indicating that was potentially dangerous.  Making the change from assumed-
<br>
to explicit-shaped arrays doesn't solve the problem.   However, if I declare
<br>
an additional array and use separate send and receive buffers:
<br>
<p>&nbsp;call
<br>
mpi_allreduce(phim_local,phim_global,phim_size*im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,ang_com,ierr)
<br>
&nbsp;phim(:,:,:,:,grp) = phim_global
<br>
<p>Then the problem goes away, and every thing works normally.  Does anyone
<br>
have any insight as to what may be happening here?  I'm using &quot;include
<br>
'mpif.h'&quot; rather than the f90 module, does that potentially explain this?
<br>
<p>Thanks,
<br>
Greg
<br>
<p>Stack trace(s) for thread: 1
<br>
-----------------
<br>
[0] (1 processes)
<br>
-----------------
<br>
main() at ?:?
<br>
&nbsp;&nbsp;solver() at solver.f90:31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;solver_q_down() at solver_q_down.f90:52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iter() at iter.f90:56
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mcalc() at mcalc.f90:38
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pmpi_allreduce__() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMPI_Allreduce() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allreduce_intra_dec_fixed() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_allreduce_intra_ring_segmented() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_sendrecv_actual() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_default_wait_all() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress() at ?:?
<br>
Stack trace(s) for thread: 2
<br>
-----------------
<br>
[0] (1 processes)
<br>
-----------------
<br>
start_thread() at ?:?
<br>
&nbsp;&nbsp;btl_openib_async_thread() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;poll() at ?:?
<br>
Stack trace(s) for thread: 3
<br>
-----------------
<br>
[0] (1 processes)
<br>
-----------------
<br>
start_thread() at ?:?
<br>
&nbsp;&nbsp;service_thread_start() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;select() at ?:?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17205/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17206.php">Greg Fischer: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>Previous message:</strong> <a href="17204.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17206.php">Greg Fischer: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>Reply:</strong> <a href="17206.php">Greg Fischer: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
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

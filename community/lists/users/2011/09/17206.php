<?
$subject_val = "Re: [OMPI users] freezing in mpi_allreduce operation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 18:00:01 2011" -->
<!-- isoreceived="20110908220001" -->
<!-- sent="Thu, 8 Sep 2011 17:59:56 -0400" -->
<!-- isosent="20110908215956" -->
<!-- name="Greg Fischer" -->
<!-- email="greg.a.fischer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] freezing in mpi_allreduce operation" -->
<!-- id="CAMb6nm1886CQhLAw+0LqAFkx5zUmjdVxFMW8OmJkrYeiFcyNNg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMb6nm1bReY8nMy3=e62GPwH1QvjXQRv+taacgF9ed+T4Vc=Pw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] freezing in mpi_allreduce operation<br>
<strong>From:</strong> Greg Fischer (<em>greg.a.fischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 17:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17207.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17205.php">Greg Fischer: "[OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>In reply to:</strong> <a href="17205.php">Greg Fischer: "[OMPI users] freezing in mpi_allreduce operation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17432.php">Jeff Squyres: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>Reply:</strong> <a href="17432.php">Jeff Squyres: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note also that coding the mpi_allreduce as:
<br>
<p>&nbsp;&nbsp;&nbsp;call
<br>
mpi_allreduce(MPI_IN_PLACE,phim(0,1,1,1,grp),phim_size*im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,ang_com,ierr)
<br>
<p>results in the same freezing behavior in the 60th iteration.  (I don't
<br>
recall why the arrays were being passed, possibly just a mistake.)
<br>
<p><p>On Thu, Sep 8, 2011 at 4:17 PM, Greg Fischer &lt;greg.a.fischer_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I am seeing mpi_allreduce operations freeze execution of my code on some
</span><br>
<span class="quotelev1">&gt; moderately-sized problems.  The freeze does not manifest itself in every
</span><br>
<span class="quotelev1">&gt; problem.  In addition, it is in a portion of the code that is repeated many
</span><br>
<span class="quotelev1">&gt; times.  In the problem discussed below, the problem appears in the 60th
</span><br>
<span class="quotelev1">&gt; iteration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current test case that I'm looking at is a 64-processor job.  This
</span><br>
<span class="quotelev1">&gt; particular mpi_allreduce call applies to all 64 processors, with each
</span><br>
<span class="quotelev1">&gt; communicator in the call containing a total of 4 processors.  When I add
</span><br>
<span class="quotelev1">&gt; print statements before and after the offending line, I see that all 64
</span><br>
<span class="quotelev1">&gt; processors successfully make it to the mpi_allreduce call, but only 32
</span><br>
<span class="quotelev1">&gt; successfully exit.  Stack traces on the other 32 yield something along the
</span><br>
<span class="quotelev1">&gt; lines of the trace listed at the bottom of this message.  The call, itself,
</span><br>
<span class="quotelev1">&gt; looks like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  call mpi_allreduce(MPI_IN_PLACE,
</span><br>
<span class="quotelev1">&gt; phim(0:(phim_size-1),1:im,1:jm,1:kmloc(coords(2)+1),grp), &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; phim_size*im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,ang_com,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These messages are sized to remain under the 32-bit integer size limitation
</span><br>
<span class="quotelev1">&gt; for the &quot;count&quot; parameter.  The intent is to perform the allreduce operation
</span><br>
<span class="quotelev1">&gt; on a contiguous block of the array.  Previously, I had been passing an
</span><br>
<span class="quotelev1">&gt; assumed-shape array (i.e. phim(:,:,:,:,grp), but found some documentation
</span><br>
<span class="quotelev1">&gt; indicating that was potentially dangerous.  Making the change from assumed-
</span><br>
<span class="quotelev1">&gt; to explicit-shaped arrays doesn't solve the problem.   However, if I declare
</span><br>
<span class="quotelev1">&gt; an additional array and use separate send and receive buffers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  call
</span><br>
<span class="quotelev1">&gt; mpi_allreduce(phim_local,phim_global,phim_size*im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,ang_com,ierr)
</span><br>
<span class="quotelev1">&gt;  phim(:,:,:,:,grp) = phim_global
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then the problem goes away, and every thing works normally.  Does anyone
</span><br>
<span class="quotelev1">&gt; have any insight as to what may be happening here?  I'm using &quot;include
</span><br>
<span class="quotelev1">&gt; 'mpif.h'&quot; rather than the f90 module, does that potentially explain this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stack trace(s) for thread: 1
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; [0] (1 processes)
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; main() at ?:?
</span><br>
<span class="quotelev1">&gt;   solver() at solver.f90:31
</span><br>
<span class="quotelev1">&gt;     solver_q_down() at solver_q_down.f90:52
</span><br>
<span class="quotelev1">&gt;       iter() at iter.f90:56
</span><br>
<span class="quotelev1">&gt;         mcalc() at mcalc.f90:38
</span><br>
<span class="quotelev1">&gt;           pmpi_allreduce__() at ?:?
</span><br>
<span class="quotelev1">&gt;             PMPI_Allreduce() at ?:?
</span><br>
<span class="quotelev1">&gt;               ompi_coll_tuned_allreduce_intra_dec_fixed() at ?:?
</span><br>
<span class="quotelev1">&gt;                 ompi_coll_tuned_allreduce_intra_ring_segmented() at ?:?
</span><br>
<span class="quotelev1">&gt;                   ompi_coll_tuned_sendrecv_actual() at ?:?
</span><br>
<span class="quotelev1">&gt;                     ompi_request_default_wait_all() at ?:?
</span><br>
<span class="quotelev1">&gt;                       opal_progress() at ?:?
</span><br>
<span class="quotelev1">&gt; Stack trace(s) for thread: 2
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; [0] (1 processes)
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; start_thread() at ?:?
</span><br>
<span class="quotelev1">&gt;   btl_openib_async_thread() at ?:?
</span><br>
<span class="quotelev1">&gt;     poll() at ?:?
</span><br>
<span class="quotelev1">&gt; Stack trace(s) for thread: 3
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; [0] (1 processes)
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; start_thread() at ?:?
</span><br>
<span class="quotelev1">&gt;   service_thread_start() at ?:?
</span><br>
<span class="quotelev1">&gt;     select() at ?:?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17206/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17207.php">Eugene Loh: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17205.php">Greg Fischer: "[OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>In reply to:</strong> <a href="17205.php">Greg Fischer: "[OMPI users] freezing in mpi_allreduce operation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17432.php">Jeff Squyres: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>Reply:</strong> <a href="17432.php">Jeff Squyres: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
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

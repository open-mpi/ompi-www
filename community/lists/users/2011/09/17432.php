<?
$subject_val = "Re: [OMPI users] freezing in mpi_allreduce operation";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 09:35:51 2011" -->
<!-- isoreceived="20110924133551" -->
<!-- sent="Sat, 24 Sep 2011 09:35:46 -0400" -->
<!-- isosent="20110924133546" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] freezing in mpi_allreduce operation" -->
<!-- id="8CAD5881-42B3-46AC-B545-890ADEC91ECC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMb6nm1886CQhLAw+0LqAFkx5zUmjdVxFMW8OmJkrYeiFcyNNg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 09:35:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17433.php">Martin Siegert: "Re: [OMPI users] PATH settings"</a>
<li><strong>Previous message:</strong> <a href="17431.php">Jeff Squyres: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
<li><strong>In reply to:</strong> <a href="17206.php">Greg Fischer: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Holy crimminey, I'm totally lost in your Fortran syntax.  :-)
<br>
<p>What you describe might be a bug in our MPI_IN_PLACE handling for MPI_ALLREDUCE. 
<br>
<p>Could you possible make a small test case that a) we can run, and b) uses straightforward Fortran? (avoid using terms like &quot;assumed shape&quot; and &quot;assumed size&quot; and ...any other Fortran stuff that confuses simple C programmers like us :-) )
<br>
<p>What version of Open MPI is this?
<br>
<p><p>On Sep 8, 2011, at 5:59 PM, Greg Fischer wrote:
<br>
<p><span class="quotelev1">&gt; Note also that coding the mpi_allreduce as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    call mpi_allreduce(MPI_IN_PLACE,phim(0,1,1,1,grp),phim_size*im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,ang_com,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; results in the same freezing behavior in the 60th iteration.  (I don't recall why the arrays were being passed, possibly just a mistake.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 8, 2011 at 4:17 PM, Greg Fischer &lt;greg.a.fischer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I am seeing mpi_allreduce operations freeze execution of my code on some moderately-sized problems.  The freeze does not manifest itself in every problem.  In addition, it is in a portion of the code that is repeated many times.  In the problem discussed below, the problem appears in the 60th iteration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The current test case that I'm looking at is a 64-processor job.  This particular mpi_allreduce call applies to all 64 processors, with each communicator in the call containing a total of 4 processors.  When I add print statements before and after the offending line, I see that all 64 processors successfully make it to the mpi_allreduce call, but only 32 successfully exit.  Stack traces on the other 32 yield something along the lines of the trace listed at the bottom of this message.  The call, itself, looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_allreduce(MPI_IN_PLACE, phim(0:(phim_size-1),1:im,1:jm,1:kmloc(coords(2)+1),grp), &amp;
</span><br>
<span class="quotelev1">&gt;                     phim_size*im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,ang_com,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These messages are sized to remain under the 32-bit integer size limitation for the &quot;count&quot; parameter.  The intent is to perform the allreduce operation on a contiguous block of the array.  Previously, I had been passing an assumed-shape array (i.e. phim(:,:,:,:,grp), but found some documentation indicating that was potentially dangerous.  Making the change from assumed- to explicit-shaped arrays doesn't solve the problem.   However, if I declare an additional array and use separate send and receive buffers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_allreduce(phim_local,phim_global,phim_size*im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,ang_com,ierr)
</span><br>
<span class="quotelev1">&gt;  phim(:,:,:,:,grp) = phim_global
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then the problem goes away, and every thing works normally.  Does anyone have any insight as to what may be happening here?  I'm using &quot;include 'mpif.h'&quot; rather than the f90 module, does that potentially explain this?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17433.php">Martin Siegert: "Re: [OMPI users] PATH settings"</a>
<li><strong>Previous message:</strong> <a href="17431.php">Jeff Squyres: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
<li><strong>In reply to:</strong> <a href="17206.php">Greg Fischer: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
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

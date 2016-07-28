<?
$subject_val = "Re: [OMPI users] Confused on simple MPI/OpenMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 08:12:55 2013" -->
<!-- isoreceived="20130404121255" -->
<!-- sent="Thu, 4 Apr 2013 14:12:42 +0200" -->
<!-- isosent="20130404121242" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Confused on simple MPI/OpenMP program" -->
<!-- id="82AEE0E6-1DFC-4589-A932-3B54246C6465_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="006a01ce30dd$194c0080$4be40180$_at_net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Confused on simple MPI/OpenMP program<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 08:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21675.php">Yevgeny Popkov: "[OMPI users] Fwd: network related MPI errors on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="21673.php">Ed Blosch: "[OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>In reply to:</strong> <a href="21673.php">Ed Blosch: "[OMPI users] Confused on simple MPI/OpenMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21695.php">Ed Blosch: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>Reply:</strong> <a href="21695.php">Ed Blosch: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 04.04.2013 um 04:35 schrieb Ed Blosch:
<br>
<p><span class="quotelev1">&gt; Consider this Fortran program snippet:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program test
</span><br>
<p>use omp_lib
<br>
include 'mpif.h'
<br>
<p>might be missing.
<br>
<p><p><span class="quotelev1">&gt;  ! everybody except rank=0 exits.
</span><br>
<span class="quotelev1">&gt;  call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;  call mpi_comm_rank(MPI_COMM_WORLD,irank,ierr)
</span><br>
<span class="quotelev1">&gt;  if (irank /= 0) then
</span><br>
<span class="quotelev1">&gt;    call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt;    stop
</span><br>
<span class="quotelev1">&gt;  endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ! rank 0 tries to set number of OpenMP threads to 4
</span><br>
<span class="quotelev1">&gt;  call omp_set_num_threads(4)
</span><br>
<span class="quotelev1">&gt;  nthreads = omp_get_max_threads()
</span><br>
<span class="quotelev1">&gt;  print*, &quot;nthreads = &quot;, nthreads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end program test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is compiled like this: 'mpif90 -o test -O2 -openmp test.f90'  (Intel
</span><br>
<span class="quotelev1">&gt; 11.x)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run it like this:  mpirun -np 2 ./test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output is:  &quot;nthreads = 0&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that make sense?  I was expecting 4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I comment out the MPI lines and run the program serially (but still
</span><br>
<span class="quotelev1">&gt; compiled with mpif90), then I get the expected output value 4.
</span><br>
<p>Nope, for me it's still 0 then.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I'm sure I must be overlooking something basic here.  Please enlighten me.
</span><br>
<span class="quotelev1">&gt; Does this have anything to do with how I've configured OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21675.php">Yevgeny Popkov: "[OMPI users] Fwd: network related MPI errors on Amazon EC2"</a>
<li><strong>Previous message:</strong> <a href="21673.php">Ed Blosch: "[OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>In reply to:</strong> <a href="21673.php">Ed Blosch: "[OMPI users] Confused on simple MPI/OpenMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21695.php">Ed Blosch: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>Reply:</strong> <a href="21695.php">Ed Blosch: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
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

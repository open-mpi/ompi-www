<?
$subject_val = "Re: [OMPI users] Confused on simple MPI/OpenMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  9 09:03:10 2013" -->
<!-- isoreceived="20130409130310" -->
<!-- sent="Tue, 9 Apr 2013 08:03:06 -0500" -->
<!-- isosent="20130409130306" -->
<!-- name="Ed Blosch" -->
<!-- email="eblosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Confused on simple MPI/OpenMP program" -->
<!-- id="000a01ce3522$9439f6f0$bcade4d0$_at_net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="82AEE0E6-1DFC-4589-A932-3B54246C6465_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Ed Blosch (<em>eblosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-09 09:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21696.php">Thomas Vacek: "[OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="21694.php">George Bosilca: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="21674.php">Reuti: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I figured it out. 
<br>
<p>In the real application, I also did not have the 'use' statement, and there
<br>
was an IMPLICIT statement causing the omp_get_max_threads() function to be
<br>
automatically compiled as a real function instead of as integer, and the
<br>
integers were automatically promoted to 8-byte using -i8.
<br>
<p>Once I added the 'use omp_lib' statement, the compiler caught the mis-match.
<br>
<p><p>Just to verify, I did add the 'use omp_lib' statement and ran the test
<br>
program by itself.  I do get '4' as expected regardless of whether or not I
<br>
run the program under MPI.
<br>
<p>So there is no OpenMPI-related issue.  I thought it was OpenMPI-related
<br>
because, after commenting out the MPI calls, I got the right answer.  But
<br>
this was probably just a coincidence. 
<br>
<p>Thanks,
<br>
<p>Ed 
<br>
<p><p><p>I did not have the 'use' statement.
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Reuti
<br>
Sent: Thursday, April 04, 2013 7:13 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Confused on simple MPI/OpenMP program
<br>
<p>Hi,
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
<span class="quotelev1">&gt;  ! rank 0 tries to set number of OpenMP threads to 4  call 
</span><br>
<span class="quotelev1">&gt; omp_set_num_threads(4)  nthreads = omp_get_max_threads()  print*, 
</span><br>
<span class="quotelev1">&gt; &quot;nthreads = &quot;, nthreads
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
<span class="quotelev1">&gt; It is compiled like this: 'mpif90 -o test -O2 -openmp test.f90'  
</span><br>
<span class="quotelev1">&gt; (Intel
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21696.php">Thomas Vacek: "[OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="21694.php">George Bosilca: "Re: [OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="21674.php">Reuti: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
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

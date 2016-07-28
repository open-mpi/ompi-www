<?
$subject_val = "[OMPI users] Confused on simple MPI/OpenMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  3 22:35:44 2013" -->
<!-- isoreceived="20130404023544" -->
<!-- sent="Wed, 3 Apr 2013 21:35:40 -0500" -->
<!-- isosent="20130404023540" -->
<!-- name="Ed Blosch" -->
<!-- email="eblosch_at_[hidden]" -->
<!-- subject="[OMPI users] Confused on simple MPI/OpenMP program" -->
<!-- id="006a01ce30dd$194c0080$4be40180$_at_net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Confused on simple MPI/OpenMP program<br>
<strong>From:</strong> Ed Blosch (<em>eblosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-03 22:35:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21674.php">Reuti: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>Previous message:</strong> <a href="21672.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21674.php">Reuti: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>Reply:</strong> <a href="21674.php">Reuti: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Consider this Fortran program snippet:
<br>
<p>program test
<br>
<p>&nbsp;&nbsp;! everybody except rank=0 exits.
<br>
&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;call mpi_comm_rank(MPI_COMM_WORLD,irank,ierr)
<br>
&nbsp;&nbsp;if (irank /= 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;stop
<br>
&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;! rank 0 tries to set number of OpenMP threads to 4
<br>
&nbsp;&nbsp;call omp_set_num_threads(4)
<br>
&nbsp;&nbsp;nthreads = omp_get_max_threads()
<br>
&nbsp;&nbsp;print*, &quot;nthreads = &quot;, nthreads
<br>
<p>&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
<p>end program test
<br>
<p>It is compiled like this: 'mpif90 -o test -O2 -openmp test.f90'  (Intel
<br>
11.x)
<br>
<p>When I run it like this:  mpirun -np 2 ./test
<br>
<p>The output is:  &quot;nthreads = 0&quot;
<br>
<p>Does that make sense?  I was expecting 4.
<br>
<p>If I comment out the MPI lines and run the program serially (but still
<br>
compiled with mpif90), then I get the expected output value 4.
<br>
<p>I'm sure I must be overlooking something basic here.  Please enlighten me.
<br>
Does this have anything to do with how I've configured OpenMPI?
<br>
<p>Thanks,
<br>
<p>Ed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21674.php">Reuti: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>Previous message:</strong> <a href="21672.php">Gus Correa: "Re: [OMPI users] Segmentation fault with HPCC benchmark"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21674.php">Reuti: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
<li><strong>Reply:</strong> <a href="21674.php">Reuti: "Re: [OMPI users] Confused on simple MPI/OpenMP program"</a>
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

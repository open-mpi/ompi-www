<?
$subject_val = "[OMPI users] MPI_ACCUMULATE with derived datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 17:11:45 2009" -->
<!-- isoreceived="20090820211145" -->
<!-- sent="Thu, 20 Aug 2009 15:11:37 -0600" -->
<!-- isosent="20090820211137" -->
<!-- name="Paul Romano" -->
<!-- email="romano7_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ACCUMULATE with derived datatype" -->
<!-- id="4A8DBC09.3010605_at_mit.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_ACCUMULATE with derived datatype<br>
<strong>From:</strong> Paul Romano (<em>romano7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-20 17:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10450.php">Robert Schöne: "[OMPI users] Solution for an old compilation bug"</a>
<li><strong>Previous message:</strong> <a href="10448.php">Jeff Squyres: "Re: [OMPI users] problem with installing openmp 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I'm trying to use MPI_ACCUMULATE with a user-defined datatype.
<br>
Basically, I want to be able to accumulate a subset of a
<br>
three-dimensional array, but since the data is non-contiguous in memory,
<br>
it requires defining a new type with MPI_TYPE_VECTOR and MPI_TYPE_HVECTOR.
<br>
<p>I wrote a simple program to GET and ACCUMULATE a subset of a 2D array,
<br>
and it fails when it tries to ACCUMULATE. When I try to run the
<br>
following with two processes
<br>
<p>#####################################################################3
<br>
program test_prog
<br>
<p>&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;include 'mpif.h'
<br>
<p>&nbsp;&nbsp;integer :: ierr, nprocs, rank
<br>
&nbsp;&nbsp;integer :: MPI_new
<br>
&nbsp;&nbsp;integer :: temp, win
<br>
<p>&nbsp;&nbsp;integer(kind=MPI_ADDRESS_KIND) :: lb, size, sizeofreal
<br>
<p>&nbsp;&nbsp;real :: array(10,10)
<br>
&nbsp;&nbsp;real :: data(2,2)
<br>
<p>&nbsp;&nbsp;pointer (ptr, temp)
<br>
<p>&nbsp;&nbsp;array = 2.
<br>
&nbsp;&nbsp;data = 1.
<br>
<p>&nbsp;&nbsp;! Startup MPI
<br>
&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, nprocs, ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
<p>&nbsp;&nbsp;! Create new type
<br>
&nbsp;&nbsp;call MPI_TYPE_VECTOR( 2, 2, 10, MPI_REAL8, MPI_new, ierr )
<br>
&nbsp;&nbsp;call MPI_TYPE_COMMIT( MPI_new, ierr )
<br>
<p>&nbsp;&nbsp;! Create window
<br>
&nbsp;&nbsp;ptr = loc(array)
<br>
&nbsp;&nbsp;call MPI_TYPE_GET_EXTENT( MPI_REAL8, lb, sizeofreal, ierr )
<br>
&nbsp;&nbsp;size = 10*10*10*sizeofreal
<br>
&nbsp;&nbsp;call MPI_ALLOC_MEM( size, MPI_INFO_NULL, ptr, ierr)
<br>
&nbsp;&nbsp;call MPI_WIN_CREATE( array, size, sizeofreal, MPI_INFO_NULL, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_COMM_WORLD, win, ierr )
<br>
&nbsp;&nbsp;call MPI_WIN_FENCE( 0, win, ierr )
<br>
<p>&nbsp;&nbsp;! Get data
<br>
&nbsp;&nbsp;if ( rank == 1 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_WIN_LOCK( MPI_LOCK_SHARED, 0, 0, win, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_GET( data, 4, MPI_REAL8, 0, 0, 1, MPI_new, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp; win, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_WIN_UNLOCK( 0, win, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;print *, data
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;! Accumulate data
<br>
&nbsp;&nbsp;if ( rank == 1 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_WIN_LOCK( MPI_LOCK_SHARED, 0, 0, win, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_ACCUMULATE( data, 4, MPI_REAL8, 0, 0, 1, MPI_new, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp; MPI_SUM, win, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_WIN_UNLOCK( 0, win, ierr )
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;! print data
<br>
&nbsp;&nbsp;call MPI_BARRIER( MPI_COMM_WORLD, ierr )
<br>
&nbsp;&nbsp;if ( rank == 0 ) print *, array(1:5,1,1)
<br>
<p>&nbsp;&nbsp;! Finalize
<br>
&nbsp;&nbsp;call MPI_WIN_FREE( win, ierr )
<br>
&nbsp;&nbsp;call MPI_FINALIZE( ierr )
<br>
<p>end program test_prog
<br>
#####################################################################3
<br>
<p>I get the following error:
<br>
[yra128:27896] *** An error occurred in MPI_Accumlate
<br>
[yra128:27896] *** on win
<br>
[yra128:27896] *** MPI_ERR_ARG: invalid argument of some other kind
<br>
[yra128:27896] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>Looking at the source code for OpenMPI, this should happen if the
<br>
primitive datatypes are different, but using the same user-defined
<br>
datatype in an MPI_GET succeeds.
<br>
<p>I'm running on the Yellowrail cluster at LANL on OpenMPI 1.3.3
<br>
(InfiniBand if I'm not mistaken) using the Intel 10.0.023 Fortran
<br>
compiler. I believe this is unlikely to be a make/build issue since the
<br>
HPC folks here set everything up. I know the ability to perform
<br>
MPI_ACCUMULATE with a user-defined type was not in versions &lt; 1.3, but
<br>
it should work for 1.3.3.
<br>
<p>Any help or insights would be greatly appreciated.
<br>
<p>Best regards,
<br>
Paul Romano
<br>
<p>PS I'm compiling with -r8 to make sure my reals are REAL8s
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10450.php">Robert Schöne: "[OMPI users] Solution for an old compilation bug"</a>
<li><strong>Previous message:</strong> <a href="10448.php">Jeff Squyres: "Re: [OMPI users] problem with installing openmp 1.3"</a>
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

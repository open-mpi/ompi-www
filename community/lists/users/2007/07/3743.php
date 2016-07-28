<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 15:19:01 2007" -->
<!-- isoreceived="20070723191901" -->
<!-- sent="Mon, 23 Jul 2007 15:18:53 -0400" -->
<!-- isosent="20070723191853" -->
<!-- name="Jeff Dusenberry" -->
<!-- email="jdusenberry_at_[hidden]" -->
<!-- subject="[OMPI users] type_match_size_f always fails?" -->
<!-- id="46A4FF1D.8060401_at_whoi.edu" -->
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
<strong>From:</strong> Jeff Dusenberry (<em>jdusenberry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 15:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3744.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Previous message:</strong> <a href="3742.php">SLIM H.A.: "Re: [OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI users] type_match_size_f always fails?"</a>
<li><strong>Reply:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI users] type_match_size_f always fails?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to use MPI_TYPE_MATCH_SIZE (Fortran interface) and no matter 
<br>
what I give it, it always fails with MPI_ERR_ARG.
<br>
<p>The last line of code in type_match_size_f.c seems to be the source of 
<br>
the problem, as it always calls the error handler:
<br>
<p>(void)OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_ARG, FUNC_NAME);
<br>
<p>Putting this in the preceding if-else statement seems to work for me, 
<br>
although I'm not sure if that is the appropriate fix, ie:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( c_type != &amp;ompi_mpi_datatype_null )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*ierr = OMPI_INT_2_FINT( MPI_SUCCESS );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*ierr = OMPI_INT_2_FINT( MPI_ERR_ARG );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void)OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_ARG, 
<br>
FUNC_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Test code is below - I linked against OpenMPI 1.2.3.
<br>
<p>program test_type_match
<br>
&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;integer, parameter :: nval=5
<br>
&nbsp;&nbsp;&nbsp;real, dimension(nval) :: testvals
<br>
&nbsp;&nbsp;&nbsp;integer :: ierr, isize
<br>
&nbsp;&nbsp;&nbsp;integer :: my_type
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;call MPI_SIZEOF(testvals,isize,ierr)
<br>
&nbsp;&nbsp;&nbsp;call MPI_TYPE_MATCH_SIZE(MPI_TYPECLASS_REAL, isize, my_type, ierr)
<br>
&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
<p>end program test_type_match
<br>
<p>Thanks,
<br>
Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3744.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Previous message:</strong> <a href="3742.php">SLIM H.A.: "Re: [OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI users] type_match_size_f always fails?"</a>
<li><strong>Reply:</strong> <a href="3753.php">Jeff Squyres: "Re: [OMPI users] type_match_size_f always fails?"</a>
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

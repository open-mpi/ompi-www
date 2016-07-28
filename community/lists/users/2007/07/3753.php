<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 21:03:21 2007" -->
<!-- isoreceived="20070724010321" -->
<!-- sent="Mon, 23 Jul 2007 21:03:06 -0400" -->
<!-- isosent="20070724010306" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] type_match_size_f always fails?" -->
<!-- id="D6EBAE81-B96C-45F7-B851-811574F6C379_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A4FF1D.8060401_at_whoi.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 21:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3754.php">Francesco Pietra: "Re: [OMPI users] openmpi support ignored"</a>
<li><strong>Previous message:</strong> <a href="3752.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>In reply to:</strong> <a href="3743.php">Jeff Dusenberry: "[OMPI users] type_match_size_f always fails?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are absolutely right, sir -- thanks!
<br>
<p>I have committed the fix to the trunk and filed a ticket to get it  
<br>
moved over to the upcoming v1.2.4 release.
<br>
<p><p>On Jul 23, 2007, at 3:18 PM, Jeff Dusenberry wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to use MPI_TYPE_MATCH_SIZE (Fortran interface) and no  
</span><br>
<span class="quotelev1">&gt; matter
</span><br>
<span class="quotelev1">&gt; what I give it, it always fails with MPI_ERR_ARG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last line of code in type_match_size_f.c seems to be the source of
</span><br>
<span class="quotelev1">&gt; the problem, as it always calls the error handler:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (void)OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_ARG, FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Putting this in the preceding if-else statement seems to work for me,
</span><br>
<span class="quotelev1">&gt; although I'm not sure if that is the appropriate fix, ie:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       if( c_type != &amp;ompi_mpi_datatype_null )
</span><br>
<span class="quotelev1">&gt;           *ierr = OMPI_INT_2_FINT( MPI_SUCCESS );
</span><br>
<span class="quotelev1">&gt;       else {
</span><br>
<span class="quotelev1">&gt;           *ierr = OMPI_INT_2_FINT( MPI_ERR_ARG );
</span><br>
<span class="quotelev1">&gt;           (void)OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_ARG,
</span><br>
<span class="quotelev1">&gt; FUNC_NAME);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Test code is below - I linked against OpenMPI 1.2.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program test_type_match
</span><br>
<span class="quotelev1">&gt;    use mpi
</span><br>
<span class="quotelev1">&gt;    implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    integer, parameter :: nval=5
</span><br>
<span class="quotelev1">&gt;    real, dimension(nval) :: testvals
</span><br>
<span class="quotelev1">&gt;    integer :: ierr, isize
</span><br>
<span class="quotelev1">&gt;    integer :: my_type
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;    call MPI_SIZEOF(testvals,isize,ierr)
</span><br>
<span class="quotelev1">&gt;    call MPI_TYPE_MATCH_SIZE(MPI_TYPECLASS_REAL, isize, my_type, ierr)
</span><br>
<span class="quotelev1">&gt;    call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program test_type_match
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jeff
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3754.php">Francesco Pietra: "Re: [OMPI users] openmpi support ignored"</a>
<li><strong>Previous message:</strong> <a href="3752.php">Jeff Squyres: "Re: [OMPI users] Performance tuning: focus on latency"</a>
<li><strong>In reply to:</strong> <a href="3743.php">Jeff Dusenberry: "[OMPI users] type_match_size_f always fails?"</a>
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

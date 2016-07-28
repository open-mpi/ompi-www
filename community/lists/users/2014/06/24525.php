<?
$subject_val = "Re: [OMPI users] ierr vs ierror in F90 mpi module";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 12:47:56 2014" -->
<!-- isoreceived="20140603164756" -->
<!-- sent="Tue, 03 Jun 2014 09:47:54 -0700" -->
<!-- isosent="20140603164754" -->
<!-- name="W Spector" -->
<!-- email="w6ws_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ierr vs ierror in F90 mpi module" -->
<!-- id="538DFC3A.8030807_at_earthlink.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] ierr vs ierror in F90 mpi module" -->
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
<strong>Subject:</strong> Re: [OMPI users] ierr vs ierror in F90 mpi module<br>
<strong>From:</strong> W Spector (<em>w6ws_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-03 12:47:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="24524.php">Fischer, Greg A.: "[OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21787.php">W Spector: "[OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="24526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1"> &gt; Did you find any other places where we accidentally had ierr instead 
</span><br>
of ierror?
<br>
<p>I will have to check the trunk and see.
<br>
<p>The only place I know of where the Standard wants IERR instead of IERROR 
<br>
is with the user-defined subroutines for MPI_KEYVAL_CREATE - which is 
<br>
deprecated.  And that is only important if you create a proper interface 
<br>
spec for the COPY_FN and DELETE_FN arguments - rather than simply 
<br>
declaring them EXTERNAL.
<br>
<p>The user-defined subroutines for the newer MPI_COMM_KEYVAL_CREATE call 
<br>
use IERROR.
<br>
<p>I had found some other keyword issues last year besides IERROR.  I only 
<br>
reported the IERROR arguments because they were so pervasive across 
<br>
almost every interface definition.  Again, I will need to recheck the trunk.
<br>
<p>Walter
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Previous message:</strong> <a href="24524.php">Fischer, Greg A.: "[OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/04/21787.php">W Spector: "[OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="24526.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
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

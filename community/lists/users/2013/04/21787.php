<?
$subject_val = "[OMPI users] ierr vs ierror in F90 mpi module";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 20:52:28 2013" -->
<!-- isoreceived="20130425005228" -->
<!-- sent="Wed, 24 Apr 2013 17:52:23 -0700" -->
<!-- isosent="20130425005223" -->
<!-- name="W Spector" -->
<!-- email="w6ws_at_[hidden]" -->
<!-- subject="[OMPI users] ierr vs ierror in F90 mpi module" -->
<!-- id="51787E47.2090803_at_earthlink.net" -->
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
<strong>Subject:</strong> [OMPI users] ierr vs ierror in F90 mpi module<br>
<strong>From:</strong> W Spector (<em>w6ws_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 20:52:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
<li><strong>Previous message:</strong> <a href="21786.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21789.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21789.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24525.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The MPI Standard specifies to use 'ierror' for the final argument in 
<br>
most Fortran MPI calls.  However the Openmpi f90 module defines it as 
<br>
being 'ierr'.  This messes up those who want to use keyword=value syntax 
<br>
in their calls.
<br>
<p>I just checked the latest 1.6.4 release and it is still broken.
<br>
<p>Is this something that can be fixed?
<br>
<p>Walter
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21788.php">Jeff Squyres (jsquyres): "Re: [OMPI users] LDFLAGS &amp; static compilation &amp; linking"</a>
<li><strong>Previous message:</strong> <a href="21786.php">Elken, Tom: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21789.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Reply:</strong> <a href="21789.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24525.php">W Spector: "Re: [OMPI users] ierr vs ierror in F90 mpi module"</a>
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

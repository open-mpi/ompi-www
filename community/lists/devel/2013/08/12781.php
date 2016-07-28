<?
$subject_val = "[OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 22 02:24:22 2013" -->
<!-- isoreceived="20130822062422" -->
<!-- sent="Thu, 22 Aug 2013 16:24:18 +1000" -->
<!-- isosent="20130822062418" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?" -->
<!-- id="5215AE92.5040204_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-22 02:24:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12782.php">Guillaume Papauré: "[OMPI devel] bitbucket mirror out of sync ?"</a>
<li><strong>Previous message:</strong> <a href="12780.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<li><strong>Reply:</strong> <a href="12787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi folks,
<br>
<p>We've got what we thought would be a fairly standard OMPI (1.6.5)
<br>
install which is a single install built with GCC and then setting the
<br>
appropriate variables to use the Intel compilers when someone loads
<br>
our &quot;intel&quot; module:
<br>
<p>$ module show intel
<br>
[...]
<br>
setenv           OMPI_CC icc
<br>
setenv           OMPI_CXX icpc
<br>
setenv           OMPI_F77 ifort
<br>
setenv           OMPI_FC ifort
<br>
setenv           OMPI_CFLAGS -xHOST -O3 -mkl=sequential
<br>
setenv           OMPI_FFLAGS -xHOST -O3 -mkl=sequential
<br>
setenv           OMPI_FCFLAGS -xHOST -O3 -mkl=sequential
<br>
setenv           OMPI_CXXFLAGS -xHOST -O3 -mkl=sequential
<br>
<p>This works wonderfully, *except* when our director attempted to build
<br>
an F90 program with the Intel compilers that fails to build because
<br>
the mpi.mod F90 module was produced with gfortran rather than the
<br>
Intel compilers. :-(
<br>
<p>Is there any way to avoid having to do parallel installs of OMPI with
<br>
GCC and Intel compilers just to have two different versions of these
<br>
files?
<br>
<p>My brief googling hasn't indicated anything, and I don't see anything
<br>
in the mpif90 manual page (though I have to admit I've had to rush to
<br>
try and get this done before I need to leave for the day). :-(
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlIVrpIACgkQO2KABBYQAh/GAQCggQGnc18kSfMcGle3a3pWZGgD
<br>
UQ8AoIz61uuOPj+TFJwSYMTaAtUBLk3J
<br>
=yJ6J
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12782.php">Guillaume Papauré: "[OMPI devel] bitbucket mirror out of sync ?"</a>
<li><strong>Previous message:</strong> <a href="12780.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<li><strong>Reply:</strong> <a href="12787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
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

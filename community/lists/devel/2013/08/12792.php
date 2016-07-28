<?
$subject_val = "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 22 14:16:00 2013" -->
<!-- isoreceived="20130822181600" -->
<!-- sent="Thu, 22 Aug 2013 11:15:54 -0700" -->
<!-- isosent="20130822181554" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?" -->
<!-- id="6A7D7A54-4B62-4EBE-A42B-50C4F55F12B6_at_usgs.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="953C01F0-EBC1-42D1-91F6-34AC50E15EE5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-22 14:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12793.php">mahesh: "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12791.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="12787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chris,
<br>
<p>.mod files are compiler-specific, and may even be version-specific.  You may, however, be lucky enough to compile the Fortran interface definitions with ifort and supply that mpi.mod to ifort, even though the actual code was compiled with gfortran.  I have never tried that -- we build separate development trees for each OpenMPI version/compiler product/compiler version.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 22 Aug 2013, at 6:50 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Sadly, probably not. :(. You'll prbably have the same problem with c++, too. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There *may* be compatibility command line options for ifort/icpc to make them link compatible w gfortran/g++, but I've never had much faith in them. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 22, 2013, at 2:24 AM, &quot;Christopher Samuel&quot; &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev2">&gt;&gt; Hash: SHA1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We've got what we thought would be a fairly standard OMPI (1.6.5)
</span><br>
<span class="quotelev2">&gt;&gt; install which is a single install built with GCC and then setting the
</span><br>
<span class="quotelev2">&gt;&gt; appropriate variables to use the Intel compilers when someone loads
</span><br>
<span class="quotelev2">&gt;&gt; our &quot;intel&quot; module:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ module show intel
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; setenv           OMPI_CC icc
</span><br>
<span class="quotelev2">&gt;&gt; setenv           OMPI_CXX icpc
</span><br>
<span class="quotelev2">&gt;&gt; setenv           OMPI_F77 ifort
</span><br>
<span class="quotelev2">&gt;&gt; setenv           OMPI_FC ifort
</span><br>
<span class="quotelev2">&gt;&gt; setenv           OMPI_CFLAGS -xHOST -O3 -mkl=sequential
</span><br>
<span class="quotelev2">&gt;&gt; setenv           OMPI_FFLAGS -xHOST -O3 -mkl=sequential
</span><br>
<span class="quotelev2">&gt;&gt; setenv           OMPI_FCFLAGS -xHOST -O3 -mkl=sequential
</span><br>
<span class="quotelev2">&gt;&gt; setenv           OMPI_CXXFLAGS -xHOST -O3 -mkl=sequential
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This works wonderfully, *except* when our director attempted to build
</span><br>
<span class="quotelev2">&gt;&gt; an F90 program with the Intel compilers that fails to build because
</span><br>
<span class="quotelev2">&gt;&gt; the mpi.mod F90 module was produced with gfortran rather than the
</span><br>
<span class="quotelev2">&gt;&gt; Intel compilers. :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to avoid having to do parallel installs of OMPI with
</span><br>
<span class="quotelev2">&gt;&gt; GCC and Intel compilers just to have two different versions of these
</span><br>
<span class="quotelev2">&gt;&gt; files?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My brief googling hasn't indicated anything, and I don't see anything
</span><br>
<span class="quotelev2">&gt;&gt; in the mpif90 manual page (though I have to admit I've had to rush to
</span><br>
<span class="quotelev2">&gt;&gt; try and get this done before I need to leave for the day). :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Chris
</span><br>
<span class="quotelev2">&gt;&gt; - -- 
</span><br>
<span class="quotelev2">&gt;&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev2">&gt;&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev2">&gt;&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev2">&gt;&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; iEYEARECAAYFAlIVrpIACgkQO2KABBYQAh/GAQCggQGnc18kSfMcGle3a3pWZGgD
</span><br>
<span class="quotelev2">&gt;&gt; UQ8AoIz61uuOPj+TFJwSYMTaAtUBLk3J
</span><br>
<span class="quotelev2">&gt;&gt; =yJ6J
</span><br>
<span class="quotelev2">&gt;&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12792/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12793.php">mahesh: "Re: [OMPI devel] Detailed documentation on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12791.php">Rolf vandeVaart: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29055 - in	trunk/ompi/mca: btl btl/smcuda common/cuda pml/ob1"</a>
<li><strong>In reply to:</strong> <a href="12787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
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

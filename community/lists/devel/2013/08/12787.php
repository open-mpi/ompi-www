<?
$subject_val = "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 22 09:50:06 2013" -->
<!-- isoreceived="20130822135006" -->
<!-- sent="Thu, 22 Aug 2013 13:50:05 +0000" -->
<!-- isosent="20130822135005" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?" -->
<!-- id="953C01F0-EBC1-42D1-91F6-34AC50E15EE5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5215AE92.5040204_at_unimelb.edu.au" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-22 09:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12788.php">Tim Mattox: "[OMPI devel] Potential Performance issues with mmap'ed files"</a>
<li><strong>Previous message:</strong> <a href="12786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] bitbucket mirror out of sync ?"</a>
<li><strong>In reply to:</strong> <a href="12781.php">Christopher Samuel: "[OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12792.php">Larry Baker: "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<li><strong>Reply:</strong> <a href="12792.php">Larry Baker: "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sadly, probably not. :(. You'll prbably have the same problem with c++, too. 
<br>
<p>There *may* be compatibility command line options for ifort/icpc to make them link compatible w gfortran/g++, but I've never had much faith in them. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Aug 22, 2013, at 2:24 AM, &quot;Christopher Samuel&quot; &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've got what we thought would be a fairly standard OMPI (1.6.5)
</span><br>
<span class="quotelev1">&gt; install which is a single install built with GCC and then setting the
</span><br>
<span class="quotelev1">&gt; appropriate variables to use the Intel compilers when someone loads
</span><br>
<span class="quotelev1">&gt; our &quot;intel&quot; module:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ module show intel
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; setenv           OMPI_CC icc
</span><br>
<span class="quotelev1">&gt; setenv           OMPI_CXX icpc
</span><br>
<span class="quotelev1">&gt; setenv           OMPI_F77 ifort
</span><br>
<span class="quotelev1">&gt; setenv           OMPI_FC ifort
</span><br>
<span class="quotelev1">&gt; setenv           OMPI_CFLAGS -xHOST -O3 -mkl=sequential
</span><br>
<span class="quotelev1">&gt; setenv           OMPI_FFLAGS -xHOST -O3 -mkl=sequential
</span><br>
<span class="quotelev1">&gt; setenv           OMPI_FCFLAGS -xHOST -O3 -mkl=sequential
</span><br>
<span class="quotelev1">&gt; setenv           OMPI_CXXFLAGS -xHOST -O3 -mkl=sequential
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This works wonderfully, *except* when our director attempted to build
</span><br>
<span class="quotelev1">&gt; an F90 program with the Intel compilers that fails to build because
</span><br>
<span class="quotelev1">&gt; the mpi.mod F90 module was produced with gfortran rather than the
</span><br>
<span class="quotelev1">&gt; Intel compilers. :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way to avoid having to do parallel installs of OMPI with
</span><br>
<span class="quotelev1">&gt; GCC and Intel compilers just to have two different versions of these
</span><br>
<span class="quotelev1">&gt; files?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My brief googling hasn't indicated anything, and I don't see anything
</span><br>
<span class="quotelev1">&gt; in the mpif90 manual page (though I have to admit I've had to rush to
</span><br>
<span class="quotelev1">&gt; try and get this done before I need to leave for the day). :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.11 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlIVrpIACgkQO2KABBYQAh/GAQCggQGnc18kSfMcGle3a3pWZGgD
</span><br>
<span class="quotelev1">&gt; UQ8AoIz61uuOPj+TFJwSYMTaAtUBLk3J
</span><br>
<span class="quotelev1">&gt; =yJ6J
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12788.php">Tim Mattox: "[OMPI devel] Potential Performance issues with mmap'ed files"</a>
<li><strong>Previous message:</strong> <a href="12786.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] bitbucket mirror out of sync ?"</a>
<li><strong>In reply to:</strong> <a href="12781.php">Christopher Samuel: "[OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12792.php">Larry Baker: "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
<li><strong>Reply:</strong> <a href="12792.php">Larry Baker: "Re: [OMPI devel] How to deal with F90 mpi.mod with single stack and multiple compiler suites?"</a>
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

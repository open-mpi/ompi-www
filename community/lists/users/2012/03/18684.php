<?
$subject_val = "Re: [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  5 14:38:12 2012" -->
<!-- isoreceived="20120305193812" -->
<!-- sent="Mon, 5 Mar 2012 06:09:32 -0800" -->
<!-- isosent="20120305140932" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)" -->
<!-- id="28755579-A444-4869-AED0-93236F2AF75D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="989908FE-C79E-40B5-BAE5-5C2799748B53_at_andrew.cmu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-05 09:09:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18685.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18683.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18681.php">Anthony Rollett: "[OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18689.php">Anthony Rollett: "Re: [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)"</a>
<li><strong>Reply:</strong> <a href="18689.php">Anthony Rollett: "Re: [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you use gfortran instead?  I don't think we've tested with g95 in years (if ever).
<br>
<p>Yes, you can manually edit mpif-config.h, if you need to.  I'm guessing that OMPI's configure script got the wrong answer from g95, and therefore put in a 0 for those values.  I don't know if we want to support that ancient compiler; so upgrading to a new compiler or manually editing mpif-config.h might be your best bet.  (but if you manually edit, I hope there's no other as-yet-undiscovered dragons awaiting you around the corner...)
<br>
<p><p>On Mar 3, 2012, at 1:56 PM, Anthony Rollett wrote:
<br>
<p><span class="quotelev1">&gt; Greetings - I am able to configure and install 1.4.5 with fortran support.  However, when I try to use MPI_ADDRESS_KIND and MPI_OFFSET_KIND, I find that mpif-config.h has these parameters set to 0 (and I get compiler errors).  Is there a way to configure and have these be non-zero?  Is it safe to manually edit mpif-config.h?!  Obviously I can supply more details, but even a hint a two will probably allow me to solve this one.
</span><br>
<span class="quotelev1">&gt; Thanks, Tony Rollett.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: I used  ./configure --prefix=/Users/Shared/openmpi-1.4.5 CC=gcc F77=g95
</span><br>
<span class="quotelev1">&gt; F90=g95 CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64
</span><br>
<span class="quotelev1">&gt; LDFLAGS=-L/usr/local/lib CPPFLAGS=-I/usr/local/include
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18685.php">Jeffrey Squyres: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18683.php">Nathan Hjelm: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18681.php">Anthony Rollett: "[OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18689.php">Anthony Rollett: "Re: [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)"</a>
<li><strong>Reply:</strong> <a href="18689.php">Anthony Rollett: "Re: [OMPI users] Configure MPI_ADDRESS_KIND and MPI_OFFSET_KIND (OSX 10.6; gcc, g95, openmpi-1.4.5.)"</a>
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

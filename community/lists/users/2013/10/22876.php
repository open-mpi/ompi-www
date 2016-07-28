<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 17:49:23 2013" -->
<!-- isoreceived="20131030214923" -->
<!-- sent="Wed, 30 Oct 2013 21:49:20 +0000" -->
<!-- isosent="20131030214920" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F99DAFC_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAEGKUyzW7RatHK4YhZA+ry7Fu0H1D7txbxuD-96wEKGTEiYzSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 17:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22877.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22875.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
<li><strong>In reply to:</strong> <a href="22868.php">Jim Parker: "[OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22877.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22877.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 30, 2013, at 4:35 PM, Jim Parker &lt;jimparker96313_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;   I have recently built a cluster that uses the 64-bit indexing feature of OpenMPI following the directions at
</span><br>
<span class="quotelev1">&gt; <a href="http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers">http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers</a>
</span><br>
<p>That should be correct (i.e., passing -i8 in FFLAGS and FCFLAGS for OMPI 1.6.x).
<br>
<p><span class="quotelev1">&gt; My question is what are the new prototypes for the MPI calls ?
</span><br>
<span class="quotelev1">&gt; specifically
</span><br>
<span class="quotelev1">&gt; MPI_RECV
</span><br>
<span class="quotelev1">&gt; MPI_Allgathterv
</span><br>
<p>They're the same as they've always been.  
<br>
<p>The magic is that the -i8 flag tells the compiler &quot;make all Fortran INTEGERs be 8 bytes, not (the default) 4.&quot;  So Ralph's answer was correct in that all the MPI parameters are INTEGERs -- but you can tell the compiler that all INTEGERs are 8 bytes, not 4, and therefore get &quot;large&quot; integers.
<br>
<p>Note that this means that you need to compile your application with -i8, too.  That will make *your* INTEGERs also be 8 bytes, and then you'll match what Open MPI is doing.
<br>
<p><span class="quotelev1">&gt; I'm curious because some off my local variables get killed (set to null) upon my first call to MPI_RECV.  Typically, this is due (in Fortran) to someone not setting the 'status' variable to an appropriate array size.
</span><br>
<p>If you didn't compile your application with -i8, this could well be because your application is treating INTEGERs as 4 bytes, but OMPI is treating INTEGERs as 8 bytes.  Nothing good can come from that.
<br>
<p>If you *did* compile your application with -i8 and you're seeing this kind of wonkyness, we should dig deeper and see what's going on.
<br>
<p><span class="quotelev1">&gt; My review of mpif.h and mpi.h seem to indicate that the functions are defined as C int types and therefore , I assume, the coercion during the compile makes the library support 64-bit indexing.  ie. int -&gt; long int
</span><br>
<p>FWIW: We actually define a type MPI_Fint; its actual type is determined by configure (int or long int, IIRC).  When your Fortran code calls C, we use the MPI_Fint type for parameters, and so it will be either a 4 or 8 byte integer type.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22877.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22875.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
<li><strong>In reply to:</strong> <a href="22868.php">Jim Parker: "[OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22877.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Reply:</strong> <a href="22877.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
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

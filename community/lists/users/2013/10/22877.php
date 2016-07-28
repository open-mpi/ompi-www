<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 18:22:53 2013" -->
<!-- isoreceived="20131030222253" -->
<!-- sent="Wed, 30 Oct 2013 17:22:51 -0500" -->
<!-- isosent="20131030222251" -->
<!-- name="Jim Parker" -->
<!-- email="jimparker96313_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing" -->
<!-- id="CAEGKUyy=CMbaXXOGKgGQees+Uda7BGg-eJjmCpjnNHpbnx_r5g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F99DAFC_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing<br>
<strong>From:</strong> Jim Parker (<em>jimparker96313_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 18:22:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="22878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and Ralph,
<br>
&nbsp;&nbsp;Ok, I downshifted to a helloWorld example (attached), bottom line after I
<br>
hit the MPI_Recv call, my local variable (rank) gets borked.
<br>
<p>I have compiled with -m64 -fdefault-integer-8 and even have assigned kind=8
<br>
to the integers (which would be the preferred method in my case)
<br>
<p>Your help is appreciated.
<br>
<p>Cheers,
<br>
--Jim
<br>
<p><p><p>On Wed, Oct 30, 2013 at 4:49 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Oct 30, 2013, at 4:35 PM, Jim Parker &lt;jimparker96313_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;   I have recently built a cluster that uses the 64-bit indexing feature
</span><br>
<span class="quotelev1">&gt; of OpenMPI following the directions at
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers">http://wiki.chem.vu.nl/dirac/index.php/How_to_build_MPI_libraries_for_64-bit_integers</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That should be correct (i.e., passing -i8 in FFLAGS and FCFLAGS for OMPI
</span><br>
<span class="quotelev1">&gt; 1.6.x).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; My question is what are the new prototypes for the MPI calls ?
</span><br>
<span class="quotelev2">&gt; &gt; specifically
</span><br>
<span class="quotelev2">&gt; &gt; MPI_RECV
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Allgathterv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They're the same as they've always been.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The magic is that the -i8 flag tells the compiler &quot;make all Fortran
</span><br>
<span class="quotelev1">&gt; INTEGERs be 8 bytes, not (the default) 4.&quot;  So Ralph's answer was correct
</span><br>
<span class="quotelev1">&gt; in that all the MPI parameters are INTEGERs -- but you can tell the
</span><br>
<span class="quotelev1">&gt; compiler that all INTEGERs are 8 bytes, not 4, and therefore get &quot;large&quot;
</span><br>
<span class="quotelev1">&gt; integers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this means that you need to compile your application with -i8,
</span><br>
<span class="quotelev1">&gt; too.  That will make *your* INTEGERs also be 8 bytes, and then you'll match
</span><br>
<span class="quotelev1">&gt; what Open MPI is doing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm curious because some off my local variables get killed (set to null)
</span><br>
<span class="quotelev1">&gt; upon my first call to MPI_RECV.  Typically, this is due (in Fortran) to
</span><br>
<span class="quotelev1">&gt; someone not setting the 'status' variable to an appropriate array size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you didn't compile your application with -i8, this could well be
</span><br>
<span class="quotelev1">&gt; because your application is treating INTEGERs as 4 bytes, but OMPI is
</span><br>
<span class="quotelev1">&gt; treating INTEGERs as 8 bytes.  Nothing good can come from that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you *did* compile your application with -i8 and you're seeing this kind
</span><br>
<span class="quotelev1">&gt; of wonkyness, we should dig deeper and see what's going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; My review of mpif.h and mpi.h seem to indicate that the functions are
</span><br>
<span class="quotelev1">&gt; defined as C int types and therefore , I assume, the coercion during the
</span><br>
<span class="quotelev1">&gt; compile makes the library support 64-bit indexing.  ie. int -&gt; long int
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: We actually define a type MPI_Fint; its actual type is determined by
</span><br>
<span class="quotelev1">&gt; configure (int or long int, IIRC).  When your Fortran code calls C, we use
</span><br>
<span class="quotelev1">&gt; the MPI_Fint type for parameters, and so it will be either a 4 or 8 byte
</span><br>
<span class="quotelev1">&gt; integer type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22877/mpi-test-64bit.tar.bz2">mpi-test-64bit.tar.bz2</a>
</ul>
<!-- attachment="mpi-test-64bit.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>In reply to:</strong> <a href="22876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="22878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
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

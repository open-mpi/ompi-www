<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 11 14:35:57 2013" -->
<!-- isoreceived="20130911183557" -->
<!-- sent="Wed, 11 Sep 2013 14:35:54 -0400" -->
<!-- isosent="20130911183554" -->
<!-- name="Hugo Gagnon" -->
<!-- email="opensource.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="1378924554.16058.20786093.7ECEA6B9_at_webmail.messagingengine.com" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F88DF9E_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran<br>
<strong>From:</strong> Hugo Gagnon (<em>opensource.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-11 14:35:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22645.php">Matthieu Brucher: "[OMPI users] Typo on the FAQ page"</a>
<li><strong>Previous message:</strong> <a href="22643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep 11, 2013, at 13:24, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Sep 11, 2013, at 7:22 PM, Hugo Gagnon
</span><br>
<span class="quotelev1">&gt; &lt;opensource.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is definitely a puzzle, because I just installed gcc 4.8.1 on my
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 10.8.4 OS X MBP,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I also just recompiled gcc 4.8.1_3 from MacPorts, and will recompile
</span><br>
<span class="quotelev2">&gt; &gt; openmpi 1.6.5 myself rather than using MacPorts' version.  May I ask
</span><br>
<span class="quotelev2">&gt; &gt; what are the exact options you passed to ./configure?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's what I used:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/Users/jsquyres/bogus --disable-vt
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default --enable-mpi-f77 --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt; CC=/opt/local/bin/gcc-mp-4.8 F77=/opt/local/bin/gfortran-mp-4.8
</span><br>
<span class="quotelev1">&gt; FC=/opt/local/bin/gfortran-mp-4.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think I realized that you used ompi from MacPorts.  I'll try that
</span><br>
<span class="quotelev1">&gt; one and see what happens.
</span><br>
<p>It works now!!  There must be something wrong with the MacPorts build...
<br>
<p><span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22645.php">Matthieu Brucher: "[OMPI users] Typo on the FAQ page"</a>
<li><strong>Previous message:</strong> <a href="22643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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

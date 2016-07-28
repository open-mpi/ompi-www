<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 11 13:24:47 2013" -->
<!-- isoreceived="20130911172447" -->
<!-- sent="Wed, 11 Sep 2013 17:24:46 +0000" -->
<!-- isosent="20130911172446" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F88DF9E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1378920122.21905.20755993.0E87C30A_at_webmail.messagingengine.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-11 13:24:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22644.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22642.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22642.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22644.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22644.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 11, 2013, at 7:22 PM, Hugo Gagnon &lt;opensource.openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; This is definitely a puzzle, because I just installed gcc 4.8.1 on my
</span><br>
<span class="quotelev2">&gt;&gt; 10.8.4 OS X MBP,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also just recompiled gcc 4.8.1_3 from MacPorts, and will recompile
</span><br>
<span class="quotelev1">&gt; openmpi 1.6.5 myself rather than using MacPorts' version.  May I ask
</span><br>
<span class="quotelev1">&gt; what are the exact options you passed to ./configure?
</span><br>
<p>Here's what I used:
<br>
<p>./configure --prefix=/Users/jsquyres/bogus --disable-vt --enable-mpirun-prefix-by-default --enable-mpi-f77 --enable-mpi-f90 CC=/opt/local/bin/gcc-mp-4.8 F77=/opt/local/bin/gfortran-mp-4.8 FC=/opt/local/bin/gfortran-mp-4.8
<br>
<p>I don't think I realized that you used ompi from MacPorts.  I'll try that one and see what happens.
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
<li><strong>Next message:</strong> <a href="22644.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22642.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22642.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22644.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22644.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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

<?
$subject_val = "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  9 17:31:13 2010" -->
<!-- isoreceived="20101009213113" -->
<!-- sent="Sat, 9 Oct 2010 23:31:09 +0200" -->
<!-- isosent="20101009213109" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran" -->
<!-- id="AANLkTik+tRv+2Y=YZ0aiopgxAf=tXCyNa3tfTC3ipj6J_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5E9838FE224683419F586D9DF46A0E25B05422FCA8_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran<br>
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-09 17:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14435.php">Damien Hocking: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.5 released"</a>
<li><strong>Previous message:</strong> <a href="14433.php">Mikael Lavoie: "[OMPI users] Need a programmer to implement MPI to a research application ($)"</a>
<li><strong>In reply to:</strong> <a href="14429.php">Richard Walsh: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14430.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Oct 8, 2010 at 8:27 PM, Richard Walsh
<br>
&lt;Richard.Walsh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Regarding building HD5 ... the OpenMPI 1.4.1 wrapper using the May 2010
</span><br>
<span class="quotelev1">&gt; release of the Intel Compiler Toolkit Cluster Edition (ICTCE) worked for me.
</span><br>
<span class="quotelev1">&gt; Here is my config.log header:
</span><br>
<span class="quotelev1">&gt; &#160;$ ./configure CC=mpicc CXX=mpiCC F77=mpif77 FC=mpif90 --enable-parallel --prefix=/share/apps/hdf5/1.8.4p --with-zlib=/share/apps/zlib/1.2.3/lib --with-szlib=/share/apps/szip/2.1/lib --disable-shared
</span><br>
Hi,
<br>
<p>yes, with static linking it was never a problem to build with the
<br>
Intel compiler. The shared library builds are problematic.
<br>
<p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14435.php">Damien Hocking: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.5 released"</a>
<li><strong>Previous message:</strong> <a href="14433.php">Mikael Lavoie: "[OMPI users] Need a programmer to implement MPI to a research application ($)"</a>
<li><strong>In reply to:</strong> <a href="14429.php">Richard Walsh: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14430.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
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

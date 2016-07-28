<?
$subject_val = "Re: [OMPI users] ipo: warning #11009: file format notrecognized	for /Libraries_intel/openmpi/lib/libmpi.so";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 02:58:28 2009" -->
<!-- isoreceived="20091111075828" -->
<!-- sent="Wed, 11 Nov 2009 09:58:18 +0200" -->
<!-- isosent="20091111075818" -->
<!-- name="vasilis gkanis" -->
<!-- email="gkanis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ipo: warning #11009: file format notrecognized	for /Libraries_intel/openmpi/lib/libmpi.so" -->
<!-- id="200911110958.18429.gkanis_at_ipta.demokritos.gr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20091110173549.GA26365_at_compegg" -->
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
<strong>Subject:</strong> Re: [OMPI users] ipo: warning #11009: file format notrecognized	for /Libraries_intel/openmpi/lib/libmpi.so<br>
<strong>From:</strong> vasilis gkanis (<em>gkanis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 02:58:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11155.php">Glembek Ondřej: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="11153.php">Martin Siegert: "[OMPI users] maximum value for count argument"</a>
<li><strong>In reply to:</strong> <a href="11127.php">Nifty Tom Mitchell: "Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday 10 November 2009 07:35:49 pm Nifty Tom Mitchell wrote:
<br>
<span class="quotelev1">&gt; On Tue, Nov 10, 2009 at 03:44:59PM +0200, vasilis gkanis wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to compile openmpi-1.3.3 with intel Fortran and gcc compiler.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In order to compile openmpi I run configure with the following options:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/Libraries/openmpi FC=ifort --enable-mpi-f90
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OpenMpi compiled just fine, but when I am trying to compile and link my
</span><br>
<span class="quotelev2">&gt; &gt; program against mpi, I get the following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ipo: warning #11009: file format not recognized for
</span><br>
<span class="quotelev2">&gt; &gt; /Libraries_intel/openmpi/lib/libmpi.so
</span><br>
<span class="quotelev2">&gt; &gt; ld: skipping incompatible /Libraries_intel/openmpi/lib/libmpi.so when
</span><br>
<span class="quotelev2">&gt; &gt; searching for -lmpi
</span><br>
<span class="quotelev2">&gt; &gt; ld: cannot find -lmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have updated the LD_LIBRARY_PATH file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anybody know what this error mean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does:
</span><br>
<span class="quotelev1">&gt; 	 file /Libraries_intel/openmpi/lib/libmpi.so
</span><br>
<span class="quotelev1">&gt; tell you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps this is a 32bit .vs. 64bit mismatch?
</span><br>
<p>file libmpi.so
<br>
libmpi.so: symbolic link to `libmpi.so.0.0.0'
<br>
<p>file libmpi.so.0.0.0
<br>
libmpi.so.0.0.0: ELF 64-bit LSB shared object, AMD x86-64, version 1 (SYSV), 
<br>
not stripped
<br>
<p>I have the l_cprof_p_11.1.059_ia32 version.
<br>
<p>Vasilis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11155.php">Glembek Ondřej: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="11153.php">Martin Siegert: "[OMPI users] maximum value for count argument"</a>
<li><strong>In reply to:</strong> <a href="11127.php">Nifty Tom Mitchell: "Re: [OMPI users] ipo: warning #11009: file format not recognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
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

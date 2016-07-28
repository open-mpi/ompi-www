<?
$subject_val = "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 04:42:39 2007" -->
<!-- isoreceived="20071106094239" -->
<!-- sent="Tue, 06 Nov 2007 10:42:28 +0100" -->
<!-- isosent="20071106094228" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler" -->
<!-- id="1194342148.1486.98.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="A40EB9AE-FE61-4110-9220-D362359325A1_at_earth.uni-muenster.de" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-06 04:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4410.php">hpetit_at_[hidden]: "[OMPI users] Re: [OMPI users] MPI_Probe succeeds,  but subsequent MPI_Recv gets stuck"</a>
<li><strong>Previous message:</strong> <a href="4408.php">Michael Schulz: "[OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="4408.php">Michael Schulz: "[OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4417.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="4417.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="4425.php">Michael Schulz: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2007-11-06 at 10:28 +0100, Michael Schulz wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've the same problem described by some other users, that I can't
</span><br>
<span class="quotelev1">&gt; compile anything if I'm using the open-mpi compiled with the Intel- 
</span><br>
<span class="quotelev1">&gt; Compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; ompi_info --all
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenSUSE 10.3
</span><br>
<span class="quotelev1">&gt; Kernel: 2.6.22.9-0.4-default
</span><br>
<span class="quotelev1">&gt; Intel P4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure-Flags: CC=icc, CXX=icpc, F77=ifort, F90=ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Intel-Compiler: both, C and Fortran 10.0.025
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any known solution?
</span><br>
<p>I had the same problem with pathscale.
<br>
Try this, i think it is the solution i found.
<br>
<p>diff -ru site/opal/runtime/opal_init.c
<br>
amd64_ubuntu606-psc/opal/runtime/opal_init.c
<br>
--- site/opal/runtime/opal_init.c       2007-10-20 03:00:35.000000000
<br>
+0200
<br>
+++ amd64_ubuntu606-psc/opal/runtime/opal_init.c        2007-10-23
<br>
16:12:15.000000000 +0200
<br>
@@ -169,7 +169,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* register params for opal */
<br>
-    if (OPAL_SUCCESS !=  opal_register_params()) {
<br>
+    if (OPAL_SUCCESS !=  (ret = opal_register_params())) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;opal_register_params&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto return_error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4410.php">hpetit_at_[hidden]: "[OMPI users] Re: [OMPI users] MPI_Probe succeeds,  but subsequent MPI_Recv gets stuck"</a>
<li><strong>Previous message:</strong> <a href="4408.php">Michael Schulz: "[OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="4408.php">Michael Schulz: "[OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4417.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="4417.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<li><strong>Reply:</strong> <a href="4425.php">Michael Schulz: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
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

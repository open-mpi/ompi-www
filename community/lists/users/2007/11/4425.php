<?
$subject_val = "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 02:54:46 2007" -->
<!-- isoreceived="20071107075446" -->
<!-- sent="Wed, 7 Nov 2007 08:54:44 +0100" -->
<!-- isosent="20071107075444" -->
<!-- name="Michael Schulz" -->
<!-- email="michael_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler" -->
<!-- id="E5BB5AA3-1EDB-4C73-AB89-5478A7160709_at_earth.uni-muenster.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1194342148.1486.98.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>From:</strong> Michael Schulz (<em>michael_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 02:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4426.php">Sharon Melamed: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>Previous message:</strong> <a href="4424.php">Karsten Bolding: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>In reply to:</strong> <a href="4409.php">&#197;ke Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4416.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06.11.2007, at 10:42, &#197;ke Sandgren wrote:
<br>
<p>Hi,
<br>
<p><span class="quotelev1">&gt; On Tue, 2007-11-06 at 10:28 +0100, Michael Schulz wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've the same problem described by some other users, that I can't
</span><br>
<span class="quotelev2">&gt;&gt; compile anything if I'm using the open-mpi compiled with the Intel-
</span><br>
<span class="quotelev2">&gt;&gt; Compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --all
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenSUSE 10.3
</span><br>
<span class="quotelev2">&gt;&gt; Kernel: 2.6.22.9-0.4-default
</span><br>
<span class="quotelev2">&gt;&gt; Intel P4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configure-Flags: CC=icc, CXX=icpc, F77=ifort, F90=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Intel-Compiler: both, C and Fortran 10.0.025
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any known solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had the same problem with pathscale.
</span><br>
<span class="quotelev1">&gt; Try this, i think it is the solution i found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff -ru site/opal/runtime/opal_init.c
</span><br>
<span class="quotelev1">&gt; amd64_ubuntu606-psc/opal/runtime/opal_init.c
</span><br>
<span class="quotelev1">&gt; --- site/opal/runtime/opal_init.c       2007-10-20 03:00:35.000000000
</span><br>
<span class="quotelev1">&gt; +0200
</span><br>
<span class="quotelev1">&gt; +++ amd64_ubuntu606-psc/opal/runtime/opal_init.c        2007-10-23
</span><br>
<span class="quotelev1">&gt; 16:12:15.000000000 +0200
</span><br>
<span class="quotelev1">&gt; @@ -169,7 +169,7 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* register params for opal */
</span><br>
<span class="quotelev1">&gt; -    if (OPAL_SUCCESS !=  opal_register_params()) {
</span><br>
<span class="quotelev1">&gt; +    if (OPAL_SUCCESS !=  (ret = opal_register_params())) {
</span><br>
<span class="quotelev1">&gt;          error = &quot;opal_register_params&quot;;
</span><br>
<span class="quotelev1">&gt;          goto return_error;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<p>thanks, but this doesn't solve my segv Problem.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4426.php">Sharon Melamed: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>Previous message:</strong> <a href="4424.php">Karsten Bolding: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>In reply to:</strong> <a href="4409.php">&#197;ke Sandgren: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4416.php">Jeff Squyres: "Re: [OMPI users] mpicc Segmentation Fault with Intel Compiler"</a>
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

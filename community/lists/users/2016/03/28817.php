<?
$subject_val = "Re: [OMPI users] Problems in compiling a code with dynamic linking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 08:23:37 2016" -->
<!-- isoreceived="20160324122337" -->
<!-- sent="Thu, 24 Mar 2016 08:22:37 -0400" -->
<!-- isosent="20160324122237" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in compiling a code with dynamic linking" -->
<!-- id="56F3DC0D.4020709_at_aol.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56F366AE.2050906_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in compiling a code with dynamic linking<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 08:22:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28818.php">Sebastian Rettenberger: "[OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28816.php">Thomas Jahns: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28815.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28821.php">Gus Correa: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/24/2016 12:01 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Elio,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; usually, /opt is a local filesystem, so it is possible /opt/intel is
</span><br>
<span class="quotelev1">&gt; only available on your login nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your best option is to ask your sysadmin where the mkl libs are on the
</span><br>
<span class="quotelev1">&gt; compute nodes, and/or how to use mkl in your jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; feel free to submit a dumb pbs script
</span><br>
<span class="quotelev1">&gt; ls -l /opt
</span><br>
<span class="quotelev1">&gt; ls -l /opt/intel
</span><br>
<span class="quotelev1">&gt; ls -l /opt/intel/mkl
</span><br>
<span class="quotelev1">&gt; so you can hopefully find that by yourself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; an other option is to use the static mkl libs if they are available
</span><br>
<span class="quotelev1">&gt; for example, your LIB line could be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LIB = -static -L/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64
</span><br>
<span class="quotelev1">&gt; -lmkl_blas95_lp64 -lmkl_lapack95_lp64  -lmkl_intel_lp64 -lmkl_core 
</span><br>
<span class="quotelev1">&gt; -lmkl_sequential -dynamic
</span><br>
<span class="quotelev1">&gt;
</span><br>
No, refer to the on-line advisor at
<br>
<a href="https://software.intel.com/en-us/articles/intel-mkl-link-line-advisor">https://software.intel.com/en-us/articles/intel-mkl-link-line-advisor</a>
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28818.php">Sebastian Rettenberger: "[OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28816.php">Thomas Jahns: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28815.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28821.php">Gus Correa: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
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

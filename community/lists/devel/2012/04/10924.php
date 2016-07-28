<?
$subject_val = "Re: [OMPI devel] How to debug segv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 09:35:21 2012" -->
<!-- isoreceived="20120425133521" -->
<!-- sent="Wed, 25 Apr 2012 09:35:18 -0400" -->
<!-- isosent="20120425133518" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to debug segv" -->
<!-- id="67EE3D1E-5890-4343-AD19-5A73D47C5FDF_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F97FC6D.2030409_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to debug segv<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 09:35:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10925.php">Jeffrey Squyres: "[OMPI devel] Fwd: GNU autoconf 2.69 released [stable]"</a>
<li><strong>Previous message:</strong> <a href="10923.php">Jeffrey Squyres: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>In reply to:</strong> <a href="10922.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10931.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10931.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex,
<br>
<p>You got the banner of the FT benchmark, so I guess at least the rank 0 successfully completed the MPI_Init call. This is a hint that you should investigate more into the point-to-point logic of your mosix BTL.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Apr 25, 2012, at 09:30 , Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; NAS Parallel Benchmarks 3.3 -- FT Benchmark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No input file inputft.data. Using compiled defaults
</span><br>
<span class="quotelev1">&gt; Size                :   64x  64x  64
</span><br>
<span class="quotelev1">&gt; Iterations          :              6
</span><br>
<span class="quotelev1">&gt; Number of processes :              4
</span><br>
<span class="quotelev1">&gt; Processor array     :         1x   4
</span><br>
<span class="quotelev1">&gt; Layout type         :             1D
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10925.php">Jeffrey Squyres: "[OMPI devel] Fwd: GNU autoconf 2.69 released [stable]"</a>
<li><strong>Previous message:</strong> <a href="10923.php">Jeffrey Squyres: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>In reply to:</strong> <a href="10922.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10931.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10931.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
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

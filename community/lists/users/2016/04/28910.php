<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  8 10:09:22 2016" -->
<!-- isoreceived="20160408140922" -->
<!-- sent="Fri, 08 Apr 2016 15:09:20 +0100" -->
<!-- isosent="20160408140920" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="87bn5kw5tb.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkVqa7MOKNjytQp76jACOBASWBJOZ0AdVFeBH-8-FW4h9Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] resolution of MPI_Wtime<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-08 10:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28911.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28909.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28908.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28911.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28911.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; Other implementations of MPI have very accurate counters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This might be a discutable topic. A quick survey of some of the MPI
</span><br>
<span class="quotelev1">&gt; libraries available on a Linux cluster give the following precision for
</span><br>
<span class="quotelev1">&gt; MPI_Wtime implementation :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpich-3.1.4: wtick = 1.000000e-06
</span><br>
<span class="quotelev1">&gt; Intel(R) MPI Library 5.1.1 for Linux*: wtick = 1.000000e-06
</span><br>
<span class="quotelev1">&gt; ompi-1.10.2: wtick = 1.000000e-06
</span><br>
<span class="quotelev1">&gt; ompi-master: wtick = 1.000000e-09
</span><br>
<p>Can you trust wtick anyhow?  OMPI 1.10 says it's always 10&#226;&#129;&#187;&#226;&#129;&#182;, which
<br>
isn't necessarily realistic even if it uses gettimeofday with a nominal
<br>
1&#206;&#188;s resolution.  At least with some (older?) Linuxes, and possibly other
<br>
kernels, gettimeofday is limited to the kernel tick rate -- a few 100 Hz
<br>
if I recall correctly.  I'd need convincing about 1ns generally for the
<br>
real time clock too.
<br>
<p>Anyhow, experimentally, RHEL6-packaged mpich 3.1's wtime calls
<br>
gettimeofday and not clock_gettime; likewise impi 4.1.
<br>
<p>Thanks for fixing ompi, by the way.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28911.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28909.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-3793-g896f857 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28908.php">George Bosilca: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28911.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28911.php">Gilles Gouaillardet: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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

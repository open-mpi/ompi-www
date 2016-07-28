<?
$subject_val = "Re: [OMPI users] parallelising ADI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 16:24:22 2012" -->
<!-- isoreceived="20120306212422" -->
<!-- sent="Tue, 6 Mar 2012 16:24:18 -0500" -->
<!-- isosent="20120306212418" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallelising ADI" -->
<!-- id="47581182-81CF-43C5-9581-1CB7605AFD60_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="04649ABFF695C94F8E6CF3BBBA9B16650F327035_at_BHEXMBX1.livad.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] parallelising ADI<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 16:24:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18704.php">Eugene Loh: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Previous message:</strong> <a href="18702.php">Kharche, Sanjay: "[OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="18702.php">Kharche, Sanjay: "[OMPI users] parallelising ADI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18704.php">Eugene Loh: "Re: [OMPI users] parallelising ADI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 6, 2012, at 3:59 PM, Kharche, Sanjay wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working on a 3D ADI solver for the heat equation. I have implemented it as serial. Would anybody be able to indicate the best and more straightforward way to parallelise it. Apologies if this is going to the wrong forum.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Sanjay
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi Sanjay
<br>
<p>There is an implementation of the 2D diffusion equation solver using MPI here:
<br>
<p><a href="http://beige.ucs.indiana.edu/I590/node71.html">http://beige.ucs.indiana.edu/I590/node71.html</a>
<br>
<a href="http://beige.ucs.indiana.edu/I590/node72.html">http://beige.ucs.indiana.edu/I590/node72.html</a> 
<br>
<p>Not ADI, but it may shed some light.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18704.php">Eugene Loh: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Previous message:</strong> <a href="18702.php">Kharche, Sanjay: "[OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="18702.php">Kharche, Sanjay: "[OMPI users] parallelising ADI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18704.php">Eugene Loh: "Re: [OMPI users] parallelising ADI"</a>
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

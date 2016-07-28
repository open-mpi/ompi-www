<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 11:40:18 2012" -->
<!-- isoreceived="20121026154018" -->
<!-- sent="Fri, 26 Oct 2012 15:39:55 +0000" -->
<!-- isosent="20121026153955" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD239D764A_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D42E2890-B9CF-49CA-85C2-3206DC748B3D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-26 11:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11656.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11654.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11640.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/25/12 10:55 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Something that might not be clear from my initial writeup:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. I had to go change C code to disable libnbc.  Since non-blocking
</span><br>
<span class="quotelev1">&gt;collectives are part of MPI-3:
</span><br>
<span class="quotelev1">&gt;   a) we have no convenient configure argument to not build the libnbc
</span><br>
<span class="quotelev1">&gt;coll component (there is a way, but it's laborious), and
</span><br>
<span class="quotelev1">&gt;   b) even if we did, OMPI's coll selection will fail at run time because
</span><br>
<span class="quotelev1">&gt;it didn't find modules for the non-blocking collective operations.
</span><br>
<p>With r27498, the progress function in libnbc is only registered when the
<br>
first non-blocking collective is performed.  It will be unregistered
<br>
whenever there are no longer any live communicators which have
<br>
participated in a non-blocking collective.  Does this help with your
<br>
benchmarking?
<br>
<p>At some point, we really need to move from a progress function to using
<br>
the progress provided by the completion callbacks available for point to
<br>
point requests.  But it's unlikely I'll have time to do that, particularly
<br>
given how long its taken me to get the onesided stuff going.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11656.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11654.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11640.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
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

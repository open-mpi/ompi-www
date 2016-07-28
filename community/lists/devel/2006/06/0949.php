<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 12:17:07 2006" -->
<!-- isoreceived="20060628161707" -->
<!-- sent="Wed, 28 Jun 2006 12:17:00 -0400" -->
<!-- isosent="20060628161700" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Best bw/lat performance for microbenchmark/debugutility" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9766_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Best bw/lat performance for microbenchmark/debugutility" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 12:17:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0950.php">Patrick Geoffray: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Previous message:</strong> <a href="0948.php">Josh Aune: "[OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Most of the microbenchmarks that I've seen used send/receive because it
<br>
allows the MPI to optimize if it can (e.g., blocking to allow the
<br>
OS/hardware to make progress).  If nothing else, it prevents an
<br>
additional traversal of the call stack (MPI_SEND will be done when it
<br>
returns; with MPI_ISEND, you have to traverse the call stack a second
<br>
time with MPI_WAIT.  This may or may not be inconsequential)
<br>
<p>But that being said, these are fantastically complicated issues :-).
<br>
Since these are so similar from a user API perspective, it may be
<br>
worthwhile to implement them both and allow switching between them
<br>
(perhaps at run-time) to see if there is a noticeable difference.  
<br>
<p>I'd strongly encourage looking at other microbenchmarks out there
<br>
(netpipe, netperf, presta, the IMB, etc.) to see what they have done,
<br>
not just in terms of SEND vs. ISEND, but also in terms of benchmarking
<br>
techniques.  Microbenchmarks are tricky to get &quot;just right.&quot;
<br>
<p>Are you trying to make a suite that encompasses a bunch of performance
<br>
numbers that are not encompassed by other, existing microbenchmarks?
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Josh Aune
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 28, 2006 12:43 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Best bw/lat performance for 
</span><br>
<span class="quotelev1">&gt; microbenchmark/debugutility
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am writing up some interconnect/network debugging software that is
</span><br>
<span class="quotelev1">&gt; centered around ompi.  What is the best set of functions to use to get
</span><br>
<span class="quotelev1">&gt; the best bandwidth and latency numbers for openmpi and why?  I've been
</span><br>
<span class="quotelev1">&gt; asking around at work and some people say just send/recieve, though
</span><br>
<span class="quotelev1">&gt; some of the micro benchmarks I have looked at in the past used
</span><br>
<span class="quotelev1">&gt; isend/irecv.  Can someone shed some light on this (or propose more
</span><br>
<span class="quotelev1">&gt; methods)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; josh
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0950.php">Patrick Geoffray: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Previous message:</strong> <a href="0948.php">Josh Aune: "[OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
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

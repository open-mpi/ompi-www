<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 13:10:38 2006" -->
<!-- isoreceived="20060629171038" -->
<!-- sent="Thu, 29 Jun 2006 13:10:39 -0400" -->
<!-- isosent="20060629171039" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9C34_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Best bw/lat performance for microbenchmark/debug utility" -->
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
<strong>Date:</strong> 2006-06-29 13:10:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0952.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>Previous message:</strong> <a href="0950.php">Patrick Geoffray: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Maybe in reply to:</strong> <a href="0948.php">Josh Aune: "[OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0955.php">Patrick Geoffray: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Reply:</strong> <a href="0955.php">Patrick Geoffray: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Patrick Geoffray
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 28, 2006 1:23 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Best bw/lat performance for 
</span><br>
<span class="quotelev1">&gt; microbenchmark/debug utility
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh Aune wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I am writing up some interconnect/network debugging software that is
</span><br>
<span class="quotelev2">&gt; &gt; centered around ompi.  What is the best set of functions to 
</span><br>
<span class="quotelev1">&gt; use to get
</span><br>
<span class="quotelev2">&gt; &gt; the best bandwidth and latency numbers for openmpi and why? 
</span><br>
<span class="quotelev1">&gt;  I've been
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You mean MPI functions or internal ompi functions ? For MPI 
</span><br>
<span class="quotelev1">&gt; functions, 
</span><br>
<span class="quotelev1">&gt; it depends of what you are looking for. Send/recv is fine but it does 
</span><br>
<span class="quotelev1">&gt; not show the overlap capability. You would need to do 
</span><br>
<span class="quotelev1">&gt; something smarter 
</span><br>
<span class="quotelev1">&gt; with Isend/Irecv/Wait for that (Sandia has a nice bench that 
</span><br>
<span class="quotelev1">&gt; they should 
</span><br>
<span class="quotelev1">&gt; release soon). You may also want to measure the penalty for 
</span><br>
<span class="quotelev1">&gt; unexpected 
</span><br>
<span class="quotelev1">&gt; messages, the host CPU overhead and the ability to progress.
</span><br>
<p>Patrick's answer is much better than mine.  :-)
<br>
<p>I was assuming that you would be testing latency/bandwidth, but Patrick
<br>
is correct in stating that there are many more things to test than just
<br>
those two metrics.
<br>
&nbsp;
<br>
<pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0952.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>Previous message:</strong> <a href="0950.php">Patrick Geoffray: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Maybe in reply to:</strong> <a href="0948.php">Josh Aune: "[OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0955.php">Patrick Geoffray: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Reply:</strong> <a href="0955.php">Patrick Geoffray: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
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

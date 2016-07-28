<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 19:35:26 2006" -->
<!-- isoreceived="20060629233526" -->
<!-- sent="Thu, 29 Jun 2006 19:35:00 -0400" -->
<!-- isosent="20060629233500" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility" -->
<!-- id="44A463A4.7000509_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9C34_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 19:35:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0956.php">amrita mathuria: "[OMPI devel] help - urgent"</a>
<li><strong>Previous message:</strong> <a href="0954.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>In reply to:</strong> <a href="0951.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/07/0970.php">Josh Aune: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/07/0970.php">Josh Aune: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Patrick Geoffray
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 28, 2006 1:23 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Best bw/lat performance for 
</span><br>
<span class="quotelev2">&gt;&gt; microbenchmark/debug utility
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh Aune wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am writing up some interconnect/network debugging software that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; centered around ompi.  What is the best set of functions to 
</span><br>
<p><span class="quotelev1">&gt; I was assuming that you would be testing latency/bandwidth, but Patrick
</span><br>
<span class="quotelev1">&gt; is correct in stating that there are many more things to test than just
</span><br>
<span class="quotelev1">&gt; those two metrics.
</span><br>
<p>There are a lot of metrics, but most of them require deep understanding 
<br>
of the MPI semantics and implementation details to make sense. The art 
<br>
of micro-benchmark is to choose the metrics and explain why they matter. 
<br>
It's obvious for latency/bandwidth, a bit less for unexpected and host 
<br>
overhead, definitively hard for overlap and progress. And that's just 
<br>
for point-to-point.
<br>
<p>To avoid reinventing the wheel, I would suggest to Josh to develop a 
<br>
micro-benchmark test suite to compute a very detailed LogP-derived 
<br>
parameters, ie for all message sizes:
<br>
* send overhead (o.s) and recv overhead (o.r). These overheads will 
<br>
likely be either constant or linear for various message size ranges, it 
<br>
would be great to automatically compute the ranges.
<br>
Memory registration cost is accounted here, so it would useful to 
<br>
measure with and without registration cache also.
<br>
* Latency (L).
<br>
* Send gap (g.s) and recv gap (g.r). For large messages, they will 
<br>
likely be identical and represent the link bandwidth. For smaller 
<br>
messages, the send gap is the gap of a fan-out pattern (1-&gt;N) and the 
<br>
recv gap is the gap of a flat gather (N-&gt;1). It's important to not have 
<br>
the send or recv overhead hiding the send or recv gap, using several 
<br>
processes could be used to dive the send/recv overhead.
<br>
* unexpected overhead (o.u). Overhead added to (o.r) when the message is 
<br>
not immediately matched.
<br>
* overlap availability (a) that is the percentage of communication time 
<br>
that you can overlap with real host computation.
<br>
<p>&nbsp;From these parameters, you can derive pretty much all characteristics 
<br>
of an interconnect without contention.
<br>
<p>Patrick
<br>
<pre>
-- 
Patrick Geoffray
Myricom, Inc.
<a href="http://www.myri.com">http://www.myri.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0956.php">amrita mathuria: "[OMPI devel] help - urgent"</a>
<li><strong>Previous message:</strong> <a href="0954.php">Galen M. Shipman: "Re: [OMPI devel] [Fwd: [OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband]"</a>
<li><strong>In reply to:</strong> <a href="0951.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/07/0970.php">Josh Aune: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/07/0970.php">Josh Aune: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
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

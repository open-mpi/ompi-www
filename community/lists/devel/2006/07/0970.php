<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 13 23:11:11 2006" -->
<!-- isoreceived="20060714031111" -->
<!-- sent="Thu, 13 Jul 2006 21:11:05 -0600" -->
<!-- isosent="20060714031105" -->
<!-- name="Josh Aune" -->
<!-- email="ladros_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility" -->
<!-- id="98a233180607132011k3c267f17k55855b59d636d609_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44A463A4.7000509_at_myri.com" -->
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
<strong>From:</strong> Josh Aune (<em>ladros_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-13 23:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0971.php">Adrian Knoth: "[OMPI devel] Building ompi occasionally touches the source files"</a>
<li><strong>Previous message:</strong> <a href="0969.php">George Bosilca: "[OMPI devel] Forever running mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0955.php">Patrick Geoffray: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/29/06, Patrick Geoffray &lt;patrick_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: devel-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Patrick Geoffray
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Wednesday, June 28, 2006 1:23 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI devel] Best bw/lat performance for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; microbenchmark/debug utility
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Josh Aune wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am writing up some interconnect/network debugging software that is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; centered around ompi.  What is the best set of functions to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was assuming that you would be testing latency/bandwidth, but Patrick
</span><br>
<span class="quotelev2">&gt; &gt; is correct in stating that there are many more things to test than just
</span><br>
<span class="quotelev2">&gt; &gt; those two metrics.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are a lot of metrics, but most of them require deep understanding
</span><br>
<span class="quotelev1">&gt; of the MPI semantics and implementation details to make sense. The art
</span><br>
<span class="quotelev1">&gt; of micro-benchmark is to choose the metrics and explain why they matter.
</span><br>
<span class="quotelev1">&gt; It's obvious for latency/bandwidth, a bit less for unexpected and host
</span><br>
<span class="quotelev1">&gt; overhead, definitively hard for overlap and progress. And that's just
</span><br>
<span class="quotelev1">&gt; for point-to-point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To avoid reinventing the wheel, I would suggest to Josh to develop a
</span><br>
<span class="quotelev1">&gt; micro-benchmark test suite to compute a very detailed LogP-derived
</span><br>
<span class="quotelev1">&gt; parameters, ie for all message sizes:
</span><br>
<span class="quotelev1">&gt; * send overhead (o.s) and recv overhead (o.r). These overheads will
</span><br>
<span class="quotelev1">&gt; likely be either constant or linear for various message size ranges, it
</span><br>
<span class="quotelev1">&gt; would be great to automatically compute the ranges.
</span><br>
<span class="quotelev1">&gt; Memory registration cost is accounted here, so it would useful to
</span><br>
<span class="quotelev1">&gt; measure with and without registration cache also.
</span><br>
<span class="quotelev1">&gt; * Latency (L).
</span><br>
<span class="quotelev1">&gt; * Send gap (g.s) and recv gap (g.r). For large messages, they will
</span><br>
<span class="quotelev1">&gt; likely be identical and represent the link bandwidth. For smaller
</span><br>
<span class="quotelev1">&gt; messages, the send gap is the gap of a fan-out pattern (1-&gt;N) and the
</span><br>
<span class="quotelev1">&gt; recv gap is the gap of a flat gather (N-&gt;1). It's important to not have
</span><br>
<span class="quotelev1">&gt; the send or recv overhead hiding the send or recv gap, using several
</span><br>
<span class="quotelev1">&gt; processes could be used to dive the send/recv overhead.
</span><br>
<span class="quotelev1">&gt; * unexpected overhead (o.u). Overhead added to (o.r) when the message is
</span><br>
<span class="quotelev1">&gt; not immediately matched.
</span><br>
<span class="quotelev1">&gt; * overlap availability (a) that is the percentage of communication time
</span><br>
<span class="quotelev1">&gt; that you can overlap with real host computation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From these parameters, you can derive pretty much all characteristics
</span><br>
<span class="quotelev1">&gt; of an interconnect without contention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<p>Sorry for the long delay in replying.  Thanks for the info.  What I am
<br>
trying to do is create a set of standardized easy to use system level
<br>
debugging utilites (and force myself to learn more MPI :).  Currently
<br>
I am shooting for latency/bandwidth but would welcome ideas for
<br>
further useful node level tests.  I am not just testing the
<br>
interconnect, but need to verify memory bandwidth, pci bandwidth to
<br>
the interconnect card (I love -mca btl ^sm :), processor
<br>
functionality, system errors (currently only parity and pci-express
<br>
fatal/nonfatal/etc) and what not.
<br>
<p>I want to have tests that are easy enough to run all you have to do is
<br>
'mpirun -np $ALL ./footest' and it comes back with any nodes that look
<br>
bad for that test as well as some general data about the cluster's
<br>
performance.
<br>
<p>I want to get the suite out to the comunity after I have some seed
<br>
tests written and hope that there will be enough that others will be
<br>
interested in contributing, though I am waiting for release approval
<br>
from work at the moment, which may not happen :(
<br>
<p>Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0971.php">Adrian Knoth: "[OMPI devel] Building ompi occasionally touches the source files"</a>
<li><strong>Previous message:</strong> <a href="0969.php">George Bosilca: "[OMPI devel] Forever running mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0955.php">Patrick Geoffray: "Re: [OMPI devel] Best bw/lat performance for microbenchmark/debug utility"</a>
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

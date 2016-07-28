<?
$subject_val = "Re: [OMPI users] Highly variable performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 10:38:55 2010" -->
<!-- isoreceived="20100715143855" -->
<!-- sent="Thu, 15 Jul 2010 16:40:52 +0200" -->
<!-- isosent="20100715144052" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Highly variable performance" -->
<!-- id="87fwzkn6yz.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9755A6C7-D628-4874-A439-8EC70332E247_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Highly variable performance<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 10:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13658.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13656.php">Edgar Gabriel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="13651.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13661.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Reply:</strong> <a href="13661.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 15 Jul 2010 09:36:18 -0400, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Per my other disclaimer, I'm trolling through my disastrous inbox and
</span><br>
<span class="quotelev1">&gt; finding some orphaned / never-answered emails.  Sorry for the delay!
</span><br>
<p>No problem, I should have followed up on this with further explanation.
<br>
<p><span class="quotelev1">&gt; Just to be clear -- you're running 8 procs locally on an 8 core node,
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<p>These are actually 4-socket quad-core nodes, so there are 16 cores
<br>
available, but we are only running on 8, -npersocket 2 -bind-to-socket.
<br>
This was a greatly simplified case, but is still sufficient to show the
<br>
variability.  It tends to be somewhat worse if we use all cores of a
<br>
node.
<br>
<p>&nbsp;&nbsp;(Cisco is an Intel partner -- I don't follow the AMD line
<br>
<span class="quotelev1">&gt; much) So this should all be local communication with no external
</span><br>
<span class="quotelev1">&gt; network involved, right?
</span><br>
<p>Yes, this was the greatly simplified case, contained entirely within a 
<br>
<p><span class="quotelev2">&gt; &gt; lsf.o240562 killed       8*a6200
</span><br>
<span class="quotelev2">&gt; &gt; lsf.o240563 9.2110e+01   8*a6200
</span><br>
<span class="quotelev2">&gt; &gt; lsf.o240564 1.5638e+01   8*a6237
</span><br>
<span class="quotelev2">&gt; &gt; lsf.o240565 1.3873e+01   8*a6228
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I reading that right that it's 92 seconds vs. 13 seconds?  Woof!
</span><br>
<p>Yes, an the &quot;killed&quot; means it wasn't done after 120 seconds.  This
<br>
factor of 10 is about the worst we see, but of course very surprising.
<br>
<p><span class="quotelev1">&gt; Nice and consistent, as you mentioned.  And I assume your notation
</span><br>
<span class="quotelev1">&gt; here means that it's across 2 nodes.
</span><br>
<p>Yes, the Quadrics nodes are 2-socket dual core, so 8 procs needs two
<br>
nodes.
<br>
<p>The rest of your observations are consistent with my understanding.  We
<br>
identified two other issues, neither of which accounts for a factor of
<br>
10, but which account for at least a factor of 3.
<br>
<p>1. The administrators mounted a 16 GB ramdisk on /scratch, but did not
<br>
&nbsp;&nbsp;&nbsp;ensure that it was wiped before the next task ran.  So if you got a
<br>
&nbsp;&nbsp;&nbsp;node after some job that left stinky feces there, you could
<br>
&nbsp;&nbsp;&nbsp;effectively only have 16 GB (before the old stuff would be swapped
<br>
&nbsp;&nbsp;&nbsp;out).  More importantly, the physical pages backing the ramdisk may
<br>
&nbsp;&nbsp;&nbsp;not be uniformly distributed across the sockets, and rather than
<br>
&nbsp;&nbsp;&nbsp;preemptively swap out those old ramdisk pages, the kernel would find
<br>
&nbsp;&nbsp;&nbsp;a page on some other socket (instead of locally, this could be
<br>
&nbsp;&nbsp;&nbsp;confirmed, for example, by watching the numa_foreign and numa_miss
<br>
&nbsp;&nbsp;&nbsp;counts with numastat).  Then when you went to use that memory
<br>
&nbsp;&nbsp;&nbsp;(typically in a bandwidth-limited application), it was easy to have 3
<br>
&nbsp;&nbsp;&nbsp;sockets all waiting on one bus, thus taking a factor of 3+
<br>
&nbsp;&nbsp;&nbsp;performance hit despite a resident set much less than 50% of the
<br>
&nbsp;&nbsp;&nbsp;available memory.  I have a rather complete analysis of this in case
<br>
&nbsp;&nbsp;&nbsp;someone is interested.  Note that this can affect programs with
<br>
&nbsp;&nbsp;&nbsp;static or dynamic allocation (the kernel looks for local pages when
<br>
&nbsp;&nbsp;&nbsp;you fault it, not when you allocate it), the only way I know of to
<br>
&nbsp;&nbsp;&nbsp;circumvent the problem is to allocate memory with libnuma
<br>
&nbsp;&nbsp;&nbsp;(e.g. numa_alloc_local) which will fail if local memory isn't
<br>
&nbsp;&nbsp;&nbsp;available (instead of returning and subsequently faulting remote
<br>
&nbsp;&nbsp;&nbsp;pages).
<br>
<p>2. The memory bandwidth is 16-18% different between sockets, with
<br>
&nbsp;&nbsp;&nbsp;sockets 0,3 being slow and sockets 1,2 having much faster available
<br>
&nbsp;&nbsp;&nbsp;bandwidth.  This is fully reproducible and acknowledged by
<br>
&nbsp;&nbsp;&nbsp;Sun/Oracle, their response to an early inquiry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://59A2.org/files/SunBladeX6440STREAM-20100616.pdf">http://59A2.org/files/SunBladeX6440STREAM-20100616.pdf</a>
<br>
<p>&nbsp;&nbsp;&nbsp;I am not completely happy with this explanation because the issue
<br>
&nbsp;&nbsp;&nbsp;persists even with full software prefetch, packed SSE2, and
<br>
&nbsp;&nbsp;&nbsp;non-temporal stores; as long as the working set does not fit within
<br>
&nbsp;&nbsp;&nbsp;(per-socket) L3.  Note that the software prefetch allows for several
<br>
&nbsp;&nbsp;&nbsp;hundred cycles of latency, so the extra hop for snooping shouldn't be
<br>
&nbsp;&nbsp;&nbsp;a problem.  If the working set fits within L3, then all sockets are
<br>
&nbsp;&nbsp;&nbsp;the same speed (and of course much faster due to improved bandwidth).
<br>
&nbsp;&nbsp;&nbsp;Some disassembly here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://gist.github.com/476942">http://gist.github.com/476942</a>
<br>
<p>&nbsp;&nbsp;&nbsp;The three with prefetch and movntpd run within 2% of each other, the
<br>
&nbsp;&nbsp;&nbsp;other is much faster within cache and much slower when it breaks out
<br>
&nbsp;&nbsp;&nbsp;of cache (obviously).  The performance numbers are higher than with
<br>
&nbsp;&nbsp;&nbsp;the reference implementation (quoted in Sun/Oracle's repsonse), but
<br>
&nbsp;&nbsp;&nbsp;(run with taskset to each of the four sockets):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Triad:       5842.5814       0.0329       0.0329       0.0330
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Triad:       6843.4206       0.0281       0.0281       0.0282
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Triad:       6827.6390       0.0282       0.0281       0.0283
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Triad:       5862.0601       0.0329       0.0328       0.0331
<br>
<p>&nbsp;&nbsp;&nbsp;This is almost exclusively due to the prefetching, the packed
<br>
&nbsp;&nbsp;&nbsp;arithmetic is almost completely inconsequential when waiting on
<br>
&nbsp;&nbsp;&nbsp;memory bandwidth.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13658.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13656.php">Edgar Gabriel: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="13651.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13661.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Reply:</strong> <a href="13661.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
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

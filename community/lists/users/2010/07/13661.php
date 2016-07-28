<?
$subject_val = "Re: [OMPI users] Highly variable performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 13:03:06 2010" -->
<!-- isoreceived="20100715170306" -->
<!-- sent="Thu, 15 Jul 2010 13:03:31 -0400" -->
<!-- isosent="20100715170331" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Highly variable performance" -->
<!-- id="D09B321C-8022-4CD5-9352-A05803410CCC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87fwzkn6yz.fsf_at_59A2.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 13:03:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13662.php">Eugene Loh: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>Previous message:</strong> <a href="13660.php">Don Kerr: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>In reply to:</strong> <a href="13657.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13663.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Reply:</strong> <a href="13663.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Given the oversubscription on the existing HT links, could contention account for the difference?  (I have no idea how HT's contention management works)  Meaning: if the stars line up in a given run, you could end up with very little/no contention and you get good bandwidth.  But if there's a bit of jitter, you could end up with quite a bit of contention that ends up cascading into a bunch of additional delay.
<br>
<p>I fail to see how that could add up to 70-80 (or more) seconds of difference -- 13 secs vs. 90+ seconds (and more), though...  70-80 seconds sounds like an IO delay -- perhaps paging due to the ramdisk or somesuch...?  That's a SWAG.
<br>
<p><p><p>On Jul 15, 2010, at 10:40 AM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 15 Jul 2010 09:36:18 -0400, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Per my other disclaimer, I'm trolling through my disastrous inbox and
</span><br>
<span class="quotelev2">&gt; &gt; finding some orphaned / never-answered emails.  Sorry for the delay!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No problem, I should have followed up on this with further explanation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Just to be clear -- you're running 8 procs locally on an 8 core node,
</span><br>
<span class="quotelev2">&gt; &gt; right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are actually 4-socket quad-core nodes, so there are 16 cores
</span><br>
<span class="quotelev1">&gt; available, but we are only running on 8, -npersocket 2 -bind-to-socket.
</span><br>
<span class="quotelev1">&gt; This was a greatly simplified case, but is still sufficient to show the
</span><br>
<span class="quotelev1">&gt; variability.  It tends to be somewhat worse if we use all cores of a
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   (Cisco is an Intel partner -- I don't follow the AMD line
</span><br>
<span class="quotelev2">&gt; &gt; much) So this should all be local communication with no external
</span><br>
<span class="quotelev2">&gt; &gt; network involved, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, this was the greatly simplified case, contained entirely within a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lsf.o240562 killed       8*a6200
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lsf.o240563 9.2110e+01   8*a6200
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lsf.o240564 1.5638e+01   8*a6237
</span><br>
<span class="quotelev3">&gt; &gt; &gt; lsf.o240565 1.3873e+01   8*a6228
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am I reading that right that it's 92 seconds vs. 13 seconds?  Woof!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, an the &quot;killed&quot; means it wasn't done after 120 seconds.  This
</span><br>
<span class="quotelev1">&gt; factor of 10 is about the worst we see, but of course very surprising.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Nice and consistent, as you mentioned.  And I assume your notation
</span><br>
<span class="quotelev2">&gt; &gt; here means that it's across 2 nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, the Quadrics nodes are 2-socket dual core, so 8 procs needs two
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The rest of your observations are consistent with my understanding.  We
</span><br>
<span class="quotelev1">&gt; identified two other issues, neither of which accounts for a factor of
</span><br>
<span class="quotelev1">&gt; 10, but which account for at least a factor of 3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. The administrators mounted a 16 GB ramdisk on /scratch, but did not
</span><br>
<span class="quotelev1">&gt;    ensure that it was wiped before the next task ran.  So if you got a
</span><br>
<span class="quotelev1">&gt;    node after some job that left stinky feces there, you could
</span><br>
<span class="quotelev1">&gt;    effectively only have 16 GB (before the old stuff would be swapped
</span><br>
<span class="quotelev1">&gt;    out).  More importantly, the physical pages backing the ramdisk may
</span><br>
<span class="quotelev1">&gt;    not be uniformly distributed across the sockets, and rather than
</span><br>
<span class="quotelev1">&gt;    preemptively swap out those old ramdisk pages, the kernel would find
</span><br>
<span class="quotelev1">&gt;    a page on some other socket (instead of locally, this could be
</span><br>
<span class="quotelev1">&gt;    confirmed, for example, by watching the numa_foreign and numa_miss
</span><br>
<span class="quotelev1">&gt;    counts with numastat).  Then when you went to use that memory
</span><br>
<span class="quotelev1">&gt;    (typically in a bandwidth-limited application), it was easy to have 3
</span><br>
<span class="quotelev1">&gt;    sockets all waiting on one bus, thus taking a factor of 3+
</span><br>
<span class="quotelev1">&gt;    performance hit despite a resident set much less than 50% of the
</span><br>
<span class="quotelev1">&gt;    available memory.  I have a rather complete analysis of this in case
</span><br>
<span class="quotelev1">&gt;    someone is interested.  Note that this can affect programs with
</span><br>
<span class="quotelev1">&gt;    static or dynamic allocation (the kernel looks for local pages when
</span><br>
<span class="quotelev1">&gt;    you fault it, not when you allocate it), the only way I know of to
</span><br>
<span class="quotelev1">&gt;    circumvent the problem is to allocate memory with libnuma
</span><br>
<span class="quotelev1">&gt;    (e.g. numa_alloc_local) which will fail if local memory isn't
</span><br>
<span class="quotelev1">&gt;    available (instead of returning and subsequently faulting remote
</span><br>
<span class="quotelev1">&gt;    pages).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. The memory bandwidth is 16-18% different between sockets, with
</span><br>
<span class="quotelev1">&gt;    sockets 0,3 being slow and sockets 1,2 having much faster available
</span><br>
<span class="quotelev1">&gt;    bandwidth.  This is fully reproducible and acknowledged by
</span><br>
<span class="quotelev1">&gt;    Sun/Oracle, their response to an early inquiry:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://59A2.org/files/SunBladeX6440STREAM-20100616.pdf">http://59A2.org/files/SunBladeX6440STREAM-20100616.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I am not completely happy with this explanation because the issue
</span><br>
<span class="quotelev1">&gt;    persists even with full software prefetch, packed SSE2, and
</span><br>
<span class="quotelev1">&gt;    non-temporal stores; as long as the working set does not fit within
</span><br>
<span class="quotelev1">&gt;    (per-socket) L3.  Note that the software prefetch allows for several
</span><br>
<span class="quotelev1">&gt;    hundred cycles of latency, so the extra hop for snooping shouldn't be
</span><br>
<span class="quotelev1">&gt;    a problem.  If the working set fits within L3, then all sockets are
</span><br>
<span class="quotelev1">&gt;    the same speed (and of course much faster due to improved bandwidth).
</span><br>
<span class="quotelev1">&gt;    Some disassembly here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://gist.github.com/476942">http://gist.github.com/476942</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The three with prefetch and movntpd run within 2% of each other, the
</span><br>
<span class="quotelev1">&gt;    other is much faster within cache and much slower when it breaks out
</span><br>
<span class="quotelev1">&gt;    of cache (obviously).  The performance numbers are higher than with
</span><br>
<span class="quotelev1">&gt;    the reference implementation (quoted in Sun/Oracle's repsonse), but
</span><br>
<span class="quotelev1">&gt;    (run with taskset to each of the four sockets):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Triad:       5842.5814       0.0329       0.0329       0.0330
</span><br>
<span class="quotelev1">&gt;      Triad:       6843.4206       0.0281       0.0281       0.0282
</span><br>
<span class="quotelev1">&gt;      Triad:       6827.6390       0.0282       0.0281       0.0283
</span><br>
<span class="quotelev1">&gt;      Triad:       5862.0601       0.0329       0.0328       0.0331
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This is almost exclusively due to the prefetching, the packed
</span><br>
<span class="quotelev1">&gt;    arithmetic is almost completely inconsequential when waiting on
</span><br>
<span class="quotelev1">&gt;    memory bandwidth.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13662.php">Eugene Loh: "Re: [OMPI users] OpenMPI flags conditions"</a>
<li><strong>Previous message:</strong> <a href="13660.php">Don Kerr: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>In reply to:</strong> <a href="13657.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13663.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Reply:</strong> <a href="13663.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
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

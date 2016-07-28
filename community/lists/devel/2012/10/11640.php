<?
$subject_val = "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 12:55:10 2012" -->
<!-- isoreceived="20121025165510" -->
<!-- sent="Thu, 25 Oct 2012 12:55:05 -0400" -->
<!-- isosent="20121025165505" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk" -->
<!-- id="D42E2890-B9CF-49CA-85C2-3206DC748B3D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D58AC913-3B5E-4D21-81C1-575ADDAFDEB7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 12:55:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11641.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Previous message:</strong> <a href="11639.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>In reply to:</strong> <a href="11638.php">Jeff Squyres: "[OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11641.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Reply:</strong> <a href="11641.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Reply:</strong> <a href="11655.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something that might not be clear from my initial writeup:
<br>
<p>1. I had to go change C code to disable libnbc.  Since non-blocking collectives are part of MPI-3:
<br>
&nbsp;&nbsp;&nbsp;a) we have no convenient configure argument to not build the libnbc coll component (there is a way, but it's laborious), and 
<br>
&nbsp;&nbsp;&nbsp;b) even if we did, OMPI's coll selection will fail at run time because it didn't find modules for the non-blocking collective operations.
<br>
<p>2. Hence:
<br>
&nbsp;&nbsp;&nbsp;a) performance is bad, at least partially because of libnbc
<br>
&nbsp;&nbsp;&nbsp;b) there's also some other bad performance oddities in there
<br>
&nbsp;&nbsp;&nbsp;c) but there's some good performance improvements, too, that would be good to bring to v1.7 (and v1.6, if possible)
<br>
<p><p>On Oct 25, 2012, at 12:32 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Attached are the following graphs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. sm NetPipe latencies up to size 150 bytes (run on a Sandy Bride, 2 procs same core)
</span><br>
<span class="quotelev1">&gt; 2. openib NetPipe latencies up to size 150 bytes (run on 2 old Xeons [pre-Nehalem] with old Mellanox ConnectX IB HCAs)
</span><br>
<span class="quotelev1">&gt; 3. Same as #1, but all the way up to 8MB
</span><br>
<span class="quotelev1">&gt; 4. Same as #2, but all the way up to 8MB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also attached a tarball of all my raw net pipe numbers (since the graphs are loglog).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's definite weirdness here.  Here's some observations:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) Trunk openib latency is noticeably better in the mid-range as compared to v1.6 and v1.7.  This is good!  Is this change something that can be brought to v1.6 / v1.7?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b) The addition of the libnbc progress function to the progress loop has a non-zero impact on latency.  It's most noticeable in graphs #1 and #2.  Can something be done to only add the libnbc progress function to the loop only when NBC operations are ongoing?  Right now, the libnbc progress function is *always* added to the progress loop, even if you never use any NBCs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c) There's a noticeable increase in small message latency for the openib BTL in v1.7 as compared to the trunk and v1.6 branches.  I don't know if this is an openib thing, or the result of something else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; d) The trunk (without libnbc) has the best small message sm latency, period -- even better than v1.6.  Yay!  Is this decrease in latency (compared to v1.6) something that can be brought to v1.7?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; &lt;netpipe-sm-latencies-to-128.pdf&gt;&lt;netpipe-openib-latencies-to-128.pdf&gt;&lt;netpipe-sm-latencies.pdf&gt;&lt;netpipe-openib-latencies.pdf&gt;&lt;netpipe-latency-numbers.tar.bz2&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11641.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Previous message:</strong> <a href="11639.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>In reply to:</strong> <a href="11638.php">Jeff Squyres: "[OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11641.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Reply:</strong> <a href="11641.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Reply:</strong> <a href="11655.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
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

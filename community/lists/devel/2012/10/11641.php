<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 13:00:50 2012" -->
<!-- isoreceived="20121025170050" -->
<!-- sent="Thu, 25 Oct 2012 17:00:05 +0000" -->
<!-- isosent="20121025170005" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD239D708E_at_EXMB01.srn.sandia.gov" -->
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
<strong>Date:</strong> 2012-10-25 13:00:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11642.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Previous message:</strong> <a href="11640.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>In reply to:</strong> <a href="11640.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11642.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Reply:</strong> <a href="11642.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your first e-mail got eaten by our virus scanner (it doesn't like .bz2
<br>
files), but we could probably only register the libnbc progress function
<br>
on first use, but it would slightly slow down all non blocking
<br>
collectives.  Probably worth it, but not sure I'll have time to add that
<br>
code today.
<br>
<p>Brian
<br>
<p>On 10/25/12 10:55 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. Hence:
</span><br>
<span class="quotelev1">&gt;   a) performance is bad, at least partially because of libnbc
</span><br>
<span class="quotelev1">&gt;   b) there's also some other bad performance oddities in there
</span><br>
<span class="quotelev1">&gt;   c) but there's some good performance improvements, too, that would be
</span><br>
<span class="quotelev1">&gt;good to bring to v1.7 (and v1.6, if possible)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Oct 25, 2012, at 12:32 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached are the following graphs:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. sm NetPipe latencies up to size 150 bytes (run on a Sandy Bride, 2
</span><br>
<span class="quotelev2">&gt;&gt;procs same core)
</span><br>
<span class="quotelev2">&gt;&gt; 2. openib NetPipe latencies up to size 150 bytes (run on 2 old Xeons
</span><br>
<span class="quotelev2">&gt;&gt;[pre-Nehalem] with old Mellanox ConnectX IB HCAs)
</span><br>
<span class="quotelev2">&gt;&gt; 3. Same as #1, but all the way up to 8MB
</span><br>
<span class="quotelev2">&gt;&gt; 4. Same as #2, but all the way up to 8MB
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also attached a tarball of all my raw net pipe numbers (since the
</span><br>
<span class="quotelev2">&gt;&gt;graphs are loglog).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There's definite weirdness here.  Here's some observations:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a) Trunk openib latency is noticeably better in the mid-range as
</span><br>
<span class="quotelev2">&gt;&gt;compared to v1.6 and v1.7.  This is good!  Is this change something that
</span><br>
<span class="quotelev2">&gt;&gt;can be brought to v1.6 / v1.7?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; b) The addition of the libnbc progress function to the progress loop
</span><br>
<span class="quotelev2">&gt;&gt;has a non-zero impact on latency.  It's most noticeable in graphs #1 and
</span><br>
<span class="quotelev2">&gt;&gt;#2.  Can something be done to only add the libnbc progress function to
</span><br>
<span class="quotelev2">&gt;&gt;the loop only when NBC operations are ongoing?  Right now, the libnbc
</span><br>
<span class="quotelev2">&gt;&gt;progress function is *always* added to the progress loop, even if you
</span><br>
<span class="quotelev2">&gt;&gt;never use any NBCs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; c) There's a noticeable increase in small message latency for the
</span><br>
<span class="quotelev2">&gt;&gt;openib BTL in v1.7 as compared to the trunk and v1.6 branches.  I don't
</span><br>
<span class="quotelev2">&gt;&gt;know if this is an openib thing, or the result of something else.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; d) The trunk (without libnbc) has the best small message sm latency,
</span><br>
<span class="quotelev2">&gt;&gt;period -- even better than v1.6.  Yay!  Is this decrease in latency
</span><br>
<span class="quotelev2">&gt;&gt;(compared to v1.6) something that can be brought to v1.7?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&lt;netpipe-sm-latencies-to-128.pdf&gt;&lt;netpipe-openib-latencies-to-128.pdf&gt;&lt;ne
</span><br>
<span class="quotelev2">&gt;&gt;tpipe-sm-latencies.pdf&gt;&lt;netpipe-openib-latencies.pdf&gt;&lt;netpipe-latency-num
</span><br>
<span class="quotelev2">&gt;&gt;bers.tar.bz2&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11642.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Previous message:</strong> <a href="11640.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>In reply to:</strong> <a href="11640.php">Jeff Squyres: "Re: [OMPI devel] Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11642.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
<li><strong>Reply:</strong> <a href="11642.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re: Latency perf: v1.6 vs. v1.7 vs. trunk"</a>
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

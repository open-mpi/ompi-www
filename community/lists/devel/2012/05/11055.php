<?
$subject_val = "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 09:36:43 2012" -->
<!-- isoreceived="20120530133643" -->
<!-- sent="Wed, 30 May 2012 15:36:38 +0200" -->
<!-- isosent="20120530133638" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST" -->
<!-- id="4FC62266.109_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL3GGtqeN2pYVEHhMkoVBvcCiFsfKhkBo4wOP1BnGkqojinMZg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 09:36:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11056.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11054.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11054.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11056.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11056.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your /proc/cpuinfo output (filtered below) looks like only two sockets
<br>
(physical ids 0 and 1), with one core each (cpu cores=1, core id=0),
<br>
with hyperthreading (siblings=2). So lstopo looks good.
<br>
E5-2650 is supposed to have 8 cores. I assume you use Linux
<br>
cgroups/cpusets to restrict the available cores. The missconfiguration
<br>
may be there.
<br>
Brice
<br>
<p><p><p><p>Le 30/05/2012 15:14, Mike Dubman a &#233;crit :
<br>
<span class="quotelev1">&gt; or, lstopo lies (Im not using the latest hwloc but one which comes
</span><br>
<span class="quotelev1">&gt; with distro).
</span><br>
<span class="quotelev1">&gt; The machine has two dual-code sockets, total 4 physical cores:
</span><br>
<span class="quotelev1">&gt; processor       : 0
</span><br>
<span class="quotelev1">&gt; physical id     : 0
</span><br>
<span class="quotelev1">&gt; siblings        : 2
</span><br>
<span class="quotelev1">&gt; core id         : 0
</span><br>
<span class="quotelev1">&gt; cpu cores       : 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor       : 1
</span><br>
<span class="quotelev1">&gt; physical id     : 1
</span><br>
<span class="quotelev1">&gt; siblings        : 2
</span><br>
<span class="quotelev1">&gt; core id         : 0
</span><br>
<span class="quotelev1">&gt; cpu cores       : 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor       : 2
</span><br>
<span class="quotelev1">&gt; physical id     : 0
</span><br>
<span class="quotelev1">&gt; siblings        : 2
</span><br>
<span class="quotelev1">&gt; core id         : 0
</span><br>
<span class="quotelev1">&gt; cpu cores       : 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor       : 3
</span><br>
<span class="quotelev1">&gt; physical id     : 1
</span><br>
<span class="quotelev1">&gt; siblings        : 2
</span><br>
<span class="quotelev1">&gt; core id         : 0
</span><br>
<span class="quotelev1">&gt; cpu cores       : 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 30, 2012 at 3:40 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hmmm...well, from what I see, mpirun was actually giving you the
</span><br>
<span class="quotelev1">&gt;     right answer! I only see TWO cores on each node, yet you told it
</span><br>
<span class="quotelev1">&gt;     to bind FOUR processes on each node, each proc to be bound to a
</span><br>
<span class="quotelev1">&gt;     unique core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The error message was correct - there are not enough cores on
</span><br>
<span class="quotelev1">&gt;     those nodes to do what you requested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On May 30, 2012, at 6:19 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Wed, May 30, 2012 at 2:32 PM, Jeff Squyres &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On May 30, 2012, at 7:20 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; $hwloc-ls --of console
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt; Machine (32GB)
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;  NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (20MB) + L2
</span><br>
<span class="quotelev2">&gt;&gt;         L#0 (256KB) + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;    PU L#0 (P#0)
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;    PU L#1 (P#2)
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;  NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (20MB) + L2
</span><br>
<span class="quotelev2">&gt;&gt;         L#1 (256KB) + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;    PU L#2 (P#1)
</span><br>
<span class="quotelev4">&gt;&gt;         &gt;&gt;    PU L#3 (P#3)
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Is this hwloc output exactly the same on both nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         More specifically, can you send the lstopo xml output from
</span><br>
<span class="quotelev2">&gt;&gt;         each of the 2 nodes you ran on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --
</span><br>
<span class="quotelev2">&gt;&gt;         Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;         jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;lstopo-out.tbz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11055/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11056.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11054.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11054.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11056.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11056.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
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

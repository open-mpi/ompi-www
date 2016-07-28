<?
$subject_val = "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 09:59:42 2012" -->
<!-- isoreceived="20120530135942" -->
<!-- sent="Wed, 30 May 2012 09:59:37 -0400" -->
<!-- isosent="20120530135937" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST" -->
<!-- id="4B53A3DC-92AB-4CF5-81CD-91D439E9A5C7_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL3GGtrwnDX-sWF9z-2dLge7hEabW6QEYj3fXKHYMUOWFnQn1Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 09:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11058.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11056.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11056.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11058.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11058.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 30, 2012, at 9:47 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; ohh.. you are right, false alarm :) sorry siblings != cores - so it is HT
</span><br>
<p>OMPI 1.6.soon-to-be-1 should handle HT properly, meaning that it will bind to all the HT's in a core and/or socket.
<br>
<p>Are you using Linux cgroups/cpusets to restrict available cores?  Because Brice is saying that E5-2650 is supposed to have more cores.
<br>
<p><p><span class="quotelev1">&gt; On Wed, May 30, 2012 at 4:36 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Your /proc/cpuinfo output (filtered below) looks like only two sockets (physical ids 0 and 1), with one core each (cpu cores=1, core id=0), with hyperthreading (siblings=2). So lstopo looks good.
</span><br>
<span class="quotelev1">&gt; E5-2650 is supposed to have 8 cores. I assume you use Linux cgroups/cpusets to restrict the available cores. The missconfiguration may be there.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 30/05/2012 15:14, Mike Dubman a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; or, lstopo lies (Im not using the latest hwloc but one which comes with distro).
</span><br>
<span class="quotelev2">&gt;&gt; The machine has two dual-code sockets, total 4 physical cores:
</span><br>
<span class="quotelev2">&gt;&gt; processor       : 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; physical id     : 0
</span><br>
<span class="quotelev2">&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev2">&gt;&gt; core id         : 0
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores       : 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; processor       : 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; physical id     : 1
</span><br>
<span class="quotelev2">&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev2">&gt;&gt; core id         : 0
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores       : 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; processor       : 2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; physical id     : 0
</span><br>
<span class="quotelev2">&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev2">&gt;&gt; core id         : 0
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores       : 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; processor       : 3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; physical id     : 1
</span><br>
<span class="quotelev2">&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev2">&gt;&gt; core id         : 0
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores       : 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 30, 2012 at 3:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...well, from what I see, mpirun was actually giving you the right answer! I only see TWO cores on each node, yet you told it to bind FOUR processes on each node, each proc to be bound to a unique core.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The error message was correct - there are not enough cores on those nodes to do what you requested.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 30, 2012, at 6:19 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, May 30, 2012 at 2:32 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 30, 2012, at 7:20 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; $hwloc-ls --of console
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Machine (32GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;  NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (20MB) + L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    PU L#1 (P#2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;  NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (20MB) + L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    PU L#2 (P#1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    PU L#3 (P#3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Is this hwloc output exactly the same on both nodes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More specifically, can you send the lstopo xml output from each of the 2 nodes you ran on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;lstopo-out.tbz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11058.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11056.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11056.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11058.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11058.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
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

<?
$subject_val = "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 09:48:21 2012" -->
<!-- isoreceived="20120530134821" -->
<!-- sent="Wed, 30 May 2012 16:47:56 +0300" -->
<!-- isosent="20120530134756" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST" -->
<!-- id="CAL3GGtrwnDX-sWF9z-2dLge7hEabW6QEYj3fXKHYMUOWFnQn1Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FC62266.109_at_inria.fr" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 09:47:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11057.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11055.php">Brice Goglin: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11055.php">Brice Goglin: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11057.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11057.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ohh.. you are right, false alarm :) sorry siblings != cores - so it is HT
<br>
<p>On Wed, May 30, 2012 at 4:36 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Your /proc/cpuinfo output (filtered below) looks like only two sockets
</span><br>
<span class="quotelev1">&gt; (physical ids 0 and 1), with one core each (cpu cores=1, core id=0), with
</span><br>
<span class="quotelev1">&gt; hyperthreading (siblings=2). So lstopo looks good.
</span><br>
<span class="quotelev1">&gt; E5-2650 is supposed to have 8 cores. I assume you use Linux
</span><br>
<span class="quotelev1">&gt; cgroups/cpusets to restrict the available cores. The missconfiguration may
</span><br>
<span class="quotelev1">&gt; be there.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  or, lstopo lies (Im not using the latest hwloc but one which comes with
</span><br>
<span class="quotelev1">&gt; distro).
</span><br>
<span class="quotelev1">&gt; The machine has two dual-code sockets, total 4 physical cores:
</span><br>
<span class="quotelev1">&gt; processor       : 0
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;  processor       : 1
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;  processor       : 2
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;  processor       : 3
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;  On Wed, May 30, 2012 at 3:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...well, from what I see, mpirun was actually giving you the right
</span><br>
<span class="quotelev2">&gt;&gt; answer! I only see TWO cores on each node, yet you told it to bind FOUR
</span><br>
<span class="quotelev2">&gt;&gt; processes on each node, each proc to be bound to a unique core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The error message was correct - there are not enough cores on those
</span><br>
<span class="quotelev2">&gt;&gt; nodes to do what you requested.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   On May 30, 2012, at 6:19 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 30, 2012 at 2:32 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 30, 2012, at 7:20 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; $hwloc-ls --of console
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Machine (32GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;  NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (20MB) + L2 L#0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (256KB) + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;    PU L#1 (P#2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;  NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (20MB) + L2 L#1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (256KB) + L1 L#1 (32KB) + Core L#1
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
<span class="quotelev3">&gt;&gt;&gt;  More specifically, can you send the lstopo xml output from each of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 nodes you ran on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   &lt;lstopo-out.tbz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11056/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11057.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11055.php">Brice Goglin: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11055.php">Brice Goglin: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11057.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11057.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
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

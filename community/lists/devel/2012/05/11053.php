<?
$subject_val = "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 08:40:16 2012" -->
<!-- isoreceived="20120530124016" -->
<!-- sent="Wed, 30 May 2012 06:40:12 -0600" -->
<!-- isosent="20120530124012" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST" -->
<!-- id="428C6634-C2D7-4573-9FBB-9030FDA75C98_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL3GGtqNOj409vkYWBe2ZXGxXQViECSJzcwugnA8J=OeC1vcoQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 08:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11054.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11052.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11052.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11054.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11054.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, from what I see, mpirun was actually giving you the right answer! I only see TWO cores on each node, yet you told it to bind FOUR processes on each node, each proc to be bound to a unique core.
<br>
<p>The error message was correct - there are not enough cores on those nodes to do what you requested.
<br>
<p><p>On May 30, 2012, at 6:19 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, May 30, 2012 at 2:32 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On May 30, 2012, at 7:20 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $hwloc-ls --of console
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Machine (32GB)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (20MB) + L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    PU L#0 (P#0)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    PU L#1 (P#2)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (20MB) + L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    PU L#2 (P#1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    PU L#3 (P#3)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this hwloc output exactly the same on both nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically, can you send the lstopo xml output from each of the 2 nodes you ran on?
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
<span class="quotelev1">&gt; &lt;lstopo-out.tbz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11053/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11054.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11052.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11052.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11054.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11054.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
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

<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 02:20:18 2007" -->
<!-- isoreceived="20071214072018" -->
<!-- sent="Fri, 14 Dec 2007 09:20:12 +0200" -->
<!-- isosent="20071214072012" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="20071214072012.GA12745_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C3872791.11F2B%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] matching code rewrite in OB1<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-14 02:20:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2850.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2848.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2847.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2850.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2850.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 13, 2007 at 06:16:49PM -0500, Richard Graham wrote:
<br>
<span class="quotelev1">&gt; The situation that needs to be triggered, just as George has mentions, is
</span><br>
<span class="quotelev1">&gt; where we have a lot of unexpected messages, to make sure that when one that
</span><br>
<span class="quotelev1">&gt; we can match against comes in, all the unexpected messages that can be
</span><br>
<span class="quotelev1">&gt; matched with pre-posted receives are matched.  Since we attempt to match
</span><br>
<span class="quotelev1">&gt; only when a new fragment comes in, we need to make sure that we don't leave
</span><br>
<span class="quotelev1">&gt; other unexpected messages that can be matched in the unexpected queue, as
</span><br>
<span class="quotelev1">&gt; these (if the out of order scenario is just right) would block any new
</span><br>
<span class="quotelev1">&gt; matches from occurring.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example:  Say the next expect message is 25
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unexpected message queue has:  26 28 29 ..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If 25 comes in, and is handled, if 26 is not pulled off the unexpected
</span><br>
<span class="quotelev1">&gt; message queue, when 27 comes in it won't be able to be matched, as 26 is
</span><br>
<span class="quotelev1">&gt; sitting in the unexpected queue, and will never be looked at again ...
</span><br>
This situation is triggered constantly with openib BTL. OpenIB BTL has
<br>
two ways to receive a packet: over a send queue or over an eager RDMA path.
<br>
Receiver polls both of them and may reorders packets locally. Actually
<br>
currently there is a bug in openib BTL that one channel may starve the other
<br>
at the receiver so if a match fragment with a next sequence number is in the
<br>
starved path tenth of thousands fragment can be reorederd. Test case attached
<br>
to ticket #1158 triggers this case and my patch handles all reordered packets.
<br>
<p>And, by the way, the code is much simpler now and can be review easily ;)
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2850.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2848.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2847.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2850.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2850.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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

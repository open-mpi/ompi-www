<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 06:54:13 2007" -->
<!-- isoreceived="20071214115413" -->
<!-- sent="Fri, 14 Dec 2007 06:53:55 -0500" -->
<!-- isosent="20071214115355" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="C387D903.11F72%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071214072012.GA12745_at_minantech.com" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-14 06:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2851.php">Adrian Knoth: "[OMPI devel] IPv4 mapped IPv6 addresses"</a>
<li><strong>Previous message:</strong> <a href="2849.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2849.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2855.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2855.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you have positive confirmation that such things have happened, this will
<br>
go a long way.  I will not trust the code until this has also been done with
<br>
multiple independent network paths.  I very rarely express such strong
<br>
opinions, even if I don't agree with what is being done, but this is the
<br>
core of correct MPI functionality, and first hand experience has shown that
<br>
just thinking through the logic, I can miss some of the race conditions.
<br>
The code here has been running for 8+ years in two production MPI's running
<br>
on very large clusters, so I am very reluctant to make changes for what
<br>
seems to amount to people's taste - maintenance is not an issue in this
<br>
case.  Had this not been such a key bit of code, I would not even bat an
<br>
eye.  I suppose if you can go through some formal verification, this would
<br>
also be good - actually better than hoping that one will hit out-of-order
<br>
situations.
<br>
<p>Rich
<br>
<p><p>On 12/14/07 2:20 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Dec 13, 2007 at 06:16:49PM -0500, Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The situation that needs to be triggered, just as George has mentions, is
</span><br>
<span class="quotelev2">&gt;&gt; where we have a lot of unexpected messages, to make sure that when one that
</span><br>
<span class="quotelev2">&gt;&gt; we can match against comes in, all the unexpected messages that can be
</span><br>
<span class="quotelev2">&gt;&gt; matched with pre-posted receives are matched.  Since we attempt to match
</span><br>
<span class="quotelev2">&gt;&gt; only when a new fragment comes in, we need to make sure that we don't leave
</span><br>
<span class="quotelev2">&gt;&gt; other unexpected messages that can be matched in the unexpected queue, as
</span><br>
<span class="quotelev2">&gt;&gt; these (if the out of order scenario is just right) would block any new
</span><br>
<span class="quotelev2">&gt;&gt; matches from occurring.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For example:  Say the next expect message is 25
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected message queue has:  26 28 29 ..
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If 25 comes in, and is handled, if 26 is not pulled off the unexpected
</span><br>
<span class="quotelev2">&gt;&gt; message queue, when 27 comes in it won't be able to be matched, as 26 is
</span><br>
<span class="quotelev2">&gt;&gt; sitting in the unexpected queue, and will never be looked at again ...
</span><br>
<span class="quotelev1">&gt; This situation is triggered constantly with openib BTL. OpenIB BTL has
</span><br>
<span class="quotelev1">&gt; two ways to receive a packet: over a send queue or over an eager RDMA path.
</span><br>
<span class="quotelev1">&gt; Receiver polls both of them and may reorders packets locally. Actually
</span><br>
<span class="quotelev1">&gt; currently there is a bug in openib BTL that one channel may starve the other
</span><br>
<span class="quotelev1">&gt; at the receiver so if a match fragment with a next sequence number is in the
</span><br>
<span class="quotelev1">&gt; starved path tenth of thousands fragment can be reorederd. Test case attached
</span><br>
<span class="quotelev1">&gt; to ticket #1158 triggers this case and my patch handles all reordered packets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And, by the way, the code is much simpler now and can be review easily ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2851.php">Adrian Knoth: "[OMPI devel] IPv4 mapped IPv6 addresses"</a>
<li><strong>Previous message:</strong> <a href="2849.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2849.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2855.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2855.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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

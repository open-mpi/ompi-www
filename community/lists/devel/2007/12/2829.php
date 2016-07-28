<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 16:10:19 2007" -->
<!-- isoreceived="20071212211019" -->
<!-- sent="Wed, 12 Dec 2007 15:10:10 -0600 (CST)" -->
<!-- isosent="20071212211010" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="Pine.LNX.4.64.0712121508090.6131_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071212205155.GE26644_at_minantech.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 16:10:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2830.php">Paul H. Hargrove: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Previous message:</strong> <a href="2828.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2825.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2831.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2831.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2841.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 12 Dec 2007, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Dec 12, 2007 at 03:46:10PM -0500, Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This is better than nothing, but really not very helpful for looking at the
</span><br>
<span class="quotelev2">&gt;&gt; specific issues that can arise with this, unless these systems have several
</span><br>
<span class="quotelev2">&gt;&gt; parallel networks, with tests that will generate a lot of parallel network
</span><br>
<span class="quotelev2">&gt;&gt; traffic, and be able to self check for out-of-order received - i.e. this
</span><br>
<span class="quotelev2">&gt;&gt; needs to be encoded into the payload for verification purposes.  There are
</span><br>
<span class="quotelev2">&gt;&gt; some out-of-order scenarios that need to be generated and checked.  I think
</span><br>
<span class="quotelev2">&gt;&gt; that George may have a system that will be good for this sort of testing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I am running various test with multiple networks right now. I use
</span><br>
<span class="quotelev1">&gt; several IB BTLs and TCP BTL simultaneously. I see many reordered
</span><br>
<span class="quotelev1">&gt; messages and all tests were OK till now, but they don't encode
</span><br>
<span class="quotelev1">&gt; message sequence in a payload as far as I know. I'll change one of
</span><br>
<span class="quotelev1">&gt; them to do so.
</span><br>
<p>Other than Rich's comment that we need sequence numbers, why add them?  We 
<br>
haven't had them for non-matching packets for the last 3 years in Open MPI 
<br>
(ie, forever), and I can't see why we would need them.  Yes, we need 
<br>
sequence numbers for match headers to make sure MPI ordering is correct. 
<br>
But for the rest of the payload, there's no need with OMPI's datatype 
<br>
engine.  It's just more payload for no gain.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2830.php">Paul H. Hargrove: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Previous message:</strong> <a href="2828.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2825.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2831.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2831.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2841.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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

<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 01:44:57 2007" -->
<!-- isoreceived="20071213064457" -->
<!-- sent="Thu, 13 Dec 2007 08:44:49 +0200" -->
<!-- isosent="20071213064449" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="20071213064449.GV3360_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0712121508090.6131_at_marvin.we-be-smart.org" -->
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
<strong>Date:</strong> 2007-12-13 01:44:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2842.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Previous message:</strong> <a href="2840.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>In reply to:</strong> <a href="2829.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2826.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 12, 2007 at 03:10:10PM -0600, Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; On Wed, 12 Dec 2007, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Dec 12, 2007 at 03:46:10PM -0500, Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is better than nothing, but really not very helpful for looking at the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; specific issues that can arise with this, unless these systems have several
</span><br>
<span class="quotelev3">&gt; &gt;&gt; parallel networks, with tests that will generate a lot of parallel network
</span><br>
<span class="quotelev3">&gt; &gt;&gt; traffic, and be able to self check for out-of-order received - i.e. this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; needs to be encoded into the payload for verification purposes.  There are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; some out-of-order scenarios that need to be generated and checked.  I think
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that George may have a system that will be good for this sort of testing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am running various test with multiple networks right now. I use
</span><br>
<span class="quotelev2">&gt; &gt; several IB BTLs and TCP BTL simultaneously. I see many reordered
</span><br>
<span class="quotelev2">&gt; &gt; messages and all tests were OK till now, but they don't encode
</span><br>
<span class="quotelev2">&gt; &gt; message sequence in a payload as far as I know. I'll change one of
</span><br>
<span class="quotelev2">&gt; &gt; them to do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other than Rich's comment that we need sequence numbers, why add them?  We 
</span><br>
<span class="quotelev1">&gt; haven't had them for non-matching packets for the last 3 years in Open MPI 
</span><br>
<span class="quotelev1">&gt; (ie, forever), and I can't see why we would need them.  Yes, we need 
</span><br>
<span class="quotelev1">&gt; sequence numbers for match headers to make sure MPI ordering is correct. 
</span><br>
<span class="quotelev1">&gt; But for the rest of the payload, there's no need with OMPI's datatype 
</span><br>
<span class="quotelev1">&gt; engine.  It's just more payload for no gain.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
As I understand what Rich propose he says that we need to construct
<br>
special test that will check that matching engine did its job right on
<br>
the application layer. In other words test should check that payload
<br>
received is correct one. He is not talking about adding additional
<br>
fields to OB1 header.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2842.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>Previous message:</strong> <a href="2840.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>In reply to:</strong> <a href="2829.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2826.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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

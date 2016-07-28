<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 18:17:07 2007" -->
<!-- isoreceived="20071213231707" -->
<!-- sent="Thu, 13 Dec 2007 18:16:49 -0500" -->
<!-- isosent="20071213231649" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="C3872791.11F2B%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3B026E51-DA42-4B8D-844F-99C9727A75FA_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2007-12-13 18:16:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2848.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2846.php">George Bosilca: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2846.php">George Bosilca: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2849.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2849.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The situation that needs to be triggered, just as George has mentions, is
<br>
where we have a lot of unexpected messages, to make sure that when one that
<br>
we can match against comes in, all the unexpected messages that can be
<br>
matched with pre-posted receives are matched.  Since we attempt to match
<br>
only when a new fragment comes in, we need to make sure that we don't leave
<br>
other unexpected messages that can be matched in the unexpected queue, as
<br>
these (if the out of order scenario is just right) would block any new
<br>
matches from occurring.
<br>
<p>For example:  Say the next expect message is 25
<br>
<p>Unexpected message queue has:  26 28 29 ..
<br>
<p>If 25 comes in, and is handled, if 26 is not pulled off the unexpected
<br>
message queue, when 27 comes in it won't be able to be matched, as 26 is
<br>
sitting in the unexpected queue, and will never be looked at again ...
<br>
<p>Rich
<br>
<p><p>On 12/13/07 2:09 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Rich was referring to the fact that the reordering of fragments other
</span><br>
<span class="quotelev1">&gt; than the matching ones is irrelevant to the Gleb's change. In order to
</span><br>
<span class="quotelev1">&gt; trigger the changes we need to force a lot of small unexpected
</span><br>
<span class="quotelev1">&gt; messages over multiple networks. The testing environment should have
</span><br>
<span class="quotelev1">&gt; multiple similar networks (to make sure the matching fragment is
</span><br>
<span class="quotelev1">&gt; distributed evenly across them), and the test should generate a lot of
</span><br>
<span class="quotelev1">&gt; unexpected messages. I think the flood test is a good base for this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2007, at 5:04 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Was Rich referring to ensuring that the test codes checked that their
</span><br>
<span class="quotelev2">&gt;&gt; payloads were correct (and not re-assembled in the wrong order)?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 12, 2007, at 4:10 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 12 Dec 2007, Gleb Natapov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Dec 12, 2007 at 03:46:10PM -0500, Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is better than nothing, but really not very helpful for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; looking at the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specific issues that can arise with this, unless these systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have several
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parallel networks, with tests that will generate a lot of parallel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; network
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; traffic, and be able to self check for out-of-order received -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i.e. this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; needs to be encoded into the payload for verification purposes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some out-of-order scenarios that need to be generated and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checked.  I think
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that George may have a system that will be good for this sort of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; testing.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am running various test with multiple networks right now. I use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; several IB BTLs and TCP BTL simultaneously. I see many reordered
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; messages and all tests were OK till now, but they don't encode
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message sequence in a payload as far as I know. I'll change one of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; them to do so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Other than Rich's comment that we need sequence numbers, why add
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them?  We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; haven't had them for non-matching packets for the last 3 years in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ie, forever), and I can't see why we would need them.  Yes, we need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sequence numbers for match headers to make sure MPI ordering is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But for the rest of the payload, there's no need with OMPI's datatype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; engine.  It's just more payload for no gain.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2848.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2846.php">George Bosilca: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2846.php">George Bosilca: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2849.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2849.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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

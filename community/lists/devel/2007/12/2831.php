<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 17:04:19 2007" -->
<!-- isoreceived="20071212220419" -->
<!-- sent="Wed, 12 Dec 2007 17:04:07 -0500" -->
<!-- isosent="20071212220407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="2D9F5CD0-B666-4BE5-8865-6ED6B06594FD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 17:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2832.php">Jeff Squyres: "[OMPI devel] SCTP noisy failure"</a>
<li><strong>Previous message:</strong> <a href="2830.php">Paul H. Hargrove: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>In reply to:</strong> <a href="2829.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2846.php">George Bosilca: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2846.php">George Bosilca: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2848.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Was Rich referring to ensuring that the test codes checked that their  
<br>
payloads were correct (and not re-assembled in the wrong order)?
<br>
<p><p>On Dec 12, 2007, at 4:10 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 12 Dec 2007, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 12, 2007 at 03:46:10PM -0500, Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is better than nothing, but really not very helpful for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specific issues that can arise with this, unless these systems  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have several
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parallel networks, with tests that will generate a lot of parallel  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network
</span><br>
<span class="quotelev3">&gt;&gt;&gt; traffic, and be able to self check for out-of-order received -  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i.e. this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needs to be encoded into the payload for verification purposes.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some out-of-order scenarios that need to be generated and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checked.  I think
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that George may have a system that will be good for this sort of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running various test with multiple networks right now. I use
</span><br>
<span class="quotelev2">&gt;&gt; several IB BTLs and TCP BTL simultaneously. I see many reordered
</span><br>
<span class="quotelev2">&gt;&gt; messages and all tests were OK till now, but they don't encode
</span><br>
<span class="quotelev2">&gt;&gt; message sequence in a payload as far as I know. I'll change one of
</span><br>
<span class="quotelev2">&gt;&gt; them to do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than Rich's comment that we need sequence numbers, why add  
</span><br>
<span class="quotelev1">&gt; them?  We
</span><br>
<span class="quotelev1">&gt; haven't had them for non-matching packets for the last 3 years in  
</span><br>
<span class="quotelev1">&gt; Open MPI
</span><br>
<span class="quotelev1">&gt; (ie, forever), and I can't see why we would need them.  Yes, we need
</span><br>
<span class="quotelev1">&gt; sequence numbers for match headers to make sure MPI ordering is  
</span><br>
<span class="quotelev1">&gt; correct.
</span><br>
<span class="quotelev1">&gt; But for the rest of the payload, there's no need with OMPI's datatype
</span><br>
<span class="quotelev1">&gt; engine.  It's just more payload for no gain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2832.php">Jeff Squyres: "[OMPI devel] SCTP noisy failure"</a>
<li><strong>Previous message:</strong> <a href="2830.php">Paul H. Hargrove: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>In reply to:</strong> <a href="2829.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2846.php">George Bosilca: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2846.php">George Bosilca: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2848.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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

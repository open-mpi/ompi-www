<?
$subject_val = "Re: [OMPI devel] Common initialization code for IB.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 09:28:42 2008" -->
<!-- isoreceived="20080107142842" -->
<!-- sent="Mon, 7 Jan 2008 16:28:21 +0200" -->
<!-- isosent="20080107142821" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common initialization code for IB." -->
<!-- id="20080107142821.GT22604_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2649E29B-D592-407B-B6B8-2A268EC75654_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Common initialization code for IB.<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-07 09:28:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2937.php">Gleb Natapov: "[OMPI devel] ptmalloc and pin down cache problems again"</a>
<li><strong>Previous message:</strong> <a href="2935.php">Rolf Vandevaart: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>In reply to:</strong> <a href="2928.php">Jeff Squyres: "Re: [OMPI devel] Common initialization code for IB."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 03, 2008 at 09:27:14AM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev2">&gt; &gt; Another
</span><br>
<span class="quotelev2">&gt; &gt; problem is how multicast collective knows that all processes in a
</span><br>
<span class="quotelev2">&gt; &gt; communicator are reachable via the same network, do we have a  
</span><br>
<span class="quotelev2">&gt; &gt; mechanism
</span><br>
<span class="quotelev2">&gt; &gt; in ompi to check this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps the common_of stuff could hang some data off the ompi_proc_t  
</span><br>
<span class="quotelev1">&gt; that can be read by any of-like component (btl openib, coll of  
</span><br>
<span class="quotelev1">&gt; multicast, etc.)...?  This could contain a subnet ID, or perhaps a  
</span><br>
<span class="quotelev1">&gt; reachable flag, or somesuch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
But we calculate reachability inside BTL at modex stage so if HCA is not
<br>
used by BTL there is no reachability info for it.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2937.php">Gleb Natapov: "[OMPI devel] ptmalloc and pin down cache problems again"</a>
<li><strong>Previous message:</strong> <a href="2935.php">Rolf Vandevaart: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>In reply to:</strong> <a href="2928.php">Jeff Squyres: "Re: [OMPI devel] Common initialization code for IB."</a>
<!-- nextthread="start" -->
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

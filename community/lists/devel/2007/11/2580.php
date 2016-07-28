<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 03:56:01 2007" -->
<!-- isoreceived="20071108085601" -->
<!-- sent="Thu, 8 Nov 2007 10:55:50 +0200" -->
<!-- isosent="20071108085550" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="20071108085550.GB4397_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D044BC38-BA33-4E81-820D-495C5A8DF275_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] collective problems<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 03:55:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2581.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2579.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2566.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 07, 2007 at 01:16:04PM -0500, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2007, at 12:51 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The same callback is called in both cases. In the case that you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; described, the callback is called just a little bit deeper into the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recursion, when in the &quot;normal case&quot; it will get called from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first level of the recursion. Or maybe I miss something here ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right -- it's not the callback that is the problem.  It's when the
</span><br>
<span class="quotelev2">&gt;&gt; recursion is unwound and further up the stack you now have a stale
</span><br>
<span class="quotelev2">&gt;&gt; request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's exactly the point that I fail to see. If the request is freed in the 
</span><br>
<span class="quotelev1">&gt; PML callback, then it should get release in both cases, and therefore lead 
</span><br>
<span class="quotelev1">&gt; to problems all the time. Which, obviously, is not true when we do not have 
</span><br>
<span class="quotelev1">&gt; this deep recursion thing going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Moreover, he request management is based on the reference count. The PML 
</span><br>
<span class="quotelev1">&gt; level have one ref count and the MPI level have another one. In fact, we 
</span><br>
<span class="quotelev1">&gt; cannot release a request until we explicitly call ompi_request_free on it. 
</span><br>
<span class="quotelev1">&gt; The place where this call happens is different between the blocking and non 
</span><br>
<span class="quotelev1">&gt; blocking calls. In the non blocking case the ompi_request_free get called 
</span><br>
<span class="quotelev1">&gt; from the *_test (*_wait) functions while in the blocking case it get called 
</span><br>
<span class="quotelev1">&gt; directly from the MPI_Send function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me summarize: a request cannot reach a stale state without a call to 
</span><br>
<span class="quotelev1">&gt; ompi_request_free. This function is never called directly from the PML 
</span><br>
<span class="quotelev1">&gt; level. Therefore, the recursion depth should not have any impact on the 
</span><br>
<span class="quotelev1">&gt; state of the request !
</span><br>
<p>I looked at the code one more time and it seems to me now that George is
<br>
absolutely right. The scenario I described cannot happen because we call
<br>
ompi_request_free() at the top of the stack. I somehow had an
<br>
impression that we mark internal requests as freed before calling
<br>
send(). So I'll go and implement NOT_ON_WIRE extension when I'll have
<br>
time for it.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2581.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2579.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2566.php">George Bosilca: "Re: [OMPI devel] collective problems"</a>
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

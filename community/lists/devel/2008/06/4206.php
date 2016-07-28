<?
$subject_val = "Re: [OMPI devel] ob1 and req-&gt;req_state";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 15:20:53 2008" -->
<!-- isoreceived="20080623192053" -->
<!-- sent="Mon, 23 Jun 2008 15:20:47 -0400" -->
<!-- isosent="20080623192047" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ob1 and req-&amp;gt;req_state" -->
<!-- id="5E79B72E-ED66-46E8-863E-5E3F1D984B5A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0806231516530.14475_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ob1 and req-&gt;req_state<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 15:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4207.php">Brian W. Barrett: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4205.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>In reply to:</strong> <a href="4205.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4208.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4208.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 23, 2008, at 3:17 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Just because it's volatile doesn't mean that adds are atomic.   
</span><br>
<span class="quotelev1">&gt; There's at least one place in the PML (or used to be) where two  
</span><br>
<span class="quotelev1">&gt; threads could decrement that counter at the same time.
</span><br>
<p>With atomics, then both subtracts should occur, right?  So a request  
<br>
could go from ACTIVE -&gt; INACTIVE -&gt; INVALID.  Is that what is  
<br>
desired?  (I honestly don't know enough about ob1 to say)
<br>
<p>Or should we just be assigning a specific state, rather than relying  
<br>
on subtracting?  That was my real question.
<br>
<p><p><span class="quotelev1">&gt; On Mon, 23 Jun 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see in a few places in ob1 we do things like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  OPAL_THREAD_ADD32(&amp;sendreq-&gt;req_state, -1);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why do we do this?  req_state is technically an enum value, so we  
</span><br>
<span class="quotelev2">&gt;&gt; shouldn't be adding/subtracting to it (granted, it looks like the  
</span><br>
<span class="quotelev2">&gt;&gt; enum values were carefully chosen to allow this).  Additionally,  
</span><br>
<span class="quotelev2">&gt;&gt; req_state is volatile; the atomics shouldn't be necessary.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there some other non-obvious reason?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, I see this in a few places:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  req-&gt;req_state = 2;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which really should be
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  req-&gt;req_state = OMPI_REQUEST_ACTIVE;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4207.php">Brian W. Barrett: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4205.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>In reply to:</strong> <a href="4205.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4208.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4208.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
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

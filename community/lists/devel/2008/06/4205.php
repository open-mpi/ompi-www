<?
$subject_val = "Re: [OMPI devel] ob1 and req-&gt;req_state";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 15:17:36 2008" -->
<!-- isoreceived="20080623191736" -->
<!-- sent="Mon, 23 Jun 2008 15:17:27 -0400 (EDT)" -->
<!-- isosent="20080623191727" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ob1 and req-&amp;gt;req_state" -->
<!-- id="Pine.LNX.4.64.0806231516530.14475_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="13EE9C8F-518E-42D4-883F-D6E096E97C1F_at_cisco.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 15:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4206.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Previous message:</strong> <a href="4204.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4203.php">Jeff Squyres: "[OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4206.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4206.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just because it's volatile doesn't mean that adds are atomic.  There's at 
<br>
least one place in the PML (or used to be) where two threads could 
<br>
decrement that counter at the same time.
<br>
<p>Brian
<br>
<p>On Mon, 23 Jun 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I see in a few places in ob1 we do things like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   OPAL_THREAD_ADD32(&amp;sendreq-&gt;req_state, -1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why do we do this?  req_state is technically an enum value, so we shouldn't 
</span><br>
<span class="quotelev1">&gt; be adding/subtracting to it (granted, it looks like the enum values were 
</span><br>
<span class="quotelev1">&gt; carefully chosen to allow this).  Additionally, req_state is volatile; the 
</span><br>
<span class="quotelev1">&gt; atomics shouldn't be necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some other non-obvious reason?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I see this in a few places:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   req-&gt;req_state = 2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which really should be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   req-&gt;req_state = OMPI_REQUEST_ACTIVE;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4206.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Previous message:</strong> <a href="4204.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4203.php">Jeff Squyres: "[OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4206.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4206.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
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

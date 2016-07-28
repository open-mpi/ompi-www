<?
$subject_val = "Re: [OMPI devel] ob1 and req-&gt;req_state";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 15:23:20 2008" -->
<!-- isoreceived="20080623192320" -->
<!-- sent="Mon, 23 Jun 2008 15:23:17 -0400 (EDT)" -->
<!-- isosent="20080623192317" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ob1 and req-&amp;gt;req_state" -->
<!-- id="Pine.LNX.4.64.0806231522060.14475_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5E79B72E-ED66-46E8-863E-5E3F1D984B5A_at_cisco.com" -->
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
<strong>Date:</strong> 2008-06-23 15:23:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4209.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4207.php">Brian W. Barrett: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4206.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4214.php">Shipman, Galen M.: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4214.php">Shipman, Galen M.: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 23 Jun 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 23, 2008, at 3:17 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just because it's volatile doesn't mean that adds are atomic.  There's at 
</span><br>
<span class="quotelev2">&gt;&gt; least one place in the PML (or used to be) where two threads could 
</span><br>
<span class="quotelev2">&gt;&gt; decrement that counter at the same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With atomics, then both subtracts should occur, right?  So a request could go 
</span><br>
<span class="quotelev1">&gt; from ACTIVE -&gt; INACTIVE -&gt; INVALID.  Is that what is desired?  (I honestly 
</span><br>
<span class="quotelev1">&gt; don't know enough about ob1 to say)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or should we just be assigning a specific state, rather than relying on 
</span><br>
<span class="quotelev1">&gt; subtracting?  That was my real question.
</span><br>
<p>I honestly don't know.  I just remember that there were some cases where 
<br>
we were doing crazy counting.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4209.php">Ralph H Castain: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4207.php">Brian W. Barrett: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4206.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4214.php">Shipman, Galen M.: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4214.php">Shipman, Galen M.: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
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

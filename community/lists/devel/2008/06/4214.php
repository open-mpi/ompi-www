<?
$subject_val = "Re: [OMPI devel] ob1 and req-&gt;req_state";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 16:43:44 2008" -->
<!-- isoreceived="20080623204344" -->
<!-- sent="Mon, 23 Jun 2008 16:43:34 -0400" -->
<!-- isosent="20080623204334" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ob1 and req-&amp;gt;req_state" -->
<!-- id="1D8789CB-E48A-4BB1-BFFA-C6474E0522E9_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0806231522060.14475_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Shipman, Galen M. (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 16:43:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4215.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Previous message:</strong> <a href="4213.php">Shipman, Galen M.: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4208.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4215.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4215.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We use req_state currently to track that we receive both RNDV  
<br>
completion and RNDV ack prior to freeing the request..
<br>
- Galen
<br>
<p><p><p>On Jun 23, 2008, at 3:23 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 23 Jun 2008, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 23, 2008, at 3:17 PM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just because it's volatile doesn't mean that adds are atomic.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There's at least one place in the PML (or used to be) where two  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads could decrement that counter at the same time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With atomics, then both subtracts should occur, right?  So a  
</span><br>
<span class="quotelev2">&gt;&gt; request could go from ACTIVE -&gt; INACTIVE -&gt; INVALID.  Is that what  
</span><br>
<span class="quotelev2">&gt;&gt; is desired?  (I honestly don't know enough about ob1 to say)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or should we just be assigning a specific state, rather than  
</span><br>
<span class="quotelev2">&gt;&gt; relying on subtracting?  That was my real question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I honestly don't know.  I just remember that there were some cases  
</span><br>
<span class="quotelev1">&gt; where we were doing crazy counting.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4215.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Previous message:</strong> <a href="4213.php">Shipman, Galen M.: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>In reply to:</strong> <a href="4208.php">Brian W. Barrett: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4215.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4215.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
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

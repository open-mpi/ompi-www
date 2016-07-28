<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 20:19:43 2007" -->
<!-- isoreceived="20071023001943" -->
<!-- sent="Mon, 22 Oct 2007 20:19:20 -0400" -->
<!-- isosent="20071023001920" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] using opal_event's versus btl_progress?" -->
<!-- id="7B3033A0-35AA-429B-BB2E-4F13649B5E78_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b89c3c270710221206x18183725tb14b885b71b7187_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-22 20:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2482.php">Jeff Squyres: "[OMPI devel] updating libevent"</a>
<li><strong>In reply to:</strong> <a href="2480.php">Brad Penoff: "[OMPI devel] using opal_event's versus btl_progress?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 22, 2007, at 3:06 PM, Brad Penoff wrote:
<br>
<p><span class="quotelev1">&gt; We had some questions about the best way to make use of Open MPI's
</span><br>
<span class="quotelev1">&gt; features for a new BTL...  the general theme is making use of the
</span><br>
<span class="quotelev1">&gt; opal_event's versus a btl_progress function.  When is it best to do
</span><br>
<span class="quotelev1">&gt; one versus the other?
</span><br>
<p>In our Paris engineering meeting, we had a lengthy discussion about a  
<br>
related topic.  The end result of our conversation will result in a  
<br>
few things:
<br>
<p>- We'll be updating libevent in the not-distant future (see previous  
<br>
mail today about that)
<br>
- After updating libevent, we'll be updating to use the more modern  
<br>
epoll (and friends) interfaces.  They're manually disabled [with good  
<br>
reason] in our libevent for reasons that are too boring to describe  
<br>
(but I can if you care).
<br>
- BTLs with a device under them are free to use libevent for fd-based  
<br>
progress and/or a progress function.  Software layers without  
<br>
underlying devices should not use progress functions.
<br>
- We'll eventually be adding a blocking interface to the BTLs.  More  
<br>
info TBD on that.
<br>
<p><span class="quotelev1">&gt; We are working on several designs for an SCTP BTL for Open MPI.  The
</span><br>
<span class="quotelev1">&gt; familiar one is to use &quot;TCP-style&quot; one-to-one sockets, which have a
</span><br>
<span class="quotelev1">&gt; socket per endpoint pair, just like the TCP BTL does now.  However, a
</span><br>
<span class="quotelev1">&gt; more unfamiliar one is to use a single &quot;UDP-style&quot; one-to-many socket
</span><br>
<span class="quotelev1">&gt; per BTL.  To illustrate, pretend you have 3 processes... each process
</span><br>
<span class="quotelev1">&gt; only has one socket upon which connections are established, messages
</span><br>
<span class="quotelev1">&gt; are sent, and messages are received to/from the other two processes.
</span><br>
<span class="quotelev1">&gt; It is this design that currently we have some questions about....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far, we have not been implementing our own btl_progress function.
</span><br>
<span class="quotelev1">&gt; This means that within opal_progress(), poll() is called based on the
</span><br>
<span class="quotelev1">&gt; opal events registered within the BTL.  Like TCP, for example, when an
</span><br>
<span class="quotelev1">&gt; MPI_Send happens, the endpoint_send_event is added and POLLOUT is
</span><br>
<span class="quotelev1">&gt; added for this socket for a given endpoint.  Since MPI_Send is
</span><br>
<span class="quotelev1">&gt; blocking, it doesn't really matter that this socket is used for other
</span><br>
<span class="quotelev1">&gt; btl_endpoints because it is the only endpoint with an opal event for
</span><br>
<span class="quotelev1">&gt; sending added.  However, this is not the case with non-blocking...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we have multiple outstanding non-blocking requests to different
</span><br>
<span class="quotelev1">&gt; endpoints, we have to queue them since the endpoints share the same
</span><br>
<span class="quotelev1">&gt; one-to-many socket and events are associated with a single
</span><br>
<span class="quotelev1">&gt; btl_endpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From proc C, say we have this pseudo code running:
</span><br>
<span class="quotelev1">&gt; iSend(proc A)
</span><br>
<span class="quotelev1">&gt; iSend(proc B)
</span><br>
<span class="quotelev1">&gt; Waitall()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Within Waitall, our current design using opal events has the iSend to
</span><br>
<span class="quotelev1">&gt; proc A eventually complete but prior to this, the iSend to proc B
</span><br>
<span class="quotelev1">&gt; can't start until proc A's is done.  We currently queue the endpoints
</span><br>
<span class="quotelev1">&gt; waiting for the poll() POLLOUT event and dequeue from this queue when
</span><br>
<span class="quotelev1">&gt; the event from proc A's endpoint is deleted (and add proc B's endpoint
</span><br>
<span class="quotelev1">&gt; to the POLLOUT event).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you think of a way using the existing framework to eliminate the
</span><br>
<span class="quotelev1">&gt; restriction of the send to proc B having to complete prior to the send
</span><br>
<span class="quotelev1">&gt; to proc B starting?
</span><br>
<p>I assume you meant &quot;send to proc *A* having to complete...&quot;
<br>
<p><span class="quotelev1">&gt; We were trying to use the existing framework but for our case, it  
</span><br>
<span class="quotelev1">&gt; may make more sense to implement our own btl_progress function  
</span><br>
<span class="quotelev1">&gt; since poll() doesn't really make sense for a single socket  
</span><br>
<span class="quotelev1">&gt; anyway... Do you think that would be best?
</span><br>
<p>I guess I don't quite understand -- are you saying that you can have  
<br>
2 concurrent writes occurring on the same socket to 2 different  
<br>
destinations?
<br>
<p>If so, and if libevent doesn't match the SCTP paradigm, then I say:  
<br>
sure, write your own progress function.
<br>
<p>George: can you confirm / deny?
<br>
<p><span class="quotelev1">&gt; We noticed that mca_bml_r2_progress calls btl_progress[i]() which is
</span><br>
<span class="quotelev1">&gt; set in mca_bml_r2_add_procs if NULL !=
</span><br>
<span class="quotelev1">&gt; btl-&gt;btl_component-&gt;btl_progress.  Is there an example of a btl that
</span><br>
<span class="quotelev1">&gt; implements its own btl_progress function?  I just want to make sure
</span><br>
<span class="quotelev1">&gt; this is even a possibility before traveling down this path...  and
</span><br>
<span class="quotelev1">&gt; maybe learn from others prior.
</span><br>
<p>The openib btl has its own progress function.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2482.php">Jeff Squyres: "[OMPI devel] updating libevent"</a>
<li><strong>In reply to:</strong> <a href="2480.php">Brad Penoff: "[OMPI devel] using opal_event's versus btl_progress?"</a>
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

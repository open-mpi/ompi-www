<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 22 15:06:17 2007" -->
<!-- isoreceived="20071022190617" -->
<!-- sent="Mon, 22 Oct 2007 12:06:12 -0700" -->
<!-- isosent="20071022190612" -->
<!-- name="Brad Penoff" -->
<!-- email="penoff_at_[hidden]" -->
<!-- subject="[OMPI devel] using opal_event's versus btl_progress?" -->
<!-- id="b89c3c270710221206x18183725tb14b885b71b7187_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Brad Penoff (<em>penoff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-22 15:06:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2481.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2479.php">Bogdan Costescu: "[OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2483.php">Jeff Squyres: "Re: [OMPI devel] using opal_event's versus btl_progress?"</a>
<li><strong>Reply:</strong> <a href="2483.php">Jeff Squyres: "Re: [OMPI devel] using opal_event's versus btl_progress?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>We had some questions about the best way to make use of Open MPI's
<br>
features for a new BTL...  the general theme is making use of the
<br>
opal_event's versus a btl_progress function.  When is it best to do
<br>
one versus the other?
<br>
<p>We are working on several designs for an SCTP BTL for Open MPI.  The
<br>
familiar one is to use &quot;TCP-style&quot; one-to-one sockets, which have a
<br>
socket per endpoint pair, just like the TCP BTL does now.  However, a
<br>
more unfamiliar one is to use a single &quot;UDP-style&quot; one-to-many socket
<br>
per BTL.  To illustrate, pretend you have 3 processes... each process
<br>
only has one socket upon which connections are established, messages
<br>
are sent, and messages are received to/from the other two processes.
<br>
It is this design that currently we have some questions about....
<br>
<p>So far, we have not been implementing our own btl_progress function.
<br>
This means that within opal_progress(), poll() is called based on the
<br>
opal events registered within the BTL.  Like TCP, for example, when an
<br>
MPI_Send happens, the endpoint_send_event is added and POLLOUT is
<br>
added for this socket for a given endpoint.  Since MPI_Send is
<br>
blocking, it doesn't really matter that this socket is used for other
<br>
btl_endpoints because it is the only endpoint with an opal event for
<br>
sending added.  However, this is not the case with non-blocking...
<br>
<p>When we have multiple outstanding non-blocking requests to different
<br>
endpoints, we have to queue them since the endpoints share the same
<br>
one-to-many socket and events are associated with a single
<br>
btl_endpoint.
<br>
<p><span class="quotelev1">&gt;From proc C, say we have this pseudo code running:
</span><br>
iSend(proc A)
<br>
iSend(proc B)
<br>
Waitall()
<br>
<p>Within Waitall, our current design using opal events has the iSend to
<br>
proc A eventually complete but prior to this, the iSend to proc B
<br>
can't start until proc A's is done.  We currently queue the endpoints
<br>
waiting for the poll() POLLOUT event and dequeue from this queue when
<br>
the event from proc A's endpoint is deleted (and add proc B's endpoint
<br>
to the POLLOUT event).
<br>
<p>Can you think of a way using the existing framework to eliminate the
<br>
restriction of the send to proc B having to complete prior to the send
<br>
to proc B starting? We were trying to use the existing framework but
<br>
for our case, it may make more sense to implement our own btl_progress
<br>
function since poll() doesn't really make sense for a single socket
<br>
anyway... Do you think that would be best?
<br>
<p>We noticed that mca_bml_r2_progress calls btl_progress[i]() which is
<br>
set in mca_bml_r2_add_procs if NULL !=
<br>
btl-&gt;btl_component-&gt;btl_progress.  Is there an example of a btl that
<br>
implements its own btl_progress function?  I just want to make sure
<br>
this is even a possibility before traveling down this path...  and
<br>
maybe learn from others prior.
<br>
<p>Thanks ahead of time for any help!
<br>
brad
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2481.php">Jeff Squyres: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2479.php">Bogdan Costescu: "[OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2483.php">Jeff Squyres: "Re: [OMPI devel] using opal_event's versus btl_progress?"</a>
<li><strong>Reply:</strong> <a href="2483.php">Jeff Squyres: "Re: [OMPI devel] using opal_event's versus btl_progress?"</a>
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

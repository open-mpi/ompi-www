<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 17:34:24 2007" -->
<!-- isoreceived="20070509213424" -->
<!-- sent="Wed, 9 May 2007 14:33:38 -0700" -->
<!-- isosent="20070509213338" -->
<!-- name="Caitlin Bestler" -->
<!-- email="caitlinb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened" -->
<!-- id="1EF1E44200D82B47BD5BA61171E8CE9D03C331D9_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3EDA4C71-A9F7-4D45-B06D-88080CAC0CDD_at_cisco.com" -->
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
<strong>From:</strong> Caitlin Bestler (<em>caitlinb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-09 17:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1515.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1513.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl	-	bugs	opened"</a>
<li><strong>In reply to:</strong> <a href="1513.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl	-	bugs	opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1515.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1515.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The other peer (the receiver of the connection) must wait
</span><br>
<span class="quotelev1">&gt; to send its pending fragment(s) until it receives the first
</span><br>
<span class="quotelev1">&gt; frag from the connection initiator.  This can be accomplished
</span><br>
<span class="quotelev1">&gt; either with another flag on the OMPI module struct or perhaps
</span><br>
<span class="quotelev1">&gt; making it part of the connection protocol (i.e., don't
</span><br>
<span class="quotelev1">&gt; transition the endpoint to be CONNECTED until the first
</span><br>
<span class="quotelev1">&gt; fragment is received).  Either of which can be used to queue
</span><br>
<span class="quotelev1">&gt; up fragments on the receiver until the first fragment is
</span><br>
<span class="quotelev1">&gt; received from the initiator.  I'd have to look in the code
</span><br>
<span class="quotelev1">&gt; deeper, but I'm *guessing* that it might be best to use the
</span><br>
<span class="quotelev1">&gt; already-existing state flag (i.e., checking for CONNECTED)
</span><br>
<span class="quotelev1">&gt; because then you won't be introducing any more conditionals
</span><br>
<span class="quotelev1">&gt; in the critical path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The transport provider has several options on ensuring that
<br>
the passive side does not put a message on the wire before
<br>
the first message is received.
<br>
<p>What the transport layer cannot do is create the first message
<br>
from the active side. Because it will have send/recv semantics
<br>
it will complete a receive work request, which the application
<br>
layer has to post with that expectation.
<br>
<p>this nop does not have to be visible above OMPI, but I'm pretty
<br>
sure OMPI has to generate it. That isn't exactly fair to the 
<br>
application layer, but the RDMAC verbs are water under the
<br>
bridge. Assuming OMPI wants to work with *any* iWARP RNIC
<br>
then it needs to ensure that the active side will send something
<br>
promptly in all cases.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1515.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1513.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl	-	bugs	opened"</a>
<li><strong>In reply to:</strong> <a href="1513.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl	-	bugs	opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1515.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1515.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
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

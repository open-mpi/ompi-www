<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 17:38:14 2007" -->
<!-- isoreceived="20070509213814" -->
<!-- sent="Wed, 9 May 2007 17:38:02 -0400" -->
<!-- isosent="20070509213802" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened" -->
<!-- id="A31472F8-C4AD-41FA-9B71-04D4EB5549BF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1EF1E44200D82B47BD5BA61171E8CE9D03C331D9_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
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
<strong>Date:</strong> 2007-05-09 17:38:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1516.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1514.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1514.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1523.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Understood, and I agree.
<br>
<p>FWIW: note that the CONNECTED state that I refered to is internal to  
<br>
OMPI's endpoint abstraction (not an iwarp/udapl/verbs/etc. state).   
<br>
It's part of our connection dance protocol.
<br>
<p><p>On May 9, 2007, at 5:33 PM, Caitlin Bestler wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - The other peer (the receiver of the connection) must wait
</span><br>
<span class="quotelev2">&gt;&gt; to send its pending fragment(s) until it receives the first
</span><br>
<span class="quotelev2">&gt;&gt; frag from the connection initiator.  This can be accomplished
</span><br>
<span class="quotelev2">&gt;&gt; either with another flag on the OMPI module struct or perhaps
</span><br>
<span class="quotelev2">&gt;&gt; making it part of the connection protocol (i.e., don't
</span><br>
<span class="quotelev2">&gt;&gt; transition the endpoint to be CONNECTED until the first
</span><br>
<span class="quotelev2">&gt;&gt; fragment is received).  Either of which can be used to queue
</span><br>
<span class="quotelev2">&gt;&gt; up fragments on the receiver until the first fragment is
</span><br>
<span class="quotelev2">&gt;&gt; received from the initiator.  I'd have to look in the code
</span><br>
<span class="quotelev2">&gt;&gt; deeper, but I'm *guessing* that it might be best to use the
</span><br>
<span class="quotelev2">&gt;&gt; already-existing state flag (i.e., checking for CONNECTED)
</span><br>
<span class="quotelev2">&gt;&gt; because then you won't be introducing any more conditionals
</span><br>
<span class="quotelev2">&gt;&gt; in the critical path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The transport provider has several options on ensuring that
</span><br>
<span class="quotelev1">&gt; the passive side does not put a message on the wire before
</span><br>
<span class="quotelev1">&gt; the first message is received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What the transport layer cannot do is create the first message
</span><br>
<span class="quotelev1">&gt; from the active side. Because it will have send/recv semantics
</span><br>
<span class="quotelev1">&gt; it will complete a receive work request, which the application
</span><br>
<span class="quotelev1">&gt; layer has to post with that expectation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this nop does not have to be visible above OMPI, but I'm pretty
</span><br>
<span class="quotelev1">&gt; sure OMPI has to generate it. That isn't exactly fair to the
</span><br>
<span class="quotelev1">&gt; application layer, but the RDMAC verbs are water under the
</span><br>
<span class="quotelev1">&gt; bridge. Assuming OMPI wants to work with *any* iWARP RNIC
</span><br>
<span class="quotelev1">&gt; then it needs to ensure that the active side will send something
</span><br>
<span class="quotelev1">&gt; promptly in all cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="1516.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1514.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1514.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1523.php">Steve Wise: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs	opened"</a>
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

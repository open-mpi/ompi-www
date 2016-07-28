<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  9 17:23:02 2007" -->
<!-- isoreceived="20070509212302" -->
<!-- sent="Wed, 9 May 2007 17:22:44 -0400" -->
<!-- isosent="20070509212244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl	-	bugs	opened" -->
<!-- id="3EDA4C71-A9F7-4D45-B06D-88080CAC0CDD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="464232DC.9010201_at_Sun.COM" -->
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
<strong>Date:</strong> 2007-05-09 17:22:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1514.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1512.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1511.php">Donald Kerr: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl	-	bugs	opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1514.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1514.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I talked with Steve a bunch on the phone about this.
<br>
<p>1. This &quot;connector must RDMA first&quot; issue is an iWARP restriction --  
<br>
it's not specific to udapl or verbs.  For example, if you try to use  
<br>
udapl with iWARP on Solaris, you'll have the same issue (I have no  
<br>
idea whether you have iWARP drivers in Solaris or not).
<br>
<p>2. Per his prior e-mail (which I didn't fully grok until I talked to  
<br>
him), using the RDMA CM in the openib BTL will not magically fix this  
<br>
issue for us.
<br>
<p>3. So for any of the BTLs to support iWARP -- regardless of  
<br>
underlying protocol or OS -- they are going to have to obey this  
<br>
restriction.
<br>
<p>4. Luckily, in iWARP, the restriction can be met by either send/ 
<br>
receive semantics *or* RDMA semantics.  You don't have to  
<br>
specifically use RDMA verbs semantics, for example.  This is good  
<br>
because of the way that OMPI works (the first fragment that will be  
<br>
transmitted is pretty much guaranteed to be a send/receive fragment,  
<br>
not an RDMA fragment) -- it makes the logistics slightly simpler.
<br>
<p>Galen Shipman and I talked about this a bit and suggest the following:
<br>
<p>- During the connection dance (probably for both the udapl and openib  
<br>
BTLs), whichever peer ends up being the connection initiator (don't  
<br>
forget about the race condition where 2 peers may simultaneously  
<br>
decide to initiate -- this case is handled properly in the OMPI code;  
<br>
but just make sure you modify the side that ends up being actual  
<br>
initiator), they can send their pending fragment immediately (and  
<br>
Steve is right that there will always be a pending fragment, because  
<br>
OMPI doesn't make a connection until the first send).
<br>
<p>- The other peer (the receiver of the connection) must wait to send  
<br>
its pending fragment(s) until it receives the first frag from the  
<br>
connection initiator.  This can be accomplished either with another  
<br>
flag on the OMPI module struct or perhaps making it part of the  
<br>
connection protocol (i.e., don't transition the endpoint to be  
<br>
CONNECTED until the first fragment is received).  Either of which can  
<br>
be used to queue up fragments on the receiver until the first  
<br>
fragment is received from the initiator.  I'd have to look in the  
<br>
code deeper, but I'm *guessing* that it might be best to use the  
<br>
already-existing state flag (i.e., checking for CONNECTED) because  
<br>
then you won't be introducing any more conditionals in the critical  
<br>
path.
<br>
<p><p><p><p>On May 9, 2007, at 4:45 PM, Donald Kerr wrote:
<br>
<p><span class="quotelev1">&gt; I guess I have not read enough about iwarp yet but if iwarp is sitting
</span><br>
<span class="quotelev1">&gt; below ib verbs or udapl in the stack and is trying to impose
</span><br>
<span class="quotelev1">&gt; restrictions which ib verbs or udapl do not adhere to then maybe iwarp
</span><br>
<span class="quotelev1">&gt; is in the wrong place in the ofed stack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having said that I do agree the OMPI community needs to consider where
</span><br>
<span class="quotelev1">&gt; iwarp plays in its own stack. If it has not already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 2007-05-09 at 16:27 -0400, Donald Kerr wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So then I agree with Andrew, I think you are trying to impose
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restrictions on uDAPL which are not part of the Spec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; true, but if you want a single btl for IB and IW, then you'll need to
</span><br>
<span class="quotelev2">&gt;&gt; address this issue in some way...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="1514.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Previous message:</strong> <a href="1512.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>In reply to:</strong> <a href="1511.php">Donald Kerr: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl	-	bugs	opened"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1514.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
<li><strong>Reply:</strong> <a href="1514.php">Caitlin Bestler: "Re: [OMPI devel] [ofa-general] Re: OMPI over ofed udapl - bugs opened"</a>
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

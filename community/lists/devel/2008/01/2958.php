<?
$subject_val = "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 13:28:40 2008" -->
<!-- isoreceived="20080110182840" -->
<!-- sent="Thu, 10 Jan 2008 13:28:21 -0500" -->
<!-- isosent="20080110182821" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement" -->
<!-- id="CB99275D-2602-4D4D-BE01-623C232026CF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080110165534.GF30920_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 13:28:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2959.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="2957.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>In reply to:</strong> <a href="2956.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2008, at 11:55 AM, Jon Mason wrote:
<br>
<p><span class="quotelev2">&gt;&gt; BTW, I should point out that the modex CPC string list stuff is
</span><br>
<span class="quotelev2">&gt;&gt; currently somewhat wasteful in the presence of multiple ports on a
</span><br>
<span class="quotelev2">&gt;&gt; host.  This will definitely be bad at scale.  Specifically, we'll  
</span><br>
<span class="quotelev2">&gt;&gt; send
</span><br>
<span class="quotelev2">&gt;&gt; around a CPC string in the openib modex for *each* port.  This may be
</span><br>
<span class="quotelev2">&gt;&gt; repetitive (and wasteful at scale), especially if you have more than
</span><br>
<span class="quotelev2">&gt;&gt; one port/NIC of the same type in each host.  This can cause the modex
</span><br>
<span class="quotelev2">&gt;&gt; size to increase quite a bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While the message sent via modex is now longer, the number of messages
</span><br>
<span class="quotelev1">&gt; sent is the same.  So I would argue that this is only slight less
</span><br>
<span class="quotelev1">&gt; optimal than the current implementation.
</span><br>
<p>Not at scale.
<br>
<p>Consider if someone has 2,000 8-core servers, each with a 2-port HCA.   
<br>
Let's assume a full-machine run of 16,000 MPI processes, each who can  
<br>
use 2 ports. Let's assume non-ConnectX HCAs to be conservative, so  
<br>
they'll all be able to use the oob CPC (someday soon, RDMA CM and IBMC  
<br>
will also be available, but let's start small).
<br>
<p>Each of the 16k MPI procs will have &quot;oob&quot;+sizeof(uint32_t) twice in  
<br>
their modex for a grand total of 14 extra bytes.  No big deal on an  
<br>
individual message, but consider that that's 16,000 * 14 = 224,000  
<br>
extra bytes being gathered to mpirun.
<br>
<p>Then consider that the whole pile of modex data is glommed together  
<br>
and broadcast to each MPI process.  Hence, we're now sending an extra  
<br>
16,000 * 14 * 16,000 = 3,584,000,000 bytes sent across the network  
<br>
during MPI_INIT (in addition to whatever is already being sent in the  
<br>
modex).
<br>
<p>Ralph's work on the new ORTE branch will help this quite a bit (with  
<br>
the routed oob stuff -- sending modex messages only once to each node,  
<br>
vs. once to each process), but still, the numbers are large:
<br>
<p>- gather phase: 16,000 * 14 = 224,000 extra bytes
<br>
- scatter phase: 16,000 * 14 * 2,000 = 448,000 extra bytes
<br>
<p>This is much more manageable, but still -- we should be careful when  
<br>
we can.
<br>
<p>Switching to hashed names and index lists will save quite a bit.  For  
<br>
example, if we do a dumb hash of the cpc name down to 1 byte and send  
<br>
index lists of which ports use each cpc (each index can be 1 byte --  
<br>
leading to a max of 256 ports in each host, which is probably  
<br>
sufficient for the forseeable future!), we're down to 3 extra bytes in  
<br>
the modex which is much more manageable:
<br>
<p>in today's non-routed OOB:
<br>
- gather phase: 16,000 * 3 = 48,000 extra bytes
<br>
- scatter phase: 16,000 * 3 * 16,000 = 768,000,000 extra bytes
<br>
<p>in the soon-to-be per-host modex distribution:
<br>
- gather phase: 16,000 * 3 = 48,000 extra bytes
<br>
- scatter phase: 16,000 * 3 * 2,000 = 96,000,000 extra bytes
<br>
<p>Additionally, the routed oob makes the reality even better than that,  
<br>
because it uses a tree distribution for the modex.  So although the  
<br>
raw number of bytes is the same as a per-host-but-not-routed modex  
<br>
distribution, the distribution is quite wide, potentially avoiding  
<br>
network congestion (because different ports/links/servers are  
<br>
involved, all in parallel).
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
<li><strong>Next message:</strong> <a href="2959.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<li><strong>Previous message:</strong> <a href="2957.php">Jeff Squyres: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>In reply to:</strong> <a href="2956.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
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

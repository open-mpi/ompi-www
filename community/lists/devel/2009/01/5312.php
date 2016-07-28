<?
$subject_val = "Re: [OMPI devel] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 16:46:41 2009" -->
<!-- isoreceived="20090126214641" -->
<!-- sent="Mon, 26 Jan 2009 16:46:35 -0500" -->
<!-- isosent="20090126214635" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heterogeneous OpenFabrics hardware" -->
<!-- id="8DFB8BD4-B1B8-4649-8591-EF920B76BB93_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090126213329.GA3311_at_hpegg.hsd1.ca.comcast.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heterogeneous OpenFabrics hardware<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 16:46:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5313.php">Jeff Squyres: "[OMPI devel] koenig-btl addition: r20352"</a>
<li><strong>Previous message:</strong> <a href="5311.php">Nifty Tom Mitchell: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="5311.php">Nifty Tom Mitchell: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5314.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="5314.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2009, at 4:33 PM, Nifty Tom Mitchell wrote:
<br>
<p><span class="quotelev1">&gt; I suspect the most common transport would be TCP/IP and that would  
</span><br>
<span class="quotelev1">&gt; introduce
</span><br>
<span class="quotelev1">&gt; gateway and routing issues between quick fabrics and other quick  
</span><br>
<span class="quotelev1">&gt; fabrics
</span><br>
<span class="quotelev1">&gt; that would be intolerable for most HPC applications (but not all).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may be that IPoIB  would be a sufficient communication layer for  
</span><br>
<span class="quotelev1">&gt; Infiniband
</span><br>
<span class="quotelev1">&gt; fabrics but would not address Myrinet or GigE+ links.   Gateways and
</span><br>
<span class="quotelev1">&gt; bridges would have to come to the party.
</span><br>
<p>I think the prevalent attitude would be: &quot;if you have a low latency  
<br>
network, why hobble yourself with IP over &lt;native&gt;?&quot;
<br>
<p><span class="quotelev1">&gt; On this point...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I'm pretty sure that OMPI failed when used with QLogic and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox HCAs in a single MPI job.  This is fairly unsurprising,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given
</span><br>
<span class="quotelev1">&gt; if OMPI was compiled to use the QLogic PSM layer then it would
</span><br>
<span class="quotelev1">&gt; interoperate best with PSM capable hardware.   Since QLogic sells  
</span><br>
<span class="quotelev1">&gt; multiple
</span><br>
<span class="quotelev1">&gt; HCAs including Mellanox design HCAs it is incorrect to make a blanket
</span><br>
<span class="quotelev1">&gt; statement that QLogic HCAs do not inter-operate with Mellanox.
</span><br>
<p>Note that I did not say that.  I specifically stated that OMPI failed  
<br>
and it is due to the fact that we are customizing for the individual  
<br>
hardware devices.  To be clear: this is an OMPI issue.  I'm asking (at  
<br>
the request of the IWG) if anyone cares about fixing it.
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
<li><strong>Next message:</strong> <a href="5313.php">Jeff Squyres: "[OMPI devel] koenig-btl addition: r20352"</a>
<li><strong>Previous message:</strong> <a href="5311.php">Nifty Tom Mitchell: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="5311.php">Nifty Tom Mitchell: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5314.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="5314.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
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

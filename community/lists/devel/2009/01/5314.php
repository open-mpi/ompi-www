<?
$subject_val = "Re: [OMPI devel] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 08:15:46 2009" -->
<!-- isoreceived="20090127131546" -->
<!-- sent="Tue, 27 Jan 2009 08:15:39 -0500" -->
<!-- isosent="20090127131539" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heterogeneous OpenFabrics hardware" -->
<!-- id="9324E0BB-F286-4A44-B142-9EB97C6E53D8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8DFB8BD4-B1B8-4649-8591-EF920B76BB93_at_cisco.com" -->
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
<strong>Date:</strong> 2009-01-27 08:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Previous message:</strong> <a href="5313.php">Jeff Squyres: "[OMPI devel] koenig-btl addition: r20352"</a>
<li><strong>In reply to:</strong> <a href="5312.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5319.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="5319.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2009, at 4:46 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Note that I did not say that.  I specifically stated that OMPI  
</span><br>
<span class="quotelev1">&gt; failed and it is due to the fact that we are customizing for the  
</span><br>
<span class="quotelev1">&gt; individual hardware devices.  To be clear: this is an OMPI issue.   
</span><br>
<span class="quotelev1">&gt; I'm asking (at the request of the IWG) if anyone cares about fixing  
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<p><p>I should clarify something in this discussion: Open MPI is *capable*  
<br>
of running in heterogeneous OpenFabrics hardware (assuming IB &lt;--&gt; IB  
<br>
and iWARP &lt;--&gt; iWARP, of course -- not IB &lt;--&gt; iWARP) as long as it is  
<br>
configured to use the same verbs/hardware configuration on all the  
<br>
hardware.  Depending on the hardware, Open MPI may not be configured  
<br>
to run this way by default because it may choose to customize  
<br>
differently for different HCAs/RNICs.
<br>
<p>However, if one manually configures Open MPI to use the same verbs/ 
<br>
hardware configuration values across all the HCAs/RNICs in your  
<br>
cluster, Open MPI will probably work fine.  If Open MPI doesn't work  
<br>
in this kind of configuration, it may indicate some kind of vendor HCA/ 
<br>
RNIC incompatibility.
<br>
<p>Case in point: I regression test &quot;limited heterogeneous&quot; scenarios on  
<br>
my MPI testing cluster at Cisco every night.  Specifically, I have a  
<br>
variety of different models of Mellanox HCAs and they all interoperate  
<br>
just fine across 2 air-gapped IB subnets.  I don't know if anyone has  
<br>
tested with wildly different HCAs/RNICs using some lowest-common  
<br>
denominator verbs/hardware configuration values (i.e., some set of  
<br>
values that is supported by all HCAs/RNICs) to see if OMPI works.  I  
<br>
don't immediately see why that wouldn't work, but I haven't tested it  
<br>
myself.
<br>
<p>Out of the box, however, Open MPI is not necessarily configured to  
<br>
have the same verbs/hardware configuration for each device.  That is  
<br>
what may fail by default.
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
<li><strong>Next message:</strong> <a href="5315.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Previous message:</strong> <a href="5313.php">Jeff Squyres: "[OMPI devel] koenig-btl addition: r20352"</a>
<li><strong>In reply to:</strong> <a href="5312.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5319.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="5319.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
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

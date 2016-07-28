<?
$subject_val = "Re: [OMPI devel] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 15:24:23 2009" -->
<!-- isoreceived="20090127202423" -->
<!-- sent="Tue, 27 Jan 2009 15:24:16 -0500" -->
<!-- isosent="20090127202416" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heterogeneous OpenFabrics hardware" -->
<!-- id="E5A87C25-EA98-4205-A984-8FBC03F1A05D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9324E0BB-F286-4A44-B142-9EB97C6E53D8_at_cisco.com" -->
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
<strong>Date:</strong> 2009-01-27 15:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5320.php">Eugene Loh: "Re: [OMPI devel] BTL/sm meeting on Wed after Forum"</a>
<li><strong>Previous message:</strong> <a href="5318.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] [Rescheduled] Outage of milliways on Jan 27th, 2009"</a>
<li><strong>In reply to:</strong> <a href="5314.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was discussion about this issue on the call today.  Several  
<br>
vendors expressed willingness to &quot;fix&quot; the problem and make OMPI  
<br>
interop with different HCAs and RNICs in a single job run: Sun, IBM,  
<br>
Mellanox.
<br>
<p>So the question is -- what exactly do you want to do to fix this?   
<br>
Assumedly this kind of auto-detection will only occur when we have a  
<br>
modex -- further assuming that each port (module) can pass around its  
<br>
vendor and part ID.  Then upon start_connect(), you can look up your  
<br>
peer's vendor and part ID and look up its values in the INI file and  
<br>
see if there's a clash.  That's a very general idea; I haven't re- 
<br>
looked at the code recently to see if that would actually work.
<br>
<p>I posted one idea here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2009/01/7861.php">http://www.open-mpi.org/community/lists/users/2009/01/7861.php</a>
<br>
<p>But I'm not entirely convinced that's the Right way to go.
<br>
<p><p><p>On Jan 27, 2009, at 8:15 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 26, 2009, at 4:46 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that I did not say that.  I specifically stated that OMPI  
</span><br>
<span class="quotelev2">&gt;&gt; failed and it is due to the fact that we are customizing for the  
</span><br>
<span class="quotelev2">&gt;&gt; individual hardware devices.  To be clear: this is an OMPI issue.   
</span><br>
<span class="quotelev2">&gt;&gt; I'm asking (at the request of the IWG) if anyone cares about fixing  
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I should clarify something in this discussion: Open MPI is *capable*  
</span><br>
<span class="quotelev1">&gt; of running in heterogeneous OpenFabrics hardware (assuming IB &lt;--&gt;  
</span><br>
<span class="quotelev1">&gt; IB and iWARP &lt;--&gt; iWARP, of course -- not IB &lt;--&gt; iWARP) as long as  
</span><br>
<span class="quotelev1">&gt; it is configured to use the same verbs/hardware configuration on all  
</span><br>
<span class="quotelev1">&gt; the hardware.  Depending on the hardware, Open MPI may not be  
</span><br>
<span class="quotelev1">&gt; configured to run this way by default because it may choose to  
</span><br>
<span class="quotelev1">&gt; customize differently for different HCAs/RNICs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if one manually configures Open MPI to use the same verbs/ 
</span><br>
<span class="quotelev1">&gt; hardware configuration values across all the HCAs/RNICs in your  
</span><br>
<span class="quotelev1">&gt; cluster, Open MPI will probably work fine.  If Open MPI doesn't work  
</span><br>
<span class="quotelev1">&gt; in this kind of configuration, it may indicate some kind of vendor  
</span><br>
<span class="quotelev1">&gt; HCA/RNIC incompatibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Case in point: I regression test &quot;limited heterogeneous&quot; scenarios  
</span><br>
<span class="quotelev1">&gt; on my MPI testing cluster at Cisco every night.  Specifically, I  
</span><br>
<span class="quotelev1">&gt; have a variety of different models of Mellanox HCAs and they all  
</span><br>
<span class="quotelev1">&gt; interoperate just fine across 2 air-gapped IB subnets.  I don't know  
</span><br>
<span class="quotelev1">&gt; if anyone has tested with wildly different HCAs/RNICs using some  
</span><br>
<span class="quotelev1">&gt; lowest-common denominator verbs/hardware configuration values (i.e.,  
</span><br>
<span class="quotelev1">&gt; some set of values that is supported by all HCAs/RNICs) to see if  
</span><br>
<span class="quotelev1">&gt; OMPI works.  I don't immediately see why that wouldn't work, but I  
</span><br>
<span class="quotelev1">&gt; haven't tested it myself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Out of the box, however, Open MPI is not necessarily configured to  
</span><br>
<span class="quotelev1">&gt; have the same verbs/hardware configuration for each device.  That is  
</span><br>
<span class="quotelev1">&gt; what may fail by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="5320.php">Eugene Loh: "Re: [OMPI devel] BTL/sm meeting on Wed after Forum"</a>
<li><strong>Previous message:</strong> <a href="5318.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] [Rescheduled] Outage of milliways on Jan 27th, 2009"</a>
<li><strong>In reply to:</strong> <a href="5314.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 13:12:10 2007" -->
<!-- isoreceived="20070813171210" -->
<!-- sent="Mon, 13 Aug 2007 13:11:56 -0400" -->
<!-- isosent="20070813171156" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="094195E9-1630-408B-B66B-A0F1D65814A5_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C29B5D28-FCB8-45D9-BD2C-05B4F399AB9E_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-08-13 13:11:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2133.php">Richard Graham: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2123.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2134.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 13, 2007, at 11:12 AM, Galen Shipman wrote:
<br>
<p><span class="quotelev1">&gt; 1) remove 0 byte optimization of not initializing the convertor
</span><br>
<span class="quotelev1">&gt;       This costs us an &#147;if&#147; in MCA_PML_BASE_SEND_REQUEST_INIT and an
</span><br>
<span class="quotelev1">&gt; &#147;if&#147; in mca_pml_ob1_send_request_start_copy
</span><br>
<span class="quotelev1">&gt; +++
</span><br>
<span class="quotelev1">&gt; Measure the convertor initialization before taking any other action.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<p>I talked with Galen and then with Pasha; Pasha will look into this.   
<br>
Specifically:
<br>
<p>- Investigate ob1 and find all the places we're doing 0-byte  
<br>
optimizations (I don't think that there are any in the openib btl...?).
<br>
<p>- Selectively remove each of the zero-byte optimizations and measure  
<br>
what the cost is, both in terms of time and cycles (using the RDTSC  
<br>
macro/inline function that's somewhere already in OMPI).  If  
<br>
possible, it would be best to measure these individually rather than  
<br>
removing all of them and looking at the aggregate.
<br>
<p>- Do all of this with and without heterogeneous support enabled to  
<br>
measure what the cost of heterogeneity is.
<br>
<p>This will enable us to find out where the time is being spent.   
<br>
Clearly, there's some differences between zero and nonzero byte  
<br>
messages, so it would be a good first step to understand exactly what  
<br>
they are.
<br>
<p><span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) get rid of mca_pml_ob1_send_request_start_prepare and
</span><br>
<p>This is also all good stuff; let's look into the zero-byte  
<br>
optimizations first and then tackle the rest of these after that.
<br>
<p>Good?
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
<li><strong>Next message:</strong> <a href="2133.php">Richard Graham: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2131.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2123.php">Galen Shipman: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2134.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
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

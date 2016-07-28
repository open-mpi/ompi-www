<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 07:15:36 2007" -->
<!-- isoreceived="20070813111536" -->
<!-- sent="Mon, 13 Aug 2007 07:16:41 -0400" -->
<!-- isosent="20070813111641" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="46C03D99.1060103_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="834A1FB7-6DDF-428E-8CEF-B008B1F108C6_at_cisco.com" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 07:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2111.php">Scott Atchley: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2109.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2106.php">Jeff Squyres: "[OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;With Mellanox's new HCA (ConnectX), extremely low latencies are  
</span><br>
<span class="quotelev1">&gt;possible for short messages between two MPI processes.  Currently,  
</span><br>
<span class="quotelev1">&gt;OMPI's latency is around 1.9us while all other MPI's (HP MPI, Intel  
</span><br>
<span class="quotelev1">&gt;MPI, MVAPICH[2], etc.) are around 1.4us.  A big reason for this  
</span><br>
<span class="quotelev1">&gt;difference is that, at least with MVAPICH[2], they are doing wire  
</span><br>
<span class="quotelev1">&gt;protocol header caching where the openib BTL does not.  Specifically:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- Mellanox tested MVAPICH with the header caching; latency was around  
</span><br>
<span class="quotelev1">&gt;1.4us
</span><br>
<span class="quotelev1">&gt;- Mellanox tested MVAPICH without the header caching; latency was  
</span><br>
<span class="quotelev1">&gt;around 1.9us
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Given that OMPI is the lone outlier around 1.9us, I think we have no  
</span><br>
<span class="quotelev1">&gt;choice except to implement the header caching and/or examine our  
</span><br>
<span class="quotelev1">&gt;header to see if we can shrink it.  Mellanox has volunteered to  
</span><br>
<span class="quotelev1">&gt;implement header caching in the openib btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any objections?  We can discuss what approaches we want to take  
</span><br>
<span class="quotelev1">&gt;(there's going to be some complications because of the PML driver,  
</span><br>
<span class="quotelev1">&gt;etc.); perhaps in the Tuesday Mellanox teleconf...?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
This sounds great.  Sun, would like to hear how thing are being done
<br>
so we can possibly port the solution to the udapl btl.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2111.php">Scott Atchley: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2109.php">Gleb Natapov: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2106.php">Jeff Squyres: "[OMPI devel] openib btl header caching"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug 12 15:49:32 2007" -->
<!-- isoreceived="20070812194932" -->
<!-- sent="Sun, 12 Aug 2007 22:49:19 +0300" -->
<!-- isosent="20070812194919" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl header caching" -->
<!-- id="20070812194919.GA23182_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-12 15:49:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2108.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2106.php">Jeff Squyres: "[OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2106.php">Jeff Squyres: "[OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2108.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2108.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2120.php">Christian Bell: "Re: [OMPI devel] openib btl header caching"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Aug 11, 2007 at 09:55:18AM -0700, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; With Mellanox's new HCA (ConnectX), extremely low latencies are  
</span><br>
<span class="quotelev1">&gt; possible for short messages between two MPI processes.  Currently,  
</span><br>
<span class="quotelev1">&gt; OMPI's latency is around 1.9us while all other MPI's (HP MPI, Intel  
</span><br>
<span class="quotelev1">&gt; MPI, MVAPICH[2], etc.) are around 1.4us.  A big reason for this  
</span><br>
<span class="quotelev1">&gt; difference is that, at least with MVAPICH[2], they are doing wire  
</span><br>
<span class="quotelev1">&gt; protocol header caching where the openib BTL does not.  Specifically:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Mellanox tested MVAPICH with the header caching; latency was around  
</span><br>
<span class="quotelev1">&gt; 1.4us
</span><br>
<span class="quotelev1">&gt; - Mellanox tested MVAPICH without the header caching; latency was  
</span><br>
<span class="quotelev1">&gt; around 1.9us
</span><br>
<span class="quotelev1">&gt; 
</span><br>
As far as I remember Mellanox results and according to our testing
<br>
difference between MVAPICH with header caching and OMPI is 0.2-0.3us.
<br>
Not 0.5us. And MVAPICH without header caching is actually worse then
<br>
OMPI for small messages.
<br>
<p><span class="quotelev1">&gt; Given that OMPI is the lone outlier around 1.9us, I think we have no  
</span><br>
<span class="quotelev1">&gt; choice except to implement the header caching and/or examine our  
</span><br>
<span class="quotelev1">&gt; header to see if we can shrink it.  Mellanox has volunteered to  
</span><br>
<span class="quotelev1">&gt; implement header caching in the openib btl.
</span><br>
I think we have a chose. Not implement header caching, but just change the
<br>
osu_latency benchmark to send each message with different tag :)
<br>
I am not against header caching per se, but if it will complicate code
<br>
even a little bit I don't think we should implemented it just to benefit one
<br>
fabricated benchmark (AFAIR before header caching was implemented in
<br>
MVAPICH mpi_latency actually sent messages with different tags).
<br>
Also there is really nothing to cache in openib BTL. Openin BTL header is 4
<br>
bytes long. The caching will have to be done in OB1 and there it will
<br>
affect every other interconnect.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any objections?  We can discuss what approaches we want to take  
</span><br>
<span class="quotelev1">&gt; (there's going to be some complications because of the PML driver,  
</span><br>
<span class="quotelev1">&gt; etc.); perhaps in the Tuesday Mellanox teleconf...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
My main objection is that the only reason you propose to do this is some
<br>
bogus benchmark? Is there any other reason to implement header caching?
<br>
I also hope you don't propose to break layering and somehow cache PML headers
<br>
in BTL.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2108.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2106.php">Jeff Squyres: "[OMPI devel] openib btl header caching"</a>
<li><strong>In reply to:</strong> <a href="2106.php">Jeff Squyres: "[OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2108.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2108.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Reply:</strong> <a href="2120.php">Christian Bell: "Re: [OMPI devel] openib btl header caching"</a>
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

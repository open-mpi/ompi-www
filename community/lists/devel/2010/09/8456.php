<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 09:47:28 2010" -->
<!-- isoreceived="20100903134728" -->
<!-- sent="Fri, 3 Sep 2010 09:47:23 -0400" -->
<!-- isosent="20100903134723" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="1FB3A925-5CDD-49CE-A910-28E6C5FE102D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3E30988A-AAC0-4A16-8E90-C3AC8A4B1592_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] fix mx btl_bandwidth<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 09:47:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8457.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8461.php">Bogdan Costescu: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8461.php">Bogdan Costescu: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2010, at 9:38 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I think you will have to revert this patch as the btl_bandwidth __IS__ supposed to be in Mbs and not MBs. We usually talk about networks in Mbs (there is a pattern in Ethernet 1G/10G, Myricom 10G).
</span><br>
<p>This is why I shouldn't commit patches for others, and why I'm glad I pushed Scott to commit the other fixes himself...
<br>
<p>I'll revert; you, Scott, and Brice figure out what you want to do.
<br>
<p><span class="quotelev1">&gt; In addition the original design of the multi-rail was based on this assumption, and the multi-rail handling code deal with these values (at that level I don't think it really matters, but at least it needs consistent values from all BTLs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, going over the existing BTLs I can see that some BTLs do not correctly set this value:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTL     Bandwidth        Auto-detect     Status
</span><br>
<span class="quotelev1">&gt; Elan    2000                NO           Correct
</span><br>
<span class="quotelev1">&gt; GM      250                 NO           Doubtful
</span><br>
<span class="quotelev1">&gt; MX      2000/10000          YES (Mbs)    Correct (before the patch)
</span><br>
<span class="quotelev1">&gt; OFUD    800                 NO           Doubtful
</span><br>
<span class="quotelev1">&gt; OpenIB  2000/4000/8000      YES (Mbs)    Correct (multiplied by the active_width)
</span><br>
<span class="quotelev1">&gt; Portals 1000                NO           Doubtful
</span><br>
<span class="quotelev1">&gt; SCTP    100                 NO           Conservative value (correct)
</span><br>
<span class="quotelev1">&gt; Self    100                 XXX          Correct (doesn't matter anyway)
</span><br>
<span class="quotelev1">&gt; SM      9000                NO           Correct
</span><br>
<span class="quotelev1">&gt; TCP     100                 NO           Conservative value (correct)
</span><br>
<span class="quotelev1">&gt; UDAPL   225                 NO           Incorrect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some of these BTL values do not make sense, neither in Mbs or MBs. Here is a list of such BTLs: OFUD, Portals, UDAPL. If the corresponding developers can provide the default bandwidth (in Mbs) I will update their values.
</span><br>
<p>OFUD should be just like OpenFabrics.  But I doubt anyone cares.  Should we remove it?
<br>
<p>UDAPL intentionally hides that kind of stuff; I don't know if it's possible to get it.  Rolf/Terry?
<br>
<p><span class="quotelev1">&gt; For SCTP, TCP I don't know how to detect it reliably in a portable way, so I expect to let them set to this very conservative value. Moreover, the BTL TCP is only used for multi-rail if the available high performance network allows it, so it doesn't really matter.
</span><br>
<p>Some servers have 1GB and 10GB TCP, though...
<br>
<p>It might be worth having even a Linux-specific way to auto-detect, just for this use case (which is becoming more common -- 1GB LOM and a 10GB non-iWARP NIC).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8457.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Previous message:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8455.php">George Bosilca: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8461.php">Bogdan Costescu: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8461.php">Bogdan Costescu: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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

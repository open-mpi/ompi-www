<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 07:50:35 2008" -->
<!-- isoreceived="20080715115035" -->
<!-- sent="Tue, 15 Jul 2008 07:44:21 -0400" -->
<!-- isosent="20080715114421" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="C9942813-D4CA-4B9E-A29B-95EB564CFA64_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4A1E692.58A5%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-15 07:44:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4357.php">Lenny Verkhovsky: "[OMPI devel] r18850 seqv"</a>
<li><strong>Previous message:</strong> <a href="4355.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4368.php">Don Kerr: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4368.php">Don Kerr: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 15, 2008, at 7:30 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Minor clarification: we did not test RDMACM on RoadRunner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just for further clarification - I did, and it wasn't a particularly  
</span><br>
<span class="quotelev1">&gt; good
</span><br>
<span class="quotelev1">&gt; experience. Encountered several problems, none of them overwhelming,  
</span><br>
<span class="quotelev1">&gt; hence
</span><br>
<span class="quotelev1">&gt; my comments.
</span><br>
<p>Ah -- I didn't know this.  What went wrong?  We need to fix it if  
<br>
there are problems.
<br>
<p><span class="quotelev2">&gt;&gt; RDMACM, on the other hand, is *necessary* for iWARP connections.  We
</span><br>
<span class="quotelev2">&gt;&gt; know it won't scale well because of ARP issues, to which the iWARP
</span><br>
<span class="quotelev2">&gt;&gt; vendors are publishing their own solutions (pre-populating ARP  
</span><br>
<span class="quotelev2">&gt;&gt; caches,
</span><br>
<span class="quotelev2">&gt;&gt; etc.).  Even when built and installed, RDMACM will not be used by
</span><br>
<span class="quotelev2">&gt;&gt; default for IB hardware (you have to specifically ask for it).  Since
</span><br>
<span class="quotelev2">&gt;&gt; it's necessary for iWARP, I think we need to build and install it by
</span><br>
<span class="quotelev2">&gt;&gt; default.  Most importantly: production IB users won't be disturbed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it is necessary for iWARP, then fine - so long as it is only used  
</span><br>
<span class="quotelev1">&gt; if
</span><br>
<span class="quotelev1">&gt; specifically requested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I would also ask that we be able to -not- build it upon  
</span><br>
<span class="quotelev1">&gt; request so
</span><br>
<span class="quotelev1">&gt; we can be certain a user doesn't attempt to use it by mistake (&quot;gee,  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; looks interesting - let Mikey try it!&quot;). Ditto for ibcm support.
</span><br>
<p>Pasha added configure switches for this about a week ago:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--en|disable-openib-ibcm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--en|disable-openib-rdmacm
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
<li><strong>Next message:</strong> <a href="4357.php">Lenny Verkhovsky: "[OMPI devel] r18850 seqv"</a>
<li><strong>Previous message:</strong> <a href="4355.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4354.php">Ralph Castain: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4368.php">Don Kerr: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4368.php">Don Kerr: "Re: [OMPI devel] IBCM error"</a>
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

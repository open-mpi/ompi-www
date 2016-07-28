<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 12:48:56 2007" -->
<!-- isoreceived="20070508164856" -->
<!-- sent="Tue, 8 May 2007 11:50:56 -0400" -->
<!-- isosent="20070508155056" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM" -->
<!-- id="73CEA9F2-CDBD-4137-91E3-5CC13FE64DF9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1178632029.3056.3.camel_at_stevo-desktop" -->
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
<strong>Date:</strong> 2007-05-08 11:50:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1484.php">Steve Wise: "[OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI	and RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1482.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="1481.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1482.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Reply:</strong> <a href="1482.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the &quot;FYI&quot; category...
<br>
<p>There was discussion about the udpal BTL over OFED today on the  
<br>
weekly developer teleconference (per my earlier post, a user is  
<br>
reporting that it doesn't work).  Andrew Friedley is going to work  
<br>
with the Sun developers -- he thinks he might know where the problem  
<br>
is coming from but is in process of physically relocating, and  
<br>
therefore couldn't look at it until late next week at the earliest.
<br>
<p>Sun may be able to pick up the issue -- but if so, I don't know what  
<br>
their timeframe will be (and it may depend on the severity of the  
<br>
problem).
<br>
<p><p>On May 8, 2007, at 9:47 AM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2007-05-07 at 20:39 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 7, 2007, at 6:52 PM, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, there appears to be a DAPL BTL in OMPI.  Is this BTL complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enabled for the ofed-1.2 udapl library?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, it is complete and is well-tested in Solaris.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is not well tested in Linux/OFED (we've been concentrating on the
</span><br>
<span class="quotelev2">&gt;&gt; verbs interface on the OFED side of things -- the &quot;openib&quot; BTL [we
</span><br>
<span class="quotelev2">&gt;&gt; never renamed it when OpenIB changed names to OpenFabrics]).  In
</span><br>
<span class="quotelev2">&gt;&gt; fact, we've had scattered reports of it not working properly in  
</span><br>
<span class="quotelev2">&gt;&gt; Linux/
</span><br>
<span class="quotelev2">&gt;&gt; OFED, but those could well have been pilot error (i.e., me not trying
</span><br>
<span class="quotelev2">&gt;&gt; to run properly -- I know just about zilch about udapl).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason I'm asking is twofold:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) this can get OMPI running on iwarp devices today if it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) the udapl code can be a model for the rdma-cm piece, since the two
</span><br>
<span class="quotelev1">&gt; are similary (client / server connection set, ipaddr/port based,  
</span><br>
<span class="quotelev1">&gt; etc)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try it out on T3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve.
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
<li><strong>Next message:</strong> <a href="1484.php">Steve Wise: "[OMPI devel] OMPI over OFA udapl (was Re: [ofa-general] OpenMPI	and RDMA-CM)"</a>
<li><strong>Previous message:</strong> <a href="1482.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>In reply to:</strong> <a href="1481.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1482.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Reply:</strong> <a href="1482.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
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

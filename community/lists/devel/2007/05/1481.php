<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 09:47:14 2007" -->
<!-- isoreceived="20070508134714" -->
<!-- sent="Tue, 08 May 2007 08:47:09 -0500" -->
<!-- isosent="20070508134709" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM" -->
<!-- id="1178632029.3056.3.camel_at_stevo-desktop" -->
<!-- inreplyto="BB132B4A-DED0-41B4-8B44-6ADAB5F9740B_at_cisco.com" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-08 09:47:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1482.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Previous message:</strong> <a href="1480.php">Rob: "[OMPI devel] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1478.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1483.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Reply:</strong> <a href="1483.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2007-05-07 at 20:39 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 7, 2007, at 6:52 PM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also, there appears to be a DAPL BTL in OMPI.  Is this BTL complete  
</span><br>
<span class="quotelev2">&gt; &gt; and
</span><br>
<span class="quotelev2">&gt; &gt; enabled for the ofed-1.2 udapl library?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it is complete and is well-tested in Solaris.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is not well tested in Linux/OFED (we've been concentrating on the  
</span><br>
<span class="quotelev1">&gt; verbs interface on the OFED side of things -- the &quot;openib&quot; BTL [we  
</span><br>
<span class="quotelev1">&gt; never renamed it when OpenIB changed names to OpenFabrics]).  In  
</span><br>
<span class="quotelev1">&gt; fact, we've had scattered reports of it not working properly in Linux/ 
</span><br>
<span class="quotelev1">&gt; OFED, but those could well have been pilot error (i.e., me not trying  
</span><br>
<span class="quotelev1">&gt; to run properly -- I know just about zilch about udapl).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The reason I'm asking is twofold:  
<br>
<p>1) this can get OMPI running on iwarp devices today if it works.
<br>
<p>2) the udapl code can be a model for the rdma-cm piece, since the two
<br>
are similary (client / server connection set, ipaddr/port based, etc)...
<br>
<p>I'll try it out on T3.
<br>
<p><p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1482.php">Steve Wise: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Previous message:</strong> <a href="1480.php">Rob: "[OMPI devel] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1478.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1483.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
<li><strong>Reply:</strong> <a href="1483.php">Jeff Squyres: "Re: [OMPI devel] [ofa-general] OpenMPI and RDMA-CM"</a>
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

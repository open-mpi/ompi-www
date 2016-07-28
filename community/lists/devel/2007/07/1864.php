<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 14:29:16 2007" -->
<!-- isoreceived="20070712182916" -->
<!-- sent="Thu, 12 Jul 2007 14:28:49 -0400" -->
<!-- isosent="20070712182849" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB BTL and SRQs" -->
<!-- id="98C22F53-57D7-49D6-B701-349B4CFB4374_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46966269.9030602_at_Sun.COM" -->
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
<strong>Date:</strong> 2007-07-12 14:28:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1865.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1863.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>In reply to:</strong> <a href="1863.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1875.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Reply:</strong> <a href="1875.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 12, 2007, at 1:18 PM, Don Kerr wrote:
<br>
<p><span class="quotelev2">&gt;&gt; - So if you want to simply eliminate the flow control, choose M high
</span><br>
<span class="quotelev2">&gt;&gt; enough (or just a total number of receive buffers to post to the SRQ)
</span><br>
<span class="quotelev2">&gt;&gt; that you won't ever run out of resources and you should see some
</span><br>
<span class="quotelev2">&gt;&gt; speedup from lack of flow control.  This obviously mainly helps apps
</span><br>
<span class="quotelev2">&gt;&gt; with lots of small messages; it may not help in many other cases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Is there any distinction by the size of the message. If the &quot;M&quot;
</span><br>
<span class="quotelev1">&gt; parameter is set high does the openib btl post this many recv buffers
</span><br>
<span class="quotelev1">&gt; for the SRQ on both QPs?  Or are SRQs only created on one of the QPs?
</span><br>
<p>Keep in mind that the SRQs are only for send/receive messages, not  
<br>
RDMA messages.
<br>
<p>Each receive buffer has a max size (the eager limit, IIRC).  So if  
<br>
the message is larger than that, we'll fragment per the pipeline  
<br>
protocol, possibly subject to doing RDMA if the message is large  
<br>
enough, yadda yadda yadda.  More specifically, the size of the buffer  
<br>
is not dependent upon an individual message that is being sent or  
<br>
received (since they're pre-posted -- we have no idea what the  
<br>
message sizes will be).
<br>
<p>As for whether the SRQ is on both QP's, this is a Galen/George/Gleb  
<br>
(G^3) question...
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
<li><strong>Next message:</strong> <a href="1865.php">Ralph H Castain: "Re: [OMPI devel] Orte update"</a>
<li><strong>Previous message:</strong> <a href="1863.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>In reply to:</strong> <a href="1863.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1875.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Reply:</strong> <a href="1875.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
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

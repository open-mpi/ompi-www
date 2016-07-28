<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 13 09:07:01 2007" -->
<!-- isoreceived="20070713130701" -->
<!-- sent="Fri, 13 Jul 2007 09:07:57 -0400" -->
<!-- isosent="20070713130757" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB BTL and SRQs" -->
<!-- id="4697792D.4040201_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="98C22F53-57D7-49D6-B701-349B4CFB4374_at_cisco.com" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-13 09:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1876.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>Previous message:</strong> <a href="1874.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>In reply to:</strong> <a href="1864.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;On Jul 12, 2007, at 1:18 PM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;- So if you want to simply eliminate the flow control, choose M high
</span><br>
<span class="quotelev3">&gt;&gt;&gt;enough (or just a total number of receive buffers to post to the SRQ)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;that you won't ever run out of resources and you should see some
</span><br>
<span class="quotelev3">&gt;&gt;&gt;speedup from lack of flow control.  This obviously mainly helps apps
</span><br>
<span class="quotelev3">&gt;&gt;&gt;with lots of small messages; it may not help in many other cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Is there any distinction by the size of the message. If the &quot;M&quot;
</span><br>
<span class="quotelev2">&gt;&gt;parameter is set high does the openib btl post this many recv buffers
</span><br>
<span class="quotelev2">&gt;&gt;for the SRQ on both QPs?  Or are SRQs only created on one of the QPs?
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Keep in mind that the SRQs are only for send/receive messages, not  
</span><br>
<span class="quotelev1">&gt;RDMA messages.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
That is obviously enough but isn't there a window for MPI messages that 
<br>
are greater than the eager limit but less than where the rdma protocol 
<br>
kicks in and fragments for this size message use fragments larger than 
<br>
than the eager size.
<br>
<p>Maybe this is where openib's high and low priority qp differ from udapl 
<br>
which makes a choice of which endpoint to use based on the size of the 
<br>
fragment. That is why I was curious if openib was using SRQs on both 
<br>
queue pairs.
<br>
<p><span class="quotelev1">&gt;Each receive buffer has a max size (the eager limit, IIRC).  So if  
</span><br>
<span class="quotelev1">&gt;the message is larger than that, we'll fragment per the pipeline  
</span><br>
<span class="quotelev1">&gt;protocol, possibly subject to doing RDMA if the message is large  
</span><br>
<span class="quotelev1">&gt;enough, yadda yadda yadda.  More specifically, the size of the buffer  
</span><br>
<span class="quotelev1">&gt;is not dependent upon an individual message that is being sent or  
</span><br>
<span class="quotelev1">&gt;received (since they're pre-posted -- we have no idea what the  
</span><br>
<span class="quotelev1">&gt;message sizes will be).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As for whether the SRQ is on both QP's, this is a Galen/George/Gleb  
</span><br>
<span class="quotelev1">&gt;(G^3) question...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1876.php">Gleb Natapov: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>Previous message:</strong> <a href="1874.php">Ralph H Castain: "Re: [OMPI devel] [devel-core] Major reduction in ORTE"</a>
<li><strong>In reply to:</strong> <a href="1864.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
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

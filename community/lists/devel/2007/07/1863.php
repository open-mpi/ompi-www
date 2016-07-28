<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 13:17:36 2007" -->
<!-- isoreceived="20070712171736" -->
<!-- sent="Thu, 12 Jul 2007 13:18:33 -0400" -->
<!-- isosent="20070712171833" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB BTL and SRQs" -->
<!-- id="46966269.9030602_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="080D6AB2-0E6B-4AF2-A1E7-670A6430A95B_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-12 13:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1864.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Previous message:</strong> <a href="1862.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>In reply to:</strong> <a href="1861.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1864.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Reply:</strong> <a href="1864.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;There's a few benefits:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- Remember that you post a big pool of buffers instead of num_peers  
</span><br>
<span class="quotelev1">&gt;individual sets of receive buffers.  Hence, if you post M buffers for  
</span><br>
<span class="quotelev1">&gt;each of N peers, each peer -- due to flow control -- can only have M  
</span><br>
<span class="quotelev1">&gt;outstanding sends at a time.  So if you have apps sending lots of  
</span><br>
<span class="quotelev1">&gt;small messages, you can get better utilization of buffer space  
</span><br>
<span class="quotelev1">&gt;because a single peer has more than M buffers to receive into.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- You can also post less than M*N buffers by playing the statistics  
</span><br>
<span class="quotelev1">&gt;of your app -- if you know that you won't have more than M*N messages  
</span><br>
<span class="quotelev1">&gt;outstanding at any given time, you can post fewer receive buffers.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- At the same time, there's a problem with flow control (meaning that  
</span><br>
<span class="quotelev1">&gt;there is none): how can a sender know when they have overflowed the  
</span><br>
<span class="quotelev1">&gt;receiver (other than an RNR)?  So it's not necessarily as safe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- So if you want to simply eliminate the flow control, choose M high  
</span><br>
<span class="quotelev1">&gt;enough (or just a total number of receive buffers to post to the SRQ)  
</span><br>
<span class="quotelev1">&gt;that you won't ever run out of resources and you should see some  
</span><br>
<span class="quotelev1">&gt;speedup from lack of flow control.  This obviously mainly helps apps  
</span><br>
<span class="quotelev1">&gt;with lots of small messages; it may not help in many other cases. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Is there any distinction by the size of the message. If the &quot;M&quot; 
<br>
parameter is set high does the openib btl post this many recv buffers 
<br>
for the SRQ on both QPs?  Or are SRQs only created on one of the QPs?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jul 12, 2007, at 12:29 PM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Through mca parameters one can select the use of shared receive queues
</span><br>
<span class="quotelev2">&gt;&gt;in the openib btl, other than having fewer queues I am wondering what
</span><br>
<span class="quotelev2">&gt;&gt;are the benefits of using this option. Can anyone eleborate on using
</span><br>
<span class="quotelev2">&gt;&gt;them vs the default?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="1864.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Previous message:</strong> <a href="1862.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>In reply to:</strong> <a href="1861.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1864.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Reply:</strong> <a href="1864.php">Jeff Squyres: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
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

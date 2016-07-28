<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 12:40:07 2007" -->
<!-- isoreceived="20070712164007" -->
<!-- sent="Thu, 12 Jul 2007 12:39:49 -0400" -->
<!-- isosent="20070712163949" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB BTL and SRQs" -->
<!-- id="080D6AB2-0E6B-4AF2-A1E7-670A6430A95B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="469656D0.10603_at_Sun.COM" -->
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
<strong>Date:</strong> 2007-07-12 12:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1862.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Previous message:</strong> <a href="1860.php">Galen Shipman: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>In reply to:</strong> <a href="1859.php">Don Kerr: "[OMPI devel] OpenIB BTL and SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1862.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Reply:</strong> <a href="1862.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Reply:</strong> <a href="1863.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's a few benefits:
<br>
<p>- Remember that you post a big pool of buffers instead of num_peers  
<br>
individual sets of receive buffers.  Hence, if you post M buffers for  
<br>
each of N peers, each peer -- due to flow control -- can only have M  
<br>
outstanding sends at a time.  So if you have apps sending lots of  
<br>
small messages, you can get better utilization of buffer space  
<br>
because a single peer has more than M buffers to receive into.
<br>
<p>- You can also post less than M*N buffers by playing the statistics  
<br>
of your app -- if you know that you won't have more than M*N messages  
<br>
outstanding at any given time, you can post fewer receive buffers.
<br>
<p>- At the same time, there's a problem with flow control (meaning that  
<br>
there is none): how can a sender know when they have overflowed the  
<br>
receiver (other than an RNR)?  So it's not necessarily as safe.
<br>
<p>- So if you want to simply eliminate the flow control, choose M high  
<br>
enough (or just a total number of receive buffers to post to the SRQ)  
<br>
that you won't ever run out of resources and you should see some  
<br>
speedup from lack of flow control.  This obviously mainly helps apps  
<br>
with lots of small messages; it may not help in many other cases.
<br>
<p><p>On Jul 12, 2007, at 12:29 PM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; Through mca parameters one can select the use of shared receive queues
</span><br>
<span class="quotelev1">&gt; in the openib btl, other than having fewer queues I am wondering what
</span><br>
<span class="quotelev1">&gt; are the benefits of using this option. Can anyone eleborate on using
</span><br>
<span class="quotelev1">&gt; them vs the default?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="1862.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Previous message:</strong> <a href="1860.php">Galen Shipman: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>In reply to:</strong> <a href="1859.php">Don Kerr: "[OMPI devel] OpenIB BTL and SRQs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1862.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Reply:</strong> <a href="1862.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
<li><strong>Reply:</strong> <a href="1863.php">Don Kerr: "Re: [OMPI devel] OpenIB BTL and SRQs"</a>
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

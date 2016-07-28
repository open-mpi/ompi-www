<?
$subject_val = "Re: [OMPI users] Does multiple Irecv means concurrent receiving ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 23 08:02:53 2014" -->
<!-- isoreceived="20140823120253" -->
<!-- sent="Sat, 23 Aug 2014 12:02:51 +0000" -->
<!-- isosent="20140823120251" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does multiple Irecv means concurrent receiving ?" -->
<!-- id="3EEAB157-CC0B-4B96-83BC-26BB74355D89_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="674183CE400B8344A5F8DC3AA8A8080A2D14B6BC_at_M1-MAIL-HQ01.internal.baidu.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does multiple Irecv means concurrent receiving ?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-23 08:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25141.php">Pengcheng Wang: "[OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>Previous message:</strong> <a href="25139.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25082.php">Zhang,Lei(Ecom): "[OMPI users] Does multiple Irecv means concurrent receiving ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25158.php">Zhang,Lei(Ecom): "[OMPI users] &#180;&#240;&#184;&#180;:  Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>Reply:</strong> <a href="25158.php">Zhang,Lei(Ecom): "[OMPI users] &#180;&#240;&#184;&#180;:  Does multiple Irecv means concurrent receiving ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 20, 2014, at 3:37 AM, Zhang,Lei(Ecom) &lt;zhanglei14_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a performance problem with receiving. In a single master thread, I made several Irecv calls:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Irecv(buf1, ..., tag, ANY_SOURCE, COMM_WORLD)
</span><br>
<span class="quotelev1">&gt; Irecv(buf2, ..., tag, ANY_SOURCE, COMM_WORLD)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Irecv(bufn, ..., tag, ANY_SOURCE, COMM_WORLD)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; all of which try to receive from any node for messages with the same tag.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Then, whenever any of the Irecv completes (using Testany), a separate thread is dispatched to work on the received message.
</span><br>
<span class="quotelev1">&gt; In my program, many nodes will send to this master thread.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; However, I noticed that the speed of recv is almost unaffected no matter how many Irecv calls were made.
</span><br>
<p>I'm not sure what you mean by this statement.  If you add N asynchronous requests and the speed is not decreased, that's a *good* thing, right?
<br>
<p><span class="quotelev1">&gt; It seems that multiple Irecv calls does not mean concurrently receiving from many nodes.
</span><br>
<p>That's a different question.
<br>
<p>It depends on many factors, including your underlying network software and hardware.  If you post many long message Irecvs, for example, and multiple senders concurrently send matching messages, there will almost certainly be some overlap in the receive of messages between the different senders.
<br>
<p>Is that what you are asking?
<br>
<p><span class="quotelev1">&gt; By profiling the node running the master thread, I can see that the network input bandwidth is quite low.
</span><br>
<p>That could also be for many reasons.  Are you sending short messages?  Are you sending messages infrequently?  Is your network otherwise congested?  ...(etc.)?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25141.php">Pengcheng Wang: "[OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>Previous message:</strong> <a href="25139.php">Oscar Vega-Gisbert: "Re: [OMPI users] Best way to communicate a 2d array with Java binding"</a>
<li><strong>In reply to:</strong> <a href="25082.php">Zhang,Lei(Ecom): "[OMPI users] Does multiple Irecv means concurrent receiving ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25158.php">Zhang,Lei(Ecom): "[OMPI users] &#180;&#240;&#184;&#180;:  Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>Reply:</strong> <a href="25158.php">Zhang,Lei(Ecom): "[OMPI users] &#180;&#240;&#184;&#180;:  Does multiple Irecv means concurrent receiving ?"</a>
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

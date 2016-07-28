<?
$subject_val = "[OMPI users] &#180;&#240;&#184;&#180;:  Does multiple Irecv means concurrent receiving ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 00:18:54 2014" -->
<!-- isoreceived="20140827041854" -->
<!-- sent="Wed, 27 Aug 2014 04:18:45 +0000" -->
<!-- isosent="20140827041845" -->
<!-- name="Zhang,Lei(Ecom)" -->
<!-- email="zhanglei14_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;#180;&amp;#240;&amp;#184;&amp;#180;:  Does multiple Irecv means concurrent receiving ?" -->
<!-- id="674183CE400B8344A5F8DC3AA8A8080A2D14F347_at_M1-MAIL-HQ01.internal.baidu.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="3EEAB157-CC0B-4B96-83BC-26BB74355D89_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] &#180;&#240;&#184;&#180;:  Does multiple Irecv means concurrent receiving ?<br>
<strong>From:</strong> Zhang,Lei(Ecom) (<em>zhanglei14_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 00:18:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25159.php">Benjamin Giehle: "[OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Previous message:</strong> <a href="25157.php">Ralph Castain: "Re: [OMPI users] long initialization"</a>
<li><strong>In reply to:</strong> <a href="25140.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does multiple Irecv means concurrent receiving ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25164.php">George Bosilca: "Re: [OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>Reply:</strong> <a href="25164.php">George Bosilca: "Re: [OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I'm not sure what you mean by this statement.  If you add N asynchronous requests and the speed is not decreased, that's a *good* thing, right?
</span><br>

<br>
My problem is that N asynchronous irecv does not *increase* the speed of receiving data compared to just 1 irecv.
<br>
I have multiple nodes sending large messages to the receiving node. But it seems that the multiple irecv are not overlapped.
<br>
The delay between the completion of different irecvs is the same as what I get when there is only 1 irecv.
<br>

<br>
I suspect that maybe sending many large messages to one node at (almost) the same time causes network congestion.
<br>
But I did not improve receive speed even if I reduce the network congestion by sending large messages at different times.
<br>

<br>
I know the problem depends on many things, but is eager to know how to fix it to improve the receiving speed.
<br>

<br>
Lei
<br>

<br>
-----&#211;&#202;&#188;&#254;&#212;&#173;&#188;&#254;-----
<br>
&#183;&#162;&#188;&#254;&#200;&#203;: users [mailto:users-bounces_at_[hidden]] &#180;&#250;&#177;&#237; Jeff Squyres (jsquyres)
<br>
&#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2014&#196;&#234;8&#212;&#194;23&#200;&#213; 20:03
<br>
&#202;&#213;&#188;&#254;&#200;&#203;: Open MPI User's List
<br>
&#214;&#247;&#204;&#226;: Re: [OMPI users] Does multiple Irecv means concurrent receiving ?
<br>

<br>
On Aug 20, 2014, at 3:37 AM, Zhang,Lei(Ecom) &lt;zhanglei14_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; I have a performance problem with receiving. In a single master thread, I made several Irecv calls:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Irecv(buf1, ..., tag, ANY_SOURCE, COMM_WORLD) 
</span><br>
<span class="quotelev1">&gt; Irecv(buf2, ..., tag, ANY_SOURCE, COMM_WORLD) ...
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

<br>
I'm not sure what you mean by this statement.  If you add N asynchronous requests and the speed is not decreased, that's a *good* thing, right?
<br>

<br>
<span class="quotelev1">&gt; It seems that multiple Irecv calls does not mean concurrently receiving from many nodes.
</span><br>

<br>
That's a different question.
<br>

<br>
It depends on many factors, including your underlying network software and hardware.  If you post many long message Irecvs, for example, and multiple senders concurrently send matching messages, there will almost certainly be some overlap in the receive of messages between the different senders.
<br>

<br>
Is that what you are asking?
<br>

<br>
<span class="quotelev1">&gt; By profiling the node running the master thread, I can see that the network input bandwidth is quite low.
</span><br>

<br>
That could also be for many reasons.  Are you sending short messages?  Are you sending messages infrequently?  Is your network otherwise congested?  ...(etc.)?
<br>

<br>
--
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25140.php">http://www.open-mpi.org/community/lists/users/2014/08/25140.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25159.php">Benjamin Giehle: "[OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Previous message:</strong> <a href="25157.php">Ralph Castain: "Re: [OMPI users] long initialization"</a>
<li><strong>In reply to:</strong> <a href="25140.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Does multiple Irecv means concurrent receiving ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25164.php">George Bosilca: "Re: [OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>Reply:</strong> <a href="25164.php">George Bosilca: "Re: [OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?"</a>
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

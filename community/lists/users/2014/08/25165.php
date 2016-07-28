<?
$subject_val = "[OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 09:21:22 2014" -->
<!-- isoreceived="20140827132122" -->
<!-- sent="Wed, 27 Aug 2014 13:21:09 +0000" -->
<!-- isosent="20140827132109" -->
<!-- name="Zhang,Lei(Ecom)" -->
<!-- email="zhanglei14_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;#231;&amp;#173;&amp;#148;&amp;#229;&amp;#164;&amp;#141;:  &amp;#231;&amp;#173;&amp;#148;&amp;#229;&amp;#164;&amp;#141;:  Does multiple Irecv means concurrent receiving ?" -->
<!-- id="674183CE400B8344A5F8DC3AA8A8080A2D14FA88_at_M1-MAIL-HQ01.internal.baidu.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B5996248-937D-47DE-B8F8-78E79824D9B4_at_icl.utk.edu" -->
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
<strong>Subject:</strong> [OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?<br>
<strong>From:</strong> Zhang,Lei(Ecom) (<em>zhanglei14_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 09:21:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25166.php">Brock Palen: "[OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25164.php">George Bosilca: "Re: [OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>In reply to:</strong> <a href="25164.php">George Bosilca: "Re: [OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25168.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#181;&#170;&#206;`:  &#181;&#170;&#206;`:  Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>Reply:</strong> <a href="25168.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#181;&#170;&#206;`:  &#181;&#170;&#206;`:  Does multiple Irecv means concurrent receiving ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that I profiled the receiving node and found that its network bandwidth is used only less than 50%. That's why I want to find ways to increase the receiving throughput. Any ideas ?
<br>

<br>
Lei
<br>

<br>
-----&#233;&#130;&#174;&#228;&#187;&#182;&#229;&#142;&#159;&#228;&#187;&#182;-----
<br>
&#229;&#143;&#145;&#228;&#187;&#182;&#228;&#186;&#186;: users [mailto:users-bounces_at_[hidden]] &#228;&#187;&#163;&#232;&#161;&#168; George Bosilca
<br>
&#229;&#143;&#145;&#233;&#128;&#129;&#230;&#151;&#182;&#233;&#151;&#180;: 2014&#229;&#185;&#180;8&#230;&#156;&#136;27&#230;&#151;&#165; 20:39
<br>
&#230;&#148;&#182;&#228;&#187;&#182;&#228;&#186;&#186;: Open MPI Users
<br>
&#228;&#184;&#187;&#233;&#162;&#152;: Re: [OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;: Does multiple Irecv means concurrent receiving ?
<br>

<br>
You have a physical constraint, the capacity of your links. If you are over 90% of your network bandwidth, there is little to be improved.
<br>

<br>
George.
<br>

<br>
On Aug 27, 2014, at 0:18, &quot;Zhang,Lei(Ecom)&quot; &lt;zhanglei14_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev2">&gt;&gt; I'm not sure what you mean by this statement.  If you add N asynchronous requests and the speed is not decreased, that's a *good* thing, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My problem is that N asynchronous irecv does not *increase* the speed of receiving data compared to just 1 irecv.
</span><br>
<span class="quotelev1">&gt; I have multiple nodes sending large messages to the receiving node. But it seems that the multiple irecv are not overlapped.
</span><br>
<span class="quotelev1">&gt; The delay between the completion of different irecvs is the same as what I get when there is only 1 irecv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect that maybe sending many large messages to one node at (almost) the same time causes network congestion.
</span><br>
<span class="quotelev1">&gt; But I did not improve receive speed even if I reduce the network congestion by sending large messages at different times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know the problem depends on many things, but is eager to know how to fix it to improve the receiving speed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lei
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----&#233;&#130;&#174;&#228;&#187;&#182;&#229;&#142;&#159;&#228;&#187;&#182;-----
</span><br>
<span class="quotelev1">&gt; &#229;&#143;&#145;&#228;&#187;&#182;&#228;&#186;&#186;: users [mailto:users-bounces_at_[hidden]] &#228;&#187;&#163;&#232;&#161;&#168; Jeff Squyres 
</span><br>
<span class="quotelev1">&gt; (jsquyres)
</span><br>
<span class="quotelev1">&gt; &#229;&#143;&#145;&#233;&#128;&#129;&#230;&#151;&#182;&#233;&#151;&#180;: 2014&#229;&#185;&#180;8&#230;&#156;&#136;23&#230;&#151;&#165; 20:03
</span><br>
<span class="quotelev1">&gt; &#230;&#148;&#182;&#228;&#187;&#182;&#228;&#186;&#186;: Open MPI User's List
</span><br>
<span class="quotelev1">&gt; &#228;&#184;&#187;&#233;&#162;&#152;: Re: [OMPI users] Does multiple Irecv means concurrent receiving ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 20, 2014, at 3:37 AM, Zhang,Lei(Ecom) &lt;zhanglei14_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a performance problem with receiving. In a single master thread, I made several Irecv calls:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Irecv(buf1, ..., tag, ANY_SOURCE, COMM_WORLD) Irecv(buf2, ..., tag, 
</span><br>
<span class="quotelev2">&gt;&gt; ANY_SOURCE, COMM_WORLD) ...
</span><br>
<span class="quotelev2">&gt;&gt; Irecv(bufn, ..., tag, ANY_SOURCE, COMM_WORLD)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; all of which try to receive from any node for messages with the same tag.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then, whenever any of the Irecv completes (using Testany), a separate thread is dispatched to work on the received message.
</span><br>
<span class="quotelev2">&gt;&gt; In my program, many nodes will send to this master thread.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, I noticed that the speed of recv is almost unaffected no matter how many Irecv calls were made.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what you mean by this statement.  If you add N asynchronous requests and the speed is not decreased, that's a *good* thing, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems that multiple Irecv calls does not mean concurrently receiving from many nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a different question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on many factors, including your underlying network software and hardware.  If you post many long message Irecvs, for example, and multiple senders concurrently send matching messages, there will almost certainly be some overlap in the receive of messages between the different senders.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that what you are asking?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; By profiling the node running the master thread, I can see that the network input bandwidth is quite low.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That could also be for many reasons.  Are you sending short messages?  Are you sending messages infrequently?  Is your network otherwise congested?  ...(etc.)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25140.php">http://www.open-mpi.org/community/lists/users/2014/08/25140.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25158.php">http://www.open-mpi.org/community/lists/users/2014/08/25158.php</a>
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25164.php">http://www.open-mpi.org/community/lists/users/2014/08/25164.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25166.php">Brock Palen: "[OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25164.php">George Bosilca: "Re: [OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>In reply to:</strong> <a href="25164.php">George Bosilca: "Re: [OMPI users] &#231;&#173;&#148;&#229;&#164;&#141;:  Does multiple Irecv means concurrent receiving ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25168.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#181;&#170;&#206;`:  &#181;&#170;&#206;`:  Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>Reply:</strong> <a href="25168.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#181;&#170;&#206;`:  &#181;&#170;&#206;`:  Does multiple Irecv means concurrent receiving ?"</a>
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

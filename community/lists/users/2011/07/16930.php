<?
$subject_val = "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 21:54:43 2011" -->
<!-- isoreceived="20110715015443" -->
<!-- sent="Thu, 14 Jul 2011 18:54:38 -0700 (PDT)" -->
<!-- isosent="20110715015438" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE." -->
<!-- id="1310694878.91774.YahooMailNeo_at_web121708.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7C897C32-F3E4-4480-AB7A-5273D0AB4B13_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.<br>
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 21:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16931.php">Ralph Castain: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<li><strong>Previous message:</strong> <a href="16929.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>In reply to:</strong> <a href="16927.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16932.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16932.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Friend, 
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I can not specify the rank of the sender. Because only the sender knows to which receiver the message is to be sent. The receiver does not know from which sender the message will come. I am trying to do a research work on load balancing in MPI application where load is redistributed, so in that I require a receiver to receive a load value from a sender that it does not know. On the other hand, the sender actually calculates, to which receiver this load value should be sent. So for this, I want sender to send a message containing the load to a receiver, but receiver does not know from which sender the message will come. See, it is like send receiver in DATAGRAM sockets. The receiver, receives the message on the IP and port, the message which was directed for it. I want to have same behavior. But it seems that it is not possible in MPI. Isn't it?

regards,
Mudassar



________________________________
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;
Cc: Open MPI Users &lt;users_at_[hidden]&gt;
Sent: Friday, July 15, 2011 3:30 AM
Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.

Right.&#160; I thought you were asking about receiving *another* message from whomever you just received from via ANY_SOURCE.

If you want to receive from a specific sender, you just specify the rank you want to receive from -- not ANY_SOURCE.

You will always only receive messages that were sent to *you*.&#160; There's no MPI_SEND_TO_ANYONE_WHO_IS_LISTENING functionality, for example.&#160; So your last statement: &quot;But when it captures with .. MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message (even not targetted for it)&quot; is incorrect.

I guess I still don't understand your question...?


On Jul 14, 2011, at 9:17 PM, Mudassar Majeed wrote:

&gt; 
&gt; I know this, but when I compare status.MPI_SOURCE with myid, they are different. I guess you need to reconsider my question. The MPI_Recv function seems to capture message from the queue with some search parameters like source, tag etc. So in case the receiver does not know the sender and wants to receive only that message which was sent for this receiver. But when it captures with source as MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message (even not targetted for it).
&gt; 
&gt; regards,
&gt; Mudassar
&gt; 
&gt; 
&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Sent: Friday, July 15, 2011 1:58 AM
&gt; Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
&gt; 
&gt; When you use MPI_ANY_SOURCE in a receive, the rank of the actual sender is passed back to you in the status.MPI_SOURCE.
&gt; 
&gt; On Jul 14, 2011, at 7:55 PM, Mudassar Majeed wrote:
&gt; 
&gt; &gt; Hello people, 
&gt; &gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; I am trapped in the following problem plz help me. Suppose a process A sends a message to process B. The process B will receive the message with MPI_Recv with MPI_ANY_SOURCE in the source argument. Let say process B does not know that A is the sender. But I want B to receive message from process A (the one who actually sends the message to process B). But if I use MPI_ANY_SOURCE, then any message from any source is captured by process B (let say there are other processes sending messages). Instead of MPI_ANY_SOURCE I cannot use A in the source argument as B does not know about the sender. What should I do in this situation ?
&gt; &gt; 
&gt; &gt; regards,
&gt; &gt; Mudassar Majeed
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; 


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16930/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16931.php">Ralph Castain: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<li><strong>Previous message:</strong> <a href="16929.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>In reply to:</strong> <a href="16927.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16932.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16932.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
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

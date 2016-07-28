<?
$subject_val = "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 06:51:24 2011" -->
<!-- isoreceived="20110715105124" -->
<!-- sent="Fri, 15 Jul 2011 03:51:18 -0700 (PDT)" -->
<!-- isosent="20110715105118" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE." -->
<!-- id="1310727078.94177.YahooMailNeo_at_web121720.mail.ne1.yahoo.com" -->
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
<strong>Date:</strong> 2011-07-15 06:51:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16934.php">Terry Dontje: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding"</a>
<li><strong>Previous message:</strong> <a href="16932.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16927.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16935.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16935.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get the sender's rank in status.MPI_SOURCE, but it is different than expected. I need to receive that message which was sent to me, not any message.&#160; 

regards,

Date: Fri, 15 Jul 2011 06:33:41 -0400
From: Terry Dontje &lt;terry.dontje_at_[hidden]&gt;
Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
To: users_at_[hidden]
Message-ID: &lt;4E201785.6010101_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;

Mudassar,

You can do what you are asking.&#160; The receiver uses MPI_ANY_SOURCE for 
the source rank value and when you receive a message the 
status.MPI_SOURCE will contain the rank of the actual sender not the 
receiver's rank.&#160; If you are not seeing that then there is a bug somewhere.

--td

On 7/14/2011 9:54 PM, Mudassar Majeed wrote:
&gt; Friend,
&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; I can not specify the rank of the sender. Because only 
&gt; the sender knows to which receiver the message is to be sent. The 
&gt; receiver does not know from which sender the message will come. I am 
&gt; trying to do a research work on load balancing in MPI application 
&gt; where load is redistributed, so in that I require a receiver to 
&gt; receive a load value from a sender that it does not know. On the other 
&gt; hand, the sender actually calculates, to which receiver this load 
&gt; value should be sent. So for this, I want sender to send a message 
&gt; containing the load to a receiver, but receiver does not know from 
&gt; which sender the message will come. See, it is like send receiver in 
&gt; DATAGRAM sockets. The receiver, receives the message on the IP and 
&gt; port, the message which was directed for it. I want to have same 
&gt; behavior. But it seems that it is not possible in MPI. Isn't it?
&gt;
&gt; regards,
&gt; Mudassar
&gt;
&gt; ------------------------------------------------------------------------
&gt; *From:* Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; *To:* Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;
&gt; *Cc:* Open MPI Users &lt;users_at_[hidden]&gt;
&gt; *Sent:* Friday, July 15, 2011 3:30 AM
&gt; *Subject:* Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
&gt;
&gt; Right.&#160; I thought you were asking about receiving *another* message 
&gt; from whomever you just received from via ANY_SOURCE.
&gt;
&gt; If you want to receive from a specific sender, you just specify the 
&gt; rank you want to receive from -- not ANY_SOURCE.
&gt;
&gt; You will always only receive messages that were sent to *you*.&#160; 
&gt; There's no MPI_SEND_TO_ANYONE_WHO_IS_LISTENING functionality, for 
&gt; example.&#160; So your last statement: &quot;But when it captures with .. 
&gt; MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message 
&gt; (even not targetted for it)&quot; is incorrect.
&gt;
&gt; I guess I still don't understand your question...?
&gt;
&gt;
&gt; On Jul 14, 2011, at 9:17 PM, Mudassar Majeed wrote:
&gt;
&gt; &gt;
&gt; &gt; I know this, but when I compare status.MPI_SOURCE with myid, they 
&gt; are different. I guess you need to reconsider my question. The 
&gt; MPI_Recv function seems to capture message from the queue with some 
&gt; search parameters like source, tag etc. So in case the receiver does 
&gt; not know the sender and wants to receive only that message which was 
&gt; sent for this receiver. But when it captures with source as 
&gt; MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message 
&gt; (even not targetted for it).
&gt; &gt;
&gt; &gt; regards,
&gt; &gt; Mudassar
&gt; &gt;
&gt; &gt;
&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
&gt; &gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden] 
&gt; &lt;mailto:mudassarm30_at_[hidden]&gt;&gt;; Open MPI Users &lt;users_at_[hidden] 
&gt; &lt;mailto:users_at_[hidden]&gt;&gt;
&gt; &gt; Sent: Friday, July 15, 2011 1:58 AM
&gt; &gt; Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
&gt; &gt;
&gt; &gt; When you use MPI_ANY_SOURCE in a receive, the rank of the actual 
&gt; sender is passed back to you in the status.MPI_SOURCE.
&gt; &gt;
&gt; &gt; On Jul 14, 2011, at 7:55 PM, Mudassar Majeed wrote:
&gt; &gt;
&gt; &gt; &gt; Hello people,
&gt; &gt; &gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; I am trapped in the following problem plz 
&gt; help me. Suppose a process A sends a message to process B. The process 
&gt; B will receive the message with MPI_Recv with MPI_ANY_SOURCE in the 
&gt; source argument. Let say process B does not know that A is the sender. 
&gt; But I want B to receive message from process A (the one who actually 
&gt; sends the message to process B). But if I use MPI_ANY_SOURCE, then any 
&gt; message from any source is captured by process B (let say there are 
&gt; other processes sending messages). Instead of MPI_ANY_SOURCE I cannot 
&gt; use A in the source argument as B does not know about the sender. What 
&gt; should I do in this situation ?
&gt; &gt; &gt;
&gt; &gt; &gt; regards,
&gt; &gt; &gt; Mudassar Majeed
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; users mailing list
&gt; &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt;
&gt; &gt; --
&gt; &gt; Jeff Squyres
&gt; &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
&gt; &gt; For corporate legal information go to:
&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt;
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16933/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16934.php">Terry Dontje: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding"</a>
<li><strong>Previous message:</strong> <a href="16932.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16927.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16935.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16935.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
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

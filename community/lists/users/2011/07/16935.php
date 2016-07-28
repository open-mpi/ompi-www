<?
$subject_val = "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 07:04:46 2011" -->
<!-- isoreceived="20110715110446" -->
<!-- sent="Fri, 15 Jul 2011 07:04:34 -0400" -->
<!-- isosent="20110715110434" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE." -->
<!-- id="4E201EC2.803_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1310727078.94177.YahooMailNeo_at_web121720.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-15 07:04:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16936.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16934.php">Terry Dontje: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding"</a>
<li><strong>In reply to:</strong> <a href="16933.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16936.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16936.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well MPI_Recv does give you the message that was sent specifically to 
<br>
the rank calling it by any of the processes in the communicator.  If you 
<br>
think the message you received should have gone to another rank then 
<br>
there is a bug somewhere.  I would start by either adding debugging 
<br>
printf's to your code to trace the messages.   Or narrowing down the 
<br>
code to a small kernel such that you can prove to yourself that MPI is 
<br>
working the way it should and if not you can show us where it is going 
<br>
wrong.
<br>
<p>--td
<br>
<p>On 7/15/2011 6:51 AM, Mudassar Majeed wrote:
<br>
<span class="quotelev1">&gt; I get the sender's rank in status.MPI_SOURCE, but it is different than 
</span><br>
<span class="quotelev1">&gt; expected. I need to receive that message which was sent to me, not any 
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Fri, 15 Jul 2011 06:33:41 -0400
</span><br>
<span class="quotelev1">&gt; From: Terry Dontje &lt;terry.dontje_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:terry.dontje_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4E201785.6010101_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:4E201785.6010101_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mudassar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can do what you are asking.  The receiver uses MPI_ANY_SOURCE for
</span><br>
<span class="quotelev1">&gt; the source rank value and when you receive a message the
</span><br>
<span class="quotelev1">&gt; status.MPI_SOURCE will contain the rank of the actual sender not the
</span><br>
<span class="quotelev1">&gt; receiver's rank.  If you are not seeing that then there is a bug 
</span><br>
<span class="quotelev1">&gt; somewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/14/2011 9:54 PM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Friend,
</span><br>
<span class="quotelev2">&gt; &gt;              I can not specify the rank of the sender. Because only
</span><br>
<span class="quotelev2">&gt; &gt; the sender knows to which receiver the message is to be sent. The
</span><br>
<span class="quotelev2">&gt; &gt; receiver does not know from which sender the message will come. I am
</span><br>
<span class="quotelev2">&gt; &gt; trying to do a research work on load balancing in MPI application
</span><br>
<span class="quotelev2">&gt; &gt; where load is redistributed, so in that I require a receiver to
</span><br>
<span class="quotelev2">&gt; &gt; receive a load value from a sender that it does not know. On the other
</span><br>
<span class="quotelev2">&gt; &gt; hand, the sender actually calculates, to which receiver this load
</span><br>
<span class="quotelev2">&gt; &gt; value should be sent. So for this, I want sender to send a message
</span><br>
<span class="quotelev2">&gt; &gt; containing the load to a receiver, but receiver does not know from
</span><br>
<span class="quotelev2">&gt; &gt; which sender the message will come. See, it is like send receiver in
</span><br>
<span class="quotelev2">&gt; &gt; DATAGRAM sockets. The receiver, receives the message on the IP and
</span><br>
<span class="quotelev2">&gt; &gt; port, the message which was directed for it. I want to have same
</span><br>
<span class="quotelev2">&gt; &gt; behavior. But it seems that it is not possible in MPI. Isn't it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; regards,
</span><br>
<span class="quotelev2">&gt; &gt; Mudassar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; *From:* Jeff Squyres &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; *To:* Mudassar Majeed &lt;mudassarm30_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:mudassarm30_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; *Cc:* Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; *Sent:* Friday, July 15, 2011 3:30 AM
</span><br>
<span class="quotelev2">&gt; &gt; *Subject:* Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Right.  I thought you were asking about receiving *another* message
</span><br>
<span class="quotelev2">&gt; &gt; from whomever you just received from via ANY_SOURCE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you want to receive from a specific sender, you just specify the
</span><br>
<span class="quotelev2">&gt; &gt; rank you want to receive from -- not ANY_SOURCE.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You will always only receive messages that were sent to *you*.
</span><br>
<span class="quotelev2">&gt; &gt; There's no MPI_SEND_TO_ANYONE_WHO_IS_LISTENING functionality, for
</span><br>
<span class="quotelev2">&gt; &gt; example.  So your last statement: &quot;But when it captures with ..
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message
</span><br>
<span class="quotelev2">&gt; &gt; (even not targetted for it)&quot; is incorrect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess I still don't understand your question...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 14, 2011, at 9:17 PM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I know this, but when I compare status.MPI_SOURCE with myid, they
</span><br>
<span class="quotelev2">&gt; &gt; are different. I guess you need to reconsider my question. The
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Recv function seems to capture message from the queue with some
</span><br>
<span class="quotelev2">&gt; &gt; search parameters like source, tag etc. So in case the receiver does
</span><br>
<span class="quotelev2">&gt; &gt; not know the sender and wants to receive only that message which was
</span><br>
<span class="quotelev2">&gt; &gt; sent for this receiver. But when it captures with source as
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message
</span><br>
<span class="quotelev2">&gt; &gt; (even not targetted for it).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Mudassar
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:mudassarm30_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mailto:mudassarm30_at_[hidden] &lt;mailto:mudassarm30_at_[hidden]&gt;&gt;&gt;; Open 
</span><br>
<span class="quotelev1">&gt; MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sent: Friday, July 15, 2011 1:58 AM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When you use MPI_ANY_SOURCE in a receive, the rank of the actual
</span><br>
<span class="quotelev2">&gt; &gt; sender is passed back to you in the status.MPI_SOURCE.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jul 14, 2011, at 7:55 PM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello people,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                        I am trapped in the following problem plz
</span><br>
<span class="quotelev2">&gt; &gt; help me. Suppose a process A sends a message to process B. The process
</span><br>
<span class="quotelev2">&gt; &gt; B will receive the message with MPI_Recv with MPI_ANY_SOURCE in the
</span><br>
<span class="quotelev2">&gt; &gt; source argument. Let say process B does not know that A is the sender.
</span><br>
<span class="quotelev2">&gt; &gt; But I want B to receive message from process A (the one who actually
</span><br>
<span class="quotelev2">&gt; &gt; sends the message to process B). But if I use MPI_ANY_SOURCE, then any
</span><br>
<span class="quotelev2">&gt; &gt; message from any source is captured by process B (let say there are
</span><br>
<span class="quotelev2">&gt; &gt; other processes sending messages). Instead of MPI_ANY_SOURCE I cannot
</span><br>
<span class="quotelev2">&gt; &gt; use A in the source argument as B does not know about the sender. What
</span><br>
<span class="quotelev2">&gt; &gt; should I do in this situation ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Mudassar Majeed
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16935/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16935/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16936.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16934.php">Terry Dontje: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding"</a>
<li><strong>In reply to:</strong> <a href="16933.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16936.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16936.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
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

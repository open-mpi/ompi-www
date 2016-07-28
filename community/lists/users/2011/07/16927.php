<?
$subject_val = "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 21:31:00 2011" -->
<!-- isoreceived="20110715013100" -->
<!-- sent="Thu, 14 Jul 2011 21:30:54 -0400" -->
<!-- isosent="20110715013054" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE." -->
<!-- id="7C897C32-F3E4-4480-AB7A-5273D0AB4B13_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1310692631.58644.YahooMailNeo_at_web121718.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 21:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16928.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Previous message:</strong> <a href="16926.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16926.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16930.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16930.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16933.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right.  I thought you were asking about receiving *another* message from whomever you just received from via ANY_SOURCE.
<br>
<p>If you want to receive from a specific sender, you just specify the rank you want to receive from -- not ANY_SOURCE.
<br>
<p>You will always only receive messages that were sent to *you*.  There's no MPI_SEND_TO_ANYONE_WHO_IS_LISTENING functionality, for example.  So your last statement: &quot;But when it captures with .. MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message (even not targetted for it)&quot; is incorrect.
<br>
<p>I guess I still don't understand your question...?
<br>
<p><p>On Jul 14, 2011, at 9:17 PM, Mudassar Majeed wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know this, but when I compare status.MPI_SOURCE with myid, they are different. I guess you need to reconsider my question. The MPI_Recv function seems to capture message from the queue with some search parameters like source, tag etc. So in case the receiver does not know the sender and wants to receive only that message which was sent for this receiver. But when it captures with source as MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message (even not targetted for it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Mudassar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, July 15, 2011 1:58 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you use MPI_ANY_SOURCE in a receive, the rank of the actual sender is passed back to you in the status.MPI_SOURCE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 14, 2011, at 7:55 PM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello people, 
</span><br>
<span class="quotelev2">&gt; &gt;                        I am trapped in the following problem plz help me. Suppose a process A sends a message to process B. The process B will receive the message with MPI_Recv with MPI_ANY_SOURCE in the source argument. Let say process B does not know that A is the sender. But I want B to receive message from process A (the one who actually sends the message to process B). But if I use MPI_ANY_SOURCE, then any message from any source is captured by process B (let say there are other processes sending messages). Instead of MPI_ANY_SOURCE I cannot use A in the source argument as B does not know about the sender. What should I do in this situation ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; regards,
</span><br>
<span class="quotelev2">&gt; &gt; Mudassar Majeed
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16928.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Previous message:</strong> <a href="16926.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16926.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16930.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16930.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16933.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
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

<?
$subject_val = "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 16 09:36:42 2011" -->
<!-- isoreceived="20110716133642" -->
<!-- sent="Sat, 16 Jul 2011 06:36:37 -0700 (PDT)" -->
<!-- isosent="20110716133637" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE." -->
<!-- id="1310823397.58784.YahooMailNeo_at_web121716.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E21048D.9090701_at_oracle.com" -->
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
<strong>Date:</strong> 2011-07-16 09:36:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16954.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16952.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16952.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16954.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16954.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16956.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;rec_rank); printf(&quot;\n&quot;); MPI_Sendrecv(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD,  &amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, comm, &amp;status); printf(&quot;\nP%d &gt;&gt; Received from P%d, packet contains rank: %d&quot;, myid, status.MPI_SOURCE, recv_packet.rank); printf(&quot;\n&quot;); } here is the output P11 &gt;&gt; Sender only ...!! P2 P14 &gt;&gt; Sender only ...!! P6 P15 &gt;&gt; Neither ...!! P15 &gt;&gt; I could reach here ...!! P8 &gt;&gt; Neither ...!! P8 &gt;&gt; I could reach here ...!! P1 &gt;&gt; Receiver only ...!! P9 &gt;&gt; Sender only ...!! P0 P2 &gt;&gt; Receiver only ...!! P10 &gt;&gt; Sender only ...!! P1 P3 &gt;&gt; Receiver only ...!! P3 &gt;&gt; Received from P13, packet contains rank: 14 P0 &gt;&gt; Receiver only ...!! P0 &gt;&gt; Received from P3, packet contains rank: 9 P4 &gt;&gt; Receiver only ...!! P12 &gt;&gt; Neither ...!! P12 &gt;&gt; I could reach here ...!! P5 &gt;&gt; Both ...!! P3 P13 &gt;&gt; Sender only ...!! P4 P13 &gt;&gt; I could reach here ...!! P6 &gt;&gt; Both ...!! P5 P7 &gt;&gt; Neither ...!! P7 &gt;&gt; I could reach here ...!! P14 &gt;&gt;
<br>
&nbsp;I could reach here ...!! P1 &gt;&gt; Received from P7, packet contains rank: 11 P1 &gt;&gt; I could reach here ...!! P9 &gt;&gt; I could reach here ...!!
P2 &gt;&gt; Received from P11, packet contains rank: 13 P2 &gt;&gt; I could reach here ...!! P0 &gt;&gt; I could reach here ...!! P11 &gt;&gt; I could reach here ...!!
P3 &gt;&gt; I could reach here ...!! regards,
Mudassar From: Terry Dontje &lt;terry.dontje_at_[hidden]&gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt; Cc: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt; Sent: Friday, July 15, 2011 9:06 PM
Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE. On 7/15/2011 2:35 PM, Mudassar Majeed wrote: 
&gt;&gt;Here is the code if( (is_receiver == 1) &amp;&amp; (is_sender != 1) ) { printf(&quot;\nP%d &gt;&gt; Receiver only ...!!&quot;, myid); printf(&quot;\n&quot;); MPI_Recv(&amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, comm, &amp;status); printf(&quot;\nP%d &gt;&gt; Received from P%d&quot;, myid, status.MPI_SOURCE); printf(&quot;\n&quot;); } else if( (is_sender == 1) &amp;&amp; (is_receiver != 1) ) {     load_packet.rank = *id; load_packet.ld = load; printf(&quot;\nP%d &gt;&gt; Sender only ...!! P%d&quot;, myid, rec_rank); printf(&quot;\n&quot;); MPI_Ssend(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD, comm); } else if( (is_receiver == 1) &amp;&amp; (is_sender == 1) ) { load_packet.rank = *id; load_packet.ld = load; printf(&quot;\nP%d &gt;&gt; Both ...!! P%d&quot;, myid, rec_rank); printf(&quot;\n&quot;); MPI_Sendrecv(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD,  &amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, comm, &amp;status); printf(&quot;\nP%d &gt;&gt; Received from P%d&quot;, myid, status.MPI_SOURCE); printf(&quot;\n&quot;); } A process can be a message sender, or
<br>
&nbsp;receiver or both. There are 16 ranks. &quot;rec_rank&quot; contains the rank of the receiver. It is displayed before the message is sent. 
Every sender displays this &quot;rec_rank&quot; and it should correctly. But on the receiver sides, status.MPI_SOURCE is displayed (after receiving message), but the value 
is not matching with the expected sender's rank. 
&gt;&gt;Sorry, but I still don't see how you are detecting the mismatch.  I assume load_packet_rank some how relates to load_packet.  But why are you setting it to *id instead of myid?  Also on the receive side I see no place where you pull out the rank from the recv_packet to compare with status.MPI_SOURCE. 
&gt;&gt;I did not understand about kernel that you were talking about. 
&gt;&gt;A &quot;kernel&quot; that I am talking about is a small piece of code someone can build and run to see the problem. 
&gt;&gt;See the code is very clear and it sends the message to &quot;rec_rank&quot; that was displayed before sending the message. But on the receiver side the MPI_SOURCE comes to be wrong.
This shows to me that messages on the receiving sides are captured on the basis of MPI_ANY_SOURCE, that seems like it does not see the destination of message while capturing it from message queue of the MPI system. regards,
Mudassar From: Terry Dontje &lt;terry.dontje_at_[hidden]&gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt; Cc: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt; Sent: Friday, July 15, 2011 7:10 PM
Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE. On 7/15/2011 12:49 PM, Mudassar Majeed wrote: 
&gt;&gt;&gt;Yes, processes receive messages that were not sent to them. I am receiving the message with the following call MPI_Recv(&amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, comm, &amp;status); and that was sent using the following call, MPI_Ssend(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD, comm); What problem it can have ?. All the parameters are correct, I have seen them by printf.  What I am thinking is that, the receive is done with MPI_ANY_SOURCE, so the process is getting any message (from any source). What should be done so that only that message is captured that had the destination as this process. 
&gt;&gt;&gt;By virtue of MPI the MPI_Recv call should only return messages destined for that rank.  What makes you think that is not happening?  Can you make some sort of kernel of code that proves your theory that your MPI_Recv is receiving another rank's message?  If you can and then post that code maybe we'll be able to figure out what the issue is. Right now, it seems we are at a deadlock of you claiming something is happening that really cannot be happening.  So unless we have more than a broad description of the problem it is going to be nearly impossible for us to tell you what is wrong. --td 
&gt;&gt;&gt;regards,
Mudassar Date: Fri, 15 Jul 2011 07:04:34 -0400
From: Terry Dontje &lt;terry.dontje_at_[hidden]&gt; Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
To: users_at_[hidden] Message-ID: &lt;4E201EC2.803_at_[hidden]&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot; Well MPI_Recv does give you the message that was sent specifically to 
the rank calling it by any of the processes in the communicator.  If you 
think the message you received should have gone to another rank then 
there is a bug somewhere.  I would start by either adding debugging 
printf's to your code to trace the messages.  Or narrowing down the 
code to a small kernel such that you can prove to yourself that MPI is 
working the way it should and if not you can show us where it is going 
wrong. --td On 7/15/2011 6:51 AM, Mudassar Majeed wrote: 
&gt;&gt;&gt;&gt;I get the sender's rank in status.MPI_SOURCE, but it is different than 
expected. I need to receive that message which was sent to me, not any 
message. regards, Date: Fri, 15 Jul 2011 06:33:41 -0400
From: Terry Dontje &lt;terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;&gt;
Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; Message-ID: &lt;4E201785.6010101_at_[hidden] &lt;mailto:4E201785.6010101_at_[hidden]&gt;&gt;
Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot; Mudassar, You can do what you are asking.  The receiver uses MPI_ANY_SOURCE for
the source rank value and when you receive a message the
status.MPI_SOURCE will contain the rank of the actual sender not the
receiver's rank.  If you are not seeing that then there is a bug 
somewhere. --td On 7/14/2011 9:54 PM, Mudassar Majeed wrote: 
&gt;&gt;&gt;&gt;&gt;Friend, I can not specify the rank of the sender. Because only
the sender knows to which receiver the message is to be sent. The
receiver does not know from which sender the message will come. I am
trying to do a research work on load balancing in MPI application
where load is redistributed, so in that I require a receiver to
receive a load value from a sender that it does not know. On the other
hand, the sender actually calculates, to which receiver this load
value should be sent. So for this, I want sender to send a message
containing the load to a receiver, but receiver does not know from
which sender the message will come. See, it is like send receiver in
DATAGRAM sockets. The receiver, receives the message on the IP and
port, the message which was directed for it. I want to have same
behavior. But it seems that it is not possible in MPI. Isn't it? regards,
Mudassar ------------------------------------------------------------------------
*From:* Jeff Squyres &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
*To:* Mudassar Majeed &lt;mudassarm30_at_[hidden] 
&gt;&gt;&gt;&gt;&gt;&lt;mailto:mudassarm30_at_[hidden]&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;*Cc:* Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
*Sent:* Friday, July 15, 2011 3:30 AM
*Subject:* Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE. Right.  I thought you were asking about receiving *another* message
from whomever you just received from via ANY_SOURCE. If you want to receive from a specific sender, you just specify the
rank you want to receive from -- not ANY_SOURCE. You will always only receive messages that were sent to *you*.
There's no MPI_SEND_TO_ANYONE_WHO_IS_LISTENING functionality, for
example.  So your last statement: &quot;But when it captures with ..
MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message
(even not targetted for it)&quot; is incorrect. I guess I still don't understand your question...? On Jul 14, 2011, at 9:17 PM, Mudassar Majeed wrote: 
&gt;&gt;&gt;&gt;&gt;&gt;I know this, but when I compare status.MPI_SOURCE with myid, they 
&gt;&gt;&gt;&gt;&gt;&gt;are different. I guess you need to reconsider my question. The
MPI_Recv function seems to capture message from the queue with some
search parameters like source, tag etc. So in case the receiver does
not know the sender and wants to receive only that message which was
sent for this receiver. But when it captures with source as
MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message
(even not targetted for it). 
&gt;&gt;&gt;&gt;&gt;&gt;regards,
Mudassar From: Jeff Squyres &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt; 
&gt;&gt;&gt;&gt;&gt;&lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;To: Mudassar Majeed &lt;mudassarm30_at_[hidden] 
&gt;&gt;&gt;&gt;&gt;&lt;mailto:mudassarm30_at_[hidden]&gt; 
&gt;&gt;&gt;&gt;&gt;&lt;mailto:mudassarm30_at_[hidden] &lt;mailto:mudassarm30_at_[hidden]&gt;&gt;&gt;; Open 
&gt;&gt;&gt;&gt;&gt;MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
&gt;&gt;&gt;&gt;&gt;&lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt;&gt;Sent: Friday, July 15, 2011 1:58 AM
Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE. When you use MPI_ANY_SOURCE in a receive, the rank of the actual 
&gt;&gt;&gt;&gt;&gt;&gt;sender is passed back to you in the status.MPI_SOURCE. 
&gt;&gt;&gt;&gt;&gt;&gt;On Jul 14, 2011, at 7:55 PM, Mudassar Majeed wrote: 
&gt;&gt;&gt;&gt;&gt;&gt;&gt;Hello people, I am trapped in the following problem plz 
&gt;&gt;&gt;&gt;&gt;&gt;help me. Suppose a process A sends a message to process B. The process
B will receive the message with MPI_Recv with MPI_ANY_SOURCE in the
source argument. Let say process B does not know that A is the sender.
But I want B to receive message from process A (the one who actually
sends the message to process B). But if I use MPI_ANY_SOURCE, then any
message from any source is captured by process B (let say there are
other processes sending messages). Instead of MPI_ANY_SOURCE I cannot
use A in the source argument as B does not know about the sender. What
should I do in this situation ? 
&gt;&gt;&gt;&gt;&gt;&gt;regards,
Mudassar Majeed 
&gt;&gt;&gt;-- 
&lt;Mail Attachment.gif&gt;
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] 
&gt;&gt;-- 
&lt;Mail Attachment.gif&gt;
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] _______________________________________________
users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 

-- 

 

Terry D. Dontje | Principal Software Engineer

Developer Tools Engineering | +1.781.442.2631
 Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16953/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16953/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16954.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16952.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16952.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16954.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16954.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16956.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
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

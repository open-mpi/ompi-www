<?
$subject_val = "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 15:36:31 2011" -->
<!-- isoreceived="20110715193631" -->
<!-- sent="Fri, 15 Jul 2011 12:36:26 -0700 (PDT)" -->
<!-- isosent="20110715193626" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE." -->
<!-- id="1310758586.80862.YahooMailNeo_at_web121716.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E208FB9.4010800_at_oracle.com" -->
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
<strong>Date:</strong> 2011-07-15 15:36:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16947.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16945.php">Terry Dontje: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>In reply to:</strong> <a href="16944.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16947.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16947.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*id is same as myid

I am comparing the results by seeing the printed messages, given by the printfs.... 

the recv_packet.rank is the rank of the sender that should be equal to status.MPI_SOURCE but it is not. 

I have updated the code a little bit, here is it.

if( (is_receiver == 1) &amp;&amp; (is_sender != 1) )
&#160;&#160;&#160; {
&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\nP%d &gt;&gt; Receiver only ...!!&quot;, myid);
&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\n&quot;);
&#160;&#160;&#160; &#160;&#160;&#160; MPI_Recv(&amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, comm, &amp;status);
&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\nP%d &gt;&gt; Received from P%d, packet contains rank: %d&quot;, myid, status.MPI_SOURCE, recv_packet.rank);
&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\n&quot;);
&#160;&#160;&#160; }
&#160;&#160;&#160; else if( (is_sender == 1) &amp;&amp; (is_receiver != 1) )
&#160;&#160;&#160; {&#160;&#160;&#160; 
&#160;&#160;&#160; &#160;&#160;&#160; load_packet.rank = myid;
&#160;&#160;&#160; &#160;&#160;&#160; load_packet.ld = load;
&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\nP%d &gt;&gt; Sender only ...!! P%d&quot;, myid, rec_rank);
&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\n&quot;);
&#160;&#160;&#160; &#160;&#160;&#160; MPI_Ssend(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD, comm);
&#160;&#160;&#160; }
&#160;&#160;&#160; else if( (is_receiver == 1) &amp;&amp; (is_sender == 1) )
&#160;&#160;&#160; {
&#160;&#160;&#160; &#160;&#160;&#160; load_packet.rank = myid;
&#160;&#160;&#160; &#160;&#160;&#160; load_packet.ld = load;
&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\nP%d &gt;&gt; Both ...!! P%d&quot;, myid, rec_rank);
&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\n&quot;);
&#160;&#160;&#160; &#160;&#160;&#160; MPI_Sendrecv(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD, 
&#160;&#160;&#160; &#160;&#160;&#160; &#160;&#160;&#160; &#160;&amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, comm, &amp;status);
&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\nP%d &gt;&gt; Received from P%d, packet contains rank: %d&quot;, myid, status.MPI_SOURCE, recv_packet.rank);
&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\n&quot;);
&#160;&#160;&#160; }

here is the output

P11 &gt;&gt; Sender only ...!! P2

P14 &gt;&gt; Sender only ...!! P6

P15 &gt;&gt; Neither ...!!

P15 &gt;&gt; I could reach here ...!!

P8 &gt;&gt; Neither ...!!

P8 &gt;&gt; I could reach here ...!!

P1 &gt;&gt; Receiver only ...!!

P9 &gt;&gt; Sender only ...!! P0

P2 &gt;&gt; Receiver only ...!!


P10 &gt;&gt; Sender only ...!! P1

P3 &gt;&gt; Receiver only ...!!

P3 &gt;&gt; Received from P13, packet contains rank: 14


P0 &gt;&gt; Receiver only ...!!

P0 &gt;&gt; Received from P3, packet contains rank: 9

P4 &gt;&gt; Receiver only ...!!

P12 &gt;&gt; Neither ...!!

P12 &gt;&gt; I could reach here ...!!

P5 &gt;&gt; Both ...!! P3

P13 &gt;&gt; Sender only ...!! P4

P13 &gt;&gt; I could reach here ...!!

P6 &gt;&gt; Both ...!! P5

P7 &gt;&gt; Neither ...!!

P7 &gt;&gt; I could reach here ...!!

P14 &gt;&gt; I could reach here ...!!

P1 &gt;&gt; Received from P7, packet contains rank: 11

P1 &gt;&gt; I could reach here ...!!

P9 &gt;&gt; I could reach here ...!!
P2 &gt;&gt; Received from P11, packet contains rank: 13

P2 &gt;&gt; I could reach here ...!!

P0 &gt;&gt; I could reach here ...!!

P11 &gt;&gt; I could reach here ...!!
P3 &gt;&gt; I could reach here ...!!


regards,
Mudassar



________________________________
From: Terry Dontje &lt;terry.dontje_at_[hidden]&gt;
To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;
Cc: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
Sent: Friday, July 15, 2011 9:06 PM
Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.




On 7/15/2011 2:35 PM, Mudassar Majeed wrote: 

&gt;Here is the code
&gt;
&gt;&#160;&#160;&#160; if( (is_receiver == 1) &amp;&amp; (is_sender != 1) )
&gt;&#160;&#160;&#160; {
&gt;&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\nP%d &gt;&gt; Receiver only ...!!&quot;, myid);
&gt;&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\n&quot;);
&gt;&#160;&#160;&#160; &#160;&#160;&#160; MPI_Recv(&amp;recv_packet, 1, loadDatatype,
        MPI_ANY_SOURCE, MPI_TAG_LOAD, comm, &amp;status);
&gt;&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\nP%d &gt;&gt; Received from P%d&quot;, myid,
        status.MPI_SOURCE);
&gt;&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\n&quot;);
&gt;&#160;&#160;&#160; }
&gt;&#160;&#160;&#160; else if( (is_sender == 1) &amp;&amp; (is_receiver != 1) )
&gt;&#160;&#160;&#160; {&#160;&#160;&#160; 
&gt;&#160;&#160;&#160; &#160;&#160;&#160; load_packet.rank = *id;
&gt;&#160;&#160;&#160; &#160;&#160;&#160; load_packet.ld = load;
&gt;&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\nP%d &gt;&gt; Sender only ...!! P%d&quot;, myid,
        rec_rank);
&gt;&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\n&quot;);
&gt;&#160;&#160;&#160; &#160;&#160;&#160; MPI_Ssend(&amp;load_packet, 1, loadDatatype, rec_rank,
        MPI_TAG_LOAD, comm);
&gt;&#160;&#160;&#160; }
&gt;&#160;&#160;&#160; else if( (is_receiver == 1) &amp;&amp; (is_sender == 1) )
&gt;&#160;&#160;&#160; {
&gt;&#160;&#160;&#160; &#160;&#160;&#160; load_packet.rank = *id;
&gt;&#160;&#160;&#160; &#160;&#160;&#160; load_packet.ld = load;
&gt;&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\nP%d &gt;&gt; Both ...!! P%d&quot;, myid, rec_rank);
&gt;&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\n&quot;);
&gt;&#160;&#160;&#160; &#160;&#160;&#160; MPI_Sendrecv(&amp;load_packet, 1, loadDatatype,
        rec_rank, MPI_TAG_LOAD, 
&gt;&#160;&#160;&#160; &#160;&#160;&#160; &#160;&#160;&#160; &#160;&amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE,
        MPI_TAG_LOAD, comm, &amp;status);
&gt;&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\nP%d &gt;&gt; Received from P%d&quot;, myid,
        status.MPI_SOURCE);
&gt;&#160;&#160;&#160; &#160;&#160;&#160; printf(&quot;\n&quot;);
&gt;&#160;&#160;&#160; }
&gt;
&gt;A process can be a message sender, or receiver or both. There
        are 16 ranks. &quot;rec_rank&quot; contains the rank of the receiver. It
        is displayed before the message is sent. 
&gt;Every sender displays this &quot;rec_rank&quot; and it should correctly.
        But on the receiver sides, status.MPI_SOURCE is displayed (after
        receiving message), but the value 
&gt;is not matching with the expected sender's rank.
&gt;
Sorry, but I still don't see how you are detecting the mismatch.&#160; I assume load_packet_rank some how relates to load_packet.&#160; But why are you setting it to *id instead of myid?&#160; Also on the receive side I see no place where you pull out the rank from the recv_packet to compare with status.MPI_SOURCE.


&gt;I did not understand about kernel that you were talking about. 
&gt;
&gt;
A &quot;kernel&quot; that I am talking about is a small piece of code someone can build and run to see the problem.

See the code is very clear and it sends the message to &quot;rec_rank&quot; that was displayed before sending the message. But on the receiver side the MPI_SOURCE comes to be wrong.
&gt;This shows to me that messages on the receiving sides are
        captured on the basis of MPI_ANY_SOURCE, that seems like it does
        not see the destination of message while capturing it from
        message queue of the MPI system.
&gt;
&gt;regards,
&gt;Mudassar
&gt;
&gt;
&gt;
&gt;
&gt;________________________________
&gt;From: Terry Dontje &lt;terry.dontje_at_[hidden]&gt;
&gt;To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;
&gt;Cc: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
&gt;Sent: Friday, July 15, 2011 7:10 PM
&gt;Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
&gt;
&gt;
&gt;
&gt;
&gt;On 7/15/2011 12:49 PM, Mudassar Majeed wrote: 
&gt;
&gt;&gt;Yes, processes receive messages that were not sent to
                  them. I am receiving the message with the following
                  call
&gt;&gt;
&gt;&gt;MPI_Recv(&amp;recv_packet, 1, loadDatatype,
                  MPI_ANY_SOURCE, MPI_TAG_LOAD, comm, &amp;status);
&gt;&gt;
&gt;&gt;and that was sent using the following call,
&gt;&gt;
&gt;&gt;MPI_Ssend(&amp;load_packet, 1, loadDatatype, rec_rank,
                  MPI_TAG_LOAD, comm);
&gt;&gt;
&gt;&gt;What problem it can have ?. All the parameters are
                  correct, I have seen them by printf.&#160; What I am
                  thinking is that, the receive is done with
                  MPI_ANY_SOURCE, so the process is getting any message
                  (from any source). What should be done so that only
                  that message is captured that had the destination as
                  this process. 
&gt;&gt;
&gt;&gt;
By virtue of MPI the MPI_Recv call should only return messages destined for that rank.&#160; What makes you think that is not happening?&#160; Can you make some sort of kernel of code that proves your theory that your MPI_Recv is receiving another rank's message?&#160; If you can and then post that code maybe we'll be able to figure out what the issue is.
&gt;
&gt;Right now, it seems we are at a deadlock of you claiming
              something is happening that really cannot be happening.&#160;
              So unless we have more than a broad description of the
              problem it is going to be nearly impossible for us to tell
              you what is wrong.
&gt;
&gt;--td
&gt;
&gt;regards,
&gt;&gt;Mudassar
&gt;&gt;
&gt;&gt;Date: Fri, 15 Jul 2011 07:04:34 -0400
&gt;&gt;From: Terry Dontje &lt;terry.dontje_at_[hidden]&gt;
&gt;&gt;Subject: Re: [OMPI users] Urgent Question regarding,
                  MPI_ANY_SOURCE.
&gt;&gt;To: users_at_[hidden]
&gt;&gt;Message-ID: &lt;4E201EC2.803_at_[hidden]&gt;
&gt;&gt;Content-Type: text/plain; charset=&quot;iso-8859-1&quot;;
                  Format=&quot;flowed&quot;
&gt;&gt;
&gt;&gt;Well MPI_Recv does give you the message that was sent
                  specifically to 
&gt;&gt;the rank calling it by any of the processes in the
                  communicator.&#160; If you 
&gt;&gt;think the message you received should have gone to
                  another rank then 
&gt;&gt;there is a bug somewhere.&#160; I would start by either
                  adding debugging 
&gt;&gt;printf's to your code to trace the messages.&#160; Or
                  narrowing down the 
&gt;&gt;code to a small kernel such that you can prove to
                  yourself that MPI is 
&gt;&gt;working the way it should and if not you can show us
                  where it is going 
&gt;&gt;wrong.
&gt;&gt;
&gt;&gt;--td
&gt;&gt;
&gt;&gt;On 7/15/2011 6:51 AM, Mudassar Majeed wrote:
&gt;&gt;&gt; I get the sender's rank in status.MPI_SOURCE, but
                  it is different than 
&gt;&gt;&gt; expected. I need to receive that message which
                  was sent to me, not any 
&gt;&gt;&gt; message.
&gt;&gt;&gt;
&gt;&gt;&gt; regards,
&gt;&gt;&gt;
&gt;&gt;&gt; Date: Fri, 15 Jul 2011 06:33:41 -0400
&gt;&gt;&gt; From: Terry Dontje &lt;terry.dontje_at_[hidden] 
&gt;&gt;&gt; &lt;mailto:terry.dontje_at_[hidden]&gt;&gt;
&gt;&gt;&gt; Subject: Re: [OMPI users] Urgent Question
                  regarding, MPI_ANY_SOURCE.
&gt;&gt;&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&gt;&gt; Message-ID: &lt;4E201785.6010101_at_[hidden] 
&gt;&gt;&gt; &lt;mailto:4E201785.6010101_at_[hidden]&gt;&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;;
                  Format=&quot;flowed&quot;
&gt;&gt;&gt;
&gt;&gt;&gt; Mudassar,
&gt;&gt;&gt;
&gt;&gt;&gt; You can do what you are asking.&#160; The receiver
                  uses MPI_ANY_SOURCE for
&gt;&gt;&gt; the source rank value and when you receive a
                  message the
&gt;&gt;&gt; status.MPI_SOURCE will contain the rank of the
                  actual sender not the
&gt;&gt;&gt; receiver's rank.&#160; If you are not seeing that then
                  there is a bug 
&gt;&gt;&gt; somewhere.
&gt;&gt;&gt;
&gt;&gt;&gt; --td
&gt;&gt;&gt;
&gt;&gt;&gt; On 7/14/2011 9:54 PM, Mudassar Majeed wrote:
&gt;&gt;&gt; &gt; Friend,
&gt;&gt;&gt; &gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; I can not specify the rank of
                  the sender. Because only
&gt;&gt;&gt; &gt; the sender knows to which receiver the
                  message is to be sent. The
&gt;&gt;&gt; &gt; receiver does not know from which sender the
                  message will come. I am
&gt;&gt;&gt; &gt; trying to do a research work on load
                  balancing in MPI application
&gt;&gt;&gt; &gt; where load is redistributed, so in that I
                  require a receiver to
&gt;&gt;&gt; &gt; receive a load value from a sender that it
                  does not know. On the other
&gt;&gt;&gt; &gt; hand, the sender actually calculates, to
                  which receiver this load
&gt;&gt;&gt; &gt; value should be sent. So for this, I want
                  sender to send a message
&gt;&gt;&gt; &gt; containing the load to a receiver, but
                  receiver does not know from
&gt;&gt;&gt; &gt; which sender the message will come. See, it
                  is like send receiver in
&gt;&gt;&gt; &gt; DATAGRAM sockets. The receiver, receives the
                  message on the IP and
&gt;&gt;&gt; &gt; port, the message which was directed for it.
                  I want to have same
&gt;&gt;&gt; &gt; behavior. But it seems that it is not
                  possible in MPI. Isn't it?
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; regards,
&gt;&gt;&gt; &gt; Mudassar
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
                  ------------------------------------------------------------------------
&gt;&gt;&gt; &gt; *From:* Jeff Squyres &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
&gt;&gt;&gt; &gt; *To:* Mudassar Majeed &lt;mudassarm30_at_[hidden] 
&gt;&gt;&gt; &lt;mailto:mudassarm30_at_[hidden]&gt;&gt;
&gt;&gt;&gt; &gt; *Cc:* Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
&gt;&gt;&gt; &gt; *Sent:* Friday, July 15, 2011 3:30 AM
&gt;&gt;&gt; &gt; *Subject:* Re: [OMPI users] Urgent Question
                  regarding, MPI_ANY_SOURCE.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; Right.&#160; I thought you were asking about
                  receiving *another* message
&gt;&gt;&gt; &gt; from whomever you just received from via
                  ANY_SOURCE.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; If you want to receive from a specific
                  sender, you just specify the
&gt;&gt;&gt; &gt; rank you want to receive from -- not
                  ANY_SOURCE.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; You will always only receive messages that
                  were sent to *you*.
&gt;&gt;&gt; &gt; There's no
                  MPI_SEND_TO_ANYONE_WHO_IS_LISTENING functionality, for
&gt;&gt;&gt; &gt; example.&#160; So your last statement: &quot;But when
                  it captures with ..
&gt;&gt;&gt; &gt; MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver
                  will capture any message
&gt;&gt;&gt; &gt; (even not targetted for it)&quot; is incorrect.
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; I guess I still don't understand your
                  question...?
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; On Jul 14, 2011, at 9:17 PM, Mudassar Majeed
                  wrote:
&gt;&gt;&gt; &gt;
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; I know this, but when I compare
                  status.MPI_SOURCE with myid, they
&gt;&gt;&gt; &gt; are different. I guess you need to
                  reconsider my question. The
&gt;&gt;&gt; &gt; MPI_Recv function seems to capture message
                  from the queue with some
&gt;&gt;&gt; &gt; search parameters like source, tag etc. So
                  in case the receiver does
&gt;&gt;&gt; &gt; not know the sender and wants to receive
                  only that message which was
&gt;&gt;&gt; &gt; sent for this receiver. But when it captures
                  with source as
&gt;&gt;&gt; &gt; MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver
                  will capture any message
&gt;&gt;&gt; &gt; (even not targetted for it).
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; regards,
&gt;&gt;&gt; &gt; &gt; Mudassar
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt; 
&gt;&gt;&gt; &lt;mailto:jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;
&gt;&gt;&gt; &gt; &gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden] 
&gt;&gt;&gt; &lt;mailto:mudassarm30_at_[hidden]&gt;
&gt;&gt;&gt; &gt; &lt;mailto:mudassarm30_at_[hidden] &lt;mailto:mudassarm30_at_[hidden]&gt;&gt;&gt;; Open 
&gt;&gt;&gt; MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;&gt;&gt; &gt; &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
&gt;&gt;&gt; &gt; &gt; Sent: Friday, July 15, 2011 1:58 AM
&gt;&gt;&gt; &gt; &gt; Subject: Re: [OMPI users] Urgent
                  Question regarding, MPI_ANY_SOURCE.
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; When you use MPI_ANY_SOURCE in a
                  receive, the rank of the actual
&gt;&gt;&gt; &gt; sender is passed back to you in the
                  status.MPI_SOURCE.
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; On Jul 14, 2011, at 7:55 PM, Mudassar
                  Majeed wrote:
&gt;&gt;&gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; &gt; Hello people,
&gt;&gt;&gt; &gt; &gt; &gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; I am
                  trapped in the following problem plz
&gt;&gt;&gt; &gt; help me. Suppose a process A sends a message
                  to process B. The process
&gt;&gt;&gt; &gt; B will receive the message with MPI_Recv
                  with MPI_ANY_SOURCE in the
&gt;&gt;&gt; &gt; source argument. Let say process B does not
                  know that A is the sender.
&gt;&gt;&gt; &gt; But I want B to receive message from process
                  A (the one who actually
&gt;&gt;&gt; &gt; sends the message to process B). But if I
                  use MPI_ANY_SOURCE, then any
&gt;&gt;&gt; &gt; message from any source is captured by
                  process B (let say there are
&gt;&gt;&gt; &gt; other processes sending messages). Instead
                  of MPI_ANY_SOURCE I cannot
&gt;&gt;&gt; &gt; use A in the source argument as B does not
                  know about the sender. What
&gt;&gt;&gt; &gt; should I do in this situation ?
&gt;&gt;&gt; &gt; &gt; &gt;
&gt;&gt;&gt; &gt; &gt; &gt; regards,
&gt;&gt;&gt; &gt; &gt; &gt; Mudassar Majeed
&gt;
&gt;-- 
&gt;
&gt; 
&gt;
&gt;Terry D. Dontje | Principal Software Engineer
&gt;
&gt;Developer Tools Engineering | +1.781.442.2631
&gt; Oracle - Performance Technologies
&gt;95 Network Drive, Burlington, MA 01803
&gt;Email terry.dontje_at_[hidden]
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;

-- 

 

Terry D. Dontje | Principal Software Engineer

Developer Tools Engineering | +1.781.442.2631
 Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16946/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16946/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16946/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16947.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16945.php">Terry Dontje: "Re: [OMPI users] Does Oracle Cluster Tools aka Sun's MPI work with LDAP?"</a>
<li><strong>In reply to:</strong> <a href="16944.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16947.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Reply:</strong> <a href="16947.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
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

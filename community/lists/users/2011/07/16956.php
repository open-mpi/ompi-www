<?
$subject_val = "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 17 22:46:54 2011" -->
<!-- isoreceived="20110718024654" -->
<!-- sent="Sun, 17 Jul 2011 22:46:41 -0400" -->
<!-- isosent="20110718024641" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE." -->
<!-- id="4E239E91.2040201_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1310823397.58784.YahooMailNeo_at_web121716.mail.ne1.yahoo.com" -->
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
<strong>Date:</strong> 2011-07-17 22:46:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16957.php">Hui Li via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="16955.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="16953.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16941.php">Eugene Loh: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terrific!!! Glad you found it, otherwise it would have been quite a 
<br>
puzzling issue to debug in OMPI.
<br>
<p>--td
<br>
<p>On 7/16/2011 9:36 AM, Mudassar Majeed wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks to all of your friends. It was my mistake. Actually the problem 
</span><br>
<span class="quotelev1">&gt; was somewhere else very far away. When I made a separate file for you, 
</span><br>
<span class="quotelev1">&gt; it was working fine. Then I understood that the problem is somewhere 
</span><br>
<span class="quotelev1">&gt; else. I found that problem. Thanks to all of you people.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Mudassar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* Terry Dontje &lt;terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Cc:* Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;; Open MPI Users 
</span><br>
<span class="quotelev1">&gt; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Saturday, July 16, 2011 5:25 AM
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have to agree with Jeff, we really need a complete program to really 
</span><br>
<span class="quotelev1">&gt; debug this.  Note, without really seeing what the structures look like 
</span><br>
<span class="quotelev1">&gt; it is hard to determine if maybe there is some type of structure 
</span><br>
<span class="quotelev1">&gt; mismatch going between recv_packet and load_packet.  Also the output 
</span><br>
<span class="quotelev1">&gt; you show seems incomplete in that not all data transfers are being 
</span><br>
<span class="quotelev1">&gt; shown so it is kind of hard to determine if packets are possibly being 
</span><br>
<span class="quotelev1">&gt; dropped or what.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree the output looks suspicious but it still leaves a lot to 
</span><br>
<span class="quotelev1">&gt; interpretation without really seeing a complete code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/15/2011 3:44 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you write this up in a small, complete program that shows the problem, and that we can compile and run?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 15, 2011, at 3:36 PM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *id is same as myid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am comparing the results by seeing the printed messages, given by the printfs....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the recv_packet.rank is the rank of the sender that should be equal to status.MPI_SOURCE but it is not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have updated the code a little bit, here is it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if( (is_receiver == 1)&amp;&amp;  (is_sender != 1) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;\nP%d&gt;&gt;  Receiver only ...!!&quot;, myid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Recv(&amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, comm,&amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;\nP%d&gt;&gt;  Received from P%d, packet contains rank: %d&quot;, myid, status.MPI_SOURCE, recv_packet.rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      else if( (is_sender == 1)&amp;&amp;  (is_receiver != 1) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          load_packet.rank = myid;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          load_packet.ld = load;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;\nP%d&gt;&gt;  Sender only ...!! P%d&quot;, myid, rec_rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Ssend(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD, comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      else if( (is_receiver == 1)&amp;&amp;  (is_sender == 1) )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          load_packet.rank = myid;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          load_packet.ld = load;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;\nP%d&gt;&gt;  Both ...!! P%d&quot;, myid, rec_rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          MPI_Sendrecv(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, comm,&amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;\nP%d&gt;&gt;  Received from P%d, packet contains rank: %d&quot;, myid, status.MPI_SOURCE, recv_packet.rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          printf(&quot;\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here is the output
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P11&gt;&gt;  Sender only ...!! P2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P14&gt;&gt;  Sender only ...!! P6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P15&gt;&gt;  Neither ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P15&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P8&gt;&gt;  Neither ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P8&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P1&gt;&gt;  Receiver only ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P9&gt;&gt;  Sender only ...!! P0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P2&gt;&gt;  Receiver only ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P10&gt;&gt;  Sender only ...!! P1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P3&gt;&gt;  Receiver only ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P3&gt;&gt;  Received from P13, packet contains rank: 14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P0&gt;&gt;  Receiver only ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P0&gt;&gt;  Received from P3, packet contains rank: 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P4&gt;&gt;  Receiver only ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P12&gt;&gt;  Neither ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P12&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P5&gt;&gt;  Both ...!! P3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P13&gt;&gt;  Sender only ...!! P4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P13&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P6&gt;&gt;  Both ...!! P5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P7&gt;&gt;  Neither ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P7&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P14&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P1&gt;&gt;  Received from P7, packet contains rank: 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P1&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P9&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P2&gt;&gt;  Received from P11, packet contains rank: 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P2&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P0&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P11&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P3&gt;&gt;  I could reach here ...!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mudassar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Terry Dontje&lt;terry.dontje_at_[hidden]&gt;  &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Mudassar Majeed&lt;mudassarm30_at_[hidden]&gt;  &lt;mailto:mudassarm30_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cc:&quot;users_at_[hidden]&quot;  &lt;mailto:users_at_[hidden]&gt;  &lt;users_at_[hidden]&gt;  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, July 15, 2011 9:06 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/15/2011 2:35 PM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      if( (is_receiver == 1)&amp;&amp;  (is_sender != 1) )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          printf(&quot;\nP%d&gt;&gt;  Receiver only ...!!&quot;, myid);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          printf(&quot;\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          MPI_Recv(&amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, comm,&amp;status);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          printf(&quot;\nP%d&gt;&gt;  Received from P%d&quot;, myid, status.MPI_SOURCE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          printf(&quot;\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      else if( (is_sender == 1)&amp;&amp;  (is_receiver != 1) )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          load_packet.rank = *id;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          load_packet.ld = load;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          printf(&quot;\nP%d&gt;&gt;  Sender only ...!! P%d&quot;, myid, rec_rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          printf(&quot;\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          MPI_Ssend(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD, comm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      else if( (is_receiver == 1)&amp;&amp;  (is_sender == 1) )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          load_packet.rank = *id;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          load_packet.ld = load;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          printf(&quot;\nP%d&gt;&gt;  Both ...!! P%d&quot;, myid, rec_rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          printf(&quot;\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          MPI_Sendrecv(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               &amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, comm,&amp;status);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          printf(&quot;\nP%d&gt;&gt;  Received from P%d&quot;, myid, status.MPI_SOURCE);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          printf(&quot;\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A process can be a message sender, or receiver or both. There are 16 ranks. &quot;rec_rank&quot; contains the rank of the receiver. It is displayed before the message is sent.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Every sender displays this &quot;rec_rank&quot; and it should correctly. But on the receiver sides, status.MPI_SOURCE is displayed (after receiving message), but the value
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is not matching with the expected sender's rank.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, but I still don't see how you are detecting the mismatch.  I assume load_packet_rank some how relates to load_packet.  But why are you setting it to *id instead of myid?  Also on the receive side I see no place where you pull out the rank from the recv_packet to compare with status.MPI_SOURCE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I did not understand about kernel that you were talking about.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A &quot;kernel&quot; that I am talking about is a small piece of code someone can build and run to see the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; See the code is very clear and it sends the message to &quot;rec_rank&quot; that was displayed before sending the message. But on the receiver side the MPI_SOURCE comes to be wrong.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This shows to me that messages on the receiving sides are captured on the basis of MPI_ANY_SOURCE, that seems like it does not see the destination of message while capturing it from message queue of the MPI system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mudassar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Terry Dontje&lt;terry.dontje_at_[hidden]&gt;  &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Mudassar Majeed&lt;mudassarm30_at_[hidden]&gt;  &lt;mailto:mudassarm30_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cc:&quot;users_at_[hidden]&quot;  &lt;mailto:users_at_[hidden]&gt;  &lt;users_at_[hidden]&gt;  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Friday, July 15, 2011 7:10 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7/15/2011 12:49 PM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yes, processes receive messages that were not sent to them. I am receiving the message with the following call
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Recv(&amp;recv_packet, 1, loadDatatype, MPI_ANY_SOURCE, MPI_TAG_LOAD, comm,&amp;status);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and that was sent using the following call,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Ssend(&amp;load_packet, 1, loadDatatype, rec_rank, MPI_TAG_LOAD, comm);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What problem it can have ?. All the parameters are correct, I have seen them by printf.  What I am thinking is that, the receive is done with MPI_ANY_SOURCE, so the process is getting any message (from any source). What should be done so that only that message is captured that had the destination as this process.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By virtue of MPI the MPI_Recv call should only return messages destined for that rank.  What makes you think that is not happening?  Can you make some sort of kernel of code that proves your theory that your MPI_Recv is receiving another rank's message?  If you can and then post that code maybe we'll be able to figure out what the issue is.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Right now, it seems we are at a deadlock of you claiming something is happening that really cannot be happening.  So unless we have more than a broad description of the problem it is going to be nearly impossible for us to tell you what is wrong.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mudassar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: Fri, 15 Jul 2011 07:04:34 -0400
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: Terry Dontje&lt;terry.dontje_at_[hidden]&gt;  &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To:users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Message-ID:&lt;4E201EC2.803_at_[hidden]&gt;  &lt;mailto:4E201EC2.803_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Well MPI_Recv does give you the message that was sent specifically to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the rank calling it by any of the processes in the communicator.  If you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; think the message you received should have gone to another rank then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there is a bug somewhere.  I would start by either adding debugging
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; printf's to your code to trace the messages.  Or narrowing down the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code to a small kernel such that you can prove to yourself that MPI is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; working the way it should and if not you can show us where it is going
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrong.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 7/15/2011 6:51 AM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I get the sender's rank in status.MPI_SOURCE, but it is different than
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; expected. I need to receive that message which was sent to me, not any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; message.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: Fri, 15 Jul 2011 06:33:41 -0400
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: Terry Dontje&lt;terry.dontje_at_[hidden]  &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:terry.dontje_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To:users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Message-ID:&lt;4E201785.6010101_at_[hidden]  &lt;mailto:4E201785.6010101_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:4E201785.6010101_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mudassar,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You can do what you are asking.  The receiver uses MPI_ANY_SOURCE for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the source rank value and when you receive a message the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; status.MPI_SOURCE will contain the rank of the actual sender not the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; receiver's rank.  If you are not seeing that then there is a bug
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; somewhere.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 7/14/2011 9:54 PM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Friend,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               I can not specify the rank of the sender. Because only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the sender knows to which receiver the message is to be sent. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; receiver does not know from which sender the message will come. I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; trying to do a research work on load balancing in MPI application
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; where load is redistributed, so in that I require a receiver to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; receive a load value from a sender that it does not know. On the other
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hand, the sender actually calculates, to which receiver this load
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; value should be sent. So for this, I want sender to send a message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; containing the load to a receiver, but receiver does not know from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; which sender the message will come. See, it is like send receiver in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; DATAGRAM sockets. The receiver, receives the message on the IP and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; port, the message which was directed for it. I want to have same
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; behavior. But it seems that it is not possible in MPI. Isn't it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mudassar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *From:* Jeff Squyres&lt;jsquyres_at_[hidden]  &lt;mailto:jsquyres_at_[hidden]&gt;  &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *To:* Mudassar Majeed&lt;mudassarm30_at_[hidden]  &lt;mailto:mudassarm30_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:mudassarm30_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *Cc:* Open MPI Users&lt;users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;  &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *Sent:* Friday, July 15, 2011 3:30 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *Subject:* Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Right.  I thought you were asking about receiving *another* message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; from whomever you just received from via ANY_SOURCE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If you want to receive from a specific sender, you just specify the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank you want to receive from -- not ANY_SOURCE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You will always only receive messages that were sent to *you*.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; There's no MPI_SEND_TO_ANYONE_WHO_IS_LISTENING functionality, for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; example.  So your last statement: &quot;But when it captures with ..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (even not targetted for it)&quot; is incorrect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I guess I still don't understand your question...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 14, 2011, at 9:17 PM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I know this, but when I compare status.MPI_SOURCE with myid, they
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; are different. I guess you need to reconsider my question. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Recv function seems to capture message from the queue with some
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; search parameters like source, tag etc. So in case the receiver does
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; not know the sender and wants to receive only that message which was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sent for this receiver. But when it captures with source as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_ANY_SOURCE and MPI_ANY_TAG, the receiver will capture any message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (even not targetted for it).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mudassar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: Jeff Squyres&lt;jsquyres_at_[hidden]  &lt;mailto:jsquyres_at_[hidden]&gt;  &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:jsquyres_at_[hidden]  &lt;mailto:jsquyres_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Mudassar Majeed&lt;mudassarm30_at_[hidden]  &lt;mailto:mudassarm30_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:mudassarm30_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:mudassarm30_at_[hidden]  &lt;mailto:mudassarm30_at_[hidden]&gt;&gt;&gt;; Open
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI Users&lt;users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Friday, July 15, 2011 1:58 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When you use MPI_ANY_SOURCE in a receive, the rank of the actual
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sender is passed back to you in the status.MPI_SOURCE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 14, 2011, at 7:55 PM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello people,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                         I am trapped in the following problem plz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; help me. Suppose a process A sends a message to process B. The process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; B will receive the message with MPI_Recv with MPI_ANY_SOURCE in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; source argument. Let say process B does not know that A is the sender.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But I want B to receive message from process A (the one who actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sends the message to process B). But if I use MPI_ANY_SOURCE, then any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; message from any source is captured by process B (let say there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; other processes sending messages). Instead of MPI_ANY_SOURCE I cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; use A in the source argument as B does not know about the sender. What
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; should I do in this situation ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mudassar Majeed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Emailterry.dontje_at_[hidden]  &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Emailterry.dontje_at_[hidden]  &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16956/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16956/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16956/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16957.php">Hui Li via LinkedIn: "[OMPI users] Invitation to connect on LinkedIn"</a>
<li><strong>Previous message:</strong> <a href="16955.php">Jeff Squyres: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<li><strong>In reply to:</strong> <a href="16953.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16941.php">Eugene Loh: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
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

<?
$subject_val = "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 04:35:33 2012" -->
<!-- isoreceived="20120821083533" -->
<!-- sent="Tue, 21 Aug 2012 10:35:28 +0200" -->
<!-- isosent="20120821083528" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv: Confusion with &amp;lt;&amp;lt;int count&amp;gt;&amp;gt; inputy parameter" -->
<!-- id="CAKbzMGc=znHNUBn_O689heq+6-jb=2JBmLk3i-74TE1p-fs5Zw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1345536075.51411.YahooMailNeo_at_web29601.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-21 04:35:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19972.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Previous message:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>In reply to:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19972.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Devendra
<br>
<p>MPI has no way of knowing how big your receive buffer is -
<br>
that's why you have to pass the &quot;count&quot; argument, to tell MPI
<br>
how many items of your data type (in your case many bytes)
<br>
it may copy to your receive buffer.
<br>
<p>When data arrives that is longer than the number you
<br>
specified in the &quot;count&quot; argument, the data will be cut off after
<br>
count bytes (and an error will be returned).
<br>
Any shorter amount of data will be copied to your receive buffer
<br>
and the call to MPI_Recv will terminate successfully.
<br>
<p>It is your responsibility to pass the correct value of &quot;count&quot;.
<br>
<p>If you expect data of 160 bytes you have to allocate a buffer
<br>
with a size greater or equal to 160 and you have to set your
<br>
&quot;count&quot; parameter to the size you allocated.
<br>
<p>If you want to receive data in chunks, you have to send it in chunks.
<br>
<p>I hope this helps
<br>
&nbsp;&nbsp;Jody
<br>
<p><p>On Tue, Aug 21, 2012 at 10:01 AM, devendra rai &lt;rai.devendra_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello Jeff and Hristo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I am completely confused:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, let's say, the complete reception requires 8192 bytes. And, I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Irecv(
</span><br>
<span class="quotelev1">&gt;                         (void*)this-&gt;receivebuffer,/* the receive buffer */
</span><br>
<span class="quotelev1">&gt;                         this-&gt;receive_packetsize,  /* 80 */
</span><br>
<span class="quotelev1">&gt;                         MPI_BYTE,                   /* The data type
</span><br>
<span class="quotelev1">&gt; expected */
</span><br>
<span class="quotelev1">&gt;                         this-&gt;transmittingnode,    /* The node from which to
</span><br>
<span class="quotelev1">&gt; receive */
</span><br>
<span class="quotelev1">&gt;                         this-&gt;uniquetag,           /* Tag */
</span><br>
<span class="quotelev1">&gt;                         MPI_COMM_WORLD,             /* Communicator */
</span><br>
<span class="quotelev1">&gt;                         &amp;Irecv_request              /* request handle */
</span><br>
<span class="quotelev1">&gt;                     );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That means, the the MPI_Test will tell me that the reception is complete
</span><br>
<span class="quotelev1">&gt; when I have received the first 80 bytes. Correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Next, let[s say that I have a receive buffer with a capacity of 160 bytes,
</span><br>
<span class="quotelev1">&gt; then, will overflow error occur here? Even if I have decided to receive a
</span><br>
<span class="quotelev1">&gt; large payload in chunks of 80 bytes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sorry, the manual and the API reference was too vague for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Devendra
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: devendra rai &lt;rai.devendra_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, 21 August 2012, 9:48
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy
</span><br>
<span class="quotelev1">&gt; parameter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or is it the number of elements that are expected to be received, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of elements have not been received?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Answering &quot;Yes&quot; this question might further the confusion there. The &quot;count&quot;
</span><br>
<span class="quotelev1">&gt; argument specifies the *capacity* of the receive buffer and the receive
</span><br>
<span class="quotelev1">&gt; operation (blocking or not) will complete successfully for any matching
</span><br>
<span class="quotelev1">&gt; message with size up to &quot;count&quot;, even for an empty message with 0 elements,
</span><br>
<span class="quotelev1">&gt; and will produce an overflow error if the received message was longer and
</span><br>
<span class="quotelev1">&gt; data truncation has to occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 20.08.2012, at 16:32, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 20, 2012, at 5:51 AM, devendra rai wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it the number of elements that have been received *thus far* in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or is it the number of elements that are expected to be received, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of elements have not been received?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the reason why I have a problem (and I think I may be completely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stupid here, I'd appreciate your patience):
</span><br>
<span class="quotelev2">&gt;&gt; [snip]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone see what could be going wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Double check that the (sender_rank, tag, communicator) tuple that you
</span><br>
<span class="quotelev2">&gt;&gt; issued in the MPI_Irecv matches the (rank, tag, communicator) tuple from the
</span><br>
<span class="quotelev2">&gt;&gt; sender (tag and communicator are arguments on the sending side, and rank is
</span><br>
<span class="quotelev2">&gt;&gt; the rank of the sender in that communicator).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When receives block like this without completing like this, it usually
</span><br>
<span class="quotelev2">&gt;&gt; means a mismatch between the tuples.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19972.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Previous message:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>In reply to:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19972.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
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

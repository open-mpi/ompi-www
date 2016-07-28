<?
$subject_val = "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 04:37:06 2012" -->
<!-- isoreceived="20120821083706" -->
<!-- sent="Tue, 21 Aug 2012 08:37:00 +0000" -->
<!-- isosent="20120821083700" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv: Confusion with &amp;lt;&amp;lt;int count&amp;gt;&amp;gt; inputy parameter" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC90311CB1B_at_rz-mbx2.win.rz.rwth-aachen.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-21 04:37:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19973.php">Yann RADENAC: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Previous message:</strong> <a href="19971.php">jody: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>In reply to:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20011.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="20011.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, Devendra,
<br>
<p>Sending and receiving messages in MPI are atomic operations - they complete only when the whole message was sent or received. MPI_Test only tells you if the operation has completed - there is no indication like &quot;30% of the message was sent/received, stay tuned for more&quot;.
<br>
<p>On the sender side, the message is constructed by taking bytes from various locations in memory, specified by the type map of the MPI datatype used. Then on the receiver side the message is deconstructed back into memory by placing the received bytes according to the type map of the MPI datatype provided. The combination of receive datatype and receive count gives you a certain number of bytes (that is the type size obtainable by MPI_Type_size times &quot;count&quot;). If the message is shorter, that means that some elements of the receive buffer will not be filled, which is OK - you can test exactly how many elements were filled with MPI_Get_count on the status of the receive operation. If the message was longer, however, there won't be enough place to put all the data that the message is carrying and an overflow error would occur.
<br>
<p>This works best by example. Image that in one process you issue:
<br>
<p>MPI_Send(data, 80, MPI_BYTE, ...);
<br>
<p>This will send a message containing 80 elements of type byte. Now on the receiver side you issue:
<br>
<p>MPI_Irecv(data, 160, MPI_BYTE, ..., &amp;request);
<br>
<p>What will happen is that the message will be received in its entirety since 80 times the size of MPI_BYTE is less than or equal to 160 times the size of MPI_BYTE. Calling MPI_Test on &quot;request&quot; will produce true in the completion flag and you will get back a status variable (unless you provided MPI_STATUS_IGNORE) and then you can call:
<br>
<p>MPI_Get_count(&amp;status, MPI_BYTE, &amp;count);
<br>
<p>Now &quot;count&quot; will contain 80 - the actual number of elements received.
<br>
<p>But if the receive operation was instead:
<br>
<p>MPI_Irecv(data, 40, MPI_BYTE, ..., &amp;request);
<br>
<p>since 40 times the size of MPI_BYTE is less than the size of the message, there will be not enough space to receive the entire message and an overflow error would occur. The MPI_Irecv itself only initiates the receive operation and will not return an error. Rather you will obtain the overflow error in the MPI_ERROR field of the status argument, returned by MPI_Test (the test call itself will return MPI_SUCCESS).
<br>
<p>Since MPI operations are atomic, you cannot send a message of 160 element and then receive it with two separate receives of size 80 - this is very important and it is difficult to grasp initially by people, who come to MPI from the traditional Unix network programming.
<br>
<p>I would recommend that you head to <a href="http://www.mpi-forum.org/">http://www.mpi-forum.org/</a> and download from there the PDF of the latest MPI 2.2 standard (or order the printed book). Unlike many other standard documents this one is actually readable by normal people and contains many useful explanations and examples. Read through entire section 3.2 to get a better idea of how messaging works in MPI.
<br>
<p>Hope that helps to clarify things,
<br>
<p>Hristo
<br>
<p>On 21.08.2012, at 10:01, devendra rai &lt;rai.devendra_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Jeff and Hristo,
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
<span class="quotelev1">&gt;                         MPI_BYTE,                   /* The data type expected */
</span><br>
<span class="quotelev1">&gt;                         this-&gt;transmittingnode,    /* The node from which to receive */
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
<span class="quotelev1">&gt; That means, the the MPI_Test will tell me that the reception is complete when I have received the first 80 bytes. Correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next, let[s say that I have a receive buffer with a capacity of 160 bytes, then, will overflow error occur here? Even if I have decided to receive a large payload in chunks of 80 bytes?
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
<span class="quotelev1">&gt; From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Cc: devendra rai &lt;rai.devendra_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, 21 August 2012, 9:48
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Or is it the number of elements that are expected to be received, and hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot; number of elements have not been received?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Answering &quot;Yes&quot; this question might further the confusion there. The &quot;count&quot; argument specifies the *capacity* of the receive buffer and the receive operation (blocking or not) will complete successfully for any matching message with size up to &quot;count&quot;, even for an empty message with 0 elements, and will produce an overflow error if the received message was longer and data truncation has to occur.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 20.08.2012, at 16:32, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 20, 2012, at 5:51 AM, devendra rai wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is it the number of elements that have been received *thus far* in the buffer?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Or is it the number of elements that are expected to be received, and hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot; number of elements have not been received?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here's the reason why I have a problem (and I think I may be completely stupid here, I'd appreciate your patience):
</span><br>
<span class="quotelev2">&gt; &gt; [snip]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Does anyone see what could be going wrong?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Double check that the (sender_rank, tag, communicator) tuple that you issued in the MPI_Irecv matches the (rank, tag, communicator) tuple from the sender (tag and communicator are arguments on the sending side, and rank is the rank of the sender in that communicator).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When receives block like this without completing like this, it usually means a mismatch between the tuples.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19972/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19972/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19973.php">Yann RADENAC: "Re: [OMPI users] &quot;Connection to lifeline lost&quot; when developing a new rsh agent"</a>
<li><strong>Previous message:</strong> <a href="19971.php">jody: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>In reply to:</strong> <a href="19970.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20011.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="20011.php">devendra rai: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
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

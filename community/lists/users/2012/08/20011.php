<?
$subject_val = "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 26 15:06:26 2012" -->
<!-- isoreceived="20120826190626" -->
<!-- sent="Sun, 26 Aug 2012 20:06:20 +0100 (BST)" -->
<!-- isosent="20120826190620" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv: Confusion with &amp;lt;&amp;lt;int count&amp;gt;&amp;gt; inputy parameter" -->
<!-- id="1346007980.88771.YahooMailNeo_at_web29605.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC90311CB1B_at_rz-mbx2.win.rz.rwth-aachen.de" -->
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
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-26 15:06:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20012.php">Shanthini Kannan: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20010.php">Brock Palen: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>In reply to:</strong> <a href="19972.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Hristo, Jeff,

Thanks a lot for your note. I understand the concept much better now. In fact, now I understand why the word &quot;maximum number of elements in the receive buffer&quot; in all of the documentation means.

However, I still think that the online documentation is confusing (and little vague), and could be worded better. It is worsened by the fact that all other sites simply copy the description verbatim.

Thanks a lot anyway!

Devendra




________________________________
 From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
To: devendra rai &lt;rai.devendra_at_[hidden]&gt; 
Cc: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Tuesday, 21 August 2012, 10:37
Subject: Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter
 

Hello, Devendra,

Sending and receiving messages in MPI are atomic operations - they complete only when the whole message was sent or received. MPI_Test only tells you if the operation has completed - there is no indication like &quot;30% of the message was sent/received, stay tuned for more&quot;.

On the sender side, the message is constructed by taking bytes from various locations in memory, specified by the type map of the MPI datatype used. Then on the receiver side the message is deconstructed back into memory by placing the received bytes according to the type map of the MPI datatype provided. The combination of receive datatype and receive count gives you a certain number of bytes (that is the type size obtainable by MPI_Type_size times &quot;count&quot;). If the message is shorter, that means that some elements of the receive buffer will not be filled, which is OK - you can test exactly how many elements were filled with MPI_Get_count on the status of the receive operation. If the message was longer, however, there won't be enough place to put all the data that the message is carrying and an overflow error would occur.

This works best by example. Image that in one process you issue:

MPI_Send(data, 80, MPI_BYTE, ...);

This will send a message containing 80 elements of type byte. Now on the receiver side you issue:

MPI_Irecv(data, 160, MPI_BYTE, ..., &amp;request);

What will happen is that the message will be received in its entirety since 80 times the size of MPI_BYTE is less than or equal to 160 times the size of MPI_BYTE. Calling MPI_Test on &quot;request&quot; will produce true in the completion flag and you will get back a status variable (unless you provided MPI_STATUS_IGNORE) and then you can call:

MPI_Get_count(&amp;status, MPI_BYTE, &amp;count);

Now &quot;count&quot; will contain 80 - the actual number of elements received.

But if the receive operation was instead:

MPI_Irecv(data, 40, MPI_BYTE, ..., &amp;request);

since 40 times the size of MPI_BYTE is less than the size of the message, there will be not enough space to receive the entire message and an overflow error would occur. The MPI_Irecv itself only initiates the receive operation and will not return an error. Rather you will obtain the overflow error in the MPI_ERROR field of the status argument, returned by MPI_Test (the test call itself will return MPI_SUCCESS).

Since MPI operations are atomic, you cannot send a message of 160 element and then receive it with two separate receives of size 80 - this is very important and it is difficult to grasp initially by people, who come to MPI from the traditional Unix network programming.

I would recommend that you head to <a href="http://www.mpi-forum.org/">http://www.mpi-forum.org/</a> and download from there the PDF of the latest MPI 2.2 standard (or order the printed book). Unlike many other standard documents this one is actually readable by normal people and contains many useful explanations and examples. Read through entire section 3.2 to get a better idea of how messaging works in MPI.

Hope that helps to clarify things,

Hristo


On 21.08.2012, at 10:01, devendra rai &lt;rai.devendra_at_[hidden]&gt; wrote:

Hello Jeff and Hristo,
&gt;
&gt;Now I am completely confused:
&gt;
&gt;So, let's say, the complete reception requires 8192 bytes. And, I have:
&gt;
&gt;MPI_Irecv(
&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; (void*)this-&gt;receivebuffer,/* the receive buffer */
&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; this-&gt;receive_packetsize,&#160; /* 80 */
&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_BYTE,&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* The data type expected */
&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; this-&gt;transmittingnode,&#160;&#160;&#160; /* The node from which to receive */
&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; this-&gt;uniquetag,&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* Tag */
&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_COMM_WORLD,&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* Communicator */
&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &amp;Irecv_request&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* request handle */
&gt;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; );
&gt;
&gt;
&gt;
&gt;
&gt;
&gt;That means, the the MPI_Test will tell me that the reception is complete when I have received the first 80 bytes. Correct?
&gt;
&gt;
&gt;Next, let[s say that I have a receive buffer with a capacity of 160 bytes, then, will overflow error occur here? Even if I have decided to receive a large payload in chunks of 80 bytes?
&gt;
&gt;
&gt;I am sorry, the manual and the API reference was too vague for me.
&gt;
&gt;
&gt;Thanks a lot
&gt;
&gt;
&gt;Devendra
&gt;
&gt;
&gt;________________________________
&gt; From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
&gt;To: Open MPI Users &lt;users_at_[hidden]&gt; 
&gt;Cc: devendra rai &lt;rai.devendra_at_[hidden]&gt; 
&gt;Sent: Tuesday, 21 August 2012, 9:48
&gt;Subject: Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter
&gt; 
&gt;Jeff,
&gt;
&gt;&gt;&gt; Or is it the number of elements that are expected to be received, and hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot; number of elements have not been received?
&gt;&gt; 
&gt;&gt; Yes.
&gt;
&gt;Answering &quot;Yes&quot; this question might further the confusion there. The &quot;count&quot; argument specifies the *capacity* of the receive buffer and the receive operation (blocking or not) will complete successfully for any matching message with size up to &quot;count&quot;, even for an empty message with 0 elements, and will produce an overflow error if the received message was longer and data truncation has to occur.
&gt;
&gt;On 20.08.2012, at 16:32, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt;
&gt;&gt; On Aug 20, 2012, at 5:51 AM, devendra rai wrote:
&gt;&gt; 
&gt;&gt;&gt; Is it the number of elements that have been received *thus far* in the buffer?
&gt;&gt; 
&gt;&gt; No.
&gt;&gt; 
&gt;&gt;&gt; Or is it the number of elements that are expected to be received, and hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot; number of elements have not been received?
&gt;&gt; 
&gt;&gt; Yes.
&gt;&gt; 
&gt;&gt;&gt; Here's the reason why I have a problem (and I think I may be completely stupid here, I'd appreciate your patience):
&gt;&gt; [snip]
&gt;&gt;&gt; Does anyone see what could be going wrong?
&gt;&gt; 
&gt;&gt; Double check that the (sender_rank, tag, communicator) tuple that you issued in the MPI_Irecv matches the (rank, tag, communicator) tuple from the sender (tag and communicator are arguments on the sending side, and rank is the rank of the sender in that
 communicator).
&gt;&gt; 
&gt;&gt; When receives block like this without completing like this, it usually means a mismatch between the tuples.
&gt;&gt; 
&gt;&gt; -- 
&gt;&gt; Jeff Squyres
&gt;&gt; jsquyres_at_[hidden]
&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;--
&gt;Hristo Iliev, Ph.D. -- High Performance Computing,
&gt;RWTH Aachen University, Center for Computing and Communication
&gt;Seffenter Weg
 23,&#160; D 52074&#160; Aachen (Germany)
&gt;Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
&gt;
&gt;
&gt;
&gt;
&gt;

--
Hristo Iliev, Ph.D. -- High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23, &#160;D 52074 &#160;Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20012.php">Shanthini Kannan: "Re: [OMPI users] ORTE_ERROR: orte_ess_base_open failed"</a>
<li><strong>Previous message:</strong> <a href="20010.php">Brock Palen: "Re: [OMPI users] openmpi 1.6.1 Questions"</a>
<li><strong>In reply to:</strong> <a href="19972.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- nextthread="start" -->
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

<?
$subject_val = "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 04:01:21 2012" -->
<!-- isoreceived="20120821080121" -->
<!-- sent="Tue, 21 Aug 2012 09:01:15 +0100 (BST)" -->
<!-- isosent="20120821080115" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv: Confusion with &amp;lt;&amp;lt;int count&amp;gt;&amp;gt; inputy parameter" -->
<!-- id="1345536075.51411.YahooMailNeo_at_web29601.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC90311B899_at_rz-mbx2.win.rz.rwth-aachen.de" -->
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
<strong>Date:</strong> 2012-08-21 04:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19971.php">jody: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Previous message:</strong> <a href="19969.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy	parameter"</a>
<li><strong>In reply to:</strong> <a href="19969.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy	parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19971.php">jody: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="19971.php">jody: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="19972.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff and Hristo,

Now I am completely confused:

So, let's say, the complete reception requires 8192 bytes. And, I have:

MPI_Irecv(
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; (void*)this-&gt;receivebuffer,/* the receive buffer */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; this-&gt;receive_packetsize,&#160; /* 80 */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_BYTE,&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* The data type expected */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; this-&gt;transmittingnode,&#160;&#160;&#160; /* The node from which to receive */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; this-&gt;uniquetag,&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* Tag */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_COMM_WORLD,&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* Communicator */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &amp;Irecv_request&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* request handle */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; );



That means, the the MPI_Test will tell me that the reception is complete when I have received the first 80 bytes. Correct?

Next, let[s say that I have a receive buffer with a capacity of 160 bytes, then, will overflow error occur here? Even if I have decided to receive a large payload in chunks of 80 bytes?

I am sorry, the manual and the API reference was too vague for me.

Thanks a lot

Devendra


________________________________
 From: &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Cc: devendra rai &lt;rai.devendra_at_[hidden]&gt; 
Sent: Tuesday, 21 August 2012, 9:48
Subject: Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter
 
Jeff,

&gt;&gt; Or is it the number of elements that are expected to be received, and hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot; number of elements have not been received?
&gt; 
&gt; Yes.

Answering &quot;Yes&quot; this question might further the confusion there. The &quot;count&quot; argument specifies the *capacity* of the receive buffer and the receive operation (blocking or not) will complete successfully for any matching message with size up to &quot;count&quot;, even for an empty message with 0 elements, and will produce an overflow error if the received message was longer and data truncation has to occur.

On 20.08.2012, at 16:32, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:

&gt; On Aug 20, 2012, at 5:51 AM, devendra rai wrote:
&gt; 
&gt;&gt; Is it the number of elements that have been received *thus far* in the buffer?
&gt; 
&gt; No.
&gt; 
&gt;&gt; Or is it the number of elements that are expected to be received, and hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot; number of elements have not been received?
&gt; 
&gt; Yes.
&gt; 
&gt;&gt; Here's the reason why I have a problem (and I think I may be completely stupid here, I'd appreciate your patience):
&gt; [snip]
&gt;&gt; Does anyone see what could be going wrong?
&gt; 
&gt; Double check that the (sender_rank, tag, communicator) tuple that you issued in the MPI_Irecv matches the (rank, tag, communicator) tuple from the sender (tag and communicator are arguments on the sending side, and rank is the rank of the sender in that communicator).
&gt; 
&gt; When receives block like this without completing like this, it usually means a mismatch between the tuples.
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

--
Hristo Iliev, Ph.D. -- High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,&#160; D 52074&#160; Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19970/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19971.php">jody: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Previous message:</strong> <a href="19969.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy	parameter"</a>
<li><strong>In reply to:</strong> <a href="19969.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy	parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19971.php">jody: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="19971.php">jody: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="19972.php">Iliev, Hristo: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
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

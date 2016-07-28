<?
$subject_val = "Re: [OMPI users] A question on MPI_Probe";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  1 04:12:09 2012" -->
<!-- isoreceived="20121001081209" -->
<!-- sent="Mon, 01 Oct 2012 08:12:04 +0000" -->
<!-- isosent="20121001081204" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A question on MPI_Probe" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC90314C921_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1348266779.3060.YahooMailNeo_at_web133206.mail.ir2.yahoo.com" -->
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
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-01 04:12:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20350.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="20348.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="../../2012/09/20246.php">devendra rai: "[OMPI users] A question on MPI_Probe"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p><p>I believe Jeff Squyres has already answered your question on the Open MPI 
<br>
mailing list, or at least hinted on the possible problem. MPI messages are 
<br>
received in the order they were sent but only within the specific (tag, 
<br>
communicator) tuple. This basically means:
<br>
<p>- within the same communicator you can receive messages out of order if they 
<br>
carry different tags;
<br>
<p>- messages that carry the same tag can be received out of order if they were 
<br>
communicated in different contexts (communicators).
<br>
<p><p><p>But here is the catch: you cannot receive a message that has not been sent 
<br>
yet. If you have two consecutive send operations, you must make sure that the 
<br>
first one would not block forever. The standard MPI send operation MPI_Send 
<br>
could be implemented in various ways (the standard doesn't say exactly how), 
<br>
but in most MPI implementations it behaves like buffered send for very small 
<br>
messages and like synchronous send for larger messages. If you have the 
<br>
following two calls in your sender process:
<br>
<p><p><p>MPI_Send(largedata, largecount, MPI_INT, dest, tag1, MPI_COMM_WORLD);
<br>
<p>MPI_Send(smalldata, smallcount, MPI_INT, dest, tag2, MPI_COMM_WORLD);
<br>
<p><p><p>it could happen that the first MPI_Send would actually behave as a synchronous 
<br>
one, i.e. it would not return unless the matching receive operation was posted 
<br>
on the receiver's side. Suppose that your receiver code is:
<br>
<p><p><p>MPI_Probe(src, tag2, MPI_COMM_WORLD, &amp;status);
<br>
<p>MPI_Recv(largedata, largecount, MPI_INT, src, tag1, MPI_COMM_WORLD, 
<br>
MPI_STATUS_IGNORE);
<br>
<p><p><p>This would most likely deadlock because MPI_Probe is a blocking call, i.e. it 
<br>
would not return until a matching send was posted, i.e. the second MPI_Send 
<br>
would have to execute, which would only happen after the first send has 
<br>
returned, but it would not happen unless the MPI_Recv in the receiver is 
<br>
executed... I guess you get the idea.
<br>
<p><p><p>To prevent the deadlock you could modify the sender's code to use a 
<br>
non-blocking send:
<br>
<p><p><p>MPI_Request req;
<br>
<p>MPI_Isend(largedata, largecount, MPI_INT, dest, tag1, MPI_COMM_WORLD, &amp;req);
<br>
<p>MPI_Send(smalldata, smallcount, MPI_INT, dest, tag2, MPI_COMM_WORLD);
<br>
<p>MPI_Wait(&amp;req, MPI_STATUS_IGNORE);
<br>
<p><p><p>Using non-blocking operation the send call returns immediately and the 
<br>
operation continues in the background, so the second send would get executed 
<br>
immediately after that. Now there would be two pending messages and they can 
<br>
be received in any order since they carry different tags.
<br>
<p><p><p>Hope that helps!
<br>
<p><p><p>Best regards,
<br>
<p>Hristo
<br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf 
Of devendra rai
Sent: Saturday, September 22, 2012 12:33 AM
To: Open Users
Subject: [OMPI users] A question on MPI_Probe
Hello,
I believe my understanding of MPI_Probe is not correct. Here's what I have as 
a setup:
Two MPI processes, A and B. Process A sends a large message, M1 using tag T1, 
and a small message, M2 using tag T2. The recepient of both messages is B.
The order of sending the messages is M1 and then M2.
The process B however executes MPI_Probe to test if the message with tag T2 is 
available. B will accept M1 after it has received M2 first.
I am under the impression that using information gained from MPI_Probe, I can 
choose not to receive message M1, and instead look for M2.
However, I see that M2 is never received by B (although A confirms that both 
M1 and M2 have been sent).
I am little confused. Can someone explain why B cannot receive M2? At least, 
does MPI allow receiving messages in the order that I have just described?
Thanks a lot.
Devendra Rai.
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-20349/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="../../att-20349/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20350.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="20348.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="../../2012/09/20246.php">devendra rai: "[OMPI users] A question on MPI_Probe"</a>
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

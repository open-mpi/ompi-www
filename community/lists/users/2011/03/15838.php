<?
$subject_val = "[OMPI users] Understanding the buffering of small messages with tcp network";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 06:19:21 2011" -->
<!-- isoreceived="20110310111921" -->
<!-- sent="Thu, 10 Mar 2011 12:19:14 +0100" -->
<!-- isosent="20110310111914" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="[OMPI users] Understanding the buffering of small messages with tcp network" -->
<!-- id="4D78B3B2.5020401_at_markomanolis.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Understanding the buffering of small messages with tcp network<br>
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 06:19:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15839.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<li><strong>Previous message:</strong> <a href="15837.php">Tim Prince: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I would like you to ask for a topic that there are already many 
<br>
questions but I am not familiar a lot with it. I want to understand the 
<br>
behaviour of an application where there are many messages less than 64KB 
<br>
(eager mode) and I use TCP network. I am trying to understand in order 
<br>
to simulate this application.
<br>
For example it can be possible to have one MPI_Send of 1200 bytes after 
<br>
some computation, then two messages of the same size, after computation, 
<br>
etc. However according to the measurements and the profiling the cost of 
<br>
the communication is less than the latency of the network. I can 
<br>
understand that the cost of the MPI_Send is the copy to the buffer 
<br>
however sending the message to the destination it should cost at least 
<br>
the latency. So are the messages buffered in the sender and they are 
<br>
sent as packet to the receiver? My tcp window is 4MB and I use the same 
<br>
value for snd_buff and rcv_buff. If they are buffered in the sender what 
<br>
is the criterion/algorithm? I mean if I have one message, after 
<br>
computation and after again message is it possible these two messages to 
<br>
be buffered from the sender point of view or this happens only on the 
<br>
receiver? If there is any document/paper that I can read about this I 
<br>
would be appreciate to provide me the link.
<br>
A simple example is that if I have a loop that rank 0 sends two messages 
<br>
to rank 1 then the duration of the first message is bigger than the 
<br>
second's one and if I increase the loop to 10 or 20 messages then all 
<br>
the messages cost a lot less than the first one and also less from what 
<br>
SkaMPI measures. So I am sure that it should be a buffer issue (or 
<br>
something else that I can't think about).
<br>
<p>Best regards,
<br>
Georges
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15838/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15839.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Two Instances of Same Process Rather Than Two SeparateProcesses"</a>
<li><strong>Previous message:</strong> <a href="15837.php">Tim Prince: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
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

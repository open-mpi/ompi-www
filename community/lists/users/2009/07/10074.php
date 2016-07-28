<?
$subject_val = "Re: [OMPI users] Receiving an unknown number of messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 17:10:18 2009" -->
<!-- isoreceived="20090723211018" -->
<!-- sent="Thu, 23 Jul 2009 14:10:29 -0700" -->
<!-- isosent="20090723211029" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving an unknown number of messages" -->
<!-- id="4A68D1C5.1000900_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A68CD4F.2030905_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Receiving an unknown number of messages<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 17:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10075.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="10073.php">Shaun Jackman: "[OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="10071.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10088.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="10088.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Shaun Jackman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For my MPI application, each process reads a file and for each line 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sends a message (MPI_Send) to one of the other processes determined 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by the contents of that line. Each process posts a single MPI_Irecv 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and uses MPI_Request_get_status to test for a received message. If a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message has been received, it processes the message and posts a new 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Irecv. I believe this situation is not safe and prone to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deadlock since MPI_Send may block. The receiver would need to post 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as many MPI_Irecv as messages it expects to receive, but it does not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know in advance how many messages to expect from the other 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes. How is this situation usually handled in an MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appliation where the number of messages to receive is unknown?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each process posts an MPI_Irecv to listen for in-coming messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Each process enters a loop in which it reads its file and sends out 
</span><br>
<span class="quotelev2">&gt;&gt; messages.  Within this loop, you also loop on MPI_Test to see if any 
</span><br>
<span class="quotelev2">&gt;&gt; message has arrived.  If so, process it, post another MPI_Irecv(), 
</span><br>
<span class="quotelev2">&gt;&gt; and keep polling.  (I'd use MPI_Test rather than 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Request_get_status since you'll have to call something like 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Test anyhow to complete the receive.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once you've posted all your sends, send out a special message to 
</span><br>
<span class="quotelev2">&gt;&gt; indicate you're finished.  I'm thinking of some sort of tree 
</span><br>
<span class="quotelev2">&gt;&gt; fan-in/fan-out barrier so that everyone will know when everyone is 
</span><br>
<span class="quotelev2">&gt;&gt; finished.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Keep polling on MPI_Test, processing further receives or advancing 
</span><br>
<span class="quotelev2">&gt;&gt; your fan-in/fan-out barrier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, the key ingredients are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *) keep polling on MPI_Test and reposting MPI_Irecv calls to drain 
</span><br>
<span class="quotelev2">&gt;&gt; in-coming messages while you're still in your &quot;send&quot; phase
</span><br>
<span class="quotelev2">&gt;&gt; *) have another mechanism for processes to notify one another when 
</span><br>
<span class="quotelev2">&gt;&gt; they've finished their send phases
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Eugene,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Very astute. You've pretty much exactly described how it works now, 
</span><br>
<span class="quotelev1">&gt; particularly the loop around MPI_Test and MPI_Irecv to drain incoming 
</span><br>
<span class="quotelev1">&gt; messages. So, here's my worry, which I'll demonstrate with an example. 
</span><br>
<span class="quotelev1">&gt; We have four processes. Each calls MPI_Irecv once. Each reads one line 
</span><br>
<span class="quotelev1">&gt; of its file. Each sends one message with MPI_Send to some other 
</span><br>
<span class="quotelev1">&gt; process based on the line that it has read, and then goes into the 
</span><br>
<span class="quotelev1">&gt; MPI_Test/MPI_Irecv loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The events fall out in this order
</span><br>
<span class="quotelev1">&gt; 2 sends to 0 and does not block (0 has one MPI_Irecv posted)
</span><br>
<span class="quotelev1">&gt; 3 sends to 1 and does not block (1 has one MPI_Irecv posted)
</span><br>
<span class="quotelev1">&gt; 0 receives the message from 2, consuming its MPI_Irecv
</span><br>
<span class="quotelev1">&gt; 1 receives the message from 3, consuming its MPI_Irecv
</span><br>
<span class="quotelev1">&gt; 0 sends to 1 and blocks (1 has no more MPI_Irecv posted)
</span><br>
<span class="quotelev1">&gt; 1 sends to 0 and blocks (0 has no more MPI_Irecv posted)
</span><br>
<span class="quotelev1">&gt; and now processes 0 and 1 are deadlocked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I say `receives' above, I mean that Open MPI has received the 
</span><br>
<span class="quotelev1">&gt; message and copied it into the buffer passed to the MPI_Irecv call, 
</span><br>
<span class="quotelev1">&gt; but the application hasn't yet called MPI_Test. The next step would be 
</span><br>
<span class="quotelev1">&gt; for all the processes to call MPI_Test, but 0 and 1 are already 
</span><br>
<span class="quotelev1">&gt; deadlocked.
</span><br>
<p>I don't get it.  Processes should drain aggressively.  So, if 0 receives 
<br>
a message, it should immediately post the next MPI_Irecv.  Before 0 
<br>
posts a send, it should MPI_Test (and post the next MPI_Irecv if the 
<br>
test received a message).
<br>
<p>Further, you could convert to MPI_Isend.
<br>
<p>But maybe I'm missing something.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10075.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="10073.php">Shaun Jackman: "[OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="10071.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10088.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="10088.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
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

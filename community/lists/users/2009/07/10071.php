<?
$subject_val = "Re: [OMPI users] Receiving an unknown number of messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 16:52:48 2009" -->
<!-- isoreceived="20090723205248" -->
<!-- sent="Thu, 23 Jul 2009 13:51:27 -0700" -->
<!-- isosent="20090723205127" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving an unknown number of messages" -->
<!-- id="4A68CD4F.2030905_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A5CEE77.7060607_at_sun.com" -->
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
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 16:51:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10072.php">Sims, James S. Dr.: "[OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
<li><strong>Previous message:</strong> <a href="10070.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>In reply to:</strong> <a href="9958.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10074.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="10074.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For my MPI application, each process reads a file and for each line 
</span><br>
<span class="quotelev2">&gt;&gt; sends a message (MPI_Send) to one of the other processes determined by 
</span><br>
<span class="quotelev2">&gt;&gt; the contents of that line. Each process posts a single MPI_Irecv and 
</span><br>
<span class="quotelev2">&gt;&gt; uses MPI_Request_get_status to test for a received message. If a 
</span><br>
<span class="quotelev2">&gt;&gt; message has been received, it processes the message and posts a new 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Irecv. I believe this situation is not safe and prone to deadlock 
</span><br>
<span class="quotelev2">&gt;&gt; since MPI_Send may block. The receiver would need to post as many 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Irecv as messages it expects to receive, but it does not know in 
</span><br>
<span class="quotelev2">&gt;&gt; advance how many messages to expect from the other processes. How is 
</span><br>
<span class="quotelev2">&gt;&gt; this situation usually handled in an MPI appliation where the number 
</span><br>
<span class="quotelev2">&gt;&gt; of messages to receive is unknown?
</span><br>
...
<br>
<span class="quotelev1">&gt; Each process posts an MPI_Irecv to listen for in-coming messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each process enters a loop in which it reads its file and sends out 
</span><br>
<span class="quotelev1">&gt; messages.  Within this loop, you also loop on MPI_Test to see if any 
</span><br>
<span class="quotelev1">&gt; message has arrived.  If so, process it, post another MPI_Irecv(), and 
</span><br>
<span class="quotelev1">&gt; keep polling.  (I'd use MPI_Test rather than MPI_Request_get_status 
</span><br>
<span class="quotelev1">&gt; since you'll have to call something like MPI_Test anyhow to complete the 
</span><br>
<span class="quotelev1">&gt; receive.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once you've posted all your sends, send out a special message to 
</span><br>
<span class="quotelev1">&gt; indicate you're finished.  I'm thinking of some sort of tree 
</span><br>
<span class="quotelev1">&gt; fan-in/fan-out barrier so that everyone will know when everyone is finished.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Keep polling on MPI_Test, processing further receives or advancing your 
</span><br>
<span class="quotelev1">&gt; fan-in/fan-out barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the key ingredients are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) keep polling on MPI_Test and reposting MPI_Irecv calls to drain 
</span><br>
<span class="quotelev1">&gt; in-coming messages while you're still in your &quot;send&quot; phase
</span><br>
<span class="quotelev1">&gt; *) have another mechanism for processes to notify one another when 
</span><br>
<span class="quotelev1">&gt; they've finished their send phases
</span><br>
<p>Hi Eugene,
<br>
<p>Very astute. You've pretty much exactly described how it works now, 
<br>
particularly the loop around MPI_Test and MPI_Irecv to drain incoming 
<br>
messages. So, here's my worry, which I'll demonstrate with an example. 
<br>
We have four processes. Each calls MPI_Irecv once. Each reads one line 
<br>
of its file. Each sends one message with MPI_Send to some other 
<br>
process based on the line that it has read, and then goes into the 
<br>
MPI_Test/MPI_Irecv loop.
<br>
<p>The events fall out in this order
<br>
2 sends to 0 and does not block (0 has one MPI_Irecv posted)
<br>
3 sends to 1 and does not block (1 has one MPI_Irecv posted)
<br>
0 receives the message from 2, consuming its MPI_Irecv
<br>
1 receives the message from 3, consuming its MPI_Irecv
<br>
0 sends to 1 and blocks (1 has no more MPI_Irecv posted)
<br>
1 sends to 0 and blocks (0 has no more MPI_Irecv posted)
<br>
and now processes 0 and 1 are deadlocked.
<br>
<p>When I say `receives' above, I mean that Open MPI has received the 
<br>
message and copied it into the buffer passed to the MPI_Irecv call, 
<br>
but the application hasn't yet called MPI_Test. The next step would be 
<br>
for all the processes to call MPI_Test, but 0 and 1 are already 
<br>
deadlocked.
<br>
<p>Cheers,
<br>
Shaun
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10072.php">Sims, James S. Dr.: "[OMPI users] Open MPI:Problem with 64-bit openMPI and intel compiler"</a>
<li><strong>Previous message:</strong> <a href="10070.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>In reply to:</strong> <a href="9958.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10074.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="10074.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
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

<?
$subject_val = "Re: [OMPI users] Receiving an unknown number of messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 16:45:45 2009" -->
<!-- isoreceived="20090714204545" -->
<!-- sent="Tue, 14 Jul 2009 13:45:43 -0700" -->
<!-- isosent="20090714204543" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving an unknown number of messages" -->
<!-- id="4A5CEE77.7060607_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A5CD3E9.9030301_at_bcgsc.ca" -->
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
<strong>Date:</strong> 2009-07-14 16:45:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9959.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9957.php">jimkress_58: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>In reply to:</strong> <a href="9956.php">Shaun Jackman: "[OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9964.php">Prasadcse Perera: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="9964.php">Prasadcse Perera: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="10071.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; For my MPI application, each process reads a file and for each line 
</span><br>
<span class="quotelev1">&gt; sends a message (MPI_Send) to one of the other processes determined by 
</span><br>
<span class="quotelev1">&gt; the contents of that line. Each process posts a single MPI_Irecv and 
</span><br>
<span class="quotelev1">&gt; uses MPI_Request_get_status to test for a received message. If a 
</span><br>
<span class="quotelev1">&gt; message has been received, it processes the message and posts a new 
</span><br>
<span class="quotelev1">&gt; MPI_Irecv. I believe this situation is not safe and prone to deadlock 
</span><br>
<span class="quotelev1">&gt; since MPI_Send may block. The receiver would need to post as many 
</span><br>
<span class="quotelev1">&gt; MPI_Irecv as messages it expects to receive, but it does not know in 
</span><br>
<span class="quotelev1">&gt; advance how many messages to expect from the other processes. How is 
</span><br>
<span class="quotelev1">&gt; this situation usually handled in an MPI appliation where the number 
</span><br>
<span class="quotelev1">&gt; of messages to receive is unknown?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a non-MPI network program I would create one thread for receiving 
</span><br>
<span class="quotelev1">&gt; and processing, and one thread for transmitting. Is threading a good 
</span><br>
<span class="quotelev1">&gt; solution? Is there a simpler solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Under what conditions will MPI_Send block and under what conditions 
</span><br>
<span class="quotelev1">&gt; will it definitely not block?
</span><br>
<p>I haven't seen any other responses, so I'll try.
<br>
<p>The conditions under which MPI_Send will block are implementation 
<br>
dependent.  Even for a particular implementation, the conditions may be 
<br>
tricky to describe -- e.g., what interconnect is being used to reach the 
<br>
peer, is there any congestion, etc.  I guess you could use buffered 
<br>
sends... or maybe you can't if you really don't know how many messages 
<br>
will be sent.
<br>
<p>Let's just assume they'll block.
<br>
<p>I'm unsure what overall design you're suggesting, so I'll suggest something.
<br>
<p>Each process posts an MPI_Irecv to listen for in-coming messages.
<br>
<p>Each process enters a loop in which it reads its file and sends out 
<br>
messages.  Within this loop, you also loop on MPI_Test to see if any 
<br>
message has arrived.  If so, process it, post another MPI_Irecv(), and 
<br>
keep polling.  (I'd use MPI_Test rather than MPI_Request_get_status 
<br>
since you'll have to call something like MPI_Test anyhow to complete the 
<br>
receive.)
<br>
<p>Once you've posted all your sends, send out a special message to 
<br>
indicate you're finished.  I'm thinking of some sort of tree 
<br>
fan-in/fan-out barrier so that everyone will know when everyone is finished.
<br>
<p>Keep polling on MPI_Test, processing further receives or advancing your 
<br>
fan-in/fan-out barrier.
<br>
<p>So, the key ingredients are:
<br>
<p>*) keep polling on MPI_Test and reposting MPI_Irecv calls to drain 
<br>
in-coming messages while you're still in your &quot;send&quot; phase
<br>
*) have another mechanism for processes to notify one another when 
<br>
they've finished their send phases
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9959.php">Robert Kubrick: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9957.php">jimkress_58: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>In reply to:</strong> <a href="9956.php">Shaun Jackman: "[OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9964.php">Prasadcse Perera: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="9964.php">Prasadcse Perera: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="10071.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
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

<?
$subject_val = "Re: [OMPI users] Receiving an unknown number of messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 18:54:41 2009" -->
<!-- isoreceived="20090724225441" -->
<!-- sent="Fri, 24 Jul 2009 15:53:28 -0700" -->
<!-- isosent="20090724225328" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving an unknown number of messages" -->
<!-- id="4A6A3B68.6040501_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="610ca1a30907142058y1fa28182l84faf186909cd44b_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-07-24 18:53:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10091.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Previous message:</strong> <a href="10089.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>In reply to:</strong> <a href="9964.php">Prasadcse Perera: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10071.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Prasadcse,
<br>
<p>At each iteration, each process chooses one other process to send to 
<br>
(based on the line it has just read from a file). If we send the 
<br>
number of packets to expect in advance, we then need to send an 
<br>
`expect zero packets from me' message to all the processes that we 
<br>
don't have a message for, because this method depends on every process 
<br>
knowing exactly how many messages to expect from every other process 
<br>
at each iteration.
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>Prasadcse Perera wrote:
<br>
<span class="quotelev1">&gt; I think its a real good way to use MPI_Irecv/MPI_Test on the receiver 
</span><br>
<span class="quotelev1">&gt; side to avoid any blocks which sender might run in to. But I'm a bit 
</span><br>
<span class="quotelev1">&gt; curious on the fact, Can't we use a special message beforehand between 
</span><br>
<span class="quotelev1">&gt; the sender/receivers to let the receivers know how many messages to 
</span><br>
<span class="quotelev1">&gt; expect ? This way the sender and the receiver can safely loop through 
</span><br>
<span class="quotelev1">&gt; without blocking I believe. Also even with the MPI_Irecv/MPI_Test it 
</span><br>
<span class="quotelev1">&gt; will serve as an extra proof for the receivers to proceed. Any ideas on 
</span><br>
<span class="quotelev1">&gt; that ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 15, 2009 at 2:15 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         For my MPI application, each process reads a file and for each
</span><br>
<span class="quotelev1">&gt;         line sends a message (MPI_Send) to one of the other processes
</span><br>
<span class="quotelev1">&gt;         determined by the contents of that line. Each process posts a
</span><br>
<span class="quotelev1">&gt;         single MPI_Irecv and uses MPI_Request_get_status to test for a
</span><br>
<span class="quotelev1">&gt;         received message. If a message has been received, it processes
</span><br>
<span class="quotelev1">&gt;         the message and posts a new MPI_Irecv. I believe this situation
</span><br>
<span class="quotelev1">&gt;         is not safe and prone to deadlock since MPI_Send may block. The
</span><br>
<span class="quotelev1">&gt;         receiver would need to post as many MPI_Irecv as messages it
</span><br>
<span class="quotelev1">&gt;         expects to receive, but it does not know in advance how many
</span><br>
<span class="quotelev1">&gt;         messages to expect from the other processes. How is this
</span><br>
<span class="quotelev1">&gt;         situation usually handled in an MPI appliation where the number
</span><br>
<span class="quotelev1">&gt;         of messages to receive is unknown?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         In a non-MPI network program I would create one thread for
</span><br>
<span class="quotelev1">&gt;         receiving and processing, and one thread for transmitting. Is
</span><br>
<span class="quotelev1">&gt;         threading a good solution? Is there a simpler solution?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Under what conditions will MPI_Send block and under what
</span><br>
<span class="quotelev1">&gt;         conditions will it definitely not block?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I haven't seen any other responses, so I'll try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The conditions under which MPI_Send will block are implementation
</span><br>
<span class="quotelev1">&gt;     dependent.  Even for a particular implementation, the conditions may
</span><br>
<span class="quotelev1">&gt;     be tricky to describe -- e.g., what interconnect is being used to
</span><br>
<span class="quotelev1">&gt;     reach the peer, is there any congestion, etc.  I guess you could use
</span><br>
<span class="quotelev1">&gt;     buffered sends... or maybe you can't if you really don't know how
</span><br>
<span class="quotelev1">&gt;     many messages will be sent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Let's just assume they'll block.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I'm unsure what overall design you're suggesting, so I'll suggest
</span><br>
<span class="quotelev1">&gt;     something.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Each process posts an MPI_Irecv to listen for in-coming messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Each process enters a loop in which it reads its file and sends out
</span><br>
<span class="quotelev1">&gt;     messages.  Within this loop, you also loop on MPI_Test to see if any
</span><br>
<span class="quotelev1">&gt;     message has arrived.  If so, process it, post another MPI_Irecv(),
</span><br>
<span class="quotelev1">&gt;     and keep polling.  (I'd use MPI_Test rather than
</span><br>
<span class="quotelev1">&gt;     MPI_Request_get_status since you'll have to call something like
</span><br>
<span class="quotelev1">&gt;     MPI_Test anyhow to complete the receive.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Once you've posted all your sends, send out a special message to
</span><br>
<span class="quotelev1">&gt;     indicate you're finished.  I'm thinking of some sort of tree
</span><br>
<span class="quotelev1">&gt;     fan-in/fan-out barrier so that everyone will know when everyone is
</span><br>
<span class="quotelev1">&gt;     finished.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Keep polling on MPI_Test, processing further receives or advancing
</span><br>
<span class="quotelev1">&gt;     your fan-in/fan-out barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     So, the key ingredients are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     *) keep polling on MPI_Test and reposting MPI_Irecv calls to drain
</span><br>
<span class="quotelev1">&gt;     in-coming messages while you're still in your &quot;send&quot; phase
</span><br>
<span class="quotelev1">&gt;     *) have another mechanism for processes to notify one another when
</span><br>
<span class="quotelev1">&gt;     they've finished their send phases
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10091.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Previous message:</strong> <a href="10089.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>In reply to:</strong> <a href="9964.php">Prasadcse Perera: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10071.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
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

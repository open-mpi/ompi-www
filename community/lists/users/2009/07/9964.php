<?
$subject_val = "Re: [OMPI users] Receiving an unknown number of messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 23:58:53 2009" -->
<!-- isoreceived="20090715035853" -->
<!-- sent="Wed, 15 Jul 2009 09:28:49 +0530" -->
<!-- isosent="20090715035849" -->
<!-- name="Prasadcse Perera" -->
<!-- email="prasadcse0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving an unknown number of messages" -->
<!-- id="610ca1a30907142058y1fa28182l84faf186909cd44b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Prasadcse Perera (<em>prasadcse0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 23:58:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9965.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9963.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9958.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10090.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="10090.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think its a real good way to use MPI_Irecv/MPI_Test on the receiver side
<br>
to avoid any blocks which sender might run in to. But I'm a bit curious on
<br>
the fact, Can't we use a special message beforehand between the
<br>
sender/receivers to let the receivers know how many messages to expect ?
<br>
This way the sender and the receiver can safely loop through without
<br>
blocking I believe. Also even with the MPI_Irecv/MPI_Test it will serve as
<br>
an extra proof for the receivers to proceed. Any ideas on that ?
<br>
<p>On Wed, Jul 15, 2009 at 2:15 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  For my MPI application, each process reads a file and for each line sends
</span><br>
<span class="quotelev2">&gt;&gt; a message (MPI_Send) to one of the other processes determined by the
</span><br>
<span class="quotelev2">&gt;&gt; contents of that line. Each process posts a single MPI_Irecv and uses
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Request_get_status to test for a received message. If a message has been
</span><br>
<span class="quotelev2">&gt;&gt; received, it processes the message and posts a new MPI_Irecv. I believe this
</span><br>
<span class="quotelev2">&gt;&gt; situation is not safe and prone to deadlock since MPI_Send may block. The
</span><br>
<span class="quotelev2">&gt;&gt; receiver would need to post as many MPI_Irecv as messages it expects to
</span><br>
<span class="quotelev2">&gt;&gt; receive, but it does not know in advance how many messages to expect from
</span><br>
<span class="quotelev2">&gt;&gt; the other processes. How is this situation usually handled in an MPI
</span><br>
<span class="quotelev2">&gt;&gt; appliation where the number of messages to receive is unknown?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In a non-MPI network program I would create one thread for receiving and
</span><br>
<span class="quotelev2">&gt;&gt; processing, and one thread for transmitting. Is threading a good solution?
</span><br>
<span class="quotelev2">&gt;&gt; Is there a simpler solution?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Under what conditions will MPI_Send block and under what conditions will
</span><br>
<span class="quotelev2">&gt;&gt; it definitely not block?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't seen any other responses, so I'll try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The conditions under which MPI_Send will block are implementation
</span><br>
<span class="quotelev1">&gt; dependent.  Even for a particular implementation, the conditions may be
</span><br>
<span class="quotelev1">&gt; tricky to describe -- e.g., what interconnect is being used to reach the
</span><br>
<span class="quotelev1">&gt; peer, is there any congestion, etc.  I guess you could use buffered sends...
</span><br>
<span class="quotelev1">&gt; or maybe you can't if you really don't know how many messages will be sent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's just assume they'll block.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm unsure what overall design you're suggesting, so I'll suggest
</span><br>
<span class="quotelev1">&gt; something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each process posts an MPI_Irecv to listen for in-coming messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each process enters a loop in which it reads its file and sends out
</span><br>
<span class="quotelev1">&gt; messages.  Within this loop, you also loop on MPI_Test to see if any message
</span><br>
<span class="quotelev1">&gt; has arrived.  If so, process it, post another MPI_Irecv(), and keep polling.
</span><br>
<span class="quotelev1">&gt;  (I'd use MPI_Test rather than MPI_Request_get_status since you'll have to
</span><br>
<span class="quotelev1">&gt; call something like MPI_Test anyhow to complete the receive.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once you've posted all your sends, send out a special message to indicate
</span><br>
<span class="quotelev1">&gt; you're finished.  I'm thinking of some sort of tree fan-in/fan-out barrier
</span><br>
<span class="quotelev1">&gt; so that everyone will know when everyone is finished.
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
<span class="quotelev1">&gt; *) have another mechanism for processes to notify one another when they've
</span><br>
<span class="quotelev1">&gt; finished their send phases
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9964/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9965.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9963.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>In reply to:</strong> <a href="9958.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10090.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>Reply:</strong> <a href="10090.php">Shaun Jackman: "Re: [OMPI users] Receiving an unknown number of messages"</a>
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

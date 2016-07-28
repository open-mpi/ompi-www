<?
$subject_val = "Re: [OMPI users] Receiving MPI messages of unknown size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 00:54:35 2009" -->
<!-- isoreceived="20090604045435" -->
<!-- sent="Thu, 4 Jun 2009 14:54:31 +1000" -->
<!-- isosent="20090604045431" -->
<!-- name="Lars Andersson" -->
<!-- email="larsand_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving MPI messages of unknown size" -->
<!-- id="8acca4520906032154if57afc4j7f3bc78abbb9f745_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8acca4520906032134p747a2454hcfeead952d42613b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Receiving MPI messages of unknown size<br>
<strong>From:</strong> Lars Andersson (<em>larsand_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-04 00:54:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9532.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9530.php">Gus Correa: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe in reply to:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9533.php">흆e Sandgren: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Reply:</strong> <a href="9533.php">흆e Sandgren: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>Thanks for the suggestion. I've been thinking along those lines, but
<br>
it seems to have drawbacks. Consider the following MPI conversation:
<br>
<p>Time            NODE 1                      NODE 2
<br>
0                local work                   local work
<br>
1                post n-b recv              local work
<br>
2                local work                   post n-b send
<br>
3                complete recv in 1     local work
<br>
<p>In an ideal implementation, NODE 1 would be able to go back to local
<br>
work immediately after posting a non blocking receive at t=1.
<br>
<p>If using blocking message passing for the initial header, NODE 1 would
<br>
have to block at least until t=2, when NODE 2 sends the corresponding
<br>
message header. Node 1 can then go on doing local work while the main
<br>
message data is being transferred, but it still wastes 1 time unit
<br>
waiting for a message header to arrive.
<br>
<p>Is there some clever way around this? Am I missing something?
<br>
<p>/Lars
<br>
<p><p><p>On Thu, Jun 4, 2009 at 2:34 PM, Lars Andersson &lt;larsand_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Lars
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if you could always use blocking message passing on the
</span><br>
<span class="quotelev1">&gt; preliminary send/receive pair that transmits the message size/header,
</span><br>
<span class="quotelev1">&gt; then use non-blocking mode for the actual message.
</span><br>
<span class="quotelev1">&gt; If the &quot;message size/header&quot; part transmits a small buffer,
</span><br>
<span class="quotelev1">&gt; the preliminary send/recv pair will use the &quot;eager&quot; communication mode,
</span><br>
<span class="quotelev1">&gt; return quickly, and may not reduce performance, I would guess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a group of several messages the preliminary
</span><br>
<span class="quotelev1">&gt; send/recv pair could transmit a small (to ensure &quot;eager mode&quot;)
</span><br>
<span class="quotelev1">&gt; array of message sizes,
</span><br>
<span class="quotelev1">&gt; maybe along with the message tags and sender ranks,
</span><br>
<span class="quotelev1">&gt; instead of only one size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just a thought.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lars Andersson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to solve a problem of passing serializable, arbitrarily
</span><br>
<span class="quotelev2">&gt;&gt; sized objects around using MPI and non-blocking communication. The
</span><br>
<span class="quotelev2">&gt;&gt; problem I'm facing is what to do at the receiving end when expecting
</span><br>
<span class="quotelev2">&gt;&gt; an object of unknown size, but at the same time not block on waiting
</span><br>
<span class="quotelev2">&gt;&gt; for it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When using blocking message passing, I have simply solved the problem
</span><br>
<span class="quotelev2">&gt;&gt; by first sending a small, fixed size header containing the size of
</span><br>
<span class="quotelev2">&gt;&gt; rest of the data, sent in the following mpi message. When using
</span><br>
<span class="quotelev2">&gt;&gt; non-blocking message passing, this doesn't seem to be such a good
</span><br>
<span class="quotelev2">&gt;&gt; idea, since we cant post the main data transfer until we have received
</span><br>
<span class="quotelev2">&gt;&gt; the message header... It seems to take away most of the advantages on
</span><br>
<span class="quotelev2">&gt;&gt; non-blocking io in the first place.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been thinking about solving this using MPI_Probe / MPI_IProbe,
</span><br>
<span class="quotelev2">&gt;&gt; but I'm worried about performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question 1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Will MPI_Probe or the underlying MPI implementation actually receive
</span><br>
<span class="quotelev2">&gt;&gt; the full message data (assuming reasonably sized message, like less
</span><br>
<span class="quotelev2">&gt;&gt; than 10MB) before MPI_Probe returns? Or will there be a significant
</span><br>
<span class="quotelev2">&gt;&gt; data transfer delay (for large messages) when calling MPI_Recv after a
</span><br>
<span class="quotelev2">&gt;&gt; successful MPI_Probe?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I want is something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) post one or several non-blocking, variable sized message receives
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) do other, non-MPI work, while any incoming messages will be fully
</span><br>
<span class="quotelev2">&gt;&gt; received into
</span><br>
<span class="quotelev2">&gt;&gt; buffers on the local machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) perform completion of the receives posted in 1). I don't want to
</span><br>
<span class="quotelev2">&gt;&gt; unnecessarily
</span><br>
<span class="quotelev2">&gt;&gt; wait here for data transfers that could have taken place during 2).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Problems:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't post non-blocking MPI_Irecv() calls in 1, because I don't know
</span><br>
<span class="quotelev2">&gt;&gt; the sizes of incoming messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I simply do nothing in 1, and call MPI_Probe in 3, I'm worried that
</span><br>
<span class="quotelev2">&gt;&gt; I won't get nice compute/transfer overlap because the messages wont
</span><br>
<span class="quotelev2">&gt;&gt; actually be received locally until I post a Probe or Recv in 3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question 2:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can I achieve the communication sequence described in 1,2,3 above,
</span><br>
<span class="quotelev2">&gt;&gt; with overlapping data transfer and local computation during 2?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Question 3:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A temporary kludge solution to the problem above might be to allocate
</span><br>
<span class="quotelev2">&gt;&gt; a temporary receive buffer of some arbitrary, constant maximum size
</span><br>
<span class="quotelev2">&gt;&gt; BUFSIZE in 1 for each non-blocking receive operation, make sure
</span><br>
<span class="quotelev2">&gt;&gt; messages sent are not larger than BUFSIZE, and post MPI_Irecv(buffer,
</span><br>
<span class="quotelev2">&gt;&gt; BUFSIZE,...) calls in 1. I haven't been able to figure out if it's
</span><br>
<span class="quotelev2">&gt;&gt; actually correct and portable to receive less data than specified in
</span><br>
<span class="quotelev2">&gt;&gt; the count argument to MPI_Irecv.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What if the message sent on the other end is 10 bytes, and
</span><br>
<span class="quotelev2">&gt;&gt; BUFSIZE=count=20. Would that be OK?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If anyone can shed any light on this, I'd be grateful. FYI, we're
</span><br>
<span class="quotelev2">&gt;&gt; using a cluster of 2-8 core x86-64 machines running Linux and
</span><br>
<span class="quotelev2">&gt;&gt; connected using ordinary 1Gbit ethernet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lars Andersson
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9532.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9530.php">Gus Correa: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe in reply to:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9533.php">흆e Sandgren: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Reply:</strong> <a href="9533.php">흆e Sandgren: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
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

<?
$subject_val = "Re: [OMPI users] Receiving MPI messages of unknown size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 01:00:44 2009" -->
<!-- isoreceived="20090604050044" -->
<!-- sent="Thu, 4 Jun 2009 15:00:37 +1000" -->
<!-- isosent="20090604050037" -->
<!-- name="Lars Andersson" -->
<!-- email="larsand_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving MPI messages of unknown size" -->
<!-- id="8acca4520906032200h7e68a8a9j3ef5fcec66a0362c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8acca4520906032157t5b5b2e53r968617793092abba_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-06-04 01:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9533.php">Åke Sandgren: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9531.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe in reply to:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9535.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jun 4, 2009 at 2:54 PM, Lars Andersson &lt;larsand_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Gus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the suggestion. I've been thinking along those lines, but
</span><br>
<span class="quotelev1">&gt; it seems to have drawbacks. Consider the following MPI conversation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Time &#160; &#160; &#160; &#160; &#160; &#160;NODE 1 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;NODE 2
</span><br>
<span class="quotelev1">&gt; 0 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;local work &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; local work
</span><br>
<span class="quotelev1">&gt; 1 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;post n-b recv &#160; &#160; &#160; &#160; &#160; &#160; &#160;local work
</span><br>
<span class="quotelev1">&gt; 2 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;local work &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; post n-b send
</span><br>
<span class="quotelev1">&gt; 3 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;complete recv in 1 &#160; &#160; local work
</span><br>
<p><p>Sorry, that formatting didn't come out very well. Another attempt:
<br>
<p>Time......NODE 1.......................NODE 2
<br>
0............local work....................local work
<br>
1............post n-b recv...............local work
<br>
2............local work....................post n-b send
<br>
3............complete recv in 1......local work
<br>
<p>Hopefully you get the idea...
<br>
<p>/Lars
<br>
<p><span class="quotelev1">&gt; In an ideal implementation, NODE 1 would be able to go back to local
</span><br>
<span class="quotelev1">&gt; work immediately after posting a non blocking receive at t=1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If using blocking message passing for the initial header, NODE 1 would
</span><br>
<span class="quotelev1">&gt; have to block at least until t=2, when NODE 2 sends the corresponding
</span><br>
<span class="quotelev1">&gt; message header. Node 1 can then go on doing local work while the main
</span><br>
<span class="quotelev1">&gt; message data is being transferred, but it still wastes 1 time unit
</span><br>
<span class="quotelev1">&gt; waiting for a message header to arrive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some clever way around this? Am I missing something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Lars
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 4, 2009 at 2:34 PM, Lars Andersson &lt;larsand_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Lars
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if you could always use blocking message passing on the
</span><br>
<span class="quotelev2">&gt;&gt; preliminary send/receive pair that transmits the message size/header,
</span><br>
<span class="quotelev2">&gt;&gt; then use non-blocking mode for the actual message.
</span><br>
<span class="quotelev2">&gt;&gt; If the &quot;message size/header&quot; part transmits a small buffer,
</span><br>
<span class="quotelev2">&gt;&gt; the preliminary send/recv pair will use the &quot;eager&quot; communication mode,
</span><br>
<span class="quotelev2">&gt;&gt; return quickly, and may not reduce performance, I would guess.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For a group of several messages the preliminary
</span><br>
<span class="quotelev2">&gt;&gt; send/recv pair could transmit a small (to ensure &quot;eager mode&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; array of message sizes,
</span><br>
<span class="quotelev2">&gt;&gt; maybe along with the message tags and sender ranks,
</span><br>
<span class="quotelev2">&gt;&gt; instead of only one size.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just a thought.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lars Andersson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to solve a problem of passing serializable, arbitrarily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sized objects around using MPI and non-blocking communication. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem I'm facing is what to do at the receiving end when expecting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an object of unknown size, but at the same time not block on waiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When using blocking message passing, I have simply solved the problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by first sending a small, fixed size header containing the size of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rest of the data, sent in the following mpi message. When using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-blocking message passing, this doesn't seem to be such a good
</span><br>
<span class="quotelev3">&gt;&gt;&gt; idea, since we cant post the main data transfer until we have received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the message header... It seems to take away most of the advantages on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-blocking io in the first place.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been thinking about solving this using MPI_Probe / MPI_IProbe,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I'm worried about performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Question 1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will MPI_Probe or the underlying MPI implementation actually receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the full message data (assuming reasonably sized message, like less
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than 10MB) before MPI_Probe returns? Or will there be a significant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data transfer delay (for large messages) when calling MPI_Recv after a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successful MPI_Probe?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I want is something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) post one or several non-blocking, variable sized message receives
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) do other, non-MPI work, while any incoming messages will be fully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffers on the local machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) perform completion of the receives posted in 1). I don't want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unnecessarily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wait here for data transfers that could have taken place during 2).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Problems:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't post non-blocking MPI_Irecv() calls in 1, because I don't know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the sizes of incoming messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I simply do nothing in 1, and call MPI_Probe in 3, I'm worried that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I won't get nice compute/transfer overlap because the messages wont
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually be received locally until I post a Probe or Recv in 3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Question 2:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can I achieve the communication sequence described in 1,2,3 above,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with overlapping data transfer and local computation during 2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Question 3:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A temporary kludge solution to the problem above might be to allocate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a temporary receive buffer of some arbitrary, constant maximum size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BUFSIZE in 1 for each non-blocking receive operation, make sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages sent are not larger than BUFSIZE, and post MPI_Irecv(buffer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BUFSIZE,...) calls in 1. I haven't been able to figure out if it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually correct and portable to receive less data than specified in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the count argument to MPI_Irecv.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What if the message sent on the other end is 10 bytes, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BUFSIZE=count=20. Would that be OK?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If anyone can shed any light on this, I'd be grateful. FYI, we're
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using a cluster of 2-8 core x86-64 machines running Linux and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connected using ordinary 1Gbit ethernet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lars Andersson
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9533.php">Åke Sandgren: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9531.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe in reply to:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9535.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
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

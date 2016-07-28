<?
$subject_val = "Re: [OMPI users] Receiving MPI messages of unknown size";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 21:56:09 2009" -->
<!-- isoreceived="20090604015609" -->
<!-- sent="Wed, 03 Jun 2009 21:55:59 -0400" -->
<!-- isosent="20090604015559" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Receiving MPI messages of unknown size" -->
<!-- id="4A2729AF.2080906_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8acca4520906031814s660abd00o1d622cf6aa5390bf_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 21:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9531.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>In reply to:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9531.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lars
<br>
<p>I wonder if you could always use blocking message passing on the 
<br>
preliminary send/receive pair that transmits the message size/header,
<br>
then use non-blocking mode for the actual message.
<br>
If the &quot;message size/header&quot; part transmits a small buffer,
<br>
the preliminary send/recv pair will use the &quot;eager&quot; communication mode,
<br>
return quickly, and may not reduce performance, I would guess.
<br>
<p>For a group of several messages the preliminary
<br>
send/recv pair could transmit a small (to ensure &quot;eager mode&quot;)
<br>
array of message sizes,
<br>
maybe along with the message tags and sender ranks,
<br>
instead of only one size.
<br>
<p>Just a thought.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Lars Andersson wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to solve a problem of passing serializable, arbitrarily
</span><br>
<span class="quotelev1">&gt; sized objects around using MPI and non-blocking communication. The
</span><br>
<span class="quotelev1">&gt; problem I'm facing is what to do at the receiving end when expecting
</span><br>
<span class="quotelev1">&gt; an object of unknown size, but at the same time not block on waiting
</span><br>
<span class="quotelev1">&gt; for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When using blocking message passing, I have simply solved the problem
</span><br>
<span class="quotelev1">&gt; by first sending a small, fixed size header containing the size of
</span><br>
<span class="quotelev1">&gt; rest of the data, sent in the following mpi message. When using
</span><br>
<span class="quotelev1">&gt; non-blocking message passing, this doesn't seem to be such a good
</span><br>
<span class="quotelev1">&gt; idea, since we cant post the main data transfer until we have received
</span><br>
<span class="quotelev1">&gt; the message header... It seems to take away most of the advantages on
</span><br>
<span class="quotelev1">&gt; non-blocking io in the first place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been thinking about solving this using MPI_Probe / MPI_IProbe,
</span><br>
<span class="quotelev1">&gt; but I'm worried about performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question 1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will MPI_Probe or the underlying MPI implementation actually receive
</span><br>
<span class="quotelev1">&gt; the full message data (assuming reasonably sized message, like less
</span><br>
<span class="quotelev1">&gt; than 10MB) before MPI_Probe returns? Or will there be a significant
</span><br>
<span class="quotelev1">&gt; data transfer delay (for large messages) when calling MPI_Recv after a
</span><br>
<span class="quotelev1">&gt; successful MPI_Probe?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I want is something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  1) post one or several non-blocking, variable sized message receives
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  2) do other, non-MPI work, while any incoming messages will be fully
</span><br>
<span class="quotelev1">&gt; received into
</span><br>
<span class="quotelev1">&gt;      buffers on the local machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  3) perform completion of the receives posted in 1). I don't want to
</span><br>
<span class="quotelev1">&gt; unnecessarily
</span><br>
<span class="quotelev1">&gt;      wait here for data transfers that could have taken place during 2).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Problems:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't post non-blocking MPI_Irecv() calls in 1, because I don't know
</span><br>
<span class="quotelev1">&gt; the sizes of incoming messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I simply do nothing in 1, and call MPI_Probe in 3, I'm worried that
</span><br>
<span class="quotelev1">&gt; I won't get nice compute/transfer overlap because the messages wont
</span><br>
<span class="quotelev1">&gt; actually be received locally until I post a Probe or Recv in 3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question 2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I achieve the communication sequence described in 1,2,3 above,
</span><br>
<span class="quotelev1">&gt; with overlapping data transfer and local computation during 2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question 3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A temporary kludge solution to the problem above might be to allocate
</span><br>
<span class="quotelev1">&gt; a temporary receive buffer of some arbitrary, constant maximum size
</span><br>
<span class="quotelev1">&gt; BUFSIZE in 1 for each non-blocking receive operation, make sure
</span><br>
<span class="quotelev1">&gt; messages sent are not larger than BUFSIZE, and post MPI_Irecv(buffer,
</span><br>
<span class="quotelev1">&gt; BUFSIZE,...) calls in 1. I haven't been able to figure out if it's
</span><br>
<span class="quotelev1">&gt; actually correct and portable to receive less data than specified in
</span><br>
<span class="quotelev1">&gt; the count argument to MPI_Irecv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What if the message sent on the other end is 10 bytes, and
</span><br>
<span class="quotelev1">&gt; BUFSIZE=count=20. Would that be OK?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If anyone can shed any light on this, I'd be grateful. FYI, we're
</span><br>
<span class="quotelev1">&gt; using a cluster of 2-8 core x86-64 machines running Linux and
</span><br>
<span class="quotelev1">&gt; connected using ordinary 1Gbit ethernet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lars Andersson
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9531.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>In reply to:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9531.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
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

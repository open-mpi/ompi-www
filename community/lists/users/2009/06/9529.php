<?
$subject_val = "[OMPI users] Receiving MPI messages of unknown size";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 21:14:20 2009" -->
<!-- isoreceived="20090604011420" -->
<!-- sent="Thu, 4 Jun 2009 11:14:16 +1000" -->
<!-- isosent="20090604011416" -->
<!-- name="Lars Andersson" -->
<!-- email="larsand_at_[hidden]" -->
<!-- subject="[OMPI users] Receiving MPI messages of unknown size" -->
<!-- id="8acca4520906031814s660abd00o1d622cf6aa5390bf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Receiving MPI messages of unknown size<br>
<strong>From:</strong> Lars Andersson (<em>larsand_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 21:14:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9530.php">Gus Correa: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9528.php">George Bosilca: "Re: [OMPI users] top question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9530.php">Gus Correa: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Reply:</strong> <a href="9530.php">Gus Correa: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe reply:</strong> <a href="9531.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe reply:</strong> <a href="9532.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe reply:</strong> <a href="9535.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe reply:</strong> <a href="9542.php">Neil Ludban: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to solve a problem of passing serializable, arbitrarily
<br>
sized objects around using MPI and non-blocking communication. The
<br>
problem I'm facing is what to do at the receiving end when expecting
<br>
an object of unknown size, but at the same time not block on waiting
<br>
for it.
<br>
<p>When using blocking message passing, I have simply solved the problem
<br>
by first sending a small, fixed size header containing the size of
<br>
rest of the data, sent in the following mpi message. When using
<br>
non-blocking message passing, this doesn't seem to be such a good
<br>
idea, since we cant post the main data transfer until we have received
<br>
the message header... It seems to take away most of the advantages on
<br>
non-blocking io in the first place.
<br>
<p><p>I've been thinking about solving this using MPI_Probe / MPI_IProbe,
<br>
but I'm worried about performance.
<br>
<p><p>Question 1:
<br>
<p>Will MPI_Probe or the underlying MPI implementation actually receive
<br>
the full message data (assuming reasonably sized message, like less
<br>
than 10MB) before MPI_Probe returns? Or will there be a significant
<br>
data transfer delay (for large messages) when calling MPI_Recv after a
<br>
successful MPI_Probe?
<br>
<p><p><p>What I want is something like this:
<br>
<p>&nbsp;1) post one or several non-blocking, variable sized message receives
<br>
<p>&nbsp;2) do other, non-MPI work, while any incoming messages will be fully
<br>
received into
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffers on the local machine.
<br>
<p>&nbsp;3) perform completion of the receives posted in 1). I don't want to
<br>
unnecessarily
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wait here for data transfers that could have taken place during 2).
<br>
<p><p>Problems:
<br>
<p>I can't post non-blocking MPI_Irecv() calls in 1, because I don't know
<br>
the sizes of incoming messages.
<br>
<p>If I simply do nothing in 1, and call MPI_Probe in 3, I'm worried that
<br>
I won't get nice compute/transfer overlap because the messages wont
<br>
actually be received locally until I post a Probe or Recv in 3.
<br>
<p><p>Question 2:
<br>
<p>How can I achieve the communication sequence described in 1,2,3 above,
<br>
with overlapping data transfer and local computation during 2?
<br>
<p><p>Question 3:
<br>
<p>A temporary kludge solution to the problem above might be to allocate
<br>
a temporary receive buffer of some arbitrary, constant maximum size
<br>
BUFSIZE in 1 for each non-blocking receive operation, make sure
<br>
messages sent are not larger than BUFSIZE, and post MPI_Irecv(buffer,
<br>
BUFSIZE,...) calls in 1. I haven't been able to figure out if it's
<br>
actually correct and portable to receive less data than specified in
<br>
the count argument to MPI_Irecv.
<br>
<p>What if the message sent on the other end is 10 bytes, and
<br>
BUFSIZE=count=20. Would that be OK?
<br>
<p><p>If anyone can shed any light on this, I'd be grateful. FYI, we're
<br>
using a cluster of 2-8 core x86-64 machines running Linux and
<br>
connected using ordinary 1Gbit ethernet.
<br>
<p><p>Best regards,
<br>
<p>Lars Andersson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9530.php">Gus Correa: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9528.php">George Bosilca: "Re: [OMPI users] top question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9530.php">Gus Correa: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Reply:</strong> <a href="9530.php">Gus Correa: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe reply:</strong> <a href="9531.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe reply:</strong> <a href="9532.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe reply:</strong> <a href="9535.php">Lars Andersson: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Maybe reply:</strong> <a href="9542.php">Neil Ludban: "Re: [OMPI users] Receiving MPI messages of unknown size"</a>
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

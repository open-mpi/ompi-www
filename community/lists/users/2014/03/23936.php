<?
$subject_val = "[OMPI users] delays in Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 22 15:46:20 2014" -->
<!-- isoreceived="20140322194620" -->
<!-- sent="Sat, 22 Mar 2014 12:46:18 -0700" -->
<!-- isosent="20140322194618" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="[OMPI users] delays in Isend" -->
<!-- id="1395517578.27857.28.camel_at_localhost" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] delays in Isend<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-22 15:46:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23937.php">Bennet Fauber: "Re: [OMPI users] delays in Isend"</a>
<li><strong>Previous message:</strong> <a href="23935.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23937.php">Bennet Fauber: "Re: [OMPI users] delays in Isend"</a>
<li><strong>Reply:</strong> <a href="23937.php">Bennet Fauber: "Re: [OMPI users] delays in Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a bunch of simulators communicating results to a single
<br>
assembler.  The results seem to take a long time to be received, and the
<br>
delay increases as the system runs.  Here are some results:
<br>
<p>&nbsp;&nbsp;sent   received delay
<br>
&nbsp;70.679  94.776 24.097
<br>
&nbsp;94.677 144.906 50.229
<br>
122.082 238.713 116.631
<br>
144.785 313.101 168.316
<br>
167.918 350.037 182.119
<br>
190.709 384.342 193.633
<br>
Times are wall clock times in seconds since process launch, and so there
<br>
may be some slew between sender and receiver, but it will be consistent
<br>
(this tracks only sends from one simulator and also ignores later sends
<br>
that never arrived--my completion logic needs work).
<br>
<p>The results are typically 500kB.  Sending is via Isend (non-blocking)
<br>
and receiving via Recv (blocking).  The simulators spend most of their
<br>
time computing; in particular there may be significant delays, e.g.,
<br>
from 10 seconds to a minute, between calls to mpi (typically a mix of
<br>
Isend, Recv, and Testsome).  All processes are on the same machine (for
<br>
now).
<br>
<p>The interval between assembler receives (from all sources) is sometimes
<br>
quite brief, under 2 seconds, and the time between receives is quite
<br>
variable.  Neither is consistent with the theory that the receiver is
<br>
saturated receiving messages, each of which takes a long time to
<br>
transmit (I mean the active part of the transmission, when bits are
<br>
flowing).  I infer from this that actually transmitting the message does
<br>
not take long, and that the longer gaps between receives have some other
<br>
cause.
<br>
<p>This is all from R, and the problem might lie with higher level code. 
<br>
<p>Can anyone explain what is going on, and what I might do to alleviate
<br>
it?
<br>
<p>My speculation is that the necessary handshaking can only take place
<br>
while both processes have called MPI, or perhaps some particular calls
<br>
are required.  The assembler spends most of its time executing a
<br>
receive, but the simulators are mostly busy with other stuff.  And so I
<br>
suspect the delay is with the simulators, though I'm not sure what to do
<br>
about it.  I could wait on completion from the sender, but that kind of
<br>
defeats the purpose of doing an isend.
<br>
<p>In a related thread about a similar issue, Jeff Squyres wrote
<br>
(<a href="http://www.open-mpi.org/community/lists/users/2011/07/16928.php">http://www.open-mpi.org/community/lists/users/2011/07/16928.php</a>)
<br>
----------------------------------------------------
<br>
If so, it's because Open MPI does not do background progress on
<br>
non-blocking sends in all cases.  Specifically, if you're sending over
<br>
TCP and the message is &quot;long&quot;, the OMPI layer in the master doesn't
<br>
actually send the whole message immediately because it doesn't want to
<br>
unexpectedly consume a lot of resources in the slave.  So the master
<br>
only sends a small fragment of the message and the communicator,tag
<br>
tuple suitable for matching at the receiver. When the receiver posts a
<br>
corresponding MPI_Recv (time=C), it sends back an ACK to the master,
<br>
enabling the master to send the rest of the message.
<br>
<p>However, since OMPI doesn't support background progress in all
<br>
situations, the master doesn't see this ACK until it goes into the MPI
<br>
progression engine -- i.e., when you call MPI_Recv() at Time=E.  Then
<br>
the OMPI layer in the master sees the ACK and sends the rest of the
<br>
message.
<br>
----------------------------------------------------------------
<br>
<p>I'm not sending over tcp (yet) but maybe I'm running into something
<br>
similar.
<br>
<p>I had thought the MPI stuff was handled in separate layer or thread that
<br>
would magically do all the work of moving messages around; the fact that
<br>
top shows all the CPU going to the R processes suggests that's not the
<br>
case.
<br>
<p>Running OMPI 1.7.4.
<br>
<p>Thanks for any help.
<br>
Ross Boylan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23937.php">Bennet Fauber: "Re: [OMPI users] delays in Isend"</a>
<li><strong>Previous message:</strong> <a href="23935.php">tmishima_at_[hidden]: "Re: [OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23937.php">Bennet Fauber: "Re: [OMPI users] delays in Isend"</a>
<li><strong>Reply:</strong> <a href="23937.php">Bennet Fauber: "Re: [OMPI users] delays in Isend"</a>
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

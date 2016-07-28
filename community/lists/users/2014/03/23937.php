<?
$subject_val = "Re: [OMPI users] delays in Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 22 17:44:31 2014" -->
<!-- isoreceived="20140322214431" -->
<!-- sent="Sat, 22 Mar 2014 17:44:30 -0400" -->
<!-- isosent="20140322214430" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] delays in Isend" -->
<!-- id="CAB2ovotrVOVS7OSuokWXrEf1AE_n5GMugO6pQx6GVAi_NQSAiA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1395517578.27857.28.camel_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] delays in Isend<br>
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-22 17:44:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23938.php">Filippo Spiga: "[OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Previous message:</strong> <a href="23936.php">Ross Boylan: "[OMPI users] delays in Isend"</a>
<li><strong>In reply to:</strong> <a href="23936.php">Ross Boylan: "[OMPI users] delays in Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23944.php">Ralph Castain: "Re: [OMPI users] delays in Isend"</a>
<li><strong>Reply:</strong> <a href="23944.php">Ralph Castain: "Re: [OMPI users] delays in Isend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Ross,
<br>
<p>Just out of curiosity, is Rmpi required for some package that you're
<br>
using?  I only ask because, if you're mostly writing your own MPI
<br>
calls, you might want to look at pbdR/pbdMPI, if you haven't already.
<br>
They also have a pbdPROF for profiling and which should be able to do
<br>
some profiling with MPI.
<br>
<p><a href="http://rbigdata.github.io/packages.html">http://rbigdata.github.io/packages.html</a>
<br>
<p>I wasn't sure whether this was really on topic for the list, so I send
<br>
it privately.  Sorry for the extra noise if you've already eliminated
<br>
pdbR as a possibility.
<br>
<p>-- bennet
<br>
<p><p>On Sat, Mar 22, 2014 at 3:46 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have a bunch of simulators communicating results to a single
</span><br>
<span class="quotelev1">&gt; assembler.  The results seem to take a long time to be received, and the
</span><br>
<span class="quotelev1">&gt; delay increases as the system runs.  Here are some results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   sent   received delay
</span><br>
<span class="quotelev1">&gt;  70.679  94.776 24.097
</span><br>
<span class="quotelev1">&gt;  94.677 144.906 50.229
</span><br>
<span class="quotelev1">&gt; 122.082 238.713 116.631
</span><br>
<span class="quotelev1">&gt; 144.785 313.101 168.316
</span><br>
<span class="quotelev1">&gt; 167.918 350.037 182.119
</span><br>
<span class="quotelev1">&gt; 190.709 384.342 193.633
</span><br>
<span class="quotelev1">&gt; Times are wall clock times in seconds since process launch, and so there
</span><br>
<span class="quotelev1">&gt; may be some slew between sender and receiver, but it will be consistent
</span><br>
<span class="quotelev1">&gt; (this tracks only sends from one simulator and also ignores later sends
</span><br>
<span class="quotelev1">&gt; that never arrived--my completion logic needs work).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The results are typically 500kB.  Sending is via Isend (non-blocking)
</span><br>
<span class="quotelev1">&gt; and receiving via Recv (blocking).  The simulators spend most of their
</span><br>
<span class="quotelev1">&gt; time computing; in particular there may be significant delays, e.g.,
</span><br>
<span class="quotelev1">&gt; from 10 seconds to a minute, between calls to mpi (typically a mix of
</span><br>
<span class="quotelev1">&gt; Isend, Recv, and Testsome).  All processes are on the same machine (for
</span><br>
<span class="quotelev1">&gt; now).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The interval between assembler receives (from all sources) is sometimes
</span><br>
<span class="quotelev1">&gt; quite brief, under 2 seconds, and the time between receives is quite
</span><br>
<span class="quotelev1">&gt; variable.  Neither is consistent with the theory that the receiver is
</span><br>
<span class="quotelev1">&gt; saturated receiving messages, each of which takes a long time to
</span><br>
<span class="quotelev1">&gt; transmit (I mean the active part of the transmission, when bits are
</span><br>
<span class="quotelev1">&gt; flowing).  I infer from this that actually transmitting the message does
</span><br>
<span class="quotelev1">&gt; not take long, and that the longer gaps between receives have some other
</span><br>
<span class="quotelev1">&gt; cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is all from R, and the problem might lie with higher level code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone explain what is going on, and what I might do to alleviate
</span><br>
<span class="quotelev1">&gt; it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My speculation is that the necessary handshaking can only take place
</span><br>
<span class="quotelev1">&gt; while both processes have called MPI, or perhaps some particular calls
</span><br>
<span class="quotelev1">&gt; are required.  The assembler spends most of its time executing a
</span><br>
<span class="quotelev1">&gt; receive, but the simulators are mostly busy with other stuff.  And so I
</span><br>
<span class="quotelev1">&gt; suspect the delay is with the simulators, though I'm not sure what to do
</span><br>
<span class="quotelev1">&gt; about it.  I could wait on completion from the sender, but that kind of
</span><br>
<span class="quotelev1">&gt; defeats the purpose of doing an isend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a related thread about a similar issue, Jeff Squyres wrote
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/community/lists/users/2011/07/16928.php">http://www.open-mpi.org/community/lists/users/2011/07/16928.php</a>)
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------
</span><br>
<span class="quotelev1">&gt; If so, it's because Open MPI does not do background progress on
</span><br>
<span class="quotelev1">&gt; non-blocking sends in all cases.  Specifically, if you're sending over
</span><br>
<span class="quotelev1">&gt; TCP and the message is &quot;long&quot;, the OMPI layer in the master doesn't
</span><br>
<span class="quotelev1">&gt; actually send the whole message immediately because it doesn't want to
</span><br>
<span class="quotelev1">&gt; unexpectedly consume a lot of resources in the slave.  So the master
</span><br>
<span class="quotelev1">&gt; only sends a small fragment of the message and the communicator,tag
</span><br>
<span class="quotelev1">&gt; tuple suitable for matching at the receiver. When the receiver posts a
</span><br>
<span class="quotelev1">&gt; corresponding MPI_Recv (time=C), it sends back an ACK to the master,
</span><br>
<span class="quotelev1">&gt; enabling the master to send the rest of the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, since OMPI doesn't support background progress in all
</span><br>
<span class="quotelev1">&gt; situations, the master doesn't see this ACK until it goes into the MPI
</span><br>
<span class="quotelev1">&gt; progression engine -- i.e., when you call MPI_Recv() at Time=E.  Then
</span><br>
<span class="quotelev1">&gt; the OMPI layer in the master sees the ACK and sends the rest of the
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sending over tcp (yet) but maybe I'm running into something
</span><br>
<span class="quotelev1">&gt; similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had thought the MPI stuff was handled in separate layer or thread that
</span><br>
<span class="quotelev1">&gt; would magically do all the work of moving messages around; the fact that
</span><br>
<span class="quotelev1">&gt; top shows all the CPU going to the R processes suggests that's not the
</span><br>
<span class="quotelev1">&gt; case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running OMPI 1.7.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help.
</span><br>
<span class="quotelev1">&gt; Ross Boylan
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23938.php">Filippo Spiga: "[OMPI users] usNIC point-to-point messaging module"</a>
<li><strong>Previous message:</strong> <a href="23936.php">Ross Boylan: "[OMPI users] delays in Isend"</a>
<li><strong>In reply to:</strong> <a href="23936.php">Ross Boylan: "[OMPI users] delays in Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23944.php">Ralph Castain: "Re: [OMPI users] delays in Isend"</a>
<li><strong>Reply:</strong> <a href="23944.php">Ralph Castain: "Re: [OMPI users] delays in Isend"</a>
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

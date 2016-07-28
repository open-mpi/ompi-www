<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 11:55:00 2008" -->
<!-- isoreceived="20080204165500" -->
<!-- sent="Mon, 4 Feb 2008 08:54:55 -0800" -->
<!-- isosent="20080204165455" -->
<!-- name="Christian Bell" -->
<!-- email="christian.bell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="20080204165455.GW9818_at_mv.qlogic.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF467D467D.25326148-ON852573E5.004D0296-852573E5.004DB4C5_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi credits for eager messages<br>
<strong>From:</strong> Christian Bell (<em>christian.bell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 11:54:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4957.php">Number Cruncher: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>Previous message:</strong> <a href="4955.php">Christian Bell: "Re: [OMPI users] Dynamically changing machine file data"</a>
<li><strong>In reply to:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4958.php">Ron Brightwell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The words 'eager', 'rendezvous' or 'credit' have a specific resonance
<br>
only for implementors and i think it's correct that the MPI
<br>
specification sidestep these words since they are artifacts of
<br>
implementation.
<br>
<p>All implementations make their own guarantees and run into their own
<br>
different limitations.  I'd expect a lot of them to blow up in
<br>
various areas if one were to start a 128k processor job -- but that
<br>
wouldn't necessarily make them non-compliant.
<br>
<p>I agree that providing correctness in the face of sleeping processes
<br>
is a fine goal to strive for.  However, there's also arguments for
<br>
why being too restrictive on credit management can hurt since this
<br>
problem is a memory buffering trade-off: memory and buffering can be
<br>
much cheaper compared to extra bandwidth and latency that may be
<br>
incurred by being too restrictive with MPI-level credit management.
<br>
Also, using more buffering can also help loosely synchronized jobs
<br>
for a variety of reasons -- from either the way the application is
<br>
coded or the size and nature of the machine it's run on.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;. . christian
<br>
<p>On Mon, 04 Feb 2008, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is what George says accurate?  If so, it sounds to me like OpenMPI does not
</span><br>
<span class="quotelev1">&gt; comply with the MPI standard on the behavior of eager protocol. MPICH is
</span><br>
<span class="quotelev1">&gt; getting dinged in this discussion because they have complied with the
</span><br>
<span class="quotelev1">&gt; requirements of the MPI standard.  IBM MPI also complies with the standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there is any debate about whether the MPI standard does (or should)
</span><br>
<span class="quotelev1">&gt; require the behavior I describe below then we should move the discussion to
</span><br>
<span class="quotelev1">&gt; the MPI 2.1 Forum and get a clarification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To me, the MPI standard is clear that a program like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; task 0:
</span><br>
<span class="quotelev1">&gt; MPI_Init
</span><br>
<span class="quotelev1">&gt; sleep(3000);
</span><br>
<span class="quotelev1">&gt; start receiving messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; each of tasks 1 to n-1:
</span><br>
<span class="quotelev1">&gt; MPI_Init
</span><br>
<span class="quotelev1">&gt; loop 5000 times
</span><br>
<span class="quotelev1">&gt;    MPI_Send(small message to 0)
</span><br>
<span class="quotelev1">&gt; end loop
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; May send some small messages eagerly if there is space at task 0 but must
</span><br>
<span class="quotelev1">&gt; block each task 1 to  n-1 before allowing task 0 to run out of eager buffer
</span><br>
<span class="quotelev1">&gt; space.  Doing this requires a token or credit management system in which
</span><br>
<span class="quotelev1">&gt; each task has credits for known buffer space at task 0. Each task will send
</span><br>
<span class="quotelev1">&gt; eagerly to task 0 until the sender runs out of credits and then must switch
</span><br>
<span class="quotelev1">&gt; to rendezvous protocol.  Tasks 1to n-1 might each do 3 MPI_Sends or 300
</span><br>
<span class="quotelev1">&gt; MPI_Sends before blocking, depending on how much buffer space there is at
</span><br>
<span class="quotelev1">&gt; task 0 but they would need to block in some MPI_Send before task 0 blows
</span><br>
<span class="quotelev1">&gt; up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When task 0 wakes up and begins receiving the early arrivals, tasks 1 to
</span><br>
<span class="quotelev1">&gt; n-1 will unblock and resume looping..  Allowing the user to shut off eager
</span><br>
<span class="quotelev1">&gt; protocol by setting eager size to 0 does not fix the standards compliance
</span><br>
<span class="quotelev1">&gt; issue.  You must either have no eager protocol at all or must have a eager
</span><br>
<span class="quotelev1">&gt; message token/credit strategy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  Dick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dick Treumann  -  MPI Team/TCEM
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden] wrote on 02/03/2008 06:59:38 PM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Well ... this is exactly the kind of behavior a high performance
</span><br>
<span class="quotelev2">&gt; &gt; application try to achieve isn't it ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem here is not the flow control. What you need is to avoid
</span><br>
<span class="quotelev2">&gt; &gt; buffering the messages on the receiver side. Luckily, Open MPI is
</span><br>
<span class="quotelev2">&gt; &gt; entirely configurable at runtime, so this situation is really easy to
</span><br>
<span class="quotelev2">&gt; &gt; deal with even at the user level. Set the eager size to zero, and no
</span><br>
<span class="quotelev2">&gt; &gt; buffering on the receiver side will be made. Your program will survive
</span><br>
<span class="quotelev2">&gt; &gt; as long as there is some available memory on the receiver.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;      George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 1, 2008, at 6:32 PM, 8mj6tc902_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; That would make sense. I able to break OpenMPI by having Node A wait
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; messages from Node B. Node B is in fact sleeping while Node C bombards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node A with a few thousand messages. After a while Node B wakes up and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sends Node A the message it's been waiting on, but Node A has long
</span><br>
<span class="quotelev3">&gt; &gt; &gt; since
</span><br>
<span class="quotelev3">&gt; &gt; &gt; been buried and seg faults. If I decrease the number of messages C is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sending, it works properly. This was on OpenMPI 1.2.4 (using I think
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SM BTL (might have been MX or TCP, but certainly not infiniband. I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; could
</span><br>
<span class="quotelev3">&gt; &gt; &gt; dig up the test and try again if anyone is seriously curious).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Trying the same test on MPICH/MX went very very slow (I don't think
</span><br>
<span class="quotelev3">&gt; &gt; &gt; they
</span><br>
<span class="quotelev3">&gt; &gt; &gt; have any clever buffer management) but it didn't crash.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sacerdoti, Federico Federico.Sacerdoti-at-deshaw.com
</span><br>
<span class="quotelev3">&gt; &gt; &gt; |openmpi-users/Allow| wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I am readying an openmpi 1.2.5 software stack for use with a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; many-thousand core cluster. I have a question about sending small
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; messages that I hope can be answered on this list.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I was under the impression that if node A wants to send a small MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; message to node B, it must have a credit to do so. The credit
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; assures A
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; that B has enough buffer space to accept the message. Credits are
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; required by the mpi layer regardless of the BTL transport layer used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I have been told by a Voltaire tech that this is not so, the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; credits are
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; used by the infiniband transport layer to reliably send a message,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; and
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; is not an openmpi feature.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Federico
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --Kris
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ?$B3p$C$F$7$^$&amp;L4$OK\Ev$NL4$H8@$($s!#
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [A dream that comes true can't really be called a dream.]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [attachment &quot;smime.p7s&quot; deleted by Richard
</span><br>
<span class="quotelev2">&gt; &gt; Treumann/Poughkeepsie/IBM]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
christian.bell_at_[hidden]
(QLogic Host Solutions Group, formerly Pathscale)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4957.php">Number Cruncher: "Re: [OMPI users] overlapping memcpy in	ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>Previous message:</strong> <a href="4955.php">Christian Bell: "Re: [OMPI users] Dynamically changing machine file data"</a>
<li><strong>In reply to:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4958.php">Ron Brightwell: "Re: [OMPI users] openmpi credits for eager messages"</a>
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

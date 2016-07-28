<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 09:08:54 2008" -->
<!-- isoreceived="20080204140854" -->
<!-- sent="Mon, 4 Feb 2008 09:08:45 -0500" -->
<!-- isosent="20080204140845" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="OF467D467D.25326148-ON852573E5.004D0296-852573E5.004DB4C5_at_us.ibm.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="859F232E-B80A-493C-9BDB-6CE92A42AD2D_at_eecs.utk.edu" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 09:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4955.php">Christian Bell: "Re: [OMPI users] Dynamically changing machine file data"</a>
<li><strong>Previous message:</strong> <a href="4953.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>In reply to:</strong> <a href="4951.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4956.php">Christian Bell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4956.php">Christian Bell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4958.php">Ron Brightwell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4962.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4972.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is what George says accurate?  If so, it sounds to me like OpenMPI does not
<br>
comply with the MPI standard on the behavior of eager protocol. MPICH is
<br>
getting dinged in this discussion because they have complied with the
<br>
requirements of the MPI standard.  IBM MPI also complies with the standard.
<br>
<p>If there is any debate about whether the MPI standard does (or should)
<br>
require the behavior I describe below then we should move the discussion to
<br>
the MPI 2.1 Forum and get a clarification.
<br>
<p>To me, the MPI standard is clear that a program like this:
<br>
<p>task 0:
<br>
MPI_Init
<br>
sleep(3000);
<br>
start receiving messages
<br>
<p>each of tasks 1 to n-1:
<br>
MPI_Init
<br>
loop 5000 times
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(small message to 0)
<br>
end loop
<br>
<p>May send some small messages eagerly if there is space at task 0 but must
<br>
block each task 1 to  n-1 before allowing task 0 to run out of eager buffer
<br>
space.  Doing this requires a token or credit management system in which
<br>
each task has credits for known buffer space at task 0. Each task will send
<br>
eagerly to task 0 until the sender runs out of credits and then must switch
<br>
to rendezvous protocol.  Tasks 1to n-1 might each do 3 MPI_Sends or 300
<br>
MPI_Sends before blocking, depending on how much buffer space there is at
<br>
task 0 but they would need to block in some MPI_Send before task 0 blows
<br>
up.
<br>
<p>When task 0 wakes up and begins receiving the early arrivals, tasks 1 to
<br>
n-1 will unblock and resume looping..  Allowing the user to shut off eager
<br>
protocol by setting eager size to 0 does not fix the standards compliance
<br>
issue.  You must either have no eager protocol at all or must have a eager
<br>
message token/credit strategy.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p>Dick Treumann  -  MPI Team/TCEM
<br>
IBM Systems &amp; Technology Group
<br>
Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 02/03/2008 06:59:38 PM:
<br>
<p><span class="quotelev1">&gt; Well ... this is exactly the kind of behavior a high performance
</span><br>
<span class="quotelev1">&gt; application try to achieve isn't it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem here is not the flow control. What you need is to avoid
</span><br>
<span class="quotelev1">&gt; buffering the messages on the receiver side. Luckily, Open MPI is
</span><br>
<span class="quotelev1">&gt; entirely configurable at runtime, so this situation is really easy to
</span><br>
<span class="quotelev1">&gt; deal with even at the user level. Set the eager size to zero, and no
</span><br>
<span class="quotelev1">&gt; buffering on the receiver side will be made. Your program will survive
</span><br>
<span class="quotelev1">&gt; as long as there is some available memory on the receiver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 1, 2008, at 6:32 PM, 8mj6tc902_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; That would make sense. I able to break OpenMPI by having Node A wait
</span><br>
<span class="quotelev2">&gt; &gt; for
</span><br>
<span class="quotelev2">&gt; &gt; messages from Node B. Node B is in fact sleeping while Node C bombards
</span><br>
<span class="quotelev2">&gt; &gt; Node A with a few thousand messages. After a while Node B wakes up and
</span><br>
<span class="quotelev2">&gt; &gt; sends Node A the message it's been waiting on, but Node A has long
</span><br>
<span class="quotelev2">&gt; &gt; since
</span><br>
<span class="quotelev2">&gt; &gt; been buried and seg faults. If I decrease the number of messages C is
</span><br>
<span class="quotelev2">&gt; &gt; sending, it works properly. This was on OpenMPI 1.2.4 (using I think
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; SM BTL (might have been MX or TCP, but certainly not infiniband. I
</span><br>
<span class="quotelev2">&gt; &gt; could
</span><br>
<span class="quotelev2">&gt; &gt; dig up the test and try again if anyone is seriously curious).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Trying the same test on MPICH/MX went very very slow (I don't think
</span><br>
<span class="quotelev2">&gt; &gt; they
</span><br>
<span class="quotelev2">&gt; &gt; have any clever buffer management) but it didn't crash.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sacerdoti, Federico Federico.Sacerdoti-at-deshaw.com
</span><br>
<span class="quotelev2">&gt; &gt; |openmpi-users/Allow| wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am readying an openmpi 1.2.5 software stack for use with a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; many-thousand core cluster. I have a question about sending small
</span><br>
<span class="quotelev3">&gt; &gt;&gt; messages that I hope can be answered on this list.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I was under the impression that if node A wants to send a small MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; message to node B, it must have a credit to do so. The credit
</span><br>
<span class="quotelev3">&gt; &gt;&gt; assures A
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that B has enough buffer space to accept the message. Credits are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; required by the mpi layer regardless of the BTL transport layer used.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have been told by a Voltaire tech that this is not so, the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; credits are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; used by the infiniband transport layer to reliably send a message,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is not an openmpi feature.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Federico
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; --Kris
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 叶ってしまう瘢雹夢は本当の夢と言えん。
</span><br>
<span class="quotelev2">&gt; &gt; [A dream that comes true can't really be called a dream.]
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [attachment &quot;smime.p7s&quot; deleted by Richard
</span><br>
<span class="quotelev1">&gt; Treumann/Poughkeepsie/IBM]
</span><br>
_______________________________________________
<br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4954/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4955.php">Christian Bell: "Re: [OMPI users] Dynamically changing machine file data"</a>
<li><strong>Previous message:</strong> <a href="4953.php">George Bosilca: "Re: [OMPI users] overlapping memcpy in ompi_coll_tuned_allgather_intra_bruck"</a>
<li><strong>In reply to:</strong> <a href="4951.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4956.php">Christian Bell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4956.php">Christian Bell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4958.php">Ron Brightwell: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4962.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4972.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
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

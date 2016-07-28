<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 17:32:24 2008" -->
<!-- isoreceived="20080204223224" -->
<!-- sent="Mon, 4 Feb 2008 17:32:16 -0500" -->
<!-- isosent="20080204223216" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="OF6D95F851.69BF7F17-ON852573E5.00798F65-852573E5.007BCE0B_at_us.ibm.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="6520D4A9-C634-46D1-A4FB-F355163BC482_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-02-04 17:32:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4974.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4972.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4972.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4974.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4974.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George
<br>
<p>Sorry - This is not a valid MPI program.  It violates the requirement that
<br>
a program not depend on there being any system buffering.  See page 32-33
<br>
of MPI 1.1
<br>
<p>&nbsp;Lets simplify to:
<br>
Task 0:
<br>
MPI_Recv( from 1 with tag 1)
<br>
MPI_Recv( from 1 with tag 0)
<br>
<p>Task 1:
<br>
MPI_Send(to 0 with tag 0)
<br>
MPI_Send(to 0 with tag 1)
<br>
<p>Without any early arrival buffer (or with eager size set to 0) task 0 will
<br>
hang in the first MPI_Recv and never post a recv with tag 0.  Task 1 will
<br>
hang in the MPI_Send with tag 0 because it cannot get past it until the
<br>
matching recv is posted by task 0.
<br>
<p>If there is enough early arrival buffer for the first MPI_Send on task 1 to
<br>
complete and the second MPI_Send to be posted the example will run. Once
<br>
both sends are posted by task 1, task 0 will harvest the second send and
<br>
get out of its first recv. Task 0's second recv can now pick up the message
<br>
from the early arrival buffer where it had to go to let task 1complete send
<br>
1 and post send 2.
<br>
<p>If an application wants to do this kind of order inversion it should use
<br>
some non blocking operations.  For example, if task 0 posted an MPI_Irecv
<br>
for tag 1, an MPI_Recv for tag 0 and lastly, an MPI_Wait for the Irecv, the
<br>
example is valid.
<br>
<p>I am not aware of any case where the standard allows a correct MPI program
<br>
to be deadlocked by an implementation limit.  It can be failed if it
<br>
exceeds a limit but I do not think it is ever OK to hang.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p>Dick Treumann  -  MPI Team/TCEM
<br>
IBM Systems &amp; Technology Group
<br>
Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 02/04/2008 04:41:21 PM:
<br>
<p><span class="quotelev1">&gt; Please allow me to slightly modify your example. It still follow the
</span><br>
<span class="quotelev1">&gt; rules from the MPI standard, so I think it's a 100% standard compliant
</span><br>
<span class="quotelev1">&gt; parallel application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; |                         task 0:                            |
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; | MPI_Init()                                                 |
</span><br>
<span class="quotelev1">&gt; | sleep(3000)                                                |
</span><br>
<span class="quotelev1">&gt; | for( msg = 0; msg &lt; 5000; msg++ ) {                        |
</span><br>
<span class="quotelev1">&gt; |   for( peer = 0; peer &lt; com_size; peer++ ) {               |
</span><br>
<span class="quotelev1">&gt; |     MPI_Recv( ..., from = peer, tag = (5000 - msg),... );  |
</span><br>
<span class="quotelev1">&gt; |   }                                                        |
</span><br>
<span class="quotelev1">&gt; | }                                                          |
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; |                   task 1 to com_size:                      |
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt; | MPI_Init()                                                 |
</span><br>
<span class="quotelev1">&gt; | for( msg = 0; msg &lt; 5000; msg++ ) {                        |
</span><br>
<span class="quotelev1">&gt; |   MPI_Send( ..., 0, tag = msg, ... );                      |
</span><br>
<span class="quotelev1">&gt; | }                                                          |
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Isn't that the flow control will stop the application to run to
</span><br>
<span class="quotelev1">&gt; completion ? It's easy to write an application that break a particular
</span><br>
<span class="quotelev1">&gt; MPI implementation. It doesn't necessarily make this implementation
</span><br>
<span class="quotelev1">&gt; non standard compliant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 4, 2008, at 9:08 AM, Richard Treumann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is what George says accurate? If so, it sounds to me like OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt; does not comply with the MPI standard on the behavior of eager
</span><br>
<span class="quotelev2">&gt; &gt; protocol. MPICH is getting dinged in this discussion because they
</span><br>
<span class="quotelev2">&gt; &gt; have complied with the requirements of the MPI standard. IBM MPI
</span><br>
<span class="quotelev2">&gt; &gt; also complies with the standard.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If there is any debate about whether the MPI standard does (or
</span><br>
<span class="quotelev2">&gt; &gt; should) require the behavior I describe below then we should move
</span><br>
<span class="quotelev2">&gt; &gt; the discussion to the MPI 2.1 Forum and get a clarification.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To me, the MPI standard is clear that a program like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; task 0:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; sleep(3000);
</span><br>
<span class="quotelev2">&gt; &gt; start receiving messages
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; each of tasks 1 to n-1:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; loop 5000 times
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Send(small message to 0)
</span><br>
<span class="quotelev2">&gt; &gt; end loop
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; May send some small messages eagerly if there is space at task 0 but
</span><br>
<span class="quotelev2">&gt; &gt; must block each task 1 to n-1 before allowing task 0 to run out of
</span><br>
<span class="quotelev2">&gt; &gt; eager buffer space. Doing this requires a token or credit management
</span><br>
<span class="quotelev2">&gt; &gt; system in which each task has credits for known buffer space at task
</span><br>
<span class="quotelev2">&gt; &gt; 0. Each task will send eagerly to task 0 until the sender runs out
</span><br>
<span class="quotelev2">&gt; &gt; of credits and then must switch to rendezvous protocol. Tasks 1to
</span><br>
<span class="quotelev2">&gt; &gt; n-1 might each do 3 MPI_Sends or 300 MPI_Sends before blocking,
</span><br>
<span class="quotelev2">&gt; &gt; depending on how much buffer space there is at task 0 but they would
</span><br>
<span class="quotelev2">&gt; &gt; need to block in some MPI_Send before task 0 blows up.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When task 0 wakes up and begins receiving the early arrivals, tasks
</span><br>
<span class="quotelev2">&gt; &gt; 1 to n-1 will unblock and resume looping.. Allowing the user to shut
</span><br>
<span class="quotelev2">&gt; &gt; off eager protocol by setting eager size to 0 does not fix the
</span><br>
<span class="quotelev2">&gt; &gt; standards compliance issue. You must either have no eager protocol
</span><br>
<span class="quotelev2">&gt; &gt; at all or must have a eager message token/credit strategy.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dick
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dick Treumann - MPI Team/TCEM
</span><br>
<span class="quotelev2">&gt; &gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev2">&gt; &gt; Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev2">&gt; &gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; users-bounces_at_[hidden] wrote on 02/03/2008 06:59:38 PM:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Well ... this is exactly the kind of behavior a high performance
</span><br>
<span class="quotelev3">&gt; &gt; &gt; application try to achieve isn't it ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The problem here is not the flow control. What you need is to avoid
</span><br>
<span class="quotelev3">&gt; &gt; &gt; buffering the messages on the receiver side. Luckily, Open MPI is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; entirely configurable at runtime, so this situation is really easy
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; deal with even at the user level. Set the eager size to zero, and no
</span><br>
<span class="quotelev3">&gt; &gt; &gt; buffering on the receiver side will be made. Your program will
</span><br>
<span class="quotelev2">&gt; &gt; survive
</span><br>
<span class="quotelev3">&gt; &gt; &gt; as long as there is some available memory on the receiver.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;      George.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 1, 2008, at 6:32 PM, 8mj6tc902_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; That would make sense. I able to break OpenMPI by having Node A
</span><br>
<span class="quotelev2">&gt; &gt; wait
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; for
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; messages from Node B. Node B is in fact sleeping while Node C
</span><br>
<span class="quotelev2">&gt; &gt; bombards
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Node A with a few thousand messages. After a while Node B wakes
</span><br>
<span class="quotelev2">&gt; &gt; up and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; sends Node A the message it's been waiting on, but Node A has long
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; since
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; been buried and seg faults. If I decrease the number of messages
</span><br>
<span class="quotelev2">&gt; &gt; C is
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; sending, it works properly. This was on OpenMPI 1.2.4 (using I
</span><br>
<span class="quotelev2">&gt; &gt; think
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SM BTL (might have been MX or TCP, but certainly not infiniband. I
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; could
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; dig up the test and try again if anyone is seriously curious).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Trying the same test on MPICH/MX went very very slow (I don't
</span><br>
<span class="quotelev2">&gt; &gt; think
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; they
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; have any clever buffer management) but it didn't crash.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Sacerdoti, Federico Federico.Sacerdoti-at-deshaw.com
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; |openmpi-users/Allow| wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I am readying an openmpi 1.2.5 software stack for use with a
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; many-thousand core cluster. I have a question about sending small
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; messages that I hope can be answered on this list.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I was under the impression that if node A wants to send a small
</span><br>
<span class="quotelev2">&gt; &gt; MPI
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; message to node B, it must have a credit to do so. The credit
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; assures A
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; that B has enough buffer space to accept the message. Credits are
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; required by the mpi layer regardless of the BTL transport layer
</span><br>
<span class="quotelev2">&gt; &gt; used.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I have been told by a Voltaire tech that this is not so, the
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; credits are
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; used by the infiniband transport layer to reliably send a
</span><br>
<span class="quotelev2">&gt; &gt; message,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; and
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; is not an openmpi feature.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Federico
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --Kris
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 叶ってしまう瘢雹夢は本当の夢と言えん。
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [A dream that comes true can't really be called a dream.]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [attachment &quot;smime.p7s&quot; deleted by Richard
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Treumann/Poughkeepsie/IBM]
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4973/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4974.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4972.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4972.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4974.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4974.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
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

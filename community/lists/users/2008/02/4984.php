<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 10:54:39 2008" -->
<!-- isoreceived="20080205155439" -->
<!-- sent="Tue, 5 Feb 2008 10:53:12 -0500" -->
<!-- isosent="20080205155312" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="OF760E9F8A.C5606AAF-ON852573E6.004CDA19-852573E6.005744BA_at_us.ibm.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="3359BBA0-BD9A-4E26-A73E-9499C1943DEB_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-02-05 10:53:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4985.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="4983.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4974.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4966.php">Brian W. Barrett: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So with an Isend your program becomes valid MPI and a very nice
<br>
illustrarion of why the MPI standard cannot limit envelops (or send/recv
<br>
descriptors) and why at some point the number of descriptors can blow the
<br>
limits. It also illustrates how the management of eager messages remains
<br>
workable. (Not the same as affordable or appropriate. I agree it has
<br>
serious scaling issues) Let's assume there is managed early arrival space
<br>
for 10 messages per sender.
<br>
<p>Each MPI_Isend generates an envelop that goes to the destination. For your
<br>
program to unwind properly, every envelop must be delivered to the
<br>
destination.  The first (blocking) MPI_Recv is looking for the tag in the
<br>
last envelop so if libmpi does not deliver all 5000 envelops per sender,
<br>
the first MPI_Recv will block forever.  It is not acceptable for a valid
<br>
MPI program to deadlock.  If the destination cannot hold all the envelops
<br>
there is no choice but to fail the job. The standard allows this. The Forum
<br>
considered it to be better to fail a job than to deadlock it.
<br>
<p>If each sender sends its first 10 messages eagerly the send side tokens
<br>
will be used up and the buffer space at the destination will fill up but
<br>
not overflow.  The senders now fall back to rendevous for their remaining
<br>
4990 MPI_Isends. The MPI_Isends cannot block.  They send envelops as fast
<br>
as the loop can run but the user send buffers involved cannot be altered
<br>
until the waits occur.  Once the last sent envelop  with tag 5000 arrives
<br>
and matches the posted MPI_Recv, an OK_to_send goes back to the sender and
<br>
the data can be moved from the still intact send buffer to the waiting
<br>
receive buffer.  The MPI_Waits for the Isend requests can be done in any
<br>
order but no send buffer can be changed until the corresponding MPI_Wait
<br>
returns. No system buffer needed for massage data.
<br>
<p>The MPI_Recvs being posted in reverse order (5000,4999 .. 11. ) each ship
<br>
OK_to_send and data flows directly from send to recv buffers.  Finally the
<br>
MPI_Recvs for tags (10 ... 1) get posted and pull their message data from
<br>
the early arrival space. The program has unwound correctly and as the early
<br>
arrival space frees up, credits can be returned to the sender.
<br>
<p>Performance discussions aside - the semantic is clean and reliable.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks - Dick
<br>
<p>PS - If anyone responds to this I hope you will state clearly whether you
<br>
want to talk about:
<br>
<p>- What does the standard require?
<br>
or
<br>
- What should the standard require?
<br>
<p>Dick Treumann  -  MPI Team/TCEM
<br>
IBM Systems &amp; Technology Group
<br>
Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 02/04/2008 06:04:22 PM:
<br>
<p><span class="quotelev1">&gt; Richard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're absolutely right. What a shame :) If I have spent less time
</span><br>
<span class="quotelev1">&gt; drawing the boxes around the code I might have noticed the typo. The
</span><br>
<span class="quotelev1">&gt; Send should be an Isend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 4, 2008, at 5:32 PM, Richard Treumann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi George
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry - This is not a valid MPI program. It violates the requirement
</span><br>
<span class="quotelev2">&gt; &gt; that a program not depend on there being any system buffering. See
</span><br>
<span class="quotelev2">&gt; &gt; page 32-33 of MPI 1.1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lets simplify to:
</span><br>
<span class="quotelev2">&gt; &gt; Task 0:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Recv( from 1 with tag 1)
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Recv( from 1 with tag 0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Task 1:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Send(to 0 with tag 0)
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Send(to 0 with tag 1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Without any early arrival buffer (or with eager size set to 0) task
</span><br>
<span class="quotelev2">&gt; &gt; 0 will hang in the first MPI_Recv and never post a recv with tag 0.
</span><br>
<span class="quotelev2">&gt; &gt; Task 1 will hang in the MPI_Send with tag 0 because it cannot get
</span><br>
<span class="quotelev2">&gt; &gt; past it until the matching recv is posted by task 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If there is enough early arrival buffer for the first MPI_Send on
</span><br>
<span class="quotelev2">&gt; &gt; task 1 to complete and the second MPI_Send to be posted the example
</span><br>
<span class="quotelev2">&gt; &gt; will run. Once both sends are posted by task 1, task 0 will harvest
</span><br>
<span class="quotelev2">&gt; &gt; the second send and get out of its first recv. Task 0's second recv
</span><br>
<span class="quotelev2">&gt; &gt; can now pick up the message from the early arrival buffer where it
</span><br>
<span class="quotelev2">&gt; &gt; had to go to let task 1complete send 1 and post send 2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If an application wants to do this kind of order inversion it should
</span><br>
<span class="quotelev2">&gt; &gt; use some non blocking operations. For example, if task 0 posted an
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Irecv for tag 1, an MPI_Recv for tag 0 and lastly, an MPI_Wait
</span><br>
<span class="quotelev2">&gt; &gt; for the Irecv, the example is valid.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not aware of any case where the standard allows a correct MPI
</span><br>
<span class="quotelev2">&gt; &gt; program to be deadlocked by an implementation limit. It can be
</span><br>
<span class="quotelev2">&gt; &gt; failed if it exceeds a limit but I do not think it is ever OK to hang.
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
<span class="quotelev2">&gt; &gt; users-bounces_at_[hidden] wrote on 02/04/2008 04:41:21 PM:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Please allow me to slightly modify your example. It still follow the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rules from the MPI standard, so I think it's a 100% standard
</span><br>
<span class="quotelev2">&gt; &gt; compliant
</span><br>
<span class="quotelev3">&gt; &gt; &gt; parallel application.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev3">&gt; &gt; &gt; |                         task 0:                            |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev3">&gt; &gt; &gt; | MPI_Init()                                                 |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; | sleep(3000)                                                |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; | for( msg = 0; msg &lt; 5000; msg++ ) {                        |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; |   for( peer = 0; peer &lt; com_size; peer++ ) {               |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; |     MPI_Recv( ..., from = peer, tag = (5000 - msg),... );  |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; |   }                                                        |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; | }                                                          |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev3">&gt; &gt; &gt; |                   task 1 to com_size:                      |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev3">&gt; &gt; &gt; | MPI_Init()                                                 |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; | for( msg = 0; msg &lt; 5000; msg++ ) {                        |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; |   MPI_Send( ..., 0, tag = msg, ... );                      |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; | }                                                          |
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +------------------------------------------------------------+
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Isn't that the flow control will stop the application to run to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; completion ? It's easy to write an application that break a
</span><br>
<span class="quotelev2">&gt; &gt; particular
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI implementation. It doesn't necessarily make this implementation
</span><br>
<span class="quotelev3">&gt; &gt; &gt; non standard compliant.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; george.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 4, 2008, at 9:08 AM, Richard Treumann wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Is what George says accurate? If so, it sounds to me like OpenMPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; does not comply with the MPI standard on the behavior of eager
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; protocol. MPICH is getting dinged in this discussion because they
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; have complied with the requirements of the MPI standard. IBM MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; also complies with the standard.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; If there is any debate about whether the MPI standard does (or
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; should) require the behavior I describe below then we should move
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; the discussion to the MPI 2.1 Forum and get a clarification.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; To me, the MPI standard is clear that a program like this:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; task 0:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Init
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; sleep(3000);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; start receiving messages
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; each of tasks 1 to n-1:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Init
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; loop 5000 times
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Send(small message to 0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; end loop
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; May send some small messages eagerly if there is space at task 0
</span><br>
<span class="quotelev2">&gt; &gt; but
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; must block each task 1 to n-1 before allowing task 0 to run out of
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; eager buffer space. Doing this requires a token or credit
</span><br>
<span class="quotelev2">&gt; &gt; management
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; system in which each task has credits for known buffer space at
</span><br>
<span class="quotelev2">&gt; &gt; task
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 0. Each task will send eagerly to task 0 until the sender runs out
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; of credits and then must switch to rendezvous protocol. Tasks 1to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; n-1 might each do 3 MPI_Sends or 300 MPI_Sends before blocking,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; depending on how much buffer space there is at task 0 but they
</span><br>
<span class="quotelev2">&gt; &gt; would
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; need to block in some MPI_Send before task 0 blows up.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; When task 0 wakes up and begins receiving the early arrivals,
</span><br>
<span class="quotelev2">&gt; &gt; tasks
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1 to n-1 will unblock and resume looping.. Allowing the user to
</span><br>
<span class="quotelev2">&gt; &gt; shut
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; off eager protocol by setting eager size to 0 does not fix the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; standards compliance issue. You must either have no eager protocol
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; at all or must have a eager message token/credit strategy.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Dick
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Dick Treumann - MPI Team/TCEM
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users-bounces_at_[hidden] wrote on 02/03/2008 06:59:38 PM:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Well ... this is exactly the kind of behavior a high performance
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; application try to achieve isn't it ?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; The problem here is not the flow control. What you need is to
</span><br>
<span class="quotelev2">&gt; &gt; avoid
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; buffering the messages on the receiver side. Luckily, Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; is
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; entirely configurable at runtime, so this situation is really
</span><br>
<span class="quotelev2">&gt; &gt; easy
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; to
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; deal with even at the user level. Set the eager size to zero,
</span><br>
<span class="quotelev2">&gt; &gt; and no
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; buffering on the receiver side will be made. Your program will
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; survive
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; as long as there is some available memory on the receiver.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;    Thanks,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;      George.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Feb 1, 2008, at 6:32 PM, 8mj6tc902_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; That would make sense. I able to break OpenMPI by having
</span><br>
<span class="quotelev2">&gt; &gt; Node A
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; wait
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; for
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; messages from Node B. Node B is in fact sleeping while Node C
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; bombards
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Node A with a few thousand messages. After a while Node B
</span><br>
<span class="quotelev2">&gt; &gt; wakes
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; up and
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; sends Node A the message it's been waiting on, but Node A
</span><br>
<span class="quotelev2">&gt; &gt; has long
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; since
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; been buried and seg faults. If I decrease the number of
</span><br>
<span class="quotelev2">&gt; &gt; messages
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; C is
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; sending, it works properly. This was on OpenMPI 1.2.4 (using I
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; think
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; SM BTL (might have been MX or TCP, but certainly not
</span><br>
<span class="quotelev2">&gt; &gt; infiniband. I
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; could
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; dig up the test and try again if anyone is seriously curious).
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Trying the same test on MPICH/MX went very very slow (I don't
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; think
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; they
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; have any clever buffer management) but it didn't crash.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; Sacerdoti, Federico Federico.Sacerdoti-at-deshaw.com
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; |openmpi-users/Allow| wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; I am readying an openmpi 1.2.5 software stack for use with a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; many-thousand core cluster. I have a question about sending
</span><br>
<span class="quotelev2">&gt; &gt; small
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; messages that I hope can be answered on this list.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; I was under the impression that if node A wants to send a
</span><br>
<span class="quotelev2">&gt; &gt; small
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; message to node B, it must have a credit to do so. The credit
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; assures A
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; that B has enough buffer space to accept the message.
</span><br>
<span class="quotelev2">&gt; &gt; Credits are
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; required by the mpi layer regardless of the BTL transport
</span><br>
<span class="quotelev2">&gt; &gt; layer
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; used.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; I have been told by a Voltaire tech that this is not so, the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; credits are
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; used by the infiniband transport layer to reliably send a
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; message,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; is not an openmpi feature.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; Federico
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; --Kris
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 叶ってしまう瘢雹夢は本当の夢と言えん。
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; [A dream that comes true can't really be called a dream.]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; [attachment &quot;smime.p7s&quot; deleted by Richard
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Treumann/Poughkeepsie/IBM]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4984/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4985.php">Oleg Morajko: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>Previous message:</strong> <a href="4983.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4974.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4966.php">Brian W. Barrett: "Re: [OMPI users] openmpi credits for eager messages"</a>
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

<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 16:41:29 2008" -->
<!-- isoreceived="20080204214129" -->
<!-- sent="Mon, 4 Feb 2008 16:41:21 -0500" -->
<!-- isosent="20080204214121" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="6520D4A9-C634-46D1-A4FB-F355163BC482_at_eecs.utk.edu" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 16:41:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4973.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4971.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4973.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4973.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please allow me to slightly modify your example. It still follow the  
<br>
rules from the MPI standard, so I think it's a 100% standard compliant  
<br>
parallel application.
<br>
<p>+------------------------------------------------------------+
<br>
|                         task 0:                            |
<br>
+------------------------------------------------------------+
<br>
| MPI_Init()                                                 |
<br>
| sleep(3000)                                                |
<br>
| for( msg = 0; msg &lt; 5000; msg++ ) {                        |
<br>
|   for( peer = 0; peer &lt; com_size; peer++ ) {               |
<br>
|     MPI_Recv( ..., from = peer, tag = (5000 - msg),... );  |
<br>
|   }                                                        |
<br>
| }                                                          |
<br>
+------------------------------------------------------------+
<br>
<p>+------------------------------------------------------------+
<br>
|                   task 1 to com_size:                      |
<br>
+------------------------------------------------------------+
<br>
| MPI_Init()                                                 |
<br>
| for( msg = 0; msg &lt; 5000; msg++ ) {                        |
<br>
|   MPI_Send( ..., 0, tag = msg, ... );                      |
<br>
| }                                                          |
<br>
+------------------------------------------------------------+
<br>
<p>Isn't that the flow control will stop the application to run to  
<br>
completion ? It's easy to write an application that break a particular  
<br>
MPI implementation. It doesn't necessarily make this implementation  
<br>
non standard compliant.
<br>
<p>george.
<br>
<p>On Feb 4, 2008, at 9:08 AM, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; Is what George says accurate? If so, it sounds to me like OpenMPI  
</span><br>
<span class="quotelev1">&gt; does not comply with the MPI standard on the behavior of eager  
</span><br>
<span class="quotelev1">&gt; protocol. MPICH is getting dinged in this discussion because they  
</span><br>
<span class="quotelev1">&gt; have complied with the requirements of the MPI standard. IBM MPI  
</span><br>
<span class="quotelev1">&gt; also complies with the standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there is any debate about whether the MPI standard does (or  
</span><br>
<span class="quotelev1">&gt; should) require the behavior I describe below then we should move  
</span><br>
<span class="quotelev1">&gt; the discussion to the MPI 2.1 Forum and get a clarification.
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
<span class="quotelev1">&gt; MPI_Send(small message to 0)
</span><br>
<span class="quotelev1">&gt; end loop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; May send some small messages eagerly if there is space at task 0 but  
</span><br>
<span class="quotelev1">&gt; must block each task 1 to n-1 before allowing task 0 to run out of  
</span><br>
<span class="quotelev1">&gt; eager buffer space. Doing this requires a token or credit management  
</span><br>
<span class="quotelev1">&gt; system in which each task has credits for known buffer space at task  
</span><br>
<span class="quotelev1">&gt; 0. Each task will send eagerly to task 0 until the sender runs out  
</span><br>
<span class="quotelev1">&gt; of credits and then must switch to rendezvous protocol. Tasks 1to  
</span><br>
<span class="quotelev1">&gt; n-1 might each do 3 MPI_Sends or 300 MPI_Sends before blocking,  
</span><br>
<span class="quotelev1">&gt; depending on how much buffer space there is at task 0 but they would  
</span><br>
<span class="quotelev1">&gt; need to block in some MPI_Send before task 0 blows up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When task 0 wakes up and begins receiving the early arrivals, tasks  
</span><br>
<span class="quotelev1">&gt; 1 to n-1 will unblock and resume looping.. Allowing the user to shut  
</span><br>
<span class="quotelev1">&gt; off eager protocol by setting eager size to 0 does not fix the  
</span><br>
<span class="quotelev1">&gt; standards compliance issue. You must either have no eager protocol  
</span><br>
<span class="quotelev1">&gt; at all or must have a eager message token/credit strategy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick Treumann - MPI Team/TCEM
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846 Fax (845) 433-8363
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
<span class="quotelev2">&gt; &gt; entirely configurable at runtime, so this situation is really easy  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; deal with even at the user level. Set the eager size to zero, and no
</span><br>
<span class="quotelev2">&gt; &gt; buffering on the receiver side will be made. Your program will  
</span><br>
<span class="quotelev1">&gt; survive
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
<span class="quotelev3">&gt; &gt; &gt; That would make sense. I able to break OpenMPI by having Node A  
</span><br>
<span class="quotelev1">&gt; wait
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; messages from Node B. Node B is in fact sleeping while Node C  
</span><br>
<span class="quotelev1">&gt; bombards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node A with a few thousand messages. After a while Node B wakes  
</span><br>
<span class="quotelev1">&gt; up and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sends Node A the message it's been waiting on, but Node A has long
</span><br>
<span class="quotelev3">&gt; &gt; &gt; since
</span><br>
<span class="quotelev3">&gt; &gt; &gt; been buried and seg faults. If I decrease the number of messages  
</span><br>
<span class="quotelev1">&gt; C is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sending, it works properly. This was on OpenMPI 1.2.4 (using I  
</span><br>
<span class="quotelev1">&gt; think
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
<span class="quotelev3">&gt; &gt; &gt; Trying the same test on MPICH/MX went very very slow (I don't  
</span><br>
<span class="quotelev1">&gt; think
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
<span class="quotelev4">&gt; &gt; &gt;&gt; I was under the impression that if node A wants to send a small  
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; message to node B, it must have a credit to do so. The credit
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; assures A
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; that B has enough buffer space to accept the message. Credits are
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; required by the mpi layer regardless of the BTL transport layer  
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I have been told by a Voltaire tech that this is not so, the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; credits are
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; used by the infiniband transport layer to reliably send a  
</span><br>
<span class="quotelev1">&gt; message,
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
<span class="quotelev3">&gt; &gt; &gt; &#229;&#143;&#182;&#227;&#129;&#163;&#227;&#129;&#166;&#227;&#129;&#151;&#227;&#129;&#190;&#227;&#129;&#134;&#229;&#164;&#162;&#227;&#129;&#175;&#230;&#156;&#172;&#229;&#189;&#147;&#227;&#129;&#174;&#229;&#164;&#162;&#227;&#129;&#168;&#232;&#168;&#128;&#227;&#129;&#136;&#227;&#130;&#147;&#227;&#128;&#130;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4972/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4973.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4971.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4973.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4973.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
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

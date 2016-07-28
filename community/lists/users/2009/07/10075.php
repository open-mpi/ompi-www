<?
$subject_val = "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 17:26:37 2009" -->
<!-- isoreceived="20090723212637" -->
<!-- sent="Thu, 23 Jul 2009 17:26:31 -0400" -->
<!-- isosent="20090723212631" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier" -->
<!-- id="OF3A7D9D5B.143C507C-ON852575FC.00740DB5-852575FC.0075C8CC_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A68CFFB.7060102_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 17:26:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10076.php">David Doria: "[OMPI users] Backwards compatibility?"</a>
<li><strong>Previous message:</strong> <a href="10074.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>In reply to:</strong> <a href="10073.php">Shaun Jackman: "[OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10103.php">Shaun Jackman: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="10103.php">Shaun Jackman: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No - it is not guaranteed. (it is highly probable though)
<br>
<p>The return from the MPI_Send only guarantees that the data is safely held
<br>
somewhere other than the send buffer so you are free to modify the send
<br>
buffer. The MPI standard does not say where the data is to be held. It only
<br>
says that once the MPI_Test is successful, the data will have been
<br>
delivered to the receive buffer.
<br>
<p>Consider this possible scenario:
<br>
<p>MPI_Send is for a small message:
<br>
The data is sent toward the destination
<br>
To allow the MPI_Send to complete promptly ,lib MPI makes a temporary copy
<br>
of the message
<br>
The MPI_Send returns once the copy is made
<br>
the message gets lost in the network
<br>
the MPI_Barrier does its communication without packet loss and completes
<br>
the call to MPI_Test returns false
<br>
the send side gets no ack for the lost message and eventually retransmits
<br>
it from the saved temp
<br>
This time it gets through
<br>
A later MPI_Test succeeds
<br>
An ack eventually gets back to the sender and it throws away the temp copy
<br>
of the message it was keeping in case a retransmit was needed
<br>
<p>I am not saying any particular MPI library would work this way but it is
<br>
one kind of thing that a libmpi might do to give better performance while
<br>
maintaining the strict rules of MPI semantic.  Since the MPI_Barrier does
<br>
not make any guarantee about the destination status of sends done before
<br>
it, this kind of optimization is legitimate.
<br>
<p>If you must know that the message is received once the barrier returns, you
<br>
need to MPI_Wait the message before you call barrier.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 07/23/2009 05:02:51 PM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [OMPI users] Interaction of MPI_Send and MPI_Barrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shaun Jackman
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 07/23/2009 05:04 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two processes run the following program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; request = MPI_Irecv
</span><br>
<span class="quotelev1">&gt; MPI_Send (to the other process)
</span><br>
<span class="quotelev1">&gt; MPI_Barrier
</span><br>
<span class="quotelev1">&gt; flag = MPI_Test(request)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without the barrier, there's a race and MPI_Test may or may not return
</span><br>
<span class="quotelev1">&gt; true, indicating whether the message has been received. With the
</span><br>
<span class="quotelev1">&gt; barrier, is it guaranteed that the message will have been received,
</span><br>
<span class="quotelev1">&gt; and MPI_Test will return true?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Shaun
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10075/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10076.php">David Doria: "[OMPI users] Backwards compatibility?"</a>
<li><strong>Previous message:</strong> <a href="10074.php">Eugene Loh: "Re: [OMPI users] Receiving an unknown number of messages"</a>
<li><strong>In reply to:</strong> <a href="10073.php">Shaun Jackman: "[OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10103.php">Shaun Jackman: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="10103.php">Shaun Jackman: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
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

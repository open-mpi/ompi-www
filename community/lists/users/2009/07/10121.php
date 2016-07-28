<?
$subject_val = "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 13:58:56 2009" -->
<!-- isoreceived="20090728175856" -->
<!-- sent="Tue, 28 Jul 2009 13:58:45 -0400" -->
<!-- isosent="20090728175845" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier" -->
<!-- id="OF97C6FD74.CB97E25D-ON85257600.0069E081-85257601.0062C339_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A6DEF2F.5020404_at_bcgsc.ca" -->
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
<strong>Date:</strong> 2009-07-28 13:58:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10122.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10120.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>In reply to:</strong> <a href="10103.php">Shaun Jackman: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no collective or point to point  operation that provides the
<br>
assurance you describe.  MPI is built around what is called &quot;local
<br>
completion semantic&quot;.
<br>
<p>If you need an operation that confirms that send count and recv counts
<br>
match you can write it yourself.  The MPI standard has never tried to
<br>
provide a built in collective for every kind of cooperative operation some
<br>
application might want.
<br>
<p>It seems like your application works in a way that is not usual for
<br>
parallel apps so it should not be surprising that the standard does not
<br>
include a pre-packaged solution.  The MPI standard provides collective
<br>
routines that are often needed and that perhaps a libmpi can implement in a
<br>
more optimal way than the end user could with portable code.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 07/27/2009 02:17:19 PM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier
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
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 07/27/2009 02:19 PM
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
<span class="quotelev1">&gt; Hi Dick,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, it's good to know that even if using MPI_Barrier in this fashion
</span><br>
<span class="quotelev1">&gt; did appear to be working, it's not guaranteed to work. Is there an MPI
</span><br>
<span class="quotelev1">&gt; collective function that has the desired effect? that after all
</span><br>
<span class="quotelev1">&gt; processes call this function, any previously posted MPI_Send are
</span><br>
<span class="quotelev1">&gt; guaranteed to have arrived and that MPI_Test will find the message.
</span><br>
<span class="quotelev1">&gt; Without such a function, it seems it would be impossible to know if
</span><br>
<span class="quotelev1">&gt; there are any outstanding messages waiting to be received, if it
</span><br>
<span class="quotelev1">&gt; wasn't known in advance by the receiver to expect the message.
</span><br>
<span class="quotelev1">&gt; Assuming that each process keeps a counter of the number of messages
</span><br>
<span class="quotelev1">&gt; that it has sent and the number that it has received, it should be
</span><br>
<span class="quotelev1">&gt; possible to sum the two counters across all processes and determine if
</span><br>
<span class="quotelev1">&gt; any are outstanding. It could be accomplished with a single
</span><br>
<span class="quotelev1">&gt; MPI_Reduce(sent - received).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Shaun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Treumann wrote:
</span><br>
<span class="quotelev2">&gt; &gt; No - it is not guaranteed. (it is highly probable though)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The return from the MPI_Send only guarantees that the data is safely
</span><br>
<span class="quotelev2">&gt; &gt; held somewhere other than the send buffer so you are free to modify the
</span><br>
<p><span class="quotelev2">&gt; &gt; send buffer. The MPI standard does not say where the data is to be
</span><br>
held.
<br>
<span class="quotelev2">&gt; &gt; It only says that once the MPI_Test is successful, the data will have
</span><br>
<span class="quotelev2">&gt; &gt; been delivered to the receive buffer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Consider this possible scenario:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Send is for a small message
</span><br>
<span class="quotelev2">&gt; &gt; The data is sent toward the destination
</span><br>
<span class="quotelev2">&gt; &gt; To allow the MPI_Send to complete promptly ,lib MPI makes a temporary
</span><br>
<span class="quotelev2">&gt; &gt; copy of the message
</span><br>
<span class="quotelev2">&gt; &gt; The MPI_Send returns once the copy is made
</span><br>
<span class="quotelev2">&gt; &gt; the message gets lost in the network
</span><br>
<span class="quotelev2">&gt; &gt; the MPI_Barrier does its communication without packet loss and
</span><br>
completes
<br>
<span class="quotelev2">&gt; &gt; the call to MPI_Test returns false
</span><br>
<span class="quotelev2">&gt; &gt; the send side gets no ack for the lost message and eventually
</span><br>
<span class="quotelev2">&gt; &gt; retransmits it from the saved temp
</span><br>
<span class="quotelev2">&gt; &gt; This time it gets through
</span><br>
<span class="quotelev2">&gt; &gt; A later MPI_Test succeeds
</span><br>
<span class="quotelev2">&gt; &gt; An ack eventually gets back to the sender and it throws away the temp
</span><br>
<span class="quotelev2">&gt; &gt; copy of the message it was keeping in case a retransmit was needed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not saying any particular MPI library would work this way but it
</span><br>
is
<br>
<span class="quotelev2">&gt; &gt; one kind of thing that a libmpi might do to give better performance
</span><br>
<span class="quotelev2">&gt; &gt; while maintaining the strict rules of MPI semantic. Since the
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Barrier does not make any guarantee about the destination status of
</span><br>
<p><span class="quotelev2">&gt; &gt; sends done before it, this kind of optimization is legitimate.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you must know that the message is received once the barrier returns,
</span><br>
<p><span class="quotelev2">&gt; &gt; you need to MPI_Wait the message before you call barrier.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dick
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Two processes run the following program:
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; request = MPI_Irecv
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; MPI_Send (to the other process)
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; MPI_Barrier
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; flag = MPI_Test(request)
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Without the barrier, there's a race and MPI_Test may or may not
</span><br>
return
<br>
<span class="quotelev3">&gt; &gt;  &gt; true, indicating whether the message has been received. With the
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; barrier, is it guaranteed that the message will have been received,
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; and MPI_Test will return true?
</span><br>
<span class="quotelev3">&gt; &gt;  &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; Shaun
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10121/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10122.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Previous message:</strong> <a href="10120.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>In reply to:</strong> <a href="10103.php">Shaun Jackman: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<!-- nextthread="start" -->
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

<?
$subject_val = "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 17:00:32 2009" -->
<!-- isoreceived="20090824210032" -->
<!-- sent="Mon, 24 Aug 2009 16:59:47 -0400" -->
<!-- isosent="20090824205947" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?" -->
<!-- id="OFBD2D2BE7.5EC8BF4B-ON8525761C.0072B2F6-8525761C.00735680_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A92F6C2.6060507_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 16:59:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10477.php">jimkress_58: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="10474.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10478.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10478.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guess I should have kept quiet a bit longer.  As I recall we had already
<br>
seen a counter example to Jeff's stronger statement and that motivated my
<br>
narrower one.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If there are no wildcard receives - every MPI_Barrier call is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;semantically irrelevant.
<br>
<p><p><p>Do you have a counter example for my more cautious assertion? ( I had
<br>
already granted that a correct MPI program could be made incorrect with a
<br>
barrier and the barrier that broke it would have to be considered be
<br>
&quot;semantically relevant&quot;. I would reword the statement with that in mind if
<br>
I were to offer it up again. )
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 08/24/2009 04:23:30 PM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Anyscientific application heavily using MPI_Barrier?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene Loh
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
<span class="quotelev1">&gt; 08/24/2009 04:25 PM
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
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 24, 2009, at 1:03 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; E.g., let's say P0 and P1 each send a message to P2, both using the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; same tag and communicator.  Let's say P2 does two receives on that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; communicator and tag, using a wildcard source.  So, the messages
</span><br>
<span class="quotelev3">&gt; &gt;&gt; could be received in either order.  One could introduce barriers to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; order the messages.  E.g.,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; P0:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Send
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Barrier
</span><br>
<span class="quotelev3">&gt; &gt;&gt; P1:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Barrier
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Send
</span><br>
<span class="quotelev3">&gt; &gt;&gt; P2:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Recv
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Barrier
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Recv
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this behavior *guaranteed* by MPI?  I'm not actually sure that it
</span><br>
<span class="quotelev2">&gt; &gt; is; barrier does not provide any guarantees about point-to-point
</span><br>
<span class="quotelev2">&gt; &gt; message passing progress.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For example, how about a machine with these assumptions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - P0 is &quot;far away&quot; from P2 on the point-to-point network
</span><br>
<span class="quotelev2">&gt; &gt; - P1 is &quot;close by&quot; to P2 on the point-to-point network
</span><br>
<span class="quotelev2">&gt; &gt; - Barriers go across a separate/fast network (think: bluegene)
</span><br>
<span class="quotelev2">&gt; &gt; - P0's send message is short/eager
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In this case, the Send from P0 complete &quot;immediately&quot; and enter the
</span><br>
<span class="quotelev2">&gt; &gt; barrier before it is delivered to P2.  The P0 send could then take a
</span><br>
<span class="quotelev2">&gt; &gt; &quot;long time&quot; to get to P2 --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, so let's say P0 completes its send and enters the barrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, P1 enters the barrier.  But it will not issue a send until it
</span><br>
<span class="quotelev1">&gt; leaves the barrier, which requires that the last process has entered the
</span><br>
<span class="quotelev1">&gt; barrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meanwhile, the last process, P2, is waiting on a receive before it
</span><br>
<span class="quotelev1">&gt; enters the barrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, here's the situation.  P2 is waiting to receive a message, a message
</span><br>
<span class="quotelev1">&gt; has been sent to P2, and no other message will be sent to P2 until some
</span><br>
<span class="quotelev1">&gt; message has been received.  So, there are only two options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) The first receive on P2 receives the message from P0.  Or,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) This perfectly legal MPI program deadlocks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; potentially long enough for the barrier to  overtake it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.  The first Recv on P2 has to complete before P2 can enter the
</span><br>
<span class="quotelev1">&gt; barrier, which is a prerequisite for the barrier to complete on any
</span><br>
process.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; and for the Send from P1 to be delivered to P2 before the  Send from
</span><br>
<span class="quotelev2">&gt; &gt; P0 arrives at P2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Couldn't that happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.  The send on P1 cannot be issued before the barrier completes on P1,
</span><br>
<span class="quotelev1">&gt; which cannot happen before the barrier is entered on P2, which cannot
</span><br>
<span class="quotelev1">&gt; happen before the first Recv on P2 is completed, which cannot happen
</span><br>
<span class="quotelev1">&gt; until some message is received on P2.  And, the only message that can be
</span><br>
<span class="quotelev1">&gt; received on P2 is the one issued by P0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Granted, I would expect that your example would perform in most real-
</span><br>
<span class="quotelev2">&gt; &gt; world situations as you describe (P0 is delivered to P2, then P1 is
</span><br>
<span class="quotelev2">&gt; &gt; delivered to P2).  But I don't think the standard guarantees it.
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
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10476/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10477.php">jimkress_58: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="10474.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10478.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10478.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
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

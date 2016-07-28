<?
$subject_val = "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 16:05:28 2009" -->
<!-- isoreceived="20090824200528" -->
<!-- sent="Mon, 24 Aug 2009 16:05:21 -0400" -->
<!-- isosent="20090824200521" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?" -->
<!-- id="OF12EC6D8F.873FD7E9-ON8525761C.006D6DA5-8525761C.006E5AC3_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E9FAC02B-3F17-4E79-84ED-84B7CE37DD22_at_cisco.com" -->
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
<strong>Date:</strong> 2009-08-24 16:05:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10473.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10471.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>In reply to:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10474.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As far as I can see, Jeff's analysis is dead on.  The matching order at P2
<br>
is based on the order in which the envelopes from P0 and P1 show up at P2.
<br>
The Barrier does not force an order between the communication paths P0-&gt;P2
<br>
vs. P1-&gt;P2.
<br>
<p>The MPI standard does not even say what &quot;show up&quot; means unless there is a
<br>
single source.  Say P0-&gt;P2 and P1-&gt;P2 are different kinds of links and the
<br>
MPI progress engine services link types round robin.
<br>
<p>The standard does say that if there are 2 sends from p0 to p2 and two
<br>
receives at P2 that could match either send, the matching order at P2 must
<br>
be the same as the issue order.at P0.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 08/24/2009 03:40:15 PM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Anyscientific application heavily using MPI_Barrier?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
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
<span class="quotelev1">&gt; 08/24/2009 03:41 PM
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
<span class="quotelev1">&gt; On Aug 24, 2009, at 1:03 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; E.g., let's say P0 and P1 each send a message to P2, both using the
</span><br>
<span class="quotelev2">&gt; &gt; same tag and communicator.  Let's say P2 does two receives on that
</span><br>
<span class="quotelev2">&gt; &gt; communicator and tag, using a wildcard source.  So, the messages
</span><br>
<span class="quotelev2">&gt; &gt; could be received in either order.  One could introduce barriers to
</span><br>
<span class="quotelev2">&gt; &gt; order the messages.  E.g.,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; P0:
</span><br>
<span class="quotelev2">&gt; &gt;   Send
</span><br>
<span class="quotelev2">&gt; &gt;   Barrier
</span><br>
<span class="quotelev2">&gt; &gt; P1:
</span><br>
<span class="quotelev2">&gt; &gt;   Barrier
</span><br>
<span class="quotelev2">&gt; &gt;   Send
</span><br>
<span class="quotelev2">&gt; &gt; P2:
</span><br>
<span class="quotelev2">&gt; &gt;   Recv
</span><br>
<span class="quotelev2">&gt; &gt;   Barrier
</span><br>
<span class="quotelev2">&gt; &gt;   Recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this behavior *guaranteed* by MPI?  I'm not actually sure that it
</span><br>
<span class="quotelev1">&gt; is; barrier does not provide any guarantees about point-to-point
</span><br>
<span class="quotelev1">&gt; message passing progress.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, how about a machine with these assumptions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - P0 is &quot;far away&quot; from P2 on the point-to-point network
</span><br>
<span class="quotelev1">&gt; - P1 is &quot;close by&quot; to P2 on the point-to-point network
</span><br>
<span class="quotelev1">&gt; - Barriers go across a separate/fast network (think: bluegene)
</span><br>
<span class="quotelev1">&gt; - P0's send message is short/eager
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case, the Send from P0 complete &quot;immediately&quot; and enter the
</span><br>
<span class="quotelev1">&gt; barrier before it is delivered to P2.  The P0 send could then take a
</span><br>
<span class="quotelev1">&gt; &quot;long time&quot; to get to P2 -- potentially long enough for the barrier to
</span><br>
<span class="quotelev1">&gt; overtake it and for the Send from P1 to be delivered to P2 before the
</span><br>
<span class="quotelev1">&gt; Send from P0 arrives at P2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Couldn't that happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Granted, I would expect that your example would perform in most real-
</span><br>
<span class="quotelev1">&gt; world situations as you describe (P0 is delivered to P2, then P1 is
</span><br>
<span class="quotelev1">&gt; delivered to P2).  But I don't think the standard guarantees it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10472/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10473.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10471.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>In reply to:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10474.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
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

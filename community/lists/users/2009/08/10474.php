<?
$subject_val = "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 16:22:45 2009" -->
<!-- isoreceived="20090824202245" -->
<!-- sent="Mon, 24 Aug 2009 13:23:30 -0700" -->
<!-- isosent="20090824202330" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?" -->
<!-- id="4A92F6C2.6060507_at_sun.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 16:23:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="10473.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>In reply to:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10476.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 24, 2009, at 1:03 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E.g., let's say P0 and P1 each send a message to P2, both using the  
</span><br>
<span class="quotelev2">&gt;&gt; same tag and communicator.  Let's say P2 does two receives on that  
</span><br>
<span class="quotelev2">&gt;&gt; communicator and tag, using a wildcard source.  So, the messages  
</span><br>
<span class="quotelev2">&gt;&gt; could be received in either order.  One could introduce barriers to  
</span><br>
<span class="quotelev2">&gt;&gt; order the messages.  E.g.,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P0:
</span><br>
<span class="quotelev2">&gt;&gt;   Send
</span><br>
<span class="quotelev2">&gt;&gt;   Barrier
</span><br>
<span class="quotelev2">&gt;&gt; P1:
</span><br>
<span class="quotelev2">&gt;&gt;   Barrier
</span><br>
<span class="quotelev2">&gt;&gt;   Send
</span><br>
<span class="quotelev2">&gt;&gt; P2:
</span><br>
<span class="quotelev2">&gt;&gt;   Recv
</span><br>
<span class="quotelev2">&gt;&gt;   Barrier
</span><br>
<span class="quotelev2">&gt;&gt;   Recv
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
<span class="quotelev1">&gt; &quot;long time&quot; to get to P2 --
</span><br>
<p>Okay, so let's say P0 completes its send and enters the barrier.
<br>
<p>Also, P1 enters the barrier.  But it will not issue a send until it 
<br>
leaves the barrier, which requires that the last process has entered the 
<br>
barrier.
<br>
<p>Meanwhile, the last process, P2, is waiting on a receive before it 
<br>
enters the barrier.
<br>
<p>So, here's the situation.  P2 is waiting to receive a message, a message 
<br>
has been sent to P2, and no other message will be sent to P2 until some 
<br>
message has been received.  So, there are only two options:
<br>
<p>1) The first receive on P2 receives the message from P0.  Or,
<br>
<p>2) This perfectly legal MPI program deadlocks.
<br>
<p>Right?
<br>
<p><span class="quotelev1">&gt; potentially long enough for the barrier to  overtake it
</span><br>
<p>No.  The first Recv on P2 has to complete before P2 can enter the 
<br>
barrier, which is a prerequisite for the barrier to complete on any process.
<br>
<p><span class="quotelev1">&gt; and for the Send from P1 to be delivered to P2 before the  Send from 
</span><br>
<span class="quotelev1">&gt; P0 arrives at P2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Couldn't that happen?
</span><br>
<p>No.  The send on P1 cannot be issued before the barrier completes on P1, 
<br>
which cannot happen before the barrier is entered on P2, which cannot 
<br>
happen before the first Recv on P2 is completed, which cannot happen 
<br>
until some message is received on P2.  And, the only message that can be 
<br>
received on P2 is the one issued by P0.
<br>
<p><span class="quotelev1">&gt; Granted, I would expect that your example would perform in most real- 
</span><br>
<span class="quotelev1">&gt; world situations as you describe (P0 is delivered to P2, then P1 is  
</span><br>
<span class="quotelev1">&gt; delivered to P2).  But I don't think the standard guarantees it.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="10473.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>In reply to:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10476.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
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

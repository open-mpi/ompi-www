<?
$subject_val = "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 15:40:33 2009" -->
<!-- isoreceived="20090824194033" -->
<!-- sent="Mon, 24 Aug 2009 15:40:15 -0400" -->
<!-- isosent="20090824194015" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?" -->
<!-- id="E9FAC02B-3F17-4E79-84ED-84B7CE37DD22_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A92C7E4.5060301_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 15:40:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10470.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10468.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>In reply to:</strong> <a href="10464.php">Eugene Loh: "Re: [OMPI users] Any scientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10472.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10472.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10474.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2009, at 1:03 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; E.g., let's say P0 and P1 each send a message to P2, both using the  
</span><br>
<span class="quotelev1">&gt; same tag and communicator.  Let's say P2 does two receives on that  
</span><br>
<span class="quotelev1">&gt; communicator and tag, using a wildcard source.  So, the messages  
</span><br>
<span class="quotelev1">&gt; could be received in either order.  One could introduce barriers to  
</span><br>
<span class="quotelev1">&gt; order the messages.  E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P0:
</span><br>
<span class="quotelev1">&gt;   Send
</span><br>
<span class="quotelev1">&gt;   Barrier
</span><br>
<span class="quotelev1">&gt; P1:
</span><br>
<span class="quotelev1">&gt;   Barrier
</span><br>
<span class="quotelev1">&gt;   Send
</span><br>
<span class="quotelev1">&gt; P2:
</span><br>
<span class="quotelev1">&gt;   Recv
</span><br>
<span class="quotelev1">&gt;   Barrier
</span><br>
<span class="quotelev1">&gt;   Recv
</span><br>
<p><p>Is this behavior *guaranteed* by MPI?  I'm not actually sure that it  
<br>
is; barrier does not provide any guarantees about point-to-point  
<br>
message passing progress.
<br>
<p>For example, how about a machine with these assumptions:
<br>
<p>- P0 is &quot;far away&quot; from P2 on the point-to-point network
<br>
- P1 is &quot;close by&quot; to P2 on the point-to-point network
<br>
- Barriers go across a separate/fast network (think: bluegene)
<br>
- P0's send message is short/eager
<br>
<p>In this case, the Send from P0 complete &quot;immediately&quot; and enter the  
<br>
barrier before it is delivered to P2.  The P0 send could then take a  
<br>
&quot;long time&quot; to get to P2 -- potentially long enough for the barrier to  
<br>
overtake it and for the Send from P1 to be delivered to P2 before the  
<br>
Send from P0 arrives at P2.
<br>
<p>Couldn't that happen?
<br>
<p>Granted, I would expect that your example would perform in most real- 
<br>
world situations as you describe (P0 is delivered to P2, then P1 is  
<br>
delivered to P2).  But I don't think the standard guarantees it.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10470.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10468.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>In reply to:</strong> <a href="10464.php">Eugene Loh: "Re: [OMPI users] Any scientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10472.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10472.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="10474.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
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

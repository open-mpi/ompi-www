<?
$subject_val = "Re: [OMPI devel] sm BTL flow management";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 07:58:25 2009" -->
<!-- isoreceived="20090625115825" -->
<!-- sent="Thu, 25 Jun 2009 05:58:11 -0600" -->
<!-- isosent="20090625115811" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL flow management" -->
<!-- id="41B36639-AC8E-400E-995B-004F9ADBD912_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A4321EF.5000400_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sm BTL flow management<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 07:58:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6345.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6343.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6343.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6345.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6345.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, we cannot access this - permissions are denied. In  
<br>
poking around,  I found that your hg directory has permission 700.
<br>
<p>Afraid you'll have to grant us permission to access this. :-/
<br>
<p>Ralph
<br>
<p>On Jun 25, 2009, at 1:06 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Bryan Lally wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Be happy to put it through the wringer... :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My wringer is available, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'kay.  Try
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hg clone ssh://www.open-mpi.org/~eloh/hg/pending_sends
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is r21498 but with changes to poll one's own FIFO more  
</span><br>
<span class="quotelev1">&gt; regularly (e.g., even when just performing sends) and to retry  
</span><br>
<span class="quotelev1">&gt; pending sends more aggressively (e.g., whenever about to try a send  
</span><br>
<span class="quotelev1">&gt; or whenever one calls sm progress).  I maintain a count of  
</span><br>
<span class="quotelev1">&gt; outstanding fragments (sent but not yet returned to free list) and  
</span><br>
<span class="quotelev1">&gt; of pending sends (total over all queues) to keep overheads down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My various test codes (repeated Bcasts, half-duplex point-to-point  
</span><br>
<span class="quotelev1">&gt; sends, etc.) all pass now.  There is no perceptible degradation in 0- 
</span><br>
<span class="quotelev1">&gt; byte pingpong latency that I can tell.  George's fixed-free-list  
</span><br>
<span class="quotelev1">&gt; proposal may be better, but I'm making these bits available for some  
</span><br>
<span class="quotelev1">&gt; soak and feedback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is still not perfect.  If you look in  
</span><br>
<span class="quotelev1">&gt; mca_btl_sm_component_progress, when a process receives a message  
</span><br>
<span class="quotelev1">&gt; fragment and returns it to the sender, it executes code like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    goto recheck_peer;
</span><br>
<span class="quotelev1">&gt;    break;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, the reason I show you that code is because a static code  
</span><br>
<span class="quotelev1">&gt; checker should easily identify the break statement as dead code.   
</span><br>
<span class="quotelev1">&gt; It'll never be reached.  Anyhow, in English, what's happening is if  
</span><br>
<span class="quotelev1">&gt; you receive a message fragment, you keep polling your FIFO.  So,  
</span><br>
<span class="quotelev1">&gt; consider the case of half-duplex point-to-point traffic:  one  
</span><br>
<span class="quotelev1">&gt; process only sends and the other process only receives.  Previously,  
</span><br>
<span class="quotelev1">&gt; this would eventually hang.  Now, it won't.  But (I haven't  
</span><br>
<span class="quotelev1">&gt; confirmed 100% yet), I don't think it executes very pleasantly.   
</span><br>
<span class="quotelev1">&gt; E.g., if you have
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for ( i = 0; i &lt; N; i++ ) {
</span><br>
<span class="quotelev1">&gt;         if ( me == 0 ) MPI_Send(...);
</span><br>
<span class="quotelev1">&gt;         if ( me == 1 ) MPI_Recv(...);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At some point, the receiver falls hopelessly behind.  The sender  
</span><br>
<span class="quotelev1">&gt; keeps pumping messages and the receiver keeps polling its FIFO,  
</span><br>
<span class="quotelev1">&gt; pulling in messages and returning fragments to the sender so that  
</span><br>
<span class="quotelev1">&gt; the sender can keep on going.  Problem is, all that is happening  
</span><br>
<span class="quotelev1">&gt; within one MPI_Recv call... which in a test code might be pulling in  
</span><br>
<span class="quotelev1">&gt; 100Ks of messages.  The MPI_Recv call won't return until the sender  
</span><br>
<span class="quotelev1">&gt; lets up.  Then, the rest of the MPI_Recv calls will execute, all  
</span><br>
<span class="quotelev1">&gt; pulling messages out of the local unexpected-message queue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure yet how I want to manage this.  The bottom line might be  
</span><br>
<span class="quotelev1">&gt; that if the MPI application has no flow control, the underlying MPI  
</span><br>
<span class="quotelev1">&gt; implementation is going to have to do something that won't make  
</span><br>
<span class="quotelev1">&gt; everyone happy.  Oh well.  At least the program makes progress and  
</span><br>
<span class="quotelev1">&gt; completes in reason time.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6345.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6343.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6343.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6345.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6345.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
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

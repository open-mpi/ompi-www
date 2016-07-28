<?
$subject_val = "Re: [OMPI devel] sm BTL flow management";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 16:10:35 2009" -->
<!-- isoreceived="20090625201035" -->
<!-- sent="Thu, 25 Jun 2009 13:10:29 -0700" -->
<!-- isosent="20090625201029" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL flow management" -->
<!-- id="4A43D9B5.1040602_at_sun.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 16:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6351.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>In reply to:</strong> <a href="6343.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6354.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6354.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; If you look in mca_btl_sm_component_progress, when a process receives 
</span><br>
<span class="quotelev1">&gt; a message fragment and returns it to the sender, it executes code like 
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      goto recheck_peer;
</span><br>
<span class="quotelev1">&gt;      break;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, the reason I show you that code is because a static code checker 
</span><br>
<span class="quotelev1">&gt; should easily identify the break statement as dead code.  It'll never 
</span><br>
<span class="quotelev1">&gt; be reached.  Anyhow, in English, what's happening is if you receive a 
</span><br>
<span class="quotelev1">&gt; message fragment, you keep polling your FIFO.  So, consider the case 
</span><br>
<span class="quotelev1">&gt; of half-duplex point-to-point traffic:  one process only sends and the 
</span><br>
<span class="quotelev1">&gt; other process only receives.  Previously, this would eventually hang.  
</span><br>
<span class="quotelev1">&gt; Now, it won't.  But (I haven't confirmed 100% yet), I don't think it 
</span><br>
<span class="quotelev1">&gt; executes very pleasantly.  E.g., if you have
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      for ( i = 0; i &lt; N; i++ ) {
</span><br>
<span class="quotelev1">&gt;           if ( me == 0 ) MPI_Send(...);
</span><br>
<span class="quotelev1">&gt;           if ( me == 1 ) MPI_Recv(...);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At some point, the receiver falls hopelessly behind.  The sender keeps 
</span><br>
<span class="quotelev1">&gt; pumping messages and the receiver keeps polling its FIFO, pulling in 
</span><br>
<span class="quotelev1">&gt; messages and returning fragments to the sender so that the sender can 
</span><br>
<span class="quotelev1">&gt; keep on going.  Problem is, all that is happening within one MPI_Recv 
</span><br>
<span class="quotelev1">&gt; call... which in a test code might be pulling in 100Ks of messages.  
</span><br>
<span class="quotelev1">&gt; The MPI_Recv call won't return until the sender lets up.  Then, the 
</span><br>
<span class="quotelev1">&gt; rest of the MPI_Recv calls will execute, all pulling messages out of 
</span><br>
<span class="quotelev1">&gt; the local unexpected-message queue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure yet how I want to manage this.  The bottom line might be that 
</span><br>
<span class="quotelev1">&gt; if the MPI application has no flow control, the underlying MPI 
</span><br>
<span class="quotelev1">&gt; implementation is going to have to do something that won't make 
</span><br>
<span class="quotelev1">&gt; everyone happy.  Oh well.  At least the program makes progress and 
</span><br>
<span class="quotelev1">&gt; completes in reason time.
</span><br>
<p>I spoke with Brian and Jeff about this earlier today.  Presumably, up 
<br>
through 1.2, mca_btl_component_progress would poll and if it received a 
<br>
message fragment would return.  Then, presumably in 1.3.0, behavior was 
<br>
changed to keep polling until the FIFO was empty.  Brian said this was 
<br>
based on Terry's desire to keep latency as low as possible in 
<br>
benchmarks.  Namely, reaching down into a progress call was a long code 
<br>
path.  It would be better to pick up multiple messages, if available on 
<br>
the FIFO, and queue extras up in the unexpected queue.  Then, a 
<br>
subsequent call could more efficiently find the anticipated message 
<br>
fragment.
<br>
<p>I don't see how the behavior would impact short-message pingpongs (the 
<br>
typical way to measure latency) one way or the other.
<br>
<p>I asked Terry, who struggled to remember the issue and pointed me at 
<br>
this thread:  
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2008/06/4158.php">http://www.open-mpi.org/community/lists/devel/2008/06/4158.php</a> .  But 
<br>
that is related to an issue that's solved if one keeps polling as long 
<br>
as one gets ACKs (but returns as soon as a real message fragment is found).
<br>
<p>Can anyone shed some light on the history here?  Why keep polling even 
<br>
when a message fragment has been found?  The downside of polling too 
<br>
aggressively is that the unexpected queue can grow (without bounds).
<br>
<p>Brian's proposal is to set some variable that determines how many 
<br>
message fragments a single mca_btl_sm_component_progress call can drain 
<br>
from the FIFO before returning.
<br>
<p>Thanks for any discussion, insight, or historical recollections.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6353.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6351.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>In reply to:</strong> <a href="6343.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6354.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6354.php">Brian W. Barrett: "Re: [OMPI devel] sm BTL flow management"</a>
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

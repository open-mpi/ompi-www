<?
$subject_val = "Re: [OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 18:47:10 2009" -->
<!-- isoreceived="20090403224710" -->
<!-- sent="Fri, 03 Apr 2009 14:46:46 -0800" -->
<!-- isosent="20090403224646" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857:  SM btl hangs when msg &amp;gt;=4k" -->
<!-- id="49D691D6.6000701_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49D40E3D.6060205_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 18:46:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5793.php">Terry Dontje: "Re: [OMPI devel] access to tests"</a>
<li><strong>Previous message:</strong> <a href="5791.php">Jeff Squyres: "Re: [OMPI devel] access to tests"</a>
<li><strong>In reply to:</strong> <a href="5784.php">Eugene Loh: "[OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5795.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5795.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What's next on this ticket?  It's supposed to be a blocker.  Again, the 
<br>
issue is that osu_bw deluges a receiver with rendezvous messages, but 
<br>
the receiver does not have enough eager frags to acknowledge them all.  
<br>
We see this now that the sizing of the mmap file has changed and there's 
<br>
less headroom to grow the free lists.  Possible fixes are:
<br>
<p>A) Just make the mmap file default size larger (though less overkill 
<br>
than we used to have).
<br>
B) Fix the PML code that is supposed to deal with cases like this.  (At 
<br>
least I think the PML has code that's intended for this purpose.)
<br>
<p>Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; In osu_bw, process 0 pumps lots of Isend's to process 1, and process 1 
</span><br>
<span class="quotelev1">&gt; in turn sets up lots of matching Irecvs.  Many messages are in 
</span><br>
<span class="quotelev1">&gt; flight.  The question is what happens when resources are exhausted and 
</span><br>
<span class="quotelev1">&gt; OMPI cannot handle so much in-flight traffic.  Let's specifically 
</span><br>
<span class="quotelev1">&gt; consider the case of long, rendezvous messages.  There are at least 
</span><br>
<span class="quotelev1">&gt; two situations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) When the sender no longer has any fragments (nor can grow its free 
</span><br>
<span class="quotelev1">&gt; list any more), it queues a send up with add_request_to_send_pending() 
</span><br>
<span class="quotelev1">&gt; and somehow life is good.  The PML seems to handle this case &quot;correctly&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) When the receiver -- specifically 
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv_request_ack_send_btl() -- no longer has any fragments 
</span><br>
<span class="quotelev1">&gt; to send ACKs back to confirm readiness for rendezvous, the 
</span><br>
<span class="quotelev1">&gt; resource-exhaustion signal travels up the call stack to 
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_recv_request_ack_send(), who does a 
</span><br>
<span class="quotelev1">&gt; MCA_PML_OB1_ADD_ACK_TO_PENDING().  In short, the PML adds the ACK to 
</span><br>
<span class="quotelev1">&gt; pckt_pending.  Somehow, this code path doesn't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason we see the problem now is that I added &quot;autosizing&quot; of the 
</span><br>
<span class="quotelev1">&gt; shared-memory area.  We used to mmap *WAY* too much shared-memory for 
</span><br>
<span class="quotelev1">&gt; small-np jobs.  (Yes, that's a subjective statement.)  Meanwhile, at 
</span><br>
<span class="quotelev1">&gt; large-np, we didn't mmap enough and jobs wouldn't start.  (Objective 
</span><br>
<span class="quotelev1">&gt; statement there.)  So, I added heuristics to size the shared area 
</span><br>
<span class="quotelev1">&gt; &quot;appropriately&quot;.  The heuristics basically targetted the needs of 
</span><br>
<span class="quotelev1">&gt; MPI_Init().  If you want fragment free lists to grow on demand after 
</span><br>
<span class="quotelev1">&gt; MPI_Init(), you now basically have to bump mpool_sm_min_size up 
</span><br>
<span class="quotelev1">&gt; explicitly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like feedback on a fix.  Here are two options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A) Someone (could be I) increases the default resources.  E.g., we 
</span><br>
<span class="quotelev1">&gt; could start with a larger eager free list.  Or, I could change those 
</span><br>
<span class="quotelev1">&gt; &quot;heuristics&quot; to allow some amount of headroom for free lists to grow 
</span><br>
<span class="quotelev1">&gt; on demand.  Either way, I'd appreciate feedback on how big to set 
</span><br>
<span class="quotelev1">&gt; these things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; B) Someone (not I, since I don't know how) fixes the ob1 PML to handle 
</span><br>
<span class="quotelev1">&gt; scenario 2 above correctly. 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5793.php">Terry Dontje: "Re: [OMPI devel] access to tests"</a>
<li><strong>Previous message:</strong> <a href="5791.php">Jeff Squyres: "Re: [OMPI devel] access to tests"</a>
<li><strong>In reply to:</strong> <a href="5784.php">Eugene Loh: "[OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5795.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5795.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
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

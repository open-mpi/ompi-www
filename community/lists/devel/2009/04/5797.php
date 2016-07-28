<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 17:58:10 2009" -->
<!-- isoreceived="20090406215810" -->
<!-- sent="Mon, 6 Apr 2009 17:57:57 -0400" -->
<!-- isosent="20090406215757" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k" -->
<!-- id="AB4B8CE2-0860-4F17-9EEF-48CDC1CE9BED_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49DA4EAA.90609_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 17:57:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5798.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5796.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5796.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5798.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5798.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene,
<br>
<p>I got some free time (yeh haw) and took a look at the OB1 PML in order  
<br>
to fix the issue. I think I found the problem, as I'm unable to  
<br>
reproduce this error. Can you please give it a try with 20946 and  
<br>
20947 but without 20944?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 6, 2009, at 14:49 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; This strikes me as very reasonable.  That is, the PML should be  
</span><br>
<span class="quotelev1">&gt; fixed, but to keep the issue from being a 1.3.2 blocker we should  
</span><br>
<span class="quotelev1">&gt; bump the mpool_sm_min_size default back up again so that 1.3.2 is no  
</span><br>
<span class="quotelev1">&gt; worse than 1.3.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I put back SVN r20944 with this change.  osu_bw now runs (for me).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I filed CMR 1870 to add this change to the 1.3.2 branch.  I guess I  
</span><br>
<span class="quotelev1">&gt; need a code review.  Could someone review the code for r20944 and  
</span><br>
<span class="quotelev1">&gt; annotate the CMR?  It's a one-line/several-character change that  
</span><br>
<span class="quotelev1">&gt; bumps the min default size from 0 to 64M.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At this point, I assume 1857 is no longer a blocker, but in the long  
</span><br>
<span class="quotelev1">&gt; term the PML should be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Changing default value is an easy fix. This fix will not add new  
</span><br>
<span class="quotelev2">&gt;&gt; possible bugs/dead locks/pathes where noone has gone before on the  
</span><br>
<span class="quotelev2">&gt;&gt; PML level.
</span><br>
<span class="quotelev2">&gt;&gt; This fix can be added to Open MPI 1.3 that currently is blocked due  
</span><br>
<span class="quotelev2">&gt;&gt; to OSU failure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PML fix can be done later (IMHO)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Apr 4, 2009 at 1:46 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What's next on this ticket?  It's supposed to be a blocker.  Again,  
</span><br>
<span class="quotelev2">&gt;&gt; the issue is that osu_bw deluges a receiver with rendezvous  
</span><br>
<span class="quotelev2">&gt;&gt; messages, but the receiver does not have enough eager frags to  
</span><br>
<span class="quotelev2">&gt;&gt; acknowledge them all.  We see this now that the sizing of the mmap  
</span><br>
<span class="quotelev2">&gt;&gt; file has changed and there's less headroom to grow the free lists.   
</span><br>
<span class="quotelev2">&gt;&gt; Possible fixes are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A) Just make the mmap file default size larger (though less  
</span><br>
<span class="quotelev2">&gt;&gt; overkill than we used to have).
</span><br>
<span class="quotelev2">&gt;&gt; B) Fix the PML code that is supposed to deal with cases like this.   
</span><br>
<span class="quotelev2">&gt;&gt; (At least I think the PML has code that's intended for this purpose.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In osu_bw, process 0 pumps lots of Isend's to process 1, and  
</span><br>
<span class="quotelev2">&gt;&gt; process 1 in turn sets up lots of matching Irecvs.  Many messages  
</span><br>
<span class="quotelev2">&gt;&gt; are in flight.  The question is what happens when resources are  
</span><br>
<span class="quotelev2">&gt;&gt; exhausted and OMPI cannot handle so much in-flight traffic.  Let's  
</span><br>
<span class="quotelev2">&gt;&gt; specifically consider the case of long, rendezvous messages.  There  
</span><br>
<span class="quotelev2">&gt;&gt; are at least two situations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) When the sender no longer has any fragments (nor can grow its  
</span><br>
<span class="quotelev2">&gt;&gt; free list any more), it queues a send up with  
</span><br>
<span class="quotelev2">&gt;&gt; add_request_to_send_pending() and somehow life is good.  The PML  
</span><br>
<span class="quotelev2">&gt;&gt; seems to handle this case &quot;correctly&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) When the receiver -- specifically  
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_recv_request_ack_send_btl() -- no longer has any  
</span><br>
<span class="quotelev2">&gt;&gt; fragments to send ACKs back to confirm readiness for rendezvous,  
</span><br>
<span class="quotelev2">&gt;&gt; the resource-exhaustion signal travels up the call stack to  
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_recv_request_ack_send(), who does a  
</span><br>
<span class="quotelev2">&gt;&gt; MCA_PML_OB1_ADD_ACK_TO_PENDING().  In short, the PML adds the ACK  
</span><br>
<span class="quotelev2">&gt;&gt; to pckt_pending.  Somehow, this code path doesn't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason we see the problem now is that I added &quot;autosizing&quot; of  
</span><br>
<span class="quotelev2">&gt;&gt; the shared-memory area.  We used to mmap *WAY* too much shared- 
</span><br>
<span class="quotelev2">&gt;&gt; memory for small-np jobs.  (Yes, that's a subjective statement.)   
</span><br>
<span class="quotelev2">&gt;&gt; Meanwhile, at large-np, we didn't mmap enough and jobs wouldn't  
</span><br>
<span class="quotelev2">&gt;&gt; start.  (Objective statement there.)  So, I added heuristics to  
</span><br>
<span class="quotelev2">&gt;&gt; size the shared area &quot;appropriately&quot;.  The heuristics basically  
</span><br>
<span class="quotelev2">&gt;&gt; targetted the needs of MPI_Init().  If you want fragment free lists  
</span><br>
<span class="quotelev2">&gt;&gt; to grow on demand after MPI_Init(), you now basically have to bump  
</span><br>
<span class="quotelev2">&gt;&gt; mpool_sm_min_size up explicitly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd like feedback on a fix.  Here are two options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A) Someone (could be I) increases the default resources.  E.g., we  
</span><br>
<span class="quotelev2">&gt;&gt; could start with a larger eager free list.  Or, I could change  
</span><br>
<span class="quotelev2">&gt;&gt; those &quot;heuristics&quot; to allow some amount of headroom for free lists  
</span><br>
<span class="quotelev2">&gt;&gt; to grow on demand.  Either way, I'd appreciate feedback on how big  
</span><br>
<span class="quotelev2">&gt;&gt; to set these things.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; B) Someone (not I, since I don't know how) fixes the ob1 PML to  
</span><br>
<span class="quotelev2">&gt;&gt; handle scenario 2 above correctly.
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
<li><strong>Next message:</strong> <a href="5798.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5796.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>In reply to:</strong> <a href="5796.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5798.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5798.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
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

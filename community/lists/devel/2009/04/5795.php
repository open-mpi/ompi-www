<?
$subject_val = "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 08:00:43 2009" -->
<!-- isoreceived="20090406120043" -->
<!-- sent="Mon, 6 Apr 2009 15:00:37 +0300" -->
<!-- isosent="20090406120037" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac 1857: SM btl hangs when msg &amp;gt;=4k" -->
<!-- id="453d39990904060500i6c98d1dbnd34cbc9cc583b129_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49D691D6.6000701_at_sun.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-06 08:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5796.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5794.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r20938"</a>
<li><strong>In reply to:</strong> <a href="5792.php">Eugene Loh: "Re: [OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5796.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5796.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Changing default value is an easy fix. This fix will not add new possible
<br>
bugs/dead locks/pathes where noone has gone before on the PML level.
<br>
This fix can be added to Open MPI 1.3 that currently is blocked due to OSU
<br>
failure.
<br>
<p>PML fix can be done later (IMHO)
<br>
<p>Lenny.
<br>
<p>On Sat, Apr 4, 2009 at 1:46 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What's next on this ticket?  It's supposed to be a blocker.  Again, the
</span><br>
<span class="quotelev1">&gt; issue is that osu_bw deluges a receiver with rendezvous messages, but the
</span><br>
<span class="quotelev1">&gt; receiver does not have enough eager frags to acknowledge them all.  We see
</span><br>
<span class="quotelev1">&gt; this now that the sizing of the mmap file has changed and there's less
</span><br>
<span class="quotelev1">&gt; headroom to grow the free lists.  Possible fixes are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A) Just make the mmap file default size larger (though less overkill than
</span><br>
<span class="quotelev1">&gt; we used to have).
</span><br>
<span class="quotelev1">&gt; B) Fix the PML code that is supposed to deal with cases like this.  (At
</span><br>
<span class="quotelev1">&gt; least I think the PML has code that's intended for this purpose.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In osu_bw, process 0 pumps lots of Isend's to process 1, and process 1 in
</span><br>
<span class="quotelev2">&gt;&gt; turn sets up lots of matching Irecvs.  Many messages are in flight.  The
</span><br>
<span class="quotelev2">&gt;&gt; question is what happens when resources are exhausted and OMPI cannot handle
</span><br>
<span class="quotelev2">&gt;&gt; so much in-flight traffic.  Let's specifically consider the case of long,
</span><br>
<span class="quotelev2">&gt;&gt; rendezvous messages.  There are at least two situations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) When the sender no longer has any fragments (nor can grow its free list
</span><br>
<span class="quotelev2">&gt;&gt; any more), it queues a send up with add_request_to_send_pending() and
</span><br>
<span class="quotelev2">&gt;&gt; somehow life is good.  The PML seems to handle this case &quot;correctly&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) When the receiver -- specifically
</span><br>
<span class="quotelev2">&gt;&gt; mca_pml_ob1_recv_request_ack_send_btl() -- no longer has any fragments to
</span><br>
<span class="quotelev2">&gt;&gt; send ACKs back to confirm readiness for rendezvous, the resource-exhaustion
</span><br>
<span class="quotelev2">&gt;&gt; signal travels up the call stack to mca_pml_ob1_recv_request_ack_send(), who
</span><br>
<span class="quotelev2">&gt;&gt; does a MCA_PML_OB1_ADD_ACK_TO_PENDING().  In short, the PML adds the ACK to
</span><br>
<span class="quotelev2">&gt;&gt; pckt_pending.  Somehow, this code path doesn't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason we see the problem now is that I added &quot;autosizing&quot; of the
</span><br>
<span class="quotelev2">&gt;&gt; shared-memory area.  We used to mmap *WAY* too much shared-memory for
</span><br>
<span class="quotelev2">&gt;&gt; small-np jobs.  (Yes, that's a subjective statement.)  Meanwhile, at
</span><br>
<span class="quotelev2">&gt;&gt; large-np, we didn't mmap enough and jobs wouldn't start.  (Objective
</span><br>
<span class="quotelev2">&gt;&gt; statement there.)  So, I added heuristics to size the shared area
</span><br>
<span class="quotelev2">&gt;&gt; &quot;appropriately&quot;.  The heuristics basically targetted the needs of
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init().  If you want fragment free lists to grow on demand after
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(), you now basically have to bump mpool_sm_min_size up explicitly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd like feedback on a fix.  Here are two options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A) Someone (could be I) increases the default resources.  E.g., we could
</span><br>
<span class="quotelev2">&gt;&gt; start with a larger eager free list.  Or, I could change those &quot;heuristics&quot;
</span><br>
<span class="quotelev2">&gt;&gt; to allow some amount of headroom for free lists to grow on demand.  Either
</span><br>
<span class="quotelev2">&gt;&gt; way, I'd appreciate feedback on how big to set these things.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; B) Someone (not I, since I don't know how) fixes the ob1 PML to handle
</span><br>
<span class="quotelev2">&gt;&gt; scenario 2 above correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5795/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5796.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Previous message:</strong> <a href="5794.php">Jeff Squyres: "[OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r20938"</a>
<li><strong>In reply to:</strong> <a href="5792.php">Eugene Loh: "Re: [OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5796.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5796.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k"</a>
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

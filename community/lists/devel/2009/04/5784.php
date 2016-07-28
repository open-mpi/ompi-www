<?
$subject_val = "[OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 21:01:19 2009" -->
<!-- isoreceived="20090402010119" -->
<!-- sent="Wed, 01 Apr 2009 17:00:45 -0800" -->
<!-- isosent="20090402010045" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] trac 1857:  SM btl hangs when msg &amp;gt;=4k" -->
<!-- id="49D40E3D.6060205_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 21:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5785.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926"</a>
<li><strong>Previous message:</strong> <a href="5783.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5792.php">Eugene Loh: "Re: [OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5792.php">Eugene Loh: "Re: [OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In osu_bw, process 0 pumps lots of Isend's to process 1, and process 1 
<br>
in turn sets up lots of matching Irecvs.  Many messages are in flight.  
<br>
The question is what happens when resources are exhausted and OMPI 
<br>
cannot handle so much in-flight traffic.  Let's specifically consider 
<br>
the case of long, rendezvous messages.  There are at least two situations.
<br>
<p>1) When the sender no longer has any fragments (nor can grow its free 
<br>
list any more), it queues a send up with add_request_to_send_pending() 
<br>
and somehow life is good.  The PML seems to handle this case &quot;correctly&quot;.
<br>
<p>2) When the receiver -- specifically 
<br>
mca_pml_ob1_recv_request_ack_send_btl() -- no longer has any fragments 
<br>
to send ACKs back to confirm readiness for rendezvous, the 
<br>
resource-exhaustion signal travels up the call stack to 
<br>
mca_pml_ob1_recv_request_ack_send(), who does a 
<br>
MCA_PML_OB1_ADD_ACK_TO_PENDING().  In short, the PML adds the ACK to 
<br>
pckt_pending.  Somehow, this code path doesn't work.
<br>
<p>The reason we see the problem now is that I added &quot;autosizing&quot; of the 
<br>
shared-memory area.  We used to mmap *WAY* too much shared-memory for 
<br>
small-np jobs.  (Yes, that's a subjective statement.)  Meanwhile, at 
<br>
large-np, we didn't mmap enough and jobs wouldn't start.  (Objective 
<br>
statement there.)  So, I added heuristics to size the shared area 
<br>
&quot;appropriately&quot;.  The heuristics basically targetted the needs of 
<br>
MPI_Init().  If you want fragment free lists to grow on demand after 
<br>
MPI_Init(), you now basically have to bump mpool_sm_min_size up explicitly.
<br>
<p>I'd like feedback on a fix.  Here are two options:
<br>
<p>A) Someone (could be I) increases the default resources.  E.g., we could 
<br>
start with a larger eager free list.  Or, I could change those 
<br>
&quot;heuristics&quot; to allow some amount of headroom for free lists to grow on 
<br>
demand.  Either way, I'd appreciate feedback on how big to set these things.
<br>
<p>B) Someone (not I, since I don't know how) fixes the ob1 PML to handle 
<br>
scenario 2 above correctly.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5785.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926"</a>
<li><strong>Previous message:</strong> <a href="5783.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5792.php">Eugene Loh: "Re: [OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k"</a>
<li><strong>Reply:</strong> <a href="5792.php">Eugene Loh: "Re: [OMPI devel] trac 1857:  SM btl hangs when msg &gt;=4k"</a>
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

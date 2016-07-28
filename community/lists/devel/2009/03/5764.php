<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 10:59:04 2009" -->
<!-- isoreceived="20090331145904" -->
<!-- sent="Tue, 31 Mar 2009 10:58:58 -0400" -->
<!-- isosent="20090331145858" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="4B5D8E57-3A86-463A-9B02-169C3902EB2E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D1AE31.4040108_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 10:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5763.php">Sylvain Jeaugey: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5762.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5768.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5768.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2009, at 1:46 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev2">&gt; &gt; FWIW, George found what looks like a race condition in the sm init
</span><br>
<span class="quotelev2">&gt; &gt; code today -- it looks like we don't call maffinity anywhere in the
</span><br>
<span class="quotelev2">&gt; &gt; sm  btl startup, so we're not actually guaranteed that the memory is
</span><br>
<span class="quotelev2">&gt; &gt; local  to any particular process(or) (!).  This race shouldn't cause
</span><br>
<span class="quotelev2">&gt; &gt; segvs,  though; it should only mean that memory is potentially  
</span><br>
<span class="quotelev1">&gt; farther
</span><br>
<span class="quotelev2">&gt; &gt; away  than we intended.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this that business that came up recently on one of these mail lists
</span><br>
<span class="quotelev1">&gt; about setting the memory node to -1 rather than using the value we  
</span><br>
<span class="quotelev1">&gt; know
</span><br>
<span class="quotelev1">&gt; it should be?  In mca_mpool_sm_alloc(), I do see a call to
</span><br>
<span class="quotelev1">&gt; opal_maffinity_base_bind().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No, it was a different thing -- but we missed the call to maffinity in  
<br>
mpool sm.  So that might make George's point moot (I see he still  
<br>
hasn't chimed in yet on this thread, perhaps that's why ;-) ).
<br>
<p>To throw a little flame on the fire -- I notice the following from an  
<br>
MTT run last night:
<br>
<p>[svbu-mpi004:17172] *** Process received signal ***
<br>
[svbu-mpi004:17172] Signal: Segmentation fault (11)
<br>
[svbu-mpi004:17172] Signal code: Invalid permissions (2)
<br>
[svbu-mpi004:17172] Failing at address: 0x2a98a3f080
<br>
[svbu-mpi004:17172] [ 0] /lib64/tls/libpthread.so.0 [0x2a960695b0]
<br>
[svbu-mpi004:17172] [ 1] /home/jsquyres/bogus/lib/openmpi/ 
<br>
mca_btl_sm.so [0x2a97f22619]
<br>
[svbu-mpi004:17172] [ 2] /home/jsquyres/bogus/lib/openmpi/ 
<br>
mca_btl_sm.so [0x2a97f225ee]
<br>
[svbu-mpi004:17172] [ 3] /home/jsquyres/bogus/lib/openmpi/ 
<br>
mca_btl_sm.so [0x2a97f22946]
<br>
[svbu-mpi004:17172] [ 4] /home/jsquyres/bogus/lib/libopen-pal.so. 
<br>
0(opal_progress+0xa9) [0x2a95bbc078]
<br>
[svbu-mpi004:17172] [ 5] /home/jsquyres/bogus/lib/libmpi.so.0  
<br>
[0x2a95831324]
<br>
[svbu-mpi004:17172] [ 6] /home/jsquyres/bogus/lib/libmpi.so.0  
<br>
[0x2a9583185b]
<br>
[svbu-mpi004:17172] [ 7] /home/jsquyres/bogus/lib/openmpi/ 
<br>
mca_coll_tuned.so [0x2a987e45be]
<br>
[svbu-mpi004:17172] [ 8] /home/jsquyres/bogus/lib/openmpi/ 
<br>
mca_coll_tuned.so [0x2a987f160b]
<br>
[svbu-mpi004:17172] [ 9] /home/jsquyres/bogus/lib/openmpi/ 
<br>
mca_coll_tuned.so [0x2a987e4c2e]
<br>
[svbu-mpi004:17172] [10] /home/jsquyres/bogus/lib/libmpi.so. 
<br>
0(PMPI_Barrier+0xd7) [0x2a9585987f]
<br>
[svbu-mpi004:17172] [11] src/MPI_Type_extent_types_c(main+0xa20)  
<br>
[0x402f88]
<br>
[svbu-mpi004:17172] [12] /lib64/tls/libc.so.6(__libc_start_main+0xdb)  
<br>
[0x2a9618e3fb]
<br>
[svbu-mpi004:17172] [13] src/MPI_Type_extent_types_c [0x4024da]
<br>
[svbu-mpi004:17172] *** End of error message ***
<br>
<p>Notice the &quot;invalid permissions&quot; message.  I didn't notice that  
<br>
before, but perhaps I wasn't looking.
<br>
<p>I also see that this is under coll_tuned, not coll_hierarch (i.e.,  
<br>
*not* during MPI_INIT -- it's in a barrier).
<br>
<p><span class="quotelev2">&gt; &gt; The central question is: does &quot;first touch&quot; mean both read and
</span><br>
<span class="quotelev2">&gt; &gt; write?   I.e., is the first process that either reads *or* writes  
</span><br>
<span class="quotelev1">&gt; to a
</span><br>
<span class="quotelev2">&gt; &gt; given  location considered &quot;first touch&quot;?  Or is it only the first  
</span><br>
<span class="quotelev1">&gt; write?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, maybe the strategy is to create the shared area, have each process
</span><br>
<span class="quotelev1">&gt; initialize its portion (FIFOs and free lists), have all processes  
</span><br>
<span class="quotelev1">&gt; sync,
</span><br>
<span class="quotelev1">&gt; and then move on.  That way, you know all memory will be written by  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; appropriate owner before it's read by anyone else.  First-touch
</span><br>
<span class="quotelev1">&gt; ownership will be proper and we won't be dependent on zero-filled  
</span><br>
<span class="quotelev1">&gt; pages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That was what George was going at yesterday -- there's a section in  
<br>
the btl sm startup where you're setting up your own FIFOs.  But then  
<br>
there's a section later where you're looking at your peers' FIFOs.   
<br>
There's no synchronization between these two points -- when you're  
<br>
looking at your peers' FIFOs, you can tell if they're not setup yet by  
<br>
if the peer's FIFO is NULL or not.  If it's NULL, you loop and try  
<br>
again (until it's not NULL).  This is what George thought might be  
<br>
&quot;bad&quot; from a maffinity standpoint -- but perhaps this is moot if mpool  
<br>
sm is calling maffinity bind.
<br>
<p><span class="quotelev1">&gt; The big question in my mind remains that we don't seem to know how to
</span><br>
<span class="quotelev1">&gt; reproduce the failure (segv) that we're trying to fix.  I, personally,
</span><br>
<span class="quotelev1">&gt; am reluctant to stick fixes into the code for problems I can't  
</span><br>
<span class="quotelev1">&gt; observe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Well, we *can* observe them -- I can reproduce them at a very low rate  
<br>
in my MTT runs.  We just don't understand the problem yet to know how  
<br>
to reproduce them manually.  To be clear: I'm violently agreeing with  
<br>
you: I want to fix the problem, but it would be much mo' betta to  
<br>
*know* that we fixed the problem rather than &quot;well, it doesn't seem to  
<br>
be happening anymore.&quot;  :-)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5763.php">Sylvain Jeaugey: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5762.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5768.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5768.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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

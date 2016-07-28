<?
$subject_val = "Re: [OMPI devel] collectives / #1944 progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 22:23:57 2009" -->
<!-- isoreceived="20090702022357" -->
<!-- sent="Wed, 01 Jul 2009 19:23:51 -0700" -->
<!-- isosent="20090702022351" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collectives / #1944 progress" -->
<!-- id="4A4C1A37.9020500_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="97D878CB-9681-4331-9B7A-90C788977067_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] collectives / #1944 progress<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-01 22:23:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6376.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Previous message:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>In reply to:</strong> <a href="6368.php">Jeff Squyres: "[OMPI devel] collectives / #1944 progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6376.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Reply:</strong> <a href="6376.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; It looks like Eugene's and George's fixes on coll sm resolve all the  
</span><br>
<span class="quotelev1">&gt; known hangs.  We still have flow control issues, but that is  
</span><br>
<span class="quotelev1">&gt; temporarily being solved by the coll sync component.  To be clear:  
</span><br>
<span class="quotelev1">&gt; running with coll_sync_barrier_before 1000 seems to resolve all known  
</span><br>
<span class="quotelev1">&gt; hangs, and we think that this is good enough for v1.3.3.  We should  
</span><br>
<span class="quotelev1">&gt; CMR whatever is necessary to the v1.3 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==&gt; We should also default coll_sync_barrier_before to 1000 for 
</span><br>
<span class="quotelev1">&gt; v1.3.3  (i.e., ensure sync activates itself).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the future, we have a two pronged plan:
</span><br>
<p>I suspect the standard procedure is that we all look quickly at this 
<br>
e-mail message, file appropriately, and then resume our normal lives.  
<br>
Yes?  Or, is such a plan put somehow into place?
<br>
<p><span class="quotelev1">&gt; 1. Clean up the sm btl:
</span><br>
<span class="quotelev1">&gt;    1a. Remove all dead code.
</span><br>
<p>What do you mean here?  (Possibly you mean getting rid of sm pending 
<br>
sends if we implement 1b properly, but I'm not sure.)
<br>
<p><span class="quotelev1">&gt;    1b. Resize free_list_max and fifo_size MCA params to effect good  
</span><br>
<span class="quotelev1">&gt; enough flow control.
</span><br>
<span class="quotelev1">&gt;    1c. Possibly: convert from FIFO's to linked lists (for future  
</span><br>
<span class="quotelev1">&gt; maintenance purposes, not necessarily to fix problems).
</span><br>
<p>Another idea is to have two kinds of FIFOs.  One is just for returning 
<br>
fragments.  The other is for in-coming message fragments.  It would even 
<br>
seem as though one would no longer need &quot;free lists&quot;, but just use the 
<br>
ack FIFO to manage fragments.  (ALL of this is complicated by the fact 
<br>
that we have two kinds of fragments, eager and max, but fortunately 
<br>
those details can be pushed onto the sorry fool who'll be implementing 
<br>
all this.  I wonder who that'll be.)
<br>
<p><span class="quotelev1">&gt; 2. Test, enable, and continue to develop the coll sm module.  Using  
</span><br>
<span class="quotelev1">&gt; this module will avoid the p2p unexpected message queue explosion 
</span><br>
<span class="quotelev1">&gt; that  we're seeing (at least for collectives with short messages).  
</span><br>
<span class="quotelev1">&gt; It  nominally has broadcast, barrier, reduce, and allreduce 
</span><br>
<span class="quotelev1">&gt; implemented.   We really only need to a) test the heck outta them, and 
</span><br>
<span class="quotelev1">&gt; b) add gather,  scatter, scan, and exscan to the list.  All the other 
</span><br>
<span class="quotelev1">&gt; collective  operations have implicit synchronization and won't run 
</span><br>
<span class="quotelev1">&gt; into the  unbounded unexpected queue issues.  The bcast loop 
</span><br>
<span class="quotelev1">&gt; reproducer seemed  to work fine for me with the coll sm, but it 
</span><br>
<span class="quotelev1">&gt; segv'ed immediately for  Ralph.  So clearly some work needs to be done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We think that these two items should be the main features for 1.3.4.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6376.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Previous message:</strong> <a href="6374.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>In reply to:</strong> <a href="6368.php">Jeff Squyres: "[OMPI devel] collectives / #1944 progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6376.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Reply:</strong> <a href="6376.php">Jeff Squyres: "Re: [OMPI devel] collectives / #1944 progress"</a>
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

<?
$subject_val = "[OMPI devel] collectives / #1944 progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 11:52:11 2009" -->
<!-- isoreceived="20090701155211" -->
<!-- sent="Wed, 1 Jul 2009 11:52:05 -0400" -->
<!-- isosent="20090701155205" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] collectives / #1944 progress" -->
<!-- id="97D878CB-9681-4331-9B7A-90C788977067_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] collectives / #1944 progress<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-01 11:52:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6369.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Previous message:</strong> <a href="6367.php">Ashley Pittman: "[OMPI devel] Information from orte-ps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6375.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Reply:</strong> <a href="6375.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like Eugene's and George's fixes on coll sm resolve all the  
<br>
known hangs.  We still have flow control issues, but that is  
<br>
temporarily being solved by the coll sync component.  To be clear:  
<br>
running with coll_sync_barrier_before 1000 seems to resolve all known  
<br>
hangs, and we think that this is good enough for v1.3.3.  We should  
<br>
CMR whatever is necessary to the v1.3 branch.
<br>
<p>==&gt; We should also default coll_sync_barrier_before to 1000 for v1.3.3  
<br>
(i.e., ensure sync activates itself).
<br>
<p>For the future, we have a two pronged plan:
<br>
<p>1. Clean up the sm btl:
<br>
&nbsp;&nbsp;&nbsp;1a. Remove all dead code.
<br>
&nbsp;&nbsp;&nbsp;1b. Resize free_list_max and fifo_size MCA params to effect good  
<br>
enough flow control.
<br>
&nbsp;&nbsp;&nbsp;1c. Possibly: convert from FIFO's to linked lists (for future  
<br>
maintenance purposes, not necessarily to fix problems).
<br>
<p>2. Test, enable, and continue to develop the coll sm module.  Using  
<br>
this module will avoid the p2p unexpected message queue explosion that  
<br>
we're seeing (at least for collectives with short messages).  It  
<br>
nominally has broadcast, barrier, reduce, and allreduce implemented.   
<br>
We really only need to a) test the heck outta them, and b) add gather,  
<br>
scatter, scan, and exscan to the list.  All the other collective  
<br>
operations have implicit synchronization and won't run into the  
<br>
unbounded unexpected queue issues.  The bcast loop reproducer seemed  
<br>
to work fine for me with the coll sm, but it segv'ed immediately for  
<br>
Ralph.  So clearly some work needs to be done.
<br>
<p>We think that these two items should be the main features for 1.3.4.
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
<li><strong>Next message:</strong> <a href="6369.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21548"</a>
<li><strong>Previous message:</strong> <a href="6367.php">Ashley Pittman: "[OMPI devel] Information from orte-ps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6375.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<li><strong>Reply:</strong> <a href="6375.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  1 11:19:26 2005" -->
<!-- isoreceived="20051201161926" -->
<!-- sent="Thu, 1 Dec 2005 11:19:15 -0500" -->
<!-- isosent="20051201161915" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  sm btl/signal 11 problem on Linux" -->
<!-- id="4d7f520eeac6c7b132154df4f6cd50b5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3AE8B6B2-D824-4BDC-B795-1004A7A7797A_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-01 11:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0575.php">Jeff Squyres: "1.0.1rc5 is available"</a>
<li><strong>Previous message:</strong> <a href="0573.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0573.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0622.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0622.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 1, 2005, at 10:58 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; @#$%^&amp; it! I can't get the problem to manifest for either branch now.
</span><br>
<p>Well, that's good for me.  :-)
<br>
<p>FWIW, the problem existed on systems that could/would return different 
<br>
addresses in different processes from mmap() for memory that was common 
<br>
to all of them.  E.g., if processes A and B share common memory Z, A 
<br>
would get virtual address M for Z, and B would get virtual address N 
<br>
(as opposed to both A and B getting virtual address M).
<br>
<p>Here's the history of what happened...
<br>
<p>We had code paths for that situation in the sm btl (i.e., when A and B 
<br>
get different addresses for the same shared memory), but unbeknownst to 
<br>
us, mmap() on most systems seems to return the same value in A and B 
<br>
(this could be a side-effect of typical MPI testing memory usage 
<br>
patterns... I don't know).
<br>
<p>But FC3 and FC4 consistently did not seem to follow this pattern -- 
<br>
they would return different values from mmap() in different processes.  
<br>
Unfortunately, we did not do any testing on FC3 or FC4 systems until a 
<br>
few weeks before SC, and discovered that some of our 
<br>
previously-unknowingly-untested sm bootstrap code paths had some bugs.  
<br>
I fixed all of those and brought [almost all of] them over to the 1.0 
<br>
release branch.  I missed one patch in v1.0, but it will be included in 
<br>
v1.0.1, to be released shortly.
<br>
<p>So I'd be surprised if you were still seeing this bug in either branch 
<br>
-- as far as I know, I fixed all the issues.  More specifically, if you 
<br>
see this behavior, it will probably be in *both* branches.
<br>
<p>Let me know if you run across it again.  Thanks!
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0575.php">Jeff Squyres: "1.0.1rc5 is available"</a>
<li><strong>Previous message:</strong> <a href="0573.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>In reply to:</strong> <a href="0573.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0622.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
<li><strong>Reply:</strong> <a href="0622.php">Greg Watson: "Re:  sm btl/signal 11 problem on Linux"</a>
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

<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 14:20:21 2009" -->
<!-- isoreceived="20090401182021" -->
<!-- sent="Wed, 01 Apr 2009 14:20:14 -0400" -->
<!-- isosent="20090401182014" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="92962E4E-AF1D-4059-8248-74C2ABD4A91D_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="74A6B4DE-14B1-44FD-9170-2D6EFA535EF2_at_cisco.com" -->
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
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 14:20:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5774.php">Jeff Squyres: "[OMPI devel] mallopt fixes"</a>
<li><strong>Previous message:</strong> <a href="5772.php">Matthias Jurenz: "Re: [OMPI devel] Error in VT"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5777.php">Ashley Pittman: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2009, at 11:00 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 31, 2009, at 3:45 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry to continue off-topic but going to System V shm would be for me
</span><br>
<span class="quotelev2">&gt;&gt; like going back in the past.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; System V shared memory used to be the main way to do shared memory on
</span><br>
<span class="quotelev2">&gt;&gt; MPICH and from my (little) experience, this was truly painful :
</span><br>
<span class="quotelev2">&gt;&gt;  - Cleanup issues : does shmctl(IPC_RMID) solve _all_ cases ? (even  
</span><br>
<span class="quotelev2">&gt;&gt; kill
</span><br>
<span class="quotelev2">&gt;&gt; -9 ?)
</span><br>
<span class="quotelev2">&gt;&gt;  - Naming issues : shm segments identified as 32 bits key potentially
</span><br>
<span class="quotelev2">&gt;&gt; causing conflicts between applications or layers of the same  
</span><br>
<span class="quotelev2">&gt;&gt; application
</span><br>
<span class="quotelev2">&gt;&gt; on one node
</span><br>
<span class="quotelev2">&gt;&gt;  - Space issues : the total shm size on a system is bound to
</span><br>
<span class="quotelev2">&gt;&gt; /proc/sys/kernel/shmmax, needing admin configuration and causing  
</span><br>
<span class="quotelev2">&gt;&gt; conflicts
</span><br>
<span class="quotelev2">&gt;&gt; between MPI applications running on the same node
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed.  The one saving grace here is that the cleanup issues  
</span><br>
<span class="quotelev1">&gt; apparently can be solved on Linux with a special flag that indicates  
</span><br>
<span class="quotelev1">&gt; &quot;automatically remove this shmem when all processes attaching to it  
</span><br>
<span class="quotelev1">&gt; have died.&quot;  That was really the impetus for [re-]investigating sysv  
</span><br>
<span class="quotelev1">&gt; shm.  I, too, remember the sysv pain because we used it in LAM, too...
</span><br>
<p>What about the other issues?  I remember those being a PITA about 15  
<br>
to 20 years ago, but obviously a lot could have improved in the  
<br>
meantime.
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5774.php">Jeff Squyres: "[OMPI devel] mallopt fixes"</a>
<li><strong>Previous message:</strong> <a href="5772.php">Matthias Jurenz: "Re: [OMPI devel] Error in VT"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5777.php">Ashley Pittman: "Re: [OMPI devel] SM init failures"</a>
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

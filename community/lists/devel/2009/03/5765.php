<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 11:00:45 2009" -->
<!-- isoreceived="20090331150045" -->
<!-- sent="Tue, 31 Mar 2009 11:00:39 -0400" -->
<!-- isosent="20090331150039" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="74A6B4DE-14B1-44FD-9170-2D6EFA535EF2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0903310927470.4149_at_jeaugeys.frec.bull.fr" -->
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
<strong>Date:</strong> 2009-03-31 11:00:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5766.php">Roberto Ammendola: "[OMPI devel] custom btl"</a>
<li><strong>Previous message:</strong> <a href="5764.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5763.php">Sylvain Jeaugey: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5773.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5773.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5777.php">Ashley Pittman: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 31, 2009, at 3:45 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Sorry to continue off-topic but going to System V shm would be for me
</span><br>
<span class="quotelev1">&gt; like going back in the past.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System V shared memory used to be the main way to do shared memory on
</span><br>
<span class="quotelev1">&gt; MPICH and from my (little) experience, this was truly painful :
</span><br>
<span class="quotelev1">&gt;   - Cleanup issues : does shmctl(IPC_RMID) solve _all_ cases ? (even  
</span><br>
<span class="quotelev1">&gt; kill
</span><br>
<span class="quotelev1">&gt; -9 ?)
</span><br>
<span class="quotelev1">&gt;   - Naming issues : shm segments identified as 32 bits key potentially
</span><br>
<span class="quotelev1">&gt; causing conflicts between applications or layers of the same  
</span><br>
<span class="quotelev1">&gt; application
</span><br>
<span class="quotelev1">&gt; on one node
</span><br>
<span class="quotelev1">&gt;   - Space issues : the total shm size on a system is bound to
</span><br>
<span class="quotelev1">&gt; /proc/sys/kernel/shmmax, needing admin configuration and causing  
</span><br>
<span class="quotelev1">&gt; conflicts
</span><br>
<span class="quotelev1">&gt; between MPI applications running on the same node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Indeed.  The one saving grace here is that the cleanup issues  
<br>
apparently can be solved on Linux with a special flag that indicates  
<br>
&quot;automatically remove this shmem when all processes attaching to it  
<br>
have died.&quot;  That was really the impetus for [re-]investigating sysv  
<br>
shm.  I, too, remember the sysv pain because we used it in LAM, too...
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
<li><strong>Next message:</strong> <a href="5766.php">Roberto Ammendola: "[OMPI devel] custom btl"</a>
<li><strong>Previous message:</strong> <a href="5764.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>In reply to:</strong> <a href="5763.php">Sylvain Jeaugey: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5773.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5773.php">Iain Bason: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/04/5777.php">Ashley Pittman: "Re: [OMPI devel] SM init failures"</a>
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

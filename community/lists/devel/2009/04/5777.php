<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 17:12:08 2009" -->
<!-- isoreceived="20090401211208" -->
<!-- sent="Wed, 01 Apr 2009 22:12:09 +0100" -->
<!-- isosent="20090401211209" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="1238620329.3893.60.camel_at_alpha" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 17:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5778.php">George Bosilca: "[OMPI devel] Open MPI 2009 released"</a>
<li><strong>Previous message:</strong> <a href="5776.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5779.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5779.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-03-31 at 11:00 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 31, 2009, at 3:45 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt; &gt; System V shared memory used to be the main way to do shared memory on
</span><br>
<span class="quotelev2">&gt; &gt; MPICH and from my (little) experience, this was truly painful :
</span><br>
<span class="quotelev2">&gt; &gt;   - Cleanup issues : does shmctl(IPC_RMID) solve _all_ cases ? (even  
</span><br>
<span class="quotelev2">&gt; &gt; kill
</span><br>
<span class="quotelev2">&gt; &gt; -9 ?)
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
<p>Unless there is something newer than IPC_RMID that I haven't heard of
<br>
this is far from a complete solution, setting RMID causes it to be
<br>
deleted when the attach count becomes zero so it handles the kill -9
<br>
case however it has the down side that once it's been set no further
<br>
processes can attach to the memory so you have to leave a window during
<br>
init during which any crash will leave the memory.
<br>
<p>I've always been of the opinion that mmaping shared files was a much
<br>
more advanced solution.
<br>
<p>Ashley Pittman.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5778.php">George Bosilca: "[OMPI devel] Open MPI 2009 released"</a>
<li><strong>Previous message:</strong> <a href="5776.php">Iain Bason: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20926"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5779.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5779.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
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

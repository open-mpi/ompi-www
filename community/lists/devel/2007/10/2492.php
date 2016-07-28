<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 20:57:43 2007" -->
<!-- isoreceived="20071024005743" -->
<!-- sent="Tue, 23 Oct 2007 18:57:37 -0600" -->
<!-- isosent="20071024005737" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]" -->
<!-- id="928FD43F-C21F-47C7-8486-F9F6754DF370_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="471E282B.4070304_at_myri.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 20:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2493.php">Paul H. Hargrove: "[OMPI devel] FD leak in Altix timer code?"</a>
<li><strong>Previous message:</strong> <a href="2491.php">Patrick Geoffray: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2491.php">Patrick Geoffray: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2494.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2494.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 23, 2007, at 10:58 AM, Patrick Geoffray wrote:
<br>
<p><span class="quotelev1">&gt; Bogdan Costescu wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I made some progress: if I configure with &quot;--without-memory-manager&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (along with all other options that I mentioned before), then it  
</span><br>
<span class="quotelev2">&gt;&gt; works.
</span><br>
<span class="quotelev2">&gt;&gt; This was inspired by the fact that the segmentation fault occured in
</span><br>
<span class="quotelev2">&gt;&gt; ptmalloc2. I have previously tried to remove the MX support without
</span><br>
<span class="quotelev2">&gt;&gt; any effect; with ptmalloc2 out of the picture I have had test runs
</span><br>
<span class="quotelev2">&gt;&gt; over MX and TCP without problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have had portability problems using ptmalloc2 in MPICH-GM,  
</span><br>
<span class="quotelev1">&gt; specially
</span><br>
<span class="quotelev1">&gt; relative to threads. In MX, we choose to use dlmalloc instead. It  
</span><br>
<span class="quotelev1">&gt; is not
</span><br>
<span class="quotelev1">&gt; as optimized and its thread-safety has a coarser grain, but it is much
</span><br>
<span class="quotelev1">&gt; more portable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Disabling the memory manager in OpenMPI is not a bad thing for MX, as
</span><br>
<span class="quotelev1">&gt; its own dlmalloc-based registration cache will operate transparently
</span><br>
<span class="quotelev1">&gt; with MX_RCACHE=1 (default).
</span><br>
<p>If you're not packaging Open MPI with MX support, I'd configure Open  
<br>
MPI with the extra parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;--without-memory-manager --enable-mca-static=btl-mx,mtl-mx
<br>
<p>This will provide the least possibility of something getting in the  
<br>
way of MX doing its thing with its memory hooks.  It causes libmpi.so  
<br>
to depend on libmyriexpress.so, which is both a good and bad thing.   
<br>
Good because the malloc hooks in libmyriexpress aren't &quot;seen&quot; when we  
<br>
dlopen the OMPI MX drivers to suck in libmyriexpress, but they would  
<br>
be with this configuration.  Bad in that libmpi.so now depends on  
<br>
libmyriexpress, so packaging for multiple machines could be more  
<br>
difficult.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2493.php">Paul H. Hargrove: "[OMPI devel] FD leak in Altix timer code?"</a>
<li><strong>Previous message:</strong> <a href="2491.php">Patrick Geoffray: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2491.php">Patrick Geoffray: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2494.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2494.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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

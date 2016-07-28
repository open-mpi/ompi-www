<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 12:58:24 2007" -->
<!-- isoreceived="20071023165824" -->
<!-- sent="Tue, 23 Oct 2007 12:58:19 -0400" -->
<!-- isosent="20071023165819" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]" -->
<!-- id="471E282B.4070304_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0710231053200.4540_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 12:58:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2492.php">Brian Barrett: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2490.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2492.php">Brian Barrett: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2492.php">Brian Barrett: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bogdan,
<br>
<p>Bogdan Costescu wrote:
<br>
<span class="quotelev1">&gt; I made some progress: if I configure with &quot;--without-memory-manager&quot; 
</span><br>
<span class="quotelev1">&gt; (along with all other options that I mentioned before), then it works. 
</span><br>
<span class="quotelev1">&gt; This was inspired by the fact that the segmentation fault occured in 
</span><br>
<span class="quotelev1">&gt; ptmalloc2. I have previously tried to remove the MX support without 
</span><br>
<span class="quotelev1">&gt; any effect; with ptmalloc2 out of the picture I have had test runs 
</span><br>
<span class="quotelev1">&gt; over MX and TCP without problems.
</span><br>
<p>We have had portability problems using ptmalloc2 in MPICH-GM, specially 
<br>
relative to threads. In MX, we choose to use dlmalloc instead. It is not 
<br>
as optimized and its thread-safety has a coarser grain, but it is much 
<br>
more portable.
<br>
<p>Disabling the memory manager in OpenMPI is not a bad thing for MX, as 
<br>
its own dlmalloc-based registration cache will operate transparently 
<br>
with MX_RCACHE=1 (default).
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2492.php">Brian Barrett: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2490.php">Scott Atchley: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2492.php">Brian Barrett: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2492.php">Brian Barrett: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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

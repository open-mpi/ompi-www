<?
$subject_val = "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 17 11:50:28 2010" -->
<!-- isoreceived="20100117165028" -->
<!-- sent="Sun, 17 Jan 2010 09:50:17 -0700" -->
<!-- isosent="20100117165017" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)" -->
<!-- id="EDBF0425-A585-48E6-A418-A25F8E17B7A6_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2E94D054-0FEA-42C5-9BD0-17A524965317_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-17 11:50:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7323.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7321.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7320.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7323.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7323.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7324.php">Sylvain Jeaugey: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 17, 2010, at 11:31 AM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; On 10 Jan 2010, at 03:45, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We should absolutely not change this.  For simple applications, yes, things work if large blocks are allocated on the heap.  However, ptmalloc (and most allocators, really), can't rationally cope with repeated allocations and deallocations of large blocks.  It would be *really bad* (as we've seen before) to change the behavior of our version of ptmalloc from that which is provided by Linux.  Pain and suffering is all that path has ever lead to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think there are two different issues here that are in danger of being confused.  Having OMPI use it's own ptmalloc implantation as it has done at times in the past has been problematic and should be avoided in my opinion.
</span><br>
<p>I agree, and I also don't believe I'm confusing them.  The shipping of ptmalloc2 is unfortunate and yet required until a better solution appears.  The proposal/request which started this e-mail chain was to change a hard-coded constant in the ptmalloc2 shipped with Open MPI.  While the fact that we can do this is an artifact of Open MPI providing it's own ptmalloc implementation, it none the less fundamentally changes how the memory allocator works when applications are linked against Open MPI, away from the default behavior found on Linux systems.
<br>
<p><span class="quotelev1">&gt; Tuning the libc malloc implementation using the options they provide to do is is valid and provides real benefit to a lot of applications.  For the record we used to disable mmap based allocations by default on Quadrics systems and I can't think of a single case of people who needed to re-enable it.
</span><br>
<p>I'm glad that you've been so fortunate.  Unfortunately, I have a large application base in which that is not the case, and we have had to use mmap based allocation, otherwise memory usage would essentially grow without bound.  So we go back to the age-old debate of correctness vs. performance.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7323.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7321.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>In reply to:</strong> <a href="7320.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7323.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7323.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7324.php">Sylvain Jeaugey: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
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

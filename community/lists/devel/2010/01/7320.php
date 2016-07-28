<?
$subject_val = "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 17 11:31:12 2010" -->
<!-- isoreceived="20100117163112" -->
<!-- sent="Sun, 17 Jan 2010 16:31:04 +0000" -->
<!-- isosent="20100117163104" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)" -->
<!-- id="2E94D054-0FEA-42C5-9BD0-17A524965317_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2D094A28F6B31745BE7B844EA0FF60962C3D952BBF_at_ES04SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-17 11:31:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7321.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7319.php">Ralph Castain: "[OMPI devel] RFC: opal_value_array"</a>
<li><strong>In reply to:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7322.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7322.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10 Jan 2010, at 03:45, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; We should absolutely not change this.  For simple applications, yes, things work if large blocks are allocated on the heap.  However, ptmalloc (and most allocators, really), can't rationally cope with repeated allocations and deallocations of large blocks.  It would be *really bad* (as we've seen before) to change the behavior of our version of ptmalloc from that which is provided by Linux.  Pain and suffering is all that path has ever lead to.
</span><br>
<p>I think there are two different issues here that are in danger of being confused.  Having OMPI use it's own ptmalloc implantation as it has done at times in the past has been problematic and should be avoided in my opinion.
<br>
<p>Tuning the libc malloc implementation using the options they provide to do is is valid and provides real benefit to a lot of applications.  For the record we used to disable mmap based allocations by default on Quadrics systems and I can't think of a single case of people who needed to re-enable it.
<br>
<p>Ashley.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7321.php">Ashley Pittman: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Previous message:</strong> <a href="7319.php">Ralph Castain: "[OMPI devel] RFC: opal_value_array"</a>
<li><strong>In reply to:</strong> <a href="7301.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7322.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
<li><strong>Reply:</strong> <a href="7322.php">Barrett, Brian W: "Re: [OMPI devel] MALLOC_MMAP_MAX (and MALLOC_MMAP_THRESHOLD)"</a>
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

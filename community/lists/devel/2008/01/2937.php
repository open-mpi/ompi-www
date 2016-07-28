<?
$subject_val = "[OMPI devel] ptmalloc and pin down cache problems again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 10:14:16 2008" -->
<!-- isoreceived="20080107151416" -->
<!-- sent="Mon, 7 Jan 2008 17:14:08 +0200" -->
<!-- isosent="20080107151408" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] ptmalloc and pin down cache problems again" -->
<!-- id="20080107151407.GU22604_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] ptmalloc and pin down cache problems again<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-07 10:14:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2938.php">Brian W. Barrett: "Re: [OMPI devel] ptmalloc and pin down cache problems again"</a>
<li><strong>Previous message:</strong> <a href="2936.php">Gleb Natapov: "Re: [OMPI devel] Common initialization code for IB."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2938.php">Brian W. Barrett: "Re: [OMPI devel] ptmalloc and pin down cache problems again"</a>
<li><strong>Reply:</strong> <a href="2938.php">Brian W. Barrett: "Re: [OMPI devel] ptmalloc and pin down cache problems again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>&nbsp;I encountered problem with ptmalloc an registration cache. I see that
<br>
you (I think it was you) disabled shrinking of a heap memory allocated
<br>
by sbrk by setting MORECORE_CANNOT_TRIM to 1. The comment explains that
<br>
it should be done because freeing of small objects is not reentrant so
<br>
if ompi memory subsystem callback will call free() the code will deadlock.
<br>
And the trick indeed works in single threaded programs, but in multithreaded
<br>
programs ptmalloc may allocate a heap not only by sbrk, but by mmap too. This
<br>
is called &quot;arena&quot;. Each thread may have arenas of its own. The problem is
<br>
that ptmalloc may free an arena by calling munmap() and then free() that
<br>
is called from our callback deadlocks. I tried to compile with USE_ARENAS set
<br>
to 0, but the code doesn't compile. I can fix compilation problem of
<br>
cause, but it seems that it is not so good idea to disable this feature.
<br>
The ptmalloc scalability depends on it (and even if we will disable it
<br>
ptmalloc may still create arena by mmap if sbrk fails). I see only one
<br>
way to solve this problem: to not call free() inside mpool callbacks.
<br>
If freeing of a memory is needed (and it is needed since IB unregister
<br>
calls free()) the works should be deferred. For IB mpool we can check what
<br>
needs to be unregistered inside a callback, but actually call unregister()
<br>
from next mpool-&gt;register() call. Do you see any problems with this
<br>
approach?
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2938.php">Brian W. Barrett: "Re: [OMPI devel] ptmalloc and pin down cache problems again"</a>
<li><strong>Previous message:</strong> <a href="2936.php">Gleb Natapov: "Re: [OMPI devel] Common initialization code for IB."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2938.php">Brian W. Barrett: "Re: [OMPI devel] ptmalloc and pin down cache problems again"</a>
<li><strong>Reply:</strong> <a href="2938.php">Brian W. Barrett: "Re: [OMPI devel] ptmalloc and pin down cache problems again"</a>
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

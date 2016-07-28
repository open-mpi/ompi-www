<?
$subject_val = "Re: [OMPI devel] ptmalloc and pin down cache problems again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 10:19:49 2008" -->
<!-- isoreceived="20080107151949" -->
<!-- sent="Mon, 7 Jan 2008 09:19:33 -0600 (CST)" -->
<!-- isosent="20080107151933" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ptmalloc and pin down cache problems again" -->
<!-- id="Pine.LNX.4.64.0801070916140.29002_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080107151407.GU22604_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ptmalloc and pin down cache problems again<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-07 10:19:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2939.php">Josh Hursey: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="2937.php">Gleb Natapov: "[OMPI devel] ptmalloc and pin down cache problems again"</a>
<li><strong>In reply to:</strong> <a href="2937.php">Gleb Natapov: "[OMPI devel] ptmalloc and pin down cache problems again"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope, I think that's a valid approach.  For some reason, I believe it 
<br>
was problematic for the OpenIB guys to do that at the time we were 
<br>
hacking up that code.  But if it works, it sounds like a much better 
<br>
approach.
<br>
<p>When you make the change to the openib mpool, I'd also 
<br>
MORECORE_CANNONT_TRIM back to 0.  mvapi / openib were the only libraries 
<br>
that needed the free in the deregistration callback -- GM apppeared to not 
<br>
have that particular behavior.  And I don't believe that anyone else 
<br>
actually uses the deregistration callbacks.
<br>
<p><p>Brian
<br>
<p><p>On Mon, 7 Jan 2008, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encountered problem with ptmalloc an registration cache. I see that
</span><br>
<span class="quotelev1">&gt; you (I think it was you) disabled shrinking of a heap memory allocated
</span><br>
<span class="quotelev1">&gt; by sbrk by setting MORECORE_CANNOT_TRIM to 1. The comment explains that
</span><br>
<span class="quotelev1">&gt; it should be done because freeing of small objects is not reentrant so
</span><br>
<span class="quotelev1">&gt; if ompi memory subsystem callback will call free() the code will deadlock.
</span><br>
<span class="quotelev1">&gt; And the trick indeed works in single threaded programs, but in multithreaded
</span><br>
<span class="quotelev1">&gt; programs ptmalloc may allocate a heap not only by sbrk, but by mmap too. This
</span><br>
<span class="quotelev1">&gt; is called &quot;arena&quot;. Each thread may have arenas of its own. The problem is
</span><br>
<span class="quotelev1">&gt; that ptmalloc may free an arena by calling munmap() and then free() that
</span><br>
<span class="quotelev1">&gt; is called from our callback deadlocks. I tried to compile with USE_ARENAS set
</span><br>
<span class="quotelev1">&gt; to 0, but the code doesn't compile. I can fix compilation problem of
</span><br>
<span class="quotelev1">&gt; cause, but it seems that it is not so good idea to disable this feature.
</span><br>
<span class="quotelev1">&gt; The ptmalloc scalability depends on it (and even if we will disable it
</span><br>
<span class="quotelev1">&gt; ptmalloc may still create arena by mmap if sbrk fails). I see only one
</span><br>
<span class="quotelev1">&gt; way to solve this problem: to not call free() inside mpool callbacks.
</span><br>
<span class="quotelev1">&gt; If freeing of a memory is needed (and it is needed since IB unregister
</span><br>
<span class="quotelev1">&gt; calls free()) the works should be deferred. For IB mpool we can check what
</span><br>
<span class="quotelev1">&gt; needs to be unregistered inside a callback, but actually call unregister()
</span><br>
<span class="quotelev1">&gt; from next mpool-&gt;register() call. Do you see any problems with this
</span><br>
<span class="quotelev1">&gt; approach?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2939.php">Josh Hursey: "Re: [OMPI devel] Cisco MTT runs"</a>
<li><strong>Previous message:</strong> <a href="2937.php">Gleb Natapov: "[OMPI devel] ptmalloc and pin down cache problems again"</a>
<li><strong>In reply to:</strong> <a href="2937.php">Gleb Natapov: "[OMPI devel] ptmalloc and pin down cache problems again"</a>
<!-- nextthread="start" -->
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

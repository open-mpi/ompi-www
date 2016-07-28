<?
$subject_val = "Re: [OMPI devel] RFC: add opal/threads/spinlock.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 14:51:35 2014" -->
<!-- isoreceived="20140814185135" -->
<!-- sent="Thu, 14 Aug 2014 14:51:34 -0400" -->
<!-- isosent="20140814185134" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add opal/threads/spinlock.h" -->
<!-- id="CAMJJpkW9xeGeNuoe49fTbBWC3pQ_mZ4aQ2Y9nbcM3ALBsvsAkg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BAEDCEA8-DA72-4A49-8B3D-96A95C81F0BF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add opal/threads/spinlock.h<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 14:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15656.php">Ralph Castain: "[OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="15654.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>In reply to:</strong> <a href="15652.php">Dave Goodell (dgoodell): "[OMPI devel] RFC: add opal/threads/spinlock.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SHARED is only supported when the pthread library does support spinlock,
<br>
while in all other case it falls back into using atomic locks. Providing
<br>
support only for a small fraction of environments without reporting errors
<br>
or providing any alternative on other systems is difficult to accept.
<br>
<p>I think I prefer your suggestion to integrate this with the atomic locks
<br>
and provide a single mechanism to handle them. Regarding this do you think
<br>
there will be a need to separate the spinlocks and the atomic locks?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Thu, Aug 14, 2014 at 11:40 AM, Dave Goodell (dgoodell) &lt;
<br>
dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Add a new &quot;opal/threads/spinlock.h&quot; header to OPAL that will
</span><br>
<span class="quotelev1">&gt; typically use the OS spinlock primitives if present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: opal_mutex_t is too slow for some use cases and opal_atomic_lock_t is
</span><br>
<span class="quotelev1">&gt; inefficiently implemented for most architectures
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: timeout is after next week's engineering call on Tuesday, 2014-08-19
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As discussed at the June developer meeting, I propose this patch to add
</span><br>
<span class="quotelev1">&gt; spinlocks to OPAL.  There are at least a half dozen reasonable ways to
</span><br>
<span class="quotelev1">&gt; implement spinlocks; which one is best will vary from platform to platform.
</span><br>
<span class="quotelev1">&gt;  In general, the OS spinlock implementations are well tested and efficient.
</span><br>
<span class="quotelev1">&gt;  We should usually be relying on those implementations instead of rolling
</span><br>
<span class="quotelev1">&gt; our own.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My primary criticism of this patch is that it muddies the waters a bit
</span><br>
<span class="quotelev1">&gt; with opal_atomic_lock_t.  An alternative approach would be to spend some
</span><br>
<span class="quotelev1">&gt; time working on improving the opal_atomic_lock_t implementation, but I have
</span><br>
<span class="quotelev1">&gt; two concerns with this approach:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) It's very difficult for me to measure the potential performance impact
</span><br>
<span class="quotelev1">&gt; of opal_atomic_lock_t modifications on all of the various platforms that we
</span><br>
<span class="quotelev1">&gt; currently run on.  Adding this new implementation allows component
</span><br>
<span class="quotelev1">&gt; maintainers to decide if and when to convert to using the new facility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) There's a reasonable chance that I'll make a mistake.  Writing tests
</span><br>
<span class="quotelev1">&gt; for this stuff helps to catch the really basic errors, but it doesn't help
</span><br>
<span class="quotelev1">&gt; as much with the really subtle mistakes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15652.php">http://www.open-mpi.org/community/lists/devel/2014/08/15652.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15655/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15656.php">Ralph Castain: "[OMPI devel] RFC: Merge PMIx branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="15654.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>In reply to:</strong> <a href="15652.php">Dave Goodell (dgoodell): "[OMPI devel] RFC: add opal/threads/spinlock.h"</a>
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

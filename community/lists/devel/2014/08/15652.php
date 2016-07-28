<?
$subject_val = "[OMPI devel] RFC: add opal/threads/spinlock.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 11:40:39 2014" -->
<!-- isoreceived="20140814154039" -->
<!-- sent="Thu, 14 Aug 2014 15:40:37 +0000" -->
<!-- isosent="20140814154037" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: add opal/threads/spinlock.h" -->
<!-- id="BAEDCEA8-DA72-4A49-8B3D-96A95C81F0BF_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: add opal/threads/spinlock.h<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 11:40:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15653.php">Joshua Ladd: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Previous message:</strong> <a href="15651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15655.php">George Bosilca: "Re: [OMPI devel] RFC: add opal/threads/spinlock.h"</a>
<li><strong>Reply:</strong> <a href="15655.php">George Bosilca: "Re: [OMPI devel] RFC: add opal/threads/spinlock.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add a new &quot;opal/threads/spinlock.h&quot; header to OPAL that will typically use the OS spinlock primitives if present.
<br>
<p>WHY: opal_mutex_t is too slow for some use cases and opal_atomic_lock_t is inefficiently implemented for most architectures
<br>
<p>WHEN: timeout is after next week's engineering call on Tuesday, 2014-08-19
<br>
<p><p>As discussed at the June developer meeting, I propose this patch to add spinlocks to OPAL.  There are at least a half dozen reasonable ways to implement spinlocks; which one is best will vary from platform to platform.  In general, the OS spinlock implementations are well tested and efficient.  We should usually be relying on those implementations instead of rolling our own.
<br>
<p><p>My primary criticism of this patch is that it muddies the waters a bit with opal_atomic_lock_t.  An alternative approach would be to spend some time working on improving the opal_atomic_lock_t implementation, but I have two concerns with this approach:
<br>
<p>1) It's very difficult for me to measure the potential performance impact of opal_atomic_lock_t modifications on all of the various platforms that we currently run on.  Adding this new implementation allows component maintainers to decide if and when to convert to using the new facility.
<br>
<p>2) There's a reasonable chance that I'll make a mistake.  Writing tests for this stuff helps to catch the really basic errors, but it doesn't help as much with the really subtle mistakes.
<br>
<p>-Dave
<br>
<p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15652/0001-add-opal-threads-spinlock.h.patch">0001-add-opal-threads-spinlock.h.patch</a>
</ul>
<!-- attachment="0001-add-opal-threads-spinlock.h.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15653.php">Joshua Ladd: "Re: [OMPI devel] [1.8.2rc4] OSHMEM fortran bindings with bad compilers"</a>
<li><strong>Previous message:</strong> <a href="15651.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15655.php">George Bosilca: "Re: [OMPI devel] RFC: add opal/threads/spinlock.h"</a>
<li><strong>Reply:</strong> <a href="15655.php">George Bosilca: "Re: [OMPI devel] RFC: add opal/threads/spinlock.h"</a>
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

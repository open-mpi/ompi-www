<?
$subject_val = "[OMPI devel] oshmem configury issues";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 11 10:39:55 2014" -->
<!-- isoreceived="20140111153955" -->
<!-- sent="Sat, 11 Jan 2014 15:39:54 +0000" -->
<!-- isosent="20140111153954" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] oshmem configury issues" -->
<!-- id="0C89C6D1-BB49-4996-BF04-ED9B7D12D4BC_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] oshmem configury issues<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-11 10:39:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Previous message:</strong> <a href="13743.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox --
<br>
<p>I investigated the ibverbs configury issue reported by Paul Hargrove (initial post: <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13598.php">http://www.open-mpi.org/community/lists/devel/2014/01/13598.php</a>), and it looks like it's an oshmem configury issue.  The short version is that oshmem is doing some configure tests a) at the wrong time, and b) in the wrong place.
<br>
<p>Both things are happening in OSHMEM_SETUP_CFLAGS, which is being invoked very, very late in configure.ac:
<br>
<p>a) OSHMEM_SETUP_CFLAGS is after all framework/component setup, and is during final *FLAGS (e.g., CFLAGS) processing.  In this case, LDFLAGS has been loaded with -export-dynamic, which is intended to be used by libtool.  But then OSHMEM_SETUP_CFLAGS invokes tests that use LDFLAGS with plain CC, and badness can occur.
<br>
<p>b) But I'm confused as to the purpose of OSHMEM_SETUP_CFLAGS, anyway:
<br>
<p>b1) It's calling OMPI_C_COMPILER_VENDOR([oshmem_c_vendor]).  But I can't find where this is used.  Am I missing it?  If not, it should be removed.
<br>
<p>b2) The rest of OSHMEM_SETUP_CFLAGS is all verbs-specific (e.g., it calls OMPI_CHECK_OPENFABRICS).  It looks like the flags and #define it sets are in the mca/memheap/base.  Two issues:
<br>
<p>b2a) Tests that are specific to a framework should be in that framework's configure.m4 (e.g., oshmem/mca/memheap/configure.m4).  They should not (effectively) be in the top-level configure.ac.
<br>
<p>b2b) Why is all this verbs-specific stuff in the memheap base?  It seems like an abstraction violation -- the whole point of components is to have platform-specific code in components, not in the core/base library.  Put simply: as a rule of thumb, you shouldn't need to link libibverbs -- or any other network stack library -- in the wrapper compilers (when building libmpi as shared library with plugins).  If you do, it means you have network-specific code in OMPI's core libraries, and you got the abstractions wrong.
<br>
<p><span class="quotelev1">&gt;From how I'm currently understanding this, it seems like OSHMEM_SETUP_CFLAGS should go away, the tests it is doing should move to a component's configure.m4, and the verbs-specific code in memheap/base should also move to a component.
</span><br>
<p>Am I misunderstanding this?  Can you explain this in more detail?
<br>
<p>If it would be helpful, we can discuss this on a webex next week, or somesuch.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13745.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - ibverbs configure error on Solaris-11"</a>
<li><strong>Previous message:</strong> <a href="13743.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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

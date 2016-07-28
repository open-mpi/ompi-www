<?
$subject_val = "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 21:26:51 2015" -->
<!-- isoreceived="20150605012651" -->
<!-- sent="Fri, 5 Jun 2015 01:26:42 +0000" -->
<!-- isosent="20150605012642" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations" -->
<!-- id="9C65C25B-8F06-4B9B-9C18-2365BD685F4A_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55701F02.302_at_cs.tu-chemnitz.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-04 21:26:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27042.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27040.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>In reply to:</strong> <a href="27039.php">Ren&#195;&#169; Oertel: "[OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27042.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Reply:</strong> <a href="27042.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2015, at 5:48 AM, Ren&#195;&#169; Oertel &lt;rene.oertel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Problem description:
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The critical code in question is in
</span><br>
<span class="quotelev1">&gt; opal/mca/memory/linux/memory_linux_ptmalloc2.c:
</span><br>
<span class="quotelev1">&gt; #####
</span><br>
<span class="quotelev1">&gt; 92 #if HAVE_POSIX_MEMALIGN
</span><br>
<span class="quotelev1">&gt; 93     /* Double check for posix_memalign, too */
</span><br>
<span class="quotelev1">&gt; 94     if (mca_memory_linux_component.memalign_invoked) {
</span><br>
<span class="quotelev1">&gt; 95         mca_memory_linux_component.memalign_invoked = false;
</span><br>
<span class="quotelev1">&gt; 96         if (0 != posix_memalign(&amp;p, sizeof(void*), 1024 * 1024)) {
</span><br>
<span class="quotelev1">&gt; 97             return OPAL_ERR_IN_ERRNO;
</span><br>
<span class="quotelev1">&gt; 98         }
</span><br>
<span class="quotelev1">&gt; 99         free(p);
</span><br>
<span class="quotelev1">&gt; 100     }
</span><br>
<span class="quotelev1">&gt; 101 #endif
</span><br>
<span class="quotelev1">&gt; 102
</span><br>
<span class="quotelev1">&gt; 103     if (mca_memory_linux_component.malloc_invoked &amp;&amp;
</span><br>
<span class="quotelev1">&gt; 104         mca_memory_linux_component.realloc_invoked &amp;&amp;
</span><br>
<span class="quotelev1">&gt; 105         mca_memory_linux_component.memalign_invoked &amp;&amp;
</span><br>
<span class="quotelev1">&gt; 106         mca_memory_linux_component.free_invoked) {
</span><br>
<span class="quotelev1">&gt; 107         /* Happiness; our functions were invoked */
</span><br>
<span class="quotelev1">&gt; 108         val |= OPAL_MEMORY_FREE_SUPPORT | OPAL_MEMORY_CHUNK_SUPPORT;
</span><br>
<span class="quotelev1">&gt; 109     }
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 121     /* All done */
</span><br>
<span class="quotelev1">&gt; 122     if (val &gt; 0) {
</span><br>
<span class="quotelev1">&gt; 123         opal_mem_hooks_set_support(val);
</span><br>
<span class="quotelev1">&gt; 124         return OPAL_SUCCESS;
</span><br>
<span class="quotelev1">&gt; 125     }
</span><br>
<span class="quotelev1">&gt; #####
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code at lines 103-109 is legally optimized away with &gt;=GCC-4.9 and
</span><br>
<span class="quotelev1">&gt; optimizations turned on,
</span><br>

<br>
I'm not sure what you mean by &quot;legally optimized away&quot; -- shouldn't gcc know that the call to posix_memalign() can change global variables (such as mca_memory_linux_component.&lt;foo&gt;)?
<br>

<br>
<span class="quotelev1">&gt; because line 105 could never become true with
</span><br>
<span class="quotelev1">&gt; the local knowledge of the compiler/optimizer.
</span><br>

<br>
My compiler knowledge may be a bit rusty, but if this optimization is being made solely with local knowledge, this sounds like a buggy optimization...?
<br>

<br>
<span class="quotelev1">&gt; If mca_memory_linux_component.memalign_invoked == true at line 92, it
</span><br>
<span class="quotelev1">&gt; would be set to false at line 95.
</span><br>

<br>
...but potentially set to true again in the body of posix_memalign().  ...which you describe below.
<br>

<br>
<span class="quotelev1">&gt; If mca_memory_linux_component.memalign_invoked == false at line 92, it
</span><br>
<span class="quotelev1">&gt; would be false at line 103, too.
</span><br>
<span class="quotelev1">&gt; In both cases, the if at line 103-106 could never be evaluated to true
</span><br>
<span class="quotelev1">&gt; and opal_mem_hooks_set_support is never called with
</span><br>
<span class="quotelev1">&gt; OPAL_MEMORY_FREE_SUPPORT | OPAL_MEMORY_CHUNK_SUPPORT resulting in
</span><br>
<span class="quotelev1">&gt; (silently) disabled mpi_leaved_pinned.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the global view this local assumption is not true, because
</span><br>
<span class="quotelev1">&gt; posix_memalign() in line 96 will call the hook public_mEMALIGn() in
</span><br>
<span class="quotelev1">&gt; opal/mca/memory/linux/malloc.c which in turn sets
</span><br>
<span class="quotelev1">&gt; mca_memory_linux_component.memalign_invoked = true.
</span><br>
<span class="quotelev1">&gt; As a result, the OPAL_MEMORY_*_SUPPORT would get configured correctly in
</span><br>
<span class="quotelev1">&gt; line 123 and so the opal_mem_hooks_support_level() used by
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c and indirectly by the
</span><br>
<span class="quotelev1">&gt; ompi/mca/mpool/grdma/mpool_grdma* module enables the usage of pinned memory.
</span><br>

<br>
How can a compiler not take the global view?  Taking a local-only view is unsafe -- for exactly these kinds of reasons.
<br>

<br>
<span class="quotelev1">&gt; The optimization could be disabled by adding -fno-tree-partial-pre to
</span><br>
<span class="quotelev1">&gt; the CFLAGS in opal/mca/memory/linux/Makefile, but this is only a
</span><br>
<span class="quotelev1">&gt; temporary workaround.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patch:
</span><br>
<span class="quotelev1">&gt; =====
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The proposed patch is as follows, which alters the point-of-view of the
</span><br>
<span class="quotelev1">&gt; compiler's optimizer on the *_invoked variables used by different code
</span><br>
<span class="quotelev1">&gt; paths (memory_linux_ptmalloc2.c vs. malloc.c):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #####
</span><br>
<span class="quotelev1">&gt; diff -rupN openmpi-1.8.5.org/opal/mca/memory/linux/memory_linux.h
</span><br>
<span class="quotelev1">&gt; openmpi-1.8.5/opal/mca/memory/linux/memory_linux.h
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.8.5.org/opal/mca/memory/linux/memory_linux.h
</span><br>
<span class="quotelev1">&gt; 2014-10-03 22:32:23.000000000 +0200
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.8.5/opal/mca/memory/linux/memory_linux.h  2015-06-04
</span><br>
<span class="quotelev1">&gt; 10:01:44.941544282 +0200
</span><br>
<span class="quotelev1">&gt; @@ -33,11 +33,11 @@ typedef struct opal_memory_linux_compone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if MEMORY_LINUX_PTMALLOC2
</span><br>
<span class="quotelev1">&gt;     /* Ptmalloc2-specific data */
</span><br>
<span class="quotelev1">&gt; -    bool free_invoked;
</span><br>
<span class="quotelev1">&gt; -    bool malloc_invoked;
</span><br>
<span class="quotelev1">&gt; -    bool realloc_invoked;
</span><br>
<span class="quotelev1">&gt; -    bool memalign_invoked;
</span><br>
<span class="quotelev1">&gt; -    bool munmap_invoked;
</span><br>
<span class="quotelev1">&gt; +    volatile bool free_invoked;
</span><br>
<span class="quotelev1">&gt; +    volatile bool malloc_invoked;
</span><br>
<span class="quotelev1">&gt; +    volatile bool realloc_invoked;
</span><br>
<span class="quotelev1">&gt; +    volatile bool memalign_invoked;
</span><br>
<span class="quotelev1">&gt; +    volatile bool munmap_invoked;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; } opal_memory_linux_component_t;
</span><br>

<br>
I don't really want to apply this patch (thanks for filing the PR, BTW) without understanding why the compiler is not automatically taking the global view.  It seems unsafe.
<br>

<br>
<span class="quotelev1">&gt; #####
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, a further patch should be applied generating a warning in
</span><br>
<span class="quotelev1">&gt; the GPUDirect module if leave_pinned is not available for some reason.
</span><br>
<span class="quotelev1">&gt; In this case, GPUDirect support should be disabled, because it runs
</span><br>
<span class="quotelev1">&gt; faster without (see Case 2 below).
</span><br>

<br>
I'll let Rolf / NVIDIA comment on the GPU implications.
<br>

<br>
[snip]
<br>

<br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ren&#195;&#169; &quot;oere&quot; Oertel
</span><br>

<br>
Many thanks for the detailed report!
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27042.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27040.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>In reply to:</strong> <a href="27039.php">Ren&#195;&#169; Oertel: "[OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27042.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Reply:</strong> <a href="27042.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
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

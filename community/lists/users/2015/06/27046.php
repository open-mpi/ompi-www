<?
$subject_val = "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  5 21:47:21 2015" -->
<!-- isoreceived="20150606014721" -->
<!-- sent="Sat, 6 Jun 2015 10:47:17 +0900" -->
<!-- isosent="20150606014717" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations" -->
<!-- id="CAAkFZ5tZL_3kzYGhd_k-XAbggtj3XJO5CzQPPY7ugqHK7QCq4Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F74D6E02-DBD7-4B7E-959C-48351D414F2C_at_icl.utk.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-05 21:47:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27047.php">Ilias Miroslav: "[OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem running simple application with g++ under	FreeBSD 10.1"</a>
<li><strong>In reply to:</strong> <a href="27043.php">George Bosilca: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27049.php">Dave Goodell (dgoodell): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Reply:</strong> <a href="27049.php">Dave Goodell (dgoodell): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i did not use the term &quot;pure&quot; properly.
<br>
<p>please read instead &quot;posix_memalign is a function that does not modify any
<br>
user variable&quot;
<br>
that assumption is correct when there is no wrapper, and incorrect in our
<br>
case.
<br>
<p>On Saturday, June 6, 2015, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Based on the definition of a pure function, two calls to the same pure
</span><br>
<span class="quotelev1">&gt; function with the same arguments should return the same value. This is
</span><br>
<span class="quotelev1">&gt; obviously never true for posix_memalign.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suggest we take a look at the generated code, and based on that we
</span><br>
<span class="quotelev1">&gt; decide how to move forward on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 4, 2015, at 22:47 , Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; imho, this is a grey area ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 99.999% of the time, posix_memalign is a &quot;pure&quot; function.
</span><br>
<span class="quotelev2">&gt; &gt; &quot;pure&quot; means it has no side effects.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; unfortunatly, this part of the code is the 0.001% case in which we
</span><br>
<span class="quotelev1">&gt; explicitly rely on a side effect
</span><br>
<span class="quotelev2">&gt; &gt; (e.g. posix_memalign calls an Open MPI wrapper that updates a global
</span><br>
<span class="quotelev1">&gt; variable)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i am not surprised (nor shocked) the compiler assumes posix_memalign is
</span><br>
<span class="quotelev1">&gt; side effect free when (aggressive) optimisation is on, since it is a valid
</span><br>
<span class="quotelev1">&gt; asumption most of the time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Of course, the is a chance that might be a bug
</span><br>
<span class="quotelev2">&gt; &gt; (e.g. GCC folks forgot a wrapper can be added to posix_memalign, so it
</span><br>
<span class="quotelev1">&gt; is not 100% safe to assume posix_memalign is side effect free)
</span><br>
<span class="quotelev2">&gt; &gt; but as far as i am concerned, using &quot;volatile&quot; is correct.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 6/5/2015 10:26 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 4, 2015, at 5:48 AM, Ren&#195;&#169; Oertel &lt;rene.oertel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Problem description:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ===================
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The critical code in question is in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal/mca/memory/linux/memory_linux_ptmalloc2.c:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #####
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 92 #if HAVE_POSIX_MEMALIGN
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 93     /* Double check for posix_memalign, too */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 94     if (mca_memory_linux_component.memalign_invoked) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 95         mca_memory_linux_component.memalign_invoked = false;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 96         if (0 != posix_memalign(&amp;p, sizeof(void*), 1024 * 1024)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 97             return OPAL_ERR_IN_ERRNO;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 98         }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 99         free(p);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 100     }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 101 #endif
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 102
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 103     if (mca_memory_linux_component.malloc_invoked &amp;&amp;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 104         mca_memory_linux_component.realloc_invoked &amp;&amp;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 105         mca_memory_linux_component.memalign_invoked &amp;&amp;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 106         mca_memory_linux_component.free_invoked) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 107         /* Happiness; our functions were invoked */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 108         val |= OPAL_MEMORY_FREE_SUPPORT |
</span><br>
<span class="quotelev1">&gt; OPAL_MEMORY_CHUNK_SUPPORT;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 109     }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 121     /* All done */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 122     if (val &gt; 0) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 123         opal_mem_hooks_set_support(val);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 124         return OPAL_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 125     }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #####
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The code at lines 103-109 is legally optimized away with &gt;=GCC-4.9 and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; optimizations turned on,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm not sure what you mean by &quot;legally optimized away&quot; -- shouldn't gcc
</span><br>
<span class="quotelev1">&gt; know that the call to posix_memalign() can change global variables (such as
</span><br>
<span class="quotelev1">&gt; mca_memory_linux_component.&lt;foo&gt;)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; because line 105 could never become true with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the local knowledge of the compiler/optimizer.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My compiler knowledge may be a bit rusty, but if this optimization is
</span><br>
<span class="quotelev1">&gt; being made solely with local knowledge, this sounds like a buggy
</span><br>
<span class="quotelev1">&gt; optimization...?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If mca_memory_linux_component.memalign_invoked == true at line 92, it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; would be set to false at line 95.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...but potentially set to true again in the body of posix_memalign().
</span><br>
<span class="quotelev1">&gt; ...which you describe below.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If mca_memory_linux_component.memalign_invoked == false at line 92, it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; would be false at line 103, too.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In both cases, the if at line 103-106 could never be evaluated to true
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and opal_mem_hooks_set_support is never called with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OPAL_MEMORY_FREE_SUPPORT | OPAL_MEMORY_CHUNK_SUPPORT resulting in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (silently) disabled mpi_leaved_pinned.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In the global view this local assumption is not true, because
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; posix_memalign() in line 96 will call the hook public_mEMALIGn() in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; opal/mca/memory/linux/malloc.c which in turn sets
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mca_memory_linux_component.memalign_invoked = true.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As a result, the OPAL_MEMORY_*_SUPPORT would get configured correctly
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; line 123 and so the opal_mem_hooks_support_level() used by
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c and indirectly by the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi/mca/mpool/grdma/mpool_grdma* module enables the usage of pinned
</span><br>
<span class="quotelev1">&gt; memory.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; How can a compiler not take the global view?  Taking a local-only view
</span><br>
<span class="quotelev1">&gt; is unsafe -- for exactly these kinds of reasons.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The optimization could be disabled by adding -fno-tree-partial-pre to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the CFLAGS in opal/mca/memory/linux/Makefile, but this is only a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; temporary workaround.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Patch:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =====
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The proposed patch is as follows, which alters the point-of-view of the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compiler's optimizer on the *_invoked variables used by different code
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; paths (memory_linux_ptmalloc2.c vs. malloc.c):
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #####
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; diff -rupN openmpi-1.8.5.org/opal/mca/memory/linux/memory_linux.h
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openmpi-1.8.5/opal/mca/memory/linux/memory_linux.h
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --- openmpi-1.8.5.org/opal/mca/memory/linux/memory_linux.h
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2014-10-03 22:32:23.000000000 +0200
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +++ openmpi-1.8.5/opal/mca/memory/linux/memory_linux.h  2015-06-04
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 10:01:44.941544282 +0200
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; @@ -33,11 +33,11 @@ typedef struct opal_memory_linux_compone
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #if MEMORY_LINUX_PTMALLOC2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     /* Ptmalloc2-specific data */
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -    bool free_invoked;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -    bool malloc_invoked;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -    bool realloc_invoked;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -    bool memalign_invoked;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -    bool munmap_invoked;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +    volatile bool free_invoked;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +    volatile bool malloc_invoked;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +    volatile bool realloc_invoked;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +    volatile bool memalign_invoked;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +    volatile bool munmap_invoked;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #endif
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; } opal_memory_linux_component_t;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't really want to apply this patch (thanks for filing the PR, BTW)
</span><br>
<span class="quotelev1">&gt; without understanding why the compiler is not automatically taking the
</span><br>
<span class="quotelev1">&gt; global view.  It seems unsafe.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #####
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Additionally, a further patch should be applied generating a warning in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the GPUDirect module if leave_pinned is not available for some reason.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In this case, GPUDirect support should be disabled, because it runs
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; faster without (see Case 2 below).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'll let Rolf / NVIDIA comment on the GPU implications.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [snip]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ren&#195;&#169; &quot;oere&quot; Oertel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Many thanks for the detailed report!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27042.php">http://www.open-mpi.org/community/lists/users/2015/06/27042.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27043.php">http://www.open-mpi.org/community/lists/users/2015/06/27043.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27046/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27047.php">Ilias Miroslav: "[OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem running simple application with g++ under	FreeBSD 10.1"</a>
<li><strong>In reply to:</strong> <a href="27043.php">George Bosilca: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27049.php">Dave Goodell (dgoodell): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Reply:</strong> <a href="27049.php">Dave Goodell (dgoodell): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
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

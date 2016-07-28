<?
$subject_val = "Re: [OMPI devel] vader and mmap_shmem module cleanup problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 06:20:58 2015" -->
<!-- isoreceived="20151216112058" -->
<!-- sent="Wed, 16 Dec 2015 20:20:55 +0900" -->
<!-- isosent="20151216112055" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vader and mmap_shmem module cleanup problem" -->
<!-- id="CAAkFZ5v6DcT_yh-M191Pnn8pcodN7paMjw3zayJg3dCj76_F=g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56713280.90405_at_xlab.si" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vader and mmap_shmem module cleanup problem<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-16 06:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18428.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18426.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>In reply to:</strong> <a href="18425.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18428.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Reply:</strong> <a href="18428.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Justin,
<br>
<p>knem allows a process to write into the address space of an other process,
<br>
to do zero copy.
<br>
in the case of osv, threads can simply do a memcpy(), and I doubt knew is
<br>
even available.
<br>
so a new btl that uses memcpy would be optimal on osv.
<br>
<p>one option is to starts from the vader btl, and replace knem invocation
<br>
with memcpy()
<br>
an other option could be to extend the self btl
<br>
<p>but once again, this is for performance only, using tcp btl only should be
<br>
enough to get things work.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, December 16, 2015, Justin Cinkelj &lt;justin.cinkelj_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Vader is for intra-node communication only, right? So for inter-node
</span><br>
<span class="quotelev1">&gt; communication some other mechanism will be used anyway.
</span><br>
<span class="quotelev1">&gt; Why would be even better to write a new btl? To avoid memcpy (knem would
</span><br>
<span class="quotelev1">&gt; use it, if I understand you correctly; I guess code assumes that multiple
</span><br>
<span class="quotelev1">&gt; processes on same node have isolated address spaces).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fork + execve was one of first problems, yes. I replaced that with OSv
</span><br>
<span class="quotelev1">&gt; specific calls (ignore fork, and instead of execve start given binary in
</span><br>
<span class="quotelev1">&gt; new thread). The global variables required OSv modification - the guys from
</span><br>
<span class="quotelev1">&gt; <a href="http://osv.io/">http://osv.io/</a> took care of that (I was surprised that at the end, the
</span><br>
<span class="quotelev1">&gt; patches were really small and elegant). So while there are no real
</span><br>
<span class="quotelev1">&gt; processes, new binary / ELF file is loaded at different address then the
</span><br>
<span class="quotelev1">&gt; rest of OS - so it has separate global variables, and separate environ too.
</span><br>
<span class="quotelev1">&gt; Other resources like file descriptors are still shared.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BR Justin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 15. 12. 2015 14:55, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Justin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at first glance, vader should be symmetric (e.g.
</span><br>
<span class="quotelev1">&gt; call opal_shmem_segment_dettach() instead of munmap()
</span><br>
<span class="quotelev1">&gt; Nathan, can you please comment ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using tid instead of pid should also do the trick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that being said, a more elegant approach would be to create a new module
</span><br>
<span class="quotelev1">&gt; in the shmem framework
</span><br>
<span class="quotelev1">&gt; basically, create = malloc, attach = return the malloc'ed address, detach
</span><br>
<span class="quotelev1">&gt; = noop, destroy = free
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and an even better approach would be to write your own btl that replaces
</span><br>
<span class="quotelev1">&gt; vader.
</span><br>
<span class="quotelev1">&gt; basically, vader can use the knem module to write into an other process
</span><br>
<span class="quotelev1">&gt; address space.
</span><br>
<span class="quotelev1">&gt; since your os is thread only, knem invocation would become a simple memcpy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; makes sense ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as a side note,
</span><br>
<span class="quotelev1">&gt; ompi uses global variables, and orted forks and exec MPI tasks after
</span><br>
<span class="quotelev1">&gt; setting some environment variables. it seems porting ompi to this new os
</span><br>
<span class="quotelev1">&gt; was not so painful, and I would have expected some issues with the global
</span><br>
<span class="quotelev1">&gt; variables, and some race conditions with the environment.
</span><br>
<span class="quotelev1">&gt; did you already solve these issues ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, December 15, 2015, Justin Cinkelj &lt;
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','justin.cinkelj_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; justin.cinkelj_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','justin.cinkelj_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to port Open MPI to OS with threads instead of processes.
</span><br>
<span class="quotelev2">&gt;&gt; Currently, during MPI_Finalize, I get attempt to call munmap first with
</span><br>
<span class="quotelev2">&gt;&gt; address of 0x200000c00000 and later 0x200000c00008.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_vader_component_close():
</span><br>
<span class="quotelev2">&gt;&gt; munmap (mca_btl_vader_component.my_segment,
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_vader_component.segment_size)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_vader_component_init():
</span><br>
<span class="quotelev2">&gt;&gt; if(MCA_BTL_VADER_XPMEM != mca_btl_vader_component.single_copy_mechanism) {
</span><br>
<span class="quotelev2">&gt;&gt;   opal_shmem_segment_create (&amp;component-&gt;seg_ds, sm_file,
</span><br>
<span class="quotelev2">&gt;&gt; component-&gt;segment_size);
</span><br>
<span class="quotelev2">&gt;&gt;   component-&gt;my_segment = opal_shmem_segment_attach (&amp;component-&gt;seg_ds);
</span><br>
<span class="quotelev2">&gt;&gt; } else {
</span><br>
<span class="quotelev2">&gt;&gt;   mmap (NULL, component-&gt;segment_size, PROT_READ | PROT_WRITE,
</span><br>
<span class="quotelev2">&gt;&gt; MAP_ANONYMOUS | MAP_SHARED, -1, 0);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But opal_shmem_segment_attach (from mmap module) ends with:
</span><br>
<span class="quotelev2">&gt;&gt;     /* update returned base pointer with an offset that hides our stuff */
</span><br>
<span class="quotelev2">&gt;&gt;     return (ds_buf-&gt;seg_base_addr + sizeof(opal_shmem_seg_hdr_t));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So mca_btl_vader_component_close() should in that case call
</span><br>
<span class="quotelev2">&gt;&gt; opal_shmem_segment_dettach() instead of munmap.
</span><br>
<span class="quotelev2">&gt;&gt; Or actually, as at that point shmem_mmap module cleanup code is already
</span><br>
<span class="quotelev2">&gt;&gt; done, vader could/should just skip cleanup part?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I should ask first how does that setup/cleanup work on normal Linux
</span><br>
<span class="quotelev2">&gt;&gt; system?
</span><br>
<span class="quotelev2">&gt;&gt; Is mmap called twice, and vader and shmem_mmap module each uses different
</span><br>
<span class="quotelev2">&gt;&gt; address (so vader munmap is indeed required in that case)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Second question.
</span><br>
<span class="quotelev2">&gt;&gt; With two threads in one process, I got attempt to
</span><br>
<span class="quotelev2">&gt;&gt; opal_shmem_segment_dettach() and munmap() on same mmap-ed address, from
</span><br>
<span class="quotelev2">&gt;&gt; both threads. I 'fixed' that by replacing &quot;ds_buf-&gt;seg_cpid = getpid()&quot;
</span><br>
<span class="quotelev2">&gt;&gt; with gettid(), and then each thread munmap-s only address allocated by
</span><br>
<span class="quotelev2">&gt;&gt; itself. Is that correct? Or is it possible, that the second thread might
</span><br>
<span class="quotelev2">&gt;&gt; still try to access data at that address?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BR Justin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18417.php">http://www.open-mpi.org/community/lists/devel/2015/12/18417.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18418.php">http://www.open-mpi.org/community/lists/devel/2015/12/18418.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18427/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18428.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18426.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>In reply to:</strong> <a href="18425.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18428.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Reply:</strong> <a href="18428.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
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

<?
$subject_val = "Re: [OMPI devel] OMPI devel] vader and mmap_shmem module cleanup problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 04:52:06 2015" -->
<!-- isoreceived="20151216095206" -->
<!-- sent="Wed, 16 Dec 2015 18:51:43 +0900" -->
<!-- isosent="20151216095143" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] vader and mmap_shmem module cleanup problem" -->
<!-- id="i2e52ngopj6hqbss1esw3a34.1450259311302_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] vader and mmap_shmem module cleanup problem" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] vader and mmap_shmem module cleanup problem<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-16 04:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18427.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18425.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Justiin,
<br>
<p>Rewriting a btl is for intra-node performance purpose only.
<br>
To get things working, you can force tcp connectipns for intra node communication
<br>
<p>mpirun --mca btl tcp,self ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Justin Cinkelj &lt;justin.cinkelj_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Vader is for intra-node communication only, right? So for inter-node communication some other mechanism will be used anyway.
</span><br>
<span class="quotelev1">&gt;Why would be even better to write a new btl? To avoid memcpy (knem would use it, if I understand you correctly; I guess code assumes that multiple processes on same node have isolated address spaces).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Fork + execve was one of first problems, yes. I replaced that with OSv specific calls (ignore fork, and instead of execve start given binary in new thread). The global variables required OSv modification - the guys from <a href="http://osv.io/">http://osv.io/</a> took care of that (I was surprised that at the end, the patches were really small and elegant). So while there are no real processes, new binary / ELF file is loaded at different address then the rest of OS - so it has separate global variables, and separate environ too. Other resources like file descriptors are still shared.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;BR Justin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 15. 12. 2015 14:55, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Justin, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;at first glance, vader should be symmetric (e.g. call&#194;&#160;opal_shmem_segment_dettach() instead of munmap()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Nathan, can you please comment ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;using tid instead of pid should also do the trick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;that being said, a more elegant approach would be to create a new module in the shmem framework
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;basically, create = malloc, attach = return the malloc'ed address, detach = noop, destroy = free
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;and an even better approach would be to write your own btl that replaces vader.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;basically, vader can use the knem module to write into an other process address space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;since your os is thread only, knem invocation would become&#194;&#160;a simple memcpy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;makes sense ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;as a side note,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;ompi uses global variables, and orted forks and exec MPI tasks after setting some environment variables. it seems porting ompi to this new os was not so painful, and I would have expected some issues with the global variables, and some race conditions with the environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;did you already solve these issues ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tuesday, December 15, 2015, Justin Cinkelj &lt;justin.cinkelj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm trying to port Open MPI to OS with threads instead of processes. Currently, during MPI_Finalize, I get attempt to call munmap first with address of 0x200000c00000 and later 0x200000c00008.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mca_btl_vader_component_close():
</span><br>
<span class="quotelev1">&gt;munmap (mca_btl_vader_component.my_segment, mca_btl_vader_component.segment_size)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mca_btl_vader_component_init():
</span><br>
<span class="quotelev1">&gt;if(MCA_BTL_VADER_XPMEM != mca_btl_vader_component.single_copy_mechanism) {
</span><br>
<span class="quotelev1">&gt;&#194;&#160; opal_shmem_segment_create (&amp;component-&gt;seg_ds, sm_file, component-&gt;segment_size);
</span><br>
<span class="quotelev1">&gt;&#194;&#160; component-&gt;my_segment = opal_shmem_segment_attach (&amp;component-&gt;seg_ds);
</span><br>
<span class="quotelev1">&gt;} else {
</span><br>
<span class="quotelev1">&gt;&#194;&#160; mmap (NULL, component-&gt;segment_size, PROT_READ | PROT_WRITE, MAP_ANONYMOUS | MAP_SHARED, -1, 0);
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But opal_shmem_segment_attach (from mmap module) ends with:
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; /* update returned base pointer with an offset that hides our stuff */
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; return (ds_buf-&gt;seg_base_addr + sizeof(opal_shmem_seg_hdr_t));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So mca_btl_vader_component_close() should in that case call opal_shmem_segment_dettach() instead of munmap.
</span><br>
<span class="quotelev1">&gt;Or actually, as at that point shmem_mmap module cleanup code is already done, vader could/should just skip cleanup part?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Maybe I should ask first how does that setup/cleanup work on normal Linux system?
</span><br>
<span class="quotelev1">&gt;Is mmap called twice, and vader and shmem_mmap module each uses different address (so vader munmap is indeed required in that case)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Second question.
</span><br>
<span class="quotelev1">&gt;With two threads in one process, I got attempt to opal_shmem_segment_dettach() and munmap() on same mmap-ed address, from both threads. I 'fixed' that by replacing &quot;ds_buf-&gt;seg_cpid = getpid()&quot; with gettid(), and then each thread munmap-s only address allocated by itself. Is that correct? Or is it possible, that the second thread might still try to access data at that address?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;BR Justin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18417.php">http://www.open-mpi.org/community/lists/devel/2015/12/18417.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________ devel mailing list devel_at_[hidden] Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18418.php">http://www.open-mpi.org/community/lists/devel/2015/12/18418.php</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18427.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18425.php">Justin Cinkelj: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
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

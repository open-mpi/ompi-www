<?
$subject_val = "Re: [OMPI devel] vader and mmap_shmem module cleanup problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 10:45:01 2015" -->
<!-- isoreceived="20151215154501" -->
<!-- sent="Tue, 15 Dec 2015 08:44:57 -0700" -->
<!-- isosent="20151215154457" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vader and mmap_shmem module cleanup problem" -->
<!-- id="20151215154457.GC2172_at_pn1246003" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="566FE8E3.9020908_at_xlab.si" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-15 10:44:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18420.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18418.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>In reply to:</strong> <a href="18417.php">Justin Cinkelj: "[OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18420.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like there is a missing conditional in
<br>
mca_btl_vader_component_close(). Will add it and PR to 1.10 and 2.x.
<br>
<p>-Nathan
<br>
<p>On Tue, Dec 15, 2015 at 11:18:11AM +0100, Justin Cinkelj wrote:
<br>
<span class="quotelev1">&gt; I'm trying to port Open MPI to OS with threads instead of processes.
</span><br>
<span class="quotelev1">&gt; Currently, during MPI_Finalize, I get attempt to call munmap first with
</span><br>
<span class="quotelev1">&gt; address of 0x200000c00000 and later 0x200000c00008.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_btl_vader_component_close():
</span><br>
<span class="quotelev1">&gt; munmap (mca_btl_vader_component.my_segment,
</span><br>
<span class="quotelev1">&gt; mca_btl_vader_component.segment_size)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_btl_vader_component_init():
</span><br>
<span class="quotelev1">&gt; if(MCA_BTL_VADER_XPMEM != mca_btl_vader_component.single_copy_mechanism) {
</span><br>
<span class="quotelev1">&gt;   opal_shmem_segment_create (&amp;component-&gt;seg_ds, sm_file,
</span><br>
<span class="quotelev1">&gt; component-&gt;segment_size);
</span><br>
<span class="quotelev1">&gt;   component-&gt;my_segment = opal_shmem_segment_attach (&amp;component-&gt;seg_ds);
</span><br>
<span class="quotelev1">&gt; } else {
</span><br>
<span class="quotelev1">&gt;   mmap (NULL, component-&gt;segment_size, PROT_READ | PROT_WRITE, MAP_ANONYMOUS
</span><br>
<span class="quotelev1">&gt; | MAP_SHARED, -1, 0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But opal_shmem_segment_attach (from mmap module) ends with:
</span><br>
<span class="quotelev1">&gt;     /* update returned base pointer with an offset that hides our stuff */
</span><br>
<span class="quotelev1">&gt;     return (ds_buf-&gt;seg_base_addr + sizeof(opal_shmem_seg_hdr_t));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So mca_btl_vader_component_close() should in that case call
</span><br>
<span class="quotelev1">&gt; opal_shmem_segment_dettach() instead of munmap.
</span><br>
<span class="quotelev1">&gt; Or actually, as at that point shmem_mmap module cleanup code is already
</span><br>
<span class="quotelev1">&gt; done, vader could/should just skip cleanup part?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe I should ask first how does that setup/cleanup work on normal Linux
</span><br>
<span class="quotelev1">&gt; system?
</span><br>
<span class="quotelev1">&gt; Is mmap called twice, and vader and shmem_mmap module each uses different
</span><br>
<span class="quotelev1">&gt; address (so vader munmap is indeed required in that case)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second question.
</span><br>
<span class="quotelev1">&gt; With two threads in one process, I got attempt to
</span><br>
<span class="quotelev1">&gt; opal_shmem_segment_dettach() and munmap() on same mmap-ed address, from both
</span><br>
<span class="quotelev1">&gt; threads. I 'fixed' that by replacing &quot;ds_buf-&gt;seg_cpid = getpid()&quot; with
</span><br>
<span class="quotelev1">&gt; gettid(), and then each thread munmap-s only address allocated by itself. Is
</span><br>
<span class="quotelev1">&gt; that correct? Or is it possible, that the second thread might still try to
</span><br>
<span class="quotelev1">&gt; access data at that address?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BR Justin
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18417.php">http://www.open-mpi.org/community/lists/devel/2015/12/18417.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18419/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18420.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18418.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>In reply to:</strong> <a href="18417.php">Justin Cinkelj: "[OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18420.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
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

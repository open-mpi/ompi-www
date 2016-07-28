<?
$subject_val = "[OMPI devel] vader and mmap_shmem module cleanup problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 05:18:20 2015" -->
<!-- isoreceived="20151215101820" -->
<!-- sent="Tue, 15 Dec 2015 11:18:11 +0100" -->
<!-- isosent="20151215101811" -->
<!-- name="Justin Cinkelj" -->
<!-- email="justin.cinkelj_at_[hidden]" -->
<!-- subject="[OMPI devel] vader and mmap_shmem module cleanup problem" -->
<!-- id="566FE8E3.9020908_at_xlab.si" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] vader and mmap_shmem module cleanup problem<br>
<strong>From:</strong> Justin Cinkelj (<em>justin.cinkelj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-15 05:18:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18418.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18416.php">Jeff Squyres (jsquyres): "[OMPI devel] Travis testing of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18418.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Reply:</strong> <a href="18418.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Reply:</strong> <a href="18419.php">Nathan Hjelm: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Reply:</strong> <a href="18420.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to port Open MPI to OS with threads instead of processes. 
<br>
Currently, during MPI_Finalize, I get attempt to call munmap first with 
<br>
address of 0x200000c00000 and later 0x200000c00008.
<br>
<p>mca_btl_vader_component_close():
<br>
munmap (mca_btl_vader_component.my_segment, 
<br>
mca_btl_vader_component.segment_size)
<br>
<p>mca_btl_vader_component_init():
<br>
if(MCA_BTL_VADER_XPMEM != mca_btl_vader_component.single_copy_mechanism) {
<br>
&nbsp;&nbsp;&nbsp;opal_shmem_segment_create (&amp;component-&gt;seg_ds, sm_file, 
<br>
component-&gt;segment_size);
<br>
&nbsp;&nbsp;&nbsp;component-&gt;my_segment = opal_shmem_segment_attach (&amp;component-&gt;seg_ds);
<br>
} else {
<br>
&nbsp;&nbsp;&nbsp;mmap (NULL, component-&gt;segment_size, PROT_READ | PROT_WRITE, 
<br>
MAP_ANONYMOUS | MAP_SHARED, -1, 0);
<br>
}
<br>
<p>But opal_shmem_segment_attach (from mmap module) ends with:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* update returned base pointer with an offset that hides our stuff */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (ds_buf-&gt;seg_base_addr + sizeof(opal_shmem_seg_hdr_t));
<br>
<p>So mca_btl_vader_component_close() should in that case call 
<br>
opal_shmem_segment_dettach() instead of munmap.
<br>
Or actually, as at that point shmem_mmap module cleanup code is already 
<br>
done, vader could/should just skip cleanup part?
<br>
<p>Maybe I should ask first how does that setup/cleanup work on normal 
<br>
Linux system?
<br>
Is mmap called twice, and vader and shmem_mmap module each uses 
<br>
different address (so vader munmap is indeed required in that case)?
<br>
<p>Second question.
<br>
With two threads in one process, I got attempt to 
<br>
opal_shmem_segment_dettach() and munmap() on same mmap-ed address, from 
<br>
both threads. I 'fixed' that by replacing &quot;ds_buf-&gt;seg_cpid = getpid()&quot; 
<br>
with gettid(), and then each thread munmap-s only address allocated by 
<br>
itself. Is that correct? Or is it possible, that the second thread might 
<br>
still try to access data at that address?
<br>
<p>BR Justin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18418.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18416.php">Jeff Squyres (jsquyres): "[OMPI devel] Travis testing of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18418.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Reply:</strong> <a href="18418.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Reply:</strong> <a href="18419.php">Nathan Hjelm: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Reply:</strong> <a href="18420.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
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

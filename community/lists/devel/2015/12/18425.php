<?
$subject_val = "Re: [OMPI devel] vader and mmap_shmem module cleanup problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 04:44:40 2015" -->
<!-- isoreceived="20151216094440" -->
<!-- sent="Wed, 16 Dec 2015 10:44:32 +0100" -->
<!-- isosent="20151216094432" -->
<!-- name="Justin Cinkelj" -->
<!-- email="justin.cinkelj_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vader and mmap_shmem module cleanup problem" -->
<!-- id="56713280.90405_at_xlab.si" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5v46=AEqomjnZA+vfP+736kWn2+n4p-Hh_FkKi9FGUO_A_at_mail.gmail.com" -->
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
<strong>From:</strong> Justin Cinkelj (<em>justin.cinkelj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-16 04:44:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18426.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18424.php">Ralph Castain: "[OMPI devel] MTT on Mac"</a>
<li><strong>In reply to:</strong> <a href="18418.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18427.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Reply:</strong> <a href="18427.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vader is for intra-node communication only, right? So for inter-node 
<br>
communication some other mechanism will be used anyway.
<br>
Why would be even better to write a new btl? To avoid memcpy (knem would 
<br>
use it, if I understand you correctly; I guess code assumes that 
<br>
multiple processes on same node have isolated address spaces).
<br>
<p>Fork + execve was one of first problems, yes. I replaced that with OSv 
<br>
specific calls (ignore fork, and instead of execve start given binary in 
<br>
new thread). The global variables required OSv modification - the guys 
<br>
from <a href="http://osv.io/">http://osv.io/</a> took care of that (I was surprised that at the end, 
<br>
the patches were really small and elegant). So while there are no real 
<br>
processes, new binary / ELF file is loaded at different address then the 
<br>
rest of OS - so it has separate global variables, and separate environ 
<br>
too. Other resources like file descriptors are still shared.
<br>
<p>BR Justin
<br>
<p>On 15. 12. 2015 14:55, Gilles Gouaillardet wrote:
<br>
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
<span class="quotelev1">&gt; that being said, a more elegant approach would be to create a new 
</span><br>
<span class="quotelev1">&gt; module in the shmem framework
</span><br>
<span class="quotelev1">&gt; basically, create = malloc, attach = return the malloc'ed address, 
</span><br>
<span class="quotelev1">&gt; detach = noop, destroy = free
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and an even better approach would be to write your own btl that 
</span><br>
<span class="quotelev1">&gt; replaces vader.
</span><br>
<span class="quotelev1">&gt; basically, vader can use the knem module to write into an other 
</span><br>
<span class="quotelev1">&gt; process address space.
</span><br>
<span class="quotelev1">&gt; since your os is thread only, knem invocation would become a simple 
</span><br>
<span class="quotelev1">&gt; memcpy.
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
<span class="quotelev1">&gt; setting some environment variables. it seems porting ompi to this new 
</span><br>
<span class="quotelev1">&gt; os was not so painful, and I would have expected some issues with the 
</span><br>
<span class="quotelev1">&gt; global variables, and some race conditions with the environment.
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
<span class="quotelev1">&gt; On Tuesday, December 15, 2015, Justin Cinkelj &lt;justin.cinkelj_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:justin.cinkelj_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm trying to port Open MPI to OS with threads instead of
</span><br>
<span class="quotelev1">&gt;     processes. Currently, during MPI_Finalize, I get attempt to call
</span><br>
<span class="quotelev1">&gt;     munmap first with address of 0x200000c00000 and later 0x200000c00008.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mca_btl_vader_component_close():
</span><br>
<span class="quotelev1">&gt;     munmap (mca_btl_vader_component.my_segment,
</span><br>
<span class="quotelev1">&gt;     mca_btl_vader_component.segment_size)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mca_btl_vader_component_init():
</span><br>
<span class="quotelev1">&gt;     if(MCA_BTL_VADER_XPMEM !=
</span><br>
<span class="quotelev1">&gt;     mca_btl_vader_component.single_copy_mechanism) {
</span><br>
<span class="quotelev1">&gt;       opal_shmem_segment_create (&amp;component-&gt;seg_ds, sm_file,
</span><br>
<span class="quotelev1">&gt;     component-&gt;segment_size);
</span><br>
<span class="quotelev1">&gt;       component-&gt;my_segment = opal_shmem_segment_attach
</span><br>
<span class="quotelev1">&gt;     (&amp;component-&gt;seg_ds);
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;       mmap (NULL, component-&gt;segment_size, PROT_READ | PROT_WRITE,
</span><br>
<span class="quotelev1">&gt;     MAP_ANONYMOUS | MAP_SHARED, -1, 0);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     But opal_shmem_segment_attach (from mmap module) ends with:
</span><br>
<span class="quotelev1">&gt;         /* update returned base pointer with an offset that hides our
</span><br>
<span class="quotelev1">&gt;     stuff */
</span><br>
<span class="quotelev1">&gt;         return (ds_buf-&gt;seg_base_addr + sizeof(opal_shmem_seg_hdr_t));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So mca_btl_vader_component_close() should in that case call
</span><br>
<span class="quotelev1">&gt;     opal_shmem_segment_dettach() instead of munmap.
</span><br>
<span class="quotelev1">&gt;     Or actually, as at that point shmem_mmap module cleanup code is
</span><br>
<span class="quotelev1">&gt;     already done, vader could/should just skip cleanup part?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Maybe I should ask first how does that setup/cleanup work on
</span><br>
<span class="quotelev1">&gt;     normal Linux system?
</span><br>
<span class="quotelev1">&gt;     Is mmap called twice, and vader and shmem_mmap module each uses
</span><br>
<span class="quotelev1">&gt;     different address (so vader munmap is indeed required in that case)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Second question.
</span><br>
<span class="quotelev1">&gt;     With two threads in one process, I got attempt to
</span><br>
<span class="quotelev1">&gt;     opal_shmem_segment_dettach() and munmap() on same mmap-ed address,
</span><br>
<span class="quotelev1">&gt;     from both threads. I 'fixed' that by replacing &quot;ds_buf-&gt;seg_cpid =
</span><br>
<span class="quotelev1">&gt;     getpid()&quot; with gettid(), and then each thread munmap-s only
</span><br>
<span class="quotelev1">&gt;     address allocated by itself. Is that correct? Or is it possible,
</span><br>
<span class="quotelev1">&gt;     that the second thread might still try to access data at that address?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     BR Justin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18417.php">http://www.open-mpi.org/community/lists/devel/2015/12/18417.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18418.php">http://www.open-mpi.org/community/lists/devel/2015/12/18418.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18425/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18426.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Previous message:</strong> <a href="18424.php">Ralph Castain: "[OMPI devel] MTT on Mac"</a>
<li><strong>In reply to:</strong> <a href="18418.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18427.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>Reply:</strong> <a href="18427.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
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

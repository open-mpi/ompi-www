<?
$subject_val = "Re: [OMPI devel] vader and mmap_shmem module cleanup problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 06:28:13 2015" -->
<!-- isoreceived="20151216112813" -->
<!-- sent="Wed, 16 Dec 2015 12:28:02 +0100" -->
<!-- isosent="20151216112802" -->
<!-- name="Justin Cinkelj" -->
<!-- email="justin.cinkelj_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vader and mmap_shmem module cleanup problem" -->
<!-- id="56714AC2.9030502_at_xlab.si" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5v6DcT_yh-M191Pnn8pcodN7paMjw3zayJg3dCj76_F=g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-12-16 06:28:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18429.php">Geoffrey Paulsen: "[OMPI devel] Hotels for Feb Face 2 Face"</a>
<li><strong>Previous message:</strong> <a href="18427.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>In reply to:</strong> <a href="18427.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18419.php">Nathan Hjelm: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for clarification. I will go via new btl module path.
<br>
I used -btl self,tcp in past, to get things working (when dealing with 
<br>
exec and fork problems). So at the moment, Open MPI runs fine, we were 
<br>
able to run some test jobs, to get some preliminary performance 
<br>
measurements etc. Only the cleanup part was still problematic (and I 
<br>
lack(ed) the Open MPI knowledge to be able to understand, how _should_ 
<br>
be things working).
<br>
<p>BR Justin
<br>
<p>On 16. 12. 2015 12:20, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Justin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; knem allows a process to write into the address space of an other 
</span><br>
<span class="quotelev1">&gt; process, to do zero copy.
</span><br>
<span class="quotelev1">&gt; in the case of osv, threads can simply do a memcpy(), and I doubt knew 
</span><br>
<span class="quotelev1">&gt; is even available.
</span><br>
<span class="quotelev1">&gt; so a new btl that uses memcpy would be optimal on osv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; one option is to starts from the vader btl, and replace knem 
</span><br>
<span class="quotelev1">&gt; invocation with memcpy()
</span><br>
<span class="quotelev1">&gt; an other option could be to extend the self btl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but once again, this is for performance only, using tcp btl only 
</span><br>
<span class="quotelev1">&gt; should be enough to get things work.
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
<span class="quotelev1">&gt; On Wednesday, December 16, 2015, Justin Cinkelj 
</span><br>
<span class="quotelev1">&gt; &lt;justin.cinkelj_at_[hidden] &lt;mailto:justin.cinkelj_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Vader is for intra-node communication only, right? So for
</span><br>
<span class="quotelev1">&gt;     inter-node communication some other mechanism will be used anyway.
</span><br>
<span class="quotelev1">&gt;     Why would be even better to write a new btl? To avoid memcpy (knem
</span><br>
<span class="quotelev1">&gt;     would use it, if I understand you correctly; I guess code assumes
</span><br>
<span class="quotelev1">&gt;     that multiple processes on same node have isolated address spaces).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Fork + execve was one of first problems, yes. I replaced that with
</span><br>
<span class="quotelev1">&gt;     OSv specific calls (ignore fork, and instead of execve start given
</span><br>
<span class="quotelev1">&gt;     binary in new thread). The global variables required OSv
</span><br>
<span class="quotelev1">&gt;     modification - the guys from <a href="http://osv.io/">http://osv.io/</a> took care of that (I
</span><br>
<span class="quotelev1">&gt;     was surprised that at the end, the patches were really small and
</span><br>
<span class="quotelev1">&gt;     elegant). So while there are no real processes, new binary / ELF
</span><br>
<span class="quotelev1">&gt;     file is loaded at different address then the rest of OS - so it
</span><br>
<span class="quotelev1">&gt;     has separate global variables, and separate environ too. Other
</span><br>
<span class="quotelev1">&gt;     resources like file descriptors are still shared.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     BR Justin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 15. 12. 2015 14:55, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Justin,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     at first glance, vader should be symmetric (e.g.
</span><br>
<span class="quotelev2">&gt;&gt;     call opal_shmem_segment_dettach() instead of munmap()
</span><br>
<span class="quotelev2">&gt;&gt;     Nathan, can you please comment ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     using tid instead of pid should also do the trick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     that being said, a more elegant approach would be to create a new
</span><br>
<span class="quotelev2">&gt;&gt;     module in the shmem framework
</span><br>
<span class="quotelev2">&gt;&gt;     basically, create = malloc, attach = return the malloc'ed
</span><br>
<span class="quotelev2">&gt;&gt;     address, detach = noop, destroy = free
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     and an even better approach would be to write your own btl that
</span><br>
<span class="quotelev2">&gt;&gt;     replaces vader.
</span><br>
<span class="quotelev2">&gt;&gt;     basically, vader can use the knem module to write into an other
</span><br>
<span class="quotelev2">&gt;&gt;     process address space.
</span><br>
<span class="quotelev2">&gt;&gt;     since your os is thread only, knem invocation would become a
</span><br>
<span class="quotelev2">&gt;&gt;     simple memcpy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     makes sense ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     as a side note,
</span><br>
<span class="quotelev2">&gt;&gt;     ompi uses global variables, and orted forks and exec MPI tasks
</span><br>
<span class="quotelev2">&gt;&gt;     after setting some environment variables. it seems porting ompi
</span><br>
<span class="quotelev2">&gt;&gt;     to this new os was not so painful, and I would have expected some
</span><br>
<span class="quotelev2">&gt;&gt;     issues with the global variables, and some race conditions with
</span><br>
<span class="quotelev2">&gt;&gt;     the environment.
</span><br>
<span class="quotelev2">&gt;&gt;     did you already solve these issues ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Tuesday, December 15, 2015, Justin Cinkelj
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;justin.cinkelj_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','justin.cinkelj_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I'm trying to port Open MPI to OS with threads instead of
</span><br>
<span class="quotelev2">&gt;&gt;         processes. Currently, during MPI_Finalize, I get attempt to
</span><br>
<span class="quotelev2">&gt;&gt;         call munmap first with address of 0x200000c00000 and later
</span><br>
<span class="quotelev2">&gt;&gt;         0x200000c00008.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         mca_btl_vader_component_close():
</span><br>
<span class="quotelev2">&gt;&gt;         munmap (mca_btl_vader_component.my_segment,
</span><br>
<span class="quotelev2">&gt;&gt;         mca_btl_vader_component.segment_size)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         mca_btl_vader_component_init():
</span><br>
<span class="quotelev2">&gt;&gt;         if(MCA_BTL_VADER_XPMEM !=
</span><br>
<span class="quotelev2">&gt;&gt;         mca_btl_vader_component.single_copy_mechanism) {
</span><br>
<span class="quotelev2">&gt;&gt;           opal_shmem_segment_create (&amp;component-&gt;seg_ds, sm_file,
</span><br>
<span class="quotelev2">&gt;&gt;         component-&gt;segment_size);
</span><br>
<span class="quotelev2">&gt;&gt;           component-&gt;my_segment = opal_shmem_segment_attach
</span><br>
<span class="quotelev2">&gt;&gt;         (&amp;component-&gt;seg_ds);
</span><br>
<span class="quotelev2">&gt;&gt;         } else {
</span><br>
<span class="quotelev2">&gt;&gt;           mmap (NULL, component-&gt;segment_size, PROT_READ |
</span><br>
<span class="quotelev2">&gt;&gt;         PROT_WRITE, MAP_ANONYMOUS | MAP_SHARED, -1, 0);
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         But opal_shmem_segment_attach (from mmap module) ends with:
</span><br>
<span class="quotelev2">&gt;&gt;             /* update returned base pointer with an offset that hides
</span><br>
<span class="quotelev2">&gt;&gt;         our stuff */
</span><br>
<span class="quotelev2">&gt;&gt;             return (ds_buf-&gt;seg_base_addr +
</span><br>
<span class="quotelev2">&gt;&gt;         sizeof(opal_shmem_seg_hdr_t));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         So mca_btl_vader_component_close() should in that case call
</span><br>
<span class="quotelev2">&gt;&gt;         opal_shmem_segment_dettach() instead of munmap.
</span><br>
<span class="quotelev2">&gt;&gt;         Or actually, as at that point shmem_mmap module cleanup code
</span><br>
<span class="quotelev2">&gt;&gt;         is already done, vader could/should just skip cleanup part?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Maybe I should ask first how does that setup/cleanup work on
</span><br>
<span class="quotelev2">&gt;&gt;         normal Linux system?
</span><br>
<span class="quotelev2">&gt;&gt;         Is mmap called twice, and vader and shmem_mmap module each
</span><br>
<span class="quotelev2">&gt;&gt;         uses different address (so vader munmap is indeed required in
</span><br>
<span class="quotelev2">&gt;&gt;         that case)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Second question.
</span><br>
<span class="quotelev2">&gt;&gt;         With two threads in one process, I got attempt to
</span><br>
<span class="quotelev2">&gt;&gt;         opal_shmem_segment_dettach() and munmap() on same mmap-ed
</span><br>
<span class="quotelev2">&gt;&gt;         address, from both threads. I 'fixed' that by replacing
</span><br>
<span class="quotelev2">&gt;&gt;         &quot;ds_buf-&gt;seg_cpid = getpid()&quot; with gettid(), and then each
</span><br>
<span class="quotelev2">&gt;&gt;         thread munmap-s only address allocated by itself. Is that
</span><br>
<span class="quotelev2">&gt;&gt;         correct? Or is it possible, that the second thread might
</span><br>
<span class="quotelev2">&gt;&gt;         still try to access data at that address?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         BR Justin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18417.php">http://www.open-mpi.org/community/lists/devel/2015/12/18417.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/12/18418.php">http://www.open-mpi.org/community/lists/devel/2015/12/18418.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18427.php">http://www.open-mpi.org/community/lists/devel/2015/12/18427.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18428/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18429.php">Geoffrey Paulsen: "[OMPI devel] Hotels for Feb Face 2 Face"</a>
<li><strong>Previous message:</strong> <a href="18427.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<li><strong>In reply to:</strong> <a href="18427.php">Gilles Gouaillardet: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18419.php">Nathan Hjelm: "Re: [OMPI devel] vader and mmap_shmem module cleanup problem"</a>
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

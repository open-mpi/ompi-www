<?
$subject_val = "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 17:23:49 2012" -->
<!-- isoreceived="20120112222349" -->
<!-- sent="Thu, 12 Jan 2012 15:23:44 -0700 (MST)" -->
<!-- isosent="20120112222344" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption" -->
<!-- id="alpine.OSX.2.00.1201121521010.29315_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1326406245.20821.140661022709677_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 17:23:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18158.php">Gabriele Fatigati: "[OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18156.php">V. Ram: "[OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>In reply to:</strong> <a href="18156.php">V. Ram: "[OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18165.php">Yevgeny Kliteynik: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Reply:</strong> <a href="18165.php">Yevgeny Kliteynik: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would start by adjusting btl_openib_receive_queues . The default uses a per-peer QP which can eat up a lot of memory. I recommend using no per-peer and several shared receive queues. We use S,4096,1024:S,12288,512:S,65536,512
<br>
<p>-Nathan
<br>
<p>On Thu, 12 Jan 2012, V. Ram wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI IB Gurus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have some slightly older InfiniBand-equipped nodes with IB which have
</span><br>
<span class="quotelev1">&gt; less RAM than we'd like, and on which we tend to run jobs that can span
</span><br>
<span class="quotelev1">&gt; 16-32 nodes of this type.  The jobs themselves tend to run on the heavy
</span><br>
<span class="quotelev1">&gt; side in terms of their own memory requirements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we used to run on an older Intel MPI, these jobs managed to run
</span><br>
<span class="quotelev1">&gt; within the available RAM without paging out to disk.  Now using Open MPI
</span><br>
<span class="quotelev1">&gt; 1.5.3, we can end up paging to disk or even running out of memory for
</span><br>
<span class="quotelev1">&gt; the same codes and exact same jobs and node distributions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm suspecting that I can reduce overall memory consumption by tuning
</span><br>
<span class="quotelev1">&gt; the IB-related memory that Open MPI consumes.  I've looked at the FAQ:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#limiting-registered-memory-usage">http://www.open-mpi.org/faq/?category=openfabrics#limiting-registered-memory-usage</a>
</span><br>
<span class="quotelev1">&gt; , but I'm still not certain about where I should start.  Again, this is
</span><br>
<span class="quotelev1">&gt; all for 1.5.3 (we are willing to update to 1.5.4 or 1.5.5 when released,
</span><br>
<span class="quotelev1">&gt; if it would help).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. It looks like there are several independent IB BTL MCA parameters to
</span><br>
<span class="quotelev1">&gt; try adjusting: i. mpool_rdma_rcache_size_limit, ii.
</span><br>
<span class="quotelev1">&gt; btl_openib_free_list_max , iii. btl_openib_max_send_size , iv.
</span><br>
<span class="quotelev1">&gt; btl_openib_eager_rdma_num, v. btl_openib_max_eager_rdma, vi.
</span><br>
<span class="quotelev1">&gt; btl_openib_eager_limit .  Have I missed any others parameters that
</span><br>
<span class="quotelev1">&gt; impact InfiniBand-related memory usage?  These parameters are listed as
</span><br>
<span class="quotelev1">&gt; affecting registered memory.  Are there parameters that affect
</span><br>
<span class="quotelev1">&gt; unregistered IB-related memory consumption on the part of Open MPI
</span><br>
<span class="quotelev1">&gt; itself?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Where should I start with this?  For example, is it worth trying to
</span><br>
<span class="quotelev1">&gt; adjust any of the eager parameters, or are the bulk of the memory
</span><br>
<span class="quotelev1">&gt; requirements coming from the mpool_rdma_rcache_size_limit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Are there any gross/overall &quot;master&quot; parameters that will set limits,
</span><br>
<span class="quotelev1">&gt; but keep the various buffers in intelligent proportion to one another,
</span><br>
<span class="quotelev1">&gt; or will I need to manually adjust each set of buffers independently?  If
</span><br>
<span class="quotelev1">&gt; the latter, are there any guidelines on the relative proportions between
</span><br>
<span class="quotelev1">&gt; buffers, or overall recommendations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - A fast, anti-spam email service.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18158.php">Gabriele Fatigati: "[OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18156.php">V. Ram: "[OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>In reply to:</strong> <a href="18156.php">V. Ram: "[OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18165.php">Yevgeny Kliteynik: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Reply:</strong> <a href="18165.php">Yevgeny Kliteynik: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
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

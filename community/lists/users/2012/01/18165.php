<?
$subject_val = "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 15 10:34:32 2012" -->
<!-- isoreceived="20120115153432" -->
<!-- sent="Sun, 15 Jan 2012 17:34:22 +0200" -->
<!-- isosent="20120115153422" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption" -->
<!-- id="4F12F1FE.1090404_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.OSX.2.00.1201121521010.29315_at_panthera.lanl.gov" -->
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
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-15 10:34:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18166.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Previous message:</strong> <a href="18164.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>In reply to:</strong> <a href="18157.php">Nathan Hjelm: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18483.php">Shamis, Pavel: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18483.php">Shamis, Pavel: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 13-Jan-12 12:23 AM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; I would start by adjusting btl_openib_receive_queues . The default uses
</span><br>
<span class="quotelev1">&gt; a per-peer QP which can eat up a lot of memory. I recommend using no
</span><br>
<span class="quotelev1">&gt; per-peer and several shared receive queues.
</span><br>
<span class="quotelev1">&gt; We use S,4096,1024:S,12288,512:S,65536,512
</span><br>
<p>And here's the FAQ entry that explains the logic behind this voodoo option:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues">http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues</a>
<br>
<p>-- YK
<br>
<p><span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 12 Jan 2012, V. Ram wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI IB Gurus,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have some slightly older InfiniBand-equipped nodes with IB which have
</span><br>
<span class="quotelev2">&gt;&gt; less RAM than we'd like, and on which we tend to run jobs that can span
</span><br>
<span class="quotelev2">&gt;&gt; 16-32 nodes of this type. The jobs themselves tend to run on the heavy
</span><br>
<span class="quotelev2">&gt;&gt; side in terms of their own memory requirements.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When we used to run on an older Intel MPI, these jobs managed to run
</span><br>
<span class="quotelev2">&gt;&gt; within the available RAM without paging out to disk. Now using Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.5.3, we can end up paging to disk or even running out of memory for
</span><br>
<span class="quotelev2">&gt;&gt; the same codes and exact same jobs and node distributions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm suspecting that I can reduce overall memory consumption by tuning
</span><br>
<span class="quotelev2">&gt;&gt; the IB-related memory that Open MPI consumes. I've looked at the FAQ:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#limiting-registered-memory-usage">http://www.open-mpi.org/faq/?category=openfabrics#limiting-registered-memory-usage</a>
</span><br>
<span class="quotelev2">&gt;&gt; , but I'm still not certain about where I should start. Again, this is
</span><br>
<span class="quotelev2">&gt;&gt; all for 1.5.3 (we are willing to update to 1.5.4 or 1.5.5 when released,
</span><br>
<span class="quotelev2">&gt;&gt; if it would help).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. It looks like there are several independent IB BTL MCA parameters to
</span><br>
<span class="quotelev2">&gt;&gt; try adjusting: i. mpool_rdma_rcache_size_limit, ii.
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_free_list_max , iii. btl_openib_max_send_size , iv.
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_eager_rdma_num, v. btl_openib_max_eager_rdma, vi.
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_eager_limit . Have I missed any others parameters that
</span><br>
<span class="quotelev2">&gt;&gt; impact InfiniBand-related memory usage? These parameters are listed as
</span><br>
<span class="quotelev2">&gt;&gt; affecting registered memory. Are there parameters that affect
</span><br>
<span class="quotelev2">&gt;&gt; unregistered IB-related memory consumption on the part of Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; itself?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Where should I start with this? For example, is it worth trying to
</span><br>
<span class="quotelev2">&gt;&gt; adjust any of the eager parameters, or are the bulk of the memory
</span><br>
<span class="quotelev2">&gt;&gt; requirements coming from the mpool_rdma_rcache_size_limit?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Are there any gross/overall &quot;master&quot; parameters that will set limits,
</span><br>
<span class="quotelev2">&gt;&gt; but keep the various buffers in intelligent proportion to one another,
</span><br>
<span class="quotelev2">&gt;&gt; or will I need to manually adjust each set of buffers independently? If
</span><br>
<span class="quotelev2">&gt;&gt; the latter, are there any guidelines on the relative proportions between
</span><br>
<span class="quotelev2">&gt;&gt; buffers, or overall recommendations?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - A fast, anti-spam email service.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="18166.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Previous message:</strong> <a href="18164.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>In reply to:</strong> <a href="18157.php">Nathan Hjelm: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18483.php">Shamis, Pavel: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18483.php">Shamis, Pavel: "Re: [OMPI users] IB Memory Requirements, adjusting for reduced memory consumption"</a>
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

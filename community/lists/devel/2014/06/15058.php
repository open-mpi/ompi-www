<?
$subject_val = "Re: [OMPI devel] trunk broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 04:22:49 2014" -->
<!-- isoreceived="20140625082249" -->
<!-- sent="Wed, 25 Jun 2014 03:22:49 -0500" -->
<!-- isosent="20140625082249" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk broken" -->
<!-- id="CAMD57ocpdO+Gn06YxdK9Hr8ojv4LcbiUjwPAJG=z1G-ZWT+Z=Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53AA6810.9070305_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 04:22:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15059.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15057.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>In reply to:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15059.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We should have given more of a &quot;heads up&quot; here. We recognize that the trunk
<br>
may well become unstable as we can't test all the variations, and clearly
<br>
some timing issues are going to arise with this change. Our hope is that we
<br>
can iron them out quickly. If not, then we'll revert and try again.
<br>
<p>You also may find that you need to disable coll/ml - that is one we've
<br>
identified here and Nathan should have a fix for shortly.
<br>
<p><p><p>On Wed, Jun 25, 2014 at 1:11 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you try again with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=vader,self,openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it seems the sm module causes a hang
</span><br>
<span class="quotelev1">&gt; (which later causes the timeout sending a SIGSEGV)
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
<span class="quotelev1">&gt; On 2014/06/25 14:22, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; The following commit broke trunk in jenkins:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Per the OMPI developer conference, remove the last vestiges of
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_USE_PROGRESS_THREADS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *22:15:09* +
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib*22:15:09*
</span><br>
<span class="quotelev2">&gt; &gt; + OMPI_MCA_scoll_fca_enable=1*22:15:09* +
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_scoll_fca_np=0*22:15:09* + OMPI_MCA_pml=ob1*22:15:09* +
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_btl=sm,self,openib*22:15:09* + OMPI_MCA_spml=yoda*22:15:09* +
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_memheap_mr_interleave_factor=8*22:15:09* +
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_memheap=ptmalloc*22:15:09* +
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_btl_openib_if_include=mlx4_0:1*22:15:09* +
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_rmaps_base_dist_hca=mlx4_0*22:15:09* +
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_memheap_base_hca_name=mlx4_0*22:15:09* +
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_rmaps_base_mapping_policy=dist:mlx4_0*22:15:09* +
</span><br>
<span class="quotelev2">&gt; &gt; MXM_RDMA_PORTS=mlx4_0:1*22:15:09* +
</span><br>
<span class="quotelev2">&gt; &gt; SHMEM_SYMMETRIC_HEAP_SIZE=1024M*22:15:09* + timeout -s SIGSEGV 3m
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/bin/oshrun
</span><br>
<span class="quotelev2">&gt; &gt; -np 8
</span><br>
<span class="quotelev1">&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/examples/hello_shmem*22:15:09*
</span><br>
<span class="quotelev2">&gt; &gt; [vegas12:08101] *** Process received signal ****22:15:09*
</span><br>
<span class="quotelev2">&gt; &gt; [vegas12:08101] Signal: Segmentation fault (11)*22:15:09*
</span><br>
<span class="quotelev2">&gt; &gt; [vegas12:08101] Signal code: Address not mapped (1)*22:15:09*
</span><br>
<span class="quotelev2">&gt; &gt; [vegas12:08101] Failing at address: (nil)*22:15:09* [vegas12:08101] [
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15055.php">http://www.open-mpi.org/community/lists/devel/2014/06/15055.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15058/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15059.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15057.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>In reply to:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15059.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
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

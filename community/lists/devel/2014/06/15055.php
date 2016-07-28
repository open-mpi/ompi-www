<?
$subject_val = "Re: [OMPI devel] trunk broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 02:11:22 2014" -->
<!-- isoreceived="20140625061122" -->
<!-- sent="Wed, 25 Jun 2014 15:11:28 +0900" -->
<!-- isosent="20140625061128" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk broken" -->
<!-- id="53AA6810.9070305_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1KyYcXEVaLAAzJvJQJ3C595q=7DeRjmx91xo381xR3GPnUg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 02:11:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15056.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Previous message:</strong> <a href="15054.php">Mike Dubman: "[OMPI devel] trunk broken"</a>
<li><strong>In reply to:</strong> <a href="15054.php">Mike Dubman: "[OMPI devel] trunk broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15059.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15060.php">Mike Dubman: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15061.php">Mike Dubman: "Re: [OMPI devel] trunk broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike,
<br>
<p>could you try again with
<br>
<p>OMPI_MCA_btl=vader,self,openib
<br>
<p>it seems the sm module causes a hang
<br>
(which later causes the timeout sending a SIGSEGV)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/06/25 14:22, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; The following commit broke trunk in jenkins:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Per the OMPI developer conference, remove the last vestiges of
</span><br>
<span class="quotelev1">&gt; OMPI_USE_PROGRESS_THREADS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *22:15:09* + LD_LIBRARY_PATH=/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib*22:15:09*
</span><br>
<span class="quotelev1">&gt; + OMPI_MCA_scoll_fca_enable=1*22:15:09* +
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_scoll_fca_np=0*22:15:09* + OMPI_MCA_pml=ob1*22:15:09* +
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=sm,self,openib*22:15:09* + OMPI_MCA_spml=yoda*22:15:09* +
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_memheap_mr_interleave_factor=8*22:15:09* +
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_memheap=ptmalloc*22:15:09* +
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_openib_if_include=mlx4_0:1*22:15:09* +
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rmaps_base_dist_hca=mlx4_0*22:15:09* +
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_memheap_base_hca_name=mlx4_0*22:15:09* +
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rmaps_base_mapping_policy=dist:mlx4_0*22:15:09* +
</span><br>
<span class="quotelev1">&gt; MXM_RDMA_PORTS=mlx4_0:1*22:15:09* +
</span><br>
<span class="quotelev1">&gt; SHMEM_SYMMETRIC_HEAP_SIZE=1024M*22:15:09* + timeout -s SIGSEGV 3m
</span><br>
<span class="quotelev1">&gt; /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/bin/oshrun
</span><br>
<span class="quotelev1">&gt; -np 8 /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/examples/hello_shmem*22:15:09*
</span><br>
<span class="quotelev1">&gt; [vegas12:08101] *** Process received signal ****22:15:09*
</span><br>
<span class="quotelev1">&gt; [vegas12:08101] Signal: Segmentation fault (11)*22:15:09*
</span><br>
<span class="quotelev1">&gt; [vegas12:08101] Signal code: Address not mapped (1)*22:15:09*
</span><br>
<span class="quotelev1">&gt; [vegas12:08101] Failing at address: (nil)*22:15:09* [vegas12:08101] [
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15056.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Previous message:</strong> <a href="15054.php">Mike Dubman: "[OMPI devel] trunk broken"</a>
<li><strong>In reply to:</strong> <a href="15054.php">Mike Dubman: "[OMPI devel] trunk broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15059.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15060.php">Mike Dubman: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15061.php">Mike Dubman: "Re: [OMPI devel] trunk broken"</a>
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

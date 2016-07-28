<?
$subject_val = "Re: [OMPI devel] trunk broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 07:28:37 2014" -->
<!-- isoreceived="20140625112837" -->
<!-- sent="Wed, 25 Jun 2014 14:28:35 +0300" -->
<!-- isosent="20140625112835" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk broken" -->
<!-- id="CAAO1Kyb=uZ=MvakT2tRqHVdcqm1-6GWNQC0+vRMxbhSrBmBUhg_at_mail.gmail.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 07:28:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15060.php">Mike Dubman: "Re: [OMPI devel] trunk broken"</a>
<li><strong>In reply to:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
tried with vader - same crash
<br>
<p>*14:14:22* [vegas12:32068] 7 more processes have sent help message
<br>
help-mca-var.txt / deprecated-mca-env*14:14:22* [vegas12:32068] Set
<br>
MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error
<br>
messages*14:14:22* +
<br>
LD_LIBRARY_PATH=/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib*14:14:22*
<br>
+ OMPI_MCA_scoll_fca_enable=1*14:14:22* +
<br>
OMPI_MCA_scoll_fca_np=0*14:14:22* + OMPI_MCA_pml=ob1*14:14:22* +
<br>
OMPI_MCA_btl=vader,self,openib*14:14:22* +
<br>
OMPI_MCA_spml=yoda*14:14:22* +
<br>
OMPI_MCA_memheap_mr_interleave_factor=8*14:14:22* +
<br>
OMPI_MCA_memheap=ptmalloc*14:14:22* +
<br>
OMPI_MCA_btl_openib_if_include=mlx4_0:1*14:14:22* +
<br>
OMPI_MCA_rmaps_base_dist_hca=mlx4_0*14:14:22* +
<br>
OMPI_MCA_memheap_base_hca_name=mlx4_0*14:14:22* +
<br>
OMPI_MCA_rmaps_base_mapping_policy=dist:mlx4_0*14:14:22* +
<br>
MXM_RDMA_PORTS=mlx4_0:1*14:14:22* +
<br>
SHMEM_SYMMETRIC_HEAP_SIZE=1024M*14:14:22* + timeout -s SIGSEGV 3m
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/bin/oshrun
<br>
-np 8 /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/examples/hello_shmem*14:14:22*
<br>
[vegas12][[4652,1],1][btl_openib_component.c:909:device_destruct]
<br>
Failed to cancel OpenIB progress thread*14:14:22*
<br>
[vegas12][[4652,1],0][btl_openib_component.c:909:device_destruct]
<br>
Failed to cancel OpenIB progress thread*14:14:22*
<br>
--------------------------------------------------------------------------*14:14:22*
<br>
WARNING: The openib BTL was directed to use &quot;eager RDMA&quot; for
<br>
short*14:14:22* messages, but the openib BTL was compiled with
<br>
progress threads*14:14:22* support.  Short eager RDMA is not yet
<br>
supported with progress threads;*14:14:22* its use has been disabled
<br>
in this job.*14:14:22* *14:14:22* This is a warning only; you job will
<br>
attempt to continue.*14:14:22*
<br>
--------------------------------------------------------------------------*14:14:22*
<br>
[vegas12][[4652,1],5][btl_openib_component.c:909:device_destruct]
<br>
Failed to cancel OpenIB progress thread*14:14:22* [vegas12:32108] ***
<br>
Process received signal ****14:14:22* [vegas12:32108] Signal:
<br>
Segmentation fault (11)*14:14:22* [vegas12:32108] Signal code: Address
<br>
not mapped (1)*14:14:22* [vegas12:32108] Failing at address:
<br>
(nil)*14:14:22* [vegas12:32108] [ 0]
<br>
/lib64/libpthread.so.0[0x3937c0f500]*14:14:22* [vegas12:32108] [ 1]
<br>
/usr/lib64/libibverbs.so.1(ibv_destroy_comp_channel+0x16)[0x3b7760bf46]*14:14:22*
<br>
[vegas12:32108] [ 2]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_btl_openib.so(+0xdf02)[0x7ffff3fc1f02]*14:14:22*
<br>
[vegas12:32108] [ 3]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_btl_openib.so(+0xf161)[0x7ffff3fc3161]*14:14:22*
<br>
[vegas12:32108] [ 4]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_btl_openib.so(+0x12ab1)[0x7ffff3fc6ab1]*14:14:22*
<br>
[vegas12:32108] [ 5]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(mca_btl_base_select+0x117)[0x7ffff7a29807]*14:14:22*
<br>
[vegas12:32108] [ 6]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x7ffff41ed7e2]*14:14:22*
<br>
[vegas12:32108] [ 7]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(mca_bml_base_init+0x99)[0x7ffff7a29009]*14:14:22*
<br>
[vegas12:32108] [ 8]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_pml_ob1.so(+0x58b5)[0x7ffff35848b5]*14:14:22*
<br>
[vegas12:32108] [ 9]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(mca_pml_base_select+0x1e0)[0x7ffff7a3c590]*14:14:22*
<br>
[vegas12:32108] [10]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(ompi_mpi_init+0x455)[0x7ffff7a06bf5]*14:14:22*
<br>
[vegas12:32108] [11]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/liboshmem.so.0(oshmem_shmem_init+0xfd)[0x7ffff7ca66dd]*14:14:22*
<br>
[vegas12:32108] [12]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/liboshmem.so.0(shmem_init+0x28)[0x7ffff7ca9328]*14:14:22*
<br>
[vegas12:32108] [13]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/examples/hello_shmem[0x40077d]*14:14:22*
<br>
[vegas12:32108] [14]
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]*14:14:22*
<br>
[vegas12:32108] [15]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/examples/hello_shmem[0x4006a9]*14:14:22*
<br>
[vegas12:32108] *** End of error message ****14:14:22* [vegas12:32112]
<br>
*** Process received signal ****14:14:22* [vegas12:32112] Signal:
<br>
Segmentation fault (11)*14:14:*
<br>
<p><p><p>On Wed, Jun 25, 2014 at 9:11 AM, Gilles Gouaillardet &lt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15060.php">Mike Dubman: "Re: [OMPI devel] trunk broken"</a>
<li><strong>In reply to:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI devel] trunk broken"</a>
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

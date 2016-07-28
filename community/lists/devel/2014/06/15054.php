<?
$subject_val = "[OMPI devel] trunk broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 01:22:38 2014" -->
<!-- isoreceived="20140625052238" -->
<!-- sent="Wed, 25 Jun 2014 08:22:36 +0300" -->
<!-- isosent="20140625052236" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk broken" -->
<!-- id="CAAO1KyYcXEVaLAAzJvJQJ3C595q=7DeRjmx91xo381xR3GPnUg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] trunk broken<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-25 01:22:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15053.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
The following commit broke trunk in jenkins:
<br>
<p><span class="quotelev3">&gt;&gt;&gt;Per the OMPI developer conference, remove the last vestiges of
</span><br>
OMPI_USE_PROGRESS_THREADS
<br>
<p>*22:15:09* + LD_LIBRARY_PATH=/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib*22:15:09*
<br>
+ OMPI_MCA_scoll_fca_enable=1*22:15:09* +
<br>
OMPI_MCA_scoll_fca_np=0*22:15:09* + OMPI_MCA_pml=ob1*22:15:09* +
<br>
OMPI_MCA_btl=sm,self,openib*22:15:09* + OMPI_MCA_spml=yoda*22:15:09* +
<br>
OMPI_MCA_memheap_mr_interleave_factor=8*22:15:09* +
<br>
OMPI_MCA_memheap=ptmalloc*22:15:09* +
<br>
OMPI_MCA_btl_openib_if_include=mlx4_0:1*22:15:09* +
<br>
OMPI_MCA_rmaps_base_dist_hca=mlx4_0*22:15:09* +
<br>
OMPI_MCA_memheap_base_hca_name=mlx4_0*22:15:09* +
<br>
OMPI_MCA_rmaps_base_mapping_policy=dist:mlx4_0*22:15:09* +
<br>
MXM_RDMA_PORTS=mlx4_0:1*22:15:09* +
<br>
SHMEM_SYMMETRIC_HEAP_SIZE=1024M*22:15:09* + timeout -s SIGSEGV 3m
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/bin/oshrun
<br>
-np 8 /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/examples/hello_shmem*22:15:09*
<br>
[vegas12:08101] *** Process received signal ****22:15:09*
<br>
[vegas12:08101] Signal: Segmentation fault (11)*22:15:09*
<br>
[vegas12:08101] Signal code: Address not mapped (1)*22:15:09*
<br>
[vegas12:08101] Failing at address: (nil)*22:15:09* [vegas12:08101] [
<br>
0] /lib64/libpthread.so.0[0x3937c0f500]*22:15:09* [vegas12:08101] [ 1]
<br>
/usr/lib64/libibverbs.so.1(ibv_destroy_comp_channel+0x16)[0x7ffff3785f46]*22:15:09*
<br>
[vegas12:08101] [ 2]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_btl_openib.so(+0xdf02)[0x7ffff3fc1f02]*22:15:09*
<br>
[vegas12:08101] [ 3]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_btl_openib.so(+0xf161)[0x7ffff3fc3161]*22:15:09*
<br>
[vegas12:08101] [ 4]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_btl_openib.so(+0x12b41)[0x7ffff3fc6b41]*22:15:09*
<br>
[vegas12:08101] [ 5]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(mca_btl_base_select+0x117)[0x7ffff7a29807]*22:15:09*
<br>
[vegas12:08101] [ 6]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x7ffff41ed7e2]*22:15:09*
<br>
[vegas12:08101] [ 7]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(mca_bml_base_init+0x99)[0x7ffff7a29009]*22:15:09*
<br>
[vegas12:08101] [ 8]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_pml_ob1.so(+0x58b5)[0x7ffff2f528b5]*22:15:09*
<br>
[vegas12:08101] [ 9]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(mca_pml_base_select+0x1e0)[0x7ffff7a3c590]*22:15:09*
<br>
[vegas12:08101] [10]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(ompi_mpi_init+0x455)[0x7ffff7a06bf5]*22:15:09*
<br>
[vegas12:08101] [11]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/liboshmem.so.0(oshmem_shmem_init+0xfd)[0x7ffff7ca66dd]*22:15:09*
<br>
[vegas12:08101] [12]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/liboshmem.so.0(shmem_init+0x28)[0x7ffff7ca9328]*22:15:09*
<br>
[vegas12:08101] [13]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/examples/hello_shmem[0x40077d]*22:15:09*
<br>
[vegas12:08101] [14]
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]*22:15:09*
<br>
[vegas12:08101] [15]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/examples/hello_shmem[0x4006a9]*22:15:09*
<br>
[vegas12:08101] *** End of error message ****22:15:09*
<br>
[vegas12][[28889,1],2][btl_openib_component.c:909:device_destruct]
<br>
Failed to cancel OpenIB progress thread*22:15:09*
<br>
[vegas12][[28889,1],5][btl_openib_component.c:909:device_destruct]
<br>
Failed to cancel OpenIB progress thread*22:15:09* [vegas12:08099] ***
<br>
Process received signal ****22:15:09* [vegas12:08099] Signal:
<br>
Segmentation fault (11)*22:15:09* [vegas12:08099] Signal code: Address
<br>
not mapped (1)*22:15:09* [vegas12:08099] Failing at address:
<br>
(nil)*22:15:09* [vegas12:08099] [ 0]
<br>
/lib64/libpthread.so.0[0x3937c0f500]*22:15:09* [vegas12:08099] [ 1]
<br>
/usr/lib64/libibverbs.so.1(ibv_destroy_comp_channel+0x16)[0x7ffff3785f46]*22:15:09*
<br>
[vegas12:08099] [ 2]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_btl_openib.so(+0xdf02)[0x7ffff3fc1f02]*22:15:09*
<br>
[vegas12:08099] [ 3]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_btl_openib.so(+0xf161)[0x7ffff3fc3161]*22:15:09*
<br>
[vegas12:08099] [ 4]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_btl_openib.so(+0x12b41)[0x7ffff3fc6b41]*22:15:09*
<br>
[vegas12:08099] [ 5]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(mca_btl_base_select+0x117)[0x7ffff7a29807]*22:15:09*
<br>
[vegas12:08099] [ 6]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x7ffff41ed7e2]*22:15:09*
<br>
[vegas12:08099] [ 7]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(mca_bml_base_init+0x99)[0x7ffff7a29009]*22:15:09*
<br>
[vegas12:08099] [ 8]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/openmpi/mca_pml_ob1.so(+0x58b5)[0x7ffff2f528b5]*22:15:09*
<br>
[vegas12:08099] [ 9]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(mca_pml_base_select+0x1e0)[0x7ffff7a3c590]*22:15:09*
<br>
[vegas12:08099] [10]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/libmpi.so.0(ompi_mpi_init+0x455)[0x7ffff7a06bf5]*22:15:09*
<br>
[vegas12:08099] [11]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/liboshmem.so.0(oshmem_shmem_init+0xfd)[0x7ffff7ca66dd]*22:15:09*
<br>
[vegas12:08099] [12]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/oshm_install2/lib/liboshmem.so.0(shmem_init+0x28)[0x7ffff7ca9328]*22:15:09*
<br>
[vegas12:08099] [13]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/examples/hello_shmem[0x40077d]*22:15:09*
<br>
[vegas12:08099] [14]
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]*22:15:09*
<br>
[vegas12:08099] [15]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/examples/hello_shmem[0x4006a9]*22:15:09*
<br>
[vegas12:08099] *** End of error message ****22:15:09*
<br>
------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15054/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Previous message:</strong> <a href="15053.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
<li><strong>Reply:</strong> <a href="15055.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk broken"</a>
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

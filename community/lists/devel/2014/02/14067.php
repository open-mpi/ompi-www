<?
$subject_val = "[OMPI devel] 1.7.5 fails on simple test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 04:22:36 2014" -->
<!-- isoreceived="20140210092236" -->
<!-- sent="Mon, 10 Feb 2014 11:22:33 +0200" -->
<!-- isosent="20140210092233" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.5 fails on simple test" -->
<!-- id="CAAO1KybK5RxndX43trs=kwcO5+pVc4qYy8X6MtGZSxxeSaCM+Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.5 fails on simple test<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 04:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14068.php">George Bosilca: "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<li><strong>Previous message:</strong> <a href="14066.php">Irvanda Kurniadi: "[OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14070.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Reply:</strong> <a href="14070.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*$/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun
<br>
-np 8 -mca pml ob1 -mca btl self,tcp
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi
<br>
[vegas12:12724] *** Process received signal ***
<br>
[vegas12:12724] Signal: Segmentation fault (11)
<br>
[vegas12:12724] Signal code:  (128)
<br>
[vegas12:12724] Failing at address: (nil)
<br>
[vegas12:12724] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
<br>
[vegas12:12724] [ 1]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_component_init+0x583)[0x7ffff395f813]
<br>
[vegas12:12724] [ 2]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_btl_base_select+0x117)[0x7ffff78e14a7]
<br>
[vegas12:12724] [ 3]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x7ffff3ded6f2]
<br>
[vegas12:12724] [ 4]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_bml_base_init+0x99)[0x7ffff78e0cc9]
<br>
[vegas12:12724] [ 5]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_pml_ob1.so(+0x51d8)[0x7ffff37481d8]
<br>
[vegas12:12724] [ 6]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_pml_base_select+0x1e0)[0x7ffff78f31e0]
<br>
[vegas12:12724] [ 7]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(ompi_mpi_init+0x52b)[0x7ffff78bffdb]
<br>
[vegas12:12724] [ 8]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(MPI_Init+0x170)[0x7ffff78d4210]
<br>
[vegas12:12724] [ 9]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi_mpifh.so.2(PMPI_Init_f08+0x25)[0x7ffff7b71c25]
<br>
[vegas12:12724] [10]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400c0b]
<br>
[vegas12:12724] [11]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400d4a]
<br>
[vegas12:12724] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
<br>
[vegas12:12724] [13]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400b29]
<br>
[vegas12:12724] *** End of error message ***
<br>
[vegas12:12731] *** Process received signal ***
<br>
[vegas12:12731] Signal: Segmentation fault (11)
<br>
[vegas12:12731] Signal code:  (128)
<br>
[vegas12:12731] Failing at address: (nil)
<br>
[vegas12:12731] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
<br>
[vegas12:12731] [ 1]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_component_init+0x583)[0x7ffff395f813]
<br>
[vegas12:12731] [ 2]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_btl_base_select+0x117)[0x7ffff78e14a7]
<br>
[vegas12:12731] [ 3]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x7ffff3ded6f2]
<br>
[vegas12:12731] [ 4]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_bml_base_init+0x99)[0x7ffff78e0cc9]
<br>
[vegas12:12731] [ 5]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_pml_ob1.so(+0x51d8)[0x7ffff37481d8]
<br>
[vegas12:12731] [ 6]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_pml_base_select+0x1e0)[0x7ffff78f31e0]
<br>
[vegas12:12731] [ 7]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(ompi_mpi_init+0x52b)[0x7ffff78bffdb]
<br>
[vegas12:12731] [ 8]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(MPI_Init+0x170)[0x7ffff78d4210]
<br>
[vegas12:12731] [ 9]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi_mpifh.so.2(PMPI_Init_f08+0x25)[0x7ffff7b71c25]
<br>
[vegas12:12731] [10]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400c0b]
<br>
[vegas12:12731] [11]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400d4a]
<br>
[vegas12:12731] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
<br>
[vegas12:12731] [13]
<br>
/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400b29]
<br>
[vegas12:12731] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 12724 on node vegas12
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
jenkins_at_vegas12 ~
<br>
*
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14067/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14068.php">George Bosilca: "Re: [OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<li><strong>Previous message:</strong> <a href="14066.php">Irvanda Kurniadi: "[OMPI devel] Compilation error: 'OMPI_MPIHANDLES_DLL_PREFIX' undeclared"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14070.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Reply:</strong> <a href="14070.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
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

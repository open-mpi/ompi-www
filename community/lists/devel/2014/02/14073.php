<?
$subject_val = "Re: [OMPI devel] 1.7.5 fails on simple test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 16:13:20 2014" -->
<!-- isoreceived="20140210211320" -->
<!-- sent="Mon, 10 Feb 2014 13:13:17 -0800" -->
<!-- isosent="20140210211317" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.5 fails on simple test" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36019C962E7_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36019C961CD_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.5 fails on simple test<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 16:13:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14074.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Previous message:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14070.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14074.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Reply:</strong> <a href="14074.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Reply:</strong> <a href="14075.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tracked this down.  There is a missing commit that affects ompi_mpi_init.c causing it to initialize bml twice.
<br>
Ralph, can you apply r30310 to 1.7?
<br>
<p>Thanks,
<br>
Rolf
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Monday, February 10, 2014 12:29 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] 1.7.5 fails on simple test
<br>
<p>I have seen this same issue although my core dump is a little bit different.  I am running with tcp,self.  The first entry in the list of BTLs is garbage, but then there is tcp and self in the list.   Strange.  This is my core dump.  Line 208 in bml_r2.c is where I get the SEGV.
<br>
<p>Program terminated with signal 11, Segmentation fault.
<br>
#0  0x00007fb6dec981d0 in ?? ()
<br>
Missing separate debuginfos, use: debuginfo-install glibc-2.12-1.107.el6_4.5.x86_64
<br>
(gdb) where
<br>
#0  0x00007fb6dec981d0 in ?? ()
<br>
#1  &lt;signal handler called&gt;
<br>
#2  0x00007fb6e82fff38 in main_arena () from /lib64/libc.so.6
<br>
#3  0x00007fb6e4103de2 in mca_bml_r2_add_procs (nprocs=2, procs=0x2061440, reachable=0x7fff80487b40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../ompi/mca/bml/r2/bml_r2.c:208
<br>
#4  0x00007fb6df50a751 in mca_pml_ob1_add_procs (procs=0x2060bc0, nprocs=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../ompi/mca/pml/ob1/pml_ob1.c:332
<br>
#5  0x00007fb6e8570dca in ompi_mpi_init (argc=1, argv=0x7fff80488158, requested=0, provided=0x7fff80487cc8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../ompi/runtime/ompi_mpi_init.c:776
<br>
#6  0x00007fb6e85a3606 in PMPI_Init (argc=0x7fff80487d8c, argv=0x7fff80487d80) at pinit.c:84
<br>
#7  0x0000000000401c56 in main (argc=1, argv=0x7fff80488158) at MPI_Isend_ator_c.c:143
<br>
(gdb)
<br>
#3  0x00007fb6e4103de2 in mca_bml_r2_add_procs (nprocs=2, procs=0x2061440, reachable=0x7fff80487b40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../ompi/mca/bml/r2/bml_r2.c:208
<br>
208                 rc = btl-&gt;btl_add_procs(btl, n_new_procs, new_procs, btl_endpoints, reachable);
<br>
(gdb) print *btl
<br>
$1 = {btl_component = 0x7fb6e82ffee8, btl_eager_limit = 140423556234984, btl_rndv_eager_limit = 140423556235000,
<br>
&nbsp;&nbsp;btl_max_send_size = 140423556235000, btl_rdma_pipeline_send_length = 140423556235016,
<br>
&nbsp;&nbsp;btl_rdma_pipeline_frag_size = 140423556235016, btl_min_rdma_pipeline_size = 140423556235032,
<br>
&nbsp;&nbsp;btl_exclusivity = 3895459608, btl_latency = 32694, btl_bandwidth = 3895459624, btl_flags = 32694,
<br>
&nbsp;&nbsp;btl_seg_size = 140423556235048, btl_add_procs = 0x7fb6e82fff38 &lt;main_arena+184&gt;,
<br>
&nbsp;&nbsp;btl_del_procs = 0x7fb6e82fff38 &lt;main_arena+184&gt;, btl_register = 0x7fb6e82fff48 &lt;main_arena+200&gt;,
<br>
&nbsp;&nbsp;btl_finalize = 0x7fb6e82fff48 &lt;main_arena+200&gt;, btl_alloc = 0x7fb6e82fff58 &lt;main_arena+216&gt;,
<br>
&nbsp;&nbsp;btl_free = 0x7fb6e82fff58 &lt;main_arena+216&gt;, btl_prepare_src = 0x7fb6e82fff68 &lt;main_arena+232&gt;,
<br>
&nbsp;&nbsp;btl_prepare_dst = 0x7fb6e82fff68 &lt;main_arena+232&gt;, btl_send = 0x7fb6e82fff78 &lt;main_arena+248&gt;,
<br>
&nbsp;&nbsp;btl_sendi = 0x7fb6e82fff78 &lt;main_arena+248&gt;, btl_put = 0x7fb6e82fff88 &lt;main_arena+264&gt;,
<br>
&nbsp;&nbsp;btl_get = 0x7fb6e82fff88 &lt;main_arena+264&gt;, btl_dump = 0x7fb6e82fff98 &lt;main_arena+280&gt;,
<br>
&nbsp;&nbsp;btl_mpool = 0x7fb6e82fff98, btl_register_error = 0x7fb6e82fffa8 &lt;main_arena+296&gt;,
<br>
&nbsp;&nbsp;btl_ft_event = 0x7fb6e82fffa8 &lt;main_arena+296&gt;}
<br>
(gdb)
<br>
<p><p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Mike Dubman
<br>
Sent: Monday, February 10, 2014 4:23 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] 1.7.5 fails on simple test
<br>
<p><p><p><p><p><p>$/scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/bin/mpirun -np 8 -mca pml ob1 -mca btl self,tcp /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi
<br>
<p>[vegas12:12724] *** Process received signal ***
<br>
<p>[vegas12:12724] Signal: Segmentation fault (11)
<br>
<p>[vegas12:12724] Signal code:  (128)
<br>
<p>[vegas12:12724] Failing at address: (nil)
<br>
<p>[vegas12:12724] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
<br>
<p>[vegas12:12724] [ 1] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_component_init+0x583)[0x7ffff395f813]
<br>
<p>[vegas12:12724] [ 2] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_btl_base_select+0x117)[0x7ffff78e14a7]
<br>
<p>[vegas12:12724] [ 3] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x7ffff3ded6f2]
<br>
<p>[vegas12:12724] [ 4] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_bml_base_init+0x99)[0x7ffff78e0cc9]
<br>
<p>[vegas12:12724] [ 5] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_pml_ob1.so(+0x51d8)[0x7ffff37481d8]
<br>
<p>[vegas12:12724] [ 6] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_pml_base_select+0x1e0)[0x7ffff78f31e0]
<br>
<p>[vegas12:12724] [ 7] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(ompi_mpi_init+0x52b)[0x7ffff78bffdb]
<br>
<p>[vegas12:12724] [ 8] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(MPI_Init+0x170)[0x7ffff78d4210]
<br>
<p>[vegas12:12724] [ 9] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi_mpifh.so.2(PMPI_Init_f08+0x25)[0x7ffff7b71c25]
<br>
<p>[vegas12:12724] [10] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400c0b]
<br>
<p>[vegas12:12724] [11] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400d4a]
<br>
<p>[vegas12:12724] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
<br>
<p>[vegas12:12724] [13] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400b29]
<br>
<p>[vegas12:12724] *** End of error message ***
<br>
<p>[vegas12:12731] *** Process received signal ***
<br>
<p>[vegas12:12731] Signal: Segmentation fault (11)
<br>
<p>[vegas12:12731] Signal code:  (128)
<br>
<p>[vegas12:12731] Failing at address: (nil)
<br>
<p>[vegas12:12731] [ 0] /lib64/libpthread.so.0[0x3937c0f500]
<br>
<p>[vegas12:12731] [ 1] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_btl_tcp.so(mca_btl_tcp_component_init+0x583)[0x7ffff395f813]
<br>
<p>[vegas12:12731] [ 2] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_btl_base_select+0x117)[0x7ffff78e14a7]
<br>
<p>[vegas12:12731] [ 3] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x7ffff3ded6f2]
<br>
<p>[vegas12:12731] [ 4] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_bml_base_init+0x99)[0x7ffff78e0cc9]
<br>
<p>[vegas12:12731] [ 5] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/openmpi/mca_pml_ob1.so(+0x51d8)[0x7ffff37481d8]
<br>
<p>[vegas12:12731] [ 6] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(mca_pml_base_select+0x1e0)[0x7ffff78f31e0]
<br>
<p>[vegas12:12731] [ 7] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(ompi_mpi_init+0x52b)[0x7ffff78bffdb]
<br>
<p>[vegas12:12731] [ 8] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi.so.1(MPI_Init+0x170)[0x7ffff78d4210]
<br>
<p>[vegas12:12731] [ 9] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/lib/libmpi_mpifh.so.2(PMPI_Init_f08+0x25)[0x7ffff7b71c25]
<br>
<p>[vegas12:12731] [10] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400c0b]
<br>
<p>[vegas12:12731] [11] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400d4a]
<br>
<p>[vegas12:12731] [12] /lib64/libc.so.6(__libc_start_main+0xfd)[0x393741ecdd]
<br>
<p>[vegas12:12731] [13] /scrap/jenkins/scrap/workspace/hpc-ompi-shmem/label/hpc-test-node/ompi_install1/examples/hello_usempi[0x400b29]
<br>
<p>[vegas12:12731] *** End of error message ***
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun noticed that process rank 0 with PID 12724 on node vegas12 exited on signal 11 (Segmentation fault).
<br>
<p>--------------------------------------------------------------------------
<br>
<p>jenkins_at_vegas12 ~
<br>
<p><p><p><p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14073/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14074.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Previous message:</strong> <a href="14072.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>In reply to:</strong> <a href="14070.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14074.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Reply:</strong> <a href="14074.php">Ralph Castain: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Reply:</strong> <a href="14075.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
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

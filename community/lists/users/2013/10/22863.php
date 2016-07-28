<?
$subject_val = "Re: [OMPI users] OpenMPI-1.7.3 - cuda support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 12:07:18 2013" -->
<!-- isoreceived="20131030160718" -->
<!-- sent="Wed, 30 Oct 2013 16:07:16 +0000" -->
<!-- isosent="20131030160716" -->
<!-- name="KESTENER Pierre" -->
<!-- email="pierre.kestener_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.7.3 - cuda support" -->
<!-- id="123B4248067C9C49ABB98E5EA3F72B2416327C40_at_E-EXDAGE-B1.extra.cea.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="123B4248067C9C49ABB98E5EA3F72B2416327BE2_at_E-EXDAGE-B1.extra.cea.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-1.7.3 - cuda support<br>
<strong>From:</strong> KESTENER Pierre (<em>pierre.kestener_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 12:07:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22864.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Previous message:</strong> <a href="22862.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>In reply to:</strong> <a href="22861.php">KESTENER Pierre: "[OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22864.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Reply:</strong> <a href="22864.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Rolf,
<br>
<p>thank for looking into this.
<br>
Here is the complete backtrace for execution using 2 GPUs on the same node:
<br>
<p>(cuda-gdb) bt
<br>
#0  0x00007ffff711d885 in raise () from /lib64/libc.so.6
<br>
#1  0x00007ffff711f065 in abort () from /lib64/libc.so.6
<br>
#2  0x00007ffff0387b8d in psmi_errhandler_psm (ep=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;err=PSM_INTERNAL_ERR, error_string=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;token=&lt;value optimized out&gt;) at psm_error.c:76
<br>
#3  0x00007ffff0387df1 in psmi_handle_error (ep=0xfffffffffffffffe,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;error=PSM_INTERNAL_ERR, buf=&lt;value optimized out&gt;) at psm_error.c:154
<br>
#4  0x00007ffff0382f6a in psmi_am_mq_handler_rtsmatch (toki=0x7fffffffc6a0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;args=0x7fffed0461d0, narg=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buf=&lt;value optimized out&gt;, len=&lt;value optimized out&gt;) at ptl.c:200
<br>
#5  0x00007ffff037a832 in process_packet (ptl=0x737818, pkt=0x7fffed0461c0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;isreq=&lt;value optimized out&gt;) at am_reqrep_shmem.c:2164
<br>
#6  0x00007ffff037d90f in amsh_poll_internal_inner (ptl=0x737818, replyonly=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at am_reqrep_shmem.c:1756
<br>
#7  amsh_poll (ptl=0x737818, replyonly=0) at am_reqrep_shmem.c:1810
<br>
#8  0x00007ffff03a0329 in __psmi_poll_internal (ep=0x737538,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;poll_amsh=&lt;value optimized out&gt;) at psm.c:465
<br>
#9  0x00007ffff039f0af in psmi_mq_wait_inner (ireq=0x7fffffffc848)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at psm_mq.c:299
<br>
#10 psmi_mq_wait_internal (ireq=0x7fffffffc848) at psm_mq.c:334
<br>
#11 0x00007ffff037db21 in amsh_mq_send_inner (ptl=0x737818,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mq=&lt;value optimized out&gt;, epaddr=0x6eb418, flags=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tag=844424930131968, ubuf=0x1308350000, len=32768)
<br>
---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at am_reqrep_shmem.c:2339
<br>
#12 amsh_mq_send (ptl=0x737818, mq=&lt;value optimized out&gt;, epaddr=0x6eb418,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flags=&lt;value optimized out&gt;, tag=844424930131968, ubuf=0x1308350000,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;len=32768) at am_reqrep_shmem.c:2387
<br>
#13 0x00007ffff039ed71 in __psm_mq_send (mq=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dest=&lt;value optimized out&gt;, flags=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;stag=&lt;value optimized out&gt;, buf=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;len=&lt;value optimized out&gt;) at psm_mq.c:413
<br>
#14 0x00007ffff05c4ea8 in ompi_mtl_psm_send ()
<br>
&nbsp;&nbsp;&nbsp;from /gpfslocal/pub/openmpi/1.7.3/lib/openmpi/mca_mtl_psm.so
<br>
#15 0x00007ffff1eeddea in mca_pml_cm_send ()
<br>
&nbsp;&nbsp;&nbsp;from /gpfslocal/pub/openmpi/1.7.3/lib/openmpi/mca_pml_cm.so
<br>
#16 0x00007ffff79253da in PMPI_Sendrecv ()
<br>
&nbsp;&nbsp;&nbsp;from /gpfslocal/pub/openmpi/1.7.3/lib/libmpi.so.1
<br>
#17 0x00000000004045ef in ExchangeHalos (cartComm=0x715460,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;devSend=0x1308350000, hostSend=0x7b8710, hostRecv=0x7c0720,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;devRecv=0x1308358000, neighbor=1, elemCount=4096) at CUDA_Aware_MPI.c:70
<br>
#18 0x00000000004033d8 in TransferAllHalos (cartComm=0x715460,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;domSize=0x7fffffffcd80, topIndex=0x7fffffffcd60, neighbors=0x7fffffffcd90,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;copyStream=0xaa4450, devBlocks=0x7fffffffcd30,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;devSideEdges=0x7fffffffcd20, devHaloLines=0x7fffffffcd10,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hostSendLines=0x7fffffffcd00, hostRecvLines=0x7fffffffccf0) at Host.c:400
<br>
#19 0x000000000040363c in RunJacobi (cartComm=0x715460, rank=0, size=2,
<br>
---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
<br>
&nbsp;&nbsp;&nbsp;&nbsp;domSize=0x7fffffffcd80, topIndex=0x7fffffffcd60, neighbors=0x7fffffffcd90,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;useFastSwap=0, devBlocks=0x7fffffffcd30, devSideEdges=0x7fffffffcd20,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;devHaloLines=0x7fffffffcd10, hostSendLines=0x7fffffffcd00,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hostRecvLines=0x7fffffffccf0, devResidue=0x1310480000,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;copyStream=0xaa4450, iterations=0x7fffffffcd44,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;avgTransferTime=0x7fffffffcd48) at Host.c:466
<br>
#20 0x0000000000401ccb in main (argc=4, argv=0x7fffffffcea8) at Jacobi.c:60
<br>
<p>Pierre.
<br>
<p><p>________________________________
<br>
De : KESTENER Pierre
<br>
Date d'envoi : mercredi 30 octobre 2013 16:34
<br>
&#192; : users_at_[hidden]
<br>
Cc: KESTENER Pierre
<br>
Objet : OpenMPI-1.7.3 - cuda support
<br>
<p>Hello,
<br>
<p>I'm having problems running a simple cuda-aware mpi application; the one found at
<br>
<a href="https://github.com/parallel-forall/code-samples/tree/master/posts/cuda-aware-mpi-example">https://github.com/parallel-forall/code-samples/tree/master/posts/cuda-aware-mpi-example</a>
<br>
<p>I have modified symbol ENV_LOCAL_RANK into OMPI_COMM_WORLD_LOCAL_RANK
<br>
My cluster has 2 K20m GPUs per node, with QLogic IB stack.
<br>
<p>The normal CUDA/MPI application works fine;
<br>
&nbsp;but the cuda-ware mpi app is crashing when using 2 MPI proc over the 2 GPUs of the same node:
<br>
the error message is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Assertion failure at ptl.c:200: nbytes == msglen
<br>
I can send the complete backtrace from cuda-gdb if needed.
<br>
<p>The same app when running on 2 GPUs on 2 different nodes give another error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;jacobi_cuda_aware_mpi:28280 terminated with signal 11 at PC=2aae9d7c9f78 SP=7fffc06c21f8.      Backtrace:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/gpfslocal/pub/local/lib64/libinfinipath.so.4(+0x8f78)[0x2aae9d7c9f78]
<br>
<p><p>Can someone give me hints where to look to track this problem ?
<br>
Thank you.
<br>
<p>Pierre Kestener.
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22863/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22864.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Previous message:</strong> <a href="22862.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>In reply to:</strong> <a href="22861.php">KESTENER Pierre: "[OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22864.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Reply:</strong> <a href="22864.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
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

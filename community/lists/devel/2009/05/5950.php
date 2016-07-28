<?
$subject_val = "[OMPI devel] MTT tests: segv's with sm on large messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 07:33:18 2009" -->
<!-- isoreceived="20090504113318" -->
<!-- sent="Mon, 4 May 2009 05:33:05 -0600" -->
<!-- isosent="20090504113305" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] MTT tests: segv's with sm on large messages" -->
<!-- id="AD0F4C46-4FAF-4BEF-B6D4-8BC725776E1B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] MTT tests: segv's with sm on large messages<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 07:33:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5951.php">Jeff Squyres: "Re: [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
<li><strong>Previous message:</strong> <a href="5949.php">Christian Siebert: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5952.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5952.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>In reviewing last night's MTT tests for the 1.3 branch, I am seeing  
<br>
several segfault failures in the shared memory BTL when using large  
<br>
messages. This occurred on both IU's sif machine and on Sun's tests.
<br>
<p>Here is a typical stack from MTT:
<br>
<p>MPITEST info  (0): Starting MPI_Sendrecv: Root to all model test
<br>
[burl-ct-v20z-13:14699] *** Process received signal ***
<br>
[burl-ct-v20z-13:14699] Signal: Segmentation fault (11)
<br>
[burl-ct-v20z-13:14699] Signal code:  (128)
<br>
[burl-ct-v20z-13:14699] Failing at address: (nil)
<br>
[burl-ct-v20z-13:14699] [ 0] /lib64/tls/libpthread.so.0 [0x2a960bc720]
<br>
[burl-ct-v20z-13:14699] [ 1]
<br>
/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
<br>
testing/installs/ZCcL/install/lib/lib64/openmpi/ 
<br>
mca_btl_sm.so(mca_btl_sm_send+0x7b)
<br>
[0x2a9786a7d3]
<br>
[burl-ct-v20z-13:14699] [ 2]
<br>
/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
<br>
testing/installs/ZCcL/install/lib/lib64/openmpi/ 
<br>
mca_pml_ob1.so(mca_pml_ob1_send_request_start_copy+0x5b2)
<br>
[0x2a97453942]
<br>
[burl-ct-v20z-13:14699] [ 3]
<br>
/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
<br>
testing/installs/ZCcL/install/lib/lib64/openmpi/ 
<br>
mca_pml_ob1.so(mca_pml_ob1_isend+0x4f2)
<br>
[0x2a9744b446]
<br>
[burl-ct-v20z-13:14699] [ 4]
<br>
/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
<br>
testing/installs/ZCcL/install/lib/lib64/openmpi/ 
<br>
mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual+0x7e)
<br>
[0x2a98120bca]
<br>
[burl-ct-v20z-13:14699] [ 5]
<br>
/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
<br>
testing/installs/ZCcL/install/lib/lib64/openmpi/ 
<br>
mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_recursivedoubling+0x119)
<br>
[0x2a9812b111]
<br>
[burl-ct-v20z-13:14699] [ 6]
<br>
/workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
<br>
testing/installs/ZCcL/install/lib/lib64/libmpi.so.0(PMPI_Barrier+0x8e)
<br>
[0x2a9584ca42]
<br>
[burl-ct-v20z-13:14699] [ 7] src/MPI_Sendrecv_rtoa_c [0x403009]
<br>
[burl-ct-v20z-13:14699] [ 8] /lib64/tls/libc.so.6(__libc_start_main 
<br>
+0xea) [0x2a961e0aaa]
<br>
[burl-ct-v20z-13:14699] [ 9] src/MPI_Sendrecv_rtoa_c(strtok+0x66)  
<br>
[0x4019f2]
<br>
[burl-ct-v20z-13:14699] *** End of error message ***
<br>
[burl-ct-v20z-12][[13280,1],0][btl_tcp_endpoint.c: 
<br>
456:mca_btl_tcp_endpoint_recv_blocking] recv(13)
<br>
failed: Connection reset by peer (104)
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 2 with PID 14699 on node burl-ct- 
<br>
v20z-13 exited on signal 11
<br>
(Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p>Seems like this is something we need to address before release - yes?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5951.php">Jeff Squyres: "Re: [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
<li><strong>Previous message:</strong> <a href="5949.php">Christian Siebert: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5952.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5952.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
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

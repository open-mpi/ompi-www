<?
$subject_val = "[OMPI users] How to diagnose bus error with 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  5 12:14:53 2013" -->
<!-- isoreceived="20130605161453" -->
<!-- sent="Wed, 5 Jun 2013 16:13:49 +0000" -->
<!-- isosent="20130605161349" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] How to diagnose bus error with 1.6.4" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CA14D30_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] How to diagnose bus error with 1.6.4<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-05 12:13:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22030.php">Blosch, Edwin L: "Re: [OMPI users] How to diagnose bus error with 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="22028.php">Ralph Castain: "Re: [OMPI users] openmpi-lsb_launch failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22030.php">Blosch, Edwin L: "Re: [OMPI users] How to diagnose bus error with 1.6.4"</a>
<li><strong>Reply:</strong> <a href="22030.php">Blosch, Edwin L: "Re: [OMPI users] How to diagnose bus error with 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running into a bus error that does not happen with MVAPICH, and I am guessing it has something to do with shared-memory communication.  Has anyone had a similar experience or have any insights on what this could be?
<br>
<p>Thanks
<br>
<p>[k1n08:12688] mca: base: components_open: Looking for shmem components
<br>
[k1n08:12688] mca: base: components_open: opening shmem components
<br>
[k1n08:12688] mca: base: components_open: found loaded component mmap
<br>
[k1n08:12688] mca: base: components_open: component mmap register function successful
<br>
[k1n08:12688] mca: base: components_open: component mmap open function successful
<br>
[k1n08:12688] mca: base: components_open: found loaded component posix
<br>
[k1n08:12688] mca: base: components_open: component posix has no register function
<br>
[k1n08:12688] mca: base: components_open: component posix open function successful
<br>
[k1n08:12688] mca: base: components_open: found loaded component sysv
<br>
[k1n08:12688] mca: base: components_open: component sysv has no register function
<br>
[k1n08:12688] mca: base: components_open: component sysv open function successful
<br>
[k1n08:12688] shmem: base: runtime_query: Auto-selecting shmem components
<br>
[k1n08:12688] shmem: base: runtime_query: (shmem) Querying component (run-time) [mmap]
<br>
[k1n08:12688] shmem: base: runtime_query: (shmem) Query of component [mmap] set priority to 50
<br>
[k1n08:12688] shmem: base: runtime_query: (shmem) Querying component (run-time) [posix]
<br>
[k1n08:12688] shmem: base: runtime_query: (shmem) Skipping component [posix]. Run-time Query failed to return a module
<br>
[k1n08:12688] shmem: base: runtime_query: (shmem) Querying component (run-time) [sysv]
<br>
[k1n08:12688] shmem: base: runtime_query: (shmem) Skipping component [sysv]. Run-time Query failed to return a module
<br>
[k1n08:12688] shmem: base: runtime_query: (shmem) Selected component [mmap]
<br>
[k1n08:12688] mca: base: close: unloading component posix
<br>
[k1n08:12688] mca: base: close: unloading component sysv
<br>
[k1n08:12688] *** Process received signal ***
<br>
[k1n08:12688] Signal: Bus error (7)
<br>
[k1n08:12688] Signal code: Non-existant physical address (2)
<br>
[k1n08:12688] Failing at address: 0x2ac1e088e030
<br>
[k1n08:12688] [ 0] /lib64/libpthread.so.0(+0xf500) [0x2ac1de7c0500]
<br>
[k1n08:12688] [ 1] /applocal/cfd/test/bin/test_openmpi(__intel_ssse3_rep_memcpy+0xcdb) [0x1495cab]
<br>
[k1n08:12688] [ 2] /applocal/cfd/test/bin/test_openmpi(opal_convertor_pack+0x101) [0x125c111]
<br>
[k1n08:12688] [ 3] /applocal/cfd/test/bin/test_openmpi(mca_btl_sm_prepare_src+0xc5) [0x13aab25]
<br>
[k1n08:12688] [ 4] /applocal/cfd/test/bin/test_openmpi(mca_pml_ob1_send_request_start_rndv+0x67) [0x12fa9a7]
<br>
[k1n08:12688] [ 5] /applocal/cfd/test/bin/test_openmpi(mca_pml_ob1_isend+0x3ab) [0x12ef02b]
<br>
[k1n08:12688] [ 6] /applocal/cfd/test/bin/test_openmpi(ompi_coll_tuned_sendrecv_actual+0x94) [0x12d67f4]
<br>
[k1n08:12688] [ 7] /applocal/cfd/test/bin/test_openmpi(ompi_coll_tuned_bcast_intra_split_bintree+0x94d) [0x12d45fd]
<br>
[k1n08:12688] [ 8] /applocal/cfd/test/bin/test_openmpi(ompi_coll_tuned_bcast_intra_dec_fixed+0x143) [0x12d5dd3]
<br>
[k1n08:12688] [ 9] /applocal/cfd/test/bin/test_openmpi(mca_coll_sync_bcast+0x66) [0x12d6aa6]
<br>
[k1n08:12688] [10] /applocal/cfd/test/bin/test_openmpi(MPI_Bcast+0x5a) [0x11f95da]
<br>
[k1n08:12688] [11] /applocal/cfd/test/bin/test_openmpi(mpi_bcast_f+0x6e) [0x11dca5e]
<br>
[k1n08:12688] [12] /applocal/cfd/test/bin/test_openmpi(wpf_calc_mod_mp_wpf_calc_+0x10f0) [0x541be0]
<br>
[k1n08:12688] [13] /applocal/cfd/test/bin/test_openmpi(special_init_mod_mp_special_init_geom_+0x3f4) [0x683254]
<br>
[k1n08:12688] [14] /applocal/cfd/test/bin/test_openmpi(setup_mod_mp_setup_domains_+0x56b) [0x53effb]
<br>
[k1n08:12688] [15] /applocal/cfd/test/bin/test_openmpi(MAIN__+0x1ab7) [0x5e8be7]
<br>
[k1n08:12688] [16] /applocal/cfd/test/bin/test_openmpi(main+0x3c) [0x4ff82c]
<br>
[k1n08:12688] [17] /lib64/libc.so.6(__libc_start_main+0xfd) [0x2ac1de9eccdd]
<br>
[k1n08:12688] [18] /applocal/cfd/test/bin/test_openmpi() [0x4ff729]
<br>
[k1n08:12688] *** End of error message ***
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22029/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22030.php">Blosch, Edwin L: "Re: [OMPI users] How to diagnose bus error with 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="22028.php">Ralph Castain: "Re: [OMPI users] openmpi-lsb_launch failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22030.php">Blosch, Edwin L: "Re: [OMPI users] How to diagnose bus error with 1.6.4"</a>
<li><strong>Reply:</strong> <a href="22030.php">Blosch, Edwin L: "Re: [OMPI users] How to diagnose bus error with 1.6.4"</a>
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

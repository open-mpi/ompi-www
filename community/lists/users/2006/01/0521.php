<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 25 22:40:09 2006" -->
<!-- isoreceived="20060126034009" -->
<!-- sent="Wed, 25 Jan 2006 19:39:55 -0800" -->
<!-- isosent="20060126033955" -->
<!-- name="Glenn Morris" -->
<!-- email="gmorris_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Trouble combining OpenMPI and OpenMP" -->
<!-- id="fiacdjr71w.fsf_at_iris03.slac.stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4ppsmqjer5.fsf_at_iris03.slac.stanford.edu" -->
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
<strong>From:</strong> Glenn Morris (<em>gmorris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-25 22:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0522.php">Jeff Squyres: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Previous message:</strong> <a href="0520.php">Daryl W. Grunau: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>In reply to:</strong> <a href="0508.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0524.php">Jeff Squyres: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0524.php">Jeff Squyres: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried nightly snapshot 1.1a1r8803 and it said the following. I'm
<br>
willing to try and debug this further, but would need some guidance. I
<br>
have access to totalview.
<br>
<p><p>Signal:11 info.si_errno:0(Success) si_code:2(SEGV_ACCERR)
<br>
Failing at addr:0x97421004
<br>
[0] func:/afs/slac.stanford.edu/g/ki/users/gmorris/tmp/ompi-1.1a1r8803/lib/libopal.so.0 [0x1cc9fa]
<br>
[1] func:/lib/tls/libpthread.so.0 [0xfd2f80]
<br>
[2] func:/afs/slac.stanford.edu/g/ki/users/gmorris/tmp/ompi-1.1a1r8803/lib/libopal.so.0(free+0x5e) [0x1cf0a2]
<br>
[3] func:./cosmomc(for_deallocate+0x56) [0x80d8806]
<br>
[4] func:./cosmomc(for_dealloc_allocatable+0x59) [0x80d886d]
<br>
[5] func:./cosmomc(spline_+0x4f2) [0x805a2ea]
<br>
[6] func:./cosmomc(cambmain_mp_initsourceinterpolation_+0x243) [0x8089b65]
<br>
[7] func:/afs/slac.stanford.edu/package/intel_tools/compiler8.1/i386_linux24/ifort/lib/libguide.so(__kmp_invoke_microtask+0x4d) [0x19f8cd]
<br>
[8] func:/afs/slac.stanford.edu/package/intel_tools/compiler8.1/i386_linux24/ifort/lib/libguide.so(__kmpc_invoke_task_func+0xa2) [0x18fea6]
<br>
[9] func:/afs/slac.stanford.edu/package/intel_tools/compiler8.1/i386_linux24/ifort/lib/libguide.so(__kmp_internal_fork+0x19b) [0x1900a1]
<br>
[10] func:/afs/slac.stanford.edu/package/intel_tools/compiler8.1/i386_linux24/ifort/lib/libguide.so(__kmp_fork_call+0x334) [0x18af18]
<br>
[11] func:/afs/slac.stanford.edu/package/intel_tools/compiler8.1/i386_linux24/ifort/lib/libguide.so(__kmpc_fork_call+0x35) [0x19242d]
<br>
[12] func:./cosmomc(cambmain_mp_initsourceinterpolation_+0xa8) [0x80899ca]
<br>
[13] func:./cosmomc(cambmain_mp_cmbmain_+0x8a8) [0x8085c34]
<br>
[14] func:./cosmomc(camb_mp_camb_getresults_+0x99) [0x80936db]
<br>
[15] func:./cosmomc(camb_mp_camb_gettransfers_+0x117) [0x8093387]
<br>
[16] func:./cosmomc(cmb_cls_mp_getcls_+0x102) [0x80aa82a]
<br>
[17] func:./cosmomc(calclike_mp_getloglikepost_+0x1f9) [0x80b43e9]
<br>
[18] func:./cosmomc(calclike_mp_getloglike_+0x23e) [0x80b41d0]
<br>
[19] func:./cosmomc(montecarlo_mp_mcmcsample_+0x130) [0x80b68dc]
<br>
[20] func:./cosmomc(MAIN__+0x15a3) [0x80b885b]
<br>
[21] func:./cosmomc(main+0x20) [0x8059758]
<br>
[22] func:/lib/tls/libc.so.6(__libc_start_main+0xda) [0x23c79a]
<br>
[23] func:./cosmomc(sinh+0x49) [0x8059611]
<br>
*** End of error message ***
<br>
1 process killed (possibly by Open MPI)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0522.php">Jeff Squyres: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Previous message:</strong> <a href="0520.php">Daryl W. Grunau: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>In reply to:</strong> <a href="0508.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0524.php">Jeff Squyres: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0524.php">Jeff Squyres: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
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

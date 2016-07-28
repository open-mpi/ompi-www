<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 26 08:47:32 2006" -->
<!-- isoreceived="20060126134732" -->
<!-- sent="Thu, 26 Jan 2006 08:47:24 -0500" -->
<!-- isosent="20060126134724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Trouble combining OpenMPI and OpenMP" -->
<!-- id="CADB558C-3E5E-402B-93CB-FA48C841557F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fiacdjr71w.fsf_at_iris03.slac.stanford.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-26 08:47:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0525.php">Kraig Winters: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Previous message:</strong> <a href="0523.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>In reply to:</strong> <a href="0521.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0528.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0528.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like a problem with the memory allocator.  It could be a  
<br>
genuine problem with Open MPI, or it could be a memory fault in your  
<br>
application (that happens to dead-end in one of our libraries because  
<br>
we intercept memory allocation functions).  From the stack trace, it  
<br>
looks like you're in the middle of a complex deallocation of some C++  
<br>
objects, so I really can't tell (i.e., not in an MPI function at all).
<br>
<p>Can you do a few things:
<br>
<p>- configure your Open MPI --with-memory-manager=none and see if the  
<br>
problem goes away.  This tells Open MPI to not intercept memory  
<br>
manager functions, so if you still have the problem, it's more likely  
<br>
to be a problem in your application than in OMPI.
<br>
<p>- run your application through a memory-checking debugger (such as  
<br>
valgrind) and see if it identifies any memory faults within your code.
<br>
<p>- send the additional information for run-time problems listed on  
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Thanks!
<br>
<p><p>On Jan 25, 2006, at 10:39 PM, Glenn Morris wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried nightly snapshot 1.1a1r8803 and it said the following. I'm
</span><br>
<span class="quotelev1">&gt; willing to try and debug this further, but would need some guidance. I
</span><br>
<span class="quotelev1">&gt; have access to totalview.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:2(SEGV_ACCERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x97421004
</span><br>
<span class="quotelev1">&gt; [0] func:/afs/slac.stanford.edu/g/ki/users/gmorris/tmp/ 
</span><br>
<span class="quotelev1">&gt; ompi-1.1a1r8803/lib/libopal.so.0 [0x1cc9fa]
</span><br>
<span class="quotelev1">&gt; [1] func:/lib/tls/libpthread.so.0 [0xfd2f80]
</span><br>
<span class="quotelev1">&gt; [2] func:/afs/slac.stanford.edu/g/ki/users/gmorris/tmp/ 
</span><br>
<span class="quotelev1">&gt; ompi-1.1a1r8803/lib/libopal.so.0(free+0x5e) [0x1cf0a2]
</span><br>
<span class="quotelev1">&gt; [3] func:./cosmomc(for_deallocate+0x56) [0x80d8806]
</span><br>
<span class="quotelev1">&gt; [4] func:./cosmomc(for_dealloc_allocatable+0x59) [0x80d886d]
</span><br>
<span class="quotelev1">&gt; [5] func:./cosmomc(spline_+0x4f2) [0x805a2ea]
</span><br>
<span class="quotelev1">&gt; [6] func:./cosmomc(cambmain_mp_initsourceinterpolation_+0x243)  
</span><br>
<span class="quotelev1">&gt; [0x8089b65]
</span><br>
<span class="quotelev1">&gt; [7] func:/afs/slac.stanford.edu/package/intel_tools/compiler8.1/ 
</span><br>
<span class="quotelev1">&gt; i386_linux24/ifort/lib/libguide.so(__kmp_invoke_microtask+0x4d)  
</span><br>
<span class="quotelev1">&gt; [0x19f8cd]
</span><br>
<span class="quotelev1">&gt; [8] func:/afs/slac.stanford.edu/package/intel_tools/compiler8.1/ 
</span><br>
<span class="quotelev1">&gt; i386_linux24/ifort/lib/libguide.so(__kmpc_invoke_task_func+0xa2)  
</span><br>
<span class="quotelev1">&gt; [0x18fea6]
</span><br>
<span class="quotelev1">&gt; [9] func:/afs/slac.stanford.edu/package/intel_tools/compiler8.1/ 
</span><br>
<span class="quotelev1">&gt; i386_linux24/ifort/lib/libguide.so(__kmp_internal_fork+0x19b)  
</span><br>
<span class="quotelev1">&gt; [0x1900a1]
</span><br>
<span class="quotelev1">&gt; [10] func:/afs/slac.stanford.edu/package/intel_tools/compiler8.1/ 
</span><br>
<span class="quotelev1">&gt; i386_linux24/ifort/lib/libguide.so(__kmp_fork_call+0x334) [0x18af18]
</span><br>
<span class="quotelev1">&gt; [11] func:/afs/slac.stanford.edu/package/intel_tools/compiler8.1/ 
</span><br>
<span class="quotelev1">&gt; i386_linux24/ifort/lib/libguide.so(__kmpc_fork_call+0x35) [0x19242d]
</span><br>
<span class="quotelev1">&gt; [12] func:./cosmomc(cambmain_mp_initsourceinterpolation_+0xa8)  
</span><br>
<span class="quotelev1">&gt; [0x80899ca]
</span><br>
<span class="quotelev1">&gt; [13] func:./cosmomc(cambmain_mp_cmbmain_+0x8a8) [0x8085c34]
</span><br>
<span class="quotelev1">&gt; [14] func:./cosmomc(camb_mp_camb_getresults_+0x99) [0x80936db]
</span><br>
<span class="quotelev1">&gt; [15] func:./cosmomc(camb_mp_camb_gettransfers_+0x117) [0x8093387]
</span><br>
<span class="quotelev1">&gt; [16] func:./cosmomc(cmb_cls_mp_getcls_+0x102) [0x80aa82a]
</span><br>
<span class="quotelev1">&gt; [17] func:./cosmomc(calclike_mp_getloglikepost_+0x1f9) [0x80b43e9]
</span><br>
<span class="quotelev1">&gt; [18] func:./cosmomc(calclike_mp_getloglike_+0x23e) [0x80b41d0]
</span><br>
<span class="quotelev1">&gt; [19] func:./cosmomc(montecarlo_mp_mcmcsample_+0x130) [0x80b68dc]
</span><br>
<span class="quotelev1">&gt; [20] func:./cosmomc(MAIN__+0x15a3) [0x80b885b]
</span><br>
<span class="quotelev1">&gt; [21] func:./cosmomc(main+0x20) [0x8059758]
</span><br>
<span class="quotelev1">&gt; [22] func:/lib/tls/libc.so.6(__libc_start_main+0xda) [0x23c79a]
</span><br>
<span class="quotelev1">&gt; [23] func:./cosmomc(sinh+0x49) [0x8059611]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0525.php">Kraig Winters: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Previous message:</strong> <a href="0523.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>In reply to:</strong> <a href="0521.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0528.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0528.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
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

<?
$subject_val = "Re: [OMPI users] Segfault after malloc()?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 08:30:48 2011" -->
<!-- isoreceived="20110518123048" -->
<!-- sent="Wed, 18 May 2011 08:30:32 -0400" -->
<!-- isosent="20110518123032" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault after malloc()?" -->
<!-- id="0455DDD7-1886-4115-92F0-9C9DC8E949D1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110516163547.GH13138_at_denknerd.nl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault after malloc()?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-18 08:30:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16562.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Previous message:</strong> <a href="16560.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>In reply to:</strong> <a href="16546.php">Paul van der Walt: "[OMPI users] Segfault after malloc()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16562.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Reply:</strong> <a href="16562.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*Usually* when we see segv's in calls to alloc, it means that there was previously some kind of memory bug, such as an array overflow or something like that (i.e., something that stomped on the memory allocation tables, causing the next alloc to fail).
<br>
<p>Have you tried running your code through a memory-checking debugger?
<br>
<p><p>On May 16, 2011, at 12:35 PM, Paul van der Walt wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope to provide enough information to make my problem clear. I
</span><br>
<span class="quotelev1">&gt; have been debugging a lot after continually getting a segfault
</span><br>
<span class="quotelev1">&gt; in my program, but then I decided to try and run it on another
</span><br>
<span class="quotelev1">&gt; node, and it didn't segfault! The program which causes this
</span><br>
<span class="quotelev1">&gt; strange behaviour can be downloaded with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ git clone <a href="https://toothbrush&#64;github.com/toothbrush/bsp-cg.git">https://toothbrush&#64;github.com/toothbrush/bsp-cg.git</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on bsponmpi (can be found at:
</span><br>
<span class="quotelev1">&gt; <a href="http://bsponmpi.sourceforge.net/">http://bsponmpi.sourceforge.net/</a> ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The machine on which I get a segfault is 
</span><br>
<span class="quotelev1">&gt; Linux scarlatti 2.6.38-2-amd64 #1 SMP Thu Apr 7 04:28:07 UTC 2011 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; OpenMPI --version: mpirun (Open MPI) 1.4.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And the error message is:
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] [ 0] /lib/libpthread.so.0(+0xef60) [0x7f33ca69ef60]
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] [ 1] /lib/libc.so.6(+0x74121) [0x7f33ca3a3121]
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] [ 2] /lib/libc.so.6(__libc_malloc+0x70) [0x7f33ca3a5930]
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] [ 3] src/cg(vecalloci+0x2c) [0x401789]
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] [ 4] src/cg(bspmv_init+0x60) [0x40286a]
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] [ 5] src/cg(bspcg+0x63b) [0x401f8b]
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] [ 6] src/cg(main+0xd3) [0x402517]
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x7f33ca34dc4d]
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] [ 8] src/cg() [0x401609]
</span><br>
<span class="quotelev1">&gt; [scarlatti:22100] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 22100 on node scarlatti exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program can be invoked (after downloading the source,
</span><br>
<span class="quotelev1">&gt; running make, and cd'ing into the project's root directory)
</span><br>
<span class="quotelev1">&gt; like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 src/cg examples/test.mtx-P2 examples/test.mtx-v2 examples/test.mtx-u2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program seems to fail at src/bspedupack.c:vecalloci(), but
</span><br>
<span class="quotelev1">&gt; printf'ing the pointer that's returned by malloc() looks okay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The node on which the program DOES run without segfault is as
</span><br>
<span class="quotelev1">&gt; follows: (OS X laptop)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Darwin purcell 10.7.0 Darwin Kernel Version 10.7.0: Sat Jan 29 15:17:16 PST 2011; root:xnu-1504.9.37~1/RELEASE_I386 i386
</span><br>
<span class="quotelev1">&gt; OpenMPI --version: mpirun (Open MPI) 1.2.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please inform if this is a real bug in OpenMPI, or if I'm coding
</span><br>
<span class="quotelev1">&gt; something incorrectly. Note that I'm not asking anyone to debug
</span><br>
<span class="quotelev1">&gt; my code for me, it's purely in case people want to try and
</span><br>
<span class="quotelev1">&gt; reproduce my error locally. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I can provide more info, please advise. I'm not an MPI
</span><br>
<span class="quotelev1">&gt; expert, unfortunately. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul van der Walt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; O&lt; ascii ribbon campaign - stop html mail - www.asciiribbon.org
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16562.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Previous message:</strong> <a href="16560.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<li><strong>In reply to:</strong> <a href="16546.php">Paul van der Walt: "[OMPI users] Segfault after malloc()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16562.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Reply:</strong> <a href="16562.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
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

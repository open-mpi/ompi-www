<?
$subject_val = "[OMPI users] Segfault after malloc()?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 12:35:56 2011" -->
<!-- isoreceived="20110516163556" -->
<!-- sent="Mon, 16 May 2011 17:35:48 +0100" -->
<!-- isosent="20110516163548" -->
<!-- name="Paul van der Walt" -->
<!-- email="paul_at_[hidden]" -->
<!-- subject="[OMPI users] Segfault after malloc()?" -->
<!-- id="20110516163547.GH13138_at_denknerd.nl" -->
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
<strong>Subject:</strong> [OMPI users] Segfault after malloc()?<br>
<strong>From:</strong> Paul van der Walt (<em>paul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-16 12:35:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16545.php">George Bosilca: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16561.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Reply:</strong> <a href="16561.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I hope to provide enough information to make my problem clear. I
<br>
have been debugging a lot after continually getting a segfault
<br>
in my program, but then I decided to try and run it on another
<br>
node, and it didn't segfault! The program which causes this
<br>
strange behaviour can be downloaded with
<br>
<p>$ git clone <a href="https://toothbrush&#64;github.com/toothbrush/bsp-cg.git">https://toothbrush&#64;github.com/toothbrush/bsp-cg.git</a>
<br>
<p>It depends on bsponmpi (can be found at:
<br>
<a href="http://bsponmpi.sourceforge.net/">http://bsponmpi.sourceforge.net/</a> ).
<br>
<p>The machine on which I get a segfault is 
<br>
Linux scarlatti 2.6.38-2-amd64 #1 SMP Thu Apr 7 04:28:07 UTC 2011 x86_64 GNU/Linux
<br>
OpenMPI --version: mpirun (Open MPI) 1.4.3
<br>
<p>And the error message is:
<br>
[scarlatti:22100] *** Process received signal ***
<br>
[scarlatti:22100] Signal: Segmentation fault (11)
<br>
[scarlatti:22100] Signal code:  (128)
<br>
[scarlatti:22100] Failing at address: (nil)
<br>
[scarlatti:22100] [ 0] /lib/libpthread.so.0(+0xef60) [0x7f33ca69ef60]
<br>
[scarlatti:22100] [ 1] /lib/libc.so.6(+0x74121) [0x7f33ca3a3121]
<br>
[scarlatti:22100] [ 2] /lib/libc.so.6(__libc_malloc+0x70) [0x7f33ca3a5930]
<br>
[scarlatti:22100] [ 3] src/cg(vecalloci+0x2c) [0x401789]
<br>
[scarlatti:22100] [ 4] src/cg(bspmv_init+0x60) [0x40286a]
<br>
[scarlatti:22100] [ 5] src/cg(bspcg+0x63b) [0x401f8b]
<br>
[scarlatti:22100] [ 6] src/cg(main+0xd3) [0x402517]
<br>
[scarlatti:22100] [ 7] /lib/libc.so.6(__libc_start_main+0xfd) [0x7f33ca34dc4d]
<br>
[scarlatti:22100] [ 8] src/cg() [0x401609]
<br>
[scarlatti:22100] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 22100 on node scarlatti exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>The program can be invoked (after downloading the source,
<br>
running make, and cd'ing into the project's root directory)
<br>
like:
<br>
<p>$ mpirun -np 2 src/cg examples/test.mtx-P2 examples/test.mtx-v2 examples/test.mtx-u2
<br>
<p>The program seems to fail at src/bspedupack.c:vecalloci(), but
<br>
printf'ing the pointer that's returned by malloc() looks okay.
<br>
<p>The node on which the program DOES run without segfault is as
<br>
follows: (OS X laptop)
<br>
<p>Darwin purcell 10.7.0 Darwin Kernel Version 10.7.0: Sat Jan 29 15:17:16 PST 2011; root:xnu-1504.9.37~1/RELEASE_I386 i386
<br>
OpenMPI --version: mpirun (Open MPI) 1.2.8
<br>
<p>Please inform if this is a real bug in OpenMPI, or if I'm coding
<br>
something incorrectly. Note that I'm not asking anyone to debug
<br>
my code for me, it's purely in case people want to try and
<br>
reproduce my error locally. 
<br>
<p>If I can provide more info, please advise. I'm not an MPI
<br>
expert, unfortunately. 
<br>
<p>Kind regards,
<br>
<p>Paul van der Walt
<br>
<p><pre>
-- 
O&lt; ascii ribbon campaign - stop html mail - www.asciiribbon.org

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16546/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16545.php">George Bosilca: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16561.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Reply:</strong> <a href="16561.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
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

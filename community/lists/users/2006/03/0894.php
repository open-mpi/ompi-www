<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 22 13:47:21 2006" -->
<!-- isoreceived="20060322184721" -->
<!-- sent="Wed, 22 Mar 2006 13:47:07 -0500" -->
<!-- isosent="20060322184707" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] Error message about libopal.so" -->
<!-- id="09F49549-E0B2-47E6-A741-9E27FC8059EE_at_ieee.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-22 13:47:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0895.php">Edgar Gabriel: "Re: [OMPI users] Error message about libopal.so"</a>
<li><strong>Previous message:</strong> <a href="0893.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0895.php">Edgar Gabriel: "Re: [OMPI users] Error message about libopal.so"</a>
<li><strong>Reply:</strong> <a href="0895.php">Edgar Gabriel: "Re: [OMPI users] Error message about libopal.so"</a>
<li><strong>Reply:</strong> <a href="0899.php">Brian Barrett: "Re: [OMPI users] Error message about libopal.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trying to find the cause of one or more errors, might involve libopal.so
<br>
<p>Built openmpi-1.1a1r9351 on Debian Linux on Operton with PGI 6.1-3  
<br>
using &quot;./configure --with-gnu-ld F77=pgf77 FFLAGS=-fastsse FC=pgf90  
<br>
FCFLAGS=-fastsse&quot;
<br>
<p>My program generates the following error which I do not understand:
<br>
<p>Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0x4
<br>
[0] func:/usr/local/lib/libopal.so.0 [0x2a959927dd]
<br>
*** End of error message ***
<br>
<p>Is it possible I'm over running the OpenMPI buffers, my test program  
<br>
works fine other than the &quot;GPR data corruption&quot; errors (uses  
<br>
MPI_SPAWN and posted previously); the basic MPI difference between my  
<br>
test program and the real program is massive amount of data being  
<br>
distributed via BCAST and SEND/RECV.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0895.php">Edgar Gabriel: "Re: [OMPI users] Error message about libopal.so"</a>
<li><strong>Previous message:</strong> <a href="0893.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0895.php">Edgar Gabriel: "Re: [OMPI users] Error message about libopal.so"</a>
<li><strong>Reply:</strong> <a href="0895.php">Edgar Gabriel: "Re: [OMPI users] Error message about libopal.so"</a>
<li><strong>Reply:</strong> <a href="0899.php">Brian Barrett: "Re: [OMPI users] Error message about libopal.so"</a>
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

<?
$subject_val = "[OMPI users] ga-4.1 on mx segmentation violation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 10:17:18 2008" -->
<!-- isoreceived="20081021141718" -->
<!-- sent="Tue, 21 Oct 2008 15:14:32 +0100" -->
<!-- isosent="20081021141432" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="[OMPI users] ga-4.1 on mx segmentation violation" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE801BDF7DC_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] ga-4.1 on mx segmentation violation<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-21 10:14:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7059.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7057.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7076.php">Jeff Squyres: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Reply:</strong> <a href="7076.php">Jeff Squyres: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Reply:</strong> <a href="7078.php">Patrick Geoffray: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have built the release candidate for ga-4.1 with OpenMPI 1.2.3 and
<br>
portland compilers 7.0.2 for Myrinet mx.
<br>
<p>Running the test.x for 3 Myrinet nodes each with 4 cores I get the
<br>
following error messages:
<br>
<p>warning:regcache incompatible with malloc
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
------------------------------------------------------------------------
<br>
<pre>
--
[0,1,3]: OpenIB on host node057 was unable to find any HCAs.
Another transport will be used instead, although this may result in 
lower performance.
------------------------------------------------------------------------
--
(repetition of the above message)
------------------------------------------------------------------------
--
ARMCI configured for 3 cluster nodes. Network protocol is 'MPI-SPAWN'.
0:Segmentation Violation error, status=: 11
0:ARMCI DASSERT fail. signaltrap.c:SigSegvHandler():299 cond:0
4:Segmentation Violation error, status=: 11
4:ARMCI DASSERT fail. signaltrap.c:SigSegvHandler():299 cond:0
6:Segmentation Violation error, status=: 11
6:ARMCI DASSERT fail. signaltrap.c:SigSegvHandler():299 cond:0
Last System Error Message from Task 6:: No child processes
[node027:09712] *** An error occurred in MPI_Send
[node027:09712] *** on communicator MPI_COMM_WORLD
[node027:09712] *** MPI_ERR_COMM: invalid communicator
[node027:09712] *** MPI_ERRORS_ARE_FATAL (goodbye)
7:Segmentation Violation error, status=: 11
7:ARMCI DASSERT fail. signaltrap.c:SigSegvHandler():299 cond:0
Last System Error Message from Task 7:: Resource temporarily unavailable
[node027:09713] MPI_ABORT invoked on rank 7 in communicator
MPI_COMM_WORLD with errorcode 0
Last System Error Message from Task 0:: No child processes
[node020:14119] *** An error occurred in MPI_Send
[node020:14119] *** on communicator MPI_COMM_WORLD
[node020:14119] *** MPI_ERR_COMM: invalid communicator
[node020:14119] *** MPI_ERRORS_ARE_FATAL (goodbye)
1:Segmentation Violation error, status=: 11
1:ARMCI DASSERT fail. signaltrap.c:SigSegvHandler():299 cond:0
Last System Error Message from Task 1:: Resource temporarily unavailable
[node020:14120] MPI_ABORT invoked on rank 1 in communicator
MPI_COMM_WORLD with errorcode 0
2:Segmentation Violation error, status=: 11
2:ARMCI DASSERT fail. signaltrap.c:SigSegvHandler():299 cond:0
Last System Error Message from Task 2:: Resource temporarily unavailable
[node020:14121] MPI_ABORT invoked on rank 2 in communicator
MPI_COMM_WORLD with errorcode 0
3:Segmentation Violation error, status=: 11
3:ARMCI DASSERT fail. signaltrap.c:SigSegvHandler():299 cond:0
Last System Error Message from Task 3:: No child processes
[node057:15779] *** An error occurred in MPI_Send
[node057:15779] *** on communicator MPI_COMM_WORLD
[node057:15779] *** MPI_ERR_COMM: invalid communicator
[node057:15779] *** MPI_ERRORS_ARE_FATAL (goodbye)
Last System Error Message from Task 4:: Resource temporarily unavailable
[node057:15780] MPI_ABORT invoked on rank 4 in communicator
MPI_COMM_WORLD with errorcode 0
5:Segmentation Violation error, status=: 11
5:ARMCI DASSERT fail. signaltrap.c:SigSegvHandler():299 cond:0
Last System Error Message from Task 5:: Resource temporarily unavailable
[node057:15781] MPI_ABORT invoked on rank 5 in communicator
MPI_COMM_WORLD with errorcode 0
mpirun noticed that job rank 4 with PID 15780 on node node057 exited on
signal 42 (Real-time s
ignal 8). 
What could be the problem here?
Thanks
Henk
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7059.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7057.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7076.php">Jeff Squyres: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Reply:</strong> <a href="7076.php">Jeff Squyres: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Reply:</strong> <a href="7078.php">Patrick Geoffray: "Re: [OMPI users] ga-4.1 on mx segmentation violation"</a>
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

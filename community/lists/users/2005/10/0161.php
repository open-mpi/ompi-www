<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  6 10:58:02 2005" -->
<!-- isoreceived="20051006155802" -->
<!-- sent="Thu, 6 Oct 2005 08:57:44 -0700" -->
<!-- isosent="20051006155744" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[O-MPI users] Continued problems with Nasa Overflow code" -->
<!-- id="52B7AD4481DAB448AA2A477E44A609F20142C95E_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>From:</strong> Borenstein, Bernard S (<em>bernard.s.borenstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-06 10:57:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0162.php">Scott Robert Ladd: "Re: [O-MPI users] Continued problems with Nasa Overflow code"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/09/0160.php">Brian Barrett: "Re: [O-MPI users] more information on my overflow problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0162.php">Scott Robert Ladd: "Re: [O-MPI users] Continued problems with Nasa Overflow code"</a>
<li><strong>Reply:</strong> <a href="0162.php">Scott Robert Ladd: "Re: [O-MPI users] Continued problems with Nasa Overflow code"</a>
<li><strong>Reply:</strong> <a href="0163.php">Jeff Squyres: "Re: [O-MPI users] Continued problems with Nasa Overflow code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I built the Nasa Overflow 1.8ab code yesterday with openmpi-1.0a1r7632.
<br>
It runs fine with 4 or 8 opteron processors on a myrinet linux cluster.
<br>
But if I increase the number of processors to 20, I get errors like this
<br>
:
<br>
<p>[e053:01260] *** An error occurred in MPI_Free_mem
<br>
[e030:15585] *** An error occurred in MPI_Free_mem
<br>
[e013:27621] *** An error occurred in MPI_Free_mem
<br>
[e030:15585] *** on communicator MPI_COMM_WORLD
<br>
[e032:14179] *** An error occurred in MPI_Free_mem
<br>
[e053:01260] *** on communicator MPI_COMM_WORLD
<br>
[e030:15585] *** MPI_ERR_NO_MEM: out of memory
<br>
[e053:01260] *** MPI_ERR_NO_MEM: out of memory
<br>
[e013:27621] *** on communicator MPI_COMM_WORLD
<br>
[e030:15585] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[e032:14179] *** on communicator MPI_COMM_WORLD
<br>
[e053:01260] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[e013:27621] *** MPI_ERR_NO_MEM: out of memory
<br>
[e012:30846] *** An error occurred in MPI_Free_mem
<br>
[e012:30846] *** on communicator MPI_COMM_WORLD
<br>
[e012:30846] *** MPI_ERR_NO_MEM: out of memory
<br>
[e012:30846] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[e032:14179] *** MPI_ERR_NO_MEM: out of memory
<br>
[e013:27621] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[e032:14179] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[e032:14178] *** An error occurred in MPI_Free_mem
<br>
[e032:14178] *** on communicator MPI_COMM_WORLD
<br>
[e032:14178] *** MPI_ERR_NO_MEM: out of memory
<br>
[e032:14178] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;DIMENSIONS FOR COARSE LEVEL(S), GRID     1:
<br>
[e011:12272] spawn: in job_state_callback(jobid = 1, state = 0xa)
<br>
[e011:12272] spawn: in job_state_callback(jobid = 1, state = 0x9)
<br>
20 processes killed (possibly by Open MPI)
<br>
[e011:12272] sess_dir_finalize: found proc session dir empty - deleting
<br>
[e011:12272] sess_dir_finalize: job session dir not empty - leaving
<br>
<p>I am running using PBSPro and the Intel 9 compiler.  Any ideas on what I
<br>
could be doing wrong??  The size of my test problem is very small.
<br>
<p>Thanx,
<br>
<p>Bernie Borenstein
<br>
The Boeing Company
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0161/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0162.php">Scott Robert Ladd: "Re: [O-MPI users] Continued problems with Nasa Overflow code"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/09/0160.php">Brian Barrett: "Re: [O-MPI users] more information on my overflow problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0162.php">Scott Robert Ladd: "Re: [O-MPI users] Continued problems with Nasa Overflow code"</a>
<li><strong>Reply:</strong> <a href="0162.php">Scott Robert Ladd: "Re: [O-MPI users] Continued problems with Nasa Overflow code"</a>
<li><strong>Reply:</strong> <a href="0163.php">Jeff Squyres: "Re: [O-MPI users] Continued problems with Nasa Overflow code"</a>
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

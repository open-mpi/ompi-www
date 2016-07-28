<?
$subject_val = "[OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 23:17:29 2015" -->
<!-- isoreceived="20151027031729" -->
<!-- sent="Tue, 27 Oct 2015 12:17:20 +0900" -->
<!-- isosent="20151027031720" -->
<!-- name="ABE Hiroshi" -->
<!-- email="habe36_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Wait stalls" -->
<!-- id="23A17804-F8E5-4A18-BF98-D6F273CA34B3_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Wait stalls<br>
<strong>From:</strong> ABE Hiroshi (<em>habe36_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-26 23:17:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27924.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27922.php">Zhi Zhang: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27924.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27924.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27927.php">Nathan Hjelm: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I have a multithread-ed program and as a next step it is reconstructing to MPI program. The code is to be MPI / Multithread hybrid one.
<br>
<p>The code proceeds MPI-routines as:
<br>
<p>1. Send data by MPI_Isend with exlusive tag numbers to the other node. This is done in ONE master thread.
<br>
2. Receive the sent data by MPI_Irecv in several threads (usually the same as the number of CPU core) and do their jobs.
<br>
<p>There is one main thread (main process) and one master thread and several working threads in the code. MPI_Isend is called in the master thread.
<br>
MPI_Irecv is called in the working threads.
<br>
<p>My problem is MPI_Wait stalls after calling MPI_Isend. MPI_Wait is called just after MPI_Isend.  Several time the routines get through, but after sending several data MPI_Wait stalls.
<br>
<p>Using Xcode debugger, the loop with c-&gt;c_signaled at line 70 of opal_conidition_wait (opal/threads/condition.h) never escape.
<br>
<p>I guess I would make something wrong. I would like to know how to find the problem. 
<br>
I would be obliged if you&#226;&#128;&#153;d point the solution or the next direction to be investigated for debugging.
<br>
<p>My Environment : OSX 10.9.5, Apple LLVM 6.0 (LLVM 3.5svn), OpenMPI 1.10.0
<br>
The thread is wxThread from wxWidgets Library (3.0.2) which is a wrapper of pthread.
<br>
<p>OpenMPI is configure-ed : --enable-mpi-thread-multiple --enable-debug --enable-event-debug
<br>
Please find the detail (config.log and ompi_info &#226;&#128;&#148;all) attached in this mail.
<br>
<p>Thank you very much in advance.
<br>
<p>Sincerely,
<br>
<p>ABE Hiroshi
<br>
&nbsp;from Tokorozawa, JAPAN
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27923/logs.tar.bz">logs.tar.bz</a>
</ul>
<!-- attachment="logs.tar.bz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27924.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27922.php">Zhi Zhang: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27924.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27924.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27927.php">Nathan Hjelm: "Re: [OMPI users] MPI_Wait stalls"</a>
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

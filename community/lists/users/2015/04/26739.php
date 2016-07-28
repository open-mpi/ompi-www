<?
$subject_val = "[OMPI users] Why 3 threads per MPI task in pure MPI job?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 11:37:00 2015" -->
<!-- isoreceived="20150415153700" -->
<!-- sent="Wed, 15 Apr 2015 15:36:46 +0000" -->
<!-- isosent="20150415153646" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="[OMPI users] Why 3 threads per MPI task in pure MPI job?" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC46AED565_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> [OMPI users] Why 3 threads per MPI task in pure MPI job?<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 11:36:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26740.php">Ralph Castain: "Re: [OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
<li><strong>Previous message:</strong> <a href="26738.php">Mike Dubman: "Re: [OMPI users] Select a card in a multi card system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26740.php">Ralph Castain: "Re: [OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
<li><strong>Reply:</strong> <a href="26740.php">Ralph Castain: "Re: [OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I stumbled upon something while using 'ps -eFL' to view threads of processes, and Google searches have failed to answer my question.  This question holds for OpenMPI 1.6.x and even OpenMPI 1.4.x.
<br>
<p>For a program which is pure MPI (built and run using OpenMPI) and does not implement Pthreads or OpenMP, why is it that each MPI task appears as having 3 threads:
<br>
<p>UID      PID  PPID   LWP  C NLWP    SZ   RSS PSR STIME TTY          TIME CMD
<br>
sasso  20512 20493 20512 99    3 187849 582420 14 11:01 ?       00:26:37 /home/sasso/mpi_example.exe
<br>
sasso  20512 20493 20588  0    3 187849 582420 11 11:01 ?       00:00:00 /home/sasso/mpi_example.exe
<br>
sasso  20512 20493 20599  0    3 187849 582420 12 11:01 ?       00:00:00 /home/sasso/mpi_example.exe
<br>
<p>whereas if I compile and run a non-MPI program, 'ps -eFL' shows it running as a single thread?
<br>
<p>Granted the CPU utilization (C) for 2 of the 3 threads is zero, but the threads are bound to different processors (11,12,14).   I am curious as to why this is, and no complaining that there is a problem.  Thanks!
<br>
<p>--john
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26739/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26740.php">Ralph Castain: "Re: [OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
<li><strong>Previous message:</strong> <a href="26738.php">Mike Dubman: "Re: [OMPI users] Select a card in a multi card system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26740.php">Ralph Castain: "Re: [OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
<li><strong>Reply:</strong> <a href="26740.php">Ralph Castain: "Re: [OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
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

<?
$subject_val = "[OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 17:22:30 2014" -->
<!-- isoreceived="20140425212230" -->
<!-- sent="Fri, 25 Apr 2014 23:22:19 +0200" -->
<!-- isosent="20140425212219" -->
<!-- name="Markus Wittmann" -->
<!-- email="markus.wittmann_at_[hidden]" -->
<!-- subject="[OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE" -->
<!-- id="535AD20B.90602_at_fau.de" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Markus Wittmann (<em>markus.wittmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 17:22:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24261.php">Ralph Castain: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="24259.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24261.php">Ralph Castain: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="24261.php">Ralph Castain: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I'm using the current Open MPI 1.8.1 release and observe
<br>
non-deterministic deadlocks and warnings from libevent when using
<br>
MPI_THREAD_MULTIPLE. Open MPI has been configured with
<br>
--enable-mpi-thread-multiple --with-tm --with-verbs (see attached
<br>
config.log)
<br>
<p>Attached is a sample application that spawns a thread for each process
<br>
after MPI_Init_thread has been called. The thread then calls MPI_Recv
<br>
which blocks until the matching MPI_Send is called just before
<br>
MPI_Finalize is called in the main thread. (AFAIK MPICH uses such kind
<br>
of facility to implement a progress thread) Meanwhile the main thread
<br>
exchanges data with its right/left neighbor via ISend/IRecv.
<br>
<p>I only see this, when the MPI processes run on separate nodes like in
<br>
the following:
<br>
<p>$ mpiexec -n 2 -map-by node ./test
<br>
[0] isend/irecv.
<br>
[0] progress thread...
<br>
[0] waitall.
<br>
[warn] opal_libevent2021_event_base_loop: reentrant invocation. Only one 
<br>
event_base_loop can run on each event_base at once.
<br>
[1] isend/irecv.
<br>
[1] progress thread...
<br>
[1] waitall.
<br>
[warn] opal_libevent2021_event_base_loop: reentrant invocation. Only one 
<br>
event_base_loop can run on each event_base at once.
<br>
<p>&lt;no further output...&gt;
<br>
<p>Can anybody confirm this?
<br>
<p>Best regards,
<br>
Markus
<br>
<p><pre>
-- 
Markus Wittmann, HPC Services
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
Regionales Rechenzentrum Erlangen (RRZE)
Martensstrasse 1, 91058 Erlangen, Germany
<a href="http://www.rrze.fau.de/hpc/">http://www.rrze.fau.de/hpc/</a>


</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24260/info.tar.bz2">info.tar.bz2</a>
</ul>
<!-- attachment="info.tar.bz2" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24260/test.c">test.c</a>
</ul>
<!-- attachment="test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24261.php">Ralph Castain: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="24259.php">Jamil Appa: "[OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24261.php">Ralph Castain: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="24261.php">Ralph Castain: "Re: [OMPI users] Deadlocks and warnings from libevent when using MPI_THREAD_MULTIPLE"</a>
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

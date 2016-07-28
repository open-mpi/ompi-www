<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 13 22:41:41 2006" -->
<!-- isoreceived="20060114034141" -->
<!-- sent="Fri, 13 Jan 2006 19:41:28 -0800" -->
<!-- isosent="20060114034128" -->
<!-- name="Glenn Morris" -->
<!-- email="gmorris_at_[hidden]" -->
<!-- subject="[O-MPI users] Trouble combining OpenMPI and OpenMP" -->
<!-- id="nqirsnbhnb.fsf_at_iris02.slac.stanford.edu" -->
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
<strong>From:</strong> Glenn Morris (<em>gmorris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-13 22:41:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0503.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0501.php">Kraig Winters: "[O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0503.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0503.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having trouble with an application (CosmoMC;
<br>
&lt;<a href="http://cosmologist.info/cosmomc/">http://cosmologist.info/cosmomc/</a>&gt;) that can use both OpenMPI and
<br>
OpenMP.
<br>
<p>I have several Opteron boxes, each with 2 * dual core CPUs. I want to
<br>
run the application with 4 MPI threads (one per box), each of which in
<br>
turn splits into 4 OpenMP threads (one per CPU).
<br>
<p>The code is Fortran 90, and the compiler is the Intel Fortran Compiler
<br>
Version 8.1. OpenMPI v1.0.1 works fine (communicating between boxes or
<br>
amongst the CPUs in a single box) without OpenMP, and OpenMP works
<br>
fine without OpenMPI.
<br>
<p>The combination OpenMP + OpenMPI works fine if I restrict the
<br>
application to only 1 OpenMP thread per MPI process (in other words
<br>
the code at least compiles and runs fine with both options on, in this
<br>
limited sense). If I try to use my desired value of 4 OpenMP threads,
<br>
it crashes. It works fine, however, if I use MPICH for the MPI
<br>
implementation.
<br>
<p>The hostfile specifies &quot;slots=4 max-slots=4&quot; for each host (trying to
<br>
lie and say &quot;slots=1&quot; die not help), and I use &quot;-np 4 --bynode&quot; to get
<br>
only one MPI process per host. I'm using ssh over Gbit ethernet
<br>
between hosts.
<br>
<p>There is no useful error message that I can see. Watching top, I can
<br>
see that processes are spawned on the four hosts, split into 4 OpenMP
<br>
threads, and then crash immediately. The only error message is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun noticed that job rank 0 with PID 30243 on node &quot;coma006&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exited on signal 11.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Broken pipe
<br>
<p><p>Using mpirun -d reveals nothing useful to me (see end of message).
<br>
<p><p>I realize this is all rather vague. Any advice, or tips for debugging
<br>
(or OpenMPI + OpenMP success stories!) appreciated.
<br>
<p><p>TIA.
<br>
<p><p>[coma006:30450] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 4
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, coma003, ./cosmomc, 20847)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, coma004, ./cosmomc, 21622)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, coma005, ./cosmomc, 22080)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, coma006, ./cosmomc, 30461)
<br>
[coma006:30450] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[coma006:30461] [0,1,0] ompi_mpi_init completed
<br>
[coma004:21622] [0,1,2] ompi_mpi_init completed
<br>
[coma005:22080] [0,1,1] ompi_mpi_init completed
<br>
[coma003:20847] [0,1,3] ompi_mpi_init completed
<br>
&lt;snip application output&gt;
<br>
[coma005:22079] sess_dir_finalize: found proc session dir empty - deleting
<br>
[coma005:22079] sess_dir_finalize: found job session dir empty - deleting
<br>
[coma005:22079] sess_dir_finalize: univ session dir not empty - leaving
<br>
[coma006:30450] spawn: in job_state_callback(jobid = 1, state = 0xa)
<br>
[coma006:30451] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_ABORTED)
<br>
[coma005:22079] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_ABORTED)
<br>
[coma004:21621] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_ABORTED)
<br>
mpirun noticed that job rank 1 with PID 22080 on node &quot;coma005&quot; exited on signal 11.
<br>
[coma003:20846] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_ABORTED)
<br>
[coma005:22079] sess_dir_finalize: found proc session dir empty - deleting
<br>
[coma005:22079] sess_dir_finalize: found job session dir empty - deleting
<br>
[coma005:22079] sess_dir_finalize: found univ session dir empty - deleting
<br>
[coma005:22079] sess_dir_finalize: top session dir not empty - leaving
<br>
&lt;repeated for other hosts&gt;
<br>
3 processes killed (possibly by Open MPI)
<br>
[coma006:30451] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_TERMINATED)
<br>
[coma006:30451] sess_dir_finalize: found proc session dir empty - deleting
<br>
[coma006:30451] sess_dir_finalize: job session dir not empty - leaving
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0503.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Previous message:</strong> <a href="0501.php">Kraig Winters: "[O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0503.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0503.php">Brian Barrett: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
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

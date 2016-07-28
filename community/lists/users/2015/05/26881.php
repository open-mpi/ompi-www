<?
$subject_val = "[OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 18:29:44 2015" -->
<!-- isoreceived="20150519222944" -->
<!-- sent="Tue, 19 May 2015 18:29:38 -0400" -->
<!-- isosent="20150519222938" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="[OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service" -->
<!-- id="20150519222938.GH5298_at_avicenna.ee.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-19 18:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26882.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26880.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26883.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26883.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm encountering intermittent errors while trying to use the Multi-Process
<br>
Service with CUDA 7.0 for improving concurrent access to a Kepler K20Xm GPU by
<br>
multiple MPI processes that perform GPU-to-GPU communication with each other
<br>
(i.e., GPU pointers are passed to the MPI transmission primitives). I'm using
<br>
GitHub revision 41676a1 of mpi4py built against OpenMPI 1.8.5, which is in turn
<br>
built against CUDA 7.0. In my current configuration, I have 4 MPS server daemons
<br>
running, each of which controls access to one of 4 GPUs; the MPI processes
<br>
spawned by my program are partitioned into 4 groups (which might contain
<br>
different numbers of processes) that each talk to a separate daemon. For certain
<br>
transmission patterns between these processes, the program runs without any
<br>
problems. For others (e.g., 16 processes partitioned into 4 groups), however, it
<br>
dies with the following error:
<br>
<p>[node05:20562] Failed to register remote memory, rc=-1
<br>
--------------------------------------------------------------------------
<br>
The call to cuIpcOpenMemHandle failed. This is an unrecoverable error
<br>
and will cause the program to abort.
<br>
&nbsp;&nbsp;cuIpcOpenMemHandle return value:   21199360
<br>
&nbsp;&nbsp;address: 0x1
<br>
Check the cuda.h file for what the return value means. Perhaps a reboot
<br>
of the node will clear the problem.
<br>
--------------------------------------------------------------------------
<br>
[node05:20562] [[58522,2],4] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
<br>
-------------------------------------------------------
<br>
Child job 2 terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
[node05][[58522,2],5][btl_tcp_frag.c:142:mca_btl_tcp_frag_send]
<br>
mca_btl_tcp_frag_send: writev failed: Connection reset by peer (104)
<br>
[node05:20564] Failed to register remote memory, rc=-1
<br>
[node05:20564] [[58522,2],6] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
<br>
[node05:20566] Failed to register remote memory, rc=-1
<br>
[node05:20566] [[58522,2],8] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
<br>
[node05:20567] Failed to register remote memory, rc=-1
<br>
[node05:20567] [[58522,2],9] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
<br>
[node05][[58522,2],11][btl_tcp_frag.c:237:mca_btl_tcp_frag_recv]
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
[node05:20569] Failed to register remote memory, rc=-1
<br>
[node05:20569] [[58522,2],11] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
<br>
[node05:20571] Failed to register remote memory, rc=-1
<br>
[node05:20571] [[58522,2],13] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
<br>
[node05:20572] Failed to register remote memory, rc=-1
<br>
[node05:20572] [[58522,2],14] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
<br>
<p>After the above error occurs, I notice that /dev/shm/ is littered with
<br>
cuda.shm.* files. I tried cleaning up /dev/shm before running my program, but
<br>
that doesn't seem to have any effect upon the problem. Rebooting the machine
<br>
also doesn't have any effect. I should also add that my program runs without any
<br>
error if the groups of MPI processes talk directly to the GPUs instead of via
<br>
MPS.
<br>
<p>Does anyone have any ideas as to what could be going on?
<br>
<pre>
-- 
Lev Givon
Bionet Group | Neurokernel Project
<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26882.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26880.php">Ralph Castain: "Re: [OMPI users] Openmpi 1.8.5 on Linux with threading support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26883.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26883.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
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

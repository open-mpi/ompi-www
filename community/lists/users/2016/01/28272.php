<?
$subject_val = "[OMPI users] runtime error with openmpi-v1.10.1-140-g31ff573";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 08:44:10 2016" -->
<!-- isoreceived="20160114134410" -->
<!-- sent="Thu, 14 Jan 2016 14:43:28 +0100" -->
<!-- isosent="20160114134328" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] runtime error with openmpi-v1.10.1-140-g31ff573" -->
<!-- id="5697A600.3010205_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] runtime error with openmpi-v1.10.1-140-g31ff573<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-14 08:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28273.php">Siegmar Gross: "[OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Previous message:</strong> <a href="28271.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've successfully built openmpi-v1.10.1-140-g31ff573 on my machine
<br>
(SUSE Linux Enterprise Server 12.0 x86_64) with gcc-5.2.0 and
<br>
Sun C 5.13. Unfortunately I get a runtime error for a small
<br>
program spawning a process. Everything works as expected with my
<br>
programs &quot;spawn_multiple_master&quot; and &quot;spawn_intra_comm&quot;. It doesn't
<br>
matter if I use my cc or gcc version of Open MPI.
<br>
<p><p>loki spawn 136 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>[loki:18287] *** Process received signal ***
<br>
[loki:18287] Signal: Segmentation fault (11)
<br>
[loki:18287] Signal code: Address not mapped (1)
<br>
[loki:18287] Failing at address: 0x8
<br>
[loki:18287] [ 0] /lib64/libpthread.so.0(+0xf890)[0x7fd2c9a9a890]
<br>
[loki:18287] [ 1] /usr/local/openmpi-1.10.2_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7fd2c9cfd53a]
<br>
[loki:18287] [ 2] *** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[loki:18285] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to 
<br>
guarantee that all other processes were killed!
<br>
/usr/local/openmpi-1.10.2_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7fd2c9cdcadd]
<br>
[loki:18287] [ 3] /usr/local/openmpi-1.10.2_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa69)[0x7fd2c9d02ddb]
<br>
[loki:18287] [ 4] *** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[loki:18286] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to 
<br>
guarantee that all other processes were killed!
<br>
/usr/local/openmpi-1.10.2_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7fd2c9d3f0ac]
<br>
[loki:18287] [ 5] spawn_slave[0x40097e]
<br>
[loki:18287] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7fd2c9705b05]
<br>
[loki:18287] [ 7] spawn_slave[0x400a54]
<br>
[loki:18287] *** End of error message ***
<br>
-------------------------------------------------------
<br>
Child job 2 terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;&nbsp;Process name: [[55509,2],0]
<br>
&nbsp;&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
loki spawn 136
<br>
<p><p><p><p>loki spawn 136 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_multiple_master
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;I create 3 slave processes.
<br>
<p>Parent process 0: tasks in MPI_COMM_WORLD:                    1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES local group:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES remote group: 2
<br>
<p>Slave process 1 of 2 running on loki
<br>
spawn_slave 1: argv[0]: spawn_slave
<br>
spawn_slave 1: argv[1]: program type 2
<br>
spawn_slave 1: argv[2]: another parameter
<br>
Slave process 0 of 2 running on loki
<br>
spawn_slave 0: argv[0]: spawn_slave
<br>
spawn_slave 0: argv[1]: program type 1
<br>
<p><p>loki spawn 137 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_intra_comm
<br>
Parent process 0: I create 2 slave processes
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_local:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CHILD_PROCESSES ntasks_remote: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        0
<br>
<p>Child process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD ntasks:              1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_ALL_PROCESSES ntasks:          2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid in COMM_ALL_PROCESSES:        1
<br>
loki spawn 138
<br>
<p><p><p>I would be grateful if somebody can fix the problem. Please let me
<br>
know if you need anything else. Thank you very much for any help in
<br>
advance.
<br>
<p><p>Best regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28273.php">Siegmar Gross: "[OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Previous message:</strong> <a href="28271.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
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

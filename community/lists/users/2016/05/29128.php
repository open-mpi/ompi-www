<?
$subject_val = "[OMPI users] slot-list breaks for openmpi-v1.10.2-176-g9d45e07 on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  7 04:49:19 2016" -->
<!-- isoreceived="20160507084919" -->
<!-- sent="Sat, 7 May 2016 10:49:03 +0200" -->
<!-- isosent="20160507084903" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] slot-list breaks for openmpi-v1.10.2-176-g9d45e07 on &amp;quot;SUSE Linux, Enterprise Server 12 (x86_64)&amp;quot;" -->
<!-- id="5f217da7-c258-572b-9713-c5aeed376916_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] slot-list breaks for openmpi-v1.10.2-176-g9d45e07 on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-07 04:49:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29129.php">Siegmar Gross: "[OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Previous message:</strong> <a href="29127.php">Siegmar Gross: "[OMPI users] problem compiling Java programs with openmpi-v1.10.2-176-g9d45e07"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-v1.10.2-176-g9d45e07 on my &quot;SUSE Linux
<br>
Enterprise Server 12 (x86_64)&quot; with Sun C 5.13  and gcc-5.3.0.
<br>
Unfortunately I have a problem with one of my spawn programs.
<br>
<p>loki spawn 129 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.2-176-g9d45e07
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.4/bin/cc
<br>
loki spawn 130 mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>Parent process 0: tasks in MPI_COMM_WORLD:                    1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES local group:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES remote group: 4
<br>
<p>Slave process 1 of 4 running on loki
<br>
Slave process 2 of 4 running on loki
<br>
Slave process 3 of 4 running on loki
<br>
Slave process 0 of 4 running on loki
<br>
spawn_slave 0: argv[0]: spawn_slave
<br>
spawn_slave 1: argv[0]: spawn_slave
<br>
spawn_slave 2: argv[0]: spawn_slave
<br>
spawn_slave 3: argv[0]: spawn_slave
<br>
loki spawn 131 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>[loki:02080] *** Process received signal ***
<br>
[loki:02080] Signal: Segmentation fault (11)
<br>
[loki:02080] Signal code: Address not mapped (1)
<br>
[loki:02080] Failing at address: (nil)
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[loki:2073] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes 
<br>
were killed!
<br>
[loki:2079] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes 
<br>
were killed!
<br>
[loki:02080] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f485c593870]
<br>
[loki:02080] [ 1] 
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12(+0x16d4df)[0x7f485c90e4df]
<br>
[loki:02080] [ 2] 
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12(ompi_group_increment_proc_count+0x35)[0x7f485c90eee5]
<br>
[loki:02080] [ 3] 
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12(ompi_comm_init+0x2fc)[0x7f485c8be9fc]
<br>
[loki:02080] [ 4] 
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12(ompi_mpi_init+0xd12)[0x7f485c962942]
<br>
[loki:02080] [ 5] 
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12(PMPI_Init+0x1f2)[0x7f485cda7332]
<br>
[loki:02080] [ 6] spawn_slave[0x400a89]
<br>
[loki:02080] [ 7] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f485c1fdb05]
<br>
[loki:02080] [ 8] spawn_slave[0x400952]
<br>
[loki:02080] *** End of error message ***
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
mpiexec detected that one or more processes exited with non-zero status, thus 
<br>
causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;&nbsp;Process name: [[38824,2],0]
<br>
&nbsp;&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
loki spawn 132
<br>
<p><p><p>Everything works fine with spawn_multiple_master.
<br>
<p>loki spawn 134 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 
<br>
spawn_multiple_master
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
<p>Slave process 0 of 2 running on loki
<br>
...
<br>
<p><p><p>I have a similar error with openmpi-v2.x-dev-1404-g74d8ea0. My other
<br>
spawn programs work more or less as expected, although spawn_intra_comm
<br>
doesn't return so that I have to break it with &lt;Ctrl-c&gt;.
<br>
<p>loki spawn 124 ompi_info | grep -e &quot;OPAL repo revision&quot; -e &quot;C compiler absolute&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v2.x-dev-1404-g74d8ea0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.4/bin/cc
<br>
loki spawn 125 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>[loki:03931] OPAL ERROR: Timeout in file 
<br>
../../../../openmpi-v2.x-dev-1404-g74d8ea0/opal/mca/pmix/base/pmix_base_fns.c at 
<br>
line 190
<br>
[loki:3931] *** An error occurred in MPI_Comm_spawn
<br>
[loki:3931] *** reported by process [2431254529,0]
<br>
[loki:3931] *** on communicator MPI_COMM_WORLD
<br>
[loki:3931] *** MPI_ERR_UNKNOWN: unknown error
<br>
[loki:3931] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[loki:3931] ***    and potentially your MPI job)
<br>
loki spawn 126
<br>
<p><p>I would be grateful, if somebody can fix the problem. Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29128/spawn_master.c">spawn_master.c</a>
</ul>
<!-- attachment="spawn_master.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29128/spawn_intra_comm.c">spawn_intra_comm.c</a>
</ul>
<!-- attachment="spawn_intra_comm.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29129.php">Siegmar Gross: "[OMPI users] warning message for process binding with openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Previous message:</strong> <a href="29127.php">Siegmar Gross: "[OMPI users] problem compiling Java programs with openmpi-v1.10.2-176-g9d45e07"</a>
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

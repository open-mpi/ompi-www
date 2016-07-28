<?
$subject_val = "[OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 09:27:05 2016" -->
<!-- isoreceived="20160523132705" -->
<!-- sent="Mon, 23 May 2016 15:26:52 +0200" -->
<!-- isosent="20160523132652" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2" -->
<!-- id="241613b1-ada6-292f-eeb9-722fc8fa2f94_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 09:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Previous message:</strong> <a href="29280.php">Andy Riebs: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29284.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29284.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I installed openmpi-1.10.3rc2 on my &quot;SUSE Linux Enterprise Server
<br>
12 (x86_64)&quot; with Sun C 5.13  and gcc-6.1.0. Unfortunately I get
<br>
a segmentation fault for &quot;--slot-list&quot; for one of my small programs.
<br>
<p><p>loki spawn 119 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.2-201-gd23dda8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-6.1.0/bin/gcc
<br>
<p><p>loki spawn 120 mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master
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
<p>Slave process 0 of 4 running on loki
<br>
Slave process 1 of 4 running on loki
<br>
Slave process 2 of 4 running on loki
<br>
spawn_slave 2: argv[0]: spawn_slave
<br>
Slave process 3 of 4 running on loki
<br>
spawn_slave 0: argv[0]: spawn_slave
<br>
spawn_slave 1: argv[0]: spawn_slave
<br>
spawn_slave 3: argv[0]: spawn_slave
<br>
<p><p><p><p>loki spawn 121 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>[loki:17326] *** Process received signal ***
<br>
[loki:17326] Signal: Segmentation fault (11)
<br>
[loki:17326] Signal code: Address not mapped (1)
<br>
[loki:17326] Failing at address: 0x8
<br>
[loki:17326] [ 0] /lib64/libpthread.so.0(+0xf870)[0x7f4e469b3870]
<br>
[loki:17326] [ 1] *** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[loki:17324] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes 
<br>
were killed!
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_proc_self+0x35)[0x7f4e46c165b0]
<br>
[loki:17326] [ 2] 
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_comm_init+0x68b)[0x7f4e46bf5b08]
<br>
[loki:17326] [ 3] *** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[loki:17325] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes 
<br>
were killed!
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(ompi_mpi_init+0xa90)[0x7f4e46c1be8a]
<br>
[loki:17326] [ 4] 
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12(MPI_Init+0x180)[0x7f4e46c5828e]
<br>
[loki:17326] [ 5] spawn_slave[0x40097e]
<br>
[loki:17326] [ 6] /lib64/libc.so.6(__libc_start_main+0xf5)[0x7f4e4661db05]
<br>
[loki:17326] [ 7] spawn_slave[0x400a54]
<br>
[loki:17326] *** End of error message ***
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
<p>&nbsp;&nbsp;&nbsp;Process name: [[56340,2],0]
<br>
&nbsp;&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
loki spawn 122
<br>
<p><p><p><p>I would be grateful, if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29282.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem about mpirun on two nodes"</a>
<li><strong>Previous message:</strong> <a href="29280.php">Andy Riebs: "Re: [OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29284.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
<li><strong>Reply:</strong> <a href="29284.php">Ralph Castain: "Re: [OMPI users] segmentation fault for slot-list and openmpi-1.10.3rc2"</a>
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

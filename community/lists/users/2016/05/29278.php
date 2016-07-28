<?
$subject_val = "[OMPI users] problem with slot-list and openmpi-v2.x-dev-1441-g402abf9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 23 07:38:36 2016" -->
<!-- isoreceived="20160523113836" -->
<!-- sent="Mon, 23 May 2016 13:38:02 +0200" -->
<!-- isosent="20160523113802" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with slot-list and openmpi-v2.x-dev-1441-g402abf9" -->
<!-- id="8b48b8dd-20ff-9a83-5223-024fe4975587_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with slot-list and openmpi-v2.x-dev-1441-g402abf9<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-23 07:38:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29279.php">Megdich Islem: "[OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>Previous message:</strong> <a href="29277.php">Siegmar Gross: "[OMPI users] another problem with slot-list and openmpi-v2.x-dev-1441-g402abf9"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I installed openmpi-v2.x-dev-1441-g402abf9 on my &quot;SUSE Linux Enterprise
<br>
Server 12 (x86_64)&quot; with Sun C 5.14  and gcc-6.1.0. Unfortunately I get
<br>
a timeout error for &quot;--slot-list&quot;. It's the same behaviour for both
<br>
compilers.
<br>
<p><p>loki spawn 143 mpiexec -np 1 --host loki,loki,loki,nfs1,nfs1 spawn_master
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
spawn_slave 1: argv[0]: spawn_slave
<br>
spawn_slave 0: argv[0]: spawn_slave
<br>
Slave process 2 of 4 running on nfs1
<br>
Slave process 3 of 4 running on nfs1
<br>
spawn_slave 2: argv[0]: spawn_slave
<br>
spawn_slave 3: argv[0]: spawn_slave
<br>
<p><p>loki spawn 144 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>[loki:15594] OPAL ERROR: Timeout in file 
<br>
../../../../openmpi-v2.x-dev-1441-g402abf9/opal/mca/pmix/base/pmix_base_fns.c at 
<br>
line 195
<br>
[loki:15594] *** An error occurred in MPI_Comm_spawn
<br>
[loki:15594] *** reported by process [2740518913,0]
<br>
[loki:15594] *** on communicator MPI_COMM_WORLD
<br>
[loki:15594] *** MPI_ERR_UNKNOWN: unknown error
<br>
[loki:15594] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now 
<br>
abort,
<br>
[loki:15594] ***    and potentially your MPI job)
<br>
loki spawn 145
<br>
<p><p><p>I would be grateful, if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29278/spawn_master.c">spawn_master.c</a>
</ul>
<!-- attachment="spawn_master.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29278/spawn_slave.c">spawn_slave.c</a>
</ul>
<!-- attachment="spawn_slave.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29279.php">Megdich Islem: "[OMPI users] Open MPI does not work when MPICH or intel MPI are installed"</a>
<li><strong>Previous message:</strong> <a href="29277.php">Siegmar Gross: "[OMPI users] another problem with slot-list and openmpi-v2.x-dev-1441-g402abf9"</a>
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

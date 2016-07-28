<?
$subject_val = "[OMPI users] openmpi-v2.x-dev-1468-g6011906: error in MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 11:13:46 2016" -->
<!-- isoreceived="20160607151346" -->
<!-- sent="Tue, 7 Jun 2016 17:13:38 +0200" -->
<!-- isosent="20160607151338" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-v2.x-dev-1468-g6011906: error in MPI_Comm_spawn" -->
<!-- id="c6d3c136-a05e-6860-083f-8620ed7d6bdc_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-v2.x-dev-1468-g6011906: error in MPI_Comm_spawn<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-07 11:13:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29393.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29391.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I installed openmpi-v2.x-dev-1468-g6011906 on my &quot;SUSE Linux Enterprise
<br>
Server 12 (x86_64)&quot; with Sun C 5.13  and gcc-6.1.0. Unfortunately I
<br>
get an error for the combination of &quot;--host&quot; and &quot;--slot-list&quot; for a
<br>
small program, while the program runs as expected with a single option
<br>
&quot;--host&quot; or &quot;--slot-list&quot;. I reported this problem already for
<br>
openmpi-1.10.3, where I got and still get a segmentation fault for the
<br>
same combination. By the way, the combination works without problems for
<br>
openmpi-dev-4221-gb707d13.
<br>
<p><p>loki spawn 162 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v2.x-dev-1468-g6011906
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /opt/solstudio12.4/bin/cc
<br>
loki spawn 162 mpiexec -np 1 --host loki,loki,loki,loki,loki spawn_master
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>Slave process 0 of 4 running on loki
<br>
spawn_slave 0: argv[0]: spawn_slave
<br>
Slave process 1 of 4 running on loki
<br>
spawn_slave 1: argv[0]: spawn_slave
<br>
Slave process 2 of 4 running on loki
<br>
spawn_slave 2: argv[0]: spawn_slave
<br>
Slave process 3 of 4 running on loki
<br>
spawn_slave 3: argv[0]: spawn_slave
<br>
Parent process 0: tasks in MPI_COMM_WORLD:                    1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES local group:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES remote group: 4
<br>
<p>loki spawn 163 mpiexec -np 1 --host loki --slot-list 0:0-5,1:0-5 spawn_master
<br>
Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>[loki:19507] OPAL ERROR: Timeout in file 
<br>
../../../../openmpi-v2.x-dev-1468-g6011906/opal/mca/pmix/base/pmix_base_fns.c 
<br>
at line 195
<br>
[loki:19507] *** An error occurred in MPI_Comm_spawn
<br>
[loki:19507] *** reported by process [3549560833,0]
<br>
[loki:19507] *** on communicator MPI_COMM_WORLD
<br>
[loki:19507] *** MPI_ERR_UNKNOWN: unknown error
<br>
[loki:19507] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now 
<br>
abort,
<br>
[loki:19507] ***    and potentially your MPI job)
<br>
loki spawn 164
<br>
<p><p>loki spawn 164 mpiexec -np 1 --slot-list 0:0-5,1:0-5 spawn_master
<br>
<p>Parent process 0 running on loki
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
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
spawn_slave 3: argv[0]: spawn_slave
<br>
Parent process 0: tasks in MPI_COMM_WORLD:                    1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES local group:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tasks in COMM_CHILD_PROCESSES remote group: 4
<br>
<p>spawn_slave 0: argv[0]: spawn_slave
<br>
spawn_slave 1: argv[0]: spawn_slave
<br>
loki spawn 165
<br>
<p><p>I would be grateful if somebody can fix the problem. Thank you very much
<br>
for any help in advance.
<br>
<p><p>Best regards
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29392/spawn_master.c">spawn_master.c</a>
</ul>
<!-- attachment="spawn_master.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29392/spawn_slave.c">spawn_slave.c</a>
</ul>
<!-- attachment="spawn_slave.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29393.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29391.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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

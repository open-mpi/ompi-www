<?
$subject_val = "[OMPI users] ORTE daemon has unexpectedly failed after launch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 08:15:00 2014" -->
<!-- isoreceived="20140812121500" -->
<!-- sent="Tue, 12 Aug 2014 16:14:58 +0400" -->
<!-- isosent="20140812121458" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="[OMPI users] ORTE daemon has unexpectedly failed after launch" -->
<!-- id="1407845698.21224342_at_f221.i.mail.ru" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F3DE32B7-227B-46E5-9E13-F4826252BB65_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] ORTE daemon has unexpectedly failed after launch<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-12 08:14:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24988.php">Timur Ismagilov: "[OMPI users]  ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Previous message:</strong> <a href="24986.php">Antonio Rago: "[OMPI users] Multiple runs interaction"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24857.php">Ralph Castain: "Re: [OMPI users] Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24988.php">Timur Ismagilov: "[OMPI users]  ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Reply:</strong> <a href="24988.php">Timur Ismagilov: "[OMPI users]  ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Maybe reply:</strong> <a href="25001.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I have Open MPI &#194;&#160;v1.8.2rc4r32485
<br>
<p>When i run hello_c,&#194;&#160;I got this error message
<br>
$mpirun &#194;&#160;-np 2 hello_c
<br>
<p>An ORTE daemon has unexpectedly failed after launch and before
<br>
communicating back to mpirun. This could be caused by a number
<br>
of factors, including an inability to create a connection back
<br>
to mpirun due to a lack of common network interfaces and/or no
<br>
route found between them. Please check network connectivity
<br>
(including firewalls and network routing requirements).
<br>
<p>When i run with&#194;&#160;--debug-daemons --mca plm_base_verbose 5 -mca oob_base_verbose 10 -mca rml_base_verbose 10 i got this output:
<br>
$mpirun &#194;&#160;--debug-daemons --mca plm_base_verbose 5 -mca oob_base_verbose 10 -mca rml_base_verbose 10 &#194;&#160; -np 2 hello_c
<br>
[compiler-2:08780] mca:base:select:( plm) Querying component [isolated]
<br>
[compiler-2:08780] mca:base:select:( plm) Query of component [isolated] set priority to 0
<br>
[compiler-2:08780] mca:base:select:( plm) Querying component [rsh]
<br>
[compiler-2:08780] mca:base:select:( plm) Query of component [rsh] set priority to 10
<br>
[compiler-2:08780] mca:base:select:( plm) Querying component [slurm]
<br>
[compiler-2:08780] mca:base:select:( plm) Query of component [slurm] set priority to 75
<br>
[compiler-2:08780] mca:base:select:( plm) Selected component [slurm]
<br>
[compiler-2:08780] mca: base: components_register: registering oob components
<br>
[compiler-2:08780] mca: base: components_register: found loaded component tcp
<br>
[compiler-2:08780] mca: base: components_register: component tcp register function successful
<br>
[compiler-2:08780] mca: base: components_open: opening oob components
<br>
[compiler-2:08780] mca: base: components_open: found loaded component tcp
<br>
[compiler-2:08780] mca: base: components_open: component tcp open function successful
<br>
[compiler-2:08780] mca:oob:select: checking available component tcp
<br>
[compiler-2:08780] mca:oob:select: Querying component [tcp]
<br>
[compiler-2:08780] oob:tcp: component_available called
<br>
[compiler-2:08780] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[compiler-2:08780] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
<br>
[compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.0.251.53 to our list of V4 connections
<br>
[compiler-2:08780] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
<br>
[compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.0.0.4 to our list of V4 connections
<br>
[compiler-2:08780] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
<br>
[compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.2.251.14 to our list of V4 connections
<br>
[compiler-2:08780] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
<br>
[compiler-2:08780] [[42202,0],0] oob:tcp:init adding 10.128.0.4 to our list of V4 connections
<br>
[compiler-2:08780] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
<br>
[compiler-2:08780] [[42202,0],0] oob:tcp:init adding 93.180.7.38 to our list of V4 connections
<br>
[compiler-2:08780] [[42202,0],0] TCP STARTUP
<br>
[compiler-2:08780] [[42202,0],0] attempting to bind to IPv4 port 0
<br>
[compiler-2:08780] [[42202,0],0] assigned IPv4 port 38420
<br>
[compiler-2:08780] mca:oob:select: Adding component to end
<br>
[compiler-2:08780] mca:oob:select: Found 1 active transports
<br>
[compiler-2:08780] mca: base: components_register: registering rml components
<br>
[compiler-2:08780] mca: base: components_register: found loaded component oob
<br>
[compiler-2:08780] mca: base: components_register: component oob has no register or open function
<br>
[compiler-2:08780] mca: base: components_open: opening rml components
<br>
[compiler-2:08780] mca: base: components_open: found loaded component oob
<br>
[compiler-2:08780] mca: base: components_open: component oob open function successful
<br>
[compiler-2:08780] orte_rml_base_select: initializing rml component oob
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 33 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 5 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 10 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 12 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 34 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 2 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 22 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
<br>
[compiler-2:08780] [[42202,0],0] posting recv
<br>
[compiler-2:08780] [[42202,0],0] posting persistent recv on tag 27 for peer [[WILDCARD],WILDCARD]
<br>
Daemon was launched on node1-130-08 - beginning to initialize
<br>
Daemon was launched on node1-130-03 - beginning to initialize
<br>
Daemon was launched on node1-130-05 - beginning to initialize
<br>
Daemon was launched on node1-130-02 - beginning to initialize
<br>
Daemon was launched on node1-130-01 - beginning to initialize
<br>
Daemon was launched on node1-130-04 - beginning to initialize
<br>
Daemon was launched on node1-130-07 - beginning to initialize
<br>
Daemon was launched on node1-130-06 - beginning to initialize
<br>
Daemon [[42202,0],3] checking in as pid 7178 on host node1-130-03
<br>
[node1-130-03:07178] [[42202,0],3] orted: up and running - waiting for commands!
<br>
Daemon [[42202,0],2] checking in as pid 13581 on host node1-130-02
<br>
[node1-130-02:13581] [[42202,0],2] orted: up and running - waiting for commands!
<br>
Daemon [[42202,0],1] checking in as pid 17220 on host node1-130-01
<br>
[node1-130-01:17220] [[42202,0],1] orted: up and running - waiting for commands!
<br>
Daemon [[42202,0],5] checking in as pid 6663 on host node1-130-05
<br>
[node1-130-05:06663] [[42202,0],5] orted: up and running - waiting for commands!
<br>
Daemon [[42202,0],8] checking in as pid 6683 on host node1-130-08
<br>
[node1-130-08:06683] [[42202,0],8] orted: up and running - waiting for commands!
<br>
Daemon [[42202,0],7] checking in as pid 7877 on host node1-130-07
<br>
[node1-130-07:07877] [[42202,0],7] orted: up and running - waiting for commands!
<br>
Daemon [[42202,0],4] checking in as pid 7735 on host node1-130-04
<br>
[node1-130-04:07735] [[42202,0],4] orted: up and running - waiting for commands!
<br>
Daemon [[42202,0],6] checking in as pid 8451 on host node1-130-06
<br>
[node1-130-06:08451] [[42202,0],6] orted: up and running - waiting for commands!
<br>
srun: error: node1-130-03: task 2: Exited with exit code 1
<br>
srun: Terminating job step 657040.1
<br>
srun: error: node1-130-02: task 1: Exited with exit code 1
<br>
slurmd[node1-130-04]: *** STEP 657040.1 KILLED AT 2014-08-12T12:59:07 WITH SIGNAL 9 ***
<br>
slurmd[node1-130-07]: *** STEP 657040.1 KILLED AT 2014-08-12T12:59:07 WITH SIGNAL 9 ***
<br>
slurmd[node1-130-06]: *** STEP 657040.1 KILLED AT 2014-08-12T12:59:07 WITH SIGNAL 9 ***
<br>
srun: Job step aborted: Waiting up to 2 seconds for job step to finish.
<br>
srun: error: node1-130-01: task 0: Exited with exit code 1
<br>
srun: error: node1-130-05: task 4: Exited with exit code 1
<br>
srun: error: node1-130-08: task 7: Exited with exit code 1
<br>
srun: error: node1-130-07: task 6: Exited with exit code 1
<br>
srun: error: node1-130-04: task 3: Killed
<br>
srun: error: node1-130-06: task 5: Killed
<br>
--------------------------------------------------------------------------
<br>
An ORTE daemon has unexpectedly failed after launch and before
<br>
communicating back to mpirun. This could be caused by a number
<br>
of factors, including an inability to create a connection back
<br>
to mpirun due to a lack of common network interfaces and/or no
<br>
route found between them. Please check network connectivity
<br>
(including firewalls and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
[compiler-2:08780] [[42202,0],0] orted_cmd: received halt_vm cmd
<br>
[compiler-2:08780] mca: base: close: component oob closed
<br>
[compiler-2:08780] mca: base: close: unloading component oob
<br>
[compiler-2:08780] [[42202,0],0] TCP SHUTDOWN
<br>
[compiler-2:08780] mca: base: close: component tcp closed
<br>
[compiler-2:08780] mca: base: close: unloading component tcp<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24987/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24988.php">Timur Ismagilov: "[OMPI users]  ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Previous message:</strong> <a href="24986.php">Antonio Rago: "[OMPI users] Multiple runs interaction"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24857.php">Ralph Castain: "Re: [OMPI users] Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24988.php">Timur Ismagilov: "[OMPI users]  ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Reply:</strong> <a href="24988.php">Timur Ismagilov: "[OMPI users]  ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Maybe reply:</strong> <a href="25001.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
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

<?
$subject_val = "Re: [OMPI users] can't run mpi-jobs on remote host";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 03:52:10 2014" -->
<!-- isoreceived="20140414075210" -->
<!-- sent="Mon, 14 Apr 2014 07:52:08 +0000" -->
<!-- isosent="20140414075208" -->
<!-- name="Lubrano Francesco" -->
<!-- email="lubrano.francesco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't run mpi-jobs on remote host" -->
<!-- id="9b8e92bdf6ee4568949cbaec9c7b0cda_at_AMSPR03MB614.eurprd03.prod.outlook.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0bbc5c84406948f389e554d22d39a510_at_AMSPR03MB614.eurprd03.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] can't run mpi-jobs on remote host<br>
<strong>From:</strong> Lubrano Francesco (<em>lubrano.francesco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 03:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24172.php">Kamal: "[OMPI users] Different output ubuntu /mac"</a>
<li><strong>Previous message:</strong> <a href="24170.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24168.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24175.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>Reply:</strong> <a href="24175.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't set --enable-debug (command not found: I have just --enable-recovery in help command), but the other commands works properly. The output is:
<br>
<p>francesco_at_linux-hldu:~&gt; mpirun -mca plm_base_verbose 10 --debug-daemons --host Frank_at_158.110.39.110 hostname
<br>
[linux-hldu.site:02234] mca: base: components_register: registering plm components
<br>
[linux-hldu.site:02234] mca: base: components_register: found loaded component isolated
<br>
[linux-hldu.site:02234] mca: base: components_register: component isolated has no register or open function
<br>
[linux-hldu.site:02234] mca: base: components_register: found loaded component rsh
<br>
[linux-hldu.site:02234] mca: base: components_register: component rsh register function successful
<br>
[linux-hldu.site:02234] mca: base: components_register: found loaded component slurm
<br>
[linux-hldu.site:02234] mca: base: components_register: component slurm register function successful
<br>
[linux-hldu.site:02234] mca: base: components_open: opening plm components
<br>
[linux-hldu.site:02234] mca: base: components_open: found loaded component isolated
<br>
[linux-hldu.site:02234] mca: base: components_open: component isolated open function successful
<br>
[linux-hldu.site:02234] mca: base: components_open: found loaded component rsh
<br>
[linux-hldu.site:02234] mca: base: components_open: component rsh open function successful
<br>
[linux-hldu.site:02234] mca: base: components_open: found loaded component slurm
<br>
[linux-hldu.site:02234] mca: base: components_open: component slurm open function successful
<br>
[linux-hldu.site:02234] mca:base:select: Auto-selecting plm components
<br>
[linux-hldu.site:02234] mca:base:select:(  plm) Querying component [isolated]
<br>
[linux-hldu.site:02234] mca:base:select:(  plm) Query of component [isolated] set priority to 0
<br>
[linux-hldu.site:02234] mca:base:select:(  plm) Querying component [rsh]
<br>
[linux-hldu.site:02234] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[linux-hldu.site:02234] mca:base:select:(  plm) Querying component [slurm]
<br>
[linux-hldu.site:02234] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
<br>
[linux-hldu.site:02234] mca:base:select:(  plm) Selected component [rsh]
<br>
[linux-hldu.site:02234] mca: base: close: component isolated closed
<br>
[linux-hldu.site:02234] mca: base: close: unloading component isolated
<br>
[linux-hldu.site:02234] mca: base: close: component slurm closed
<br>
[linux-hldu.site:02234] mca: base: close: unloading component slurm
<br>
Daemon was launched on linux-o5sl.site - beginning to initialize
<br>
[linux-o5sl.site:02271] mca: base: components_register: registering plm components
<br>
[linux-o5sl.site:02271] mca: base: components_register: found loaded component rsh
<br>
[linux-o5sl.site:02271] mca: base: components_register: component rsh register function successful
<br>
[linux-o5sl.site:02271] mca: base: components_open: opening plm components
<br>
[linux-o5sl.site:02271] mca: base: components_open: found loaded component rsh
<br>
[linux-o5sl.site:02271] mca: base: components_open: component rsh open function successful
<br>
[linux-o5sl.site:02271] mca:base:select: Auto-selecting plm components
<br>
[linux-o5sl.site:02271] mca:base:select:(  plm) Querying component [rsh]
<br>
[linux-o5sl.site:02271] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[linux-o5sl.site:02271] mca:base:select:(  plm) Selected component [rsh]
<br>
Daemon [[33734,0],1] checking in as pid 2271 on host linux-o5sl
<br>
[linux-o5sl.site:02271] [[33734,0],1] orted: up and running - waiting for commands!
<br>
[linux-o5sl.site:02271] mca: base: close: component rsh closed
<br>
[linux-o5sl.site:02271] mca: base: close: unloading component rsh
<br>
[linux-hldu.site:02234] [[33734,0],0] orted_cmd: received exit cmd
<br>
[linux-hldu.site:02234] [[33734,0],0] orted_cmd: all routes and children gone - exiting
<br>
[linux-hldu.site:02234] mca: base: close: component rsh closed
<br>
[linux-hldu.site:02234] mca: base: close: unloading component rsh
<br>
<p>Is orted in linux-05sl reciving any command?
<br>
Thank you for your cooperation
<br>
<p>(I don't know if it matter, but I have the same problem using the first pc as remote and the second as local).
<br>
<p>regards
<br>
<p>Francesco
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24171/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24172.php">Kamal: "[OMPI users] Different output ubuntu /mac"</a>
<li><strong>Previous message:</strong> <a href="24170.php">Daniel Milroy: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24168.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24175.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>Reply:</strong> <a href="24175.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
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

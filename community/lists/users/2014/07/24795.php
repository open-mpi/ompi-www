<?
$subject_val = "Re: [OMPI users] Salloc and mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 08:42:27 2014" -->
<!-- isoreceived="20140717124227" -->
<!-- sent="Thu, 17 Jul 2014 16:42:24 +0400" -->
<!-- isosent="20140717124224" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Salloc and mpirun problem" -->
<!-- id="1405600944.507713213_at_f30.i.mail.ru" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAO1KyaJc_sN4eC7o1AsQ1H3-6mKA-F2v7xP8zM9J9SQXU+bLQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Salloc and mpirun problem<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 08:42:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24796.php">Rob Latham: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24794.php">Ralph Castain: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Maybe in reply to:</strong> <a href="24777.php">Timur Ismagilov: "[OMPI users] Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With Open MPI&#194;&#160;1.9a1r32252 (Jul 16, 2014 (nightly snapshot tarball))&#194;&#160;i got this output&#194;&#160;(same?):
<br>
$ salloc -N2 --exclusive -p test -J ompi
<br>
salloc: Granted job allocation 645686
<br>
<p>$LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so &#194;&#160;mpirun &#194;&#160;-mca mca_base_env_list 'LD_PRELOAD' &#194;&#160;--mca plm_base_verbose 10 --debug-daemons -np 1 hello_c
<br>
[access1:04312] mca: base: components_register: registering plm components
<br>
[access1:04312] mca: base: components_register: found loaded component isolated
<br>
[access1:04312] mca: base: components_register: component isolated has no register or open function
<br>
[access1:04312] mca: base: components_register: found loaded component rsh
<br>
[access1:04312] mca: base: components_register: component rsh register function successful
<br>
[access1:04312] mca: base: components_register: found loaded component slurm
<br>
[access1:04312] mca: base: components_register: component slurm register function successful
<br>
[access1:04312] mca: base: components_open: opening plm components
<br>
[access1:04312] mca: base: components_open: found loaded component isolated
<br>
[access1:04312] mca: base: components_open: component isolated open function successful
<br>
[access1:04312] mca: base: components_open: found loaded component rsh
<br>
[access1:04312] mca: base: components_open: component rsh open function successful
<br>
[access1:04312] mca: base: components_open: found loaded component slurm
<br>
[access1:04312] mca: base: components_open: component slurm open function successful
<br>
[access1:04312] mca:base:select: Auto-selecting plm components
<br>
[access1:04312] mca:base:select:( plm) Querying component [isolated]
<br>
[access1:04312] mca:base:select:( plm) Query of component [isolated] set priority to 0
<br>
[access1:04312] mca:base:select:( plm) Querying component [rsh]
<br>
[access1:04312] mca:base:select:( plm) Query of component [rsh] set priority to 10
<br>
[access1:04312] mca:base:select:( plm) Querying component [slurm]
<br>
[access1:04312] mca:base:select:( plm) Query of component [slurm] set priority to 75
<br>
[access1:04312] mca:base:select:( plm) Selected component [slurm]
<br>
[access1:04312] mca: base: close: component isolated closed
<br>
[access1:04312] mca: base: close: unloading component isolated
<br>
[access1:04312] mca: base: close: component rsh closed
<br>
[access1:04312] mca: base: close: unloading component rsh
<br>
Daemon was launched on node1-128-09 - beginning to initialize
<br>
Daemon was launched on node1-128-15 - beginning to initialize
<br>
Daemon [[39207,0],1] checking in as pid 26240 on host node1-128-09
<br>
[node1-128-09:26240] [[39207,0],1] orted: up and running - waiting for commands!
<br>
Daemon [[39207,0],2] checking in as pid 30129 on host node1-128-15
<br>
[node1-128-15:30129] [[39207,0],2] orted: up and running - waiting for commands!
<br>
srun: error: node1-128-09: task 0: Exited with exit code 1
<br>
srun: Terminating job step 645686.3
<br>
srun: error: node1-128-15: task 1: Exited with exit code 1
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
[access1:04312] [[39207,0],0] orted_cmd: received halt_vm cmd
<br>
[access1:04312] mca: base: close: component slurm closed
<br>
[access1:04312] mca: base: close: unloading component slurm
<br>
<p><p>Thu, 17 Jul 2014 11:40:24 +0300 &#208;&#190;&#209;&#130; Mike Dubman &lt;miked_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;can you use latest ompi-1.8 from svn/git?
</span><br>
<span class="quotelev1">&gt;Ralph - could you please suggest.
</span><br>
<span class="quotelev1">&gt;Thx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Jul 16, 2014 at 2:48 PM, Timur Ismagilov  &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;Here it is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;$ LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so&#194;&#160; mpirun&#194;&#160; -x LD_PRELOAD --mca plm_base_verbose 10 --debug-daemons -np 1 hello_c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_register: found loaded component isolated
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_register: component isolated has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_register: found loaded component slurm
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_register: component slurm register function successful
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_open: found loaded component isolated
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_open: component isolated open function successful
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca:base:select:(&#194;&#160; plm) Querying component [isolated]
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca:base:select:(&#194;&#160; plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca:base:select:(&#194;&#160; plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca:base:select:(&#194;&#160; plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca:base:select:(&#194;&#160; plm) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca:base:select:(&#194;&#160; plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca:base:select:(&#194;&#160; plm) Selected component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: close: component isolated closed
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: close: component rsh closed
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev2">&gt;&gt;Daemon was launched on node1-128-17 - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt;Daemon was launched on node1-128-18 - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt;Daemon [[63607,0],2] checking in as pid 24538 on host node1-128-18
</span><br>
<span class="quotelev2">&gt;&gt;[node1-128-18:24538] [[63607,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev2">&gt;&gt;Daemon [[63607,0],1] checking in as pid 17192 on host node1-128-17
</span><br>
<span class="quotelev2">&gt;&gt;[node1-128-17:17192] [[63607,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev2">&gt;&gt;srun: error: node1-128-18: task 1: Exited with exit code 1
</span><br>
<span class="quotelev2">&gt;&gt;srun: Terminating job step 645191.1
</span><br>
<span class="quotelev2">&gt;&gt;srun: error: node1-128-17: task 0: Exited with exit code 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev2">&gt;&gt;communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev2">&gt;&gt;of factors, including an inability to create a connection back
</span><br>
<span class="quotelev2">&gt;&gt;to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev2">&gt;&gt;route found between them. Please check network connectivity
</span><br>
<span class="quotelev2">&gt;&gt;(including firewalls and network routing requirements).
</span><br>
<span class="quotelev2">&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] [[63607,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: close: component slurm closed
</span><br>
<span class="quotelev2">&gt;&gt;[access1:29064] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Wed, 16 Jul 2014 14:20:33 +0300 &#208;&#190;&#209;&#130; Mike Dubman &lt; miked_at_[hidden] &gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;please add following flags to mpirun &quot;--mca plm_base_verbose 10 --debug-daemons&quot; and attach output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Thx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;On Wed, Jul 16, 2014 at 11:12 AM, Timur Ismagilov  &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I have&#194;&#160;Open MPI v1.9a1r32142 and slurm 2.5.6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;I can not use mpirun after salloc:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;$salloc -N2 --exclusive -p test -J ompi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;$LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so mpirun -np 1 hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;-----------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;of factors, including an inability to create a connection back
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;route found between them. Please check network connectivity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;(including firewalls and network routing requirements).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;But if i use mpirun in sbutch script it looks correct:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;$cat ompi_mxm3.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;#!/bin/sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so&#194;&#160; mpirun&#194;&#160; -x LD_PRELOAD -x MXM_SHM_KCOPY_MODE=off --map-by slot:pe=8 &quot;$@&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;$sbatch -N2&#194;&#160; --exclusive -p test -J ompi&#194;&#160; ompi_mxm3.0 ./hello_c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Submitted batch job 645039
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;$cat slurm-645039.out 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[warn] Epoll ADD(1) on fd 0 failed.&#194;&#160; Old events were 0; read change was 1 (add); write change was 0 (none): Operation not permitted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;[warn] Epoll ADD(4) on fd 1 failed.&#194;&#160; Old events were 0; read change was 0 (none); write change was 1 (add): Operation not permitted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello, world, I am 0 of 2, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32142, repo rev: r32142, Jul 04, 2014 (nightly snapshot tarball), 146)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Hello, world, I am 1 of 2, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32142, repo rev: r32142, Jul 04, 2014 (nightly snapshot tarball), 146)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Timur
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Subscription:  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Link to this post:  <a href="http://www.open-mpi.org/community/lists/users/2014/07/24777.php">http://www.open-mpi.org/community/lists/users/2014/07/24777.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24795/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24796.php">Rob Latham: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Previous message:</strong> <a href="24794.php">Ralph Castain: "Re: [OMPI users] latest stable and win7/msvc2013"</a>
<li><strong>Maybe in reply to:</strong> <a href="24777.php">Timur Ismagilov: "[OMPI users] Salloc and mpirun problem"</a>
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

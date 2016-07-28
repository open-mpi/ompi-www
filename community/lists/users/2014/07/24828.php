<?
$subject_val = "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 20 13:59:15 2014" -->
<!-- isoreceived="20140720175915" -->
<!-- sent="Sun, 20 Jul 2014 21:59:14 +0400" -->
<!-- isosent="20140720175914" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem" -->
<!-- id="1405879154.283438058_at_f87.i.mail.ru" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Fwd: Re[4]:  Salloc and mpirun problem" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-20 13:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24829.php">Ralph Castain: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24827.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Maybe in reply to:</strong> <a href="24823.php">Timur Ismagilov: "[OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24829.php">Ralph Castain: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<li><strong>Reply:</strong> <a href="24829.php">Ralph Castain: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-------- &#208;&#159;&#208;&#181;&#209;&#128;&#208;&#181;&#209;&#129;&#209;&#139;&#208;&#187;&#208;&#176;&#208;&#181;&#208;&#188;&#208;&#190;&#208;&#181; &#209;&#129;&#208;&#190;&#208;&#190;&#208;&#177;&#209;&#137;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181; --------
<br>
&#208;&#158;&#209;&#130; &#208;&#186;&#208;&#190;&#208;&#179;&#208;&#190;: Timur Ismagilov &lt;tismagilov_at_[hidden]&gt;
<br>
&#208;&#154;&#208;&#190;&#208;&#188;&#209;&#131;: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
&#208;&#148;&#208;&#176;&#209;&#130;&#208;&#176;: Sun, 20 Jul 2014 21:58:41 +0400
<br>
&#208;&#162;&#208;&#181;&#208;&#188;&#208;&#176;: Re[2]: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem
<br>
<p>Here it is:
<br>
$ salloc -N2 --exclusive -p test -J ompi
<br>
salloc: Granted job allocation 647049
<br>
<p>$ mpirun -mca mca_base_env_list 'LD_PRELOAD' -mca oob_base_verbose 10 -mca rml_base_verbose 10 -np 2 hello_c
<br>
[access1:24264] mca: base: components_register: registering oob components
<br>
[access1:24264] mca: base: components_register: found loaded component tcp
<br>
[access1:24264] mca: base: components_register: component tcp register function successful
<br>
[access1:24264] mca: base: components_open: opening oob components
<br>
[access1:24264] mca: base: components_open: found loaded component tcp
<br>
[access1:24264] mca: base: components_open: component tcp open function successful
<br>
[access1:24264] mca:oob:select: checking available component tcp
<br>
[access1:24264] mca:oob:select: Querying component [tcp]
<br>
[access1:24264] oob:tcp: component_available called
<br>
[access1:24264] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
<br>
[access1:24264] WORKING INTERFACE 2 KERNEL INDEX 3 FAMILY: V4
<br>
[access1:24264] [[55095,0],0] oob:tcp:init adding 10.0.251.51 to our list of V4 connections
<br>
[access1:24264] WORKING INTERFACE 3 KERNEL INDEX 4 FAMILY: V4
<br>
[access1:24264] [[55095,0],0] oob:tcp:init adding 10.0.0.111 to our list of V4 connections
<br>
[access1:24264] WORKING INTERFACE 4 KERNEL INDEX 5 FAMILY: V4
<br>
[access1:24264] [[55095,0],0] oob:tcp:init adding 10.2.251.11 to our list of V4 connections
<br>
[access1:24264] WORKING INTERFACE 5 KERNEL INDEX 6 FAMILY: V4
<br>
[access1:24264] [[55095,0],0] oob:tcp:init adding 10.128.0.1 to our list of V4 connections
<br>
[access1:24264] WORKING INTERFACE 6 KERNEL INDEX 7 FAMILY: V4
<br>
[access1:24264] [[55095,0],0] oob:tcp:init adding 93.180.7.36 to our list of V4 connections
<br>
[access1:24264] WORKING INTERFACE 7 KERNEL INDEX 7 FAMILY: V4
<br>
[access1:24264] [[55095,0],0] oob:tcp:init adding 93.180.7.36 to our list of V4 connections
<br>
[access1:24264] [[55095,0],0] TCP STARTUP
<br>
[access1:24264] [[55095,0],0] attempting to bind to IPv4 port 0
<br>
[access1:24264] [[55095,0],0] assigned IPv4 port 47756
<br>
[access1:24264] mca:oob:select: Adding component to end
<br>
[access1:24264] mca:oob:select: Found 1 active transports
<br>
[access1:24264] mca: base: components_register: registering rml components
<br>
[access1:24264] mca: base: components_register: found loaded component oob
<br>
[access1:24264] mca: base: components_register: component oob has no register or open function
<br>
[access1:24264] mca: base: components_open: opening rml components
<br>
[access1:24264] mca: base: components_open: found loaded component oob
<br>
[access1:24264] mca: base: components_open: component oob open function successful
<br>
[access1:24264] orte_rml_base_select: initializing rml component oob
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 30 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 15 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 32 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 33 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 5 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 10 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 12 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 9 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 34 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 2 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 21 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 22 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 45 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 46 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 1 for peer [[WILDCARD],WILDCARD]
<br>
[access1:24264] [[55095,0],0] posting recv
<br>
[access1:24264] [[55095,0],0] posting persistent recv on tag 27 for peer [[WILDCARD],WILDCARD]
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
[access1:24264] mca: base: close: component oob closed
<br>
[access1:24264] mca: base: close: unloading component oob
<br>
[access1:24264] [[55095,0],0] TCP SHUTDOWN
<br>
[access1:24264] mca: base: close: component tcp closed
<br>
[access1:24264] mca: base: close: unloading component tcp
<br>
When i use srun i got:
<br>
$ salloc -N2 --exclusive -p test -J ompi
<br>
....
<br>
$srun -N 2 ./hello_c
<br>
Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32252, repo rev: r32252, Jul 16, 2014 (nightly snapshot tarball), 146)
<br>
Hello, world, I am 0 of 1, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32252, repo rev: r32252, Jul 16, 2014 (nightly snapshot tarball), 146)
<br>
<p>Sun, 20 Jul 2014 09:28:13 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;Try adding -mca oob_base_verbose 10 -mca rml_base_verbose 10 to your cmd line. It looks to me like we are unable to connect back to the node where you are running mpirun for some reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jul 20, 2014, at 9:16 AM, Timur Ismagilov &lt; tismagilov_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;I have the same problem in openmpi 1.8.1( Apr 23, 2014 ).
</span><br>
<span class="quotelev2">&gt;&gt;Does the srun command have &#194;&#160;a --map-by&lt;foo&gt; mpirun parameter, or can i chage it from bash enviroment?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-------- &#208;&#159;&#208;&#181;&#209;&#128;&#208;&#181;&#209;&#129;&#209;&#139;&#208;&#187;&#208;&#176;&#208;&#181;&#208;&#188;&#208;&#190;&#208;&#181; &#209;&#129;&#208;&#190;&#208;&#190;&#208;&#177;&#209;&#137;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181; --------
</span><br>
<span class="quotelev2">&gt;&gt;&#208;&#158;&#209;&#130; &#208;&#186;&#208;&#190;&#208;&#179;&#208;&#190;: Timur Ismagilov &lt; tismagilov_at_[hidden] &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#208;&#154;&#208;&#190;&#208;&#188;&#209;&#131;: Mike Dubman &lt; miked_at_[hidden] &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#208;&#154;&#208;&#190;&#208;&#191;&#208;&#184;&#209;&#143;: Open MPI Users &lt; users_at_[hidden] &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#208;&#148;&#208;&#176;&#209;&#130;&#208;&#176;: Thu, 17 Jul 2014 16:42:24 +0400
</span><br>
<span class="quotelev2">&gt;&gt;&#208;&#162;&#208;&#181;&#208;&#188;&#208;&#176;: Re[4]: [OMPI users] Salloc and mpirun problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;With Open MPI&#194;&#160;1.9a1r32252 (Jul 16, 2014 (nightly snapshot tarball))&#194;&#160;i got this output&#194;&#160;(same?):
</span><br>
<span class="quotelev2">&gt;&gt;$ salloc -N2 --exclusive -p test -J ompi
</span><br>
<span class="quotelev2">&gt;&gt;salloc: Granted job allocation 645686
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;$LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so &#194;&#160;mpirun &#194;&#160;-mca mca_base_env_list 'LD_PRELOAD' &#194;&#160;--mca plm_base_verbose 10 --debug-daemons -np 1 hello_c
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_register: found loaded component isolated
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_register: component isolated has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_register: found loaded component slurm
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_register: component slurm register function successful
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_open: found loaded component isolated
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_open: component isolated open function successful
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca:base:select:( plm) Querying component [isolated]
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca:base:select:( plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca:base:select:( plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca:base:select:( plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca:base:select:( plm) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca:base:select:( plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca:base:select:( plm) Selected component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: close: component isolated closed
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: close: component rsh closed
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev2">&gt;&gt;Daemon was launched on node1-128-09 - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt;Daemon was launched on node1-128-15 - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt;Daemon [[39207,0],1] checking in as pid 26240 on host node1-128-09
</span><br>
<span class="quotelev2">&gt;&gt;[node1-128-09:26240] [[39207,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev2">&gt;&gt;Daemon [[39207,0],2] checking in as pid 30129 on host node1-128-15
</span><br>
<span class="quotelev2">&gt;&gt;[node1-128-15:30129] [[39207,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev2">&gt;&gt;srun: error: node1-128-09: task 0: Exited with exit code 1
</span><br>
<span class="quotelev2">&gt;&gt;srun: Terminating job step 645686.3
</span><br>
<span class="quotelev2">&gt;&gt;srun: error: node1-128-15: task 1: Exited with exit code 1
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
<span class="quotelev2">&gt;&gt;[access1:04312] [[39207,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: close: component slurm closed
</span><br>
<span class="quotelev2">&gt;&gt;[access1:04312] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>

<br>
<p>----------------------------------------------------------------------
<br>
<p>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24828/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24829.php">Ralph Castain: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="24827.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Maybe in reply to:</strong> <a href="24823.php">Timur Ismagilov: "[OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24829.php">Ralph Castain: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<li><strong>Reply:</strong> <a href="24829.php">Ralph Castain: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
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

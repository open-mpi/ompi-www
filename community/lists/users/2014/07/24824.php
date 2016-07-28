<?
$subject_val = "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 20 12:29:19 2014" -->
<!-- isoreceived="20140720162919" -->
<!-- sent="Sun, 20 Jul 2014 09:28:13 -0700" -->
<!-- isosent="20140720162813" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem" -->
<!-- id="31DB517E-5F54-4E04-92FB-DC399382EB3F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1405873018.935889438_at_f133.i.mail.ru" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-20 12:28:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24825.php">Ralph Castain: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Previous message:</strong> <a href="24823.php">Timur Ismagilov: "[OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="24823.php">Timur Ismagilov: "[OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24828.php">Timur Ismagilov: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try adding -mca oob_base_verbose 10 -mca rml_base_verbose 10 to your cmd line. It looks to me like we are unable to connect back to the node where you are running mpirun for some reason.
<br>
<p><p>On Jul 20, 2014, at 9:16 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have the same problem in openmpi 1.8.1(Apr 23, 2014).
</span><br>
<span class="quotelev1">&gt; Does the srun command have  a --map-by&lt;foo&gt; mpirun parameter, or can i chage it from bash enviroment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------- &#208;&#159;&#208;&#181;&#209;&#128;&#208;&#181;&#209;&#129;&#209;&#139;&#208;&#187;&#208;&#176;&#208;&#181;&#208;&#188;&#208;&#190;&#208;&#181; &#209;&#129;&#208;&#190;&#208;&#190;&#208;&#177;&#209;&#137;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181; --------
</span><br>
<span class="quotelev1">&gt; &#208;&#158;&#209;&#130; &#208;&#186;&#208;&#190;&#208;&#179;&#208;&#190;: Timur Ismagilov &lt;tismagilov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#208;&#154;&#208;&#190;&#208;&#188;&#209;&#131;: Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#208;&#154;&#208;&#190;&#208;&#191;&#208;&#184;&#209;&#143;: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#208;&#148;&#208;&#176;&#209;&#130;&#208;&#176;: Thu, 17 Jul 2014 16:42:24 +0400
</span><br>
<span class="quotelev1">&gt; &#208;&#162;&#208;&#181;&#208;&#188;&#208;&#176;: Re[4]: [OMPI users] Salloc and mpirun problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Open MPI 1.9a1r32252 (Jul 16, 2014 (nightly snapshot tarball)) i got this output (same?):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ salloc -N2 --exclusive -p test -J ompi
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 645686
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so  mpirun  -mca mca_base_env_list 'LD_PRELOAD'  --mca plm_base_verbose 10 --debug-daemons -np 1 hello_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_register: found loaded component isolated
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_register: component isolated has no register or open function
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_register: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_register: component slurm register function successful
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_open: found loaded component isolated
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_open: component isolated open function successful
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca:base:select:( plm) Querying component [isolated]
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca:base:select:( plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca:base:select:( plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca:base:select:( plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca:base:select:( plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca:base:select:( plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca:base:select:( plm) Selected component [slurm]
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: close: component isolated closed
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; Daemon was launched on node1-128-09 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon was launched on node1-128-15 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[39207,0],1] checking in as pid 26240 on host node1-128-09
</span><br>
<span class="quotelev1">&gt; [node1-128-09:26240] [[39207,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; Daemon [[39207,0],2] checking in as pid 30129 on host node1-128-15
</span><br>
<span class="quotelev1">&gt; [node1-128-15:30129] [[39207,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; srun: error: node1-128-09: task 0: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; srun: Terminating job step 645686.3
</span><br>
<span class="quotelev1">&gt; srun: error: node1-128-15: task 1: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev1">&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev1">&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev1">&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev1">&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev1">&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [access1:04312] [[39207,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [access1:04312] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thu, 17 Jul 2014 11:40:24 +0300 &#208;&#190;&#209;&#130; Mike Dubman &lt;miked_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you use latest ompi-1.8 from svn/git?
</span><br>
<span class="quotelev1">&gt; Ralph - could you please suggest.
</span><br>
<span class="quotelev1">&gt; Thx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 2:48 PM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Here it is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so  mpirun  -x LD_PRELOAD --mca plm_base_verbose 10 --debug-daemons -np 1 hello_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_register: found loaded component isolated
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_register: component isolated has no register or open function
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_register: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_register: component slurm register function successful
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_open: found loaded component isolated
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_open: component isolated open function successful
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca:base:select:(  plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca:base:select:(  plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca:base:select:(  plm) Selected component [slurm]
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: close: component isolated closed
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; Daemon was launched on node1-128-17 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon was launched on node1-128-18 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[63607,0],2] checking in as pid 24538 on host node1-128-18
</span><br>
<span class="quotelev1">&gt; [node1-128-18:24538] [[63607,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; Daemon [[63607,0],1] checking in as pid 17192 on host node1-128-17
</span><br>
<span class="quotelev1">&gt; [node1-128-17:17192] [[63607,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; srun: error: node1-128-18: task 1: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; srun: Terminating job step 645191.1
</span><br>
<span class="quotelev1">&gt; srun: error: node1-128-17: task 0: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev1">&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev1">&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev1">&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev1">&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev1">&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [access1:29064] [[63607,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [access1:29064] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wed, 16 Jul 2014 14:20:33 +0300 &#208;&#190;&#209;&#130; Mike Dubman &lt;miked_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; please add following flags to mpirun &quot;--mca plm_base_verbose 10 --debug-daemons&quot; and attach output.
</span><br>
<span class="quotelev1">&gt; Thx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 11:12 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; I have Open MPI v1.9a1r32142 and slurm 2.5.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can not use mpirun after salloc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $salloc -N2 --exclusive -p test -J ompi
</span><br>
<span class="quotelev1">&gt; $LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so mpirun -np 1 hello_c
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev1">&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev1">&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev1">&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev1">&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev1">&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; But if i use mpirun in sbutch script it looks correct:
</span><br>
<span class="quotelev1">&gt; $cat ompi_mxm3.0
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so  mpirun  -x LD_PRELOAD -x MXM_SHM_KCOPY_MODE=off --map-by slot:pe=8 &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $sbatch -N2  --exclusive -p test -J ompi  ompi_mxm3.0 ./hello_c
</span><br>
<span class="quotelev1">&gt; Submitted batch job 645039
</span><br>
<span class="quotelev1">&gt; $cat slurm-645039.out 
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(1) on fd 0 failed.  Old events were 0; read change was 1 (add); write change was 0 (none): Operation not permitted
</span><br>
<span class="quotelev1">&gt; [warn] Epoll ADD(4) on fd 1 failed.  Old events were 0; read change was 0 (none); write change was 1 (add): Operation not permitted
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 2, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32142, repo rev: r32142, Jul 04, 2014 (nightly snapshot tarball), 146)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 2, (Open MPI v1.9a1, package: Open MPI semenov_at_compiler-2 Distribution, ident: 1.9a1r32142, repo rev: r32142, Jul 04, 2014 (nightly snapshot tarball), 146)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Timur
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24777.php">http://www.open-mpi.org/community/lists/users/2014/07/24777.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24823.php">http://www.open-mpi.org/community/lists/users/2014/07/24823.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24824/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24825.php">Ralph Castain: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Previous message:</strong> <a href="24823.php">Timur Ismagilov: "[OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="24823.php">Timur Ismagilov: "[OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24828.php">Timur Ismagilov: "Re: [OMPI users] Fwd: Re[4]:  Salloc and mpirun problem"</a>
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

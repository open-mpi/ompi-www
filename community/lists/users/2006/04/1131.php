<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 05:28:48 2006" -->
<!-- isoreceived="20060425092848" -->
<!-- sent="Tue, 25 Apr 2006 11:28:10 +0200" -->
<!-- isosent="20060425092810" -->
<!-- name="Javier Fernandez Baldomero" -->
<!-- email="javier_at_[hidden]" -->
<!-- subject="[OMPI users] help with mpirun problem" -->
<!-- id="444DEBAA.80906_at_atc.ugr.es" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Javier Fernandez Baldomero (<em>javier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-25 05:28:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1132.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Checking the cluster status withMPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="1130.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Checking the cluster status with MPI_Comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have tried in 2 different clusters, and both times I have problems using the 
<br>
headed node together with a headless one. There is no problem if I run 2 
<br>
processes on n0, or 2 processes on n1, or on n2. No problem either using n1 and 
<br>
n2. The problem is when I try to use n0 and n1, or n0 and n2.
<br>
<p>Previously I thought it was a cluster configuration problem.
<br>
<a href="http://www.open-mpi.org/community/lists/users/2006/04/1094.php">http://www.open-mpi.org/community/lists/users/2006/04/1094.php</a>
<br>
but now I am the sysadmin and don't know why this happens.
<br>
<p>I'm attaching config.log, the ompi_info output, and the mpirun -d output for 
<br>
both a working command (n1,n2) and one who blocks (n0,n2). The hello program is 
<br>
the typical &quot;I am n/m&quot; example.
<br>
<p>Thanks for your help
<br>
<p>-javier
<br>
<p>

<br><p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.0.2
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r9571
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.0.2
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r9571
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.0.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r9571
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /home/javier/openmpi-1.0.2
<br>
&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: javier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Mon Apr 24 20:47:06 CEST 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: oxigeno.ugr.es
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: javier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: lun abr 24 21:24:27 CEST 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: oxigeno.ugr.es
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: g77
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/g77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
&nbsp;&nbsp;Fortran90 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: yes, progress: yes)
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: malloc_interpose (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: teg (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: self (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: daemon (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: fork (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.0.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0.2)
<br>
<p>
<p>
Script iniciado (Tue Apr 25 11:23:37 2006
<br>
)
<br>
[javier_at_oxigeno hello]$ mpirun -d -c 2 -H ox1,ox2 hello
<br>
[oxigeno.ugr.es:29960] [0,0,0] setting up session dir with
<br>
[oxigeno.ugr.es:29960] 	universe default-universe
<br>
[oxigeno.ugr.es:29960] 	user javier
<br>
[oxigeno.ugr.es:29960] 	host oxigeno.ugr.es
<br>
[oxigeno.ugr.es:29960] 	jobid 0
<br>
[oxigeno.ugr.es:29960] 	procid 0
<br>
[oxigeno.ugr.es:29960] procdir: /tmp/openmpi-sessions-javier_at_[hidden]_0/default-universe/0/0
<br>
[oxigeno.ugr.es:29960] jobdir: /tmp/openmpi-sessions-javier_at_[hidden]_0/default-universe/0
<br>
[oxigeno.ugr.es:29960] unidir: /tmp/openmpi-sessions-javier_at_[hidden]_0/default-universe
<br>
[oxigeno.ugr.es:29960] top: openmpi-sessions-javier_at_[hidden]_0
<br>
[oxigeno.ugr.es:29960] tmp: /tmp
<br>
[oxigeno.ugr.es:29960] [0,0,0] contact_file /tmp/openmpi-sessions-javier_at_[hidden]_0/default-universe/universe-setup.txt
<br>
[oxigeno.ugr.es:29960] [0,0,0] wrote setup file
<br>
[oxigeno.ugr.es:29960] spawn: in job_state_callback(jobid = 1, state = 0x1)
<br>
[oxigeno.ugr.es:29960] pls:rsh: local csh: 0, local bash: 1
<br>
[oxigeno.ugr.es:29960] pls:rsh: assuming same remote shell as local shell
<br>
[oxigeno.ugr.es:29960] pls:rsh: remote csh: 0, remote bash: 1
<br>
[oxigeno.ugr.es:29960] pls:rsh: final template argv:
<br>
[oxigeno.ugr.es:29960] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug --bootproxy 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename &lt;template&gt; --universe javier_at_[hidden]:default-universe --nsreplica &quot;0.0.0;tcp://150.214.191.217:1220;tcp://192.168.1.9:1220&quot; --gprreplica &quot;0.0.0;tcp://150.214.191.217:1220;tcp://192.168.1.9:1220&quot; --mpi-call-yield 0
<br>
[oxigeno.ugr.es:29960] pls:rsh: launching on node ox1
<br>
[oxigeno.ugr.es:29960] pls:rsh: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[oxigeno.ugr.es:29960] pls:rsh: ox1 is a REMOTE node
<br>
[oxigeno.ugr.es:29960] pls:rsh: executing: /usr/bin/ssh ox1 orted --debug --bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 --nodename ox1 --universe javier_at_[hidden]:default-universe --nsreplica &quot;0.0.0;tcp://150.214.191.217:1220;tcp://192.168.1.9:1220&quot; --gprreplica &quot;0.0.0;tcp://150.214.191.217:1220;tcp://192.168.1.9:1220&quot; --mpi-call-yield 0
<br>
[oxigeno.ugr.es:29960] pls:rsh: launching on node ox2
<br>
[oxigeno.ugr.es:29960] pls:rsh: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[oxigeno.ugr.es:29960] pls:rsh: ox2 is a REMOTE node
<br>
[oxigeno.ugr.es:29960] pls:rsh: executing: /usr/bin/ssh ox2 orted --debug --bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --nodename ox2 --universe javier_at_[hidden]:default-universe --nsreplica &quot;0.0.0;tcp://150.214.191.217:1220;tcp://192.168.1.9:1220&quot; --gprreplica &quot;0.0.0;tcp://150.214.191.217:1220;tcp://192.168.1.9:1220&quot; --mpi-call-yield 0
<br>
[ox1:21646] [0,0,1] setting up session dir with
<br>
[ox1:21646] 	universe default-universe
<br>
[ox1:21646] 	user javier
<br>
[ox1:21646] 	host ox1
<br>
[ox1:21646] 	jobid 0
<br>
[ox1:21646] 	procid 1
<br>
[ox1:21646] procdir: /tmp/openmpi-sessions-javier_at_ox1_0/default-universe/0/1
<br>
[ox1:21646] jobdir: /tmp/openmpi-sessions-javier_at_ox1_0/default-universe/0
<br>
[ox1:21646] unidir: /tmp/openmpi-sessions-javier_at_ox1_0/default-universe
<br>
[ox1:21646] top: openmpi-sessions-javier_at_ox1_0
<br>
[ox1:21646] tmp: /tmp
<br>
[ox1:21735] [0,1,0] setting up session dir with
<br>
[ox1:21735] 	universe default-universe
<br>
[ox1:21735] 	user javier
<br>
[ox1:21735] 	host ox1
<br>
[ox1:21735] 	jobid 1
<br>
[ox1:21735] 	procid 0
<br>
[ox1:21735] procdir: /tmp/openmpi-sessions-javier_at_ox1_0/default-universe/1/0
<br>
[ox1:21735] jobdir: /tmp/openmpi-sessions-javier_at_ox1_0/default-universe/1
<br>
[ox1:21735] unidir: /tmp/openmpi-sessions-javier_at_ox1_0/default-universe
<br>
[ox1:21735] top: openmpi-sessions-javier_at_ox1_0
<br>
[ox1:21735] tmp: /tmp
<br>
[ox2:22211] [0,0,2] setting up session dir with
<br>
[ox2:22211] 	universe default-universe
<br>
[ox2:22211] 	user javier
<br>
[ox2:22211] 	host ox2
<br>
[ox2:22211] 	jobid 0
<br>
[ox2:22211] 	procid 2
<br>
[ox2:22211] procdir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe/0/2
<br>
[ox2:22211] jobdir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe/0
<br>
[ox2:22211] unidir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe
<br>
[ox2:22211] top: openmpi-sessions-javier_at_ox2_0
<br>
[ox2:22211] tmp: /tmp
<br>
[ox2:22300] [0,1,1] setting up session dir with
<br>
[ox2:22300] 	universe default-universe
<br>
[ox2:22300] 	user javier
<br>
[ox2:22300] 	host ox2
<br>
[ox2:22300] 	jobid 1
<br>
[ox2:22300] 	procid 1
<br>
[ox2:22300] procdir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe/1/1
<br>
[ox2:22300] jobdir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe/1
<br>
[ox2:22300] unidir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe
<br>
[ox2:22300] top: openmpi-sessions-javier_at_ox2_0
<br>
[ox2:22300] tmp: /tmp
<br>
[oxigeno.ugr.es:29960] spawn: in job_state_callback(jobid = 1, state = 0x3)
<br>
[oxigeno.ugr.es:29960] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, ox2, hello, 22300)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, ox1, hello, 21735)
<br>
[ox1:21646] orted: job_state_callback(jobid = 1, state = 134643904)
<br>
[ox2:22211] orted: job_state_callback(jobid = 1, state = 134640784)
<br>
[oxigeno.ugr.es:29960] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[ox2:22211] orted: job_state_callback(jobid = 1, state = 134640784)
<br>
[ox1:21646] orted: job_state_callback(jobid = 1, state = 134643312)
<br>
Hello, world!  I am 1 of 2
<br>
Hello, world!  I am 0 of 2
<br>
[ox1:21735] [0,1,0] ompi_mpi_init completed
<br>
[ox2:22300] [0,1,1] ompi_mpi_init completed
<br>
[oxigeno.ugr.es:29960] spawn: in job_state_callback(jobid = 1, state = 0x7)
<br>
[oxigeno.ugr.es:29960] spawn: in job_state_callback(jobid = 1, state = 0x8)
<br>
[ox2:22211] orted: job_state_callback(jobid = 1, state = 134640408)
<br>
[ox2:22211] orted: job_state_callback(jobid = 1, state = 134611224)
<br>
[ox1:21646] orted: job_state_callback(jobid = 1, state = 134643320)
<br>
[ox1:21646] orted: job_state_callback(jobid = 1, state = 134611424)
<br>
[ox2:22300] sess_dir_finalize: found proc session dir empty - deleting
<br>
[ox1:21735] sess_dir_finalize: found proc session dir empty - deleting
<br>
[ox2:22300] sess_dir_finalize: job session dir not empty - leaving
<br>
[ox1:21735] sess_dir_finalize: job session dir not empty - leaving
<br>
[ox1:21646] sess_dir_finalize: proc session dir not empty - leaving
<br>
[ox2:22211] sess_dir_finalize: proc session dir not empty - leaving
<br>
[ox2:22211] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_TERMINATED)
<br>
[ox1:21646] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_TERMINATED)
<br>
[ox1:21646] sess_dir_finalize: found job session dir empty - deleting
<br>
[ox2:22211] sess_dir_finalize: found job session dir empty - deleting
<br>
[ox1:21646] sess_dir_finalize: univ session dir not empty - leaving
<br>
[ox2:22211] sess_dir_finalize: univ session dir not empty - leaving
<br>
[ox1:21646] sess_dir_finalize: found proc session dir empty - deleting
<br>
[ox2:22211] sess_dir_finalize: found proc session dir empty - deleting
<br>
[ox1:21646] sess_dir_finalize: found job session dir empty - deleting
<br>
[ox2:22211] sess_dir_finalize: found job session dir empty - deleting
<br>
[ox2:22211] sess_dir_finalize: found univ session dir empty - deleting
<br>
[ox1:21646] sess_dir_finalize: found univ session dir empty - deleting
<br>
[ox2:22211] sess_dir_finalize: found top session dir empty - deleting
<br>
[ox1:21646] sess_dir_finalize: found top session dir empty - deleting
<br>
<p>[javier_at_oxigeno hello]$ exit
<br>
Script terminado (Tue Apr 25 11:24:10 2006
<br>
)
<br>
<p>
<p>
Script iniciado (Tue Apr 25 11:24:26 2006
<br>
)
<br>
[javier_at_oxigeno hello]$ mpirun -d -c 2 -H ox0,ox2 hello
<br>
[oxigeno.ugr.es:30067] [0,0,0] setting up session dir with
<br>
[oxigeno.ugr.es:30067] 	universe default-universe
<br>
[oxigeno.ugr.es:30067] 	user javier
<br>
[oxigeno.ugr.es:30067] 	host oxigeno.ugr.es
<br>
[oxigeno.ugr.es:30067] 	jobid 0
<br>
[oxigeno.ugr.es:30067] 	procid 0
<br>
[oxigeno.ugr.es:30067] procdir: /tmp/openmpi-sessions-javier_at_[hidden]_0/default-universe/0/0
<br>
[oxigeno.ugr.es:30067] jobdir: /tmp/openmpi-sessions-javier_at_[hidden]_0/default-universe/0
<br>
[oxigeno.ugr.es:30067] unidir: /tmp/openmpi-sessions-javier_at_[hidden]_0/default-universe
<br>
[oxigeno.ugr.es:30067] top: openmpi-sessions-javier_at_[hidden]_0
<br>
[oxigeno.ugr.es:30067] tmp: /tmp
<br>
[oxigeno.ugr.es:30067] [0,0,0] contact_file /tmp/openmpi-sessions-javier_at_[hidden]_0/default-universe/universe-setup.txt
<br>
[oxigeno.ugr.es:30067] [0,0,0] wrote setup file
<br>
[oxigeno.ugr.es:30067] spawn: in job_state_callback(jobid = 1, state = 0x1)
<br>
[oxigeno.ugr.es:30067] pls:rsh: local csh: 0, local bash: 1
<br>
[oxigeno.ugr.es:30067] pls:rsh: assuming same remote shell as local shell
<br>
[oxigeno.ugr.es:30067] pls:rsh: remote csh: 0, remote bash: 1
<br>
[oxigeno.ugr.es:30067] pls:rsh: final template argv:
<br>
[oxigeno.ugr.es:30067] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug --bootproxy 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename &lt;template&gt; --universe javier_at_[hidden]:default-universe --nsreplica &quot;0.0.0;tcp://150.214.191.217:1223;tcp://192.168.1.9:1223&quot; --gprreplica &quot;0.0.0;tcp://150.214.191.217:1223;tcp://192.168.1.9:1223&quot; --mpi-call-yield 0
<br>
[oxigeno.ugr.es:30067] pls:rsh: launching on node ox0
<br>
[oxigeno.ugr.es:30067] pls:rsh: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[oxigeno.ugr.es:30067] pls:rsh: ox0 is a LOCAL node
<br>
[oxigeno.ugr.es:30067] pls:rsh: changing to directory /home/javier
<br>
[oxigeno.ugr.es:30067] pls:rsh: executing: orted --debug --bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 --nodename ox0 --universe javier_at_[hidden]:default-universe --nsreplica &quot;0.0.0;tcp://150.214.191.217:1223;tcp://192.168.1.9:1223&quot; --gprreplica &quot;0.0.0;tcp://150.214.191.217:1223;tcp://192.168.1.9:1223&quot; --mpi-call-yield 0
<br>
[oxigeno.ugr.es:30070] [0,0,1] setting up session dir with
<br>
[oxigeno.ugr.es:30070] 	universe default-universe
<br>
[oxigeno.ugr.es:30070] 	user javier
<br>
[oxigeno.ugr.es:30070] 	host ox0
<br>
[oxigeno.ugr.es:30070] 	jobid 0
<br>
[oxigeno.ugr.es:30070] 	procid 1
<br>
[oxigeno.ugr.es:30070] procdir: /tmp/openmpi-sessions-javier_at_ox0_0/default-universe/0/1
<br>
[oxigeno.ugr.es:30070] jobdir: /tmp/openmpi-sessions-javier_at_ox0_0/default-universe/0
<br>
[oxigeno.ugr.es:30070] unidir: /tmp/openmpi-sessions-javier_at_ox0_0/default-universe
<br>
[oxigeno.ugr.es:30070] top: openmpi-sessions-javier_at_ox0_0
<br>
[oxigeno.ugr.es:30070] tmp: /tmp
<br>
[oxigeno.ugr.es:30067] pls:rsh: launching on node ox2
<br>
[oxigeno.ugr.es:30067] pls:rsh: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[oxigeno.ugr.es:30067] pls:rsh: ox2 is a REMOTE node
<br>
[oxigeno.ugr.es:30067] pls:rsh: executing: /usr/bin/ssh ox2 orted --debug --bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --nodename ox2 --universe javier_at_[hidden]:default-universe --nsreplica &quot;0.0.0;tcp://150.214.191.217:1223;tcp://192.168.1.9:1223&quot; --gprreplica &quot;0.0.0;tcp://150.214.191.217:1223;tcp://192.168.1.9:1223&quot; --mpi-call-yield 0
<br>
[oxigeno.ugr.es:30076] [0,1,0] setting up session dir with
<br>
[oxigeno.ugr.es:30076] 	universe default-universe
<br>
[oxigeno.ugr.es:30076] 	user javier
<br>
[oxigeno.ugr.es:30076] 	host ox0
<br>
[oxigeno.ugr.es:30076] 	jobid 1
<br>
[oxigeno.ugr.es:30076] 	procid 0
<br>
[oxigeno.ugr.es:30076] procdir: /tmp/openmpi-sessions-javier_at_ox0_0/default-universe/1/0
<br>
[oxigeno.ugr.es:30076] jobdir: /tmp/openmpi-sessions-javier_at_ox0_0/default-universe/1
<br>
[oxigeno.ugr.es:30076] unidir: /tmp/openmpi-sessions-javier_at_ox0_0/default-universe
<br>
[oxigeno.ugr.es:30076] top: openmpi-sessions-javier_at_ox0_0
<br>
[oxigeno.ugr.es:30076] tmp: /tmp
<br>
[ox2:22311] [0,0,2] setting up session dir with
<br>
[ox2:22311] 	universe default-universe
<br>
[ox2:22311] 	user javier
<br>
[ox2:22311] 	host ox2
<br>
[ox2:22311] 	jobid 0
<br>
[ox2:22311] 	procid 2
<br>
[ox2:22311] procdir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe/0/2
<br>
[ox2:22311] jobdir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe/0
<br>
[ox2:22311] unidir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe
<br>
[ox2:22311] top: openmpi-sessions-javier_at_ox2_0
<br>
[ox2:22311] tmp: /tmp
<br>
[ox2:22400] [0,1,1] setting up session dir with
<br>
[ox2:22400] 	universe default-universe
<br>
[ox2:22400] 	user javier
<br>
[ox2:22400] 	host ox2
<br>
[ox2:22400] 	jobid 1
<br>
[ox2:22400] 	procid 1
<br>
[ox2:22400] procdir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe/1/1
<br>
[ox2:22400] jobdir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe/1
<br>
[ox2:22400] unidir: /tmp/openmpi-sessions-javier_at_ox2_0/default-universe
<br>
[ox2:22400] top: openmpi-sessions-javier_at_ox2_0
<br>
[ox2:22400] tmp: /tmp
<br>
[oxigeno.ugr.es:30067] spawn: in job_state_callback(jobid = 1, state = 0x3)
<br>
[oxigeno.ugr.es:30070] orted: job_state_callback(jobid = 1, state = 134601784)
<br>
[oxigeno.ugr.es:30067] Info: Setting up debugger process table for applications
<br>
[ox2:22311] orted: job_state_callback(jobid = 1, state = 134643904)
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, ox2, hello, 22400)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, ox0, hello, 30076)
<br>
<p><p>Killed by signal 2.
<br>
<p>[oxigeno.ugr.es:30070] sess_dir_finalize: found job session dir empty - deleting
<br>
[oxigeno.ugr.es:30070] sess_dir_finalize: univ session dir not empty - leaving
<br>
mpirun: killing job...
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: oxigeno.ugr.es
<br>
PID:  30076
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
[oxigeno.ugr.es:30070] sess_dir_finalize: proc session dir not empty - leaving
<br>
[oxigeno.ugr.es:30070] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_ABORTED)
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: oxigeno.ugr.es
<br>
PID:  30076
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: oxigeno.ugr.es
<br>
PID:  30076
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
<p>[javier_at_oxigeno hello]$ exit
<br>
Script terminado (Tue Apr 25 11:25:41 2006
<br>
)
<br>
<p>
<br><p>
#include &lt;mpi.h&gt;	// for MPI_Init()
<br>
#include &lt;stdio.h&gt;	// for printf()
<br>
#include &lt;stdlib.h&gt;	// for exit()
<br>
<p>int main(int argc, char **argv){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello, world!  I am %d of %d\n&quot;, rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(0);
<br>
}
<br>
<p><p><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1131/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1132.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Checking the cluster status withMPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="1130.php">Laurent.POREZ_at_[hidden]: "[OMPI users] Checking the cluster status with MPI_Comm_spawn_multiple"</a>
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

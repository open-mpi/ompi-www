<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 10 18:26:56 2005" -->
<!-- isoreceived="20051110232656" -->
<!-- sent="Fri, 11 Nov 2005 10:23:38 +1100" -->
<!-- isosent="20051110232338" -->
<!-- name="Clement Chu" -->
<!-- email="clement.chu_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4" -->
<!-- id="4373D67A.6060306_at_csse.monash.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="dd2bcdaa17c4c770da375603475acc87_at_open-mpi.org" -->
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
<strong>From:</strong> Clement Chu (<em>clement.chu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-10 18:23:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0316.php">Jeff Squyres: "[O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0314.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0314.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0332.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your help.   kfc is machine name and clement is the username 
<br>
of this machine.  Do you think it is the problem?
<br>
<p>Then I tried to remove kfc machine and run again.  This time I can run 
<br>
mpi program and there is no error message output, but it is no program 
<br>
output too.  I think it is something wrong there. 
<br>
<p>[clement_at_localhost TestMPI]$ mpirun -d -np 2 test
<br>
[dhcppc0:02954] [0,0,0] setting up session dir with
<br>
[dhcppc0:02954]         universe default-universe
<br>
[dhcppc0:02954]         user clement
<br>
[dhcppc0:02954]         host dhcppc0
<br>
[dhcppc0:02954]         jobid 0
<br>
[dhcppc0:02954]         procid 0
<br>
[dhcppc0:02954] procdir: 
<br>
/tmp/openmpi-sessions-clement_at_dhcppc0_0/default-universe/0/0
<br>
[dhcppc0:02954] jobdir: 
<br>
/tmp/openmpi-sessions-clement_at_dhcppc0_0/default-universe/0
<br>
[dhcppc0:02954] unidir: 
<br>
/tmp/openmpi-sessions-clement_at_dhcppc0_0/default-universe[dhcppc0:02954] 
<br>
top: openmpi-sessions-clement_at_dhcppc0_0
<br>
[dhcppc0:02954] tmp: /tmp
<br>
[dhcppc0:02954] [0,0,0] contact_file 
<br>
/tmp/openmpi-sessions-clement_at_dhcppc0_0/default-universe/universe-setup.txt
<br>
[dhcppc0:02954] [0,0,0] wrote setup file
<br>
[dhcppc0:02954] spawn: in job_state_callback(jobid = 1, state = 0x1)
<br>
[dhcppc0:02954] pls:rsh: local csh: 0, local bash: 1
<br>
[dhcppc0:02954] pls:rsh: assuming same remote shell as local shell
<br>
[dhcppc0:02954] pls:rsh: remote csh: 0, remote bash: 1
<br>
[dhcppc0:02954] pls:rsh: final template argv:
<br>
[dhcppc0:02954] pls:rsh:     ssh &lt;template&gt; orted --debug --bootproxy 1 
<br>
--name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename &lt;template&gt; 
<br>
--universe clement_at_dhcppc0:default-universe --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.11.100:32780&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.11.100:32780&quot; --mpi-call-yield 0
<br>
[dhcppc0:02954] pls:rsh: launching on node localhost
<br>
[dhcppc0:02954] pls:rsh: oversubscribed -- setting mpi_yield_when_idle 
<br>
to 1 (1 2)
<br>
[dhcppc0:02954] pls:rsh: localhost is a LOCAL node
<br>
[dhcppc0:02954] pls:rsh: executing: orted --debug --bootproxy 1 --name 
<br>
0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost --universe 
<br>
clement_at_dhcppc0:default-universe --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.11.100:32780&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.11.100:32780&quot; --mpi-call-yield 1
<br>
[dhcppc0:02955] [0,0,1] setting up session dir with
<br>
[dhcppc0:02955]         universe default-universe
<br>
[dhcppc0:02955]         user clement
<br>
[dhcppc0:02955]         host localhost
<br>
[dhcppc0:02955]         jobid 0
<br>
[dhcppc0:02955]         procid 1
<br>
[dhcppc0:02955] procdir: 
<br>
/tmp/openmpi-sessions-clement_at_localhost_0/default-universe/0/1
<br>
[dhcppc0:02955] jobdir: 
<br>
/tmp/openmpi-sessions-clement_at_localhost_0/default-universe/0
<br>
[dhcppc0:02955] unidir: 
<br>
/tmp/openmpi-sessions-clement_at_localhost_0/default-universe
<br>
[dhcppc0:02955] top: openmpi-sessions-clement_at_localhost_0
<br>
[dhcppc0:02955] tmp: /tmp
<br>
[dhcppc0:02955] sess_dir_finalize: proc session dir not empty - leaving
<br>
[dhcppc0:02955] sess_dir_finalize: proc session dir not empty - leaving
<br>
[dhcppc0:02955] orted: job_state_callback(jobid = 1, state = 
<br>
ORTE_PROC_STATE_TERMINATED)
<br>
[dhcppc0:02955] sess_dir_finalize: found proc session dir empty - deleting
<br>
[dhcppc0:02955] sess_dir_finalize: found job session dir empty - deleting
<br>
[dhcppc0:02955] sess_dir_finalize: found univ session dir empty - deleting
<br>
[dhcppc0:02955] sess_dir_finalize: found top session dir empty - deleting
<br>
[dhcppc0:02954] spawn: in job_state_callback(jobid = 1, state = 0x9)
<br>
[dhcppc0:02954] sess_dir_finalize: found proc session dir empty - deleting
<br>
[dhcppc0:02954] sess_dir_finalize: found job session dir empty - deleting
<br>
[dhcppc0:02954] sess_dir_finalize: found univ session dir empty - deleting
<br>
[dhcppc0:02954] sess_dir_finalize: found top session dir empty - deleting
<br>
<p><p>Clement
<br>
<p><p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;One minor thing that I notice in your ompi_info output -- your build  
</span><br>
<span class="quotelev1">&gt;and run machines are different (kfc vs. clement).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Are these both FC4 machines, or are they different OS's/distros?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 10, 2005, at 10:01 AM, Clement Chu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$ mpirun -d -np 2 test
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] procdir: (null)
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] jobdir: (null)
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] unidir:  
</span><br>
<span class="quotelev2">&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] top: openmpi-sessions-clement_at_kfc_0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     tmpdir /tmp
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     universe default-universe-29199
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     user clement
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     host kfc
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     jobid 0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199]     procid 0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] procdir:
</span><br>
<span class="quotelev2">&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/0/0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] jobdir:
</span><br>
<span class="quotelev2">&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] unidir:
</span><br>
<span class="quotelev2">&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] top: openmpi-sessions-clement_at_kfc_0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] [0,0,0] contact_file
</span><br>
<span class="quotelev2">&gt;&gt;/tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/universe- 
</span><br>
<span class="quotelev2">&gt;&gt;setup.txt
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] [0,0,0] wrote setup file
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: final template argv:
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh:     ssh &lt;template&gt; orted --debug --bootproxy 1
</span><br>
<span class="quotelev2">&gt;&gt;--name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename &lt;template&gt;
</span><br>
<span class="quotelev2">&gt;&gt;--universe clement_at_kfc:default-universe-29199 --nsreplica
</span><br>
<span class="quotelev2">&gt;&gt;&quot;0.0.0;tcp://192.168.11.101:32784&quot; --gprreplica
</span><br>
<span class="quotelev2">&gt;&gt;&quot;0.0.0;tcp://192.168.11.101:32784&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to 1
</span><br>
<span class="quotelev2">&gt;&gt;(1 2)
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] spawn: in job_state_callback(jobid = 1, state = 0xa)
</span><br>
<span class="quotelev2">&gt;&gt;mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited on
</span><br>
<span class="quotelev2">&gt;&gt;signal 11.
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] spawn: in job_state_callback(jobid = 1, state = 0x9)
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] ERROR: A daemon on node localhost failed to start as  
</span><br>
<span class="quotelev2">&gt;&gt;expected.
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] The daemon received a signal 11.
</span><br>
<span class="quotelev2">&gt;&gt;1 additional process aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: found univ session dir empty - deleting
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:29199] sess_dir_finalize: top session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;opmi_info output message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$ ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;                Open MPI: 1.0rc5r8053
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI SVN revision: r8053
</span><br>
<span class="quotelev2">&gt;&gt;                Open RTE: 1.0rc5r8053
</span><br>
<span class="quotelev2">&gt;&gt;   Open RTE SVN revision: r8053
</span><br>
<span class="quotelev2">&gt;&gt;                    OPAL: 1.0rc5r8053
</span><br>
<span class="quotelev2">&gt;&gt;       OPAL SVN revision: r8053
</span><br>
<span class="quotelev2">&gt;&gt;                  Prefix: /home/clement/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;           Configured by: clement
</span><br>
<span class="quotelev2">&gt;&gt;           Configured on: Fri Nov 11 00:37:23 EST 2005
</span><br>
<span class="quotelev2">&gt;&gt;          Configure host: kfc
</span><br>
<span class="quotelev2">&gt;&gt;                Built by: clement
</span><br>
<span class="quotelev2">&gt;&gt;                Built on: Fri Nov 11 00:59:26 EST 2005
</span><br>
<span class="quotelev2">&gt;&gt;              Built host: kfc
</span><br>
<span class="quotelev2">&gt;&gt;              C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;              C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;            C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;             C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;          C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;  Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt;Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt;Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;         libltdl support: 1
</span><br>
<span class="quotelev2">&gt;&gt;              MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA timer: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;           MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA coll: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA topo: unity (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA gpr: null (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA iof: svc (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ns: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: dash_host (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: localhost (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmaps: round_robin (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev2">&gt;&gt;v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Clement Kam Man Chu
Research Assistant
School of Computer Science &amp; Software Engineering
Monash University, Caulfield Campus
Ph: 61 3 9903 1964
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0316.php">Jeff Squyres: "[O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0314.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0314.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0332.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
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

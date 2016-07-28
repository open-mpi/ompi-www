<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 10 13:25:04 2005" -->
<!-- isoreceived="20051110182504" -->
<!-- sent="Thu, 10 Nov 2005 13:24:54 -0500" -->
<!-- isosent="20051110182454" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4" -->
<!-- id="dd2bcdaa17c4c770da375603475acc87_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="437360C9.7060909_at_csse.monash.edu.au" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-10 13:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0315.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0313.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0309.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0315.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0315.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0332.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One minor thing that I notice in your ompi_info output -- your build  
<br>
and run machines are different (kfc vs. clement).
<br>
<p>Are these both FC4 machines, or are they different OS's/distros?
<br>
<p><p>On Nov 10, 2005, at 10:01 AM, Clement Chu wrote:
<br>
<p><span class="quotelev1">&gt; [clement_at_kfc TestMPI]$ mpirun -d -np 2 test
</span><br>
<span class="quotelev1">&gt; [kfc:29199] procdir: (null)
</span><br>
<span class="quotelev1">&gt; [kfc:29199] jobdir: (null)
</span><br>
<span class="quotelev1">&gt; [kfc:29199] unidir:  
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-clement_at_kfc_0/default-universe
</span><br>
<span class="quotelev1">&gt; [kfc:29199] top: openmpi-sessions-clement_at_kfc_0
</span><br>
<span class="quotelev1">&gt; [kfc:29199] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [kfc:29199] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [kfc:29199]     tmpdir /tmp
</span><br>
<span class="quotelev1">&gt; [kfc:29199]     universe default-universe-29199
</span><br>
<span class="quotelev1">&gt; [kfc:29199]     user clement
</span><br>
<span class="quotelev1">&gt; [kfc:29199]     host kfc
</span><br>
<span class="quotelev1">&gt; [kfc:29199]     jobid 0
</span><br>
<span class="quotelev1">&gt; [kfc:29199]     procid 0
</span><br>
<span class="quotelev1">&gt; [kfc:29199] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/0/0
</span><br>
<span class="quotelev1">&gt; [kfc:29199] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/0
</span><br>
<span class="quotelev1">&gt; [kfc:29199] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199
</span><br>
<span class="quotelev1">&gt; [kfc:29199] top: openmpi-sessions-clement_at_kfc_0
</span><br>
<span class="quotelev1">&gt; [kfc:29199] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [kfc:29199] [0,0,0] contact_file
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-clement_at_kfc_0/default-universe-29199/universe- 
</span><br>
<span class="quotelev1">&gt; setup.txt
</span><br>
<span class="quotelev1">&gt; [kfc:29199] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [kfc:29199] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev1">&gt; [kfc:29199] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [kfc:29199] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev1">&gt; [kfc:29199] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [kfc:29199] pls:rsh:     ssh &lt;template&gt; orted --debug --bootproxy 1
</span><br>
<span class="quotelev1">&gt; --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename &lt;template&gt;
</span><br>
<span class="quotelev1">&gt; --universe clement_at_kfc:default-universe-29199 --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.11.101:32784&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.11.101:32784&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [kfc:29199] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev1">&gt; [kfc:29199] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to 1
</span><br>
<span class="quotelev1">&gt; (1 2)
</span><br>
<span class="quotelev1">&gt; [kfc:29199] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [kfc:29199] spawn: in job_state_callback(jobid = 1, state = 0xa)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited on
</span><br>
<span class="quotelev1">&gt; signal 11.
</span><br>
<span class="quotelev1">&gt; [kfc:29199] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [kfc:29199] spawn: in job_state_callback(jobid = 1, state = 0x9)
</span><br>
<span class="quotelev1">&gt; [kfc:29199] ERROR: A daemon on node localhost failed to start as  
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; [kfc:29199] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [kfc:29199] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [kfc:29199] The daemon received a signal 11.
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt; [kfc:29199] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [kfc:29199] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [kfc:29199] sess_dir_finalize: found univ session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [kfc:29199] sess_dir_finalize: top session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opmi_info output message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [clement_at_kfc TestMPI]$ ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.0rc5r8053
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r8053
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.0rc5r8053
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r8053
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.0rc5r8053
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r8053
</span><br>
<span class="quotelev1">&gt;                   Prefix: /home/clement/openmpi
</span><br>
<span class="quotelev1">&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: clement
</span><br>
<span class="quotelev1">&gt;            Configured on: Fri Nov 11 00:37:23 EST 2005
</span><br>
<span class="quotelev1">&gt;           Configure host: kfc
</span><br>
<span class="quotelev1">&gt;                 Built by: clement
</span><br>
<span class="quotelev1">&gt;                 Built on: Fri Nov 11 00:59:26 EST 2005
</span><br>
<span class="quotelev1">&gt;               Built host: kfc
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: 1
</span><br>
<span class="quotelev1">&gt;               MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: teg (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: uniq (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt; [clement_at_kfc TestMPI]$
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0315.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0313.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0309.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0315.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0315.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0332.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
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

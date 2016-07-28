<?
$subject_val = "Re: [OMPI users] Problem with getting started";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 06:44:13 2008" -->
<!-- isoreceived="20080612104413" -->
<!-- sent="Thu, 12 Jun 2008 12:41:13 +0200" -->
<!-- isosent="20080612104113" -->
<!-- name="Manuel Freiberger" -->
<!-- email="manuel.freiberger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with getting started" -->
<!-- id="200806121241.13217.manuel.freiberger_at_tugraz.at" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200806111852.52047.manuel.freiberger_at_tugraz.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with getting started<br>
<strong>From:</strong> Manuel Freiberger (<em>manuel.freiberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-12 06:41:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5866.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Previous message:</strong> <a href="5864.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="5861.php">Manuel Freiberger: "[OMPI users] Problem with getting started"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5866.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again!
<br>
<p>I made a few more tests to call mpirun with different parameters. I also 
<br>
included the output from
<br>
&nbsp;&nbsp;mpirun -debug-daemons -hostfile myhosts -np 2 mpi-test.exe
<br>
<p><pre>
----
Daemon [0,0,1] checking in as pid 14725 on host bla.bla.bla.50
Daemon [0,0,2] checking in as pid 6375 on host bla.bla.bla.72
[fbmtpc31:14725] [0,0,1] orted: received launch callback
[clockwork:06375] [0,0,2] orted: received launch callback
Rank 0 is going to send
Rank 1 is waiting for answer
Rank 0 OK!
^C  &lt;-- program hung so killed it
Killed by signal 2.
mpirun: killing job...
[fbmtpc31:14725] [0,0,1] orted_recv_pls: received message from [0,0,0]
[fbmtpc31:14725] [0,0,1] orted_recv_pls: received kill_local_procs
[fbmtpc31:14725] [0,0,1] orted_recv_pls: received message from [0,0,0]
[fbmtpc31:14725] [0,0,1] orted_recv_pls: received kill_local_procs
[fbmtpc31:14724] [0,0,0] ORTE_ERROR_LOG: Timeout in file 
base/pls_base_orted_cmds.c at line 275
[fbmtpc31:14724] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at 
line 1166
[fbmtpc31:14724] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 
90
[fbmtpc31:14724] ERROR: A daemon on node bla.bla.bla.72 failed to start as 
expected.
[fbmtpc31:14724] ERROR: There may be more information available from
[fbmtpc31:14724] ERROR: the remote shell (see above).
[fbmtpc31:14724] ERROR: The daemon exited unexpectedly with status 255.
mpirun noticed that job rank 0 with PID 14727 on node bla.bla.bla.50 exited on 
signal 15 (Terminated).
1 additional process aborted (not shown)
[fbmtpc31:14725] [0,0,1] orted_recv_pls: received message from [0,0,0]
[fbmtpc31:14725] [0,0,1] orted_recv_pls: received exit
-----
This is the output of ompi_info on the first PC (OpenSUSE 10.2 machine):
               Open MPI: 1.2.6
   Open MPI SVN revision: r17946
                Open RTE: 1.2.6
   Open RTE SVN revision: r17946
                    OPAL: 1.2.6
       OPAL SVN revision: r17946
                  Prefix: /usr
 Configured architecture: i686-pc-linux-gnu
           Configured by: root
           Configured on: Wed Jun 11 17:44:46 CEST 2008
          Configure host: fbmtpc31
                Built by: manuel
                Built on: Wed Jun 11 17:50:25 CEST 2008
              Built host: fbmtpc31
              C bindings: yes
            C++ bindings: yes
      Fortran77 bindings: no
      Fortran90 bindings: no
 Fortran90 bindings size: na
              C compiler: gcc
     C compiler absolute: /usr/bin/gcc
            C++ compiler: g++
   C++ compiler absolute: /usr/bin/g++
      Fortran77 compiler: none
  Fortran77 compiler abs: none
      Fortran90 compiler: none
  Fortran90 compiler abs: none
             C profiling: yes
           C++ profiling: yes
     Fortran77 profiling: no
     Fortran90 profiling: no
          C++ exceptions: no
          Thread support: posix (mpi: no, progress: no)
  Internal debug support: no
     MPI parameter check: runtime
Memory profiling support: no
Memory debugging support: no
         libltdl support: yes
   Heterogeneous support: yes
 mpirun default --prefix: no
           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.6)
              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.6)
           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.6)
           MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.6)
               MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.6)
         MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.6)
         MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.6)
           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
           MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
                MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.6)
                MCA coll: self (MCA v1.0, API v1.0, Component v1.2.6)
                MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.6)
                MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.6)
                  MCA io: romio (MCA v1.0, API v1.0, Component v1.2.6)
               MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.6)
               MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.6)
              MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.6)
                 MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.6)
                 MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
                MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.6)
              MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.6)
              MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.6)
              MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.6)
                  MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.6)
                  MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.6)
                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
                 MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.6)
               MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.6)
                MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.6)
                MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.6)
                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA sds: env (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.6)
And this one is from the second (Gentoo machine):
               Open MPI: 1.2.6
   Open MPI SVN revision: r17946
                Open RTE: 1.2.6
   Open RTE SVN revision: r17946
                    OPAL: 1.2.6
       OPAL SVN revision: r17946
                  Prefix: /usr
 Configured architecture: i686-pc-linux-gnu
           Configured by: root
           Configured on: Tue Jun 10 15:31:55 CEST 2008
          Configure host: clockwork
                Built by: root
                Built on: Di 10. Jun 15:47:43 CEST 2008
              Built host: clockwork
              C bindings: yes
            C++ bindings: yes
      Fortran77 bindings: yes (all)
      Fortran90 bindings: yes
 Fortran90 bindings size: small
              C compiler: i686-pc-linux-gnu-gcc
     C compiler absolute: /usr/bin/i686-pc-linux-gnu-gcc
            C++ compiler: i686-pc-linux-gnu-g++
   C++ compiler absolute: /usr/bin/i686-pc-linux-gnu-g++
      Fortran77 compiler: i686-pc-linux-gnu-gfortran
  Fortran77 compiler abs: /usr/bin/i686-pc-linux-gnu-gfortran
      Fortran90 compiler: i686-pc-linux-gnu-gfortran
  Fortran90 compiler abs: /usr/bin/i686-pc-linux-gnu-gfortran
             C profiling: yes
           C++ profiling: yes
     Fortran77 profiling: yes
     Fortran90 profiling: yes
          C++ exceptions: no
          Thread support: posix (mpi: no, progress: no)
  Internal debug support: no
     MPI parameter check: runtime
Memory profiling support: no
Memory debugging support: no
         libltdl support: yes
   Heterogeneous support: no
 mpirun default --prefix: yes
           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.6)
              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.6)
           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.6)
           MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.6)
               MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.6)
         MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.6)
         MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.6)
           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
           MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
                MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.6)
                MCA coll: self (MCA v1.0, API v1.0, Component v1.2.6)
                MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.6)
                MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.6)
                  MCA io: romio (MCA v1.0, API v1.0, Component v1.2.6)
               MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.6)
               MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.6)
              MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.6)
                 MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.6)
                 MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
                MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.6)
              MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.6)
              MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.6)
              MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.6)
                  MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.6)
                  MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.6)
                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
                 MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.6)
               MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.6)
                MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.6)
                MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.6)
                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.6)
                 MCA sds: env (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.6)
                 MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.6)
Maybe I should mention that the program works fine, if I let it run on one PC 
only. It just does not come across the recv()-command if I spawn it on two 
PCs.
If somebody already had similar problems, please let me know. Thanks in 
advance!
Best regards,
Manuel
-- 
Manuel Freiberger
Institute of Medical Engineering
Graz University of Technology
manuel.freiberger_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5866.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>Previous message:</strong> <a href="5864.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="5861.php">Manuel Freiberger: "[OMPI users] Problem with getting started"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5866.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
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

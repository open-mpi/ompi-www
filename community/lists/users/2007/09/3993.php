<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 12 22:50:25 2007" -->
<!-- isoreceived="20070913025025" -->
<!-- sent="Wed, 12 Sep 2007 19:50:17 -0700 (PDT)" -->
<!-- isosent="20070913025017" -->
<!-- name="Daniel Rozenbaum" -->
<!-- email="drozenbaum_at_[hidden]" -->
<!-- subject="[OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv" -->
<!-- id="572410.11619.qm_at_web52205.mail.re2.yahoo.com" -->
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
<strong>From:</strong> Daniel Rozenbaum (<em>drozenbaum_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-12 22:50:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3994.php">Amit Kumar Saha: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="3992.php">Richard Friedman: "Re: [OMPI users] OpenMPI Documentation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4024.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Reply:</strong> <a href="4024.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,

I'm working on an MPI application for which I recently started using Open MPI instead of LAM/MPI. Both with Open MPI and LAM/MPI it mostly runs ok, but there're a number of cases under which the application terminates abnormally when using LAM/MPI, and hangs when using Open MPI. I haven't been able to reduce the example reproducing the problem, so every time it takes about an hour of running time before the application hangs. It hangs right before it's supposed to end properly. The master and all the slave processes are showing in &quot;top&quot; consuming 100% CPU. The application just hangs there like that until I interrupt it.

Here's the command line:

orterun --prefix /path/to/openmpi -mca btl tcp,self -x PATH -x LD_LIBRARY_PATH --hostfile hostfile1 /path/to/app_executable &lt;app params&gt;

hostfile1:

host1 slots=3
host2 slots=4
host3 slots=4
host4 slots=4
host5 slots=4
host6 slots=4
host7 slots=4
host8 slots=4
host9 slots=4
host10 slots=4
host11 slots=4
host12 slots=4
host13 slots=4
host14 slots=4

Each host is a dual-CPU dual-core Intel box running Red Hat Enterprise Server 4.


I caught the following error messages on app's stderr during the run:

[host1][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed with errno=110
[host8][0,1,29][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed with errno=113
&lt;later&gt;
[host1][0,1,0][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed with errno=110


Excerpts from strace output, and ompi_info are attached below.
Any advice would be greatly appreciated!
Thanks in advance,
Daniel


strace on the orterun process:

poll([{fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=5, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}, {fd=10, events=POLLIN}, {fd=11, events=POLLIN}, {fd=12, events=POLLIN}, {fd=13, events=POLLIN}, {fd=14, events=POLLIN}, {fd=15, events=POLLIN}, {fd=16, events=POLLIN}, {fd=17, events=POLLIN}, {fd=18, events=POLLIN}, {fd=19, events=POLLIN}, {fd=20, events=POLLIN}, {fd=0, events=POLLIN}, {fd=21, events=POLLIN}, {fd=22, events=POLLIN}, {fd=23, events=POLLIN}, {fd=24, events=POLLIN}, {fd=25, events=POLLIN}, {fd=26, events=POLLIN}, {fd=27, events=POLLIN}, {fd=28, events=POLLIN}, {fd=29, events=POLLIN}, {fd=30, events=POLLIN}, {fd=31, events=POLLIN}, {fd=34, events=POLLIN}, {fd=33, events=POLLIN}, {fd=32, events=POLLIN}, {fd=35, events=POLLIN}, ...], 71, 1000) = 0
rt_sigprocmask(SIG_BLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
rt_sigaction(SIGCHLD, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigaction(SIGTERM, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigaction(SIGINT, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigaction(SIGUSR1, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigaction(SIGUSR2, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
sched_yield()                           = 0
rt_sigprocmask(SIG_BLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
rt_sigaction(SIGCHLD, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigaction(SIGTERM, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigaction(SIGINT, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigaction(SIGUSR1, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigaction(SIGUSR2, {0x2a956c7e70, [INT USR1 USR2 TERM CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigprocmask(SIG_UNBLOCK, [INT USR1 USR2 TERM CHLD], NULL, 8) = 0
poll([{fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=5, events=POLL



strace on the master process:

rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
poll([{fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=14, events=POLLIN}, {fd=11, events=POLLIN}, {fd=12, events=POLLIN}, {fd=13, events=POLLIN}, {fd=16, events=POLLIN}, {fd=15, events=POLLIN}, {fd=20, events=POLLIN}, {fd=21, events=POLLIN}, {fd=22, events=POLLIN}, {fd=23, events=POLLIN}, {fd=67, events=POLLIN}, {fd=25, events=POLLIN}, {fd=66, events=POLLIN}, {fd=26, events=POLLIN}, {fd=27, events=POLLIN}, {fd=28, events=POLLIN}, {fd=29, events=POLLIN}, {fd=30, events=POLLIN}, {fd=31, events=POLLIN}, {fd=32, events=POLLIN}, {fd=33, events=POLLIN}, {fd=34, events=POLLIN}, {fd=35, events=POLLIN}, {fd=36, events=POLLIN}, {fd=37, events=POLLIN}, {fd=38, events=POLLIN}, {fd=39, events=POLLIN}, {fd=40, events=POLLIN}, ...], 56, 0) = 0
rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER|SA_RESTART, 0x3fdf80c4f0}, NULL, 8) = 0
rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
poll([{fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=14, events=POLLIN}, {fd=11, events=POLLIN}, {fd=12, events=POLLIN}, {fd=13, events=POLLIN}, {fd=16, events=POLLIN}, {fd=15, events=POLLIN}, {fd=20, events=POLLIN}, {fd=21, events=POLLIN}, {fd=22, events=POLLIN}, {fd=23, events=POLLIN}, {fd=67, events=POLLIN}, {fd=25, events=POLLIN}, {fd=66, events=POLLIN}, {fd=26, events=POLLIN}, {fd=27, events=POLLIN}, {fd=28, events=POLLIN}, {fd=29, events=POLLIN}, {fd=30, events=POLLIN}, {fd=31, events=POLLIN}, {fd=32, events=POLLIN}, {fd=33, events=POLLIN}, {fd=34, events=POLLIN}, {fd=35, events=POLLIN}, {fd=36, events=POLLIN}, {fd=37, events=POLLIN}, {fd=38, events=POLLIN}, {fd=39, events=POLLIN}, {fd=40, events=POLLIN}, ...], 56, 0) = 0



strace on one of the slaves:

rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER|SA_RESTART, 0x3c71c0c4f0}, NULL, 8) = 0
rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER|SA_RESTART, 0x3c71c0c4f0}, NULL, 8) = 0
rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
poll([{fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=11, events=POLLIN}, {fd=12, events=POLLIN}, {fd=13, events=POLLIN}, {fd=15, events=POLLIN}, {fd=14, events=POLLIN}, {fd=16, events=POLLIN}, {fd=17, events=POLLIN}, {fd=18, events=POLLIN}, {fd=19, events=POLLIN}, {fd=20, events=POLLIN}, {fd=21, events=POLLIN}, {fd=22, events=POLLIN}, {fd=23, events=POLLIN}], 17, 0) = 0
rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER|SA_RESTART, 0x3c71c0c4f0}, NULL, 8) = 0
rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
rt_sigaction(SIGCHLD, {0x2a972cae70, [CHLD], SA_RESTORER|SA_RESTART, 0x3c71c0c4f0}, NULL, 8) = 0
rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
poll([{fd=5, events=POLLIN}, {fd=6, events=POLLIN}, {fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=11, events=POLLIN}, {fd=12, events=POLLIN}, {fd=13, events=POLLIN}, {fd=15, events=POLLIN}, {fd=14, events=POLLIN}, {fd=16, events=POLLIN}, {fd=17, events=POLLIN}, {fd=18, events=POLLIN}, {fd=19, events=POLLIN}, {fd=20, events=POLLIN}, {fd=21, events=POLLIN}, {fd=22, events=POLLIN}, {fd=23, events=POLLIN}], 17, 0) = 0




ompi_info --all:


                Open MPI: 1.2.3
   Open MPI SVN revision: r15136
                Open RTE: 1.2.3
   Open RTE SVN revision: r15136
                    OPAL: 1.2.3
       OPAL SVN revision: r15136
           MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.3)
              MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.3)
           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.3)
           MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.3)
           MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.3)
               MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.3)
         MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.3)
         MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.3)
           MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
           MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
                MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.3)
                MCA coll: self (MCA v1.0, API v1.0, Component v1.2.3)
                MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.3)
                MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA io: romio (MCA v1.0, API v1.0, Component v1.2.3)
               MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.3)
               MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.3)
              MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.3)
                 MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.3)
                 MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
                MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.3)
              MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.3)
              MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.3)
              MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.3)
                  MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.3)
                  MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.3)
                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
                 MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.3)
               MCA rmaps: round_robin (MCA v1.0, API v1.3, Component v1.2.3)
                MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.3)
                MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.3)
                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.3)
                 MCA sds: env (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.3)
                 MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.3)
                  Prefix: /path/to/openmpi
                  Bindir: /path/to/openmpi/bin
                  Libdir: /path/to/openmpi/lib
                  Incdir: /path/to/openmpi/include
               Pkglibdir: /path/to/openmpi/lib/openmpi
              Sysconfdir: /path/to/openmpi/etc
 Configured architecture: x86_64-unknown-linux-gnu
           Configured by: user1
           Configured on: Tue Sep 11 15:57:23 EDT 2007
          Configure host: host1.domain.com
                Built by: user1
                Built on: Tue Sep 11 16:09:44 EDT 2007
              Built host: host1.domain.com
              C bindings: yes
            C++ bindings: yes
      Fortran77 bindings: yes (all)
      Fortran90 bindings: no
 Fortran90 bindings size: na
              C compiler: gcc
     C compiler absolute: /usr/bin/gcc
             C char size: 1
             C bool size: 1
            C short size: 2
              C int size: 4
             C long size: 8
            C float size: 4
           C double size: 8
          C pointer size: 8
            C char align: 1
            C bool align: 1
             C int align: 4
           C float align: 4
          C double align: 8
            C++ compiler: g++
   C++ compiler absolute: /usr/bin/g++
      Fortran77 compiler: g77
  Fortran77 compiler abs: /usr/bin/g77
      Fortran90 compiler: none
  Fortran90 compiler abs: none
       Fort integer size: 4
       Fort logical size: 4
 Fort logical value true: 1
      Fort have integer1: yes
      Fort have integer2: yes
      Fort have integer4: yes
      Fort have integer8: yes
     Fort have integer16: no
         Fort have real4: yes
         Fort have real8: yes
        Fort have real16: no
      Fort have complex8: yes
     Fort have complex16: yes
     Fort have complex32: no
      Fort integer1 size: 1
      Fort integer2 size: 2
      Fort integer4 size: 4
      Fort integer8 size: 8
     Fort integer16 size: -1
          Fort real size: 4
         Fort real4 size: 4
         Fort real8 size: 8
        Fort real16 size: -1
      Fort dbl prec size: 4
          Fort cplx size: 4
      Fort dbl cplx size: 4
         Fort cplx8 size: 8
        Fort cplx16 size: 16
        Fort cplx32 size: -1
      Fort integer align: 4
     Fort integer1 align: 1
     Fort integer2 align: 2
     Fort integer4 align: 4
     Fort integer8 align: 8
    Fort integer16 align: -1
         Fort real align: 4
        Fort real4 align: 4
        Fort real8 align: 8
       Fort real16 align: -1
     Fort dbl prec align: 4
         Fort cplx align: 4
     Fort dbl cplx align: 4
        Fort cplx8 align: 4
       Fort cplx16 align: 8
       Fort cplx32 align: -1
             C profiling: yes
           C++ profiling: yes
     Fortran77 profiling: yes
     Fortran90 profiling: no
          C++ exceptions: no
          Thread support: posix (mpi: no, progress: no)
            Build CFLAGS: -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
          Build CXXFLAGS: -O3 -DNDEBUG -finline-functions -pthread
            Build FFLAGS: 
           Build FCFLAGS: 
           Build LDFLAGS: -export-dynamic  
              Build LIBS: -lnsl -lutil  -lm 
    Wrapper extra CFLAGS: -pthread 
  Wrapper extra CXXFLAGS: -pthread 
    Wrapper extra FFLAGS: -pthread 
   Wrapper extra FCFLAGS: -pthread 
   Wrapper extra LDFLAGS:     
      Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl -lutil -lm -ldl 
  Internal debug support: no
     MPI parameter check: runtime
Memory profiling support: no
Memory debugging support: no
         libltdl support: yes
   Heterogeneous support: yes
 mpirun default --prefix: no
                 MCA mca: parameter &quot;mca_param_files&quot; (current value: &quot;/home/user1/.openmpi/mca-params.conf:/path/to/openmpi/etc/openmpi-mca-params.conf&quot;)
                          Path for MCA configuration files containing default parameter values
                 MCA mca: parameter &quot;mca_component_path&quot; (current value: &quot;/path/to/openmpi/lib/openmpi:/home/user1/.openmpi/components&quot;)
                          Path where to look for Open MPI and ORTE components
                 MCA mca: parameter &quot;mca_verbose&quot; (current value: &lt;none&gt;)
                          Top-level verbosity parameter
                 MCA mca: parameter &quot;mca_component_show_load_errors&quot; (current value: &quot;1&quot;)
                          Whether to show errors for components that failed to load or not
                 MCA mca: parameter &quot;mca_component_disable_dlopen&quot; (current value: &quot;0&quot;)
                          Whether to attempt to disable opening dynamic components or not
                 MCA mpi: parameter &quot;mpi_param_check&quot; (current value: &quot;1&quot;)
                          Whether you want MPI API parameters checked at run-time or not.  Possible values are 0 (no checking) and 1 (perform checking at run-time)
                 MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value: &quot;0&quot;)
                          Yield the processor when waiting for MPI communication (for MPI processes, will default to 1 when oversubscribing nodes)
                 MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current value: &quot;-1&quot;)
                          How often to progress TCP communications (0 = never, otherwise specified in microseconds)
                 MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current value: &quot;0&quot;)
                          Whether MPI_FINALIZE shows all MPI handles that were not freed or not
                 MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current value: &quot;0&quot;)
                          Whether to actually free MPI objects when their handles are freed
                 MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current value: &quot;0&quot;)
                          Whether to show all MCA parameter value during MPI_INIT or not (good for reproducability of MPI jobs)
                 MCA mpi: parameter &quot;mpi_show_mca_params_file&quot; (current value: &lt;none&gt;)
                          If mpi_show_mca_params is true, setting this string to a valid filename tells Open MPI to dump all the MCA parameter values into a file suitable for reading via the mca_param_files parameter (good for reproducability of MPI jobs)
                 MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value: &quot;0&quot;)
                          If nonzero, assume that this job is the only (set of) process(es) running on each node and bind processes to processors, starting with processor ID 0
                 MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot; (current value: &quot;1&quot;)
                          If nonzero, save the string hostnames of all MPI peer processes (mostly for error / debugging output messages).  This can add quite a bit of memory usage to each MPI process.
                 MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value: &quot;0&quot;)
                          If nonzero, print out an identifying message when MPI_ABORT is invoked (hostname, PID of the process that called MPI_ABORT) and delay for that many seconds before exiting (a negative delay value means to never abort).  This allows attaching of a debugger before quitting the job.
                 MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current value: &quot;0&quot;)
                          If nonzero, print out a stack trace when MPI_ABORT is invoked
                 MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value: &quot;0&quot;)
                          Whether to force MPI processes to create connections / warmup with *all* peers during MPI_INIT (vs. making connections lazily -- upon the first MPI traffic between each process peer pair)
                 MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current value: &quot;0&quot;)
                          Whether to force MPI processes to fully wire-up the OOB system between MPI processes.
                 MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &quot;0&quot;)
                          Whether to use the &quot;leave pinned&quot; protocol or not.  Enabling this setting can help bandwidth performance when repeatedly sending and receiving large messages with the same buffers over RDMA-based networks.
                 MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot; (current value: &quot;0&quot;)
                          Whether to use the &quot;leave pinned pipeline&quot; protocol or not.
                MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
                          Top-level ORTE debug switch
                MCA orte: parameter &quot;orte_no_daemonize&quot; (current value: &quot;0&quot;)
                          Whether to properly daemonize the ORTE daemons or not
                MCA orte: parameter &quot;orte_base_user_debugger&quot; (current value: &quot;totalview @mpirun@ -a @mpirun_args@ : fxp @mpirun@ -a @mpirun_args@&quot;)
                          Sequence of user-level debuggers to search for in orterun
                MCA orte: parameter &quot;orte_abort_timeout&quot; (current value: &quot;10&quot;)
                          Time to wait [in seconds] before giving up on aborting an ORTE operation
                MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;)
                          Request that critical timing loops be measured
                MCA opal: parameter &quot;opal_signal&quot; (current value: &quot;6,7,8,11&quot;)
                          If a signal is received, display the stack trace frame
           MCA backtrace: parameter &quot;backtrace&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the backtrace framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
           MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the backtrace framework (0 = no verbosity)
           MCA backtrace: parameter &quot;backtrace_execinfo_priority&quot; (current value: &quot;0&quot;)
              MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the memory framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
              MCA memory: parameter &quot;memory_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the memory framework (0 = no verbosity)
              MCA memory: parameter &quot;memory_ptmalloc2_priority&quot; (current value: &quot;0&quot;)
           MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the paffinity framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
           MCA paffinity: parameter &quot;paffinity_linux_priority&quot; (current value: &quot;10&quot;)
                          Priority of the linux paffinity component
           MCA paffinity: information &quot;paffinity_linux_have_cpu_set_t&quot; (value: &quot;1&quot;)
                          Whether this component was compiled on a system with the type cpu_set_t or not (1 = yes, 0 = no)
           MCA paffinity: information &quot;paffinity_linux_CPU_ZERO_ok&quot; (value: &quot;1&quot;)
                          Whether this component was compiled on a system where CPU_ZERO() is functional or broken (1 = functional, 0 = broken/not available)
           MCA paffinity: information &quot;paffinity_linux_sched_setaffinity_num_params&quot; (value: &quot;3&quot;)
                          The number of parameters that sched_set_affinity() takes on the machine where this component was compiled
           MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the maffinity framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
           MCA maffinity: parameter &quot;maffinity_first_use_priority&quot; (current value: &quot;10&quot;)
                          Priority of the first_use maffinity component
           MCA maffinity: parameter &quot;maffinity_libnuma_priority&quot; (current value: &quot;25&quot;)
                          Priority of the libnuma maffinity component
               MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the timer framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
               MCA timer: parameter &quot;timer_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the timer framework (0 = no verbosity)
               MCA timer: parameter &quot;timer_linux_priority&quot; (current value: &quot;0&quot;)
           MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the allocator framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
           MCA allocator: parameter &quot;allocator_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the allocator framework (0 = no verbosity)
           MCA allocator: parameter &quot;allocator_basic_priority&quot; (current value: &quot;0&quot;)
           MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot; (current value: &quot;30&quot;)
           MCA allocator: parameter &quot;allocator_bucket_priority&quot; (current value: &quot;0&quot;)
                MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the coll framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                MCA coll: parameter &quot;coll_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the coll framework (0 = no verbosity)
                MCA coll: parameter &quot;coll_basic_priority&quot; (current value: &quot;10&quot;)
                          Priority of the basic coll component
                MCA coll: parameter &quot;coll_basic_crossover&quot; (current value: &quot;4&quot;)
                          Minimum number of processes in a communicator before using the logarithmic algorithms
                MCA coll: parameter &quot;coll_self_priority&quot; (current value: &quot;75&quot;)
                MCA coll: parameter &quot;coll_sm_priority&quot; (current value: &quot;0&quot;)
                          Priority of the sm coll component
                MCA coll: parameter &quot;coll_sm_control_size&quot; (current value: &quot;4096&quot;)
                          Length of the control data -- should usually be either the length of a cache line on most SMPs, or the size of a page on machines that support direct memory affinity page placement (in bytes)
                MCA coll: parameter &quot;coll_sm_bootstrap_filename&quot; (current value: &quot;shared_mem_sm_bootstrap&quot;)
                          Filename (in the Open MPI session directory) of the coll sm component bootstrap rendezvous mmap file
                MCA coll: parameter &quot;coll_sm_bootstrap_num_segments&quot; (current value: &quot;8&quot;)
                          Number of segments in the bootstrap file
                MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current value: &quot;8192&quot;)
                          Fragment size (in bytes) used for passing data through shared memory (will be rounded up to the nearest control_size size)
                MCA coll: parameter &quot;coll_sm_mpool&quot; (current value: &quot;sm&quot;)
                          Name of the mpool component to use
                MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot; (current value: &quot;2&quot;)
                          Number of &quot;in use&quot; flags, used to mark a message passing area segment as currently being used or not (must be &gt;= 2 and &lt;= comm_num_segments)
                MCA coll: parameter &quot;coll_sm_comm_num_segments&quot; (current value: &quot;8&quot;)
                          Number of segments in each communicator's shared memory message passing area (must be &gt;= 2, and must be a multiple of comm_in_use_flags)
                MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current value: &quot;4&quot;)
                          Degree of the tree for tree-based operations (must be =&gt; 1 and &lt;= min(control_size, 255))
                MCA coll: information &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;216&quot;)
                          Amount of shared memory used in the shared memory bootstrap area (in bytes)
                MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current value: &quot;4&quot;)
                          Number of processes to use for the calculation of the shared_mem_size MCA information parameter (must be =&gt; 2)
                MCA coll: information &quot;coll_sm_shared_mem_used_data&quot; (value: &quot;548864&quot;)
                          Amount of shared memory used in the shared memory data area for info_num_procs processes (in bytes)
                MCA coll: parameter &quot;coll_tuned_priority&quot; (current value: &quot;30&quot;)
                          Priority of the tuned coll component
                MCA coll: parameter &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value: &quot;32768&quot;)
                          Size of communicator were we stop pre-allocating memory for the fixed internal buffer used for message requests etc that is hung off the communicator data segment. I.e. if you have a 100'000 nodes you might not want to pre-allocate 200'000 request handle slots per communicator instance!
                MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot; (current value: &quot;4&quot;)
                          Inital fanout used in the tree topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
                MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot; (current value: &quot;4&quot;)
                          Inital fanout used in the chain (fanout followed by pipeline) topologies for each communicator. This is only an initial guess, if a tuned collective needs a different fanout for an operation, it build it dynamically. This parameter is only for the first guess and might save a little time
                MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot; (current value: &quot;0&quot;)
                          Switch used to decide if we use static (compiled/if statements) or dynamic (built at runtime) decision function rules
                  MCA io: parameter &quot;io_base_freelist_initial_size&quot; (current value: &quot;16&quot;)
                          Initial MPI-2 IO request freelist size
                  MCA io: parameter &quot;io_base_freelist_max_size&quot; (current value: &quot;64&quot;)
                          Max size of the MPI-2 IO request freelist
                  MCA io: parameter &quot;io_base_freelist_increment&quot; (current value: &quot;16&quot;)
                          Increment size of the MPI-2 IO request freelist
                  MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the io framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA io: parameter &quot;io_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the io framework (0 = no verbosity)
                  MCA io: parameter &quot;io_romio_priority&quot; (current value: &quot;10&quot;)
                          Priority of the io romio component
                  MCA io: parameter &quot;io_romio_delete_priority&quot; (current value: &quot;10&quot;)
                          Delete priority of the io romio component
                  MCA io: parameter &quot;io_romio_enable_parallel_optimizations&quot; (current value: &quot;0&quot;)
                          Enable set of Open MPI-added options to improve collective file i/o performance
               MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the mpool framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
               MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the mpool framework (0 = no verbosity)
               MCA mpool: parameter &quot;mpool_rdma_rcache_name&quot; (current value: &quot;vma&quot;)
                          The name of the registration cache the mpool should use
               MCA mpool: parameter &quot;mpool_rdma_rcache_size_limit&quot; (current value: &quot;0&quot;)
                          the maximum size of registration cache in bytes. 0 is unlimited (default 0)
               MCA mpool: parameter &quot;mpool_rdma_print_stats&quot; (current value: &quot;0&quot;)
                          print pool usage statistics at the end of the run
               MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current value: &quot;0&quot;)
               MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current value: &quot;bucket&quot;)
                          Name of allocator component to use with sm mpool
               MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current value: &quot;536870912&quot;)
                          Maximum size of the sm mpool shared memory file
               MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current value: &quot;134217728&quot;)
                          Minimum size of the sm mpool shared memory file
               MCA mpool: parameter &quot;mpool_sm_per_peer_size&quot; (current value: &quot;33554432&quot;)
                          Size (in bytes) to allocate per local peer in the sm mpool shared memory file, bounded by min_size and max_size
               MCA mpool: parameter &quot;mpool_sm_priority&quot; (current value: &quot;0&quot;)
               MCA mpool: parameter &quot;mpool_base_use_mem_hooks&quot; (current value: &quot;0&quot;)
                          use memory hooks for deregistering freed memory
               MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current value: &quot;0&quot;)
                          (deprecated, use mpool_base_use_mem_hooks)
               MCA mpool: parameter &quot;mpool_base_disable_sbrk&quot; (current value: &quot;0&quot;)
                          use mallopt to override calling sbrk (doesn't return memory to OS!)
               MCA mpool: parameter &quot;mpool_disable_sbrk&quot; (current value: &quot;0&quot;)
                          (deprecated, use mca_mpool_base_disable_sbrk)
                 MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the pml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA pml: parameter &quot;pml_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the pml framework (0 = no verbosity)
                 MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current value: &quot;4&quot;)
                          Initial size of request free lists
                 MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current value: &quot;-1&quot;)
                          Maximum size of request free lists
                 MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current value: &quot;64&quot;)
                          Number of elements to add when growing request free lists
                 MCA pml: parameter &quot;pml_cm_priority&quot; (current value: &quot;30&quot;)
                          CM PML selection priority
                 MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current value: &quot;4&quot;)
                 MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current value: &quot;-1&quot;)
                 MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current value: &quot;64&quot;)
                 MCA pml: parameter &quot;pml_ob1_priority&quot; (current value: &quot;20&quot;)
                 MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current value: &quot;131072&quot;)
                 MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot; (current value: &quot;3&quot;)
                 MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot; (current value: &quot;4&quot;)
                 MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the bml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA bml: parameter &quot;bml_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the bml framework (0 = no verbosity)
                 MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot; (current value: &quot;1&quot;)
                          Show error message when procs are unreachable
                 MCA bml: parameter &quot;bml_r2_priority&quot; (current value: &quot;0&quot;)
              MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the rcache framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
              MCA rcache: parameter &quot;rcache_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the rcache framework (0 = no verbosity)
              MCA rcache: parameter &quot;rcache_vma_priority&quot; (current value: &quot;0&quot;)
                 MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
                          If btl_base_debug is 1 standard debug is output, if &gt; 1 verbose debug is output
                 MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the btl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the btl framework (0 = no verbosity)
                 MCA btl: parameter &quot;btl_self_free_list_num&quot; (current value: &quot;0&quot;)
                          Number of fragments by default
                 MCA btl: parameter &quot;btl_self_free_list_max&quot; (current value: &quot;-1&quot;)
                          Maximum number of fragments
                 MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current value: &quot;32&quot;)
                          Increment by this number of fragments
                 MCA btl: parameter &quot;btl_self_eager_limit&quot; (current value: &quot;131072&quot;)
                          Eager size fragmeng (before the rendez-vous ptotocol)
                 MCA btl: parameter &quot;btl_self_min_send_size&quot; (current value: &quot;262144&quot;)
                          Minimum fragment size after the rendez-vous
                 MCA btl: parameter &quot;btl_self_max_send_size&quot; (current value: &quot;262144&quot;)
                          Maximum fragment size after the rendez-vous
                 MCA btl: parameter &quot;btl_self_min_rdma_size&quot; (current value: &quot;2147483647&quot;)
                          Maximum fragment size for the RDMA transfer
                 MCA btl: parameter &quot;btl_self_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
                          Maximum fragment size for the RDMA transfer
                 MCA btl: parameter &quot;btl_self_exclusivity&quot; (current value: &quot;65536&quot;)
                          Device exclusivity
                 MCA btl: parameter &quot;btl_self_flags&quot; (current value: &quot;10&quot;)
                          Active behavior flags
                 MCA btl: parameter &quot;btl_self_priority&quot; (current value: &quot;0&quot;)
                 MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value: &quot;8&quot;)
                 MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value: &quot;-1&quot;)
                 MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value: &quot;64&quot;)
                 MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &quot;65535&quot;)
                 MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &quot;100&quot;)
                 MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value: &quot;-1&quot;)
                 MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value: &quot;2&quot;)
                 MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &quot;sm&quot;)
                 MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value: &quot;4096&quot;)
                 MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current value: &quot;32768&quot;)
                 MCA btl: parameter &quot;btl_sm_size_of_cb_queue&quot; (current value: &quot;128&quot;)
                 MCA btl: parameter &quot;btl_sm_cb_lazy_free_freq&quot; (current value: &quot;120&quot;)
                 MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &quot;0&quot;)
                 MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;none&gt;)
                 MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;lo&quot;)
                 MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current value: &quot;8&quot;)
                 MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current value: &quot;-1&quot;)
                 MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current value: &quot;32&quot;)
                 MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
                 MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
                 MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current value: &quot;30720&quot;)
                 MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;0&quot;)
                 MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;65536&quot;)
                 MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current value: &quot;65536&quot;)
                 MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value: &quot;131072&quot;)
                 MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current value: &quot;131072&quot;)
                 MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current value: &quot;2147483647&quot;)
                 MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;122&quot;)
                 MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;)
                 MCA btl: parameter &quot;btl_base_include&quot; (current value: &lt;none&gt;)
                 MCA btl: parameter &quot;btl_base_exclude&quot; (current value: &lt;none&gt;)
                 MCA btl: parameter &quot;btl_base_warn_component_unused&quot; (current value: &quot;1&quot;)
                          This parameter is used to turn on warning messages when certain NICs are not used
                 MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the mtl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the mtl framework (0 = no verbosity)
                MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the topo framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                MCA topo: parameter &quot;topo_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the topo framework (0 = no verbosity)
                 MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the osc framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA osc: parameter &quot;osc_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the osc framework (0 = no verbosity)
                 MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current value: &quot;0&quot;)
                          Enable optimizations available only if MPI_LOCK is not used.
                 MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current value: &quot;16384&quot;)
                          Max size of eagerly sent data
                 MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current value: &quot;0&quot;)
              MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the errmgr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
              MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current value: &quot;0&quot;)
              MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current value: &quot;0&quot;)
              MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current value: &quot;0&quot;)
              MCA errmgr: parameter &quot;errmgr_orted_priority&quot; (current value: &quot;0&quot;)
              MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current value: &quot;0&quot;)
              MCA errmgr: parameter &quot;errmgr_proxy_priority&quot; (current value: &quot;0&quot;)
                 MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current value: &quot;2147483647&quot;)
                 MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current value: &quot;512&quot;)
                 MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the gpr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA gpr: parameter &quot;gpr_null_priority&quot; (current value: &quot;0&quot;)
                 MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current value: &quot;0&quot;)
                 MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current value: &quot;0&quot;)
                 MCA gpr: parameter &quot;gpr_replica_debug&quot; (current value: &quot;0&quot;)
                 MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current value: &quot;0&quot;)
                 MCA gpr: parameter &quot;gpr_replica_priority&quot; (current value: &quot;0&quot;)
                 MCA iof: parameter &quot;iof_base_window_size&quot; (current value: &quot;4096&quot;)
                 MCA iof: parameter &quot;iof_base_service&quot; (current value: &quot;0.0.0&quot;)
                 MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the iof framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA iof: parameter &quot;iof_proxy_debug&quot; (current value: &quot;1&quot;)
                 MCA iof: parameter &quot;iof_proxy_priority&quot; (current value: &quot;0&quot;)
                 MCA iof: parameter &quot;iof_svc_debug&quot; (current value: &quot;1&quot;)
                 MCA iof: parameter &quot;iof_svc_priority&quot; (current value: &quot;0&quot;)
                  MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the ns framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                  MCA ns: parameter &quot;ns_proxy_debug&quot; (current value: &quot;0&quot;)
                  MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current value: &quot;2147483647&quot;)
                  MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current value: &quot;512&quot;)
                  MCA ns: parameter &quot;ns_proxy_priority&quot; (current value: &quot;0&quot;)
                  MCA ns: parameter &quot;ns_replica_debug&quot; (current value: &quot;0&quot;)
                  MCA ns: parameter &quot;ns_replica_isolate&quot; (current value: &quot;0&quot;)
                  MCA ns: parameter &quot;ns_replica_maxsize&quot; (current value: &quot;2147483647&quot;)
                  MCA ns: parameter &quot;ns_replica_blocksize&quot; (current value: &quot;512&quot;)
                  MCA ns: parameter &quot;ns_replica_priority&quot; (current value: &quot;0&quot;)
                 MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the oob framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA oob: parameter &quot;oob_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the oob framework (0 = no verbosity)
                 MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value: &quot;-1&quot;)
                 MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current value: &quot;60&quot;)
                 MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;)
                 MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value: &quot;131072&quot;)
                 MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value: &quot;131072&quot;)
                 MCA oob: parameter &quot;oob_tcp_if_include&quot; (current value: &lt;none&gt;)
                          Comma-delimited list of TCP interfaces to use
                 MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current value: &lt;none&gt;)
                          Comma-delimited list of TCP interfaces to exclude
                 MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current value: &quot;1&quot;)
                          Enable (1) / disable (0) random sleep for connection wireup
                 MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current value: &quot;event&quot;)
                          Mode for HNP to accept incoming connections: event, listen_thread
                 MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot; (current value: &quot;10&quot;)
                          High water mark for queued accepted socket list size
                 MCA oob: parameter &quot;oob_tcp_listen_thread_max_time&quot; (current value: &quot;10&quot;)
                          Maximum amount of time (in milliseconds) to wait between processing accepted socket list
                 MCA oob: parameter &quot;oob_tcp_accept_spin_count&quot; (current value: &quot;10&quot;)
                          Number of times to let accept return EWOULDBLOCK before updating accepted socket list
                 MCA oob: parameter &quot;oob_tcp_priority&quot; (current value: &quot;0&quot;)
                 MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
                 MCA ras: parameter &quot;ras_dash_host_priority&quot; (current value: &quot;5&quot;)
                          Selection priority for the dash_host RAS component
                 MCA ras: parameter &quot;ras_gridengine_debug&quot; (current value: &quot;0&quot;)
                          Enable debugging output for the gridengine ras component
                 MCA ras: parameter &quot;ras_gridengine_priority&quot; (current value: &quot;100&quot;)
                          Priority of the gridengine ras component
                 MCA ras: parameter &quot;ras_gridengine_verbose&quot; (current value: &quot;0&quot;)
                          Enable verbose output for the gridengine ras component
                 MCA ras: parameter &quot;ras_gridengine_show_jobid&quot; (current value: &quot;0&quot;)
                          Show the JOB_ID of the Grid Engine job
                 MCA ras: parameter &quot;ras_localhost_priority&quot; (current value: &quot;0&quot;)
                          Selection priority for the localhost RAS component
                 MCA ras: parameter &quot;ras_slurm_priority&quot; (current value: &quot;75&quot;)
                          Priority of the slurm ras component
                 MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
                 MCA rds: parameter &quot;rds_hostfile_debug&quot; (current value: &quot;0&quot;)
                          Toggle debug output for hostfile RDS component
                 MCA rds: parameter &quot;rds_hostfile_path&quot; (current value: &quot;/path/to/openmpi/etc/openmpi-default-hostfile&quot;)
                          ORTE Host filename
                 MCA rds: parameter &quot;rds_hostfile_priority&quot; (current value: &quot;0&quot;)
                 MCA rds: parameter &quot;rds_proxy_priority&quot; (current value: &quot;0&quot;)
                 MCA rds: parameter &quot;rds_resfile_debug&quot; (current value: &quot;0&quot;)
                          Toggle debug output for resfile RDS component
                 MCA rds: parameter &quot;rds_resfile_name&quot; (current value: &lt;none&gt;)
                          ORTE Resource filename
                 MCA rds: parameter &quot;rds_resfile_priority&quot; (current value: &quot;0&quot;)
               MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the rmaps framework
               MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; (current value: &quot;unspec&quot;)
                          Scheduling Policy for RMAPS. [slot | node]
               MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current value: &quot;0&quot;)
                          Launch one ppn as directed
               MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current value: &quot;-1&quot;)
                          Launch n procs/node
               MCA rmaps: parameter &quot;rmaps_base_no_schedule_local&quot; (current value: &quot;0&quot;)
                          If false, allow scheduling MPI applications on the same node as mpirun (default).  If true, do not schedule any MPI applications on the same node as mpirun
               MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot; (current value: &quot;0&quot;)
                          If true, then do not allow oversubscription of nodes - mpirun will return an error if there aren't enough nodes to launch all processes without oversubscribing
               MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the rmaps framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
               MCA rmaps: parameter &quot;rmaps_round_robin_debug&quot; (current value: &quot;1&quot;)
                          Toggle debug output for Round Robin RMAPS component
               MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot; (current value: &quot;1&quot;)
                          Selection priority for Round Robin RMAPS component
                MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the rmgr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current value: &quot;0&quot;)
                MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current value: &quot;0&quot;)
                 MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the rml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA rml: parameter &quot;rml_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the rml framework (0 = no verbosity)
                 MCA rml: parameter &quot;rml_oob_priority&quot; (current value: &quot;0&quot;)
                 MCA pls: parameter &quot;pls_base_reuse_daemons&quot; (current value: &quot;0&quot;)
                          If nonzero, reuse daemons to launch dynamically spawned processes.  If zero, do not reuse daemons (default)
                 MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the pls framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA pls: parameter &quot;pls_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the pls framework (0 = no verbosity)
                 MCA pls: parameter &quot;pls_gridengine_debug&quot; (current value: &quot;0&quot;)
                          Enable debugging of gridengine pls component
                 MCA pls: parameter &quot;pls_gridengine_verbose&quot; (current value: &quot;0&quot;)
                          Enable verbose output of the gridengine qrsh -inherit command
                 MCA pls: parameter &quot;pls_gridengine_priority&quot; (current value: &quot;100&quot;)
                          Priority of the gridengine pls component
                 MCA pls: parameter &quot;pls_gridengine_orted&quot; (current value: &quot;orted&quot;)
                          The command name that the gridengine pls component will invoke for the ORTE daemon
                 MCA pls: parameter &quot;pls_proxy_priority&quot; (current value: &quot;0&quot;)
                 MCA pls: parameter &quot;pls_rsh_debug&quot; (current value: &quot;0&quot;)
                          Whether or not to enable debugging output for the rsh pls component (0 or 1)
                 MCA pls: parameter &quot;pls_rsh_num_concurrent&quot; (current value: &quot;128&quot;)
                          How many pls_rsh_agent instances to invoke concurrently (must be &gt; 0)
                 MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current value: &quot;0&quot;)
                          Force the launcher to always use rsh, even for local daemons
                 MCA pls: parameter &quot;pls_rsh_orted&quot; (current value: &quot;orted&quot;)
                          The command name that the rsh pls component will invoke for the ORTE daemon
                 MCA pls: parameter &quot;pls_rsh_priority&quot; (current value: &quot;10&quot;)
                          Priority of the rsh pls component
                 MCA pls: parameter &quot;pls_rsh_delay&quot; (current value: &quot;1&quot;)
                          Delay (in seconds) between invocations of the remote agent, but only used when the &quot;debug&quot; MCA parameter is true, or the top-level MCA debugging is enabled (otherwise this value is ignored)
                 MCA pls: parameter &quot;pls_rsh_reap&quot; (current value: &quot;1&quot;)
                          If set to 1, wait for all the processes to complete before exiting.  Otherwise, quit immediately -- without waiting for confirmation that all other processes in the job have completed.
                 MCA pls: parameter &quot;pls_rsh_assume_same_shell&quot; (current value: &quot;1&quot;)
                          If set to 1, assume that the shell on the remote node is the same as the shell on the local node.  Otherwise, probe for what the remote shell.
                 MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: &quot;ssh : rsh&quot;)
                          The command used to launch executables on remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
                 MCA pls: parameter &quot;pls_slurm_debug&quot; (current value: &quot;0&quot;)
                          Enable debugging of slurm pls
                 MCA pls: parameter &quot;pls_slurm_priority&quot; (current value: &quot;75&quot;)
                          Default selection priority
                 MCA pls: parameter &quot;pls_slurm_orted&quot; (current value: &quot;orted&quot;)
                          Command to use to start proxy orted
                 MCA pls: parameter &quot;pls_slurm_args&quot; (current value: &lt;none&gt;)
                          Custom arguments to srun
                 MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
                          Default selection set of components for the sds framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
                 MCA sds: parameter &quot;sds_base_verbose&quot; (current value: &quot;0&quot;)
                          Verbosity level for the sds framework (0 = no verbosity)
                 MCA sds: parameter &quot;sds_env_priority&quot; (current value: &quot;0&quot;)
                 MCA sds: parameter &quot;sds_pipe_priority&quot; (current value: &quot;0&quot;)
                 MCA sds: parameter &quot;sds_seed_priority&quot; (current value: &quot;0&quot;)
                 MCA sds: parameter &quot;sds_singleton_priority&quot; (current value: &quot;0&quot;)
                 MCA sds: parameter &quot;sds_slurm_priority&quot; (current value: &quot;0&quot;)



<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3993/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3994.php">Amit Kumar Saha: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="3992.php">Richard Friedman: "Re: [OMPI users] OpenMPI Documentation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4024.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Reply:</strong> <a href="4024.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
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

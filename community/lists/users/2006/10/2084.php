<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 30 11:00:54 2006" -->
<!-- isoreceived="20061030160054" -->
<!-- sent="Mon, 30 Oct 2006 09:00:47 -0700" -->
<!-- isosent="20061030160047" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn multiple bproc support problem" -->
<!-- id="C16B6FBF.570D%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="J7YH7O$ECA3EE7EF7B968DF798CB49B628D3A33_at_aliceadsl.fr" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-30 11:00:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2085.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2083.php">hpetit_at_[hidden]: "[OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<li><strong>In reply to:</strong> <a href="2083.php">hpetit_at_[hidden]: "[OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1.1.2, what that error is telling you is that it didn't find any nodes in
<br>
the environment. The bproc allocator looks for an environmental variable
<br>
NODES that contains a list of nodes assigned to you. This error indicates it
<br>
didn't find anything.
<br>
<p>Did you get an allocation prior to running the job? Could you check to see
<br>
if NODES appears in your environment?
<br>
<p>Ralph
<br>
<p><p><p>On 10/30/06 8:47 AM, &quot;hpetit_at_[hidden]&quot; &lt;hpetit_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have a problem using the MPI_Comm_spawn multiple together with bproc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to use the MPI_Comm_spawn multiple call to spawn a set of exe, but in a
</span><br>
<span class="quotelev1">&gt; bproc environment, the program crashes or is stuck on this call (depending of
</span><br>
<span class="quotelev1">&gt; the used open mpi release).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have created one test program that spawns one other program on the same host
</span><br>
<span class="quotelev1">&gt; (cf. code listing at the end of the mail).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * With open mpi 1.1.2, the program crashs on the MPI_Comm_spawn multiple call:
</span><br>
<span class="quotelev1">&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; [myhost:17061] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line
</span><br>
<span class="quotelev1">&gt; 253
</span><br>
<span class="quotelev1">&gt; main_exe: Begining of main_exe
</span><br>
<span class="quotelev1">&gt; main_exe: Call MPI_Init
</span><br>
<span class="quotelev1">&gt; main_exe: Call MPI_Comm_spawn_multiple()
</span><br>
<span class="quotelev1">&gt; [myhost:17061] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line
</span><br>
<span class="quotelev1">&gt; 253
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:(nil)
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/Mpi/openmpi-1.1.2/lib/libopal.so.0 [0xb7f70ccf]
</span><br>
<span class="quotelev1">&gt; [1] func:[0xffffe440]
</span><br>
<span class="quotelev1">&gt; [2] 
</span><br>
<span class="quotelev1">&gt; func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_schema_base_get_node_t
</span><br>
<span class="quotelev1">&gt; okens+0x7f) [0xb7fdc41f]
</span><br>
<span class="quotelev1">&gt; [3] 
</span><br>
<span class="quotelev1">&gt; func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_ras_base_node_assign+0
</span><br>
<span class="quotelev1">&gt; x20b) [0xb7fd230b]
</span><br>
<span class="quotelev1">&gt; [4] 
</span><br>
<span class="quotelev1">&gt; func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_ras_base_allocate_node
</span><br>
<span class="quotelev1">&gt; s+0x41) [0xb7fd0371]
</span><br>
<span class="quotelev1">&gt; [5] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_ras_hostfile.so
</span><br>
<span class="quotelev1">&gt; [0xb7538ba8]
</span><br>
<span class="quotelev1">&gt; [6] 
</span><br>
<span class="quotelev1">&gt; func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_ras_base_allocate+0xd0
</span><br>
<span class="quotelev1">&gt; ) [0xb7fd0470]
</span><br>
<span class="quotelev1">&gt; [7] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_rmgr_urm.so [0xb754d62f]
</span><br>
<span class="quotelev1">&gt; [8] 
</span><br>
<span class="quotelev1">&gt; func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_rmgr_base_cmd_dispatch
</span><br>
<span class="quotelev1">&gt; +0x137) [0xb7fd9187]
</span><br>
<span class="quotelev1">&gt; [9] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_rmgr_urm.so [0xb754e09e]
</span><br>
<span class="quotelev1">&gt; [10] func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0 [0xb7fcd00e]
</span><br>
<span class="quotelev1">&gt; [11] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_oob_tcp.so [0xb7585084]
</span><br>
<span class="quotelev1">&gt; [12] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_oob_tcp.so [0xb7586763]
</span><br>
<span class="quotelev1">&gt; [13] func:/usr/local/Mpi/openmpi-1.1.2/lib/libopal.so.0(opal_event_loop+0x199)
</span><br>
<span class="quotelev1">&gt; [0xb7f5f7a9]
</span><br>
<span class="quotelev1">&gt; [14] func:/usr/local/Mpi/openmpi-1.1.2/lib/libopal.so.0 [0xb7f60353]
</span><br>
<span class="quotelev1">&gt; [15] func:/lib/tls/libpthread.so.0 [0xb7ef7b63]
</span><br>
<span class="quotelev1">&gt; [16] func:/lib/tls/libc.so.6(__clone+0x5a) [0xb7e9518a]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; &lt;-----------------------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * With open mpi 1.1.1, the program is simply stuck on the MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; multiple call:
</span><br>
<span class="quotelev1">&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; [myhost:17187] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line
</span><br>
<span class="quotelev1">&gt; 253
</span><br>
<span class="quotelev1">&gt; main_exe: Begining of main_exe
</span><br>
<span class="quotelev1">&gt; main_exe: Call MPI_Init
</span><br>
<span class="quotelev1">&gt; main_exe: Call MPI_Comm_spawn_multiple()
</span><br>
<span class="quotelev1">&gt; [myhost:17187] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line
</span><br>
<span class="quotelev1">&gt; 253
</span><br>
<span class="quotelev1">&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * With open mpi 1.0.2, the program is also stuck on the MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; multiple call but there is no ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; main_exe: Begining of main_exe
</span><br>
<span class="quotelev1">&gt; main_exe: Call MPI_Init
</span><br>
<span class="quotelev1">&gt; main_exe: Call MPI_Comm_spawn_multiple()
</span><br>
<span class="quotelev1">&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * With open mpi 1.1.2 in a non bproc environment, the program works just fine
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; main_exe: Begining of main_exe
</span><br>
<span class="quotelev1">&gt; main_exe: Call MPI_Init
</span><br>
<span class="quotelev1">&gt; main_exe: Call MPI_Comm_spawn_multiple()
</span><br>
<span class="quotelev1">&gt; spawned_exe: Begining of spawned_exe
</span><br>
<span class="quotelev1">&gt; spawned_exe: Call MPI_Init
</span><br>
<span class="quotelev1">&gt; main_exe: Back from MPI_Comm_spawn_multiple() result = 0
</span><br>
<span class="quotelev1">&gt; main_exe: Spawned exe returned errcode = 0
</span><br>
<span class="quotelev1">&gt; spawned_exe: This exe does not do really much thing actually
</span><br>
<span class="quotelev1">&gt; main_exe: Call MPI_finalize
</span><br>
<span class="quotelev1">&gt; main_exe: End of main_exe
</span><br>
<span class="quotelev1">&gt; &lt;---------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you help me to solve this problem ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Herve
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The bproc release is:
</span><br>
<span class="quotelev1">&gt; bproc: Beowulf Distributed Process Space Version 4.0.0pre8
</span><br>
<span class="quotelev1">&gt; bproc: (C) 1999-2003 Erik Hendriks &lt;erik_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; bproc: Initializing node set. node_ct=1 id_ct=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the system is a debian sarge with a 2.6.9 kernel installed and patched with
</span><br>
<span class="quotelev1">&gt; bproc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eventually, I provide to you the ompi_info log fot he open mpi 1.1.2 release:
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1.2
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r12073
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1.2
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r12073
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1.2
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r12073
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/local/Mpi/openmpi-1.1.2
</span><br>
<span class="quotelev1">&gt;  Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: itrsat
</span><br>
<span class="quotelev1">&gt;            Configured on: Mon Oct 23 12:55:17 CEST 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: myhost
</span><br>
<span class="quotelev1">&gt;                 Built by: setics
</span><br>
<span class="quotelev1">&gt;                 Built on: lun oct 23 13:09:47 CEST 2006
</span><br>
<span class="quotelev1">&gt;               Built host: myhost
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: no
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: no
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: na
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: none
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: yes, progress: yes)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: bjs (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: lsf_bproc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: poe (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: bproc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: bproc_orted (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: bproc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt;                  MCA soh: bproc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here below, the code listings:
</span><br>
<span class="quotelev1">&gt; * main_exe.c
</span><br>
<span class="quotelev1">&gt; &lt;-------------------------------------------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; int gethostname(char *nom, size_t lg);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* 
</span><br>
<span class="quotelev1">&gt;      * MPI_Comm_spawn_multiple parameters
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     int result, count, root;
</span><br>
<span class="quotelev1">&gt;     int maxprocs;
</span><br>
<span class="quotelev1">&gt;     char **commands;
</span><br>
<span class="quotelev1">&gt;     MPI_Info infos;
</span><br>
<span class="quotelev1">&gt;     int errcodes;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm intercomm, newintracomm;
</span><br>
<span class="quotelev1">&gt;     int rank;
</span><br>
<span class="quotelev1">&gt;     char hostname[80];
</span><br>
<span class="quotelev1">&gt;     int len;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     printf( &quot;main_exe: Begining of main_exe\n&quot;);
</span><br>
<span class="quotelev1">&gt;     printf( &quot;main_exe: Call MPI_Init\n&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* 
</span><br>
<span class="quotelev1">&gt;      * MPI_Comm_spawn_multiple parameters
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;     count = 1;
</span><br>
<span class="quotelev1">&gt;     maxprocs = 1;
</span><br>
<span class="quotelev1">&gt;     root = rank;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     commands = malloc (sizeof (char *));
</span><br>
<span class="quotelev1">&gt;     commands[0] = calloc (80, sizeof (char ));
</span><br>
<span class="quotelev1">&gt;     sprintf (commands[0], &quot;./spawned_exe&quot;);
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;     MPI_Info_create( &amp;infos );
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     /* set proc/cpu info */
</span><br>
<span class="quotelev1">&gt;     result = MPI_Info_set( infos, &quot;soft&quot;, &quot;0:1&quot; );
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     /* set host info */
</span><br>
<span class="quotelev1">&gt;     result = gethostname ( hostname, len);
</span><br>
<span class="quotelev1">&gt;     if ( -1 == result ) {
</span><br>
<span class="quotelev1">&gt;         printf (&quot;main_exe: Problem in gethostname\n&quot;);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     result = MPI_Info_set( infos, &quot;host&quot;, hostname );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf( &quot;main_exe: Call MPI_Comm_spawn_multiple()\n&quot;);
</span><br>
<span class="quotelev1">&gt;     result = MPI_Comm_spawn_multiple( count,
</span><br>
<span class="quotelev1">&gt;                                       commands,
</span><br>
<span class="quotelev1">&gt;                                       MPI_ARGVS_NULL,
</span><br>
<span class="quotelev1">&gt;                                       &amp;maxprocs,
</span><br>
<span class="quotelev1">&gt;                                       &amp;infos,
</span><br>
<span class="quotelev1">&gt;                                       root,
</span><br>
<span class="quotelev1">&gt;                                       MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;                                       &amp;intercomm,
</span><br>
<span class="quotelev1">&gt;                                       &amp;errcodes  );
</span><br>
<span class="quotelev1">&gt;     printf( &quot;main_exe: Back from MPI_Comm_spawn_multiple() result = %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; result);
</span><br>
<span class="quotelev1">&gt;     printf( &quot;main_exe: Spawned exe returned errcode = %d\n&quot;, errcodes );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Intercomm_merge( intercomm, 0, &amp;newintracomm );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Synchronisation with spawned exe */
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier( newintracomm );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     free( commands[0] );
</span><br>
<span class="quotelev1">&gt;     free( commands );
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_free( &amp;newintracomm );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf( &quot;main_exe: Call MPI_finalize\n&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf( &quot;main_exe: End of main_exe\n&quot;);
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;-------------------------------------------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * spawned_exe.c
</span><br>
<span class="quotelev1">&gt; &lt;-------------------------------------------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char **argv ) {
</span><br>
<span class="quotelev1">&gt;     MPI_Comm parent, newintracomm;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf (&quot;spawned_exe: Begining of spawned_exe\n&quot;);
</span><br>
<span class="quotelev1">&gt;     printf( &quot;spawned_exe: Call MPI_Init\n&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_get_parent ( &amp;parent );
</span><br>
<span class="quotelev1">&gt;     MPI_Intercomm_merge ( parent, 1, &amp;newintracomm );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf( &quot;spawned_exe: This exe does not do really much thing actually\n&quot;
</span><br>
<span class="quotelev1">&gt; );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Synchronisation with main exe */
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier( newintracomm );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_free( &amp;newintracomm );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf( &quot;spawned_exe: Call MPI_finalize\n&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     printf( &quot;spawned_exe: End of spawned_exe\n&quot;);
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;-------------------------------------------------------------------&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------- ALICE SECURITE ENFANTS ---------------------
</span><br>
<span class="quotelev1">&gt; Prot&#233;gez vos enfants des dangers d'Internet en installant S&#233;curit&#233; Enfants, le
</span><br>
<span class="quotelev1">&gt; contr&#244;le parental d'Alice.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.aliceadsl.fr/securitepc/default_copa.asp">http://www.aliceadsl.fr/securitepc/default_copa.asp</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2085.php">Troy Telford: "Re: [OMPI users] Fault Tolerance &amp; Behavior"</a>
<li><strong>Previous message:</strong> <a href="2083.php">hpetit_at_[hidden]: "[OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<li><strong>In reply to:</strong> <a href="2083.php">hpetit_at_[hidden]: "[OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
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

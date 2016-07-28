<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 30 10:47:52 2006" -->
<!-- isoreceived="20061030154752" -->
<!-- sent="Mon, 30 Oct 2006 17:47:48 +0200" -->
<!-- isosent="20061030154748" -->
<!-- name="hpetit_at_[hidden]" -->
<!-- email="hpetit_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_spawn multiple bproc support problem" -->
<!-- id="J7YH7O$ECA3EE7EF7B968DF798CB49B628D3A33_at_aliceadsl.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> <a href="mailto:hpetit_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_Comm_spawn%20multiple%20bproc%20support%20problem"><em>hpetit_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-10-30 10:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2084.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<li><strong>Previous message:</strong> <a href="2082.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2084.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<li><strong>Reply:</strong> <a href="2084.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have a problem using the MPI_Comm_spawn multiple together with bproc.
<br>

<br>
I want to use the MPI_Comm_spawn multiple call to spawn a set of exe, but in a bproc environment, the program crashes or is stuck on this call (depending of the used open mpi release).
<br>

<br>
I have created one test program that spawns one other program on the same host (cf. code listing at the end of the mail).
<br>

<br>
* With open mpi 1.1.2, the program crashs on the MPI_Comm_spawn multiple call:
<br>
&lt;---------------------------------&gt;
<br>
[myhost:17061] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 253
<br>
main_exe: Begining of main_exe
<br>
main_exe: Call MPI_Init
<br>
main_exe: Call MPI_Comm_spawn_multiple()
<br>
[myhost:17061] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 253
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:(nil)
<br>
[0] func:/usr/local/Mpi/openmpi-1.1.2/lib/libopal.so.0 [0xb7f70ccf]
<br>
[1] func:[0xffffe440]
<br>
[2] func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_schema_base_get_node_tokens+0x7f) [0xb7fdc41f]
<br>
[3] func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_ras_base_node_assign+0x20b) [0xb7fd230b]
<br>
[4] func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_ras_base_allocate_nodes+0x41) [0xb7fd0371]
<br>
[5] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_ras_hostfile.so [0xb7538ba8]
<br>
[6] func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_ras_base_allocate+0xd0) [0xb7fd0470]
<br>
[7] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_rmgr_urm.so [0xb754d62f]
<br>
[8] func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0(orte_rmgr_base_cmd_dispatch+0x137) [0xb7fd9187]
<br>
[9] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_rmgr_urm.so [0xb754e09e]
<br>
[10] func:/usr/local/Mpi/openmpi-1.1.2/lib/liborte.so.0 [0xb7fcd00e]
<br>
[11] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_oob_tcp.so [0xb7585084]
<br>
[12] func:/usr/local/Mpi/openmpi-1.1.2/lib/openmpi/mca_oob_tcp.so [0xb7586763]
<br>
[13] func:/usr/local/Mpi/openmpi-1.1.2/lib/libopal.so.0(opal_event_loop+0x199) [0xb7f5f7a9]
<br>
[14] func:/usr/local/Mpi/openmpi-1.1.2/lib/libopal.so.0 [0xb7f60353]
<br>
[15] func:/lib/tls/libpthread.so.0 [0xb7ef7b63]
<br>
[16] func:/lib/tls/libc.so.6(__clone+0x5a) [0xb7e9518a]
<br>
*** End of error message ***
<br>
&lt;-----------------------------------------------&gt;
<br>

<br>
* With open mpi 1.1.1, the program is simply stuck on the MPI_Comm_spawn multiple call:
<br>
&lt;---------------------------------&gt;
<br>
[myhost:17187] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 253
<br>
main_exe: Begining of main_exe
<br>
main_exe: Call MPI_Init
<br>
main_exe: Call MPI_Comm_spawn_multiple()
<br>
[myhost:17187] [0,0,0] ORTE_ERROR_LOG: Not available in file ras_bjs.c at line 253
<br>
&lt;---------------------------------&gt;
<br>

<br>
* With open mpi 1.0.2, the program is also stuck on the MPI_Comm_spawn multiple call but there is no ORTE_ERROR_LOG:
<br>
&lt;---------------------------------&gt;
<br>
main_exe: Begining of main_exe
<br>
main_exe: Call MPI_Init
<br>
main_exe: Call MPI_Comm_spawn_multiple()
<br>
&lt;---------------------------------&gt;
<br>

<br>

<br>
* With open mpi 1.1.2 in a non bproc environment, the program works just fine :
<br>
&lt;---------------------------------&gt;
<br>
main_exe: Begining of main_exe
<br>
main_exe: Call MPI_Init
<br>
main_exe: Call MPI_Comm_spawn_multiple()
<br>
spawned_exe: Begining of spawned_exe
<br>
spawned_exe: Call MPI_Init
<br>
main_exe: Back from MPI_Comm_spawn_multiple() result = 0
<br>
main_exe: Spawned exe returned errcode = 0
<br>
spawned_exe: This exe does not do really much thing actually
<br>
main_exe: Call MPI_finalize
<br>
main_exe: End of main_exe
<br>
&lt;---------------------------------&gt;
<br>

<br>
Can you help me to solve this problem ?
<br>

<br>
Regards.
<br>

<br>
Herve
<br>

<br>

<br>
The bproc release is:
<br>
bproc: Beowulf Distributed Process Space Version 4.0.0pre8
<br>
bproc: (C) 1999-2003 Erik Hendriks &lt;erik_at_[hidden]&gt;
<br>
bproc: Initializing node set. node_ct=1 id_ct=1
<br>

<br>
the system is a debian sarge with a 2.6.9 kernel installed and patched with bproc.
<br>

<br>
Eventually, I provide to you the ompi_info log fot he open mpi 1.1.2 release:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.1.2
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r12073
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.1.2
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r12073
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.1.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r12073
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/local/Mpi/openmpi-1.1.2
<br>
&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: itrsat
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Mon Oct 23 12:55:17 CEST 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: myhost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: setics
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: lun oct 23 13:09:47 CEST 2006
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: myhost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: no
<br>
&nbsp;Fortran90 bindings size: na
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: none
<br>
&nbsp;&nbsp;Fortran77 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
&nbsp;&nbsp;Fortran90 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: no
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ns: replica (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: bjs (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: lsf_bproc (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: poe (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: bproc (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: bproc_orted (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: slurm (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: bproc (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: env (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA sds: slurm (MCA v1.0, API v1.0, Component v1.1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA soh: bproc (MCA v1.0, API v1.0, Component v1.1.2)
<br>

<br>
Here below, the code listings:
<br>
* main_exe.c
<br>
&lt;-------------------------------------------------------------------&gt;
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
int gethostname(char *nom, size_t lg);
<br>

<br>
int main( int argc, char **argv ) {
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* MPI_Comm_spawn_multiple parameters
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int result, count, root;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int maxprocs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char **commands;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info infos;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int errcodes;
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm intercomm, newintracomm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char hostname[80];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;main_exe: Begining of main_exe\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;main_exe: Call MPI_Init\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* MPI_Comm_spawn_multiple parameters
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;maxprocs = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;root = rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;commands = malloc (sizeof (char *));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;commands[0] = calloc (80, sizeof (char ));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sprintf (commands[0], &quot;./spawned_exe&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info_create( &amp;infos );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* set proc/cpu info */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;result = MPI_Info_set( infos, &quot;soft&quot;, &quot;0:1&quot; );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* set host info */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;result = gethostname ( hostname, len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( -1 == result ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;main_exe: Problem in gethostname\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;result = MPI_Info_set( infos, &quot;host&quot;, hostname );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;main_exe: Call MPI_Comm_spawn_multiple()\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;result = MPI_Comm_spawn_multiple( count, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;commands,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ARGVS_NULL, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;maxprocs, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;infos, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;intercomm, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;errcodes  );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;main_exe: Back from MPI_Comm_spawn_multiple() result = %d\n&quot;, result);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;main_exe: Spawned exe returned errcode = %d\n&quot;, errcodes );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_merge( intercomm, 0, &amp;newintracomm );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Synchronisation with spawned exe */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier( newintracomm );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;free( commands[0] );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free( commands );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free( &amp;newintracomm );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;main_exe: Call MPI_finalize\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize( );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;main_exe: End of main_exe\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>

<br>
&lt;-------------------------------------------------------------------&gt;
<br>

<br>
* spawned_exe.c
<br>
&lt;-------------------------------------------------------------------&gt;
<br>

<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>

<br>
int main( int argc, char **argv ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm parent, newintracomm;
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;spawned_exe: Begining of spawned_exe\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;spawned_exe: Call MPI_Init\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_get_parent ( &amp;parent );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_merge ( parent, 1, &amp;newintracomm );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;spawned_exe: This exe does not do really much thing actually\n&quot; );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Synchronisation with main exe */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier( newintracomm );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free( &amp;newintracomm );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;spawned_exe: Call MPI_finalize\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize( );
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;spawned_exe: End of spawned_exe\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>

<br>
&lt;-------------------------------------------------------------------&gt;
<br>

<br>
<p><p>--------------------- ALICE SECURITE ENFANTS ---------------------
<br>
Prot&#233;gez vos enfants des dangers d'Internet en installant S&#233;curit&#233; Enfants, le contr&#244;le parental d'Alice.
<br>
<a href="http://www.aliceadsl.fr/securitepc/default_copa.asp">http://www.aliceadsl.fr/securitepc/default_copa.asp</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2084.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<li><strong>Previous message:</strong> <a href="2082.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2084.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
<li><strong>Reply:</strong> <a href="2084.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support problem"</a>
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

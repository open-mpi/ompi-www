<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 24 19:33:53 2007" -->
<!-- isoreceived="20070324233353" -->
<!-- sent="Sat, 24 Mar 2007 16:33:27 -0700" -->
<!-- isosent="20070324233327" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Failure to launch on a remote node.  SSH problem?" -->
<!-- id="4605B547.6040303_at_graphics.stanford.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4605A6E3.7010901_at_qlink.queensu.ca" -->
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
<strong>From:</strong> Mike Houston (<em>mhouston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-24 19:33:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2916.php">Daniele Avitabile: "[OMPI users] Installation fails on Mac Os"</a>
<li><strong>Previous message:</strong> <a href="2914.php">David Burns: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<li><strong>In reply to:</strong> <a href="2914.php">David Burns: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also make sure that /tmp is user writable.  By default, that is where 
<br>
openmpi likes to stick some files.
<br>
<p>-Mike
<br>
<p>David Burns wrote:
<br>
<span class="quotelev1">&gt; Could also be a firewall problem. Make sure all nodes in the cluster 
</span><br>
<span class="quotelev1">&gt; accept tcp packets from all others.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Walker, David T. wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am presently trying to get OpenMPI up and running on a small cluster
</span><br>
<span class="quotelev2">&gt;&gt; of MacPros (dual dual-core Xeons) using TCP. Opne MPI was compiled using
</span><br>
<span class="quotelev2">&gt;&gt; the intel Fortran Compiler (9.1) and gcc.  When I try to launch a job on
</span><br>
<span class="quotelev2">&gt;&gt; a remote node, orted starts on the remote node but then times out.  I am
</span><br>
<span class="quotelev2">&gt;&gt; guessing that the problem is SSH related.  Any thoughts?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Details:  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using SSH, set up as outlined in the FAQ, using ssh-agent to allow
</span><br>
<span class="quotelev2">&gt;&gt; passwordless logins.  The paths for all the libraries appear to be OK.  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A simple MPI code (Hello_World_Fortran) launched on node01 will run OK
</span><br>
<span class="quotelev2">&gt;&gt; for up to four processors (all on node01).  The output is shown here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node01 1247% mpirun --debug-daemons -hostfile machinefile -np 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello_World_Fortran
</span><br>
<span class="quotelev2">&gt;&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev2">&gt;&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev2">&gt;&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev2">&gt;&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev2">&gt;&gt; Fortran version of Hello World, rank            2
</span><br>
<span class="quotelev2">&gt;&gt; Rank 0 is present in Fortran version of Hello World.
</span><br>
<span class="quotelev2">&gt;&gt; Fortran version of Hello World, rank            3
</span><br>
<span class="quotelev2">&gt;&gt; Fortran version of Hello World, rank            1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For five processors mpirun tries to start an additional process on
</span><br>
<span class="quotelev2">&gt;&gt; node03.  Everything launches the same on node01 (four instances of
</span><br>
<span class="quotelev2">&gt;&gt; Hello_World_Fortran are launched).  On node03, orted starts, but times
</span><br>
<span class="quotelev2">&gt;&gt; out after 10 seconds and the output below is generated.   
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node01 1246% mpirun --debug-daemons -hostfile machinefile -np 5
</span><br>
<span class="quotelev2">&gt;&gt; Hello_World_Fortran
</span><br>
<span class="quotelev2">&gt;&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev2">&gt;&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev2">&gt;&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev2">&gt;&gt;  Calling MPI_INIT
</span><br>
<span class="quotelev2">&gt;&gt; [node03:02422] [0,0,1]-[0,0,0] mca_oob_tcp_peer_send_blocking: send()
</span><br>
<span class="quotelev2">&gt;&gt; failed with errno=57
</span><br>
<span class="quotelev2">&gt;&gt; [node01.local:21427] ERROR: A daemon on node node03 failed to start as
</span><br>
<span class="quotelev2">&gt;&gt; expected.
</span><br>
<span class="quotelev2">&gt;&gt; [node01.local:21427] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt; [node01.local:21427] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [node01.local:21427] ERROR: The daemon exited unexpectedly with status
</span><br>
<span class="quotelev2">&gt;&gt; 255.
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev2">&gt;&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the ompi info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node01 1248% ompi_info --all
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.1.2
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI SVN revision: r12073
</span><br>
<span class="quotelev2">&gt;&gt;                 Open RTE: 1.1.2
</span><br>
<span class="quotelev2">&gt;&gt;    Open RTE SVN revision: r12073
</span><br>
<span class="quotelev2">&gt;&gt;                     OPAL: 1.1.2
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SVN revision: r12073
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: darwin (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: darwin (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: xgrid (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: xgrid (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.1.2)
</span><br>
<span class="quotelev2">&gt;&gt;                   Prefix: /usr/local
</span><br>
<span class="quotelev2">&gt;&gt;                   Bindir: /usr/local/bin
</span><br>
<span class="quotelev2">&gt;&gt;                   Libdir: /usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt;                   Incdir: /usr/local/include
</span><br>
<span class="quotelev2">&gt;&gt;                Pkglibdir: /usr/local/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;               Sysconfdir: /usr/local/etc
</span><br>
<span class="quotelev2">&gt;&gt;  Configured architecture: i386-apple-darwin8.7.3
</span><br>
<span class="quotelev2">&gt;&gt;            Configured by: root
</span><br>
<span class="quotelev2">&gt;&gt;            Configured on: Wed Jan 24 10:46:02 EST 2007
</span><br>
<span class="quotelev2">&gt;&gt;           Configure host: node01
</span><br>
<span class="quotelev2">&gt;&gt;                 Built by: root
</span><br>
<span class="quotelev2">&gt;&gt;                 Built on: Wed Jan 24 11:02:16 EST 2007
</span><br>
<span class="quotelev2">&gt;&gt;               Built host: node01
</span><br>
<span class="quotelev2">&gt;&gt;               C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 bindings: yes (single underscore)
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt;               C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;              C char size: 1
</span><br>
<span class="quotelev2">&gt;&gt;              C bool size: 1
</span><br>
<span class="quotelev2">&gt;&gt;             C short size: 2
</span><br>
<span class="quotelev2">&gt;&gt;               C int size: 4
</span><br>
<span class="quotelev2">&gt;&gt;              C long size: 4
</span><br>
<span class="quotelev2">&gt;&gt;             C float size: 4
</span><br>
<span class="quotelev2">&gt;&gt;            C double size: 8
</span><br>
<span class="quotelev2">&gt;&gt;           C pointer size: 4
</span><br>
<span class="quotelev2">&gt;&gt;             C char align: 1
</span><br>
<span class="quotelev2">&gt;&gt;             C bool align: 1
</span><br>
<span class="quotelev2">&gt;&gt;              C int align: 4
</span><br>
<span class="quotelev2">&gt;&gt;            C float align: 4
</span><br>
<span class="quotelev2">&gt;&gt;           C double align: 4
</span><br>
<span class="quotelev2">&gt;&gt;             C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 compiler: ifort
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran77 compiler abs: /usr/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 compiler: ifort
</span><br>
<span class="quotelev2">&gt;&gt;   Fortran90 compiler abs: /usr/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt;        Fort integer size: 4
</span><br>
<span class="quotelev2">&gt;&gt;        Fort logical size: 4
</span><br>
<span class="quotelev2">&gt;&gt;  Fort logical value true: -1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer1: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer2: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer4: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have integer8: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fort have integer16: no
</span><br>
<span class="quotelev2">&gt;&gt;          Fort have real4: yes
</span><br>
<span class="quotelev2">&gt;&gt;          Fort have real8: yes
</span><br>
<span class="quotelev2">&gt;&gt;         Fort have real16: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort have complex8: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fort have complex16: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fort have complex32: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer1 size: 1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer2 size: 2
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer4 size: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer16 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;           Fort real size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real16 size: 16
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev2">&gt;&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx32 size: 32
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer align: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer2 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer4 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer8 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real align: 1
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real4 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real8 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;        Fort real16 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort dbl prec align: 1
</span><br>
<span class="quotelev2">&gt;&gt;          Fort cplx align: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort dbl cplx align: 1
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx8 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;        Fort cplx16 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;        Fort cplx32 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;              C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;             Build CFLAGS: -O3 -DNDEBUG -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt;           Build CXXFLAGS: -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt;             Build FFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;            Build FCFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;            Build LDFLAGS: -export-dynamic   -Wl,-u,_munmap
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-multiply_defined,suppress
</span><br>
<span class="quotelev2">&gt;&gt;               Build LIBS:
</span><br>
<span class="quotelev2">&gt;&gt;     Wrapper extra CFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;   Wrapper extra CXXFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;     Wrapper extra FFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;    Wrapper extra FCFLAGS:
</span><br>
<span class="quotelev2">&gt;&gt;    Wrapper extra LDFLAGS:   -Wl,-u,_munmap
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-multiply_defined,suppress
</span><br>
<span class="quotelev2">&gt;&gt;       Wrapper extra LIBS:      -ldl
</span><br>
<span class="quotelev2">&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;          libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/Users/dwalker/.openmpi/mca-params.conf:/usr/local/etc/openmpi-mca-para
</span><br>
<span class="quotelev2">&gt;&gt; ms.conf&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Path for MCA configuration files containing
</span><br>
<span class="quotelev2">&gt;&gt; default parameter values
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/usr/local/lib/openmpi:/Users/dwalker/.openmpi/components&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Path where to look for Open MPI and ORTE
</span><br>
<span class="quotelev2">&gt;&gt; components
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter &quot;mca_component_show_load_errors&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to show errors for components that
</span><br>
<span class="quotelev2">&gt;&gt; failed to load or not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mca: parameter &quot;mca_component_disable_dlopen&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to attempt to disable opening dynamic
</span><br>
<span class="quotelev2">&gt;&gt; components or not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether you want MPI API parameters checked at
</span><br>
<span class="quotelev2">&gt;&gt; run-time or not.  Possible values are 0 (no checking) and 1
</span><br>
<span class="quotelev2">&gt;&gt;                           (perform checking at run-time)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Yield the processor when waiting for MPI
</span><br>
<span class="quotelev2">&gt;&gt; communication (for MPI processes, will default to 1 when oversubscribing
</span><br>
<span class="quotelev2">&gt;&gt;                           nodes)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           How often to progress TCP communications (0 =
</span><br>
<span class="quotelev2">&gt;&gt; never, otherwise specified in microseconds)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether MPI_FINALIZE shows all MPI handles
</span><br>
<span class="quotelev2">&gt;&gt; that were not freed or not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to actually free MPI objects when
</span><br>
<span class="quotelev2">&gt;&gt; their handles are freed
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to show all MCA parameter value during
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INIT or not (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params_file&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If mpi_show_mca_params is true, setting this
</span><br>
<span class="quotelev2">&gt;&gt; string to a valid filename tells Open MPI to dump all the MCA
</span><br>
<span class="quotelev2">&gt;&gt;                           parameter values into a file suitable for
</span><br>
<span class="quotelev2">&gt;&gt; reading via the mca_param_files parameter (good for reproducability of
</span><br>
<span class="quotelev2">&gt;&gt;                           MPI jobs)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, assume that this job is the only
</span><br>
<span class="quotelev2">&gt;&gt; (set of) process(es) running on each node and bind processes to
</span><br>
<span class="quotelev2">&gt;&gt;                           processors, starting with processor ID 0
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, save the string hostnames of all
</span><br>
<span class="quotelev2">&gt;&gt; MPI peer processes (mostly for error / debugging output messages).
</span><br>
<span class="quotelev2">&gt;&gt;                           This can add quite a bit of memory usage to
</span><br>
<span class="quotelev2">&gt;&gt; each MPI process.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, print out an identifying message
</span><br>
<span class="quotelev2">&gt;&gt; when MPI_ABORT is invoked (hostname, PID of the process that called
</span><br>
<span class="quotelev2">&gt;&gt;                           MPI_ABORT) and delay for that many seconds
</span><br>
<span class="quotelev2">&gt;&gt; before exiting (a negative delay value means to never abort).  This
</span><br>
<span class="quotelev2">&gt;&gt;                           allows attaching of a debugger before quitting
</span><br>
<span class="quotelev2">&gt;&gt; the job.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: information &quot;mpi_abort_print_stack&quot; (value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, print out a stack trace when
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           leave_pinned
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           leave_pinned_pipeline
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_base_user_debugger&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;totalview @mpirun@ -a @mpirun_args@ : fxp @mpirun@ -a
</span><br>
<span class="quotelev2">&gt;&gt;                           @mpirun_args@&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Sequence of user-level debuggers to search for
</span><br>
<span class="quotelev2">&gt;&gt; in orterun
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether or not to enable debugging output for
</span><br>
<span class="quotelev2">&gt;&gt; all ORTE components (0 or 1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;6,10,8,11&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If a signal is received, display the stack
</span><br>
<span class="quotelev2">&gt;&gt; trace frame
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; memory framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt;&gt;                           found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the memory framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA memory: parameter &quot;memory_darwin_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; paffinity framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt;&gt;                           found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; maffinity framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt;&gt;                           found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA maffinity: parameter &quot;maffinity_first_use_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the first_use maffinity component
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; timer framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the timer framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA timer: parameter &quot;timer_darwin_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; allocator framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt;&gt;                           found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: parameter &quot;allocator_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the allocator framework (0
</span><br>
<span class="quotelev2">&gt;&gt; = no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: parameter &quot;allocator_basic_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;            MCA allocator: parameter &quot;allocator_bucket_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; coll framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the coll framework (0 = no
</span><br>
<span class="quotelev2">&gt;&gt; verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_basic_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the basic coll component
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_basic_crossover&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Minimum number of processes in a communicator
</span><br>
<span class="quotelev2">&gt;&gt; before using the logarithmic algorithms
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_hierarch_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the hierarchical coll component
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_hierarch_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Turn verbose message of the hierarchical coll
</span><br>
<span class="quotelev2">&gt;&gt; component on/off
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_hierarch_use_rdma&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Switch from the send btl list used to detect
</span><br>
<span class="quotelev2">&gt;&gt; hierarchies to the rdma btl list
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_hierarch_ignore_sm&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Ignore sm protocol when detecting hierarchies.
</span><br>
<span class="quotelev2">&gt;&gt; Required to enable the usage of protocol specific collective
</span><br>
<span class="quotelev2">&gt;&gt;                           operations
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_hierarch_symmetric&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Assume symmetric configuration
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_self_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;75&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the sm coll component
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_control_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Length of the control data -- should usually
</span><br>
<span class="quotelev2">&gt;&gt; be either the length of a cache line on most SMPs, or the size of a
</span><br>
<span class="quotelev2">&gt;&gt;                           page on machines that support direct memory
</span><br>
<span class="quotelev2">&gt;&gt; affinity page placement (in bytes)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_bootstrap_filename&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;shared_mem_sm_bootstrap&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Filename (in the Open MPI session directory)
</span><br>
<span class="quotelev2">&gt;&gt; of the coll sm component bootstrap rendezvous mmap file
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_bootstrap_num_segments&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of segments in the bootstrap file
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8192&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Fragment size (in bytes) used for passing data
</span><br>
<span class="quotelev2">&gt;&gt; through shared memory (will be rounded up to the nearest
</span><br>
<span class="quotelev2">&gt;&gt;                           control_size size)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_mpool&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;sm&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Name of the mpool component to use
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of &quot;in use&quot; flags, used to mark a
</span><br>
<span class="quotelev2">&gt;&gt; message passing area segment as currently being used or not (must be &gt;=
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt;                           and &lt;= comm_num_segments)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_comm_num_segments&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of segments in each communicator's
</span><br>
<span class="quotelev2">&gt;&gt; shared memory message passing area (must be &gt;= 2, and must be a multiple
</span><br>
<span class="quotelev2">&gt;&gt;                           of comm_in_use_flags)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Degree of the tree for tree-based operations
</span><br>
<span class="quotelev2">&gt;&gt; (must be =&gt; 1 and &lt;= min(control_size, 255))
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: information
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_sm_shared_mem_used_bootstrap&quot; (value: &quot;160&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Amount of shared memory used in the shared
</span><br>
<span class="quotelev2">&gt;&gt; memory bootstrap area (in bytes)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of processes to use for the calculation
</span><br>
<span class="quotelev2">&gt;&gt; of the shared_mem_size MCA information parameter (must be =&gt; 2)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: information &quot;coll_sm_shared_mem_used_data&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (value: &quot;548864&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Amount of shared memory used in the shared
</span><br>
<span class="quotelev2">&gt;&gt; memory data area for info_num_procs processes (in bytes)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_tuned_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;30&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the tuned coll component
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;32768&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Size of communicator were we stop
</span><br>
<span class="quotelev2">&gt;&gt; pre-allocating memory for the fixed internal buffer used for message
</span><br>
<span class="quotelev2">&gt;&gt; requests
</span><br>
<span class="quotelev2">&gt;&gt;                           etc that is hung off the communicator data
</span><br>
<span class="quotelev2">&gt;&gt; segment. I.e. if you have a 100'000 nodes you might not want to
</span><br>
<span class="quotelev2">&gt;&gt;                           pre-allocate 200'000 request handle slots per
</span><br>
<span class="quotelev2">&gt;&gt; communicator instance!
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Switch used to decide if we use static (if
</span><br>
<span class="quotelev2">&gt;&gt; statements) or dynamic (built at runtime) decision function rules
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Inital fanout used in the tree topologies for
</span><br>
<span class="quotelev2">&gt;&gt; each communicator. This is only an initial guess, if a tuned
</span><br>
<span class="quotelev2">&gt;&gt;                           collective needs a different fanout for an
</span><br>
<span class="quotelev2">&gt;&gt; operation, it build it dynamically. This parameter is only for the
</span><br>
<span class="quotelev2">&gt;&gt;                           first guess and might save a little time
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Inital fanout used in the chain (fanout
</span><br>
<span class="quotelev2">&gt;&gt; followed by pipeline) topologies for each communicator. This is only an
</span><br>
<span class="quotelev2">&gt;&gt;                           initial guess, if a tuned collective needs a
</span><br>
<span class="quotelev2">&gt;&gt; different fanout for an operation, it build it dynamically. This
</span><br>
<span class="quotelev2">&gt;&gt;                           parameter is only for the first guess and
</span><br>
<span class="quotelev2">&gt;&gt; might save a little time
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_tuned_allreduce_algorithm&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Which allreduce algorithm is used. Can be
</span><br>
<span class="quotelev2">&gt;&gt; locked down to choice of: 0 ignore, 1 basic linear, 2 nonoverlapping
</span><br>
<span class="quotelev2">&gt;&gt;                           (tuned reduce + tuned bcast)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_allreduce_algorithm_segmentsize&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Segment size in bytes used by default for
</span><br>
<span class="quotelev2">&gt;&gt; allreduce algorithms. Only has meaning if algorithm is forced and
</span><br>
<span class="quotelev2">&gt;&gt;                           supports segmenting. 0 bytes means no
</span><br>
<span class="quotelev2">&gt;&gt; segmentation.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_allreduce_algorithm_tree_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Fanout for n-tree used for allreduce
</span><br>
<span class="quotelev2">&gt;&gt; algorithms. Only has meaning if algorithm is forced and supports n-tree
</span><br>
<span class="quotelev2">&gt;&gt; topo
</span><br>
<span class="quotelev2">&gt;&gt;                           based operation.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_allreduce_algorithm_chain_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Fanout for chains used for allreduce
</span><br>
<span class="quotelev2">&gt;&gt; algorithms. Only has meaning if algorithm is forced and supports chain
</span><br>
<span class="quotelev2">&gt;&gt; topo
</span><br>
<span class="quotelev2">&gt;&gt;                           based operation.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_tuned_alltoall_algorithm&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Which alltoall algorithm is used. Can be
</span><br>
<span class="quotelev2">&gt;&gt; locked down to choice of: 0 ignore, 1 basic linear, 2 pairwise, 3:
</span><br>
<span class="quotelev2">&gt;&gt;                           modified bruck, 4: two proc only.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_alltoall_algorithm_segmentsize&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Segment size in bytes used by default for
</span><br>
<span class="quotelev2">&gt;&gt; alltoall algorithms. Only has meaning if algorithm is forced and
</span><br>
<span class="quotelev2">&gt;&gt;                           supports segmenting. 0 bytes means no
</span><br>
<span class="quotelev2">&gt;&gt; segmentation.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_alltoall_algorithm_tree_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Fanout for n-tree used for alltoall
</span><br>
<span class="quotelev2">&gt;&gt; algorithms. Only has meaning if algorithm is forced and supports n-tree
</span><br>
<span class="quotelev2">&gt;&gt; topo
</span><br>
<span class="quotelev2">&gt;&gt;                           based operation.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_alltoall_algorithm_chain_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Fanout for chains used for alltoall
</span><br>
<span class="quotelev2">&gt;&gt; algorithms. Only has meaning if algorithm is forced and supports chain
</span><br>
<span class="quotelev2">&gt;&gt; topo
</span><br>
<span class="quotelev2">&gt;&gt;                           based operation.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_tuned_barrier_algorithm&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Which barrier algorithm is used. Can be locked
</span><br>
<span class="quotelev2">&gt;&gt; down to choice of: 0 ignore, 1 linear, 2 double ring, 3: recursive
</span><br>
<span class="quotelev2">&gt;&gt;                           doubling 4: bruck, 5: two proc only, 6: step
</span><br>
<span class="quotelev2">&gt;&gt; based bmtree
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_tuned_bcast_algorithm&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Which bcast algorithm is used. Can be locked
</span><br>
<span class="quotelev2">&gt;&gt; down to choice of: 0 ignore, 1 basic linear, 2 chain, 3: pipeline, 4:
</span><br>
<span class="quotelev2">&gt;&gt;                           split binary tree, 5: binary tree.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_bcast_algorithm_segmentsize&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Segment size in bytes used by default for
</span><br>
<span class="quotelev2">&gt;&gt; bcast algorithms. Only has meaning if algorithm is forced and supports
</span><br>
<span class="quotelev2">&gt;&gt;                           segmenting. 0 bytes means no segmentation.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_bcast_algorithm_tree_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Fanout for n-tree used for bcast algorithms.
</span><br>
<span class="quotelev2">&gt;&gt; Only has meaning if algorithm is forced and supports n-tree topo
</span><br>
<span class="quotelev2">&gt;&gt;                           based operation.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_bcast_algorithm_chain_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Fanout for chains used for bcast algorithms.
</span><br>
<span class="quotelev2">&gt;&gt; Only has meaning if algorithm is forced and supports chain topo based
</span><br>
<span class="quotelev2">&gt;&gt;                           operation.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter &quot;coll_tuned_reduce_algorithm&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Which reduce algorithm is used. Can be locked
</span><br>
<span class="quotelev2">&gt;&gt; down to choice of: 0 ignore, 1 linear, 2 chain, 3 pipeline
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_reduce_algorithm_segmentsize&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Segment size in bytes used by default for
</span><br>
<span class="quotelev2">&gt;&gt; reduce algorithms. Only has meaning if algorithm is forced and supports
</span><br>
<span class="quotelev2">&gt;&gt;                           segmenting. 0 bytes means no segmentation.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_reduce_algorithm_tree_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Fanout for n-tree used for reduce algorithms.
</span><br>
<span class="quotelev2">&gt;&gt; Only has meaning if algorithm is forced and supports n-tree topo
</span><br>
<span class="quotelev2">&gt;&gt;                           based operation.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;coll_tuned_reduce_algorithm_chain_fanout&quot; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Fanout for chains used for reduce algorithms.
</span><br>
<span class="quotelev2">&gt;&gt; Only has meaning if algorithm is forced and supports chain topo
</span><br>
<span class="quotelev2">&gt;&gt;                           based operation.
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter &quot;io_base_freelist_initial_size&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter &quot;io_base_freelist_max_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter &quot;io_base_freelist_increment&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Increment size of the MPI-2 IO request
</span><br>
<span class="quotelev2">&gt;&gt; freelist
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the io
</span><br>
<span class="quotelev2">&gt;&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the io framework (0 = no
</span><br>
<span class="quotelev2">&gt;&gt; verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter &quot;io_romio_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the io romio component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter &quot;io_romio_delete_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Delete priority of the io romio component
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA io: parameter
</span><br>
<span class="quotelev2">&gt;&gt; &quot;io_romio_enable_parallel_optimizations&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Enable set of Open MPI-added options to
</span><br>
<span class="quotelev2">&gt;&gt; improve collective file i/o performance
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; mpool framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the mpool framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_sm_size&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;536870912&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;bucket&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_sm_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_base_use_mem_hooks&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           use memory hooks for deregistering freed
</span><br>
<span class="quotelev2">&gt;&gt; memory
</span><br>
<span class="quotelev2">&gt;&gt;                MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           (deprecated, use mpool_base_use_mem_hooks)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml&quot; (current value: &quot;ob1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; pml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the pml framework (0 = no
</span><br>
<span class="quotelev2">&gt;&gt; verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;3&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; bml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: parameter &quot;bml_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the bml framework (0 = no
</span><br>
<span class="quotelev2">&gt;&gt; verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA bml: parameter &quot;bml_r2_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; rcache framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt;&gt;                           found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the rcache framework (0 =
</span><br>
<span class="quotelev2">&gt;&gt; no verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rcache: parameter &quot;rcache_rb_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If btl_base_debug is 1 standard debug is
</span><br>
<span class="quotelev2">&gt;&gt; output, if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; btl framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the btl framework (0 = no
</span><br>
<span class="quotelev2">&gt;&gt; verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Number of fragments by default
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum number of fragments
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Increment by this number of fragments
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Eager size fragmeng (before the rendez-vous
</span><br>
<span class="quotelev2">&gt;&gt; ptotocol)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_min_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;262144&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Minimum fragment size after the rendez-vous
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_max_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;262144&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum fragment size after the rendez-vous
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_min_rdma_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_max_rdma_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Device exclusivity
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Active behavior flags
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_self_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;256&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1024&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8192&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_size_of_cb_queue&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;128&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_cb_lazy_free_freq&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;120&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_sm_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;lo&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;30720&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;65536&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; topo framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the topo framework (0 = no
</span><br>
<span class="quotelev2">&gt;&gt; verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; osc framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: parameter &quot;osc_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the osc framework (0 = no
</span><br>
<span class="quotelev2">&gt;&gt; verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: parameter &quot;osc_pt2pt_fence_sync_method&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;reduce_scatter&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           How to synchronize fence: reduce_scatter,
</span><br>
<span class="quotelev2">&gt;&gt; allreduce, alltoall
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: parameter &quot;osc_pt2pt_eager_send&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Attempt to start data movement during
</span><br>
<span class="quotelev2">&gt;&gt; communication call, instead of at synchrnoization time.  Info key of
</span><br>
<span class="quotelev2">&gt;&gt; same
</span><br>
<span class="quotelev2">&gt;&gt;                           name overrides this value, if info key given.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Enable optimizations available only if
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LOCK is not used.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; errmgr framework (&lt;none&gt; means &quot;use all components that can be
</span><br>
<span class="quotelev2">&gt;&gt;                           found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; gpr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_null_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_replica_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA gpr: parameter &quot;gpr_replica_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_base_window_size&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;4096&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_base_service&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0.0.0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; iof framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_proxy_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_proxy_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_svc_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA iof: parameter &quot;iof_svc_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the ns
</span><br>
<span class="quotelev2">&gt;&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_proxy_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_proxy_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_replica_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_replica_isolate&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_replica_maxsize&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;2147483647&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_replica_blocksize&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;512&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ns: parameter &quot;ns_replica_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; oob framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the oob framework (0 = no
</span><br>
<span class="quotelev2">&gt;&gt; verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;60&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_include&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_exclude&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_connect_timeout&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           connect() timeout in seconds, before trying
</span><br>
<span class="quotelev2">&gt;&gt; next interface
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA oob: parameter &quot;oob_tcp_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; ras framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter &quot;ras_dash_host_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;5&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Selection priority for the dash_host RAS
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter &quot;ras_hostfile_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Selection priority for the hostfile RAS
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter &quot;ras_localhost_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Selection priority for the localhost RAS
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA ras: parameter &quot;ras_xgrid_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;100&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; rds framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_hostfile_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Toggle debug output for hostfile RDS component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_hostfile_path&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/usr/local/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           ORTE Host filename
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_hostfile_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_resfile_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Toggle debug output for resfile RDS component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_resfile_name&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           ORTE Resource filename
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rds: parameter &quot;rds_resfile_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the rmaps framework
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;slot&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Scheduling Policy for RMAPS. [slot | node]
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter &quot;rmaps_base_schedule_local&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, allow scheduling MPI applications
</span><br>
<span class="quotelev2">&gt;&gt; on the same node as mpirun (default).  If zero, do not schedule any
</span><br>
<span class="quotelev2">&gt;&gt;                           MPI applications on the same node as mpirun
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If nonzero, then do not allow oversubscription
</span><br>
<span class="quotelev2">&gt;&gt; of nodes - mpirun will return an error if there aren't enough nodes
</span><br>
<span class="quotelev2">&gt;&gt;                           to launch all processes without
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribing
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; rmaps framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_debug&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Toggle debug output for Round Robin RMAPS
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Selection priority for Round Robin RMAPS
</span><br>
<span class="quotelev2">&gt;&gt; component
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; rmgr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; rml framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the rml framework (0 = no
</span><br>
<span class="quotelev2">&gt;&gt; verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rml: parameter &quot;rml_oob_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; pls framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_fork_reap&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to wait to reap all children before
</span><br>
<span class="quotelev2">&gt;&gt; finalizing or not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_fork_reap_timeout&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           When killing children processes, first send a
</span><br>
<span class="quotelev2">&gt;&gt; SIGTERM, then wait at least this timeout (in seconds), then send a
</span><br>
<span class="quotelev2">&gt;&gt;                           SIGKILL
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_fork_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of this component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_fork_debug&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether to enable debugging output or not
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Whether or not to enable debugging output for
</span><br>
<span class="quotelev2">&gt;&gt; the rsh pls component (0 or 1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_num_concurrent&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;128&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           How many pls_rsh_agent instances to invoke
</span><br>
<span class="quotelev2">&gt;&gt; concurrently (must be &gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_orted&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           The command name that the rsh pls component
</span><br>
<span class="quotelev2">&gt;&gt; will invoke for the ORTE daemon
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;10&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Priority of the rsh pls component
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_delay&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Delay (in seconds) between invocations of the
</span><br>
<span class="quotelev2">&gt;&gt; remote agent, but only used when the &quot;debug&quot; MCA parameter is true,
</span><br>
<span class="quotelev2">&gt;&gt;                           or the top-level MCA debugging is enabled
</span><br>
<span class="quotelev2">&gt;&gt; (otherwise this value is ignored)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_reap&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If set to 1, wait for all the processes to
</span><br>
<span class="quotelev2">&gt;&gt; complete before exiting.  Otherwise, quit immediately -- without
</span><br>
<span class="quotelev2">&gt;&gt;                           waiting for confirmation that all other
</span><br>
<span class="quotelev2">&gt;&gt; processes in the job have completed.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_assume_same_shell&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           If set to 1, assume that the shell on the
</span><br>
<span class="quotelev2">&gt;&gt; remote node is the same as the shell on the local node.  Otherwise,
</span><br>
<span class="quotelev2">&gt;&gt;                           probe for what the remote shell.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: &quot;ssh
</span><br>
<span class="quotelev2">&gt;&gt; : rsh&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           The command used to launch executables on
</span><br>
<span class="quotelev2">&gt;&gt; remote nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_xgrid_orted&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orted&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_xgrid_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;20&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA pls: parameter &quot;pls_xgrid_delete_job&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; sds framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds_base_verbose&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Verbosity level for the sds framework (0 = no
</span><br>
<span class="quotelev2">&gt;&gt; verbosity)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds_env_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds_pipe_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds_seed_priority&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA sds: parameter &quot;sds_singleton_priority&quot; (current
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA soh: parameter &quot;soh&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev2">&gt;&gt; soh framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2916.php">Daniele Avitabile: "[OMPI users] Installation fails on Mac Os"</a>
<li><strong>Previous message:</strong> <a href="2914.php">David Burns: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<li><strong>In reply to:</strong> <a href="2914.php">David Burns: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
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

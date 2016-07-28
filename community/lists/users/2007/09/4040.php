<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 20:35:48 2007" -->
<!-- isoreceived="20070919003548" -->
<!-- sent="Tue, 18 Sep 2007 16:56:00 -0400" -->
<!-- isosent="20070918205600" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault when spawning" -->
<!-- id="46F03B60.9030400_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFC2AF6A5A.BB8F329B-ONC1257356.00453106-C1257356.0048DD88_at_de.ibm.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-18 16:56:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4041.php">Tobias Burnus: "[OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>Previous message:</strong> <a href="4039.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>In reply to:</strong> <a href="4013.php">Murat Knecht: "[OMPI users] Segmentation fault when spawning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Murat,
<br>
<p>If the process is being spawned onto a node that you are already running 
<br>
on there should not be a problem with ssh-sessions, since if there is 
<br>
already a daemon running on the node we do not ssh into it again.
<br>
<p>Can you try running again with --debug-daemons added to the mpirun 
<br>
command line? This may (or may not) print out some information that 
<br>
would be useful.
<br>
<p>Also, what does the spawn call look like? What is the mpirun command you 
<br>
are using (and the contents of any hostfiles)?
<br>
<p>Unfortunately, besides these stabs there is really no way to debug it 
<br>
without gdb. Once I get the spawn call and command line you are using I 
<br>
will see if I can replicate it.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Murat Knecht wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a segmentation fault when trying to spawn a single process on the
</span><br>
<span class="quotelev1">&gt; localhost (127.0.0.1).
</span><br>
<span class="quotelev1">&gt; I tried both the current stable 1.2.3 and the beta 1.2.4, both ended up the
</span><br>
<span class="quotelev1">&gt; same way.
</span><br>
<span class="quotelev2">&gt;&gt;From the stack trace, i know it's the spawn call.
</span><br>
<span class="quotelev1">&gt; Is it possible that there is an error with authentification? (I accepted
</span><br>
<span class="quotelev1">&gt; the localhost certificates manually by opening up ssh-sessions.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [loud2:15472] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [loud2:15472] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [loud2:15472] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [loud2:15472] Failing at address: 0x2b7182ea7fe0
</span><br>
<span class="quotelev1">&gt; [loud2:15472] [ 0] /lib64/libpthread.so.0 [0x2b6983637c10]
</span><br>
<span class="quotelev1">&gt; [loud2:15472] [ 1] /usr/local/lib/libopen-pal.so.0(_int_free+0x26d)
</span><br>
<span class="quotelev1">&gt; [0x2b6982d75fdd]
</span><br>
<span class="quotelev1">&gt; [loud2:15472] [ 2] /usr/local/lib/libopen-pal.so.0(free+0xbd)
</span><br>
<span class="quotelev1">&gt; [0x2b6982d762fd]
</span><br>
<span class="quotelev1">&gt; [loud2:15472] [ 3] /usr/local/lib/libopen-rte.so.0 [0x2b6982c33146]
</span><br>
<span class="quotelev1">&gt; [loud2:15472] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi.so.0(ompi_comm_start_processes+0xe61)
</span><br>
<span class="quotelev1">&gt; [0x2b6982a8a3a1]
</span><br>
<span class="quotelev1">&gt; [loud2:15472] [ 5] /usr/local/lib/libmpi.so.0(PMPI_Comm_spawn+0x13a)
</span><br>
<span class="quotelev1">&gt; [0x2b6982aaedfa]
</span><br>
<span class="quotelev1">&gt; [loud2:15472] [ 6]
</span><br>
<span class="quotelev1">&gt; queen(_ZNK3MPI9Intracomm5SpawnEPKcPS2_iRKNS_4InfoEi+0x5e) [0x41f64a]
</span><br>
<span class="quotelev1">&gt; [loud2:15472] [ 7]
</span><br>
<span class="quotelev1">&gt; queen(_ZN5blink5queen5Queen16startupLandscapeERKSsRSt4listINS0_4HostESaIS5_EE+0x9e2)
</span><br>
<span class="quotelev1">&gt;  [0x4222ae]
</span><br>
<span class="quotelev1">&gt; [loud2:15472] [ 8] queen(main+0x936) [0x428c4c]
</span><br>
<span class="quotelev1">&gt; [loud2:15472] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x2b698375e154]
</span><br>
<span class="quotelev1">&gt; [loud2:15472] [10] queen(__gxx_personality_v0+0xa9) [0x4183f9]
</span><br>
<span class="quotelev1">&gt; [loud2:15472] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All parameters are being checked for correctness, MPI::ARGV_NULL is used
</span><br>
<span class="quotelev1">&gt; for argv.
</span><br>
<span class="quotelev1">&gt; Is there a way to enable detailed logging, or are the mpirun - arguments
</span><br>
<span class="quotelev1">&gt; all there is? (In the FAQ and /var/log/ i did not find logs.)
</span><br>
<span class="quotelev1">&gt; Us there maybe a suggested solution to this problem, or do I have to debug
</span><br>
<span class="quotelev1">&gt; OpenMPI with gdb now?
</span><br>
<span class="quotelev1">&gt; Are there secret assumptions regarding the system this is running on? I had
</span><br>
<span class="quotelev1">&gt; a version of the program running on another machine already (no changes to
</span><br>
<span class="quotelev1">&gt; MPI related parts) ...
</span><br>
<span class="quotelev1">&gt; Btw, I very much welcome the recent thoughts about establishing a
</span><br>
<span class="quotelev1">&gt; documentation project. :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any hint!
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Murat
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
<span class="quotelev1">&gt; mkne_at_loud2:~/rep/DWA/queen&gt; ompi_info -a
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.4b0
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r15441
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.2.4b0
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r15441
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.2.4b0
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r15441
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: execinfo (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;               MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: env (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;          MCA installdirs: config (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: rdma (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v2.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev1">&gt; v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: slurm (MCA v1.0, API v1.0, Component v1.2.4)
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr/local
</span><br>
<span class="quotelev1">&gt;                   Bindir: /usr/local/bin
</span><br>
<span class="quotelev1">&gt;                   Libdir: /usr/local/lib
</span><br>
<span class="quotelev1">&gt;                   Incdir: /usr/local/include
</span><br>
<span class="quotelev1">&gt;                Pkglibdir: /usr/local/lib/openmpi
</span><br>
<span class="quotelev1">&gt;               Sysconfdir: /usr/local/etc
</span><br>
<span class="quotelev1">&gt;  Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;            Configured by: root
</span><br>
<span class="quotelev1">&gt;            Configured on: Fri Sep 14 13:19:22 PDT 2007
</span><br>
<span class="quotelev1">&gt;           Configure host: loud2
</span><br>
<span class="quotelev1">&gt;                 Built by: mkne
</span><br>
<span class="quotelev1">&gt;                 Built on: Fri Sep 14 13:24:21 PDT 2007
</span><br>
<span class="quotelev1">&gt;               Built host: loud2
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
<span class="quotelev1">&gt;              C char size: 1
</span><br>
<span class="quotelev1">&gt;              C bool size: 1
</span><br>
<span class="quotelev1">&gt;             C short size: 2
</span><br>
<span class="quotelev1">&gt;               C int size: 4
</span><br>
<span class="quotelev1">&gt;              C long size: 8
</span><br>
<span class="quotelev1">&gt;             C float size: 4
</span><br>
<span class="quotelev1">&gt;            C double size: 8
</span><br>
<span class="quotelev1">&gt;           C pointer size: 8
</span><br>
<span class="quotelev1">&gt;             C char align: 1
</span><br>
<span class="quotelev1">&gt;             C bool align: 1
</span><br>
<span class="quotelev1">&gt;              C int align: 4
</span><br>
<span class="quotelev1">&gt;            C float align: 4
</span><br>
<span class="quotelev1">&gt;           C double align: 8
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: none
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: none
</span><br>
<span class="quotelev1">&gt;        Fort integer size: 4
</span><br>
<span class="quotelev1">&gt;        Fort logical size: 4
</span><br>
<span class="quotelev1">&gt;  Fort logical value true: 0
</span><br>
<span class="quotelev1">&gt;           Fort real size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: skipped
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: skipped
</span><br>
<span class="quotelev1">&gt;       Fort integer align: skipped
</span><br>
<span class="quotelev1">&gt;          Fort real align: skipped
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: skipped
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: skipped
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: skipped
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: no
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: no
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: yes
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;             Build CFLAGS: -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing  -pthread
</span><br>
<span class="quotelev1">&gt;           Build CXXFLAGS: -O3 -DNDEBUG -finline-functions -fexceptions
</span><br>
<span class="quotelev1">&gt; -pthread
</span><br>
<span class="quotelev1">&gt;             Build FFLAGS:
</span><br>
<span class="quotelev1">&gt;            Build FCFLAGS: -g -O2
</span><br>
<span class="quotelev1">&gt;            Build LDFLAGS: -export-dynamic  -fexceptions
</span><br>
<span class="quotelev1">&gt;               Build LIBS: -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt;     Wrapper extra CFLAGS: -pthread
</span><br>
<span class="quotelev1">&gt;   Wrapper extra CXXFLAGS: -fexceptions -pthread
</span><br>
<span class="quotelev1">&gt;     Wrapper extra FFLAGS:
</span><br>
<span class="quotelev1">&gt;    Wrapper extra FCFLAGS:
</span><br>
<span class="quotelev1">&gt;    Wrapper extra LDFLAGS:
</span><br>
<span class="quotelev1">&gt;       Wrapper extra LIBS:   -ldl   -Wl,--export-dynamic -lnsl -lutil -lm
</span><br>
<span class="quotelev1">&gt; -ldl
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
<span class="quotelev1">&gt;    Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt;  mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_param_files&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;/home/mkne/.openmpi/mca-params.conf:/usr/local/etc/openmpi-mca-params.conf&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path for MCA configuration files containing
</span><br>
<span class="quotelev1">&gt; default parameter values
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;/usr/local/lib/openmpi:/home/mkne/.openmpi/components&quot;)
</span><br>
<span class="quotelev1">&gt;                           Path where to look for Open MPI and ORTE
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_verbose&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Top-level verbosity parameter
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_show_load_errors&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show errors for components that failed
</span><br>
<span class="quotelev1">&gt; to load or not
</span><br>
<span class="quotelev1">&gt;                  MCA mca: parameter &quot;mca_component_disable_dlopen&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to attempt to disable opening dynamic
</span><br>
<span class="quotelev1">&gt; components or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_param_check&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether you want MPI API parameters checked at
</span><br>
<span class="quotelev1">&gt; run-time or not.  Possible values are 0 (no checking) and 1 (perform
</span><br>
<span class="quotelev1">&gt; checking at
</span><br>
<span class="quotelev1">&gt;                           run-time)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_yield_when_idle&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Yield the processor when waiting for MPI
</span><br>
<span class="quotelev1">&gt; communication (for MPI processes, will default to 1 when oversubscribing
</span><br>
<span class="quotelev1">&gt; nodes)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_event_tick_rate&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           How often to progress TCP communications (0 =
</span><br>
<span class="quotelev1">&gt; never, otherwise specified in microseconds)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_handle_leaks&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether MPI_FINALIZE shows all MPI handles that
</span><br>
<span class="quotelev1">&gt; were not freed or not
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_no_free_handles&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to actually free MPI objects when their
</span><br>
<span class="quotelev1">&gt; handles are freed
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to show all MCA parameter value during
</span><br>
<span class="quotelev1">&gt; MPI_INIT or not (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_show_mca_params_file&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           If mpi_show_mca_params is true, setting this
</span><br>
<span class="quotelev1">&gt; string to a valid filename tells Open MPI to dump all the MCA parameter
</span><br>
<span class="quotelev1">&gt; values into a
</span><br>
<span class="quotelev1">&gt;                           file suitable for reading via the mca_param_files
</span><br>
<span class="quotelev1">&gt; parameter (good for reproducability of MPI jobs)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_paffinity_alone&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, assume that this job is the only (set
</span><br>
<span class="quotelev1">&gt; of) process(es) running on each node and bind processes to processors,
</span><br>
<span class="quotelev1">&gt; starting
</span><br>
<span class="quotelev1">&gt;                           with processor ID 0
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_keep_peer_hostnames&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, save the string hostnames of all MPI
</span><br>
<span class="quotelev1">&gt; peer processes (mostly for error / debugging output messages).  This can
</span><br>
<span class="quotelev1">&gt; add quite
</span><br>
<span class="quotelev1">&gt;                           a bit of memory usage to each MPI process.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_delay&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out an identifying message when
</span><br>
<span class="quotelev1">&gt; MPI_ABORT is invoked (hostname, PID of the process that called MPI_ABORT)
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;                           delay for that many seconds before exiting (a
</span><br>
<span class="quotelev1">&gt; negative delay value means to never abort).  This allows attaching of a
</span><br>
<span class="quotelev1">&gt; debugger
</span><br>
<span class="quotelev1">&gt;                           before quitting the job.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_abort_print_stack&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, print out a stack trace when
</span><br>
<span class="quotelev1">&gt; MPI_ABORT is invoked
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_all&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to create
</span><br>
<span class="quotelev1">&gt; connections / warmup with *all* peers during MPI_INIT (vs. making
</span><br>
<span class="quotelev1">&gt; connections lazily --
</span><br>
<span class="quotelev1">&gt;                           upon the first MPI traffic between each process
</span><br>
<span class="quotelev1">&gt; peer pair)
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_preconnect_oob&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to force MPI processes to fully wire-up
</span><br>
<span class="quotelev1">&gt; the OOB system between MPI processes.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned&quot; protocol or
</span><br>
<span class="quotelev1">&gt; not.  Enabling this setting can help bandwidth performance when repeatedly
</span><br>
<span class="quotelev1">&gt; sending
</span><br>
<span class="quotelev1">&gt;                           and receiving large messages with the same
</span><br>
<span class="quotelev1">&gt; buffers over RDMA-based networks.
</span><br>
<span class="quotelev1">&gt;                  MCA mpi: parameter &quot;mpi_leave_pinned_pipeline&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to use the &quot;leave pinned pipeline&quot;
</span><br>
<span class="quotelev1">&gt; protocol or not.
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Top-level ORTE debug switch
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_no_daemonize&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether to properly daemonize the ORTE daemons or
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_base_user_debugger&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;totalview @mpirun@ -a @mpirun_args@ : fxp @mpirun@ -a
</span><br>
<span class="quotelev1">&gt; @mpirun_args@&quot;)
</span><br>
<span class="quotelev1">&gt;                           Sequence of user-level debuggers to search for in
</span><br>
<span class="quotelev1">&gt; orterun
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_abort_timeout&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Time to wait [in seconds] before giving up on
</span><br>
<span class="quotelev1">&gt; aborting an ORTE operation
</span><br>
<span class="quotelev1">&gt;                 MCA orte: parameter &quot;orte_timing&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Request that critical timing loops be measured
</span><br>
<span class="quotelev1">&gt;                 MCA opal: parameter &quot;opal_signal&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;6,7,8,11&quot;)
</span><br>
<span class="quotelev1">&gt;                           If a signal is received, display the stack trace
</span><br>
<span class="quotelev1">&gt; frame
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; backtrace framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the backtrace framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA backtrace: parameter &quot;backtrace_execinfo_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; memory framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the memory framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA memory: parameter &quot;memory_ptmalloc2_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; paffinity framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: parameter &quot;paffinity_linux_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the linux paffinity component
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_have_cpu_set_t&quot;
</span><br>
<span class="quotelev1">&gt; (value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether this component was compiled on a system
</span><br>
<span class="quotelev1">&gt; with the type cpu_set_t or not (1 = yes, 0 = no)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information &quot;paffinity_linux_CPU_ZERO_ok&quot; (value:
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether this component was compiled on a system
</span><br>
<span class="quotelev1">&gt; where CPU_ZERO() is functional or broken (1 = functional, 0 = broken/not
</span><br>
<span class="quotelev1">&gt;                           available)
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: information
</span><br>
<span class="quotelev1">&gt; &quot;paffinity_linux_sched_setaffinity_num_params&quot; (value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                           The number of parameters that
</span><br>
<span class="quotelev1">&gt; sched_set_affinity() takes on the machine where this component was compiled
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; maffinity framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_first_use_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the first_use maffinity component
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: parameter &quot;maffinity_libnuma_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;25&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the libnuma maffinity component
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the timer
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the timer framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA timer: parameter &quot;timer_linux_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; allocator framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_base_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the allocator framework (0 =
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_basic_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_bucket_num_buckets&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: parameter &quot;allocator_bucket_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the coll
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the coll framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the basic coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_basic_crossover&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum number of processes in a communicator
</span><br>
<span class="quotelev1">&gt; before using the logarithmic algorithms
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_self_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the sm coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_control_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                           Length of the control data -- should usually be
</span><br>
<span class="quotelev1">&gt; either the length of a cache line on most SMPs, or the size of a page on
</span><br>
<span class="quotelev1">&gt; machines
</span><br>
<span class="quotelev1">&gt;                           that support direct memory affinity page
</span><br>
<span class="quotelev1">&gt; placement (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_bootstrap_filename&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;shared_mem_sm_bootstrap&quot;)
</span><br>
<span class="quotelev1">&gt;                           Filename (in the Open MPI session directory) of
</span><br>
<span class="quotelev1">&gt; the coll sm component bootstrap rendezvous mmap file
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_bootstrap_num_segments&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in the bootstrap file
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_fragment_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;8192&quot;)
</span><br>
<span class="quotelev1">&gt;                           Fragment size (in bytes) used for passing data
</span><br>
<span class="quotelev1">&gt; through shared memory (will be rounded up to the nearest control_size size)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of the mpool component to use
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_in_use_flags&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of &quot;in use&quot; flags, used to mark a message
</span><br>
<span class="quotelev1">&gt; passing area segment as currently being used or not (must be &gt;= 2 and &lt;=
</span><br>
<span class="quotelev1">&gt;                           comm_num_segments)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_comm_num_segments&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of segments in each communicator's shared
</span><br>
<span class="quotelev1">&gt; memory message passing area (must be &gt;= 2, and must be a multiple of
</span><br>
<span class="quotelev1">&gt;                           comm_in_use_flags)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_tree_degree&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Degree of the tree for tree-based operations
</span><br>
<span class="quotelev1">&gt; (must be =&gt; 1 and &lt;= min(control_size, 255))
</span><br>
<span class="quotelev1">&gt;                 MCA coll: information &quot;coll_sm_shared_mem_used_bootstrap&quot;
</span><br>
<span class="quotelev1">&gt; (value: &quot;216&quot;)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used in the shared memory
</span><br>
<span class="quotelev1">&gt; bootstrap area (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_sm_info_num_procs&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of processes to use for the calculation of
</span><br>
<span class="quotelev1">&gt; the shared_mem_size MCA information parameter (must be =&gt; 2)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: information &quot;coll_sm_shared_mem_used_data&quot;
</span><br>
<span class="quotelev1">&gt; (value: &quot;548864&quot;)
</span><br>
<span class="quotelev1">&gt;                           Amount of shared memory used in the shared memory
</span><br>
<span class="quotelev1">&gt; data area for info_num_procs processes (in bytes)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the tuned coll component
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_pre_allocate_memory_comm_size_limit&quot; (current value: &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size of communicator were we stop pre-allocating
</span><br>
<span class="quotelev1">&gt; memory for the fixed internal buffer used for message requests etc that is
</span><br>
<span class="quotelev1">&gt; hung
</span><br>
<span class="quotelev1">&gt;                           off the communicator data segment. I.e. if you
</span><br>
<span class="quotelev1">&gt; have a 100'000 nodes you might not want to pre-allocate 200'000 request
</span><br>
<span class="quotelev1">&gt; handle slots
</span><br>
<span class="quotelev1">&gt;                           per communicator instance!
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_tree_fanout&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the tree topologies for
</span><br>
<span class="quotelev1">&gt; each communicator. This is only an initial guess, if a tuned collective
</span><br>
<span class="quotelev1">&gt; needs a
</span><br>
<span class="quotelev1">&gt;                           different fanout for an operation, it build it
</span><br>
<span class="quotelev1">&gt; dynamically. This parameter is only for the first guess and might save a
</span><br>
<span class="quotelev1">&gt; little
</span><br>
<span class="quotelev1">&gt;                           time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_init_chain_fanout&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Inital fanout used in the chain (fanout followed
</span><br>
<span class="quotelev1">&gt; by pipeline) topologies for each communicator. This is only an initial
</span><br>
<span class="quotelev1">&gt; guess, if a
</span><br>
<span class="quotelev1">&gt;                           tuned collective needs a different fanout for an
</span><br>
<span class="quotelev1">&gt; operation, it build it dynamically. This parameter is only for the first
</span><br>
<span class="quotelev1">&gt; guess and
</span><br>
<span class="quotelev1">&gt;                           might save a little time
</span><br>
<span class="quotelev1">&gt;                 MCA coll: parameter &quot;coll_tuned_use_dynamic_rules&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Switch used to decide if we use static
</span><br>
<span class="quotelev1">&gt; (compiled/if statements) or dynamic (built at runtime) decision function
</span><br>
<span class="quotelev1">&gt; rules
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_initial_size&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Initial MPI-2 IO request freelist size
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_max_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Max size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_freelist_increment&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;16&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment size of the MPI-2 IO request freelist
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the io
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the io framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter &quot;io_romio_delete_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delete priority of the io romio component
</span><br>
<span class="quotelev1">&gt;                   MCA io: parameter
</span><br>
<span class="quotelev1">&gt; &quot;io_romio_enable_parallel_optimizations&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable set of Open MPI-added options to improve
</span><br>
<span class="quotelev1">&gt; collective file i/o performance
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mpool
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mpool framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_rcache_name&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;vma&quot;)
</span><br>
<span class="quotelev1">&gt;                           The name of the registration cache the mpool
</span><br>
<span class="quotelev1">&gt; should use
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_rcache_size_limit&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           the maximum size of registration cache in bytes.
</span><br>
<span class="quotelev1">&gt; 0 is unlimited (default 0)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_print_stats&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           print pool usage statistics at the end of the run
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_rdma_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;bucket&quot;)
</span><br>
<span class="quotelev1">&gt;                           Name of allocator component to use with sm mpool
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_max_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;536870912&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_min_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;134217728&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum size of the sm mpool shared memory file
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_per_peer_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;33554432&quot;)
</span><br>
<span class="quotelev1">&gt;                           Size (in bytes) to allocate per local peer in the
</span><br>
<span class="quotelev1">&gt; sm mpool shared memory file, bounded by min_size and max_size
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_sm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_use_mem_hooks&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           use memory hooks for deregistering freed memory
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_use_mem_hooks&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           (deprecated, use mpool_base_use_mem_hooks)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_base_disable_sbrk&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           use mallopt to override calling sbrk (doesn't
</span><br>
<span class="quotelev1">&gt; return memory to OS!)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: parameter &quot;mpool_disable_sbrk&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           (deprecated, use mca_mpool_base_disable_sbrk)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pml
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pml framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_num&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                           Initial size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_max&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum size of request free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_free_list_inc&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of elements to add when growing request
</span><br>
<span class="quotelev1">&gt; free lists
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_cm_priority&quot; (current value: &quot;30&quot;)
</span><br>
<span class="quotelev1">&gt;                           CM PML selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_num&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_max&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_free_list_inc&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;20&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_eager_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_send_pipeline_depth&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;3&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: parameter &quot;pml_ob1_recv_pipeline_depth&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;4&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the bml
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the bml framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_show_unreach_errors&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Show error message when procs are unreachable
</span><br>
<span class="quotelev1">&gt;                  MCA bml: parameter &quot;bml_r2_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; rcache framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rcache framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: parameter &quot;rcache_vma_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If btl_base_debug is 1 standard debug is output,
</span><br>
<span class="quotelev1">&gt; if &gt; 1 verbose debug is output
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the btl
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the btl framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_num&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of fragments by default
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_max&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_free_list_inc&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                           Increment by this number of fragments
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_eager_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                           Eager size fragmeng (before the rendez-vous
</span><br>
<span class="quotelev1">&gt; ptotocol)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_min_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                           Minimum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_send_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;262144&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size after the rendez-vous
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_min_rdma_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_max_rdma_size&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum fragment size for the RDMA transfer
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                           Device exclusivity
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_flags&quot; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Active behavior flags
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_self_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_num&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_max&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_free_list_inc&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;64&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;65535&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_latency&quot; (current value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_procs&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_sm_extra_procs&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;2&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_mpool&quot; (current value: &quot;sm&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_eager_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_max_frag_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;32768&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_size_of_cb_queue&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_cb_lazy_free_freq&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;120&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_sm_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;lo&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_num&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;8&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_max&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_free_list_inc&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;32&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_endpoint_cache&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;30720&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_send_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_send_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_min_rdma_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_max_rdma_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_flags&quot; (current value: &quot;122&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_include&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_exclude&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: parameter &quot;btl_base_warn_component_unused&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           This parameter is used to turn on warning
</span><br>
<span class="quotelev1">&gt; messages when certain NICs are not used
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the mtl
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA mtl: parameter &quot;mtl_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the mtl framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the topo
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: parameter &quot;topo_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the topo framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the osc
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the osc framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_no_locks&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable optimizations available only if MPI_LOCK
</span><br>
<span class="quotelev1">&gt; is not used.
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_eager_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;16384&quot;)
</span><br>
<span class="quotelev1">&gt;                           Max size of eagerly sent data
</span><br>
<span class="quotelev1">&gt;                  MCA osc: parameter &quot;osc_pt2pt_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the
</span><br>
<span class="quotelev1">&gt; errmgr framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_hnp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_hnp_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_orted_debug&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_orted_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_proxy_debug&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;               MCA errmgr: parameter &quot;errmgr_proxy_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_maxsize&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_base_blocksize&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the gpr
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_null_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_proxy_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_debug&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_isolate&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: parameter &quot;gpr_replica_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_window_size&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;4096&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_base_service&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the iof
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_proxy_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_proxy_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_svc_debug&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: parameter &quot;iof_svc_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the ns
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_maxsize&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_blocksize&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_proxy_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_isolate&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_maxsize&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;2147483647&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_blocksize&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;512&quot;)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: parameter &quot;ns_replica_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the oob
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the oob framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_limit&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_peer_retries&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;60&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_sndbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_rcvbuf&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;131072&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_include&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to use
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_if_exclude&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Comma-delimited list of TCP interfaces to exclude
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_connect_sleep&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable (1) / disable (0) random sleep for
</span><br>
<span class="quotelev1">&gt; connection wireup
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_mode&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;event&quot;)
</span><br>
<span class="quotelev1">&gt;                           Mode for HNP to accept incoming connections:
</span><br>
<span class="quotelev1">&gt; event, listen_thread
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_thread_max_queue&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           High water mark for queued accepted socket list
</span><br>
<span class="quotelev1">&gt; size
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_listen_thread_max_time&quot;
</span><br>
<span class="quotelev1">&gt; (current value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Maximum amount of time (in milliseconds) to wait
</span><br>
<span class="quotelev1">&gt; between processing accepted socket list
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_accept_spin_count&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Number of times to let accept return EWOULDBLOCK
</span><br>
<span class="quotelev1">&gt; before updating accepted socket list
</span><br>
<span class="quotelev1">&gt;                  MCA oob: parameter &quot;oob_tcp_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_dash_host_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;5&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for the dash_host RAS
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_debug&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging output for the gridengine ras
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the gridengine ras component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output for the gridengine ras
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_gridengine_show_jobid&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Show the JOB_ID of the Grid Engine job
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_localhost_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for the localhost RAS
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                  MCA ras: parameter &quot;ras_slurm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the slurm ras component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_debug&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for hostfile RDS component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_path&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;/usr/local/etc/openmpi-default-hostfile&quot;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Host filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_hostfile_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_proxy_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_debug&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for resfile RDS component
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_name&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           ORTE Resource filename
</span><br>
<span class="quotelev1">&gt;                  MCA rds: parameter &quot;rds_resfile_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_verbose&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rmaps framework
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_schedule_policy&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;unspec&quot;)
</span><br>
<span class="quotelev1">&gt;                           Scheduling Policy for RMAPS. [slot | node]
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_pernode&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Launch one ppn as directed
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_n_pernode&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;-1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Launch n procs/node
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_schedule_local&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If false, allow scheduling MPI applications on
</span><br>
<span class="quotelev1">&gt; the same node as mpirun (default).  If true, do not schedule any MPI
</span><br>
<span class="quotelev1">&gt; applications on
</span><br>
<span class="quotelev1">&gt;                           the same node as mpirun
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_base_no_oversubscribe&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If true, then do not allow oversubscription of
</span><br>
<span class="quotelev1">&gt; nodes - mpirun will return an error if there aren't enough nodes to launch
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev1">&gt;                           processes without oversubscribing
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rmaps
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_debug&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Toggle debug output for Round Robin RMAPS
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: parameter &quot;rmaps_round_robin_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Selection priority for Round Robin RMAPS
</span><br>
<span class="quotelev1">&gt; component
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rmgr
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_proxy_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: parameter &quot;rmgr_urm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the rml
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the rml framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: parameter &quot;rml_oob_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_base_reuse_daemons&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           If nonzero, reuse daemons to launch dynamically
</span><br>
<span class="quotelev1">&gt; spawned processes.  If zero, do not reuse daemons (default)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the pls
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the pls framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_debug&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of gridengine pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_verbose&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable verbose output of the gridengine qrsh
</span><br>
<span class="quotelev1">&gt; -inherit command
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;100&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the gridengine pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_gridengine_orted&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command name that the gridengine pls
</span><br>
<span class="quotelev1">&gt; component will invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_proxy_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Whether or not to enable debugging output for the
</span><br>
<span class="quotelev1">&gt; rsh pls component (0 or 1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_num_concurrent&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;128&quot;)
</span><br>
<span class="quotelev1">&gt;                           How many pls_rsh_agent instances to invoke
</span><br>
<span class="quotelev1">&gt; concurrently (must be &gt; 0)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_force_rsh&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Force the launcher to always use rsh, even for
</span><br>
<span class="quotelev1">&gt; local daemons
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_orted&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command name that the rsh pls component will
</span><br>
<span class="quotelev1">&gt; invoke for the ORTE daemon
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;10&quot;)
</span><br>
<span class="quotelev1">&gt;                           Priority of the rsh pls component
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_delay&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           Delay (in seconds) between invocations of the
</span><br>
<span class="quotelev1">&gt; remote agent, but only used when the &quot;debug&quot; MCA parameter is true, or the
</span><br>
<span class="quotelev1">&gt; top-level
</span><br>
<span class="quotelev1">&gt;                           MCA debugging is enabled (otherwise this value is
</span><br>
<span class="quotelev1">&gt; ignored)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_reap&quot; (current value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, wait for all the processes to
</span><br>
<span class="quotelev1">&gt; complete before exiting.  Otherwise, quit immediately -- without waiting
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt;                           confirmation that all other processes in the job
</span><br>
<span class="quotelev1">&gt; have completed.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_assume_same_shell&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;1&quot;)
</span><br>
<span class="quotelev1">&gt;                           If set to 1, assume that the shell on the remote
</span><br>
<span class="quotelev1">&gt; node is the same as the shell on the local node.  Otherwise, probe for what
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;                           remote shell.
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_rsh_agent&quot; (current value: &quot;ssh :
</span><br>
<span class="quotelev1">&gt; rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                           The command used to launch executables on remote
</span><br>
<span class="quotelev1">&gt; nodes (typically either &quot;ssh&quot; or &quot;rsh&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_debug&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Enable debugging of slurm pls
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;75&quot;)
</span><br>
<span class="quotelev1">&gt;                           Default selection priority
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_orted&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;orted&quot;)
</span><br>
<span class="quotelev1">&gt;                           Command to use to start proxy orted
</span><br>
<span class="quotelev1">&gt;                  MCA pls: parameter &quot;pls_slurm_args&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Custom arguments to srun
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt;                           Default selection set of components for the sds
</span><br>
<span class="quotelev1">&gt; framework (&lt;none&gt; means &quot;use all components that can be found&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_base_verbose&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                           Verbosity level for the sds framework (0 = no
</span><br>
<span class="quotelev1">&gt; verbosity)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_env_priority&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_pipe_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_seed_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_singleton_priority&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: parameter &quot;sds_slurm_priority&quot; (current value:
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;)
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
<li><strong>Next message:</strong> <a href="4041.php">Tobias Burnus: "[OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>Previous message:</strong> <a href="4039.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>In reply to:</strong> <a href="4013.php">Murat Knecht: "[OMPI users] Segmentation fault when spawning"</a>
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

<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 13 03:41:47 2007" -->
<!-- isoreceived="20070413074147" -->
<!-- sent="Fri, 13 Apr 2007 09:41:42 +0200" -->
<!-- isosent="20070413074142" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Get some errors when try to run hpl" -->
<!-- id="461F3436.7000008_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BEFC9E97-C4A7-43E7-B974-A2043723D76B_at_sara.nl" -->
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
<strong>From:</strong> Bas van der Vlies (<em>basv_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-13 03:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3073.php">Christine Kreuzer: "[OMPI users] orte_init failed"</a>
<li><strong>Previous message:</strong> <a href="3071.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3059.php">Bas van der Vlies: "[OMPI users] Get some errors when try to run hpl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4049.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4049.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can somebody explain these errors or did i something stupid?
<br>
<p>I have done some more testing and i can run with a very small problem 
<br>
sizes the maximum is 1440 (looks like a mtu problem).
<br>
<p>If i increase the value to 1441 it crashes.
<br>
<p>=== output ==
<br>
<p>============================================================================
<br>
T/V        N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR01L2C8  1440    60   2     4               0.19          1.056e+01
<br>
<p><p><p><p><p>Bas van der Vlies wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I am trying to run a xhpl (linpack) and after a while a get these  
</span><br>
<span class="quotelev1">&gt; errors.  I use a simple blas library
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt; B-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x317700 (3241728) extent  
</span><br>
<span class="quotelev1">&gt; 8 (size 34080)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x326180  
</span><br>
<span class="quotelev1">&gt; (3301760) extent 8 (size 34080)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x334c00  
</span><br>
<span class="quotelev1">&gt; (3361792) extent 8 (size 34080)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x343680  
</span><br>
<span class="quotelev1">&gt; (3421824) extent 8 (size 34080)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x352100  
</span><br>
<span class="quotelev1">&gt; (3481856) extent 8 (size 34080)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x360b80  
</span><br>
<span class="quotelev1">&gt; (3541888) extent 8 (size 34080)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 3661 disp 0x609327c0  
</span><br>
<span class="quotelev1">&gt; (1620256704) extent 8 (size 29288)
</span><br>
<span class="quotelev1">&gt; -------G---[---][---]   MPI_END_LOOP prev 61 elements first elem  
</span><br>
<span class="quotelev1">&gt; displacement 0 size of data 2074088
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ib-r5n6.irc.sara.nl:11140] ../../ompi/datatype/datatype_pack.h:38
</span><br>
<span class="quotelev1">&gt;          Pointer 0xa7f36278 size 1960 is outside  
</span><br>
<span class="quotelev1">&gt; [0xa7bcd980,0x85073a8] for
</span><br>
<span class="quotelev1">&gt;                  base ptr 0xa7bcd980 count 1 and data
</span><br>
<span class="quotelev1">&gt;                  [ib-r5n6.irc.sara.nl:11140] Datatype 0x8462888[]  
</span><br>
<span class="quotelev1">&gt; size 2074088 align 4 id 0 length 184 used 61
</span><br>
<span class="quotelev1">&gt;                  true_lb 0 true_ub 1620285992 (true_extent  
</span><br>
<span class="quotelev1">&gt; 1620285992) lb 0 ub 1620285992 (extent 1620285992)
</span><br>
<span class="quotelev1">&gt;                  nbElems 2592type 11 count ints 62 count disp 61  
</span><br>
<span class="quotelev1">&gt; count datatype 61
</span><br>
<span class="quotelev1">&gt;                  ints:     61 4200 4200 4200 4200 4200 4200 4200 4200  
</span><br>
<span class="quotelev1">&gt; 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200  
</span><br>
<span class="quotelev1">&gt; 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200  
</span><br>
<span class="quotelev1">&gt; 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200  
</span><br>
<span class="quotelev1">&gt; 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 3661
</span><br>
<span class="quotelev1">&gt;                  MPI_Aint: 0 60032 120064 180096 240128 300160 360192  
</span><br>
<span class="quotelev1">&gt; 420224 480256 540288 600320 660352 720384 780416 840448 900480 960512  
</span><br>
<span class="quotelev1">&gt; 1020544 1080576 1140608 1200640 1260672 1320704 1380736 1440768  
</span><br>
<span class="quotelev1">&gt; 1500800 1560832 1620864 1680896 1740928 1800960 1860992 1921024  
</span><br>
<span class="quotelev1">&gt; 1981056 2041088 2101120 2161152 2221184 2281216 2341248 2401280  
</span><br>
<span class="quotelev1">&gt; 2461312 2521344 2581376 2641408 2701440 2761472 2821504 2881536  
</span><br>
<span class="quotelev1">&gt; 2941568 3001600 3061632 3121664 3181696 3241728 3301760 3361792  
</span><br>
<span class="quotelev1">&gt; 3421824 3481856 3541888 1620043488
</span><br>
<span class="quotelev1">&gt;                  types:    (61 * MPI_DOUBLE)
</span><br>
<span class="quotelev1">&gt;                  61 loops 0 flags 2 (commited )-c-----G---[---][---]
</span><br>
<span class="quotelev1">&gt;                     contain MPI_DOUBLE
</span><br>
<span class="quotelev1">&gt; cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x352100  
</span><br>
<span class="quotelev1">&gt; (3481856) extent 8 (size 34080)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x360b80  
</span><br>
<span class="quotelev1">&gt; (3541888) extent 8 (size 34080)
</span><br>
<span class="quotelev1">&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 3661 disp 0x609327c0  
</span><br>
<span class="quotelev1">&gt; (1620256704) extent 8 (size 29288)
</span><br>
<span class="quotelev1">&gt; -------G---[---][---]   MPI_END_LOOP prev 61 elements first elem  
</span><br>
<span class="quotelev1">&gt; displacement 0 size of data 2074088
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ib-r5n6.irc.sara.nl:11140] ../../ompi/datatype/datatype_pack.h:38
</span><br>
<span class="quotelev1">&gt;          Pointer 0x8500140 size 29288 is outside  
</span><br>
<span class="quotelev1">&gt; [0xa7bcd980,0x85073a8] for
</span><br>
<span class="quotelev1">&gt;                  base ptr 0xa7bcd980 count 1 and data
</span><br>
<span class="quotelev1">&gt;                  [ib-r5n6.irc.sara.nl:11140] Datatype 0x8462888[]  
</span><br>
<span class="quotelev1">&gt; size 2074088 align 4 id 0 length 184 used 61
</span><br>
<span class="quotelev1">&gt;                  true_lb 0 true_ub 1620285992 (true_extent  
</span><br>
<span class="quotelev1">&gt; 1620285992) lb 0 ub 1620285992 (extent 1620285992)
</span><br>
<span class="quotelev1">&gt;                  nbElems 259261 loops 0 flags 2 (commited )-c-----G--- 
</span><br>
<span class="quotelev1">&gt; [---][---]
</span><br>
<span class="quotelev1">&gt;                     contain MPI_DOUBLE
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info:
</span><br>
<span class="quotelev1">&gt; {{{
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.2.1a0r14297M
</span><br>
<span class="quotelev1">&gt;     Open MPI SVN revision: r14297M
</span><br>
<span class="quotelev1">&gt;                  Open RTE: 1.2.1a0r14297M
</span><br>
<span class="quotelev1">&gt;     Open RTE SVN revision: r14297M
</span><br>
<span class="quotelev1">&gt;                      OPAL: 1.2.1a0r14297M
</span><br>
<span class="quotelev1">&gt;         OPAL SVN revision: r14297M
</span><br>
<span class="quotelev1">&gt;                    Prefix: /usr/local/gnu-openmpi-1.2.1p0
</span><br>
<span class="quotelev1">&gt; Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt;             Configured by: root
</span><br>
<span class="quotelev1">&gt;             Configured on: Wed Apr 11 13:11:09 CEST 2007
</span><br>
<span class="quotelev1">&gt;            Configure host: ib-r1n1.irc.sara.nl
</span><br>
<span class="quotelev1">&gt;                  Built by: root
</span><br>
<span class="quotelev1">&gt;                  Built on: Wed Apr 11 13:16:36 CEST 2007
</span><br>
<span class="quotelev1">&gt;                Built host: ib-r1n1.irc.sara.nl
</span><br>
<span class="quotelev1">&gt;                C bindings: yes
</span><br>
<span class="quotelev1">&gt;              C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;                C compiler: gcc
</span><br>
<span class="quotelev1">&gt;       C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;              C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;     C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;        Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;    Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;        Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;    Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;               C profiling: yes
</span><br>
<span class="quotelev1">&gt;             C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;            Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;    Internal debug support: yes
</span><br>
<span class="quotelev1">&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: yes
</span><br>
<span class="quotelev1">&gt; Memory debugging support: yes
</span><br>
<span class="quotelev1">&gt;           libltdl support: yes
</span><br>
<span class="quotelev1">&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: yes
</span><br>
<span class="quotelev1">&gt;             MCA backtrace: execinfo (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;             MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: openib (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: openib (MCA v1.0, API v1.0.1, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev1">&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.1
</span><br>
<span class="quotelev1">&gt; }}}
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Bas van der Vlies
</span><br>
<span class="quotelev1">&gt; basv_at_[hidden]
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
<p><p><pre>
-- 
********************************************************************
*                                                                  *
*  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
*  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
*  Kruislaan 415                         fax:    +31 20 6683167    *
*  1098 SJ Amsterdam                                               *
*                                                                  *
********************************************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3073.php">Christine Kreuzer: "[OMPI users] orte_init failed"</a>
<li><strong>Previous message:</strong> <a href="3071.php">Bas van der Vlies: "Re: [OMPI users] openmpi and Torque"</a>
<li><strong>In reply to:</strong> <a href="3059.php">Bas van der Vlies: "[OMPI users] Get some errors when try to run hpl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4049.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/09/4049.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
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

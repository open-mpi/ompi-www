<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 08:10:50 2007" -->
<!-- isoreceived="20070920121050" -->
<!-- sent="Thu, 20 Sep 2007 14:10:43 +0200" -->
<!-- isosent="20070920121043" -->
<!-- name="Bas van der Vlies" -->
<!-- email="basv_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Get some errors when try to run hpl" -->
<!-- id="46F26343.3020505_at_sara.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="461F3436.7000008_at_sara.nl" -->
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
<strong>Date:</strong> 2007-09-20 08:10:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4050.php">Michael: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<li><strong>Previous message:</strong> <a href="4048.php">Tim Prins: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3072.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To answer my self. I have just installed OFED 1.2.5.1 and openmpi 1.2.3. 
<br>
With this combo i have no errors wirh a linpack run (hpl) ;-)
<br>
<p>Regards
<br>
<p>Bas van der Vlies wrote:
<br>
<span class="quotelev1">&gt; Can somebody explain these errors or did i something stupid?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have done some more testing and i can run with a very small problem
</span><br>
<span class="quotelev1">&gt; sizes the maximum is 1440 (looks like a mtu problem).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If i increase the value to 1441 it crashes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; === output ==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; T/V        N    NB     P     Q               Time             Gflops
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WR01L2C8  1440    60   2     4               0.19          1.056e+01
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
<span class="quotelev1">&gt; Bas van der Vlies wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I am trying to run a xhpl (linpack) and after a while a get these
</span><br>
<span class="quotelev2">&gt;&gt; errors.  I use a simple blas library
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt; B-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x317700 (3241728) extent
</span><br>
<span class="quotelev2">&gt;&gt; 8 (size 34080)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x326180
</span><br>
<span class="quotelev2">&gt;&gt; (3301760) extent 8 (size 34080)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x334c00
</span><br>
<span class="quotelev2">&gt;&gt; (3361792) extent 8 (size 34080)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x343680
</span><br>
<span class="quotelev2">&gt;&gt; (3421824) extent 8 (size 34080)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x352100
</span><br>
<span class="quotelev2">&gt;&gt; (3481856) extent 8 (size 34080)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x360b80
</span><br>
<span class="quotelev2">&gt;&gt; (3541888) extent 8 (size 34080)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 3661 disp 0x609327c0
</span><br>
<span class="quotelev2">&gt;&gt; (1620256704) extent 8 (size 29288)
</span><br>
<span class="quotelev2">&gt;&gt; -------G---[---][---]   MPI_END_LOOP prev 61 elements first elem
</span><br>
<span class="quotelev2">&gt;&gt; displacement 0 size of data 2074088
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ib-r5n6.irc.sara.nl:11140] ../../ompi/datatype/datatype_pack.h:38
</span><br>
<span class="quotelev2">&gt;&gt;          Pointer 0xa7f36278 size 1960 is outside
</span><br>
<span class="quotelev2">&gt;&gt; [0xa7bcd980,0x85073a8] for
</span><br>
<span class="quotelev2">&gt;&gt;                  base ptr 0xa7bcd980 count 1 and data
</span><br>
<span class="quotelev2">&gt;&gt;                  [ib-r5n6.irc.sara.nl:11140] Datatype 0x8462888[]
</span><br>
<span class="quotelev2">&gt;&gt; size 2074088 align 4 id 0 length 184 used 61
</span><br>
<span class="quotelev2">&gt;&gt;                  true_lb 0 true_ub 1620285992 (true_extent
</span><br>
<span class="quotelev2">&gt;&gt; 1620285992) lb 0 ub 1620285992 (extent 1620285992)
</span><br>
<span class="quotelev2">&gt;&gt;                  nbElems 2592type 11 count ints 62 count disp 61
</span><br>
<span class="quotelev2">&gt;&gt; count datatype 61
</span><br>
<span class="quotelev2">&gt;&gt;                  ints:     61 4200 4200 4200 4200 4200 4200 4200 4200
</span><br>
<span class="quotelev2">&gt;&gt; 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200
</span><br>
<span class="quotelev2">&gt;&gt; 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200
</span><br>
<span class="quotelev2">&gt;&gt; 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200
</span><br>
<span class="quotelev2">&gt;&gt; 4200 4200 4200 4200 4200 4200 4200 4200 4200 4200 3661
</span><br>
<span class="quotelev2">&gt;&gt;                  MPI_Aint: 0 60032 120064 180096 240128 300160 360192
</span><br>
<span class="quotelev2">&gt;&gt; 420224 480256 540288 600320 660352 720384 780416 840448 900480 960512
</span><br>
<span class="quotelev2">&gt;&gt; 1020544 1080576 1140608 1200640 1260672 1320704 1380736 1440768
</span><br>
<span class="quotelev2">&gt;&gt; 1500800 1560832 1620864 1680896 1740928 1800960 1860992 1921024
</span><br>
<span class="quotelev2">&gt;&gt; 1981056 2041088 2101120 2161152 2221184 2281216 2341248 2401280
</span><br>
<span class="quotelev2">&gt;&gt; 2461312 2521344 2581376 2641408 2701440 2761472 2821504 2881536
</span><br>
<span class="quotelev2">&gt;&gt; 2941568 3001600 3061632 3121664 3181696 3241728 3301760 3361792
</span><br>
<span class="quotelev2">&gt;&gt; 3421824 3481856 3541888 1620043488
</span><br>
<span class="quotelev2">&gt;&gt;                  types:    (61 * MPI_DOUBLE)
</span><br>
<span class="quotelev2">&gt;&gt;                  61 loops 0 flags 2 (commited )-c-----G---[---][---]
</span><br>
<span class="quotelev2">&gt;&gt;                     contain MPI_DOUBLE
</span><br>
<span class="quotelev2">&gt;&gt; cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x352100
</span><br>
<span class="quotelev2">&gt;&gt; (3481856) extent 8 (size 34080)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 4260 disp 0x360b80
</span><br>
<span class="quotelev2">&gt;&gt; (3541888) extent 8 (size 34080)
</span><br>
<span class="quotelev2">&gt;&gt; -cC---P-DB-[ C ][ERR]     MPI_DOUBLE count 3661 disp 0x609327c0
</span><br>
<span class="quotelev2">&gt;&gt; (1620256704) extent 8 (size 29288)
</span><br>
<span class="quotelev2">&gt;&gt; -------G---[---][---]   MPI_END_LOOP prev 61 elements first elem
</span><br>
<span class="quotelev2">&gt;&gt; displacement 0 size of data 2074088
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ib-r5n6.irc.sara.nl:11140] ../../ompi/datatype/datatype_pack.h:38
</span><br>
<span class="quotelev2">&gt;&gt;          Pointer 0x8500140 size 29288 is outside
</span><br>
<span class="quotelev2">&gt;&gt; [0xa7bcd980,0x85073a8] for
</span><br>
<span class="quotelev2">&gt;&gt;                  base ptr 0xa7bcd980 count 1 and data
</span><br>
<span class="quotelev2">&gt;&gt;                  [ib-r5n6.irc.sara.nl:11140] Datatype 0x8462888[]
</span><br>
<span class="quotelev2">&gt;&gt; size 2074088 align 4 id 0 length 184 used 61
</span><br>
<span class="quotelev2">&gt;&gt;                  true_lb 0 true_ub 1620285992 (true_extent
</span><br>
<span class="quotelev2">&gt;&gt; 1620285992) lb 0 ub 1620285992 (extent 1620285992)
</span><br>
<span class="quotelev2">&gt;&gt;                  nbElems 259261 loops 0 flags 2 (commited )-c-----G---
</span><br>
<span class="quotelev2">&gt;&gt; [---][---]
</span><br>
<span class="quotelev2">&gt;&gt;                     contain MPI_DOUBLE
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info:
</span><br>
<span class="quotelev2">&gt;&gt; {{{
</span><br>
<span class="quotelev2">&gt;&gt;                 Open MPI: 1.2.1a0r14297M
</span><br>
<span class="quotelev2">&gt;&gt;     Open MPI SVN revision: r14297M
</span><br>
<span class="quotelev2">&gt;&gt;                  Open RTE: 1.2.1a0r14297M
</span><br>
<span class="quotelev2">&gt;&gt;     Open RTE SVN revision: r14297M
</span><br>
<span class="quotelev2">&gt;&gt;                      OPAL: 1.2.1a0r14297M
</span><br>
<span class="quotelev2">&gt;&gt;         OPAL SVN revision: r14297M
</span><br>
<span class="quotelev2">&gt;&gt;                    Prefix: /usr/local/gnu-openmpi-1.2.1p0
</span><br>
<span class="quotelev2">&gt;&gt; Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;             Configured by: root
</span><br>
<span class="quotelev2">&gt;&gt;             Configured on: Wed Apr 11 13:11:09 CEST 2007
</span><br>
<span class="quotelev2">&gt;&gt;            Configure host: ib-r1n1.irc.sara.nl
</span><br>
<span class="quotelev2">&gt;&gt;                  Built by: root
</span><br>
<span class="quotelev2">&gt;&gt;                  Built on: Wed Apr 11 13:16:36 CEST 2007
</span><br>
<span class="quotelev2">&gt;&gt;                Built host: ib-r1n1.irc.sara.nl
</span><br>
<span class="quotelev2">&gt;&gt;                C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;              C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran90 bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev2">&gt;&gt;                C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;       C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;              C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;     C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran77 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;        Fortran90 compiler: gfortran
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev2">&gt;&gt;               C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;             C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;       Fortran90 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;            C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;            Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt;    Internal debug support: yes
</span><br>
<span class="quotelev2">&gt;&gt;       MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt; Memory profiling support: yes
</span><br>
<span class="quotelev2">&gt;&gt; Memory debugging support: yes
</span><br>
<span class="quotelev2">&gt;&gt;           libltdl support: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Heterogeneous support: yes
</span><br>
<span class="quotelev2">&gt;&gt; mpirun default --prefix: yes
</span><br>
<span class="quotelev2">&gt;&gt;             MCA backtrace: execinfo (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA maffinity: first_use (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA timer: linux (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;             MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: basic (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: self (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA coll: tuned (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA io: romio (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: openib (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA mpool: sm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA bml: r2 (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: rb (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rcache: vma (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: openib (MCA v1.0, API v1.0.1, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: self (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: sm (MCA v1.0, API v1.0.1, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA btl: tcp (MCA v1.0, API v1.0.1, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA topo: unity (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: hnp (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: orted (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA errmgr: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: null (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA gpr: replica (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: proxy (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA iof: svc (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                    MCA ns: replica (MCA v1.0, API v2.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: dash_host (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: gridengine (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: localhost (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: slurm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA ras: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: hostfile (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rds: resfile (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA rmaps: round_robin (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rmgr: proxy (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA rmgr: urm (MCA v1.0, API v2.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: gridengine (MCA v1.0, API v1.3, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: proxy (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: rsh (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: slurm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA pls: tm (MCA v1.0, API v1.3, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: env (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: pipe (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: seed (MCA v1.0, API v1.0, Component v1.2.1)
</span><br>
<span class="quotelev2">&gt;&gt;                   MCA sds: singleton (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt; v1.2.1
</span><br>
<span class="quotelev2">&gt;&gt; }}}
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Bas van der Vlies
</span><br>
<span class="quotelev2">&gt;&gt; basv_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ********************************************************************
</span><br>
<span class="quotelev1">&gt; *                                                                  *
</span><br>
<span class="quotelev1">&gt; *  Bas van der Vlies                     e-mail: basv_at_[hidden]      *
</span><br>
<span class="quotelev1">&gt; *  SARA - Academic Computing Services    phone:  +31 20 592 8012   *
</span><br>
<span class="quotelev1">&gt; *  Kruislaan 415                         fax:    +31 20 6683167    *
</span><br>
<span class="quotelev1">&gt; *  1098 SJ Amsterdam                                               *
</span><br>
<span class="quotelev1">&gt; *                                                                  *
</span><br>
<span class="quotelev1">&gt; ********************************************************************
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
<li><strong>Next message:</strong> <a href="4050.php">Michael: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<li><strong>Previous message:</strong> <a href="4048.php">Tim Prins: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3072.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
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

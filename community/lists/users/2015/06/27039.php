<?
$subject_val = "[OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  4 05:48:54 2015" -->
<!-- isoreceived="20150604094854" -->
<!-- sent="Thu, 04 Jun 2015 11:48:50 +0200" -->
<!-- isosent="20150604094850" -->
<!-- name="Ren&#195;&#169; Oertel" -->
<!-- email="rene.oertel_at_[hidden]" -->
<!-- subject="[OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations" -->
<!-- id="55701F02.302_at_cs.tu-chemnitz.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations<br>
<strong>From:</strong> Ren&#195;&#169; Oertel (<em>rene.oertel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-04 05:48:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27040.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Previous message:</strong> <a href="27038.php">Timur Ismagilov: "Re: [OMPI users] OMPI yalla vs impi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27041.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Reply:</strong> <a href="27041.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers and users,
<br>
<p>if I'm not totally wrong then I found a bug in the Open MPI ptmalloc2
<br>
memory module in combination with recent GCC code optimizations.
<br>
<p>Affected Open MPI releases:
<br>
==========================
<br>
<p>All (non-debug) releases using the
<br>
opal/mca/memory/linux/memory_linux_ptmalloc2.c (2010-05-11)
<br>
implementation and probably all preceding implementations using GNU C
<br>
Memory Allocation Hooks on systems with HAVE_POSIX_MEMALIGN *and*
<br>
<span class="quotelev1">&gt;=GCC-4.9 with optimization (-O3) turned on.
</span><br>
<p>Severity:
<br>
========
<br>
<p>Critical for all affected Open MPI releases mentioned before.
<br>
<p>Problem description:
<br>
===================
<br>
<p>The critical code in question is in
<br>
opal/mca/memory/linux/memory_linux_ptmalloc2.c:
<br>
#####
<br>
92 #if HAVE_POSIX_MEMALIGN
<br>
93     /* Double check for posix_memalign, too */
<br>
94     if (mca_memory_linux_component.memalign_invoked) {
<br>
95         mca_memory_linux_component.memalign_invoked = false;
<br>
96         if (0 != posix_memalign(&amp;p, sizeof(void*), 1024 * 1024)) {
<br>
97             return OPAL_ERR_IN_ERRNO;
<br>
98         }
<br>
99         free(p);
<br>
100     }
<br>
101 #endif
<br>
102
<br>
103     if (mca_memory_linux_component.malloc_invoked &amp;&amp;
<br>
104         mca_memory_linux_component.realloc_invoked &amp;&amp;
<br>
105         mca_memory_linux_component.memalign_invoked &amp;&amp;
<br>
106         mca_memory_linux_component.free_invoked) {
<br>
107         /* Happiness; our functions were invoked */
<br>
108         val |= OPAL_MEMORY_FREE_SUPPORT | OPAL_MEMORY_CHUNK_SUPPORT;
<br>
109     }
<br>
[...]
<br>
121     /* All done */
<br>
122     if (val &gt; 0) {
<br>
123         opal_mem_hooks_set_support(val);
<br>
124         return OPAL_SUCCESS;
<br>
125     }
<br>
#####
<br>
<p>The code at lines 103-109 is legally optimized away with &gt;=GCC-4.9 and
<br>
optimizations turned on, because line 105 could never become true with
<br>
the local knowledge of the compiler/optimizer.
<br>
If mca_memory_linux_component.memalign_invoked == true at line 92, it
<br>
would be set to false at line 95.
<br>
If mca_memory_linux_component.memalign_invoked == false at line 92, it
<br>
would be false at line 103, too.
<br>
In both cases, the if at line 103-106 could never be evaluated to true
<br>
and opal_mem_hooks_set_support is never called with
<br>
OPAL_MEMORY_FREE_SUPPORT | OPAL_MEMORY_CHUNK_SUPPORT resulting in
<br>
(silently) disabled mpi_leaved_pinned.
<br>
<p>In the global view this local assumption is not true, because
<br>
posix_memalign() in line 96 will call the hook public_mEMALIGn() in
<br>
opal/mca/memory/linux/malloc.c which in turn sets
<br>
mca_memory_linux_component.memalign_invoked = true.
<br>
As a result, the OPAL_MEMORY_*_SUPPORT would get configured correctly in
<br>
line 123 and so the opal_mem_hooks_support_level() used by
<br>
ompi/mca/btl/openib/btl_openib_component.c and indirectly by the
<br>
ompi/mca/mpool/grdma/mpool_grdma* module enables the usage of pinned memory.
<br>
<p>The optimization could be disabled by adding -fno-tree-partial-pre to
<br>
the CFLAGS in opal/mca/memory/linux/Makefile, but this is only a
<br>
temporary workaround.
<br>
<p>Patch:
<br>
=====
<br>
<p>The proposed patch is as follows, which alters the point-of-view of the
<br>
compiler's optimizer on the *_invoked variables used by different code
<br>
paths (memory_linux_ptmalloc2.c vs. malloc.c):
<br>
<p>#####
<br>
diff -rupN openmpi-1.8.5.org/opal/mca/memory/linux/memory_linux.h
<br>
openmpi-1.8.5/opal/mca/memory/linux/memory_linux.h
<br>
--- openmpi-1.8.5.org/opal/mca/memory/linux/memory_linux.h
<br>
2014-10-03 22:32:23.000000000 +0200
<br>
+++ openmpi-1.8.5/opal/mca/memory/linux/memory_linux.h  2015-06-04
<br>
10:01:44.941544282 +0200
<br>
@@ -33,11 +33,11 @@ typedef struct opal_memory_linux_compone
<br>
<p>&nbsp;#if MEMORY_LINUX_PTMALLOC2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Ptmalloc2-specific data */
<br>
-    bool free_invoked;
<br>
-    bool malloc_invoked;
<br>
-    bool realloc_invoked;
<br>
-    bool memalign_invoked;
<br>
-    bool munmap_invoked;
<br>
+    volatile bool free_invoked;
<br>
+    volatile bool malloc_invoked;
<br>
+    volatile bool realloc_invoked;
<br>
+    volatile bool memalign_invoked;
<br>
+    volatile bool munmap_invoked;
<br>
&nbsp;#endif
<br>
&nbsp;} opal_memory_linux_component_t;
<br>
<p>#####
<br>
<p>Additionally, a further patch should be applied generating a warning in
<br>
the GPUDirect module if leave_pinned is not available for some reason.
<br>
In this case, GPUDirect support should be disabled, because it runs
<br>
faster without (see Case 2 below).
<br>
<p>Symptoms:
<br>
========
<br>
<p>Very high latency with GPUDirect and fluctuating bandwidth with
<br>
InfiniBand transfers caused by run-time disabled mpi_leave_pinned.
<br>
<p>We are using OSU Micro Benchmarks 4.4.1 to show these GPUDirect latency
<br>
and multi-rail bandwidth peformance problems.
<br>
System specification: 2 nodes with 2x Intel E5-2670 processors, Mellanox
<br>
Connect-IB MCB194A-FCAT HCA (dual-port FDR, PCIe 3.0 x16) and NVIDIA
<br>
Tesla K40c GPU connected to different PCIe root complexes/CPUs.
<br>
Software: CentOS 6.6, Mellanox OFED 2.4, CUDA 7.0, GCC 4.9.2 (local
<br>
build), Open MPI 1.8.5 (local build)
<br>
<p>Without applied patch:
<br>
#####
<br>
# Case 1:
<br>
mpirun -report-bindings -display-map -map-by node -np 2 -mca
<br>
btl_openib_want_cuda_gdr 1 -x CUDA_VISIBLE_DEVICES=0
<br>
/exports/bin/osu-micro-benchmarks-4.4.1/openmpi/1.8.5/gcc/4.9.2/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_latency
<br>
-d cuda D D
<br>
&nbsp;Data for JOB [12959,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: e5-2670-1       Num slots: 16   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12959,1] App: 0 Process rank: 0
<br>
<p>&nbsp;Data for node: e5-2670-2       Num slots: 16   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12959,1] App: 0 Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
[e5-2670-1:09670] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.]
<br>
[e5-2670-2:06302] MCW rank 1 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.]
<br>
# OSU MPI-CUDA Latency Test v4.4.1
<br>
# Send Buffer on DEVICE (D) and Receive Buffer on DEVICE (D)
<br>
# Size          Latency (us)
<br>
0                       1.26
<br>
1                    1442.93
<br>
2                    1440.30
<br>
4                    1440.63
<br>
8                    1443.72
<br>
16                   1444.98
<br>
32                   1442.04
<br>
64                   1441.51
<br>
128                  1442.62
<br>
256                  1443.31
<br>
512                  1443.67
<br>
1024                 1446.23
<br>
2048                 1449.38
<br>
4096                 1458.05
<br>
8192                 1476.22
<br>
16384                1515.97
<br>
32768                  36.86
<br>
65536                  45.16
<br>
131072                 60.57
<br>
262144                 94.38
<br>
524288                130.83
<br>
1048576               199.23
<br>
2097152               328.85
<br>
4194304               603.71
<br>
##
<br>
# Case 2:
<br>
mpirun -report-bindings -display-map -map-by node -np 2 -mca
<br>
btl_openib_want_cuda_gdr 0 -x CUDA_VISIBLE_DEVICES=0
<br>
/exports/bin/osu-micro-benchmarks-4.4.1/openmpi/1.8.5/gcc/4.9.2/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_latency
<br>
-d cuda D D
<br>
&nbsp;Data for JOB [19644,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: e5-2670-1       Num slots: 16   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [19644,1] App: 0 Process rank: 0
<br>
<p>&nbsp;Data for node: e5-2670-2       Num slots: 16   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [19644,1] App: 0 Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
[e5-2670-1:23525] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.]
<br>
[e5-2670-2:08479] MCW rank 1 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.]
<br>
# OSU MPI-CUDA Latency Test v4.4.1
<br>
# Send Buffer on DEVICE (D) and Receive Buffer on DEVICE (D)
<br>
# Size          Latency (us)
<br>
0                       1.27
<br>
1                      14.83
<br>
2                      15.11
<br>
4                      14.82
<br>
8                      14.85
<br>
16                     15.14
<br>
32                     14.92
<br>
64                     15.00
<br>
128                    15.40
<br>
256                    15.52
<br>
512                    15.53
<br>
1024                   15.68
<br>
2048                   16.39
<br>
4096                   18.92
<br>
8192                   21.69
<br>
16384                  32.64
<br>
32768                  36.92
<br>
65536                  44.26
<br>
131072                 60.99
<br>
262144                 94.18
<br>
524288                130.59
<br>
1048576               199.84
<br>
2097152               328.17
<br>
4194304               575.35
<br>
##
<br>
# Case 3:
<br>
mpirun -report-bindings -display-map -map-by node -np 2 -mca
<br>
btl_openib_want_cuda_gdr 1 -x CUDA_VISIBLE_DEVICES=0
<br>
/exports/bin/osu-micro-benchmarks-4.4.1/openmpi/1.8.5/gcc/4.9.2/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_bw
<br>
<p>&nbsp;Data for JOB [12768,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: e5-2670-1       Num slots: 16   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12768,1] App: 0 Process rank: 0
<br>
<p>&nbsp;Data for node: e5-2670-2       Num slots: 16   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [12768,1] App: 0 Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
[e5-2670-1:09913] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.]
<br>
[e5-2670-2:06639] MCW rank 1 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.]
<br>
# OSU MPI-CUDA Bandwidth Test v4.4.1
<br>
# Send Buffer on HOST (H) and Receive Buffer on HOST (H)
<br>
# Size      Bandwidth (MB/s)
<br>
1                       1.09
<br>
2                       2.17
<br>
4                       4.31
<br>
8                       8.74
<br>
16                     16.67
<br>
32                     32.77
<br>
64                     65.24
<br>
128                   134.89
<br>
256                   268.24
<br>
512                   760.80
<br>
1024                 1436.22
<br>
2048                 2401.94
<br>
4096                 4501.21
<br>
8192                 5777.17
<br>
16384                5736.33
<br>
32768                6952.33
<br>
65536               10443.88
<br>
131072              11450.45
<br>
262144              11332.89
<br>
524288               8804.98
<br>
1048576              8820.94
<br>
2097152             11294.32
<br>
4194304             10869.27
<br>
#####
<br>
<p>Expected behavior With applied patch:
<br>
#####
<br>
# Case 4:
<br>
mpirun -report-bindings -display-map -map-by node -np 2 -mca
<br>
btl_openib_want_cuda_gdr 1 -x CUDA_VISIBLE_DEVICES=0
<br>
/exports/bin/osu-micro-benchmarks-4.4.1/openmpi/1.8.5/gcc/4.9.2/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_latency
<br>
-d cuda D D
<br>
&nbsp;Data for JOB [17394,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: e5-2670-1       Num slots: 16   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17394,1] App: 0 Process rank: 0
<br>
<p>&nbsp;Data for node: e5-2670-2       Num slots: 16   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17394,1] App: 0 Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
[e5-2670-1:21675] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.]
<br>
[e5-2670-2:06719] MCW rank 1 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.]
<br>
# OSU MPI-CUDA Latency Test v4.4.1
<br>
# Send Buffer on DEVICE (D) and Receive Buffer on DEVICE (D)
<br>
# Size          Latency (us)
<br>
0                       1.27
<br>
1                       6.52
<br>
2                       6.50
<br>
4                       6.50
<br>
8                       6.74
<br>
16                      6.51
<br>
32                      6.54
<br>
64                      6.52
<br>
128                     6.75
<br>
256                     7.18
<br>
512                     7.82
<br>
1024                   10.01
<br>
2048                   14.12
<br>
4096                   22.31
<br>
8192                   33.27
<br>
16384                  55.25
<br>
32768                  37.42
<br>
65536                  44.22
<br>
131072                 60.00
<br>
262144                 94.27
<br>
524288                130.41
<br>
1048576               198.48
<br>
2097152               328.50
<br>
4194304               601.53
<br>
##
<br>
# Case 5:
<br>
mpirun -report-bindings -display-map -map-by node -np 2 -mca
<br>
btl_openib_want_cuda_gdr 1 -x CUDA_VISIBLE_DEVICES=0
<br>
/exports/bin/osu-micro-benchmarks-4.4.1/openmpi/1.8.5/gcc/4.9.2/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_bw
<br>
<p>&nbsp;Data for JOB [17296,1] offset 0
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: e5-2670-1       Num slots: 16   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17296,1] App: 0 Process rank: 0
<br>
<p>&nbsp;Data for node: e5-2670-2       Num slots: 16   Max slots: 0    Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [17296,1] App: 0 Process rank: 1
<br>
<p>&nbsp;=============================================================
<br>
[e5-2670-1:21705] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.]
<br>
[e5-2670-2:06754] MCW rank 1 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.]
<br>
# OSU MPI-CUDA Bandwidth Test v4.4.1
<br>
# Send Buffer on HOST (H) and Receive Buffer on HOST (H)
<br>
# Size      Bandwidth (MB/s)
<br>
1                       1.28
<br>
2                       2.56
<br>
4                       5.14
<br>
8                      10.26
<br>
16                     20.27
<br>
32                     40.31
<br>
64                     80.85
<br>
128                   161.58
<br>
256                   320.43
<br>
512                   880.34
<br>
1024                 1598.03
<br>
2048                 2819.98
<br>
4096                 4431.01
<br>
8192                 5809.84
<br>
16384                9668.16
<br>
32768               10930.90
<br>
65536               11789.82
<br>
131072              12245.28
<br>
262144              12494.67
<br>
524288              12615.41
<br>
1048576             12679.62
<br>
2097152             12689.27
<br>
4194304             12725.77
<br>
#####
<br>
<p>Best regards,
<br>
<p>Ren&#195;&#169; &quot;oere&quot; Oertel
<br>
<p>Computer Architecture Group
<br>
Faculty of Computer Science
<br>
<p>Technische Universit&#195;&#164;t Chemnitz
<br>
Stra&#195;&#159;e der Nationen 62 | R. 014A
<br>
09111 Chemnitz
<br>
Germany
<br>
<p>Tel:    +49 371 531-37652
<br>
Fax:    +49 371 531-837652
<br>
<p>rene.oertel_at_[hidden]
<br>
<a href="http://www.tu-chemnitz.de/informatik/RA">http://www.tu-chemnitz.de/informatik/RA</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27040.php">Timur Ismagilov: "Re: [OMPI users] Fwd[2]: OMPI yalla vs impi"</a>
<li><strong>Previous message:</strong> <a href="27038.php">Timur Ismagilov: "Re: [OMPI users] OMPI yalla vs impi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27041.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Reply:</strong> <a href="27041.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
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

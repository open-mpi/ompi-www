<?
$subject_val = "[OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 08:23:41 2014" -->
<!-- isoreceived="20141028122341" -->
<!-- sent="Tue, 28 Oct 2014 13:23:09 +0100 (CET)" -->
<!-- isosent="20141028122309" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc" -->
<!-- id="201410281223.s9SCN960024898_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 08:23:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25625.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="25623.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25631.php">Gilles Gouaillardet: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Maybe reply:</strong> <a href="25631.php">Gilles Gouaillardet: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Maybe reply:</strong> <a href="25635.php">Siegmar Gross: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc
<br>
with gcc-4.9.1 and Java 8. Now a very simple Java program works
<br>
as expected, but other Java programs still break. I removed the
<br>
warnings about &quot;shmem.jar&quot; and used the following configure
<br>
command.
<br>
<p>tyr openmpi-dev-178-ga16c1e4-SunOS.sparc.64_gcc 406 head config.log \
<br>
&nbsp;&nbsp;| grep openmpi
<br>
$ ../openmpi-dev-178-ga16c1e4/configure
<br>
&nbsp;&nbsp;--prefix=/usr/local/openmpi-1.9.0_64_gcc
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0
<br>
&nbsp;&nbsp;LDFLAGS=-m64 CC=gcc CXX=g++ FC=gfortran CFLAGS=-m64 -D_REENTRANT
<br>
&nbsp;&nbsp;CXXFLAGS=-m64 FCFLAGS=-m64 CPP=cpp CXXCPP=cpp
<br>
&nbsp;&nbsp;CPPFLAGS= -D_REENTRANT CXXCPPFLAGS=
<br>
&nbsp;&nbsp;--enable-mpi-cxx --enable-cxx-exceptions --enable-mpi-java
<br>
&nbsp;&nbsp;--enable-mpi-thread-multiple --with-threads=posix
<br>
&nbsp;&nbsp;--with-hwloc=internal
<br>
&nbsp;&nbsp;--without-verbs --with-wrapper-cflags=-std=c11 -m64
<br>
&nbsp;&nbsp;--with-wrapper-cxxflags=-m64 --enable-debug
<br>
<p><p>tyr java 290 ompi_info | grep -e &quot;Open MPI repo revision:&quot; -e &quot;C compiler version:&quot;
<br>
&nbsp;&nbsp;Open MPI repo revision: dev-178-ga16c1e4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler version: 4.9.1
<br>
<p><p><p><span class="quotelev2">&gt; &gt; regarding the BUS error reported by Siegmar, i also commited
</span><br>
<span class="quotelev2">&gt; &gt; 62bde1fcb554079143030bb305512c236672386f
</span><br>
<span class="quotelev2">&gt; &gt; in order to fix it (this is based on code review only, i have no sparc64
</span><br>
<span class="quotelev2">&gt; &gt; hardware to test it is enough)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll test it, when a new nightly snapshot is available for the trunk.
</span><br>
<p><p>tyr java 291 mpijavac InitFinalizeMain.java 
<br>
tyr java 292 mpiexec -np 1 java InitFinalizeMain
<br>
Hello!
<br>
<p>tyr java 293 mpijavac BcastIntMain.java 
<br>
tyr java 294 mpiexec -np 2 java BcastIntMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGBUS (0xa) at pc=0xfffffffee3210bfc, pid=24792, tid=2
<br>
...
<br>
<p><p><p>tyr java 296 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
...
<br>
(gdb) run -np 2 java BcastIntMain
<br>
Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 2 java BcastIntMain
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGBUS (0xa) at pc=0xfffffffee3210bfc, pid=24814, tid=2
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
<br>
# Problematic frame:
<br>
# C  [mca_pmix_native.so+0x10bfc]  native_get_attr+0x3000
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid24814.log
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGBUS (0xa) at pc=0xfffffffee3210bfc, pid=24812, tid=2
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
<br>
# Problematic frame:
<br>
# C  [mca_pmix_native.so+0x10bfc]  native_get_attr+0x3000
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid24812.log
<br>
#
<br>
# If you would like to submit a bug report, please visit:
<br>
#   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
<br>
# The crash happened outside the Java Virtual Machine in native code.
<br>
# See problematic frame for where to report the bug.
<br>
#
<br>
[tyr:24814] *** Process received signal ***
<br>
[tyr:24814] Signal: Abort (6)
<br>
[tyr:24814] Signal code:  (-1)
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:0xdc2d4
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/lib/sparcv9/libc.so.1:0xdd2d0 [ Signal 6 (ABRT)]
<br>
/lib/sparcv9/libc.so.1:_thr_sigsetmask+0x1c4
<br>
/lib/sparcv9/libc.so.1:sigprocmask+0x28
<br>
/lib/sparcv9/libc.so.1:_sigrelse+0x5c
<br>
/lib/sparcv9/libc.so.1:abort+0xc0
<br>
/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0xb3cb90
<br>
/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0xd97a04
<br>
/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:JVM_handle_solaris_signal+0xc0c
<br>
/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0xb44e84
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so:0x10bfc [ Signal 10 (BUS)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x33dc
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x67c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x374
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0:Java_mpi_MPI_Init_1jni+0x1a0
<br>
0xffffffff6b810730
<br>
0xffffffff6b8106d4
<br>
0xffffffff6b8078a8
<br>
0xffffffff6b8078a8
<br>
0xffffffff6b80024c
<br>
/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0x6fd4e8
<br>
/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0x79331c
<br>
/export2/prog/SunOS_sparc/jdk1.8.0/lib/sparcv9/jli/libjli.so:0x7290
<br>
/lib/sparcv9/libc.so.1:0xd8a6c
<br>
[tyr:24814] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 1 with PID 0 on node tyr exited on signal 6 (Abort).
<br>
--------------------------------------------------------------------------
<br>
[LWP    2         exited]
<br>
[New Thread 2        ]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
<br>
(gdb) bt
<br>
#0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
<br>
#1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
<br>
#2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
<br>
#3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
<br>
#4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
<br>
#5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
<br>
#6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
<br>
#7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
<br>
#8  0xffffffff7ec87ca0 in vm_close ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
<br>
#9  0xffffffff7ec85274 in lt_dlclose ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
<br>
#10 0xffffffff7ecaa5dc in ri_destructor (obj=0x100187b70)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:382
<br>
#11 0xffffffff7eca8fd8 in opal_obj_run_destructors (object=0x100187b70)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/class/opal_object.h:446
<br>
#12 0xffffffff7eca9eac in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:240
<br>
#13 0xffffffff7ecac17c in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7ecac210 in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7ecac2e4 in mca_base_components_close (output_id=-1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7f14bc58 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7ecac24c in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:66
<br>
#17 0xffffffff7efcaf80 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/orte/mca/oob/base/oob_base_frame.c:112
<br>
#18 0xffffffff7ecc0d74 in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7be07858 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-dev-178-ga16c1e4/orte/mca/ess/hnp/ess_hnp_module.c:857
<br>
#20 0xffffffff7ef338bc in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-178-ga16c1e4/orte/runtime/orte_finalize.c:66
<br>
#21 0x000000010000723c in orterun (argc=5, argv=0xffffffff7fffe0d8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/orterun.c:1103
<br>
#22 0x0000000100003e80 in main (argc=5, argv=0xffffffff7fffe0d8)
<br>
---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p><p><p>I get the same error for C programs, if they use more than
<br>
MPI_Init and MPI_Finalize.
<br>
<p>tyr small_prog 301 mpicc init_finalize.c 
<br>
tyr small_prog 302 mpiexec -np 1 a.out
<br>
Hello!
<br>
tyr small_prog 303 mpicc column_int.c 
<br>
tyr small_prog 306 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
...
<br>
(gdb) run -np 4 a.out
<br>
Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 4 a.out
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
[tyr:24880] *** Process received signal ***
<br>
[tyr:24880] Signal: Bus Error (10)
<br>
[tyr:24880] Signal code: Invalid address alignment (1)
<br>
[tyr:24880] Failing at address: ffffffff7bd1c10c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:0xdc2d4
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so:0x10684 [ Signal 10 (BUS)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x33dc
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x67c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x374
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:main+0x20
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:_start+0x7c
<br>
[tyr:24880] *** End of error message ***
<br>
[tyr:24876] *** Process received signal ***
<br>
[tyr:24876] Signal: Bus Error (10)
<br>
[tyr:24876] Signal code: Invalid address alignment (1)
<br>
[tyr:24876] Failing at address: ffffffff7bd1c10c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:0xdc2d4
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so:0x10684 [ Signal 10 (BUS)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x33dc
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x67c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x374
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:main+0x20
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:_start+0x7c
<br>
[tyr:24876] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 2 with PID 0 on node tyr exited on signal 10 (Bus Error).
<br>
--------------------------------------------------------------------------
<br>
[LWP    2         exited]
<br>
[New Thread 2        ]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
<br>
(gdb) bt
<br>
#0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
<br>
#1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
<br>
#2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
<br>
#3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
<br>
#4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
<br>
#5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
<br>
#6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
<br>
#7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
<br>
#8  0xffffffff7ec87ca0 in vm_close ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
<br>
#9  0xffffffff7ec85274 in lt_dlclose ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
<br>
#10 0xffffffff7ecaa5dc in ri_destructor (obj=0x100187ae0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:382
<br>
#11 0xffffffff7eca8fd8 in opal_obj_run_destructors (object=0x100187ae0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/class/opal_object.h:446
<br>
#12 0xffffffff7eca9eac in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b0236f0 &lt;mca_oob_tcp_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:240
<br>
#13 0xffffffff7ecac17c in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b0236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7ecac210 in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b0236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7ecac2e4 in mca_base_components_close (output_id=-1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7f14bc58 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7ecac24c in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:66
<br>
#17 0xffffffff7efcaf80 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/orte/mca/oob/base/oob_base_frame.c:112
<br>
#18 0xffffffff7ecc0d74 in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7bd07858 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-dev-178-ga16c1e4/orte/mca/ess/hnp/ess_hnp_module.c:857
<br>
#20 0xffffffff7ef338bc in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-178-ga16c1e4/orte/runtime/orte_finalize.c:66
<br>
#21 0x000000010000723c in orterun (argc=4, argv=0xffffffff7fffe0e8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/orterun.c:1103
<br>
#22 0x0000000100003e80 in main (argc=4, argv=0xffffffff7fffe0e8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p><p>Do you need any other information?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<br><p>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGBUS (0xa) at pc=0xfffffffee3210bfc, pid=24812, tid=2
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
<br>
# Problematic frame:
<br>
# C  [mca_pmix_native.so+0x10bfc]  native_get_attr+0x3000
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
<br>
#
<br>
# If you would like to submit a bug report, please visit:
<br>
#   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
<br>
# The crash happened outside the Java Virtual Machine in native code.
<br>
# See problematic frame for where to report the bug.
<br>
#
<br>
<p>---------------  T H R E A D  ---------------
<br>
<p>Current thread (0x000000010010e800):  JavaThread &quot;main&quot; [_thread_in_native, id=2, stack(0xffffffff7b400000,0xffffffff7b500000)]
<br>
<p>siginfo:si_signo=SIGBUS: si_errno=0, si_code=1 (BUS_ADRALN), si_addr=0xfffffffee331c10c
<br>
<p>Registers:
<br>
&nbsp;G1=0xfffffffee331c10c G2=0xfffffffee4a3397c G3=0x0000000000000003 G4=0x000000000000000b
<br>
&nbsp;G5=0x0000000000000000 G6=0xffffffff2affe000 G7=0xffffffff7e900a00 Y=0x0000000000000000
<br>
&nbsp;O0=0x0000000100474330 O1=0x0000000000000000 O2=0xffffffff7ec4a300 O3=0xffffffff7ec455d4
<br>
&nbsp;O4=0xffffffff7e900a00 O5=0x0000000000000000 O6=0xffffffff7b4fe311 O7=0xfffffffee3210bd4
<br>
&nbsp;L0=0x0000000000000000 L1=0x0000000000000000 L2=0x0000000000000000 L3=0x0000000000000000
<br>
&nbsp;L4=0x0000000000000000 L5=0x0000000000000000 L6=0x0000000000000000 L7=0xfffffffee331a0b0
<br>
&nbsp;I0=0xfffffffee2e05db0 I1=0xffffffff7b4ff028 I2=0xfffffffee4c4b440 I3=0x0000000100474330
<br>
&nbsp;I4=0x00000000ffffffff I5=0xfffffffee4a3397c I6=0xffffffff7b4fe681 I7=0xfffffffee2e033dc
<br>
&nbsp;PC=0xfffffffee3210bfc nPC=0xfffffffee3210c00
<br>
<p><p>Top of Stack: (sp=0xffffffff7b4feb10)
<br>
0xffffffff7b4feb10:   0000000000000000 0000000000000000
<br>
0xffffffff7b4feb20:   0000000000000000 0000000000000000
<br>
0xffffffff7b4feb30:   0000000000000000 0000000000000000
<br>
0xffffffff7b4feb40:   0000000000000000 fffffffee331a0b0
<br>
0xffffffff7b4feb50:   fffffffee2e05db0 ffffffff7b4ff028
<br>
0xffffffff7b4feb60:   fffffffee4c4b440 0000000100474330
<br>
0xffffffff7b4feb70:   00000000ffffffff fffffffee4a3397c
<br>
0xffffffff7b4feb80:   ffffffff7b4fe681 fffffffee2e033dc
<br>
0xffffffff7b4feb90:   c6fb000100000000 ffffffff00000000
<br>
0xffffffff7b4feba0:   00000001004932d0 ffffffff7b4fecb0
<br>
0xffffffff7b4febb0:   00000001004931f0 0000000000000000
<br>
0xffffffff7b4febc0:   000000010049e8e0 0000000000000000
<br>
0xffffffff7b4febd0:   fffffffee4983850 0000000100494858
<br>
0xffffffff7b4febe0:   fffffffee3217e20 0000040a00000000
<br>
0xffffffff7b4febf0:   000000017b4fece4 000000010049aa40
<br>
0xffffffff7b4fec00:   000000010049aa74 000000010049aa74 
<br>
<p>Instructions: (pc=0xfffffffee3210bfc)
<br>
0xfffffffee3210bdc:   b6 10 00 08 03 00 00 02 82 10 60 08 c2 5d c0 01
<br>
0xfffffffee3210bec:   c4 58 40 00 03 00 00 00 82 10 60 f8 c2 5d c0 01
<br>
0xfffffffee3210bfc:   c2 58 40 00 90 10 00 01 9f c0 80 00 01 00 00 00
<br>
0xfffffffee3210c0c:   ba 10 00 08 c2 17 a7 f3 83 28 70 30 83 30 70 30 
<br>
<p>Register to memory mapping:
<br>
<p>G1=0xfffffffee331c10c: _edata+0x44 in /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so at 0xfffffffee3200000
<br>
G2=0xfffffffee4a3397c: orte_finalize+0x1e0 in /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0 at 0xfffffffee4a00000
<br>
G3=0x0000000000000003 is an unknown value
<br>
G4=0x000000000000000b is an unknown value
<br>
G5=0x0000000000000000 is an unknown value
<br>
G6=0xffffffff2affe000 is an unknown value
<br>
G7=0xffffffff7e900a00 is an unknown value
<br>
<p>O0=0x0000000100474330 is an unknown value
<br>
O1=0x0000000000000000 is an unknown value
<br>
O2=0xffffffff7ec4a300: _uberdata+0 in /lib/sparcv9/libc.so.1 at 0xffffffff7ea00000
<br>
O3=0xffffffff7ec455d4: __malloc_lock+0x1c in /lib/sparcv9/libc.so.1 at 0xffffffff7ea00000
<br>
O4=0xffffffff7e900a00 is an unknown value
<br>
O5=0x0000000000000000 is an unknown value
<br>
O6=0xffffffff7b4fe311 is pointing into the stack for thread: 0x000000010010e800
<br>
O7=0xfffffffee3210bd4: _DYNAMIC+0x10ab4 in /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so at 0xfffffffee3200000
<br>
<p>L0=0x0000000000000000 is an unknown value
<br>
L1=0x0000000000000000 is an unknown value
<br>
L2=0x0000000000000000 is an unknown value
<br>
L3=0x0000000000000000 is an unknown value
<br>
L4=0x0000000000000000 is an unknown value
<br>
L5=0x0000000000000000 is an unknown value
<br>
L6=0x0000000000000000 is an unknown value
<br>
L7=0xfffffffee331a0b0: _GLOBAL_OFFSET_TABLE_+0 in /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so at 0xfffffffee3200000
<br>
<p>I0=0xfffffffee2e05db0: _lib_version+0x308 in /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so at 0xfffffffee2e00000
<br>
I1=0xffffffff7b4ff028 is pointing into the stack for thread: 0x000000010010e800
<br>
I2=0xfffffffee4c4b440: orte_ess_base_framework+0x50 in /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0 at 0xfffffffee4a00000
<br>
I3=0x0000000100474330 is an unknown value
<br>
I4=0x00000000ffffffff is an unknown value
<br>
I5=0xfffffffee4a3397c: orte_finalize+0x1e0 in /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0 at 0xfffffffee4a00000
<br>
I6=0xffffffff7b4fe681 is pointing into the stack for thread: 0x000000010010e800
<br>
I7=0xfffffffee2e033dc: _DYNAMIC+0x32bc in /export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so at 0xfffffffee2e00000
<br>
<p><p>Stack: [0xffffffff7b400000,0xffffffff7b500000],  sp=0xffffffff7b4feb10,  free space=1018k
<br>
Native frames: (J=compiled Java code, j=interpreted, Vv=VM code, C=native code)
<br>
C  [mca_pmix_native.so+0x10bfc]  native_get_attr+0x3000
<br>
C  [mca_ess_pmi.so+0x33e4]  rte_init+0x798
<br>
C  [libopen-rte.so.0.0.0+0x340c0]  orte_init+0x684
<br>
C  [libmpi.so.0.0.0+0x9a164]  ompi_mpi_init+0x37c
<br>
C  [libmpi.so.0.0.0+0xfbb30]  PMPI_Init+0x2b0
<br>
C  [libmpi_java.so.0.0.0+0x22f6c]  Java_mpi_MPI_Init_1jni+0x1a8
<br>
j  mpi.MPI.Init_jni([Ljava/lang/String;)[Ljava/lang/String;+0
<br>
j  mpi.MPI.Init_jni([Ljava/lang/String;)[Ljava/lang/String;+0
<br>
j  mpi.MPI.Init([Ljava/lang/String;)[Ljava/lang/String;+17
<br>
j  BcastIntMain.main([Ljava/lang/String;)V+5
<br>
v  ~StubRoutines::call_stub
<br>
V  [libjvm.so+0x6fd4f0]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25625.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 configure fails, Mac OS X 10.9.5, Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="25623.php">Gilles Gouaillardet: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25631.php">Gilles Gouaillardet: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Maybe reply:</strong> <a href="25631.php">Gilles Gouaillardet: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<li><strong>Maybe reply:</strong> <a href="25635.php">Siegmar Gross: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
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

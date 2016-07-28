<?
$subject_val = "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 11:36:23 2014" -->
<!-- isoreceived="20141028153623" -->
<!-- sent="Wed, 29 Oct 2014 00:36:15 +0900" -->
<!-- isosent="20141028153615" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc" -->
<!-- id="8xx226keb7t7vrcw4su2ou37.1414510401709_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 11:36:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25632.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25630.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Maybe in reply to:</strong> <a href="25624.php">Siegmar Gross: "[OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25635.php">Siegmar Gross: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>From the jvm logs, there is an alignment error in native_get_attr but i could not find it by reading the source code.
<br>
<p>Could you please do
<br>
ulimit -c unlimited
<br>
mpiexec ...
<br>
and then
<br>
gdb &lt;your path to java&gt;/bin/java core
<br>
And run bt on all threads until you get a line number in native_get_attr
<br>
<p>Thanks
<br>
<p>Gilles
<br>
<p>Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;today I installed openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc
</span><br>
<span class="quotelev1">&gt;with gcc-4.9.1 and Java 8. Now a very simple Java program works
</span><br>
<span class="quotelev1">&gt;as expected, but other Java programs still break. I removed the
</span><br>
<span class="quotelev1">&gt;warnings about &quot;shmem.jar&quot; and used the following configure
</span><br>
<span class="quotelev1">&gt;command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;tyr openmpi-dev-178-ga16c1e4-SunOS.sparc.64_gcc 406 head config.log \
</span><br>
<span class="quotelev1">&gt;  | grep openmpi
</span><br>
<span class="quotelev1">&gt;$ ../openmpi-dev-178-ga16c1e4/configure
</span><br>
<span class="quotelev1">&gt;  --prefix=/usr/local/openmpi-1.9.0_64_gcc
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64
</span><br>
<span class="quotelev1">&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin
</span><br>
<span class="quotelev1">&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include
</span><br>
<span class="quotelev1">&gt;  JAVA_HOME=/usr/local/jdk1.8.0
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=-m64 CC=gcc CXX=g++ FC=gfortran CFLAGS=-m64 -D_REENTRANT
</span><br>
<span class="quotelev1">&gt;  CXXFLAGS=-m64 FCFLAGS=-m64 CPP=cpp CXXCPP=cpp
</span><br>
<span class="quotelev1">&gt;  CPPFLAGS= -D_REENTRANT CXXCPPFLAGS=
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-cxx --enable-cxx-exceptions --enable-mpi-java
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple --with-threads=posix
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal
</span><br>
<span class="quotelev1">&gt;  --without-verbs --with-wrapper-cflags=-std=c11 -m64
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cxxflags=-m64 --enable-debug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;tyr java 290 ompi_info | grep -e &quot;Open MPI repo revision:&quot; -e &quot;C compiler version:&quot;
</span><br>
<span class="quotelev1">&gt;  Open MPI repo revision: dev-178-ga16c1e4
</span><br>
<span class="quotelev1">&gt;      C compiler version: 4.9.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; regarding the BUS error reported by Siegmar, i also commited
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 62bde1fcb554079143030bb305512c236672386f
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in order to fix it (this is based on code review only, i have no sparc64
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hardware to test it is enough)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll test it, when a new nightly snapshot is available for the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;tyr java 291 mpijavac InitFinalizeMain.java 
</span><br>
<span class="quotelev1">&gt;tyr java 292 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt;Hello!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;tyr java 293 mpijavac BcastIntMain.java 
</span><br>
<span class="quotelev1">&gt;tyr java 294 mpiexec -np 2 java BcastIntMain
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;# A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;#  SIGBUS (0xa) at pc=0xfffffffee3210bfc, pid=24792, tid=2
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;tyr java 296 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;(gdb) run -np 2 java BcastIntMain
</span><br>
<span class="quotelev1">&gt;Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 2 java BcastIntMain
</span><br>
<span class="quotelev1">&gt;[Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt;[New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt;[New LWP    2        ]
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;# A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;#  SIGBUS (0xa) at pc=0xfffffffee3210bfc, pid=24814, tid=2
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev1">&gt;# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
</span><br>
<span class="quotelev1">&gt;# Problematic frame:
</span><br>
<span class="quotelev1">&gt;# C  [mca_pmix_native.so+0x10bfc]  native_get_attr+0x3000
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;# An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt;# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid24814.log
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;# A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;#  SIGBUS (0xa) at pc=0xfffffffee3210bfc, pid=24812, tid=2
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev1">&gt;# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
</span><br>
<span class="quotelev1">&gt;# Problematic frame:
</span><br>
<span class="quotelev1">&gt;# C  [mca_pmix_native.so+0x10bfc]  native_get_attr+0x3000
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;# An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt;# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid24812.log
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;# If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt;#   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt;# The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev1">&gt;# See problematic frame for where to report the bug.
</span><br>
<span class="quotelev1">&gt;#
</span><br>
<span class="quotelev1">&gt;[tyr:24814] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;[tyr:24814] Signal: Abort (6)
</span><br>
<span class="quotelev1">&gt;[tyr:24814] Signal code:  (-1)
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:0xdc2d4
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xdd2d0 [ Signal 6 (ABRT)]
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:_thr_sigsetmask+0x1c4
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:sigprocmask+0x28
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:_sigrelse+0x5c
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:abort+0xc0
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0xb3cb90
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0xd97a04
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:JVM_handle_solaris_signal+0xc0c
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0xb44e84
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so:0x10bfc [ Signal 10 (BUS)]
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x33dc
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x67c
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x374
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0:Java_mpi_MPI_Init_1jni+0x1a0
</span><br>
<span class="quotelev1">&gt;0xffffffff6b810730
</span><br>
<span class="quotelev1">&gt;0xffffffff6b8106d4
</span><br>
<span class="quotelev1">&gt;0xffffffff6b8078a8
</span><br>
<span class="quotelev1">&gt;0xffffffff6b8078a8
</span><br>
<span class="quotelev1">&gt;0xffffffff6b80024c
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0x6fd4e8
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/jdk1.8.0/jre/lib/sparcv9/server/libjvm.so:0x79331c
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/jdk1.8.0/lib/sparcv9/jli/libjli.so:0x7290
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xd8a6c
</span><br>
<span class="quotelev1">&gt;[tyr:24814] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;mpiexec noticed that process rank 1 with PID 0 on node tyr exited on signal 6 (Abort).
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;[LWP    2         exited]
</span><br>
<span class="quotelev1">&gt;[New Thread 2        ]
</span><br>
<span class="quotelev1">&gt;[Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt;sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev1">&gt;(gdb) bt
</span><br>
<span class="quotelev1">&gt;#0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#8  0xffffffff7ec87ca0 in vm_close ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#9  0xffffffff7ec85274 in lt_dlclose ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#10 0xffffffff7ecaa5dc in ri_destructor (obj=0x100187b70)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:382
</span><br>
<span class="quotelev1">&gt;#11 0xffffffff7eca8fd8 in opal_obj_run_destructors (object=0x100187b70)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/class/opal_object.h:446
</span><br>
<span class="quotelev1">&gt;#12 0xffffffff7eca9eac in mca_base_component_repository_release (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:240
</span><br>
<span class="quotelev1">&gt;#13 0xffffffff7ecac17c in mca_base_component_unload (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev1">&gt;#14 0xffffffff7ecac210 in mca_base_component_close (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev1">&gt;#15 0xffffffff7ecac2e4 in mca_base_components_close (output_id=-1, 
</span><br>
<span class="quotelev1">&gt;    components=0xffffffff7f14bc58 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev1">&gt;#16 0xffffffff7ecac24c in mca_base_framework_components_close (
</span><br>
<span class="quotelev1">&gt;    framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev1">&gt;#17 0xffffffff7efcaf80 in orte_oob_base_close ()
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/mca/oob/base/oob_base_frame.c:112
</span><br>
<span class="quotelev1">&gt;#18 0xffffffff7ecc0d74 in mca_base_framework_close (
</span><br>
<span class="quotelev1">&gt;    framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev1">&gt;#19 0xffffffff7be07858 in rte_finalize ()
</span><br>
<span class="quotelev1">&gt;    at ../../../../../openmpi-dev-178-ga16c1e4/orte/mca/ess/hnp/ess_hnp_module.c:857
</span><br>
<span class="quotelev1">&gt;#20 0xffffffff7ef338bc in orte_finalize ()
</span><br>
<span class="quotelev1">&gt;    at ../../openmpi-dev-178-ga16c1e4/orte/runtime/orte_finalize.c:66
</span><br>
<span class="quotelev1">&gt;#21 0x000000010000723c in orterun (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/orterun.c:1103
</span><br>
<span class="quotelev1">&gt;#22 0x0000000100003e80 in main (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev1">&gt;---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev1">&gt;(gdb) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I get the same error for C programs, if they use more than
</span><br>
<span class="quotelev1">&gt;MPI_Init and MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;tyr small_prog 301 mpicc init_finalize.c 
</span><br>
<span class="quotelev1">&gt;tyr small_prog 302 mpiexec -np 1 a.out
</span><br>
<span class="quotelev1">&gt;Hello!
</span><br>
<span class="quotelev1">&gt;tyr small_prog 303 mpicc column_int.c 
</span><br>
<span class="quotelev1">&gt;tyr small_prog 306 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev1">&gt;...
</span><br>
<span class="quotelev1">&gt;(gdb) run -np 4 a.out
</span><br>
<span class="quotelev1">&gt;Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 4 a.out
</span><br>
<span class="quotelev1">&gt;[Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt;[New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt;[New LWP    2        ]
</span><br>
<span class="quotelev1">&gt;[tyr:24880] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;[tyr:24880] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt;[tyr:24880] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt;[tyr:24880] Failing at address: ffffffff7bd1c10c
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:0xdc2d4
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so:0x10684 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x33dc
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x67c
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x374
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
</span><br>
<span class="quotelev1">&gt;/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:main+0x20
</span><br>
<span class="quotelev1">&gt;/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:_start+0x7c
</span><br>
<span class="quotelev1">&gt;[tyr:24880] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;[tyr:24876] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;[tyr:24876] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt;[tyr:24876] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt;[tyr:24876] Failing at address: ffffffff7bd1c10c
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0.0.0:0xdc2d4
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt;/lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_pmix_native.so:0x10684 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x33dc
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x67c
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x374
</span><br>
<span class="quotelev1">&gt;/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
</span><br>
<span class="quotelev1">&gt;/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:main+0x20
</span><br>
<span class="quotelev1">&gt;/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:_start+0x7c
</span><br>
<span class="quotelev1">&gt;[tyr:24876] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;mpiexec noticed that process rank 2 with PID 0 on node tyr exited on signal 10 (Bus Error).
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;[LWP    2         exited]
</span><br>
<span class="quotelev1">&gt;[New Thread 2        ]
</span><br>
<span class="quotelev1">&gt;[Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt;sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev1">&gt;(gdb) bt
</span><br>
<span class="quotelev1">&gt;#0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt;#8  0xffffffff7ec87ca0 in vm_close ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#9  0xffffffff7ec85274 in lt_dlclose ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;#10 0xffffffff7ecaa5dc in ri_destructor (obj=0x100187ae0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:382
</span><br>
<span class="quotelev1">&gt;#11 0xffffffff7eca8fd8 in opal_obj_run_destructors (object=0x100187ae0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/class/opal_object.h:446
</span><br>
<span class="quotelev1">&gt;#12 0xffffffff7eca9eac in mca_base_component_repository_release (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b0236f0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:240
</span><br>
<span class="quotelev1">&gt;#13 0xffffffff7ecac17c in mca_base_component_unload (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b0236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev1">&gt;#14 0xffffffff7ecac210 in mca_base_component_close (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b0236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev1">&gt;#15 0xffffffff7ecac2e4 in mca_base_components_close (output_id=-1, 
</span><br>
<span class="quotelev1">&gt;    components=0xffffffff7f14bc58 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev1">&gt;#16 0xffffffff7ecac24c in mca_base_framework_components_close (
</span><br>
<span class="quotelev1">&gt;    framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev1">&gt;#17 0xffffffff7efcaf80 in orte_oob_base_close ()
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/mca/oob/base/oob_base_frame.c:112
</span><br>
<span class="quotelev1">&gt;#18 0xffffffff7ecc0d74 in mca_base_framework_close (
</span><br>
<span class="quotelev1">&gt;    framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev1">&gt;#19 0xffffffff7bd07858 in rte_finalize ()
</span><br>
<span class="quotelev1">&gt;    at ../../../../../openmpi-dev-178-ga16c1e4/orte/mca/ess/hnp/ess_hnp_module.c:857
</span><br>
<span class="quotelev1">&gt;#20 0xffffffff7ef338bc in orte_finalize ()
</span><br>
<span class="quotelev1">&gt;    at ../../openmpi-dev-178-ga16c1e4/orte/runtime/orte_finalize.c:66
</span><br>
<span class="quotelev1">&gt;#21 0x000000010000723c in orterun (argc=4, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/orterun.c:1103
</span><br>
<span class="quotelev1">&gt;#22 0x0000000100003e80 in main (argc=4, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev1">&gt;(gdb) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Do you need any other information?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Siegmar
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25632.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25630.php">Marco Atzeri: "Re: [OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Maybe in reply to:</strong> <a href="25624.php">Siegmar Gross: "[OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25635.php">Siegmar Gross: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10 Sparc"</a>
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

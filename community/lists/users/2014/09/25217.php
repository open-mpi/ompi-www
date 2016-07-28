<?
$subject_val = "[OMPI users] problems and bus error with openmpi-1.9a1r32657";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 09:02:12 2014" -->
<!-- isoreceived="20140902130212" -->
<!-- sent="Tue, 2 Sep 2014 15:01:52 +0200 (CEST)" -->
<!-- isosent="20140902130152" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problems and bus error with openmpi-1.9a1r32657" -->
<!-- id="201409021301.s82D1qje000674_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problems and bus error with openmpi-1.9a1r32657<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 09:01:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25218.php">Siegmar Gross: "[OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc"</a>
<li><strong>Previous message:</strong> <a href="25216.php">Siegmar Gross: "[OMPI users] Java problem with openmpi-1.8.3a1r32641"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25223.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Reply:</strong> <a href="25223.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Maybe reply:</strong> <a href="25225.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Maybe reply:</strong> <a href="25228.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.9a1r32657 on my machines (Solaris
<br>
10 Sparc (tyr), Solaris 10 x86_64 (sunpc0), and openSUSE Linux 12.1
<br>
x86_64 (linpc0)) with Sun C 5.12 and gcc-4.9.0.
<br>
<p>I have the following problems with my Sun C version. First my
<br>
problem with Java and below my problem with C.
<br>
<p><p><p>Java problem:
<br>
=============
<br>
<p>tyr java 118 mpijavac InitFinalizeMain.java 
<br>
warning: [path] bad path element &quot;/usr/local/openmpi-1.9_64_cc/lib64/shmem.jar&quot;: no such file or directory
<br>
1 warning
<br>
tyr java 119 
<br>
<p>tyr java 119 mpiexec -np 1 java InitFinalizeMain
<br>
select: Interrupted system call
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=652, tid=2
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
<br>
# Problematic frame:
<br>
# C  [libc.so.1+0x3c7f0]  strlen+0x50
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; before 
<br>
starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid652.log
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
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 652 on node tyr exited on signal 6 (Abort).
<br>
--------------------------------------------------------------------------
<br>
tyr java 120 
<br>
<p><p><p>gdb shows the following backtrace.
<br>
<p>tyr java 120 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.9_64_cc/bin/mpiexec 
<br>
GNU gdb (GDB) 7.6.1
<br>
Copyright (C) 2013 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
<br>
Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun...done.
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec -np 1 java InitFinalizeMain
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
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=672, tid=2
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
<br>
# Problematic frame:
<br>
# C  [libc.so.1+0x3c7f0]  strlen+0x50
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; before 
<br>
starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid672.log
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
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 672 on node tyr exited on signal 6 (Abort).
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
#8  0xffffffff7e4e6d88 in vm_close () from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#9  0xffffffff7e4e4074 in lt_dlclose () from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#10 0xffffffff7e53a1cc in ri_destructor (obj=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_component_repository.c:382
<br>
#11 0xffffffff7e5379a8 in opal_obj_run_destructors (object=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/class/opal_object.h:446
<br>
#12 0xffffffff7e539a3c in mca_base_component_repository_release (component=0xf000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_component_repository.c:240
<br>
#13 0xffffffff7e5400a0 in mca_base_component_unload (component=0x0, output_id=-2145509376)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7e540144 in mca_base_component_close (component=0xffffff7b000030ff, output_id=255)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7e540254 in mca_base_components_close (output_id=767, components=0x0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7f73cdf800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7e540194 in mca_base_framework_components_close (framework=0xff, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7c801c4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:68
<br>
#17 0xffffffff7ee45568 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/orte/mca/oob/base/oob_base_frame.c:98
<br>
#18 0xffffffff7e56bcfc in mca_base_framework_close (framework=0xffffff7e4e3f3cff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7bb13f00 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.9a1r32657/orte/mca/ess/hnp/ess_hnp_module.c:857
<br>
#20 0xffffffff7ec3ad00 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.9a1r32657/orte/runtime/orte_finalize.c:66
<br>
#21 0x000000010000e264 in orterun (argc=4607, argv=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/orte/tools/orterun/orterun.c:1099
<br>
#22 0x00000001000046d4 in main (argc=255, argv=0xffffff7f0abf7800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p><p><p><p><p>C problem:
<br>
==========
<br>
<p>tyr small_prog 111 mpiexec -np 1 --host linpc0 init_finalize
<br>
[tyr.informatik.hs-fulda.de:00593] mca_oob_tcp_accept: accept() failed: Error 0 (11).
<br>
Hello!
<br>
<p>tyr small_prog 112 mpiexec -np 1 --host sunpc0 init_finalize
<br>
[tyr.informatik.hs-fulda.de:00597] mca_oob_tcp_accept: accept() failed: Error 0 (11).
<br>
Hello!
<br>
<p>tyr small_prog 113 mpiexec -np 1 --host tyr init_finalize
<br>
[tyr:00606] *** Process received signal ***
<br>
[tyr:00606] Signal: Bus Error (10)
<br>
[tyr:00606] Signal code: Invalid address alignment (1)
<br>
[tyr:00606] Failing at address: ffffffff7fffd7fc
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x1c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1a4960
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack_int64+0xf4 [ Signal 
<br>
2096416616 (?)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack_buffer+0x168
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack+0x24c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/openmpi/mca_pmix_native.so:0x14e10
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0xd18
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:MPI_Init+0x26c
<br>
/home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
<br>
/home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x12c
<br>
[tyr:00606] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 606 on node tyr exited on signal 10 (Bus Error).
<br>
--------------------------------------------------------------------------
<br>
tyr small_prog 114 
<br>
<p><p><p>gdb shows the following backtrace.
<br>
<p>tyr small_prog 115 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.9_64_cc/bin/mpiexec 
<br>
GNU gdb (GDB) 7.6.1
<br>
Copyright (C) 2013 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
<br>
Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun...done.
<br>
(gdb) run -np 1 --host tyr init_finalize   
<br>
Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec -np 1 --host tyr init_finalize
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
[tyr:00628] *** Process received signal ***
<br>
[tyr:00628] Signal: Bus Error (10)
<br>
[tyr:00628] Signal code: Invalid address alignment (1)
<br>
[tyr:00628] Failing at address: ffffffff7fffd73c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x1c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1a4960
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack_int64+0xf4 [ Signal 
<br>
2096416616 (?)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack_buffer+0x168
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack+0x24c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/openmpi/mca_pmix_native.so:0x14e10
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0xd18
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:MPI_Init+0x26c
<br>
/home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
<br>
/home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x12c
<br>
[tyr:00628] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 628 on node tyr exited on signal 10 (Bus Error).
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
#8  0xffffffff7e4e6d88 in vm_close () from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#9  0xffffffff7e4e4074 in lt_dlclose () from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#10 0xffffffff7e53a1cc in ri_destructor (obj=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_component_repository.c:382
<br>
#11 0xffffffff7e5379a8 in opal_obj_run_destructors (object=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/class/opal_object.h:446
<br>
#12 0xffffffff7e539a3c in mca_base_component_repository_release (component=0xf000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_component_repository.c:240
<br>
#13 0xffffffff7e5400a0 in mca_base_component_unload (component=0x0, output_id=-2145509376)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7e540144 in mca_base_component_close (component=0xffffff7b000030ff, output_id=255)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7e540254 in mca_base_components_close (output_id=767, components=0x0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7f73cdf800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7e540194 in mca_base_framework_components_close (framework=0xff, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7c801c4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:68
<br>
#17 0xffffffff7ee45568 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/orte/mca/oob/base/oob_base_frame.c:98
<br>
#18 0xffffffff7e56bcfc in mca_base_framework_close (framework=0xffffff7e4e3f3cff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7bb13f00 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.9a1r32657/orte/mca/ess/hnp/ess_hnp_module.c:857
<br>
#20 0xffffffff7ec3ad00 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.9a1r32657/orte/runtime/orte_finalize.c:66
<br>
#21 0x000000010000e264 in orterun (argc=5631, argv=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/orte/tools/orterun/orterun.c:1099
<br>
#22 0x00000001000046d4 in main (argc=255, argv=0xffffff7f0abf7800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p><p>I would be grateful, if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25218.php">Siegmar Gross: "[OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc"</a>
<li><strong>Previous message:</strong> <a href="25216.php">Siegmar Gross: "[OMPI users] Java problem with openmpi-1.8.3a1r32641"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25223.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Reply:</strong> <a href="25223.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Maybe reply:</strong> <a href="25225.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Maybe reply:</strong> <a href="25228.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
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

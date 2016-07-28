<?
$subject_val = "[OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 09:12:24 2014" -->
<!-- isoreceived="20140902131224" -->
<!-- sent="Tue, 2 Sep 2014 15:12:08 +0200 (CEST)" -->
<!-- isosent="20140902131208" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc" -->
<!-- id="201409021312.s82DC8EB000843_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 09:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25219.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25217.php">Siegmar Gross: "[OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25221.php">Ralph Castain: "Re: [OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc"</a>
<li><strong>Reply:</strong> <a href="25221.php">Ralph Castain: "Re: [OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc"</a>
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
<p>I have the following problems with my gcc version. First once more
<br>
my problems with Java and below my problems with C. In my opinion
<br>
I have the same problems as with Sun C.
<br>
<p><p><p>Java problem:
<br>
=============
<br>
<p>tyr java 106 mpijavac InitFinalizeMain.java 
<br>
warning: [path] bad path element &quot;/usr/local/openmpi-1.9_64_gcc/lib64/shmem.jar&quot;: no such file or directory
<br>
1 warning
<br>
tyr java 107 mpiexec -np 1 java InitFinalizeMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=774, tid=2
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
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid774.log
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
mpiexec noticed that process rank 0 with PID 774 on node tyr exited on signal 6 (Abort).
<br>
--------------------------------------------------------------------------
<br>
tyr java 108 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.9_64_gcc/bin/mpiexec 
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
Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/bin/orterun...done.
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.9_64_gcc/bin/mpiexec -np 1 java InitFinalizeMain
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
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=791, tid=2
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
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid791.log
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
mpiexec noticed that process rank 0 with PID 791 on node tyr exited on signal 6 (Abort).
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
#8  0xffffffff7ec88e98 in vm_close () from /usr/local/openmpi-1.9_64_gcc/lib64/libopen-pal.so.0
<br>
#9  0xffffffff7ec86478 in lt_dlclose () from /usr/local/openmpi-1.9_64_gcc/lib64/libopen-pal.so.0
<br>
#10 0xffffffff7ecab5fc in ri_destructor (obj=0x1001fe750)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_component_repository.c:382
<br>
#11 0xffffffff7eca9f38 in opal_obj_run_destructors (object=0x1001fe750)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/class/opal_object.h:446
<br>
#12 0xffffffff7ecaae9c in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b122fa8 &lt;mca_oob_tcp_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_component_repository.c:240
<br>
#13 0xffffffff7ecad19c in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b122fa8 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7ecad230 in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b122fa8 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7ecad304 in mca_base_components_close (output_id=-1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7f146d88 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7ecad26c in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f146d38 &lt;orte_oob_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:66
<br>
#17 0xffffffff7efc671c in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/orte/mca/oob/base/oob_base_frame.c:98
<br>
#18 0xffffffff7ecc1b28 in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f146d38 &lt;orte_oob_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7be07858 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.9a1r32657/orte/mca/ess/hnp/ess_hnp_module.c:857
<br>
#20 0xffffffff7ef337fc in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.9a1r32657/orte/runtime/orte_finalize.c:66
<br>
#21 0x00000001000071e0 in orterun (argc=5, argv=0xffffffff7fffe108)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/orte/tools/orterun/orterun.c:1099
<br>
#22 0x0000000100003e60 in main (argc=5, argv=0xffffffff7fffe108)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p><p><p><p><p>C problem:
<br>
==========
<br>
<p>tyr small_prog 115 mpiexec -np 1 --host linpc0 init_finalize
<br>
[tyr.informatik.hs-fulda.de:00815] mca_oob_tcp_accept: accept() failed: Error 0 (11).
<br>
Hello!
<br>
tyr small_prog 116 mpiexec -np 1 --host sunpc0 init_finalize
<br>
[tyr.informatik.hs-fulda.de:00819] mca_oob_tcp_accept: accept() failed: Error 0 (11).
<br>
Hello!
<br>
tyr small_prog 117 mpiexec -np 1 --host tyr init_finalize
<br>
select: Interrupted system call
<br>
[tyr:00825] *** Process received signal ***
<br>
[tyr:00825] Signal: Bus Error (10)
<br>
[tyr:00825] Signal code: Invalid address alignment (1)
<br>
[tyr:00825] Failing at address: ffffffff7bd1bfec
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libopen-pal.so.0.0.0:0xdd1d8
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libopen-pal.so.0.0.0:opal_proc_set_name+0x1c [ Signal 10 (BUS)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/openmpi/mca_pmix_native.so:0x103d0
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x2fec
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x624
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x3a8
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
<br>
/home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
<br>
/home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x7c
<br>
[tyr:00825] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 825 on node tyr exited on signal 10 (Bus Error).
<br>
--------------------------------------------------------------------------
<br>
tyr small_prog 118 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.9_64_gcc/bin/mpiexec 
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
Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/bin/orterun...done.
<br>
(gdb) run -np 1 --host tyr init_finalize   
<br>
Starting program: /usr/local/openmpi-1.9_64_gcc/bin/mpiexec -np 1 --host tyr init_finalize
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
select: Interrupted system call
<br>
[tyr:00842] *** Process received signal ***
<br>
[tyr:00842] Signal: Bus Error (10)
<br>
[tyr:00842] Signal code: Invalid address alignment (1)
<br>
[tyr:00842] Failing at address: ffffffff7bd1bfec
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libopen-pal.so.0.0.0:0xdd1d8
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libopen-pal.so.0.0.0:opal_proc_set_name+0x1c [ Signal 10 (BUS)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/openmpi/mca_pmix_native.so:0x103d0
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/openmpi/mca_ess_pmi.so:0x2fec
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libopen-rte.so.0.0.0:orte_init+0x624
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x3a8
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_gcc/lib64/libmpi.so.0.0.0:PMPI_Init+0x2a8
<br>
/home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
<br>
/home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x7c
<br>
[tyr:00842] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 842 on node tyr exited on signal 10 (Bus Error).
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
#8  0xffffffff7ec88e98 in vm_close () from /usr/local/openmpi-1.9_64_gcc/lib64/libopen-pal.so.0
<br>
#9  0xffffffff7ec86478 in lt_dlclose () from /usr/local/openmpi-1.9_64_gcc/lib64/libopen-pal.so.0
<br>
#10 0xffffffff7ecab5fc in ri_destructor (obj=0x1001fe750)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_component_repository.c:382
<br>
#11 0xffffffff7eca9f38 in opal_obj_run_destructors (object=0x1001fe750)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/class/opal_object.h:446
<br>
#12 0xffffffff7ecaae9c in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b122fa8 &lt;mca_oob_tcp_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_component_repository.c:240
<br>
#13 0xffffffff7ecad19c in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b122fa8 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7ecad230 in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b122fa8 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7ecad304 in mca_base_components_close (output_id=-1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7f146d88 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7ecad26c in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f146d38 &lt;orte_oob_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_components_close.c:66
<br>
#17 0xffffffff7efc671c in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/orte/mca/oob/base/oob_base_frame.c:98
<br>
#18 0xffffffff7ecc1b28 in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f146d38 &lt;orte_oob_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7be07858 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.9a1r32657/orte/mca/ess/hnp/ess_hnp_module.c:857
<br>
#20 0xffffffff7ef337fc in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.9a1r32657/orte/runtime/orte_finalize.c:66
<br>
#21 0x00000001000071e0 in orterun (argc=6, argv=0xffffffff7fffe0f8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32657/orte/tools/orterun/orterun.c:1099
<br>
#22 0x0000000100003e60 in main (argc=6, argv=0xffffffff7fffe0f8)
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
<li><strong>Next message:</strong> <a href="25219.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25217.php">Siegmar Gross: "[OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25221.php">Ralph Castain: "Re: [OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc"</a>
<li><strong>Reply:</strong> <a href="25221.php">Ralph Castain: "Re: [OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc"</a>
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

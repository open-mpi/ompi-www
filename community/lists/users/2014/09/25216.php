<?
$subject_val = "[OMPI users] Java problem with openmpi-1.8.3a1r32641";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 08:46:07 2014" -->
<!-- isoreceived="20140902124607" -->
<!-- sent="Tue, 2 Sep 2014 14:45:21 +0200 (CEST)" -->
<!-- isosent="20140902124521" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Java problem with openmpi-1.8.3a1r32641" -->
<!-- id="201409021245.s82CjLr8000235_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] Java problem with openmpi-1.8.3a1r32641<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 08:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25217.php">Siegmar Gross: "[OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Previous message:</strong> <a href="25215.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.8.3a1r32641 on my machines (Solaris
<br>
10 Sparc (tyr), Solaris 10 x86_64 (sunpc0), and openSUSE Linux 12.1
<br>
x86_64 (linpc0)) with Sun C 5.12 and gcc-4.9.0. A small Java program
<br>
breaks with SIGSEGV. gdb shows the following backtrace for the Sun C
<br>
version.
<br>
<p><p>tyr java 123 mpijavac InitFinalizeMain.java 
<br>
tyr java 124 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.8.3_64_cc/bin/mpiexec
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
Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.8.3_64_cc/bin/orterun...done.
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.8.3_64_cc/bin/mpiexec -np 1 java InitFinalizeMain
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
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=231, tid=2
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
# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; 
<br>
before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid231.log
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
mpiexec noticed that process rank 0 with PID 231 on node tyr exited on signal 6 (Abort).
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
#8  0xffffffff7e8cb348 in vm_close () from /usr/local/openmpi-1.8.3_64_cc/lib64/libopen-pal.so.6
<br>
#9  0xffffffff7e8c8634 in lt_dlclose () from /usr/local/openmpi-1.8.3_64_cc/lib64/libopen-pal.so.6
<br>
#10 0xffffffff7e91eda4 in ri_destructor (obj=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_component_repository.c:386
<br>
#11 0xffffffff7e91c598 in opal_obj_run_destructors (object=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/class/opal_object.h:446
<br>
#12 0xffffffff7e91e614 in mca_base_component_repository_release (component=0xf000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_component_repository.c:244
<br>
#13 0xffffffff7e924c48 in mca_base_component_unload (component=0x0, output_id=1880997888)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7e924cec in mca_base_component_close (component=0xffffff7b100030ff, output_id=255)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7e924dfc in mca_base_components_close (output_id=767, components=0x0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7f73cdf800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7e924d3c in mca_base_framework_components_close (framework=0xff, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7c701ba800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_components_close.c:68
<br>
#17 0xffffffff7ee1d690 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/orte/mca/oob/base/oob_base_frame.c:94
<br>
#18 0xffffffff7e954b1c in mca_base_framework_close (framework=0xffffff7e8c84fcff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7be139fc in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.8.3a1r32641/orte/mca/ess/hnp/ess_hnp_module.c:858
<br>
#20 0xffffffff7ec38154 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.8.3a1r32641/orte/runtime/orte_finalize.c:65
<br>
#21 0x000000010000ddf0 in orterun (argc=3327, argv=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/orte/tools/orterun/orterun.c:1096
<br>
#22 0x0000000100004614 in main (argc=255, argv=0xffffff7f0788e800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p><p>gdb shows the following backtrace for my gcc-version.
<br>
<p>tyr java 112 mpijavac InitFinalizeMain.java 
<br>
tyr java 113 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.8.3_64_gcc/bin/mpiexec
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
Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.8.3_64_gcc/bin/orterun...done.
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.8.3_64_gcc/bin/mpiexec -np 1 java InitFinalizeMain
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
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=137, tid=2
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
# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; 
<br>
before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid137.log
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
mpiexec noticed that process rank 0 with PID 137 on node tyr exited on signal 6 (Abort).
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
#8  0xffffffff7ec7748c in vm_close () from /usr/local/openmpi-1.8.3_64_gcc/lib64/libopen-pal.so.6
<br>
#9  0xffffffff7ec74a6c in lt_dlclose ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.8.3_64_gcc/lib64/libopen-pal.so.6
<br>
#10 0xffffffff7ec99b68 in ri_destructor (obj=0x1001eacd0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_component_repository.c:386
<br>
#11 0xffffffff7ec984a4 in opal_obj_run_destructors (object=0x1001eacd0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/class/opal_object.h:446
<br>
#12 0xffffffff7ec99408 in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_component_repository.c:244
<br>
#13 0xffffffff7ec9b708 in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7ec9b79c in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7ec9b870 in mca_base_components_close (output_id=-1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7f12b630 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7ec9b7d8 in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f12b5e0 &lt;orte_oob_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_components_close.c:66
<br>
#17 0xffffffff7efae0e8 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/orte/mca/oob/base/oob_base_frame.c:94
<br>
#18 0xffffffff7ecb28f4 in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f12b5e0 &lt;orte_oob_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7bf078c0 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.8.3a1r32641/orte/mca/ess/hnp/ess_hnp_module.c:858
<br>
#20 0xffffffff7ef30924 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.8.3a1r32641/orte/runtime/orte_finalize.c:65
<br>
#21 0x00000001000070c4 in orterun (argc=5, argv=0xffffffff7fffe0f8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/orte/tools/orterun/orterun.c:1096
<br>
#22 0x0000000100003d70 in main (argc=5, argv=0xffffffff7fffe0f8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.3a1r32641/orte/tools/orterun/main.c:13
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
<li><strong>Next message:</strong> <a href="25217.php">Siegmar Gross: "[OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Previous message:</strong> <a href="25215.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0"</a>
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

<?
$subject_val = "Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 05:59:05 2014" -->
<!-- isoreceived="20140903095905" -->
<!-- sent="Wed, 3 Sep 2014 11:58:34 +0200 (CEST)" -->
<!-- isosent="20140903095834" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0" -->
<!-- id="201409030958.s839wYQ5004284_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 05:58:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25238.php">Donato Pera: "[OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25236.php">Siegmar Gross: "[OMPI users] shmem.jar not available for Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="25214.php">Siegmar Gross: "[OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><span class="quotelev1">&gt; I believe this was fixed in the trunk and is now scheduled to come
</span><br>
<span class="quotelev1">&gt; across to 1.8.3
</span><br>
<p>Today I installed openmpi-1.9a1r32664 and the problem still exists.
<br>
Is the backtrace helpful or do you need something else?
<br>
<p>tyr java 111 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r32664
<br>
tyr java 112 mpijavac InitFinalizeMain.java 
<br>
warning: [path] bad path element &quot;/usr/local/openmpi-1.9_64_cc/lib64/shmem.jar&quot;: 
<br>
no such file or directory
<br>
1 warning
<br>
tyr java 113 /usr/local/gdb-7.6.1_64_gcc/bin/gdb 
<br>
/usr/local/openmpi-1.9_64_cc/bin/mpiexec 
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
Reading symbols from 
<br>
/export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun...done.
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec -np 1 java 
<br>
InitFinalizeMain
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
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=3584, tid=2
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc 
<br>
compressed oops)
<br>
# Problematic frame:
<br>
# C  [libc.so.1+0x3c7f0]  strlen+0x50
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core 
<br>
dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid3584.log
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
mpiexec noticed that process rank 0 with PID 0 on node tyr exited on signal 6 
<br>
(Abort).
<br>
--------------------------------------------------------------------------
<br>
[LWP    2         exited]
<br>
[New Thread 2        ]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy 
<br>
query
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
#8  0xffffffff7e4e6d88 in vm_close ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#9  0xffffffff7e4e4074 in lt_dlclose ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#10 0xffffffff7e53a1cc in ri_destructor (obj=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.9a1r32664/opal/mca/base/mca_base_component_repository.c:38
<br>
2
<br>
#11 0xffffffff7e5379a8 in opal_obj_run_destructors (object=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32664/opal/class/opal_object.h:446
<br>
#12 0xffffffff7e539a3c in mca_base_component_repository_release 
<br>
(component=0xf000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.9a1r32664/opal/mca/base/mca_base_component_repository.c:24
<br>
0
<br>
#13 0xffffffff7e5400a0 in mca_base_component_unload (component=0x0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;output_id=-2145509376)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.9a1r32664/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7e540144 in mca_base_component_close 
<br>
(component=0xffffff7b000030ff, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;output_id=255)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.9a1r32664/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7e540254 in mca_base_components_close (output_id=767, 
<br>
components=0x0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7f73cdf800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.9a1r32664/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7e540194 in mca_base_framework_components_close (framework=0xff, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7c801c4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.9a1r32664/opal/mca/base/mca_base_components_close.c:68
<br>
#17 0xffffffff7ee49a58 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32664/orte/mca/oob/base/oob_base_frame.c:98
<br>
#18 0xffffffff7e56bcfc in mca_base_framework_close 
<br>
(framework=0xffffff7e4e3f3cff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32664/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7bb13f00 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.9a1r32664/orte/mca/ess/hnp/ess_hnp_module.c:857
<br>
#20 0xffffffff7ec3adf0 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.9a1r32664/orte/runtime/orte_finalize.c:66
<br>
#21 0x000000010000e264 in orterun (argc=4607, argv=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32664/orte/tools/orterun/orterun.c:1099
<br>
#22 0x00000001000046d4 in main (argc=255, argv=0xffffff7f0b067800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32664/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p>&nbsp;
<br>
<span class="quotelev1">&gt; On Sep 2, 2014, at 4:21 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; yesterday I installed openmpi-1.8.2 on my machines (Solaris 10 Sparc
</span><br>
<span class="quotelev2">&gt; &gt; (tyr), Solaris 10 x86_64 (sunpc0), and openSUSE Linux 12.1 x86_64
</span><br>
<span class="quotelev2">&gt; &gt; (linpc0)) with Sun C 5.12. A small Java program works on Linux,
</span><br>
<span class="quotelev2">&gt; &gt; but breaks with a segmentation fault on Solaris 10.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 172 where mpijavac
</span><br>
<span class="quotelev2">&gt; &gt; mpijavac is aliased to \mpijavac -deprecation -Xlint:all
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.8.2_64_cc/bin/mpijavac
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 173 mpijavac InitFinalizeMain.java 
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 174 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=28334, tid=2
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev2">&gt; &gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode 
</span><br>
solaris-sparc compressed oops)
<br>
<span class="quotelev2">&gt; &gt; # Problematic frame:
</span><br>
<span class="quotelev2">&gt; &gt; # C  [libc.so.1+0x3c7f0]  strlen+0x50
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # Failed to write core dump. Core dumps have been disabled. To enable core 
</span><br>
dumping, try &quot;ulimit -c unlimited&quot; 
<br>
<span class="quotelev2">&gt; &gt; before starting Java again
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev2">&gt; &gt; # 
</span><br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid28334.log
<br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev2">&gt; &gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev2">&gt; &gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev2">&gt; &gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec noticed that process rank 0 with PID 28334 on node tyr exited on 
</span><br>
signal 6 (Abort).
<br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 175 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; gbd shows the following backtrace for SunC 5.12.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 175 /usr/local/gdb-7.6.1_64_gcc/bin/gdb 
</span><br>
/usr/local/openmpi-1.8.2_64_cc/bin/mpiexec 
<br>
<span class="quotelev2">&gt; &gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt; &gt; License GPLv3+: GNU GPL version 3 or later 
</span><br>
&lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
<span class="quotelev2">&gt; &gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt; &gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev2">&gt; &gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev2">&gt; &gt; This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev2">&gt; &gt; Reading symbols from 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_cc/bin/orterun...done.
<br>
<span class="quotelev2">&gt; &gt; (gdb) run -np 1 java InitFinalizeMain 
</span><br>
<span class="quotelev2">&gt; &gt; Starting program: /usr/local/openmpi-1.8.2_64_cc/bin/mpiexec -np 1 java 
</span><br>
InitFinalizeMain
<br>
<span class="quotelev2">&gt; &gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt; &gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev2">&gt; &gt; [New LWP    2        ]
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=28353, tid=2
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev2">&gt; &gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode 
</span><br>
solaris-sparc compressed oops)
<br>
<span class="quotelev2">&gt; &gt; # Problematic frame:
</span><br>
<span class="quotelev2">&gt; &gt; # C  [libc.so.1+0x3c7f0]  strlen+0x50
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # Failed to write core dump. Core dumps have been disabled. To enable core 
</span><br>
dumping, try &quot;ulimit -c unlimited&quot; 
<br>
<span class="quotelev2">&gt; &gt; before starting Java again
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev2">&gt; &gt; # 
</span><br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid28353.log
<br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev2">&gt; &gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev2">&gt; &gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev2">&gt; &gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec noticed that process rank 0 with PID 28353 on node tyr exited on 
</span><br>
signal 6 (Abort).
<br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [LWP    2         exited]
</span><br>
<span class="quotelev2">&gt; &gt; [New Thread 2        ]
</span><br>
<span class="quotelev2">&gt; &gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev2">&gt; &gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to 
</span><br>
satisfy query
<br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from 
</span><br>
/usr/lib/sparcv9/ld.so.1
<br>
<span class="quotelev2">&gt; &gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #8  0xffffffff7e8cb348 in vm_close ()
</span><br>
<span class="quotelev2">&gt; &gt;   from /usr/local/openmpi-1.8.2_64_cc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #9  0xffffffff7e8c8634 in lt_dlclose ()
</span><br>
<span class="quotelev2">&gt; &gt;   from /usr/local/openmpi-1.8.2_64_cc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #10 0xffffffff7e91edcc in ri_destructor (obj=0xff)
</span><br>
<span class="quotelev2">&gt; &gt;    at 
</span><br>
../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:391
<br>
<span class="quotelev2">&gt; &gt; #11 0xffffffff7e91c5a0 in opal_obj_run_destructors 
</span><br>
(object=0xffffff7c701d00ff)
<br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/class/opal_object.h:446
</span><br>
<span class="quotelev2">&gt; &gt; #12 0xffffffff7e91e61c in mca_base_component_repository_release 
</span><br>
(component=0x10ff)
<br>
<span class="quotelev2">&gt; &gt;    at 
</span><br>
../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:244
<br>
<span class="quotelev2">&gt; &gt; #13 0xffffffff7e924c78 in mca_base_component_unload 
</span><br>
(component=0xffffff7f73c63800, 
<br>
<span class="quotelev2">&gt; &gt;    output_id=67583)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev2">&gt; &gt; #14 0xffffffff7e924d1c in mca_base_component_close 
</span><br>
(component=0xffffff0000000100, 
<br>
<span class="quotelev2">&gt; &gt;    output_id=268480767)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev2">&gt; &gt; #15 0xffffffff7e924e2c in mca_base_components_close (output_id=1947894015, 
</span><br>
<span class="quotelev2">&gt; &gt;    components=0xffffff7f501368ff, skip=0x2ff)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev2">&gt; &gt; #16 0xffffffff7e924d6c in mca_base_framework_components_close (
</span><br>
<span class="quotelev2">&gt; &gt;    framework=0xffffff7d7455d4ff, skip=0xffffff7f200a90ff)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:68
</span><br>
<span class="quotelev2">&gt; &gt; #17 0xffffffff7ee1d690 in orte_oob_base_close ()
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/orte/mca/oob/base/oob_base_frame.c:94
</span><br>
<span class="quotelev2">&gt; &gt; #18 0xffffffff7e954ac0 in mca_base_framework_close 
</span><br>
(framework=0xffffff0000004b00)
<br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev2">&gt; &gt; #19 0xffffffff7be139fc in rte_finalize ()
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../../openmpi-1.8.2/orte/mca/ess/hnp/ess_hnp_module.c:858
</span><br>
<span class="quotelev2">&gt; &gt; #20 0xffffffff7ec38154 in orte_finalize ()
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../openmpi-1.8.2/orte/runtime/orte_finalize.c:65
</span><br>
<span class="quotelev2">&gt; &gt; #21 0x000000010000ddf0 in orterun (argc=3327, argv=0x0)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/orte/tools/orterun/orterun.c:1096
</span><br>
<span class="quotelev2">&gt; &gt; #22 0x0000000100004614 in main (argc=255, argv=0xffffff7f077de800)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; gbd shows the following backtrace for gcc-4.9.0.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 108 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev2">&gt; &gt; tyr java 109 /usr/local/gdb-7.6.1_64_gcc/bin/gdb 
</span><br>
/usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec 
<br>
<span class="quotelev2">&gt; &gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt; &gt; License GPLv3+: GNU GPL version 3 or later 
</span><br>
&lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
<span class="quotelev2">&gt; &gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt; &gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev2">&gt; &gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev2">&gt; &gt; This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev2">&gt; &gt; Reading symbols from 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/bin/orterun...done.
<br>
<span class="quotelev2">&gt; &gt; (gdb) run -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev2">&gt; &gt; Starting program: /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec -np 1 java 
</span><br>
InitFinalizeMain
<br>
<span class="quotelev2">&gt; &gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt; &gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev2">&gt; &gt; [New LWP    2        ]
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=28454, tid=2
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev2">&gt; &gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode 
</span><br>
solaris-sparc compressed oops)
<br>
<span class="quotelev2">&gt; &gt; # Problematic frame:
</span><br>
<span class="quotelev2">&gt; &gt; # C  [libc.so.1+0x3c7f0]  strlen+0x50
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # Failed to write core dump. Core dumps have been disabled. To enable core 
</span><br>
dumping, try &quot;ulimit -c unlimited&quot; 
<br>
<span class="quotelev2">&gt; &gt; before starting Java again
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev2">&gt; &gt; # 
</span><br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid28454.log
<br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev2">&gt; &gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev2">&gt; &gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev2">&gt; &gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec noticed that process rank 0 with PID 28454 on node tyr exited on 
</span><br>
signal 6 (Abort).
<br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [LWP    2         exited]
</span><br>
<span class="quotelev2">&gt; &gt; [New Thread 2        ]
</span><br>
<span class="quotelev2">&gt; &gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev2">&gt; &gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to 
</span><br>
satisfy query
<br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from 
</span><br>
/usr/lib/sparcv9/ld.so.1
<br>
<span class="quotelev2">&gt; &gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #8  0xffffffff7ec77474 in vm_close ()
</span><br>
<span class="quotelev2">&gt; &gt;   from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #9  0xffffffff7ec74a54 in lt_dlclose ()
</span><br>
<span class="quotelev2">&gt; &gt;   from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #10 0xffffffff7ec99b78 in ri_destructor (obj=0x1001ead80)
</span><br>
<span class="quotelev2">&gt; &gt;    at 
</span><br>
../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:391
<br>
<span class="quotelev2">&gt; &gt; #11 0xffffffff7ec98490 in opal_obj_run_destructors (object=0x1001ead80)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/class/opal_object.h:446
</span><br>
<span class="quotelev2">&gt; &gt; #12 0xffffffff7ec993f4 in mca_base_component_repository_release (
</span><br>
<span class="quotelev2">&gt; &gt;    component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;    at 
</span><br>
../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:244
<br>
<span class="quotelev2">&gt; &gt; #13 0xffffffff7ec9b73c in mca_base_component_unload (
</span><br>
<span class="quotelev2">&gt; &gt;    component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev2">&gt; &gt; #14 0xffffffff7ec9b7d0 in mca_base_component_close (
</span><br>
<span class="quotelev2">&gt; &gt;    component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev2">&gt; &gt; #15 0xffffffff7ec9b8a4 in mca_base_components_close (output_id=-1, 
</span><br>
<span class="quotelev2">&gt; &gt;    components=0xffffffff7f12b030 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev2">&gt; &gt; #16 0xffffffff7ec9b80c in mca_base_framework_components_close (
</span><br>
<span class="quotelev2">&gt; &gt;    framework=0xffffffff7f12afe0 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev2">&gt; &gt; #17 0xffffffff7efae0e8 in orte_oob_base_close ()
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/orte/mca/oob/base/oob_base_frame.c:94
</span><br>
<span class="quotelev2">&gt; &gt; #18 0xffffffff7ecb28b4 in mca_base_framework_close (
</span><br>
<span class="quotelev2">&gt; &gt;    framework=0xffffffff7f12afe0 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev2">&gt; &gt; #19 0xffffffff7bf078c0 in rte_finalize ()
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../../openmpi-1.8.2/orte/mca/ess/hnp/ess_hnp_module.c:858
</span><br>
<span class="quotelev2">&gt; &gt; #20 0xffffffff7ef30924 in orte_finalize ()
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../openmpi-1.8.2/orte/runtime/orte_finalize.c:65
</span><br>
<span class="quotelev2">&gt; &gt; #21 0x00000001000070c4 in orterun (argc=5, argv=0xffffffff7fffe0f8)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/orte/tools/orterun/orterun.c:1096
</span><br>
<span class="quotelev2">&gt; &gt; #22 0x0000000100003d70 in main (argc=5, argv=0xffffffff7fffe0f8)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../openmpi-1.8.2/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would be grateful, if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev2">&gt; &gt; very much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: 
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/09/25214.php">http://www.open-mpi.org/community/lists/users/2014/09/25214.php</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25238.php">Donato Pera: "[OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25236.php">Siegmar Gross: "[OMPI users] shmem.jar not available for Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="25214.php">Siegmar Gross: "[OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
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

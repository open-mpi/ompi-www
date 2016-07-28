<?
$subject_val = "Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 11:26:43 2014" -->
<!-- isoreceived="20140902152643" -->
<!-- sent="Tue, 2 Sep 2014 08:26:30 -0700" -->
<!-- isosent="20140902152630" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0" -->
<!-- id="C39C4F42-94C0-4508-A4F1-983D3E6EFBCC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201409021121.s82BLvUg028469_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 11:26:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25223.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Previous message:</strong> <a href="25221.php">Ralph Castain: "Re: [OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc"</a>
<li><strong>In reply to:</strong> <a href="25214.php">Siegmar Gross: "[OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25237.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe this was fixed in the trunk and is now scheduled to come across to 1.8.3
<br>
<p>On Sep 2, 2014, at 4:21 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-1.8.2 on my machines (Solaris 10 Sparc
</span><br>
<span class="quotelev1">&gt; (tyr), Solaris 10 x86_64 (sunpc0), and openSUSE Linux 12.1 x86_64
</span><br>
<span class="quotelev1">&gt; (linpc0)) with Sun C 5.12. A small Java program works on Linux,
</span><br>
<span class="quotelev1">&gt; but breaks with a segmentation fault on Solaris 10.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 172 where mpijavac
</span><br>
<span class="quotelev1">&gt; mpijavac is aliased to \mpijavac -deprecation -Xlint:all
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.8.2_64_cc/bin/mpijavac
</span><br>
<span class="quotelev1">&gt; tyr java 173 mpijavac InitFinalizeMain.java 
</span><br>
<span class="quotelev1">&gt; tyr java 174 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=28334, tid=2
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev1">&gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
</span><br>
<span class="quotelev1">&gt; # Problematic frame:
</span><br>
<span class="quotelev1">&gt; # C  [libc.so.1+0x3c7f0]  strlen+0x50
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; 
</span><br>
<span class="quotelev1">&gt; before starting Java again
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt; # /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid28334.log
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev1">&gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 28334 on node tyr exited on signal 6 (Abort).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr java 175 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gbd shows the following backtrace for SunC 5.12.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 175 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.8.2_64_cc/bin/mpiexec 
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt; Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.8.2_64_cc/bin/orterun...done.
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 1 java InitFinalizeMain 
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.8.2_64_cc/bin/mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=28353, tid=2
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev1">&gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
</span><br>
<span class="quotelev1">&gt; # Problematic frame:
</span><br>
<span class="quotelev1">&gt; # C  [libc.so.1+0x3c7f0]  strlen+0x50
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; 
</span><br>
<span class="quotelev1">&gt; before starting Java again
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt; # /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid28353.log
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev1">&gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 28353 on node tyr exited on signal 6 (Abort).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [LWP    2         exited]
</span><br>
<span class="quotelev1">&gt; [New Thread 2        ]
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #8  0xffffffff7e8cb348 in vm_close ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-1.8.2_64_cc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #9  0xffffffff7e8c8634 in lt_dlclose ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-1.8.2_64_cc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #10 0xffffffff7e91edcc in ri_destructor (obj=0xff)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:391
</span><br>
<span class="quotelev1">&gt; #11 0xffffffff7e91c5a0 in opal_obj_run_destructors (object=0xffffff7c701d00ff)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/class/opal_object.h:446
</span><br>
<span class="quotelev1">&gt; #12 0xffffffff7e91e61c in mca_base_component_repository_release (component=0x10ff)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:244
</span><br>
<span class="quotelev1">&gt; #13 0xffffffff7e924c78 in mca_base_component_unload (component=0xffffff7f73c63800, 
</span><br>
<span class="quotelev1">&gt;    output_id=67583)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev1">&gt; #14 0xffffffff7e924d1c in mca_base_component_close (component=0xffffff0000000100, 
</span><br>
<span class="quotelev1">&gt;    output_id=268480767)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev1">&gt; #15 0xffffffff7e924e2c in mca_base_components_close (output_id=1947894015, 
</span><br>
<span class="quotelev1">&gt;    components=0xffffff7f501368ff, skip=0x2ff)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev1">&gt; #16 0xffffffff7e924d6c in mca_base_framework_components_close (
</span><br>
<span class="quotelev1">&gt;    framework=0xffffff7d7455d4ff, skip=0xffffff7f200a90ff)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:68
</span><br>
<span class="quotelev1">&gt; #17 0xffffffff7ee1d690 in orte_oob_base_close ()
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/orte/mca/oob/base/oob_base_frame.c:94
</span><br>
<span class="quotelev1">&gt; #18 0xffffffff7e954ac0 in mca_base_framework_close (framework=0xffffff0000004b00)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev1">&gt; #19 0xffffffff7be139fc in rte_finalize ()
</span><br>
<span class="quotelev1">&gt;    at ../../../../../openmpi-1.8.2/orte/mca/ess/hnp/ess_hnp_module.c:858
</span><br>
<span class="quotelev1">&gt; #20 0xffffffff7ec38154 in orte_finalize ()
</span><br>
<span class="quotelev1">&gt;    at ../../openmpi-1.8.2/orte/runtime/orte_finalize.c:65
</span><br>
<span class="quotelev1">&gt; #21 0x000000010000ddf0 in orterun (argc=3327, argv=0x0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/orte/tools/orterun/orterun.c:1096
</span><br>
<span class="quotelev1">&gt; #22 0x0000000100004614 in main (argc=255, argv=0xffffff7f077de800)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb) 
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
<span class="quotelev1">&gt; gbd shows the following backtrace for gcc-4.9.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr java 108 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev1">&gt; tyr java 109 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec 
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt; Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/bin/orterun...done.
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=28454, tid=2
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev1">&gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
</span><br>
<span class="quotelev1">&gt; # Problematic frame:
</span><br>
<span class="quotelev1">&gt; # C  [libc.so.1+0x3c7f0]  strlen+0x50
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; 
</span><br>
<span class="quotelev1">&gt; before starting Java again
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # An error report file with more information is saved as:
</span><br>
<span class="quotelev1">&gt; # /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid28454.log
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # If you would like to submit a bug report, please visit:
</span><br>
<span class="quotelev1">&gt; #   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
</span><br>
<span class="quotelev1">&gt; # The crash happened outside the Java Virtual Machine in native code.
</span><br>
<span class="quotelev1">&gt; # See problematic frame for where to report the bug.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 28454 on node tyr exited on signal 6 (Abort).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [LWP    2         exited]
</span><br>
<span class="quotelev1">&gt; [New Thread 2        ]
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #8  0xffffffff7ec77474 in vm_close ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #9  0xffffffff7ec74a54 in lt_dlclose ()
</span><br>
<span class="quotelev1">&gt;   from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #10 0xffffffff7ec99b78 in ri_destructor (obj=0x1001ead80)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:391
</span><br>
<span class="quotelev1">&gt; #11 0xffffffff7ec98490 in opal_obj_run_destructors (object=0x1001ead80)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/class/opal_object.h:446
</span><br>
<span class="quotelev1">&gt; #12 0xffffffff7ec993f4 in mca_base_component_repository_release (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:244
</span><br>
<span class="quotelev1">&gt; #13 0xffffffff7ec9b73c in mca_base_component_unload (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev1">&gt; #14 0xffffffff7ec9b7d0 in mca_base_component_close (
</span><br>
<span class="quotelev1">&gt;    component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev1">&gt; #15 0xffffffff7ec9b8a4 in mca_base_components_close (output_id=-1, 
</span><br>
<span class="quotelev1">&gt;    components=0xffffffff7f12b030 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev1">&gt; #16 0xffffffff7ec9b80c in mca_base_framework_components_close (
</span><br>
<span class="quotelev1">&gt;    framework=0xffffffff7f12afe0 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev1">&gt; #17 0xffffffff7efae0e8 in orte_oob_base_close ()
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/orte/mca/oob/base/oob_base_frame.c:94
</span><br>
<span class="quotelev1">&gt; #18 0xffffffff7ecb28b4 in mca_base_framework_close (
</span><br>
<span class="quotelev1">&gt;    framework=0xffffffff7f12afe0 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev1">&gt; #19 0xffffffff7bf078c0 in rte_finalize ()
</span><br>
<span class="quotelev1">&gt;    at ../../../../../openmpi-1.8.2/orte/mca/ess/hnp/ess_hnp_module.c:858
</span><br>
<span class="quotelev1">&gt; #20 0xffffffff7ef30924 in orte_finalize ()
</span><br>
<span class="quotelev1">&gt;    at ../../openmpi-1.8.2/orte/runtime/orte_finalize.c:65
</span><br>
<span class="quotelev1">&gt; #21 0x00000001000070c4 in orterun (argc=5, argv=0xffffffff7fffe0f8)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/orte/tools/orterun/orterun.c:1096
</span><br>
<span class="quotelev1">&gt; #22 0x0000000100003d70 in main (argc=5, argv=0xffffffff7fffe0f8)
</span><br>
<span class="quotelev1">&gt;    at ../../../../openmpi-1.8.2/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev1">&gt; very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25214.php">http://www.open-mpi.org/community/lists/users/2014/09/25214.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25223.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<li><strong>Previous message:</strong> <a href="25221.php">Ralph Castain: "Re: [OMPI users] same problems and bus error with openmpi-1.9a1r32657 and gcc"</a>
<li><strong>In reply to:</strong> <a href="25214.php">Siegmar Gross: "[OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25237.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
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

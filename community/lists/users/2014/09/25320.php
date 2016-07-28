<?
$subject_val = "Re: [OMPI users] unaligned accesses";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 07:41:14 2014" -->
<!-- isoreceived="20140912114114" -->
<!-- sent="Fri, 12 Sep 2014 13:40:58 +0200 (CEST)" -->
<!-- isosent="20140912114058" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unaligned accesses" -->
<!-- id="201409121140.s8CBewxJ022192_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] unaligned accesses" -->
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
<strong>Subject:</strong> Re: [OMPI users] unaligned accesses<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 07:40:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25321.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Previous message:</strong> <a href="25319.php">JR Cary: "[OMPI users] Multiple threads for an mpi process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev1">&gt; We committed some fixes -- see if you can get farther with
</span><br>
<span class="quotelev1">&gt; tonight's nightly tarball.
</span><br>
<p>My small Java and C programs still break on Solaris 10 Sparc
<br>
and x86_64 and on Linux (Sun C 5.12) with different errors. I
<br>
have put everything into this email, because I have already
<br>
sent single error messages for these errors before for an
<br>
earlier version. It seems that nothing has changed for my
<br>
programs and my environment.
<br>
<p><p>Java program:
<br>
=============
<br>
<p>tyr java 105 ompi_info | grep -e MPI: -e &quot;C compiler:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r32716
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: cc
<br>
tyr java 106 mpijavac InitFinalizeMain.java
<br>
warning: [path] bad path element &quot;/usr/local/openmpi-1.9_64_cc/lib64/shmem.jar&quot;: no such file or directory
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
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=21678, tid=2
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
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid21678.log
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
mpiexec noticed that process rank 0 with PID 0 on node tyr exited on signal 6 (Abort).
<br>
--------------------------------------------------------------------------
<br>
tyr java 108 
<br>
<p><p><p><p>tyr java 108 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.9_64_cc/bin/mpiexec
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
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=21696, tid=2
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
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid21696.log
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
mpiexec noticed that process rank 0 with PID 0 on node tyr exited on signal 6 (Abort).
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
#8  0xffffffff7e4e6f88 in vm_close ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#9  0xffffffff7e4e4274 in lt_dlclose ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#10 0xffffffff7e53a574 in ri_destructor (obj=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_component_repository.c:382
<br>
#11 0xffffffff7e537d50 in opal_obj_run_destructors (object=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/class/opal_object.h:446
<br>
#12 0xffffffff7e539de4 in mca_base_component_repository_release (component=0xf000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_component_repository.c:240
<br>
#13 0xffffffff7e540448 in mca_base_component_unload (component=0x0, output_id=-2145509376)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7e5404ec in mca_base_component_close (component=0xffffff7b000030ff, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;output_id=255)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7e5405fc in mca_base_components_close (output_id=767, components=0x0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7f73cdf800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7e54053c in mca_base_framework_components_close (framework=0xff, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7c801c4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_components_close.c:68
<br>
#17 0xffffffff7ee48d68 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/orte/mca/oob/base/oob_base_frame.c:98
<br>
#18 0xffffffff7e56c23c in mca_base_framework_close (framework=0xffffff7e4e413cff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7bb13f00 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.9a1r32716/orte/mca/ess/hnp/ess_hnp_module.c:857
<br>
#20 0xffffffff7ec3adf0 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.9a1r32716/orte/runtime/orte_finalize.c:66
<br>
#21 0x000000010000e264 in orterun (argc=4607, argv=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/orte/tools/orterun/orterun.c:1099
<br>
#22 0x00000001000046d4 in main (argc=255, argv=0xffffff7f0af87800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p><p><p><p>C program:
<br>
==========
<br>
<p>tyr small_prog 116 mpiexec -np 1 init_finalize
<br>
Hello!
<br>
tyr small_prog 117 mpiexec -np 2 init_finalize
<br>
select: Interrupted system call
<br>
[tyr.informatik.hs-fulda.de:22150] [[61600,0],0]-&gt;[[61600,1],0] pmix_server_msg_send_bytes: write failed: Broken 
<br>
pipe (32) [sd = 19]
<br>
[tyr.informatik.hs-fulda.de:22150] [[61600,0],0]-[[61600,1],0] pmix_server_peer_send_handler: unable to send 
<br>
message ON SOCKET 19
<br>
[tyr.informatik.hs-fulda.de:22152] [[61600,1],0] usock_peer_recv_handler: unable to recv message
<br>
[tyr.informatik.hs-fulda.de:22150] [[61600,0],0]-&gt;[[61600,1],0] pmix_server_msg_send_bytes: write failed: Broken 
<br>
pipe (32) [sd = 19]
<br>
[tyr.informatik.hs-fulda.de:22150] [[61600,0],0]-[[61600,1],0] pmix_server_peer_send_handler: unable to send 
<br>
message ON SOCKET 19
<br>
[tyr.informatik.hs-fulda.de:22154] [[61600,1],1] usock_peer_recv_handler: unable to recv message
<br>
^Ctyr small_prog 118 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.9_64_cc/bin/mpiece 
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
(gdb) run -np 2 init_finalize   
<br>
Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec -np 2 init_finalize
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
select: Interrupted system call
<br>
<p>Program received signal SIGPIPE, Broken pipe.
<br>
[Switching to Thread 1 (LWP 1)]
<br>
0xffffffff7d3dcdf8 in _write () from /lib/sparcv9/libc.so.1
<br>
(gdb) bt
<br>
#0  0xffffffff7d3dcdf8 in _write () from /lib/sparcv9/libc.so.1
<br>
#1  0xffffffff7d3ca23c in write () from /lib/sparcv9/libc.so.1
<br>
#2  0xffffffff7ed5c400 in send_bytes (peer=0xffffff7f73cdf8ff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.9a1r32716/orte/orted/pmix/pmix_server_sendrecv.c:83
<br>
#3  0xffffffff7ed5cb18 in pmix_server_send_handler (sd=479838208, flags=256, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cbdata=0x400020000001300)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.9a1r32716/orte/orted/pmix/pmix_server_sendrecv.c:188
<br>
#4  0xffffffff7e612b1c in event_persist_closure ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#5  0xffffffff7e612ca8 in event_process_active_single_queue ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#6  0xffffffff7e613048 in event_process_active ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#7  0xffffffff7e613a6c in opal_libevent2021_event_base_loop ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#8  0x000000010000e18c in orterun (argc=658510079, argv=0x10000001800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/orte/tools/orterun/orterun.c:1081
<br>
#9  0x00000001000046d4 in main (argc=1792, argv=0xffffff7ed5c5a400)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p><p><p>linpc1 small_prog 101 mpiexec -np 1 init_finalize
<br>
Hello!
<br>
linpc1 small_prog 102 mpiexec -np 2 init_finalize
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_proc_complete_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;(null)&quot; (-27) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[linpc1:13886] 1 more process has sent help message help-mpi-runtime.txt / mpi_init:startup:internal-failure
<br>
[linpc1:13886] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
linpc1 small_prog 103 
<br>
<p><p><p>Can I provide anything else?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25321.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<li><strong>Previous message:</strong> <a href="25319.php">JR Cary: "[OMPI users] Multiple threads for an mpi process"</a>
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

<?
$subject_val = "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 05:18:51 2014" -->
<!-- isoreceived="20140811091851" -->
<!-- sent="Mon, 11 Aug 2014 11:18:28 +0200 (CEST)" -->
<!-- isosent="20140811091828" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0" -->
<!-- id="201408110918.s7B9ISWf010526_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 05:18:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15607.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="15605.php">Kawashima, Takahiro: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Maybe in reply to:</strong> <a href="15605.php">Kawashima, Takahiro: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; Your commit r32459 fixed the bus error by correcting
</span><br>
<span class="quotelev1">&gt; opal/dss/dss_copy.c. It's OK for trunk because mca_dstore_hash
</span><br>
<span class="quotelev1">&gt; calls dss to copy data. But it's insufficient for v1.8 because
</span><br>
<span class="quotelev1">&gt; mca_db_hash doesn't call dss and copies data itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached patch is the minimum patch to fix it in v1.8.
</span><br>
<span class="quotelev1">&gt; My fix doesn't call dss but uses memcpy. I have confirmed it on
</span><br>
<span class="quotelev1">&gt; SPARC64/Linux.
</span><br>
<p>Thank you very much for your help. I applied your patch and it
<br>
fixes the bus error for my C programs as well. Unfortunately I
<br>
get a SIGSEGV for Java programs.
<br>
<p>tyr java 126 mpiexec -np 1 java InitFinalizeMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=10506, tid=2
<br>
...
<br>
<p><p>gdb shows the following backtrace.
<br>
<p>tyr java 127 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec 
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec -np 1 java InitFinalizeMain
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
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=10524, tid=2
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
# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; before starting Java 
<br>
again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid10524.log
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
mpiexec noticed that process rank 0 with PID 10524 on node tyr exited on signal 6 (Abort).
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
#8  0xffffffff7ec7748c in vm_close ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
<br>
#9  0xffffffff7ec74a6c in lt_dlclose ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
<br>
#10 0xffffffff7ec99b90 in ri_destructor (obj=0x1001eae10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_component_repository.c:391
<br>
#11 0xffffffff7ec984a8 in opal_obj_run_destructors (object=0x1001eae10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/class/opal_object.h:446
<br>
#12 0xffffffff7ec9940c in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_component_repository.c:244
<br>
#13 0xffffffff7ec9b754 in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7ec9b7e8 in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7ec9b8bc in mca_base_components_close (output_id=-1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7f12b930 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7ec9b824 in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f12b8e0 &lt;orte_oob_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:66
<br>
#17 0xffffffff7efae21c in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/orte/mca/oob/base/oob_base_frame.c:94
<br>
#18 0xffffffff7ecb28cc in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f12b8e0 &lt;orte_oob_base_framework&gt;)
<br>
---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7bf078c0 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.8.2rc4r32485/orte/mca/ess/hnp/ess_hnp_module.c:858
<br>
#20 0xffffffff7ef30a44 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.8.2rc4r32485/orte/runtime/orte_finalize.c:65
<br>
#21 0x00000001000070c4 in orterun (argc=5, argv=0xffffffff7fffe0d8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/orte/tools/orterun/orterun.c:1096
<br>
#22 0x0000000100003d70 in main (argc=5, argv=0xffffffff7fffe0d8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p>Kind regards and once more thank you very much
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; Sorry to response so late.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar, Ralph,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm sorry to response so late since last week.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ralph fixed the problem in r32459 and it was merged to v1.8
</span><br>
<span class="quotelev2">&gt; &gt; in r32474. But in v1.8 an additional custom patch is needed
</span><br>
<span class="quotelev2">&gt; &gt; because the db/dstore source codes are different between trunk
</span><br>
<span class="quotelev2">&gt; &gt; and v1.8.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm preparing and testing the custom patch just now.
</span><br>
<span class="quotelev2">&gt; &gt; Wait wait a minute please.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Takahiro Kawashima,
</span><br>
<span class="quotelev2">&gt; &gt; MPI development team,
</span><br>
<span class="quotelev2">&gt; &gt; Fujitsu
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thank you very much to everybody who tried to solve my bus
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error problem on Solaris 10 Sparc. I thought that you found
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and fixed it, so that I installed openmpi-1.8.2rc4r32485 on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; my machines (Solaris 10 Sparc (tyr), Solaris 10 x86_64 (sunpc1),
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openSUSE Linux 12.1 x86_64 (linpc1)) with gcc-4.9.0. A small
</span><br>
<span class="quotelev3">&gt; &gt; &gt; program works on my x86_64 architectures, but still breaks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with a bus error on my Sparc system.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; linpc1 fd1026 106 mpiexec -np 1 init_finalize
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; linpc1 fd1026 106 exit
</span><br>
<span class="quotelev3">&gt; &gt; &gt; logout
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 113 ssh sunpc1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sunpc1 fd1026 101 mpiexec -np 1 init_finalize
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sunpc1 fd1026 102 exit
</span><br>
<span class="quotelev3">&gt; &gt; &gt; logout
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 114 mpiexec -np 1 init_finalize
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:21109] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:21109] Signal: Bus Error (10)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; gdb shows the following backtrace.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 122 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec
</span><br>
<span class="quotelev3">&gt; &gt; &gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) run -np 1 init_finalize
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Starting program: /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec -np 1 init_finalize
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [New LWP    2        ]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:21158] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:21158] Signal: Bus Error (10)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:21158] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:21158] Failing at address: ffffffff7fffd224
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xcd130
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3ee8 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_db_base_store+0xc8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_decode_pidmap+0x798
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_nidmap_init+0x3cc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x226c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_init+0x308
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_init+0x31c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:MPI_Init+0x2a8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x7c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr:21158] *** End of error message ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpiexec noticed that process rank 0 with PID 21158 on node tyr exited on signal 10 (Bus Error).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [LWP    2         exited]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [New Thread 2        ]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #8  0xffffffff7ec7748c in vm_close () from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #9  0xffffffff7ec74a6c in lt_dlclose () from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #10 0xffffffff7ec99b90 in ri_destructor (obj=0x1001ead30)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_component_repository.c:391
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #11 0xffffffff7ec984a8 in opal_obj_run_destructors (object=0x1001ead30)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/class/opal_object.h:446
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #12 0xffffffff7ec9940c in mca_base_component_repository_release (
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_component_repository.c:244
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #13 0xffffffff7ec9b754 in mca_base_component_unload (
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #14 0xffffffff7ec9b7e8 in mca_base_component_close (
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #15 0xffffffff7ec9b8bc in mca_base_components_close (output_id=-1, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     components=0xffffffff7f12b930 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #16 0xffffffff7ec9b824 in mca_base_framework_components_close (
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     framework=0xffffffff7f12b8e0 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #17 0xffffffff7efae21c in orte_oob_base_close ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/orte/mca/oob/base/oob_base_frame.c:94
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #18 0xffffffff7ecb28cc in mca_base_framework_close (
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     framework=0xffffffff7f12b8e0 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #19 0xffffffff7bf078c0 in rte_finalize ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../../openmpi-1.8.2rc4r32485/orte/mca/ess/hnp/ess_hnp_module.c:858
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #20 0xffffffff7ef30a44 in orte_finalize ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../openmpi-1.8.2rc4r32485/orte/runtime/orte_finalize.c:65
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #21 0x00000001000070c4 in orterun (argc=4, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/orte/tools/orterun/orterun.c:1096
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #22 0x0000000100003d70 in main (argc=4, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (gdb) 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is this a new problem? I would be grateful if somebody could
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fix it. Thank you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Siegmar
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15607.php">George Bosilca: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="15605.php">Kawashima, Takahiro: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Maybe in reply to:</strong> <a href="15605.php">Kawashima, Takahiro: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
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

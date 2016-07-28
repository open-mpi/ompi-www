<?
$subject_val = "[OMPI users] SIGSEV with openmpi-1.8.2rc4r32485 on Solaris for Sun C and Java";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 03:23:58 2014" -->
<!-- isoreceived="20140811072358" -->
<!-- sent="Mon, 11 Aug 2014 09:23:40 +0200 (CEST)" -->
<!-- isosent="20140811072340" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] SIGSEV with openmpi-1.8.2rc4r32485 on Solaris for Sun C and Java" -->
<!-- id="201408110723.s7B7Nest021498_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] SIGSEV with openmpi-1.8.2rc4r32485 on Solaris for Sun C and Java<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 03:23:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24967.php">Kawashima, Takahiro: "Re: [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="24965.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.8.2rc4r32485 on my machines
<br>
(Solaris 10 Sparc (tyr), Solaris 10 x86_64 (sunpc1),
<br>
openSUSE Linux 12.1 x86_64 (linpc1)) with Sun C 5.12. A small
<br>
Java program breaks with SIGSEV on my Solaris systems.
<br>
<p>tyr java 118 ssh linpc1
<br>
linpc1 fd1026 101  mpiexec -np 1 java InitFinalizeMain
<br>
Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library 
<br>
/usr/local/openmpi-1.8.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have 
<br>
disabled stack guard. The VM will try to fix the stack guard now.
<br>
It's highly recommended that you fix the library with 'execstack -c &lt;libfile&gt;', 
<br>
or link it with '-z noexecstack'.
<br>
Hello!
<br>
linpc1 fd1026 102 exit
<br>
logout
<br>
tyr java 119 ssh sunpc1
<br>
sunpc1 fd1026 104  mpiexec -np 1 java InitFinalizeMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xfffffd7fff1d77f0, pid=24042, tid=2
<br>
...
<br>
<p>tyr java 121 mpiexec -np 1 java InitFinalizeMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=21379, tid=2
<br>
...
<br>
<p><p>gdb shows the following backtrace.
<br>
<p>tyr java 124 /usr/local/gdb-7.6.1_64_gcc/bin/gdb 
<br>
/usr/local/openmpi-1.8.2_64_cc/bin/mpiexec
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
(gdb) run -np 1 java InitFinalizeMain
<br>
Starting program: /usr/local/openmpi-1.8.2_64_cc/bin/mpiexec -np 1 java 
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
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=21399, tid=2
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
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid21399.log
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
mpiexec noticed that process rank 0 with PID 21399 on node tyr exited on signal 
<br>
6 (Abort).
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
#8  0xffffffff7e8cb348 in vm_close () from 
<br>
/usr/local/openmpi-1.8.2_64_cc/lib64/libopen-pal.so.6
<br>
#9  0xffffffff7e8c8634 in lt_dlclose () from 
<br>
/usr/local/openmpi-1.8.2_64_cc/lib64/libopen-pal.so.6
<br>
#10 0xffffffff7e91edcc in ri_destructor (obj=0xff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_component_repository.c
<br>
:391
<br>
#11 0xffffffff7e91c5a0 in opal_obj_run_destructors (object=0xffffff7c701d00ff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/class/opal_object.h:446
<br>
#12 0xffffffff7e91e61c in mca_base_component_repository_release 
<br>
(component=0x10ff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_component_repository.c
<br>
:244
<br>
#13 0xffffffff7e924c78 in mca_base_component_unload 
<br>
(component=0xffffff7f73c63800, output_id=67583)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7e924d1c in mca_base_component_close 
<br>
(component=0xffffff0000000100, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;output_id=268480767)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7e924e2c in mca_base_components_close (output_id=1947894015, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffff7f501368ff, skip=0x2ff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7e924d6c in mca_base_framework_components_close 
<br>
(framework=0xffffff7d7455d4ff, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;skip=0xffffff7f200a90ff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:68
<br>
#17 0xffffffff7ee1d7c8 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/orte/mca/oob/base/oob_base_frame.c:94
<br>
#18 0xffffffff7e954ac0 in mca_base_framework_close 
<br>
(framework=0xffffff0000004b00)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7be139fc in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../../openmpi-1.8.2rc4r32485/orte/mca/ess/hnp/ess_hnp_module.c:858
<br>
#20 0xffffffff7ec38274 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.8.2rc4r32485/orte/runtime/orte_finalize.c:65
<br>
#21 0x000000010000ddf0 in orterun (argc=3327, argv=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/orte/tools/orterun/orterun.c:1096
<br>
#22 0x0000000100004614 in main (argc=255, argv=0xffffff7f078ce800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p>It seems that I have now the same problem for Sun C and Java which I
<br>
reported for gcc and C. The C version of my small program works fine
<br>
with Sun C.
<br>
<p>tyr small_prog 129 mpiexec -np 1 init_finalize
<br>
Hello!
<br>
tyr small_prog 130 
<br>
<p><p>I would be grateful if somebody could fix th problem. Thank you very
<br>
much for any help in advance.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24967.php">Kawashima, Takahiro: "Re: [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="24965.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
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

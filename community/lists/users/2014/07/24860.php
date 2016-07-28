<?
$subject_val = "[OMPI users] problem with openmpi-1.8.2rc2r32288 on Solaris 10 Sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 14:30:45 2014" -->
<!-- isoreceived="20140723183045" -->
<!-- sent="Wed, 23 Jul 2014 20:30:30 +0200 (CEST)" -->
<!-- isosent="20140723183030" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with openmpi-1.8.2rc2r32288 on Solaris 10 Sparc" -->
<!-- id="201407231830.s6NIUUkP028602_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with openmpi-1.8.2rc2r32288 on Solaris 10 Sparc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-23 14:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24861.php">madhurima madhunapanthula: "[OMPI users] openib component not available"</a>
<li><strong>Previous message:</strong> <a href="24859.php">Joshua Ladd: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-1.8.2rc2r32288 on my machines (Solaris 10
<br>
Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with
<br>
Sun C 5.12 and gcc-4.9.0. Unfortunately I have problems with both
<br>
compilers on &quot;Solaris 10 Sparc&quot;. My small program works as expected
<br>
on &quot;Solaris 10 x86_64&quot; and Linux.
<br>
<p>Problem with Sun C 5.12:
<br>
------------------------
<br>
<p>tyr hello_1 128 which mpicc
<br>
/usr/local/openmpi-1.8.2_64_cc/bin/mpicc
<br>
tyr hello_1 129 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.8.2rc2r32288
<br>
tyr hello_1 130 mpicc hello_1_mpi.c 
<br>
tyr hello_1 131 mpiexec -np 2 a.out 
<br>
Process 0 of 2 running on tyr.informatik.hs-fulda.de
<br>
<p>Now 1 slave tasks are sending greetings.
<br>
<p>Process 1 of 2 running on tyr.informatik.hs-fulda.de
<br>
ld.so.1: a.out: fatal: relocation error:
<br>
&nbsp;&nbsp;file /usr/local/openmpi-1.8.2_64_cc/lib64/openmpi/:
<br>
&nbsp;&nbsp;symbol alloca: referenced symbol not found
<br>
ld.so.1: a.out: fatal: relocation error:
<br>
&nbsp;&nbsp;file /usr/local/openmpi-1.8.2_64_cc/lib64/openmpi/:
<br>
&nbsp;&nbsp;symbol alloca: referenced symbol not found
<br>
----------------------------------------------------------------------
<br>
mpiexec noticed that process rank 1 with PID 28377 on node tyr exited
<br>
&nbsp;&nbsp;on signal 9 (Killed).
<br>
----------------------------------------------------------------------
<br>
tyr hello_1 132 
<br>
<p><p><p>I have also a problem with the Java interface on Solaris Sparc and
<br>
x86_64 with mainly the same error message. 
<br>
<p>tyr java 150 mpijavac InitFinalizeMain.java 
<br>
tyr java 151 mpiexec -np 1 java InitFinalizeMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=28585, tid=2
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
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid28585.log
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
mpiexec noticed that process rank 0 with PID 28585 on node tyr exited on signal 6 (Abort).
<br>
--------------------------------------------------------------------------
<br>
tyr java 152 
<br>
<p><p><p>It works on Linux, but displays a warning.
<br>
<p>tyr java 153 ssh linpc1
<br>
linpc1 fd1026 101 cd /home/fd1026/work/skripte/master/parallel/prog/mpi/java
<br>
linpc1 java 102 mpijavac InitFinalizeMain.java 
<br>
linpc1 java 103 mpiexec -np 1 java InitFinalizeMain
<br>
Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library 
<br>
/usr/local/openmpi-1.8.2_64_cc/lib64/libmpi_java.so.1.2.0 which might have disabled stack guard. The VM will try 
<br>
to fix the stack guard now.
<br>
It's highly recommended that you fix the library with 'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
<br>
Hello!
<br>
linpc1 java 104 
<br>
<p><p><p>Problem with gcc-4.9.0:
<br>
-----------------------
<br>
<p>tyr hello_1 104 which mpicc
<br>
/usr/local/openmpi-1.8.2_64_gcc/bin/mpicc
<br>
tyr hello_1 105 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.8.2rc2r32288
<br>
tyr hello_1 106 mpicc hello_1_mpi.c 
<br>
tyr hello_1 107 mpiexec -np 2 a.out 
<br>
[tyr:28540] *** Process received signal ***
<br>
[tyr:28540] Signal: Bus Error (10)
<br>
[tyr:28540] Signal code: Invalid address alignment (1)
<br>
[tyr:28540] Failing at address: ffffffff7fffd1c4
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xccfd0
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3ee8 [ Signal 10 (BUS)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_db_base_store+0xc8
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_decode_pidmap+0x798
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_nidmap_init+0x3cc
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x226c
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_init+0x308
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_init+0x31c
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:PMPI_Init+0x2a8
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:main+0x20
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:_start+0x7c
<br>
[tyr:28540] *** End of error message ***
<br>
[tyr:28542] *** Process received signal ***
<br>
[tyr:28542] Signal: Bus Error (10)
<br>
[tyr:28542] Signal code: Invalid address alignment (1)
<br>
[tyr:28542] Failing at address: ffffffff7fffd1c4
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xccfd0
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3ee8 [ Signal 10 (BUS)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_db_base_store+0xc8
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_decode_pidmap+0x8f8
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_nidmap_init+0x3cc
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x226c
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_init+0x308
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_init+0x31c
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:PMPI_Init+0x2a8
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:main+0x20
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:_start+0x7c
<br>
[tyr:28542] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 1 with PID 28542 on node tyr exited on signal 10 (Bus Error).
<br>
--------------------------------------------------------------------------
<br>
tyr hello_1 108 
<br>
<p><p><p><p>I would be grateful, if somebody could solve the problems. Please let
<br>
me know if I can provide any other information.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24861.php">madhurima madhunapanthula: "[OMPI users] openib component not available"</a>
<li><strong>Previous message:</strong> <a href="24859.php">Joshua Ladd: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
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

<?
$subject_val = "[OMPI users] interrupted system call in openmpi-1.9a1r32664 on Soalris x86_64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 07:25:23 2014" -->
<!-- isoreceived="20140903112523" -->
<!-- sent="Wed, 3 Sep 2014 13:24:53 +0200 (CEST)" -->
<!-- isosent="20140903112453" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] interrupted system call in openmpi-1.9a1r32664 on Soalris x86_64" -->
<!-- id="201409031124.s83BOr9C004402_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] interrupted system call in openmpi-1.9a1r32664 on Soalris x86_64<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 07:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25244.php">Siegmar Gross: "[OMPI users] bus error in openmpi-1.9a1r32664 on Solaris Sparc"</a>
<li><strong>Previous message:</strong> <a href="25242.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-1.9a1r32664 on my machines (Solaris
<br>
10 Sparc (tyr), Solaris 10 x86_64 (sunpc1), and openSUSE Linux 12.1
<br>
x86_64 (linpc1)) with Sun C 5.12 and gcc-4.9.0.
<br>
<p>I get the following error for my Sun C version on Solaris x86_64.
<br>
<p>sunpc1 small_prog 110 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r32664
<br>
sunpc1 small_prog 111 mpicc init_finalize.c 
<br>
sunpc1 small_prog 112 mpiexec -np 1 a.out 
<br>
select: Interrupted system call
<br>
Hello!
<br>
sunpc1 small_prog 113 
<br>
<p><p>Unfortuantely gdb isn't helpful.
<br>
<p>sunpc1 small_prog 117 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.9_64_cc/bin/mpiexec 
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
This GDB was configured as &quot;i386-pc-solaris2.10&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
<br>
Reading symbols from /export2/prog/SunOS_x86_64/openmpi-1.9_64_cc/bin/orterun...done.
<br>
(gdb) run -np 1 a.out
<br>
Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec -np 1 a.out
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
select: Interrupted system call
<br>
Hello!
<br>
[LWP    2         exited]
<br>
[New Thread 2        ]
<br>
thread_to_lwp: td_ta_map_id2thr Debugger service failed
<br>
(gdb) bt
<br>
Target is executing.
<br>
(gdb) info frame
<br>
No stack.
<br>
(gdb) 
<br>
<p><p><p>I get the following output for two processes.
<br>
<p>sunpc1 small_prog 118 mpiexec -np 2 a.out
<br>
select: Interrupted system call
<br>
select: Interrupted system call
<br>
[sunpc1:25571] *** Process received signal ***
<br>
[sunpc1:25571] Signal: Segmentation Fault (11)
<br>
[sunpc1:25571] Signal code: Address not mapped (1)
<br>
[sunpc1:25571] Failing at address: 0
<br>
/export2/prog/SunOS_x86_64/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x2d
<br>
/export2/prog/SunOS_x86_64/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1e484b
<br>
/lib/amd64/libc.so.1:0xdd6b6
<br>
/lib/amd64/libc.so.1:0xd1f82
<br>
/lib/amd64/libc.so.1:strlen+0x30 [ Signal 11 (SEGV)]
<br>
/lib/amd64/libc.so.1:vsnprintf+0x51
<br>
/lib/amd64/libc.so.1:vasprintf+0x49
<br>
/export2/prog/SunOS_x86_64/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_show_help_vstring+0x83
<br>
/export2/prog/SunOS_x86_64/openmpi-1.9_64_cc/lib64/libopen-rte.so.0.0.0:orte_show_help+0xd7
<br>
/export2/prog/SunOS_x86_64/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0x14e1
<br>
/export2/prog/SunOS_x86_64/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:MPI_Init+0x1f8
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:main+0x21
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:0xaab
<br>
[sunpc1:25571] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 0 on node sunpc1 exited on signal 11 (Segmentation Fault).
<br>
--------------------------------------------------------------------------
<br>
sunpc1 small_prog 119 
<br>
<p><p><p><p>I would be grateful, if somebody can fix the problem. Thank you
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
<li><strong>Next message:</strong> <a href="25244.php">Siegmar Gross: "[OMPI users] bus error in openmpi-1.9a1r32664 on Solaris Sparc"</a>
<li><strong>Previous message:</strong> <a href="25242.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
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

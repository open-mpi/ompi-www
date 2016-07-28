<?
$subject_val = "[OMPI users] internal-failure with gcc-4.9.0 in openmpi-1.9a1r32664 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 07:51:15 2014" -->
<!-- isoreceived="20140903115115" -->
<!-- sent="Wed, 3 Sep 2014 13:50:54 +0200 (CEST)" -->
<!-- isosent="20140903115054" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] internal-failure with gcc-4.9.0 in openmpi-1.9a1r32664 on Linux" -->
<!-- id="201409031150.s83BosSB005740_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] internal-failure with gcc-4.9.0 in openmpi-1.9a1r32664 on Linux<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 07:50:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25247.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25245.php">Siegmar Gross: "[OMPI users] broken pipe in openmpi-1.9a1r32664 on Solaris Sparc"</a>
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
<p>I get the following internal failure for my gcc.4.9.0-version on
<br>
Linux. I also have the other errors which I already reported for
<br>
Sun C.
<br>
<p>linpc1 small_prog 118 ompi_info | grep -e MPI: -e &quot;C compiler:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r32664
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
linpc1 small_prog 118 mpicc init_finalize.c 
<br>
linpc1 small_prog 119 mpiexec -np 1 a.out 
<br>
Hello!
<br>
linpc1 small_prog 120 mpiexec -np 2 a.out
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
[linpc1:31592] 1 more process has sent help message help-mpi-runtime.txt / 
<br>
mpi_init:startup:internal-failure
<br>
[linpc1:31592] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
linpc1 small_prog 121 gdb mpiexec
<br>
GNU gdb (GDB) SUSE (7.3-41.1.2)
<br>
Copyright (C) 2011 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-suse-linux&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
<br>
Reading symbols from /usr/local/openmpi-1.9_64_gcc/bin/mpiexec...done.
<br>
(gdb) run -np 2 a.out
<br>
Starting program: /usr/local/openmpi-1.9_64_gcc/bin/mpiexec -np 2 a.out
<br>
Missing separate debuginfo for /lib64/ld-linux-x86-64.so.2
<br>
Try: zypper install -C &quot;debuginfo(build-id)=f20c99249f5a5776e1377d3bd728502e3f455a3f&quot;
<br>
Missing separate debuginfo for /usr/lib64/libnuma.so.1
<br>
Try: zypper install -C &quot;debuginfo(build-id)=a459130c584aae8d867df651f0d99b8f359c369c&quot;
<br>
Missing separate debuginfo for /usr/lib64/libpciaccess.so.0
<br>
Try: zypper install -C &quot;debuginfo(build-id)=a86c28f439ba7254afee2afed26e9d6c14a4a9f2&quot;
<br>
Missing separate debuginfo for /lib64/libdl.so.2
<br>
Try: zypper install -C &quot;debuginfo(build-id)=8d32fdb9682242cc2ebc1d9e6d717c6eaa51714e&quot;
<br>
Missing separate debuginfo for /lib64/librt.so.1
<br>
Try: zypper install -C &quot;debuginfo(build-id)=b38afcf428f2107c56c0939b59ef737a5571348c&quot;
<br>
Missing separate debuginfo for /lib64/libm.so.6
<br>
Try: zypper install -C &quot;debuginfo(build-id)=8ee6418257efac9e7fbadc657c30c62e0a002d57&quot;
<br>
Missing separate debuginfo for /lib64/libutil.so.1
<br>
Try: zypper install -C &quot;debuginfo(build-id)=ae21e2f7efccaf6967e62a9691d2cd2f1533d6d3&quot;
<br>
Missing separate debuginfo for /lib64/libpthread.so.0
<br>
Try: zypper install -C &quot;debuginfo(build-id)=1f368f83b776815033caab6e389d7030bba4593e&quot;
<br>
[Thread debugging using libthread_db enabled]
<br>
Missing separate debuginfo for /lib64/libc.so.6
<br>
Try: zypper install -C &quot;debuginfo(build-id)=7b169b1db50384b70e3e4b4884cd56432d5de796&quot;
<br>
[New Thread 0x7ffff4939700 (LWP 31620)]
<br>
Detaching after fork from child process 31621.
<br>
Detaching after fork from child process 31622.
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
[linpc1:31603] 1 more process has sent help message help-mpi-runtime.txt / 
<br>
mpi_init:startup:internal-failure
<br>
[linpc1:31603] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[Thread 0x7ffff4939700 (LWP 31620) exited]
<br>
[Inferior 1 (process 31603) exited with code 01]
<br>
(gdb) bt
<br>
No stack.
<br>
(gdb) 
<br>
<p><p><p>I would be grateful, if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25247.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Previous message:</strong> <a href="25245.php">Siegmar Gross: "[OMPI users] broken pipe in openmpi-1.9a1r32664 on Solaris Sparc"</a>
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

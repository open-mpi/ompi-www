<?
$subject_val = "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 11:52:48 2014" -->
<!-- isoreceived="20140902155248" -->
<!-- sent="Tue, 2 Sep 2014 08:52:35 -0700" -->
<!-- isosent="20140902155235" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657" -->
<!-- id="A9351CAD-DBC9-4C56-A394-458133AA2F8F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201409021301.s82D1qje000674_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 11:52:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25224.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25222.php">Ralph Castain: "Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<li><strong>In reply to:</strong> <a href="25217.php">Siegmar Gross: "[OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25225.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar
<br>
<p>Could you please configure this OMPI install with --enable-debug so that gdb will provide line numbers where the error is occurring? Otherwise, I'm having a hard time chasing this problem down.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Sep 2, 2014, at 6:01 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; C problem:
</span><br>
<span class="quotelev1">&gt; ==========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 111 mpiexec -np 1 --host linpc0 init_finalize
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:00593] mca_oob_tcp_accept: accept() failed: Error 0 (11).
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 112 mpiexec -np 1 --host sunpc0 init_finalize
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:00597] mca_oob_tcp_accept: accept() failed: Error 0 (11).
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 113 mpiexec -np 1 --host tyr init_finalize
</span><br>
<span class="quotelev1">&gt; [tyr:00606] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:00606] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [tyr:00606] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [tyr:00606] Failing at address: ffffffff7fffd7fc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x1c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1a4960
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack_int64+0xf4 [ Signal 
</span><br>
<span class="quotelev1">&gt; 2096416616 (?)]
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack_buffer+0x168
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack+0x24c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/openmpi/mca_pmix_native.so:0x14e10
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0xd18
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:MPI_Init+0x26c
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x12c
</span><br>
<span class="quotelev1">&gt; [tyr:00606] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 606 on node tyr exited on signal 10 (Bus Error).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr small_prog 114 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gdb shows the following backtrace.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 115 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.9_64_cc/bin/mpiexec 
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
<span class="quotelev1">&gt; Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun...done.
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 1 --host tyr init_finalize   
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec -np 1 --host tyr init_finalize
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; [tyr:00628] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:00628] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [tyr:00628] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [tyr:00628] Failing at address: ffffffff7fffd73c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_backtrace_print+0x1c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:0x1a4960
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack_int64+0xf4 [ Signal 
</span><br>
<span class="quotelev1">&gt; 2096416616 (?)]
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack_buffer+0x168
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libopen-pal.so.0.0.0:opal_dss_unpack+0x24c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/openmpi/mca_pmix_native.so:0x14e10
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:ompi_mpi_init+0xd18
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/lib64/libmpi.so.0.0.0:MPI_Init+0x26c
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x12c
</span><br>
<span class="quotelev1">&gt; [tyr:00628] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 628 on node tyr exited on signal 10 (Bus Error).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25224.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt; 28	slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25222.php">Ralph Castain: "Re: [OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<li><strong>In reply to:</strong> <a href="25217.php">Siegmar Gross: "[OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25225.php">Ralph Castain: "Re: [OMPI users] problems and bus error with openmpi-1.9a1r32657"</a>
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

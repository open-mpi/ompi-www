<?
$subject_val = "[OMPI users] broken pipe in openmpi-1.9a1r32664 on Solaris Sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 07:33:46 2014" -->
<!-- isoreceived="20140903113346" -->
<!-- sent="Wed, 3 Sep 2014 13:33:18 +0200 (CEST)" -->
<!-- isosent="20140903113318" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] broken pipe in openmpi-1.9a1r32664 on Solaris Sparc" -->
<!-- id="201409031133.s83BXIjT004482_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] broken pipe in openmpi-1.9a1r32664 on Solaris Sparc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 07:33:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25246.php">Siegmar Gross: "[OMPI users] internal-failure with gcc-4.9.0 in openmpi-1.9a1r32664 on Linux"</a>
<li><strong>Previous message:</strong> <a href="25244.php">Siegmar Gross: "[OMPI users] bus error in openmpi-1.9a1r32664 on Solaris Sparc"</a>
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
<p>I get the following error for my Sun C version on Solaris Sparc.
<br>
<p>tyr small_prog 129 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r32664
<br>
tyr small_prog 130 mpicc init_finalize.c 
<br>
tyr small_prog 134 /usr/local/gdb-7.6.1_64_gcc/bin/gdb 
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
(gdb) run -np 2 a.out
<br>
Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec -np 2 a.out
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
#2  0xffffffff7ed5c3f8 in send_bytes (peer=0xffffff7f73cdf8ff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.9a1r32664/orte/orted/pmix/pmix_server_sendrecv.c:83
<br>
#3  0xffffffff7ed5cb10 in pmix_server_send_handler (sd=479772672, flags=256, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cbdata=0x400020000001300)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.9a1r32664/orte/orted/pmix/pmix_server_sendrecv.c:188
<br>
#4  0xffffffff7e6125bc in event_persist_closure ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#5  0xffffffff7e612748 in event_process_active_single_queue ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#6  0xffffffff7e612ae8 in event_process_active ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#7  0xffffffff7e61350c in opal_libevent2021_event_base_loop ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#8  0x000000010000e18c in orterun (argc=658338047, argv=0x10000001800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32664/orte/tools/orterun/orterun.c:1081
<br>
#9  0x00000001000046d4 in main (argc=1792, argv=0xffffff7ed5c59c00)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32664/orte/tools/orterun/main.c:13
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
<li><strong>Next message:</strong> <a href="25246.php">Siegmar Gross: "[OMPI users] internal-failure with gcc-4.9.0 in openmpi-1.9a1r32664 on Linux"</a>
<li><strong>Previous message:</strong> <a href="25244.php">Siegmar Gross: "[OMPI users] bus error in openmpi-1.9a1r32664 on Solaris Sparc"</a>
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

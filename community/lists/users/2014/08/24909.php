<?
$subject_val = "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 06:00:51 2014" -->
<!-- isoreceived="20140805100051" -->
<!-- sent="Tue, 5 Aug 2014 11:59:34 +0200 (CEST)" -->
<!-- isosent="20140805095934" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc" -->
<!-- id="201408050959.s759xYOo027879_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc" -->
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
<strong>Subject:</strong> Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 05:59:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24910.php">Ralph Castain: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="24908.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24869.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24910.php">Ralph Castain: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Reply:</strong> <a href="24910.php">Ralph Castain: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm sorry to answer so late, but last week I didn't have Internet
<br>
access. In the meantime I've installed openmpi-1.8.2rc3 and I get
<br>
the same error.
<br>
<p><span class="quotelev1">&gt; This looks like the typical type of alignment error that we used
</span><br>
<span class="quotelev1">&gt; to see when testing regularly on SPARC.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like the error was happening in mca_db_hash.so.  Could
</span><br>
<span class="quotelev1">&gt; you get a stack trace / file+line number where it was failing
</span><br>
<span class="quotelev1">&gt; in mca_db_hash?  (i.e., the actual bad code will likely be under
</span><br>
<span class="quotelev1">&gt; opal/mca/db/hash somewhere)
</span><br>
<p>Unfortunately I don't get a file+line number from a file in
<br>
opal/mca/db/Hash.
<br>
<p><p><p>tyr small_prog 102 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.8.2rc3
<br>
tyr small_prog 103 which mpicc
<br>
/usr/local/openmpi-1.8.2_64_gcc/bin/mpicc
<br>
tyr small_prog 104 mpicc init_finalize.c 
<br>
tyr small_prog 106 /opt/solstudio12.3/bin/sparcv9/dbx /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec 
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
<br>
Reading mpiexec
<br>
Reading ld.so.1
<br>
Reading libopen-rte.so.7.0.4
<br>
Reading libopen-pal.so.6.2.0
<br>
Reading libsendfile.so.1
<br>
Reading libpicl.so.1
<br>
Reading libkstat.so.1
<br>
Reading liblgrp.so.1
<br>
Reading libsocket.so.1
<br>
Reading libnsl.so.1
<br>
Reading libgcc_s.so.1
<br>
Reading librt.so.1
<br>
Reading libm.so.2
<br>
Reading libpthread.so.1
<br>
Reading libc.so.1
<br>
Reading libdoor.so.1
<br>
Reading libaio.so.1
<br>
Reading libmd.so.1
<br>
(dbx) check -all
<br>
access checking - ON
<br>
memuse checking - ON
<br>
(dbx) run -np 1 a.outRunning: mpiexec -np 1 a.out 
<br>
(process id 27833)
<br>
Reading rtcapihook.so
<br>
Reading libdl.so.1
<br>
Reading rtcaudit.so
<br>
Reading libmapmalloc.so.1
<br>
Reading libgen.so.1
<br>
Reading libc_psr.so.1
<br>
Reading rtcboot.so
<br>
Reading librtc.so
<br>
Reading libmd_psr.so.1
<br>
RTC: Enabling Error Checking...
<br>
RTC: Running program...
<br>
Write to unallocated (wua) on thread 1:
<br>
Attempting to write 1 byte at address 0xffffffff79f04000
<br>
t_at_1 (l_at_1) stopped in _readdir at 0xffffffff55174da0
<br>
0xffffffff55174da0: _readdir+0x0064:    call     _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff55342a80
<br>
(dbx) where
<br>
current thread: t_at_1
<br>
=&gt;[1] _readdir(0xffffffff79f00300, 0x2e6800, 0x4, 0x2d, 0x4, 0xffffffff79f00300), at 0xffffffff55174da0 
<br>
&nbsp;&nbsp;[2] list_files_by_dir(0x100138fd8, 0xffffffff7fffd1f0, 0xffffffff7fffd1e8, 0xffffffff7fffd210, 0x0, 0xffffffff702a0010), at 
<br>
0xffffffff63174594 
<br>
&nbsp;&nbsp;[3] foreachfile_callback(0x100138fd8, 0xffffffff7fffd458, 0x0, 0x2e, 0x0, 0xffffffff702a0010), at 0xffffffff6317461c 
<br>
&nbsp;&nbsp;[4] foreach_dirinpath(0x1001d8a28, 0x0, 0xffffffff631745e0, 0xffffffff7fffd458, 0x0, 0xffffffff702a0010), at 0xffffffff63171684 
<br>
&nbsp;&nbsp;[5] lt_dlforeachfile(0x1001d8a28, 0xffffffff6319656c, 0x0, 0x53, 0x2f, 0xf), at 0xffffffff63174748 
<br>
&nbsp;&nbsp;[6] find_dyn_components(0x0, 0xffffffff6323b570, 0x0, 0x1, 0xffffffff7fffd6a0, 0xffffffff702a0010), at 0xffffffff63195e38 
<br>
&nbsp;&nbsp;[7] mca_base_component_find(0x0, 0xffffffff6323b570, 0xffffffff6335e1b0, 0x0, 0xffffffff7fffd6a0, 0x1), at 0xffffffff631954d8 
<br>
&nbsp;&nbsp;[8] mca_base_framework_components_register(0xffffffff6335e1c0, 0x0, 0x3e, 0x0, 0x3b, 0x100800), at 0xffffffff631b1638 
<br>
&nbsp;&nbsp;[9] mca_base_framework_register(0xffffffff6335e1c0, 0x0, 0x2, 0xffffffff7fffd8d0, 0x0, 0xffffffff702a0010), at 0xffffffff631b24d4 
<br>
&nbsp;&nbsp;[10] mca_base_framework_open(0xffffffff6335e1c0, 0x0, 0x2, 0xffffffff7fffd990, 0x0, 0xffffffff702a0010), at 0xffffffff631b25d0 
<br>
&nbsp;&nbsp;[11] opal_init(0xffffffff7fffdd70, 0xffffffff7fffdd78, 0x100117c60, 0xffffffff7fffde58, 0x400, 0x100117c60), at 
<br>
0xffffffff63153694 
<br>
&nbsp;&nbsp;[12] orterun(0x4, 0xffffffff7fffde58, 0x2, 0xffffffff7fffdda0, 0x0, 0xffffffff702a0010), at 0x100005078 
<br>
&nbsp;&nbsp;[13] main(0x4, 0xffffffff7fffde58, 0xffffffff7fffde80, 0x100117c60, 0x100000000, 0xffffffff6a700200), at 0x100003d68 
<br>
(dbx) 
<br>
<p><p><p>I get the following output with gdb.
<br>
<p>tyr small_prog 107 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec 
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
Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/bin/orterun...done.
<br>
(gdb) run -np 1 a.out
<br>
Starting program: /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec -np 1 a.out
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
[tyr:27867] *** Process received signal ***
<br>
[tyr:27867] Signal: Bus Error (10)
<br>
[tyr:27867] Signal code: Invalid address alignment (1)
<br>
[tyr:27867] Failing at address: ffffffff7fffd224
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xccfa0
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
/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:main+0x20
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/small_prog/a.out:_start+0x7c
<br>
[tyr:27867] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 27867 on node tyr exited on signal 10 (Bus Error).
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
#8  0xffffffff7ec7746c in vm_close ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
<br>
#9  0xffffffff7ec74a4c in lt_dlclose ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
<br>
#10 0xffffffff7ec99b70 in ri_destructor (obj=0x1001ead30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_component_repository.c:391
<br>
#11 0xffffffff7ec98488 in opal_obj_run_destructors (object=0x1001ead30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc3/opal/class/opal_object.h:446
<br>
#12 0xffffffff7ec993ec in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023cf0 &lt;mca_oob_tcp_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_component_repository.c:244
<br>
#13 0xffffffff7ec9b734 in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023cf0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7ec9b7c8 in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023cf0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7ec9b89c in mca_base_components_close (output_id=-1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7f12b430 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
<br>
---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7ec9b804 in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f12b3e0 &lt;orte_oob_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_components_close.c:66
<br>
#17 0xffffffff7efae1e4 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc3/orte/mca/oob/base/oob_base_frame.c:94
<br>
#18 0xffffffff7ecb28ac in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f12b3e0 &lt;orte_oob_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc3/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7bf078c0 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.8.2rc3/orte/mca/ess/hnp/ess_hnp_module.c:858
<br>
#20 0xffffffff7ef30a44 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.8.2rc3/orte/runtime/orte_finalize.c:65
<br>
#21 0x00000001000070c4 in orterun (argc=4, argv=0xffffffff7fffe0e8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc3/orte/tools/orterun/orterun.c:1096
<br>
#22 0x0000000100003d70 in main (argc=4, argv=0xffffffff7fffe0e8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc3/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p>Is the above information helpful to track down the error? Do you need
<br>
anything else? Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><span class="quotelev1">&gt; On Jul 25, 2014, at 2:08 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have installed openmpi-1.8.2rc2 with gcc-4.9.0 on Solaris
</span><br>
<span class="quotelev2">&gt; &gt; 10 Sparc and I receive a bus error, if I run a small program.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 105 mpiexec -np 2 a.out 
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:29164] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:29164] Signal: Bus Error (10)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:29164] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:29164] Failing at address: ffffffff7fffd1c4
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xccfd0
</span><br>
<span class="quotelev2">&gt; &gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev2">&gt; &gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev2">&gt; &gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3ee8 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_db_base_store+0xc8
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_decode_pidmap+0x798
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_nidmap_init+0x3cc
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x226c
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_init+0x308
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_init+0x31c
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:PMPI_Init+0x2a8
</span><br>
<span class="quotelev2">&gt; &gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:main+0x20
</span><br>
<span class="quotelev2">&gt; &gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:_start+0x7c
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:29164] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I get the following output if I run the program in &quot;dbx&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; RTC: Enabling Error Checking...
</span><br>
<span class="quotelev2">&gt; &gt; RTC: Running program...
</span><br>
<span class="quotelev2">&gt; &gt; Write to unallocated (wua) on thread 1:
</span><br>
<span class="quotelev2">&gt; &gt; Attempting to write 1 byte at address 0xffffffff79f04000
</span><br>
<span class="quotelev2">&gt; &gt; t_at_1 (l_at_1) stopped in _readdir at 0xffffffff55174da0
</span><br>
<span class="quotelev2">&gt; &gt; 0xffffffff55174da0: _readdir+0x0064:    call     _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff55342a80
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hopefully the above output helps to fix the error. Can I provide
</span><br>
<span class="quotelev2">&gt; &gt; anything else? Thank you very much for any help in advance.
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24869.php">http://www.open-mpi.org/community/lists/users/2014/07/24869.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24910.php">Ralph Castain: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="24908.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24869.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24910.php">Ralph Castain: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Reply:</strong> <a href="24910.php">Ralph Castain: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
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

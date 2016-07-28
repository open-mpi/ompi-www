<?
$subject_val = "Re: [OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 08:20:28 2014" -->
<!-- isoreceived="20140902122028" -->
<!-- sent="Tue, 2 Sep 2014 14:20:01 +0200 (CEST)" -->
<!-- isosent="20140902122001" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0" -->
<!-- id="201409021220.s82CK183029056_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0" -->
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
<strong>Subject:</strong> Re: [OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 08:20:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25216.php">Siegmar Gross: "[OMPI users] Java problem with openmpi-1.8.3a1r32641"</a>
<li><strong>Previous message:</strong> <a href="25214.php">Siegmar Gross: "[OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<li><strong>Maybe in reply to:</strong> <a href="25213.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Takahiro,
<br>
<p><span class="quotelev1">&gt; I forgot to follow the previous report, sorry.
</span><br>
<span class="quotelev1">&gt; The patch I suggested is not included in Open MPI 1.8.2.
</span><br>
<span class="quotelev1">&gt; The backtrace Siegmar reported points the problem that I fixed
</span><br>
<span class="quotelev1">&gt; in the patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/community/lists/users/2014/08/24968.php">http://www.open-mpi.org/community/lists/users/2014/08/24968.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar:
</span><br>
<span class="quotelev1">&gt; Could you try my patch again?
</span><br>
<p>Yes, your patch solves the bus error in openmpi-1.8.2 and
<br>
openmpi-1.8.3a1r32641.
<br>
<p><p>Thank you very much for your help once more
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; Ralph (or someone committer):
</span><br>
<span class="quotelev1">&gt; Open MPI 1.8 needs custom patch that I posted. See my previous mail.
</span><br>
<span class="quotelev1">&gt; Could you review it and commit it to v1.8 branch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Takahiro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; yesterday I installed openmpi-1.8.2 on my machines (Solaris 10 Sparc
</span><br>
<span class="quotelev2">&gt; &gt; (tyr), Solaris 10 x86_64 (sunpc0), and openSUSE Linux 12.1 x86_64
</span><br>
<span class="quotelev2">&gt; &gt; (linpc0)) with gcc-4.9.0. A small program works on some machines,
</span><br>
<span class="quotelev2">&gt; &gt; but breaks with a bus error on Solaris 10 Sparc.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 118 which mpicc
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi-1.8.2_64_gcc/bin/mpicc
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 119 ompi_info | grep MPI:
</span><br>
<span class="quotelev2">&gt; &gt;                 Open MPI: 1.8.2
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 120 mpiexec -np 1 --host linpc0 init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 121 mpiexec -np 1 --host sunpc0 init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 122 mpiexec -np 1 --host tyr init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:28081] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:28081] Signal: Bus Error (10)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:28081] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:28081] Failing at address: ffffffff7fffd304
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_b
<br>
acktrace_print+0x2c
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xcd11
<br>
8
<br>
<span class="quotelev2">&gt; &gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev2">&gt; &gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev2">&gt; &gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3e
<br>
e8 [ Signal 10 (BUS)]
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_d
<br>
b_base_store+0xc8
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
<br>
til_decode_pidmap+0x798
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
<br>
til_nidmap_init+0x3cc
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x22
<br>
6c
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_i
<br>
nit+0x308
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_in
<br>
it+0x31c
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:MPI_Init+0x
<br>
2a8
<br>
<span class="quotelev2">&gt; &gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev2">&gt; &gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x7c
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:28081] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec noticed that process rank 0 with PID 28081 on node tyr exited on 
</span><br>
signal 10 (Bus Error).
<br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 123 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; gdb shows the following backtrace.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 123 /usr/local/gdb-7.6.1_64_gcc/bin/gdb 
</span><br>
/usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec  
<br>
<span class="quotelev2">&gt; &gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt; &gt; License GPLv3+: GNU GPL version 3 or later 
</span><br>
&lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
<span class="quotelev2">&gt; &gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev2">&gt; &gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev2">&gt; &gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev2">&gt; &gt; This GDB was configured as &quot;sparc-sun-solaris2.10&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev2">&gt; &gt; Reading symbols from 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/bin/orterun...done.
<br>
<span class="quotelev2">&gt; &gt; (gdb) run -np 1 --host tyr init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; Starting program: /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec -np 1 --host 
</span><br>
tyr init_finalize
<br>
<span class="quotelev2">&gt; &gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt; &gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev2">&gt; &gt; [New LWP    2        ]
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:28099] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:28099] Signal: Bus Error (10)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:28099] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:28099] Failing at address: ffffffff7fffd244
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_b
<br>
acktrace_print+0x2c
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xcd11
<br>
8
<br>
<span class="quotelev2">&gt; &gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev2">&gt; &gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev2">&gt; &gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3e
<br>
e8 [ Signal 10 (BUS)]
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_d
<br>
b_base_store+0xc8
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
<br>
til_decode_pidmap+0x798
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_u
<br>
til_nidmap_init+0x3cc
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x22
<br>
6c
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_i
<br>
nit+0x308
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_in
<br>
it+0x31c
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:MPI_Init+0x
<br>
2a8
<br>
<span class="quotelev2">&gt; &gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev2">&gt; &gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x7c
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:28099] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec noticed that process rank 0 with PID 28099 on node tyr exited on 
</span><br>
signal 10 (Bus Error).
<br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [LWP    2         exited]
</span><br>
<span class="quotelev2">&gt; &gt; [New Thread 2        ]
</span><br>
<span class="quotelev2">&gt; &gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev2">&gt; &gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to 
</span><br>
satisfy query
<br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from 
</span><br>
/usr/lib/sparcv9/ld.so.1
<br>
<span class="quotelev2">&gt; &gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; #8  0xffffffff7ec77474 in vm_close () from 
</span><br>
/usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
<br>
<span class="quotelev2">&gt; &gt; #9  0xffffffff7ec74a54 in lt_dlclose ()
</span><br>
<span class="quotelev2">&gt; &gt;    from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #10 0xffffffff7ec99b78 in ri_destructor (obj=0x1001eada0)
</span><br>
<span class="quotelev2">&gt; &gt;     at 
</span><br>
../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:391
<br>
<span class="quotelev2">&gt; &gt; #11 0xffffffff7ec98490 in opal_obj_run_destructors (object=0x1001eada0)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2/opal/class/opal_object.h:446
</span><br>
<span class="quotelev2">&gt; &gt; #12 0xffffffff7ec993f4 in mca_base_component_repository_release (
</span><br>
<span class="quotelev2">&gt; &gt;     component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;     at 
</span><br>
../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:244
<br>
<span class="quotelev2">&gt; &gt; #13 0xffffffff7ec9b73c in mca_base_component_unload (
</span><br>
<span class="quotelev2">&gt; &gt;     component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev2">&gt; &gt;     at 
</span><br>
../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:47
<br>
<span class="quotelev2">&gt; &gt; #14 0xffffffff7ec9b7d0 in mca_base_component_close (
</span><br>
<span class="quotelev2">&gt; &gt;     component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev2">&gt; &gt;     at 
</span><br>
../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:60
<br>
<span class="quotelev2">&gt; &gt; #15 0xffffffff7ec9b8a4 in mca_base_components_close (output_id=-1, 
</span><br>
<span class="quotelev2">&gt; &gt;     components=0xffffffff7f12b030 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev2">&gt; &gt;     at 
</span><br>
../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:86
<br>
<span class="quotelev2">&gt; &gt; #16 0xffffffff7ec9b80c in mca_base_framework_components_close (
</span><br>
<span class="quotelev2">&gt; &gt;     framework=0xffffffff7f12afe0 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev2">&gt; &gt;     at 
</span><br>
../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:66
<br>
<span class="quotelev2">&gt; &gt; #17 0xffffffff7efae0e8 in orte_oob_base_close ()
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2/orte/mca/oob/base/oob_base_frame.c:94
</span><br>
<span class="quotelev2">&gt; &gt; #18 0xffffffff7ecb28b4 in mca_base_framework_close (
</span><br>
<span class="quotelev2">&gt; &gt;     framework=0xffffffff7f12afe0 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev2">&gt; &gt; #19 0xffffffff7bf078c0 in rte_finalize ()
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../../openmpi-1.8.2/orte/mca/ess/hnp/ess_hnp_module.c:858
</span><br>
<span class="quotelev2">&gt; &gt; #20 0xffffffff7ef30924 in orte_finalize () at 
</span><br>
../../openmpi-1.8.2/orte/runtime/orte_finalize.c:65
<br>
<span class="quotelev2">&gt; &gt; #21 0x00000001000070c4 in orterun (argc=6, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2/orte/tools/orterun/orterun.c:1096
</span><br>
<span class="quotelev2">&gt; &gt; #22 0x0000000100003d70 in main (argc=6, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would be grateful, if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev2">&gt; &gt; very much for any help in advance.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25216.php">Siegmar Gross: "[OMPI users] Java problem with openmpi-1.8.3a1r32641"</a>
<li><strong>Previous message:</strong> <a href="25214.php">Siegmar Gross: "[OMPI users] SIGSEGV with Java, openmpi-1.8.2, and Sun C and gcc-4.9.0"</a>
<li><strong>Maybe in reply to:</strong> <a href="25213.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0"</a>
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

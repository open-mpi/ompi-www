<?
$subject_val = "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 07:31:17 2014" -->
<!-- isoreceived="20140902113117" -->
<!-- sent="Tue, 2 Sep 2014 11:31:10 +0000" -->
<!-- isosent="20140902113110" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0" -->
<!-- id="20140902203111.7aaeb378084481ca9eb16337_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="201409021016.s82AGHmL028102_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2 and gcc-4.9.0<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 07:31:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15772.php">Jeff Squyres (jsquyres): "[OMPI devel] Migrating Trac wiki and tickets to Github"</a>
<li><strong>Previous message:</strong> <a href="15770.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] race condition in coll/ml"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar, Ralph,
<br>
<p>I forgot to follow the previous report, sorry.
<br>
The patch I suggested is not included in Open MPI 1.8.2.
<br>
The backtrace Siegmar reported points the problem that I fixed
<br>
in the patch.
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2014/08/24968.php">http://www.open-mpi.org/community/lists/users/2014/08/24968.php</a>
<br>
<p>Siegmar:
<br>
Could you try my patch again?
<br>
<p>Ralph (or someone committer):
<br>
Open MPI 1.8 needs custom patch that I posted. See my previous mail.
<br>
Could you review it and commit it to v1.8 branch?
<br>
<p>Regards,
<br>
Takahiro
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-1.8.2 on my machines (Solaris 10 Sparc
</span><br>
<span class="quotelev1">&gt; (tyr), Solaris 10 x86_64 (sunpc0), and openSUSE Linux 12.1 x86_64
</span><br>
<span class="quotelev1">&gt; (linpc0)) with gcc-4.9.0. A small program works on some machines,
</span><br>
<span class="quotelev1">&gt; but breaks with a bus error on Solaris 10 Sparc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr small_prog 118 which mpicc
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.8.2_64_gcc/bin/mpicc
</span><br>
<span class="quotelev1">&gt; tyr small_prog 119 ompi_info | grep MPI:
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.8.2
</span><br>
<span class="quotelev1">&gt; tyr small_prog 120 mpiexec -np 1 --host linpc0 init_finalize
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; tyr small_prog 121 mpiexec -np 1 --host sunpc0 init_finalize
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; tyr small_prog 122 mpiexec -np 1 --host tyr init_finalize
</span><br>
<span class="quotelev1">&gt; [tyr:28081] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:28081] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [tyr:28081] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [tyr:28081] Failing at address: ffffffff7fffd304
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xcd118
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3ee8 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_db_base_store+0xc8
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_decode_pidmap+0x798
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_nidmap_init+0x3cc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x226c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_init+0x308
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_init+0x31c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:MPI_Init+0x2a8
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x7c
</span><br>
<span class="quotelev1">&gt; [tyr:28081] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 28081 on node tyr exited on signal 10 (Bus Error).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr small_prog 123 
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
<span class="quotelev1">&gt; tyr small_prog 123 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec  
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
<span class="quotelev1">&gt; Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/bin/orterun...done.
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 1 --host tyr init_finalize
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec -np 1 --host tyr init_finalize
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt; [tyr:28099] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:28099] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [tyr:28099] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [tyr:28099] Failing at address: ffffffff7fffd244
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xcd118
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3ee8 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_db_base_store+0xc8
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_decode_pidmap+0x798
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_nidmap_init+0x3cc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x226c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_init+0x308
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_init+0x31c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:MPI_Init+0x2a8
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x7c
</span><br>
<span class="quotelev1">&gt; [tyr:28099] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 28099 on node tyr exited on signal 10 (Bus Error).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [LWP    2         exited]
</span><br>
<span class="quotelev1">&gt; [New Thread 2        ]
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #8  0xffffffff7ec77474 in vm_close () from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #9  0xffffffff7ec74a54 in lt_dlclose ()
</span><br>
<span class="quotelev1">&gt;    from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #10 0xffffffff7ec99b78 in ri_destructor (obj=0x1001eada0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:391
</span><br>
<span class="quotelev1">&gt; #11 0xffffffff7ec98490 in opal_obj_run_destructors (object=0x1001eada0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-1.8.2/opal/class/opal_object.h:446
</span><br>
<span class="quotelev1">&gt; #12 0xffffffff7ec993f4 in mca_base_component_repository_release (
</span><br>
<span class="quotelev1">&gt;     component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_component_repository.c:244
</span><br>
<span class="quotelev1">&gt; #13 0xffffffff7ec9b73c in mca_base_component_unload (
</span><br>
<span class="quotelev1">&gt;     component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev1">&gt; #14 0xffffffff7ec9b7d0 in mca_base_component_close (
</span><br>
<span class="quotelev1">&gt;     component=0xffffffff7b023ef0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev1">&gt; #15 0xffffffff7ec9b8a4 in mca_base_components_close (output_id=-1, 
</span><br>
<span class="quotelev1">&gt;     components=0xffffffff7f12b030 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev1">&gt; #16 0xffffffff7ec9b80c in mca_base_framework_components_close (
</span><br>
<span class="quotelev1">&gt;     framework=0xffffffff7f12afe0 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev1">&gt; #17 0xffffffff7efae0e8 in orte_oob_base_close ()
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-1.8.2/orte/mca/oob/base/oob_base_frame.c:94
</span><br>
<span class="quotelev1">&gt; #18 0xffffffff7ecb28b4 in mca_base_framework_close (
</span><br>
<span class="quotelev1">&gt;     framework=0xffffffff7f12afe0 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-1.8.2/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev1">&gt; #19 0xffffffff7bf078c0 in rte_finalize ()
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-1.8.2/orte/mca/ess/hnp/ess_hnp_module.c:858
</span><br>
<span class="quotelev1">&gt; #20 0xffffffff7ef30924 in orte_finalize () at ../../openmpi-1.8.2/orte/runtime/orte_finalize.c:65
</span><br>
<span class="quotelev1">&gt; #21 0x00000001000070c4 in orterun (argc=6, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-1.8.2/orte/tools/orterun/orterun.c:1096
</span><br>
<span class="quotelev1">&gt; #22 0x0000000100003d70 in main (argc=6, argv=0xffffffff7fffe0e8)
</span><br>
<span class="quotelev1">&gt;     at ../../../../openmpi-1.8.2/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody can fix the problem. Thank you
</span><br>
<span class="quotelev1">&gt; very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<p>
<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15771/db-store-alignment.patch">db-store-alignment.patch</a>
</ul>
<!-- attachment="db-store-alignment.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15772.php">Jeff Squyres (jsquyres): "[OMPI devel] Migrating Trac wiki and tickets to Github"</a>
<li><strong>Previous message:</strong> <a href="15770.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] race condition in coll/ml"</a>
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

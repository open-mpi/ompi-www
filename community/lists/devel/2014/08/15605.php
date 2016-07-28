<?
$subject_val = "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 04:03:31 2014" -->
<!-- isoreceived="20140811080331" -->
<!-- sent="Mon, 11 Aug 2014 08:03:24 +0000" -->
<!-- isosent="20140811080324" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0" -->
<!-- id="20140811170324.9310cb5fe960ca016ff44d63_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="20140811163340.12be527f480d319b5a643aa2_at_jp.fujitsu.com" -->
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
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 04:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15606.php">Siegmar Gross: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="15604.php">Matthias Jurenz: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>In reply to:</strong> <a href="15603.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15606.php">Siegmar Gross: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Maybe reply:</strong> <a href="15606.php">Siegmar Gross: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Your commit r32459 fixed the bus error by correcting
<br>
opal/dss/dss_copy.c. It's OK for trunk because mca_dstore_hash
<br>
calls dss to copy data. But it's insufficient for v1.8 because
<br>
mca_db_hash doesn't call dss and copies data itself.
<br>
<p>The attached patch is the minimum patch to fix it in v1.8.
<br>
My fix doesn't call dss but uses memcpy. I have confirmed it on
<br>
SPARC64/Linux.
<br>
<p>Sorry to response so late.
<br>
<p>Regards,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; Siegmar, Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry to response so late since last week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph fixed the problem in r32459 and it was merged to v1.8
</span><br>
<span class="quotelev1">&gt; in r32474. But in v1.8 an additional custom patch is needed
</span><br>
<span class="quotelev1">&gt; because the db/dstore source codes are different between trunk
</span><br>
<span class="quotelev1">&gt; and v1.8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm preparing and testing the custom patch just now.
</span><br>
<span class="quotelev1">&gt; Wait wait a minute please.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thank you very much to everybody who tried to solve my bus
</span><br>
<span class="quotelev2">&gt; &gt; error problem on Solaris 10 Sparc. I thought that you found
</span><br>
<span class="quotelev2">&gt; &gt; and fixed it, so that I installed openmpi-1.8.2rc4r32485 on
</span><br>
<span class="quotelev2">&gt; &gt; my machines (Solaris 10 Sparc (tyr), Solaris 10 x86_64 (sunpc1),
</span><br>
<span class="quotelev2">&gt; &gt; openSUSE Linux 12.1 x86_64 (linpc1)) with gcc-4.9.0. A small
</span><br>
<span class="quotelev2">&gt; &gt; program works on my x86_64 architectures, but still breaks
</span><br>
<span class="quotelev2">&gt; &gt; with a bus error on my Sparc system.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 fd1026 106 mpiexec -np 1 init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 fd1026 106 exit
</span><br>
<span class="quotelev2">&gt; &gt; logout
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 113 ssh sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 fd1026 101 mpiexec -np 1 init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; Hello!
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1 fd1026 102 exit
</span><br>
<span class="quotelev2">&gt; &gt; logout
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 114 mpiexec -np 1 init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:21109] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:21109] Signal: Bus Error (10)
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; gdb shows the following backtrace.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr small_prog 122 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) run -np 1 init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; Starting program: /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec -np 1 init_finalize
</span><br>
<span class="quotelev2">&gt; &gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev2">&gt; &gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev2">&gt; &gt; [New LWP    2        ]
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:21158] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:21158] Signal: Bus Error (10)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:21158] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:21158] Failing at address: ffffffff7fffd224
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xcd130
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
<span class="quotelev2">&gt; &gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:MPI_Init+0x2a8
</span><br>
<span class="quotelev2">&gt; &gt; /home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
</span><br>
<span class="quotelev2">&gt; &gt; /home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x7c
</span><br>
<span class="quotelev2">&gt; &gt; [tyr:21158] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec noticed that process rank 0 with PID 21158 on node tyr exited on signal 10 (Bus Error).
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [LWP    2         exited]
</span><br>
<span class="quotelev2">&gt; &gt; [New Thread 2        ]
</span><br>
<span class="quotelev2">&gt; &gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev2">&gt; &gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
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
<span class="quotelev2">&gt; &gt; #8  0xffffffff7ec7748c in vm_close () from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #9  0xffffffff7ec74a6c in lt_dlclose () from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
</span><br>
<span class="quotelev2">&gt; &gt; #10 0xffffffff7ec99b90 in ri_destructor (obj=0x1001ead30)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_component_repository.c:391
</span><br>
<span class="quotelev2">&gt; &gt; #11 0xffffffff7ec984a8 in opal_obj_run_destructors (object=0x1001ead30)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/class/opal_object.h:446
</span><br>
<span class="quotelev2">&gt; &gt; #12 0xffffffff7ec9940c in mca_base_component_repository_release (
</span><br>
<span class="quotelev2">&gt; &gt;     component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_component_repository.c:244
</span><br>
<span class="quotelev2">&gt; &gt; #13 0xffffffff7ec9b754 in mca_base_component_unload (
</span><br>
<span class="quotelev2">&gt; &gt;     component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev2">&gt; &gt; #14 0xffffffff7ec9b7e8 in mca_base_component_close (
</span><br>
<span class="quotelev2">&gt; &gt;     component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev2">&gt; &gt; #15 0xffffffff7ec9b8bc in mca_base_components_close (output_id=-1, 
</span><br>
<span class="quotelev2">&gt; &gt;     components=0xffffffff7f12b930 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev2">&gt; &gt; #16 0xffffffff7ec9b824 in mca_base_framework_components_close (
</span><br>
<span class="quotelev2">&gt; &gt;     framework=0xffffffff7f12b8e0 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev2">&gt; &gt; #17 0xffffffff7efae21c in orte_oob_base_close ()
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/orte/mca/oob/base/oob_base_frame.c:94
</span><br>
<span class="quotelev2">&gt; &gt; #18 0xffffffff7ecb28cc in mca_base_framework_close (
</span><br>
<span class="quotelev2">&gt; &gt;     framework=0xffffffff7f12b8e0 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev2">&gt; &gt; #19 0xffffffff7bf078c0 in rte_finalize ()
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../../openmpi-1.8.2rc4r32485/orte/mca/ess/hnp/ess_hnp_module.c:858
</span><br>
<span class="quotelev2">&gt; &gt; #20 0xffffffff7ef30a44 in orte_finalize ()
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../openmpi-1.8.2rc4r32485/orte/runtime/orte_finalize.c:65
</span><br>
<span class="quotelev2">&gt; &gt; #21 0x00000001000070c4 in orterun (argc=4, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/orte/tools/orterun/orterun.c:1096
</span><br>
<span class="quotelev2">&gt; &gt; #22 0x0000000100003d70 in main (argc=4, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../../../../openmpi-1.8.2rc4r32485/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is this a new problem? I would be grateful if somebody could
</span><br>
<span class="quotelev2">&gt; &gt; fix it. Thank you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15605/db-store-alignment.patch">db-store-alignment.patch</a>
</ul>
<!-- attachment="db-store-alignment.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15606.php">Siegmar Gross: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="15604.php">Matthias Jurenz: "Re: [OMPI devel] [vt] --with-openmpi-inside configure argument"</a>
<li><strong>In reply to:</strong> <a href="15603.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15606.php">Siegmar Gross: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Maybe reply:</strong> <a href="15606.php">Siegmar Gross: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
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

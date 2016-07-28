<?
$subject_val = "[OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 03:21:56 2014" -->
<!-- isoreceived="20140811072156" -->
<!-- sent="Mon, 11 Aug 2014 09:21:33 +0200 (CEST)" -->
<!-- isosent="20140811072133" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0" -->
<!-- id="201408110721.s7B7LXcr021494_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 03:21:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24966.php">Siegmar Gross: "[OMPI users] SIGSEV with openmpi-1.8.2rc4r32485 on Solaris for Sun C and Java"</a>
<li><strong>Previous message:</strong> <a href="24964.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24967.php">Kawashima, Takahiro: "Re: [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Reply:</strong> <a href="24967.php">Kawashima, Takahiro: "Re: [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>thank you very much to everybody who tried to solve my bus
<br>
error problem on Solaris 10 Sparc. I thought that you found
<br>
and fixed it, so that I installed openmpi-1.8.2rc4r32485 on
<br>
my machines (Solaris 10 Sparc (tyr), Solaris 10 x86_64 (sunpc1),
<br>
openSUSE Linux 12.1 x86_64 (linpc1)) with gcc-4.9.0. A small
<br>
program works on my x86_64 architectures, but still breaks
<br>
with a bus error on my Sparc system.
<br>
<p>linpc1 fd1026 106 mpiexec -np 1 init_finalize
<br>
Hello!
<br>
linpc1 fd1026 106 exit
<br>
logout
<br>
tyr small_prog 113 ssh sunpc1
<br>
sunpc1 fd1026 101 mpiexec -np 1 init_finalize
<br>
Hello!
<br>
sunpc1 fd1026 102 exit
<br>
logout
<br>
tyr small_prog 114 mpiexec -np 1 init_finalize
<br>
[tyr:21109] *** Process received signal ***
<br>
[tyr:21109] Signal: Bus Error (10)
<br>
...
<br>
<p><p>gdb shows the following backtrace.
<br>
<p>tyr small_prog 122 /usr/local/gdb-7.6.1_64_gcc/bin/gdb /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
(gdb) run -np 1 init_finalize
<br>
Starting program: /usr/local/openmpi-1.8.2_64_gcc/bin/mpiexec -np 1 init_finalize
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
[tyr:21158] *** Process received signal ***
<br>
[tyr:21158] Signal: Bus Error (10)
<br>
[tyr:21158] Signal code: Invalid address alignment (1)
<br>
[tyr:21158] Failing at address: ffffffff7fffd224
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xcd130
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
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:MPI_Init+0x2a8
<br>
/home/fd1026/SunOS/sparc/bin/init_finalize:main+0x10
<br>
/home/fd1026/SunOS/sparc/bin/init_finalize:_start+0x7c
<br>
[tyr:21158] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 21158 on node tyr exited on signal 10 (Bus Error).
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
#8  0xffffffff7ec7748c in vm_close () from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
<br>
#9  0xffffffff7ec74a6c in lt_dlclose () from /usr/local/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6
<br>
#10 0xffffffff7ec99b90 in ri_destructor (obj=0x1001ead30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_component_repository.c:391
<br>
#11 0xffffffff7ec984a8 in opal_obj_run_destructors (object=0x1001ead30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/class/opal_object.h:446
<br>
#12 0xffffffff7ec9940c in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_component_repository.c:244
<br>
#13 0xffffffff7ec9b754 in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7ec9b7e8 in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b023df0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7ec9b8bc in mca_base_components_close (output_id=-1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7f12b930 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7ec9b824 in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f12b8e0 &lt;orte_oob_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_components_close.c:66
<br>
#17 0xffffffff7efae21c in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/orte/mca/oob/base/oob_base_frame.c:94
<br>
#18 0xffffffff7ecb28cc in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f12b8e0 &lt;orte_oob_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7bf078c0 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.8.2rc4r32485/orte/mca/ess/hnp/ess_hnp_module.c:858
<br>
#20 0xffffffff7ef30a44 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.8.2rc4r32485/orte/runtime/orte_finalize.c:65
<br>
#21 0x00000001000070c4 in orterun (argc=4, argv=0xffffffff7fffe0d8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/orte/tools/orterun/orterun.c:1096
<br>
#22 0x0000000100003d70 in main (argc=4, argv=0xffffffff7fffe0d8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.8.2rc4r32485/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p>Is this a new problem? I would be grateful if somebody could
<br>
fix it. Thank you very much for any help in advance.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24966.php">Siegmar Gross: "[OMPI users] SIGSEV with openmpi-1.8.2rc4r32485 on Solaris for Sun C and Java"</a>
<li><strong>Previous message:</strong> <a href="24964.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24967.php">Kawashima, Takahiro: "Re: [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Reply:</strong> <a href="24967.php">Kawashima, Takahiro: "Re: [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
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

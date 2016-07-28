<?
$subject_val = "[OMPI users] openmpi-v1.10.3rc4: another problem with &quot;--slot-list&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 02:42:23 2016" -->
<!-- isoreceived="20160608064223" -->
<!-- sent="Wed, 8 Jun 2016 08:41:51 +0200" -->
<!-- isosent="20160608064151" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-v1.10.3rc4: another problem with &amp;quot;--slot-list&amp;quot;" -->
<!-- id="54775499-dd49-e148-5c8f-4ea6b3088977_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-v1.10.3rc4: another problem with &quot;--slot-list&quot;<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 02:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29404.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-1468-g6011906 : problem with &quot;--host&quot;"</a>
<li><strong>Previous message:</strong> <a href="29402.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built openmpi-v1.10.3rc4 on my machines (Solaris 10 Sparc,
<br>
Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with gcc-5.1.0
<br>
and Sun C 5.13. Unfortunately I have once more a problem with
<br>
&quot;--slot-list&quot;. This time a small program breaks on my Sparc machine
<br>
while it works as expected on Linux and SunOS x86_64.
<br>
<p><p>tyr hello_1 104 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v1.10.2-244-g34e1f22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
<br>
<p>tyr hello_1 105 mpiexec -np 3 --host tyr --slot-list 0:0-1,1:0-1 hello_1_mpi
<br>
[tyr.informatik.hs-fulda.de:23717] [[64131,0],0] ORTE_ERROR_LOG: Not found in 
<br>
file ../../../../../openmpi-1.10.3rc4/orte/mca/rmaps/rank_file/rmaps_rank_file.c 
<br>
at line 326
<br>
[tyr.informatik.hs-fulda.de:23717] [[64131,0],0] ORTE_ERROR_LOG: Not found in 
<br>
file ../../../../openmpi-1.10.3rc4/orte/mca/rmaps/base/rmaps_base_map_job.c at 
<br>
line 377
<br>
<p>tyr hello_1 106 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
Reading symbols from 
<br>
/export2/prog/SunOS_sparc/openmpi-1.10.3_64_gcc/bin/orterun...done.
<br>
(gdb) set args -np 3 --host tyr --slot-list 0:0-1,1:0-1 hello_1_mpi
<br>
(gdb) r
<br>
Starting program: /usr/local/openmpi-1.10.3_64_gcc/bin/mpiexec -np 3 --host tyr 
<br>
--slot-list 0:0-1,1:0-1 hello_1_mpi
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
[tyr.informatik.hs-fulda.de:23719] [[64129,0],0] ORTE_ERROR_LOG: Not found in 
<br>
file ../../../../../openmpi-1.10.3rc4/orte/mca/rmaps/rank_file/rmaps_rank_file.c 
<br>
at line 326
<br>
[tyr.informatik.hs-fulda.de:23719] [[64129,0],0] ORTE_ERROR_LOG: Not found in 
<br>
file ../../../../openmpi-1.10.3rc4/orte/mca/rmaps/base/rmaps_base_map_job.c at 
<br>
line 377
<br>
[LWP    2         exited]
<br>
[New Thread 2        ]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy 
<br>
query
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
#8  0xffffffff7eccbd4c in dlopen_close (handle=0x100181820)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.10.3rc4/opal/mca/dl/dlopen/dl_dlopen_module.c:148
<br>
#9  0xffffffff7eccb480 in opal_dl_close (handle=0x100181820)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.10.3rc4/opal/mca/dl/base/dl_base_fns.c:53
<br>
#10 0xffffffff7ec9094c in ri_destructor (obj=0x100183c40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.10.3rc4/opal/mca/base/mca_base_component_repository.c:357
<br>
#11 0xffffffff7ec8f448 in opal_obj_run_destructors (object=0x100183c40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.10.3rc4/opal/class/opal_object.h:451
<br>
#12 0xffffffff7ec9023c in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b824938 &lt;mca_oob_tcp_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../openmpi-1.10.3rc4/opal/mca/base/mca_base_component_repository.c:223
<br>
#13 0xffffffff7ec923dc in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b824938 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.10.3rc4/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7ec92474 in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b824938 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.10.3rc4/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7ec92544 in mca_base_components_close (output_id=-1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7f12c6e0 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.10.3rc4/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7ec924b4 in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f12c690 &lt;orte_oob_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.10.3rc4/opal/mca/base/mca_base_components_close.c:66
<br>
#17 0xffffffff7efadd34 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.10.3rc4/orte/mca/oob/base/oob_base_frame.c:94
<br>
#18 0xffffffff7eca91e8 in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f12c690 &lt;orte_oob_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.10.3rc4/opal/mca/base/mca_base_framework.c:198
<br>
#19 0xffffffff7c807c68 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-1.10.3rc4/orte/mca/ess/hnp/ess_hnp_module.c:882
<br>
#20 0xffffffff7ef31180 in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-1.10.3rc4/orte/runtime/orte_finalize.c:65
<br>
#21 0x00000001000074d4 in orterun (argc=8, argv=0xffffffff7fffdf78)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.10.3rc4/orte/tools/orterun/orterun.c:1151
<br>
#22 0x0000000100003e78 in main (argc=8, argv=0xffffffff7fffdf78)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.10.3rc4/orte/tools/orterun/main.c:13
<br>
(gdb) q
<br>
A debugging session is active.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inferior 1 [process 23719    ] will be killed.
<br>
<p>Quit anyway? (y or n) y
<br>
Quitting: sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found 
<br>
to satisfy query
<br>
tyr hello_1 107
<br>
<p><p><p>I would be grateful if somebody can fix the problem. Please let me
<br>
know, if you need more information. Thank you very much for any help
<br>
in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29403/hello_1_mpi.c">hello_1_mpi.c</a>
</ul>
<!-- attachment="hello_1_mpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29404.php">Siegmar Gross: "[OMPI users] openmpi-v2.x-dev-1468-g6011906 : problem with &quot;--host&quot;"</a>
<li><strong>Previous message:</strong> <a href="29402.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
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

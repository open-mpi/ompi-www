<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 14:40:28 2007" -->
<!-- isoreceived="20070419184028" -->
<!-- sent="Thu, 19 Apr 2007 14:38:57 +0000" -->
<!-- isosent="20070419143857" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI devel] Fancy ORTE/MPIRUN bugs" -->
<!-- id="46277F01.8010805_at_cs.utk.edu" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-19 10:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1448.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1446.php">pooja_at_[hidden]: "[OMPI devel] Need help for semaphore in BML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1454.php">Brian Barrett: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Reply:</strong> <a href="1454.php">Brian Barrett: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Maybe reply:</strong> <a href="1457.php">bouteill: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am experiencing several fancy bugs with ORTE.
<br>
<p>All bugs occur on Intel 32 bits architecture under Mac OS X using gcc 
<br>
4.2. The tested version is todays trunk (it also have occured for at 
<br>
least three weeks)
<br>
<p>First occurs when compiling in &quot;optimized&quot;  mode (aka configure 
<br>
--disable-debug --with-platform=optimized) and does not occur in debug 
<br>
mode.
<br>
<p>~/ompi$ mpirun -np 1 echo foo
<br>
[laptop20:22960] *** Process received signal ***
<br>
[laptop20:22960] Signal: Bus error (10)
<br>
[laptop20:22960] Signal code:  (0)
<br>
[laptop20:22960] Failing at address: 0x0
<br>
[ 1] [0xbffff698, 0x00000000] (-P-)
<br>
[ 2] (mca_oob_base_init + 0x26) [0xbffff6e8, 0x000878a6]
<br>
[ 3] (orte_rml_oob_init + 0x11) [0xbffff6f8, 0x00032f21]
<br>
[ 4] (orte_rml_base_select + 0xc5) [0xbffff778, 0x0009f415]
<br>
[ 5] (orte_init_stage1 + 0x20c) [0xbffff848, 0x000678cc]
<br>
[ 6] (orte_system_init + 0x1d) [0xbffff868, 0x0006b03d]
<br>
[ 7] (orte_init + 0x7d) [0xbffff888, 0x000674ad]
<br>
[ 8] (orterun:F(0,1)=r(0,1);-2147483648;2147483647; + 0x220) 
<br>
[0xbffff938, 0x00002008]
<br>
[ 9] (main:F(0,1)=r(0,1);-2147483648;2147483647; + 0x18) [0xbffff948, 
<br>
0x00001de6]
<br>
[10] (_start + 0xd8) [0xbffff988, 0x00001db2]
<br>
[11] (start + 0x29) [0xbffff9a0, 0x00001cd9]
<br>
[12] [0x00000000, 0x00000005] (FP-)
<br>
[laptop20:22960] *** End of error message ***
<br>
Bus error
<br>
<p><p>The other one occurs when running MPI program without mpirun (I know 
<br>
this is pretty useless but still ;) ). This bug does not require 
<br>
specific compilation options to occur. Running mpirun -np 1 mympiprogram 
<br>
is fine, but running mympiprogram fails with segfault in MPI_Finalize:
<br>
<p>~/ompi$ mpirun -np 1 mpiself
<br>
~/ompi$ gdb mpiself
<br>
(gdb) r
<br>
Program received signal EXC_BAD_ACCESS, Could not access memory.
<br>
Reason: KERN_INVALID_ADDRESS at address: 0x77767578
<br>
0x90002e46 in szone_malloc ()
<br>
(gdb) bt
<br>
#0  0x90002e46 in szone_malloc ()
<br>
#1  0x0042b6da in opal_memory_darwin_malloc (zone=0x2000000, size=48) at 
<br>
memory_darwin_component.c:103
<br>
#2  0x90002a2f in malloc ()
<br>
#3  0x00421548 in opal_malloc (size=48, file=0x274fd4 
<br>
&quot;../../../opal/class/opal_object.h&quot;, line=468) at malloc.c:96
<br>
#4  0x002218e4 in opal_obj_new (cls=0x27d840) at 
<br>
../../../opal/class/opal_object.h:468
<br>
#5  0x00221851 in opal_obj_new_debug (type=0x27d840, file=0x275424 
<br>
&quot;base/gpr_base_create_value_keyval.c&quot;, line=43) at 
<br>
../../../opal/class/opal_object.h:247
<br>
#6  0x0022147e in orte_gpr_base_create_value (value=0xbffff8fc, 
<br>
addr_mode=32769, segment=0x510150 &quot;orte-job-0&quot;, cnt=2, num_tokens=0) at 
<br>
base/gpr_base_create_value_keyval.c:43
<br>
#7  0x00269b79 in orte_smr_base_set_proc_state (proc=0x507d00, state=32, 
<br>
exit_status=0) at base/smr_base_set_proc_state.c:54
<br>
#8  0x01035f21 in ompi_mpi_finalize () at runtime/ompi_mpi_finalize.c:145
<br>
#9  0x0106ea09 in MPI_Finalize () at finalize.c:44
<br>
#10 0x00001e5e in main (argc=1, argv=0xbffffb70) at mpiself.c:44
<br>
(gdb)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1448.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1446.php">pooja_at_[hidden]: "[OMPI devel] Need help for semaphore in BML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1454.php">Brian Barrett: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Reply:</strong> <a href="1454.php">Brian Barrett: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<li><strong>Maybe reply:</strong> <a href="1457.php">bouteill: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
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

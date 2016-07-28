<?
$subject_val = "[OMPI users] more info on SIGSEGV for Java and openmpi-1.9a1r32716 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 11:40:03 2014" -->
<!-- isoreceived="20140912154003" -->
<!-- sent="Fri, 12 Sep 2014 17:39:41 +0200 (CEST)" -->
<!-- isosent="20140912153941" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] more info on SIGSEGV for Java and openmpi-1.9a1r32716 on Solaris" -->
<!-- id="201409121539.s8CFdfBG022891_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] more info on SIGSEGV for Java and openmpi-1.9a1r32716 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-12 11:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25326.php">etcamargo: "[OMPI users] about using mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="25324.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>is the following info helpful?
<br>
<p>tyr java 160 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
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
Reading symbols from /export2/prog/SunOS_sparc/openmpi-1.9_64_cc/bin/orterun...done.
<br>
(gdb) run -np 1 java InitFinalizeMain 
<br>
Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec -np 1 java InitFinalizeMain
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=22871, tid=2
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc compressed oops)
<br>
# Problematic frame:
<br>
# C  [libc.so.1+0x3c7f0]  strlen+0x50
<br>
#
<br>
# Failed to write core dump. Core dumps have been disabled. To enable core dumping, try &quot;ulimit -c unlimited&quot; before starting Java again
<br>
#
<br>
# An error report file with more information is saved as:
<br>
# /home/fd1026/work/skripte/master/parallel/prog/mpi/java/hs_err_pid22871.log
<br>
#
<br>
# If you would like to submit a bug report, please visit:
<br>
#   <a href="http://bugreport.sun.com/bugreport/crash.jsp">http://bugreport.sun.com/bugreport/crash.jsp</a>
<br>
# The crash happened outside the Java Virtual Machine in native code.
<br>
# See problematic frame for where to report the bug.
<br>
#
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 0 on node tyr exited on signal 6 (Abort).
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
#8  0xffffffff7e4e6f88 in vm_close () from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#9  0xffffffff7e4e4274 in lt_dlclose () from /usr/local/openmpi-1.9_64_cc/lib64/libopen-pal.so.0
<br>
#10 0xffffffff7e53a574 in ri_destructor (obj=0x0) at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_component_repository.c:382
<br>
#11 0xffffffff7e537d50 in opal_obj_run_destructors (object=0x0) at ../../../../openmpi-1.9a1r32716/opal/class/opal_object.h:446
<br>
#12 0xffffffff7e539de4 in mca_base_component_repository_release (component=0xf000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_component_repository.c:240
<br>
#13 0xffffffff7e540448 in mca_base_component_unload (component=0x0, output_id=-2145509376)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7e5404ec in mca_base_component_close (component=0xffffff7b000030ff, output_id=255)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7e5405fc in mca_base_components_close (output_id=767, components=0x0, skip=0xffffff7f73cdf800)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7e54053c in mca_base_framework_components_close (framework=0xff, skip=0xffffff7c801c4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_components_close.c:68
<br>
#17 0xffffffff7ee48d68 in orte_oob_base_close () at ../../../../openmpi-1.9a1r32716/orte/mca/oob/base/oob_base_frame.c:98
<br>
#18 0xffffffff7e56c23c in mca_base_framework_close (framework=0xffffff7e4e413cff)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7bb13f00 in rte_finalize () at ../../../../../openmpi-1.9a1r32716/orte/mca/ess/hnp/ess_hnp_module.c:857
<br>
#20 0xffffffff7ec3adf0 in orte_finalize () at ../../openmpi-1.9a1r32716/orte/runtime/orte_finalize.c:66
<br>
#21 0x000000010000e264 in orterun (argc=4607, argv=0x0) at ../../../../openmpi-1.9a1r32716/orte/tools/orterun/orterun.c:1099
<br>
#22 0x00000001000046d4 in main (argc=255, argv=0xffffff7f0af87800) at ../../../../openmpi-1.9a1r32716/orte/tools/orterun/main.c:13
<br>
(gdb) thread 1
<br>
[Switching to thread 1 (LWP    1        )]
<br>
#0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
<br>
(gdb) list mca_base_component_repository.c:365,383
<br>
365     
<br>
366     /*
<br>
367      * Close a component 
<br>
368      */
<br>
369     static void ri_destructor(opal_object_t *obj)
<br>
370     {
<br>
371       repository_item_t *ri = (repository_item_t *) obj;
<br>
372       opal_list_item_t *item;
<br>
373       int group_id;
<br>
374     
<br>
375       group_id = mca_base_var_group_find (NULL, ri-&gt;ri_type,
<br>
376                                           ri-&gt;ri_component_struct-&gt;mca_component_name);
<br>
377       if (0 &lt;= group_id) {
<br>
378         mca_base_var_group_deregister (group_id);
<br>
379       }
<br>
380     
<br>
381       /* Close the component (and potentially unload it from memory */
<br>
382       lt_dlclose(ri-&gt;ri_dlhandle);
<br>
383     
<br>
(gdb) break mca_base_component_repository.c:382
<br>
Breakpoint 1 at 0xffffffff7e53a564: file ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_component_repository.c, line 382.
<br>
(gdb) break mca_base_component_repository.c:375
<br>
Breakpoint 2 at 0xffffffff7e53a524: file ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_component_repository.c, line 375.
<br>
(gdb) run
<br>
The program being debugged has been started already.
<br>
Start it from the beginning? (y or n) y
<br>
Starting program: /usr/local/openmpi-1.9_64_cc/bin/mpiexec -np 1 java InitFinalizeMain
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
<p>Breakpoint 2, ri_destructor (obj=0x3000000000ff) at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_component_repository.c:376
<br>
376                                           ri-&gt;ri_component_struct-&gt;mca_component_name);
<br>
(gdb) ptype opal_object_t
<br>
type = struct opal_object_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint64_t obj_magic_id;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_class_t *obj_class;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;volatile int32_t obj_reference_count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const char *cls_init_file_name;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int cls_init_lineno;
<br>
}
<br>
(gdb) ptype repository_item_t
<br>
type = struct repository_item_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_t super;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char ri_type[32];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lt_dlhandle ri_dlhandle;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const mca_base_component_t *ri_component_struct;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t ri_dependencies;
<br>
}
<br>
(gdb) ptype opal_list_item_t
<br>
type = struct opal_list_item_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_object_t super;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;volatile struct opal_list_item_t *opal_list_next;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;volatile struct opal_list_item_t *opal_list_prev;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int32_t item_free;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;volatile int32_t opal_list_item_refcount;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;volatile struct opal_list_t *opal_list_item_belong_to;
<br>
}
<br>
(gdb) print obj
<br>
$1 = (opal_object_t *) 0x3000000000ff
<br>
(gdb) print ri
<br>
$2 = (repository_item_t *) 0xffffff7f635b9500
<br>
(gdb) print item
<br>
$3 = (opal_list_item_t *) 0xffffff7f6342e8ff
<br>
(gdb) print *ri
<br>
Cannot access memory at address 0xffffff7f635b9500
<br>
(gdb) print ri-&gt;ri_type
<br>
Cannot access memory at address 0xffffff7f635b9548
<br>
(gdb) break 377
<br>
Breakpoint 3 at 0xffffffff7e53a548: file ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_component_repository.c, line 377.
<br>
(gdb) next
<br>
<p>Breakpoint 3, ri_destructor (obj=0x3000000000ff) at ../../../../openmpi-1.9a1r32716/opal/mca/base/mca_base_component_repository.c:377
<br>
377       if (0 &lt;= group_id) {
<br>
(gdb) print group_id
<br>
$4 = 1666945535
<br>
(gdb) print ri-&gt;ri_dlhandle
<br>
Cannot access memory at address 0xffffff7f635b9568
<br>
(gdb) 
<br>
<p><p>Can I provide anything else?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25326.php">etcamargo: "[OMPI users] about using mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="25324.php">Tim Prince: "Re: [OMPI users] Multiple threads for an mpi process"</a>
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

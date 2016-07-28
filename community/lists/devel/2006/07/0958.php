<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 14:38:24 2006" -->
<!-- isoreceived="20060704183824" -->
<!-- sent="Tue, 4 Jul 2006 14:38:14 -0400" -->
<!-- isosent="20060704183814" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] orted problem" -->
<!-- id="EEDF72B2-E110-476F-9DBA-8132CFF77419_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 14:38:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0959.php">Josh Hursey: "Re: [OMPI devel] orted problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0957.php">Ralph H Castain: "Re: [OMPI devel] help - urgent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0959.php">Josh Hursey: "Re: [OMPI devel] orted problem"</a>
<li><strong>Reply:</strong> <a href="0959.php">Josh Hursey: "Re: [OMPI devel] orted problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Starting with few days ago, I notice that more and more orted are  
<br>
left over after my runs. Usually, if the job run to completions they  
<br>
disappear. But if I kill the job or it segfault they don't. I  
<br>
attached to one of them and I get the following stack:
<br>
<p>#0  0x9001f7a8 in select ()
<br>
#1  0x00375d34 in select_dispatch (arg=0x39ec6c, tv=0xbfffe664)  
<br>
at ../../../ompi-trunk/opal/event/select.c:202
<br>
#2  0x00373b70 in opal_event_loop (flags=1) at ../../../ompi-trunk/ 
<br>
opal/event/event.c:485
<br>
#3  0x00237ee0 in orte_iof_base_flush () at ../../../../ompi-trunk/ 
<br>
orte/mca/iof/base/iof_base_flush.c:111
<br>
#4  0x004cbb38 in orte_pls_fork_wait_proc (pid=9045, status=9,  
<br>
cbdata=0x50c250) at ../../../../../ompi-trunk/orte/mca/pls/fork/ 
<br>
pls_fork_module.c:175
<br>
#5  0x002111f0 in do_waitall (options=0) at ../../ompi-trunk/orte/ 
<br>
runtime/orte_wait.c:500
<br>
#6  0x00210ac8 in orte_wait_signal_callback (fd=20, event=8,  
<br>
arg=0x26f3f8) at ../../ompi-trunk/orte/runtime/orte_wait.c:366
<br>
#7  0x003737f8 in opal_event_process_active () at ../../../ompi-trunk/ 
<br>
opal/event/event.c:428
<br>
#8  0x00373ce8 in opal_event_loop (flags=1) at ../../../ompi-trunk/ 
<br>
opal/event/event.c:513
<br>
#9  0x00368714 in opal_progress () at ../../ompi-trunk/opal/runtime/ 
<br>
opal_progress.c:259
<br>
#10 0x004cdf48 in opal_condition_wait (c=0x4cf0f0, m=0x4cf0b0)  
<br>
at ../../../../../ompi-trunk/opal/threads/condition.h:81
<br>
#11 0x004cde60 in orte_pls_fork_finalize () at ../../../../../ompi- 
<br>
trunk/orte/mca/pls/fork/pls_fork_module.c:764
<br>
#12 0x002417d0 in orte_pls_base_finalize () at ../../../../ompi-trunk/ 
<br>
orte/mca/pls/base/pls_base_close.c:42
<br>
#13 0x000ddf58 in orte_rmgr_urm_finalize () at ../../../../../ompi- 
<br>
trunk/orte/mca/rmgr/urm/rmgr_urm.c:521
<br>
#14 0x00254ec0 in orte_rmgr_base_close () at ../../../../ompi-trunk/ 
<br>
orte/mca/rmgr/base/rmgr_base_close.c:39
<br>
#15 0x0020e574 in orte_system_finalize () at ../../ompi-trunk/orte/ 
<br>
runtime/orte_system_finalize.c:65
<br>
#16 0x0020899c in orte_finalize () at ../../ompi-trunk/orte/runtime/ 
<br>
orte_finalize.c:42
<br>
#17 0x00002ac8 in main (argc=19, argv=0xbffff17c) at ../../../../ompi- 
<br>
trunk/orte/tools/orted/orted.c:377
<br>
<p>Somehow, it wait for the pid 9045. But this was one of the kids, and  
<br>
it get the SIG_KILL signal (I checked with strace). I wonder if we  
<br>
don't have a race condition somewhere on the wait_signal code.
<br>
<p>Hope that helps,
<br>
&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0959.php">Josh Hursey: "Re: [OMPI devel] orted problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0957.php">Ralph H Castain: "Re: [OMPI devel] help - urgent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0959.php">Josh Hursey: "Re: [OMPI devel] orted problem"</a>
<li><strong>Reply:</strong> <a href="0959.php">Josh Hursey: "Re: [OMPI devel] orted problem"</a>
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

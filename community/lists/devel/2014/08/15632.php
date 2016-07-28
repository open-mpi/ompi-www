<?
$subject_val = "[OMPI devel] Errors on aborting programs on 1.8 r32515";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 11:21:58 2014" -->
<!-- isoreceived="20140813152158" -->
<!-- sent="Wed, 13 Aug 2014 08:21:56 -0700" -->
<!-- isosent="20140813152156" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Errors on aborting programs on 1.8 r32515" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36046F85279_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] Errors on aborting programs on 1.8 r32515<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 11:21:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15633.php">Ralph Castain: "Re: [OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
<li><strong>Previous message:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15633.php">Ralph Castain: "Re: [OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
<li><strong>Reply:</strong> <a href="15633.php">Ralph Castain: "Re: [OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed MTT failures from last night and then reproduced this morning on 1.8 branch.  Looks like maybe a double free.  I assume it is related to fixes for aborting programs. Maybe related to <a href="https://svn.open-mpi.org/trac/ompi/changeset/32508">https://svn.open-mpi.org/trac/ompi/changeset/32508</a> but not sure.
<br>
<p>[rvandevaart_at_drossetti-ivy0 environment]$ pwd
<br>
/ivylogin/home/rvandevaart/tests/ompi-tests/trunk/ibm/environment
<br>
[rvandevaart_at_drossetti-ivy0 environment]$ mpirun --mca odls_base_verbose 20 -np 2 abort
<br>
[...stuff deleted...]
<br>
[drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls: sending message to tag 30 on child [[58714,1],0]
<br>
[drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls: sending message to tag 30 on child [[58714,1],1]
<br>
[drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls: sending message to tag 30 on child [[58714,1],0]
<br>
[drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls: sending message to tag 30 on child [[58714,1],1]
<br>
**************************************************************************
<br>
This program tests MPI_ABORT and generates error messages
<br>
ERRORS ARE EXPECTED AND NORMAL IN THIS PROGRAM!!
<br>
**************************************************************************
<br>
--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD 
<br>
with errorcode 3.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
[drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls:wait_local_proc child process [[58714,1],0] pid 14955 terminated
<br>
[drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls:waitpid_fired child [[58714,1],0] exit code 3
<br>
[drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls:waitpid_fired checking abort file /tmp/openmpi-sessions-rvandevaart_at_drossetti-ivy0_0/58714/1/0/aborted for child [[58714,1],0]
<br>
[drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls:waitpid_fired child [[58714,1],0] died by call to abort
<br>
*** glibc detected *** mpirun: double free or corruption (fasttop): 0x000000000130e210 ***
<br>
<p><span class="quotelev1">&gt;From gdb:
</span><br>
gdb) where
<br>
#0  0x00007f75ede138e5 in raise () from /lib64/libc.so.6
<br>
#1  0x00007f75ede1504d in abort () from /lib64/libc.so.6
<br>
#2  0x00007f75ede517f7 in __libc_message () from /lib64/libc.so.6
<br>
#3  0x00007f75ede57126 in malloc_printerr () from /lib64/libc.so.6
<br>
#4  0x00007f75eef9eac4 in odls_base_default_wait_local_proc (pid=14955, status=768, cbdata=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../orte/mca/odls/base/odls_base_default_fns.c:2007
<br>
#5  0x00007f75eef60a78 in do_waitall (options=0) at ../../orte/runtime/orte_wait.c:554
<br>
#6  0x00007f75eef60712 in orte_wait_signal_callback (fd=17, event=8, arg=0x7f75ef201400) at ../../orte/runtime/orte_wait.c:421
<br>
#7  0x00007f75eecaecbe in event_signal_closure (base=0x1278370, ev=0x7f75ef201400)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1081
<br>
#8  0x00007f75eecaf7e0 in event_process_active_single_queue (base=0x1278370, activeq=0x12788f0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1359
<br>
#9  0x00007f75eecafaca in event_process_active (base=0x1278370)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1437
<br>
#10 0x00007f75eecb0148 in opal_libevent2021_event_base_loop (base=0x1278370, flags=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1645
<br>
#11 0x0000000000405572 in orterun (argc=7, argv=0x7fffbdf1dd08) at ../../../../orte/tools/orterun/orterun.c:1078
<br>
#12 0x0000000000403904 in main (argc=7, argv=0x7fffbdf1dd08) at ../../../../orte/tools/orterun/main.c:13
<br>
(gdb) up
<br>
#1  0x00007f75ede1504d in abort () from /lib64/libc.so.6
<br>
(gdb) up
<br>
#2  0x00007f75ede517f7 in __libc_message () from /lib64/libc.so.6
<br>
(gdb) up
<br>
#3  0x00007f75ede57126 in malloc_printerr () from /lib64/libc.so.6
<br>
(gdb) up
<br>
#4  0x00007f75eef9eac4 in odls_base_default_wait_local_proc (pid=14955, status=768, cbdata=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../orte/mca/odls/base/odls_base_default_fns.c:2007
<br>
2007	            free(abortfile);
<br>
(gdb) print abortfile
<br>
$1 = 0x130e210 &quot;&quot;
<br>
(gdb) 
<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15633.php">Ralph Castain: "Re: [OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
<li><strong>Previous message:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15633.php">Ralph Castain: "Re: [OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
<li><strong>Reply:</strong> <a href="15633.php">Ralph Castain: "Re: [OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
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

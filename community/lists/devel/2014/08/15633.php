<?
$subject_val = "Re: [OMPI devel] Errors on aborting programs on 1.8 r32515";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 11:27:58 2014" -->
<!-- isoreceived="20140813152758" -->
<!-- sent="Wed, 13 Aug 2014 08:27:57 -0700" -->
<!-- isosent="20140813152757" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Errors on aborting programs on 1.8 r32515" -->
<!-- id="CAMD57oehcKxg36kKw2ESYpmeC6b99anm2S8n3viS4sSYgBP4yw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36046F85279_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Errors on aborting programs on 1.8 r32515<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 11:27:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15634.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="15632.php">Rolf vandeVaart: "[OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
<li><strong>In reply to:</strong> <a href="15632.php">Rolf vandeVaart: "[OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed - just a lingering free that should have been removed
<br>
<p><p><p>On Wed, Aug 13, 2014 at 8:21 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I noticed MTT failures from last night and then reproduced this morning on
</span><br>
<span class="quotelev1">&gt; 1.8 branch.  Looks like maybe a double free.  I assume it is related to
</span><br>
<span class="quotelev1">&gt; fixes for aborting programs. Maybe related to
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/32508">https://svn.open-mpi.org/trac/ompi/changeset/32508</a> but not sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_drossetti-ivy0 environment]$ pwd
</span><br>
<span class="quotelev1">&gt; /ivylogin/home/rvandevaart/tests/ompi-tests/trunk/ibm/environment
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_drossetti-ivy0 environment]$ mpirun --mca odls_base_verbose
</span><br>
<span class="quotelev1">&gt; 20 -np 2 abort
</span><br>
<span class="quotelev1">&gt; [...stuff deleted...]
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls: sending message to
</span><br>
<span class="quotelev1">&gt; tag 30 on child [[58714,1],0]
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls: sending message to
</span><br>
<span class="quotelev1">&gt; tag 30 on child [[58714,1],1]
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls: sending message to
</span><br>
<span class="quotelev1">&gt; tag 30 on child [[58714,1],0]
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls: sending message to
</span><br>
<span class="quotelev1">&gt; tag 30 on child [[58714,1],1]
</span><br>
<span class="quotelev1">&gt; **************************************************************************
</span><br>
<span class="quotelev1">&gt; This program tests MPI_ABORT and generates error messages
</span><br>
<span class="quotelev1">&gt; ERRORS ARE EXPECTED AND NORMAL IN THIS PROGRAM!!
</span><br>
<span class="quotelev1">&gt; **************************************************************************
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls:wait_local_proc
</span><br>
<span class="quotelev1">&gt; child process [[58714,1],0] pid 14955 terminated
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls:waitpid_fired child
</span><br>
<span class="quotelev1">&gt; [[58714,1],0] exit code 3
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls:waitpid_fired
</span><br>
<span class="quotelev1">&gt; checking abort file /tmp/openmpi-sessions-rvandevaart_at_drossetti-ivy0_0/58714/1/0/aborted
</span><br>
<span class="quotelev1">&gt; for child [[58714,1],0]
</span><br>
<span class="quotelev1">&gt; [drossetti-ivy0.nvidia.com:14953] [[58714,0],0] odls:waitpid_fired child
</span><br>
<span class="quotelev1">&gt; [[58714,1],0] died by call to abort
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** mpirun: double free or corruption (fasttop):
</span><br>
<span class="quotelev1">&gt; 0x000000000130e210 ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From gdb:
</span><br>
<span class="quotelev1">&gt; gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x00007f75ede138e5 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f75ede1504d in abort () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00007f75ede517f7 in __libc_message () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00007f75ede57126 in malloc_printerr () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00007f75eef9eac4 in odls_base_default_wait_local_proc (pid=14955,
</span><br>
<span class="quotelev1">&gt; status=768, cbdata=0x0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../orte/mca/odls/base/odls_base_default_fns.c:2007
</span><br>
<span class="quotelev1">&gt; #5  0x00007f75eef60a78 in do_waitall (options=0) at
</span><br>
<span class="quotelev1">&gt; ../../orte/runtime/orte_wait.c:554
</span><br>
<span class="quotelev1">&gt; #6  0x00007f75eef60712 in orte_wait_signal_callback (fd=17, event=8,
</span><br>
<span class="quotelev1">&gt; arg=0x7f75ef201400) at ../../orte/runtime/orte_wait.c:421
</span><br>
<span class="quotelev1">&gt; #7  0x00007f75eecaecbe in event_signal_closure (base=0x1278370,
</span><br>
<span class="quotelev1">&gt; ev=0x7f75ef201400)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1081
</span><br>
<span class="quotelev1">&gt; #8  0x00007f75eecaf7e0 in event_process_active_single_queue
</span><br>
<span class="quotelev1">&gt; (base=0x1278370, activeq=0x12788f0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1359
</span><br>
<span class="quotelev1">&gt; #9  0x00007f75eecafaca in event_process_active (base=0x1278370)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1437
</span><br>
<span class="quotelev1">&gt; #10 0x00007f75eecb0148 in opal_libevent2021_event_base_loop
</span><br>
<span class="quotelev1">&gt; (base=0x1278370, flags=1)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1645
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000405572 in orterun (argc=7, argv=0x7fffbdf1dd08) at
</span><br>
<span class="quotelev1">&gt; ../../../../orte/tools/orterun/orterun.c:1078
</span><br>
<span class="quotelev1">&gt; #12 0x0000000000403904 in main (argc=7, argv=0x7fffbdf1dd08) at
</span><br>
<span class="quotelev1">&gt; ../../../../orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #1  0x00007f75ede1504d in abort () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #2  0x00007f75ede517f7 in __libc_message () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #3  0x00007f75ede57126 in malloc_printerr () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #4  0x00007f75eef9eac4 in odls_base_default_wait_local_proc (pid=14955,
</span><br>
<span class="quotelev1">&gt; status=768, cbdata=0x0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../orte/mca/odls/base/odls_base_default_fns.c:2007
</span><br>
<span class="quotelev1">&gt; 2007                free(abortfile);
</span><br>
<span class="quotelev1">&gt; (gdb) print abortfile
</span><br>
<span class="quotelev1">&gt; $1 = 0x130e210 &quot;&quot;
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt; may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev1">&gt; distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the
</span><br>
<span class="quotelev1">&gt; sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15632.php">http://www.open-mpi.org/community/lists/devel/2014/08/15632.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15633/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15634.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="15632.php">Rolf vandeVaart: "[OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
<li><strong>In reply to:</strong> <a href="15632.php">Rolf vandeVaart: "[OMPI devel] Errors on aborting programs on 1.8 r32515"</a>
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

<?
$subject_val = "Re: [OMPI users] mpirun hanging after MPI_Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 00:31:03 2016" -->
<!-- isoreceived="20160219053103" -->
<!-- sent="Thu, 18 Feb 2016 21:31:00 -0800" -->
<!-- isosent="20160219053100" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hanging after MPI_Abort" -->
<!-- id="23439A4E-C417-41C4-B810-1037E1DDAFE6_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="009b01d16ace$230878a0$691969e0$_at_nci.org.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hanging after MPI_Abort<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-19 00:31:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28550.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28548.php">Ben Menadue: "[OMPI users] mpirun hanging after MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="28548.php">Ben Menadue: "[OMPI users] mpirun hanging after MPI_Abort"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Best options for debugging something like this are: -mca odls_base_verbose 5 -mca errmgr_base_verbose 5
<br>
<p>It&#226;&#128;&#153;ll generate a fair amount of output, so try to do it with a small job if you can. You&#226;&#128;&#153;ll need a build configured with -enable-debug to get the output.
<br>
<p><p><span class="quotelev1">&gt; On Feb 18, 2016, at 8:29 PM, Ben Menadue &lt;ben.menadue_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm investigating an issue with mpirun *sometimes* hanging after programs
</span><br>
<span class="quotelev1">&gt; call MPI_Abort... all of the MPI processes have terminated, however the
</span><br>
<span class="quotelev1">&gt; mpirun is still there. This happens with 1.8.8 and 1.10.2. There look to be
</span><br>
<span class="quotelev1">&gt; two threads, one in this path:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x00007fa09c3143b3 in select () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007fa09b001e2c in listen_thread (obj=0x7fa09b2109e8) at
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../orte/mca/oob/tcp/oob_tcp_listener.c:685
</span><br>
<span class="quotelev1">&gt; #2  0x00007fa09c5ceaa1 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007fa09c31b93d in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the other in this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0  0x00007fa09c312113 in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007fa09d318e7d in poll_dispatch (base=0x1568a80, tv=0x0) at
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../../opal/mca/event/libevent2021/libevent/poll.c:165
</span><br>
<span class="quotelev1">&gt; #2  0x00007fa09d30d96c in opal_libevent2021_event_base_loop (base=0x1568a80,
</span><br>
<span class="quotelev1">&gt; flags=1) at
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../../opal/mca/event/libevent2021/libevent/event.c:1633
</span><br>
<span class="quotelev1">&gt; #3  0x00000000004056fc in orterun (argc=2, argv=0x7ffe70248078) at
</span><br>
<span class="quotelev1">&gt; ../../../../../../../orte/tools/orterun/orterun.c:1142
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000403614 in main (argc=2, argv=0x7ffe70248078) at
</span><br>
<span class="quotelev1">&gt; ../../../../../../../orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But since this is in mpirun itself, I'm not sure how to delve deeper - is
</span><br>
<span class="quotelev1">&gt; there an MCA *_base_verbose parameter (or equivalent) that works on the
</span><br>
<span class="quotelev1">&gt; mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28548.php">http://www.open-mpi.org/community/lists/users/2016/02/28548.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28550.php">Siegmar Gross: "[OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28548.php">Ben Menadue: "[OMPI users] mpirun hanging after MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="28548.php">Ben Menadue: "[OMPI users] mpirun hanging after MPI_Abort"</a>
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

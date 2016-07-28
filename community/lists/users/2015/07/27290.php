<?
$subject_val = "Re: [OMPI users] MPI Process Abortion";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 19 11:34:23 2015" -->
<!-- isoreceived="20150719153423" -->
<!-- sent="Sun, 19 Jul 2015 08:34:19 -0700" -->
<!-- isosent="20150719153419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Process Abortion" -->
<!-- id="85BC66D1-B525-4F05-9FCA-DD746CED3B05_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPELB2b_hfeSF1cFmocwh+MCr1ftsjvZK_E0JUgSXsqm4k_fJA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Process Abortion<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-19 11:34:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27291.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Previous message:</strong> <a href="27289.php">Ralph Castain: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>In reply to:</strong> <a href="27286.php">Juan Liu: "[OMPI users] MPI Process Abortion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27293.php">Juan Liu: "Re: [OMPI users] MPI Process Abortion"</a>
<li><strong>Reply:</strong> <a href="27293.php">Juan Liu: "Re: [OMPI users] MPI Process Abortion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It really helps if you tell us what version of OMPI you are using :-)
<br>
<p>Regardless, this looks like a classic mismatch between the OMPI version used to compile the app versus the one being used for mpirun. You might want to make sure you have everything consistent
<br>
<p><p><span class="quotelev1">&gt; On Jul 18, 2015, at 2:21 PM, Juan Liu &lt;jlb3c_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some trouble when running the command : mpirun -np 2 foam.ups
</span><br>
<span class="quotelev1">&gt; Here is the error report I got:
</span><br>
<span class="quotelev1">&gt; Can anyone commend on this? Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [laptop:02500] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367
</span><br>
<span class="quotelev1">&gt; [laptop:02499] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ess_env_module.c at line 367
</span><br>
<span class="quotelev1">&gt; [laptop:02497] tcp_peer_recv_connect_ack: invalid header type: 707067904
</span><br>
<span class="quotelev1">&gt; [laptop:02497] tcp_peer_recv_connect_ack: invalid header type: 707067904
</span><br>
<span class="quotelev1">&gt; [(null):2499] *** An error occurred in MPI_Abort
</span><br>
<span class="quotelev1">&gt; [(null):2499] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [(null):2499] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [(null):2499] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; [(null):2500] *** An error occurred in MPI_Abort
</span><br>
<span class="quotelev1">&gt; [(null):2500] *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; [(null):2500] *** Unknown error
</span><br>
<span class="quotelev1">&gt; [(null):2500] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;   Local host: laptop
</span><br>
<span class="quotelev1">&gt;   PID:        2499
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;   Local host: laptop
</span><br>
<span class="quotelev1">&gt;   PID:        2500
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Process name: [[10789,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27286.php">http://www.open-mpi.org/community/lists/users/2015/07/27286.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27291.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Previous message:</strong> <a href="27289.php">Ralph Castain: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>In reply to:</strong> <a href="27286.php">Juan Liu: "[OMPI users] MPI Process Abortion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27293.php">Juan Liu: "Re: [OMPI users] MPI Process Abortion"</a>
<li><strong>Reply:</strong> <a href="27293.php">Juan Liu: "Re: [OMPI users] MPI Process Abortion"</a>
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

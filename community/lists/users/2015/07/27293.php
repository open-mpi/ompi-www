<?
$subject_val = "Re: [OMPI users] MPI Process Abortion";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 19 14:44:03 2015" -->
<!-- isoreceived="20150719184403" -->
<!-- sent="Sun, 19 Jul 2015 13:43:50 -0500" -->
<!-- isosent="20150719184350" -->
<!-- name="Juan Liu" -->
<!-- email="jlb3c_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Process Abortion" -->
<!-- id="CAPELB2aUfcn8xN4k4t=uPC6cK7ASfPEZemMPfT3CpEHncb0gJg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="85BC66D1-B525-4F05-9FCA-DD746CED3B05_at_open-mpi.org" -->
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
<strong>From:</strong> Juan Liu (<em>jlb3c_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-19 14:43:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27294.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Previous message:</strong> <a href="27292.php">Ralph Castain: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>In reply to:</strong> <a href="27290.php">Ralph Castain: "Re: [OMPI users] MPI Process Abortion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, thanks for the reply, the OMPI version I'm using is :  Open MPI
<br>
v1.8.7
<br>
<p>On Sun, Jul 19, 2015 at 10:34 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It really helps if you tell us what version of OMPI you are using :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, this looks like a classic mismatch between the OMPI version
</span><br>
<span class="quotelev1">&gt; used to compile the app versus the one being used for mpirun. You might
</span><br>
<span class="quotelev1">&gt; want to make sure you have everything consistent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 18, 2015, at 2:21 PM, Juan Liu &lt;jlb3c_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have some trouble when running the command : mpirun -np 2 foam.ups
</span><br>
<span class="quotelev2">&gt; &gt; Here is the error report I got:
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone commend on this? Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [laptop:02500] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ess_env_module.c at line 367
</span><br>
<span class="quotelev2">&gt; &gt; [laptop:02499] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ess_env_module.c at line 367
</span><br>
<span class="quotelev2">&gt; &gt; [laptop:02497] tcp_peer_recv_connect_ack: invalid header type: 707067904
</span><br>
<span class="quotelev2">&gt; &gt; [laptop:02497] tcp_peer_recv_connect_ack: invalid header type: 707067904
</span><br>
<span class="quotelev2">&gt; &gt; [(null):2499] *** An error occurred in MPI_Abort
</span><br>
<span class="quotelev2">&gt; &gt; [(null):2499] *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt; &gt; [(null):2499] *** Unknown error
</span><br>
<span class="quotelev2">&gt; &gt; [(null):2499] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt; &gt; [(null):2500] *** An error occurred in MPI_Abort
</span><br>
<span class="quotelev2">&gt; &gt; [(null):2500] *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt; &gt; [(null):2500] *** Unknown error
</span><br>
<span class="quotelev2">&gt; &gt; [(null):2500] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev2">&gt; &gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev2">&gt; &gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev2">&gt; &gt;   Local host: laptop
</span><br>
<span class="quotelev2">&gt; &gt;   PID:        2499
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev2">&gt; &gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev2">&gt; &gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev2">&gt; &gt;   Local host: laptop
</span><br>
<span class="quotelev2">&gt; &gt;   PID:        2500
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt; &gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev2">&gt; &gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Process name: [[10789,1],0]
</span><br>
<span class="quotelev2">&gt; &gt;   Exit code:    1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27286.php">http://www.open-mpi.org/community/lists/users/2015/07/27286.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27290.php">http://www.open-mpi.org/community/lists/users/2015/07/27290.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27293/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27294.php">Saliya Ekanayake: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Previous message:</strong> <a href="27292.php">Ralph Castain: "Re: [OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>In reply to:</strong> <a href="27290.php">Ralph Castain: "Re: [OMPI users] MPI Process Abortion"</a>
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

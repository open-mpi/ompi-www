<?
$subject_val = "Re: [OMPI users] MPI_ERR_COMM: invalid communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 12:40:28 2013" -->
<!-- isoreceived="20130305174028" -->
<!-- sent="Tue, 5 Mar 2013 09:40:22 -0800" -->
<!-- isosent="20130305174022" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_COMM: invalid communicator" -->
<!-- id="C6902949-C444-45DA-BF68-E70FF861E391_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAB-MRFQzRm-06ZS4HsDcnCK5Za-PqhQ4iriiKdqMvFE5JwYN1w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_COMM: invalid communicator<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 12:40:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21503.php">Chintu: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Previous message:</strong> <a href="21501.php">Chintu: "[OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>In reply to:</strong> <a href="21501.php">Chintu: "[OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21503.php">Chintu: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Reply:</strong> <a href="21503.php">Chintu: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check your code - it looks like you called MPI_Init and failed to call MPI_Finalize before exiting
<br>
<p>On Mar 5, 2013, at 9:07 AM, Chintu &lt;chintudcy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running my jobs on openmpi linux platform. I am getting the following errors: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-12-23.local:10203] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [compute-12-23.local:10203] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [compute-12-23.local:10203] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [compute-12-23.local:10203] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 11 with PID 10211 on
</span><br>
<span class="quotelev1">&gt; node compute-12-23.local exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-12-23.local:10199] 11 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [compute-12-23.local:10199] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; rm: cannot remove `/tmp/145890.1.normal/rsh': No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help or suggestion will be appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, 
</span><br>
<span class="quotelev1">&gt; Praveen
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21503.php">Chintu: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Previous message:</strong> <a href="21501.php">Chintu: "[OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>In reply to:</strong> <a href="21501.php">Chintu: "[OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21503.php">Chintu: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Reply:</strong> <a href="21503.php">Chintu: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
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

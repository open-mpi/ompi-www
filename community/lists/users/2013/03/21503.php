<?
$subject_val = "Re: [OMPI users] MPI_ERR_COMM: invalid communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 12:42:59 2013" -->
<!-- isoreceived="20130305174259" -->
<!-- sent="Tue, 5 Mar 2013 12:42:55 -0500" -->
<!-- isosent="20130305174255" -->
<!-- name="Chintu" -->
<!-- email="chintudcy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_COMM: invalid communicator" -->
<!-- id="CAB-MRFTKx0zd_CAYmj+wLUWbwpm4_aXDUf11teiQktLTRRXJvA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C6902949-C444-45DA-BF68-E70FF861E391_at_open-mpi.org" -->
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
<strong>From:</strong> Chintu (<em>chintudcy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 12:42:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21504.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Previous message:</strong> <a href="21502.php">Ralph Castain: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>In reply to:</strong> <a href="21502.php">Ralph Castain: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21504.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thank for your reply. But this is not the case that you mentioned,
<br>
everything is correct with the program.
<br>
<p>On Tue, Mar 5, 2013 at 12:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Check your code - it looks like you called MPI_Init and failed to call
</span><br>
<span class="quotelev1">&gt; MPI_Finalize before exiting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2013, at 9:07 AM, Chintu &lt;chintudcy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am running my jobs on openmpi linux platform. I am getting the
</span><br>
<span class="quotelev1">&gt; following errors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [compute-12-23.local:10203] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt; &gt; [compute-12-23.local:10203] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [compute-12-23.local:10203] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; [compute-12-23.local:10203] *** MPI_ERRORS_ARE_FATAL: your MPI job will
</span><br>
<span class="quotelev1">&gt; now abort
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun has exited due to process rank 11 with PID 10211 on
</span><br>
<span class="quotelev2">&gt; &gt; node compute-12-23.local exiting improperly. There are two reasons this
</span><br>
<span class="quotelev1">&gt; could occur:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt; &gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt; &gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt; &gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [compute-12-23.local:10199] 11 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev2">&gt; &gt; [compute-12-23.local:10199] Set MCA parameter &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev1">&gt; to 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt; &gt; rm: cannot remove `/tmp/145890.1.normal/rsh': No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any help or suggestion will be appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Praveen
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21503/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21504.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Previous message:</strong> <a href="21502.php">Ralph Castain: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>In reply to:</strong> <a href="21502.php">Ralph Castain: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21504.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
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

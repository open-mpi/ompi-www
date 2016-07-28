<?
$subject_val = "Re: [OMPI users] MPI_Reduce error over Infiniband or TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 11:29:02 2011" -->
<!-- isoreceived="20110705152902" -->
<!-- sent="Tue, 5 Jul 2011 09:28:54 -0600" -->
<!-- isosent="20110705152854" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce error over Infiniband or TCP" -->
<!-- id="1BA8D8F9-D553-41DA-AC5A-E4850A58CE85_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E12F397.22951.22A238F0_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce error over Infiniband or TCP<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 11:28:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16821.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16819.php">yanyg_at_[hidden]: "[OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<li><strong>In reply to:</strong> <a href="16819.php">yanyg_at_[hidden]: "[OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like your code is passing an invalid argument to MPI_Reduce...
<br>
<p><p>On Jul 5, 2011, at 9:20 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are testing Open MPI over Infiniband, and got a MPI_Reduce 
</span><br>
<span class="quotelev1">&gt; error message when we run our codes either over TCP or 
</span><br>
<span class="quotelev1">&gt; Infiniband interface, as follows,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; [gulftown:25487] *** An error occurred in MPI_Reduce
</span><br>
<span class="quotelev1">&gt; [gulftown:25487] *** on communicator MPI COMMUNICATOR 3 
</span><br>
<span class="quotelev1">&gt; CREATE FROM 0
</span><br>
<span class="quotelev1">&gt; [gulftown:25487] *** MPI_ERR_ARG: invalid argument of some 
</span><br>
<span class="quotelev1">&gt; other kind
</span><br>
<span class="quotelev1">&gt; [gulftown:25487] *** MPI_ERRORS_ARE_FATAL (your MPI job will 
</span><br>
<span class="quotelev1">&gt; now abort)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Elapsed time: 6:33.78
</span><br>
<span class="quotelev1">&gt; &lt;Done&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 25428 on
</span><br>
<span class="quotelev1">&gt; node gulftown exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any hints?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
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
<li><strong>Next message:</strong> <a href="16821.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="16819.php">yanyg_at_[hidden]: "[OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<li><strong>In reply to:</strong> <a href="16819.php">yanyg_at_[hidden]: "[OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
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

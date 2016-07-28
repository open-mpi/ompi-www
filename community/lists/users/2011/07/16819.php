<?
$subject_val = "[OMPI users] MPI_Reduce error over Infiniband or TCP";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 11:20:51 2011" -->
<!-- isoreceived="20110705152051" -->
<!-- sent="Tue, 5 Jul 2011 11:20:55 -0400" -->
<!-- isosent="20110705152055" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Reduce error over Infiniband or TCP" -->
<!-- id="4E12F397.22951.22A238F0_at_localhost" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Reduce error over Infiniband or TCP<br>
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_Reduce%20error%20over%20Infiniband%20or%20TCP"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-07-05 11:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16820.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<li><strong>Previous message:</strong> <a href="16818.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16820.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<li><strong>Reply:</strong> <a href="16820.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>We are testing Open MPI over Infiniband, and got a MPI_Reduce 
<br>
error message when we run our codes either over TCP or 
<br>
Infiniband interface, as follows,
<br>
<p><pre>
---
[gulftown:25487] *** An error occurred in MPI_Reduce
[gulftown:25487] *** on communicator MPI COMMUNICATOR 3 
CREATE FROM 0
[gulftown:25487] *** MPI_ERR_ARG: invalid argument of some 
other kind
[gulftown:25487] *** MPI_ERRORS_ARE_FATAL (your MPI job will 
now abort)
Elapsed time: 6:33.78
&lt;Done&gt;
--------------------------------------------------------------------------
mpirun has exited due to process rank 0 with PID 25428 on
node gulftown exiting without calling &quot;finalize&quot;. This may
have caused other processes in the application to be
terminated by signals sent by mpirun (as reported here).
--------------------------------------------------------------------------
---
Any hints?
Thanks,
Yiguang
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16820.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<li><strong>Previous message:</strong> <a href="16818.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16820.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<li><strong>Reply:</strong> <a href="16820.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
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

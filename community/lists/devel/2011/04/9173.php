<?
$subject_val = "[OMPI devel] Exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 21:52:23 2011" -->
<!-- isoreceived="20110414015223" -->
<!-- sent="Wed, 13 Apr 2011 19:52:14 -0600" -->
<!-- isosent="20110414015214" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Exit status" -->
<!-- id="E3598493-B49A-41EC-B731-337224F565C1_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Exit status<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 21:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9174.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9172.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9174.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9174.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've run across an interesting issue for which I don't have a ready answer.
<br>
<p>If an MPI process aborts, we automatically abort the entire job.
<br>
<p>If an MPI process returns a non-zero exit status, indicating that there was something abnormal about its termination, we ignore it and let the job continue. We do print an error message out upon completion of the job, but we don't terminate the job upon receiving the non-zero status. Note that non-zero status is considered a &quot;standard&quot; method of indicating abnormal termination, though no meaning has been agreed upon for the specific value.
<br>
<p>Should we be allowing the job to continue in that circumstance? In the case I'm reviewing, the user's code indicates there is an error in the result. Since he has already called MPI_Finalize, he can't call MPI_Abort, and his system won't allow him to drop cores by calling &quot;abort&quot;. So the exit status is his only way of indicating &quot;abnormal termination&quot;.
<br>
<p>Obviously, in this case, he would prefer the job terminate as nothing useful is going to be accomplished - so no point in tying up the machine.
<br>
<p>Thoughts?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9174.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9172.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9174.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9174.php">N.M. Maclaren: "Re: [OMPI devel] Exit status"</a>
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

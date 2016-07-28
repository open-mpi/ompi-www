<?
$subject_val = "[OMPI devel] Non-zero exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 17:18:20 2012" -->
<!-- isoreceived="20120413211820" -->
<!-- sent="Fri, 13 Apr 2012 15:18:12 -0600" -->
<!-- isosent="20120413211812" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Non-zero exit status" -->
<!-- id="5B77D1B4-74BB-4660-B42F-AEC52F016A36_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Non-zero exit status<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-13 17:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10867.php">TERRY DONTJE: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>Previous message:</strong> <a href="10865.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10867.php">TERRY DONTJE: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>Reply:</strong> <a href="10867.php">TERRY DONTJE: "Re: [OMPI devel] Non-zero exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has come up again because some of the MTT tests depend on a specific behavior when a process exits with a non-zero status - in this case, they expect ORTE to abort the job. At some point, the default had been switched to NOT abort the job if a process exited with a non-zero status.
<br>
<p>So I'll throw this out to the community: if any process exits with a non-zero status, should ORTE abort the job?
<br>
<p>I don't personally care, but we ought to decide on something. In the meantime, I will set the default so we DO abort, thus allowing the MTT runs to complete correctly.
<br>
<p>FWIW: the MCA param orte_abort_non_zero_exit can always be set to control this behavior.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10867.php">TERRY DONTJE: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>Previous message:</strong> <a href="10865.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re: r26255 has made openib unusable on Solaris platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10867.php">TERRY DONTJE: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>Reply:</strong> <a href="10867.php">TERRY DONTJE: "Re: [OMPI devel] Non-zero exit status"</a>
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

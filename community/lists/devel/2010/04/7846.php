<?
$subject_val = "[OMPI devel] MPI Forum question?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 18:52:19 2010" -->
<!-- isoreceived="20100429225219" -->
<!-- sent="Thu, 29 Apr 2010 16:52:10 -0600" -->
<!-- isosent="20100429225210" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI Forum question?" -->
<!-- id="B0138F58-502A-4EA4-A2BF-6201F054C654_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] MPI Forum question?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 18:52:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7845.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran into something this week that I think may require consideration by the MPI Forum. Specifically, Rolf found a problem in their MTT runs where the tests expect mpirun to return a non-zero exit status because one or more application processes did so, even though all application procs terminate normally.
<br>
<p>I jury-rigged a simple algo that has mpirun return the exit status of the lowest rank that returned non-zero in the case where the job terminated normally. We still return the exit code of the first process to abnormally terminate (i.e., the process that is first reported to the HNP - may not be the first process that aborted).
<br>
<p>However, it begs the question - what is the actual behavior supposed to be in the case where all procs terminate normally, but some may return (possibly different) non-zero codes?
<br>
<p>I asked a few MPI users, and got a different answer from every one of them. Only consistent response I got was that the MPI standard doesn't say what should happen (can someone confirm that?).
<br>
<p>Here is a sampling of the responses:
<br>
<p>1. return the exit status of the lowest rank that returned non-zero (which I implemented for now to silence Rolf's MTT problem)
<br>
<p>2. return the exit status of the highest rank that returned non-zero
<br>
<p>3. printout a histogram of exit statuses
<br>
&nbsp;&nbsp;&nbsp;- ranks 0-9: 0
<br>
&nbsp;&nbsp;&nbsp;- ranks 10-21,110: 1
<br>
&nbsp;&nbsp;&nbsp;- ranks 22-35,40-51: 2
<br>
&nbsp;&nbsp;&nbsp;...
<br>
<p>4. printout ALL the exit statuses
<br>
<p>5. ignore it - mpirun's exit code should only reflect OMPI internals. It is the app developer's responsibility to properly deal with non-zero exit conditions (e.g., by calling MPI_Abort).
<br>
<p>When I circled back around with these alternatives, I got the expected answer: everyone felt that all of them were good, and wanted a cmd line option to select the behavior for their job. They also noted that --xml should cause any of them to output in a defined xml format.
<br>
<p>As I told Rolf, I honestly don't care what we do in this case. All I ask for is a clearly defined behavior so I don't get yanked in multiple directions, constantly circling around from one solution to the next.
<br>
<p>So if the MPI standard doesn't specify this behavior, could someone involved in the Forum -please- get it to address this??
<br>
<p>In the interim, what do -we- think it should do?
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7845.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
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

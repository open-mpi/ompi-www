<?
$subject_val = "Re: [OMPI devel] MPI Forum question?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 21:07:00 2010" -->
<!-- isoreceived="20100430010700" -->
<!-- sent="Thu, 29 Apr 2010 19:06:51 -0600" -->
<!-- isosent="20100430010651" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Forum question?" -->
<!-- id="D0137A85-7C61-4083-9A5A-D2FC95CA1593_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2E0D7AEE-E5CC-4F50-8FBB-35DA8AD4FE03_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI Forum question?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 21:06:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7849.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7849.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - yet another set of options! :-)
<br>
<p>Good suggestion, though...
<br>
<p>On Apr 29, 2010, at 5:07 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if there is any standard ordering of non-zero exit status codes.  If so, another option would be to return the the largest (smallest) value, when that is the most serious exit status.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 29, 2010, at 3:52 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ran into something this week that I think may require consideration by the MPI Forum. Specifically, Rolf found a problem in their MTT runs where the tests expect mpirun to return a non-zero exit status because one or more application processes did so, even though all application procs terminate normally.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I jury-rigged a simple algo that has mpirun return the exit status of the lowest rank that returned non-zero in the case where the job terminated normally. We still return the exit code of the first process to abnormally terminate (i.e., the process that is first reported to the HNP - may not be the first process that aborted).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, it begs the question - what is the actual behavior supposed to be in the case where all procs terminate normally, but some may return (possibly different) non-zero codes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I asked a few MPI users, and got a different answer from every one of them. Only consistent response I got was that the MPI standard doesn't say what should happen (can someone confirm that?).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is a sampling of the responses:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. return the exit status of the lowest rank that returned non-zero (which I implemented for now to silence Rolf's MTT problem)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. return the exit status of the highest rank that returned non-zero
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. printout a histogram of exit statuses
</span><br>
<span class="quotelev2">&gt;&gt;  - ranks 0-9: 0
</span><br>
<span class="quotelev2">&gt;&gt;  - ranks 10-21,110: 1
</span><br>
<span class="quotelev2">&gt;&gt;  - ranks 22-35,40-51: 2
</span><br>
<span class="quotelev2">&gt;&gt;  ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. printout ALL the exit statuses
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 5. ignore it - mpirun's exit code should only reflect OMPI internals. It is the app developer's responsibility to properly deal with non-zero exit conditions (e.g., by calling MPI_Abort).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I circled back around with these alternatives, I got the expected answer: everyone felt that all of them were good, and wanted a cmd line option to select the behavior for their job. They also noted that --xml should cause any of them to output in a defined xml format.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As I told Rolf, I honestly don't care what we do in this case. All I ask for is a clearly defined behavior so I don't get yanked in multiple directions, constantly circling around from one solution to the next.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So if the MPI standard doesn't specify this behavior, could someone involved in the Forum -please- get it to address this??
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the interim, what do -we- think it should do?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7849.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7849.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
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

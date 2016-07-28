<?
$subject_val = "Re: [OMPI devel] MPI Forum question?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 19:07:19 2010" -->
<!-- isoreceived="20100429230719" -->
<!-- sent="Thu, 29 Apr 2010 16:07:13 -0700" -->
<!-- isosent="20100429230713" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Forum question?" -->
<!-- id="2E0D7AEE-E5CC-4F50-8FBB-35DA8AD4FE03_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B0138F58-502A-4EA4-A2BF-6201F054C654_at_open-mpi.org" -->
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
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 19:07:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7848.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7846.php">Ralph Castain: "[OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7846.php">Ralph Castain: "[OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7848.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7848.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7849.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I don't know if there is any standard ordering of non-zero exit status  
<br>
codes.  If so, another option would be to return the the largest  
<br>
(smallest) value, when that is the most serious exit status.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Apr 29, 2010, at 3:52 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I ran into something this week that I think may require  
</span><br>
<span class="quotelev1">&gt; consideration by the MPI Forum. Specifically, Rolf found a problem  
</span><br>
<span class="quotelev1">&gt; in their MTT runs where the tests expect mpirun to return a non-zero  
</span><br>
<span class="quotelev1">&gt; exit status because one or more application processes did so, even  
</span><br>
<span class="quotelev1">&gt; though all application procs terminate normally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I jury-rigged a simple algo that has mpirun return the exit status  
</span><br>
<span class="quotelev1">&gt; of the lowest rank that returned non-zero in the case where the job  
</span><br>
<span class="quotelev1">&gt; terminated normally. We still return the exit code of the first  
</span><br>
<span class="quotelev1">&gt; process to abnormally terminate (i.e., the process that is first  
</span><br>
<span class="quotelev1">&gt; reported to the HNP - may not be the first process that aborted).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it begs the question - what is the actual behavior supposed  
</span><br>
<span class="quotelev1">&gt; to be in the case where all procs terminate normally, but some may  
</span><br>
<span class="quotelev1">&gt; return (possibly different) non-zero codes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I asked a few MPI users, and got a different answer from every one  
</span><br>
<span class="quotelev1">&gt; of them. Only consistent response I got was that the MPI standard  
</span><br>
<span class="quotelev1">&gt; doesn't say what should happen (can someone confirm that?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a sampling of the responses:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. return the exit status of the lowest rank that returned non-zero  
</span><br>
<span class="quotelev1">&gt; (which I implemented for now to silence Rolf's MTT problem)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. return the exit status of the highest rank that returned non-zero
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. printout a histogram of exit statuses
</span><br>
<span class="quotelev1">&gt;   - ranks 0-9: 0
</span><br>
<span class="quotelev1">&gt;   - ranks 10-21,110: 1
</span><br>
<span class="quotelev1">&gt;   - ranks 22-35,40-51: 2
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. printout ALL the exit statuses
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. ignore it - mpirun's exit code should only reflect OMPI  
</span><br>
<span class="quotelev1">&gt; internals. It is the app developer's responsibility to properly deal  
</span><br>
<span class="quotelev1">&gt; with non-zero exit conditions (e.g., by calling MPI_Abort).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I circled back around with these alternatives, I got the  
</span><br>
<span class="quotelev1">&gt; expected answer: everyone felt that all of them were good, and  
</span><br>
<span class="quotelev1">&gt; wanted a cmd line option to select the behavior for their job. They  
</span><br>
<span class="quotelev1">&gt; also noted that --xml should cause any of them to output in a  
</span><br>
<span class="quotelev1">&gt; defined xml format.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I told Rolf, I honestly don't care what we do in this case. All I  
</span><br>
<span class="quotelev1">&gt; ask for is a clearly defined behavior so I don't get yanked in  
</span><br>
<span class="quotelev1">&gt; multiple directions, constantly circling around from one solution to  
</span><br>
<span class="quotelev1">&gt; the next.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if the MPI standard doesn't specify this behavior, could someone  
</span><br>
<span class="quotelev1">&gt; involved in the Forum -please- get it to address this??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the interim, what do -we- think it should do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7848.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7846.php">Ralph Castain: "[OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7846.php">Ralph Castain: "[OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7848.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7848.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7849.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
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

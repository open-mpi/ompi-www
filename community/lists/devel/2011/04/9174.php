<?
$subject_val = "Re: [OMPI devel] Exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 04:02:53 2011" -->
<!-- isoreceived="20110414080253" -->
<!-- sent="14 Apr 2011 09:02:48 +0100" -->
<!-- isosent="20110414080248" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Exit status" -->
<!-- id="Prayer.1.3.3.1104140902480.12538_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E3598493-B49A-41EC-B731-337224F565C1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Exit status<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 04:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9175.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9173.php">Ralph Castain: "[OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9173.php">Ralph Castain: "[OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9175.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9175.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14 2011, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;I've run across an interesting issue for which I don't have a ready answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If an MPI process aborts, we automatically abort the entire job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If an MPI process returns a non-zero exit status, indicating that there 
</span><br>
<span class="quotelev1">&gt; was something abnormal about its termination, we ignore it and let the 
</span><br>
<span class="quotelev1">&gt; job continue. We do print an error message out upon completion of the 
</span><br>
<span class="quotelev1">&gt; job, but we don't terminate the job upon receiving the non-zero status. 
</span><br>
<span class="quotelev1">&gt; Note that non-zero status is considered a &quot;standard&quot; method of indicating 
</span><br>
<span class="quotelev1">&gt; abnormal termination, though no meaning has been agreed upon for the 
</span><br>
<span class="quotelev1">&gt; specific value.
</span><br>
<p>Not really.  See below.
<br>
<p><span class="quotelev1">&gt; Should we be allowing the job to continue in that circumstance? In the 
</span><br>
<span class="quotelev1">&gt; case I'm reviewing, the user's code indicates there is an error in the 
</span><br>
<span class="quotelev1">&gt; result. Since he has already called MPI_Finalize, he can't call 
</span><br>
<span class="quotelev1">&gt; MPI_Abort, and his system won't allow him to drop cores by calling 
</span><br>
<span class="quotelev1">&gt; &quot;abort&quot;. So the exit status is his only way of indicating &quot;abnormal 
</span><br>
<span class="quotelev1">&gt; termination&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously, in this case, he would prefer the job terminate as nothing 
</span><br>
<span class="quotelev1">&gt; useful is going to be accomplished - so no point in tying up the machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thoughts?
</span><br>
<p>Blame Unix.  Seriously.  Many or most mainframes had the following
<br>
categories:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Complete success - or, rather, a failure to detect an error :-)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Partial success, with warnings of potential problems
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Failure that was diagnosed and partially cleaned-up
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Heap horrible failure - all bets are off
<br>
<p>Unix has no such categorisation.  The distinction between a zero return
<br>
and other values can occur at any point, and some programs even use them
<br>
as flags.  It's hopeless, and whatever you do will be wrong for many
<br>
people.  I have no idea what Microsoft do, but assume that it has copied
<br>
Unix, as that is its SOP.  I recommend NOT rocking this boat.
<br>
<p>He might do better by calling abort after MPI_Finalize, but that's
<br>
pretty iffy - just like all other approaches.  To improve this needs a
<br>
new function or argument to MPI_Finalize.
<br>
<p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9175.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Previous message:</strong> <a href="9173.php">Ralph Castain: "[OMPI devel] Exit status"</a>
<li><strong>In reply to:</strong> <a href="9173.php">Ralph Castain: "[OMPI devel] Exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9175.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
<li><strong>Reply:</strong> <a href="9175.php">Jeff Squyres: "Re: [OMPI devel] Exit status"</a>
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

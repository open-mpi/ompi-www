<?
$subject_val = "Re: [OMPI devel] Non-zero exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 13 18:33:46 2012" -->
<!-- isoreceived="20120413223346" -->
<!-- sent="Fri, 13 Apr 2012 15:32:57 -0700 (PDT)" -->
<!-- isosent="20120413223257" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Non-zero exit status" -->
<!-- id="4F88A999.3090508_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5B77D1B4-74BB-4660-B42F-AEC52F016A36_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Non-zero exit status<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-13 18:32:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>Previous message:</strong> <a href="10866.php">Ralph Castain: "[OMPI devel] Non-zero exit status"</a>
<li><strong>In reply to:</strong> <a href="10866.php">Ralph Castain: "[OMPI devel] Non-zero exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>Reply:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I could see if less then N processes exit with non-zero exit code that 
<br>
the ORTE may choose not to abort the job.  However, if all N processes 
<br>
have exited or aborted I expect everything to clean up and mpirun to 
<br>
exit.  It does not do that at the moment which I think is what is 
<br>
causing most of the hangs in the MTT trunk runs which did not occur 
<br>
prior to this week.
<br>
<p>--td
<br>
<p>On 4/13/2012 5:18 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; This has come up again because some of the MTT tests depend on a specific behavior when a process exits with a non-zero status - in this case, they expect ORTE to abort the job. At some point, the default had been switched to NOT abort the job if a process exited with a non-zero status.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'll throw this out to the community: if any process exits with a non-zero status, should ORTE abort the job?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't personally care, but we ought to decide on something. In the meantime, I will set the default so we DO abort, thus allowing the MTT runs to complete correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: the MCA param orte_abort_non_zero_exit can always be set to control this behavior.
</span><br>
<span class="quotelev1">&gt;
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
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10867/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>Previous message:</strong> <a href="10866.php">Ralph Castain: "[OMPI devel] Non-zero exit status"</a>
<li><strong>In reply to:</strong> <a href="10866.php">Ralph Castain: "[OMPI devel] Non-zero exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
<li><strong>Reply:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
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

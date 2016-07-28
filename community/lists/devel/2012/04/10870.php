<?
$subject_val = "Re: [OMPI devel] Non-zero exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 14 07:47:53 2012" -->
<!-- isoreceived="20120414114753" -->
<!-- sent="Sat, 14 Apr 2012 07:47:34 -0400" -->
<!-- isosent="20120414114734" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Non-zero exit status" -->
<!-- id="4F8963D6.3050606_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="679A40D8-6964-4301-A45B-EE57E05AB3E4_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-04-14 07:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10871.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10869.php">Evan Clinton: "[OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10882.php">Jeffrey Squyres: "[OMPI devel] Fwd:  Non-zero exit status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/13/2012 6:40 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Did you have the param set? I found some missing code in the orted 
</span><br>
<span class="quotelev1">&gt; errmgr that contributed to it, but unless you had set the param in 
</span><br>
<span class="quotelev1">&gt; your test, there is no way it would abort no matter how many procs 
</span><br>
<span class="quotelev1">&gt; exit with non-zero status.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Is mpirun sticking around after all procs have gone a bug?  If not then 
<br>
what is the use of leaving mpirun hanging around?
<br>
<span class="quotelev1">&gt; I'm guessing you have that param set in your test due to our earlier 
</span><br>
<span class="quotelev1">&gt; defining the default to &quot;no abort&quot;. I'm content to leave it there, but 
</span><br>
<span class="quotelev1">&gt; wanted to ensure your tests ran clean.
</span><br>
<p>I don't believe we are setting the env-var which is why I think we have 
<br>
a regression.  It also seems very suspicious to me that both Oracle and 
<br>
IU are seeing the same condition in MTT.  I'll look into this more on 
<br>
Monday.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2012, at 4:32 PM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I could see if less then N processes exit with non-zero exit code 
</span><br>
<span class="quotelev2">&gt;&gt; that the ORTE may choose not to abort the job.  However, if all N 
</span><br>
<span class="quotelev2">&gt;&gt; processes have exited or aborted I expect everything to clean up and 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun to exit.  It does not do that at the moment which I think is 
</span><br>
<span class="quotelev2">&gt;&gt; what is causing most of the hangs in the MTT trunk runs which did not 
</span><br>
<span class="quotelev2">&gt;&gt; occur prior to this week.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/13/2012 5:18 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This has come up again because some of the MTT tests depend on a specific behavior when a process exits with a non-zero status - in this case, they expect ORTE to abort the job. At some point, the default had been switched to NOT abort the job if a process exited with a non-zero status.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I'll throw this out to the community: if any process exits with a non-zero status, should ORTE abort the job?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't personally care, but we ought to decide on something. In the meantime, I will set the default so we DO abort, thus allowing the MTT runs to complete correctly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: the MCA param orte_abort_non_zero_exit can always be set to control this behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10870/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10871.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10869.php">Evan Clinton: "[OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>In reply to:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10882.php">Jeffrey Squyres: "[OMPI devel] Fwd:  Non-zero exit status"</a>
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

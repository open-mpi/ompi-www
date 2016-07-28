<?
$subject_val = "[OMPI devel] Fwd:  Non-zero exit status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 16 17:24:05 2012" -->
<!-- isoreceived="20120416212405" -->
<!-- sent="Mon, 16 Apr 2012 17:24:00 -0400" -->
<!-- isosent="20120416212400" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd:  Non-zero exit status" -->
<!-- id="2D9F62C8-CAE5-4080-8328-1991E0ED97BC_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd:  Non-zero exit status<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-16 17:24:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10883.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda item"</a>
<li><strong>Previous message:</strong> <a href="10881.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<li><strong>In reply to:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can we add this to the agenda tomorrow?
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Non-zero exit status
</span><br>
<span class="quotelev1">&gt; Date: April 13, 2012 6:40:53 PM EDT
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you have the param set? I found some missing code in the orted errmgr that contributed to it, but unless you had set the param in your test, there is no way it would abort no matter how many procs exit with non-zero status.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm guessing you have that param set in your test due to our earlier defining the default to &quot;no abort&quot;. I'm content to leave it there, but wanted to ensure your tests ran clean.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 13, 2012, at 4:32 PM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I could see if less then N processes exit with non-zero exit code that the ORTE may choose not to abort the job.  However, if all N processes have exited or aborted I expect everything to clean up and mpirun to exit.  It does not do that at the moment which I think is what is causing most of the hangs in the MTT trunk runs which did not occur prior to this week.
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
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10883.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda item"</a>
<li><strong>Previous message:</strong> <a href="10881.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<li><strong>In reply to:</strong> <a href="10868.php">Ralph Castain: "Re: [OMPI devel] Non-zero exit status"</a>
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

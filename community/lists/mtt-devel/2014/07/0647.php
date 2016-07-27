<?
$subject_val = "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	313f269f46faa4e797ef48791baac659f5cc93ea";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 11:48:35 2014" -->
<!-- isoreceived="20140721154835" -->
<!-- sent="Mon, 21 Jul 2014 15:48:34 +0000" -->
<!-- isosent="20140721154834" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	313f269f46faa4e797ef48791baac659f5cc93ea" -->
<!-- id="86381A9D-96DE-4241-9E64-C06EEF8DE6FD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140713113506.9BDD325F124_at_jaguar.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	313f269f46faa4e797ef48791baac659f5cc93ea<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-21 11:48:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/09/0648.php">Jeff Squyres (jsquyres): "[MTT devel] Migrating Trac wiki and tickets to Github"</a>
<li><strong>Previous message:</strong> <a href="0646.php">Jeff Squyres (jsquyres): "Re: [MTT devel] collecting OpenMPI info when the AlreadyInstalled	module is used"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch; thanks.
<br>
<p>On Jul 13, 2014, at 7:35 AM, MPI Team &lt;mpiteam_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  313f269f46faa4e797ef48791baac659f5cc93ea (commit)
</span><br>
<span class="quotelev1">&gt;      from  ec7436085d39893e9e87369801b8db44c2e57d14 (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/commit/313f269f46faa4e797ef48791baac659f5cc93ea">https://github.com/open-mpi/mtt/commit/313f269f46faa4e797ef48791baac659f5cc93ea</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 313f269f46faa4e797ef48791baac659f5cc93ea
</span><br>
<span class="quotelev1">&gt; Author: Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Sun Jul 13 14:28:31 2014 +0300
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    sub _kill_proc was renamed to _kill_proc_tree but old API was used.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; lib/MTT/Util.pm | 2 +-
</span><br>
<span class="quotelev1">&gt; 1 file changed, 1 insertion(+), 1 deletion(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/lib/MTT/Util.pm b/lib/MTT/Util.pm
</span><br>
<span class="quotelev1">&gt; index df2fa21..dd9fbf0 100644
</span><br>
<span class="quotelev1">&gt; --- a/lib/MTT/Util.pm
</span><br>
<span class="quotelev1">&gt; +++ b/lib/MTT/Util.pm
</span><br>
<span class="quotelev1">&gt; @@ -463,7 +463,7 @@ sub term_handler{
</span><br>
<span class="quotelev1">&gt; 	Verbose(&quot;###############################################################################\n&quot;);
</span><br>
<span class="quotelev1">&gt; 	$MTT::Globals::Values-&gt;{extra_subject} = &quot; ***Received $signame***&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -	MTT::DoCommand::_kill_proc($MTT::DoCommand::pid);
</span><br>
<span class="quotelev1">&gt; +	MTT::DoCommand::_kill_proc_tree($MTT::DoCommand::pid);
</span><br>
<span class="quotelev1">&gt; 	MTT::Reporter::QueueSubmit();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if ($trim) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt; lib/MTT/Util.pm | 2 +-
</span><br>
<span class="quotelev1">&gt; 1 file changed, 1 insertion(+), 1 deletion(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; MTT
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/09/0648.php">Jeff Squyres (jsquyres): "[MTT devel] Migrating Trac wiki and tickets to Github"</a>
<li><strong>Previous message:</strong> <a href="0646.php">Jeff Squyres (jsquyres): "Re: [MTT devel] collecting OpenMPI info when the AlreadyInstalled	module is used"</a>
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

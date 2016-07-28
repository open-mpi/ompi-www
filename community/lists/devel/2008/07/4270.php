<?
$subject_val = "Re: [OMPI devel] Error after commit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 14:48:25 2008" -->
<!-- isoreceived="20080703184825" -->
<!-- sent="Thu, 3 Jul 2008 11:48:15 -0700" -->
<!-- isosent="20080703184815" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error after commit" -->
<!-- id="FAF2C22A-E122-4494-93D7-B037BBFD3E50_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4926F4C.566C%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Error after commit<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 14:48:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4271.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4269.php">Ralph Castain: "[OMPI devel] Error after commit"</a>
<li><strong>In reply to:</strong> <a href="4269.php">Ralph Castain: "[OMPI devel] Error after commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4272.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>Reply:</strong> <a href="4272.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just did a commit and got the same error.  I'll followup with the IU  
<br>
admins; something probably didn't upgrade properly on the SVN side of  
<br>
the post-commit-hooks or somesuch.
<br>
<p><p>On Jul 3, 2008, at 10:58 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Not sure if anyone else is seeing this, but I got a strange error  
</span><br>
<span class="quotelev1">&gt; output
</span><br>
<span class="quotelev1">&gt; immediately following my last commit to the trunk:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warning: 'post-commit' hook failed with error output:
</span><br>
<span class="quotelev1">&gt; Traceback (most recent call last):
</span><br>
<span class="quotelev1">&gt;  File &quot;/opt/shnadm/rep/ompi/hooks/trac-post-commit-hook&quot;, line 200,  
</span><br>
<span class="quotelev1">&gt; in ?
</span><br>
<span class="quotelev1">&gt;    CommitHook()
</span><br>
<span class="quotelev1">&gt;  File &quot;/opt/shnadm/rep/ompi/hooks/trac-post-commit-hook&quot;, line 145, in
</span><br>
<span class="quotelev1">&gt; __init__
</span><br>
<span class="quotelev1">&gt;    self.env = open_environment(project)
</span><br>
<span class="quotelev1">&gt;  File &quot;/opt/trac/lib/python2.3/site-packages/trac/env.py&quot;, line 463,  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; open_environment
</span><br>
<span class="quotelev1">&gt;    if env.needs_upgrade():
</span><br>
<span class="quotelev1">&gt;  File &quot;/opt/trac/lib/python2.3/site-packages/trac/env.py&quot;, line 343,  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; needs_upgrade
</span><br>
<span class="quotelev1">&gt;    if participant.environment_needs_upgrade(db):
</span><br>
<span class="quotelev1">&gt;  File &quot;/opt/trac/lib/python2.3/site-packages/trac/env.py&quot;, line 401,  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; environment_needs_upgrade
</span><br>
<span class="quotelev1">&gt;    raise TracError, 'Database newer than Trac version'
</span><br>
<span class="quotelev1">&gt; trac.core.TracError: Database newer than Trac version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone have any insights? I know Trac was just updated - do we need  
</span><br>
<span class="quotelev1">&gt; to do
</span><br>
<span class="quotelev1">&gt; something to our local checkouts and/or systems? Note this commit  
</span><br>
<span class="quotelev1">&gt; was done
</span><br>
<span class="quotelev1">&gt; from milliways.osl.iu.edu, so perhaps there is some issue between the
</span><br>
<span class="quotelev1">&gt; systems at IU?
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4271.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4269.php">Ralph Castain: "[OMPI devel] Error after commit"</a>
<li><strong>In reply to:</strong> <a href="4269.php">Ralph Castain: "[OMPI devel] Error after commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4272.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<li><strong>Reply:</strong> <a href="4272.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
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

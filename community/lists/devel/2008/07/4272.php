<?
$subject_val = "Re: [OMPI devel] Error after commit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 15:30:05 2008" -->
<!-- isoreceived="20080703193005" -->
<!-- sent="Thu, 3 Jul 2008 15:29:57 -0400" -->
<!-- isosent="20080703192957" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Error after commit" -->
<!-- id="D5176D53-0479-4246-87F2-2F0A7758E059_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FAF2C22A-E122-4494-93D7-B037BBFD3E50_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-03 15:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4273.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4271.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4270.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem has now been fixed.
<br>
<p>Please let us know if you run into any further issues with the new  
<br>
version of trac.
<br>
<p><p>On Jul 3, 2008, at 2:48 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I just did a commit and got the same error.  I'll followup with the  
</span><br>
<span class="quotelev1">&gt; IU admins; something probably didn't upgrade properly on the SVN  
</span><br>
<span class="quotelev1">&gt; side of the post-commit-hooks or somesuch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 3, 2008, at 10:58 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not sure if anyone else is seeing this, but I got a strange error  
</span><br>
<span class="quotelev2">&gt;&gt; output
</span><br>
<span class="quotelev2">&gt;&gt; immediately following my last commit to the trunk:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Warning: 'post-commit' hook failed with error output:
</span><br>
<span class="quotelev2">&gt;&gt; Traceback (most recent call last):
</span><br>
<span class="quotelev2">&gt;&gt; File &quot;/opt/shnadm/rep/ompi/hooks/trac-post-commit-hook&quot;, line 200,  
</span><br>
<span class="quotelev2">&gt;&gt; in ?
</span><br>
<span class="quotelev2">&gt;&gt;   CommitHook()
</span><br>
<span class="quotelev2">&gt;&gt; File &quot;/opt/shnadm/rep/ompi/hooks/trac-post-commit-hook&quot;, line 145, in
</span><br>
<span class="quotelev2">&gt;&gt; __init__
</span><br>
<span class="quotelev2">&gt;&gt;   self.env = open_environment(project)
</span><br>
<span class="quotelev2">&gt;&gt; File &quot;/opt/trac/lib/python2.3/site-packages/trac/env.py&quot;, line 463,  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; open_environment
</span><br>
<span class="quotelev2">&gt;&gt;   if env.needs_upgrade():
</span><br>
<span class="quotelev2">&gt;&gt; File &quot;/opt/trac/lib/python2.3/site-packages/trac/env.py&quot;, line 343,  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; needs_upgrade
</span><br>
<span class="quotelev2">&gt;&gt;   if participant.environment_needs_upgrade(db):
</span><br>
<span class="quotelev2">&gt;&gt; File &quot;/opt/trac/lib/python2.3/site-packages/trac/env.py&quot;, line 401,  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev2">&gt;&gt; environment_needs_upgrade
</span><br>
<span class="quotelev2">&gt;&gt;   raise TracError, 'Database newer than Trac version'
</span><br>
<span class="quotelev2">&gt;&gt; trac.core.TracError: Database newer than Trac version
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone have any insights? I know Trac was just updated - do we need  
</span><br>
<span class="quotelev2">&gt;&gt; to do
</span><br>
<span class="quotelev2">&gt;&gt; something to our local checkouts and/or systems? Note this commit  
</span><br>
<span class="quotelev2">&gt;&gt; was done
</span><br>
<span class="quotelev2">&gt;&gt; from milliways.osl.iu.edu, so perhaps there is some issue between the
</span><br>
<span class="quotelev2">&gt;&gt; systems at IU?
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4273.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4271.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4270.php">Jeff Squyres: "Re: [OMPI devel] Error after commit"</a>
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

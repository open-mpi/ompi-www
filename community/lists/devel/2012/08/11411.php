<?
$subject_val = "Re: [OMPI devel] RFC: OMPI git mirror on github.com";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 18 08:46:32 2012" -->
<!-- isoreceived="20120818124632" -->
<!-- sent="Sat, 18 Aug 2012 08:46:27 -0400" -->
<!-- isosent="20120818124627" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OMPI git mirror on github.com" -->
<!-- id="29588F84-EDC9-4199-8F59-9A6F1C612E8A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F1C8323-688A-41A4-8D58-2BBEC8F55E47_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: OMPI git mirror on github.com<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-18 08:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11410.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11410.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11413.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 18, 2012, at 8:27 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; That's pretty clever, actually (SVN and git effectively together in the same repo).  Cool!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, migrating to git has all the same problems that I mentioned in the prior email to you.  Is Mellanox volunteering to do all the work for conversion?
</span><br>
<p><p>I guess I should clarify -- here's what I previously sent to Mike in an off-list email about converting our main SVN repo to something else (e.g., Mercurial or Git).  #3 is probably moot if we entirely move to github, but it would be replaced with &quot;migrate all existing users to github&quot; (which is a fair amount of work, too).
<br>
<p>-----
<br>
We have *many* discussions a year or two ago about making Mercurial the primary repo, not SVN, and ultimately rejected it.  There's many issues involved:
<br>
<p>1. developer learning curve 
<br>
&nbsp;--&gt; certainly not the biggest factor, but definitely a factor
<br>
&nbsp;--&gt; &quot;rebase&quot; would certainly be a big deal (so that people don't put back a million intermediate commits)
<br>
<p>2. adapting all of OMPI's current scripting to use hg (or git)
<br>
&nbsp;--&gt; this is a fair amount of work
<br>
<p>3. getting IU to host git instead of SVN
<br>
&nbsp;--&gt; they have a whole management system for SVN: users, permissions, etc.  No such thing exists for git.
<br>
<p>4. integrating Trac with git.  Or migrating to a whole new bug tracker that supports git.
<br>
&nbsp;--&gt; this is an entire conversation in itself.  Note that everyone hates bugzilla.
<br>
<p>5. re-writing the SVN history to find all references to &quot;rXXX&quot; in commit messages and replace them with the relevant hg (git) unique commit hash
<br>
&nbsp;--&gt; someone would have to figure out how to script that
<br>
<p>So conversion would be a significant amount of work.  Instead, we opted for our current modes of operation, which seem to be working well enough:
<br>
<p>- use the hg+svn or git+svn combo mechanisms to do actual development in hg/git and then push back up to svn when done
<br>
- provide hg (and now git) official mirrors so that people can branch/clone from there, and then provide patches to commit when done with development
<br>
<p>In short -- I agree with you: moving to 100% hg/git would be nice.  But it would be a lot of work that no one was willing to spend the time to do.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11410.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11410.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11413.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
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

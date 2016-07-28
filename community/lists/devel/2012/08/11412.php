<?
$subject_val = "Re: [OMPI devel] RFC: OMPI git mirror on github.com";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 18 10:16:09 2012" -->
<!-- isoreceived="20120818141609" -->
<!-- sent="Sat, 18 Aug 2012 07:16:00 -0700" -->
<!-- isosent="20120818141600" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OMPI git mirror on github.com" -->
<!-- id="FE976E47-AA2B-48B9-92D4-7E1FFEB3E8C9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="29588F84-EDC9-4199-8F59-9A6F1C612E8A_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-18 10:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11413.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11411.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11411.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11418.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11418.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, even if someone volunteered to do the conversion work, we wouldn't get agreement on making such a change. Some of us hate git (myself included), some feel similarly about mercurial, etc.
<br>
<p>Unfortunately, we've seen enough pain from git+svn to definitely not want to go that route.
<br>
<p>The current situation seems to be the best compromise, and works tolerably well (minus the odd, but rare, burble).
<br>
<p><p>On Aug 18, 2012, at 5:46 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 18, 2012, at 8:27 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's pretty clever, actually (SVN and git effectively together in the same repo).  Cool!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, migrating to git has all the same problems that I mentioned in the prior email to you.  Is Mellanox volunteering to do all the work for conversion?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I should clarify -- here's what I previously sent to Mike in an off-list email about converting our main SVN repo to something else (e.g., Mercurial or Git).  #3 is probably moot if we entirely move to github, but it would be replaced with &quot;migrate all existing users to github&quot; (which is a fair amount of work, too).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; We have *many* discussions a year or two ago about making Mercurial the primary repo, not SVN, and ultimately rejected it.  There's many issues involved:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. developer learning curve 
</span><br>
<span class="quotelev1">&gt; --&gt; certainly not the biggest factor, but definitely a factor
</span><br>
<span class="quotelev1">&gt; --&gt; &quot;rebase&quot; would certainly be a big deal (so that people don't put back a million intermediate commits)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. adapting all of OMPI's current scripting to use hg (or git)
</span><br>
<span class="quotelev1">&gt; --&gt; this is a fair amount of work
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. getting IU to host git instead of SVN
</span><br>
<span class="quotelev1">&gt; --&gt; they have a whole management system for SVN: users, permissions, etc.  No such thing exists for git.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. integrating Trac with git.  Or migrating to a whole new bug tracker that supports git.
</span><br>
<span class="quotelev1">&gt; --&gt; this is an entire conversation in itself.  Note that everyone hates bugzilla.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. re-writing the SVN history to find all references to &quot;rXXX&quot; in commit messages and replace them with the relevant hg (git) unique commit hash
</span><br>
<span class="quotelev1">&gt; --&gt; someone would have to figure out how to script that
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So conversion would be a significant amount of work.  Instead, we opted for our current modes of operation, which seem to be working well enough:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - use the hg+svn or git+svn combo mechanisms to do actual development in hg/git and then push back up to svn when done
</span><br>
<span class="quotelev1">&gt; - provide hg (and now git) official mirrors so that people can branch/clone from there, and then provide patches to commit when done with development
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In short -- I agree with you: moving to 100% hg/git would be nice.  But it would be a lot of work that no one was willing to spend the time to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="11413.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11411.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11411.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11418.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11418.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
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

<?
$subject_val = "Re: [OMPI devel] RFC: OMPI git mirror on github.com";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 18 11:43:17 2012" -->
<!-- isoreceived="20120818154317" -->
<!-- sent="Sat, 18 Aug 2012 15:42:46 +0000" -->
<!-- isosent="20120818154246" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OMPI git mirror on github.com" -->
<!-- id="5034DB19-BDF0-4692-9A8E-198D09EBCE14_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8CE1AF32-EBD6-4826-BCB4-A5F3AAC435B9_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-18 11:42:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11416.php">P. Martin: "[OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Previous message:</strong> <a href="11414.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11414.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: Ralph, I think Mike is proposing that we use the built in github SVN functionality. I.E., you can use git or SVN - both can read or write to the same backend repo. Pretty clever of github, actually. See the github blog entry he referenced, if you care.
<br>
<p>But I agree: although dvcs are very nice and have many upsides, this would be a large change and there are downsides, too. Would definitely require more discussion, developer buy in, and planning, at a minimum.
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Aug 18, 2012, at 11:28 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>On Aug 18, 2012, at 8:21 AM, Mike Dubman &lt;mike.ompi_at_[hidden]&lt;mailto:mike.ompi_at_[hidden]&gt;&gt; wrote:
<br>
<p>re item (5):
<br>
<p>The current svn tree can be set as read-only and serve as a reference for old commit numbers.
<br>
It is rarery used anyway to search through historic commit numbers and can be done in read-only historic tree.
<br>
<p>I use it a lot for old commits, but agree it is read-only for that purpose.
<br>
<p><p>All other items can use svn interface of guthub and stay w/o any change.
<br>
<p>Yeah, we've had experience with svn to git - no thanks!
<br>
<p><p>It is pretty minor change (mostly mental) and pretty big gain
<br>
<p>Guess we can agree to disagree - I found git to be awkward and a royal pain, especially when someone commits without doing a rebase (which happens a lot). No thanks.
<br>
<p><p><p><p><p><p>On Sat, Aug 18, 2012 at 3:46 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
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
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11415/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11416.php">P. Martin: "[OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Previous message:</strong> <a href="11414.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11414.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
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

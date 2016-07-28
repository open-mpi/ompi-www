<?
$subject_val = "Re: [OMPI devel] RFC: OMPI git mirror on github.com";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 18 11:21:47 2012" -->
<!-- isoreceived="20120818152147" -->
<!-- sent="Sat, 18 Aug 2012 18:21:20 +0300" -->
<!-- isosent="20120818152120" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OMPI git mirror on github.com" -->
<!-- id="CAL3GGtrMTUsqz9S_rqpGrFUrQd26hrN4wwactb8kYSB7j8StMg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-18 11:21:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11414.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11411.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11414.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11414.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
re item (5):
<br>
<p>The current svn tree can be set as read-only and serve as a reference for
<br>
old commit numbers.
<br>
It is rarery used anyway to search through historic commit numbers and can
<br>
be done in read-only historic tree.
<br>
<p>All other items can use svn interface of guthub and stay w/o any change.
<br>
<p>It is pretty minor change (mostly mental) and pretty big gain
<br>
<p><p><p><p>On Sat, Aug 18, 2012 at 3:46 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 18, 2012, at 8:27 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's pretty clever, actually (SVN and git effectively together in the
</span><br>
<span class="quotelev1">&gt; same repo).  Cool!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, migrating to git has all the same problems that I mentioned in
</span><br>
<span class="quotelev1">&gt; the prior email to you.  Is Mellanox volunteering to do all the work for
</span><br>
<span class="quotelev1">&gt; conversion?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess I should clarify -- here's what I previously sent to Mike in an
</span><br>
<span class="quotelev1">&gt; off-list email about converting our main SVN repo to something else (e.g.,
</span><br>
<span class="quotelev1">&gt; Mercurial or Git).  #3 is probably moot if we entirely move to github, but
</span><br>
<span class="quotelev1">&gt; it would be replaced with &quot;migrate all existing users to github&quot; (which is
</span><br>
<span class="quotelev1">&gt; a fair amount of work, too).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; We have *many* discussions a year or two ago about making Mercurial the
</span><br>
<span class="quotelev1">&gt; primary repo, not SVN, and ultimately rejected it.  There's many issues
</span><br>
<span class="quotelev1">&gt; involved:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. developer learning curve
</span><br>
<span class="quotelev1">&gt;  --&gt; certainly not the biggest factor, but definitely a factor
</span><br>
<span class="quotelev1">&gt;  --&gt; &quot;rebase&quot; would certainly be a big deal (so that people don't put back
</span><br>
<span class="quotelev1">&gt; a million intermediate commits)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. adapting all of OMPI's current scripting to use hg (or git)
</span><br>
<span class="quotelev1">&gt;  --&gt; this is a fair amount of work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. getting IU to host git instead of SVN
</span><br>
<span class="quotelev1">&gt;  --&gt; they have a whole management system for SVN: users, permissions, etc.
</span><br>
<span class="quotelev1">&gt;  No such thing exists for git.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. integrating Trac with git.  Or migrating to a whole new bug tracker
</span><br>
<span class="quotelev1">&gt; that supports git.
</span><br>
<span class="quotelev1">&gt;  --&gt; this is an entire conversation in itself.  Note that everyone hates
</span><br>
<span class="quotelev1">&gt; bugzilla.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. re-writing the SVN history to find all references to &quot;rXXX&quot; in commit
</span><br>
<span class="quotelev1">&gt; messages and replace them with the relevant hg (git) unique commit hash
</span><br>
<span class="quotelev1">&gt;  --&gt; someone would have to figure out how to script that
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So conversion would be a significant amount of work.  Instead, we opted
</span><br>
<span class="quotelev1">&gt; for our current modes of operation, which seem to be working well enough:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - use the hg+svn or git+svn combo mechanisms to do actual development in
</span><br>
<span class="quotelev1">&gt; hg/git and then push back up to svn when done
</span><br>
<span class="quotelev1">&gt; - provide hg (and now git) official mirrors so that people can
</span><br>
<span class="quotelev1">&gt; branch/clone from there, and then provide patches to commit when done with
</span><br>
<span class="quotelev1">&gt; development
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short -- I agree with you: moving to 100% hg/git would be nice.  But it
</span><br>
<span class="quotelev1">&gt; would be a lot of work that no one was willing to spend the time to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11414.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11412.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11411.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11414.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11414.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
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

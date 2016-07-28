<?
$subject_val = "Re: [OMPI devel] omni-release Github comment bot";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 09:53:15 2015" -->
<!-- isoreceived="20150205145315" -->
<!-- sent="Thu, 5 Feb 2015 06:53:11 -0800" -->
<!-- isosent="20150205145311" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] omni-release Github comment bot" -->
<!-- id="D8DE5B8C-FB0C-4FD7-8B89-03EE2818D1AE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="A14BCCF2-A738-4286-8D71-5CDDD72C763B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] omni-release Github comment bot<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-05 09:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16934.php">Mike Dubman: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16932.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>In reply to:</strong> <a href="16931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16935.php">Howard Pritchard: "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I like the concept and the proposed functionality. I also agree it should be a common format or else it will be too confusing.
<br>
<p>My &#226;&#128;&#156;RM-opinion&#226;&#128;&#157; is that someone pushing new commits to a PR should cause the RM-approved label to be removed. I&#226;&#128;&#153;m sure people wouldn&#226;&#128;&#153;t abuse it, but we shouldn&#226;&#128;&#153;t create a process that leaves someone with carte blanch to do whatever they want post-approval, or leave the RM in the position of having to guess that nothing major was changed since the approval.
<br>
<p><p><span class="quotelev1">&gt; On Feb 5, 2015, at 4:37 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A further thought:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we're going to make a *bunch* of bot commands for issues / PRs / comments, perhaps there should be a common form:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bot:label:LABEL
</span><br>
<span class="quotelev1">&gt; bot:nolabel:LABEL
</span><br>
<span class="quotelev1">&gt; bot:milestone:MILESTONE
</span><br>
<span class="quotelev1">&gt; bot:nomilestone
</span><br>
<span class="quotelev1">&gt; bot:assign:USER
</span><br>
<span class="quotelev1">&gt; bot:unassign
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bot:jenkins:retest
</span><br>
<span class="quotelev1">&gt; bot:jenkins:retest-thread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 5, 2015, at 7:20 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sounds cool and useful.
</span><br>
<span class="quotelev2">&gt;&gt; Also, does it make sense to have &quot;rebase&quot; knob to cause &quot;try rebase if no conflicts&quot; with upstream?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Feb 5, 2015 at 2:04 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gilles came up with a cool idea for the OMPIBot (see below).  We can do this idea, but I want to make sure that everyone is ok with it first.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Consider this scenario:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. You create a PR
</span><br>
<span class="quotelev2">&gt;&gt; 2. Over time, it gets reviewed, and then RM approved (i.e., the &quot;reviewed&quot; and &quot;rm-approved&quot; labels are added).
</span><br>
<span class="quotelev2">&gt;&gt; 3. *** But then new commits are pushed to the PR.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Technically, it should really be reviewed again before it is merged.  Here's what Gilles came up with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. The OMPIBot can tell when new commits are pushed, and can:
</span><br>
<span class="quotelev2">&gt;&gt;   4a) remove the &quot;reviewed&quot; label, and
</span><br>
<span class="quotelev2">&gt;&gt;   4b) add the &quot;pushed-back&quot; label
</span><br>
<span class="quotelev2">&gt;&gt; 5. Further, whenever someone adds the &quot;reviewed&quot; label, OMPIBot can automatically remove the &quot;pushed-back&quot; label.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I.e., when you add commits to an already-reviewed PR, you lose &quot;reviewed&quot;, but you get a positive signal in the form of the &quot;pushed-back&quot; label, reminding you that you need to get it reviewed again.  And when someone reviews it, it automatically removes the &quot;pushed-back&quot; label.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Finally, here's a question to the RM: if someone pushes new commits to a PR after it has been rm-approved, do you want the rm-approved label removed?  My gut feeling is &quot;no&quot; -- it stays approved.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 4, 2015, at 2:26 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; great stuff
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2015-02-04 5:55 GMT-07:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI devs --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Per lots of previous discussions, you all know that you can't assign labels, milestones, or users to issues/pull requests on the ompi-release repo.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles has written a Github bot that will allow you to do these things by inserting special tokens in the text of issues/pull requests/comments.  Here's an example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   This PR fixes problem XYZ.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   label:bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   label:enhancement
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   milestone:v1.8.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   assign:@jsquyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** PLEASE GO TRY IT on the sandbox ompi-release-bot repo.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's a fuller explanation of what OMPIBot does, and links to where you can try it out:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="https://github.com/open-mpi/ompi-release-bot/wiki">https://github.com/open-mpi/ompi-release-bot/wiki</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Once we get enough people to try it/fix any bugs/etc., we'll deploy it on the ompi-release repo.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16924.php">http://www.open-mpi.org/community/lists/devel/2015/02/16924.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16925.php">http://www.open-mpi.org/community/lists/devel/2015/02/16925.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16927.php">http://www.open-mpi.org/community/lists/devel/2015/02/16927.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kind Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; M.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16928.php">http://www.open-mpi.org/community/lists/devel/2015/02/16928.php</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16931.php">http://www.open-mpi.org/community/lists/devel/2015/02/16931.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16934.php">Mike Dubman: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16932.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] segmentation fault on an accumulate-fence test"</a>
<li><strong>In reply to:</strong> <a href="16931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16935.php">Howard Pritchard: "Re: [OMPI devel] omni-release Github comment bot"</a>
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

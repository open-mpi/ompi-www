<?
$subject_val = "Re: [OMPI devel] omni-release Github comment bot";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 11:25:41 2015" -->
<!-- isoreceived="20150205162541" -->
<!-- sent="Thu, 5 Feb 2015 11:25:39 -0500" -->
<!-- isosent="20150205162539" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] omni-release Github comment bot" -->
<!-- id="CAMJJpkXdjZSfqDygTrVfwqspPyK+iB+a6Tz_S0PjMeGXAAEAfw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="82A3BE5A-2D24-43C8-AB00-6014547F16AC_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-05 11:25:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16938.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16936.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>In reply to:</strong> <a href="16936.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16938.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Reply:</strong> <a href="16938.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The RM should not be expected to read and accept the code itself, but his
<br>
role should be limited to accepting the idea behind the patch and making
<br>
sure it is compatible with the rules in place. As such, removing the
<br>
RM-approval mark is not yielding any benefits.
<br>
<p>Moreover, based on the ideas proposed above (any modification removes the
<br>
reviewed marker), if the scenario depicted by Ralph happens again I would
<br>
argue that the reviewers would have done a sloppy job at allowing the patch
<br>
to drift from it's original specification (the one approved by the RM).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Feb 5, 2015 at 10:33 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2015, at 7:17 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles ideas are great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree with your RM stamp of approval policy. No removal of rm approved
</span><br>
<span class="quotelev1">&gt; in the event of subsequent commits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I disagree, so perhaps that should be something settable by the RM for a
</span><br>
<span class="quotelev1">&gt; given release? I&#226;&#128;&#153;ve been burned before where I approved something, then
</span><br>
<span class="quotelev1">&gt; someone added a bunch of unrelated code that caused a significant change
</span><br>
<span class="quotelev1">&gt; (i.e., modifying prior behavior) without warning. Result: users yelling,
</span><br>
<span class="quotelev1">&gt; chasing it down, reverting half of the commit, and then re-releasing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;d rather not have that happen again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2015 5:04 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles came up with a cool idea for the OMPIBot (see below).  We can do
</span><br>
<span class="quotelev2">&gt;&gt; this idea, but I want to make sure that everyone is ok with it first.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Consider this scenario:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. You create a PR
</span><br>
<span class="quotelev2">&gt;&gt; 2. Over time, it gets reviewed, and then RM approved (i.e., the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;reviewed&quot; and &quot;rm-approved&quot; labels are added).
</span><br>
<span class="quotelev2">&gt;&gt; 3. *** But then new commits are pushed to the PR.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Technically, it should really be reviewed again before it is merged.
</span><br>
<span class="quotelev2">&gt;&gt; Here's what Gilles came up with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. The OMPIBot can tell when new commits are pushed, and can:
</span><br>
<span class="quotelev2">&gt;&gt;    4a) remove the &quot;reviewed&quot; label, and
</span><br>
<span class="quotelev2">&gt;&gt;    4b) add the &quot;pushed-back&quot; label
</span><br>
<span class="quotelev2">&gt;&gt; 5. Further, whenever someone adds the &quot;reviewed&quot; label, OMPIBot can
</span><br>
<span class="quotelev2">&gt;&gt; automatically remove the &quot;pushed-back&quot; label.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I.e., when you add commits to an already-reviewed PR, you lose
</span><br>
<span class="quotelev2">&gt;&gt; &quot;reviewed&quot;, but you get a positive signal in the form of the &quot;pushed-back&quot;
</span><br>
<span class="quotelev2">&gt;&gt; label, reminding you that you need to get it reviewed again.  And when
</span><br>
<span class="quotelev2">&gt;&gt; someone reviews it, it automatically removes the &quot;pushed-back&quot; label.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Finally, here's a question to the RM: if someone pushes new commits to a
</span><br>
<span class="quotelev2">&gt;&gt; PR after it has been rm-approved, do you want the rm-approved label
</span><br>
<span class="quotelev2">&gt;&gt; removed?  My gut feeling is &quot;no&quot; -- it stays approved.
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
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +1
</span><br>
<span class="quotelev3">&gt;&gt; &gt; great stuff
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2015-02-04 5:55 GMT-07:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OMPI devs --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Per lots of previous discussions, you all know that you can't assign
</span><br>
<span class="quotelev2">&gt;&gt; labels, milestones, or users to issues/pull requests on the ompi-release
</span><br>
<span class="quotelev2">&gt;&gt; repo.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gilles has written a Github bot that will allow you to do these things
</span><br>
<span class="quotelev2">&gt;&gt; by inserting special tokens in the text of issues/pull requests/comments.
</span><br>
<span class="quotelev2">&gt;&gt; Here's an example:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    This PR fixes problem XYZ.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    label:bug
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    label:enhancement
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    milestone:v1.8.5
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    assign:@jsquyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; *** PLEASE GO TRY IT on the sandbox ompi-release-bot repo.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Here's a fuller explanation of what OMPIBot does, and links to where
</span><br>
<span class="quotelev2">&gt;&gt; you can try it out:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     <a href="https://github.com/open-mpi/ompi-release-bot/wiki">https://github.com/open-mpi/ompi-release-bot/wiki</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Once we get enough people to try it/fix any bugs/etc., we'll deploy it
</span><br>
<span class="quotelev2">&gt;&gt; on the ompi-release repo.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16924.php">http://www.open-mpi.org/community/lists/devel/2015/02/16924.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16925.php">http://www.open-mpi.org/community/lists/devel/2015/02/16925.php</a>
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
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16927.php">http://www.open-mpi.org/community/lists/devel/2015/02/16927.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16935.php">http://www.open-mpi.org/community/lists/devel/2015/02/16935.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16936.php">http://www.open-mpi.org/community/lists/devel/2015/02/16936.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16937/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16938.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16936.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>In reply to:</strong> <a href="16936.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16938.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Reply:</strong> <a href="16938.php">Ralph Castain: "Re: [OMPI devel] omni-release Github comment bot"</a>
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

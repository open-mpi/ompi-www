<?
$subject_val = "Re: [OMPI devel] omni-release Github comment bot";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 10:33:58 2015" -->
<!-- isoreceived="20150205153358" -->
<!-- sent="Thu, 5 Feb 2015 07:33:55 -0800" -->
<!-- isosent="20150205153355" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] omni-release Github comment bot" -->
<!-- id="82A3BE5A-2D24-43C8-AB00-6014547F16AC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAF1Cqj4-OAjQhAK29owqHA-W2_nCb7VO5L57V1ruU0kSqyboeQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-05 10:33:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16937.php">George Bosilca: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16935.php">Howard Pritchard: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>In reply to:</strong> <a href="16935.php">Howard Pritchard: "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16937.php">George Bosilca: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Reply:</strong> <a href="16937.php">George Bosilca: "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<span class="quotelev1">&gt; I agree with your RM stamp of approval policy. No removal of rm approved in the event of subsequent commits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I disagree, so perhaps that should be something settable by the RM for a given release? I&#226;&#128;&#153;ve been burned before where I approved something, then someone added a bunch of unrelated code that caused a significant change (i.e., modifying prior behavior) without warning. Result: users yelling, chasing it down, reverting half of the commit, and then re-releasing.
<br>
<p>I&#226;&#128;&#153;d rather not have that happen again.
<br>
<p><span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2015 5:04 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Gilles came up with a cool idea for the OMPIBot (see below).  We can do this idea, but I want to make sure that everyone is ok with it first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider this scenario:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. You create a PR
</span><br>
<span class="quotelev1">&gt; 2. Over time, it gets reviewed, and then RM approved (i.e., the &quot;reviewed&quot; and &quot;rm-approved&quot; labels are added).
</span><br>
<span class="quotelev1">&gt; 3. *** But then new commits are pushed to the PR.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; Technically, it should really be reviewed again before it is merged.  Here's what Gilles came up with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. The OMPIBot can tell when new commits are pushed, and can:
</span><br>
<span class="quotelev1">&gt;    4a) remove the &quot;reviewed&quot; label, and
</span><br>
<span class="quotelev1">&gt;    4b) add the &quot;pushed-back&quot; label
</span><br>
<span class="quotelev1">&gt; 5. Further, whenever someone adds the &quot;reviewed&quot; label, OMPIBot can automatically remove the &quot;pushed-back&quot; label.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e., when you add commits to an already-reviewed PR, you lose &quot;reviewed&quot;, but you get a positive signal in the form of the &quot;pushed-back&quot; label, reminding you that you need to get it reviewed again.  And when someone reviews it, it automatically removes the &quot;pushed-back&quot; label.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, here's a question to the RM: if someone pushes new commits to a PR after it has been rm-approved, do you want the rm-approved label removed?  My gut feeling is &quot;no&quot; -- it stays approved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 4, 2015, at 2:26 PM, Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +1
</span><br>
<span class="quotelev2">&gt; &gt; great stuff
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2015-02-04 5:55 GMT-07:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; OMPI devs --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Per lots of previous discussions, you all know that you can't assign labels, milestones, or users to issues/pull requests on the ompi-release repo.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles has written a Github bot that will allow you to do these things by inserting special tokens in the text of issues/pull requests/comments.  Here's an example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    This PR fixes problem XYZ.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    label:bug
</span><br>
<span class="quotelev2">&gt; &gt;    label:enhancement
</span><br>
<span class="quotelev2">&gt; &gt;    milestone:v1.8.5
</span><br>
<span class="quotelev2">&gt; &gt;    assign:@jsquyres
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** PLEASE GO TRY IT on the sandbox ompi-release-bot repo.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's a fuller explanation of what OMPIBot does, and links to where you can try it out:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="https://github.com/open-mpi/ompi-release-bot/wiki">https://github.com/open-mpi/ompi-release-bot/wiki</a> &lt;<a href="https://github.com/open-mpi/ompi-release-bot/wiki">https://github.com/open-mpi/ompi-release-bot/wiki</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Once we get enough people to try it/fix any bugs/etc., we'll deploy it on the ompi-release repo.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16924.php">http://www.open-mpi.org/community/lists/devel/2015/02/16924.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/02/16924.php">http://www.open-mpi.org/community/lists/devel/2015/02/16924.php</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16925.php">http://www.open-mpi.org/community/lists/devel/2015/02/16925.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/02/16925.php">http://www.open-mpi.org/community/lists/devel/2015/02/16925.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16927.php">http://www.open-mpi.org/community/lists/devel/2015/02/16927.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/02/16927.php">http://www.open-mpi.org/community/lists/devel/2015/02/16927.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16935.php">http://www.open-mpi.org/community/lists/devel/2015/02/16935.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16936/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16937.php">George Bosilca: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Previous message:</strong> <a href="16935.php">Howard Pritchard: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>In reply to:</strong> <a href="16935.php">Howard Pritchard: "Re: [OMPI devel] omni-release Github comment bot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16937.php">George Bosilca: "Re: [OMPI devel] omni-release Github comment bot"</a>
<li><strong>Reply:</strong> <a href="16937.php">George Bosilca: "Re: [OMPI devel] omni-release Github comment bot"</a>
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
